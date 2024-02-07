<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CompanyOrganizationalUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required',
            'acronym' => [
                'required',
                'min:2',
                'string',
                'uppercase',
                Rule::unique('company_organizational')->ignore($this->organizational),
            ],
            'hierarchy' => 'required',
        ];
    }
}
