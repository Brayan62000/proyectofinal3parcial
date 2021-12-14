<div>
    <div class="row">
        <div class="col-md-5 mx-auto">
            <img style="width:140px;margin-left:15%;border-radius:100%; border: 4px solid #198754;" class="mx-auto d-block mb-3" src="{{Storage::disk('public')->url('images/usuarios/default.png')}}">
            <div class="card text-white bg-success mb-3 mt-4">
                <div class="card-header text-center fw-bolder">
                    <i class="fas fa-user-circle"></i> Inicio de sesión
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="login">
                        <div class="mb-3">
                            <label class="form-label">Correo electronico:</label>
                            <input wire:model="email" type="email" class="form-control">
                            @error("email")
                            <span class="text-warning"><i class="fas fa-exclamation-circle"></i> Se requiere el correo electronico</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Contraseña: </label>
                            <input wire:model="password" type="password" class="form-control">
                            @error("password")
                            <span class="text-warning"><i class="fas fa-exclamation-circle"></i> Verifica que la contraseña contenga al menos 8 caracteres</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-dark d-block mx-auto"><i class="fas fa-sign-in-alt"></i> Acceder</button>
                        <a href="{{route('usuarios.create')}}" class="form-text text-light mx-auto d-block" style="text-align: center;">Crear usuario</a>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>