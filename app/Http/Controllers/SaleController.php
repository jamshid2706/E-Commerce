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

    public function store()
    {
        $data = request()->all();
        $client = Client::where('name', $data['client'])->get()->first();
        $clientId = $client->id;
        $sale = Sale::create([
            'client_id' => $clientId,
            'amount'=> rand(100000,999999)
        ]);

        $product = $data['product'];
        $price = $data['price'];
        $count = $data['count'];
        $amount = $data['amount'];
        for($i = 0; $i < count($product); $i++){
            $prod = Product::where('title', $product[$i])->get()->first();
            SaleProduct::create([
                'sale_id' => (int)$sale->id,
                'product_id' => $prod->id,
                'price' => (int)$price[$i],
                'count' => (int)$count[$i],
                'total' => (int)$amount[$i]
            ]);
        }
        return redirect()->back();

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

    function delete($id){
        Sale::destroy($id);
        SaleProduct::where('sale_id', '=', $id)->delete();
        return redirect()->route('admin.sales');
    }
}
