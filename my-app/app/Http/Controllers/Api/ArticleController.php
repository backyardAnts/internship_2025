<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return Article::with(['user', 'category', 'tags', 'comments'])->get();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string',
            'slug' => 'required|unique:articles,slug',
            'image_url' => 'nullable|string',
            'excerpt' => 'nullable|string',
            'content' => 'required|string',
            'published_at' => 'nullable|date',
        ]);

        $article = Article::create($data);

        // sync tags
        if ($request->has('tags')) {
            $article->tags()->sync($request->tags);
        }

        return response()->json($article->load('tags'), 201);
    }

    public function show($id)
    {
        return Article::with(['user', 'category', 'tags', 'comments'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        $data = $request->validate([
            'category_id' => 'sometimes|exists:categories,id',
            'title' => 'sometimes|string',
            'slug' => 'sometimes|unique:articles,slug,' . $article->id,
            'image_url' => 'nullable|string',
            'excerpt' => 'nullable|string',
            'content' => 'sometimes|string',
            'published_at' => 'nullable|date',
        ]);

        $article->update($data);

        if ($request->has('tags')) {
            $article->tags()->sync($request->tags);
        }

        return response()->json($article->load('tags'));
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
