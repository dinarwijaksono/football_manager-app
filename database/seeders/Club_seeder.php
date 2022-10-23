<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Club_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clubs = [
            [
                'name' => 'Garuda'
            ],
            [
                'name' => 'Banteng'
            ]
        ];


        foreach ($clubs as $club) {
            DB::table('clubs')->insert([
                'name' => $club['name'],
                'saldo' => 0,
                'fans' => 0,
                'created_at' => round(microtime(true) * 1000),
                'updated_at' => round(microtime(true) * 1000),
            ]);
        }
    }
}
