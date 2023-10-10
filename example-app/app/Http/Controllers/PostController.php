<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function view()
    {
        return view('post');
    }
    public function showProfile(int $id){
        return view('post_profile',compact('id'));
    }
}
