<?php

namespace App\Http\Controllers\Backend\Software\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InternalServices extends Controller
{
    public function index()
    {
        return view('backend.Software.services.internal_services');
    }
}
