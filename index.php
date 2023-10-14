<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TuCloche</title>
    <link rel="stylesheet" href="css/Index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="vendor/sweetalert2/dist/sweetalert2.min.css">
</head>
<body>
    <div class="jm-loadingpage"></div>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #061d4f;">
        <div class="container-fluid">
        <a class="navbar-brand mx-auto text-center" href="index.php">TuCloché</a>
        <form class="d-flex">
        <button class="btn carrito-btn">
                <img src="imgs/Carrito.png" alt="Carrito" style="max-width: 100%; max-height: 100%;">
        </button>
        </form>
    </nav>
    <?php/*Aqui van las pantallas dvContainer*/?> 
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
                <img src="imgs/Huevos.jpg" class="card-img-top" alt="Huevos" style="max-width: 100%; max-height: 100%;">
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
                <img src="imgs/OmeletJamon.jpg" class="card-img-top" alt="Omelet y Ham" style="max-width: 100%; max-height: 100%;">
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
                <img src="imgs/Machacahuevo.jpg" class="card-img-top" alt="Machaca con huevo" style="max-width: 100%; max-height: 100%;">
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
                <img src="imgs/Machacamexicana.png" class="card-img-top" alt="Machaca a la mexicana">
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
                <img src="pan-mantequilla.jpeg" class="card-img-top" alt="Pan con mantequilla">
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
            

                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="position-relative text-center">
                                <div class="btn btn-secondary square-btn" style="background-image: url('imgs/Hotcakes.jpg');">
                                </div>
                            </div>
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

                <br>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="position-relative text-center">
                                <div class="btn btn-secondary square-btn" style="background-image: url('imgs/Ensalada.jpg');">
                                </div>
                            </div>
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
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="position-relative text-center">
                                <div class="btn btn-secondary square-btn" style="background-image: url('imgs/Papas-francesa.jpg');">
                                </div>
                            </div>
                            <h5 class="card-title">Papas a la francesa</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div style="font-size: 22px;">$23.00</div>
                                <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                    <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="position-relative text-center">
                                <div class="btn btn-secondary square-btn" style="background-image: url('imgs/PapasGajo.jpg');">
                                </div>
                            </div>
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

            <br>

                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="position-relative text-center">
                                <div class="btn btn-secondary square-btn" style="background-image: url('imgs/Vaso-yogurt.jpg');">
                                </div>
                            </div>
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
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="position-relative text-center">
                                <div class="btn btn-secondary square-btn" style="background-image: url('imgs/pico-gallo.jpg');">
                                </div>
                            </div>
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
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="position-relative text-center">
                                <div class="btn btn-secondary square-btn" style="background-image: url('imgs/mollete-sencillo.jpg');">
                                </div>
                            </div>
                            <h5 class="card-title">Mollete Sencillo</h5>
                            <h6 class="card-subtitle mb-2 text-muted">(2 mitades)</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <div style="font-size: 22px;">$31.00</div>
                                <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                    <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="position-relative text-center">
                                <div class="btn btn-secondary square-btn" style="background-image: url('imgs/Mollete-carne.jpg');">
                                </div>
                            </div>
                            <h5 class="card-title">Mollete con Carne</h5>
                            <h6 class="card-subtitle mb-2 text-muted">(2 mitades)</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <div style="font-size: 22px;">$43.00</div>
                                <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                    <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="position-relative text-center">
                                <div class="btn btn-secondary square-btn" style="background-image: url('imgs/torta-jamon.jpg');">
                                </div>
                            </div>
                            <h5 class="card-title">Torta de Jamón</h5>
                            <h6 class="card-subtitle mb-2 text-muted">(2 pzas)</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <div style="font-size: 22px;">$20.00</div>
                                <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                    <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="position-relative text-center">
                                <div class="btn btn-secondary square-btn" style="background-image: url('imgs/torta-cochinita.jpg');">
                                </div>
                            </div>
                            <h5 class="card-title">Torta de cochinita</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div style="font-size: 22px;">$34.00</div>
                                <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                    <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="position-relative text-center">
                                <div class="btn btn-secondary square-btn" style="background-image: url('imgs/Torta-Cubana.jpg');">
                                </div>
                            </div>
                            <h5 class="card-title">Torta Cubana</h5>
                            <h6 class="card-subtitle mb-2 text-muted">(2 mitades)</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <div style="font-size: 22px;">$40.00</div>
                                <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                    <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="position-relative text-center">
                                <div class="btn btn-secondary square-btn" style="background-image: url('imgs/hamburguesa.png');">
                                </div>
                            </div>
                            <h5 class="card-title">Hamburguesa sencilla</h5>
                            <h6 class="card-subtitle mb-2 text-muted">(Queso y papas)</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <div style="font-size: 22px;">$37.00</div>
                                <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                    <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="position-relative text-center">
                                <div class="btn btn-secondary square-btn" style="background-image: url('imgs/Hamburguesa-jamon.png');">
                                </div>
                            </div>
                            <h5 class="card-title">Hamburguesa con jamón</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div style="font-size: 22px;">$39.00</div>
                                <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                    <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="position-relative text-center">
                                <div class="btn btn-secondary square-btn" style="background-image: url('imgs/BaguettePollo.jpg');">
                                </div>
                            </div>
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
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="position-relative text-center">
                                <div class="btn btn-secondary square-btn" style="background-image: url('imgs/BaguetteJamon.jpg');">
                                </div>
                            </div>
                            <h5 class="card-title">Baguette de Jamon/manchego</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div style="font-size: 22px;">$42.00</div>
                                <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                    <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="position-relative text-center">
                                <div class="btn btn-secondary square-btn" style="background-image: url('imgs/BaguetteCarne.png');">
                                </div>
                            </div>
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

                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="position-relative text-center">
                                <div class="btn btn-secondary square-btn" style="background-image: url('imgs/Fajitas-pollo.jpg');">
                                </div>
                            </div>
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
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="position-relative text-center">
                                <div class="btn btn-secondary square-btn" style="background-image: url('imgs/Fajitas-res.jpg');">
                                </div>
                            </div>
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
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="position-relative text-center">
                                <div class="btn btn-secondary square-btn" style="background-image: url('imgs/quesadillas.jpg');">
                                </div>
                            </div>
                            <h5 class="card-title">Orden Quesadillas</h5>
                            <h6 class="card-subtitle mb-2 text-muted">(2 pzas)</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <div style="font-size: 22px;">$37.00</div>
                                <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                    <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="position-relative text-center">
                                <div class="btn btn-secondary square-btn" style="background-image: url('imgs/quesadillas.jpg');">
                                </div>
                            </div>
                            <h5 class="card-title">Orden Quesadillas</h5>
                            <h6 class="card-subtitle mb-2 text-muted">(3 pzas)</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <div style="font-size: 22px;">$48.00</div>
                                <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                    <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="position-relative text-center">
                                <div class="btn btn-secondary square-btn" style="background-image: url('imgs/Quesadilla-carne.jpg');">
                                </div>
                            </div>
                            <h5 class="card-title">Quesadillas con carne</h5>
                            <h6 class="card-subtitle mb-2 text-muted">(2 pzas)</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <div style="font-size: 22px;">$48.00</div>
                                <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                    <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                                </button>
                            </div>
                        </div>
                    </div>        <br><br>
                </div>
            
        <div class="container border-top border-5" id="mnuContainer">
        <br><br> 
        <h4>Sandwiches:</h4><br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="position-relative text-center">
                                <div class="btn btn-secondary square-btn" style="background-image: url('imgs/Sandwich-clasico.jpg');">
                                </div>
                            </div>
                            <h5 class="card-title">Sandwich Clásico</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div style="font-size: 22px;">$23.00</div>
                                <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                    <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="position-relative text-center">
                                <div class="btn btn-secondary square-btn" style="background-image: url('imgs/Sandwich-light.jpg');">
                                </div>
                            </div>
                            <h5 class="card-title">Sandwich light</h5>
                            <h6 class="card-subtitle mb-2 text-muted"></h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <div style="font-size: 22px;">$28.00</div>
                                <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                    <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="position-relative text-center">
                                <div class="btn btn-secondary square-btn" style="background-image: url('imgs/Sandwich-extremo.jpg');">
                                </div>
                            </div>
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
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="position-relative text-center">
                                <div class="btn btn-secondary square-btn" style="background-image: url('imgs/Sandwich-pollo.jpg');">
                                </div>
                            </div>
                            <h5 class="card-title">Sandwich de Pollo</h5>
                            <h6 class="card-subtitle mb-2 text-muted">(A la plancha)</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <div style="font-size: 22px;">$35.00</div>
                                <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                    <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                                </button>
                            </div>
                        </div>
                    </div><br>
                </div>
            </div>
        </div> 

        <div class="container border-top border-3" id="mnubContainer">
        <br><br> 
        <h4>Bebidas:</h4><br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="position-relative text-center">
                                <div class="btn btn-secondary square-btn" style="background-image: url('imgs/Chocomilk.jpg');">
                                </div>
                            </div>
                            <h5 class="card-title">Chocomilk</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div style="font-size: 22px;">$22.00</div>
                                <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                    <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="position-relative text-center">
                                <div class="btn btn-secondary square-btn" style="background-image: url('imgs/chocomilk-platano.jpg');">
                                </div>
                            </div>
                            <h5 class="card-title">Chocomilk de plátano</h5>
                            <h6 class="card-subtitle mb-2 text-muted"></h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <div style="font-size: 22px;">$25.00</div>
                                <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                    <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="position-relative text-center">
                                <div class="btn btn-secondary square-btn" style="background-image: url('imgs/Licuado-platano.jpg');">
                                </div>
                            </div>
                            <h5 class="card-title">Licuado de plátano</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div style="font-size: 22px;">$23.00</div>
                                <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                    <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="position-relative text-center">
                                <div class="btn btn-secondary square-btn" style="background-image: url('imgs/Licuado-fresa.jpg');">
                                </div>
                            </div>
                            <h5 class="card-title">Licuado de fresa</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div style="font-size: 22px;">$29.00</div>
                                <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                    <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="position-relative text-center">
                                <div class="btn btn-secondary square-btn" style="background-image: url('imgs/licuado-fresa-platano.png');">
                                </div>
                            </div>
                            <h5 class="card-title">Licuado de fresa y plátano</h5>
                            <h6 class="card-subtitle mb-2 text-muted"></h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <div style="font-size: 22px;">$26.00</div>
                                <button class="btn btn-sm" style="width: 50px; height: 50px;">
                                    <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                                </button>
                            </div>
                        </div>
                    </div>
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
