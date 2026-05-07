<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCommentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'post_id' => 'sometimes|required|exists:posts,id',
            'content' => 'sometimes|required|string|min:1|max:5000',
            'user_id' => 'sometimes|required|exists:users,id',
        ];
    }
    public function messages(): array{
        return [
            'post_id.sometimes' => 'Post ID is required',
            'post_id.exists' => 'Post ID does not exist',
            'content.sometimes' => 'Content is required',
            'content.min' => 'Content must be at least 1 character long',
            'content.max' => 'Content must be at most 5000 characters long',
            'user_id.sometimes' => 'User ID is required',
            'user_id.exists' => 'User ID does not exist',
        ];
    }
}
