<?php

//include_once(dirname(__FILE__) . "/../../../controller/arbol/ArbolCentralController.Class.php");
include_once '../../../controller/arbol/ArbolCentralesController.php';

class ArbolCentralServer {

    public function selectArbol($json, $u, $p) {
//        if ($this->isValid(sha1($u), sha1($p))) {
        $arbolCentralController = new ArbolCentralesController();

        if ($json != "") {
            $json = json_decode($json);
        }

        $param = array(
            "numero" => $json->numero,
            "anio" => $json->anio,
            "idJuzgado" => $json->idJuzgado,
            "cveMateria" => $json->cveMateria,
            "cveTipo" => $json->cveTipo,
            "cveInstancia" => $json->cveInstancia,
            "idCarpeta" => $json->idCarpeta
        );
                
        $ruta = $arbolCentralController->getHojasCronologico($param);
        return $ruta;
//        } else {
//            $json = new Encode_JSON();
//            return utf8_encode($json->convert(array("totalCount" => 1, "data" => array("type" => "Error", "text" => "Usuario y contraseña incorrectos, verifica con informatica"))));
//        }
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
$json = '{
    "numero": "1",
    "anio": "2015",
    "idJuzgado": "10087",
    "cveMateria": "4",
    "cveTipo": "1",
    "cveInstancia": "1",
    "idCarpeta": "0"
}';
$ArbolCentralServer = new ArbolCentralServer();
$rs = $ArbolCentralServer->selectArbol($json, $u, $p);
var_dump($rs);


//ini_set("soap.wsdl_cache_enabled", "0");
//$server = new SoapServer("ArbolCentralScramble.wsdl");
//$server->setClass("ArbolCentralServer");
//$server->handle();
?>
