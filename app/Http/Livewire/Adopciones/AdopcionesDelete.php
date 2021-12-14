<?php

namespace App\Http\Livewire\Adopciones;

use App\Models\Adopcion;
use App\Models\Perro;
use App\Models\Usuario;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class AdopcionesDelete extends Component
{
    public Adopcion $adopcion;
    public function render()
    {
        $perros=Perro::all();
        $usuarios=Usuario::all();
        return view('livewire.adopciones.adopciones-delete',compact("perros","usuarios"));
    }

    public function delete(){
        $this->adopcion->delete();
        return redirect(route("adopciones.index"));
    }
}
