<?php

namespace App\Http\Requests\Inventory\PharmacyCenter;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInventoryPharmacyCenterHistoryRequest extends FormRequest
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
            'invoice' => 'required',
            'supply_order' => 'required',
            'supply_company' => 'required',
            'date' => 'required',
            'quantity' => 'required',
            'movement' => 'required',
            'medication_id' => 'required',
            'financial_block_id' => 'required',
        ];
    }
}
