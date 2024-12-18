@extends('layouts.admin')

@section('title','Specilités')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Liste des Specilités
                        <a href="{{ url('/admin/departments/create') }}" class="btn btn-primary float-end">Ajouter un Spécilités</a>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">

                        <table id="myDataTable" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom du Spécilités</th>
                                <th>Image</th>
                                <th width="25%">Action</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                            @forelse ($departments as $department)
                                <tr>
                                    <td>{{ $department->id }}</td>
                                    <td>{{ $department->name }}</td>
                                    <td>
                                        @if ($department->image)
                                            <img src="{{ asset($department->image) }}" style="width: 60px; height: 60px" alt="Images" />
                                        @else
                                            <img src="{{ asset('assets/images/no-img.jpg') }}" style="width: 60px; height: 60px" alt="Images" />
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('admin/departments/'.$department->id.'/edit') }}" class="btn btn-sm btn-success">Modifier</a>
                                        <a href="{{ url('admin/departments/'.$department->id.'/delete') }}"
                                           onclick="return confirm('Êtes-vous sûr de vouloir supprimer ces données ?')"
                                           class="btn btn-sm btn-danger mx-1">
                                            Supprimer
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">Aucun Enregistrement Trouvé</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
