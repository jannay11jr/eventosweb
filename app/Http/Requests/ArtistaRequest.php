<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtistaRequest extends FormRequest
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
            'nombre_artista' => 'required|min:3',
            'imagen' => 'required'
        ];
    }


public function messages()
{
    return [
         'nombre.required' => 'El nombre es obligatorio',
         'nombre.min' => 'El nombre tiene que tener minimo tres caracteres',
        'imagen.required' => 'La imagen es requerida'

    ];
    }
}

