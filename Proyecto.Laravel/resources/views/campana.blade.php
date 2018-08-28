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



	@foreach ($campana as $campana)

	<div><article>
		<img src="/images/Campanas/campana1.jpg" alt="campana">
		{{$campana->name}}
		<br>
		{{$campana->description}}
		<br>
		{{ "$" . $campana->price}}
		<br>
		<br>
	</article>
	<a href="/carrito/add/{{$campana->id}}">
	<button type="button" class="btn btn-warning">Agregar al carrito</button></a>
	<br><br><br>
	</div>
	@endforeach

  

</main>


 
   @include('partials/footer')
   

   </div>
</body>
</html>