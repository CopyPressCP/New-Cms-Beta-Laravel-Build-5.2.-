<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $primaryKey = 'user_id';

    public function roles(){
        return $this->belongsTo('App\Role','role_id','role_id');
    }

    public function clients(){
        return $this->belongsTo('App\Client','client_id','client_id');
    }

    public function campaigns(){
        return $this->belongsToMany('App\Campaign','campaign_id','campaign_id');
    }
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
}
