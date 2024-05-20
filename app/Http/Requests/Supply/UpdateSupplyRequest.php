<?php

namespace App\Http\Requests\supply;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateSupplyRequest extends FormRequest
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
            'code' => [
                'required',
                Rule::unique('supplies')->ignore($this->supply),
            ],
            'title' => 'required',
            'description' => 'nullable|min:20',
            'supply_classification_id' => 'required',
            'supply_unit_id' => 'required',
            'supply_type_id' => 'required',
        ];
    }
}
