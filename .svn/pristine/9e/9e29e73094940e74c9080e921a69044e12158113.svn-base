<?php

include_once(dirname(__FILE__) . "/../../../tribunal/host/Host.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

if (!defined("ruta")) {
    define("ruta", dirname(__FILE__));
}

class EdificiosServer {

    private $host = null;

    public function __construct() {
        $this->host = new Host(ruta . "/../../../tribunal/host/config.xml", "GESTION");
        $this->host = $this->host->getConnect();
    }

    public function selectEdificios($cveDistrito, $u, $p) {
        if ($this->isValid(sha1($u), sha1($p))) {
            ini_set("default_socket_timeout", 200);
            ini_set("soap.wsdl_cache_enabled", "0");
            $edificios = new SoapClient($this->host . "controller/edificios/EdificiosServer.php?wsdl");
            $edificios = $edificios->selectEdificios("", "",  "",  "", "",  $cveDistrito,  "",  "", "", "",'3a332bac303f6e9536b36731090f66800abee04c', 'cf3387f0417a09352af09b2926e3e38522bef9f5');
            return $edificios;
        } else {
            $json = new Encode_JSON();
            return utf8_encode($json->convert(array("totalCount" => 1, "data" => array("type" => "Error", "text" => "Usuario y contraseña incorrectos, verifica con informatica $u"))));
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

ini_set("soap.wsdl_cache_enabled", "0");
$server = new SoapServer("EdificiosServerScramble.wsdl");
$server->setClass("EdificiosServer");
$server->handle();

//$edificiosServer = new EdificiosServer();
//echo $edificiosServer->selectEdificios("16", "3lectronic0_Poder2014", "2014Poder_3lectronic0");
?>
