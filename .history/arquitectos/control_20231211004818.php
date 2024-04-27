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
<div class="ancho">
      <Form  id="form1" name="form1" method="post" action="recibir.php" enctype="multipart/form-data">
      
        <br>
        <P>DESCRIPCION PROYECTO: </P>
<div>
  <input type="text" name="descripcion" id="descripcion" required />
  <br><br>
</div>

<p>FOTO PROYECTO: <input type="file" name="imagen"/> </p>
<br>

<div>
<button type="submit" name="guardato" id="guardato">Guardadjjdjfjr</button>

</div>

<br><br>

      </Form>
      </div>
      <br>
<div class="alinear" >
  <a href="mostrar-solo-datos.php" id="mostrar">MOSTRAR FOTOS</a>
</div>


    </div>


<?php 
include "abajo.php"
?>


  </body>
</html>