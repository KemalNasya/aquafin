<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\InfrastructureController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\DocumentationController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/infrastructure', [InfrastructureController::class, 'index'])->name('infrastructure');
Route::get('/article', [ArticleController::class, 'index'])->name('article');
Route::get('/article/{id}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/gallery/download/{photoId}', [GalleryController::class, 'download'])->name('gallery.download');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/admin/report/pdf', [ReportController::class, 'exportPdf'])->name('admin.report.exportPdf');
Route::get('/admin/report/excel', [ReportController::class, 'exportExcel'])->name('admin.report.exportExcel');

Route::get('/storage/private/{path}', function ($path) {
    if (\Illuminate\Support\Facades\Storage::disk('private')->exists($path)) {
        return response()->file(\Illuminate\Support\Facades\Storage::disk('private')->path($path));
    }
    abort(404);
})->where('path', '.*')->name('private.storage');
