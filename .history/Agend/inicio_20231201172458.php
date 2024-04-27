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
    <div class="menuprincipal">
      <br><br><br><a href="#">Inicio</a>
      <a href="datos.php">Ver datos</a>
      <?php
          session_start();
          if(isset($_SESSION['autentificado']) && $_SESSION['autentificado'] === "SI"){
          echo '<a href="altacontactos.php">Nuevo</a>';
          echo '<a href="galeria.php">Galeria</a>';
        }
        ?>
      <a href="verfotos.php">Ver fotos</a>
      <a href="index.php">LOGIN</a><br><br>
      <img src="imagenes/merida.png" alt="" class="logo">
      <br><br><br>
      <h2>Ejemplo de Agenda Telefonica</h2><br>
      <p class="nombre">Gabriel Arcangel Estrella Canul </p><br>
    </div>
    <div class="final"><a href="https://www.merida.tecnm.mx/">www.itmerida.mx</a></div>
  </div><br><br><br><br><br><br><br><br><br>
</body>
</html>