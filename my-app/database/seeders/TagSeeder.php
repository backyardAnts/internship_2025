<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    public function run(): void
    {
        $tags = ['Urgent', 'Politique', 'Analyse', 'Interview'];

        foreach ($tags as $name) {
            Tag::create([
                'name' => $name,
                'slug' => strtolower($name),
            ]);
        }
    }
}
