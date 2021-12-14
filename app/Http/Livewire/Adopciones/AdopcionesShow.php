<?php

namespace App\Http\Livewire\Adopciones;

use App\Models\Adopcion;
use App\Models\Perro;
use App\Models\Usuario;
use Livewire\Component;


class AdopcionesShow extends Component
{
    public Adopcion $adopcion;
    public function render()
    {
        $perros=Perro::all();
        $usuarios=Usuario::all();
        return view('livewire.adopciones.adopciones-show',compact("perros","usuarios"));
    }
}
