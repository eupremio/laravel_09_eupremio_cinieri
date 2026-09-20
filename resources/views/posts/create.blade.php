@extends('layouts.app')

@section('content')

    <h1 class="mb-4">Crea un nuovo articolo</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">
                Titolo
            </label>

            <input
                type="text"
                name="title"
                id="title"
                class="form-control"
                value="{{ old('title') }}"
                required
            >
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">
                Contenuto
            </label>

            <textarea
                name="content"
                id="content"
                class="form-control"
                rows="6"
                required
            >{{ old('content') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">
            Salva articolo
        </button>

    </form>

@endsection