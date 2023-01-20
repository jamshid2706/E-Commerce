<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use http\Env\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return $categories->isEmpty() ?
            view('admin.category.index') :
            redirect()->route('admin.category.show', $categories->toArray()[0]['id']);
    }

    public function show($id)
    {
        $selected = Category::find($id);
        $categories = Category::all();
        return view('admin.category.show', compact('categories', 'selected'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.category.create', compact('categories'));
    }

    public function store(CategoryRequest $request)
    {
        $insertion = Category::create($request->all());

        return redirect()->route('admin.categories');
    }

    public function edit(CategoryRequest $request, $id)
    {
        $data = $request->validated();
        $product = Category::find($id);
        $product->update($data);
        return redirect()->route('admin.categories');
    }

    public function productedit(ProductRequest $request, $id)
    {

        $data = $request->validated();
        if (array_key_exists('image', $data)) $data['image'] = Storage::put('/images', $request['image']);
        $product = Product::find($id);
        $product->update($data);
        return redirect()->route('admin.categories');
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->route('admin.categories');
    }

    public function destroyproduct($id)
    {
        Product::destroy($id);
        return redirect()->route('admin.categories');
    }

}
