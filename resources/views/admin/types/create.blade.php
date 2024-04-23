@extends('layouts.app')

@section('content')

<body class="create-bg">

  <div class="container py-4">
    <h1>Inserisci una Categoria</h1>

    <form method="POST" action="{{ route('admin.types.store') }}">
      @csrf

      <div class="mb-3">
        <label for="title" class="form-label">Titolo:</label>
        <input type="text" class="form-control" id="title" name="title" required>
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Descrizione:</label>
        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Salva Categoria</button>
    </form>
    
  </div>

</body>
@endsection