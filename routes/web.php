<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('artikel');
});

Route::get('/artikel', function () {
    return view('artikel');
});

Route::get('/program', function () {
    return view('program');
});

Route::get('/peluang', function () {
    return view('peluang');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/kontak', function () {
    return view('kontak');
});