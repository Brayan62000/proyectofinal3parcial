<div>
    <div class="card text-white bg-success mx-auto text-center" style="width: 25em;">
        <img style="width:180px;" src="{{Storage::disk('public')->url($usuario->foto!=null ? $usuario->foto : 'images/usuarios/default.png')}}" class="card-img-top mx-auto mt-4" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$usuario->nombre." ".$usuario->apellido}}</h5>
            <p class="card-text">telefono: {{$usuario->telefono}}</p>
            <p class="card-text">direccion: {{$usuario->direccion}}</p>
            <p class="card-text">E-mail: {{$usuario->email}}</p>
            <p class="card-text">Registrado en: {{$usuario->created_at}}</p>
            <a href="{{route('usuarios.index')}}" class="btn btn-secondary d-block"><i class="fas fa-undo-alt"></i> Regresar</a>
        </div>
    </div>
</div>