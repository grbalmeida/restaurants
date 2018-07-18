<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
            'name' => 'required|min:5|max:255',
            'price' => 'required'
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Campo nome é obrigatório',
            'name.min' => 'O nome deve conter pelo menos 5 caracteres',
            'name.max' => 'O nome deve conter no máximo 255 caracteres',
            'price.required' => 'Campo preço é obrigatório'
        ];
    }
}
