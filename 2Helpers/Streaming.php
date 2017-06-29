<?php

class Streaming {

    public function codecStreaming($uuidAudiencia, $uuidvideoAudiencia, $pathVideo) {
        require_once(dirname(__FILE__) . "./CodecStreaming.php");
//        if ($this->isValid(sha1($u), sha1($p))) {   
        $tmp = array();
        $uuidAudiencia = (int) $uuidAudiencia;
        if ($uuidAudiencia != '' && ($uuidAudiencia) > 0 && ($pathVideo != '') && ($uuidvideoAudiencia != '')) {
            $streaming = new TranscodeClass($pathVideo, $uuidAudiencia, $uuidvideoAudiencia);
            $tmp = $streaming->transcode();
        } else {
            $tmp['type'] = 'Error';
            $tmp['text'] = 'Ingresa el Identificador de la Audiencia';
        }
        return json_encode($tmp);
//        } else {
//        return json_encode(array('type' => 'Error', 'text' => 'Usuario y Password Incorrectos'));
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

ini_set("soap.wsdl_cache_enabled", "0");
$server = new SoapServer("StreamingScramble.wsdl");
$server->setClass("Streaming");
$server->handle();