<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Finance;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function index() {
            $customers = Customer::all();
            $finances = Finance::all();
           return view('admin.finance.index', compact('customers', 'finances'));
    }

    public function store(Request $request) {
        dd($request->all());
    }
}
