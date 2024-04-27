<?php
include "seguridad.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="estilo.css">

</head>

<body>
  <div class="arriba">
    <h2>INSTITUTO TECNOLOGICO DE MERIDA</font>
    </h2>
    <img src="imagenes/logo.png" width="200px">
  </div>
  <br><br>
  <div class="ancho">
    <?php
    require "conexion.php";

    $todos_datos = "SELECT * FROM verano ORDER BY id ASC";
    $resultado = mysqli_query($conectar, $todos_datos);

    while ($fila = mysqli_fetch_assoc($resultado)) {

      echo $fila["id"] . "<br>";
      echo $fila["carreras"] . "<br>";
      echo $fila["ingreso"] . "<br>";
      echo $fila["materias"] . "<br><hr>";
    }
    ?>
  </div>

  <div class="ancho centrar">
    <br><br>
    <a href="principal.php" class="btn_dorado">
      << REGRESAR </a>
  </div>
  <br>



</body>

</html>