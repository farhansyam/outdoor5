<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\productController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;
use App\Http\Middleware\UserMiddleware;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\AdminController;
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

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('jaket',  [productController::class, 'jaket']);
Route::get('matras',  [productController::class, 'matras']);
Route::get('sleepingbag',  [productController::class, 'sleepingbag']);
Route::post('search',  [productController::class, 'find']);
Route::get('kompor',  [productController::class, 'kompor']);
Route::get('carier',  [productController::class, 'carier']);
Route::get('tenda',  [productController::class, 'tenda']);
Route::get('product/{id}',  [productController::class, 'show'])->name('detail');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/',  [productController::class, 'index']);
Route::group(['middleware' => ['auth', 'UserMiddleware']], function () {
    Route::post('/booking-store', [BookingController::class, 'store'])->name('booking.store');
    Route::get('/bayar/{id}', [BookingController::class, 'bayarview'])->name('booking.bayarview');
    Route::post('/bayar', [BookingController::class, 'bayar'])->name('booking.bayar');
    Route::get('/keranjang', [BookingController::class, 'index'])->name('booking.index');
    Route::get('/chekout', [BookingController::class, 'checkout'])->name('booking.checout');
    Route::get('/listresi', [BookingController::class, 'listresi'])->name('booking.listresi');
    Route::get('/balikin/{id}', [BookingController::class, 'requestbalikin'])->name('booking.requestbalikin');
    Route::get('/detailresi/{id}', [BookingController::class, 'show'])->name('booking.show');
    // Route yang menggunakan middleware UserMiddleware
});

// Route yang menggunakan middleware AdminMiddleware
Route::group(['middleware' => ['auth', 'AdminMiddleware']], function () {
    Route::get('/acc/{id}', [BookingController::class, 'responsebalikin'])->name('booking.respponsebalikin');

    Route::get('/kategori', [AdminController::class, 'indexKategtori'])->name('admin.kategori');
    Route::get('/users', [AdminController::class, 'indexUser'])->name('admin.users');
    Route::get('/index-transaksi', [AdminController::class, 'indexTransaksi'])->name('admin.transaksi');    
    Route::get('/index-produk', [AdminController::class, 'index'])->name('products.index');
    Route::get('/index-produk', [AdminController::class, 'index'])->name('products.index');
    Route::get('/add-product', [AdminController::class, 'createproduk'])->name('admin.createproduk');
    Route::get('/add-kategori', [AdminController::class, 'createkategori'])->name('admin.createkategori');
    Route::post('/product-post', [AdminController::class, 'productStore'])->name('product-post');
    Route::post('/kategori-post', [AdminController::class, 'kategoriStore'])->name('kategori-post');

    Route::get('delete-product/{id}',[AdminController::class, 'deleteProduct']);
    Route::get('delete-kategori/{id}',[AdminController::class, 'deletekategori']);
    Route::get('delete-transaksi/{id}',[AdminController::class, 'deletetransaksi']);
    Route::get('delete-user/{id}',[AdminController::class, 'deleteUser']);
    Route::get('transaksi-detail/{id}', [AdminController::class, 'show'])->name('transaksi.show');

    Route::get('/kategori/{id}/edit', [AdminController::class, 'editKategori'])->name('kategori.edit');
    Route::get('/product/{id}/edit', [AdminController::class, 'editProduct'])->name('product.edit');
    Route::put('/product/{id}', [AdminController::class, 'updateProduct'])->name('product.update');
    Route::put('/kategori/{id}', [AdminController::class, 'updateKategori'])->name('kategori.update');
    Route::get('/detail-bukti/{id}', [BookingController::class, 'detailtf'])->name('kategori.detail-tf');
    Route::get('/acc-tf/{id}', [BookingController::class, 'responsebayar'])->name('kategori.detail-tf');



});