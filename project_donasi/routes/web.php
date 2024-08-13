<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\donasiController;
use App\Http\Controllers\DonaturController;
use App\Http\Controllers\FrontDonasiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformasiBencanaController;
use App\Http\Controllers\JenisBencanaController;
use App\Http\Controllers\KasusController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PoskoController;
use App\Http\Controllers\RelawanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'home'])->name('homepage');

Route::group(['middleware' => ['auth']], function(){

    Route::prefix('admin')->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

        Route::get('/tb_donasi', [donasiController::class, 'index'])->name('admin.donasi.index');
        Route::get('/tb_donasi/create', [donasiController::class, 'create'])->name('admin.donasi.create');
        Route::post('/tb_donasi/store', [donasiController::class, 'store'])->name('admin.donasi.store');
        Route::get('/tb_donasi/{id}/edit', [donasiController::class, 'edit'])->name('admin.donasi.edit');
        Route::put('/tb_donasi/{id}', [donasiController::class, 'update'])->name('admin.donasi.update');
        Route::delete('/tb_donasi/{id}', [donasiController::class, 'destroy'])->name('admin.donasi.destroy');
        Route::get('/tb_donasi/print', [donasiController::class, 'print'])->name('admin.donasi.print');

        Route::get('/tb_donatur', [DonaturController::class, 'index'])->name('admin.donatur.index');
        Route::get('/tb_donatur/create', [DonaturController::class, 'create'])->name('admin.donatur.create');
        Route::post('/tb_donatur/store', [DonaturController::class, 'store'])->name('admin.donatur.store');
        Route::get('/tb_donatur/{id}/edit', [DonaturController::class, 'edit'])->name('admin.donatur.edit');
        Route::put('/tb_donatur/{id}', [DonaturController::class, 'update'])->name('admin.donatur.update');
        Route::delete('/tb_donatur/{id}', [DonaturController::class, 'destroy'])->name('admin.donatur.destroy');
        Route::get('/tb_donatur/{id}', [DonaturController::class, 'show'])->name('admin.donatur.show');

        Route::resource('relawan', RelawanController::class);
        Route::resource('laporan', LaporanController::class);
        Route::resource('informasi', InformasiBencanaController::class);
        Route::resource('jenis_bencana', JenisBencanaController::class);
    });
});

Auth::routes();
Route::post('logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('donasi/form/{id}', [FrontDonasiController::class, 'showForm'])->name('front.donasi.form');
Route::post('donasi/store/{id}', [FrontDonasiController::class, 'store'])->name('front.donasi.store');

Route::resource('admin/donasi', DonasiController::class);

Route::get('/tentang-kami', [AboutController::class, 'tentangKami'])->name('about');
Route::get('/kontak', [ContactController::class, 'showForm'])->name('kontak.form');
Route::post('/kontak', [ContactController::class, 'submitForm'])->name('kontak.kami');

Route::resource('bencana', KasusController::class);
