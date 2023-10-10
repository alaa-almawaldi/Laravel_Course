<?php

namespace App\Http\Controllers;

use App\Models\comment;
use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return post::find(1)->comments;
       // return comment::find(1)->post;
    }

}
