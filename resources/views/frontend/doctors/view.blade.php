@extends('layouts.app')

@section('title', 'Détails du médecin')

@section('content')

    <div class="banner-area">
        <div class="banner-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 text-md-start text-center">
                        <h4 class="banner-heading">Détails du médecin</h4>
                        <div class="banner-link">
                            <a href="{{ url('/') }}"> Accueil </a> /
                            <a href="{{ url('/find-a-doctor') }}"> Trouver un médecin </a> /
                            <a href="javascript:void(0)" class="active"> Détails du médecin </a>
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
            <div class="box3">
                <div class="row">
                    <div class="col-md-4">
                        @if ($doctor->image)
                            <img src="{{ asset($doctor->image) }}" class="view-doctor" alt="{{ $doctor->name }}" />
                        @else
                            <img src="{{ asset('assets/images/no-img.jpg') }}" class="w-100" alt="{{ $doctor->name }}" />
                        @endif
                    </div>
                    <div class="col-md-8 mb-3">
                        <h4 class="doctor-name">{{ $doctor->name }}</h4>
                        <h6 class="doctor-designation">Poste : {{ $doctor->designation }}</h6>
                        <hr>

                        <h5 class="">Bio : {{ $doctor->bio }}</h5>

                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="doctor-heading">Service :</h5>
                                <p>
                                    {!! $doctor->department->name !!}
                                </p>
                            </div>
                            <div class="col-md-6">
                                <h5 class="doctor-heading">Genre :</h5>
                                <p>
                                    {!! $doctor->gender !!}
                                </p>
                            </div>
                            <div class="col-md-6">
                                <h5 class="doctor-heading">Qualifications :</h5>
                                <p>
                                    {!! $doctor->qualification !!}
                                </p>
                            </div>
                            <div class="col-md-6">
                                <h5 class="doctor-heading">Expérience :</h5>
                                <p>
                                    {!! $doctor->experience !!}
                                </p>
                            </div>
                            <div class="col-md-12">
                                <h5 class="doctor-heading">Spécialisation :</h5>
                                <p>
                                    {!! $doctor->specialization !!}
                                </p>
                            </div>
                            <div class="col-md-8 mb-3">
                                <h5 class="doctor-heading">Frais de consultation : {{ $doctor->consulation_fees }}</h5>
                            </div>
                            <div class="col-md-4 text-end mb-3">
                                <a href="{{ url('book-appointment/' . $doctor->slug) }}" class="btn btn-1">Prendre rendez-vous</a>
                            </div>

                            <div class="col-md-12">
                                <h5 class="doctor-heading mb-2">Horaires</h5>

                                <table class="table table-bordered">
                                    @foreach ($doctor->timings as $timing)
                                        <tr>
                                            <td width="33%" class="text-uppercase">
                                                {{ $timing->day }} - ( {{ str_replace('_', ' ', $timing->shift) }} )
                                            </td>
                                            <td>
                                                {{ date('h:i A', strtotime($timing->start_time)) }}
                                                -
                                                {{ date('h:i A', strtotime($timing->end_time)) }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
