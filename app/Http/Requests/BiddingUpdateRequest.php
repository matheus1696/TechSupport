<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BiddingUpdateRequest extends FormRequest
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
        $codesRules = [
            'nullable',
            'max:9',
            'min:8',
            'uppercase',
            Rule::unique('bidding_processes')->ignore($this->bidding),            
        ];

        return [
            'title' => 'required|min:6',
            'description' => 'required|min:20',
            'code_process' => $codesRules,
            'code_auction' => $codesRules,
            'code_contract' => $codesRules,
            'strat_date' => 'nullable|date',
            'due_date' => 'nullable|date',
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
            'title' => 'título do processo',
            'description' => 'objetivo do processo',
            'code_process' => 'cód. do processo',
            'code_auction' => 'cód. do pregão',
            'code_contract' => 'cód. do contrato',
            'start_date' => 'data de inicio',
            'due_date' => 'data de vencimento',
        ];
    }
}
