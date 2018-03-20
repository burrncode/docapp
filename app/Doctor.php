<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $guarded = [];

    public function user()
    {
    	return $this->belongsTo('App\User')->withDefault();
    }

    public function insurers()
    {
        return $this->belongsToMany('App\Insurer', 'insurer_user', 'user_id', 'insurer_id');
    }

    public function practices()
    {
    	return $this->belongsToMany('App\Practice', 'practice_user', 'user_id', 'practice_id');
    }

    public function specialities()
    {
    	return $this->belongsToMany('App\Doctor', 'speciality_user', 'speciality_id', 'user_id');
    }
}