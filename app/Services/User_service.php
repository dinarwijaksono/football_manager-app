<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User_service
{
    public function addUser($username, $email, $password)
    {
        DB::table('users')->insert([
            'username' => $username,
            'email' => $email,
            'password' => Hash::make($password),
            'club_id' => 1,
            'created_at' => round(microtime(true) * 1000),
            'updated_at' => round(microtime(true) * 1000),
        ]);
    }
}
