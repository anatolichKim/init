<?php

namespace Database\Seeders;

use App\Models\Blog\BlogCategory;
use App\Models\Blog\BlogCourse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $modules = [];

        for($i = 1; $i < 5; $i++) {
            $moduleName = 'Модуль для первого курса' . $i;
            $createdAt = $faker -> dateTimeBetween('-6 months', '-5 months');

            $modules[] = [
                'category_id' => BlogCategory::inRandomOrder()->first()->id,
                'course_id'=> 1,
                'title' => $moduleName,
                'slug' => Str::slug($moduleName),
                'description' => $faker->realText(50),
                'created_at' => $createdAt,
                'updated_at' => $createdAt
            ];
        }

        for ($i = 1; $i <= 20; $i++) {
            $moduleName = 'Модуль #' . $i;
            $createdAt = $faker -> dateTimeBetween('-6 months', '-5 months');

            $modules[] = [
                'category_id' => BlogCategory::inRandomOrder()->first()->id,
                'course_id'=> BlogCourse::inRandomOrder()->first()->id,
                'title' => $moduleName,
                'slug' => Str::slug($moduleName),
                'description' => $faker->realText(50),
                'created_at' => $createdAt,
                'updated_at' => $createdAt
            ];
        }

        DB::table('blog_modules')->insert($modules);
    }
}
