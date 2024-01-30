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
            'bidding_process' => 'required|min:6',
            'description' => 'required|min:20',
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
            'bidding_process' => 'título do processo',
            'description' => 'objetivo do processo',
        ];
    }
}
