<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('mahasiswa', function () {
    $nim = [123,124,125,126];
    $nama = ['rosita','yayi','najwa', 'tri'];
    $jumlah = count($nim);
    return view('mahasiswa', compact ('nim', 'jumlah', 'nama'));
});

Route::get('profile', function () {
    $nama = 'rosita';
    // return view('profile, compact(''nama));
    return view('profile') ->with('nama', $nama);
});
