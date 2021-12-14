<?php

namespace App\Http\Livewire\Adopciones;

use App\Models\Adopcion;
use App\Models\Perro;
use App\Models\Usuario;
use Livewire\Component;


class AdopcionesEdit extends Component
{
    public Adopcion $adopcion;
    public function render()
    {
        $perros=Perro::all();
        $usuarios=Usuario::all();
        return view('livewire.adopciones.adopciones-edit',compact("perros","usuarios"));
    }

    public function editar(){
        $this->validate();
        $this->adopcion->save();
        return redirect(route("adopciones.index"));
    }

    public function rules(){
        return [
            "adopcion.id_usuario" => "required",
            "adopcion.id_perro" => "required"
        ];
    }
}
