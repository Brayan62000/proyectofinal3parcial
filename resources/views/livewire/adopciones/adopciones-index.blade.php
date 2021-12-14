<div wire:init="cargando">
    <h1 class="fs-1 mx-auto d-block text-success" style="text-align:center;">Procesos de adopción registrados</h1>

    <div class="row">
        <div class="col-md-9">
            <div class="input-group mb-3">
                <span class="input-group-text bg-success text-light" id="basic-addon1"><i class="fas fa-search"></i></span>
                <input wire:model="search" type="search" class="form-control bg-light text-dark" placeholder="Buscar">
            </div>
        </div>
        <div class="col-md-3">
            <div class="mb-3">
                <a type="button" class="btn btn-outline-success d-block" href="{{route('adopciones.create')}}"><i class="fas fa-paw"></i> Iniciar proceso de adopcion</a>
            </div>
        </div>

    </div>

    @if(count($adopciones)>0)


    <table class="table bg-success table-striped text-center text-light">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Usuario</th>
                <th scope="col">Perro</th>

                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($adopciones as $adopcion)
            <tr style="vertical-align: middle;">
                <th scope="row" class="text-light">{{$adopcion->id}}</th>
                <td class="text-light">{{$adopcion->usuario_nombre." ".$adopcion->apellido}}</td>
                <td class="text-light">{{$adopcion->perro_nombre}}</td>

                <td>
                    <a href="{{route('adopciones.show',$adopcion)}}" class="btn btn-info text-light"><i class="fas fa-eye"></i></a>
                    <a href="{{route('adopciones.edit',$adopcion)}}" class="btn btn-warning text-light"><i class="fas fa-pen"></i></a>
                    <a href="{{route('adopciones.delete',$adopcion)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @else
    <div style="text-align: center; margin-top:120px">
        <img style="width:150px;" src="{{Storage::disk('public')->url('images/otros/loading.gif')}}" alt="">
    </div>
    @endif
    {{ $cargado==true ? $adopciones->links() : null}}
</div>