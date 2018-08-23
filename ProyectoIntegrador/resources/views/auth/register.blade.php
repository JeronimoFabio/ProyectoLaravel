@extends('layouts.app')    
@section('content')
<div class="containerPrin">

<link rel="stylesheet"  href="/css/signin.css">
  <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
@include('/includes/header')
<div class="container">

  
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ old('nombre') }}" required autofocus>

                                @if ($errors->has('nombre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contrasena" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="contrasena" type="password" class="form-control{{ $errors->has('contrasena') ? ' is-invalid' : '' }}" name="contrasena" required>

                                @if ($errors->has('contrasena'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('contrasena') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contrasena-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="contrasena-confirm" type="password" class="form-control" name="contrasena_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-outline-success">
                                    {{ __('Registrar!') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="buttonSub">
                        <button class="btn btn-outline-warning">
                        <a href="/viewss/inicio">Volver al Home</a>
                        </button>
                        <div>
                            ¿Ya tienes cuenta?
                        <button class="btn btn-outline-warning">
                        <a href="/login">Ingresar</a>
                        </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
@include('/includes/footer')
</div>
@endsection
