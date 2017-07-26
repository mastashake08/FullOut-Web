<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    //
    public $guarded = [];
    public function school(){
      return $this->belongsTo('App\School');
    }
}
