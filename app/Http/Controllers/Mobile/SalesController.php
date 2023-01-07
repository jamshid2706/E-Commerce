<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use App\Models\Sale;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index() {
        $sales = Sale::all();
        return view('mobile.sales.index', compact('sales'));
    }
}
