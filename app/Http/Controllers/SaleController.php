<?php

namespace App\Http\Controllers;

use App\Http\Requests\SalesRequest;
use App\Models\Client;
use App\Models\Product;
use App\Models\Sale;
use App\Models\SaleProduct;
use Illuminate\Http\Request;

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

    public function search(Request $request)
    {
        $products = Product::where('title', 'Like', '%' . $request->search . '%')->orWhere('description', 'Like', '%' . $request->search . '%')->get();
        $output = "";

        foreach ($products as $product){
            $output .= '<div class="col-span-12 p-3 bg-white mb-1 ajacontent" style="border-radius: 4px; cursor: pointer">'. $product->title .'</div>';
        }

        return $output;
    }
}
