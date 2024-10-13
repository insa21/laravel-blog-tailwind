<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);



        // Category::create([
        //     'name' => 'Web design',
        //     'slug' => 'web-design',
        // ]);


        // Post::create([
        //     'title' => 'Belajar Laravel',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'belajar-laravel',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto earum soluta tenetur sit harum ipsam facilis hic quia doloremque, beatae dolore. Quam corporis aliquam soluta nobis perferendis quasi iure deleniti.'
        // ]);

        $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::factory(100)->recycle([
            Category::all(),
            User::all(),
        ])->create();
    }
}
