<!DOCTYPE html>
<head>
    <title>Modificar</title>
</head>
<body>
<?php
    if (strlen($_POST['Id']) >= 1) {
        $id = trim($_POST['Id']);
        include("conectar.php");
        $consulta = "SELECT * FROM clientes WHERE ID_CLIENTE='$id'";
        $resultado = mysqli_query($enlace, $consulta);
        if ($resultado) {
            while ($renglon = $resultado->fetch_array(MYSQLI_ASSOC)) {
?>
                <form action="ClientesModificarBD_Update.php" method="post">
                    Id: <input type="text" name="Id" value="<?php echo $renglon['ID_CLIENTE'] ?>" readonly><br>
                    Nombre: <input type="text" name="nombre" value="<?php echo $renglon['NOMBRE'] ?>"><br>
                    Dirección: <input type="text" name="dir" value="<?php echo $renglon['DIRECCION'] ?>"><br>
                    Telefono: <input type="text" name="telefono" value="<?php echo $renglon['TELEFONO'] ?>"><br>
                    <input type="submit" value="Modificar">
                </form>
<?php
            }
        } else {
            echo "Ha ocurrido un error";
        }
    } else {
        echo "Favor de introducir datos, todos los campos son obligatorios";
    }
?>
</body>
</html>
