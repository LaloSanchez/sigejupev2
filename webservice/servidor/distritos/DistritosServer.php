<?php

include_once(dirname(__FILE__) . "/../../../tribunal/host/Host.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");

if (!defined("ruta")) {
    define("ruta", dirname(__FILE__));
}

class DistritosServer {

    private $host = null;

    public function __construct() {
        $this->host = new Host(ruta . "/../../../tribunal/host/config.xml", "GESTION");
        $this->host = $this->host->getConnect();
    }

    public function selectDistritos($u, $p) {
        if ($this->isValid(sha1($u), sha1($p))) {
            ini_set("default_socket_timeout", 200);
            ini_set("soap.wsdl_cache_enabled", "0");
            $distrito = new SoapClient($this->host . "controller/distritos/DistritosServer.php?wsdl");
            $distrito = $distrito->selectDistritos("", "", "", '3a332bac303f6e9536b36731090f66800abee04c', 'cf3387f0417a09352af09b2926e3e38522bef9f5');
            return $distrito;
        } else {
            $json = new Encode_JSON();
            return utf8_encode($json->convert(array("totalCount" => 1, "data" => array("type" => "Error", "text" => "Usuario y contraseña incorrectos, verifica con informatica"))));
        }
    }

    private function isValid($user = "", $password = "") {
        $valido = false;
        if (is_dir("../" . $user) == true) {
            if (is_file("../" . $user . "/" . $password . ".pwsd") == true) {
                $valido = true;
            } else {
                $valido = false;
            }
        } else {
            $valido = false;
        }
        return $valido;
    }

}
//
//$DistritosCliente = new DistritosCliente();
//echo $DistritosCliente->getDistritos("3lectronic0_Poder2014", "2014Poder_3lectronic0");
ini_set("soap.wsdl_cache_enabled", "0");
$server = new SoapServer("DistritosServerScramble.wsdl");
$server->setClass("DistritosServer");
$server->handle();
?>