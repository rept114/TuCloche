<?php
    include "D:/xampp/htdocs/cactus/vendor/appCode/clsAcceso.php";

    $acceso = new Acceso();
    $result = $acceso->getUsuarios();
    
    foreach($result as $row)
    {
        echo $row["email"].
        ' es el correo de: ' .
        $row["nombre"] .
        ' ' .
        $row["apellido"] . 
        '<br>';
    }
?>