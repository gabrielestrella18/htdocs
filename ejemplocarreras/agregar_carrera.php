<?php

require "conexion.php";

$carreras = $_POST['carreras'];
$ingreso = $_POST['ingreso'];
$materias = $_POST['materias'];


$insertar = "INSERT INTO verano (carreras,ingreso, materias) VALUES ('$carreras','$ingreso','$materias')";


$query = mysqli_query($conectar, $insertar);


if ($query) {
	echo '
<script>
	alert("SI SE GUARDARO LOS DATOS CORRECTAMENTE");
	location.href="versolodatos.php";
</script>
';
} else {
	echo '
<script>
	alert("NO SE GUARDO EN LA BASE DE DATOS");
	location.href="index.php";
</script>
';
}
