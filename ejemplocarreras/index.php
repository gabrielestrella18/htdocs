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

  <br><br>
  <div class="contenedor">
    <p>
      Accede al sistema ó <a href="registrar.php">Registrate</a>
    </p>
    <br>
    <form action="autentificar.php" method="post">
      <br>

      <input type="text" placeholder="Usuario" name="usuario">
      <br><br>
      <input type="password" placeholder="Contraseña" name="contrasena">

      <div class="contenedor_botones">
        <button type="submit" name="" class="btn_rojo">Login</button>
        <br>
      </div>
      <br>
    </form>
  </div>
  <br>

  <br><br><br>
</body>

</html>