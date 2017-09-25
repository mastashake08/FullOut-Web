<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
    protected $fillable = ['user_id','embed'];

    public function user(){
      return $this->belongsTo('App\User');
    }
}
