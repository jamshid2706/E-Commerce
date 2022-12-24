<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        dd('CategoryController Index ');
        $categories = Category::all();
        return view('admin.category.index', [$categories]);
    }

    public function show($id){
        dd($id);
        $post = Category::find($id);
        return view('admin.category.show',[$post]);
}
}
