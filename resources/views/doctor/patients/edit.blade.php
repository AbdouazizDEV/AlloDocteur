@extends('layouts.doctor')

@section('title','Modifier le Patient')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Modifier le Patient
                        <a href="{{ url('doctor/patients') }}" class="btn btn-sm btn-danger float-end">Retour</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('doctor/patients/'.$patient->id.'/edit') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6">
                                <label>Nom Complet</label>
                                <p class="form-control">{{ $patient->name }}</p>
                            </div>
                            <div class="col-md-6">
                                <label>Adresse Email</label>
                                <p class="form-control">{{ $patient->email }}</p>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Âge</label>
                                <input type="text" name="age" class="form-control" value="{{ $patient->age }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Genre</label>
                                <select name="gender" class="form-control">
                                    <option value="">Sélectionner le Genre</option>
                                    <option value="Male" {{ $patient->gender == 'Male' ? 'selected':''}}>Homme</option>
                                    <option value="Female" {{ $patient->gender == 'Female' ? 'selected':''}}>Femme</option>
                                    <option value="Others" {{ $patient->gender == 'Others' ? 'selected':''}}>Autres</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Téléphone</label>
                                <input type="text" name="phone" class="form-control" value="{{ $patient->phone }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Date de Naissance</label>
                                <input type="text" name="dob" class="form-control" value="{{ $patient->dob }}">
                            </div>
                            <div class="col-md-12 text-end mb-3">
                                <button type="submit" class="btn btn-primary">Mettre à Jour</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
