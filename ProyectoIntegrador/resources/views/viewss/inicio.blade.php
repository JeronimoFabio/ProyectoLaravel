<?php 
namespace app\http\controller\auth;
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=devise-width, initial-scale=1">
  <link rel="stylesheet"  href="/css/home.css">
  <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
</head>
<script>
 

  
</script>
<body>
   <div class="container">

  @include('includes/header');
   
  <div class="login">
  <a href="/login">Ingresar</a>
  <a href="/register">Registración</a>
  <a  href="/login">Log Out</a>
  </div>

<!--contenido-->
<main>
  <article class="cocinas">
    <img src="/images/cocinas.jpg" alt="cocinas">
    <a href="/viewss/inicio">COCINAS</a>
  </article>
  <article class="hornos">
    <img src="/images/hornos.jpg" alt="hornos">
    <a href="/viewss/inicio">HORNOS</a>
  </article>
  <article class="anafes">
    <img src="/images/anafes.jpg" alt="anafes">
    <a href="/viewss/inicio">ANAFES</a>
  </article>
  <article class="campanas">

    <img src="/images/campanas.jpg" alt="campanas">
    <a href="/viewss/inicio">CAMPANAS</a>
  </article>

</main>

 <!-- FOOTER -->
 
   @include('includes/footer');
   

   </div>
</body>

</html>
