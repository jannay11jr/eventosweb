<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventoRequest extends FormRequest
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
            'nombre_evento' => 'required|string|max:20',
            'loc_evento' => 'required|string',
            'fecha_evento' => 'required',
            'desc_evento' => 'required',
            'imagen' => 'required|image',
            'media' => 'required|numeric',
            'precio' => 'required |numeric '
        ];
    }

    public function messages()
    {
        return [
             'nombre_evento.required' => 'El nombre del evento es obligatorio',
             'nombre_evento.string' => 'El nombre del evento solo puede contener caracteres',
             'nombre_evento.max' => 'El nombre del evento debe contener veinte caracteres como máximo',
             'loc.required' => 'La localización es obligatoria',
             'loc.string' => 'La localización solo puede contener caracteres',
             'fecha_evento.required' => 'La fecha del evento es obligatoria',
             'desc_evento.required' => 'La descripción del evento es obligatoria',
             'imagen.required' => 'La imagen del evento es obligatoria',
             'imagen.image' => 'El archivo debe de ser de tipo imagen',
             'media.required' => 'La media de espectadores es obligatoria',
             'media.numeric' => 'La media de espectadores debe de ir en formato númerico',
             'precio.numeric' => 'El precio debe de ir en formato númerico',
             'precio.required' => 'El precio es obligatorio',

        ];
    }
}
