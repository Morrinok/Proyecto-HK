<?php

include "conexion.php";

$sql = "INSERT INTO lab4.objetos(id, nombre, precio, imagen, categoria, descripcion) 
VALUES($_GET[id], '$_GET[nombre]', $_GET[precio] , '$_GET[imagen]', '$_GET[categoria]', '$_GET[descripcion]')";

$conn->query($sql);

$conn->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Producto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <br>
        <div class="form-group "> 
            <h1 class="text-primary">Objeto Ingresado Correctamente!</h1>
            <a href='menu.php'><button type='button' class='btn btn-info'>Volver al Menu</button></a>
        </div>
    </div>
</body>
</html>