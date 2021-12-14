<?php

namespace App\Http\Livewire\Perros;

class perrosRules{
    public static function Reglas(){
        return [
            'perro.nombre' => 'required|string',
            'perro.raza' => "required|string",
            'perro.sexo' => "required|string",
            'perro.peso' => "required|numeric",
            'perro.fecha_nacimiento' => "required|date",
            "foto"=>"nullable|image"
        ]; 
    }
}