<?php
  require "conexion.php";
  $todos_datos = "SELECT * FROM contactos order by id ASC";
  $resultado = mysqli_query($conectar, $todos_datos);
  ?>

  

      <br>
      <hr><br><br>
      <a href="index.php">Inicio</a>
      <?php
      if (isset($_SESSION['autentificado']) && $_SESSION['autentificado'] === "SI") {
        echo '<a href="formulario.php"></a>';
      }
      ?>
      <br><br>
      <div class="datos">
        <table>
          <tr> 
            <th>id</th>
            <th>NOMBRE</th>
            <th>NMATRICULA</th>
            <th>ERES REAPRTIDOR?</th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miercoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
            <th>Sabado</th>
            <th>HORARIO</th>
            <th>CARRERA</th>
            <th>SEMESTRE</th>
            
          </tr>
          <?php
          while ($fila = mysqli_fetch_assoc($resultado)) {
            ?>
            <tr>
              <td> 
                <?php echo $fila["id"] ?>
              </td>
              <td>
                <?php echo $fila["NOMBRE"] ?>
              </td>
              <td>
                <?php echo $fila["MATRICULA"] ?>
              </td>
              <td>
                <?php echo $fila["ERES REPETIDOR?"] ?>
              </td>
              <td>
                <?php echo $fila["Lunes"] ?>
              </td>
              <td>
                <?php echo $fila["Martes"] ?>
              </td>
              <td>
                <?php echo $fila["Miercoles"] ?>
              </td>
              <td>
                <?php echo $fila["Jueves"] ?>
              </td>
              <td>
                <?php echo $fila["Viernes"] ?>
              </td>
              <td>
                <?php echo $fila["Sabado"] ?>
              </td>
              <td>
                <?php echo $fila["CARRERA"] ?>
              </td>
              <td>
                <?php echo $fila["SEMESTRE"] ?>
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
      var eliminar = confirm("realmente desea eliminar");
      if (eliminar == true) {
        window.location = url;
      }
    }