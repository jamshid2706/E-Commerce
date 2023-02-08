<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ClientController;
use App\Http\Controllers\admin\IndexController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\Mobile\CategoriesController;
use App\Http\Controllers\Mobile\ClientsController;
use App\Http\Controllers\Mobile\ProductsController;
use App\Http\Controllers\Mobile\SalesController;
use App\Http\Controllers\SaleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/', function () {
        return `<div></div>`;
    })->name('admin.home');
    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('admin.categories');
        Route::get('/add', [CategoryController::class, 'add'])->name('admin.categories.add');
        Route::get('/search', [CategoryController::class, 'search'])->name('admin.category.search');
        Route::get('/{id}', [CategoryController::class, 'show'])->name('admin.category.show');
        Route::post('/store', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::post('/{id}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::post('/{id}/productedit', [CategoryController::class, 'productedit'])->name('admin.category.product.edit');
        Route::delete('/{id}/categorydelete', [CategoryController::class, 'destroy'])->name('admin.category.delete');
        Route::delete('/{id}/productdelete', [CategoryController::class, 'destroyproduct'])->name('admin.category.productdelete');
        Route::delete('/{id}categoryproductdelete', [CategoryController::class, 'destroycatproduct'])->name('admin.category.deletecategoryproduct');
    });
    Route::group(['prefix' => 'products'], function () {
        Route::get('/', [ProductController::class, 'index'])->name('admin.products');
        Route::post('/store', [ProductController::class, 'store'])->name('admin.products.store');
        Route::post('/{id}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
        Route::delete('/{id}', [ProductController::class, 'destroy'])->name('admin.products.delete');
        Route::get('/search', [ProductController::class, 'search'])->name('admin.products.search');
    });
    Route::group(['prefix' => 'clients'], function () {
        Route::get('/search', [ClientController::class, 'search'])->name('admin.clients.search');
        Route::get('/', [ClientController::class, 'index'])->name('admin.clients');
        Route::post('/store', [ClientController::class, 'store'])->name('admin.clients.store');
        Route::post('/{id}/edit', [ClientController::class, 'edit'])->name('admin.clients.edit');
        Route::get('/{id}', [ClientController::class, 'show'])->name('admin.clients.show');
        Route::delete('/{id}', [ClientController::class, 'destroy'])->name('admin.clients.delete');
    });
    Route::group(['prefix' => 'sales'], function () {
        Route::get('/', [SaleController::class, 'index'])->name('admin.sales');
        Route::post('/store', [SaleController::class, 'store'])->name('admin.sales.store');
        Route::get('/search', [SaleController::class, 'search'])->name('admin.sales.search');
        Route::get('/create', [SaleController::class, 'create'])->name('admin.sales.create');
        Route::delete('/{id}',[SaleController::class, 'destroy'])->name('admin.sales.delete');
    });
});
// Mobile App routes
Route::group(['prefix'=>'mobile'], function () {
    Route::get('/', function () {return view('mobile.dashboard.index');})->name('mobile.home');
    Route::group(['prefix'=>'clients'], function () {
        Route::get('/', [ClientsController::class, 'index'])->name('mobile.clients');
        Route::post('/store', [ClientsController::class, 'store'])->name('mobile.clients.store');
        Route::get('/{id}', [ClientsController::class, 'show'])->name('mobile.clients.show');
    });
    Route::group(['prefix'=>'products'], function () {
        Route::get('/', [ProductsController::class, 'index'])->name('mobile.products');
        Route::get('/create', [ProductsController::class, 'create'])->name('mobile.products.create');
        Route::post('/store', [ProductsController::class, 'store'])->name('mobile.products.store');
        Route::get('/{id}/edit', [ProductsController::class, 'edit'])->name('mobile.products.edit');
        Route::post('/{id}/update', [ProductsController::class, 'update'])->name('mobile.products.update');
        Route::get('/{id}', [ProductsController::class, 'show'])->name('mobile.products.show');

    });
    Route::group(['prefix'=>'sales'], function () {
        Route::get('/', [SalesController::class, 'index'])->name('mobile.sales');
        Route::get('/create', [SalesController::class, 'create'])->name('mobile.sales.create');
        Route::post('/store', [SalesController::class, 'store'])->name('mobile.sales.store');
        Route::get('/{id}', [SalesController::class, 'show'])->name('mobile.sales.show');
        Route::get('/{id}/edit', [SalesController::class, 'edit'])->name('mobile.sales.edit');
    });
    Route::group(['prefix'=>'categories'], function () {
       Route::get('/', [CategoriesController::class, 'index'])->name('mobile.categories');
       Route::post('/store', [CategoriesController::class, 'store'])->name('mobile.categories.store');
       Route::get('/{id}', [CategoriesController::class, 'show'])->name('mobile.categories.show');
    });
});

Route::get('/test/{code}', function ($code) {
    \Illuminate\Support\Facades\Artisan::call($code);
   echo '<pre>';
    print_r(\Illuminate\Support\Facades\Artisan::output());
});

Route::get('/tes/test', function (){
    $products = \App\Models\Product::all()->toArray();
    print_r(json_encode($products));
});

Route::get('/test', function (){
    return view('console');
});

Route::get('/console', function (Request $request) {
    \Illuminate\Support\Facades\Artisan::call($request->search);
    $output = '<pre>';
    $output .= \Illuminate\Support\Facades\Artisan::output();
    $output .= '<div class="actions">
    <label for="code">php artisan </label>
    <input id="code" onKeyDown="if(event.keyCode == 13)update()"/>
</div>';
    return $output;
});

Auth::routes();
