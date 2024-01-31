<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyEstablishmentsStoreRequest extends FormRequest
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
            'code' => 'required|min:6|unique:company_establishments',
            'title' => 'required|unique:company_establishments',
            'address' => 'required',
            'number' => 'required',
            'district' => 'required',
            'city_id' => 'required',
            'type_establishment_id' => 'required',
            'attention_level_id' => 'required',
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
            'code' => 'CNES',
            'title' => 'estabelecimento',
            'address' => 'logradouro',
            'number' => 'nº',
            'district' => 'bairro',
            'city_id' => 'cidade',
            'type_establishment_id' => 'tipo de estabelecimento',
            'attention_level_id' => 'nivel de atenção',
        ];
    }
}
