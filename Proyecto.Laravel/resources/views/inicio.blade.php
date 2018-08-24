
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
    <a href="#">Ingresar</a>
    <a href="#">Registración</a>
  <!--<a href="/login">Log Out</a> -->
  </div>

<div class="logout">
   <button>
  <a href="logout">Logout</a>
  </button>
</div>
<main>

  <article class="cocinas">
    <img src="/images/cocinas.jpg" alt="cocinas">
    <a href="/inicio">COCINAS</a>
  </article>
  <article class="hornos">
    <img src="/images/hornos.jpg" alt="hornos">
    <a href="/inicio">HORNOS</a>
  </article>
  <article class="anafes">
    <img src="/images/anafes.jpg" alt="anafes">
    <a href="/inicio">ANAFES</a>
  </article>
  <article class="campanas">

    <img src="/images/campanas.jpg" alt="campanas">
    <a href="/inicio">CAMPANAS</a>
  </article>

</main>


 
   @include('partials/footer')
   

   </div>
</body>

</html>
