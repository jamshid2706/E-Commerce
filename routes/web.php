<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ClientController;
use App\Http\Controllers\admin\IndexController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\SalesController;
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

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [IndexController::class, 'index'])->name('admin.home');
    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', function (){return redirect('/admin/categories/1');})->name('admin.categories');
        Route::get('/{id}', [CategoryController::class, 'show'])->name('admin.category.show');
    });
    Route::group(['prefix'=>'products'], function () {
       Route::get('/', [ProductController::class, 'index'])->name('admin.products');
    });
    Route::group(['prefix'=>'clients'], function () {
       Route::get('/', [ClientController::class, 'index'])->name('admin.clients');
    });
    Route::group(['prefix'=>'sales'], function () {
       Route::get('/', [SalesController::class, 'index'])->name('admin.sales');
    });
});

Route::get('/test', function () {
    return view('tests.accordion-table');
});
