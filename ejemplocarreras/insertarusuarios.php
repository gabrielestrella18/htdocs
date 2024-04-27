<?php

include "conexion.php";

$nombrecompleto = $_POST["nombrecompleto"];
$email = $_POST["email"];
$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];

// echo $carrnombrecompletoeras . "<br>";
// echo $email . "<br>";
// echo $usuario;
// echo $contrasena;



// validar


//validar usuario

$verficar_usuario = mysqli_query($conectar, "SELECT * FROM usuarios WHERE usuario = '$usuario' ");

if (mysqli_num_rows($verficar_usuario) > 0) {
  echo '
  <script>
    alert("ESTE USUARIO YA ESTA REGISTRADO");
    location.href="registrar.php";
  </script>

';
  exit;
}


$insertar = "INSERT INTO usuarios (nombrecompleto, email, usuario ,contrasena) VALUES ('$nombrecompleto', '$email', '$usuario', '$contrasena')";

$query = mysqli_query($conectar, $insertar);

if ($query) {
  echo '
      <script>
        alert("SI SE GUARDARO LOS DATOS CORRECTAMENTE");
        location.href="index.php";
      </script>

    ';
} else {
  echo '
      <script>
        alert("NO SE GUARDO EN LA BASE DE DATOS");
        location.href="registrar.php";
      </script>

    ';
}
