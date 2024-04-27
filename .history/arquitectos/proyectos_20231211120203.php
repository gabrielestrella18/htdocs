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
<br>




<BR></BR>

<div class="contenedor">
    <?php 
    include "conexion.php";
    $todos_usuarios = "SELECT * FROM contenidos ORDER BY id ASC";
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