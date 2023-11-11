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
}
?>


