<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SupplyProcessesUpdateRequest extends FormRequest
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
            Rule::unique('supply_processes')->ignore($this->supply_process),            
        ];

        return [
            'title' => 'required|min:6',
            'description' => 'required|min:20',
            'code_process' => $codesRules,
            'code_auction' => $codesRules,
            'code_contract' => $codesRules,
            'code_price_registration' => $codesRules,
            'strat_date' => 'nullable|date',
            'due_date' => 'nullable|date',
        ];
    }
}
