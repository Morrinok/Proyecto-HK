<?php
    include "conexion.php";
    $id = $_GET['id'];
    $sql = "SELECT id, nombre, precio, imagen, categoria, descripcion FROM  lab4.objetos WHERE id =" . $id;
    $result = $conn->query($sql);
    echo "<br>";
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
    }else{
        echo "0 registros";
    }
    $conn->close();    
    $im = $row['imagen'];            
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
<div class="container" style="align-items: center;">
  <h2>ID: <?php echo $row['id'];?></h2>
  <div class="card" style="width:400px;">
    <img class="card-img-top" src="<?php echo $im ?>" alt="Card image" style="width:100%">
    <div class="card-body">
        <h5>Producto: <small><?php echo $row['nombre'];?></small></h5>
        <h5>Precio: $<small><?php echo $row['precio'];?></small></h5>
        <h5>Categoria: <small><?php echo $row['categoria'];?></small></h5>
        <h5>Descripción: <small><?php echo $row['descripcion'];?></small></h5>
    </div>
  </div>
  
  <a href='menu.php'><button type='button' class='btn btn-info'>Volver al Menu</button></a>
</div>
</body>
</html>
 
