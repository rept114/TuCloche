<?php
require_once("clsMySQLPDO.php");

class Usuarios
{
    public $objMysql;

    public function __construct(){
        $this->objMysql = new clsMysql();
    }

    public function getNombrePorMatricula($matricula, $MQ=false){
        // Llamamos al procedimiento almacenado y pasamos la matrícula como parámetro
        return $this->objMysql->ejecutaSPSafe('buscarNombrePorMatricula_DB', ($matricula), $MQ);
    }

    // Insert o Update los datos de un pedido
    public function insertPedidos($producto, $precio, $MQ=false){
        return $this->objMysql->ejecutaSPSafe('sp_insert_pedido',array($producto, $precio),$MQ);   
    }
}
?>


