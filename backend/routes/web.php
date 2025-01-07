<?php
use App\Controllers\UserController;
use App\Controllers\AdminController;

// Routing untuk User
Route::get('/', [UserController::class, 'index']);
Route::get('/layanan/cek-berkas', [UserController::class, 'cekBerkas']);
Route::post('/layanan/cek-berkas', [UserController::class, 'cariBerkas']);
Route::post('/layanan/pengaduan', [UserController::class, 'kirimPengaduan']);

// Routing untuk Admin
Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
Route::post('/admin/berkas', [AdminController::class, 'kelolaBerkas']);
Route::post('/admin/pengaduan', [AdminController::class, 'kelolaPengaduan']);
?>
