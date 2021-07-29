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

  <!-- Favicons
    ================================================== -->
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!-- Stylesheet
      ================================================== -->
  <link rel="stylesheet" type="text/css"  href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Rochester" rel="stylesheet">
</head>
<body>
  <!-- Barra de navegación -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Hell's Kitchen</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="index_remastered.php">Inicio</a></li>
          <li><a href="menu.php">CRUD</a></li>
        <!---
          <li><a href="#">Modificar</a></li>
          <li><a href="#">Eliminar</a></li>
          comentario xd
        -->
        </ul>
      </div>
  </nav>
  <br>
  <div class="container">
    <!-- Sección con las categorías -->
    <div style="height: 80px;"></div>
    <div class="row" style="border-radius: 5px; background: rgb(228,178,97);
background: radial-gradient(circle, rgba(228,178,97,1) 20%, rgba(237,229,97,1) 75%, rgba(227,220,99,1) 100%);">
      <h1 class="text-center" style="color:white;"> Recetas </h1>
      <?php while($row = $result->fetch_assoc()){
      ?>
      <div class="col-sm-2">
        <div class="thumbnail text-center" style="background: white; box-shadow: 1px 1px 20px -5px rgba(0, 0, 0, 0.5);
">
          <a href="ver_r_2.php?id=<?php echo $row['nombre_receta']?>">
            <img style="width: 160px; height: 90px;display: flex; margin: auto; justify-content: space-around; object-fit: cover;" class="img-responsive" src="<?php echo $row['imagen'] ?>" alt="<?php echo $row['nombre_receta'] ?>">
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
              <a data-toggle="collapse" href="#collapse1" >Recetas mejor puntuadas</a>
            </h4>
          </div>
          <div id="collapse1" class="panel-collapse collapse">
            <ul class="list-group">
              <?php
                $sql = "SELECT nombre_receta FROM  hellkitchen.recetas WHERE valoracion = 5";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()){
              ?>
              <a href="ver_r_2.php?id=<?php echo $row['nombre_receta']?>">
              <li class="list-group-item"><?php echo $row['nombre_receta']?></li> <!-- Aquí van los items de recetas mejor puntuadas -->
              <?php }
              ?>
              </a>
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
              <a data-toggle="collapse" href="#collapse2">Recetas más difíciles</a>
            </h4>
          </div>
          <div id="collapse2" class="panel-collapse collapse">
            <ul class="list-group">
              <?php
                $sql = "SELECT nombre_receta FROM  hellkitchen.recetas WHERE dificultad = 'difícil'";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()){
              ?>
              <a href="ver_r_2.php?id=<?php echo $row['nombre_receta']?>">
              <li class="list-group-item"><?php echo $row['nombre_receta']?></li> <!-- Aquí van las recetas más difíciles -->
              <?php }
              ?>
              </a>
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
      <div class="col-md-12">
        <?php
            $sql = "SELECT nombre_receta, imagen, preparacion FROM  hellkitchen.recetas WHERE destacada = 1";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();             
        ?>
        <h3>La receta destacada de esta semana es el plato: </h3>
        <div class="well text-center"> 
        <a href="ver_r_2.php?id=<?php echo $row['nombre_receta']?>">
          <h2 class="text-center"><?php echo $row['nombre_receta'] ?></h1>
          <img src="<?php echo $row['imagen'] ?>" class="img-thumbnail" alt="<?php echo $row['nombre_receta'] ?>">
        </div>      
      </div>
    </div>
  </div>
  <!-- Sección de espacio blanco 2 -->
  <div style="height: 26px;"></div>
  <!-- Pie de página -->
  <div id="footer">
    <div class="container text-center">
      <div class="col-md-6">
        <p>&copy; 2021 Hell's Kitchen. All rights reserved. Design by Grupo Hell's Kitchen</p>
      </div>
      <div class="col-md-6">
        <div class="social">
          <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
  <script type="text/javascript" src="js/bootstrap.js"></script> 
  <script type="text/javascript" src="js/SmoothScroll.js"></script> 
  <script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
  <script type="text/javascript" src="js/contact_me.js"></script> 
  <script type="text/javascript" src="js/main.js"></script>
  <!--
  <div class="container-fluid text-center" style="background-color: #040404; padding: 10pt; ">
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
                -->
</body>
</html>

<?php 
        }
        ?>