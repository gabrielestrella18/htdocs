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
    <h2>INSTITUTO TECNOLOGICO DE MERIDA</font>
    </h2>
    <img src="imagenes/logo.png" width="200px">
  </div>
  <br>
  <h1 class="centrar">
    REGISTRAR USUARIOS
  </h1>
  <br>
  <div class="contenedor">
    <p>
      Escribe los datos para tu Registro
    </p>
    <br>
    <form action="insertarusuarios.php" method="post">
      <br>
      <label for="">
        Escribe tu nombre completo:
      </label>
      <input type="text" placeholder="Nombre Completo" name="nombrecompleto">
      <br><br>
      <label for="">
        Escribe tu correo:
      </label>
      <input type="email" placeholder="Correo Electrónico" name="email">
      <br><br>
      <label for="">
        Escribe tu nombre usuario:
      </label>
      <input type="text" placeholder="Usuario" name="usuario">
      <br><br>
      <label for="">Escribe tu contraseña</label>
      <input type="text" placeholder="Contraseña" name="contrasena">

      <div class="contenedor_botones">
        <button type="submit" name="" class="btn_rojo">Registrar Usuario</button>
        <br>
      </div>
      <br>
    </form>
  </div>
  <br>
  <div class="ancho centrar">
    <a href="index.php" class="btn_dorado">
      << Regresar</a>

  </div>


  <br><br><br>
</body>

</html>