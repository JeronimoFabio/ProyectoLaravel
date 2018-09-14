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



	@foreach ($anafes as $anafes)

	<div><article>
		<img src="/images/Anafes/anafes.jpg" alt="anafes">
<ul>
		{{$anafes->name}}
		<br>
		{{$anafes->description}}
		<br>
		{{ "$" . $anafes->price}}
		<br>
</ul>
	</article>
	<a href="/carrito/add/{{$anafes->id}}">
	<button type="button" >Agregar al carrito</button></a>
	</div>
	@endforeach

  

</main>


 
   @include('partials/footer')
   

   </div>
</body>
</html>