<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductUnitUpdateRequest extends FormRequest
{
    /*
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'acronym' => [
                'required',
                'max:8',
                'uppercase',
                Rule::unique('product_units')->ignore($this->unit),
            ],
            'title' => [
                'required',
                'min:6',
                Rule::unique('product_units')->ignore($this->unit),
            ],
        ];
    }
}
