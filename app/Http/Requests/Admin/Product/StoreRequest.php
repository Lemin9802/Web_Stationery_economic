<?php

namespace App\Http\Requests\Admin\Product;

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
            'name_product' => 'required',
            'category_id' => 'required',
            'image' => 'required',
            'price' => 'required',
            'sale_price' => 'required',
            'description' => 'required',
            'image_list' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name_product.required' => 'Please enter a product name!',
            'category_id.required' => 'Please choose a category!',
            'image.required' => 'Please choose image!',
            'price.required' => 'Please enter a price!',
            'sale_price.required' => 'Please enter a sale_price!',
            'description.required' => "Please enter a description!",
            'image_list.required' => "If you don't have a list of images, please enter a text or do nothing!"
        ];
    }
}
