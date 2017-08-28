<?php

namespace App;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use NotificationChannels\WebPush\HasPushSubscriptions;
class User extends Authenticatable
{
    use Notifiable, HasApiTokens, HasPushSubscriptions;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone','address','password', 'type','city','state','zip','gender'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    public function school(){
      return $this->hasOne('App\School');
    }

    public function skillSet(){
      return $this->hasOne('App\Skill');
    }
    public function sentMessages(){
      return $this->hasMany('App\Message','sender_id','id');
    }
    public function messages(){
      return $this->hasMany('App\Message','receiver_id','id');
    }


}
