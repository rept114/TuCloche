<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TuCloche</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Boostrap CSS!-->
    <link rel="stylesheet" href="vendor/sweetalert2/dist/sweetalert2.min.css">
</head>
<body>
    <div class="container" id="dvContainer">
    </div>
    <?php
        // Incluir el contenido de getClientes.php
        include('modulos/Inicio/HomePage.php');
    ?>
    <script src="vendor/jquery-3.6.0/jquery-3.6.0.min.js"></script>
    <script src="js/index.js?v=1"></script>
    <!--Boostrap 5.0 js!-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
    <script src="https://kit.fontawesome.com/1c4528e88d.js" crossorigin="anonymous"></script>
    <script src="vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
</body>
</html>