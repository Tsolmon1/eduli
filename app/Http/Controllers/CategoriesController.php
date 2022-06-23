<?php namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Illuminate\Support\Facades\Input;

class CategoriesController extends Controller {

    /**
     *Create a new articles controller instance
     */
    // public function __construct()
    // {
    //     $this->middleware('auth', ['except' => ['show']]);
    // }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $categories = Category::all();

        return view('categories.index', compact('categories'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('categories.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, [
            'name' => 'required',
        ]);
		
        Category::create($request->all());
//        flash()->success('Шинээр нийтлэл үүсгэгдлээ');

        return redirect('admin/categories');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $articles = Category::findOrFail($id)->articles()->latest('created_at')->published()->paginate(12);
        $category = Category::findOrFail($id);
        return view('categories.show',compact('articles', 'category'));
	}

	public function tetegleg($id)
	{
        $articles = Category::findOrFail($id)->articles()->latest('created_at')->published()->paginate(8);
        $category = Category::findOrFail($id);

        return view('categories.tetegleg',compact('articles', 'category', 'helnii_beltgel'));
	}
    
    public function category($id)
	{
        $articles = Category::findOrFail($id)->articles()->latest('created_at')->published()->paginate(12);
        $category = Category::findOrFail($id);
        return view('categories.show',compact('articles', 'category'));
	}
    
    public function about($id)
	{
        $articles = Category::findOrFail($id)->articles()->orderBy('id', 'asc')->published()->paginate(12);
        $category = Category::findOrFail($id);
        return view('categories.show',compact('articles', 'category'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $category = Category::findOrFail($id);

        return view('categories.edit',compact('category'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$this->validate($request, [
            'name' => 'required',
        ]);
        
        $category = Category::findOrFail($id);

        $category->update($request->all());

        return redirect('admin/categories');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $category = User::findOfFail($id);

        $category->delete();

        return redirect('admin/articles');
	}

}
