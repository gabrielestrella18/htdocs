<?php

include "conexion.php";

$carreras = $_POST["carreras"];
$ingreso = $_POST["ingreso"];
$materias = $_POST["materias"];

// echo $carreras . "<br>";
// echo $ingreso . "<br>";
// echo $materias;

$insertar = "INSERT INTO verano (carreras, ingreso, materias) VALUES ('$carreras', '$ingreso', '$materias')";

$query = mysqli_query($conectar, $insertar);


if ($query) {
  echo "
  <script>
  alert( 'Si se guardaron los datos en BD');
  location.href='principal.php';
  </script>
  ";
} else {
  echo "
  <script>
  alert( 'FALLO');
  location.href='principal.php';
  </script>
  ";
}
