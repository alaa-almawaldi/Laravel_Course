<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Traits\testTrait;
use Illuminate\Http\Request;

class TestController extends Controller
{
    use testTrait;

    public function index(){

//        $user= $this->getData(new User());
//        return $user;
        $post= $this->getData(Post::class);
        return $post;
    }
}
