<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class Player_service
{
    public function getAllWhereClub($club_id)
    {
        $plasyers_db = DB::table('players')
            ->select('name', 'birth_date', 'position', 'salary', 'end_contract')
            ->where('club_id', $club_id)
            ->get();

        $plasyers = [];
        foreach ($plasyers_db as $p_db) {
            $plasyers[] = [
                'name' => $p_db->name,
                'age' => floor((microtime(true) * 1000 - $p_db->birth_date) / (1000 * 365 * 24 * 60 * 60)),
                'position' => $p_db->position,
                'end_contract' => date('M - Y', $p_db->end_contract / 1000),
                'salary' => $p_db->salary
            ];
        }

        return $plasyers;
    }
}
