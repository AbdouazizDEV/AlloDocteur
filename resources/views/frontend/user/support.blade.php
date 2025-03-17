@extends('layouts.app')

@section('title', 'Mon Profil') <!-- Titre de la page -->

@section('content')

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('frontend.user.sidebar') <!-- Inclusion de la barre latérale de l'utilisateur -->
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0"> <i class="text-logo bx bx-phone-call"></i> Support</h4>
                            <!-- En-tête de la carte avec une icône "bx bx-phone-call" -->
                        </div>
                        <div class="card-body">
                            <br/>
                            @if ($appSetting->email1)
                                <h5> <i class="text-logo me-2 bx bx-envelope"></i> Email : AlloDoctor77@gmail.com</h5>
                                <!-- Affiche l'adresse e-mail 1 si elle existe -->
                                <hr>
                            @endif

                            @if ($appSetting->email2)
                                <h5> <i class="text-logo me-2 bx bx-envelope"></i> Email : abdouazizdiop583@gmail.com</h5>
                                <!-- Affiche l'adresse e-mail 2 si elle existe -->
                                <hr>
                            @endif

                            @if ($appSetting->phone1)
                                <h5> <i class="text-logo me-2 bx bx-phone-call"></i> Téléphone : {{$appSetting->phone1}}</h5>
                                <!-- Affiche le numéro de téléphone 1 s'il existe -->
                                <hr>
                            @endif

                            @if ($appSetting->phone2)
                                <h5> <i class="text-logo me-2 bx bx-phone-call"></i> Téléphone : +221 78 198 00 23</h5>
                                <!-- Affiche le numéro de téléphone 2 s'il existe -->
                                <hr>
                            @endif

                            @if ($appSetting->website_link)
                                <h5> <i class="text-logo me-2 bx bx-globe"></i> Site Web : abdouazizdiop583@AlloDocteur.sn</h5>
                                <!-- Affiche le lien vers le site web s'il existe -->
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
