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
    </div>   
    <br></br> 

    <div class="container border-top border-5" id="dvContainer">
    <br><br> 
    <h4>Menú General:</h4>
    <div class="row">
        <div class="col-4">
            <div class="position-relative text-center">
                <div class="btn btn-secondary square-btn" style="background-image: url('imgs/Huevos.jpg');">
                </div>
                <button class="btn btn-sm mt-2" style="width: 50px; height: 50px;">
                    <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                </button>
                <div class="mt-2 text-left" style="font-size: 20px;">HUEVOS</div> 
                <div class="mt-2 text-left" style="font-size: 22px;">$29.00</div>
            </div>
        </div>
        <div class="col-4">
            <div class="position-relative text-center">
                <div class="btn btn-secondary square-btn" style="background-image: url('imgs/OmeletJamon.jpg');">
                </div>
                <button class="btn btn-sm mt-2" style="width: 50px; height: 50px;">
                    <img src="imgs/Agregar.png" alt="Small Button Image 2" style="max-width: 100%; max-height: 100%;">
                </button>
                <div class="mt-2 text-left" style="font-size: 20px;">OMELET</div>
                <div class="mt-2 text-left" style="font-size: 22px;">$29.00</div>
            </div>
        </div>
        <div class="col-4">
            <div class="position-relative text-center">
                <div class="btn btn-secondary square-btn" style="background-image: url('imgs/Machacahuevo.jpg');">
                </div>
                <div class="mt-2 text-left" style="font-size: 20px;">MACHACAHUEVO</div>
                <div class="mt-2 text-left" style="font-size: 22px;">$29.00</div>
                <button class="btn btn-sm mt-2" style="width: 50px; height: 50px;">
                    <img src="imgs/Agregar.png" alt="Small Button Image 3" style="max-width: 100%; max-height: 100%;">
                </button>
            </div>
        </div>
    </div>
</div>


    <style>
        .square-btn {
            width: 200px; /* Adjust the width to make it square */
            height: 200px; /* Adjust the height to make it square */
            background-size: cover;
            text-align: center;
            padding: 0;
            line-height: 100px; /* Vertically center the text */
            border: none; /* Remove the default button border */
        }
    </style>
    </div>   

