<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
            'user_id' => 'required|exists:users,id',
            'content' => 'sometimes|required|string|min:3',
            'image' => 'sometimes|required|image|mimes:jpeg,png,jpg,gif,svg|max:20000',
        ];
    }

    public function messages(): array
    {
        return [
            'user_id.required' => 'Please select your user',
            'user_id.exists' => 'User not found',
            'content.sometimes' => 'Please enter your content',
            'content.min' => 'Content must be at least 3 characters long',
            'image.sometimes' => 'Please upload your image',
            'image.image' => 'Image must be an image',
            'image.mimes' => 'Image must be a valid image type',
            'image.max' => 'Image must be less than 20MB',
        ];
    }
}
