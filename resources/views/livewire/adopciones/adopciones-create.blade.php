<div>
    <form wire:submit.prevent="crear">
        <div class="card text-white bg-success mb-3 mt-4">
            <div class="card-header text-center fw-bolder">
                <i class="fas fa-paw"></i> Iniciar proceso de adopción
            </div>
            <div class="card-body">
                @include("livewire.adopciones.formulario")
            </div>
            <div class="card-footer text-muted text-center">
                <button wire:click="crear" type="submit" class="btn btn-dark"><i class="fas fa-check"></i> Aceptar</button>
                <a href="{{route('adopciones.index')}}" class="btn btn-secondary"><i class="fas fa-undo-alt"></i> Regresar</a>
            </div>
        </div>
    </form>
</div>