<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\PostResource;

class ProfileResource extends JsonResource
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
    'name' => $this->name,
    'image' => $this->image ? asset('storage/' . $this->image) : null,

    'posts_count' => $this->posts_count,

    'followers_count' => $this->followers_count,
    'following_count' => $this->following_count,

    'is_following' => $request->user()->id == $this->id 
        ? false 
        : (bool) $this->is_following,

    'posts' => PostResource::collection($this->whenLoaded('posts')),
];
    }
}
