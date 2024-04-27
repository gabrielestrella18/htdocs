<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="estilo.css" rel="stylesheet">
  </head>
  <body>
  
<?php 

include  "arriba.php"
?>

<?php 
include "menu.php"
?>
<
<br><br>

<h5>BIENVENIDO!</h5>
<br><br><br>


      <Form  id="form2" name="form2" method="post" action="recibir.php" enctype="multipart/form-data">
      
        <br>
        <P class="descri">DESCRIPCION PROYECTO: </P>
        <br>
<div>
  <input type="text" name="descripcion" id="descripcion" required />
  <br><br>
</div>

<p>FOTO PROYECTO: <input type="file" name="imagen"/> </p>
<br>

<div>
<button type="submit" name="guardarfoto" id="guardarfoto">Guardar</button>

</div>

<br><br>

      </Form>
      </div>
      <br>
<div class="alinear" >
  <a href="proyectos.php" id="mostrar">VER CONTENIDO</a>
</div>

<br><br><br>
  

<?php 
include "abajo.php"
?>


  </body>
</html>