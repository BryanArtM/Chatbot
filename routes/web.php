<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Ruta para la página de registro
Route::get('/register', function () {
    return view('auth.register');  // Vista dentro de resources/views/auth/register.blade.php
})->name('register');

