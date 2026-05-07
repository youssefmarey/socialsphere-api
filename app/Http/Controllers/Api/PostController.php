<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Resources\PostResource;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Comment;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $user = auth()->user();

    $followingIds = $user->following()->pluck('id');

    $posts = Post::with([
        'user',
        'comments.user',
        'likes.user'
    ])
    ->withCount(['comments', 'likes'])
    ->whereIn('user_id', $followingIds)
    ->orWhere('user_id', $user->id) 
    ->latest()
    ->paginate(10);

    return response()->json([
        'data' => PostResource::collection($posts),
    ], 200);
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('images/posts', 'public');
        }

        $post = Post::create($validatedData);

        return response()->json([
            'message' => 'Post created successfully',
            'post' => new PostResource($post)
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return response()->json([
            'post' => PostResource::make($post->load(['comments', 'user', 'likes']))
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('images/posts', 'public');
        }

        $post->update($validatedData);

        return response()->json([
            'message' => 'Post updated successfully',
            'post' => new PostResource($post)
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return response()->json([
            'message' => 'Post deleted successfully'
        ], 200);
    }
}
