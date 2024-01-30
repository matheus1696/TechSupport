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
            'product' => [
                'required',
                Rule::unique('products')->ignore($this->code, 'code'),
            ],
            'code' => [
                'required',
                'min:2',
                'uppercase',
                Rule::unique('products')->ignore($this->code, 'code'),
            ],
            'description' => 'required|min:20',
            'type' => 'required',
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
            'product' => 'nome do produto',
            'code' => 'código do produto',
            'description' => 'descrição do produto',
            'type' => 'tipo do produto',
        ];
    }
}
