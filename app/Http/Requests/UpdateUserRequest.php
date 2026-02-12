<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $userId = $this->route('user');

        return [
            "name" => "sometimes|string",
            "user_name" => "sometimes|string|unique:users,user_name," . $userId,
            "email" => "sometimes|string|email|unique:users,email," . $userId,
            "password" => "sometimes|string|min:8",
            "phone" => "sometimes|string|unique:users,phone," . $userId,
            "gender" => "sometimes|in:male,female",
            "role" => "sometimes|in:admin,company,programmer",
            "bio" => "sometimes|nullable|string|max:200",
            "country" => "sometimes|nullable|string",
            "date_of_birth" => "sometimes|nullable|date",
            "img_url" => "sometimes|nullable|string",
        ];
    }
}
