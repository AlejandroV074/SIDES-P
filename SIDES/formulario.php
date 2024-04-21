<!DOCTYPE html>
<html lang="es">

<head>
    <title>Inscripciones</title>
    <?php 
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
        <center><h1 class="pre">
            Inscríbete y participa
        </h1></center>

        <form action="guardar.php" method="POST">
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
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </form>
    </div>
    <?php 
        include("./footer.html");
    ?>
</body>
</html>
