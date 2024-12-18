@extends('layouts.doctor')

@section('title','Horaires du médecin')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> Horaires du médecin</h4>
                </div>
                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ url('doctor/timings') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-2">
                                <label for="days">Sélectionnez un jour</label>
                                <select name="day" id="days" required class="form-select">
                                    <option value="">Sélectionnez un jour</option>
                                    <option value="lundi">Lundi</option>
                                    <option value="mardi">Mardi</option>
                                    <option value="mercredi">Mercredi</option>
                                    <option value="jeudi">Jeudi</option>
                                    <option value="vendredi">Vendredi</option>
                                    <option value="samedi">Samedi</option>
                                    <option value="dimanche">Dimanche</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="shift">Sélectionnez un créneau</label>
                                <select name="shift" id="shift" required class="form-select">
                                    <option value="">Sélectionnez un créneau</option>
                                    <option value="créneau_1">Créneau 1</option>
                                    <option value="créneau_2">Créneau 2</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="">Heure de début</label>
                                <input type="text" id="time" required name="start_time" value="{{ old('start_time') }}" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label for="">Heure de fin</label>
                                <input type="text" id="time" required name="end_time" value="{{ old('end_time') }}" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label for="">Temps moyen de consultation</label>
                                <select name="avg_consultation_time" class="form-control">
                                    <option value="">Sélectionnez le temps</option>
                                    <option value="10">10 minutes</option>
                                    <option value="15">15 minutes</option>
                                    <option value="20">20 minutes</option>
                                    <option value="25">25 minutes</option>
                                    <option value="30">30 minutes</option>
                                    <option value="35">35 minutes</option>
                                    <option value="40">40 minutes</option>
                                    <option value="45">45 minutes</option>
                                    <option value="50">50 minutes</option>
                                    <option value="55">55 minutes</option>
                                    <option value="60">60 minutes</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <div class="text-end">
                                    <br/>
                                    <button type="submit" class="btn btn-primary w-100">Ajouter</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <hr>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Jours</th>
                                <th>Créneaux</th>
                                <th>Heure de début</th>
                                <th>Heure de fin</th>
                                <th>Temps moyen de consultation (en minutes)</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($doctorTimings as $item)
                                <tr>
                                    <td class="text-capitalize">{{ $item->day }}</td>
                                    <td class="text-capitalize">{{ $item->shift }}</td>
                                    <td>{{ $item->start_time }}</td>
                                    <td>{{ $item->end_time }}</td>
                                    <td>{{ $item->avg_consultation_time }} minutes</td>
                                    <td>
                                        <a href="{{ url('doctor/timings/'.$item->id.'/edit') }}" class="btn btn-success">Modifier</a>
                                        <a href="{{ url('doctor/timings/'.$item->id.'/delete') }}" class="btn btn-danger">Supprimer</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
