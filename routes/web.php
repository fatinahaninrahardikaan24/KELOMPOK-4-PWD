<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramController;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/artikel', function () {
    return view('artikel');
});

Route::resource('programs', ProgramController::class);

Route::get('/peluang', function () {
    return view('peluang');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/kontak', function () {
    return view('kontak');
});