<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    //
    protected $fillable = [
      'user_id','cheerleader_id','school_id', 'team_id'
    ];

    public function cheerleader(){
      return $this->hasOne('App\User','id','cheerleader_id');
    }

    public function school(){
      return $this->hasOne('App\School');
    }

    public function user(){
      return $this->belongsTo('App\User');
    }

    public function team(){
      return $this->belongsTo('App\Team');
    }

    public function scopeFavoriteTeam($query, $teamId)
    {
        return $query->whereIn('team_id', $teamId);
    }

}
