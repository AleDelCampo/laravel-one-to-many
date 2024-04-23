@extends('layouts.app')

@section('content')

<body class="show-bg">

<div class="d-flex justify-content-center mt-5">
   
    <div class="pointer">
        <h2>{{ $project->title }}</h2>
        <p>{{ $project->description }}</p>
        <div class="mb-2">
            <img class="img-size" src="{{ asset('storage/' . $project->image) }}" alt="Copertina immagine">
        </div>
        <p>Tecnologia: {{ $project->technology }}</p>
    </div>

</div>
    
</body>
@endsection