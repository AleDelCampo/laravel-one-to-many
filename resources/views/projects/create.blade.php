@extends('layouts.app')

@section('content')

<body class="create-bg">

<div class="container py-4">
    <h1>Inserisci un Progetto</h1>

    <form action="{{route('projects.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-2">
          <label for="title" class="form-label">Titolo: </label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" required>
          @error('title')
          <div class="invalid-feedback">
              {{$message}}
          </div>
          @enderror
        </div>

        <div class="mb-2">
            <label for="description" class="form-label">Descrizione: </label>
            <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" required>{{ old('description') }}</textarea>
            @error('description')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="image" class="form-label">Anteprima: </label>
            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
            @error('image')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="technology" class="form-label">Tecnologie Utilizzate: </label>
            <input type="text" class="form-control @error('technology') is-invalid @enderror" id="technology" name="technology" value="{{ old('technology') }}">
            @error('technology')
            <div class="invalid-feedback">  
              {{$message}}
            </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary"><i class="fa-regular fa-paper-plane"></i> Registra!!</button>

    </form>
</div>

</body>
@endsection