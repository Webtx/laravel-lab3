<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'post_id' => null,
            'commenter_name'=>fake()-> name,
            'comment'=>fake()->sentence,
            'created_at' => now(),  // Use the current timestamp for created_at
            'updated_at' => now(),
        ];
    
    }
}
