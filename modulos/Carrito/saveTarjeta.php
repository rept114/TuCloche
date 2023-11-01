<?php
    include '../../appCode/clsProductors.php';   
       
    /*Se guarda los parametro recibido por POST*/
    $nombre_completo = $_POST["nombre_completo"];
    $numero_tarjeta = $_POST["numero_tarjeta"];
    $vencimiento = $_POST["vencimiento"];
    $codigo_seguridad = $_POST["codigo_seguridad"];

    
    $tarjetas = new Tarjetas();    
    
    try{
        /*Se intenta insertar el cliente, se pasan los parametro ID, Nombre, RFC y Telefono*/
        if ($tarjetas->insertTarjeta($nombre_completo, $numero_tarjeta, $vencimiento, $codigo_seguridad)){
            echo "Éxito";      
        }
        else{
            throw new Exception('Error: No se encontró informacion del cliente para eliminar');                    
        }
    }
    catch(Exception $e){                
       echo "Error"; 
    }  
?>