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

  <div class="preform anchito">
    <h1>Datos generales del alumno</h1>
    <hr>
    <hr class="hrgru">
    <br><br><br>
    <p>*Campos obligatorios</p>
  </div>
  <div class="cont_form anchito">
    <form action="enviar.php" name="contform" method="post">
      <div>
        <p>CURP:</p>
        <input type="text" name="" placeholder="CURP" class="campos">
        <a href="">Consultar CURP</a>
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

<br><br><br>


<?php 
include "abajo.php"
?>





</body>
</html>