<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $primaryKey = 'campaign_id';

    public function clients(){
        return $this->belongsTo('App\Client','client_id','client_id');
    }

    public function articles(){
        return $this->hasMany('App\Article');
    }

    public function users(){
        return $this->belongsToMany('App\User','campaign_users','campaign_id','user_id');
    }
}
