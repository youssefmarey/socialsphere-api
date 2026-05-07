<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\LikeController;
use App\Http\Controllers\Api\FollowController;
use App\Http\Controllers\Api\NotificationController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::apiResource('posts', PostController::class);
    Route::apiResource('comments', CommentController::class)->except(['index','show']);
    Route::post('/posts/{postId}/like', [LikeController::class, 'toggle']);

    Route::get('profile', [ProfileController::class, 'index']);
    Route::get('/profile/{username}', [ProfileController::class, 'show']);
    Route::post('/profile/avatar', [ProfileController::class, 'uploadImage']);
    Route::delete('/profile/avatar', [ProfileController::class, 'deleteImage']);
    Route::put('/profile', [ProfileController::class, 'updateProfile']);
    
    Route::post('follow/{userId}', [FollowController::class, 'follow']);

    Route::get('/notifications', [NotificationController::class, 'index']);
    Route::post('/notifications/read', [NotificationController::class, 'markAsRead']);
});




