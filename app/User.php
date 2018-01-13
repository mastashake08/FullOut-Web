<?php

namespace App;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use NotificationChannels\WebPush\HasPushSubscriptions;
use Laravel\Cashier\Billable;
class User extends Authenticatable
{
    use Notifiable, HasApiTokens, HasPushSubscriptions, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'school_id', 'name', 'email', 'phone','address','password', 'type','city','state','zip','gender','height','weight','current_team'
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
//      return $this->hasOne('App\School');
        return $this->belongsTo('App\School','school_id','id');
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

    public function favorites()
    {
        return $this->hasMany('App\Favorite');
    }

    public function favorited(){
      return $this->hasMany('App\Favorite','cheerleader_id','id');
    }
    public function videos(){
      return $this->hasMany('App\Video');
    }
    public function awards(){
      return $this->hasMany('App\Award');
    }
    public function mainInformationCoach(){
      return $this->hasOne('App\MainInformationCoach');
    }
    public function mainInformationStudent(){
      return $this->hasOne('App\MainInformationStudent');
    }

    public static function teamIsFavorited($user_id, $team_id)
    {
        if ((Favorite::where([['user_id', $user_id], ['team_id', $team_id]])->count()) > 0) {

            return true;
        }

        return false;
    }
}
