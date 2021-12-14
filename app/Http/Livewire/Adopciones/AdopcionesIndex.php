<?php

namespace App\Http\Livewire\Adopciones;

use App\Models\Adopcion;
use Livewire\Component;
use Livewire\WithPagination;


class AdopcionesIndex extends Component
{
    use WithPagination;
    public $search;
    public $cargado = false;
    public function render()
    {
        $adopciones = ($this->cargado==true) ? Adopcion::join("usuarios","adopcions.id_usuario","=","usuarios.id") 
        ->join("perros","adopcions.id_perro","=","perros.id")
        ->select("adopcions.id"
        ,"usuarios.nombre as usuario_nombre",
        "usuarios.apellido",
        "perros.nombre as perro_nombre"
        )->where("adopcions.id","LIKE", "%" .$this->search. "%")
        ->orwhere("usuarios.nombre","LIKE", "%" .$this->search. "%")
        ->orwhere("usuarios.apellido","LIKE", "%" .$this->search. "%")
        ->orwhere("perros.nombre","LIKE", "%" .$this->search. "%")
        //->orwhere("adopcions.created_at","LIKE", "%" .$this->search. "%")
        ->orderby("adopcions.id")
        ->paginate(10) : [];

        return view('livewire.adopciones.adopciones-index',compact("adopciones"));
    }

    public function updatingSearch(){
        $this->resetPage();
    }

    public function cargando(){
        $this->cargado=true;
    }
}
