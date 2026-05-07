<?php

namespace Database\Factories;

use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Like>
 */
class LikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $post = Post::inRandomOrder()->first() ?? Post::factory()->create();
        $user = User::inRandomOrder()->first() ?? User::factory()->create();

         return [
        'post_id' => $post->id,
        'user_id' => $user->id,
    ];
    }
}
