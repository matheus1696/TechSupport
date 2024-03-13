<?php

namespace App\Http\Requests\SupplyProcess;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SupplyProcessUpdateRequest extends FormRequest
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
            'intended_results' => 'required|min:20',
            'requirements' => 'required|min:20',
            'measures_adopted' => 'required|min:20',
            'modality' => 'required',
            'head_inspector_id' => 'required',
            'deputy_inspector_id' => 'required',
            'code_process' => $codesRules,
            'code_auction' => $codesRules,
            'code_contract' => $codesRules,
            'code_price_registration' => $codesRules,
            'start_date' => 'nullable|date',
            'due_date' => 'nullable|date',
        ];
    }
}
