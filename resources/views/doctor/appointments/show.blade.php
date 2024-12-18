@extends('layouts.doctor')

@section('title','Voir le Rendez-vous')

@section('content')

    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h4>Voir le Rendez-vous
                        <a href="{{ url('doctor/appointments') }}" class="btn btn-sm btn-danger float-end">Retour</a>
                    </h4>
                </div>
                <div class="card-body">

                    <h4>Détails du Rendez-vous</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Numéro du Rendez-vous</label>
                            <p class="form-control">{{ $appointment->appointment_number }}</p>
                        </div>
                        <div class="col-md-4">
                            <label>Date du Rendez-vous</label>
                            <p class="form-control">{{ date('d F, Y', strtotime($appointment->appointment_date)) }}</p>
                        </div>
                        <div class="col-md-4">
                            <label>Heure du Rendez-vous</label>
                            <p class="form-control">{{ date('H:i A', strtotime($appointment->appointment_time)) }}</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header">
                    <h4>Détails du Patient </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('doctor/appointments/'.$appointment->appointment_number.'/patient-update') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label>Nom Complet</label>
                                <input type="text" name="name" class="form-control" value="{{ $appointment->name }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label>Adresse Email</label>
                                <input type="text" class="form-control" value="{{ $appointment->email }}" readonly>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label>Numéro de téléphone alternatif</label>
                                <input type="text" class="form-control" value="{{ $appointment->phone }}" readonly>
                            </div>

                            <div class="col-md-4 mb-3">
                                <label>Âge</label>
                                <input type="text" name="age" class="form-control" value="{{ $appointment->user->age }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label>Genre</label>
                                <select name="gender" class="form-select">
                                    <option value="">Sélectionner le genre</option>
                                    <option value="Homme" {{ $appointment->user->gender == 'Homme' ? 'selected':''}}>Homme</option>
                                    <option value="Femme" {{ $appointment->user->gender == 'Femme' ? 'selected':''}}>Femme</option>
                                    <option value="Autre" {{ $appointment->user->gender == 'Autre' ? 'selected':''}}>Autre</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label>Numéro de téléphone</label>
                                <input type="text" class="form-control" value="{{ $appointment->user->phone }}" readonly>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label>Date de naissance</label>
                                <input type="text" name="dob" class="form-control" value="{{ $appointment->user->dob }}">
                            </div>
                            <div class="col-md-8">
                                <label>Commentaire du Patient/Utilisateur</label>
                                <p class="border rounded p-2">{{ $appointment->user_comment }}</p>
                            </div>
                            <div class="col-md-12 text-end mb-3">
                                <button type="submit" class="btn btn-primary">Mettre à jour le Patient</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header">
                    <h4>Mise à jour du Statut du Rendez-vous</h4>
                </div>
                <div class="card-body">


                    <form action="{{ url('doctor/appointments/'.$appointment->appointment_number.'/apt-update') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">

                            <div class="col-md-12 mb-3">
                                <label>Statut du Rendez-vous</label>
                                <select name="status" class="form-select" required>
                                    <option value="">Sélectionner le Statut du Rendez-vous</option>
                                    <option
                                        value="{{ App\Enums\AppointmentStatusEnum::Booked }}"
                                        {{ $appointment->status == App\Enums\AppointmentStatusEnum::Booked ? 'selected':''}}>Réservé
                                    </option>
                                    <option
                                        value="{{ App\Enums\AppointmentStatusEnum::Cancel }}"
                                        {{ $appointment->status == App\Enums\AppointmentStatusEnum::Cancel ? 'selected':''}}>Annulé
                                    </option>
                                    <option
                                        value="{{ App\Enums\AppointmentStatusEnum::Completed }}"
                                        {{ $appointment->status == App\Enums\AppointmentStatusEnum::Completed ? 'selected':''}}>Terminé
                                    </option>
                                    <option
                                        value="{{ App\Enums\AppointmentStatusEnum::NotAvailable }}"
                                        {{ $appointment->status == App\Enums\AppointmentStatusEnum::NotAvailable ? 'selected':''}}>Patient non disponible
                                    </option>
                                </select>
                            </div>

                            <div class="col-md-4 mb-3">
                                <label>Frais de Consultation </label>
                                <input type="text" name="consulation_fees" class="form-control" value="{{ $appointment->consulation_fees }}" />
                            </div>
                            <div class="col-md-4 mb-3">
                                <label>Statut des Frais de Consultation (Paiement reçu ?)</label>
                                <select name="consulation_fees_status" class="form-select">
                                    <option value="en_attente" {{ $appointment->consulation_fees_status == 'en_attente' ? 'selected':'' }}>En attente</option>
                                    <option value="complet" {{ $appointment->consulation_fees_status == 'complet' ? 'selected':'' }}>Complet</option>
                                </select>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label>Commentaire du Médecin (Écrivez votre commentaire)</label>
                                <textarea name="doctor_comment" class="form-control" placeholder="Écrire un commentaire..." rows="3">{{ $appointment->doctor_comment }}</textarea>
                            </div>

                            <div class="col-md-12 text-end mb-3">
                                <button type="submit" class="btn btn-primary">Mettre à jour</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
@endsection
