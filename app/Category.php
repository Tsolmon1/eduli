<?php namespace App;


use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    protected $fillable = ['name'];

    public function articles()
    {
        return $this->hasMany('App\Article');
    }
    public function items()
    {
        return $this->hasMany('App\Item');
    }

    // public function getCountryArticles($id)
    // {
    // 	// return \App\Country::find($id)->articles();
    // 	// $users = DB::table('Category')
    //  //        ->leftJoin('posts', 'users.id', '=', 'posts.user_id')
    //  //        ->get();
    // }

}
