@extends('layouts.app')

@php
    $title = 'Modifica Project #' . $project->id;
@endphp

@section('title', $title)

@section('content')
    <h1>{{ $title }}</h1>

    {{-- Form per la creazione --}}
    <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf()
        @method('put')

        <div class="mb-3">
            <label class="form-label">IMG_COVER</label>
            <input type="file" class="form-control @error('img_cover') is-invalid @enderror" name="img_cover">
            @error('img_cover')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

            <img src="{{ asset('storage/' . $project->img_cover) }}" alt="" class="img-thumbnail">
        </div>
        </div>

        <div class="mb-3">
            <label class="form-label">NAME</label>
            <textarea name="name" cols="30" rows="5" class="form-control @error('name') is-invalid @enderror">{{ old('name', $project->name) }}</textarea>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">DESCRIPTION</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" name="description"
                value="{{ old('description', $project->description) }}">
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">LINK_PROJECTS</label>
            <input type="text" class="form-control @error('link_project') is-invalid @enderror" name="link_project"
                value="{{ old('link_project', $project->link_project) }}">
            @error('link_project')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>



        <div class="mb-3">
            <label class="form-label">CREATION_DATE</label>
            <input type="date" class="form-control @error('creation_date') is-invalid @enderror" name="creation_date"
                value="{{ old('creation_date', $project->creation_date) }}">
            @error('creation_date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>



        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Annulla</a>
        <button class="btn btn-primary">Salva</button>
    </form>

@endsection
