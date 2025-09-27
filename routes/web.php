<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function() {
    return view('admin.index');
});

Route::get('/logs', function() {
    return view('logs.index');
});

Route::get('/outils', function() {
    return view('outils.index');
});

Route::get('/dashboard', function() {
    return view('dashboard');
});

Route::get('/login', function() {
    return (view('login'));
});