<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sos extends Model
{
    //
    protected $fillable = [
      'description','needed_date','needed_skills'
    ];

    public function team(){
      return $this->belongsTo('App\Team');
    }
}
