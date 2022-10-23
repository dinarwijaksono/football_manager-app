<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Player_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clubs = DB::table('clubs')->select('id')->get();

        $position = ['GK', 'CB', 'RB', 'LB', 'CM', 'RM', 'CM', 'ST'];

        foreach ($clubs as $club) {

            for ($i = 0; $i < 21; $i++) {
                DB::table('players')->insert([
                    'club_id' => $club->id,
                    'name' => Fake()->firstName('male') . " " . Fake()->lastName('male'),
                    'position' => $position[mt_rand(0, 7)],
                    'salary' => 2_000_000,
                    'birth_date' => floor(microtime(true) * 1000) - (mt_rand(17, 20) * 365 * 24 * 60 * 60 * 1000),
                    'price' => 5_000_000,
                    'end_contract' => round(microtime(true) * 1000) + (mt_rand(1, 3) * 365 * 24 * 60 * 60 * 1000),
                ]);
            }
        }
    }
}
