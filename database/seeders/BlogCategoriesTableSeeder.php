<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $categories = [];

        $categoryName = 'Без категории';
        $createdAt = $faker->dateTimeBetween('-6 months', '-4 months');
        $categories[] = [
            'parent_id' => 0,
            'title' => $categoryName,
            'slug' => Str::slug($categoryName),
            'description' => $faker->realText(50),
            'created_at' => $createdAt,
            'updated_at' => $createdAt
        ];

        for ($i = 1; $i <= 10; $i++) {
            $categoryName = 'Категория #' . $i;
            $parentId = ($i > 4) ? rand(1, 4) : 1;
            $createdAt = $faker->dateTimeBetween('-6 months', '-4 months');

            $categories[] = [
                'parent_id' => $parentId,
                'title' => $categoryName,
                'slug' => Str::slug($categoryName),
                'description' => $faker->realText(50),
                'created_at' => $createdAt,
                'updated_at'=> $createdAt
            ];
        }

        DB::table('blog_categories')->insert($categories);
    }
}
