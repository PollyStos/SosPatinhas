<nav class="navbar navbar-expand-lg navbar-dark bg_color_primary">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="{{ route('home.index') }}">
            <img src="{{ asset('img/logoSosPatinhas.png') }}" alt="Logo" class="h-8" style="height: 40px;">
        </a>

        <!-- Botão hamburguer -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Itens do menu -->
        <div class="collapse navbar-collapse" id="mainNavbar">
            <!-- Links principais -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @foreach ($nav as $item)
                    <li class="nav-item">
                        <a href="{{ $item->url }}" class="nav-link text-light text-uppercase">{{ $item->name }}</a>
                    </li>
                @endforeach
            </ul>

            <!-- Dropdown de usuário -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::check() ? Auth::user()->name : 'Visitante' }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        @auth
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('Profile') }}</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">{{ __('Log Out') }}</button>
                                </form>
                            </li>
                        @else
                            <li><span class="dropdown-item disabled">Não autenticado</span></li>
                        @endauth
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
