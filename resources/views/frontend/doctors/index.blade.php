@extends('layouts.app')

@section('title', 'Trouver un médecin')

@section('content')

    <div class="banner-area">
        <div class="banner-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 text-md-start text-center">
                        <h4 class="banner-heading">Trouver un médecin</h4>
                        <div class="banner-link">
                            <a href="/"> Accueil </a> /
                            <a href="javascript:void(0)" class="active"> Trouver un médecin </a>
                        </div>
                    </div>
                    <div class="col-md-5 text-md-end text-center">
                        @if ($appSetting->phone1)
                            <a href="tel:{{ $appSetting->phone1 }}" class="btn3">
                                <h5 class="mb-0 fs-4"> Appelez-nous : {{ $appSetting->phone1 }}</h5>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">

            <div class="row justify-content-center text-center">
                <div class="col-md-10 mb-5">
                    <form action="" method="GET">
                        <label class="mb-1">Rechercher des médecins</label>
                        <div class="input-group mb-3">
                            {{-- <select name="" class="select2-box custom-form-control custom-select">
                                <option value="">Tous</option>
                                <option value="">Médecin 1</option>
                                <option value="">Médecin 2</option>
                            </select> --}}
                            <input type="text" name="doctor" value="{{ Request::get('doctor') ?? '' }}"
                                   class="form-control custom-form-control" placeholder="Rechercher un médecin" />
                            <button type="submit" class="btn btn-primary px-4" id="basic-addon2">Rechercher</button>
                            <a href="{{ url(URL::current()) }}" class="btn btn-danger px-4">Réinitialiser</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                @forelse ($doctors as $doctor)
                    <div class="col-md-6 mb-3">
                        <div class="doctor-box">
                            <div class="row">
                                <div class="col-md-4 my-auto">
                                    @if ($doctor->image)
                                        <img src="{{ asset($doctor->image) }}" class="w-100" alt="Image du médecin" />
                                    @else
                                        <img src="{{ asset('assets/images/no-img.jpg') }}" class="w-100"
                                             alt="Image du médecin" />
                                    @endif
                                </div>
                                <div class="col-md-8">
                                    <h4 class="doctor-name">{{ $doctor->name }}</h4>
                                    <h6 class="doctor-designation">{{ $doctor->designation }}</h6>

                                    <hr>

                                    <h5 class="doctor-heading">Qualifications :</h5>
                                    <p class="qualification-set">
                                        {!! $doctor->qualification !!}
                                    </p>

                                    <a href="{{ url('find-a-doctor/' . $doctor->slug) }}" class="btn btn-1">En savoir plus</a>
                                    <a href="{{ url('book-appointment/' . $doctor->slug) }}" class="btn btn-1">Prendre rendez-vous</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-md-12">
                        <h4 class="main-heading">Médecins non disponibles</h4>
                    </div>
                @endforelse

            </div>
        </div>
    </div>

@endsection
