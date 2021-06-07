<nav class="navbar navbar-expand-md navbar-dark navbar-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="{{ url('/') }}"><img class="d-block img-fluid" src="../imagenes/logo2.svg" alt="logo2" style="height: 60px "></a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav justify-content-around col-md-9 col-lg-7 mr-auto">
            <li class="nav-item">
                <a class="nav-link text-white" href="#personajes">Personajes</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Comics
                </a>
                <div class="dropdown-menu color-drop" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-white colorhover" href="#">Por series</a>
                    <a class="dropdown-item text-white" href="#">Por personajes</a>
                    <a class="dropdown-item text-white" href="#">Por eventos</a>
                    <a class="dropdown-item text-white" href="#">Por autor</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#coleccion">Colección</a>
            </li>
                @if (Auth::check())
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#administracion">Administración</a>
                    <div class="dropdown-menu color-drop" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-white" href="{{ url('admin/characters') }}">Personajes</a>
                        <a class="dropdown-item text-white" href="{{ url('admin/creators') }}">Creadores</a>
                        <a class="dropdown-item text-white" href="{{ url('admin/events') }}">Eventos</a>
                        <a class="dropdown-item text-white" href="{{ url('admin/series') }}">Series</a>
                        <a class="dropdown-item text-white" href="{{ url('admin/comics') }}">Comics</a>
                        <a class="dropdown-item text-white" href="{{ url('admin/users') }}">Usuarios</a>
                        <a class="dropdown-item text-white" href="{{ url('admin/comics-users') }}">Comics - Usuarios</a>
                        <a class="dropdown-item text-white" href="{{ url('admin/comics-characters') }}">Comics - Personajes</a>
                        <a class="dropdown-item text-white" href="{{ url('admin/comics-events') }}">Comics - Eventos</a>
                    </div>
                </li>
            @endif
        </ul>

        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav col-md-3 col-lg-2 ml-auto">
            <!-- Authentication Links -->
            @guest
            @if (Route::has('login'))
                <li class="col-4 nav-item">
                    <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="col-5 nav-item">
                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link text-white dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu color-drop" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-white" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>

