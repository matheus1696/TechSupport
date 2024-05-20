<?php

namespace App\Http\Requests\supply;

use Illuminate\Foundation\Http\FormRequest;

class StoreSupplyUnitRequest extends FormRequest
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
            'code' => 'required|unique:supply_units',
            'title' => 'required|unique:supply_units',
            'description' => 'nullable|min:20',
        ];
    }
}
