<?php
date_default_timezone_set('America/Mexico_City');
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/impofedelsolicitudes/ImpofedelsolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/impofedelsolicitudes/ImpofedelsolicitudesController.Class.php");


include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoraws/BitacorawsDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoraws/BitacorawsDAO.Class.php");

class RelacionServer {

    public function insertaRelacion($json, $u, $p) {
        if ($this->isValid(sha1($u), sha1($p))) {
            $jsonDecode = json_decode($json);


            $bitacoraWsDto = new BitacorawsDTO();
            $BitacoraWsRespDto = new BitacorawsDTO();
            $bitacoraWsDao = new BitacorawsDAO();

            $fechaRegistro = date("Y-m-d H:i:s");


            $bitacoraWsDto->setCveAccionws(6); //INSERTO RELACION SOLICITUD AUDIENCIA
            $bitacoraWsDto->setObservacionesOrigen($json);
            $bitacoraWsDto->setHrefOrigen("INSERTO RELACION SOLICITUD AUDIENCIA");
            $bitacoraWsDto->setFechaRegistro($fechaRegistro);
            $rsBitacoraWsDto = $bitacoraWsDao->insertBitacoraws($bitacoraWsDto);


            $impofedelsolicitudesController = new ImpofedelsolicitudesController();
            foreach ($jsonDecode->impofedelsolicitudes as $value) {
                $impofedelsolicitudesDto = new ImpofedelsolicitudesDTO();
                $impofedelsolicitudesDto->setIdSolicitudAudiencia($value->idSolicitudAudiencia);
                $impofedelsolicitudesDto->setIdImputadoSolicitud($value->idImputadoSolicitud);
                $impofedelsolicitudesDto->setIdOfendidoSolicitud($value->idOfendidoSolicitud);
                $impofedelsolicitudesDto->setIdDelitoSolicitud($value->idDelitoSolicitud);
                $impofedelsolicitudesDto->setCveModalidad($value->cveModalidad);
                $impofedelsolicitudesDto->setCveComision($value->cveComision);
                $impofedelsolicitudesDto->setCveConcurso($value->cveConcurso);
                $impofedelsolicitudesDto->setCveClasificacionDelitoOrden($value->cveClasificacionDelitoOrden);
                $impofedelsolicitudesDto->setCveElementoComision($value->cveElementoComision);
                $impofedelsolicitudesDto->setCveClasificacionDelito($value->cveClasificacionDelito);
                $impofedelsolicitudesDto->setCveFormaAccion($value->cveFormaAccion);
                $impofedelsolicitudesDto->setCveConsumacion($value->cveConsumacion);
                $impofedelsolicitudesDto->setCveMunicipio($value->cveMunicipio);
                $impofedelsolicitudesDto->setCveEntidad($value->cveElementoComision);
                $impofedelsolicitudesDto->setCveGradoParticipacion($value->cveGradoParticipacion);
                $impofedelsolicitudesDto->setCveRelacionImpOfe($value->cveRelacionImpOfe);
                $impofedelsolicitudesDto->setCveTerminacion($value->CveTerminacion);
                $impofedelsolicitudesDto->setActivo($value->activo);
                $impofedelsolicitudesDto->setFechaDelito($value->fechaDelito);
                $impofedelsolicitudesDto->setDireccion($value->direccion);
                $impofedelsolicitudesDto->setColonia($value->colonia);
                $impofedelsolicitudesDto->setNumInterior($value->numInterior);
                $impofedelsolicitudesDto->setNumExterior($value->numExterior);
                $impofedelsolicitudesDto->setCp($value->cp);
                $resultados = $impofedelsolicitudesController->guardaImpOfeDel($impofedelsolicitudesDto, "", false);
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



            return $resultado;
        } else {
            $mensajes["mensajes"][] = array("status" => "error", "mensaje" => "Usuario y contraseña incorrectos, verifica con informatica");
            $resultado = json_encode($mensajes);
            return $resultado;
        }
    }

    public function actualizaRelacion($json, $u, $p) {
        if ($this->isValid(sha1($u), sha1($p))) {
            $jsonDecode = json_decode($json);
            $impofedelsolicitudesController = new ImpofedelsolicitudesController();
            foreach ($jsonDecode->impofedelsolicitudes as $value) {
                $impofedelsolicitudesDto = new ImpofedelsolicitudesDTO();
                $impofedelsolicitudesDto->setIdImpOfeDelSolicitud($value->idImpOfeDelSolicitud);
                $impofedelsolicitudesDto->setIdSolicitudAudiencia($value->idSolicitudAudiencia);
                $impofedelsolicitudesDto->setIdImputadoSolicitud($value->idImputadoSolicitud);
                $impofedelsolicitudesDto->setIdOfendidoSolicitud($value->idOfendidoSolicitud);
                $impofedelsolicitudesDto->setIdDelitoSolicitud($value->idDelitoSolicitud);
                $impofedelsolicitudesDto->setCveModalidad($value->cveModalidad);
                $impofedelsolicitudesDto->setCveComision($value->cveComision);
                $impofedelsolicitudesDto->setCveConcurso($value->cveConcurso);
                $impofedelsolicitudesDto->setCveClasificacionDelitoOrden($value->cveClasificacionDelitoOrden);
                $impofedelsolicitudesDto->setCveElementoComision($value->cveElementoComision);
                $impofedelsolicitudesDto->setCveClasificacionDelito($value->cveClasificacionDelito);
                $impofedelsolicitudesDto->setCveFormaAccion($value->cveFormaAccion);
                $impofedelsolicitudesDto->setCveConsumacion($value->cveConsumacion);
                $impofedelsolicitudesDto->setCveMunicipio($value->cveMunicipio);
                $impofedelsolicitudesDto->setCveEntidad($value->cveElementoComision);
                $impofedelsolicitudesDto->setCveGradoParticipacion($value->cveGradoParticipacion);
                $impofedelsolicitudesDto->setCveRelacionImpOfe($value->cveRelacionImpOfe);
                $impofedelsolicitudesDto->setCveTerminacion($value->CveTerminacion);
                $impofedelsolicitudesDto->setActivo($value->activo);
                $impofedelsolicitudesDto->setFechaDelito($value->fechaDelito);
                $impofedelsolicitudesDto->setDireccion($value->direccion);
                $impofedelsolicitudesDto->setColonia($value->colonia);
                $impofedelsolicitudesDto->setNumInterior($value->numInterior);
                $impofedelsolicitudesDto->setNumExterior($value->numExterior);
                $impofedelsolicitudesDto->setCp($value->cp);
                $resultados = $impofedelsolicitudesController->modificaImpOfeDel($impofedelsolicitudesDto, "", false);
                $resultadosDecode = json_decode($resultados);
                $mensajes["mensajes"][] = (array) $resultadosDecode;
            }
            $resultado = json_encode($mensajes);
            return $resultado;
        } else {
            $mensajes["mensajes"][] = array("status" => "error", "mensaje" => "Usuario y contraseña incorrectos, verifica con informatica");
            $resultado = json_encode($mensajes);
            return $resultado;
        }
    }

    public function borraRelacion($json, $u, $p) {
        if ($this->isValid(sha1($u), sha1($p))) {
            $jsonDecode = json_decode($json);
            $impofedelsolicitudesController = new ImpofedelsolicitudesController();
            foreach ($jsonDecode->impofedelsolicitudes as $value) {
                $impofedelsolicitudesDto = new ImpofedelsolicitudesDTO();
                $impofedelsolicitudesDto->setIdImpOfeDelSolicitud($value->idImpOfeDelSolicitud);
                $resultados = $impofedelsolicitudesController->eliminaImpOfeDel($impofedelsolicitudesDto, "", false);
                $resultadosDecode = json_decode($resultados);
                $mensajes["mensajes"][] = (array) $resultadosDecode;
            }
            $resultado = json_encode($mensajes);
            return $resultado;
        } else {
            $mensajes["mensajes"][] = array("status" => "error", "mensaje" => "Usuario y contraseña incorrectos, verifica con informatica");
            $resultado = json_encode($mensajes);
            return $resultado;
        }
    }

    public function selectRelacion($json, $u, $p) {
        if ($this->isValid(sha1($u), sha1($p))) {
            $jsonDecode = json_decode($json);
            $impofedelsolicitudesController = new ImpofedelsolicitudesController();
            foreach ($jsonDecode->impofedelsolicitudes as $value) {
                $impofedelsolicitudesDto = new ImpofedelsolicitudesDTO();
                $impofedelsolicitudesDto->setIdSolicitudAudiencia($value->idSolicitudAudiencia);
                $resultados = $impofedelsolicitudesController->selectImpofedelsolicitudesrelacion($impofedelsolicitudesDto);
                foreach (json_decode($resultados) as $value2) {
                    $resultadoConsulta[] = $value2;
                }
                if ($resultados != "") {
                    $mensajes["mensajes"][] = array("status" => "ok", "data" => $resultadoConsulta);
                } else {
                    $mensajes["mensajes"][] = array("status" => "error", "msj" => "No se encontraron resultados");
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
$server = new SoapServer("RelacionScramble.wsdl");
$server->setClass("RelacionServer");
$server->handle();
?>
