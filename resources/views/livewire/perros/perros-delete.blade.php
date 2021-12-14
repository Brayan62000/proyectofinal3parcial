<div>
    <div class="card text-white bg-success mx-auto text-center" style="width: 25em;">
        <img style="width:180px;" src="{{Storage::disk('public')->url($perro->foto!=null ? $perro->foto : 'images/perros/default.png')}}" class="card-img-top mx-auto mt-4" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$perro->nombre}}</h5>
            <p class="card-text">Raza: {{$perro->raza}}</p>
            <p class="card-text">Sexo: {{$perro->sexo}}</p>
            <p class="card-text">Peso: {{$perro->peso}}</p>
            <p class="card-text">Fecha de nacimiento: {{$perro->fecha_nacimiento}} kg.</p>
            <p><hr class="dropdown-divider"></p>
            <p class="card-text">¿Está seguro de que quiere eliminar este registro?, esta acción no se podrá deshacer</p>
            <button wire:click="delete" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Confirmar</button>
            <a href="{{route('perros.index')}}" class="btn btn-secondary"><i class="fas fa-undo-alt"></i> Regresar</a>
        </div>
    </div>
</div>