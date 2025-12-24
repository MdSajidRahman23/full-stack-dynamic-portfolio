<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CvController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/cv', [CvController::class, 'index'])->name('cv');
