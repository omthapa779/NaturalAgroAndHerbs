<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', function () {
    return view('welcome');
});

//404 page
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});

//static pages
Route::get('/about', [PagesController::class, 'About']);
Route::get('/process', [PagesController::class, 'Process']);
Route::get('/contact', [PagesController::class, 'Contact']);