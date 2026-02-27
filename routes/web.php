<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;

// Halaman utama per section
Route::get('/', fn () => view('about'))->name('about');
Route::get('/keahlian', fn () => view('skills'))->name('skills');
Route::get('/proyek', fn () => view('projects'))->name('projects');
Route::get('/kontak', fn () => view('contact'))->name('contact');


// Halaman Obrolan: kirim pesan + lihat + hapus
Route::get('/obrolan', [ChatController::class, 'admin'])->name('chat.admin');
Route::post('/obrolan', [ChatController::class, 'store'])->name('chat.store');
Route::delete('/obrolan/{id}', [ChatController::class, 'destroy'])->name('chat.destroy');