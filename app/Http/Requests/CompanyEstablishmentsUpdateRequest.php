<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CompanyEstablishmentsUpdateRequest extends FormRequest
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
            'cod_unidade_cnes' => [
                'required',
                'min:6',
                Rule::unique('company_establishments')->ignore($this->establishment),
            ],
            'no_unidade' => [
                'required',
                Rule::unique('company_establishments')->ignore($this->establishment),
            ],
            'end_logradouro' => 'required',
            'end_numero' => 'required',
            'end_bairro' => 'required',
            'cidade_id' => 'required',
            'tipo_estabelecimento_id' => 'required',
            'nivel_atencao_id' => 'required',
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
            'cod_unidade_cnes' => 'CNES',
            'no_unidade' => 'estabelecimento',
            'end_logradouro' => 'logradouro',
            'end_numero' => 'nº',
            'end_bairro' => 'bairro',
            'cidade_id' => 'cidade',
            'tipo_estabelecimento_id' => 'tipo de estabelecimento',
            'nivel_atencao_id' => 'nivel de atenção',
        ];
    }
}
