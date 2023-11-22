<?php
//eliminarProducto.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica que se haya recibido un ID válido
    if (isset($_POST['id']) && is_numeric($_POST['id'])) {
        $idProducto = $_POST['id'];

        // Realiza la eliminación en la base de datos usando tu procedimiento almacenado
        require_once "../../appCode/clsUsuarios.php";
        $usuarios = new Usuarios();

        try {
            $usuarios->eliminarProducto($idProducto);
            echo "Éxito"; // Puedes devolver cualquier mensaje que desees
        } catch (Exception $e) {
            echo "Error al intentar eliminar el producto";
        }
    } else {
        echo "Error: ID de producto no válido";
    }
} else {
    echo "Error: Método de solicitud no válido";
}
?>
