<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\UploadController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'insertData'])->name('contact.contacts');
Route::get('/services', [ServiceController::class, 'index']);
Route::get('/upload', function () {
    return view('upload');
});
Route::post('/upload', [UploadController::class, 'upload'])->name('upload.file');
