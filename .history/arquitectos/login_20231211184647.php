<?php
include "menu.php";
?>

<br>

<h4>ADMINISTRADOR</h4>

<br><br>
<div class="admi">
    <form action="autentificar.php" method="post">
        <div class="cont"><label class="ad">Usuario:</label></div><br>
        <input type="text" name="usuario" id="usu" class="campos" required ><br><br>
        <div class="cont"><label class="ad">Contraseña:</label></div><br>
        <input type="password" name="contrasena" id="contra" class="campos" required >
        <br><br>
        <button class="boton3" type="submit" id="Acceder" href="opciones.php">Acceder</button>
    </form>
</div>
<br>

<?php 
include "abajo.php";
?>

</body>
</html>
