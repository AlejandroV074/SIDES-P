<!DOCTYPE html>
<html lang="es">

<head>
    <title>Inscripciones</title>
    <meta name="description" content="Registrate para ser parte del evento SIDES de la facultad de ingeniería de la Universidad Cooperativa de Colombia"/>
    <?php 
        header("location: index.php");
        include("./meta-tags.html");
    ?>
    <?php 
        include("./meta-links.html");
    ?>
</head>

<body>
    <?php
        include("./navbar.html");
    ?>

<div class="content">
    <center>
        <?php
            error_reporting(E_ERROR | E_PARSE);
            if(isset($_POST['submit'])){
                try {
                    include("conexion.php");

                    $documento = $_POST['documento'];
                    $nombres = $_POST['nombres'];
                    $apellidos = $_POST['apellidos'];
                    $universidad = $_POST['universidad'];
                    $campus = $_POST['campus'];
                    $correo = $_POST['correo'];
            
                    $query="INSERT INTO participantes(DOCUMENTO, NOMBRES, APELLIDOS, UNIVERSIDAD, CAMPUS, CORREO) VALUES ($documento,'$nombres','$apellidos','$universidad', '$campus', '$correo')";
                    $resultado= $conexion->query($query);
                    ?>

                    <div class="card text-white text-center bg-success mb-3 mx-3" style="max-width: 30rem;">
                        <div class="card-header">La Universidad Cooperativa de Colombia te informa:</div>
                        <div class="card-body">
                            <h5 class="card-title">Registro Exitoso</h5>
                            <p class="card-text">Tus datos han sido guardados correctamente en nuestra base de datos.</p>
                        </div>
                    </div>

                    <?php
                    $conexion->close();
                } catch (Exception $e) {
                    ?>
                    <div class="card text-white text-center bg-danger mb-3 mx-3" style="max-width: 30rem;">
                        <i class="card-header">La Universidad Cooperativa de Colombia te informa:</i>
                        <div class="card-body">
                            <h5 class="card-title">Tu registro no pudo ser completado</h5>
                            <p class="card-text">Revisa bien los campos que ingresaste. Recuerda que solo se puede realizar un registro por persona</p>
                        </div>
                    </div>
                    <?php
                }
            }
        ?>
    </center>
        <center><h1 class="pre">
            Inscríbete y participa
        </h1></center>

        <form action="formulario.php" method="POST">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <label for="">Número de documento de identidad</label>
                        <input type="number" required name="documento" class="form-control" placeholder="Eje: 305836459">
                        <br>
                    </div>
                    <div class="col-12">
                        <label for="">Nombres</label>
                        <input type="text" required name="nombres" class="form-control" placeholder="Eje: Maria Camila">
                        <br>
                    </div>
                    <div class="col-12">
                        <label for="">Apellidos</label>
                        <input type="text" required name="apellidos" class="form-control" placeholder="Eje: Conde Rincon">
                        <br>
                    </div>
                    <div class="col-12">
                        <label for="">Universidad / Empresa</label>
                        <input type="text" required name="universidad" class="form-control"
                            placeholder="Eje: Universidad Cooperativa de Colombia">
                        <br>
                    </div>
                    <div class="col-12">
                        <label for="">Ciudad</label>
                        <input type="text" required name="campus" class="form-control" placeholder="Eje: Medellín">
                        <br>
                    </div>
                    <div class="col-12">
                        <label for="">Correo electrónico</label>
                        <input type="email" required name="correo" class="form-control"
                            placeholder="Eje: user001@campusucc.edu.co">
                        <br>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </form>
    </div>
    <?php 
        include("./footer.html");
    ?>
</body>
</html>
