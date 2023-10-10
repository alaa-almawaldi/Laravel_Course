<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate(); //clean database
        User::create([
           'name'=>'sara',
           'email'=>'sara@gmail.com',
           'password'=>Hash::make('12345678'),
        ]);

        User::create([
            'name'=>'yaman',
            'email'=>'yaman@gmail.com',
            'password'=>Hash::make('12345678'),
        ]);
    }
}
