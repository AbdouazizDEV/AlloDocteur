@extends('layouts.doctor')

@section('title','Historique des Rendez-vous')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Historique des Rendez-vous</h4>
                        </div>
                        <div class="col-md-6">
                            <form action="">
                                <div class="input-group">
                                    <input type="month" name="monthyear" value="{{ Request::get('monthyear') ?? date('Y-m') }}" class="form-control" />
                                    <button type="submit" class="btn btn-primary">Filtrer</button>
                                    <a href="{{ url('doctor/appointments/history') }}" class="btn btn-danger">Réinitialiser</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="myDataTable" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>N° du Rendez-vous</th>
                                <th>Date du Rendez-vous</th>
                                <th>Nom du Patient</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Statut</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                            @foreach ($appointments as $appointment)
                                <tr>
                                    <td>{{ $appointment->appointment_number }}</td>
                                    <td>{{ date('d M, Y', strtotime($appointment->appointment_date)) }}</td>
                                    <td>{{ $appointment->name }}</td>
                                    <td>{{ $appointment->email }}</td>
                                    <td>{{ $appointment->phone ?? 'X' }}</td>
                                    <td>
                                        @if ($appointment->status == App\Enums\AppointmentStatusEnum::Booked)
                                            <span class="badge bg-primary">Réservé</span>
                                        @elseif ($appointment->status == App\Enums\AppointmentStatusEnum::Completed)
                                            <span class="badge bg-success">Terminé</span>
                                        @elseif ($appointment->status == App\Enums\AppointmentStatusEnum::Cancel)
                                            <span class="badge bg-danger">Annulé</span>
                                        @elseif ($appointment->status == App\Enums\AppointmentStatusEnum::NotAvailable)
                                            <span class="badge bg-info">Patient Non Disponible</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-info btn-sm" href="{{ url('doctor/appointments/'.$appointment->appointment_number.'/show') }}">
                                            <i class="bx bx-pencil me-1"></i> Voir
                                        </a>
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
