@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Te has logueado con exito!
                    <button class="btn btn-outline-warning">
                        <a href="/viewss/inicio">Volver al home</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
