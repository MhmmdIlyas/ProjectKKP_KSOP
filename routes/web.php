<?php

use Illuminate\Support\Facades\Route;

// Route utama untuk menampilkan halaman pelayanan
Route::get('/', function () {
    return view('app');
});
use App\Http\Controllers\AdminAuthController;

Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
