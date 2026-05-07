<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Post;

/**
 * @extends Factory<Comment>
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
            'content' => $this->faker->paragraph,
            'user_id' => User::inRandomOrder()->first()->id ?? User::factory()->create()->id,
            'post_id' => Post::inRandomOrder()->first()->id ?? Post::factory()->create()->id,
        ];
    }
}
