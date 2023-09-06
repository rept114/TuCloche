<?php
require_once("clsMySQLPDO.php");

class Clientes
{
 
    public $objMysql;
 
    public function __construct(){
        //$this->conn = $db;
        $this->objMysql = new clsMysql();
    }
 
    // used by select drop-down list
    public function getClientes($MQ=false){
        //select all data       
        return $this->objMysql->ejecutaSPSafe('getClientes',null,$MQ);   
    }     
    
}
?>