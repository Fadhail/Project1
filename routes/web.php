<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/mahasiswas', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/mahasiswas/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('/mahasiswas', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::get('/mahasiswas/{mahasiswa}', [MahasiswaController::class, 'show'])->name('mahasiswa.show');
Route::get('/mahasiswas/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::put('/mahasiswas/{mahasiswa}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::delete('/mahasiswas/{mahasiswa}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Home', function () {
    return view('home');
});

Route::get('/Scan', function () {
    return view('scan');
});