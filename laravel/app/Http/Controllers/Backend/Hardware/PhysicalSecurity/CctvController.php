<?php

namespace App\Http\Controllers\Backend\Hardware\PhysicalSecurity;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CctvController extends Controller
{
    public function index()
    {
        return view('backend.hardware.physical_security.cctv');
    }
}
