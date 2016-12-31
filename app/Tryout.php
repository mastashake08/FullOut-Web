<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tryout extends Model
{
    //
    protected $guarded = [];
    public function school(){
      return $this->belongsTo('App\School');
    }
}
