@extends('layouts.app')

@section('title', 'Mes rendez-vous')

@section('content')

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0">Rendez-vous
                                <a href="{{ url('/user/appointments') }}" class="btn btn-danger btn-sm float-end">
                                    Retour
                                </a>
                            </h4>
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-8 mb-3">
                                    <h5 class="mb-1">Numéro de rendez-vous : {{ $appointment->appointment_number }}</h5>
                                    <h5 class="mb-1">Date du rendez-vous : {{ date('d M, Y', strtotime($appointment->appointment_date)) }}</h5>
                                    <h5 class="mb-1">Heure du rendez-vous : {{ date('H:i A', strtotime($appointment->appointment_time)) }}</h5>

                                    <hr>

                                    <h5 class="mb-1">Nom du médecin : {{ $appointment->doctor->name }}</h5>
                                    <h5 class="mb-1">Désignation du médecin : {{ $appointment->doctor->designation }}</h5>
                                    <hr>
                                    <h5 class="mb-1">Frais de consultation : {{ $appointment->consulation_fees }}</h5>
                                    <h5 class="mb-1">
                                        État du paiement des frais de consultation :
                                        @if ($appointment->consulation_fees == 'pending')
                                            <span class="badge bg-warning">En attente</span>
                                        @else
                                            <span class="badge bg-success">Payé</span>
                                        @endif
                                    </h5>

                                    <h5 class="mb-1">Commentaire du médecin : {{ $appointment->doctor_comment }}</h5>

                                    <hr>

                                    <h5 class="mb-1">Statut :
                                        @if ($appointment->status == App\Enums\AppointmentStatusEnum::Booked)
                                            <span class="badge bg-primary">Réservé</span>
                                        @elseif ($appointment->status == App\Enums\AppointmentStatusEnum::Completed)
                                            <span class="badge bg-success">Terminé</span>
                                        @elseif ($appointment->status == App\Enums\AppointmentStatusEnum::Cancel)
                                            <span class="badge bg-danger">Annulé</span>
                                        @elseif ($appointment->status == App\Enums\AppointmentStatusEnum::NotAvailable)
                                            <span class="badge bg-info">Patient non disponible</span>
                                        @endif
                                    </h5>
                                </div>
                                <div class="col-md-4">
                                    <img src="{{ asset('assets/images/img-1.jpg') }}" class="w-100 shadow rounded-4" alt="Utilisateur" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
