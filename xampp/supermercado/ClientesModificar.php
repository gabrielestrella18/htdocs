<!DOCTYPE html>
<head>
    <title>Modificar Clientes</title>
</head>
<body>
    <h2>Clientes</h2>
    <?php
        include("conectar.php");
        $consulta = "SELECT * FROM clientes";
        $resultado = mysqli_query($enlace, $consulta);
        if (!$resultado) {
            echo "Error en la consulta";
        }
    ?>
    <table>
        <thead>
            <tr>
                <td>Id</td>
                <td>Nombre del Cliente</td>
                <td>Dirección</td>
                <td>Teléfono</td>
            </tr>
        </thead>
        <tbody>
            <?php
                $id = 0;
                while ($renglon = $resultado->fetch_array(MYSQLI_ASSOC)) {
                    $id = $renglon['ID_CLIENTE'];
                    $nombre = $renglon['NOMBRE'];
                    $dir = $renglon['DIRECCION'];
                    $tel = $renglon['TELEFONO'];
            ?>
                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $nombre; ?></td>
                        <td><?php echo $dir; ?></td>
                        <td><?php echo $tel; ?></td>
                    </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    <form action="ClientesModificarBD.php" method="post">
        Escribe el ID del Cliente a modificar: <input type="text" name="Id"><br>
        <input type="submit" value="Modificar">
    </form>
    <br>
    <a href="ClientesAlta.php">Alta de Clientes</a><br>
    <a href="ClientesVer.php">Mostrar Clientes</a><br>
    <a href="ClientesEliminar.php">Eliminar Clientes</a><br>
</body>
</html>
