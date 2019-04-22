<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function show_roles(){

        $roles = Role::all();
        return view('users.show_roles', ['roles'=>$roles]);
    }

    public function show(){
        $users = User::all();
        return view('users.show', ['users'=>$users]);
    }
}
