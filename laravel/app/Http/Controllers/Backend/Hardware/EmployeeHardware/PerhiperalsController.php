<?php

namespace App\Http\Controllers\Backend\Hardware\EmployeeHardware;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PerhiperalsController extends Controller
{
    public function index()
    {
        return view('backend.hardware.employee_hardware.perhiperals');
    }
}
