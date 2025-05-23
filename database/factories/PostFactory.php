<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Author;
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
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'author_id' => Author::factory(),
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(),
        ];
    }

}
