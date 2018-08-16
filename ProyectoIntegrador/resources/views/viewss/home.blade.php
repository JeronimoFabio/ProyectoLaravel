<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=devise-width, initial-scale=1">
  <link rel="stylesheet"  href="/css/home.css">
  <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
</head>
<body>
   <div class="container">

  @include('includes/header');
   
  <div class="login">
  <a href="/viewss/login.php">Login</a>
  <a href="/viewss/signin.php">Sign In</a>
  </div>

<!--contenido-->
<main>
  <article class="cocinas">
    <img src="images/cocinas.jpg" alt="cocinas">
    <a href="/viewss/home.php">COCINAS</a>
  </article>
  <article class="hornos">
    <img src="images/hornos.jpg" alt="hornos">
    <a href="/viewss/home.php">HORNOS</a>
  </article>
  <article class="anafes">
    <img src="images/anafes.jpg" alt="anafes">
    <a href="/veiwss/home.php">ANAFES</a>
  </article>
  <article class="campanas">

    <img src="images/campanas.jpg" alt="campanas">
    <a href="/viewss/home.php">CAMPANAS</a>
  </article>

</main>

 <!-- FOOTER -->
 
   @include('includes/footer');
   

   </div>
</body>

</html>
