<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoViewController;


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
    return view('welcome');
});
Route::get('/carrito', function () {
    return view('carrito');
});

Route::get('productosView',[ProductoViewController::class,'index'])->name('productosView.index');
Route::get('productosView/create',[ProductoViewController::class,'create'])->name('productosView.create');
Route::post('productosView',[ProductoViewController::class,'store'])->name('productosView.store');
Route::put('productosView/{id}',[ProductoViewController::class,'update'])->name('productosView.update');
Route::get('productosView/{id}',[ProductoViewController::class,'show'])->name('productosView.show');
Route::get('productosView/edit/{id}',[ProductoViewController::class,'edit'])->name('productosView.edit');
Route::delete('productosView/{id}',[ProductoViewController::class,'destroy'])->name('productosView.destroy');
