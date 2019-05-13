<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Contact extends Model
{
    public $fillable = ['name', 'user_id'];

    public function insertContact($validatedData)
    {
        $this->name = $validatedData['name'];
        $this->user_id = $validatedData['user_id'];
        return $this->saveOrFail();
    }
}
