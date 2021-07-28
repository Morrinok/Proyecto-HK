<?php
        include "conexion.php";

        $sql = "SELECT * FROM  hellkitchen.recetas";
        $result = $conn->query($sql);
        
        if($result->num_rows > 0){
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hell's Kitchen</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <!-- Barra de navegación -->
  <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Hell's Kitchen</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Inicio</a></li>
          <li><a href="#">Crear</a></li>
          <li><a href="#">Modificar</a></li>
          <li><a href="#">Eliminar</a></li>
        </ul>
      </div>
  </nav>
  <div class="container">
    <!-- Sección con las categorías -->
    <div class="row">
      <h1 class="text-center"> Recetas </h1>
      <?php while($row = $result->fetch_assoc()){
      ?>
      <div class="col-sm-2">
        <div class="thumbnail text-center">
          <a href="ver_r.php  id="<?php $row['nombre_receta']?>">
            <img class="img-responsive" src="<?php echo $row['imagen'] ?>" alt="<?php echo $row['nombre_receta'] ?>">
            <div class="caption"><?php echo $row['nombre_receta'] ?></div>
          </a>
        </div>
      </div>
      <?php } 
      
      ?>
    </div>
  </div>

</body>
</html>

<?php 
        }
        ?>