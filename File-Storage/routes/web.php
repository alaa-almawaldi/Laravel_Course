<?php

use App\Http\Controllers\UploadImage;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //Storage::disk('local')->put('example.txt', 'Contents');
    Storage::disk('public')->put('example.txt', 'Contents');//add & link
    Storage::disk('alaa')->put('example.txt', 'Contents');// add to new disk i create
    return "ok";
});

Route::get('show',[UploadImage::class,'showForm']);
Route::get('show/image',[UploadImage::class,'index']);
Route::post('store',[UploadImage::class,'store'])->name('photo.store');

