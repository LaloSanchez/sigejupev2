<?php

include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/host/Host.Class.php");

if (!defined("ruta")) {
   define("ruta", dirname(__FILE__));
}

class Tocas {

   private $host = null;

   public function __construct() {
      $this->host = new Host(ruta . "/../../../tribunal/host/config.xml", "ELECTRONICO");
      $this->host = $this->host->getConnect();
   }

//
   public function consultar($data) {
      $data = json_encode($data);

      ini_set("default_socket_timeout", 200);
      ini_set("soap.wsdl_cache_enabled", "0");


      $toca = new SoapClient($this->host . "servidor/tocas/TocasScramble.wsdl");


      $responseTocas = $toca->consultaToca($data, '0889b998962b6baddd35266eb5a5c0aa0ce71e48', '6c4b54ef3da28a144e82c5631b6160840c78d571');

      if (is_soap_fault($responseTocas)) {
         throw new Exception("SOAP Fault: (faultcode:" . $responseTocas->faultcode . ", faultstring: " . $responseTocas->faultstring . ")");
      }

      $responseTocasTMP = json_decode($responseTocas, true);


      return $responseTocas;
   }

   public function consultarBandejas($data) {
      $data = json_encode($data);
//      var_dump($data);
      error_log("HOLA ELECTRONICO");
      ini_set("default_socket_timeout", 200);
      ini_set("soap.wsdl_cache_enabled", "0");


      $toca = new SoapClient($this->host . "servidor/tocas/TocasScramble.wsdl");
//      $toca = new SoapClient("http://localhost/electronicoResolucionesSVN/webservice/servidor/tocas/TocasScramble.wsdl");
//      var_dump($this->host . "servidor/tocas/TocasScramble.wsdl");

      $responseTocas = $toca->consultaTocaBandejas($data, '0889b998962b6baddd35266eb5a5c0aa0ce71e48', '6c4b54ef3da28a144e82c5631b6160840c78d571');
//      var_dump($responseTocas);
      if (is_soap_fault($responseTocas)) {
         throw new Exception("SOAP Fault: (faultcode:" . $responseTocas->faultcode . ", faultstring: " . $responseTocas->faultstring . ")");
      }

      $responseTocasTMP = json_decode($responseTocas, true);

      return $responseTocas;
   }

}

?>
