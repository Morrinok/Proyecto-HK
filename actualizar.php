<?php

include "conexion.php";

$id = $_GET["id"];
$nombre = $_GET["nombre"];
$precio = $_GET["precio"];
$imagen = $_GET["imagen"];
$categoria = $_GET["categoria"];
$descripcion = $_GET["descripcion"];

$sql = "UPDATE lab4.objetos SET nombre='$nombre', precio='$precio', imagen='$imagen', categoria='$categoria', descripcion='$descripcion' WHERE id='$id'";

$conn->query($sql);

$conn->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actuailzar Producto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <br>
        <div class="form-group "> 
            <h1 class="text-primary">Objeto Actualizado Correctamente!</h1>
            <a href='menu.php'><button type='button' class='btn btn-info'>Volver al Menu</button></a>
        </div>
    </div>
</body>
</html>