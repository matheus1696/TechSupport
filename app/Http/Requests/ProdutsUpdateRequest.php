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
            'title' => [
                'required',
                Rule::unique('products')->ignore($this->product),
            ],
            'code' => [
                'required',
                'min:2',
                'uppercase',
                Rule::unique('products')->ignore($this->product),
            ],
            'description' => 'required|min:20',
            'type' => 'required',
        ];
    }
}
