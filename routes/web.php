<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return Inertia::render('Base/Index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function () {
    return Inertia::render('Base/Index');
})->middleware(['auth', 'verified'])->name('dashboard');

//setting routes for the settings page in category controller
Route::get('/settings', [CategoryController::class, 'index'])->name('settings')->middleware(['auth', 'verified']);

Route::resource('categories', CategoryController::class);

require __DIR__.'/auth.php';
