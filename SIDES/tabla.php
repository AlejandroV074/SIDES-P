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

    <div class="container">
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
          include("conexion.php");
          $query="SELECT * FROM participantes";
          $resultado= $conexion->query($query);
          while($row=$resultado->fetch_assoc()){
?>
                <tr>
                    <td>
                        <?php echo $row['DOCUMENTO']; ?>
                    </td>
                    <td>
                        <?php echo $row['NOMBRES']; ?>
                    </td>
                    <td>
                        <?php echo $row['APELLIDOS']; ?>
                    </td>
                    <td>
                        <?php echo $row['UNIVERSIDAD']; ?>
                    </td>
                    <td>
                        <?php echo $row['CAMPUS']; ?>
                    </td>
                    <td>
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