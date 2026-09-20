@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Articoli</h1>

        <a href="{{ route('posts.create') }}" class="btn btn-primary">
            Nuovo articolo
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @forelse ($posts as $post)
        <article class="card mb-3">
            <div class="card-body">
                <h2 class="card-title">
                    {{ $post->title }}
                </h2>

                <p class="card-text">
                    {{ $post->content }}
                </p>
            </div>
        </article>
    @empty
        <div class="alert alert-secondary">
            Non ci sono ancora articoli.
        </div>
    @endforelse

@endsection