<?php

namespace App\Http\Controllers;

use App\Jobs\ActiveUserJob;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::where('status',0)->pluck('id');
        ActiveUserJob::dispatch($users)->delay(now()->second(30));//can without delay
        return 'updating data..';
    }
}
