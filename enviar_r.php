<?php

include "conexion.php";

$sql = "INSERT INTO hellkitchen.recetas(categoria, nombre_receta, imagen, ingredientes, preparacion, valoracion, dificultad, destacada, mas_preparada) 
VALUES('$_GET[categoria]', '$_GET[nombre_receta]', '$_GET[imagen]' , '$_GET[ingredientes]', '$_GET[preparacion]', $_GET[valoracion], '$_GET[dificultad]', $_GET[destacada], $_GET[mas_preparada])";

$conn->query($sql);

$conn->close();

?>
<?php
    include "conexion.php";
    header("location: menu.php");
    exit; 
?>