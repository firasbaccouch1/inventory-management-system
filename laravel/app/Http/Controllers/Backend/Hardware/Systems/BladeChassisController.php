<?php

namespace App\Http\Controllers\Backend\Hardware\Systems;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BladeChassisController extends Controller
{
    public function index()
    {
        return view('backend.hardware.systems_hardware.blade_chassis');
    }
}
