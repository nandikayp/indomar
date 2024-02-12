<?php

use App\Http\Controllers\UserCon;
use App\Http\Controllers\ProdukCon;
use App\Http\Controllers\KategoriCon;
use Illuminate\Support\Facades\Route;

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


// Kategori
Route::get('/kategori', [KategoriCon::class, 'index'])->name('indexkategori');
Route::get('/kategori/input', [KategoriCon::class, 'input'])->name('inputkategori');
Route::post('/kategori/storeinput', [KategoriCon::class, 'storeinput'])->name('storeInputkategori');
Route::get('/kategori/update/{id}', [KategoriCon::class, 'update'])->name('updatekategori');
Route::post('/kategori/storeupdate', [KategoriCon::class, 'storeupdate'])->name('storeUpdatekategori');
Route::get('/kategori/delete/{id}', [KategoriCon::class, 'delete'])->name('deletekategori');

// Produk
Route::get('/produk', [ProdukCon::class, 'index'])->name('indexproduk');
Route::get('/produk/input', [ProdukCon::class, 'input'])->name('inputproduk');
Route::post('/produk/storeinput', [ProdukCon::class, 'storeinput'])->name('storeInputproduk');
Route::get('/produk/update/{id}', [ProdukCon::class, 'update'])->name('updateproduk');
Route::post('/produk/storeupdate', [ProdukCon::class, 'storeupdate'])->name('storeUpdateproduk');
Route::get('/produk/delete/{id}', [ProdukCon::class, 'delete'])->name('deleteproduk');

//User
Route::get('/user', [UserCon::class, 'index'])->name('indexuser');
Route::get('/user/input', [UserCon::class, 'input'])->name('inputuser');
Route::post('/user/storeinput', [UserCon::class, 'storeinput'])->name('storeInputuser');
Route::get('/user/update/{id}', [UserCon::class, 'update'])->name('updateuser');
Route::post('/user/storeupdate', [UserCon::class, 'storeupdate'])->name('storeUpdateuser');
Route::get('/user/delete/{id}', [UserCon::class, 'delete'])->name('deleteuser');
