<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'password',
    ];

    public function notes(){
        return $this->hasMany('App\Models\Note');
    }

    public function userRoles(){
        return $this->hasMany('App\RoleUser');
    }

}
