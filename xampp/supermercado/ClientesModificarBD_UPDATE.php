<!DOCTYPE html>
<html>
<head>
    <title>Guardar</title>
</head>
<body>
<?php
    if (strlen($_POST['Id']) >= 1) {
        $id = $_POST['Id'];
        $nombre = trim($_POST['nombre']);
        $dir = trim($_POST['dir']);
        $tel = trim($_POST['telefono']);
        include("conectar.php");
        $consulta = "UPDATE clientes SET NOMBRE='$nombre', DIRECCION='$dir', TELEFONO='$tel' WHERE ID_CLIENTE='$id'";
        $resultado = mysqli_query($enlace, $consulta);
        if ($resultado) {
            echo "Se ha actualizado el cliente exitosamente";
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
