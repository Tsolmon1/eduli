<?php namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Country;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Storage;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class ArticlesController extends Controller {

    /**
     *Create a new articles controller instance
     */
    // public function __construct()
    // {
    //     $this->middleware('auth', ['except' => 'show']);
    // }
    /**
     * @return \Illuminate\View\View
     */
    public function index()
	{
		$articles = Article::latest('created_at')->paginate(12);

        return view('articles.index', compact('articles'));
	}
    
    public function all()
    {
        $articles = Article::latest('created_at')->published()->paginate(10);
        

         return view('articles.all', compact('articles'));
    }

    /**
     * @param Article $article
     * @return \Illuminate\View\View
     * @internal param $id
     */
    public function show(Article $article)
    {
        // dd($article);
//        $caregory = Category:: {!! \GrahamCampbell\Markdown\Facades\Markdown::convertToHtml( $country->name ) !!}
        $zar_news = Category::findOrFail(1)->articles()->latest('created_at')->limit('3')->get();
		$busad_news = Category::findOrFail(12)->articles()->latest('created_at')->limit('3')->get();

        
        
        return view('articles.show', compact('article','zar_news','busad_news'));
    }
    
    public function tetgeleg(Article $article)
    {
        // dd($article);
//        $caregory = Category:: {!! \GrahamCampbell\Markdown\Facades\Markdown::convertToHtml( $country->name ) !!}
        $zar_news = Category::findOrFail(1)->articles()->latest('created_at')->limit('3')->get();
        $busad_news = Category::findOrFail(12)->articles()->latest('created_at')->limit('3')->get();
        
        return view('articles.tetgeleg', compact('article'));
    }

    public function news(Article $article)
    {
        // dd($article);
//        $caregory = Category:: {!! \GrahamCampbell\Markdown\Facades\Markdown::convertToHtml( $country->name ) !!}
        // if()
        $zar_news = Category::findOrFail(1)->articles()->latest('created_at')->limit('3')->get();
		$busad_news = Category::findOrFail(12)->articles()->latest('created_at')->limit('3')->get();

        if($article->type == 'fill'){
            return view('articles.full_article', compact('article'));
        }else{
            return view('articles.show', compact('article','zar_news','busad_news'));
        }
        
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // $country_list = Country::pluck('id')->all();
        $countries = Country::pluck('name','id');
        $categories = Category::pluck('name', 'id');
        // dd($countries);
        return view('articles.create', compact('categories','countries'));
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'required|integer',
            'title' => 'required|max:255',
            'info' => 'required',
            'content' => 'required',
            'published_at' => 'required|date',
            'thumbnail' => 'required',
        ]);
        // $file = $request->file('thumbnail');
        // $ext = $file->guessClientExtension();
        // $now = date('Ymd-His');
        // $filename = ''.$now. '-thumb-300x200.'. $ext .'';

        // $path = public_path('uploads');
        // $path = '/home/eduline/public_html/uploads/';
        // if ($file->isValid()){

        //     $upload_success = $file->move($path, $filename);
        //     Image::make($upload_success)
        //         ->fit(300,200)
        //         ->save();

                // Image::make($file)
                //     ->fit(300)
                //     ->save($path. '' .$thumbnail);
            // dd($article);
        //     $article = Auth::user()->articles()->create(array('category_id'=> $request->input('category_id'), 'title'=> $request->input('title'), 'content'=> $request->input('content'),'published_at'=> $request->input('published_at'), 'thumbnail' => $request->input('thumbnail')));
        // }
        // dd($request->input('country_list'));
        // $article = $this->createArticle($request);
        $article = Auth::user()->articles()->create($request->all());

        $article->countries()->attach($request->input('country_list'));
        // flash()->success('Шинээр нийтлэл үүсгэгдлээ');
                    
        return redirect('admin/articles');
    }

    /**
     * @param Article $article
     * @return \Illuminate\View\View
     */
    public function edit(Article $article)
    {
        // dd($article->country_list);    //country_list[]);
        $countries = Country::pluck('name','id')->all();
        $categories = Category::pluck('name', 'id')->all();
        
        return view('articles.edit', compact('article', 'categories','countries'));
    }

    public function update(Request $request, Article $article)
    {
        $this->validate($request, [
            'category_id' => 'required|integer',
            'title' => 'required|max:255',
            'info' => 'required',
            'content' => 'required',
            'published_at' => 'required|date',
            'thumbnail' => 'required',
            'image' => 'max:255'
        ]);
        // dd($request->input('country_list'));
        $article->update($request->all());
        $article->countries()->detach($article->country_list);
        $article->countries()->attach($request->input('country_list'));
//        $this->SyncTags($articles, $request->input('tag_list'));

        return redirect('admin/articles');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        //$article->tags()->detach();

        return redirect('admin/articles');
    }

    /**
     * Sync up the last of tags in the database
     *
     * @param Article $article
     * @param array $tags
     */
//    private function SyncCategories(Article $article, array $category)
//    {
//        $article->category()->sync($category);
//    }

    /**
     * Save a new articles
     *
     * @param ArticleRequest $request
     */
    // private function createArticle(ArticleRequest $request)
    // {

    //     $article = Auth::user()->articles()->create($request->all());

    //     return $article;
    // }

}
