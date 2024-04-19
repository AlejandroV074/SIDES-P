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
    <div class="content">
      <h2 class="alerta_datos">
        Los Datos Se Guardaron Correctamente :)
      </h2>
      <center><a class="nuevo_envio" href="formulario.php">
        <button class="btn btn-primary">Enviar otra respuesta</button>
      </a></center>
    </div>

    <?php
      include("./footer.html");
    ?>
  </body>

</html>
