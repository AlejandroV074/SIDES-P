<!DOCTYPE html>
<html lang="es">

<head>
  <title>Inscripción exitosa</title>
  <?php 
    include("./meta-tags.html");
    include("./meta-links.html");
  ?>
</head>

<body>
  <?php
    include("./navbar.html");
  ?>

  <body>
    <h1 class="alerta_datos">
      <p>Los Datos Se Guardaron Correctamente :)</p>
      <a class="nuevo_envio" href="formulario.php">
        <button class="btn btn-primary">Enviar
          otra respuesta</button></a>
    </h1>


    <?php
      include("./footer.html");
    ?>
  </body>

</html>
