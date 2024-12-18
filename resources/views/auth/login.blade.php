@extends('layouts.app')

@section('title','Connexion')

@section('content')

    <div class="banner-area">
        <div class="banner-overlay py-5">
            <div class="container">
                <h4 class="banner-heading">Connexion</h4>
                <div class="banner-link">
                    <a href="{{ url('/') }}"> Accueil </a> /
                    <a href="javascript:void(0)" class="active"> Connexion </a>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">

                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0">{{ __('Connexion') }}</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="mb-3">
                                    <label for="email">{{ __('Adresse Email') }}</label>

                                    <input id="email" type="email" class="custom-form-control form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password">{{ __('Mot de Passe') }}</label>

                                    <input id="password" type="password" class="custom-form-control form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="row ">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember"> {{ __('Se Souvenir de Moi') }} </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3 text-center">
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}">
                                                    {{ __('Mot de Passe Oublié ?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary w-100">{{ __('Connexion') }}</button>
                                </div>

                                <div class="mb-3 text-center">
                                    <h5>
                                        Vous n'avez pas de compte ?
                                        <a href="{{ url('/register') }}" class="">{{ __('Inscrivez-vous') }}</a> maintenant.
                                    </h5>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-md-5">
                    <img src="{{ asset('assets/images/trait.jpg') }}" class="w-100 shadow border" alt="Register" />
                </div>
            </div>
        </div>
    </div>

@endsection
