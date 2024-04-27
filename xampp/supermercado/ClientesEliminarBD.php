<!DOCTYPE html>
<html>
<head>
    <title>Eliminar</title>
</head>
<body>
<?php
if (strlen($_POST['Id']) >= 1) {
    $id = trim($_POST['Id']);
    include("conectar.php");
    $consulta = "DELETE FROM clientes WHERE ID_CLIENTE = '$id'";
    $resultado = mysqli_query($enlace, $consulta);
    if ($resultado) {
        echo "Se eliminó el cliente exitosamente";
    } else {
        echo "Ha ocurrido un error";
    }
} else {
    echo "Favor de introducir datos, todos los campos son obligatorios";
}
?>
<br>
<a href="ClientesAlta.php">Alta de Clientes</a><br>
<a href="ClientesVer.php">Mostrar Clientes</a><br>
<a href="ClientesEliminar.php">Eliminar Clientes</a><br>
<a href="ClientesModificar.php">Modificar Clientes</a>
</body>
</html>
