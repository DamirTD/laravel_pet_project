<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PlaystationBookStorage;
use Illuminate\Http\Request;

class GamingDevicesController extends Controller
{
    public function playstation()
    {
        $totalPlaystations = PlaystationBookStorage::value('total_playstations');
        $availablePlaystations = PlaystationBookStorage::value('available_playstations');

        return view('gameDevices/playstation', compact('totalPlaystations', 'availablePlaystations'));
    }

    public function gamePC()
    {
        $totalGamePCs = PlaystationBookStorage::value('total_gamepcs');
        $availableGamePCs = PlaystationBookStorage::value('available_gamepcs');

        return view('gameDevices/game_pc', compact('totalGamePCs', 'availableGamePCs'));
    }

    public function pc()
    {
        $totalPCs = PlaystationBookStorage::value('total_pcs');
        $availablePCs = PlaystationBookStorage::value('available_pcs');

        return view('gameDevices/pc',compact('totalPCs', 'availablePCs'));
    }
}
