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
                       
              <?php $prodcutos = Product::All('products');

                dd($productos);


               ?>                     
                    
                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
