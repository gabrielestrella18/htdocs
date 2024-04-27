<!DOCTYPE html>
<html lang="en">
  <head>
    <title>examen04</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="estilo.css" rel="stylesheet">
  </head>
  <body>



 <?php 
 include "arriba.php"
 ?>

<?php 
include "menu.php"
?>

<br>

  <!-- <div class="preform anchito">
    <h4>REGISTRO PARA PRACTICAS EN EL CENTRO DE COMPUTO</h4>
    
  </div>
  <div class="cont_form anchito">
    <form action="enviar.php" name="contform" method="post">
      <br><br>
        <div>
          <p class="bloc">Nombre*:</p>
          <p class="blocSoli">Primer apellido *:</p>
          <p class="blocSoli">Segundo apellido:</p>
        </div>
        <br>
        <input type="text" placeholder="Nombre" class="campos" name="nombre">
        <input type="text" placeholder="Primer apellido" class="campos" name="primapellido">
        <input type="text" placeholder="Segundo apellido" class="campos">
        <br><br>
        <div>
          <p class="bloc1">Correo electronico*:</p>
          <p class="blocSoli1">Sexo:</p>
          <p class="blocSoli1">Fecha de nacimiento</p>
        </div>
        <br>
        <input type="email" name="correo" placeholder="Correo" class="campos">
        <select name="" id="" class="campos">
          <option value="">Seleccione</option>
          <option value="hombre">Hombre</option>
          <option value="mujer">Mujer</option>
          <option value="otro">Otro</option>
        </select>
        <input type="date" name="" class="campos">
        <br><br>
        <div>
          <p class="bloc2">Telefono fijo:</p>
          <p class="bloc">Celular:</p>
        </div>
        <br>
        <input type="tel" name="" placeholder="Telefono fijo" class="campos">
        <input type="tel" name="" placeholder="Celular" class="campos">
        <br><br>
        <p>Asunto*:</p>
        <textarea name="textos"></textarea>
        <br><br>
        <input type="button" value="Enviar" id="enviar" onclick="validar_enviar()">

      </div>
    </form>
</div>

<br><br><br> -->


<div class="form">
        <form action="contactos.php" method="post">
          <label for="" class="cuadrado">Nombre:</label>
          <input type="text" name="Nombre" class="campos" required><br>
          <label for="" class="cuadrado">Matricula</label>
          <input type="text" name="Matricula" class="campos" required><br>
          <br><br><br>
          <label for="" class="cuadrado">Subir foto:</label>
          <form action="guardarfotos.php" method="post" enctype="multipart/form-data">
          <input type="file" name="Foto" class="campos"><br>
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





<?php 
include "abajo.php"
?>





</body>
</html>