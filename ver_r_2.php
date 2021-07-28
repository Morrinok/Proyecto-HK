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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ver Producto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- nav bar style-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style_r.css" media="screen" />
</head>
<body>
    <div class="cont_principal">
        <div class="topnav">
            <a class="active" href="index_remastered.php">Hell's Kitchen</a>
            <a href="#about">About</a>
            <div class="search-container">
              <form action="/action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit">Submit</button>
              </form>
            </div>
        </div>
        <div class="cont_central">
            <div class="cont_modal cont_modal_active">
                <div class="cont_photo">
                    <div class="cont_img_back">
                        <img src="<?php echo $row['imagen'] ?>" alt="" />
                    </div>

                    <div class="cont_mins">
                        <div class="sub_mins">
                            <h3><?php echo $row['valoracion'] ?></h3>
                            <span>valoracion</span>
                        </div>
                    </div>

                    <div class="cont_servings">
                        <h3><?php echo $row['dificultad']?></h3>
                        <span>dificultad</span>
                    </div>

                    <div class="cont_detalles">
                        <h3><?php echo $row['nombre_receta'] ?></h3>
                        <p><?php echo $row['categoria']?></p>                        
                    </div>
                </div>

                <div class="cont_text_ingredients">
                    <div class="cont_over_hidden">
                        <div class="cont_tabs">
                            <ul>
                                <li>
                                    <a href="#">
                                        <h4>Preparacion</h4>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="cont_text_det_preparation">
                            <div class="cont_title_preparation">
                            </div>
                            <div class="cont_title_preparation">
                                <p>Ingredientes</p>
                            </div>
                            <div class="cont_info_preparation">
                                
                                <p><?php echo $row['ingredientes']?></p>
                            </div>
                            <div class="cont_title_preparation">
                                <p>Pasos</p>
                            </div>
                            <div class="cont_info_preparation">
                                <p><?php echo $row['preparacion']?></p>
                            </div>

                        </div>

                       
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
<!-- <footer>
    <div id="footer">
        <div class="container text-center">
            <div class="col-md-6">
                <p>&copy; 2021 Hell's Kitchen. All rights reserved. Design by Grupo Hell's Kitchen</p>
            </div>
        </div>
    </div>
</footer> -->
</html>