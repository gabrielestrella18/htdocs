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



<div class="ancho">

  </div>
  <div class="ancho fondo2">
    <h4>REGISTRO PARA PRACTICAS EN EL CENTRO DE COMPUTO</h4>
  </div>
  <br><br>
  <div class="ancho">
    <form class="formulario" action="guardar.php" method="POST">
    <label class="nombre1" for="">NOMBRE:</label>
    <input class="elemento1" type="text" name="nombre" placeholder="">
    <br><br>
    <label class="matricula" for="">MATRICULA:</label>
    <input class="elemento1" type="text " name="matricula" placeholder="">
    <br><br>
    <label class="repetidor" for="">ERES REPETIDOR?:&nbsp;</label>
    <input type="checkbox" name="repetidor" value="si"><label for="">si</label>
    <input type="checkbox" name="repetidor" value="no"><label for="">no</label>
   
    
    <br><br>
    <label for="">DIA DE PRACTICAS QUE PREFIERES</label>
<input type="checkbox" name="dia_practicas" value="lunes">Lunes
<input type="checkbox" name="dia_practicas" value="martes">Martes
<input type="checkbox" name="dia_practicas" value="miercoles">Miércoles
<input type="checkbox" name="dia_practicas" value="jueves">Jueves
<input type="checkbox" name="dia_practicas" value="viernes">Viernes
<input type="checkbox" name="dia_practicas" value="sabado">Sábado

    
      <br><br>
      <label class="horario" for="">HORARIO:&nbsp;</label>
    <input type="checkbox" name="horario" value="si"><label for="">MATUTINO </label>
    <input type="checkbox" name="horario" value="no"><label for="">VESPERTINO</label>
    <br><br>

    
          <br><br>
          <label class="carrera" for="">CARRERA </label>
          <select class="" name="carrera">
          <option value="">Escoge tu carrera</option>
          <option value="sistemas">Sistemas</option>
          <option value="admin">Admin</option>
          <option value="otro">otro</option>
          </select>
          <br><br>
          <label class="semestre" for="">SEMESTRE: </label>
          <select class="" name="semestre">
          <option value="">Escoge tu semestre</option>
          <option value="primero">primero</option>
          <option value="segundo">Segundo</option>
          <option value="tercero">tercero</option>
          </select>
          <br><br>
          </select>
          <button type="submit" class="btn_enviar">guardar</button>
          <br><br>
    </form>
  </div>



<?php 
include "abajo.php"
?>





</body>
</html>