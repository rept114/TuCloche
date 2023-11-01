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
            <div id="logoulsa">
                <a href="" onclick="Inicio();"><img src="imgs/LOGO_ULSA.png" id="ulsa"></a>
                <a class="navbar-brand mx-auto text-center" href="index.php">TuCloché</a>
            </div>
            <form class="d-flex">
            <button class="btn carrito-btn">
                <a href="#" onclick="Carrito();"><img src="imgs/Carrito.png" alt="Carrito" style="max-width: 100%; max-height: 100%;"></a>
            </button>
            </form>
        </div>
    </nav>

    <div style="width: 100%; height: 100%; color: black; font-size: 36px; font-family: Ubuntu; font-weight: 400; word-wrap: break-word">Pedidos a realizar:</div>
    <div style="width: 100%; height: 100%; border: 1px black solid"></div>