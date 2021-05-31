<!-- Left Side Of Header -->
<div class="col-12 col-sm-8 col-md-9 justify-content-left">
    <div class="col-12">
        <a class="nav-link text-white" href="{{ url('/') }}">
            {{ config('app.name', 'Mis colecciones Marvel') }}
        </a>
    </div>
</div>

<!-- Right Side Of Header -->
<div class="col-12 col-sm-4 col-md-3">
    <!-- Authentication Links -->
    <div class="row justify-content-end">
        @guest
        @if (Route::has('login'))
            <div class="col-4">
                <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
            </div>
        @endif
        @if (Route::has('register'))
            <div class="col-5">
                <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
            </div>
        @endif
        @else
        <div class="col-12 col-sm-6 col-md-4 dropdown">
            <a id="navbarDropdown" class="nav-link text-white dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
        @endguest
    </div>
</div>
