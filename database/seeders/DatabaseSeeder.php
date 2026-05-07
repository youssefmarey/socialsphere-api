<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Like;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::factory(10)->create();
        // Post::factory(50)->create();
        // Comment::factory(150)->create();
        // Like::factory(100)->create();
        Like::factory(100)->make()->each(function ($like) {
            Like::firstOrCreate([
                'post_id' => $like->post_id,
                'user_id' => $like->user_id,
            ]);
        });
    }
}
