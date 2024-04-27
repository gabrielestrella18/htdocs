
<?php 
include 'conexion.php';
$descripcion = $_POST['descripcion'];

$rutaTemporal = $_FILES['imagen'] ['tmp_name'];
$nombreImagen = $_FILES['imagen'] ['name'];
$pesoImagen = $_FILES['imagen'] ['size'];


echo $rutaTemporal."<br>";
echo $nombreImagen."<br>";
echo $pesoImagen."<br>";
echo $descripcion;

//DATOSDEL ARCHIVO ADJUNTO//
$rutaEnServidor = "fotopromociones";

$rutaDestino = $rutaEnServidor  . "/" . $nombreImagen;

//ESTO LO QUE HACE ES ESCRIBIR LA FOTO DENTRO DE LA CARPETA DESIGNADA
move_uploaded_file($rutaTemporal, $rutaDestino);

//INSERTAR DATOS DE LA TABLA

$consulta = "INSERT INTO buenfin (ruta, descripcion) VALUES ('$descripcion', '$rutaDestino')";

$resultado = mysqli_query($conexion, $consulta);


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


?>