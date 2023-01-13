<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $categories = Category::all();
        $products = Product::all();
        return view('admin.product.index', compact('products', 'categories'));
    }

    public function create(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $categories = Category::all();
        $products = Product::all();
        return view('admin.product.create', compact('categories', 'products'));
    }

    public function store(ProductRequest $request): \Illuminate\Http\RedirectResponse
    {
        $data = $request->all();
        $data['image'] = Storage::put('/images', $request['image']);
        Product::create($data);
        return redirect()->back();
    }

    public function edit(ProductRequest $request, $id): \Illuminate\Http\RedirectResponse
    {
        $data = $request->validated();
        $data['image'] = Storage::put('/images', $request['image']);
        $product = Product::find($id);
        $product->update($data);
        return redirect()->back();
    }

    public function destroy($id): \Illuminate\Http\RedirectResponse
    {
        Product::destroy($id);
        return redirect()->route('admin.products');
    }
}
