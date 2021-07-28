<?php
     include "conexion.php";
     $id = $_GET['id'];
     $sql = "DELETE FROM lab4.objetos WHERE id =" . $id;
     if($conn->query($sql) === TRUE){

    }else{
        echo "Error: ". $sql . "<br>" . $conn->error;
    }
    
    $conn->close();    
?>
