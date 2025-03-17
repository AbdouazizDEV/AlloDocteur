@extends('layouts.app')

@section('title', 'Contactez-Nous') <!-- Titre de la page -->

@section('content')

    <div class="banner-area">
        <div class="banner-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 text-md-start text-center">
                        <h4 class="banner-heading">Contactez-Nous</h4>
                        <div class="banner-link">
                            <a href="/"> Accueil </a> /
                            <a href="javascript:void(0)" class="active"> Contactez-Nous </a>
                        </div>
                    </div>
                    <div class="col-md-5 text-md-end text-center">
                        @if ($appSetting->phone1)
                            <a href="tel:{{$appSetting->phone1}}" class="btn3"><h5 class="mb-0 fs-4"> Appelez-Nous : +221 78 198 00 23</h5></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="heading">Informations de Contact</h4>
                    <div class="underline"></div>
                    <p>
                        Contactez
                        @if ($appSetting->website_name)
                            {{$appSetting->website_name}}
                        @endif
                    </p>

                    <hr>

                    @if ($appSetting->email1)
                        <h5> <i class="bx bx-envelope"></i> Email : AlloDoctor77@gmail.com</h5>
                        <hr>
                    @endif
                    @if ($appSetting->email2)
                        <h5> <i class="bx bx-envelope"></i> Email : abdouazizdiop583@gmail.com</h5>
                        <hr>
                    @endif
                    @if ($appSetting->phone1)
                        <h5> <i class="bx bx-phone"></i> Téléphone : +221 78 198 00 23</h5>
                        <hr>
                    @endif
                    @if ($appSetting->phone2)
                        <h5> <i class="bx bx-phone"></i> Téléphone 2 : +221 77 298 23 23</h5>
                        <hr>
                    @endif
                    @if ($appSetting->whatsapp)
                        <h5> <i class="bx bxl-whatsapp"></i> Whatsapp : 77 298 23 23</h5>
                        <hr>
                    @endif
                    @if ($appSetting->fax)
                        <h5> <i class="bx bx-envelope"></i> Fax : {{ $appSetting->fax }}</h5>
                        <hr>
                    @endif
                    @if ($appSetting->website_name)
                        <h5> <i class="bx bx-globe"></i> Site Web : https://porfolio-2-psi.vercel.app/</h5>
                        <hr>
                    @endif
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/trait.jpg') }}" class="w-100 shadow-sm" alt="À Propos de Nous" />
                </div>
            </div>
        </div>
    </div>

@endsection
