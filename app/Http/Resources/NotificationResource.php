<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class NotificationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
        'type' => $this->data['type'] ?? null,
        'user_name' => $this->data['user_name'] ?? null,
        'post_id' => $this->data['post_id'] ?? null,
    ];
    }
}
