<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="estilo.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <br><br><br><br><br>
<div class="contenedorfotos">
<?php 
require "conexion.php";
$todos_usuarios = "SELECT * FROM galeria ORDER BY id_foto ASC";
$resultado =  mysqli_query($conectar, $todos_usuarios);
while ($fila =mysqli_fetch_assoc($resultado)){
  echo '<div class="fotoindividual">';
  echo $fila ["id_foto"]."<br>";
  echo "<img class='foto' src=' ". $fila["ruta_foto"]."'<br><br>";
  echo $fila ["descripcion_foto"]."<br><hr><br>";
  echo '</div>';
}
?>
</div>
<br><br><br><br><br>
</body>
</html>
