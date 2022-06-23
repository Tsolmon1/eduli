<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth', ['except' => []]);
    // }
    
    public function index()
    {
        $users = User::all();
        // $users = User::paginate(5);
        return view('users.index', compact('users'));
    }
    
    public function show($id)
	{
		//
	}
    
    public function create()
    {
        return view('users.create');
    }
    
    public function store()
    {
        $input = Input::all();
        $validation = Validator::make($input, User::$rules);

        if ($validation->passes())
        {
            User::create($input);

            return Redirect::route('users.index');
        }

        return Redirect::route('users.create')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }
    
    public function edit($id)
    {
        $user = User::find($id);
        if (is_null($user))
        {
            return Redirect::route('users.index');
        }
        return View('users.edit', compact('user'));
    }
    
    public function destroy($id)
	{
		//
	}
    
}
