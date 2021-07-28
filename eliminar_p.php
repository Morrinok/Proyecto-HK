<?php
     include "conexion.php";
     $id = $_GET['id'];
     $sql = "DELETE FROM hellkitchen.recetas WHERE nombre_receta = '$id'";
     if($conn->query($sql) === TRUE){

    }else{
        echo "Error: ". $sql . "<br>" . $conn->error;
    }
    
    $conn->close();    
?>
<?php
    include "conexion.php";
    header("location: menu.php");
    exit; 
?>
