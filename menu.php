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
        <a href='formulario.html'><button type='button' class='btn btn-info'>Nuevo</button></a>
    </div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>Id</th>
            <th>Nombre</th>
            <th>Accion</th>
            <td> 
        </thead>
        <tbody>
        <?php
        include "conexion.php";

        $sql = "SELECT id, nombre, precio, imagen, categoria, descripcion FROM  lab4.objetos";
        $result = $conn->query($sql);
        echo "<br>";
        
        if($result->num_rows > 0){

            $x = 0;
            while($row = $result->fetch_assoc()){
                
                echo "<tr>";
                    echo "<td>"; echo $x; echo "</td>";
                    echo "<td>"; echo $row['id']; echo "</td>";
                    echo "<td>"; echo $row['nombre']; echo "</td>";
                    echo "<td><a href='ver_p.php ?id=".$row['id']."'><button type='button' class='btn btn-primary' href='ver_p.php'>Ver</button></a>";
                    echo " <a href='eliminar_p.php ?id=".$row['id']."'><button type='button' class='btn btn-danger'>Eliminar</button></a>";
                    echo " <a href='modificar_p.php ?id=".$row['id']."'><button type='button' class='btn btn-info'>Editar</button></a></td>";
                    
                echo "</tr>"; 
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
