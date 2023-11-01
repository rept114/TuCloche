<?php
require_once("clsMySQLPDO.php");

class Productos
{
 
    public $objMysql;
 
    public function __construct(){
        //$this->conn = $db;
        $this->objMysql = new clsMysql();
    }
 
    // regresa todos los productos activos (status = 1)
    public function getProductos($MQ=false){
        //select all data       
        return $this->objMysql->ejecutaSPSafe('sp_get_producto_DB',null,$MQ);   
    }

    public function getDesayunosProductos($MQ=false){
        //select all data       
        return $this->objMysql->ejecutaSPSafe('sp_getDesayunos_producto_DB',null,$MQ);   
    }

    public function getComidasProductos($MQ=false){
        //select all data       
        return $this->objMysql->ejecutaSPSafe('sp_getComidas_producto_DB',null,$MQ);   
    }

    public function getSnacksProductos($MQ=false){
        //select all data       
        return $this->objMysql->ejecutaSPSafe('sp_getSnacks_producto_DB',null,$MQ);   
    }

    public function getBebidasProductos($MQ=false){
        //select all data       
        return $this->objMysql->ejecutaSPSafe('sp_getBebidas_producto_DB',null,$MQ);   
    }
    
    public function getMenuSemanal($MQ=false){
        //select all data       
        return $this->objMysql->ejecutaSPSafe('sp_getMenuSemanal_producto_DB',null,$MQ);   
    }

    // Insert o Update los datos de una tarjeta
    public function insertTarjeta($nombre_completo, $numero_tarjeta, $vencimiento, $codigo_seguridad, $MQ=false){
        return $this->objMysql->ejecutaSPSafe('sp_insert_tarjeta_db',array($nombre_completo, $numero_tarjeta, $vencimiento, $codigo_seguridad),$MQ);   
    }

    // regresa todos los productos activos (status = 1)
    public function getTarjeta($MQ=false){
        //select all data       
        return $this->objMysql->ejecutaSPSafe('sp_get_tarjeta_DB',null,$MQ);   
    }
}
?>