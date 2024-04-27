<!DOCTYPE html>
<html lang="en">
  <head>
    <title>examen04</title>
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

<br>



<?php 
    include "conexion.php";
    $todos_usuarios = "SELECT * FROM consultas ORDER BY id ASC";
    $resultado = mysqli_query($conexion, $todos_usuarios);

    while ($registro = mysqli_fetch_assoc($resultado)) {
    ?>
<div class="cajas">
    <a href="<?php  echo $registro['descripcion']?>"
    target="_blank">
    <img class="" src="<?php echo $registro['descripcion'];  ?>"></a>
    <br>
    <p class=""><?php  echo $registro['ruta']; ?></p>
</div>
<?php 
    }
?>


<?php 
include "abajo.php"
?>





</body>
</html>