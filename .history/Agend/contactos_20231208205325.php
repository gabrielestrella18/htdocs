<?php
include"conexion.php";
$NOMBRE = $_POST["NOMBRE"];
$MATRICULA = $_POST["MATRICULA"];
$ERESREPARTIDOR = $_POST["ERESREPARTIDOR"];
$Lunes = $_POST["Lunes"];
$Martes = $_POST["Martes"];
$Miercoles = $_POST["Miercoles"];
$Jueves = $_POST["Jueves"];
$Viernes = $_POST["Viernes"];
$Sabado = $_POST["Sabado"];
$HORARIO = $_POST["HORARIO"];
$CARRRERA = $_POST["CARRERA"];
$SEMESTRE = $_POST["SEMESTRE"];

$insertar =  "INSERT INTO Contactos(NOMBRE, MATRICULA, ERESREPARTIDOR, Lunes, Martes, Miercoles, Jueves, Viernes, Sabado, HORARIO, CARRERA, SEMESTRE) VALUES('$NOMBRE', '$MATRICULA', '$ERESREAPRTIDOR', '$Lunes', '$Martes', '$Miercoles', '$Jueves', '$Viernes', '$Sabado', '$HORARIO', '$CARRRERA', '$SEMESTRE')";

$consulta = mysqli_query($conectar, $insertar);

if ($consulta){
  echo '<script> alert("SEGUARDO CORRECTAMENTE LA INFORMACION");
  location.href="inicio.php";</script>';
}else{
  echo  '<script> alert("NO SE GUARDO CORRECTAMENTE LA INFORMACION");
  location.href="altacontactos.php";</script>';
}

