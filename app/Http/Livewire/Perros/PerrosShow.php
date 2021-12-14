<?php

namespace App\Http\Livewire\Perros;

use App\Models\Perro;
use Livewire\Component;

class PerrosShow extends Component
{
    public Perro $perro;
    public function render()
    {
        return view('livewire.perros.perros-show');
    }
}
