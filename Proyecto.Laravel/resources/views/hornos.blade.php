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



	@foreach ($hornos as $horno)

	<div><article>
		<img src="/images/Hornos/horno1.jpg" alt="hornos">
		{{$horno->name}}
		<br>
		{{$horno->description}}
		<br>
		{{ "$" . $horno->price}}
		<br>
		<br>
	</article>
	<a href="/carrito/add/{{$horno->id}}">
	<button type="button" class="btn btn-warning">Agregar al carrito</button></a>
	<br><br><br>
	</div>
	@endforeach

  

</main>


 
   @include('partials/footer')
   

   </div>
</body>
</html>