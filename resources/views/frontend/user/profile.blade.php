@extends('layouts.app')

@section('title','Mon Profil')

@section('content')

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('frontend.user.sidebar')
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0">Mon Profil</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('/user/profile') }}" method="POST">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label>Nom</label>
                                        <input type="text" name="name" required class="form-control" value="{{ Auth::user()->name }}" />
                                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Email</label>
                                        <input type="text" readonly class="form-control" value="{{ Auth::user()->email }}" />
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Numéro de téléphone *</label>
                                        <input type="text" name="phone" required class="form-control" value="{{ Auth::user()->phone }}" />
                                        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Âge</label>
                                        <input type="number" name="age" class="form-control" value="{{ Auth::user()->age }}" />
                                        @error('age') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Date de naissance</label>
                                        <input type="text" name="dob" class="form-control" value="{{ Auth::user()->dob }}" />
                                        @error('dob') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Genre *</label>
                                        <select name="gender" required class="form-select">
                                            <option value="">Sélectionner le genre</option>
                                            <option value="Homme" {{ Auth::user()->gender == 'Homme' ? 'selected':'' }}>Homme</option>
                                            <option value="Femme" {{ Auth::user()->gender == 'Femme' ? 'selected':'' }}>Femme</option>
                                        </select>
                                        @error('gender') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-12 text-end">
                                        <button type="submit" class="btn btn-primary px-5">Soumettre</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
