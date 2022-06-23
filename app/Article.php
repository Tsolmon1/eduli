<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    protected $fillable = ['category_id','title', 'info','content', 'type', 'published_at','thumbnail','image','type'];

    protected $dates = ['published_at'];

    public function scopePublished($query)
    {
        $query->where('published_at','<=',Carbon::now());
    }

    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::parse($date)->format('Y-m-d');
    }

    /**
     *  Get the published_at attribute
     *
     * @param $date
     * @return string
     */
    public function getPublishedAtAttribute($date)
    {
        return Carbon::parse($date)->format('Y-m-d');
    }
    /**
     * An articles is owned by a user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    
    public function countries()
    {
        return $this->belongsToMany('App\Country')->withTimestamps();
    }
    
    public function getCountryListAttribute()
    {
        return $this->countries()->pluck('id')->all();
    }

}
