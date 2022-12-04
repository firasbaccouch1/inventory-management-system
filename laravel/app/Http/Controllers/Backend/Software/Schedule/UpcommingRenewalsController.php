<?php

namespace App\Http\Controllers\Backend\Software\Schedule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UpcommingRenewalsController extends Controller
{
    public function index()
    {
        return view('backend.Software.schedule.upcomming_renewals');
    }
}
