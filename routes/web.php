<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function(){
    return view('dashboard.home');
});

Route::get('/datasiswa', function(){
    return view('dashboard.data_siswa');
});
Route::get('/pendaftar', function(){
    return view('dashboard.data_pendaftar');
});

Route::get('/diterima', function(){
    return view('dashboard.data_diterima');
});
