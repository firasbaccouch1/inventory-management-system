<?php

namespace App\Http\Controllers\Backend\Business\Sites;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HeadquatersController extends Controller
{
    public function index()
    {
        return view('backend.business.sites.headquaters');
    }
}
