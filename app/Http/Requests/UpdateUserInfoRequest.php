<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserInfoRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust based on your authorization logic
    }

    public function rules()
    {
        return [
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust as needed
            'name' => 'required|string|max:255|regex:/^[\pL\s\-]+$/u', // Only letters, spaces, and hyphens
            'email' => 'required|email|max:255|unique:users,email,' . $this->user()->id,
            'phone' => ['nullable', 'regex:/^\d{10}$/'], // Exactly 10 digits
        ];
    }

    public function messages()
    {
        return [
            'name.regex' => 'The name can only contain letters, spaces, and hyphens.',
            'phone.regex' => 'The phone number must be exactly 10 digits.',
            'email.unique' => 'The email address has already been taken.',
        ];
    }
}