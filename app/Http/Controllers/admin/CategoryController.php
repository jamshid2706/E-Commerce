<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
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

        return redirect()->route('admin.category.show');
    }

    public function edit(CategoryRequest $request, $id)
    {
        $data = $request->validated();
        $product = Category::find($id);
        $product->update($data);
        return redirect()->back();
    }

    public function delete($id)
    {

    }
}
