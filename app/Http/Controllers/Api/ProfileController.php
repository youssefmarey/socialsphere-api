<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\ProfileResource;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\UserResource;

class ProfileController extends Controller
{
    public function index(Request $request) {
        $user = User::with([
        'posts' => function ($query) {
            $query->withCount(['comments', 'likes']);
        },
        'posts.comments.user',
        'posts.likes.user',
        'posts.user'
    ])
    ->withCount(['posts', 'followers', 'following'])
    ->withExists([
        'followers as is_following' => function ($query) use ($request) {
            $query->where('follower_id', $request->user()->id);
        }
    ])
    ->findOrFail($request->user()->id);

        return response()->json([
            'data' => new ProfileResource($user),
        ], 200);
    }

    public function show($username, Request $request)
{
    $user = User::with([
        'posts' => function ($query) {
            $query->withCount(['comments', 'likes']);
        },
        'posts.comments.user',
        'posts.likes.user',
        'posts.user'
    ])
    ->withCount(['posts', 'followers', 'following'])
    ->withExists([
        'followers as is_following' => function ($query) use ($request) {
            $query->where('follower_id', $request->user()->id);
        }
    ])->where('name', $username)->firstOrFail();

    return response()->json([
        'data' => new ProfileResource($user),
    ], 200);
}

public function uploadImage(Request $request)
{
    $request->validate([
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
    ]);

    $user = $request->user();

    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('images/users', 'public');
        $user->update([
            'image' => $path
        ]);
    }

    return response()->json([
        'message' => 'Image uploaded successfully',
        'image' => $user->image ? asset('storage/' . $user->image) : null,
    ]);
}

public function deleteImage(Request $request)
{
    $user = $request->user();

    if ($user->image) {
        Storage::disk('public')->delete($user->image);
        $user->update([
            'image' => null
        ]);
    }

    return response()->json([
        'message' => 'Image deleted successfully'
    ]);
}

public function updateProfile(Request $request)
{
    $user = $request->user();

    $request->validate([
        'name' => 'sometimes|required|string|max:255',
        'email' => 'sometimes|required|email|max:255|unique:users,email,' . $user->id,
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Upload image if provided
    if ($request->hasFile('image')) {
        // Delete old image if exists
        if ($user->image) {
            Storage::disk('public')->delete($user->image);
        }

        $imagePath = $request->file('image')->store('images/users', 'public');
        $user->image = $imagePath;
    }

    // Update user data
    $user->update([
        'name' => $request->name,
        'email' => $request->email,
    ]);
   

    return response()->json([
        'message' => 'Profile updated successfully',
        'user' => new UserResource($user),
    ]);
}

}
