<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public $fillable = ['user_id', 'title', 'description'];

    function store($note){
//        return $this->hasMany('App\Models\Note');
    }
}
