<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\NotificationResource;

class NotificationController extends Controller
{
 public function index(Request $request)
{
    $notifications = $request->user()
        ->notifications()
        ->latest()
        ->get();

    return response()->json([
        'data' => NotificationResource::collection($notifications)
    ]);
}
public function markAsRead(Request $request)
{
    $request->user()->unreadNotifications->markAsRead();

    return response()->json([
        'message' => 'All notifications marked as read'
    ]);
}
}
