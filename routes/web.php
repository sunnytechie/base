<?php

use App\Http\Controllers\BaseController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StructureController;

//HomePage Route
Route::get('/', [HomeController::class, 'index'])->name('home')->middleware(['auth', 'verified']);
Route::get('/select/{id}/base', [HomeController::class, 'selectIndex'])->name('select.index')->middleware(['auth', 'verified']);
Route::get('/dashboard', [HomeController::class, 'index'])->name('home.dashboard')->middleware(['auth', 'verified']);

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
