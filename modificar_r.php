<?php
    include "conexion.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM  hellkitchen.recetas WHERE nombre_receta = '$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar <?php echo $row['nombre_receta']?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
        <br>
        <h2>Modificar Receta: <?php echo $row['nombre_receta']?></h2>
        <form action="actualizar.php" method="GET">
          <div class="form-group">
            <label>Categoria:</label>
            <input type="text" class="form-control" name="categoria" value="<?php echo $row['categoria'];?>" readonly>
          </div>
          <div class="form-group">
            <label>Nombre de la Receta:</label>
            <input type="text" class="form-control" name="nombre_receta" value="<?php echo $row['nombre_receta'];?>" readonly>
          </div>
          <div class="form-group">
            <label>Imagen:</label>
            <input type="text" class="form-control" name="imagen" value="<?php echo $row['imagen'];?>">
          </div>
          <div class="form-group">
            <label>Ingredientes: [Salto de linea = &#60;br&#62;]</label>
            <input type="text" class="form-control" name="ingredientes" value="<?php echo $row['ingredientes'];?>">
          </div>
          <div class="form-group">
            <label>Preparacion: [Salto de linea = &#60;br&#62;]</label>
            <input type="text" class="form-control" name="preparacion" value="<?php echo $row['preparacion'];?>">
          </div>
          <div class="form-group">
            <label>Valoracion:</label>
            <input type="text" class="form-control" name="valoracion" value="<?php echo $row['valoracion'];?>">
          </div>
          <div class="form-group">
            <label>Dificultad: [Fácil, Normal, Difícil]</label>
            <input type="text" class="form-control" name="dificultad" value="<?php echo $row['dificultad'];?>">
          </div>
          <div class="form-group">
            <label>Destacada: [Si = 1 , No = 0]</label>
            <input type="text" class="form-control" name="destacada" value="<?php echo $row['destacada'];?>">
          </div>
          <div class="form-group">
            <label>Mas Preparada: [Si = 1 , No = 0]</label>
            <input type="text" class="form-control" name="mas_preparada" value="<?php echo $row['mas_preparada'];?>">
          </div>
          <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
        <br>
          <a href='menu.php'><button type='button' class='btn btn-info'>Volver al Menu</button></a>
        
    </div>
    
</body>
</html>