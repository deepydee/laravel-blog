<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(3, true),
            'description' => fake()->paragraphs(3, true),
            'content' => fake()->paragraphs(15, true),
            'category_id' => rand(2, 7),
            'views' => rand(0, 5000),
            'thumbnail' => "images/test/".rand(1, 6).".jpg",
            'created_at' => fake()->dateTimeBetween('-1 year', 'now'),
            'updated_at' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
