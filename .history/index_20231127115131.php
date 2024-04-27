<!DOCTYPE html>
<html lang="en">
  <head>
    <title>doc</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="estilo.CSS" rel="stylesheet">
  </head>
  <body>
  <h1>DUBIR PROMOCIONES DEL MES</h1>
<div class="caja">
  <div>
    <h2>Formulario para la Alta de Promociones:</h2>
    <br><br>
    <div class="form">
      <Form id="form1" name="form1" method="post" action="recibir.php" enctype="multipart/form-data">
        <h2>FORMULARIO DE ALTA DE PROMOCIONES</h2>
        <br>
        <P>Titulo del prodructo: </P>
<div>
  <input type="text" name="descripcion" id="descripcion" required />
  <br><br>
</div>

<p>Subir producto: <input type="file" name="imagen"/> </p>
<br>

<div>
<button type="submit" name="guardarfoto" id="guardarfoto">Guardar Foto</button>

</div>
<br><br>

      </Form>
      <br><br><br>
<div class="alinear" >
  <a href="mostrar.php" id="mostrar">MOSTRAR FOTOS >></a>
</div>


    </div>
  </div>
  
</div>



  </body>
</html>