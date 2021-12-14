<div wire:init="cargando">
    <h1 class="fs-1 mx-auto d-block text-success" style="text-align:center;">Usuarios registrados</h1>
    <div class="row">
        <div class="col-md-9">
            <div class="input-group mb-3">
                <span class="input-group-text bg-success text-light" id="basic-addon1"><i class="fas fa-search"></i></span>
                <input wire:model="search" type="search" class="form-control bg-light text-dark" placeholder="Buscar">
            </div>
        </div>
        <div class="col-md-3">
            <div class="mb-3">
                <a type="button" class="btn btn-outline-success d-block" href="{{route('usuarios.create')}}"><i class="fas fa-user-plus"></i> Registrar nuevo usuario</a>
            </div>
        </div>
    </div>

    @if(count($usuarios)>0)
    <table class="table bg-success table-striped text-center text-light">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Foto</th>
                <th scope="col">Nombre</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Dirección</th>
                <th scope="col">Correo electronico</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr style="vertical-align: middle;">
                <th scope="row" class="text-light">{{$usuario->id}}</th>
                <td><img style="width:50px;height:50px;border-radius:100%;" src="{{Storage::disk('public')->url($usuario->foto!=null ? $usuario->foto : 'images/usuarios/default.png')}}"></td>
                <td class="text-light">{{$usuario->nombre." ".$usuario->apellido}}</td>
                <td class="text-light">{{$usuario->telefono}}</td>
                <td class="text-light">{{$usuario->direccion}}</td>
                <td class="text-light">{{$usuario->email}}</td>
                <td>
                    <a href="{{route('usuarios.show',$usuario)}}" class="btn btn-info text-light"><i class="fas fa-eye"></i></a>
                    <a href="{{route('usuarios.edit',$usuario)}}" class="btn btn-warning text-light"><i class="fas fa-user-edit"></i></a>
                    <a href="{{route('usuarios.delete',$usuario)}}" class="btn btn-danger"><i class="fas fa-user-minus"></i></a>
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

    {{ $cargado==true ? $usuarios->links() : null}}
</div>