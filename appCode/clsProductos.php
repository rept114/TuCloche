<?php
require_once("clsMySQLPDO.php");

class Productos
{
 
    public $objMysql;
 
    public function __construct(){
        //$this->conn = $db;
        $this->objMysql = new clsMysql();
    }
 
    // regresa todos los clientes activos (status = 1)
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

}
?>