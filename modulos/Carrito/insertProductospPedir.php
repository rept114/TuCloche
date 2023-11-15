<?php
require_once("C:/xampp/htdocs/TuCloche/appCode/clsUsuarios.php");
$nombreProducto = $_POST["producto"];
$precioProducto = $_POST["precio"];
if ($nombreProducto !== null && $precioProducto !== null ) {
    $usuarios = new Usuarios();
    try {
        if ($usuarios->insertPedidos($nombreProducto, $precioProducto)) {
            echo "Éxito";
        } else {
            echo "Error: No se pudo enviar la información";
        }
    } catch (Exception $e) {                
        echo $errorMessage;
    }
} else {
    echo "Error: Datos de producto y/o precio no recibidos correctamente.";
}
?>