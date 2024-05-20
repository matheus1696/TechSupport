<?php

namespace App\Http\Requests\supply;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateSupplyUnitRequest extends FormRequest
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
            'code' => [
                'required',
                Rule::unique('supply_units')->ignore($this->supply_type),
            ],
            'title' => [
                'required',
                Rule::unique('supply_units')->ignore($this->supply_type),
            ],
            'description' => 'nullable|min:20',
        ];
    }
}
