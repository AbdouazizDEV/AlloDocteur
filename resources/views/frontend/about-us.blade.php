@extends('layouts.app')

@section('title', 'À Propos de Nous') <!-- Titre de la page -->

@section('content')

    <div class="banner-area">
        <div class="banner-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 text-md-start text-center">
                        <h4 class="banner-heading">À Propos de Nous</h4>
                        <div class="banner-link">
                            <a href="/"> Accueil </a> /
                            <a href="javascript:void(0)" class="active"> À Propos de Nous </a>
                        </div>
                    </div>
                    <div class="col-md-5 text-md-end text-center">
                        @if ($appSetting->phone1)
                            <a href="tel:{{$appSetting->phone1}}" class="btn3"><h5 class="mb-0 fs-4"> Appelez-nous : {{$appSetting->phone1}}</h5></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h4 class="heading">À Propos de Nous</h4>
                    <div class="underline"></div>
                    <!-- Description de votre application de prise de rendez-vous médical en ligne -->
                    <p>
                        Bienvenue sur notre plateforme de prise de rendez-vous médical en ligne avec des médecins qualifiés.
                        Vous pouvez facilement planifier des rendez-vous médicaux, consulter les disponibilités des médecins,
                        et obtenir des soins médicaux de qualité, le tout depuis le confort de votre domicile.
                    </p>
                    <p>
                        Notre objectif est de rendre le processus de prise de rendez-vous médicaux simple, pratique et accessible à tous.
                        Que vous ayez besoin d'une consultation médicale générale ou d'un suivi spécialisé, notre plateforme vous permet de trouver
                        le médecin adapté à vos besoins et de réserver un rendez-vous en quelques clics.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/images/trait.jpg') }}" class="w-100 shadow-sm" alt="À Propos de Nous" />
                </div>
            </div>
        </div>
    </div>
@endsection
