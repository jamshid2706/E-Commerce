<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ClientController;
use App\Http\Controllers\admin\IndexController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\Mobile\ClientsController;
use App\Http\Controllers\Mobile\ProductsController;
use App\Http\Controllers\SalesController;
use App\Models\Sale;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/', [IndexController::class, 'index'])->name('admin.home');
    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', function () {
            return redirect('/admin/categories/1');})->name('admin.categories');
        Route::get('/{id}', [CategoryController::class, 'show'])->name('admin.category.show');
        Route::post('/store', [CategoryController::class, 'store'])->name('admin.category.store');
    });
    Route::group(['prefix' => 'products'], function () {
        Route::get('/', [ProductController::class, 'index'])->name('admin.products');
        Route::post('/store', [ProductController::class, 'store'])->name('admin.products.store');
    });
    Route::group(['prefix' => 'clients'], function () {
        Route::get('/', [ClientController::class, 'index'])->name('admin.clients');
        Route::post('/store', [ClientController::class, 'store'])->name('admin.clients.store');
        Route::post('/{id}/edit', [ClientController::class, 'edit'])->name('admin.clients.edit');
        Route::get('/{id}', [ClientController::class, 'show'])->name('admin.clients.show');
        Route::delete('/{id}', [ClientController::class, 'destroy'])->name('admin.clients.delete');
    });
    Route::group(['prefix' => 'sales'], function () {
        Route::get('/', [SalesController::class, 'index'])->name('admin.sales');
    });
});

Route::group(['prefix'=>'app'], function () {
    Route::get('/', function () {dd(111111111111);})->name('home');
    Route::group(['prefix'=>'clients'], function () {
        Route::get('/', [ClientsController::class, 'index'])->name('clients');
        Route::post('/store', [ClientsController::class, 'store'])->name('clients.store');
        Route::get('/{id}', [ClientsController::class, 'show'])->name('clients.show');
    });
    Route::group(['prefix'=>'products'], function () {
        Route::get('/', [ProductsController::class, 'index'])->name('products');
    });
    Route::group(['prefix'=>'sales'], function () {
        Route::get('/', [SalesController::class, 'index'])->name('sales');
    });

});

Route::get('/test', function () {

    $sales = Sale::all();
    foreach ($sales as $sale) {
        dump($sale->products);
    }

    //return view('tests.accordion-table');
});

Auth::routes();
