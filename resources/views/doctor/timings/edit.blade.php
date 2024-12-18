@extends('layouts.doctor')

@section('title','Modifier les Horaires')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> Modifier les Horaires
                        <a href="{{ url('doctor/timings') }}" class="btn btn-danger float-end">Retour</a>
                    </h4>
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

                    <form action="{{ url('doctor/timings/'.$doctorTiming->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <hr>
                            <h5>Jour : <span class="text-uppercase">{{ $doctorTiming->day }}</span></h5>
                            <h5>Créneau : <span class="text-uppercase">{{ $doctorTiming->shift }}</span></h5>
                            <div class="col-md-3">
                                <label for="">Heure de début</label>
                                <input type="text" id="time" value="{{ $doctorTiming->start_time }}" required name="start_time" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label for="">Heure de fin</label>
                                <input type="text" id="time" value="{{ $doctorTiming->end_time }}" required name="end_time" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label for="">Temps moyen de consultation</label>
                                <select name="avg_consultation_time" class="form-control">
                                    <option value="">Sélectionner le temps</option>
                                    <option value="10" {{ $doctorTiming->avg_consultation_time == 10 ? 'selected':'' }}>10 minutes</option>
                                    <option value="15" {{ $doctorTiming->avg_consultation_time == 15 ? 'selected':'' }}>15 minutes</option>
                                    <option value="20" {{ $doctorTiming->avg_consultation_time == 20 ? 'selected':'' }}>20 minutes</option>
                                    <option value="25" {{ $doctorTiming->avg_consultation_time == 25 ? 'selected':'' }}>25 minutes</option>
                                    <option value="30" {{ $doctorTiming->avg_consultation_time == 30 ? 'selected':'' }}>30 minutes</option>
                                    <option value="35" {{ $doctorTiming->avg_consultation_time == 35 ? 'selected':'' }}>35 minutes</option>
                                    <option value="40" {{ $doctorTiming->avg_consultation_time == 40 ? 'selected':'' }}>40 minutes</option>
                                    <option value="45" {{ $doctorTiming->avg_consultation_time == 45 ? 'selected':'' }}>45 minutes</option>
                                    <option value="50" {{ $doctorTiming->avg_consultation_time == 50 ? 'selected':'' }}>50 minutes</option>
                                    <option value="55" {{ $doctorTiming->avg_consultation_time == 55 ? 'selected':'' }}>55 minutes</option>
                                    <option value="60" {{ $doctorTiming->avg_consultation_time == 60 ? 'selected':'' }}>60 minutes</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <br/>
                                <button type="submit" class="btn btn-primary">Mettre à jour</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
