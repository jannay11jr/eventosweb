<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required|regex:/^[a-zA-Z\s]+$/|min:3',
            'telefono' => 'required|regex:/^[0-9]{9}$/',
            'email' => 'required|email',
            'asunto' => 'required|regex:/^[a-zA-Z\s]+$/|min:10',
            'mensaje' => 'required|min:50'
        ];
    }

    public function messages()
{
    return [
         'nombre.required' => 'El nombre es obligatorio',
         'nombre.regex' => 'El nombre no puede contener números',
         'nombre.min' => 'El nombre debe de contener minimo tres caracteres',
         'telefono.required' => 'El telefono es obligatorio',
         'telefono.regex' => 'El telefono debe de contener nueve numeros, no se admiten letras.',
         'email.required' => 'El email es obligatorio',
         'email.email' => 'Formato de email no válido',
         'asunto.required' => 'El asunto es obligatorio',
         'asunto.regex' => 'El asunto solo puede contener letras',
         'asunto.min' => 'El asunto debe de contener un minimo de diez caracteres',
         'mensaje.required' => 'El mensaje es obligatorio',
         'mensaje.min' => 'El mensaje debe de contener minimo cincuenta caracteres'


    ];
    }
}
