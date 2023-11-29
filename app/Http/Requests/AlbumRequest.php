<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class AlbumRequest extends FormRequest
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
            'title' => ['required', 'max:255'],
            'compositions' => 'nullable',
            'genres' =>  ['array','nullable'],
            'genres.*' => ['distinct:strict', 'nullable', 'integer', 'exists:genres,id'],
            'content' => 'nullable',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Поле название обязательное',
            'title.max:255' => 'Название слишком длинное',
            'genres.array' => 'Неверно указаны жанры',
            'genres.*.integer' => 'Неверно указаны жанры',
            'genres.*.distinct:strict' => 'Неверно указаны жанры',
            'genres.*.exists:genres,id' => 'Неверно указаны жанры',
        ];
    }
}
