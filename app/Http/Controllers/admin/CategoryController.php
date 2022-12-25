<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function show($id){
        $selected = Category::find($id);
        $categories = Category::all();
        return view('admin.category.show',compact('categories', 'selected'));
}
}
