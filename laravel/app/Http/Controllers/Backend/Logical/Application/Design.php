<?php

namespace App\Http\Controllers\Backend\Logical\Application;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Design extends Controller
{
    public function index()
    {
        return view('backend.logical.application.design');
    }
}
