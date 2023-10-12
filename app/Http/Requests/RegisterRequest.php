<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'registro_nombre' => 'required|regex:/^[a-zA-Z\s]+$/|min:3',
            'registro_dni' =>'required|regex:/\d{8}[A-Za-z]/',
            'registro_email' => 'required|email',
            'registro_password' => 'required|regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&._-€,`+\"#%])[A-Za-z\d@$!%*?&]{8,}$/',/*Minimo un numero, una letra y un caracter especial, minimo ocho caracteres */
            'registro_password2' => 'required|same:registro_password'
        ];
    }

    public function messages()
{
    return [
         'registro_nombre.required' => 'El nombre es obligatorio',
         'registro_nombre.regex' => 'El nombre no puede contener números',
         'registro_nombre.min' => 'El nombre debe de contener minimo tres caracteres',
         'registro_dni.required' => 'El DNI es obligatorio',
         'registro_dni.regex' => 'El DNI debe de tener un formato válido',
         'registro_email.required' => 'El email es obligatorio',
         'registro_email.email' => 'Formato de email no válido',
         'registro_password.required' => 'La contraseña es obligatoria',
         'registro_password.regex' => 'La contraseña debe de tener un núm, letra y caract especial (@$!%*?&._-€,`+\"#%). Mínimo ocho caracteres',
         'registro_password2.required' => 'La contraseña es requerida',
         'registro_password2.same' => 'Las contraseñas no coinciden'

    ];
    }
}
