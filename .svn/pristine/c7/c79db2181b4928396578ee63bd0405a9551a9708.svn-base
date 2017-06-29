<?php

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresimputadossolicitudes/DefensoresimputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresofendidossolicitudes/DefensoresofendidossolicitudesDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/defensoresimputadossolicitudes/DefensoresimputadossolicitudesController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/defensoresofendidossolicitudes/DefensoresofendidossolicitudesController.Class.php");

####Defensores para apelacion
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresimputadoscarpetas/DefensoresimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/defensoresimputadoscarpetas/DefensoresimputadoscarpetasController.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoraws/BitacorawsDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoraws/BitacorawsDAO.Class.php");




date_default_timezone_set('America/Mexico_City');

class DefensoresServer {

    public function respuestaDefensorPublico($json, $u = '', $p = '') {
        $param = "";
        if ($json != '' && $this->isJSON($json)) {
            if ($this->isValid(sha1($u), sha1($p))) {
                $data = json_decode($json, true);
                if ($data["tipo"] == "apelacion") {
                    $DefensoresimputadoscarpetasController = new DefensoresimputadoscarpetasController();
                    $param .= $DefensoresimputadoscarpetasController->AsignacionWebService($json);
                } else {
                    $DefensoresimputadossolicitudesController = new DefensoresimputadossolicitudesController();
                    $param .= $DefensoresimputadossolicitudesController->AsignacionWebService($json);
                }
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
        $bitacoraWsDto->setCveAccionws(22);
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
                $DefensoresofendidossolicitudesController = new DefensoresofendidossolicitudesController();
                $param .= $DefensoresofendidossolicitudesController->AsignacionWebService($json);
            } else {
                $param .= '{"estatus":"Incorrecto",';
                $param .= '"mensaje":"El usuario y/o password son incorrectos."}';
            }
        } else {
            $param .= '{"estatus":"Incorrecto",';
            $param .= '"mensaje":"El parametro de entrada no es un json valido."}';
        }
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
//	"idReferencia": "162052",
//	"tipo": "apelacion",
//	"nombreDefensor": "Fernanda Isabel",
//	"paternoDefensor": "Luna",
//	"maternoDefensor": "Ruiz",
//	"emailDefensor": "f.ruiz@anyplace.com",
//	"celularDefensor": "",
//	"folioSolicitud": "IDP/EDOMEX/DRT/2/2016",
//	"estatus": "AUTORIZADO"
//}';
//$DefensoresServer = new DefensoresServer();
//$DefensoresServer = $DefensoresServer->respuestaDefensorPublico($json, $u, $p);
//echo($DefensoresServer);


ini_set("soap.wsdl_cache_enabled", "0");
$server = new SoapServer("DefensoresScramble.wsdl");
$server->setClass("DefensoresServer");
$server->handle();
