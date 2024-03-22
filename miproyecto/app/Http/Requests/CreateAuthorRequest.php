<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAuthorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id' => 'bail|required|integer|unique:authors,id',
            'name' => 'bail|required|string|min:3|max:255',
            'email' => 'bail|required|string|min:3|max:255|unique:authors,email',
        ];
    }

    public function messages(): array
    {
        return [
            'id.required' => 'El id es obligatorio',
            'id.intnameeger' => 'El id no tiene formato correcto',
            'id.unique' => 'El id tiene que ser único',
            'name.required' => 'El nombre es obligatorio',
            'name.string' => 'El nombre no tiene formato correcto',
            'name.max' => 'El nombre tiene un tamaño demasiado grande',
            'email.required' => 'El email es obligatorio',
            'email.unique' => 'El email tiene que ser único',
            'email.string' => 'El email no tiene formato correcto',
            'email.max' => 'El email tiene un tamaño demasiado grande',
        ];
    }
}
