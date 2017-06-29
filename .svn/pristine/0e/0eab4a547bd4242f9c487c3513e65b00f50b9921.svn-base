<?php

/*
 * ************************************************
 * FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
 * Copyright 2009-2015 FACADES
 * Licensed under the MIT license 
 * Autor: *
 * Departamento de Desarrollo de Software
 * Subdireccion de Ingenieria de Software
 * Direccion de Teclogias de Informacion
 * Poder Judicial del Estado de Mexico
 * ************************************************
 */

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/impofedelsolicitudes/ImpofedelsolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/impofedelsolicitudes/ImpofedelsolicitudesController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class ImpofedelsolicitudesFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarImpofedelsolicitudes($ImpofedelsolicitudesDto) {
        $ImpofedelsolicitudesDto->setidImpOfeDelSolicitud(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelsolicitudesDto->getidImpOfeDelSolicitud(), "utf8") : strtoupper($ImpofedelsolicitudesDto->getidImpOfeDelSolicitud()))))));
        if ($this->esFecha($ImpofedelsolicitudesDto->getidImpOfeDelSolicitud())) {
            $ImpofedelsolicitudesDto->setidImpOfeDelSolicitud($this->fechaMysql($ImpofedelsolicitudesDto->getidImpOfeDelSolicitud()));
        }
        $ImpofedelsolicitudesDto->setidSolicitudAudiencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelsolicitudesDto->getidSolicitudAudiencia(), "utf8") : strtoupper($ImpofedelsolicitudesDto->getidSolicitudAudiencia()))))));
        if ($this->esFecha($ImpofedelsolicitudesDto->getidSolicitudAudiencia())) {
            $ImpofedelsolicitudesDto->setidSolicitudAudiencia($this->fechaMysql($ImpofedelsolicitudesDto->getidSolicitudAudiencia()));
        }
        $ImpofedelsolicitudesDto->setidImputadoSolicitud(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelsolicitudesDto->getidImputadoSolicitud(), "utf8") : strtoupper($ImpofedelsolicitudesDto->getidImputadoSolicitud()))))));
        if ($this->esFecha($ImpofedelsolicitudesDto->getidImputadoSolicitud())) {
            $ImpofedelsolicitudesDto->setidImputadoSolicitud($this->fechaMysql($ImpofedelsolicitudesDto->getidImputadoSolicitud()));
        }
        $ImpofedelsolicitudesDto->setidOfendidoSolicitud(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelsolicitudesDto->getidOfendidoSolicitud(), "utf8") : strtoupper($ImpofedelsolicitudesDto->getidOfendidoSolicitud()))))));
        if ($this->esFecha($ImpofedelsolicitudesDto->getidOfendidoSolicitud())) {
            $ImpofedelsolicitudesDto->setidOfendidoSolicitud($this->fechaMysql($ImpofedelsolicitudesDto->getidOfendidoSolicitud()));
        }
        $ImpofedelsolicitudesDto->setidDelitoSolicitud(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelsolicitudesDto->getidDelitoSolicitud(), "utf8") : strtoupper($ImpofedelsolicitudesDto->getidDelitoSolicitud()))))));
        if ($this->esFecha($ImpofedelsolicitudesDto->getidDelitoSolicitud())) {
            $ImpofedelsolicitudesDto->setidDelitoSolicitud($this->fechaMysql($ImpofedelsolicitudesDto->getidDelitoSolicitud()));
        }
        $ImpofedelsolicitudesDto->setcveModalidad(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelsolicitudesDto->getcveModalidad(), "utf8") : strtoupper($ImpofedelsolicitudesDto->getcveModalidad()))))));
        if ($this->esFecha($ImpofedelsolicitudesDto->getcveModalidad())) {
            $ImpofedelsolicitudesDto->setcveModalidad($this->fechaMysql($ImpofedelsolicitudesDto->getcveModalidad()));
        }
        $ImpofedelsolicitudesDto->setcveComision(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelsolicitudesDto->getcveComision(), "utf8") : strtoupper($ImpofedelsolicitudesDto->getcveComision()))))));
        if ($this->esFecha($ImpofedelsolicitudesDto->getcveComision())) {
            $ImpofedelsolicitudesDto->setcveComision($this->fechaMysql($ImpofedelsolicitudesDto->getcveComision()));
        }
        $ImpofedelsolicitudesDto->setcveConcurso(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelsolicitudesDto->getcveConcurso(), "utf8") : strtoupper($ImpofedelsolicitudesDto->getcveConcurso()))))));
        if ($this->esFecha($ImpofedelsolicitudesDto->getcveConcurso())) {
            $ImpofedelsolicitudesDto->setcveConcurso($this->fechaMysql($ImpofedelsolicitudesDto->getcveConcurso()));
        }
        $ImpofedelsolicitudesDto->setcveClasificacionDelitoOrden(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelsolicitudesDto->getcveClasificacionDelitoOrden(), "utf8") : strtoupper($ImpofedelsolicitudesDto->getcveClasificacionDelitoOrden()))))));
        if ($this->esFecha($ImpofedelsolicitudesDto->getcveClasificacionDelitoOrden())) {
            $ImpofedelsolicitudesDto->setcveClasificacionDelitoOrden($this->fechaMysql($ImpofedelsolicitudesDto->getcveClasificacionDelitoOrden()));
        }
        $ImpofedelsolicitudesDto->setcveElementoComision(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelsolicitudesDto->getcveElementoComision(), "utf8") : strtoupper($ImpofedelsolicitudesDto->getcveElementoComision()))))));
        if ($this->esFecha($ImpofedelsolicitudesDto->getcveElementoComision())) {
            $ImpofedelsolicitudesDto->setcveElementoComision($this->fechaMysql($ImpofedelsolicitudesDto->getcveElementoComision()));
        }
        $ImpofedelsolicitudesDto->setcveClasificacionDelito(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelsolicitudesDto->getcveClasificacionDelito(), "utf8") : strtoupper($ImpofedelsolicitudesDto->getcveClasificacionDelito()))))));
        if ($this->esFecha($ImpofedelsolicitudesDto->getcveClasificacionDelito())) {
            $ImpofedelsolicitudesDto->setcveClasificacionDelito($this->fechaMysql($ImpofedelsolicitudesDto->getcveClasificacionDelito()));
        }
        $ImpofedelsolicitudesDto->setcveFormaAccion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelsolicitudesDto->getcveFormaAccion(), "utf8") : strtoupper($ImpofedelsolicitudesDto->getcveFormaAccion()))))));
        if ($this->esFecha($ImpofedelsolicitudesDto->getcveFormaAccion())) {
            $ImpofedelsolicitudesDto->setcveFormaAccion($this->fechaMysql($ImpofedelsolicitudesDto->getcveFormaAccion()));
        }
        $ImpofedelsolicitudesDto->setcveConsumacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelsolicitudesDto->getcveConsumacion(), "utf8") : strtoupper($ImpofedelsolicitudesDto->getcveConsumacion()))))));
        if ($this->esFecha($ImpofedelsolicitudesDto->getcveConsumacion())) {
            $ImpofedelsolicitudesDto->setcveConsumacion($this->fechaMysql($ImpofedelsolicitudesDto->getcveConsumacion()));
        }
        $ImpofedelsolicitudesDto->setcveMunicipio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelsolicitudesDto->getcveMunicipio(), "utf8") : strtoupper($ImpofedelsolicitudesDto->getcveMunicipio()))))));
        if ($this->esFecha($ImpofedelsolicitudesDto->getcveMunicipio())) {
            $ImpofedelsolicitudesDto->setcveMunicipio($this->fechaMysql($ImpofedelsolicitudesDto->getcveMunicipio()));
        }
        $ImpofedelsolicitudesDto->setcveEntidad(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelsolicitudesDto->getcveEntidad(), "utf8") : strtoupper($ImpofedelsolicitudesDto->getcveEntidad()))))));
        if ($this->esFecha($ImpofedelsolicitudesDto->getcveEntidad())) {
            $ImpofedelsolicitudesDto->setcveEntidad($this->fechaMysql($ImpofedelsolicitudesDto->getcveEntidad()));
        }
        $ImpofedelsolicitudesDto->setcveGradoParticipacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelsolicitudesDto->getcveGradoParticipacion(), "utf8") : strtoupper($ImpofedelsolicitudesDto->getcveGradoParticipacion()))))));
        if ($this->esFecha($ImpofedelsolicitudesDto->getcveGradoParticipacion())) {
            $ImpofedelsolicitudesDto->setcveGradoParticipacion($this->fechaMysql($ImpofedelsolicitudesDto->getcveGradoParticipacion()));
        }
        $ImpofedelsolicitudesDto->setcveRelacionImpOfe(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelsolicitudesDto->getcveRelacionImpOfe(), "utf8") : strtoupper($ImpofedelsolicitudesDto->getcveRelacionImpOfe()))))));
        if ($this->esFecha($ImpofedelsolicitudesDto->getcveRelacionImpOfe())) {
            $ImpofedelsolicitudesDto->setcveRelacionImpOfe($this->fechaMysql($ImpofedelsolicitudesDto->getcveRelacionImpOfe()));
        }
        $ImpofedelsolicitudesDto->setcveTerminacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelsolicitudesDto->getcveTerminacion(), "utf8") : strtoupper($ImpofedelsolicitudesDto->getcveTerminacion()))))));
        if ($this->esFecha($ImpofedelsolicitudesDto->getcveTerminacion())) {
            $ImpofedelsolicitudesDto->setcveTerminacion($this->fechaMysql($ImpofedelsolicitudesDto->getcveTerminacion()));
        }
        $ImpofedelsolicitudesDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelsolicitudesDto->getactivo(), "utf8") : strtoupper($ImpofedelsolicitudesDto->getactivo()))))));
        if ($this->esFecha($ImpofedelsolicitudesDto->getactivo())) {
            $ImpofedelsolicitudesDto->setactivo($this->fechaMysql($ImpofedelsolicitudesDto->getactivo()));
        }
        $ImpofedelsolicitudesDto->setfechaDelito(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelsolicitudesDto->getfechaDelito(), "utf8") : strtoupper($ImpofedelsolicitudesDto->getfechaDelito()))))));
        $ImpofedelsolicitudesDto->setfechaDelito($this->fechaHoraMysql($ImpofedelsolicitudesDto->getfechaDelito()));


        $ImpofedelsolicitudesDto->setdireccion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelsolicitudesDto->getdireccion(), "utf8") : strtoupper($ImpofedelsolicitudesDto->getdireccion()))))));
        if ($this->esFecha($ImpofedelsolicitudesDto->getdireccion())) {
            $ImpofedelsolicitudesDto->setdireccion($this->fechaMysql($ImpofedelsolicitudesDto->getdireccion()));
        }
        $ImpofedelsolicitudesDto->setcolonia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelsolicitudesDto->getcolonia(), "utf8") : strtoupper($ImpofedelsolicitudesDto->getcolonia()))))));
        if ($this->esFecha($ImpofedelsolicitudesDto->getcolonia())) {
            $ImpofedelsolicitudesDto->setcolonia($this->fechaMysql($ImpofedelsolicitudesDto->getcolonia()));
        }
        $ImpofedelsolicitudesDto->setnumInterior(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelsolicitudesDto->getnumInterior(), "utf8") : strtoupper($ImpofedelsolicitudesDto->getnumInterior()))))));
        if ($this->esFecha($ImpofedelsolicitudesDto->getnumInterior())) {
            $ImpofedelsolicitudesDto->setnumInterior($this->fechaMysql($ImpofedelsolicitudesDto->getnumInterior()));
        }
        $ImpofedelsolicitudesDto->setnumExterior(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelsolicitudesDto->getnumExterior(), "utf8") : strtoupper($ImpofedelsolicitudesDto->getnumExterior()))))));
        if ($this->esFecha($ImpofedelsolicitudesDto->getnumExterior())) {
            $ImpofedelsolicitudesDto->setnumExterior($this->fechaMysql($ImpofedelsolicitudesDto->getnumExterior()));
        }
        $ImpofedelsolicitudesDto->setcp(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelsolicitudesDto->getcp(), "utf8") : strtoupper($ImpofedelsolicitudesDto->getcp()))))));
        if ($this->esFecha($ImpofedelsolicitudesDto->getcp())) {
            $ImpofedelsolicitudesDto->setcp($this->fechaMysql($ImpofedelsolicitudesDto->getcp()));
        }
        return $ImpofedelsolicitudesDto;
    }

    public function selectImpofedelsolicitudes($ImpofedelsolicitudesDto) {
        $ImpofedelsolicitudesDto = $this->validarImpofedelsolicitudes($ImpofedelsolicitudesDto);
        $ImpofedelsolicitudesController = new ImpofedelsolicitudesController();
        $ImpofedelsolicitudesDto = $ImpofedelsolicitudesController->selectImpofedelsolicitudes($ImpofedelsolicitudesDto);
        if ($ImpofedelsolicitudesDto != "") {
            $dtoToJson = new DtoToJson($ImpofedelsolicitudesDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function selectImpofedelsolicitudesrelacion($ImpofedelsolicitudesDto) {
        $ImpofedelsolicitudesDto = $this->validarImpofedelsolicitudes($ImpofedelsolicitudesDto);
        $ImpofedelsolicitudesController = new ImpofedelsolicitudesController();
        $ImpofedelsolicitudesDto = $ImpofedelsolicitudesController->selectImpofedelsolicitudesrelacion($ImpofedelsolicitudesDto);
        if ($ImpofedelsolicitudesDto != "") {
            return $ImpofedelsolicitudesDto;
            //$dtoToJson = new DtoToJson($ImpofedelsolicitudesDto);
            //return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function validaImpofedelsolicitudesrelacion($ImpofedelsolicitudesDto) {
        $ImpofedelsolicitudesDto = $this->validarImpofedelsolicitudes($ImpofedelsolicitudesDto);
        $ImpofedelsolicitudesController = new ImpofedelsolicitudesController();
        $ImpofedelsolicitudesDto = $ImpofedelsolicitudesController->validaImpofedelsolicitudesrelacion($ImpofedelsolicitudesDto);
        if ($ImpofedelsolicitudesDto != "") {
            return $ImpofedelsolicitudesDto;
            //$dtoToJson = new DtoToJson($ImpofedelsolicitudesDto);
            //return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function selectImpofedelsolicitudesrelacionPaso6($ImpofedelsolicitudesDto) {
        $ImpofedelsolicitudesDto = $this->validarImpofedelsolicitudes($ImpofedelsolicitudesDto);
        $ImpofedelsolicitudesController = new ImpofedelsolicitudesController();
        $ImpofedelsolicitudesDto = $ImpofedelsolicitudesController->selectImpofedelsolicitudesrelacionPaso($ImpofedelsolicitudesDto);
      return $ImpofedelsolicitudesDto;
    }

    public function validaSolicitud($ImpofedelsolicitudesDto) {
        $ImpofedelsolicitudesDto = $this->validarImpofedelsolicitudes($ImpofedelsolicitudesDto);
        $ImpofedelsolicitudesController = new ImpofedelsolicitudesController();
        $ImpofedelsolicitudesDto = $ImpofedelsolicitudesController->validaSolicitud($ImpofedelsolicitudesDto);
        if ($ImpofedelsolicitudesDto != "") {
            return $ImpofedelsolicitudesDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertImpofedelsolicitudes($ImpofedelsolicitudesDto) {
        $ImpofedelsolicitudesDto = $this->validarImpofedelsolicitudes($ImpofedelsolicitudesDto);
        $ImpofedelsolicitudesController = new ImpofedelsolicitudesController();
        $ImpofedelsolicitudesDto = $ImpofedelsolicitudesController->insertImpofedelsolicitudes($ImpofedelsolicitudesDto);
        if ($ImpofedelsolicitudesDto != "") {
            $dtoToJson = new DtoToJson($ImpofedelsolicitudesDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function insertImpofedelsolicitudesrelacion($ImpofedelsolicitudesDto) {
        $ImpofedelsolicitudesDto = $this->validarImpofedelsolicitudes($ImpofedelsolicitudesDto);
        $ImpofedelsolicitudesController = new ImpofedelsolicitudesController();
        $ImpofedelsolicitudesDto = $ImpofedelsolicitudesController->insertImpofedelsolicitudesrelacion($ImpofedelsolicitudesDto);
        if ($ImpofedelsolicitudesDto != "") {
            return $ImpofedelsolicitudesDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateImpofedelsolicitudesrelacion($ImpofedelsolicitudesDto) {
        $ImpofedelsolicitudesDto = $this->validarImpofedelsolicitudes($ImpofedelsolicitudesDto);
        $ImpofedelsolicitudesController = new ImpofedelsolicitudesController();
        $ImpofedelsolicitudesDto = $ImpofedelsolicitudesController->updateImpofedelsolicitudesrelacion($ImpofedelsolicitudesDto);
        if ($ImpofedelsolicitudesDto != "") {
            return $ImpofedelsolicitudesDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateImpofedelsolicitudesrelacionbaja($ImpofedelsolicitudesDto) {
        $ImpofedelsolicitudesDto = $this->validarImpofedelsolicitudes($ImpofedelsolicitudesDto);
        $ImpofedelsolicitudesController = new ImpofedelsolicitudesController();
        $ImpofedelsolicitudesDto = $ImpofedelsolicitudesController->updateImpofedelsolicitudesrelacionbaja($ImpofedelsolicitudesDto);
        if ($ImpofedelsolicitudesDto != "") {
            return $ImpofedelsolicitudesDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateImpofedelsolicitudes($ImpofedelsolicitudesDto) {
        $ImpofedelsolicitudesDto = $this->validarImpofedelsolicitudes($ImpofedelsolicitudesDto);
        $ImpofedelsolicitudesController = new ImpofedelsolicitudesController();
        $ImpofedelsolicitudesDto = $ImpofedelsolicitudesController->updateImpofedelsolicitudes($ImpofedelsolicitudesDto);
        if ($ImpofedelsolicitudesDto != "") {
            $dtoToJson = new DtoToJson($ImpofedelsolicitudesDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteImpofedelsolicitudes($ImpofedelsolicitudesDto) {
        $ImpofedelsolicitudesDto = $this->validarImpofedelsolicitudes($ImpofedelsolicitudesDto);
        $ImpofedelsolicitudesController = new ImpofedelsolicitudesController();
        $ImpofedelsolicitudesDto = $ImpofedelsolicitudesController->deleteImpofedelsolicitudes($ImpofedelsolicitudesDto);
        if ($ImpofedelsolicitudesDto == true) {
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
    }

    public function guardaImpOfeDel($ImpofedelsolicitudesDto) {
        $ImpofedelsolicitudesDto = $this->validarImpofedelsolicitudes($ImpofedelsolicitudesDto);
        $ImpofedelsolicitudesController = new ImpofedelsolicitudesController();
        $rs = $ImpofedelsolicitudesController->guardaImpOfeDel($ImpofedelsolicitudesDto);
        return $rs;
    }

    public function modificaImpOfeDel($ImpofedelsolicitudesDto) {
        $ImpofedelsolicitudesDto = $this->validarImpofedelsolicitudes($ImpofedelsolicitudesDto);
        $ImpofedelsolicitudesController = new ImpofedelsolicitudesController();
        $rs = $ImpofedelsolicitudesController->modificaImpOfeDel($ImpofedelsolicitudesDto);
        return $rs;
    }

    public function consultaImpOfeDel($ImpofedelsolicitudesDto) {
        $ImpofedelsolicitudesDto = $this->validarImpofedelsolicitudes($ImpofedelsolicitudesDto);
        $ImpofedelsolicitudesController = new ImpofedelsolicitudesController();
        $rs = $ImpofedelsolicitudesController->consultaImpOfeDel($ImpofedelsolicitudesDto);
        return $rs;
    }

    public function eliminaImpOfeDel($ImpofedelsolicitudesDto) {
        $ImpofedelsolicitudesDto = $this->validarImpofedelsolicitudes($ImpofedelsolicitudesDto);
        $ImpofedelsolicitudesController = new ImpofedelsolicitudesController();
        $rs = $ImpofedelsolicitudesController->eliminaImpOfeDel($ImpofedelsolicitudesDto);
        return $rs;
    }

    private function esFecha($fecha) {
        if (preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $fecha)) {
            return true;
        }
        return false;
    }

    private function esFechaMysql($fecha) {
        if (preg_match('/^\d{4}\-\d{1,2}\-\d{1,2}$/', $fecha)) {
            return true;
        }
        return false;
    }

    private function fechaMysql($fecha) {
        list($dia, $mes, $year) = explode("/", $fecha);
        return $year . "-" . $mes . "-" . $dia;
    }

    private function fechaNormal($fecha) {
        list($dia, $mes, $year) = explode("/", $fecha);
        return $year . "-" . $mes . "-" . $dia;
    }

    private function fechaHoraMysql($fecha) {
        if ($fecha != "") {
            list ($fechaAux, $hora) = explode(" ", $fecha);
            list($dia, $mes, $year) = explode("/", $fechaAux);
            return $year . "-" . $mes . "-" . $dia . " " . $hora;
        }
    }

}

@$idImpOfeDelSolicitud = $_POST["idImpOfeDelSolicitud"];
@$idSolicitudAudiencia = $_POST["idSolicitudAudiencia"];
@$idImputadoSolicitud = $_POST["idImputadoSolicitud"];
@$idOfendidoSolicitud = $_POST["idOfendidoSolicitud"];
@$idDelitoSolicitud = $_POST["idDelitoSolicitud"];
@$cveModalidad = $_POST["cveModalidad"];
@$cveComision = $_POST["cveComision"];
@$cveConcurso = $_POST["cveConcurso"];
@$cveClasificacionDelitoOrden = $_POST["cveClasificacionDelitoOrden"];
@$cveElementoComision = $_POST["cveElementoComision"];
@$cveClasificacionDelito = $_POST["cveClasificacionDelito"];
@$cveFormaAccion = $_POST["cveFormaAccion"];
@$cveConsumacion = $_POST["cveConsumacion"];
@$cveMunicipio = $_POST["cveMunicipio"];
@$cveEntidad = $_POST["cveEntidad"];
@$cveGradoParticipacion = $_POST["cveGradoParticipacion"];
@$cveRelacionImpOfe = $_POST["cveRelacionImpOfe"];
@$CveTerminacion = $_POST["CveTerminacion"];
@$activo = $_POST["activo"];
@$fechaDelito = $_POST["fechaDelito"];
@$direccion = $_POST["direccion"];
@$colonia = $_POST["colonia"];
@$numInterior = $_POST["numInterior"];
@$numExterior = $_POST["numExterior"];
@$cp = $_POST["cp"];
@$accion = $_POST["accion"];

$impofedelsolicitudesFacade = new ImpofedelsolicitudesFacade();
$impofedelsolicitudesDto = new ImpofedelsolicitudesDTO();

$impofedelsolicitudesDto->setIdImpOfeDelSolicitud($idImpOfeDelSolicitud);
$impofedelsolicitudesDto->setIdSolicitudAudiencia($idSolicitudAudiencia);
$impofedelsolicitudesDto->setIdImputadoSolicitud($idImputadoSolicitud);
$impofedelsolicitudesDto->setIdOfendidoSolicitud($idOfendidoSolicitud);
$impofedelsolicitudesDto->setIdDelitoSolicitud($idDelitoSolicitud);
$impofedelsolicitudesDto->setCveModalidad($cveModalidad);
$impofedelsolicitudesDto->setCveComision($cveComision);
$impofedelsolicitudesDto->setCveConcurso($cveConcurso);
$impofedelsolicitudesDto->setCveClasificacionDelitoOrden($cveClasificacionDelitoOrden);
$impofedelsolicitudesDto->setCveElementoComision($cveElementoComision);
$impofedelsolicitudesDto->setCveClasificacionDelito($cveClasificacionDelito);
$impofedelsolicitudesDto->setCveFormaAccion($cveFormaAccion);
$impofedelsolicitudesDto->setCveConsumacion($cveConsumacion);
$impofedelsolicitudesDto->setCveMunicipio($cveMunicipio);
$impofedelsolicitudesDto->setCveEntidad($cveEntidad);
$impofedelsolicitudesDto->setCveGradoParticipacion($cveGradoParticipacion);
$impofedelsolicitudesDto->setCveRelacionImpOfe($cveRelacionImpOfe);
$impofedelsolicitudesDto->setCveTerminacion($CveTerminacion);
$impofedelsolicitudesDto->setActivo($activo);
$impofedelsolicitudesDto->setFechaDelito($fechaDelito);
$impofedelsolicitudesDto->setDireccion($direccion);
$impofedelsolicitudesDto->setColonia($colonia);
$impofedelsolicitudesDto->setNumInterior($numInterior);
$impofedelsolicitudesDto->setNumExterior($numExterior);
$impofedelsolicitudesDto->setCp($cp);


if (($accion == "guardar") && ($idImpOfeDelSolicitud == "")) {
    $impofedelsolicitudesDto = $impofedelsolicitudesFacade->insertImpofedelsolicitudes($impofedelsolicitudesDto);
    echo utf8_encode($impofedelsolicitudesDto);
} else if (($accion == "guardarRelacion") && ($idImpOfeDelSolicitud == "")) {
    $impofedelsolicitudesDto = $impofedelsolicitudesFacade->insertImpofedelsolicitudesrelacion($impofedelsolicitudesDto);
    echo utf8_encode($impofedelsolicitudesDto);
} else if (($accion == "guardarRelacion") && ($idImpOfeDelSolicitud != "")) {
    $impofedelsolicitudesDto = $impofedelsolicitudesFacade->updateImpofedelsolicitudesrelacion($impofedelsolicitudesDto);
    echo utf8_encode($impofedelsolicitudesDto);
} else if (($accion == "guardar") && ($idImpOfeDelSolicitud != "")) {
    $impofedelsolicitudesDto = $impofedelsolicitudesFacade->updateImpofedelsolicitudes($impofedelsolicitudesDto);
    echo utf8_encode($impofedelsolicitudesDto);
} else if ($accion == "consultar") {
    $impofedelsolicitudesDto = $impofedelsolicitudesFacade->selectImpofedelsolicitudes($impofedelsolicitudesDto);
    echo utf8_encode($impofedelsolicitudesDto);
} else if ($accion == "consultarRelacion") {
    $impofedelsolicitudesDto = $impofedelsolicitudesFacade->selectImpofedelsolicitudesrelacion($impofedelsolicitudesDto);
    echo utf8_encode($impofedelsolicitudesDto);
} else if ($accion == "validaRelacion") {
    $impofedelsolicitudesDto = $impofedelsolicitudesFacade->validaImpofedelsolicitudesrelacion($impofedelsolicitudesDto);
    echo utf8_encode($impofedelsolicitudesDto);
} else if (($accion == "baja") && ($idImpOfeDelSolicitud != "")) {
    $impofedelsolicitudesDto = $impofedelsolicitudesFacade->deleteImpofedelsolicitudes($impofedelsolicitudesDto);
    echo utf8_encode($impofedelsolicitudesDto);
} else if (($accion == "bajaRelacion") && ($idImpOfeDelSolicitud != "")) {
    $impofedelsolicitudesDto = $impofedelsolicitudesFacade->updateImpofedelsolicitudesrelacionbaja($impofedelsolicitudesDto);
    echo utf8_encode($impofedelsolicitudesDto);
} else if (($accion == "seleccionar") && ($idImpOfeDelSolicitud != "")) {
    $impofedelsolicitudesDto = $impofedelsolicitudesFacade->selectImpofedelsolicitudes($impofedelsolicitudesDto);
    echo utf8_encode($impofedelsolicitudesDto);
} else if ($accion == "validaSolicitud") {
    $impofedelsolicitudesDto = $impofedelsolicitudesFacade->validaSolicitud($impofedelsolicitudesDto);
    echo utf8_encode($impofedelsolicitudesDto);
} else if ($accion == "consultarRelacionPaso6") {
    $impofedelsolicitudesDto = $impofedelsolicitudesFacade->selectImpofedelsolicitudesrelacionPaso6($impofedelsolicitudesDto);
    echo $impofedelsolicitudesDto;
} else if (($accion == "guardaImpOfeDel") && ($idImpOfeDelSolicitud == "")) {
    $impofedelsolicitudesDto = $impofedelsolicitudesFacade->guardaImpOfeDel($impofedelsolicitudesDto);
    echo $impofedelsolicitudesDto;
} else if (($accion == "guardaImpOfeDel") && ($idImpOfeDelSolicitud != "")) {
    $impofedelsolicitudesDto = $impofedelsolicitudesFacade->modificaImpOfeDel($impofedelsolicitudesDto);
    echo $impofedelsolicitudesDto;
} else if (($accion == "consultaImpOfeDel")) {
    $impofedelsolicitudesDto = $impofedelsolicitudesFacade->consultaImpOfeDel($impofedelsolicitudesDto);
    echo $impofedelsolicitudesDto;
} else if (($accion == "eliminaImpOfeDel")) {
    $impofedelsolicitudesDto = $impofedelsolicitudesFacade->eliminaImpOfeDel($impofedelsolicitudesDto);
    echo $impofedelsolicitudesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>