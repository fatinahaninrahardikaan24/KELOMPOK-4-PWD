<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jurnal', function () {
    return view('jurnal');
});

Route::get('/publikasi', function () {
    return view('publikasi');
});

Route::get('/beasiswa', function () {
    return view('beasiswa');
});

Route::get('/kontak', function () {
    return view('kontak');
});