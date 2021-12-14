<div class="row">
    <div class="col-4 mx-auto">
        @if($foto != null)
        <img style="width:243px" src="{{$foto!=null ? $foto->temporaryUrl() :Storage::disk('public')->url('images/perros/default.png')}}" alt="">
        @else
        <img style="width:243px" src="{{Storage::disk('public')->url($perro->foto!=null ? $perro->foto : 'images/perros/default.png') }}" alt="">
        @endif

        <div wire:loading wire:target="foto" class="spinner-border text-light" style="width: 40px; height: 40px;" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Subir foto del perro</label>
            <input wire:model="foto" class="form-control" type="file" id="formFile">
            @error("foto")
            <span class="text-warning"><i class="fas fa-exclamation-circle"></i> {{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="col-6 mx-auto">
        <div class="mb-3">
            <label>Nombre:</label>
            <input wire:model.defer="perro.nombre" type="text" class="form-control">
            @error("perro.nombre")
            <span class="text-warning"><i class="fas fa-exclamation-circle"></i> El nombre es necesario.</span>
            @enderror
        </div>

        <div class="mb-3">
            <label>Raza:</label>
            <input wire:model.defer="perro.raza" type="text" class="form-control">
            @error("perro.raza")
            <span class="text-warning"><i class="fas fa-exclamation-circle"></i> La raza es necesaria.</span>
            @enderror
        </div>

        <div>
            <label class="form-label">Sexo:</label>
            <select wire:model="perro.sexo" class="form-select">
                <option value="">-- Seleccionar opción --</option>
                <option value="Macho">Macho</option>
                <option value="Hembra">Hembra</option>
            </select>
            @error("perro.sexo")
            <span class="text-warning"><i class="fas fa-exclamation-circle"></i> El sexo es necesario.</span>
            @enderror
        </div><br>

        <div class="mb-3">
            <label>Peso (en kilos):</label>
            <input wire:model="perro.peso" type="number" step=".1" class="form-control">
            @error("perro.peso")
            <span class="text-warning"><i class="fas fa-exclamation-circle"></i> El peso es necesario.</span><br>
            @enderror
        </div>

        <div class="mb-3">
            <label>Fecha de nacimiento (aproximada):</label>
            <input wire:model="perro.fecha_nacimiento" type="date" class="form-control">
            @error("perro.fecha_nacimiento")
            <span class="text-warning"><i class="fas fa-exclamation-circle"></i> La fecha de nacimiento es necesaria.</span><br>
            @enderror
        </div>

    </div>
</div>