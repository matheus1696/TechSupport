<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProdutsUpdateRequest extends FormRequest
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
            'no_produto' => 'required',
            'cod_produto' => [
                'required',
                'min:2',
                'uppercase',
                Rule::unique('products')->ignore($this->product),
            ],
            'desc_produto' => 'required|min:20',
            'tp_produto' => 'required',
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
            'no_produto' => 'nome do produto',
            'cod_produto' => 'código do produto',
            'desc_produto' => 'descrição do produto',
            'tp_produto' => 'tipo do produto',
        ];
    }
}
