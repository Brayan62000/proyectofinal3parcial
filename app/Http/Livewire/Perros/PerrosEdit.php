<?php

namespace App\Http\Livewire\Perros;

use App\Models\Perro;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class PerrosEdit extends Component
{
    use WithFileUploads;
    public Perro $perro;
    public $foto;
    public function render()
    {
        return view('livewire.perros.perros-edit');
    }

    public function editar(){
        $this->validate();
        if($this->foto!=null){
            if($this->perro->foto !=null){
                Storage::disk("public")->delete($this->perro->foto);
            }
            $this->perro->foto=Storage::disk("public")->put("images/perros",$this->foto);
        }
        $this->perro->save();
        return redirect(route("perros.index"));
    }

    public function rules(){
        return perrosRules::Reglas();
    }
}
