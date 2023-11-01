<?php
require_once("clsMySQLPDO.php");

class Tarjeta
{
 
    public $objMysql;
 
    public function __construct(){
        //$this->conn = $db;
        $this->objMysql = new clsMysql();
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