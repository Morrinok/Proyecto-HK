<?php
        include "conexion.php";

        $sql = "SELECT * FROM  hellkitchen.recetas";
        $result = $conn->query($sql);
        
        if($result->num_rows > 0){
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Hell's Kitchen</title>
<meta name="description" content="">
<meta name="author" content="">

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

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Barra de navegación incluyendo marca, inicio y buscador -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a href="#" class="navbar-brand page-scroll">Hell's Kitchen</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active page-scroll"><a href="index.html">Inicio</a></li>
      <li class="page-scroll"><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
    </ul>
  </div>
</nav>
<!-- Sección de espacio blanco 1 -->
<div style="height: 80px;"></div>

<div class="container">
  <!-- Sección con las categorías -->
  <div class="row" id="categorias" style="background-color: black;">
    <h1 class="text-center"> Recetas </h1>
    <?php while($row = $result->fetch_assoc()){
    ?>
    <div class="col-sm-2">
      <div class="thumbnail text-center">
        <a href="ver_r.php?id=<?php echo $row['nombre_receta']?>">
          <img class="img-responsive" src="<?php echo $row['imagen'] ?>" alt="<?php echo $row['nombre_receta'] ?>">
          <div class="caption"><?php echo $row['nombre_receta'] ?></div>
        </a>
      </div>
    </div>
    <?php } }
    
    ?>
  </div>
  <!-- Sección de espacio blanco 2 -->
  <div style="height: 40px;"></div>
  <!-- Sección con los dos menú verticales -->
  <div class="row">
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
              <li class="list-group-item">Porotos a la chilena</li>
              <li class="list-group-item">Arroz a la cubana</li>
              <li class="list-group-item">Papa a la huancaína</li>
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
              <li class="list-group-item">Ají de gallina</li>
              <li class="list-group-item">Ceviche de pulpo</li>
              <li class="list-group-item">Bistec a lo pobre</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Sección con espacio para más ideas en el futuro -->
  <div class="row">
    <!-- Espacio en blanco -->
    <div class="col-md-12">
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
</body>
</html>
