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
    public function definition(): array
    {
        return [

            'author_id' => null,
            'title' => fake()->sentence,
            'content' => fake()->sentence,
            'created_at' => now(),  // Use the current timestamp for created_at
            'updated_at' => now(),
        ];
    }
}
