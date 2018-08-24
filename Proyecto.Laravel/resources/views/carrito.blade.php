@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th><a href="/inicio" class="btn btn-sm btn-primary">Elejir Mas</a></th>
                        </tr>
                    </thead>
                </div>

                <div class="card-body">
                       
                 @foreach($productos as $producto)
                   
                   <tbody>
                       <tr>
                          <td>{{  $producto->name    }}</td>
                          <td>{{  $producto->price    }}</td> <br>
                       </tr>
                   </tbody>
                 @endforeach                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
