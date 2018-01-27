<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['user_id', 'name', 'datetime', 'address', 'created_at', 'updated_at'];

    public function user (){
        return $this->belongsTo('App\User');
    }
}
