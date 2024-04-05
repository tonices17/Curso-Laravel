<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNoteRequest extends FormRequest
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
            'title' => 'bail|required|string|max:255|unique:notes,title',
            'description' => 'bail|required|string|max:255|nullable',
            'author' => 'bail|required|integer',
            'deadline' => 'bail|required|date',
            'done' => 'bail|required|boolean',
        ];
    }
}
