<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function tags()
    {
    	return $this->belongsToMany('App\Tag', 'post_tag');
    }

    public function comments()
    {
    	return $this->morphMany('App\Comment', 'commentable');
    }
}
