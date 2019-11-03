<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    public $fillable = ['user_id', 'role_id', 'description'];
}
