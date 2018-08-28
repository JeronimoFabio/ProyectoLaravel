
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=devise-width, initial-scale=1">
  <link rel="stylesheet"  href="/css/inicio.css">
  <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
</head>
<script>
 

  
</script>
<body>
   <div class="container">

  @include('partials/header')
   
  <div class="iniciobuttons">
    <div class="reg"><a href="/login"">Ingresar</a></div> 
    <div class="reg"><a href="/register"">Registración</a></div>
  <!--<a href="/login">Log Out</a> -->
  </div>

{{--<div class="logout">
   <button>
  <a href="logout">Logout</a>
  </button>--}}

<main>

  <article class="cocinas">
    <img src="/images/cocinas.jpg" alt="cocinas">
    <a href="/cocinas">COCINAS</a>
  </article>
  <article class="hornos">
    <img src="/images/hornos.jpg" alt="hornos">
    <a href="/hornos">HORNOS</a>
  </article>
  <article class="anafes">
    <img src="/images/anafes.jpg" alt="anafes">
    <a href="/anafes">ANAFES</a>
  </article>
  <article class="campanas">

    <img src="/images/campanas.jpg" alt="campanas">
    <a href="/campana">CAMPANAS</a>
  </article>

</main>


 
   @include('partials/footer')
   

   </div>
</body>

</html>
