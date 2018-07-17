<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed'
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Campo nome é obrigatório',
            'email.required' => 'Campo email é obrigatório',
            'password.required' => 'Campo senha é obrigatório',
            'name.max' => 'Nome deve conter no máximo 255 caracteres',
            'email.max' => 'E-mail deve conter no máximo 255 caracteres',
            'email.unique' => 'Esse e-mail já foi cadastrado',
            'password.min' => 'Senha deve conter pelo menos 6 caracteres',
            'password.confirmed' => 'As senhas não são iguais'
        ];
    }
}
