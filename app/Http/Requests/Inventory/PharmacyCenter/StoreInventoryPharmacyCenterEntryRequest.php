<?php

namespace App\Http\Requests\Inventory\PharmacyCenter;

use Illuminate\Foundation\Http\FormRequest;

class StoreInventoryPharmacyCenterEntryRequest extends FormRequest
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
            'invoice' => 'required|min:1',
            'supply_order' => 'required|min:8',
            'supply_company' => 'required|min:1',
            'date' => 'required',
            'quantity' => 'required',
            'medication_id' => 'required',
            'financial_block_id' => 'required',
            'establishment_entry_id' => 'required',
            'establishment_department_entry_id' => 'required',
        ];
    }
}
