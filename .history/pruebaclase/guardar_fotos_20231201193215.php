
<?php 
include 'conexion.php';
$descripcion = $_POST['descripcion'];

$rutaTemporal = $_FILES['imagen'] ['tmp_name'];
$nombreImagen = $_FILES['imagen'] ['name'];
$pesoImagen = $_FILES['imagen'] ['size'];


//ALERT

if ($resultado) {
  echo '
  <script>
  alert ("se agrego correctamente");
  location.href = "index.php";
  </script>
';
} else {
  echo "Ha ocurrido un error al guardar la base de datos";
}


//* agregar peso de la validacion de la pesoImagen //

$pesoImagen =$_FILES['imagen'] ['size'];

if ($pesoImagen > 999000) {
echo '
<script>
  alert(" es demasiada pesada la foto");
  window.history.go(-1);
</script>
';
exit;
}


if ($tipoImagen == "imagen/jpeg" or $tipoImagen == "imagen/png" or $tipoImagen == "imagen/webp" or $tipoImagen == "imagen/gif" or $tipoImagen == "imagen/jpg" or $tipoImagen == "imagen/svg" or $tipoImagen == "") {
  move_uploaded_file($rutaTemporal, $rutaDestino);
  
} else {
  echo '
  <script>
  start("no es imagen");
  winddow.history.go(-1);
  </script>
  ';
  exit;
}
  

?>