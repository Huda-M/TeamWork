<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
        return [
            "name" => "required|string",
            "user_name" => "required|string|unique:users,user_name",
            "email" => "required|string|email|unique:users,email",
            "password" => "required|string|min:8",
            "phone" => "required|string|unique:users,phone",
            "gender" => "required|in:male,female",
            "role" => "required|in:admin,company,programmer",
            "bio" => "nullable|string|max:200",
            "country" => "nullable|string",
            "date_of_birth" => "nullable|date|before:today",
            "avatar_url" => "nullable|string",
        ];
    }
}
