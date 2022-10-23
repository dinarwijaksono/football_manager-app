<?php

namespace App\Http\Controllers;

use App\Services\Player_service;
use Illuminate\Http\Request;

class Club_controller extends Controller
{
    protected $player_service;

    function __construct(Player_service $playser_service)
    {
        $this->player_service = $playser_service;
    }


    public function index()
    {
        return view('Club/index');
    }


    public function tim()
    {
        $data['listPlayers'] = $this->player_service->getAllWhereClub(1);

        return view('Club/tim', $data);
    }
}
