<?php include "seguridad.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="estilo.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="presentacion">
    <div class="title"><h1>AGENDA TELEFONICA</h1></div>
    <div class="menuprincipal2">
      <br><p class="naranja">Nuevo Contacto</p>
      <br><hr><br><br>
      <a href="inicio.php">Inicio</a>
      <a href="datos.php">Ver datos</a>
      <br><br>
      <div class="form">
        <form action="contactos.php" method="post">
          <label for="" class="cuadrado">Nombre:</label>
          <input type="text" name="Nombre" class="campos" required><br>
          <label for="" class="cuadrado">Apellido:</label>
          <input type="text" name="Apellido" class="campos" required><br>
          <label for="" class="cuadrado">Subir foto:</label>
          <input type="text" name=" Foto" class="campos" required><br>

          <label for="" class="cuadrado">Email:</label>
          <input type="email" name="Correo" class="campos" required><br>
          <label for="" class="cuadrado">Celular:</label>
          <input type="tel" name="Celular" class="campos" required><br>
          <label for="" class="cuadrado">Compañia:</label>
          <input type="radio" name="Compañia" value="Telcel" required><label for="">Telcel</label>
          <input type="radio" name="Compañia" class="compañias" value="AT&T" required><label for="">AT&T</label>
          <input type="radio" name="Compañia" class="compañias" value="Movistar" required><label for="">Movistar</label><br>
          <br><label for="" class="cuadrado">Parentesco:</label>
          <select name="Parentesco" id="" class="campos" required>
            <option value="#" selected>Escoge una opcion</option>
            <option value="Escuela">Escuela</option>
            <option value="Familia">Familia</option>
            <option value="Amigo">Amigo</option>
            <option value="Conocido">Conocido</option>
          </select><br><br><br>
          <button type="submit" id="guardar" class="boton1">Guardar Contacto</button>
          <button type="reset" id="Eliminar" class="boton">Borrar Datos</button><br><br><br>
        </form>
      </div>
      <div class="final2"></div>
    </div>
  </div>
</body>
</html>