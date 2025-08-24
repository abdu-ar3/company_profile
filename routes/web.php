<?php

use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\LamaranController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|

*/





Route::get('/login', [AuthController::class, 'showLoginForm'])->name('loginShow');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerStore'])->name('registerStore');
Route::get('/', [AuthController::class, 'home'])->name('home');
Route::get('/admin/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {

    Route::resource('produk', \App\Http\Controllers\Admin\ProdukController::class);
    Route::resource('profil', ProfilController::class);
    Route::resource('berita', BeritaController::class)->parameters([
        'berita' => 'berita'
    ]);
    Route::resource('kategori-produk', \App\Http\Controllers\Admin\KategoriProdukController::class);
    Route::resource('lowongan', \App\Http\Controllers\Admin\LowonganController::class);
    Route::resource('lamaran', \App\Http\Controllers\Admin\LamaranController::class);
    Route::resource('profil', \App\Http\Controllers\Admin\ProfilController::class);
});
Route::resource('kontak', \App\Http\Controllers\Admin\KontakController::class);

Route::get('lamaran/create', [\App\Http\Controllers\User\LamaranController::class, 'create'])->name('lamaran.create');
Route::post('lamaran', [\App\Http\Controllers\User\LamaranController::class, 'store'])->name('lamaran.store');