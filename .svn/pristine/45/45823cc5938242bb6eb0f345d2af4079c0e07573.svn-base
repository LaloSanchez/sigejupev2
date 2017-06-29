<?php

include_once(dirname(__FILE__) . "/../../../tribunal/host/Host.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

if (!defined("ruta")) {
    define("ruta", dirname(__FILE__));
}

class CedulasCliente {

    private $host = null;

    public function __construct() {
        $this->host = new Host(ruta . "/../../../tribunal/host/config.xml", "GESTION");
        $this->host = $this->host->getConnect();
    }
    
    public function obtenerCedulas($jsondata) {

        ini_set("default_socket_timeout", 200);
        ini_set("soap.wsdl_cache_enabled", "0");

        $cedula = new SoapClient(/* $this->host . */ "http://dticursos.pjedomex.gob.mx/gestion2/servidor/controller/cedulasProf/CedulasServerScramble.wsdl");
        $responseCedulas = $cedula->consultaCedulas($jsondata);
        if (is_soap_fault($responseCedulas)) {
            throw new Exception("SOAP Fault: (faultcode:" . $responseCedulas->faultcode . ", faultstring: " . $responseCedulas->faultstring . ")");
        }
        return $responseCedulas;
    }
    public function registraCedulas($jsondata) {
            ini_set("default_socket_timeout", 200);
            ini_set("soap.wsdl_cache_enabled", "0");

            $cedula = new SoapClient(/* $this->host . */ "http://dticursos.pjedomex.gob.mx/gestion2/servidor/controller/cedulasProf/CedulasServerScramble.wsdl");
            $responseCedulas = $cedula->registraCedulas($jsondata);

            if (is_soap_fault($responseCedulas)) {
                throw new Exception("SOAP Fault: (faultcode:" . $responseCedulas->faultcode . ", faultstring: " . $responseCedulas->faultstring . ")");
            }
        return $responseCedulas;
    }
    public function modificarCedulas($jsondata) {

            ini_set("default_socket_timeout", 200);
            ini_set("soap.wsdl_cache_enabled", "0");
            $cedula = new SoapClient(/* $this->host . */ "http://dticursos.pjedomex.gob.mx/gestion2/servidor/controller/cedulasProf/CedulasServerScramble.wsdl");
            $responseCedulas = $cedula->ActualizaCedulas($jsondata);
            //var_dump($responseCedulas);
            if (is_soap_fault($responseCedulas)) {
                throw new Exception("SOAP Fault: (faultcode:" . $responseCedulas->faultcode . ", faultstring: " . $responseCedulas->faultstring . ")");
            }
        return $responseCedulas;
    }
}

?>