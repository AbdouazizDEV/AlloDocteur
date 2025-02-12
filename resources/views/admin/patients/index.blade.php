@extends('layouts.admin')

@section('title','Patients')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Liste des Patients</h4>
                </div>
                <div class="card-body">

                    <form action="" method="GET">
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Sélectionner un Médecin pour lister ses Patients</h5>
                            </div>
                            <div class="col-md-4 mb-3">
                                <select name="slug" class="form-select select2">
                                    <option value="">Sélectionner un médecin</option>
                                    @foreach ($doctors as $docitem)
                                        <option value="{{$docitem->slug}}"
                                            {{ Request::get('slug') == $docitem->slug ? 'selected':'' }}
                                        >
                                            {{$docitem->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <button type="submit" class="btn btn-primary">Filtrer</button>
                            </div>
                        </div>
                    </form>

                    @if ($patients != '')
                        <div class="table-responsive">

                            <table id="myDataTable" class="table table-striped table-bordered mt-2">
                                <thead>
                                <tr>
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
                                        <td>{{ $patient->name }}</td>
                                        <td>{{ $patient->email }}</td>
                                        <td>{{ $patient->age ?? 'X' }}</td>
                                        <td>{{ $patient->phone ?? 'X' }}</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="{{ url('admin/patients/'.$patient->id.'/appointments') }}">
                                                <i class="bx bx-file me-1"></i> Voir les Rendez-vous
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
