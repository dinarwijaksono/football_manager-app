<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'username' => 'alex',
            'email' => 'alexbeth664@gmail.com',
            'password' => Hash::make('damayanti'),
            'club_id' => 1,
            'date_run' => round(microtime(true) * 1000),
            'created_at' => round(microtime(true) * 1000),
            'updated_at' => round(microtime(true) * 1000),
        ]);


        $this->call([
            Club_seeder::class,
            Player_seeder::class,
        ]);
    }
}
