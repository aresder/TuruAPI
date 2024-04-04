<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/login', 'login');
Route::get('/register', function () {
          return view('register');
});
Route::view('/features', 'features');
