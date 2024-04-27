<?php
include"conexion.php";
$Nombre = $_POST["Nombre"];
$Apellido = $_POST["Apellido"];
$Correo = $_POST["Correo"];
$Celular = $_POST["Celular"];
$Servicio = $_POST["Servicio"];

$insertar =  "INSERT INTO Interesados(Nombre, Apellido, Correo, Celular, Servicio) VALUES('$Nombre', '$Apellido', '$Correo', '$Celular', '$Servicio')";

$consulta = mysqli_query($conectar, $insertar);

if ($consulta){
  echo '<script> alert("SEGUARDO CORRECTAMENTE LA INFORMACION");
  location.href="inicio.php";</script>';
}else{
  echo  '<script> alert("NO SE GUARDO CORRECTAMENTE LA INFORMACION");
  location.href="altacontactos.php";</script>';
} 