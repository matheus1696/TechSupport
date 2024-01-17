<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'name' => 'nullable|min:1|max:50',
            'con_usuario_1' => 'nullable|celular_com_ddd',
            'con_usuario_2' => 'nullable|celular_com_ddd',
            'password' => 'nullable|min:8|confirmed',
            ''
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
            'name' => 'nome completo',
            'con_usuario_1' => 'telefone',
            'con_usuario_2' => 'telefone',
            'password'=>'senha',
        ];
    }
}
