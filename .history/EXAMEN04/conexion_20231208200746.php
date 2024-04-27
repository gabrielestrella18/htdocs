<?php
$host = "localhost";
$user = "root";
$pass = "";
$bd = "sistemas";

$conexion = mysqli_connect($host, $user, $pass, $bd);

if (!$conexion){
echo"NO se conecto";
}