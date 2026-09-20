@extends('layouts.app')

@section('content')

    <div class="text-center">
        <h1 class="display-4">Calisthenics Blog</h1>

        <p class="lead">
            Un blog dedicato all'allenamento a corpo libero.
        </p>

        <a href="{{ route('posts.index') }}" class="btn btn-primary">
            Vedi gli articoli
        </a>

        <a href="{{ route('posts.create') }}" class="btn btn-outline-primary">
            Crea un articolo
        </a>
    </div>

@endsection