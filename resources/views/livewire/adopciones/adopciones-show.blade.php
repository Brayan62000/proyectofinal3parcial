<div>
    <div class="card text-white bg-success mx-auto text-center" style="width: 25em;">
        <div class="card-body">
            <h5 class="card-title">Datos del proceso de adopción</h5>
            <p>
                <hr class="dropdown-divider">
            </p>
            @foreach ($perros as $perro)
            @if ($perro->id == $adopcion->id_perro)
            <h5 class="card-title">Datos del perro en adopción</h5>
            <p class="card-text">Nombre: {{$perro->nombre}}</p>
            <p class="card-text">Raza: {{$perro->raza}}</p>
            <p class="card-text">Sexo: {{$perro->sexo}}</p>
            <p class="card-text">Peso: {{$perro->peso}} kg.</p>
            @endif
            @endforeach
            <p>
                <hr class="dropdown-divider">
            </p>
            @foreach ($usuarios as $usuario)
            @if ($usuario->id == $adopcion->id_usuario)
            <h5 class="card-title">Datos del usuario que adoptará</h5>
            <p class="card-text">Nombre: {{$usuario->nombre." ".$usuario->apellido}}</p>
            <p class="card-text">Correo: {{$usuario->email}}</p>
            <p class="card-text">Telefono: {{$usuario->telefono}}</p>
            <p class="card-text">Dirección: {{$usuario->direccion}}</p>
            @endif
            @endforeach


            <a href="{{route('adopciones.index')}}" class="btn btn-secondary d-block"><i class="fas fa-undo-alt"></i> Regresar</a>
        </div>
    </div>
</div>