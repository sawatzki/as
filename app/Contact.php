<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Contact extends Model
{
    public $fillable = ['name', 'user_id'];

    public function insertContact($request){

        dump($request);

        $validateData = $request->validate([
            'name' => 'required',
        ]);
        die();
        #$validateData['user_id'] = Auth::user()->id;

        $cont = new Contact($validateData);

        $cont->save();

    }
}
