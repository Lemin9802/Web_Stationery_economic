<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:30',
            'email' => 'required|unique:users,email',
            'phone' => 'unique:users,phone',
            'address' => 'required',
            'password' => 'required|confirmed|min:8',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter Username!',
            'name.max' => 'Please enter your name up to 30 characters!',
            'email.required' => 'Please enter email!',
            'email.unique' => 'Email already exists!',
            'phone.unique' => 'Phone number already exists!',
            'address.required' => 'Please enter a address!',

            'password.required' => 'Please enter a password!',
            'password.min' => 'Password must be at least 8 characters!',
            'password.confirmed' => 'Incorrect confirm password!'
        ];
    }
}
