<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="estilo.css" rel="stylesheet">
  </head>
  <body>
  
<?php 
include "arriba.php"
?>

<?php 
include "menu.php"
?>
  <?php
          session_start();
          if(isset($_SESSION['autentificado']) && $_SESSION['autentificado'] === "SI"){
          echo '<a href="altacontactos.php">Nuevo</a>';
          
        }
        ?>
<div class="contenedor_fondo">

<h2 class="textofoto">CONOCE LAS MEJORES OPCIONES PARA CONSTRUIR TU HOGAR<br> APROVECHA YA!</h2>
</div>

<br> <br> <br>





<div class="video">
  
    <iframe width="560" height="315" src="https://www.youtube.com/embed/-mQdRLKjkZE?si=-qhCFDqmUPR7WVg9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>

<br> <br> <br>

<div class="botoncito">
  <a href="servicios.php"class="boton1">CONOCE MAS DE NUESTROS SERVICIOS</a>
</div>
<br><br><br>
<?php 
include "abajo.php"
?>
  </body>
</html>