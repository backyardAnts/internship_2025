<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Article;

class ArticlePageController extends Controller
{


public function index()
{
    $articles = Article::with(['user', 'category', 'tags'])->latest()->take(10)->get();
    return view('home', compact('articles'));
}

}
