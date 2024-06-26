<?php

namespace App\Http\Requests\Inventory\Pharmacy;

use Illuminate\Foundation\Http\FormRequest;

class StoreInventoryPharmacyHistoryRequest extends FormRequest
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
            'quantity' => 'required',
            'medication_id' => 'required',
            'establishment_id' => 'required',
            'establishment_department_id' => 'required',
        ];
    }
}
