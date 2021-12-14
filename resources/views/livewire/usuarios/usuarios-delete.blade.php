<div>
    <div class="card text-white bg-success mx-auto text-center" style="width: 25em;">
        <img style="width:180px;" src="{{Storage::disk('public')->url($usuario->foto!=null ? $usuario->foto : 'images/usuarios/default.png')}}" class="card-img-top mx-auto mt-4" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$usuario->nombre." ".$usuario->apellido}}</h5>
            <p class="card-text">telefono: {{$usuario->telefono}}</p>
            <p class="card-text">direccion: {{$usuario->direccion}}</p>
            <p class="card-text">E-mail: {{$usuario->email}}</p>
            <p><hr class="dropdown-divider"></p>
            <p class="card-text">¿Está seguro de que quiere eliminar este usuario?, esta acción no se podrá deshacer</p>
            <button wire:click="delete" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Confirmar</button>
            <a href="{{route('usuarios.index')}}" class="btn btn-secondary"><i class="fas fa-undo-alt"></i> Regresar</a>
        </div>
    </div>
</div>