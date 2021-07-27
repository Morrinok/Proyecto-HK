<?php
    include "conexion.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM  lab4.objetos WHERE id =" . $id;
    $result = $conn->query($sql);
    echo "<br>";
    $row = $result->fetch_assoc();

    $conn->close();    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Producto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
        <br>
        <h2>Modificar Producto</h2>
        <form action="actualizar.php" method="GET">
          <div class="form-group">
            <label>Id:</label>
            <input type="text" class="form-control" name="id" value="<?php echo $row['id'];?>" readonly>
          </div>
          <div class="form-group">
            <label>Nombre:</label>
            <input type="text" class="form-control" name="nombre" value="<?php echo $row['nombre'];?>">
          </div>
          <div class="form-group">
            <label>Precio:</label>
            <input type="text" class="form-control" name="precio" value="<?php echo $row['precio'];?>">
          </div>
          <div class="form-group">
            <label>Imagen:</label>
            <input type="text" class="form-control" name="imagen" value="<?php echo $row['imagen'];?>">
          </div>
          <div class="form-group">
            <label>Categoria:</label>
            <input type="text" class="form-control" name="categoria" value="<?php echo $row['categoria'];?>">
          </div>
          <div class="form-group">
            <label>Descripcion:</label>
            <input type="text" class="form-control" name="descripcion" value="<?php echo $row['descripcion'];?>">
          </div>
          <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
        <br>
          <a href='menu.php'><button type='button' class='btn btn-info'>Volver al Menu</button></a>
        
    </div>
    
</body>
</html>