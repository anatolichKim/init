<?php

namespace Database\Seeders;

use App\Models\Blog\BlogCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogCoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $courses = [];

        $courseName = 'Вкатиться в IT';
        $publishedAt = $faker -> dateTimeBetween('-5 months', '-4 months');
        $createdAt = $faker -> dateTimeBetween('-6 months', '-5 months');
        $courses[] = [
            'category_id' => BlogCategory::inRandomOrder()->first()->id,
            'title' => $courseName,
            'slug' => Str::slug($courseName),
            'description' => $courseName . ' ' . Str::random(10),
            'is_published' => rand(1, 5) > 1,
            'published_at' => $publishedAt,
            'created_at' => $createdAt,
            'updated_at' => $createdAt
        ];

        for ($i = 1; $i <= 20; $i++) {
            $courseName = 'Курс #' . $i;
            $isPublished = rand(1,5) > 1;
            $publishedAt = $faker -> dateTimeBetween('-5 months', '-4 months');
            $createdAt = $faker -> dateTimeBetween('-6 months', '-5 months');

            $courses[] = [
                'category_id' => BlogCategory::inRandomOrder()->first()->id,
                'title' => $courseName,
                'slug' => Str::slug($courseName),
                'description' => $courseName .' ' .Str::random(10),
                'is_published' => $isPublished,
                'published_at' => $isPublished ? $publishedAt : null,
                'created_at' => $createdAt,
                'updated_at' => $createdAt
            ];
        }

        DB::table('blog_courses')->insert($courses);
    }
}
