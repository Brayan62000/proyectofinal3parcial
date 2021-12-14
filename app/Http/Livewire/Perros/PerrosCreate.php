<?php

namespace App\Http\Livewire\Perros;

use App\Models\Perro;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class PerrosCreate extends Component
{
    use WithFileUploads;
    public Perro $perro;
    public $foto;
    public  function mount(){
        $this->perro= new Perro();
    }

    public function render()
    {
        return view('livewire.perros.perros-create');
    }

    public function crear(){
        $this->validate();
        if($this->foto!=null){
            $this->perro->foto = Storage::disk("public")->put("images/perros",$this->foto);
        }
        $this->perro->save();
        return redirect(route("perros.index"));

    }

    public function rules(){
        return perrosRules::Reglas();
    }
}
