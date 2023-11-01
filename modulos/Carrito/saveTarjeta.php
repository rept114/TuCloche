<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    include '../../appCode/clsTarjeta.php';   

    // Obtener los datos del POST
    $nombre_completo = $_POST["nombre_completo"];
    $numero_tarjeta = $_POST["numero_tarjeta"];
    $vencimiento = $_POST["vencimiento"];
    $codigo_seguridad = $_POST["codigo_seguridad"];

    // Mostrar los datos en pantalla (esto es solo para depuración)
    echo "Nombre Completo: " . $nombre_completo . "<br>";
    echo "Número de Tarjeta: " . $numero_tarjeta . "<br>";
    echo "Vencimiento: " . $vencimiento . "<br>";
    echo "Código de Seguridad: " . $codigo_seguridad . "<br>";

    $tarjetas = new Tarjetas();    
    
    try{
        /*Se intenta insertar la tarjeta, se pasan los parámetros*/
        if ($tarjetas->insertTarjeta($nombre_completo, $numero_tarjeta, $vencimiento, $codigo_seguridad)){
            echo "Éxito";      
        }
        else{
            throw new Exception('Error: No se encontró información de la tarjeta para eliminar');                    
        }
    }
    catch(Exception $e){                
        echo "Error"; 
    }  
?>
