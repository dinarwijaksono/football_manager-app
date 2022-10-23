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
            'date_run' => round(microtime(true) * 1000),
            'created_at' => round(microtime(true) * 1000),
            'updated_at' => round(microtime(true) * 1000),
        ]);
    }



    public function updateDate($user_id)
    {
        $user = collect(DB::table('users')
            ->select('date_run')
            ->where('id', $user_id)
            ->get())->first();

        $date_run = $user->date_run + (24 * 60 * 60 * 1000);

        DB::table('users')
            ->where('id', $user_id)
            ->update(['date_run' => $date_run]);
    }
}
