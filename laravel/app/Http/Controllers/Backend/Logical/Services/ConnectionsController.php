<?php

namespace App\Http\Controllers\Backend\Logical\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConnectionsController extends Controller
{
    public function index()
    {
        return view('backend.logical.services.connections');
    }
}
