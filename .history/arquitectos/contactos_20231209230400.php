<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="estilo.css" rel="stylesheet">
  </head>
  <body>
  
<div class="azul">
  <img  class="lg"src="imagenes/arch.jpg" alt="">

  <h1>ARCHITECTURE</h1>
</div>

</div>

<div class="menu">
<div class="menuOpciones">
            <a href="index.php">Inicio</a>
            <a href="servicios.php">Servicios</a>
            <a href="proyectos.php">Proyectos Realizados</a>
            <a href="contactos.php">Contactanos</a>
            </div>

</div>

<br><br>
<div class="ser">
<h3 class="serv">CONTACTANOS</h3>
</div>
<br><br><br><br><br>





<!-- div class="logo ancho">
    <img src="imagenes/logo.png" alt="">
  </div>
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
    </form> -->


    <div class="form">
        <form  class="centro" action="contactos.php" method="post">
          <label for="" class="cuadrado">Nombre:</label>
          <input type="text" name="Nombre" class="campos" required><br><br>
          <label for="" class="cuadrado">Apellido:</label>
          <input type="text" name="Apellido" class="campos" required><br><br>
          <label for="" class="cuadrado">Subir foto:</label>
          <form action="guardarfotos.php" method="post" enctype="multipart/form-data">
          <input type="file" name="Foto" class="campos"><br><br>
          <label for="" class="cuadrado">Email:</label>
          <input type="email" name="Correo" class="campos" required><br><br>
          <label for="" class="cuadrado">Celular:</label>
          <input type="tel" name="Celular" class="campos" required><br>
          <br><label for="" class="cuadrado">Servicio:</label>
          <select name="Servicio" id="" class="campos" required><br>
            <option value="#" selected>Elige tu servicio</option>
            <option value="Planifica Hogar">Planifica Hogar</option>
            <option value="Construye Hogar">Construye Hogar</option>
            <option value="Remodela Hogar">Remodela Hogar</option>
           
          </select><br><br><br>
          <button type="submit" id="guardar" class="boton4">ENVIAR</button>
          <button type="reset" id="Eliminar" class="boton3">Borrar Datos</button><br><br><br>
        </form>
      </div>
      
            <!-- <button type="submit" class="btn_gris">Enviar</button>
            <button type="reset" class="btn_gris">Cancelar</button>
         -->


<div class="azul">
  <img  class="lg"src="imagenes/arch.jpg" alt="">

  <h1>ARCHITECTURE</h1>
</div>


  </body>
</html>