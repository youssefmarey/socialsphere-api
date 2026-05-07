<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Models\Comment;
use App\Http\Resources\CommentResource;
use App\Models\Post;
use App\Notifications\NewInteractionNotification;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCommentRequest $request)
    {
         $data = $request->validated();

    $comment = Comment::create($data);
    $post = Post::find($data['post_id']);
    if ($post && $post->user_id != auth()->id()) {
        $post->user->notify(
            new NewInteractionNotification(
                auth()->user(),
                'comment',
                $post->id
            )
        );
    }

    return response()->json([
        'message' => 'Comment created successfully',
        'comment' => new CommentResource($comment),
    ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentRequest $request,Comment $comment)
    {
        $date = $request->validated();
        $comment->update($date);
        return response()->json([
            'message' => 'Comment updated successfully',
            'comment' => new CommentResource($comment),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return response()->json([
            'message' => 'Comment deleted successfully',
        ]);
    }
}
