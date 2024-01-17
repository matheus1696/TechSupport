<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BiddingUpdateRequest extends FormRequest
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
            'no_processo' => 'required|min:6',
            'desc_processo' => 'required|min:20',
            'cod_processo' => [
                'nullable',
                'max:9',
                'min:8',
                'uppercase',
                Rule::unique('bidding_process')->ignore($this->bidding),
            ],
            'cod_pregao' => [
                'nullable',
                'max:9',
                'min:8',
                'uppercase',
                Rule::unique('bidding_process')->ignore($this->bidding),
            ],
            'cod_contrato' => [
                'nullable',
                'max:9',
                'min:8',
                'uppercase',
                Rule::unique('bidding_process')->ignore($this->bidding),
            ],
            'data_inicio' => 'nullable|date',
            'data_vencimento' => 'nullable|date',
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
            'no_processo' => 'título do processo',
            'desc_processo' => 'objetivo do processo',
            'cod_processo' => 'código do processo',
            'cod_pregao' => 'código do pregão',
            'cod_contrato' => 'código do contrato',
            'data_inicio' => 'data de inicio',
            'data_vencimento' => 'data de vencimento',
        ];
    }
}
