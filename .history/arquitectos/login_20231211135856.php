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
<br>

<h4>ADMINISTRADOR</h4>
<?php
          session_start();
          if(isset($_SESSION['autentificado']) && $_SESSION['autentificado'] === "SI"){
          echo '<a href="control.php"></a>';
        }
        ?>
<br><br>
<div class="admi">
<?php
          $errorusuario = isset($_GET["errorusuario"]);	
          if($errorusuario == "SI"){
            echo '<h3 class="aviso">Datos incorrectos</h3><br><br>';
          }
        ?>
<form action="autenticar.php" method="post">
          <div class="cont"><label class="ad">Usuario:</label></div><br>
          <input type="text" name="usuario" id="usu" class="campos" required ><br><br>
          <div class="cont"><label class="ad">Contraseña:</label></div><br>
          <input type="password" name="contrasena" id="contra" class="campos" required >
          <br><br>
          <button class="boton3" type="submit" id="Acceder" href="control.php">Acceder Contacto</button>
        </form>
      </div>
   <br>

<?php 
include "abajo.php"
?>


  </body>
</html>