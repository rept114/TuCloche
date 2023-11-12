<?php
require_once("C:/xampp/htdocs/TuCloche/appCode/clsUsuarios.php");

// Obtener los datos del POST
$nombreProducto = $_POST["producto"];
$precioProducto = $_POST["precio"];

$usuarios = new Usuarios();

// Intenta insertar la tarjeta y maneja el resultado
try {
    if ($usuarios->insertPedidos($nombreProducto, $precioProducto)) {
        echo "Éxito";
    } else {
        echo "Error: No se pudo enviar la información";
    }
} catch (Exception $e) {                
    $errorMessage = "Error en insertProductospPedir.php: " . $e->getMessage();
    error_log($errorMessage);
    echo $errorMessage;
}
?>
