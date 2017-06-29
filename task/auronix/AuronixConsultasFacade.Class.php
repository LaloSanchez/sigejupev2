<?php

ini_set('max_execution_time', 300); //300 seconds = 5 minutes

include_once(dirname(__FILE__) . "/../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/AuronixController.Class.php");

class AuronixFacade {

    protected $_proveedor;

    public function __construct() {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    // Funcion para conectarse a una Base de Datos
    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function getConsultaAudiencias() {
         $this->_conexion();
        #OBTENEMOS FECHA ACTUAL
        $fecha = "";
        $sql = "SELECT now() as fecha";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($rowsFecha = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $fecha = $rowsFecha["fecha"];
                }
            }
        }

        $fechayhora = explode(' ', $fecha);  //Separamos la hora de la fecha
        $fecha = $fechayhora[0];                  //Obtenemos la fecha
        ##################################
//        $fecha = "2015-08-01";
        ##################################

        $auronixController = new AuronixController();
        $tmpArrayAudiencias = $auronixController->selectTodasAudienciasFechas($fecha, "http://187.163.162.238:8090/SASA", $this->_proveedor);
        $tmpArrayAudiencias = $auronixController->selectTodasAudienciasFechas($fecha, "http://187.163.162.238:8090/SASA_Barrientos", $this->_proveedor);

        $this->_proveedor->close();
    }

    public function getEliminaTodasAudiencias() {
         $this->_conexion();
        #OBTENEMOS FECHA ACTUAL
        $fecha = "";
        $sql = "SELECT now() as fecha";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($rowsFecha = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $fecha = $rowsFecha["fecha"];
                }
            }
        }

        $fechayhora = explode(' ', $fecha);  //Separamos la hora de la fecha
        $fecha = $fechayhora[0];                  //Obtenemos la fecha
        ##################################
//        $fecha = "2016-08-11";
        ##################################

        $auronixController = new AuronixController();
        $tmpArrayAudiencias = $auronixController->eliminaTodoFechas($fecha, "http://187.163.162.238:8090/SASA", $this->_proveedor);
        $tmpArrayAudiencias = $auronixController->eliminaTodoFechas($fecha, "http://187.163.162.238:8090/SASA_Barrientos", $this->_proveedor);

        $this->_proveedor->close();
    }

}

$AuronixFacade = new AuronixFacade();
//$AuronixFacade->getConsultaAudiencias();
$AuronixFacade->getEliminaTodasAudiencias();
//$idAudienciaAuronix = "6169576721696692139";
//$urlAuronix = "http://187.163.162.238:8090/SASA";
//try {
//    echo "OK";
//    $ch = curl_init();
//    curl_setopt($ch, CURLOPT_URL, $urlAuronix . "/index.php?r=api/hearing&id=" . $idAudienciaAuronix);
//
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//    curl_setopt($ch, CURLOPT_USERPWD, "sigejupe:BsKfxi2REvKS");
//    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
//    $output = curl_exec($ch);
//    curl_close($ch);
//    $paramsBitacora["descRespuesta"] = $output;
//    $output = json_decode($output, true);
//} catch (Exception $e) {
//    echo "FAIL";
//    $output = "";
//    echo "ERROR EN TRY:" . $e;
//}
//print_r($output);
?>
