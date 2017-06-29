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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/impofedelcarpetas/ImpofedelcarpetasDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/impofedelcarpetas/ImpofedelcarpetasController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class ImpofedelcarpetasFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarImpofedelcarpetas($ImpofedelcarpetasDto) {
            $ImpofedelcarpetasDto->setIdImpOfeDelCarpeta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelcarpetasDto->getIdImpOfeDelCarpeta(), "utf8") : strtoupper($ImpofedelcarpetasDto->getIdImpOfeDelCarpeta()))))));
            if ($this->esFecha($ImpofedelcarpetasDto->getIdImpOfeDelCarpeta())) {
                $ImpofedelcarpetasDto->setIdImpOfeDelCarpeta($this->fechaMysql($ImpofedelcarpetasDto->getIdImpOfeDelCarpeta()));
            }
            $ImpofedelcarpetasDto->setIdCarpetaJudicial(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelcarpetasDto->getIdCarpetaJudicial(), "utf8") : strtoupper($ImpofedelcarpetasDto->getIdCarpetaJudicial()))))));
            if ($this->esFecha($ImpofedelcarpetasDto->getIdCarpetaJudicial())) {
                $ImpofedelcarpetasDto->setIdCarpetaJudicial($this->fechaMysql($ImpofedelcarpetasDto->getIdCarpetaJudicial()));
            }
            $ImpofedelcarpetasDto->setIdImputadoCarpeta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelcarpetasDto->getIdImputadoCarpeta(), "utf8") : strtoupper($ImpofedelcarpetasDto->getIdImputadoCarpeta()))))));
            if ($this->esFecha($ImpofedelcarpetasDto->getIdImputadoCarpeta())) {
                $ImpofedelcarpetasDto->setIdImputadoCarpeta($this->fechaMysql($ImpofedelcarpetasDto->getIdImputadoCarpeta()));
            }
            $ImpofedelcarpetasDto->setIdOfendidoCarpeta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelcarpetasDto->getIdOfendidoCarpeta(), "utf8") : strtoupper($ImpofedelcarpetasDto->getIdOfendidoCarpeta()))))));
            if ($this->esFecha($ImpofedelcarpetasDto->getIdOfendidoCarpeta())) {
                $ImpofedelcarpetasDto->setIdOfendidoCarpeta($this->fechaMysql($ImpofedelcarpetasDto->getIdOfendidoCarpeta()));
            }
            $ImpofedelcarpetasDto->setIdDelitoCarpeta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelcarpetasDto->getIdDelitoCarpeta(), "utf8") : strtoupper($ImpofedelcarpetasDto->getIdDelitoCarpeta()))))));
            if ($this->esFecha($ImpofedelcarpetasDto->getIdDelitoCarpeta())) {
                $ImpofedelcarpetasDto->setIdDelitoCarpeta($this->fechaMysql($ImpofedelcarpetasDto->getIdDelitoCarpeta()));
            }
            $ImpofedelcarpetasDto->setCveModalidad(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelcarpetasDto->getCveModalidad(), "utf8") : strtoupper($ImpofedelcarpetasDto->getCveModalidad()))))));
            if ($this->esFecha($ImpofedelcarpetasDto->getCveModalidad())) {
                $ImpofedelcarpetasDto->setCveModalidad($this->fechaMysql($ImpofedelcarpetasDto->getCveModalidad()));
            }
            $ImpofedelcarpetasDto->setCveComision(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelcarpetasDto->getCveComision(), "utf8") : strtoupper($ImpofedelcarpetasDto->getCveComision()))))));
            if ($this->esFecha($ImpofedelcarpetasDto->getCveComision())) {
                $ImpofedelcarpetasDto->setCveComision($this->fechaMysql($ImpofedelcarpetasDto->getCveComision()));
            }
            $ImpofedelcarpetasDto->setCveConcurso(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelcarpetasDto->getCveConcurso(), "utf8") : strtoupper($ImpofedelcarpetasDto->getCveConcurso()))))));
            if ($this->esFecha($ImpofedelcarpetasDto->getCveConcurso())) {
                $ImpofedelcarpetasDto->setCveConcurso($this->fechaMysql($ImpofedelcarpetasDto->getCveConcurso()));
            }
            $ImpofedelcarpetasDto->setCveClasificacionDelitoOrden(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelcarpetasDto->getCveClasificacionDelitoOrden(), "utf8") : strtoupper($ImpofedelcarpetasDto->getCveClasificacionDelitoOrden()))))));
            if ($this->esFecha($ImpofedelcarpetasDto->getCveClasificacionDelitoOrden())) {
                $ImpofedelcarpetasDto->setCveClasificacionDelitoOrden($this->fechaMysql($ImpofedelcarpetasDto->getCveClasificacionDelitoOrden()));
            }
            $ImpofedelcarpetasDto->setCveElementoComision(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelcarpetasDto->getCveElementoComision(), "utf8") : strtoupper($ImpofedelcarpetasDto->getCveElementoComision()))))));
            if ($this->esFecha($ImpofedelcarpetasDto->getCveElementoComision())) {
                $ImpofedelcarpetasDto->setCveElementoComision($this->fechaMysql($ImpofedelcarpetasDto->getCveElementoComision()));
            }
            $ImpofedelcarpetasDto->setCveClasificacionDelito(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelcarpetasDto->getCveClasificacionDelito(), "utf8") : strtoupper($ImpofedelcarpetasDto->getCveClasificacionDelito()))))));
            if ($this->esFecha($ImpofedelcarpetasDto->getCveClasificacionDelito())) {
                $ImpofedelcarpetasDto->setCveClasificacionDelito($this->fechaMysql($ImpofedelcarpetasDto->getCveClasificacionDelito()));
            }
            $ImpofedelcarpetasDto->setCveMunicipio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelcarpetasDto->getCveMunicipio(), "utf8") : strtoupper($ImpofedelcarpetasDto->getCveMunicipio()))))));
            if ($this->esFecha($ImpofedelcarpetasDto->getCveMunicipio())) {
                $ImpofedelcarpetasDto->setCveMunicipio($this->fechaMysql($ImpofedelcarpetasDto->getCveMunicipio()));
            }
            $ImpofedelcarpetasDto->setCveEntidad(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelcarpetasDto->getCveEntidad(), "utf8") : strtoupper($ImpofedelcarpetasDto->getCveEntidad()))))));
            if ($this->esFecha($ImpofedelcarpetasDto->getCveEntidad())) {
                $ImpofedelcarpetasDto->setCveEntidad($this->fechaMysql($ImpofedelcarpetasDto->getCveEntidad()));
            }
            $ImpofedelcarpetasDto->setCveFormaAccion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelcarpetasDto->getCveFormaAccion(), "utf8") : strtoupper($ImpofedelcarpetasDto->getCveFormaAccion()))))));
            if ($this->esFecha($ImpofedelcarpetasDto->getCveFormaAccion())) {
                $ImpofedelcarpetasDto->setCveFormaAccion($this->fechaMysql($ImpofedelcarpetasDto->getCveFormaAccion()));
            }
            $ImpofedelcarpetasDto->setCveConsumacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelcarpetasDto->getCveConsumacion(), "utf8") : strtoupper($ImpofedelcarpetasDto->getCveConsumacion()))))));
            if ($this->esFecha($ImpofedelcarpetasDto->getCveConsumacion())) {
                $ImpofedelcarpetasDto->setCveConsumacion($this->fechaMysql($ImpofedelcarpetasDto->getCveConsumacion()));
            }
            $ImpofedelcarpetasDto->setCveGradoParticipacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelcarpetasDto->getCveGradoParticipacion(), "utf8") : strtoupper($ImpofedelcarpetasDto->getCveGradoParticipacion()))))));
            if ($this->esFecha($ImpofedelcarpetasDto->getCveGradoParticipacion())) {
                $ImpofedelcarpetasDto->setCveGradoParticipacion($this->fechaMysql($ImpofedelcarpetasDto->getCveGradoParticipacion()));
            }
            $ImpofedelcarpetasDto->setCveRelacionImpOfe(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelcarpetasDto->getCveRelacionImpOfe(), "utf8") : strtoupper($ImpofedelcarpetasDto->getCveRelacionImpOfe()))))));
            if ($this->esFecha($ImpofedelcarpetasDto->getCveRelacionImpOfe())) {
                $ImpofedelcarpetasDto->setCveRelacionImpOfe($this->fechaMysql($ImpofedelcarpetasDto->getCveRelacionImpOfe()));
            }
            $ImpofedelcarpetasDto->setActivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelcarpetasDto->getActivo(), "utf8") : strtoupper($ImpofedelcarpetasDto->getActivo()))))));
            if ($this->esFecha($ImpofedelcarpetasDto->getActivo())) {
                $ImpofedelcarpetasDto->setActivo($this->fechaMysql($ImpofedelcarpetasDto->getActivo()));
            }
            $ImpofedelcarpetasDto->setFechaDelito(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelcarpetasDto->getFechaDelito(), "utf8") : strtoupper($ImpofedelcarpetasDto->getFechaDelito()))))));
            if ($this->esFecha($ImpofedelcarpetasDto->getFechaDelito())) {
                $ImpofedelcarpetasDto->setFechaDelito($this->fechaMysql($ImpofedelcarpetasDto->getFechaDelito()));
            }
            $ImpofedelcarpetasDto->setDireccion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelcarpetasDto->getDireccion(), "utf8") : strtoupper($ImpofedelcarpetasDto->getDireccion()))))));
            if ($this->esFecha($ImpofedelcarpetasDto->getDireccion())) {
                $ImpofedelcarpetasDto->setDireccion($this->fechaMysql($ImpofedelcarpetasDto->getDireccion()));
            }
            $ImpofedelcarpetasDto->setColonia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelcarpetasDto->getColonia(), "utf8") : strtoupper($ImpofedelcarpetasDto->getColonia()))))));
            if ($this->esFecha($ImpofedelcarpetasDto->getColonia())) {
                $ImpofedelcarpetasDto->setColonia($this->fechaMysql($ImpofedelcarpetasDto->getColonia()));
            }
            $ImpofedelcarpetasDto->setNumInterior(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelcarpetasDto->getNumInterior(), "utf8") : strtoupper($ImpofedelcarpetasDto->getNumInterior()))))));
            if ($this->esFecha($ImpofedelcarpetasDto->getNumInterior())) {
                $ImpofedelcarpetasDto->setNumInterior($this->fechaMysql($ImpofedelcarpetasDto->getNumInterior()));
            }
            $ImpofedelcarpetasDto->setNumExterior(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelcarpetasDto->getNumExterior(), "utf8") : strtoupper($ImpofedelcarpetasDto->getNumExterior()))))));
            if ($this->esFecha($ImpofedelcarpetasDto->getNumExterior())) {
                $ImpofedelcarpetasDto->setNumExterior($this->fechaMysql($ImpofedelcarpetasDto->getNumExterior()));
            }
            $ImpofedelcarpetasDto->setCp(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImpofedelcarpetasDto->getCp(), "utf8") : strtoupper($ImpofedelcarpetasDto->getCp()))))));
            if ($this->esFecha($ImpofedelcarpetasDto->getCp())) {
                $ImpofedelcarpetasDto->setCp($this->fechaMysql($ImpofedelcarpetasDto->getCp()));
            }
            return $ImpofedelcarpetasDto;
        }

        /*
         * Para carpetas judiciales
         */

        public function selectImpofedelcarpetasrelacion($ImpofedelcarpetasDto) {
//        $ImpofedelcarpetasDto = $this->validarImpofedelcarpetas($ImpofedelcarpetasDto);
//        $ImpofedelcarpetasController = new ImpofedelcarpetasController();
//        $ImpofedelcarpetasDto = $ImpofedelcarpetasController->selectImpofedelcarpetasrelacion($ImpofedelcarpetasDto);
//        
//        if ($ImpofedelcarpetasDto != "") {
//            return $ImpofedelcarpetasDto;
//        }
//        $jsonDto = new Encode_JSON();
//        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
            $ImpofedelcarpetasDto = $this->validarImpofedelcarpetas($ImpofedelcarpetasDto);
            $ImpofedelcarpetasController = new ImpofedelcarpetasController();
            $ImpofedelcarpetasDto = $ImpofedelcarpetasController->consultaImpOfeDel($ImpofedelcarpetasDto);
            return $ImpofedelcarpetasDto;
        }

        public function selectImpofedelcarpetasrelacionremision($ImpofedelcarpetasDto) {

            $ImpofedelcarpetasDto = $this->validarImpofedelcarpetas($ImpofedelcarpetasDto);
            $ImpofedelcarpetasController = new ImpofedelcarpetasController();
            $ImpofedelcarpetasDto = $ImpofedelcarpetasController->consultaImpOfeDelRemision($ImpofedelcarpetasDto);
            return $ImpofedelcarpetasDto;
        }

        public function insertImpofedelcarpetasrelacion($ImpofedelcarpetasDto) {
            $ImpofedelcarpetasDto = $this->validarImpofedelcarpetas($ImpofedelcarpetasDto);
            $ImpofedelcarpetasController = new ImpofedelcarpetasController();
            $ImpofedelcarpetasDto = $ImpofedelcarpetasController->insertImpofedelcarpetasrelacion($ImpofedelcarpetasDto);
            if ($ImpofedelcarpetasDto != "") {
                return $ImpofedelcarpetasDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateImpofedelcarpetasrelacion($ImpofedelcarpetasDto) {
            $ImpofedelcarpetasDto = $this->validarImpofedelcarpetas($ImpofedelcarpetasDto);
            $ImpofedelcarpetasController = new ImpofedelcarpetasController();
            $ImpofedelcarpetasDto = $ImpofedelcarpetasController->updateImpofedelcarpetasrelacion($ImpofedelcarpetasDto);
            if ($ImpofedelcarpetasDto != "") {
                return $ImpofedelcarpetasDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL ACTUALIZAR EL REGISTRO"));
        }

        public function updateImpofedelcarpetasrelacionbaja($ImpofedelcarpetasDto) {
            $ImpofedelcarpetasDto = $this->validarImpofedelcarpetas($ImpofedelcarpetasDto);
            $ImpofedelcarpetasController = new ImpofedelcarpetasController();
            $ImpofedelcarpetasDto = $ImpofedelcarpetasController->updateImpofedelcarpetasrelacionbaja($ImpofedelcarpetasDto);
            /* if ($ImpofedelcarpetasDto) {
              $jsonDto = new Encode_JSON();
              return $jsonDto->encode(array("totalCount" => "1", "text" => "REGISTRO BORRADO CORRECTAMENTE"));
              }
              $jsonDto = new Encode_JSON();
              return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL BORRAR EL REGISTRO", "estatus" => "Error"));
             *
             */
            return json_encode($ImpofedelcarpetasDto);
        }

        public function selectcondelitos($ImpofedelcarpetasDto) {
            $ImpofedelcarpetasDto = $this->validarImpofedelcarpetas($ImpofedelcarpetasDto);
            $ImpofedelcarpetasController = new ImpofedelcarpetasController();
            $ImpofedelcarpetasDto = $ImpofedelcarpetasController->selectImpofedelcondelitos($ImpofedelcarpetasDto);
            if ($ImpofedelcarpetasDto != "") {
                return $ImpofedelcarpetasDto;
                //$dtoToJson = new DtoToJson($ImpofedelcarpetasDto);
                //return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function selectImpofedelcarpetasrelacionPaso6($ImpofedelcarpetasDto) {
            $ImpofedelcarpetasDto = $this->validarImpofedelcarpetas($ImpofedelcarpetasDto);
            $ImpofedelcarpetasController = new ImpofedelcarpetasController();
            $ImpofedelcarpetasDto = $ImpofedelcarpetasController->selectImpofedelcarpetasrelacionPaso($ImpofedelcarpetasDto);
            if ($ImpofedelcarpetasDto != "") {
                return $ImpofedelcarpetasDto;
                //$dtoToJson = new DtoToJson($ImpofedelcarpetasDto);
                //return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function validaImpofedelcarpetasrelacion($ImpofedelcarpetasDto) {
            $ImpofedelcarpetasDto = $this->validarImpofedelcarpetas($ImpofedelcarpetasDto);
            $ImpofedelcarpetasController = new ImpofedelcarpetasController();
            $ImpofedelcarpetasDto = $ImpofedelcarpetasController->validaImpofedelcarpetasrelacion($ImpofedelcarpetasDto);
            if ($ImpofedelcarpetasDto != "") {
                return $ImpofedelcarpetasDto;
                //$dtoToJson = new DtoToJson($ImpofedelsolicitudesDto);
                //return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        //Fin actualizacion carpetas judiciales

        public function selectImpofedelcarpetas($ImpofedelcarpetasDto) {
            $ImpofedelcarpetasDto = $this->validarImpofedelcarpetas($ImpofedelcarpetasDto);
            $ImpofedelcarpetasController = new ImpofedelcarpetasController();
            $ImpofedelcarpetasDto = $ImpofedelcarpetasController->selectImpofedelcarpetas($ImpofedelcarpetasDto);
            if ($ImpofedelcarpetasDto != "") {
                $dtoToJson = new DtoToJson($ImpofedelcarpetasDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertImpofedelcarpetas($ImpofedelcarpetasDto) {
            $ImpofedelcarpetasDto = $this->validarImpofedelcarpetas($ImpofedelcarpetasDto);
            $ImpofedelcarpetasController = new ImpofedelcarpetasController();
            $ImpofedelcarpetasDto = $ImpofedelcarpetasController->insertImpofedelcarpetas($ImpofedelcarpetasDto);
            if ($ImpofedelcarpetasDto != "") {
                $dtoToJson = new DtoToJson($ImpofedelcarpetasDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateImpofedelcarpetas($ImpofedelcarpetasDto) {
            $ImpofedelcarpetasDto = $this->validarImpofedelcarpetas($ImpofedelcarpetasDto);
            $ImpofedelcarpetasController = new ImpofedelcarpetasController();
            $ImpofedelcarpetasDto = $ImpofedelcarpetasController->updateImpofedelcarpetas($ImpofedelcarpetasDto);
            if ($ImpofedelcarpetasDto != "") {
                $dtoToJson = new DtoToJson($ImpofedelcarpetasDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteImpofedelcarpetas($ImpofedelcarpetasDto) {
            $ImpofedelcarpetasDto = $this->validarImpofedelcarpetas($ImpofedelcarpetasDto);
            $ImpofedelcarpetasController = new ImpofedelcarpetasController();
            $ImpofedelcarpetasDto = $ImpofedelcarpetasController->deleteImpofedelcarpetas($ImpofedelcarpetasDto);
            if ($ImpofedelcarpetasDto == true) {
                $jsonDto = new Encode_JSON();
                return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
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

    }

    @$idImpOfeDelCarpeta = $_POST["idImpOfeDelCarpeta"];
    @$idCarpetaJudicial = $_POST["idCarpetaJudicial"];
    @$idImputadoCarpeta = $_POST["idImputadoCarpeta"];
    @$idOfendidoCarpeta = $_POST["idOfendidoCarpeta"];
    @$idDelitoCarpeta = $_POST["idDelitoCarpeta"];
    @$cveModalidad = $_POST["cveModalidad"];
    @$cveComision = $_POST["cveComision"];
    @$cveConcurso = $_POST["cveConcurso"];
    @$cveClasificacionDelitoOrden = $_POST["cveClasificacionDelitoOrden"];
    @$cveElementoComision = $_POST["cveElementoComision"];
    @$cveClasificacionDelito = $_POST["cveClasificacionDelito"];
    @$cveMunicipio = $_POST["cveMunicipio"];
    @$cveEntidad = $_POST["cveEntidad"];
    @$cveFormaAccion = $_POST["cveFormaAccion"];
    @$cveConsumacion = $_POST["cveConsumacion"];
    @$cveGradoParticipacion = $_POST["cveGradoParticipacion"];
    @$cveRelacionImpOfe = $_POST["cveRelacionImpOfe"];
    @$activo = $_POST["activo"];
    @$fechaDelito = $_POST["fechaDelito"];
    @$direccion = $_POST["direccion"];
    @$colonia = $_POST["colonia"];
    @$numInterior = $_POST["numInterior"];
    @$numExterior = $_POST["numExterior"];
    @$cp = $_POST["cp"];
    @$accion = $_POST["accion"];

    $impofedelcarpetasFacade = new ImpofedelcarpetasFacade();
    $impofedelcarpetasDto = new ImpofedelcarpetasDTO();

    $impofedelcarpetasDto->setIdImpOfeDelCarpeta($idImpOfeDelCarpeta);
    $impofedelcarpetasDto->setIdCarpetaJudicial($idCarpetaJudicial);
    $impofedelcarpetasDto->setIdImputadoCarpeta($idImputadoCarpeta);
    $impofedelcarpetasDto->setIdOfendidoCarpeta($idOfendidoCarpeta);
    $impofedelcarpetasDto->setIdDelitoCarpeta($idDelitoCarpeta);
    $impofedelcarpetasDto->setCveModalidad($cveModalidad);
    $impofedelcarpetasDto->setCveComision($cveComision);
    $impofedelcarpetasDto->setCveConcurso($cveConcurso);
    $impofedelcarpetasDto->setCveClasificacionDelitoOrden($cveClasificacionDelitoOrden);
    $impofedelcarpetasDto->setCveElementoComision($cveElementoComision);
    $impofedelcarpetasDto->setCveClasificacionDelito($cveClasificacionDelito);
    $impofedelcarpetasDto->setCveMunicipio($cveMunicipio);
    $impofedelcarpetasDto->setCveEntidad($cveEntidad);
    $impofedelcarpetasDto->setCveFormaAccion($cveFormaAccion);
    $impofedelcarpetasDto->setCveConsumacion($cveConsumacion);
    $impofedelcarpetasDto->setCveGradoParticipacion($cveGradoParticipacion);
    $impofedelcarpetasDto->setCveRelacionImpOfe($cveRelacionImpOfe);
    $impofedelcarpetasDto->setActivo($activo);
    $impofedelcarpetasDto->setFechaDelito($fechaDelito);
    $impofedelcarpetasDto->setDireccion($direccion);
    $impofedelcarpetasDto->setColonia($colonia);
    $impofedelcarpetasDto->setNumInterior($numInterior);
    $impofedelcarpetasDto->setNumExterior($numExterior);
    $impofedelcarpetasDto->setCp($cp);

    if (($accion == "guardar") && ($idImpOfeDelCarpeta == "")) {
        $impofedelcarpetasDto = $impofedelcarpetasFacade->insertImpofedelcarpetas($impofedelcarpetasDto);
        echo $impofedelcarpetasDto;
    } else if (($accion == "guardar") && ($idImpOfeDelCarpeta != "")) {
        $impofedelcarpetasDto = $impofedelcarpetasFacade->updateImpofedelcarpetas($impofedelcarpetasDto);
        echo $impofedelcarpetasDto;
    } else if ($accion == "consultar") {
        $impofedelcarpetasDto = $impofedelcarpetasFacade->selectImpofedelcarpetas($impofedelcarpetasDto);
        echo $impofedelcarpetasDto;
    } else if (($accion == "baja") && ($idImpOfeDelCarpeta != "")) {
        $impofedelcarpetasDto = $impofedelcarpetasFacade->deleteImpofedelcarpetas($impofedelcarpetasDto);
        echo $impofedelcarpetasDto;
    } else if (($accion == "seleccionar") && ($idImpOfeDelCarpeta != "")) {
        $impofedelcarpetasDto = $impofedelcarpetasFacade->selectImpofedelcarpetas($impofedelcarpetasDto);
        echo $impofedelcarpetasDto;
    } else if ($accion == "consultarRelacion") {
        $impofedelcarpetasDto = $impofedelcarpetasFacade->selectImpofedelcarpetasrelacion($impofedelcarpetasDto);
        echo utf8_encode($impofedelcarpetasDto);
    } else if (($accion == "guardarRelacion") && ($idImpOfeDelCarpeta == "")) {
        $impofedelcarpetasDto = $impofedelcarpetasFacade->insertImpofedelcarpetasrelacion($impofedelcarpetasDto);
        echo utf8_encode($impofedelcarpetasDto);
    } else if (($accion == "guardarRelacion") && ($idImpOfeDelCarpeta != "")) {
        $impofedelcarpetasDto = $impofedelcarpetasFacade->updateImpofedelcarpetasrelacion($impofedelcarpetasDto);
        echo utf8_encode($impofedelcarpetasDto);
    } else if (($accion == "bajaRelacion") && ($idImpOfeDelCarpeta != "")) {
        $impofedelcarpetasDto = $impofedelcarpetasFacade->updateImpofedelcarpetasrelacionbaja($impofedelcarpetasDto);
        echo utf8_encode($impofedelcarpetasDto);
    } else if ($accion == "consultarRelacionPaso6") {
        $impofedelcarpetasDto = $impofedelcarpetasFacade->selectImpofedelcarpetasrelacionPaso6($impofedelcarpetasDto);
        echo utf8_encode($impofedelcarpetasDto);
    } else if ($accion == "validaRelacion") {
        $impofedelcarpetasDto = $impofedelcarpetasFacade->validaImpofedelcarpetasrelacion($impofedelcarpetasDto);
        echo utf8_encode($impofedelcarpetasDto);
    } else if ($accion == "consultarcondelitos") {
        $impofedelcarpetasDto = $impofedelcarpetasFacade->selectcondelitos($impofedelcarpetasDto);
        echo utf8_encode($impofedelcarpetasDto);
    } else if ($accion == "consultarRelacionRemision") {
        $impofedelcarpetasDto = $impofedelcarpetasFacade->selectImpofedelcarpetasrelacionremision($impofedelcarpetasDto);



        echo utf8_encode($impofedelcarpetasDto);
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>