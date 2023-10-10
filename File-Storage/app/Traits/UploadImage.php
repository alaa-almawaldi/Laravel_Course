<?php

namespace App\Traits;

//use http\Env\Request;
use Illuminate\http\Request;

trait UploadImage
{
    public function uploadImage(Request $request, $folderName){
        $image = $request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs($folderName,$image,'alaa');
        return $path;

    }
}
