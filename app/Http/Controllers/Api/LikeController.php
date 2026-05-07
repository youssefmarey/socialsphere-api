<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Notifications\NewInteractionNotification;

class LikeController extends Controller
{
    public function toggle(Request $request, $postId)
    {
        $userId = $request->user()->id;

        $post = Post::findOrFail($postId);

        $like = Like::where('post_id', $postId)
            ->where('user_id', $userId)
            ->first();

        if ($like) {
            $like->delete();
            $liked = false;
            $message = "Unlike successful";
        } else {
            Like::create([
                'post_id' => $postId,
                'user_id' => $userId,
            ]);
            $liked = true;
            $message = "You liked this post";

            if ($post->user_id != $userId) {
            $post->user->notify(
                new NewInteractionNotification(
                    $request->user(),
                    'like',
                    $post->id
                )
            );
        }
        }

        $totalLikes = Like::where('post_id', $postId)->count();

        return response()->json([
            'liked' => $liked,
            'message' => $message,
            'likes_count' => $totalLikes,
        ]);
    }
}
