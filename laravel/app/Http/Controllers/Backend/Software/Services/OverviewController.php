<?php

namespace App\Http\Controllers\Backend\Software\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OverviewController extends Controller
{
    public function index()
    {
        return view('backend.Software.services.overview');
    }
}
