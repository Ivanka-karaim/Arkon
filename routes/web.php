<?php

use App\Http\Controllers\MainController;
use App\Models\Category;
use App\Models\Product;
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

Route::get('/',[MainController::class,'general'])->name('general');
Route::get('/catalog', [MainController::class, 'catalog'])->name('catalog');

Route::get('/services', function () {
    return view('services');
})->name('services');
Route::get('/our_works', [MainController::class, 'our_works'])->name('our_works');
Route::get('/catalog/{id}', [MainController::class, 'products'])->name('products');
Route::get('/catalog/{id}/{id_product}', [MainController::class, 'product'])->name('product');
Route::get('/our_works/{count}', [MainController::class, 'our_works_add'])->name('our_works_add');
Route::post('/catalog/{id}/{id_product}', [MainController::class, 'form'])->name('product_form');




