@extends('layouts.doctor')

@section('title','Patients')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Liste des Patients</h4>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table id="myDataTable" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                {{-- <th>ID</th> --}}
                                <th>Nom du Patient</th>
                                <th>Email</th>
                                <th>Âge</th>
                                <th>Téléphone</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                            @foreach ($patients as $patient)
                                <tr>
                                    {{-- <td>{{ $patient->id }}</td> --}}
                                    <td>{{ $patient->name }}</td>
                                    <td>{{ $patient->email }}</td>
                                    <td>{{ $patient->age ?? 'X' }}</td>
                                    <td>{{ $patient->phone ?? 'X' }}</td>
                                    <td>
                                        <a class="btn btn-success btn-sm" href="{{ url('doctor/patients/'.$patient->id.'/edit') }}">
                                            <i class="bx bx-pencil me-1"></i> Modifier
                                        </a>
                                        <a class="btn btn-primary btn-sm" href="{{ url('doctor/patients/'.$patient->id.'/appointments') }}">
                                            <i class="bx bx-file me-1"></i> Voir les Rendez-vous
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
