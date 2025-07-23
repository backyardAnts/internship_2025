<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

// app/Http/Controllers/HomeController.php

namespace App\Http\Controllers;

use App\Models\Article;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::with(['user', 'category'])
            ->orderBy('published_at', 'desc')
            ->get();

        return view('home', compact('articles'));
    }
}
