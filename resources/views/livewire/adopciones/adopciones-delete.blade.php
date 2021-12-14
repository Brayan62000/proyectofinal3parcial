<div>
    <div class="card text-white bg-success mx-auto text-center" style="width: 25em;">
        <div class="card-body">
            <h5 class="card-title">Eliminar proceso de adopción</h5>
            <p>
                <hr class="dropdown-divider">
            </p>
            @foreach ($perros as $perro)
            @if ($perro->id == $adopcion->id_perro)
            <h5 class="card-title">Datos del perro</h5>
            <p class="card-text">Nombre: {{$perro->nombre}}</p>
            <p class="card-text">Raza: {{$perro->raza}}</p>
            <p class="card-text">Sexo: {{$perro->sexo}}</p>
            @endif
            @endforeach
            <p>
                <hr class="dropdown-divider">
            </p>
            @foreach ($usuarios as $usuario)
            @if ($usuario->id == $adopcion->id_usuario)
            <h5 class="card-title">Datos del usuario</h5>
            <p class="card-text">Nombre: {{$usuario->nombre." ".$usuario->apellido}}</p>
            <p class="card-text">Correo: {{$usuario->email}}</p>
            <p class="card-text">Telefono: {{$usuario->telefono}}</p>
            @endif
            @endforeach
            <p>
                <hr class="dropdown-divider">
            </p>
            <p class="card-text">¿Está seguro de que quiere eliminar este proceso de adopción?, esta acción no se podrá deshacer</p>
            <button wire:click="delete" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Confirmar</button>
            <a href="{{route('adopciones.index')}}" class="btn btn-secondary"><i class="fas fa-undo-alt"></i> Regresar</a>
        </div>
    </div>
</div>