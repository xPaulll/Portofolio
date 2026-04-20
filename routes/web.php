<?php

use Illuminate\Support\Facades\Route;

// Halaman utama per section
Route::get('/', fn () => view('about'))->name('about');
Route::get('/keahlian', fn () => view('skills'))->name('skills');
Route::get('/proyek', fn () => view('projects'))->name('projects');
Route::get('/kontak', fn () => view('contact'))->name('contact');

// Detail per proyek
Route::get('/proyek/sc-manuri', fn () => view('projects.sc-manuri'))->name('projects.sc-manuri');
Route::get('/proyek/reverse-osmosis-water-treatment', fn () => view('projects.reverse-osmosis'))->name('projects.reverse-osmosis');
