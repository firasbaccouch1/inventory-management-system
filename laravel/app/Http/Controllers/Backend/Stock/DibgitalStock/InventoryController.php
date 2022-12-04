<?php

namespace App\Http\Controllers\Backend\Stock\DibgitalStock;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        return view('backend.stock.digital_stock.stock_report');
    }
}
