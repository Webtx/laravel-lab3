<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // create 5 authors with fake data
        Author::factory(5)->create()->each(function ($author) {
            // for each author, create 3 posts
            $author->posts()->createMany(
                Post::factory(3)->make()->toArray()
            );
        });

        // optionally, create some comments for each post
        Post::all()->each(function ($post) {
            Comment::factory(5)->create(['post_id' => $post->id]);
        });
    }
}
