<?php

namespace App\Http\Controllers;

use App\Models\phone;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        //return User::find(1)->phone;
        //return phone::find(1)->user;
        //return User::find(1)->roles;
        return Role::find(2)->users;
    }
}
