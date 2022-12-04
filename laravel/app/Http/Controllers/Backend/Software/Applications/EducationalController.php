<?php

namespace App\Http\Controllers\Backend\Software\Applications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EducationalController extends Controller
{
    public function index()
    {
        return view('backend.Software.applications.educational');
    }
}
