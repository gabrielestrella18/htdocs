<?php
$host = "localhost";
$user = "root";
$pass = "";
$bd = "arquitectos";

$conexion = mysqli_connect($host, $user, $pass, $bd);

if (!$conexion){
echo"NO se conecto";
}