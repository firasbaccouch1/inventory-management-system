<?php

namespace App\Http\Controllers\Backend\Business\Sites;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VenuesController extends Controller
{
    public function index()
    {
        return view('backend.business.sites.venues');
    }
}
