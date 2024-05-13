<?php

namespace App\Http\Requests\Inventory;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateInventoryMedicationRequest extends FormRequest
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
            //
            'title' => [
                'required',
                'min:6',
                Rule::unique('medications')->ignore($this->title),
            ],
            'description' => 'nullable|min:10',
            'medication_classification_id' => 'required',
            'medication_unit_id' => 'required',
            'medication_type_id' => 'required',
        ];
    }
}
