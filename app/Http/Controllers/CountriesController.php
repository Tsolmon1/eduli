<?php namespace App\Http\Controllers;

use App\Article;
use App\Country;
use App\School;
use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

use Illuminate\Http\Request;

class CountriesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$countries = Country::all();
		
		return view('countries.index', compact('countries'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('countries.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, [
            'banner' => 'required',
            'name' => 'required',
            'flag' => 'required',
            'content' => 'required'
        ]);

		$country = Country::create($request->all());


        flash()->success('Шинээр нийтлэл үүсгэгдлээ');

        return redirect('admin/countries');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$country = Country::findOrFail($id);
		$schools = Country::findOrFail($id)->schools()->orderBy('rank')->get();
		$articles = Category::findOrFail($id+6)->articles()->orderBy('created_at')->get();
		$article_zar = Country::findOrFail($id)->articles()->latest()->limit('3')->published()->get();
		$albums = Country::findOrFail($id)->albums()->latest()->limit('3')->get();
		
  		return view('countries.show', compact('country', 'articles','schools','albums', 'article_zar'));
	}
    
    public function country($id)
	{
		$country = Country::findOrFail($id);
		$schools = Country::findOrFail($id)->schools()->orderBy('rank')->get();
		$articles = Category::findOrFail($id+6)->articles()->orderBy('created_at')->get();
		$article_zar = Country::findOrFail($id)->articles()->latest()->limit('3')->published()->get();
		$albums = Country::findOrFail($id)->albums()->latest()->limit('3')->get();
  		// $article_zar = Country::findOrFail($id)->articles()->latest()->limit('4')->published()->get();
  		$tetgeleg_hb = $country->articles()->where('category_id', 17)->first();
  		$tetgeleg_b = $country->articles()->where('category_id', 18)->first();
  		$tetgeleg_m = $country->articles()->where('category_id', 19)->first();


		return view('countries.show', compact('country', 'articles','schools','albums', 'article_zar','tetgeleg_hb','tetgeleg_b','tetgeleg_m'));
	}
    
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$country = Country::findOrFail($id);

        return view('countries.edit', compact('country'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$this->validate($request, [
            'banner' => 'required',
            'name' => 'required',
            'flag' => 'required',
            'content' => 'required'
        ]);
        
		$country = Country::findOrFail($id);

		$country->update($request->all());

		return redirect('admin/countries');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
