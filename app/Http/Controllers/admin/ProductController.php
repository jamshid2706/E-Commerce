<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;

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

    public function store(ProductRequest $request)
    {
        $data = $request->all();
        $data['image'] = Storage::put('/images', $request['image']);
        Product::create($data);
        return redirect()->route('admin.products');
    }

    public function edit(ProductRequest $request, $id)
    {

        $data = $request->validated();
        if (array_key_exists('image', $data)) $data['image'] = Storage::put('/images', $request['image']);
        $product = Product::find($id);
        $product->update($data);
        return redirect()->route('admin.products');
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('admin.products');
    }

    public function search(Request $request)
    {
        $array = explode('/', $request->search['url']);
        $clients = DB::table(end($array))
            ->where('title', 'Like', '%' . $request->search['search'] . '%')
            ->orderBy($request->search['sort'])->get();
        $output = '';
        $categories = Category::all();
        foreach ($clients as $product) {
            $output .= view('admin.partials.cards.products', compact('product', 'categories'));
        }
        return $output;
    }
}
