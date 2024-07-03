<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

Route::get('/', function () {
    return view('home');
});

//admin
Route::get('/dashboard', [AppController::class, 'dashboard'])->name('dashboard');
Route::get('/login', [AppController::class, 'login'])->name('login');
Route::post('/supply', [AppController::class, 'supply'])->name('supply');
Route::get('/supply', [AppController::class, 'supply'])->name('supply');
Route::post('/history', [AppController::class, 'history'])->name('history');
Route::get('/history', [AppController::class, 'history'])->name('history');
Route::get('/historyjual', [AppController::class, 'historyjual'])->name('historyjual');
//route navbar
Route::get('/home', [AppController::class, 'home'])->name('home');
Route::get('/pilih', [AppController::class, 'pilih'])->name('pilih');
Route::get('/cetak', [AppController::class, 'cetak'])->name('cetak');
Route::post('/cetak', [AppController::class, 'cetak'])->name('cetak');
Route::get('/historycetak', [AppController::class, 'historycetak'])->name('historycetak');


