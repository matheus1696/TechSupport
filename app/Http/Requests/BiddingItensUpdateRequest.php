<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BiddingItensUpdateRequest extends FormRequest
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
            'processo_id' => 'required',
            'produto_id' => 'required',
            'quant_adm' => 'nullable|integer',
            'quant_atb' => 'nullable|integer',
            'quant_mac' => 'nullable|integer',
            'quant_vsan' => 'nullable|integer',
            'quant_vepd' => 'nullable|integer',
            'unidade_medida_id' => 'required',
            'garantia' => 'required|integer',
            'modelo_referencia_1' => 'nullable|min:6',
            'modelo_referencia_2' => 'nullable|min:6',
            'modelo_referencia_3' => 'nullable|min:6',
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
            'processo_id' => 'processo',
            'produto_id' => 'produto',
            'quant_adm' => 'quantidade adm',
            'quant_atb' => 'quantidade atb',
            'quant_mac' => 'quantidade mac',
            'quant_vsan' => 'quantidade v. san',
            'quant_vepd' => 'quantidade v. epd',
            'unidade_medida_id' => 'required',
            'garantia' => 'required|number',
            'modelo_referencia_1' => 'modelo de referência',
            'modelo_referencia_2' => 'modelo de referência',
            'modelo_referencia_3' => 'modelo de referência',
        ];
    }
}
