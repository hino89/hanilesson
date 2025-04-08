<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/materi', function () {
    return view('materi');
})->name('materi');

Route::get('/tenaga', function () {
    return view('tenaga');
})->name('tenaga');

Route::get('/ruang', function () {
    return view('ruang');
})->name('ruang');

Route::get('/waktu', function () {
    return view('waktu');
})->name('waktu');



