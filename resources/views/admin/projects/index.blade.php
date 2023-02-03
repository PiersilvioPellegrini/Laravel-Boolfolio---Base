@extends('layouts.app')

@section('content')
    <div class="container">

        <a href="{{ route('admin.projects.create') }}" class="btn btn-danger mb-5 mt-5"><i class="fas fa-eye"></i>Crea un nuovo
            Project</a>

        @if ($projects)
            <h1 class="text text-center mb-5 mt-5 "> I tuoi Progetti </h1>
            <div class="card">
                <div class="card-body overflow-auto">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>img_cover</th>
                                <th>name</th>
                                <th>description</th>
                                <th>link_project</th>
                                <th>creation_date</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $singleProject)
                                <tr>
                                    <td>{{ $singleProject->id }}</td>
                                    <td>{{ $singleProject->img_cover }}</td>
                                    <td>{{ $singleProject->name }}</td>
                                    <td>{{ $singleProject->Description }}</td>
                                    <td>{{ $singleProject->link_project }}</td>
                                    <td>{{ $singleProject->creation_date }}</td>
                                    <td>
                                        <a href="{{ route('admin.projects.edit', $singleProject->id) }}"
                                            class="btn btn-primary mb-2"><i class="fas fa-pencil"></i>Edit Project</a>
                                        <a href="{{ route('admin.projects.show', $singleProject->id) }}"
                                            class="btn btn-info mb-2"><i class="fas fa-eye"></i>Show Projects</a>

                                        {{-- <a href="{{ route('admin.projects.destroy', $singleProject->id) }}"
                                            class="btn btn-danger mb-2"><i class="fas fa-eye"></i>Destroy Project</a> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif

    </div>
@endsection
