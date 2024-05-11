<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductRequest extends FormRequest
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
            'code' => [
                'required',
                Rule::unique('products')->ignore($this->product),
            ],
            'title' => 'required',
            'description' => 'nullable|min:20',
            'product_classification_id' => 'required',
            'product_unit_id' => 'required',
            'product_type_id' => 'required',
        ];
    }
}
