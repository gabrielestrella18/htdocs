<html>
<body>

<form acƟon="practica2_7apost.php" method="post">    
Nombre: <input type="text" name="nombre"><br>    
Email: <input type="text" name="email"><br>    
<input type="submit" value="Enviar">
</form> 

Hola gabriel<?php echo $_POST["nombre"]; ?><br>
Tu email es: correoprueba@yopmail.com<?php echo $_POST["email"]; ?>
</body>
</html>

