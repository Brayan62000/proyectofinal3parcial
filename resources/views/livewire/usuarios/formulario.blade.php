<div class="row">
    <div class="col-4 mx-auto">
    <h5 class="card-title">Fotografia</h5>
        @if($foto != null)
        <img style="width:226px" src="{{$foto!=null ? $foto->temporaryUrl() :Storage::disk('public')->url('images/usuarios/default.png')}}" alt="">
        @else
        <img style="width:226px" src="{{Storage::disk('public')->url($usuario->foto!=null ? $usuario->foto : 'images/usuarios/default.png') }}" alt="">
        @endif

        <div wire:loading wire:target="foto" class="spinner-border text-light" style="width: 40px; height: 40px;" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Subir foto del usuario</label>
            <input wire:model="foto" class="form-control" type="file" id="formFile">
            @error("foto")
            <span class="text-warning"><i class="fas fa-exclamation-circle"></i> {{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="col-4 mx-auto">
    <h5 class="card-title">Datos de contacto</h5>
        <div class="mb-3">
            <label>Nombre:</label>
            <input wire:model.defer="usuario.nombre" type="text" class="form-control">
            @error("usuario.nombre")
            <span class="text-warning"><i class="fas fa-exclamation-circle"></i> El nombre es necesario.</span>
            @enderror
        </div>

        <div class="mb-3">
            <label>Apellido:</label>
            <input wire:model.defer="usuario.apellido" type="text" class="form-control">
            @error("usuario.apellido")
            <span class="text-warning"><i class="fas fa-exclamation-circle"></i> El apellido es necesario.</span>
            @enderror
        </div>

        <div class="mb-3">
            <label>Telefono:</label>
            <input wire:model.defer="usuario.telefono" type="text" class="form-control">
            @error("usuario.telefono")
            <span class="text-warning"><i class="fas fa-exclamation-circle"></i> El telefono es necesario.</span>
            @enderror
        </div>


        <div class="mb-3">
            <label>Direccion:</label>
            <input wire:model.defer="usuario.direccion" type="text" class="form-control">
            @error("usuario.direccion")
            <span class="text-warning"><i class="fas fa-exclamation-circle"></i> La direccion es necesaria.</span>
            @enderror
        </div>
    </div>

    <div class="col-4 mx-auto">
    <h5 class="card-title">Datos de cuenta</h5>
        <div class="mb-3">
            <label>Correo electronico:</label>
            <input wire:model.defer="usuario.email" type="email" class="form-control">
            @error("usuario.email")
            <span class="text-warning"><i class="fas fa-exclamation-circle"></i> El correo es necesario</span>
            @enderror
        </div>

        <div class="mb-3">
            <label>Contraseña:</label>
            <input autocomplete="new-password" wire:model.defer="password" type="password" class="form-control">
            @error("password")
            <span class="text-warning"><i class="fas fa-exclamation-circle"></i> Revise que la contraseña contenga al menos 8 caracteres y que coincida con la confirmación</span>
            @enderror
        </div>

        <div class="mb-3">
            <label>Confirmar contraseña:</label>
            <input wire:model.defer="confirmar" type="password" class="form-control">
            @error("confirmar")
            <span class="text-warning"><i class="fas fa-exclamation-circle"></i> Revise que coincida con la contraseña y que contenga 8 caracteres</span>
            @enderror
        </div>
    </div>
</div>