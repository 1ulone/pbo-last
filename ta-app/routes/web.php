<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\AuthCheck;

// Public routes
Route::get('/', function () {
    return view('welcome');
});

// Authentication routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected routes (requires authentication)
Route::middleware([AuthCheck::class])->group(function () {
      Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//index
Route::get('/', function () { return view('main/index'); });

//dashboard m=mahasiswa p=pembimbing u=penguji a=admin
Route::get('/dashboard-m', function() { return view('main/dashboard/mahasiswa'); } );
Route::get('/dashboard-p', function() { return view('main/dashboard/pembimbing'); } );
Route::get('/dashboard-u', function() { return view('main/dashboard/penguji'); } );
Route::get('/dashboard-a', function() { return view('main/dashboard/admin'); } );

/*
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () { 
*/