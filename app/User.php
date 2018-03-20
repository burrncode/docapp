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

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function patient()
    {
        return $this->hasOne('App\Patient');
    }

    public function doctor()
    {
        return $this->hasOne('App\Doctor');
    }

    public function practices()
    {
        return $this->belongsToMany('App\Practice');
    }

    public function posts()
    {
        return $this->hasMany('App\Post');
    }    

    public function addresses()
    {
        return $this->morphBy('App\Address', 'addressable');
    }
}
