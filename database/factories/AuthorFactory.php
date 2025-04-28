<?php

namespace Database\Factories;
use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
       
            'name' => fake()->name,
            'email'=> fake()->email,
            'created_at' => now(),  // Use the current timestamp for created_at
            'updated_at' => now(),
        ];
    }
}

//php artisan make:factory AuthorFactory
