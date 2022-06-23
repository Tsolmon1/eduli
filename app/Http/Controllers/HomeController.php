<?php

namespace App\Http\Controllers;
use Cache;
use Illuminate\Http\Request;
use App\School;
use App\Category;
use App\Album;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools= School::limit('4')->orderByRaw('RAND()')->get();
        $zar_news = Category::findOrFail(1)->articles()->latest('created_at')->limit('3')->published()->get();
        $busad_news = Category::findOrFail(12)->articles()->latest('created_at')->limit('3')->published()->get();
        $students = Category::findOrFail(5)->articles()->latest('updated_at')->limit('2')->published()->orderByRaw('RAND()')->get();
        $albums = Album::limit('3')->where('country_id', '<', 6)->orderByRaw('RAND()')->get();

        $main_boxs = array_collapse([
            [Cache::get('settings_elselt_box_1'), Cache::get('settings_elselt_box_2')], 
            [Cache::get('settings_news_box_image'), Cache::get('settings_news_box_link')], 
            [Cache::get('settings_slide_title_1'), Cache::get('settings_slide_path_1'), Cache::get('settings_slide_link_1')], 
            [Cache::get('settings_slide_title_2'), Cache::get('settings_slide_path_2'), Cache::get('settings_slide_link_2')]
            ]);

        return view('home', compact('zar_news','busad_news', 'students', 'albums', 'schools','main_boxs'));
    }

    public function admin()
    {
        return view('admin');
    }

    public function map()
    {
        return view('partials.map');
    }
    
    public function slide()
    {
        return view('home', compact('items'));
    }
    
     /* public function welcome()
     {
         $schools= School::limit('4')->orderByRaw('RAND()')->get();
         $zar_news = Category::findOrFail(1)->articles()->latest('created_at')->limit('4')->published()->get();
         $busad_news = Category::findOrFail(12)->articles()->latest('created_at')->limit('4')->published()->get();
         $busad_news2 = Category::findOrFail(12)->articles()->latest('created_at')->limit('4')->published()->get();
         $students = Category::findOrFail(5)->articles()->latest('updated_at')->limit('4')->published()->orderByRaw('RAND()')->get();
         $albums = Album::limit('2')->where('country_id', '<', 6)->orderByRaw('RAND()')->get();

         $main_slide = array_collapse([
             [Cache::get('settings_slide_title_1'), Cache::get('settings_slide_path_1'), Cache::get('settings_slide_link_1')], 
             [Cache::get('settings_slide_title_2'), Cache::get('settings_slide_path_2'), Cache::get('settings_slide_link_2')]
             ]);
        
         return view('welcome', compact('items','zar_news','busad_news', 'students', 'albums', 'schools', 'busad_news2','main_slide'));
     } */
    
    public function lessons()
    {
        $english_albums = Album::findOrFail(24)->photos()->latest('created_at')->get();
        $korea_albums = Album::findOrFail(25)->photos()->latest('created_at')->get();
        $korea_lesson_news = Category::findOrFail(16)->articles()->latest('created_at')->published()->limit('6')->get();
        $english_lesson_news = Category::findOrFail(14)->articles()->latest('created_at')->published()->limit('6')->get();
        
        return view('lessons', compact('english_albums','korea_albums','korea_lesson_news','english_lesson_news'));
    }
}
