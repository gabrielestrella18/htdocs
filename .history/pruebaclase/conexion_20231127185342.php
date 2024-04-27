<?php
$host = "localhost";
$user = "root";
$pass = "";
$bd = "promociones";

$conectar = mysqli_connect($host, $user, $pass, $bd);

if (!$conectar){
echo"NO se conecto";
}