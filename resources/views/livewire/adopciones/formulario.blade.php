<div class="row">
    <div class="col-6 mx-auto">
    <div class="mb-3">
            <label class="form-label">Usuario que adoptara: </label>
            <select wire:model="adopcion.id_usuario" class="form-select">
                <option value="">-- Seleccionar opción --</option>
                @foreach ($usuarios as $usuario)
                <option value="{{$usuario->id}}">{{$usuario->nombre}}</option>
                @endforeach
            </select>
            @error("adopcion.id_usuario")
            <span class="text-warning"><i class="fas fa-exclamation-circle"></i> Seleccione una opción</span>
            @enderror
        </div>
    </div>

    <div class="col-6 mx-auto">
        <div class="mb-3">
            <label class="form-label">Perro a adoptar:</label>
            <select wire:model="adopcion.id_perro" class="form-select">
                <option value="">-- Seleccionar opción --</option>
                @foreach ($perros as $perro)
                <option value="{{$perro->id}}">{{$perro->nombre." - ".$perro->raza}}</option>
                @endforeach
            </select>
            @error("adopcion.id_perro")
            <span class="text-warning"><i class="fas fa-exclamation-circle"></i> Seleccione una opción</span>
            @enderror
        </div>
    </div>
</div>