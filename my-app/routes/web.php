<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\ArticlePageController;

// Home page showing list of articles
Route::get('/', [ArticlePageController::class, 'index'])->name('home');

// Individual article page (you can adjust the route & controller later)
Route::get('/article/{id}', [ArticlePageController::class, 'show'])->name('article.show');

// Static pages
Route::view('/sectiontype', 'sectiontype');
Route::view('/connection', 'connection');
Route::view('/offers', 'offers');
Route::view('/whydoit', 'whydoit');
