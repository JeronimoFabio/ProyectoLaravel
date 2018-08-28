
<!DOCTYPE html>
<html>
<head>
  <title>Contactanos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=devise-width, initial-scale=1">
  <link rel="stylesheet"  href="/css/contacto.css">
  <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
</head>
<body>
   <div class="container">
   @include('/partials/header')
  <header>
    <img src="/images/serviciotecnico.jpg" id="logoserv" alt="logoserv">
  </header>
  <div class="loginCont">
  <div class="reg"><a href="/login"">Ingresar</a></div> 
  <div class="reg"><a href="/register"">Registración</a></div>
  </div>

<!--contenido-->
<main class="contacto">
 
  <p class="est">Estamos para ayudarte</p>
 
<p class="lux">Luxor te ofrece la posibilidad de contactarte de manera telefónica para que puedas despejar tus dudas, y asesorarte con uno de nuestros expertos.
  <br>
Teléfono de contacto: +54 (0341) 410-6713
<br>
Horarios: Lunes a Viernes 10:00 a.m. - 22:00 p.m.</p>

</main>
<div class="botonenviar">
</div>


   @include('/partials/footer')
   </div>
</body>

</html>
