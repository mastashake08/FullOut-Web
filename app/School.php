<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //
    protected $guarded = [];
    public function coaches(){
      return $this->hasMany('App\Coach');
    }
    public function teams(){
      return $this->hasMany('App\Team');
    }
    public function clinics(){
      return $this->hasMany('App\Clinic');
    }
    public function tryouts(){
      return $this->hasMany('App\Tryout');
    }
    public function user(){
      return $this->belongsTo('App\User');
    }
    public function scholarships(){
      return $this->hasMany('App\Scholarship');
    }
}
