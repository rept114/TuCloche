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
<body>
    <div class="jm-loadingpage"></div>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #061d4f;">
        <div class="container-fluid">
            <a class="navbar-brand mx-auto text-center" href="index.php">TuCloché</a>
            <form class="d-flex">
            <button class="btn carrito-btn">
                <img src="imgs/Carrito.png" alt="Carrito" style="max-width: 100%; max-height: 100%;">
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
            <h4>Explorar por categoría:</h4>
            <div class="row justify-content-between">
                <a href="#" class="btn btn-secondary col-3" onclick="Desayunos();">Desayunos</a>
                <a href="#" class="btn btn-secondary col-3" onclick="Comidas();">Comidas</a>
                <a href="#" class="btn btn-secondary col-3" onclick="Bebidas();">Bebidas</a>
            </div>
            <br></br>
            <div class="row justify-content-between">
                <a href="#" class="btn btn-secondary col-3" onclick="Menu_Semana();">Menu de la Semana</a>
                <a href="#" class="btn btn-secondary col-3" onclick="Snacks();">Snacks</a>
            </div>     
        </div>   
        <br></br>
        <div class="container border-top border-3" id="mnuGContainer">
        <br><br> 
        <h4>Menú General:</h4><br>
        <div class="container">

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                <img src="imgs/Huevos.jpg" class="card-img-top custom-image" alt="Huevos" style="max-width: 100%; max-height: 100%;">
                <div class="card-body">
                    <h5 class="card-title">Huevos</h5>
                    <p class="card-text">(Rancheros - salchicha - jamón - tocino - sopitas de huevo - nopales - verdura)</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div style="font-size: 22px;">$29.00</div>
                        <button class="btn btn-sm" style="width: 50px; height: 50px;">
                            <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                        </button>
                    </div>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                <img src="imgs/OmeletJamon.jpg" class="card-img-top custom-image" alt="Omelet y Ham" style="max-width: 100%; max-height: 100%;">
                <div class="card-body">
                    <h5 class="card-title">Omelet Jamón y Queso</h5>
                    <div class="d-flex justify-content-between align-items-center">
                        <div style="font-size: 22px;">$35.00</div>
                        <button class="btn btn-sm" style="width: 50px; height: 50px;">
                            <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                        </button>
                    </div>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                <img src="imgs/Machacahuevo.jpg" class="card-img-top custom-image" alt="Machaca con huevo" style="max-width: 100%; max-height: 100%;">
                <div class="card-body">
                    <h5 class="card-title">Machaca con huevo</h5>
                    <div class="d-flex justify-content-between align-items-center">
                        <div style="font-size: 22px;">$45.00</div>
                        <button class="btn btn-sm" style="width: 50px; height: 50px;">
                            <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                        </button>
                    </div>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                <img src="imgs/Machacamexicana.png" class="card-img-top custom-image" alt="Machaca a la mexicana">
                <div class="card-body">
                    <h5 class="card-title">Machaca a la mexicana</h5>
                    <div class="d-flex justify-content-between align-items-center">
                        <div style="font-size: 22px;">$45.00</div>
                        <button class="btn btn-sm" style="width: 50px; height: 50px;">
                            <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                        </button>
                    </div>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                <img src="imgs/pan-mantequilla.jpeg" class="card-img-top custom-image" alt="Pan con Mantequilla">
                <div class="card-body">
                    <h5 class="card-title">Pan con Mantequilla</h5>
                    <div class="d-flex justify-content-between align-items-center">
                        <div style="font-size: 22px;">$13.00</div>
                        <button class="btn btn-sm" style="width: 50px; height: 50px;">
                            <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                        </button>
                    </div>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                <img src="imgs/Hotcakes.jpg" class="card-img-top custom-image" alt="Hot Cakes">
                <div class="card-body">
                    <h5 class="card-title">Hot Cakes</h5>
                    <div class="d-flex justify-content-between align-items-center">
                        <div style="font-size: 22px;">$29.00</div>
                        <button class="btn btn-sm" style="width: 50px; height: 50px;">
                            <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                        </button>
                    </div>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="imgs/Ensalada.jpg" class="card-img-top custom-image" alt="Ensalada">
                    <div class="card-body">
                        <h5 class="card-title">Ensalada</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <div style="font-size: 22px;">$55.00</div>
                            <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <img src="imgs/Papas-francesa.jpg" class="card-img-top custom-image" alt="Papas a la Francesa">
                    <div class="card-body">
                        <h5 class="card-title">Papas a la Francesa</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <div style="font-size: 22px;">$23.00</div>
                            <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <img src="imgs/PapasGajo.jpg" class="card-img-top custom-image" alt="Papas gajo sazonadas">
                    <div class="card-body">
                        <h5 class="card-title">Papas gajo sazonadas</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <div style="font-size: 22px;">$25.00</div>
                            <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <img src="imgs/Vaso-yogurt.jpg" class="card-img-top custom-image" alt="Vaso yogurt y frutas">
                    <div class="card-body">
                        <h5 class="card-title">Vaso yogurt y frutas</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <div style="font-size: 22px;">$26.00</div>
                            <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                            </button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col">
                <div class="card h-100">
                    <img src="imgs/pico-gallo.jpg" class="card-img-top custom-image" alt="Vaso con pico de gallo">
                    <div class="card-body">
                        <h5 class="card-title">Vaso con pico de gallo</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <div style="font-size: 22px;">$20.00</div>
                            <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <img src="imgs/mollete-sencillo.jpg" class="card-img-top custom-image" alt="Mollete Sencillo">
                    <div class="card-body">
                        <h5 class="card-title">Mollete Sencillo</h5>
                        <p class="card-text">(2 mitades)</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div style="font-size: 22px;">$31.00</div>
                            <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="imgs/Mollete-carne.jpg" class="card-img-top custom-image" alt="Mollete con Carne">
                    <div class="card-body">
                        <h5 class="card-title">Mollete con Carne</h5>
                        <p class="card-text">(2 mitades)</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div style="font-size: 22px;">$43.00</div>
                            <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="imgs/torta-jamon.jpg" class="card-img-top custom-image" alt="Torta de Jamón">
                    <div class="card-body">
                        <h5 class="card-title">Torta de Jamón</h5>
                        <p class="card-text">(2 pzas)</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div style="font-size: 22px;">$20.00</div>
                            <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="card h-100">
                    <img src="imgs/torta-cochinita.jpg" class="card-img-top custom-image" alt="Torta de Cochinita">
                    <div class="card-body">
                        <h5 class="card-title">Torta de Cochinita</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <div style="font-size: 22px;">$34.00</div>
                            <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                            </button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col">
                <div class="card h-100">
                    <img src="imgs/Torta-Cubana.jpg" class="card-img-top custom-image" alt="Torta Cubana">
                    <div class="card-body">
                        <h5 class="card-title">Torta Cubana</h5>
                        <p class="card-text">(2 mitades)</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div style="font-size: 22px;">$40.00</div>
                            <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <img src="imgs/hamburguesa.png" class="card-img-top custom-image" alt="Hamburguesa Sencilla">
                    <div class="card-body">
                        <h5 class="card-title">Hamburguesa Sencilla</h5>
                        <p class="card-text">(Queso y papas)</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div style="font-size: 22px;">$37.00</div>
                            <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <img src="imgs/Hamburguesa-jamon.png" class="card-img-top custom-image" alt="Hamburguesa con Jamón">
                    <div class="card-body">
                        <h5 class="card-title">Hamburguesa con Jamón</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <div style="font-size: 22px;">$39.00</div>
                            <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="imgs/BaguettePollo.jpg" class="card-img-top custom-image" alt="Baguette de Pollo">
                    <div class="card-body">
                        <h5 class="card-title">Baguette de Pollo</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <div style="font-size: 22px;">$50.00</div>
                            <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="imgs/BaguetteJamon.jpg" class="card-img-top custom-image" alt="Baguette de Jamón/Manchego">
                    <div class="card-body">
                        <h5 class="card-title">Baguette de Jamón/Manchego</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <div style="font-size: 22px;">$42.00</div>
                            <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="imgs/BaguetteCarne.png" class="card-img-top custom-image" alt="Baguette de Carne Asada">
                    <div class="card-body">
                        <h5 class="card-title">Baguette de Carne Asada</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <div style="font-size: 22px;">$60.00</div>
                            <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="imgs/Fajitas-pollo.jpg" class="card-img-top custom-image" alt="Fajitas de Pollo">
                    <div class="card-body">
                        <h5 class="card-title">Fajitas de Pollo</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <div style="font-size: 22px;">$50.00</div>
                            <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="imgs/Fajitas-res.jpg" class="card-img-top custom-image" alt="Fajitas de Res">
                    <div class="card-body">
                        <h5 class="card-title">Fajitas de Res</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <div style="font-size: 22px;">$65.00</div>
                            <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="imgs/quesadillas.jpg" class="card-img-top custom-image" alt="Orden Quesadillas">
                    <div class="card-body">
                        <h5 class= "card-title">Orden Quesadillas</h5>
                        <p class="card-text">(2 pzas)</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div style="font-size: 22px;">$37.00</div>
                            <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="imgs/Quesadilla-carne.jpg" class="card-img-top custom-image" alt="Quesadillas con Carne">
                    <div class="card-body">
                        <h5 class="card-title">Quesadillas con Carne</h5>
                        <p class="card-text">(2 pzas)</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div style="font-size: 22px;">$48.00</div>
                            <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        <div class="col">
                <div class="card h-100">
                    <img src="imgs/Quesadilla-carne.jpg" class="card-img-top custom-image" alt="Quesadillas con Carne">
                    <div class="card-body">
                        <h5 class="card-title">Quesadillas con Carne</h5>
                        <p class="card-text">(2 pzas)</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div style="font-size: 22px;">$48.00</div>
                            <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="imgs/Sandwich-light.jpg" class="card-img-top custom-image" alt="Sandwich Light">
                    <div class="card-body">
                        <h5 class="card-title">Sandwich Light</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <div style="font-size: 22px;">$28.00</div>
                            <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="imgs/Sandwich-extremo.jpg" class="card-img-top custom-image" alt="Sandwich Extremo">
                    <div class= "card-body">
                        <h5 class="card-title">Sandwich Extremo</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <div style="font-size: 22px;">$30.00</div>
                            <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="imgs/Sandwich-pollo.jpg" class="card-img-top custom-image" alt="Sandwich de Pollo">
                    <div class="card-body">
                        <h5 class="card-title">Sandwich de Pollo</h5>
                        <p class="card-text">(A la plancha)</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div style="font-size: 22px;">$35.00</div>
                            <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                            </button>
                        </div>
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
