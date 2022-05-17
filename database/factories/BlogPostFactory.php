<?php

namespace Database\Factories;

use App\Models\Blog\BlogCategory;
use App\Models\Blog\BlogCourse;
use App\Models\Blog\BlogModule;
use App\Models\Blog\BlogPost;
use Database\Seeders\BlogCategoriesTableSeeder;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BlogPostFactory extends Factory
{
    protected $model = BlogPost::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition()
    {
        $title = $this->faker->sentence(4);
        $isPublished = rand(1,5) > 1;
        $description = $this->faker->realText(100);
        $text = $this->faker->realText(10000, 2);
        $createdAt = $this->faker->dateTimeBetween('-4 months', '-3 months');

        return [
            'category_id' => BlogCategory::inRandomOrder()->first()->id,
            'course_id' => BlogCourse::inRandomOrder()->first()->id,
            'module_id' => BlogModule::inRandomOrder()->first()->id,
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => $description,
            'text_markdown'=> $text,
            'text_html'=> $text,
            'is_published' => $isPublished,
            'published_at' => $isPublished ? $this->faker->dateTimeBetween('-3 months', '-2 days') : null,
            'created_at' => $createdAt,
            'updated_at' => $createdAt
        ];
    }
}
