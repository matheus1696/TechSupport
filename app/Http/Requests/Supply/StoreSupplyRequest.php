<?php

namespace App\Http\Requests\Supply;

use Illuminate\Foundation\Http\FormRequest;

class StoreSupplyRequest extends FormRequest
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
            'code' => 'required|unique:supplies',
            'title' => 'required',
            'description' => 'nullable|min:20',
            'supply_classification_id' => 'required',
            'supply_unit_id' => 'required',
            'supply_type_id' => 'required',
        ];
    }
}
