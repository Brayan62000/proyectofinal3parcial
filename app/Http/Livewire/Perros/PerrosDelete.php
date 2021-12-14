<?php

namespace App\Http\Livewire\Perros;

use App\Models\Perro;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class PerrosDelete extends Component
{
    public Perro $perro;
    public function render()
    {
        return view('livewire.perros.perros-delete');
    }

    public function delete(){
        $this->perro->delete();
        Storage::disk("public")->delete($this->perro->foto);
        return redirect(route("perros.index"));
    }
}
