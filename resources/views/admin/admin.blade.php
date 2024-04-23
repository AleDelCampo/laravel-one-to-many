@extends('layouts.app')

@section('content')

<body class="admin-bg">

<div class="container text-center mt-4">
    <h1>
        Pagina Super Segreta Admin
    </h1>
</div>

<div class="container text-center mt-4">
    <a href="{{ route('projects.create') }}" class="btn btn-success">Crea Nuovo Progetto</a>
</div>

<div class="d-flex justify-content-center text-center gap-4 mt-5">
    @foreach($projects as $project) 
        <div class="pointer">
            <h2>{{ $project->title }}</h2>
            <p>{{ $project->description }}</p>

            {{-- Questo è il metodo utilizzato per l'assegnazione dell'immagine attraverso l'inserimento tramite il nostro server (momentaneamente cartelle del PC) --}}

            <div class="mb-2">
                <img class="img-size" src="{{ asset('storage/' . $project->image) }}" alt="Copertina immagine">
            </div>
            <p>Tecnologia: {{ $project->technology }}</p>
            <div class="d-flex justify-content-center gap-4">   
                <a href="{{ route('projects.edit', ['project' => $project->id]) }}" class="btn btn-primary">Modifica</a>
                <form action="{{ route('projects.destroy', ['project' => $project->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Elimina</button>
                </form>
            </div>
        </div>
    @endforeach
</div>

<div class="container text-center mt-4">
    <a href="{{ route('dashboard') }}" class="btn btn-primary">Vai alla DashBoard</a>
</div>

</body>
@endsection