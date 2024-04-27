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

include  "arriba.php"
?>

<?php 
include "menu.php"
?>
<
<br><br>

<h4 class="welcome">ADMINISTRADOR</h4>

<br><br><br>
<div class="admi">
<form action="autenticar.php" method="post">
          <div class="cont"><label>Usuario:</label></div>
          <input type="text" name="usuario" id="usu" class="campos" required ><br>
          <div class="cont"><label>Contraseña:</label></div>
          <input type="password" name="contrasena" id="contra" class="campos" required >
          <br><br>
          <button class="boton4" type="submit" id="Acceder" href="inicio.php">Acceder Contacto</button>
        </form>
      </div>
   <br><br>

<?php 
include "abajo.php"
?>


  </body>
</html>