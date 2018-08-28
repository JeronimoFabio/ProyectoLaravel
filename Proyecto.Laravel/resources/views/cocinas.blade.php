<!DOCTYPE html>
<html>
<head>
	<title>Cocinas</title>
	<link rel="stylesheet"  href="/css/cocinas.css">
</head>
<body>
   <div class="container">

  @include('partials/header')
   
  <div class="iniciobuttons">
    <div class="reg"><a href="/login"">Ingresar</a></div> 
    <div class="reg"><a href="/register"">Registración</a></div>
  <!--<a href="/login">Log Out</a> -->
  </div>


<main>



	@foreach ($cocinas as $cocina)

	<div><article>
		<img src="/images/Cocinas/capart550_pfp.png" alt="cocinas">
		{{$cocina->name}}
		<br>
		{{$cocina->description}}
		<br>
		{{ "$" . $cocina->price}}
		<br>
	</article>
	<a href="/carrito/add/{{$cocina->id}}">
	<button type="button" class="btn btn-warning">Agregar al carrito</button></a>
	</div>
	@endforeach

  

</main>


 
   @include('partials/footer')
   

   </div>
</body>
</html>