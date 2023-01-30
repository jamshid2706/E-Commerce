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
        $clients = Client::all()->pluck('name')->toArray();
        $sales = Sale::all();
        return view('admin.sales.create', compact('sales', 'clients', 'saleProduct'));
    }

    public function store(Request $request)
    {
        $insertion = Sale::create($request->all());
        return redirect()->route('admin.sales');
    }

    public function search(Request $request)
    {
        $products = Product::where('title', 'Like', '%' . $request->search . '%')->orWhere('description', 'Like', '%' . $request->search . '%')->get();
        $prod = Product::where('title', $request->search)->get();
        $output = "";

        foreach ($products as $product){
            $output .= '<div id='. $product->id .' class="col-span-12 p-1 bg-white ajax_content" style="border: 2px solid lightgray; border-radius: 4px; cursor: pointer"><p class="title pl-1">'. $product->title .'</p>
        <p class="text-slate-400 font-8 pt-1">'.substr($product->description, 0, 26) .'</p></div>';
        }

        $data['amount'] = $request->id;
        $data['price'] = '';

        if ($request->id != ''){
            $getProdData = Product::find($request->id);
            $data['amount'] = $getProdData->stock;
            $data['price'] = $getProdData->buy;
        }

        $data['data'] = $output;
        $data['warning'] = $prod->isEmpty() ? 'Product not found' : $prod[0]['id'];
        return $data;
    }
}
