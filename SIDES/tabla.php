<!DOCTYPE html>
<html lang="en">

<head>
    <title>tabla</title>
    <?php
        include("./meta-tags.html");
        include("./meta-links.html");
    ?>
</head>

<body>
    <br>
    <h1>
        <center>LISTADO DE PARTICIPANTES</center>
    </h1>
    <?php
        
          include("conexion.php");
          $query="SELECT * FROM participantes";
          $resultado= $conexion->query($query);
    ?>
    <i><center>Total inscritos: <?php echo count($resultado->fetch_assoc()); ?></center></i>
    <div class="container" style="overflow-x: visible;">
        <table class="table table-striped table-dark table-hover">
            <thead class="thead-dark">



                <tr>

                    <td class="text-light">DOCUMENTO</td>
                    <td class="text-light">NOMBRES</td>
                    <td class="text-light">APELLIDOS</td>
                    <td class="text-light">UNIVERSIDAD</td>
                    <td class="text-light">CAMPUS</td>
                    <td class="text-light">CORREO</td>

                </tr>
            </thead>
            <tbody>
      <?php  
          while($row=$resultado->fetch_assoc()){
      ?>
                <tr>
                    <td class="text-light">
                        <?php echo $row['DOCUMENTO']; ?>
                    </td>
                    <td class="text-light">
                        <?php echo $row['NOMBRES']; ?>
                    </td>
                    <td class="text-light">
                        <?php echo $row['APELLIDOS']; ?>
                    </td>
                    <td class="text-light">
                        <?php echo $row['UNIVERSIDAD']; ?>
                    </td>
                    <td class="text-light">
                        <?php echo $row['CAMPUS']; ?>
                    </td>
                    <td class="text-light">
                        <?php echo $row['CORREO']; ?>
                    </td>
                </tr>
        <?php
          }
        ?>
            </tbody>
    </div>
</body>

</html>
