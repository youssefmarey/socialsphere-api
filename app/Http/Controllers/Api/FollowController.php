<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Follow;
use App\Models\User;
use App\Notifications\NewInteractionNotification;
class FollowController extends Controller
{
    public function follow(Request $request, $userId)
{
     $authUser = $request->user();

    if ($authUser->id == $userId) {
        return response()->json([
            'message' => "You can't follow yourself"
        ], 400);
    }

    $userToFollow = User::findOrFail($userId);

    $follow = Follow::where('follower_id', $authUser->id)
        ->where('following_id', $userId)
        ->first();

    if ($follow) {
        $follow->delete();

        return response()->json([
            'following' => false,
            'message' => 'Unfollowed successfully'
        ]);
    }

    Follow::create([
        'follower_id' => $authUser->id,
        'following_id' => $userId,
    ]);

    // 🔥 Notification
    if ($userToFollow->id != $authUser->id) {
        $userToFollow->notify(
            new NewInteractionNotification(
                $authUser,
                'follow',
                null
            )
        );
    }

    return response()->json([
        'following' => true,
        'message' => 'Followed successfully'
    ]);
}
}
