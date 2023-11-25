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
<body>
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
    <h4 class="text-start">Elementos:</h4>
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

<?php/*Aqui van las pantallas dvContainer*/?> 
<div class="container" id="dvContainer">
<div class="row">
    <div class="col-md-12 mx-auto">
        <table class="table curved-table table-hover table-light">
            <thead class="text-center">
                <tr>
                <th scope="col" class="fs-5">Nombre:</th>
                <th scope="col" class="fs-5">Categoria:</th>
                <th scope="col" class="fs-5">Precio:</th>
                <th scope="col" class="fs-5">Acciones:</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php
                include '../appCode/clsProductos.php';   
                $productos = new Productos();
                $result = $productos->getProductosall();
                foreach ($result as $row) {
                ?>
                <tr>
                <td class="h5"><?=$row["codigo"]?></td>
                <td class="h5"><?=$row["nombre_productos"]?></td>
                <td class="h5"><?=$row["categoria_productos"]?></td>
                <td class="h5"><?=$row["precio_productos"]?></td>
                <td>
                    <button type="button" class="btn" onclick="EditarElementos();">
                        <img src="../imgs/EDIT.png" alt="Edit" width="22" height="22">
                    </button>
                    <button type="button" class="btn">
                        <img src="../imgs/Erase.png" alt="Delete" width="22" height="22">
                    </button>
                </td>
                <?php
                }
                ?>
            <tfoot>
                <tr>
                <td colspan="4">
                    <button type="button" class="btn w-100">
                        <span class="fs-5">Agregar Elemento</span>
                    <img src="../imgs/Agregar.png" alt="Add" width="22" height="22" class="ms-2">
                    </button>
                </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
</div>
    <script src="../vendor/jquery-3.6.0/jquery-3.6.0.min.js"></script>
    <script src="../js/index.js?v=1"></script>
    <!--Boostrap 5.0 js!-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
    <script src="https://kit.fontawesome.com/1c4528e88d.js" crossorigin="anonymous"></script>
    <script src="../vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>