

<!DOCTYPE html>
<html>
<head>
  <title>Carrito</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=devise-width, initial-scale=1">
  <link rel="stylesheet"  href="/css/carrito.css">
  <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
</head>
<body>
   <div class="container">
  
  @include('/includes/header')
 
  <div class="login">
  <a href="/login">Ingresar</a>
  <a href="/register">Registración</a>
  </div>

<!--contenido-->
<main>
  <img src="/images/carritoespacio.png" alt="espacio">
 <!-- <?php
  // $db = new PDO('mysql:host=127.0.0.1;dbname=dbproyecto;port=3306','root','');
  // $query = $db->query('SELECT * FROM productos');
  // $productos = $query->fetchAll(PDO::FETCH_ASSOC);?>

 <?php //foreach ($productos as $producto) {
      //$productoObj= new Producto($producto['nombreProducto'],$producto['idProducto'],$producto['precioProducto'],$producto['fotoProducto'],$producto['stockProducto']);
  ?>
         <article class="cocinas">
          <img src="imagenes/cocinas.jpg" alt="cocinas">
          <a href="cocinas.php"> <?php //echo  $productoObj->getnombreProducto(); ?> </a>
        </article>

       <?php  // } ?> -->
     <!--  echo "<h1>". $productoObj->getnombreProducto(). "</h1>"."</br>";
       echo "<div class= >" . $productoObj->getprecioProducto()."</br>"; -->
</main>

 <!-- FOOTER -->
 
   @include('/includes/footer')
   
   </div>
</body>

</html>
