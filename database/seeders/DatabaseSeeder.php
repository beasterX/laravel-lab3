<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
{
    \App\Models\Author::factory()
        ->count(5)
        ->hasPosts(3)
        ->create()
        ->each(function ($author) {
            $author->posts->each(function ($post) {
                \App\Models\Comment::factory()->count(4)->create([
                    'post_id' => $post->id,
                ]);
            });
        });
    }
}
