<?php include "seguridad.php";?>
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
      <a href="datos.php">Ver datos</a>
      <a href="altacontactos.php">Nuevo</a>
      <a href="index.php">Login</a>
      <br><br>
      <div class="form">
        <form action="guardarfotos.php" method="post" enctype="multipart/form-data">
          <input type="file" name="imagen" class="campos"><br>
          <input type="text" placeholder="Descripcion de la Foto" class="campos" name="descripcionfoto"><br>
          <input type="submit" id="boton" value="guardar fotos" class="boton"><br><br>
        </form>
      </div>
      <div class="final2"></div>
    </div>
  </div>
</body>
</html>