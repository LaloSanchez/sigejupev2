<?php

include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/host/Host.Class.php");

if (!defined("ruta")) {
    define("ruta", dirname(__FILE__));
}

class ObtenerTocas {

    private $host = null;

    public function __construct() {
        $this->host = new Host(ruta . "/../../../tribunal/host/config.xml", "ELECTRONICO");
        $this->host = $this->host->getConnect();
    }

//
    public function obtenerToca($data) {
//        error_log($data);
//        var_dump($data);

        //$data = json_encode($data);
        ini_set("default_socket_timeout", 200);
        ini_set("soap.wsdl_cache_enabled", "0");
         $options = array(
        'trace' => true,
        'exceptions' => true,
        'cache_wsdl' => WSDL_CACHE_NONE,
        'features' => SOAP_SINGLE_ELEMENT_ARRAYS + SOAP_USE_XSI_ARRAY_TYPE,
        'soap_version' => SOAP_1_2,
        'soap_action' => 'show',
// Credenciales de autenticacion
        'login' => "dgaonam",
        'password' => "123456789",

        'language' => 'es',
        'encoding' => 'UTF-8');
        $toca = new SoapClient($this->host . "servidor/oficialia/OficialiasServer.php?wsdl",$options);
        $responseTocas = $toca->Tocas($data);
//        error_log($responseTocas);
//        var_dump($responseTocas);
        if (is_soap_fault($responseTocas)) {
            throw new Exception("SOAP Fault: (faultcode:" . $responseTocas->faultcode . ", faultstring: " . $responseTocas->faultstring . ")");
        }
//        $responseTocas = '{"cveAdscripcion":"366","numToca":"48","aniToca":"2016"}';
        
        return $responseTocas;
    }

}

?>
