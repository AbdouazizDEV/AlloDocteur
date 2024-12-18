@extends('layouts.app')
@section('title','inscription')
@section('content')

    <div class="banner-area">
        <div class="banner-overlay py-5">
            <div class="container">
                <h4 class="banner-heading">Inscription</h4>
                <div class="banner-link">
                    <a href="{{ url('/') }}">Accueil</a> /
                    <a href="javascript:void(0)" class="active">Inscription</a>
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
                            <h4 class="mb-0">{{ __('Inscription') }}</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="mb-3">
                                    <label for="name">{{ __('Nom') }}</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="email">{{ __('Adresse Email') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password">{{ __('Mot de passe') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password-confirm">{{ __('Confirmer le mot de passe') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary w-100">
                                        {{ __('Inscription') }}
                                    </button>
                                </div>

                                <div class="mb-3 text-center">
                                    <h5>
                                        Vous avez déjà un compte ?
                                        <a href="{{ url('/login') }}" class="">{{ __('Connectez-vous') }}</a> maintenant.
                                    </h5>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('assets/images/trait.jpg') }}" class="w-100 shadow border" alt="Inscription" />
                </div>
            </div>
        </div>
    </div>

@endsection
