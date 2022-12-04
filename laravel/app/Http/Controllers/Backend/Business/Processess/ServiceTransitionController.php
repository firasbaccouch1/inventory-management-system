<?php

namespace App\Http\Controllers\Backend\Business\Processess;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceTransitionController extends Controller
{
    public function index()
    {
        return view('backend.business.processes.service_transition');
    }
}
