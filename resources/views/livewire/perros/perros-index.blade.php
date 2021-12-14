<div wire:init="cargando">
<h1 class="fs-1 mx-auto d-block text-success"style="text-align:center;">Perros registrados</h1>
    <div class="row">
        <div class="col-md-9">
            <div class="input-group mb-3">
                <span class="input-group-text bg-success text-light" id="basic-addon1"><i class="fas fa-search"></i></span>
                <input wire:model="search" type="search" class="form-control bg-light text-dark" placeholder="Buscar">
            </div>
        </div>
        <div class="col-md-3">
            <div class="mb-3">
                <a type="button" class="btn btn-outline-success d-block" href="{{route('perros.create')}}"><i class="fas fa-plus-circle"></i> Registrar nuevo perro</a>
            </div>
        </div>
    </div>

    @if(count($perros)>0)


    <table class="table bg-success table-striped text-center text-light">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Foto</th>
                <th scope="col">Nombre</th>
                <th scope="col">Raza</th>
                <th scope="col">Sexo</th>
                <th scope="col">Peso</th>
                <th scope="col">Fecha de nacimiento</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($perros as $perro)
            <tr style="vertical-align: middle;">
                <th scope="row" class="text-light">{{$perro->id}}</th>
                <td><img style="width:50px;height:50px;border-radius:100%;" src="{{Storage::disk('public')->url($perro->foto!=null ? $perro->foto : 'images/perros/default.png')}}"></td>
                <td class="text-light">{{$perro->nombre}}</td>
                <td class="text-light">{{$perro->raza}}</td>
                <td class="text-light">{{$perro->sexo}}</td>
                <td class="text-light">{{$perro->peso." kg."}}</td>
                <td class="text-light">{{$perro->fecha_nacimiento}}</td>
                <td>
                    <a href="{{route('perros.show',$perro)}}" class="btn btn-info text-light"><i class="fas fa-eye"></i></a>
                    <a href="{{route('perros.edit',$perro)}}" class="btn btn-warning text-light"><i class="fas fa-pen"></i></a>
                    <a href="{{route('perros.delete',$perro)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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

    {{ $cargado==true ? $perros->links() : null}}
</div>