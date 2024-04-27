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

<br><br>
<div class="ser">
<h3 class="serv">NUESTROS PROYECTOS</h3>
</div>
<br><br><br><br><br>


<div class="cabecera">
    VER PROMOCIONES
</div>

<BR></BR>
<p class="alinear"><a id="mostrar" href="index.php">
    REGRESAR</a>
</p>

<div class="contenedor">
    <?php 
    include "conexion.php";
    $todos_usuarios = "SELECT * FROM buenfin ORDER BY id ASC";
    $resultado = mysqli_query($conexion, $todos_usuarios);

    while ($registro = mysqli_fetch_assoc($resultado)) {
    ?>
<div class="cajas">
    <a href="<?php  echo $registro['descripcion']?>"
    target="_blank">
    <img class="fotos_promo" src="<?php echo $registro['descripcion'];  ?>"></a>
    <br>
    <p class="titulo_promo"><?php  echo $registro['ruta']; ?></p>
</div>
<?php 
    }
?>
</div>




<?php 
include "abajo.php"
?>


  </body>
</html>