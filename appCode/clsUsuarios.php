<?php
require_once("clsMySQLPDO.php");

class Usuarios
{
    public $objMysql;

    public function __construct(){
        try {
            $this->objMysql = new clsMysql();
        } catch (Exception $e) {
            error_log("Error en el constructor de Usuarios: " . $e->getMessage());
            throw $e;
        }
    }

    public function getNombrePorMatricula($matricula, $MQ=false){
        // Llamamos al procedimiento almacenado y pasamos la matrícula como parámetro
        return $this->objMysql->ejecutaSPSafe('buscarNombrePorMatricula_DB', ($matricula), $MQ);
    }

    // Insert o Update los datos de un pedido
    public function insertPedidos($producto, $precio, $MQ = false)
    {
       return $this->objMysql->ejecutaSPSafe('sp_insert_pedido', array($producto, $precio), $MQ);
    
    }

    
    public function getPedidosAgregados($MQ=false){
        //select all data       
        return $this->objMysql->ejecutaSPSafe('sp_getPedidos_agregados_db',null,$MQ);   
    }
}
?>


