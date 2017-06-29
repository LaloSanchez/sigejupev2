<?php

include_once(dirname(__FILE__) . "/../../../tribunal/host/Host.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class SolicitudPeritoCliente {

    private $host = null;

    public function __construct() {
        //$this->host = new Host("../../../tribunal/host/config.xml", "PERITOS");
        //$this->host = $this->host->getConnect();
    }

    public function ServiceSolicitudesPeritos($jsonRequest) {
        try {
            ini_set("default_socket_timeout", 600);
            ini_set("soap.wsdl_cache_enabled", "0");
            //$soapClient = new SoapClient("http://peritos.pjedomex.gob.mx/peritos/webservice/servidor/solicitudesperitos/SolicitudesPeritosServer.php?wsdl");
            $soapClient = new SoapClient("http://dticursos.pjedomex.gob.mx/peritos/webservice/servidor/solicitudesperitos/SolicitudesPeritosServer.php?wsdl");
            //$soapClient = new SoapClient("http://localhost:8080/peritos/desarrollo/webservice/servidor/solicitudesperitos/SolicitudesPeritosServer.php?wsdl");
            $jsonResponse = $soapClient->ServiceSolicitudPeritoCancel($jsonRequest, '1', '1');            
            return $jsonResponse;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}

@$action = $_POST["accion"];
switch ($action) {
    case "insert":
        //$SolicitudPeritoCliente = new SolicitudPeritoCliente();         
        //$rs = $SolicitudPeritoCliente->ServiceSolicitudesPeritos($json);
        break;
}
?>
