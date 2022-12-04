<?php

namespace App\Http\Controllers\Backend\Business\Sites;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SmallOffice_HomeOfficeController extends Controller
{
    public function index()
    {
        return view('backend.business.sites.small_office_home_office');
    }
}
