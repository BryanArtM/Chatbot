<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/laws', function () {
    return view('laws');
})->name('laws');

// Ruta para la página Sobre Nosotros
Route::get('/about', function () {
    return view('about');
})->name('about');