<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $guarded = [];

    public function country()
    {
    	return $this->belongsTo('App\Country');
    }    

    public function addressable()
    {
    	return $this->morphTo();
    }
}
