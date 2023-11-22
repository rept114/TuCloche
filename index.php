<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TuCloche</title>
    <link rel="stylesheet" href="css/Index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="vendor/sweetalert2/dist/sweetalert2.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
</head>
<style>
    .circular-btn {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  margin-right: 10px;
  background-color: #fff;
  border: 1px solid #ccc;
}

.curved-table {
    border-radius: 30px; /* Adjust the radius as needed */
    overflow: hidden;
}
.curved-table th, .curved-table td {
    padding: 10px;
}

</style>
<body>
    <div class="jm-loadingpage"></div>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #061d4f;">
        <div class="container-fluid">
            <div id="logoulsa">
                <a href="" onclick="Inicio();"><img src="imgs/LOGO_ULSA.png" id="ulsa"></a>
                <a class="navbar-brand mx-auto text-center" href="index.php">TuCloché</a>
            </div>
            <form class="d-flex align-items-center">
            <button class="btn circular-btn">1</button>
            <button class="btn carrito-btn">
                <a href="#" onclick="Carrito();"><img src="imgs/Carrito.png" alt="Carrito" style="max-width: 100%; max-height: 100%;"></a>
            </button>
            </form>
        </div>
    </nav>
    <?php
    /*Aqui van las pantallas dvContainer*/?> 
    <div class="container mt-5" id="dvContainer">
        <div class="container text-center mt-5" id="iContainer"> 
            <h4>¡Bienvenido al servicio de cafetería TuCloché!</h4>             
        </div>
        <br></br>
        <div class="container border-top border-5" id="cContainer">
            <br></br>
            <h2>Explorar por categoría:</h2>
            <div class="d-flex justify-content-between">
                <button class="btn btn-light curved-table" type="button" style="width: 350px;" onclick="Desayunos();">
                    <h1>Desayunos</h1>
                    <img src="imgs/DESAYUNO.png" class="ml-2" style="max-width: 50px; max-height: 50px;">
                </button>
                <button class="btn btn-light curved-table" type="button" style="width: 350px;" onclick="Comidas();">
                    <h1>Comidas</h1>
                    <img src="imgs/COMIDA.png" class="ml-2" style="max-width: 50px; max-height: 50px;">
                </button>
                <button class="btn btn-light curved-table" type="button" style="width: 350px;" onclick="Bebidas();">
                    <h1>Bebidas</h1>
                    <img src="imgs/Soda_2.png" class="ml-2" style="max-width: 50px; max-height: 50px;">
                </button>
            </div>
            <br></br>
            <div class="d-flex justify-content-between">
                <button class="btn btn-light curved-table" type="button" style="width: 350px;" onclick="Menu_Semanal();">
                    <h3>Menú de la Semana</h3>
                    <img src="imgs/MENU.png" class="ml-2" style="max-width: 50px; max-height: 50px;">
                </button>
                <button class="btn btn-light curved-table" type="button" style="width: 350px;" onclick="Snacks();">
                    <h3>Snacks</h3>
                    <img src="imgs/Snacks.png" class="ml-2" style="max-width: 50px; max-height: 50px;">
                </button>
            </div>
        </div>
        <br></br>
        <div class="container border-top border-3" id="mnuGContainer">
        <br><br> 
        <h4>Menú General:</h4><br>
        <div class="container">
            <h4>Desayunos:</h4>
            <div class="row row-cols-12 row-cols-md-3 g-4">
                <?php
                include 'appCode/clsProductos.php';   

                $productos = new Productos();
                $result = $productos->getDesayunosProductos();

                foreach($result as $row)
                {
                ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="<?=$row["imagen"]?>" class="card-img-top custom-image" alt="Huevos" style="max-width: 100%; max-height: 100%;">
                        <div class="card-body">
                            <h5 class="card-title"><?=$row["nombre_productos"]?></h5>
                            <p class="card-text"><?=$row["descripcion_productos"]?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div style="font-size: 22px;">$<?=$row["precio_productos"]?></div>
                                <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                    <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php       
                }
                ?>
            </div>
        </div><br><br>
        <div class="container">
            <h4>Comidas:</h4>
            <div class="row row-cols-12 row-cols-md-3 g-4">
                <?php 
                $productos = new Productos();
                $result = $productos->getComidasProductos();

                foreach($result as $row)
                {
                ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="<?=$row["imagen"]?>" class="card-img-top custom-image" alt="Huevos" style="max-width: 100%; max-height: 100%;">
                        <div class="card-body">
                            <h5 class="card-title"><?=$row["nombre_productos"]?></h5>
                            <p class="card-text"><?=$row["descripcion_productos"]?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div style="font-size: 22px;">$<?=$row["precio_productos"]?></div>
                                <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                    <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php       
                }
                ?>
            </div>
        </div><br><br>
        <div class="container">
            <h4>Snacks:</h4>
            <div class="row row-cols-12 row-cols-md-3 g-4">
                <?php 
                $productos = new Productos();
                $result = $productos->getSnacksProductos();

                foreach($result as $row)
                {
                ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="<?=$row["imagen"]?>" class="card-img-top custom-image" alt="Huevos" style="max-width: 100%; max-height: 100%;">
                        <div class="card-body">
                            <h5 class="card-title"><?=$row["nombre_productos"]?></h5>
                            <p class="card-text"><?=$row["descripcion_productos"]?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div style="font-size: 22px;">$<?=$row["precio_productos"]?></div>
                                <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                    <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php       
                }
                ?>
            </div>
        </div><br><br>
        <div class="container">
            <h4>Bebidas:</h4>
            <div class="row row-cols-12 row-cols-md-3 g-4">
                <?php  
                $productos = new Productos();
                $result = $productos->getBebidasProductos();

                foreach($result as $row)
                {
                ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="<?=$row["imagen"]?>" class="card-img-top custom-image" alt="Huevos" style="max-width: 100%; max-height: 100%;">
                        <div class="card-body">
                            <h5 class="card-title"><?=$row["nombre_productos"]?></h5>
                            <p class="card-text"><?=$row["descripcion_productos"]?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div style="font-size: 22px;">$<?=$row["precio_productos"]?></div>
                                <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                    <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php       
                }
                ?>
            </div>
        </div>
    </div>
    <script src="vendor/jquery-3.6.0/jquery-3.6.0.min.js"></script>
    <script src="js/index.js?v=1"></script>
    <!--Boostrap 5.0 js!-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
    <script src="https://kit.fontawesome.com/1c4528e88d.js" crossorigin="anonymous"></script>
    <script src="vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
    </body>
</html>
