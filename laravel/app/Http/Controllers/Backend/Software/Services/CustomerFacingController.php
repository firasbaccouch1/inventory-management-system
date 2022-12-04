<?php

namespace App\Http\Controllers\Backend\Software\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerFacingController extends Controller
{
    public function index()
    {
        return view('backend.Software.services.customer_facing');
    }
}
