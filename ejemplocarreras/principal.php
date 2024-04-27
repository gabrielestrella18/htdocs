<?php
include "seguridad.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="estilo.css">
  <style type="text/css">

  </style>
</head>

<body>
  <div class="arriba">
    <h2>INSTITUTO TECNOLOGICO DE MERIDA </h2>
    <img src="imagenes/logo.png" width="200px">
    <br>
    <a href="salir.php" class="cerrar">SALIR [X]</a>
  </div>

  <br>
  <div class="contenedor">
    <p>
      Llene el siguiente formulario con los datos para el pre-registro de la materia de verano
    </p>
    <br>
    <form action="insertar.php" method="post">
      <br>
      <label for="">Carreras:</label>

      <select name="carreras" id="carreras">
        <option value="">Escoge tu carrera</option>
        <option value="sistemas">Ing. Sistemas</option>
        <option value="civil">Ing. Civil</option>
        <option value="industrial">Ing. Industrial</option>
        <option value="electrica">Ing. Electrica</option>
        <option value="bioquimica">Ing. Bioquimica</option>
        <option value="mecanica">Ing. Mecanica</option>
        <option value="electronica">Ing. Electronica</option>
        <option value="ambiental">Ing. Ambiental</option>
      </select>
      </label>
      <br><br>
      <label for="">Ingreso:</label>
      <select name="ingreso" size="1" id="carreras">
        <option value="">Cual es tu ingreso</option>
        <option value="Primer Ingreso">1° Ingreso</option>
        <option value="Segundo Ingreso">2do° Ingreso</option>
        <option value="Tercero Ingreso">3er Ingreso</option>
        <option value="Cuarto Ingreso">4° Ingreso</option>
        <option value="Quinto Ingreso">5° Ingreso</option>
        <option value="Sexto Ingreso">6° Ingreso</option>
        <option value="Séptimo Ingreso">7° Ingreso</option>
        <option value="Octavo Ingreso">8° Ingreso</option>
        <option value="Noveno Ingreso">9° Ingreso</option>
        <option value="Décimo Ingreso">10° Ingreso</option>
        <option value="Onceavo Ingreso">11° Ingreso</option>
        <option value="Doceavo Ingreso">12° Ingreso</option>
        <option value="Treceavo Ingreso">13° Ingreso</option>
      </select>
      <br><br>
      <label for="">Materia:</label>
      <input name=" materias" type="text" maxlength="100" placeholder="Materia de verano" maxlength="70">
      <br><br>

      <div class="contenedor_botones">
        <button type="submit" name="" class="btn_rojo">Guardar</button>
        <button type="reset" name="" class="btn_rojo">Borrar</button>
        <br>
      </div>
      <br>
    </form>
  </div>
  <br>
  <div class="ancho centrar">
    <a href="ver.php" class="btn_dorado">Ver Solo Datos >> </a>
    <a href="versolodatos.php" class="btn_dorado">Ver Tabla >> </a>
  </div>
  <br><br><br>
</body>

</html>