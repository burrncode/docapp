<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function specialities()
    {
        return $this->hasMany('App\Model\Speciality');
    }

    public function comments()
    {
        return $this>hasMany('App\Model\Comment')
    }

    public function role()
    {
        return $this->belongsTo('App\Model\Role');
    }
}
