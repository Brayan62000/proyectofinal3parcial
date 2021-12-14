<div>
    <li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
            {{Auth::user()->nombre." ".Auth::user()->apellido}}
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown" >
            <li><a wire:click="logout" class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a></li>
        </ul>
    </li>
</div>