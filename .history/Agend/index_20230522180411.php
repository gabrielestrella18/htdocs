<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="estilo.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="presentacion">
    <div class="title"><h1>AGENDA TELEFONICA</h1></div>
    <div class="menuprincipal2">
      <br><p class="naranja">Login Panel Administrativo</p><br><hr><br><br>
      <a href="inicio.php">Inicio</a>
      <?php
          session_start();
          if(isset($_SESSION['autentificado']) && $_SESSION['autentificado'] === "SI"){
          echo '<a href="datos.php">Ver datos</a>';
        }
        ?>
      <br><br>
      <div class="form2">
       <?php
          $errorusuario = isset($_GET["errorusuario"]);	
          if($errorusuario == "SI"){
            echo '<h3 class="aviso">Datos incorrectos</h3><br><br>';
          }
        ?>
        <form action="autenticar.php" method="post">
          <div class="cont"><label>Usuario:</label></div>
          <input type="text" name="usuario" id="usu" class="campos" required ><br>
          <div class="cont"><label>Contraseña:</label></div>
          <input type="password" name="contrasena" id="contra" class="campos" required >
          <br><br>
          <button class="boton2" type="submit" id="Acceder" href="inicio.php">Acceder Contacto</button>
        </form>
      </div>
      <div class="final2"></div>
    </div>
  </div>
</body>
</html>