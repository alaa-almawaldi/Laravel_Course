<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class UploadImage extends Controller
{
    use \App\Traits\UploadImage;

    public function index(){
        $images= Image::all();
        return view('index',compact('images'));
    }
    public function showForm()
    {
        return view('upload');
    }
    public function store(Request $request){
        // return $this->uploadImage($request,'admins');
        $path = $this->uploadImage($request,'users');
        Image::create([
            'path'=>$path
        ]);
        return "upload ok";

    }
}
