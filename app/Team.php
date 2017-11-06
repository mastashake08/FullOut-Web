<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
    protected $guarded = [];
    public function school(){
      return $this->belongsTo('App\School');
    }
    public function skillSet(){
      return $this->hasOne('App\Skill');
    }
    public function alerts(){
      return $this->hasMany('App\Sos');
    }
}
