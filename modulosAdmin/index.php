<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TuCloche</title>
        <link rel="stylesheet" href="../css/adminIndex.css">
        <link rel="stylesheet" href="../css/Index.css">
        <link rel="stylesheet" href="../css/Productos.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="../vendor/sweetalert2/dist/sweetalert2.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    </head>
    <body onload="iniciarPagina();">
        <div class="jm-loadingpage"></div>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #061d4f;">
            <div class="container-fluid">
                <div id="logoulsa">
                    <a href="" onclick="Inicio();"><img src="../imgs/LOGO_ULSA.png" id="ulsa"></a>
                    <a class="navbar-brand mx-auto text-center" href="index.php">TuCloché</a>
                </div>
                <form class="d-flex align-items-center">
                <button class="btn carrito-btn">
                    <a href="#"><img src="../imgs/USER.png" alt="Usuario" style="max-width: 100%; max-height: 100%;"></a>
                </button>
                </form>
            </div>
        </nav>
        
        <div class="container mt-5" id="iContainer">
            <h4 class="text-start">Pedidos a realizar:</h4>
        </div>

            <style>
            .curved-table {
                border-radius: 30px; /* Adjust the radius as needed */
                overflow: hidden;
            }
            .curved-table th, .curved-table td {
                padding: 10px;
            }

            .btn-dark-blue {
                background-color: #0b1a5c; /* Dark Blue color code */
                color: #fff; /* Text color */  
                }
            </style>
            
        <div class="d-flex justify-content-center align-items-start" style="margin-top: 5vh;">
            <div class="card" style="width: 70rem;">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title">Pedido #1</h5>
                        </div>
                        <div class="col text-end">
                            <h5 class="card-title">#199561</h5>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">2 Papas a la francesa</li>
                        <li class="list-group-item">1 Chocomilk</li>
                        <li class="list-group-item">1 Orden Quesadillas</li>
                    </ul>
                </div>
                <div class="card-footer text-end">
                    <a href="#" class="btn btn-dark-blue curved-table w-30">Pedido listo</a>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center align-items-start" style="margin-top: 2vh;">
            <div class="card" style="width: 70rem;">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title">Pedido #2</h5>
                        </div>
                        <div class="col text-end">
                            <h5 class="card-title">#199193</h5>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">1 Hamburguesa sencilla</li>
                        <li class="list-group-item">2 Papas sazonadas</li>
                        <li class="list-group-item">2 Nachos Chicos</li>
                        <li class="list-group-item">1 Vaso de yogurt con fresas</li>
                    </ul>
                </div>
                <div class="card-footer text-end">
                    <a href="#" class="btn btn-dark-blue curved-table w-30">Pedido listo</a>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center align-items-start" style="margin-top: 2vh;">
            <div class="card" style="width: 70rem;">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title">Pedido #3</h5>
                        </div>
                        <div class="col text-end">
                            <h5 class="card-title">#209495</h5>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">1 Torta de jamón</li>
                        <li class="list-group-item">1 Mollete Sencillo</li>
                        <li class="list-group-item">1 Vaso de pico de gallo</li>
                        <li class="list-group-item">2 Chocomilk con plátano</li>
                    </ul>
                </div>
                <div class="card-footer text-end">
                    <a href="#" class="btn btn-dark-blue curved-table w-30">Pedido listo</a>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog curved-table" id="addModal">
            <div class="modal-content">
            <!-- Contenido del modal -->
            </div>
        </div>
        </div>

        <script src="../vendor/jquery-3.6.0/jquery-3.6.0.min.js"></script>
        <script src="../js/index.js?v=1"></script>
        <!--Boostrap 5.0 js!-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
        <script src="https://kit.fontawesome.com/1c4528e88d.js" crossorigin="anonymous"></script>
        <script src="../vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
    </body>
</html>
