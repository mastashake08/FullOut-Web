<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    //
    protected $guarded = [];
    protected $casts = [
//      'spring_floor_tumbling_skills' => 'array',
//      'hard_floor_tumbling_skills' => 'array',
//      'group_stunting_skills' => 'array',
//      'coed_stunting_skills' => 'array'
    ];
    public function user(){
      return $this->belongsTo('App\User');
    }
    public function team(){
      return $this->belongsTo('App\Team');
    }

    public function getSpringFloorTumblingSkillsAttribute($value){
        return json_decode($value, true);
    }
    public function getHardFloorTumblingSkillsAttribute($value){
        return json_decode($value, true);
    }
    public function getGroupStuntingSkillsAttribute($value){
        return json_decode($value, true);
    }
    public function getCoedStuntingSkillsAttribute($value){
        return json_decode($value, true);
    }
}
