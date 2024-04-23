@extends('layouts.app')

@section('content')
<body class="dashboard-bg">
    
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Admin DashBoard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Bentornato Capo') }}
                </div>
            </div>
        </div>
    </div>

    <div>
        <a href="{{ route('admin') }}" class="btn btn-primary mt-4">Vai alla AdminPage</a>
    </div>
    
</div>

</body>
@endsection
