<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    protected $dates = ['start_datetime', 'end_datetime'];
    protected $guarded = [];
    public function school(){
      return $this->belongsTo('App\School');
    }
    public function team(){
        return $this->belongsTo('App\Team');
    }
}
