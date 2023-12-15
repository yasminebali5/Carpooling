<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand ms-5" href="@auth {{ route('home.index') }} @else {{ route('search') }} @endauth ">Covoiturage_Partager une route !</a>
        <button class="navbar-toggler me-5" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-5 mb-2 mb-lg-0 align-items-end">

                {{-- Check if named Routes for login & register exist--}}
                @if (Route::has('login') and Route::has('register'))

                        {{-- Logged in user --}}
                        @auth
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('home.index')}}">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('search')}}">Rechercher un voyage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home.create')}}">Proposer un trajet</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('showProfile')}}">Profile </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                {{ __('Deconnexion') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>

                        {{-- Guest --}}
                        @else
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link">Connexion</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link">Inscription</a>
                            </li>
                        @endauth
                @endif





            </ul>
        </div>
    </div>
</nav>
