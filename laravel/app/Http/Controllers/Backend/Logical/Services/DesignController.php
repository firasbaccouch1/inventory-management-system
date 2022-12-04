<?php

namespace App\Http\Controllers\Backend\Logical\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    public function index()
    {
        return view('backend.logical.services.design');
    }
}
