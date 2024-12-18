@extends('layouts.app')

@section('title', $department->name)

@section('content')

    <div class="banner-area">
        <div class="banner-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 text-md-start text-center">
                        <h4 class="banner-heading">Spécialités</h4>
                        <div class="banner-link">
                            <a href="/"> Accueil </a>
                            <a href="{{ url('/departments') }}" class="active"> Spécialités </a> /
                            <a href="javascript:void(0)" class="active"> {{$department->name}} </a>
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

    <div class="section bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-9 mb-3">
                    <h4 class="main-heading">{{$department->name}}</h4>
                    <div>
                        {!! $department->description !!}
                    </div>
                </div>
                <div class="col-md-3">
                    @if ($department->image != "")
                        <img src="{{ asset($department->image) }}" class="w-100 shadow-sm border" alt="Image du {{$department->name}}" />
                    @else
                        <img src="{{ asset('assets/images/no-img.jpg') }}" class="w-100 shadow-sm border" alt="Image du {{$department->name}}" />
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 my-4">
                    <h4 class="main-heading">Nos Médecins</h4>
                    <div class="underline"></div>
                </div>
            </div>

            <div class="row">
                @forelse ($department->doctors as $doctor)
                    <div class="col-md-6 mb-3">
                        <div class="doctor-box">
                            <div class="row">
                                <div class="col-md-4 my-auto">
                                    @if ($doctor->image != "")
                                        <img src="{{ asset($doctor->image) }}" class="w-100 shadow-sm" alt="Image du {{$doctor->name}}" />
                                    @else
                                        <img src="{{ asset('assets/images/no-img.jpg') }}" class="w-100 shadow-sm" alt="Image du {{$doctor->name}}" />
                                    @endif
                                </div>
                                <div class="col-md-8">
                                    <h4 class="doctor-name">{{$doctor->name}}</h4>
                                    <h6 class="doctor-designation">{{$doctor->designation}}</h6>

                                    <hr>

                                    <h5 class="doctor-heading">Qualifications :</h5>
                                    <p>
                                        {!! $doctor->qualification !!}
                                    </p>

                                    <a href="{{ url('/find-a-doctor/'.$doctor->slug) }}" class="btn btn-1">Lire la suite</a>
                                    <a href="{{ url('/book-appointment/'.$doctor->slug) }}" class="btn btn-1">Prendre rendez-vous</a>

                                </div>
                            </div>
                        </div>
                    </div>
                @empty

                @endforelse
            </div>
        </div>
    </div>

@endsection
