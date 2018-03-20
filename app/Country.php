<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $guarded = [];

    public function address()
    {
    	return $this->hasMany('App\Address');
    }
}
