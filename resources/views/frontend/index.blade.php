@extends('layouts.app')

@section('title', 'Système de Rendez-vous Médicaux') <!-- Titre de la page -->

@section('content')

    @include('frontend.partials.sliders') <!-- Inclusion des diapositives -->

    <div class="py-4 bg-l-blue">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3 text-center border-md-end">
                    <div class="box1">
                        <h4><i class="bx bx-phone"></i> Appelez-Nous</h4>
                        @if ($appSetting->phone1)
                            <p>+221 77 298 23 23</p>
                        @else
                            <p>+221 77 298 23 23</p>
                        @endif
                    </div>
                </div>
                <div class="col-md-4 mb-3 text-center border-md-end">
                    <div class="box1">
                        <h4><i class="bx bx-plus-medical"></i> Soins d'Urgence</h4>
                        @if ($appSetting->phone2)
                            <p>+221 78 198 00 23</p>
                        @else
                            <p>+221 78 198 00 23</p>
                        @endif
                    </div>
                </div>
                <div class="col-md-4 mb-3 text-center">
                    <div class="box1">
                        <h4><i class="bx bx-envelope"></i> Contactez-nous par Email</h4>
                        @if ($appSetting->email1)
                            <p>AlloDoctor77@gmail.com</p>
                        @else
                            <p>AlloDoctor77@gmail.com</p>
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
                    <h4 class="main-heading">À Propos de Nous</h4>
                    <div class="underline"></div>
                    <p>
                        Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il a survécu non seulement à cinq siècles, mais aussi au passage à la composition électronique,
                    </p>
                    <p>
                        Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il a survécu non seulement à cinq siècles, mais aussi au passage à la composition électronique,
                    </p>
                    <a href="{{ url('about-us') }}" class="btn btn-1">En savoir plus</a>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/images/trait.jpg') }}" class="w-100 shadow-sm" alt="À Propos de Nous" />
                </div>
            </div>
        </div>
    </div>

@endsection
