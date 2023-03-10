<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\UserRole;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Post::factory(100)->create();

        UserRole::create([
            'name' => 'Administrator',
        ]);

        UserRole::create([
            'name' => 'Writer',
        ]);
    
        Category::create([
            'name' => 'Mobile development',
            'slug' => 'mobile-development'
        ]);

        Category::create([
            'name' => 'Web development',
            'slug' => 'web-development'
        ]);

        Category::create([
            'name' => 'Biography',
            'slug' => 'biography'
        ]);

    }
}
