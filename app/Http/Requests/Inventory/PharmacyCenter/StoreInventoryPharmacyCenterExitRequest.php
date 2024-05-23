<?php

namespace App\Http\Requests\Inventory;

use Illuminate\Foundation\Http\FormRequest;

class StoreInventoryPharmacyCenterExitRequest extends FormRequest
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
            'establishment_department_exit_id' => 'required',
        ];
    }
}
