<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Livewire\Component;
use Livewire\WithPagination;

class UsuariosIndex extends Component
{
    protected $paginationTheme="bootstrap";
    use WithPagination;
    public $search;
    public $cargado=false;

    public function render()
    {
        $usuarios = ($this->cargado==true) ? Usuario::where("nombre","LIKE", "%" .$this->search. "%")
        ->orwhere("apellido","LIKE", "%" .$this->search. "%")
        ->orwhere("telefono","LIKE", "%" .$this->search. "%")
        ->orwhere("direccion","LIKE", "%" .$this->search. "%")
        ->orwhere("email","LIKE", "%" .$this->search. "%")
        ->orwhere("id","LIKE", "%" .$this->search. "%")
        ->paginate(10) : [];
        return view('livewire.usuarios.usuarios-index',compact("usuarios"));
    }

    public function cargado(){
        $this->resetPage();
    }

    public function cargando(){
        $this->cargado=true;
    }
}
