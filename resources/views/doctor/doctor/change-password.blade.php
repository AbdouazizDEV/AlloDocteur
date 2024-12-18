@extends('layouts.doctor')

@section('title','Changer le Mot de Passe')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Changer votre Mot de Passe</h4>
                </div>
                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success mb-3">{{ session('status') }}</div>
                    @endif

                    <form action="{{ url('/doctor/change-password') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label>Mot de Passe Actuel *</label>
                            <input type="password" name="current_password" class="form-control" />
                            @error('current_password')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label>Nouveau Mot de Passe *</label>
                            <input type="password" name="password" class="form-control" />
                            @error('password')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label>Confirmez le Nouveau Mot de Passe *</label>
                            <input type="password" name="password_confirmation" class="form-control" />
                        </div>
                        <div class="mb-3 text-end">
                            <button type="submit" class="btn btn-primary">Mettre à jour le Mot de Passe</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
