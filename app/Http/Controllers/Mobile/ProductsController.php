<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index () {
        $products = Product::all();
        return view('mobile.products.index', compact('products'));
    }
    public function create() {
        return view('mobile.products.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title'=>'string',
            'description'=>'',
            'buy'=>'',
            'sell'=>''
        ]);
        dd($data);
    }
}
