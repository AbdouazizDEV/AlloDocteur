@extends('layouts.app')

@section('title','Spécialités')

@section('content')

    <div class="banner-area">
        <div class="banner-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 text-md-start text-center">
                        <h4 class="banner-heading">Spécialités</h4>
                        <div class="banner-link">
                            <a href="/"> Accueil </a> /
                            <a href="javascript:void(0)" class="active"> Spécialités </a>
                        </div>
                    </div>
                    <div class="col-md-5 text-md-end text-center">
                        @if ($appSetting->phone1)
                            <a href="tel:{{$appSetting->phone1}}" class="btn3"><h5 class="mb-0 fs-4"> Appelez-nous : +221 77 298 50 50</h5></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">

            <div class="row justify-content-center text-center">
                <div class="col-md-8 mb-5">
                    <form action="" method="GET">
                        <label class="mb-2">Recherchez votre Spécialité / spécialités</label>
                        <div class="input-group mb-3">
                            <input type="text" name="department" value="{{ Request::get('department') ?? '' }}" class="form-control custom-form-control" placeholder="Rechercher un Spécialité" />
                            <button type="submit" class="btn btn-primary px-4">Filtrer</button>
                            <a href="{{ url('/departments') }}" class="btn btn-danger px-4">Réinitialiser</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                @forelse ($departments as $department)
                    <div class="col-md-3 col-6 mb-3">
                        <div class="box2">
                            <a href="{{ url('departments/'.$department->slug) }}">
                                @if ($department->image != "")
                                    <img src="{{ asset($department->image) }}" alt="Image du Spécialité" />
                                @else
                                    <img src="{{ asset('assets/images/no-img.jpg') }}" alt="Image du Spécialité" />
                                @endif
                                <div class="box2-body">
                                    <h4 class="box2-heading text-center">{{$department->name}}</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-md-12">
                        <h4>Aucun Spécialité disponible</h4>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

@endsection
