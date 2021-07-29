<?php

include "conexion.php";

$categoria = $_GET["categoria"];
$nombre_receta = $_GET["nombre_receta"];
$imagen = $_GET["imagen"];
$ingredientes = $_GET["ingredientes"];
$preparacion = $_GET["preparacion"];
$valoracion = $_GET["valoracion"];
$dificultad = $_GET["dificultad"];
$destacada = $_GET["destacada"];
$mas_preparada = $_GET["mas_preparada"];

$sql = "UPDATE hellkitchen.recetas SET categoria='$categoria', nombre_receta='$nombre_receta', imagen='$imagen', ingredientes='$ingredientes', preparacion='$preparacion', valoracion='$valoracion', dificultad='$dificultad', destacada='$destacada', mas_preparada='$mas_preparada' WHERE nombre_receta='$nombre_receta'";

$conn->query($sql);

$conn->close();

?>
<?php
    include "conexion.php";
    header("location: menu.php");
    exit; 
?>