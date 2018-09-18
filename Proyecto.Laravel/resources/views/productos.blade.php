@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" >

                <div class="card-header" style="display: flex; justify-content: space-between;">
                    <thead>
                        <tr>
                            <th>Tu compra   ({{count($carrito)}})</th>
                        
                            <th><a href="/inicio" class="btn btn-sm btn-primary">Seguir Comprando</a></th>
                            <th><a href="/cart/destroy"><input id="btn-right" class="btn btn-warning" type="button" Value="Vaciar Carrito">  </a></th>
                        </tr>
                    </thead>
                </div>
    
                <div class="card-body" style="display: flex;flex-direction: column; ">
                       
                         @forelse ($products as $producto)
                         <div><article>
                        <img src="/images/Hornos/horno1.jpg" alt="hornos">
                        {{$producto->name}}
                        <br>
                        {{$producto->description}}
                        <br>
                        {{ "$" . $producto->price}}
                        <br>
                        <br>
                        </article>
                        @empty 
                            No hay productos
                        @endforelse
    <br><br><br>
    <button class="btn btn-danger">Comprar</button>
    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
