<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('contact','PagesController@contact')->name('contact');
Route::get('news', 'ArticlesController@all')->name('all_news');
Route::get('news/{articles}', 'ArticlesController@news')->name('news.show');
Route::get('lessons','HomeController@lessons')->name('lesson');
Route::get('usa_news','PagesController@page')->name('usa_pages');
Route::get('korea_news','PagesController@korea_page')->name('korea_pages');
Route::get('galleries', 'AlbumsController@all')->name('galleries');
Route::get('album/{albums}', 'AlbumsController@album')->name('album');
Route::get('country/{countries}', 'CountriesController@country')->name('country');
Route::get('allschools', 'SchoolsController@schools')->name('all_schools');
Route::get('school/{schools}', 'SchoolsController@school')->name('school');
Route::get('about/{categories}', 'CategoriesController@about')->name('about.cat');
Route::get('category/{categories}', 'CategoriesController@category')->name('category');
Route::get('tetgeleg/{articles}', 'ArticlesController@tetgeleg')->name('tetgeleg');
Route::get('about', 'PagesController@about')->name('about');

Route::get('/admin', 'HomeController@admin');


Route::group(['middleware' => ['auth']], function () {

	Route::get('admin/users', function(){

		$users = \App\User::orderby('created_at', 'desc')->get();

		return view('admin.users', [
			'users' => $users
		]);
	});
	Route::get('admin/users/edit/{id}', 'UsersController@edit')->name('admin.user.edit');
	// 	if (\Gate::allows('admin-access')) {
	//        //Access granted - эрх олгогдсон
	//        //logic code - edit user
	// 		return 'Access granted.';
	//     }
	//     return 'Access denied.';
	// });

	Route::get('/admin/articles', function(){
		return view('admin.articles');
	});


	Route::get('admin/categories/create', 'CategoriesController@create')->name('admin.categories.create');
	Route::post('admin/categories', 'CategoriesController@store')->name('admin.categories.store');
	Route::get('admin/categories', 'CategoriesController@index')->name('admin.categories');
	Route::get('admin/categories/{id}/edit', 'CategoriesController@edit')->name('admin.categories.edit');
	Route::put('admin/categories/{id}', 'CategoriesController@update')->name('admin.categories.update');
	Route::patch('admin/categories/{id}', 'CategoriesController@update')->name('admin.categories.update');
	Route::delete('admin/categories/{id}', 'CategoriesController@destroy')->name('admin.categories.destroy');

	Route::get('admin/articles/create', 'ArticlesController@create')->name('admin.articles.create');
	Route::post('admin/articles', 'ArticlesController@store')->name('admin.articles.store');
	Route::get('admin/articles', 'ArticlesController@index')->name('admin.articles');
	Route::get('admin/articles/{articles}/edit', 'ArticlesController@edit')->name('admin.articles.edit');
	Route::put('admin/articles/{articles}', 'ArticlesController@update')->name('admin.articles.update');
	Route::patch('admin/articles/{articles}', 'ArticlesController@update')->name('admin.articles.update');
	Route::delete('admin/articles/{articles}', 'ArticlesController@destroy')->name('admin.articles.destroy');

	Route::get('admin/photos/create', 'PhotosController@create')->name('admin.photos.create');
	Route::post('admin/photos', 'PhotosController@store')->name('admin.photos.store');
	Route::get('admin/photos', 'PhotosController@index')->name('admin.photos');
	Route::get('admin/photos/{photos}/edit', 'PhotosController@edit')->name('admin.photos.edit');
	Route::put('admin/photos/{photos}', 'PhotosController@update')->name('admin.photos.update');
	Route::patch('admin/photos/{photos}', 'PhotosController@update')->name('admin.photos.update');
	Route::delete('admin/photos/{photos}', 'PhotosController@destroy')->name('admin.photos.destroy');

	Route::get('admin/albums/create', 'AlbumsController@create')->name('admin.albums.create');
	Route::post('admin/albums', 'AlbumsController@store')->name('admin.albums.store');
	Route::get('admin/albums', 'AlbumsController@index')->name('admin.albums');
	Route::get('admin/albums/{albums}/edit', 'AlbumsController@edit')->name('admin.albums.edit');
	Route::put('admin/albums/{albums}', 'AlbumsController@update')->name('admin.albums.update');
	Route::patch('admin/albums/{albums}', 'AlbumsController@update')->name('admin.albums.update');
	Route::delete('admin/albums/{albums}', 'AlbumsController@destroy')->name('admin.albums.destroy');

	Route::get('admin/schools/create', 'SchoolsController@create')->name('admin.schools.create');
	Route::post('admin/schools', 'SchoolsController@store')->name('admin.schools.store');
	Route::get('admin/schools', 'SchoolsController@index')->name('admin.schools');
	Route::get('admin/schools/{schools}/edit', 'SchoolsController@edit')->name('admin.schools.edit');
	Route::put('admin/schools/{schools}', 'SchoolsController@update')->name('admin.schools.update');
	Route::patch('admin/schools/{schools}', 'SchoolsController@update')->name('admin.schools.update');
	Route::delete('admin/schools/{schools}', 'SchoolsController@destroy')->name('admin.schools.destroy');

	Route::post('admin/settings', 'SettingsController@store')->name('admin.settings.store');
	Route::get('admin/settings', 'SettingsController@index')->name('admin.settings');

});