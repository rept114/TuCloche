<?php
require_once("../../appCode/clsUsuarios.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["matricula"])) {
        $matricula = $_POST["matricula"];
        
        if (ctype_digit($matricula)) {
            $usuarios = new Usuarios();
            $result = $usuarios->getNombrePorMatricula($matricula);

            if ($result) {
                echo $result[0]['nombre_usuarios'];
            } else {
                echo "No se encontró ningún nombre para la matrícula $matricula.";
            }
        } else {
            echo "La matrícula debe ser un número entero.";
        }
    } else {
        echo "La matrícula no ha sido proporcionada.";
    }
} else {
    echo "Acceso no permitido.";
}
?>