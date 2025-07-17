<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\User;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first();
        $category = Category::first();
        $tags = Tag::all();

        for ($i = 1; $i <= 5; $i++) {
            $title = "Sample Article $i";
            $article = Article::create([
                'user_id' => $user->id,
                'category_id' => $category->id,
                'title' => $title,
                'slug' => Str::slug($title),
                'image_url' => 'https://via.placeholder.com/600x400',
                'excerpt' => 'This is a short summary for ' . $title,
                'content' => 'This is the full content of the article.',
                'published_at' => now(),
            ]);

            $article->tags()->attach($tags->random(2));
        }
    }
}
