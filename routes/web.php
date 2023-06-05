<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\KategoriController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', [KategoriController::class, 'home']);

Route::get('Add-ketegori', [KategoriController::class, 'index']);
Route::post('create-kategori', [KategoriController::class, 'create']);
Route::delete('/delete-kategori/{id}', [KategoriController::class, 'delete']);
Route::get('edit-kategori/{id}', [KategoriController::class, 'edit']);
Route::put('update-kategori/{id}', [KategoriController::class, 'update']);
Route::get('detail-kategori/{id}', [KategoriController::class, 'detail']);

Route::get('Add-product', [ProductController::class, 'index']);
Route::post('create-product', [ProductController::class, 'create']);
Route::delete('delete-produk/{id}', [ProductController::class, 'delete']);
Route::get('edit-produk/{id}', [ProductController::class, 'edit']);
Route::put('update-produk/{id}', [ProductController::class, 'update']);
Route::get('detail-produk/{id}', [ProductController::class, 'detail']);

Route::get('admin', function() {
    return view('Administrator');
});

Route::get('login', [LoginController::class, 'index']);

Route::get('tes', function() {
    return view('tes');
});
