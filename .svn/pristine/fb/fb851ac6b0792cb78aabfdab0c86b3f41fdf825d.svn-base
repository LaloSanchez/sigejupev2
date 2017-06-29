<?php

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresimputadoscarpetas/DefensoresimputadoscarpetasDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/defensoresimputadoscarpetas/DefensoresimputadoscarpetasController.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoraws/BitacorawsDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoraws/BitacorawsDAO.Class.php");

date_default_timezone_set('America/Mexico_City');

class DefensoresApelantesServer {

    public function respuestaDefensorPublico($json, $u = '', $p = '') {
        $param = "";
        if ($json != '' && $this->isJSON($json)) {
            if ($this->isValid(sha1($u), sha1($p))) {
                $DefensoresimputadoscarpetasController = new DefensoresimputadoscarpetasController();
                $param .= $DefensoresimputadoscarpetasController->AsignacionWebService($json);
            } else {
                $param .= '{"estatus":"Incorrecto",';
                $param .= '"mensaje":"El usuario y/o password son incorrectos."}';
            }
        } else {
            $param .= '{"estatus":"Incorrecto",';
            $param .= '"mensaje":"El parametro de entrada no es un json valido."}';
        }
        
        
        $bitacoraWsDto = new BitacorawsDTO();
        $BitacoraWsRespDto = new BitacorawsDTO();
        $bitacoraWsDao = new BitacorawsDAO();
        $fechaRegistro = date("Y-m-d H:i:s");
        $bitacoraWsDto->setCveAccionws(20);
        $bitacoraWsDto->setObservacionesOrigen($json);
        json_decode($param);
        //var_dump($textError);
        if (json_last_error() == JSON_ERROR_SYNTAX) {
            $bitacoraWsDto->setDescEstatusBitacoraws("Error. Respuesta invalida");
            $bitacoraWsDto->setObservacionesDestino(base64_encode($param));
            $bitacoraWsDto->setHrefOrigen("SOLICITUD A DEFENSORIA DE OFICIO REGRESO ALGO DIFERENTE A UN JSON");
        } else {
            $bitacoraWsDto->setDescEstatusBitacoraws("respuesta valida");
            $bitacoraWsDto->setObservacionesDestino($param);
            $bitacoraWsDto->setHrefOrigen("SOLICITUD A DEFENSORIA DE OFICIO REGRESO UN JSON VALIDO");
        }
        $bitacoraWsDto->setFechaRegistro($fechaRegistro);
        $rsBitacoraWsDto = $bitacoraWsDao->insertBitacoraws($bitacoraWsDto);
        return $param;
    }

    public function respuestaDefensorEspecializdo($json, $u = '', $p = '') {
        $param = "";
        if ($json != '' && $this->isJSON($json)) {
            if ($this->isValid(sha1($u), sha1($p))) {
                $DefensoresimputadoscarpetasController = new DefensoresimputadoscarpetasController();
                $param .= $DefensoresimputadoscarpetasController->AsignacionWebService($json);
            } else {
                $param .= '{"estatus":"Incorrecto",';
                $param .= '"mensaje":"El usuario y/o password son incorrectos."}';
            }
        } else {
            $param .= '{"estatus":"Incorrecto",';
            $param .= '"mensaje":"El parametro de entrada no es un json valido."}';
        }
        $bitacoraWsDto = new BitacorawsDTO();
        $BitacoraWsRespDto = new BitacorawsDTO();
        $bitacoraWsDao = new BitacorawsDAO();
        $fechaRegistro = date("Y-m-d H:i:s");
        $bitacoraWsDto->setCveAccionws(20);
        $bitacoraWsDto->setObservacionesOrigen($json);
        json_decode($param);
        //var_dump($textError);
        if (json_last_error() == JSON_ERROR_SYNTAX) {
            $bitacoraWsDto->setDescEstatusBitacoraws("Error. Respuesta invalida");
            $bitacoraWsDto->setObservacionesDestino(base64_encode($param));
            $bitacoraWsDto->setHrefOrigen("SOLICITUD A DEFENSORIA DE OFICIO REGRESO ALGO DIFERENTE A UN JSON");
        } else {
            $bitacoraWsDto->setDescEstatusBitacoraws("respuesta valida");
            $bitacoraWsDto->setObservacionesDestino($param);
            $bitacoraWsDto->setHrefOrigen("SOLICITUD A DEFENSORIA DE OFICIO REGRESO UN JSON VALIDO");
        }
        $bitacoraWsDto->setFechaRegistro($fechaRegistro);
        $rsBitacoraWsDto = $bitacoraWsDao->insertBitacoraws($bitacoraWsDto);
        return $param;
    }

    private function isValid($user = "", $password = "") {
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

    private function isJSON($string) {
        json_decode($string);

        return (json_last_error() == JSON_ERROR_NONE);
    }

    private function fechaNormal($fecha) {
        list($year, $mes, $dia) = explode("-", $fecha);

        return $dia . "/" . $mes . "/" . $year;
    }

    private function fechaHoraMysql($fechaHora) {
        list($fecha, $hora) = explode("/", $fechaHora);
        list($dia, $mes, $year) = explode("/", $fecha);
        return $dia . "/" . $mes . "/" . $year;
    }

}

//$u = "3lectronic0_Poder2014";
//$p = "2014Poder_3lectronic0";
//$json = '{
//	"idReferencia": "44060",
//	"nombreDefensor": "MOISES",
//	"paternoDefensor": "LIMA",
//	"maternoDefensor": "VALDEZ",
//	"emailDefensor": "mlv@pjedomex.gob.mx",
//	"celularDefensor": "7225874512",
//	"folioSolicitud": "EVOMATIK/SOFT/18/2016",
//	"estatus": "AUTORIZADO"
//}';
//$DefensoresApelantesServer = new DefensoresApelantesServer();
//$DefensoresApelantesServer = $DefensoresApelantesServer->respuestaDefensorEspecializdo($json, $u, $p);
//echo($DefensoresApelantesServer);


ini_set("soap.wsdl_cache_enabled", "0");
$server = new SoapServer("DefensoresApelantesScramble.wsdl");
$server->setClass("DefensoresApelantesServer");
$server->handle();
