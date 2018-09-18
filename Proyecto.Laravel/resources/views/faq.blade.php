
<!DOCTYPE html>
<html>
<head>
  <title>Preguntas Frecuentes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=devise-width, initial-scale=1">
  <link rel="stylesheet"  href="/css/Faq.css">
  <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
</head>
<body>
   <div class="container">
     
  @include('/partials/header')
       
  <div class="loginfaq">
  <div class="reg"><a href="/login"">Ingresar</a></div> 
  <div class="reg"><a href="/register"">Registración</a></div>
  </div>
<script type="text/javascript">
 window.addEventListener("load",function(){

 document.getElementById("prueba").addEventListener("click",function(event){
         
 });
 });

</script>

<main>
  <h1>Preguntas Frecuentes:</h1>
  <details>
    <summary id="prueba">¿Hace cuanto están en el mercado?</summary>
    <p id="prueba2">Llevamos más de 5 años.</p>
  </details><details>
    <summary>¿Hay repuestos en el país?</summary>
    <p>Somos fabricantes, por lo que los repuestos son de facil acceso.</p>
  </details><details>
    <summary>¿Los artefactos cuentan con habilitación para uso domestico?</summary>
    <p>Si, todos nuestros productos están habilitados.</p>
  </details><details>
    <summary>¿Los artefactos cuentan con garantía?</summary>
    <p>Nuestros artefactos cuentan con garantía de 1 año desde la instalación</p>
  </details><details>
    <summary>¿Hacen envios?</summary>
    <p>Hacemos envios a todo el pais con un costo adicional dependiendo la zona</p>
  </details><details>
    <summary>¿Cuentan con servicio tecnico?</summary>
    <p>Si, tenemos servicio tecnico y equipo de reparación gratuito.</p>
  </details>

</main>


 
@include('/partials/footer')

</div>
</body>

</html>
