<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create();
        Category::create([
            'name' => 'Electronics',
            'slug' => 'electronics',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'ML',
        ]);

        Category::create([
            'name' => 'Internet Of Thing',
            'slug' => 'IOT',
        ]);

        Category::create([
            'name' => 'System Analis',
            'slug' => 'System-Analis',
        ]);
    }
}
