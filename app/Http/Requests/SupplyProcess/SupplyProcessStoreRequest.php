<?php

namespace App\Http\Requests\SupplyProcess;

use Illuminate\Foundation\Http\FormRequest;

class SupplyProcessStoreRequest extends FormRequest
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
            'inspector_head_user_id' => 'required',
            'inspector_deputy_user_id' => 'required',            
            'demantant_user_id' => 'required',
            'requesting_user_id' => 'required',
        ];
    }
}
