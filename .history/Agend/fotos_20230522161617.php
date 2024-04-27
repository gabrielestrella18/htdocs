<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="estilo.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  require "conexion.php";
  $todos_datos = "SELECT * FROM contactos order by id ASC";
  $resultado = mysqli_query($conectar, $todos_datos);
  ?>

  <div class="presentacion">
    <div class="title">
      <h1>AGENDA TELEFONICA</h1>
    </div>
    <div class="menuprincipal"><br>
      <?php
      session_start(); // Iniciar la sesión
      
      if (isset($_SESSION['autentificado']) && $_SESSION['autentificado'] === "SI") {
        // El usuario ha iniciado sesión, mostrar el enlace true
        echo '<div class="cerrarsesion"><a href="salir.php"></a>CERRAR SESION</a></div>';
      }
      ?>
      <p class="naranja2">Nuevo Contacto</p>

      <br>
      <hr><br><br>
      <a href="inicio.php">Inicio</a>
      <?php
      if (isset($_SESSION['autentificado']) && $_SESSION['autentificado'] === "SI") {
        echo '<a href="altacontactos.php">Nuevo</a>';
      }
      ?>
      <br><br>
      <div class="datos">
        <table>
          <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Celular</th>
            <th>Compañia</th>
            <th>Parentesco</th>
            <th> </th>
          </tr>
          <?php
          while ($fila = mysqli_fetch_assoc($resultado)) {
            ?>
            <tr>
              <td>
                <?php echo $fila["id"] ?>
              </td>
              <td>
                <?php echo $fila["Nombre"] ?>
              </td>
              <td>
                <?php echo $fila["Apellido"] ?>
              </td>
              <td>
                <?php echo $fila["Correo"] ?>
              </td>
              <td>
                <?php echo $fila["Celular"] ?>
              </td>
              <td>
                <?php echo $fila["Compañia"] ?>
              </td>
              <td>
                <?php echo $fila["Parentesco"] ?>
              </td>
              <td><a href="#" onClick="validar('eliminar.php?id=<?php echo $fila["id"]; ?>')">Eliminar
                  <?php
          }
          ?>
        </table>
      </div>
    </div>
  </div><br><br><br><br><br><br><br><br><br>

  <script>
    function validar(url) {
      var eliminar = confirm("realmente desea eliminar este contacto");
      if (eliminar == true) {
        window.location = url;
      }
    }
  </script>
</body>
</html>