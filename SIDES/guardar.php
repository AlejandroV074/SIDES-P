<?php
    include("conexion.php");

    $documento = $_POST['documento'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $universidad = $_POST['universidad'];
    $campus = $_POST['campus'];
    $correo = $_POST['correo'];

    $query="INSERT INTO participantes(DOCUMENTO, NOMBRES, APELLIDOS, UNIVERSIDAD, CAMPUS, CORREO) VALUES ($documento,'$nombres','$apellidos','$universidad', '$campus', '$correo')";
    $resultado= $conexion->query($query);
    if($resultado){
        header("location: mensaje.html");
    }
    else{
        echo "Algo Salio Mal :(";
    }

?> 

