<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/article', function () {
    return view('article');
});
Route::get('/sectiontype', function () {
    return view('sectiontype');
});
Route::get('/connection', function () {
    return view('connection');
});
Route::get('/offers', function () {
    return view('offers');
});
Route::get('/whydoit', function () {
    return view('whydoit');
});