<?php

namespace App\Http\Requests\Inventory\WarehouseCenter;

use Illuminate\Foundation\Http\FormRequest;

class StoreInventoryWarehouseCenterPermissionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_id'=>'required',
            'establishment_department_id'=>'required',
        ];
    }
}
