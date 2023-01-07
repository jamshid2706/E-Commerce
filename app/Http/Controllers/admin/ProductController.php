<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('admin.product.index', compact('products', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('admin.product.create', compact('categories', 'products'));
    }

    public function store(ProductRequest $request)
    {
        $data = $request->all();
        $data['image'] = Storage::put('/images', $request['image']);
        Product::create($data);
        return redirect()->back();
    }
}
