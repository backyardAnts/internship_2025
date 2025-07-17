<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = ['Liban', 'Monde', 'Culture', 'Économie'];

        foreach ($categories as $name) {
            Category::create([
                'name' => $name,
                'slug' => strtolower($name),
            ]);
        }
    }
}
