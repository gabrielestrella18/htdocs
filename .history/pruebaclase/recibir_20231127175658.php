
<?php 
include 'conexion.php';
$descripcion = $_POST['descripcion'];
?>
$rutaTemporal = $_FILES['imagen'] ['tmp_name'];
$nombreIamgen = $_FILES['imagen'] ['name'];
$pesoImagen = $_FILES['imagen'] ['size'];


echo $rutaTemporal."<br>";
echo $nombreImagen."<br>";
echo $pesoImagen."<br>";
echo $descripcion;

//DATOSDEL ARCHIVO ADJUNTO//
$rutaEnServidor = "fotopromociones";

$rutaDestino = $rutaEnServidor  . "/" . $nombreIamgen;