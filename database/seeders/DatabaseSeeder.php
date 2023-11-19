<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(5 )->create();


        Category::create([
            "name" => 'Web Programing',
            "slug" => "web-programing"
        ]);

        Category::create([
            "name" => 'Gaming',
            "slug" => "gaming"
        ]);

        Post::factory(3) -> create();
                }
}