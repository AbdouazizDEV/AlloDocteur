@extends('layouts.doctor')

@section('title','Liste des Rendez-vous des Patients')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Liste des Rendez-vous des Patients
                        <a href="{{ url('doctor/patients') }}" class="btn btn-danger float-end">Retour</a>
                    </h4>
                </div>
                <div class="card-body">
                    @foreach ($userPatientAppointmentsLists as $key => $item)
                        <div class="border shadow-sm p-3 mb-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5 class="fw-bold text-dark">{{ $key+1 }}. Date de création de ce rendez-vous : {{$item->created_at->format('d-M-Y')}}</h5>
                                    <hr>
                                </div>
                                <div class="col-md-5">
                                    <h6 class="mb-2">Numéro du Rendez-vous : {{$item->appointment_number}}</h6>
                                    <h6 class="mb-2">Date du Rendez-vous : {{$item->appointment_date}}</h6>
                                    <h6 class="mb-2">Heure du Rendez-vous : {{ date('H:i A', strtotime($item->appointment_time)) }}</h6>
                                    <h6 class="mb-2">Frais de Consultation : {{$item->consulation_fees}}</h6>
                                    <h6 class="mb-2">Statut des Frais de Consultation : {{$item->consulation_fees_status}}</h6>
                                    <h6 class="mb-2">Statut du Rendez-vous : {{$item->status}}</h6>
                                </div>
                                <div class="col-md-7">
                                    <h6 class="mb-2">Nom du Patient : {{$item->name}}</h6>
                                    <h6 class="mb-2">Email du Patient : {{$item->email}}</h6>
                                    <h6 class="mb-2">Numéro de Téléphone du Patient : {{$item->phone}}</h6>
                                    <h6 class="mb-2">Âge du Patient : {{$item->user->age ?? ''}}</h6>
                                    <h6 class="mb-2">Commentaire du Patient : {{$item->user_comment }}</h6>
                                    <h6 class="mb-2">Commentaire du Médecin : {{$item->doctor_comment }}</h6>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
