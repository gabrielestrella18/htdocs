<?php
$host = "localhost";
$user = "root";
$contrasena = "";
$bd = "inscripcion2";

$conectar = mysqli_connect($host, $user, $contrasena, $bd);

if (!$conectar) {
	echo "No se pudo conectar a la base de datos";
}
