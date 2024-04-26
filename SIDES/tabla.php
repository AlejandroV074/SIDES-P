<!DOCTYPE html>
<html lang="en">

<head>
    <title>tabla</title>
    <?php
        include("./meta-tags.html");
        include("./meta-links.html");
    ?>
</head>

<body style="overflow-x: visible;">
    <br>
    <h1>
        <center>LISTADO DE PARTICIPANTES</center>
    </h1>
    <?php
        
          include("conexion.php");
          $query="SELECT * FROM participantes";
          if(isset($_GET['submit'])){
            $query .= ' WHERE LOWER('.$_GET["column"].') LIKE LOWER("%'.$_GET["value"].'%")';
          }
          $resultado= $conexion->query($query);
    ?>
    <i><center>Total inscritos: <?php echo $resultado->num_rows; ?></center></i>
    <form action="tabla.php" method="GET" class="d-flex flex-row justify-content-center align-items-center mb-2" style="gap: 5px;">
        <select name="column" class="form-control w-auto">
            <option value="UNIVERSIDAD">Universidad</option>
            <option value="NOMBRES">Nombres</option>
            <option value="APELLIDOS">Apellidos</option>
            <option value="CORREO">Correo</option>
        </select>
        <input type="search" class="form-control w-25" name="value" placeholder="Coincidencias a Buscar">
        <button type="submit" name="submit" class="btn btn-primary">Buscar</button>
    </form>
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
