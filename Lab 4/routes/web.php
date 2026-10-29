<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/',         [PageController::class, 'home'])->name('home');
Route::get('/about',    [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/contact',  [PageController::class, 'contact'])->name('contact');

// Theme colour change
Route::get('/theme/{name}', [PageController::class, 'setTheme'])->name('theme.set');
