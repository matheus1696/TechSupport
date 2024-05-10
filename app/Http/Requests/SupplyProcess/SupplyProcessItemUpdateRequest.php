<?php

namespace App\Http\Requests\SupplyProcess;

use Illuminate\Foundation\Http\FormRequest;

class SupplyProcessItemUpdateRequest extends FormRequest
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
        return [
            'process_id' => 'required',
            'product_id' => 'required',
            'units_id' => 'required',
            'warranty' => 'required|integer',
            'reference_model_1' => 'nullable|min:6',
            'reference_model_2' => 'nullable|min:6',
            'reference_model_3' => 'nullable|min:6',
        ];
    }
}
