<?php

namespace App\Http\Controllers\Backend\Stock\PhysicalStock;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        return view('backend.stock.physical_stock.stock_report');
    }
}
