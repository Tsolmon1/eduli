<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model {

	protected $fillable = ['country_id','name','description', 'cover_image'];

	public function country()
    {
        return $this->belongsTo('App\Country');
    }
	
	public function photos()
    {
        return $this->hasMany('App\Photo');
    }
}
