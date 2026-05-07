<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\UserResource;
use App\Http\Resources\CommentResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        
        return [    
            'id' => $this->id,
            'content' => $this->content,
            'image' => $this->image,
            'user' => new UserResource($this->whenLoaded('user')),
            'created_at' => $this->created_at->diffForHumans(),
            'updated_at' => $this->updated_at->diffForHumans(),
            'comments' => CommentResource::collection($this->whenLoaded('comments')),
            'comment_count' => $this->comments_count,
            'likes_count' => $this->likes_count,
            'is_liked' => $this->likes()->where('user_id', auth()->id())->exists(),
            'liked_by' => $this->likes->map(function ($like) {
                return [
                    'id' => $like->user->id,
                    'name' => $like->user->name,
                ];
            }),
        ];
    }
}
