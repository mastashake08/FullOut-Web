<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    //
    protected $fillable = [
      'award'
    ];

    public function user(){
      return $this->belongsTo('App\User');
    }
}
