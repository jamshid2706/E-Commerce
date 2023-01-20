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
use mysql_xdevapi\Exception;

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

    public function search(Request $request)
    {
        $output = 'hey';
//        try {
//            $categories = Category::where('title', 'Like', '%' . $request['search'] . '%')
//                ->orderBy($request['sort'])->paginate(8);
//        } catch (Exception $e){
//            $output = "\n\n\n".$e->getMessage()."\n\n\n";
//        }
//        if ($categories){
//            foreach ($categories as $category) {
//                $output .= "$category\n\n";
////            $output .= view('admin.product.search.productSearch', compact('category'));
//            }
//        } else {
//            $output = "error";
//        }

        return $output;
    }
}
