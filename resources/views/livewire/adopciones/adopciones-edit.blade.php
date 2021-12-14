<div>
    <form wire:submit.prevent="editar">
        <div class="card text-white bg-success mb-3 mt-4">
            <div class="card-header text-center fw-bolder">
                <i class="fas fa-pen"></i> Editar proceso de adopción
            </div>
            <div class="card-body">
                @include("livewire.adopciones.formulario")
            </div>
            <div class="card-footer text-muted text-center">
                <button wire:click="editar" type="submit" class="btn btn-warning text-light"><i class="fas fa-edit"></i> Editar</button>
                <a href="{{route('adopciones.index')}}" class="btn btn-secondary"><i class="fas fa-undo-alt"></i> Regresar</a>
            </div>
        </div>
    </form>
</div>
