<!DOCTYPE html>
<html lang="en">

<head>
    <title>ejemplo fotos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="estilo.CSS" rel="stylesheet">
</head>

<body>

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
    $todos_usuarios = "SELECT * FROM datos ORDER BY id ASC";
    $resultado = mysqli_query($conexion, $todos_usuarios);

    while ($registro  mysqli_fetch_assoc($resultado)) {
    ?>
<div class="cajas">
    <a href="<?php  echo $registro['ruta']?>"
    target="_blank">
    <img class="fotos_promo" src="<?php echo $registro['ruta']  ?>"></a>
    <br>
    <p class="titulo_promo"><?php  echo $registro['descripcion']; ?></p>
</div>
<?php 
    }
?>
</div>


</body>

</html>