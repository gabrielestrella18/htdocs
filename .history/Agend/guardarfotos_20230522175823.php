<?php 
require "conexion.php";
$descripcion_foto = $_POST['descripcionfoto'];
$rutatemporal = $_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
date_default_timezone_set('UTC');
$nombreimagenunico = date('h-i-s'). "_" . $nombreImagen;
$rutaservidor = 'fotos';
$rutadestino = $rutaservidor . "/" . $nombreimagenunico;
$insertar = "INSERT INTO galeria (ruta_foto, descripcion_foto) VALUES ('$rutadestino','$descripcion_foto')";
$query = mysqli_query($conectar, $insertar). "<br>";

$tipofoto = $_FILES['imagen']['type'];

if ($tipofoto == "image/peg" or $tipofoto == "image/png" or $tipofoto == "image/gif" or $tipofoto == "image/webp" or $tipofoto == "image/jpg" or $tipofoto == "image/svg"){
  move_uploaded_file($rutatemporal, $rutadestino);
}else {
  echo ' 
  <script>
    alert("NO ES UNA IMAGEN");
    window.history.go(-1);
  </script>
  ';
  exit;
}
echo $nombreImagen . "<br>";
echo $rutatemporal . "<br>";
echo $descripcion_foto. "<br>";
echo $rutadestino;
//echo $pesofoto . "<br>";
//echo $tipofoto . "<br>";
//$pesofoto =$_FILES['imagen']['size'];
//$tipofoto ="image/png"
//$descripcionfoto = $_POST['descripcionfoto'];
?>