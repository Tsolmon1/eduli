<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // protected $fillable = ['name', 'code'];

    public function users() {
        return $this->belongsToMany('\App\User');
    }

    public function articles() {
        return $this->belongsToMany('\App\Articles');
    }
}
