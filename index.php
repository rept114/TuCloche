<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="jm-loadingpage"></div>
      <nav class="navbar navbar-dark" style="background-color: #061d4f;">
            <div class="container-fluid">
              <a class="navbar-brand mx-auto text-center" href="#">TuCloché</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Ventas</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Catalogos
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#" onclick="getCliente();">Clientes</a></li>
                                <li><a class="dropdown-item" href="#">Usuarios</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Configuraciones</a></li>
                            </ul>
                        </li>            
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>
    <div class="container text-center mt-5" id="dvContainer"> 
    <h4>¡Bienvenido al servicio de cafetería TuCloché!</h4>             
    </div>
    <br></br>
    <div class="container border-top border-5" id="dvContainer">
    <br></br> 
    <h4>Explorar por categoría:</h4>
    <div class="row justify-content-between">
        <button class="btn btn-secondary col-3">Desayunos</button>
        <button class="btn btn-secondary col-3">Comidas</button>
        <button class="btn btn-secondary col-3">Bebidas</button>
    </div>
    <br></br>
    <div class="row justify-content-between">
        <button class="btn btn-secondary col-3">Menú de la Semana</button>
        <button class="btn btn-secondary col-3">Snacks</button>
    </div>     
    </div> 
    <br></br> 
    <div class="container border-top border-5" id="dvContainer">
    <br></br> 
    <h4>Menú General:</h4>
        <button class="btn btn-secondary col-3">Huevos</button>
    </div>   

    <script src="vendor/jquery-3.6.0/jquery-3.6.0.min.js"></script>
    <script src="js/index.js?v=1"></script>
    <!--Boostrap 5.0 js!-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
    <script src="https://kit.fontawesome.com/1c4528e88d.js" crossorigin="anonymous"></script>
    <script src="vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
</body>
</html>