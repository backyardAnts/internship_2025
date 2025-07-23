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

    $articles = [
        [
            'title' => 'Comment Israël pourrait neutraliser le site nucléaire de Fordo',
            'slug' => 'comment-israel-pourrait-neutraliser-le-site-nucleaire-de-fordo',
            'image_url' => 'images/desert.jpg',
            'excerpt' => 'Le deuxième centre d’enrichissement d’uranium en Iran, plus difficile à atteindre que celui de Natanz, revient sur toutes les lèvres de Washington à Tel-Aviv.',
            'content' => 'Le deuxième centre d’enrichissement d’uranium en Iran, plus difficile à atteindre que celui de Natanz, revient sur toutes les lèvres de Washington à Tel-Aviv.',
            'published_at' => now(),
        ],
        [
            'title' => 'Comment la guerre contre le Hezbollah a servi de laboratoire pour Israël en Iran',
            'slug' => 'guerre-hezbollah-laboratoire-israel-iran',
            'image_url' => 'images/fire.webp',
            'excerpt' => 'Les tactiques militaires ressemblent à celle utilisée lors de la guerre au Liban, bien que les objectifs soient plus ambitieux face à la République islamique.',
            'content' => 'Les tactiques militaires ressemblent à celle utilisée lors de la guerre au Liban, bien que les objectifs soient plus ambitieux face à la République islamique.',
            'published_at' => now(),
        ],
        [
            'title' => '« Mon village au Liban-Sud a aussi été ravagé par Israël »',
            'slug' => 'village-liban-sud-ravage',
            'image_url' => 'images/moto.webp',
            'excerpt' => 'En Iran, certains Libanais n’ont pas l’intention de rentrer.',
            'content' => 'Il est important de rester sur place et d’éviter tout déplacement inutile pour l’instant, car la situation n’est toujours pas claire.',
            'published_at' => now(),
        ],
    ];

    foreach ($articles as $data) {
        $article = Article::create([
            ...$data,
            'user_id' => $user->id,
            'category_id' => $category->id,
        ]);

        // Optional: attach tags if needed
        $article->tags()->attach([1, 2]);
    }
}

}
