<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    protected $guarded = [];

    public function doctors()
    {
    	return $this->belongsToMany('App\Doctor', 'speciality_user', 'user_id', 'speciality_id');
    }
}
