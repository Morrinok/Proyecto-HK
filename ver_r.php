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
  <title><?php echo $row['nombre_receta']?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 230px;
    background: #aaa;
  }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="index.php">Hell's Kitchen</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>    
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-3 border p-3">
        
      <h2><?php echo $row['nombre_receta']?></h2>
      <br>
      <div class="container"><img class="img-fluid img-thumbnail" src="<?php echo $row['imagen'] ?>" alt="<?php echo $row['nombre_receta'] ?>"></div>
      <br>
      <h3>Categoría</h3>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#"><?php echo $row['categoria'] ?></a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-9">
        <div class="container border p-3">
            <h2>Ingredientes</h2>
            <div><?php echo $row['ingredientes']?></div>
        </div>
        <br>
        <div class="container border p-3">
            <h2>Preparación: </h2>
            <div><?php echo $row['preparacion']?></div>
        </div>
        <br>
        <div class="container border p-3">
            <h2>Calificación: </h2>
            <div>
            <?php 
                
            ?>
            </div>
        </div>
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>

</body>
</html>