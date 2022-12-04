<?php

namespace App\Http\Controllers\Backend\Business\Sites;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BranchOfficesController extends Controller
{
    public function index()
    {
        return view('backend.business.sites.branch_offices');
    }
}
