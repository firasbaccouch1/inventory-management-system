<?php

namespace App\Http\Controllers\Backend\Hardware\PhysicalSecurity;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccessControlController extends Controller
{
    public function index()
    {
        return view('backend.hardware.physical_security.access_control');
    }
}
