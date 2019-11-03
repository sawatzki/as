<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    public $fillable = ['user_id', 'role_id',];
}
