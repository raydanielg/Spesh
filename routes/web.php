<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.index');
})->name('landing');

Route::get('/quote', function () {
    return view('landing.quote');
})->name('quote');

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/sitemap.xml', function () {
    return response()->view('sitemap.index')->header('Content-Type', 'text/xml');
})->name('sitemap');
