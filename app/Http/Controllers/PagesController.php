<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {


    public function about()
    {
        $name = 'Одхүү';
        $people = ['Одхүү','Uugaa','Naraa','Boloroo'];

        return view('pages.about', compact('name'),compact('people'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function page()
    {
        return view('pages.usa_news');
    }

    public function korea_page()
    {
        return view('pages.korea_news');
    }

    public function country()
    {
        return view('pages.country');
    }
}
