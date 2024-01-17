<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyOrganizationalStoreRequest extends FormRequest
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
            'no_setor' => 'required',
            'sg_setor' => 'required|min:2|uppercase|unique:company_organizational',
            'hie_setor' => 'required',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'no_setor' => 'setor',
            'sg_setor' => 'sigla',
            'hie_setor' => 'hierarquia',
        ];
    }
}
