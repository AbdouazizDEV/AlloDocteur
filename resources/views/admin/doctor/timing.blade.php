@extends('layouts.admin')

@section('title','Horaires du Médecin')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Horaires du Médecin
                        <a href="{{ url('/admin/doctors') }}" class="btn btn-danger float-end">Retour</a>
                    </h4>
                </div>
                <div class="card-body">

                    <h4>Horaires de {{ $doctor->name }}</h4>
                    <hr/>

                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Jours</th>
                            <th>Postes</th>
                            <th>Heure de début</th>
                            <th>Heure de fin</th>
                            <th>Temps de Consultation Moyen (en minutes)</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($doctorTimings as $item)
                            <tr>
                                <td class="text-capitalize">{{ $item->day }}</td>
                                <td class="text-capitalize">{{ $item->shift }}</td>
                                <td>{{ $item->start_time }}</td>
                                <td>{{ $item->end_time }}</td>
                                <td>{{ $item->avg_consultation_time }} Minutes</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
