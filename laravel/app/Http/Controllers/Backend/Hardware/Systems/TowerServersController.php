<?php

namespace App\Http\Controllers\Backend\Hardware\Systems;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TowerServersController extends Controller
{
    public function index()
    {
        return view('backend.hardware.systems_hardware.tower_servers');
    }
}
