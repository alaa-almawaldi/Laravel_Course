<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index($id){
        return User::find($id)->name;
    }
    public function store(){
        User::create([
            'name'=>'alaaCapital',
            'email'=>'alaa12@g.com',
            'password'=>Hash::make('1234'),
        ]);
        return response("done");
    }
}
