<?php

namespace App\Http\Controllers\Backend\Hardware\Networking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OverviewController extends Controller
{
    public function index()
    {
        return view('backend.hardware.networking_hardware.overview');
    }
}
