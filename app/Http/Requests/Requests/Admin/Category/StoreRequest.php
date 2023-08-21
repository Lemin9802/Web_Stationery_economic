<?php

namespace App\Http\Requests\Requests\Admin\Category;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            // 
            'name_category' => 'required|unique:categories,name_category|max:20',
        ];
    }

    public function messages()
    {
        return [
            'name_category.required' => 'Please enter a category name!',
            'name_category.max' => 'Please enter a brief category name (Less than 20 characters) !',
            'name_category.unique' => 'Category already exists!'
        ];
    }
}
