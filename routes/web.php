<?php

use App\Http\Controllers\BaseController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StructureController;

Route::get('/', function () {
    return Inertia::render('Base/Index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function () {
    return Inertia::render('Base/Index');
})->middleware(['auth', 'verified'])->name('dashboard');

//setting routes for the settings page in category controller
Route::get('/settings', [CategoryController::class, 'index'])->name('settings')->middleware(['auth', 'verified']);
//Categories
Route::resource('categories', CategoryController::class)->middleware(['auth', 'verified']);

//write structure
Route::get('/structure', [StructureController::class, 'index'])->name('structure.index')->middleware(['auth', 'verified']);
//select
Route::get('/structure/select', [StructureController::class, 'select'])->name('structure.select')->middleware(['auth', 'verified']);

//Base routes
Route::resource('base', BaseController::class)->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';
