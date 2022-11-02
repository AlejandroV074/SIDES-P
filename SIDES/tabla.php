<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="logo-ucc (1).png" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tabla</title>
    <link rel="stylesheet" href="bootstrap.css">
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

                    <td>DOCUMENTO</td>
                    <td>NOMBRES</td>
                    <td>APELLIDOS</td>
                    <td>UNIVERSIDAD</td>
                    <td>CAMPUS</td>
                    <td>CORREO</td>

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