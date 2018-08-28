@extends('layouts.app')

@section('content')
<div class="container" style="display: flex; flex-direction: column; justify-content: space-between; height: 250px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Usted ya esta logueado! :D
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
