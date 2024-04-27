<?php
$host = "localhost";
$user = "root";
$pass = "";
$bd = "arquitectos";

$conexion = new mysqli($host, $user, $pass, $bd);

if (!$conexion){
echo"NO se conecto";
}