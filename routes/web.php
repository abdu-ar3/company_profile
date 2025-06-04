<?php

use App\Http\Controllers\AuthController;
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

// Route::get('/', function () {
//     return view('home');
// });



Route::get('/login', [AuthController::class, 'showLoginForm'])->name('loginShow');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/home', [AuthController::class, 'home'])->name('home');
Route::get('/admin/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');




Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('produk', \App\Http\Controllers\Admin\ProdukController::class);
    Route::resource('berita', \App\Http\Controllers\Admin\BeritaController::class);
    Route::resource('kategori-produk', \App\Http\Controllers\Admin\KategoriProdukController::class);
    Route::resource('lowongan', \App\Http\Controllers\Admin\LowonganController::class);
    Route::resource('lamaran', \App\Http\Controllers\Admin\LamaranController::class);
    Route::resource('profil', \App\Http\Controllers\Admin\ProfilController::class);
    Route::resource('kontak', \App\Http\Controllers\Admin\KontakController::class);
});

