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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <!-- Barra de navegación -->
  <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Hell's Kitchen</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="index_remastered.php">Inicio</a></li>
          <!---
          <li><a href="#">Crear</a></li>
          <li><a href="#">Modificar</a></li>
          <li><a href="#">Eliminar</a></li>
        -->
        </ul>
      </div>
  </nav>
  <div class="container">
    <!-- Sección con las categorías -->
    <div class="row" style="background-color: yellow;">
      <h1 class="text-center"> Recetas </h1>
      <?php while($row = $result->fetch_assoc()){
      ?>
      <div class="col-sm-2">
        <div class="thumbnail text-center">
          <a href="ver_r.php  id="<?php $row['nombre_receta']?>">
            <img style="width: 160px; height: 90px;" src="<?php echo $row['imagen'] ?>" alt="<?php echo $row['nombre_receta'] ?>">
            <div class="caption"><?php echo $row['nombre_receta'] ?></div>
          </a>
        </div>
      </div>
      <?php } 
      
      ?>
    </div>
  </div>
  <!-- Sección de espacio blanco 2 -->
  <div style="height: 40px;"></div>
  <!-- Sección con los dos menú verticales -->
  <div class="container" >
    <div class="col-sm-6">
      <div class="panel-group">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title text-center">
              <a data-toggle="collapse" href="#collapse1" >Recetas más preparadas</a>
            </h4>
          </div>
          <div id="collapse1" class="panel-collapse collapse">
            <ul class="list-group">
              <?php
                $sql = "SELECT nombre_receta, imagen, preparacion FROM  hellkitchen.recetas WHERE 1";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();

                while($row = $result->fetch_assoc()){
              ?>
              <li class="list-group-item"><?php echo $row['nombre_receta']?></li>
              <?php }
              ?>
            </ul>
          </div>
        </div>
      </div> 
    </div>
    <div class="col-sm-6">
      <div class="panel-group">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title text-center">
              <a data-toggle="collapse" href="#collapse2">Recetas esta semana</a>
            </h4>
          </div>
          <div id="collapse2" class="panel-collapse collapse">
            <ul class="list-group">
              <?php
                $sql = "SELECT nombre_receta, imagen, preparacion FROM  hellkitchen.recetas WHERE 1";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();

                while($row = $result->fetch_assoc()){
              ?>
              <li class="list-group-item"><?php echo $row['nombre_receta']?></li>
              <?php }
              ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Sección de espacio blanco 2 -->
  <div style="height: 26px;"></div>
  <!-- Sección receta destacada -->
  <div class="container" style="background-color: #f4f4f4;">
    <div class="row" >
      <div class="col-md-6">
        <?php
            $sql = "SELECT nombre_receta, imagen, preparacion FROM  hellkitchen.recetas WHERE destacada = 1";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();             
        ?>
        <h3>La receta destacada de esta semana es el plato: </h3>
        <div class="well text-center">
          <h2 class="text-center"><?php echo $row['nombre_receta'] ?></h1>
          <img src="<?php echo $row['imagen'] ?>" class="img-thumbnail" alt="<?php echo $row['nombre_receta'] ?>">
          <p><?php echo $row['preparacion'] ?></p>
        </div>      
      </div>
    </div>
  </div>
  <!-- Sección de espacio blanco 2 -->
  <div style="height: 26px;"></div>
  <!-- Pie de página -->
  <div class="container-fluid text-center" style="background-color: #040404; padding: 10pt; height: 59px;">
    <div class="col-md-6">
      <p style="color:#d4d4d4; font-size: 14pt; ">&copy; 2021 Hell's Kitchen. All rights reserved. Design by Grupo Hell's Kitchen</p>
    </div>
    <div class="col-md-3">
      <p> </p>
    </div>
    <div class="col-md-1">
      <a href="#"><i class="fa fa-facebook" style="color:#d4d4d4; font-size: 13pt;"></i></a>
    </div>
    <div class="col-md-1">
      <a href="#"><i class="fa fa-twitter" style="color:#d4d4d4; font-size: 13pt;"></i></a>
    </div>
    <div class="col-md-1">
      <a href="#"><i class="fa fa-youtube" style="color:#d4d4d4; font-size: 13pt;"></i></a>
    </div>
  </div>
</body>
</html>

<?php 
        }
        ?>