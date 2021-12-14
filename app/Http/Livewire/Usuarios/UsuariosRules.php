<?php

namespace App\Http\Livewire\Usuarios;

class UsuariosRules{
    public static function Reglas($id=null){
        $validarpassword= ($id) ? "nullable|min:8":"required|min:8";
        return [
            'usuario.nombre' => 'required|string',
            'usuario.apellido' => 'required|string',
            'usuario.telefono' => 'required|string',
            'usuario.direccion' => 'required|string',
            'usuario.email' => "required|email|unique:usuarios,email,".$id,
            'password' => $validarpassword,
            'confirmar'=> "same:password",
            "foto"=>"nullable|image"
        ]; 
    }
}