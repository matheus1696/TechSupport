<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FinancialBlocksStoreRequest extends FormRequest
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
            'title' => 'required|unique:company_financial_blocks',
            'acronym' => 'required|min:3|max:15|uppercase|unique:company_financial_blocks',
            'color' => 'required|min:3|max:15|uppercase|unique:company_financial_blocks',
        ];
    }
}
