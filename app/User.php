<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'isAdmin','password','user_type','provience_id','district_id','local_state_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function district()
    {
        return $this->hasOne('App\District','district_id');
    }

    public function provience()
    {
        return $this->hasOne('App\Provience','province_id','provience_id');
    }

    public function localState()
    {
        return $this->hasOne('App\LocalState','local_state_id');
    }
}
