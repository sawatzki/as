<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function showRoles(){
        $roles = Role::all();
        return view('users.roles', ['roles'=>$roles]);
    }

    public function showRoles2(){
        $roles = Role::all();
        return view('users.roles', ['roles'=>$roles]);
    }


    public function showDetails(User $user){
        return view('users.details', ['user'=>$user]);
    }

    public function showAll(){
        $users = User::all();
        return view('users.show', ['users'=>$users]);
    }
}
