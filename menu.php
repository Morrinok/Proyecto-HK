<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <br>
    <div class="container">
        <a href='index_remastered.php'><button type='button' class='btn btn-primary'>Pagina Hell's Kitchen</button></a>
        <a href='nueva_r.html'><button type='button' class='btn btn-info'>Nuevo</button></a>
    </div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>Categoria</th>
            <th>Nombre de la Receta</th>
            <th>Accion</th>
            <td> 
        </thead>
        <tbody>
        <?php
        include "conexion.php";
        
        $sql = "SELECT * FROM  hellkitchen.recetas";
        $result = $conn->query($sql);
        
        if($result->num_rows > 0){

            $x = 0;
            while($row = $result->fetch_assoc()){
        ?>    
        <tr>
            <td><?php echo $x ?></td>
            <td><?php echo $row['categoria'] ?></td>
            <td><?php echo $row['nombre_receta'] ?></td>
            <td>
                <a href="eliminar_r.php?id=<?php echo $row['nombre_receta']?>"><button type='button' class='btn btn-danger'>Eliminar</button></a>
                <a href="modificar_r.php?id=<?php echo $row['nombre_receta']?>"><button type='button' class='btn btn-info'>Editar</button></a>
            </td>
        </tr>
        <?php    
                $x+=1;
            } 

        }else{
            echo "No existen registros en la base de datos";
        }

        ?>
        </tbody>
    </table>
</div>
    
</body>
</html>
