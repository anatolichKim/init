<?php

namespace Database\Factories;

use App\Models\Blog\BlogComment;
use App\Models\Blog\BlogPost;
use App\Models\Users\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BlogCommentFactory extends Factory
{
    protected $model = BlogComment::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $isPublished = rand(1,5) > 1;
        $createdAt = $this->faker->dateTimeBetween('-3 months', '-2 months');
        $postId = BlogPost::inRandomOrder()->first()->id;

        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'post_id' => $postId,
            'parent_id' => null,
            'message' => $this->faker->realText(50),
            'is_published' => $isPublished,
            'published_at' => $isPublished ? $this->faker->dateTimeBetween('-3 months', '-1 days') : null,
            'created_at' => $createdAt,
            'updated_at' => $createdAt
        ];
    }
}
