<?php

namespace Database\Seeders;

use App\Models\Blog\BlogComment;
use App\Models\Blog\BlogPost;
use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            BlogCategoriesTableSeeder::class,
            BlogCoursesTableSeeder::class,
            BlogModulesTableSeeder::class,
        ]);
        BlogPost::factory(100)->create();
        BlogComment::factory(100)->create();
    }
}
