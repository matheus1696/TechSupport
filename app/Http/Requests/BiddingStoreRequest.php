<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BiddingStoreRequest extends FormRequest
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
            'no_processo' => 'required|min:6',
            'desc_processo' => 'required|min:20',
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
            'no_processo' => 'título do processo',
            'desc_processo' => 'objetivo do processo',
        ];
    }
}
