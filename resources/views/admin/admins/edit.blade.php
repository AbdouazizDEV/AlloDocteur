@extends('layouts.admin')

@section('title','Modifier l\'Administrateur')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Modifier l'Administrateur
                        <a href="{{ url('admin/manage-admins') }}" class="btn btn-danger float-end">Retour</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('/admin/manage-admins/'.$admin->id.'/edit') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Nom</label>
                                <input type="text" name="name" value="{{$admin->name}}" class="form-control" />
                                @error('name') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Téléphone</label>
                                <input type="text" name="phone" value="{{$admin->phone}}" class="form-control" />
                                @error('phone') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Email</label>
                                <input type="text" readonly value="{{$admin->email}}" class="form-control" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Mot de passe</label>
                                <input type="text" name="password" class="form-control" />
                                @error('password') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Genre</label>
                                <select name="gender" class="form-select">
                                    <option value="">Sélectionner le genre</option>
                                    <option value="Male" {{$admin->gender == 'Male' ? 'selected':''}}>Homme</option>
                                    <option value="Female" {{$admin->gender == 'Female' ? 'selected':''}}>Femme</option>
                                </select>
                                @error('gender') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Bannir / Activer</label>
                                <br/>
                                <input type="checkbox" name="is_ban" {{$admin->is_ban == 1 ? 'checked':''}} style="width:30px;height:30px;" />
                                Coché = banni, Non Coché = Actif
                            </div>
                            <div class="col-md-12 mb-3 text-end">
                                <button type="submit" class="btn btn-primary">Mettre à jour</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
