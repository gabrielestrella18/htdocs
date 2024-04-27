<?php
$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];

require "conexion.php";

$comparar = "SELECT * FROM usuarios WHERE Usuario='$usuario' AND Contrasena='$contrasena'";

$resultado = mysqli_query($conectar, $comparar);

if(mysqli_num_rows($resultado) > 0){
	session_start();
	$_SESSION["autentificado"] = "SI";
	header("Location: control.php");
}else{
	echo " 
  <script> 
  alert('Error en la autentificacion');
  location.href = 'index.php?errorusuario=SI';
  </script>
  ";
}
?>