@extends('layouts.app')
@section('content')

<body class="welcome-bg">
    
<div class="content">
    <div class="container text-center mt-4">
        <h1>WELCOME TO MY PORTFOLIO</h1>
    </div>

    <div class="d-flex justify-content-center text-center gap-4 mt-5">
        @foreach($projects as $project)
        <a class="text-decoration-none text-white" href="{{ route('projects.show', $project->id) }}">
        <div class="pointer">
            <h2>{{ $project->title }}</h2>
                <small>{{ $project->type?->title }}</small>
            <p>{{ $project->description }}</p>
            <div class="mb-2">
                <img class="img-size" src="{{ asset('storage/' . $project->image) }}" alt="Copertina immagine">
            </div>
            <p>Tecnologia: {{ $project->technology }}</p>
        </div>
        </a>
        @endforeach
    </div>

</div>

</body>
@endsection