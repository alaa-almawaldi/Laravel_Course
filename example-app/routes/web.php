<?php

use App\Http\Controllers\OneController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserControlle;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('usersadd', function () {
    return view('usersadd');
});

//training
Route::get('usersadd/{id}', function (int $id) {
    if($id==1)
        return "admin";
    else
        return "member";
});
Route::controller(PostController::class)->group(function (){
    Route::get('post','view');
    Route::get('post/create/{id}','showProfile');
});

Route::resource('user',UserControlle::class);

Route::get('one', OneController::class);

