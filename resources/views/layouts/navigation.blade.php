<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-dark ps"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route('dashboard') }}">
            <img src="{{ asset('storage/calendar.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">Gestão de Eventos</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('dashboard') ? 'active bg-gradient-primary' : '' }} "
                    href="{{ route('dashboard') }}">
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('evento.index') ? 'active bg-gradient-primary' : '' }} "
                    href="{{ route('evento.index') }}">
                    <span class="nav-link-text ms-1">Eventos</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('aparelho.index') ? 'active bg-gradient-primary' : '' }} "
                    href="{{ route('aparelho.index') }}">
                    <span class="nav-link-text ms-1">Pacotes</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('notifications.index') ? 'active bg-gradient-primary' : '' }} "
                    href="{{ route('notifications.index') }}">
                    <span class="nav-link-text ms-1">Notificações</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Paginas do usuario
                </h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{ route('profile.edit') }}">
                    <span class="nav-link-text ms-1">Perfil</span>
                </a>
            </li>
            <li class="nav-item">
                <!-- implementar um modal para o logout -->
                <a class="nav-link text-white " href="{{ route('logout') }}" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <span class="nav-link-text ms-1">Logout</span>
                </a>
                @include('components.my_modal', [
                    'titleModal' => 'exampleModal',
                    'title' => 'Terminar sessão',
                    'content' => 'Tem certeza que deseja terminar a sessão?',
                    'route' => route('logout'),
                    'method' => 'POST',
                    'action' => 'Terminar sessão',
                    'type' => 'submit',
                    'icon' => 'fa fa-trash',
                    'other' => '',
                    'close' => 'Cancelar',
                ])
            </li>
        </ul>
        <div class="ps__rail-x" style="width: 250px; left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 386px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 304px;"></div>
        </div>
    </div>
    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
    </div>
    <div class="ps__rail-y" style="top: 0px; right: 0px;">
        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
    </div>
</aside>
