<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    @livewireStyles
</head>

<body style="background-color:#ffffeb;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top" style="box-shadow: 0px 0px 20px -10px rgba(0, 0, 0, 0.83);">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('perros.index')}}"><i class="fas fa-bone"></i> Sistema de adopción de perros </a> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                @if(Auth::check())
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('perros.index')}}"><i class="fas fa-dog"></i> Perros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('usuarios.index')}}"><i class="fas fa-user"></i> Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('adopciones.index')}}"><i class="fas fa-home"></i> Adopciones</a>
                    </li>
                </ul>
                <ul class="navbar-nav" style="margin-right: 1px;">
                    @livewire("login.logout")
                </ul>
                @endif
            </div>
        </div>
    </nav>

    <div class="container mb-3 mt-3">
        {{$slot}}
    </div>
    @livewireScripts

    <script>
        livewire.on("alerta", mensaje => {
            Swal.fire({
                icon: 'error',
                title: 'Ocurrio un error',
                text: mensaje,
            })
        })

    </script>
</body>

</html>