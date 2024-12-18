<div class="sticky-top shadow">
    <div class="bg-l-blue top-navbar">
        <div class="container">
            <div class="row">
                <div class="col-md-7 text-center text-md-start">
                    @if ($appSetting->phone1)
                        <a href="tel:{{ $appSetting->phone1 }}"> <i class="bx bx-phone"></i> Tel 1 : {{ $appSetting->phone1 }}</a> |
                    @endif
                    @if ($appSetting->phone2)
                        <a href="tel:{{ $appSetting->phone2 }}"> <i class="bx bx-phone"></i> Tel 2 : {{ $appSetting->phone2 }}</a> |
                    @endif
                    @if ($appSetting->email1)
                        <a href="mailto:{{$appSetting->email1}}" class="d-none d-md-inline-block"><i class="bx bx-envelope"></i> Email : {{$appSetting->email1}}</a>
                    @endif
                </div>
                <div class="col-md-5 text-center text-md-end">
                    <a href="{{ url('/contact-us') }}">Nous Contacter</a>
                    <a href="{{ url('/user/appointments') }}"><i class="bx bx-calendar-plus"></i> Mes Rendez-vous</a>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg border-top">
        <div class="container">

            <a class="navbar-brand" href="{{ url('/') }}">
                @if ($appSetting->image)
                    <img src="{{ asset($appSetting->image) }}" class="logo-img" alt="logo">
                @else
                    <img src="{{ asset('assets/images/logo.png') }}" class="logo-img" alt="logo">
                @endif
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-2 ">
                    <li class="nav-item">
                        <a class="nav-link display-4" style="font-size: 14px" href="{{ url('/') }}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link display-4 "  style="font-size: 14px"  href="{{ url('about-us') }}">À Propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link display-4 "  style="font-size: 14px" href="{{ url('departments') }}">Spécialités</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link display-4 "  style="font-size: 14px" href="{{ url('find-a-doctor') }}">Rechercher un Médecin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link display-4 "  style="font-size: 14px" href="{{ url('book-appointment') }}">Prendre un Rendez-vous</a>
                    </li>
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item display-4 "  >
                                <a class="nav-link" style="font-size: 14px" href="{{ route('login') }}">{{ __('Se Connecter') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link display-4 "  style="font-size: 14px" href="{{ route('register') }}">{{ __('S\'inscrire') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link border dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="bx bx-user"></i> {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('user/profile') }}">
                                    {{ __('Profil') }}
                                </a>
                                <a class="dropdown-item" href="{{ url('user/appointments') }}">
                                    {{ __('Rendez-vous') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Déconnexion') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</div>
