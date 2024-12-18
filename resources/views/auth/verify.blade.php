@extends('layouts.app')

@section('title', 'Vérifiez votre adresse e-mail')

@section('content')

    <div class="banner-area">
        <div class="banner-overlay py-5">
            <div class="container">
                <h4 class="banner-heading">Vérifiez votre adresse e-mail</h4>
                <div class="banner-link">
                    <a href="{{ url('/') }}">Accueil</a> /
                    <a href="{{ url('/') }}">Mot de passe</a> /
                    <a href="javascript:void(0)" class="active">Vérifiez votre adresse e-mail</a>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Vérifiez votre adresse e-mail') }}</div>

                        <div class="card-body">
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('Un nouveau lien de vérification a été envoyé à votre adresse e-mail.') }}
                                </div>
                            @endif

                            {{ __('Avant de continuer, veuillez vérifier votre adresse e-mail pour un lien de vérification.') }}
                            {{ __('Si vous n\'avez pas reçu l\'e-mail') }},
                            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                @csrf
                                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('cliquez ici pour en demander un autre') }}</button>.
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
