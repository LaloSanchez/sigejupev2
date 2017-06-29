<?php

include_once(dirname(__FILE__) . "/../../../controller/imagenes/ImagenesController.Class.php");

class ImagenesServer {

    public function selectRuta($idCarpetaJudicial = 0, $idActuacion = 0, $fojas = 1, $u, $p) {
        if ($this->isValid(sha1($u), sha1($p))) {
            $imagenesController = new ImagenesController();
            $ruta = $imagenesController->getRuta($idCarpetaJudicial, $idActuacion, $fojas);
            return $ruta;
        } else {
            $json = new Encode_JSON();
            return utf8_encode($json->convert(array("totalCount" => 1, "data" => array("type" => "Error", "text" => "Usuario y contraseña incorrectos, verifica con informatica"))));
        }
    }

    public function selectAdjunto($adjunto = "N", $ruta = "", $u, $p) {
        if ($this->isValid(sha1($u), sha1($p))) {
            $imagenesController = new ImagenesController();
            $ruta = $imagenesController->setUpdateRuta($ruta,$adjunto);
            return $ruta;
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

//$imagenesServer = new ImagenesServer();
//echo $imagenesServer->getRutas(36199, 0, 10, "3lectronic0_Poder2014", "2014Poder_3lectronic0");
//echo $imagenesServer->setAdjunto("S","../../../imagenes/toluca/penal/486/2014/causa/7/CAUS7.pdf", "3lectronic0_Poder2014", "2014Poder_3lectronic0");

ini_set("soap.wsdl_cache_enabled", "0");
$server = new SoapServer("ImagenesScramble.wsdl");
$server->setClass("ImagenesServer");
$server->handle();
?>
