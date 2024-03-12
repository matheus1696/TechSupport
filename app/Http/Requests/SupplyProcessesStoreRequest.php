<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplyProcessesStoreRequest extends FormRequest
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
            'title' => 'required|min:6',
            'description' => 'required|min:20',
            'intended_results' => 'required|min:20',
            'requirements' => 'required|min:20',
            'measures_adopted' => 'required|min:20',
            'modality' => 'required',
            'head_inspector_id' => 'required',
            'deputy_inspector_id' => 'required',
        ];
    }
}
