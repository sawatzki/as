<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Contact extends Model
{
    public $fillable = ['name', 'user_id'];

    public function insertContact($data)
    {
        $this->name = $data['contact_name'];
        $this->user_id = $data['user_id'];
        return $this->saveOrFail();
    }

    public function updateContact($data)
    {

        $this->name = $data['contact_name'];
        $this->user_id = $data['user_id'];echo "1111111";

        return $this->update();
    }

}
