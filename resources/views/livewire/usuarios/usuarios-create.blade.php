<div>
    <form wire:submit.prevent="crear">
        <div class="card text-white bg-success mb-3 mt-4">
            <div class="card-header text-center fw-bolder">
            <i class="fas fa-user-plus"></i> Registrar nuevo usuario
            </div>
            <div class="card-body">
                @include("livewire.usuarios.formulario")
            </div>
            <div class="card-footer text-muted text-center">
                <button wire:loading.attr="disabled" wire:target="foto" wire:click="crear" type="submit" class="btn btn-dark"><i class="fas fa-check"></i> Registrar</button>
                <a href="{{route('usuarios.index')}}" class="btn btn-secondary"><i class="fas fa-undo-alt"></i> Regresar</a>
            </div>
        </div>
    </form>
</div>
