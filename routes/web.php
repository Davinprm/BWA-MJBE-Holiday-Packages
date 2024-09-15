<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('welcome');
})->name('home');
Route::get('/yacht', function () {
    return view('welcome');
})->name('yacht');
Route::get('/destination', function () {
    return view('welcome');
})->name('destination');
Route::get('/experience', function () {
    return view('welcome');
})->name('experience');
Route::get('/about', function () {
    return view('welcome');
})->name('about');
Route::get('/book', function () {
    return view('welcome');
})->name('book');
