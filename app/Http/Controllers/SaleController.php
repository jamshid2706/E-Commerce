<?php

namespace App\Http\Controllers;

use App\Http\Requests\SalesRequest;
use App\Models\Client;
use App\Models\Sale;
use App\Models\SaleProduct;

class SaleController extends Controller
{
    public function index()
    {
        $saleProduct = SaleProduct::all();
        $clients = Client::all();
        $sales = Sale::all();
        return view('admin.sales.index', compact('sales', 'clients', 'saleProduct'));
    }

    public function create()
    {
        $saleProduct = SaleProduct::all();
        $clients = Client::all();
        $sales = Sale::all();
        return view('admin.sales.create', compact('sales', 'clients', 'saleProduct'));
    }

    public function store(SalesRequest $request)
    {
        $insertion = Sale::create($request->all());

        return redirect()->route('admin.sales');
    }
}
