<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProdutUnitsUpdateRequest extends FormRequest
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
                'lowercase',
                Rule::unique('product_units')->ignore($this->unit),
            ],
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'acronym' => 'sigla',
            'title' => 'unidade de medida',
        ];
    }
}
