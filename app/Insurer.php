<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insurer extends Model
{
    protected $guarded = [];

    public function users()
    {
    	return $this->belongsToMany('App\User', 'insurer_user');
    }

    public function addresses()
    {
    	return $this->morphMany('App\Address', 'addressable');
    }

    public function doctors()
    {
        return $this->belongsToMany('App\Doctor', 'insurer_user', 'insurer_id', 'user_id');
    }
}