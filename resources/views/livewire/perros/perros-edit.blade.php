<div>
    <form wire:submit.prevent="editar">
        <div class="card text-white bg-success mb-3 mt-4">
            <div class="card-header text-center fw-bolder">
                <i class="fas fa-pen"></i> Editar información de un perro: {{$perro->nombre}}
            </div>
            <div class="card-body">
                @include("livewire.perros.formulario")
            </div>
            <div class="card-footer text-muted text-center">
                <button wire:loading.attr="disabled" wire:target="foto" wire:click="editar" type="submit" class="btn btn-warning text-light"><i class="fas fa-edit"></i> Editar</button>
                <a href="{{route('perros.index')}}" class="btn btn-secondary"><i class="fas fa-undo-alt"></i> Regresar</a>
            </div>
        </div>
    </form>
</div>