<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
    protected $guarded = [];

    public function doctors()
    {
    	return $this->belongsToMany('App\Doctor', 'practice_user', 'practice_id','user_id');
    }
}
