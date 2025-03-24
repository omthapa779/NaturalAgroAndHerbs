<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//404 page
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});