<?php

namespace App\Http\Controllers\Backend\Logical\Network;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DependanciesController extends Controller
{
    public function index()
    {
        return view('backend.logical.network.dependencies');
    }
}
