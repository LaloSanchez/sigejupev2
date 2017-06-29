<?php
date_default_timezone_set('America/Mexico_City');
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitossolicitudes/DelitossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/delitossolicitudes/DelitossolicitudesController.Class.php");


include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoraws/BitacorawsDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoraws/BitacorawsDAO.Class.php");

class DelitosServer {

    public function insertaDelito($json, $u, $p) {
        if ($this->isValid(sha1($u), sha1($p))) {
            $jsonDecode = json_decode($json, true);
            $delitossolicitudesController = new DelitossolicitudesController();


            $bitacoraWsDto = new BitacorawsDTO();
            $BitacoraWsRespDto = new BitacorawsDTO();
            $bitacoraWsDao = new BitacorawsDAO();

            $fechaRegistro = date("Y-m-d H:i:s");


            $bitacoraWsDto->setCveAccionws(5); //INSERTO DELITO SOLICITUD DE AUDIENCIA
            $bitacoraWsDto->setObservacionesOrigen($json);
            $bitacoraWsDto->setHrefOrigen("INSERTO DELITO SOLICITUD DE AUDIENCIA");
            $bitacoraWsDto->setFechaRegistro($fechaRegistro);
            $rsBitacoraWsDto = $bitacoraWsDao->insertBitacoraws($bitacoraWsDto);


            foreach ($jsonDecode as $value) {
                $delitossolicitudesDto = new DelitossolicitudesDTO();
                $delitossolicitudesDto->setIdSolicitudAudiencia($value["idSolicitudAudiencia"]);
                $delitossolicitudesDto->setCveDelito($value["cveDelito"]);
                $delitossolicitudesDto->setActivo($value['activo']);
                $resultados = $delitossolicitudesController->insertDelitossolicitudes($delitossolicitudesDto);
                $resultadosDecode = json_decode($resultados);
                $mensajes["mensajes"][] = (array) $resultadosDecode;
            }

            $resultado = json_encode($mensajes);
            if ($rsBitacoraWsDto != "") {
                $BitacoraWsRespDto->setIdBitacoraws($rsBitacoraWsDto[0]->getIdBitacoraws());
                $BitacoraWsRespDto->setDescEstatusBitacoraws("");
                $BitacoraWsRespDto->setObservacionesDestino(json_encode($resultado));
                $rsRespuestaBitacora = $bitacoraWsDao->updateBitacoraws($BitacoraWsRespDto);
            }
        } else {
            $mensajes["mensajes"][] = array("status" => "error", "mensaje" => "Usuario y contraseña incorrectos, verifica con informatica");
            $resultado = json_encode($mensajes);
        }
        return $resultado;
    }

    public function actualizaDelito($json, $u, $p) {
        if ($this->isValid(sha1($u), sha1($p))) {
            $jsonDecode = json_decode($json);
            $delitossolicitudesController = new DelitossolicitudesController();
            foreach ($jsonDecode->delitos as $value) {
                $delitossolicitudesDto = new DelitossolicitudesDTO();
                $delitossolicitudesDto->setIdDelitoSolicitud($value->idDelitoSolicitud);
                $delitossolicitudesDto->setIdSolicitudAudiencia($value->idSolicitudAudiencia);
                $delitossolicitudesDto->setCveDelito($value->cveDelito);
                $delitossolicitudesDto->setActivo($value->activo);
                $resultados = $delitossolicitudesController->updateDelitossolicitudes($delitossolicitudesDto);
                $resultadosDecode = json_decode($resultados);
                $mensajes["mensajes"][] = (array) $resultados;
            }
            $resultado = json_encode($mensajes);
            return $resultado;
        } else {
            $mensajes["mensajes"][] = array("status" => "error", "mensaje" => "Usuario y contraseña incorrectos, verifica con informatica");
            $resultado = json_encode($mensajes);
            return $resultado;
        }
    }

    public function borraDelito($json, $u, $p) {
        if ($this->isValid(sha1($u), sha1($p))) {
            $jsonDecode = json_decode($json);
            $delitossolicitudesController = new DelitossolicitudesController();
            foreach ($jsonDecode->delitos as $value) {
                $delitossolicitudesDto = new DelitossolicitudesDTO();
                $delitossolicitudesDto->setIdDelitoSolicitud($value->idDelitoSolicitud);
                $resultados = $delitossolicitudesController->eliminarDelito($delitossolicitudesDto);
            }
            return $resultados;
        } else {
            $mensajes["mensajes"][] = array("status" => "error", "mensaje" => "Usuario y contraseña incorrectos, verifica con informatica");
            $resultado = json_encode($mensajes);
            return $resultado;
        }
    }

    public function selectDelito($json, $u, $p) {
        if ($this->isValid(sha1($u), sha1($p))) {
            $jsonDecode = json_decode($json);
            $delitossolicitudesController = new DelitossolicitudesController();
            foreach ($jsonDecode->delitos as $value) {
                $delitossolicitudesDto = new DelitossolicitudesDTO();
                $delitossolicitudesDto->setIdSolicitudAudiencia($value->idSolicitudAudiencia);
                $resultados = $delitossolicitudesController->selectDelitosInner($delitossolicitudesDto);
                foreach ($resultados as $value2) {
                    $resultadoConsulta[] = $value2->toString();
                }
                if ($resultadoConsulta != "") {
                    $mensajes["mensajes"][] = array("status" => "ok", "data" => $resultadoConsulta);
                } else {
                    $mensajes["mensajes"][] = array("status" => "error", "msj" => "No se encontraron resultados.");
                }
            }
            $resultado = json_encode($mensajes);
            return $resultado;
        } else {
            $mensajes["mensajes"][] = array("status" => "error", "mensaje" => "Usuario y contraseña incorrectos, verifica con informatica");
            $resultado = json_encode($mensajes);
            return $resultado;
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
$server = new SoapServer("DelitosScramble.wsdl");
$server->setClass("DelitosServer");
$server->handle();

//$resouesta = new DelitosServer();
//
//$u = '3lectronic0_Poder2014';
//$p = '2014Poder_3lectronic0';
//
//$jsonlint = '[{
//	"cveDelito": "6",
//	"activo": "S",
//	"idSolicitudAudiencia": "2161"
//}, {
//	"cveDelito": "5",
//	"activo": "S",
//	"idSolicitudAudiencia": "2161"
//}]';
//
//
//$respuesta = $resouesta->insertaDelito($jsonlint, $u, $p);
?>
