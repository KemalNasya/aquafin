<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\InfrastructureController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\DocumentationController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/infrastructure', [InfrastructureController::class, 'index'])->name('infrastructure');
Route::get('/article', [ArticleController::class, 'index'])->name('article');
Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda');
Route::get('/documentation', [DocumentationController::class, 'index'])->name('documentation');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
