<?php
    include '../../appCode/clsTarjeta.php';   

    // Obtener los datos del POST
    $nombre_completo = $_POST["nombre_completo"];
    $numero_tarjeta = $_POST["numero_tarjeta"];
    $vencimiento = $_POST["vencimiento"];
    $codigo_seguridad = $_POST["codigo_seguridad"];


    $tarjetas = new Tarjeta();    
    
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
