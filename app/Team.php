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
}
