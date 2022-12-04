<?php

namespace App\Http\Controllers\Backend\Business\Sites;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerSitesController extends Controller
{
    public function index()
    {
        return view('backend.business.sites.customer_sites');
    }
}
