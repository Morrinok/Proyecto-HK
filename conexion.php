<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    //Creamos la conexion
    $conn = new mysqli($servername, $username, $password);


    //cerificamos la conexion
    if($conn->connect_error){
        die("Conexion fallida: ". $conn->connect_error);
    }
?>

<!-- Comentario de sebastian -->