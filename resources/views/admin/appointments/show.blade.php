@extends('layouts.admin')

@section('title','Voir le Rendez-vous')

@section('content')

    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h4>Voir le Rendez-vous
                        <a href="{{ url('admin/appointments') }}" class="btn btn-sm btn-danger float-end">Retour</a>
                    </h4>
                </div>
                <div class="card-body">
                    <h4>Détails du Rendez-vous</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Numéro de Rendez-vous</label>
                            <p class="form-control">{{ $appointment->appointment_number }}</p>
                        </div>
                        <div class="col-md-4">
                            <label>Date du Rendez-vous</label>
                            <p class="form-control">{{ date('F d, Y', strtotime($appointment->appointment_date)) }}</p>
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
                    <h4>Détail du Patient</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label>Nom Complet</label>
                            <input type="text" name="name" readonly class="form-control" value="{{ $appointment->name }}">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Adresse Email</label>
                            <input type="text" readonly class="form-control" value="{{ $appointment->email }}" readonly>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Numéro de Téléphone Alternatif</label>
                            <input type="text" readonly class="form-control" value="{{ $appointment->phone }}" readonly>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label>Âge</label>
                            <input type="text" name="age" readonly class="form-control" value="{{ $appointment->user->age }}">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Genre</label>
                            <select name="gender" disabled class="form-select">
                                <option value="">Sélectionner le Genre</option>
                                <option value="Male" {{ $appointment->user->gender == 'Male' ? 'selected':''}}>Homme</option>
                                <option value="Female" {{ $appointment->user->gender == 'Female' ? 'selected':''}}>Femme</option>
                                <option value="Others" {{ $appointment->user->gender == 'Others' ? 'selected':''}}>Autres</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Téléphone</label>
                            <input type="text" class="form-control" readonly value="{{ $appointment->user->phone }}" />
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Date de Naissance</label>
                            <input type="text" name="dob" readonly class="form-control" value="{{ $appointment->user->dob }}">
                        </div>
                        <div class="col-md-8">
                            <label>Commentaire du Patient/Utilisateur</label>
                            <p class="border rounded p-2">{{ $appointment->user_comment }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header">
                    <h4>Mise à Jour du Statut de Rendez-vous</h4>
                </div>
                <div class="card-body">




                    <div class="row">

                        <div class="col-md-12 mb-3">
                            <label>Statut du Rendez-vous</label>
                            <select name="status" class="form-select" disabled>
                                <option value="">Sélectionner le Statut du Rendez-vous</option>
                                <option
                                    value="{{ App\Enums\AppointmentStatusEnum::Booked }}"
                                    {{ $appointment->status == App\Enums\AppointmentStatusEnum::Booked ? 'selected':''}}>Pris
                                </option>
                                <option
                                    value="{{ App\Enums\AppointmentStatusEnum::Cancel }}"
                                    {{ $appointment->status == App\Enums\AppointmentStatusEnum::Cancel ? 'selected':''}}>Annulé
                                </option>
                                <option
                                    value="{{ App\Enums\AppointmentStatusEnum::Completed }}"
                                    {{ $appointment->status == App\Enums\AppointmentStatusEnum::Completed ? 'selected':''}}>Complété
                                </option>
                                <option
                                    value="{{ App\Enums\AppointmentStatusEnum::NotAvailable }}"
                                    {{ $appointment->status == App\Enums\AppointmentStatusEnum::NotAvailable ? 'selected':''}}>Patient Non Disponible
                                </option>
                            </select>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label>Frais de Consultation</label>
                            <input type="text" name="consulation_fees" readonly class="form-control" value="{{ $appointment->consulation_fees }}" />
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Statut des Frais de Consultation (Paiement reçu ?)</label>
                            <select name="consulation_fees_status" class="form-select" disabled>
                                <option value="pending" {{ $appointment->consulation_fees_status == 'pending' ? 'selected':'' }}>En Attente</option>
                                <option value="completed" {{ $appointment->consulation_fees_status == 'completed' ? 'selected':'' }}>Complété</option>
                            </select>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Commentaire du Docteur (Écrire votre commentaire)</label>
                            <textarea name="doctor_comment" class="form-control" readonly placeholder="Écrire un commentaire..." rows="3">{{ $appointment->doctor_comment }}</textarea>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
