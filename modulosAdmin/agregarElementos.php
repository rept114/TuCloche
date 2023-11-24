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
    <h4 class="text-start">Agregar:</h4>
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

<div class="container">
  <div class="row">
    <div class="col-md-10 mx-auto">
        <table class="table curved-table table-light">
            <thead class="text-center">
                <tr>
                <th scope="col" class="fs-5">Inserte los datos a agregar:</th>
                <th scope="col" class="fs-5"></th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                <td class="h5">Nombre:</td>
                <td class="h5">
                    <input type="email" class="form-control">
                </td>
                </tr>
                <tr>
                <td class="h5">Precio:</td>
                <td class="h5">
                    <input type="email" class="form-control">
                </td>
                </tr>
                <tr>
                <td class="h5">Descripción:</td>
                <td class="h5">
                    <input type="email" class="form-control">
                </td>
                </tr>
                <tr>
                <td class="h5">Categoría:</td>
                <td class="h5">
                    <input type="email" class="form-control">
                </td>
                </tr>
                <tr>
                <td class="h5">Cantidad:</td>
                <td class="h5">
                    <input type="email" class="form-control">
                </td>
                </tr>
                <tr>
                <td class="h5">Precio:</td>
                <td class="h5">
                    <input type="email" class="form-control">
                </td>
                </tr>
                <tr>
                <td class="h5">Imágen:</td>
                    <td class="h5" colspan="2">
                        <div class="mb-3">
                            <input class="form-control" type="file" id="formFile">
                        </div>
                    </td>
                </tr>
                <tr>
                <td class="h5"></td>
                <td class="h5" colspan="2">
                    <button class="btn btn-dark-blue curved-table w-50" type="button">Agregar</button>
                </td>
                </tr>
        </table>
     </div>
  </div>
</div>