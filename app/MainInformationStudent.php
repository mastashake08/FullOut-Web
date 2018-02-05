<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainInformationStudent extends Model
{
    protected $guarded = [];

    public function getCheertypeAttribute($value)
    {
        return  json_decode($value);
    }
}
