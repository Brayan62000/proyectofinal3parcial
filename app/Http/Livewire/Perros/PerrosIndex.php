<?php

namespace App\Http\Livewire\Perros;

use App\Models\Perro;
use Livewire\Component;
use Livewire\WithPagination;

class PerrosIndex extends Component
{

    protected $paginationTheme="bootstrap";
    use WithPagination;
    public $search;
    public $cargado=false;

    public function render()
    {
        $perros = ($this->cargado==true) ? Perro::where("nombre","LIKE", "%" .$this->search. "%")
        ->orwhere("raza","LIKE", "%" .$this->search. "%")
        ->orwhere("sexo","LIKE", "%" .$this->search. "%")
        ->orwhere("peso","LIKE", "%" .$this->search. "%")
        ->orwhere("fecha_nacimiento","LIKE", "%" .$this->search. "%")
        ->orwhere("id","LIKE", "%" .$this->search. "%")
        ->paginate(10) : [];
        return view('livewire.perros.perros-index',compact("perros"));
    }
    
    public function cargado(){
        $this->resetPage();
    }

    public function cargando(){
        $this->cargado=true;
    }
}
