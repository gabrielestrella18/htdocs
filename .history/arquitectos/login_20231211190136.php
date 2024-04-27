
  <?php include "menu.php"; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <!-- Agrega aquí tus enlaces a hojas de estilo, si es necesario -->
</head>
<body>

<h4>ADMINISTRADOR</h4>

<div class="admi">
    <form action="autentificar.php" method="post">
        <div class="cont"><label class="ad">Usuario:</label></div>
        <input type="text" name="usuario" id="usu" class="campos" required><br><br>
        <div class="cont"><label class="ad">Contraseña:</label></div>
        <input type="password" name="contrasena" id="contra" class="campos" required><br><br>
        <button class="boton3" type="submit">Acceder</button>
    </form>
</div>

<?php include "abajo.php"; ?>

</body>
</html>
