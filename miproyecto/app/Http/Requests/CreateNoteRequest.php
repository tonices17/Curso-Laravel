<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateNoteRequest extends FormRequest
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
            'id' => 'bail|required|integer|unique:notes,id',
            'title' => 'bail|required|string|min:3|max:255|unique:notes,title',
            'description' => 'bail|string|min:3|max:255|nullable',
            'author' => 'bail|required|string|min:3|max:255',
            'deadline' => 'bail|required|date',
            'done' => 'bail|required|boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'id.required' => 'El id es obligatorio',
            'id.integer' => 'El id no tiene formato correcto',
            'id.unique' => 'El id tiene que ser único',
            'title.required' => 'El titulo es obligatorio',
            'title.string' => 'El titulo no tiene formato correcto',
            'title.max' => 'El titulo tiene un tamaño demasiado grande',
            'title.unique' => 'El titulo tiene que ser único',
            'description.string' => 'La descripcion no tiene formato correcto',
            'description.max' => 'La descripcion tiene un tamaño demasiado grande',
            'author.required' => 'El autor es obligatorio',
            'author.string' => 'El autor no tiene un formato valido',
            'author.max' => 'El autor es demasiado grande',
            'deadline.required' => 'La fecha limite es obligatoria',
            'deadline.date' => 'La fecha no tiene un formato correcto',
            'done.required' => 'La campo done es obligatorio',
            'done.boolean' => 'El campo done tiene un formato incorrecto',
        ];
    }
}
