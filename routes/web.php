<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');

    Route::get('/admin-logs', function () {
        return Inertia::render('admin-logs');
    })->name('admin-logs');
    
    Route::get('/users', function () {
        return Inertia::render('users');
    })->name('users');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';