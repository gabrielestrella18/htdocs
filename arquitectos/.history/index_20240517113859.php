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
 
<div class="contenedor_fondo">

<h2 class="textofoto">CONOCE LAS MEJORES OPCIONES PARA CONSTRUIR TU HOGAR<br> APROVECHA YA!</h2>
</div>

<br> <br> <br>





<div class="video">
  
<iframe width="560" height="315" src="https://www.youtube.com/embed/0-ncyfpe_7Q?si=rciG1xyyapmXkrUb" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>

<br> <br> <br>

<div class="contenedor2">
<br><br>
<div class="ser">
<h3 class="serv">CONTACTANOS</h3>
</div>
<br><br><br>


    <div class="form">
        <form  class="centro" action="altacontactos.php" method="post">
          <label for="" class="cuadrado">Nombre:</label>
          <input type="text" name="Nombre" class="campos" required><br><br>
          <label for="" class="cuadrado">Apellido:</label>
          <input type="text" name="Apellido" class="campos" required><br><br>
          <label for="" class="cuadrado">Email:</label>
          <input type="email" name="Correo" class="campos" required><br><br>
          <label for="" class="cuadrado">Celular:</label>
          <input type="tel" name="Celular" class="campos" required><br>
          <br><label for="" class="cuadrado">Servicio:</label>
          <select name="Servicio" id="" class="campos" required><br>
            <option value="#" selected>Elige tu servicio</option>
            <option value="Planifica Hogar">Planifica Hogar</option>
            <option value="Construye Hogar">Construye Hogar</option>
            <option value="Remodela Hogar">Remodela Hogar</option>
           
          </select><br><br><br>
          <button type="submit" id="guardar" class="boton4">ENVIAR</button>
          <button type="reset" id="Eliminar" class="boton3">Borrar Datos</button>
        </form>
      </div>
      
       </div>


<div class="botoncito">
  <a href="servicios.php"class="boton1">CONOCE MAS DE NUESTROS SERVICIOS</a>
</div>
<br><br><br>
<?php 
include "abajo.php"
?>
  </body>
</html>