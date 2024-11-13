<?php

use Illuminate\Support\Facades\Route;

//index
Route::get('/', function () { return view('main/index'); });

//dashboard m=mahasiswa p=pembimbing u=penguji a=admin
Route::get('/dashboard-m', function() { return view('main/dashboard/mahasiswa'); } );
Route::get('/dashboard-p', function() { return view('main/dashboard/pembimbing'); } );
Route::get('/dashboard-u', function() { return view('main/analisis'); } );
Route::get('/dashboard-a', function() { return view('main/dashboard/admin'); } );

//login
Route::get('/login', function() { return view('main/login'); });
//signup
Route::get('/signup', function() { return view('main/signup'); });

/*
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
 */
