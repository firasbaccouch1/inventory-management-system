<?php

namespace App\Http\Controllers\Backend\Software\Applications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataStorage extends Controller
{
    public function index()
    {
        return view('backend.Software.applications.data_storage');
    }
}
