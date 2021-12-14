<div>
    <div class="card text-white bg-success mx-auto text-center" style="width: 25em;">
        <img style="width:180px;" src="{{Storage::disk('public')->url($perro->foto!=null ? $perro->foto : 'images/perros/default.png')}}" class="card-img-top mx-auto mt-4" alt="...">
        <div class="card-body">
            <h5 class="card-title">Datos de {{$perro->nombre}}</h5>
            <p class="card-text">Raza: {{$perro->raza}}</p>
            <p class="card-text">Sexo: {{$perro->sexo}}</p>
            <p class="card-text">Peso: {{$perro->peso}}</p>
            <p class="card-text">Fecha de nacimiento: {{$perro->fecha_nacimiento}} kg.</p>
            <p class="card-text">Registrado en: {{$perro->created_at}}</p>
            <a href="{{route('perros.index')}}" class="btn btn-secondary d-block"><i class="fas fa-undo-alt"></i> Regresar</a>
        </div>
    </div>
</div>