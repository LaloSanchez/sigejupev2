 
<?php

/*
 * ************************************************
 * FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
 * Copyright 2009-2015 FACADES
 * Licensed under the MIT license 
 * Autor: *
 * Departamento de Desarrollo de Software
 * Subdireccion de Ingenieria de Software
 * Poder Judicial del Estado de Mexicom 
 * ************************************************
 */
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuaciones/ActuacionesDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/actuaciones/ActuacionesController.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/autovinculacion/AutovinculacionController.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/suspensioncondicional/SuspensioncondicionalController.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/ordenesaprehension/OrdenesaprehensionController.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/notificaciones/NotificacionesController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class ActuacionesFacade {

        private $proveedor; //

        public function __construct() {
            
        }

        public function validarActuaciones($ActuacionesDto) {
            $ActuacionesDto->setidActuacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getidActuacion(), "utf8") : strtoupper($ActuacionesDto->getidActuacion()))))));
            if ($this->esFecha($ActuacionesDto->getidActuacion())) {
                $ActuacionesDto->setidActuacion($this->fechaMysql($ActuacionesDto->getidActuacion()));
            }
            $ActuacionesDto->setnumActuacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getnumActuacion(), "utf8") : strtoupper($ActuacionesDto->getnumActuacion()))))));
            if ($this->esFecha($ActuacionesDto->getnumActuacion())) {
                $ActuacionesDto->setnumActuacion($this->fechaMysql($ActuacionesDto->getnumActuacion()));
            }
            $ActuacionesDto->setaniActuacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getaniActuacion(), "utf8") : strtoupper($ActuacionesDto->getaniActuacion()))))));
            if ($this->esFecha($ActuacionesDto->getaniActuacion())) {
                $ActuacionesDto->setaniActuacion($this->fechaMysql($ActuacionesDto->getaniActuacion()));
            }
            $ActuacionesDto->setcveTipoActuacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getcveTipoActuacion(), "utf8") : strtoupper($ActuacionesDto->getcveTipoActuacion()))))));
            if ($this->esFecha($ActuacionesDto->getcveTipoActuacion())) {
                $ActuacionesDto->setcveTipoActuacion($this->fechaMysql($ActuacionesDto->getcveTipoActuacion()));
            }
            $ActuacionesDto->setidReferencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getidReferencia(), "utf8") : strtoupper($ActuacionesDto->getidReferencia()))))));
            if ($this->esFecha($ActuacionesDto->getidReferencia())) {
                $ActuacionesDto->setidReferencia($this->fechaMysql($ActuacionesDto->getidReferencia()));
            }
            $ActuacionesDto->setnumero(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getnumero(), "utf8") : strtoupper($ActuacionesDto->getnumero()))))));
            if ($this->esFecha($ActuacionesDto->getnumero())) {
                $ActuacionesDto->setnumero($this->fechaMysql($ActuacionesDto->getnumero()));
            }
            $ActuacionesDto->setanio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getanio(), "utf8") : strtoupper($ActuacionesDto->getanio()))))));
            if ($this->esFecha($ActuacionesDto->getanio())) {
                $ActuacionesDto->setanio($this->fechaMysql($ActuacionesDto->getanio()));
            }
            $ActuacionesDto->setcveTipoCarpeta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getcveTipoCarpeta(), "utf8") : strtoupper($ActuacionesDto->getcveTipoCarpeta()))))));
            if ($this->esFecha($ActuacionesDto->getcveTipoCarpeta())) {
                $ActuacionesDto->setcveTipoCarpeta($this->fechaMysql($ActuacionesDto->getcveTipoCarpeta()));
            }
            $ActuacionesDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getcveJuzgado(), "utf8") : strtoupper($ActuacionesDto->getcveJuzgado()))))));
            if ($this->esFecha($ActuacionesDto->getcveJuzgado())) {
                $ActuacionesDto->setcveJuzgado($this->fechaMysql($ActuacionesDto->getcveJuzgado()));
            }
            $ActuacionesDto->setsintesis(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getsintesis(), "utf8") : strtoupper($ActuacionesDto->getsintesis()))))));
            if ($this->esFecha($ActuacionesDto->getsintesis())) {
                $ActuacionesDto->setsintesis($this->fechaMysql($ActuacionesDto->getsintesis()));
            }
//        $ActuacionesDto->setobservaciones(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getobservaciones(), "utf8") : strtoupper($ActuacionesDto->getobservaciones()))))));
            if ($this->esFecha($ActuacionesDto->getobservaciones())) {
                $ActuacionesDto->setobservaciones($this->fechaMysql($ActuacionesDto->getobservaciones()));
            }
            $ActuacionesDto->setcveUsuario(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getcveUsuario(), "utf8") : strtoupper($ActuacionesDto->getcveUsuario()))))));
            if ($this->esFecha($ActuacionesDto->getcveUsuario())) {
                $ActuacionesDto->setcveUsuario($this->fechaMysql($ActuacionesDto->getcveUsuario()));
            }
            $ActuacionesDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getactivo(), "utf8") : strtoupper($ActuacionesDto->getactivo()))))));
            if ($this->esFecha($ActuacionesDto->getactivo())) {
                $ActuacionesDto->setactivo($this->fechaMysql($ActuacionesDto->getactivo()));
            }
            $ActuacionesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getfechaRegistro(), "utf8") : strtoupper($ActuacionesDto->getfechaRegistro()))))));
            if ($this->esFecha($ActuacionesDto->getfechaRegistro())) {
                $ActuacionesDto->setfechaRegistro($this->fechaMysql($ActuacionesDto->getfechaRegistro()));
            }
            $ActuacionesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getfechaActualizacion(), "utf8") : strtoupper($ActuacionesDto->getfechaActualizacion()))))));
            if ($this->esFecha($ActuacionesDto->getfechaActualizacion())) {
                $ActuacionesDto->setfechaActualizacion($this->fechaMysql($ActuacionesDto->getfechaActualizacion()));
            }
            $ActuacionesDto->setcveEstado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getcveEstado(), "utf8") : strtoupper($ActuacionesDto->getcveEstado()))))));
            if ($this->esFecha($ActuacionesDto->getcveEstado())) {
                $ActuacionesDto->setcveEstado($this->fechaMysql($ActuacionesDto->getcveEstado()));
            }
            $ActuacionesDto->setcveJuzgadoDestino(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getcveJuzgadoDestino(), "utf8") : strtoupper($ActuacionesDto->getcveJuzgadoDestino()))))));
            if ($this->esFecha($ActuacionesDto->getcveJuzgadoDestino())) {
                $ActuacionesDto->setcveJuzgadoDestino($this->fechaMysql($ActuacionesDto->getcveJuzgadoDestino()));
            }
            $ActuacionesDto->setjuzgadoDestino(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getjuzgadoDestino(), "utf8") : strtoupper($ActuacionesDto->getjuzgadoDestino()))))));
            if ($this->esFecha($ActuacionesDto->getjuzgadoDestino())) {
                $ActuacionesDto->setjuzgadoDestino($this->fechaMysql($ActuacionesDto->getjuzgadoDestino()));
            }
            $ActuacionesDto->setcveTipoNotificacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getcveTipoNotificacion(), "utf8") : strtoupper($ActuacionesDto->getcveTipoNotificacion()))))));
            if ($this->esFecha($ActuacionesDto->getcveTipoNotificacion())) {
                $ActuacionesDto->setcveTipoNotificacion($this->fechaMysql($ActuacionesDto->getcveTipoNotificacion()));
            }
            $ActuacionesDto->setcveTipoSentencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getcveTipoSentencia(), "utf8") : strtoupper($ActuacionesDto->getcveTipoSentencia()))))));
            if ($this->esFecha($ActuacionesDto->getcveTipoSentencia())) {
                $ActuacionesDto->setcveTipoSentencia($this->fechaMysql($ActuacionesDto->getcveTipoSentencia()));
            }
            $ActuacionesDto->setcveTipoAuto(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getcveTipoAuto(), "utf8") : strtoupper($ActuacionesDto->getcveTipoAuto()))))));
            if ($this->esFecha($ActuacionesDto->getcveTipoAuto())) {
                $ActuacionesDto->setcveTipoAuto($this->fechaMysql($ActuacionesDto->getcveTipoAuto()));
            }
            $ActuacionesDto->setcveTipoResolucion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getcveTipoResolucion(), "utf8") : strtoupper($ActuacionesDto->getcveTipoResolucion()))))));
            if ($this->esFecha($ActuacionesDto->getcveTipoResolucion())) {
                $ActuacionesDto->setcveTipoResolucion($this->fechaMysql($ActuacionesDto->getcveTipoResolucion()));
            }
            $ActuacionesDto->setcveTipoOrden(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getcveTipoOrden(), "utf8") : strtoupper($ActuacionesDto->getcveTipoOrden()))))));
            if ($this->esFecha($ActuacionesDto->getcveTipoOrden())) {
                $ActuacionesDto->setcveTipoOrden($this->fechaMysql($ActuacionesDto->getcveTipoOrden()));
            }
            $ActuacionesDto->setcveTipoProcedimiento(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getcveTipoProcedimiento(), "utf8") : strtoupper($ActuacionesDto->getcveTipoProcedimiento()))))));
            if ($this->esFecha($ActuacionesDto->getcveTipoProcedimiento())) {
                $ActuacionesDto->setcveTipoProcedimiento($this->fechaMysql($ActuacionesDto->getcveTipoProcedimiento()));
            }
            $ActuacionesDto->setfechaSentencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getfechaSentencia(), "utf8") : strtoupper($ActuacionesDto->getfechaSentencia()))))));
            if ($this->esFecha($ActuacionesDto->getfechaSentencia())) {
                $ActuacionesDto->setfechaSentencia($this->fechaMysql($ActuacionesDto->getfechaSentencia()));
            }
            $ActuacionesDto->setfechaEjecutoria(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getfechaEjecutoria(), "utf8") : strtoupper($ActuacionesDto->getfechaEjecutoria()))))));
            if ($this->esFecha($ActuacionesDto->getfechaEjecutoria())) {
                $ActuacionesDto->setfechaEjecutoria($this->fechaMysql($ActuacionesDto->getfechaEjecutoria()));
            }
            $ActuacionesDto->setSecreto(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getSecreto(), "utf8") : strtoupper($ActuacionesDto->getSecreto()))))));
            if ($this->esFecha($ActuacionesDto->getSecreto())) {
                $ActuacionesDto->setSecreto($this->fechaMysql($ActuacionesDto->getSecreto()));
            }
            return $ActuacionesDto;
        }

        public function selectActuaciones($ActuacionesDto) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->selectActuaciones($ActuacionesDto);
            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function selectAcuerdoRadicacion($ActuacionesDto) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->selectAcuerdoRadicacion($ActuacionesDto);
            if ($ActuacionesDto != "") {
                return $ActuacionesDto;
                //$dtoToJson = new DtoToJson($ActuacionesDto);
                //return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function selectActuacionesAR($ActuacionesDto) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->selectActuacionesAR($ActuacionesDto);
            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function guardarSentencia($ActuacionesDto, $param) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->guardarSentencia($ActuacionesDto, $param, $_POST);
            //print_r($ActuacionesDto);
            return json_encode($ActuacionesDto);
        }

        public function guardarSentencias($ActuacionesDto, $param) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->guardarSentencias($ActuacionesDto, $param, $_POST);
            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function eliminacionsentencia($ActuacionesDto) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->eliminacionsentencia($ActuacionesDto);
            if ($ActuacionesDto != "") {

                return json_encode(array("totalCount" => "1", "data" => $ActuacionesDto));
            }

            return json_encode(array("totalCount" => "0"));
        }

        public function consultarCertificaciones($ActuacionesDto, $param) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->consultarCertificaciones($ActuacionesDto, $param);
            return $ActuacionesDto;
            /*        if ($ActuacionesDto != "") {
              $dtoToJson = new DtoToJson($ActuacionesDto);
              return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
              }
              $jsonDto = new Encode_JSON();
              return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
             */
        }

        //Select Con Relaciones (CR)
        public function selectActuacionesCR($ActuacionesDto) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->selectActuacionesCR($ActuacionesDto);
            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertActuaciones($ActuacionesDto) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->insertActuaciones($ActuacionesDto);
            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function guardarActuacion($ActuacionesDto) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->guardarActuacion($ActuacionesDto);
            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateActuaciones($ActuacionesDto) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->updateActuaciones($ActuacionesDto);
            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function updateActuacion($ActuacionesDto) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->updateActuacion($ActuacionesDto);
            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteActuaciones($ActuacionesDto) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->deleteActuaciones($ActuacionesDto);
            if ($ActuacionesDto == true) {
                $jsonDto = new Encode_JSON();
                return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
        }

        //*********************** funciones para frmulario de Oficios version 14/01/2016 ********************************
        //********************************************************************************************
        public function obtenerContadorOficio($actuacionesDto) {
//        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->obntenerContadorOficio($actuacionesDto);

            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function guardarResolucionApelacion($ActuacionesDto, $cveAccion, $estatusActuacion, $idActuacionAntecede = null, $cveTipoSentencia,$listaMagistrados="",$arrayPro) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->guardarResolucionApelacion($ActuacionesDto, $cveAccion, $estatusActuacion, null, $cveTipoSentencia,$listaMagistrados,$arrayPro);
            if (is_array($ActuacionesDto)) {
                if ($ActuacionesDto != "") {
                    $dtoToJson = new DtoToJson($ActuacionesDto);
                    return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
                }
            } else if ($ActuacionesDto == "acordada") {
                $jsonDto = new Encode_JSON();
                return $jsonDto->encode(array("totalCount" => "0", "text" => "LA PROMOCION YA ESTA ACORDADA"));
            } else {
                $jsonDto = new Encode_JSON();
                return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
            }
        }

        public function guardarOficio($ActuacionesDto, $cveAccion, $estatusActuacion, $idActuacionAntecede) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->guardarOficio($ActuacionesDto, $cveAccion, $estatusActuacion, $idActuacionAntecede);
            if (is_array($ActuacionesDto)) {
                if ($ActuacionesDto != "") {
                    $dtoToJson = new DtoToJson($ActuacionesDto);
                    return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
                }
            } else if ($ActuacionesDto == "acordada") {
                $jsonDto = new Encode_JSON();
                return $jsonDto->encode(array("totalCount" => "0", "text" => "LA PROMOCION YA ESTA ACORDADA"));
            } else {
                $jsonDto = new Encode_JSON();
                return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
            }
        }

        public function guardarAcuerdoRadicacion($ActuacionesDto, $cveAccion, $estatusActuacion, $estatusAcuerdoRadicacion, $idActuacionAntecede,$listaMagistrados) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->guardarAcuerdoRadicacion($ActuacionesDto, $cveAccion, $estatusActuacion, $estatusAcuerdoRadicacion, $idActuacionAntecede,$listaMagistrados);
            if (is_array($ActuacionesDto)) {
                if ($ActuacionesDto != "") {
                    $dtoToJson = new DtoToJson($ActuacionesDto);
                    return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
                }
            } else if ($ActuacionesDto == "acordada") {
                $jsonDto = new Encode_JSON();
                return $jsonDto->encode(array("totalCount" => "0", "text" => "LA PROMOCION YA ESTA ACORDADA"));
            } else {
                $jsonDto = new Encode_JSON();
                return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
            }
        }

//--------------------------------GUARDAR NOTIFICACIONES------------------------------
        public function GuardarNotificacion($ActuacionesDto, $param) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $NotificacionesController = new NotificacionesController();
            $ActuacionesDto = $NotificacionesController->GuardarNotificacion($ActuacionesDto, $param);
            if (is_array($ActuacionesDto)) {
                if ($ActuacionesDto != "") {
                    $dtoToJson = new DtoToJson($ActuacionesDto);
                    return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
                } else {
                    $jsonDto = new Encode_JSON();
                    return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
                }
            }
        }

//--------------------------------GUARDAR NOTIFICACIONES------------------------------
        public function GuardarNotificacionElectronica($ActuacionesDto, $param) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $NotificacionesController = new NotificacionesController();
            $ActuacionesDto = $NotificacionesController->GuardarNotificacionElectronica($ActuacionesDto, $param);
            if (is_array($ActuacionesDto)) {
                if ($ActuacionesDto != "") {
                    $dtoToJson = new DtoToJson($ActuacionesDto);
                    return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
                } else {
                    $jsonDto = new Encode_JSON();
                    return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
                }
            }
        }

//--------------------------------GUARDAR NOTIFICACIONES------------------------------
        //$ActuacionesDto, $accion, $estatusActuacion, $proveedor = null, $instancia = null
        public function deleteActuacionesOficios($ActuacionesDto, $cveAccion, $instancia = null) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();

            $ActuacionesDto = $ActuacionesController->updateOficios($ActuacionesDto, $cveAccion, "", null, $instancia);
            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteAcuerdoRadicacion($ActuacionesDto, $ActuacionesDto, $cveAccion, $idActuacionAntecede) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->updateAcuerdoRadicacion($ActuacionesDto, $ActuacionesDto, $cveAccion, "", "", $idActuacionAntecede, "");
            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
                //$jsonDto = new Encode_JSON();
                //return $jsonDto->encode(array("totalCount" => "1", "text"=>"REGISTRO ACTUALIZADO"));
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "Existe proyecto de resolucion sobre esta TOCA y no se puede eliminar"));
        }

        public function deleteActuacionesResolucionApelacion($ActuacionesDto, $cveAccion) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->updateResolucionApelacion($ActuacionesDto, $cveAccion, "");
            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteActuacionesAntecedes($idActuacion, $idActuacionPadre) {
            $ActuacionesController = new ActuacionesController();

            $ActuacionesDto = $ActuacionesController->deleteActuacionesAntecedes($idActuacion, $idActuacionPadre);
            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteActuacionesAntecedesRadicacion($idActuacion, $idActuacionPadre) {
            $ActuacionesController = new ActuacionesController();

            $ActuacionesDto = $ActuacionesController->deleteActuacionesAntecedesRadicacion($idActuacion, $idActuacionPadre);
            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function consultarOficios($ActuacionesDto, $param, $estatusActuacion,$sinRelacion) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->consultarOficios($ActuacionesDto, $param, $estatusActuacion,null,$sinRelacion);
            if ($ActuacionesDto != "") {
//            $dtoToJson = new DtoToJson($ActuacionesDto);
                return $ActuacionesDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function consultarOficiosRemision($ActuacionesDto, $param, $estatusActuacion) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->consultarOficiosRemision($ActuacionesDto, $param, $estatusActuacion);
            if ($ActuacionesDto != "") {
//            $dtoToJson = new DtoToJson($ActuacionesDto);
                return $ActuacionesDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function consultarAcuerdosRadicacion($ActuacionesDto, $param, $estatusActuacion, $estatusRadicacion) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->consultarAcuerdosRadicacion($ActuacionesDto, $param, $estatusActuacion, $estatusRadicacion);
            if ($ActuacionesDto != "") {
//            $dtoToJson = new DtoToJson($ActuacionesDto);
                return $ActuacionesDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function consultarResolucionApelacion($ActuacionesDto, $param, $estatusActuacion = null) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
//      var_dump($ActuacionesDto);
            $ActuacionesDto = $ActuacionesController->consultarResolucionApelacion($ActuacionesDto, $param, $estatusActuacion);
            if ($ActuacionesDto != "") {
//            $dtoToJson = new DtoToJson($ActuacionesDto);
                return $ActuacionesDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        // consultar actuaciones con su resolucion
        public function consultarResoluciones($ActuacionesDto, $param) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->consultarResoluciones($ActuacionesDto, $param);
            if ($ActuacionesDto != "") {
//            $dtoToJson = new DtoToJson($ActuacionesDto);
                return $ActuacionesDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        // consultar actuaciones con su resolucion
        public function consultarActuaciones($ActuacionesDto, $param) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->consultarActuaciones($ActuacionesDto, $param);
            if ($ActuacionesDto != "") {
//            $dtoToJson = new DtoToJson($ActuacionesDto);
                return $ActuacionesDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function consultarActuacionesRemision($ActuacionesDto, $param) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->consultarActuacionesRemision($ActuacionesDto, $param);
            if ($ActuacionesDto != "") {
//            $dtoToJson = new DtoToJson($ActuacionesDto);
                return $ActuacionesDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function consultarRemisiones($ActuacionesDto, $param) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->consultarRemisiones($ActuacionesDto, $param);
            if ($ActuacionesDto != "") {
                return $ActuacionesDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function consultarApelantes($idCarpetaJudicial) {
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->consultarApelantes($idCarpetaJudicial);
            if ($ActuacionesDto != "") {
                return $ActuacionesDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function updateOficios($ActuacionesDto, $cveAccion, $estatusActuacion) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();

            $ActuacionesDto = $ActuacionesController->updateOficios($ActuacionesDto, $cveAccion, $estatusActuacion);
            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function updateAcuerdoRadicacion($ActuacionesDto, $actuacionesDto, $cveAccion, $estatusActuacion, $estatusAcuerdoRadicacion, $idActuacionAntecede,$listaMagistrados) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->updateAcuerdoRadicacion($ActuacionesDto, $actuacionesDto, $cveAccion, $estatusActuacion, $estatusAcuerdoRadicacion, $idActuacionAntecede,null,$listaMagistrados);
            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function updateResolucionApelacion($ActuacionesDto, $cveAccion, $estatusActuacion, $cveTipoSentencia = null,$listaMagistrados, $arrayPro) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();

            $ActuacionesDto = $ActuacionesController->updateResolucionApelacion($ActuacionesDto, $cveAccion, $estatusActuacion, null, $cveTipoSentencia,$listaMagistrados, $arrayPro);
            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function guardarOficioManual($ActuacionesDto, $idActEliminar, $cveAccion, $estatusActuacion) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->guardarOficioManual($ActuacionesDto, $idActEliminar, $cveAccion, $estatusActuacion);
            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }

            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function muestraEstatusActuacion($ActuacionesDto) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->muestraEstatusActuacion($ActuacionesDto);
            if ($ActuacionesDto != "") {
//            $dtoToJson = new DtoToJson($ActuacionesDto);  
                return $ActuacionesDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

//

        public function buscaActuacionPadre($idActHija) {
            //$ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->buscaActuacionPadre($idActHija);
            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("ACTUACION PADRE..");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

//************************************ oficios, acuerdos ***********************************************************
        public function guardarActuacion_Certificacion($ActuacionesDto) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->guardarActuacion_Certificacion($ActuacionesDto);
            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function getPaginasComparecencias($ActuacionesDto, $param, $cveTipoParte) {
//        echo "\n\n\n\n   Get PaginasComparecencias\n";
            //var_dump($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->getPaginasComparecencias($ActuacionesDto, $param, $cveTipoParte);
            if ($ActuacionesDto != "") {
//            $dtoToJson = new DtoToJson($ActuacionesDto);
                return $ActuacionesDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function getPaginas($ActuacionesDto, $param, $estatusActuacion = null) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->getPaginas($ActuacionesDto, $param, $estatusActuacion);
            if ($ActuacionesDto != "") {
//            $dtoToJson = new DtoToJson($ActuacionesDto);
                return $ActuacionesDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function getPaginasCertificacion($ActuacionesDto, $param, $estatusActuacion = null) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->getPaginasCertificacion($ActuacionesDto, $param, $estatusActuacion);
            if ($ActuacionesDto != "") {
//            $dtoToJson = new DtoToJson($ActuacionesDto);
                return $ActuacionesDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function getPaginasAcuerdosRadicacion($ActuacionesDto, $param, $estatusActuacion, $estatusAcuerdoRadicacion) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->getPaginasAcuerdosRadicacion($ActuacionesDto, $param, $estatusActuacion, $estatusAcuerdoRadicacion);
            if ($ActuacionesDto != "") {
//            $dtoToJson = new DtoToJson($ActuacionesDto);
                return $ActuacionesDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function getPaginasResolucionApelacion($ActuacionesDto, $param, $estatusActuacion = null) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->getPaginasResolucionApelacion($ActuacionesDto, $param, $estatusActuacion);
            if ($ActuacionesDto != "") {
//            $dtoToJson = new DtoToJson($ActuacionesDto);
                return $ActuacionesDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function actualizarActuacion_Certificacion($ActuacionesDto) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->actualizarActuacion_Certificacion($ActuacionesDto);
            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function guardarCarpeta_Judicializada($judicializadasDto, $listaPromoventes, $param) {
            $judicializadasDto = $this->validarActuaciones($judicializadasDto);
            $ActuacionesController = new ActuacionesController();
            $judicializadasDto = $ActuacionesController->guardarCarpeta_Judicializada($judicializadasDto, "", $listaPromoventes, $param);

            if ($judicializadasDto["Estatus"] == "Ok") {
                $dtoToJson = new DtoToJson($judicializadasDto["ActuacionesDto"]);
                return $dtoToJson->toJson($judicializadasDto["Mensaje"], $judicializadasDto["totalCount"]);
            } else {
                $jsonDto = new Encode_JSON();
                return $jsonDto->encode(array("totalCount" => "0", "text" => $judicializadasDto["Mensaje"]));
            }
        }

        public function consultarActuacion_CarpetaJudicializada($judicializadasDto, $params) {

            $judicializadasDto = $this->validarActuaciones($judicializadasDto);
            $ActuacionesController = new ActuacionesController();
            $judicializadasDto = $ActuacionesController->consultarActuacion_CarpetaJudicializada($judicializadasDto, $params);

//        print_r($judicializadasDto,true);
            $judicializadasDto = json_encode($judicializadasDto);
            return $judicializadasDto;
        }

        public function guardarActuacion_Promociontermino($ActuacionesDto, $listaPromoventes) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->guardarActuacion_Promociontermino($ActuacionesDto, null, $listaPromoventes);

            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function consultarPromocion_Termino($promocionesTerminoDto, $params) {

            $promocionesTerminoDto = $this->validarActuaciones($promocionesTerminoDto);
            $ActuacionesController = new ActuacionesController();
            $promocionesTerminoDto = $ActuacionesController->consultarPromocion_Termino($promocionesTerminoDto, $params);

//        print_r($promocionesTerminoDto,true);
            $promocionesTerminoDto = json_encode($promocionesTerminoDto);
            return $promocionesTerminoDto;
        }

        public function guardarActuacion_Promocion($ActuacionesDto, $listaPromoventes) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->guardarActuacion_Promocion($ActuacionesDto, null, $listaPromoventes);
            error_log(print_r($ActuacionesDto, true));
            if ($ActuacionesDto != "") {
                if ($ActuacionesDto["Estatus"] == "Ok") {
                    $dtoToJson = new DtoToJson($ActuacionesDto["actuacion"]);
                    return $dtoToJson->toJson($ActuacionesDto["mensaje"]);
                } else {
                    $jsonDto = new Encode_JSON();
                    return $jsonDto->encode(array("totalCount" => "0", "text" => $ActuacionesDto["mensaje"]));
                }
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => $ActuacionesDto["mensaje"]));
        }

        public function consultarActuacion_Promocion($ActuacionesDto, $params, $usuario) {

            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->consultarActuacion_Promocion($ActuacionesDto, $params, $usuario);
            $ActuacionesDto = json_encode($ActuacionesDto);
            error_log("actuaciones en facade => " . $ActuacionesDto);

            return $ActuacionesDto;
        }

        public function eliminarActuacion_Promocion($ActuacionesDto) {

            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->eliminarActuacion_Promocion($ActuacionesDto);
            $ActuacionesDto = json_encode($ActuacionesDto);


            return $ActuacionesDto;
        }

        public function actualizarActuacion_Promociontermino($ActuacionesDto, $listaPromoventes, $param) {
            error_log("actualizarActuacion_Promocion => " . print_r($param, true));
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->actualizarActuacion_Promociontermino($ActuacionesDto, "", $listaPromoventes, $param);
            if ($ActuacionesDto != "" && $ActuacionesDto["Estatus"] == "Ok") {
                $dtoToJson = new DtoToJson($ActuacionesDto["ActuacionesDto"]);
                error_log("Respuesta de actuaciones=>" . print_r($ActuacionesDto, true));
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            if ($ActuacionesDto != "" && $ActuacionesDto["Estatus"] == "Error") {
                $jsonDto = new Encode_JSON();
                return $jsonDto->encode(array("totalCount" => "0", "text" => strtoupper($ActuacionesDto["Mensaje"])));
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function actualizarActuacion_Promocion($ActuacionesDto, $listaPromoventes, $param) {
            error_log("actualizarActuacion_Promocion => " . print_r($param, true));
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->actualizarActuacion_Promocion($ActuacionesDto, "", $listaPromoventes, $param);
            if ($ActuacionesDto != "" && $ActuacionesDto["Estatus"] == "Ok") {
                $dtoToJson = new DtoToJson($ActuacionesDto["ActuacionesDto"]);
                error_log("Respuesta de actuaciones=>" . print_r($ActuacionesDto, true));
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            if ($ActuacionesDto != "" && $ActuacionesDto["Estatus"] == "Error") {
                $jsonDto = new Encode_JSON();
                return $jsonDto->encode(array("totalCount" => "0", "text" => strtoupper($ActuacionesDto["Mensaje"])));
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
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

        private function fechaMysqlNomral($fecha) {
            list($year, $mes, $dia) = explode("-", $fecha);
            return $dia . "/" . $mes . "/" . $year;
        }

        /*         * ************  INICIO FUNCIONES PARA EL AUTO DE VINCULACION ***************** */

        public function getSalas($ActuacionesDto) {
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->getSalas();
            return $ActuacionesDto;
            /*        if ($ActuacionesDto != "") {
              $dtoToJson = new DtoToJson($ActuacionesDto);
              return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
              }
              $jsonDto = new Encode_JSON();
              return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
             */
        }

        public function guardaAuto($ActuacionesDto, $listaImputados, $apelaciones,$cveEstatus) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->guardaAuto($ActuacionesDto, $listaImputados, $apelaciones,$cveEstatus);
            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA - AUTO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO - AUTO"));
        }

        /*
         * Funcion para guardar las Remisiones de apelacion
         *      */

        public function guardaRemisionApelacion($ActuacionesDto, $listaImpofedel, $datosRemision) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto2 = $ActuacionesController->guardaRemisionApelacion($ActuacionesDto, $listaImpofedel, $datosRemision);
            return $ActuacionesDto2;
        }

        /*
         * Funcion para guardar las Remisiones de apelacion
         *      */

        public function actualizarRemisionApelacion($ActuacionesDto, $listaImpofedel, $listaDefensores, $datosRemision) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto2 = $ActuacionesController->actualizaRemisionApelacion($ActuacionesDto, $listaImpofedel, $listaDefensores, $datosRemision);

            return $ActuacionesDto2;
        }

        /*
         * Funcion para guardar las Revisiones Extraordinaria
         *      */

        public function guardaRevisionExtraordinaria($ActuacionesDto, $listaImpofedel, $datosRevision) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto2 = $ActuacionesController->guardaRevisionExtraordinaria($ActuacionesDto, $listaImpofedel, $datosRevision);
            return $ActuacionesDto2;
        }

        /*
         * Funcion para actualizar las Revisiones extraordinarias
         *      */

        public function actualizarRevisionExtraordinaria($ActuacionesDto, $listaImpofedel, $listaDefensores, $datosRevision) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto2 = $ActuacionesController->actualizarRevisionExtraordinaria($ActuacionesDto, $listaImpofedel, $listaDefensores, $datosRevision);

            return $ActuacionesDto2;
        }

        public function consultarRevisionExtraordinaria($params, $paginacion) {

            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->consultarRevisionExtraordinaria($params, $paginacion);
            if ($ActuacionesDto != "") {
                //$dtoToJson = new DtoToJson($RemisionapelacionesDto);
                return $ActuacionesDto; //$dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function consultarRevisionExtraordinariaTradicional($params, $paginacion) {

            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->consultarRevisionExtraordinariaTradicional($params, $paginacion);
            if ($ActuacionesDto != "") {
                //$dtoToJson = new DtoToJson($RemisionapelacionesDto);
                return $ActuacionesDto; //$dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function getPaginasRevisionExtraordinaria($params, $paginacion) {

            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->getPaginasRevisionExtraordinaria($params, $paginacion);
            if ($ActuacionesDto != "") {
                //$dtoToJson = new DtoToJson($RemisionapelacionesDto);
                return $ActuacionesDto; //$dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }

            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function getPaginasRevisionExtraordinariaTradicional($params, $paginacion) {

            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->getPaginasRevisionExtraordinariaTradicional($params, $paginacion);
            if ($ActuacionesDto != "") {
                //$dtoToJson = new DtoToJson($RemisionapelacionesDto);
                return $ActuacionesDto; //$dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }

            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function guardar_reasignatoca($params) {
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->guardaReasignacionSegundaInstancia($params);
            return $ActuacionesDto;
        }

        public function guardaReasignacionSegundaInstanciaTribunal($params) {
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->guardaReasignacionSegundaInstanciaTribunal($params);
            return $ActuacionesDto;
        }

        public function actualizaAuto($ActuacionesDto, $listaImputados, $apelaciones,$cveEstatus) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->actualizaAuto($ActuacionesDto, $listaImputados, $apelaciones,$cveEstatus);
            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO DE FORMA CORRECTA - AUTO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL ACTUALIZAR EL REGISTRO - AUTO"));
        }

        public function borraAuto($ActuacionesDto) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->borraAuto($ActuacionesDto);
            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("REGISTRO ELIMINADO DE FORMA CORRECTA - AUTO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL ELIMINAR EL REGISTRO - AUTO"));
        }

        public function buscarAutos($ActuacionesDto, $param) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $AutovinculacionController = new AutovinculacionController();
            $ActuacionesDto = $AutovinculacionController->buscarAutos($ActuacionesDto, $param);
            return $ActuacionesDto;
        }

        public function obtenerAuto_AutoVinculacion($ActuacionesDto) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $AutovinculacionController = new AutovinculacionController();
            $ActuacionesDto = $AutovinculacionController->obtenerAuto_AutoVinculacion($ActuacionesDto);
            return $ActuacionesDto;
        }

        public function obtenerAuto($ActuacionesDto) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->obtenerAuto($ActuacionesDto);
            return $ActuacionesDto;
        }

        /*         * ************  FIN FUNCIONES PARA EL AUTO DE VINCULACION ***************** */
        /*         * ************* INICIO FUNCIONES MEDIDAS CAUTELARES ******************** */

        public function guardaMedidasCautelares($ActuacionesDto, $listaImputados, $medidas, $apelaciones) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->guardaMedidasCautelares($ActuacionesDto, $listaImputados, $medidas, $apelaciones);
            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA - MEDIDAS CAUTELARES");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO - MEDIDAS CAUTELARES"));
        }

        public function actualizaMedidasCautelares($ActuacionesDto, $listaImputados, $medidas, $apelaciones) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->actualizaMedidasCautelares($ActuacionesDto, $listaImputados, $medidas, $apelaciones);
            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO DE FORMA CORRECTA - MEDIDAS CAUTELARES");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL ACTUALIZAR EL REGISTRO - MEDIDAS CAUTELARES"));
        }

        public function borraMedidaCautelar($ActuacionesDto) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->borraMedidaCautelar($ActuacionesDto);
            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("REGISTRO ELIMINADO DE FORMA CORRECTA - MEDIDAS CAUTELARES");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL ELIMINAR EL REGISTRO - MEDIDAS CAUTELARES"));
        }

        public function buscarMedidasCautelares($ActuacionesDto, $param) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->buscarMedidasCautelares($ActuacionesDto, $param);
            return $ActuacionesDto;
        }

        /** Obtiene la relacion de Imputados-MedidaCautelar * */
        public function imputadosMedidaCautelar($ActuacionesDto) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->imputadosMedidaCautelar($ActuacionesDto);
            return $ActuacionesDto;
        }

        /*         * *************** FIN FUNCIONES MEDIDAS CAUTELARES ********************** */
        /*         * *************** INICIO MEDIDAS DE PROTECCION ************************** */

        public function mp_obtenerAuto($ActuacionesDto) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->mp_obtenerAuto($ActuacionesDto);
            return $ActuacionesDto;
        }

        public function mp_guardar($ActuacionesDto, $listaOfendidos, $medidas, $apelaciones) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->mp_guardar($ActuacionesDto, $listaOfendidos, $medidas, $apelaciones);
            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA - MEDIDAS DE PROTECCION");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO - MEDIDAS DE PROTECCION"));
        }

        public function mp_actualizar($ActuacionesDto, $listaOfendidos, $medidas, $apelaciones) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->mp_actualizar($ActuacionesDto, $listaOfendidos, $medidas, $apelaciones);
            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO DE FORMA CORRECTA - MEDIDAS DE PRECAUCION");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL ACTUALIZAR EL REGISTRO - MEDIDAS DE PROTECCION"));
        }

        public function mp_borrar($ActuacionesDto) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->mp_borrar($ActuacionesDto);
            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("REGISTRO ELIMINADO DE FORMA CORRECTA - MEDIDAS DE PROTECCION");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL ELIMINAR EL REGISTRO - MEDIDAS DE PROTECCION"));
        }

        public function mp_buscar($ActuacionesDto, $param) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->mp_buscar($ActuacionesDto, $param);
            return $ActuacionesDto;
        }

        /*         * *************** TERMINO MEDIDAS DE PROTECCION ************************* */

//**************** ***************************************************************************
        public function consultarMedidas($ActuacionesDto, $param, $cveMedidaCaut) { // medidas cautelares
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->consultarMedidas($ActuacionesDto, $param, $cveMedidaCaut);
            if ($ActuacionesDto != "") {
//            $dtoToJson = new DtoToJson($ActuacionesDto);
                return $ActuacionesDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

//********************************************************************************************    
        //**************** CONSULTA DE MEDIDAS DE PROTECCIÓN******************************************************
        public function consultarMedidasProteccion($ActuacionesDto, $param, $cveMedidaCaut) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->consultarMedidasProteccion($ActuacionesDto, $param, $cveMedidaCaut);
            if ($ActuacionesDto != "") {
//            $dtoToJson = new DtoToJson($ActuacionesDto);
                return $ActuacionesDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

//*******************TERMINODE CONSULTA DE MEDIDAS DE PROTECCIÓN*******************************************      
        //**************** CONSULTA DE notificaciones******************************************************
        public function consultarNotificaciones($ActuacionesDto, $param) {
            //print_r($ActuacionesDto);
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $NotificacionesController = new NotificacionesController();
            $ActuacionesDto = $NotificacionesController->consultarNotificaciones($ActuacionesDto, $param);
            if ($ActuacionesDto != "") {
//            $dtoToJson = new DtoToJson($ActuacionesDto);
                return $ActuacionesDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

//**************** CONSULTA DE NOTIFICACIONES ELECTRÓNICA******************************************************
        public function consultarNotificacionesElectronica($ActuacionesDto, $param) {
            //print_r($ActuacionesDto);
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $NotificacionesController = new NotificacionesController();
            $ActuacionesDto = $NotificacionesController->consultarNotificacionesElectronica($ActuacionesDto, $param);
            if ($ActuacionesDto != "") {
//            $dtoToJson = new DtoToJson($ActuacionesDto);
                return $ActuacionesDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        //**************** CONSULTA DE NOTIFICACIONES ******************************************************
        public function consultarDetalleElectronica($ActuacionesDto, $param) {
            //print_r($ActuacionesDto);
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $NotificacionesController = new NotificacionesController();
            $ActuacionesDto = $NotificacionesController->consultarDetalleElectronica($ActuacionesDto, $param);
            if ($ActuacionesDto != "") {
//            $dtoToJson = new DtoToJson($ActuacionesDto);
                return $ActuacionesDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        //**************** CONSULTA DE notificaciones Electrónica******************************************************
        public function ConsultarActuacionesImpOfElectronica($ActuacionesDto, $param) {
            //print_r($ActuacionesDto);
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $NotificacionesController = new NotificacionesController();
            $ActuacionesDto = $NotificacionesController->ConsultarActuacionesImpOfElectronica($ActuacionesDto, $param);
            if ($ActuacionesDto != "") {
//            $dtoToJson = new DtoToJson($ActuacionesDto);
                return $ActuacionesDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

//*******************TERMINODE CONSULTA DE MEDIDAS DE PROTECCIÓN*******************************************      
        /*         * *************** INICIO COMPARECENCIAS ********************************* */
        public function guardarActuacion_Comparecencia($ActuacionesDto, $listaComparecentes, $numEmpleadoFePublica, $lugarComparecencia, $horaComparecencia, $nombrePersonaFePublica) {
            //echo "\nActuacionesFacade --> function : guardarActuacion_Comparecente";
            //var_dump($ActuacionesDto);
            //var_dump($listaComparecentes);
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            //echo "vardump despues de validaActuaciones";
            //var_dump($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->guardarActuacion_Comparecencia($ActuacionesDto, "", $listaComparecentes, $numEmpleadoFePublica, $lugarComparecencia, $horaComparecencia, $nombrePersonaFePublica);
            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("REGISTRO COMPARECENCIA REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function eliminarActuacion_Comparecencia($ActuacionesDto, $idComparecencia, $listaComparecentes) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->eliminarActuacion_Comparecencia($ActuacionesDto, $idComparecencia, $listaComparecentes);
            $ActuacionesDto = json_encode($ActuacionesDto);

            return $ActuacionesDto;
        }

        public function actualizarActuacion_Comparecencia($ActuacionesDto, $listaComparecentes, $numEmpleadoFePublica, $lugarComparecencia, $horaComparecencia, $nombrePersonaFePublica) {
            $idComparecencia = $_POST['idComparecencia'];
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->actualizarActuacion_Comparecencia($ActuacionesDto, "", $listaComparecentes, $numEmpleadoFePublica, $lugarComparecencia, $horaComparecencia, $nombrePersonaFePublica);
            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("ACTUALIZACION REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function consultarComparecenciaById($ActuacionesDto) {
            //var_dump($ActuacionesDto);
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->consultarActuacion_ComparecenciaBy($ActuacionesDto);
            //var_dump($ActuacionesDto);
            $ActuacionesDto = json_encode($ActuacionesDto);

            return $ActuacionesDto;
        }

        public function consultarActuacion_Comparecencia($ActuacionesDto, $param, $cveTipoParte) {
            //echo "\n inicia consultar actuacion comparecencia function";.
            //$param["pag"] = "";
            //$param["cantxPag"] = "";
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->consultarActuacion_Comparecencia($ActuacionesDto, $param, $cveTipoParte);
            //var_dump($ActuacionesDto);
            $ActuacionesDto = json_encode($ActuacionesDto);

            return $ActuacionesDto;
        }

        /*         * *************** TERMINO COMPARECENCIAS ********************************* */

        //********************** FORMULACION DE IMPUTACIKON *******************************

        public function guardarActuacion_FormulacionImputacion($ActuacionesDto, $idImpOfeDelCarpeta, $idJuzgador, $cveTipoFormulacion, $fechaFormulacion) {
            $actuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $fechaFormulacion = $this->fechaMysql($fechaFormulacion);
            $ActuacionesController = new ActuacionesController();
            $actuacionesDtoC = $ActuacionesController->guardarActuacionFormulacionImputacion($actuacionesDto, $idImpOfeDelCarpeta, $idJuzgador, $cveTipoFormulacion, $fechaFormulacion);
            //print_r($ActuacionesDto);
            return $actuacionesDtoC;
        }

        public function actualizarActuacion_FormulacionImputacion($ActuacionesDto, $idImpOfeDelCarpeta, $idJuzgador, $cveTipoFormulacion, $fechaFormulacion, $idFormulacionImputacion) {
            $actuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $fechaFormulacion = $this->fechaMysql($fechaFormulacion);
            $ActuacionesController = new ActuacionesController();
            $actuacionesDtoC = $ActuacionesController->actualizarActuacionFormulacionImputacion($actuacionesDto, $idImpOfeDelCarpeta, $idJuzgador, $cveTipoFormulacion, $fechaFormulacion, $idFormulacionImputacion);
            //print_r($ActuacionesDto);
            return $actuacionesDtoC;
        }

        // FORMULAION DE IMPUTACION

        /* ---------------------------------------------------------------------------------- */
        //**************** CONSULTA DE ACTUACIONES, OFENDIDOS Y AUTOS************************
        public function ConsultarActuacionesImpOf($ActuacionesDto, $param) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $NotificacionesController = new NotificacionesController();
            $ActuacionesDto = $NotificacionesController->ConsultarActuacionesImpOf($ActuacionesDto, $param);
            if ($ActuacionesDto != "") {
//            $dtoToJson = new DtoToJson($ActuacionesDto);
                return $ActuacionesDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        /*         * ************ INICIO FUNCIONES SUSPENSION CONDICIONAL ******************** */

        public function guardaSuspensionCondicional($ActuacionesDto, $listaImputados, $medidas, $apelaciones) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $Suspensioncondicional = new Suspensioncondicional();
            $ActuacionesDto = $Suspensioncondicional->guardaSuspensionCondicional($ActuacionesDto, $listaImputados, $medidas, $apelaciones);
            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA - SUSPENSI&Oacute;N CONDICIONAL");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO - SUSPENSI&Oacute;N CONDICIONAL"));
        }

        public function actualizaSuspensionCondicional($ActuacionesDto, $listaImputados, $medidas, $apelaciones) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $Suspensioncondicional = new Suspensioncondicional();
            $ActuacionesDto = $Suspensioncondicional->actualizaSuspensionCondicional($ActuacionesDto, $listaImputados, $medidas, $apelaciones);
            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO DE FORMA CORRECTA - SUSPENSI&Oacute;N CONDICIONAL");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL ACTUALIZAR EL REGISTRO - SUSPENSI&Oacute;N CONDICIONAL"));
        }

        public function borraSuspensionCondicional($ActuacionesDto) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $Suspensioncondicional = new Suspensioncondicional();
            $ActuacionesDto = $Suspensioncondicional->borraSuspensionCondicional($ActuacionesDto);
            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("REGISTRO ELIMINADO DE FORMA CORRECTA - SUSPENSI&Oacute;N CONDICIONAL");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL ELIMINAR EL REGISTRO - SUSPENSI&Oacute;N CONDICIONAL"));
        }

        public function buscarSuspensionCondicional($ActuacionesDto, $param) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $Suspensioncondicional = new Suspensioncondicional();
            $ActuacionesDto = $Suspensioncondicional->buscarSuspensionCondicional($ActuacionesDto, $param);
            return $ActuacionesDto;
        }

        /** Obtiene la relacion de Imputados-MedidaCautelar * */
        public function imputadosSuspensionCondicional($ActuacionesDto) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $Suspensioncondicional = new Suspensioncondicional();
            $ActuacionesDto = $Suspensioncondicional->imputadosSuspensionCondicional($ActuacionesDto);
            return $ActuacionesDto;
        }

        public function buscarImputadosSuspensionCondicional($ActuacionesDto) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $Suspensioncondicional = new Suspensioncondicional();
            $ActuacionesDto = $Suspensioncondicional->buscarImputadosSuspensionCondicional($ActuacionesDto);
            return $ActuacionesDto;
        }

        /*         * ************** FIN FUNCIONES SUSPENSION CONDICIONAL ********************** */

        /*         * *************** generar json para el archivo PDF *************************** */

        public function generarJson($ActuacionesDto, $cveTipoDocumento, $cveTipo) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->generarJson($ActuacionesDto, $cveTipoDocumento, $cveTipo);
            if ($ActuacionesDto != "") {
//            $dtoToJson = new DtoToJson($ActuacionesDto);
                return $ActuacionesDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        /*         * *************** generar json para el archivo PDF *************************** */

        public function guardarOficioResagado($ActuacionesDto, $idActEliminar, $cveAccion, $estatusActuacion) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->guardarOficioResagado($ActuacionesDto, $idActEliminar, $cveAccion, $estatusActuacion);
            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }

            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        /*         * ************* INICIO FUNCIONES ORDENES DE APREHENSION ******************** */

        public function guardaOrdenesAprehension($ActuacionesDto, $listaImputados, $ordenes, $apelaciones) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $Ordenesaprehension = new Ordenesaprehension();
            $ActuacionesDto = $Ordenesaprehension->guardaOrdenesAprehension($ActuacionesDto, $listaImputados, $ordenes, $apelaciones);
            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA - ORDENES DE APREHENSION");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO - ORDENES DE APREHENSION"));
        }

        public function actualizaOrdenesAprehension($ActuacionesDto, $listaImputados, $ordenes, $apelaciones) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $Ordenesaprehension = new Ordenesaprehension();
            $ActuacionesDto = $Ordenesaprehension->actualizaOrdenesAprehension($ActuacionesDto, $listaImputados, $ordenes, $apelaciones);
            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO DE FORMA CORRECTA - ORDENES DE APREHENSION");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL ACTUALIZAR EL REGISTRO - ORDENES DE APREHENSION"));
        }

        public function borraOrdenesAprehension($ActuacionesDto) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $Ordenesaprehension = new Ordenesaprehension();
            $ActuacionesDto = $Ordenesaprehension->borraOrdenesAprehension($ActuacionesDto);
            if ($ActuacionesDto != "") {
                $dtoToJson = new DtoToJson($ActuacionesDto);
                return $dtoToJson->toJson("REGISTRO ELIMINADO DE FORMA CORRECTA - ORDENES DE APREHENSION");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL ELIMINAR EL REGISTRO - ORDENES DE APREHENSION"));
        }

        public function buscarOrdenesAprehension($ActuacionesDto, $param) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $Ordenesaprehension = new Ordenesaprehension();
            $ActuacionesDto = $Ordenesaprehension->buscarOrdenesAprehension($ActuacionesDto, $param);
            return $ActuacionesDto;
        }

        public function buscarImputadosOrdenesAprehension($ActuacionesDto) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $Ordenesaprehension = new Ordenesaprehension();
            $ActuacionesDto = $Ordenesaprehension->buscarImputadosOrdenesAprehension($ActuacionesDto);
            return $ActuacionesDto;
        }
        
         public function obtenerPromocionAcordada($ActuacionesDto) {
            $Antecedesactuaciones = new AntecedesactuacionesController();
            $AntecedesactuacionesDto = new AntecedesactuacionesDTO();
            $AntecedesactuacionesDto->setIdActuacionPadre($ActuacionesDto->getIdActuacion());
            $AntecedesactuacionesDto =  $Antecedesactuaciones->selectAntecedesactuaciones($AntecedesactuacionesDto);
            if($AntecedesactuacionesDto != ""){
                $acordada = false;
                for ($i = 0; $i < count($AntecedesactuacionesDto); $i++) {
                    $ActuacionesDao = new ActuacionesDAO();
                    $ActuacionesDto2 = new ActuacionesDTO();
                    $ActuacionesDto2->setIdActuacion($AntecedesactuacionesDto[$i]->getIdActuacionHija());
                    $ActuacionesDto2->setCveTipoActuacion(2);
                    $ActuacionesDto2 = $ActuacionesDao->selectActuaciones($ActuacionesDto2);
                    if($ActuacionesDto2 != ""){
                        $acordada = true;
                    }else{
                        $acordada = false;
                    }
                }
                if($acordada){
                    return "Acordada";
                }else{
                    return "No Acordada";
                }
            }else{
                return "No Acordada";
            }
        }

        public function consultaPromocion($ActuacionesDto, $param) {
            $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->consultaPromocion($ActuacionesDto, $param);

            $json = "";
            $x = 1;
            if ($ActuacionesDto != "") {

                $tiposCarpetasDto = new TiposcarpetasDTO();
                $tiposCarpetasDao = new TiposcarpetasDAO();

                $tiposActuacionesDto = new TiposactuacionesDTO();
                $tiposActuacionesDao = new TiposactuacionesDAO();

                $promoventesActuacionesDao = new PromoventesactuacionesDAO();
                $json .= "{";
                $json .= '"status":"Ok",';
                $json .= '"totalCount":"' . count($ActuacionesDto) . '",';
                $json .= '"data":[';
                foreach ($ActuacionesDto as $Actuacion) {



                    if ($Actuacion->getcveTipoCarpeta()) {
                        $tiposCarpetasDto->setCveTipoCarpeta($Actuacion->getcveTipoCarpeta());
                        $rsTiposCarpetasDto = $tiposCarpetasDao->selectTiposcarpetas($tiposCarpetasDto);
                        if ($rsTiposCarpetasDto != "") {
                            $tipoCarpeta = utf8_encode($rsTiposCarpetasDto[0]->getDesTipoCarpeta());
                        } else {
                            $tipoCarpeta = "SIN RELACION";
                        }
                    } else {
                        $tipoCarpeta = "SIN RELACION";
                    }

                    $tiposActuacionesDto->setCveTipoActuacion($Actuacion->getCveTipoActuacion());
                    $rsTiposActuacionesDto = $tiposActuacionesDao->selectTiposactuaciones($tiposActuacionesDto);
                    if ($rsTiposActuacionesDto != "") {
                        $tipoPromocion = utf8_encode($rsTiposActuacionesDto[0]->getDesTipoActuacion());
                    } else {
                        $tipoPromocion = "SIN RELACION";
                    }
                    if ($Actuacion->getFechaRegistro() != "") {
                        $fechaMysql = explode(" ", $Actuacion->getFechaRegistro());
                        $fecha = $this->fechaMysqlNomral($fechaMysql[0]) . " " . $fechaMysql[1];
                    } else {
                        $fecha = "";
                    }
                    $promoventesActuacionesDto = new PromoventesactuacionesDTO();
                    $promoventesActuacionesDto->setIdActuacion($Actuacion->getIdActuacion());
                    $promoventesActuacionesDto->setActivo("S");
                    $rsPromoventesDto = $promoventesActuacionesDao->selectPromoventesactuaciones($promoventesActuacionesDto);
                    if ($rsPromoventesDto != "") {
                        $r = 1;
                        $promoventes = "";
                        foreach ($rsPromoventesDto as $rsPromovente) {
                            if ((int) $rsPromovente->getCveTipoPersona() == 1) {
                                $promoventes .= " " . ($rsPromovente->getNombre() . " " . $rsPromovente->getPaterno() . " " . $rsPromovente->getMaterno());
                            } else {
                                $promoventes .= " " . $rsPromovente->getNombrePersonaMoral();
                            }
                            $r ++;
                            if ($r <= count($rsPromoventesDto)) {
                                $promoventes .= ",";
                            }
                        }
                    } else {
                        $promoventes .= "N/A";
                    }

                    $json .= "{";
                    $json .= '"idActuacion":' . json_encode(utf8_encode($Actuacion->getIdActuacion())) . ",";
                    $json .= '"numPromocion":' . json_encode(utf8_encode($Actuacion->getNumActuacion() . "/" . $Actuacion->getAniActuacion())) . ",";
                    $json .= '"fechaRegistro":' . json_encode(utf8_encode($fecha)) . ",";
                    $json .= '"numCausa":' . json_encode(utf8_encode($Actuacion->getNumero() . "/" . $Actuacion->getAnio() . " " . $tipoCarpeta)) . ",";
                    $json .= '"sintesis":' . json_encode(utf8_encode($Actuacion->getSintesis())) . ",";
                    $json .= '"cveTipoActuacion":' . json_encode(utf8_encode($Actuacion->getCveTipoActuacion())) . ",";
                    $json .= '"tipoPromocion":' . json_encode(utf8_encode($tipoPromocion)) . ",";
                    $json .= '"promovente":' . json_encode(utf8_encode($promoventes)) . ",";
                    $json .= '"acordada":' . json_encode(utf8_encode($this->obtenerPromocionAcordada($Actuacion))) . "";
                    $json .= "}" . "\n";
                    $x ++;
                    if ($x <= count($ActuacionesDto)) {
                        $json .= ",";
                    }
                }
                $json .= "],";
                $json .= '"pagina":' . json_encode(utf8_encode($param["pag"])) . ",";
                $json .= '"total":"' . count($ActuacionesDto) . '"';
                $json .= "}";
            } else {
                $json .= '{"estatus":"Fail",';
                $json .= '"mnj":"No se encontraron resultados."}';
            }
            echo $json;
        }

        public function getPaginasPromocion($ActuacionesDto, $param) {
            $ActuacionesController = new ActuacionesController();
            $ActuacionesDto = $ActuacionesController->getPaginasPromocion($ActuacionesDto, $param);
            if ($ActuacionesDto != "") {
                return $ActuacionesDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        /*         * ************* INICIO FUNCIONES ORDENES DE APREHENSION ******************** */

        public function despublicarAct($ActuacionesDto) {
            $ActuacionesController = new ActuacionesController();
            $result = $ActuacionesController->despublicarAct($ActuacionesDto);
            return $result;
        }
        public function guardaActuacionGenerico($ActuacionesDto) {
            $ActuacionesController = new ActuacionesController();
            $result = $ActuacionesController->guardaActuacionGenerico($ActuacionesDto);
            return $result;
        }
        public function modificaActuacionGenerico($ActuacionesDto,$eliminar) {
            $ActuacionesController = new ActuacionesController();
            $result = $ActuacionesController->modificaActuacionGenerico($ActuacionesDto,$eliminar);
            return $result;
        }

    }

    @$idActuacion = $_POST["idActuacion"];
    @$numActuacion = $_POST["numActuacion"];
    @$aniActuacion = $_POST["aniActuacion"];
    @$cveTipoActuacion = $_POST["cveTipoActuacion"];
    @$idReferencia = $_POST["idReferencia"];
    @$numero = $_POST["numero"];
    @$anio = $_POST["anio"];
    @$cveTipoCarpeta = $_POST["cveTipoCarpeta"];
    @$cveJuzgado = $_POST["cveJuzgado"];
    @$sintesis = $_POST["sintesis"];
    @$destinatario = $_POST["destinatario"];
    @$observaciones = $_POST["observaciones"];
    @$cveUsuario = $_POST["cveUsuario"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$cveEstado = $_POST["cveEstado"];
    @$cveJuzgadoDestino = $_POST["cveJuzgadoDestino"];
    @$juzgadoDestino = $_POST["juzgadoDestino"];
    @$cveTipoNotificacion = $_POST["cveTipoNotificacion"];
    @$cveTipoSentencia = $_POST["cveTipoSentencia"];
    @$cveTipoAuto = $_POST["cveTipoAuto"];
    @$cveTipoResolucion = $_POST["cveTipoResolucion"];
    @$cveTipoOrden = $_POST["cveTipoOrden"];
    @$cveTipoProcedimiento = $_POST["cveTipoProcedimiento"];
    @$fechaSentencia = $_POST["fechaSentencia"];
    @$fechaEjecutoria = $_POST["fechaEjecutoria"];
    @$accion = $_POST["accion"];
    @$listaPromoventes = $_POST["listaPromoventes"];
    @$listaImputados = $_POST["listaImputados"];
    @$apelaciones = $_POST["apelaciones"];
    @$medidas = $_POST["medidas"];
    @$ordenes = $_POST["ordenes"];
    @$listaOfendidos = $_POST['listaOfendidos'];
    @$noFojas = $_POST['noFojas'];
    @$listaComparecentes = $_POST['listaComparecentes'];
    @$numEmpleadoFePublica = $_POST['numEmpleadoFePublica'];
    @$lugarComparecencia = ($_POST['lugarComparecencia']);
    @$horaComparecencia = $_POST['horaComparecencia'];
    @$nombrePersonaFePublica = $_POST['nombrePersonaFePublica'];
    @$idJuzgadorAcuerdo = $_POST['idJuzgadorAcuerdo'];
    @$secreto = $_POST['secreto'];
    @$listaImpofedel = json_decode($_POST["listaImpofedel"]);
    @$fechaDevolucion = $_POST['fechaDevolucion'];
    @$diligencia = $_POST['diligencia'];

    $param = array();
    @$param["pag"] = $_POST['pag'];
    @$param["cantxPag"] = $_POST['cantxPag'];
    @$param["paginacion"] = $_POST['paginacion'];
    @$param["fechaDesde"] = $_POST['txtFecInicialBusqueda'];
    @$param["fechaHasta"] = $_POST['txtFecFinalBusqueda'];
    @$param["generico"] = $_POST['generico'];
    @$param["asigNumero"] = $_POST['asigNumero'];
//CAMPOR INCOMPETENCIA
    @$param["idCarpetaInc"] = $_POST['idCarpetaInc'];
    @$param["esIncompetencia"] = $_POST['esIncompetencia'];
    @$param["tipoIncompetencia"] = $_POST['tipoIncompetencia'];
    @$param["juzgadoOrigen"] = $_POST['juzgadoOrigen'];
    @$param["tipoCarpetaInc"] = $_POST['tipoCarpetaInc'];
    @$param["textJuzgadoOrigenInc"] = $_POST['textJuzgadoOrigenInc'];
    @$param["texttipoCarpetaInc"] = $_POST['texttipoCarpetaInc'];
    @$param["numeroInc"] = $_POST['numeroInc'];
    @$param["anioInc"] = $_POST['anioInc'];
    $usuario = "";
    if (isset($_POST["usuario"])) {
        $usuario = $_POST["usuario"];
    }

    $actuacionesFacade = new ActuacionesFacade();
    $actuacionesDto = new ActuacionesDTO();

    $actuacionesDto->setIdActuacion($idActuacion);
    $actuacionesDto->setNumActuacion($numActuacion);
    $actuacionesDto->setAniActuacion($aniActuacion);
    $actuacionesDto->setCveTipoActuacion($cveTipoActuacion);
    $actuacionesDto->setIdReferencia($idReferencia);
    $actuacionesDto->setNumero($numero);
    $actuacionesDto->setAnio($anio);
    $actuacionesDto->setCveTipoCarpeta($cveTipoCarpeta);
    $actuacionesDto->setCveJuzgado($cveJuzgado);
    $actuacionesDto->setSintesis($sintesis);
    $actuacionesDto->setDestinatario($destinatario);
    $actuacionesDto->setObservaciones(utf8_decode(($observaciones)));
    $actuacionesDto->setCveUsuario($cveUsuario);
    $actuacionesDto->setActivo($activo);
    $actuacionesDto->setFechaRegistro($fechaRegistro);
    $actuacionesDto->setFechaActualizacion($fechaActualizacion);
    $actuacionesDto->setCveEstado($cveEstado);
    $actuacionesDto->setCveJuzgadoDestino($cveJuzgadoDestino);
    $actuacionesDto->setJuzgadoDestino($juzgadoDestino);
    $actuacionesDto->setCveTipoNotificacion($cveTipoNotificacion);
    $actuacionesDto->setCveTipoSentencia($cveTipoSentencia);
    $actuacionesDto->setCveTipoAuto($cveTipoAuto);
    $actuacionesDto->setCveTipoResolucion($cveTipoResolucion);
    $actuacionesDto->setCveTipoOrden($cveTipoOrden);
    $actuacionesDto->setCveTipoProcedimiento($cveTipoProcedimiento);
    $actuacionesDto->setFechaSentencia($fechaSentencia);
    $actuacionesDto->setFechaEjecutoria($fechaEjecutoria);
    $actuacionesDto->setNoFojas($noFojas);
    $actuacionesDto->setIdJuzgadorAcuerdo($idJuzgadorAcuerdo);
    $actuacionesDto->setSecreto($secreto);
    $actuacionesDto->setFechaDevolucion($fechaDevolucion);
    $actuacionesDto->setDiligencia($diligencia);

//print_r($observaciones);
//var_dump(htmlspecialchars($actuacionesDto->getObservaciones())); 

    if (($accion == "guardar") && ($idActuacion == "")) {
        $actuacionesDto = $actuacionesFacade->insertActuaciones($actuacionesDto);
        echo $actuacionesDto;
    } else if (($accion == "guardar") && ($idActuacion != "")) {
        $actuacionesDto = $actuacionesFacade->updateActuaciones($actuacionesDto);
        echo $actuacionesDto;
    } else if ($accion == "consultar") {
        $actuacionesDto = $actuacionesFacade->selectActuaciones($actuacionesDto);
        echo $actuacionesDto;
    } else if ($accion == "consultarArbol") {
        $actuacionesDto = $actuacionesFacade->selectActuacionesAR($actuacionesDto);
        echo $actuacionesDto;
    } else if (($accion == "baja") && ($idActuacion != "")) {
        $actuacionesDto = $actuacionesFacade->deleteActuaciones($actuacionesDto);
        echo $actuacionesDto;
    } else if (($accion == "seleccionar") && ($idActuacion != "")) {
        $actuacionesDto = $actuacionesFacade->selectActuaciones($actuacionesDto);
        echo $actuacionesDto;
    } else if (($accion == "seleccionarAcuerdoRadicacion") && ($idActuacion != "")) {
        $actuacionesDto = $actuacionesFacade->selectAcuerdoRadicacion($actuacionesDto);
        echo $actuacionesDto;
    } else if (($accion == "obtenerContadorOficio")) { // ************************** funciones para oficios Contador Oficios
        $actuacionesDto = $actuacionesFacade->obtenerContadorOficio($actuacionesDto);
        echo $actuacionesDto;
    } else if (($accion == "guardarOficio") && ($idActuacion == "")) { //guardar Oficio
        $cveAccion = $_POST["cveAccion"]; // bitacora
        $estatusActuacion = $_POST["cveEstatus"];
        $idActuacionAntecede = $_POST["idActuacionAntecede"];
        $actuacionesDto = $actuacionesFacade->guardarOficio($actuacionesDto, $cveAccion, $estatusActuacion, $idActuacionAntecede);
        echo $actuacionesDto;
    } else if (($accion == "guardarOficio") && ($idActuacion != "")) { //Modificar Oficio
        $cveAccion = $_POST["cveAccion"]; // bitacora
        $actuacionesDto->setNumActuacion(""); // no actualizar contador
        $actuacionesDto->setFechaActualizacion(date("Y-m-d H:i:s"));
        $estatusActuacion = $_POST["cveEstatus"];
        $actuacionesDto = $actuacionesFacade->updateOficios($actuacionesDto, $cveAccion, $estatusActuacion);
        echo $actuacionesDto;
    } else if (($accion == "guardarAcuerdoRadicacion") && ($idActuacion == "")) { //guardar acuerdo radicacion
        $cveAccion = $_POST["cveAccion"]; // bitacora
        $estatusActuacion = $_POST["cveEstatus"];
        $estatusAcuerdoRadicacion = $_POST["cveTipoEstatusRadicacion"];
        $idActuacionAntecede = $_POST["idActuacionAntecede"];
        $listaMagistrados = $_POST["listaMagistrados"];
        $actuacionesDto = $actuacionesFacade->guardarAcuerdoRadicacion($actuacionesDto, $cveAccion, $estatusActuacion, $estatusAcuerdoRadicacion, $idActuacionAntecede,$listaMagistrados);
        echo $actuacionesDto;
    } else if (($accion == "guardarAcuerdoRadicacion") && ($idActuacion != "")) { //Modificar acuerdo radicacion
        $cveAccion = $_POST["cveAccion"]; // bitacora
        $actuacionesDto->setNumActuacion(""); // no actualizar contador
        $actuacionesDto->setFechaActualizacion(date("Y-m-d H:i:s"));
        $estatusActuacion = $_POST["cveEstatus"];
        $estatusAcuerdoRadicacion = $_POST["cveTipoEstatusRadicacion"];
        $idActuacionAntecede = $_POST["idActuacionAntecede"];
        $listaMagistrados = $_POST["listaMagistrados"];
        $actuacionesDto = $actuacionesFacade->updateAcuerdoRadicacion($actuacionesDto, $actuacionesDto, $cveAccion, $estatusActuacion, $estatusAcuerdoRadicacion, $idActuacionAntecede,$listaMagistrados);
        echo $actuacionesDto;
    } else if (($accion == "bajaOficios") && ($idActuacion != "")) {
        @$cveAccion = $_POST["cveAccion"]; // bitacora
        @$instancia = $_POST["instancia"];
        $actuacionesDto = $actuacionesFacade->deleteActuacionesOficios($actuacionesDto, $cveAccion, $instancia);
        echo $actuacionesDto;
    } else if (($accion == "bajaAcuerdoRadicacion") && ($idActuacion != "")) {
        $cveAccion = $_POST["cveAccion"]; // bitacora
        $idActuacionAntecede = $_POST["idActuacionAntecede"];
        $actuacionesDto = $actuacionesFacade->deleteAcuerdoRadicacion($actuacionesDto, $actuacionesDto, $cveAccion, $idActuacionAntecede);
        echo $actuacionesDto;
    } else if ($accion == "consultarOficios") {
//    $param["pag"] = 1;
//    $param["cantxPag"] = 4;
        if(isset($_POST["sinRelacion"])){
            @$sinRelacion = $_POST["sinRelacion"];
        }else{
            $sinRelacion = null;
        }
        $estatusActuacion = $_POST["cveEstatus"];
        $param["paginacion"] = true;
        $actuacionesDto = $actuacionesFacade->consultarOficios($actuacionesDto, $param, $estatusActuacion,$sinRelacion);
        echo $actuacionesDto;
    } else if ($accion == "consultarOficiosRemision") {
//    $param["pag"] = 1;
//    $param["cantxPag"] = 4;
        $estatusActuacion = $_POST["cveEstatus"];
        $param["paginacion"] = true;
        $actuacionesDto = $actuacionesFacade->consultarOficiosRemision($actuacionesDto, $param, $estatusActuacion);
        echo $actuacionesDto;
    } else if ($accion == "consultarAcuerdosRadicacion") {
//    $param["pag"] = 1;
//    $param["cantxPag"] = 4;
        $param["paginacion"] = true;
        $estatusActuacion = $_POST["cveEstatus"];
        $estatusAcuerdoRadicacion = $_POST["cveTipoEstatusRadicacion"];
        $actuacionesDto = $actuacionesFacade->consultarAcuerdosRadicacion($actuacionesDto, $param, $estatusActuacion, $estatusAcuerdoRadicacion);
        echo $actuacionesDto;
    } else if ($accion == "consultarRemisiones") {
        $param["paginacion"] = true;
        $actuacionesDto = $actuacionesFacade->consultarRemisiones($actuacionesDto, $param);
        echo $actuacionesDto;
    } else if ($accion == "consultarApelantes") {
        @$idCarpetaJudicial = $_POST['idCarpetaJudicial'];
        $actuacionesDto = $actuacionesFacade->consultarApelantes($idCarpetaJudicial);
        echo $actuacionesDto;
    } else if (($accion == "guardarOficioManual") && ($idActuacion == "")) { //guardar Oficio Manual // ********* funciones para oficios Contador Oficios
        @$idActEliminar = $_POST["idActuacionEliminar"];
        @$cveAccion = $_POST["cveAccion"];
        $estatusActuacion = $_POST["cveEstatus"];
        $actuacionesDto = $actuacionesFacade->guardarOficioManual($actuacionesDto, $idActEliminar, $cveAccion, $estatusActuacion);
        echo $actuacionesDto;
    } else if ($accion == "consultarConRelaciones") {
        $actuacionesDto = $actuacionesFacade->selectActuacionesCR($actuacionesDto);
        echo $actuacionesDto;
    } else if ($accion == "actualizarActuacion") {
        $actuacionesDto = $actuacionesFacade->updateActuacion($actuacionesDto);
        echo $actuacionesDto;
    } else if ($accion == "guardarActuacion") {
        $actuacionesDto = $actuacionesFacade->guardarActuacion($actuacionesDto);
        echo $actuacionesDto;
    } else if ($accion == "getPaginas") {
//    $param["pag"] = 1;
//    $param["cantxPag"] = 4;
        $param["paginacion"] = true;
        $estatusActuacion = $_POST["cveEstatus"];
        $actuacionesDto = $actuacionesFacade->getPaginas($actuacionesDto, $param, $estatusActuacion);
        echo $actuacionesDto;
    } else if ($accion == "getPaginasCertificacion") {
//    $param["pag"] = 1;
//    $param["cantxPag"] = 4;
        $param["paginacion"] = true;
        $estatusActuacion = $_POST["cveEstatus"];
        $actuacionesDto = $actuacionesFacade->getPaginasCertificacion($actuacionesDto, $param, $estatusActuacion);
        echo $actuacionesDto;
    } else if ($accion == "getPaginasAcuerdosRadicacion") {
//    $param["pag"] = 1;
//    $param["cantxPag"] = 4;
        $param["paginacion"] = true;
        $estatusActuacion = $_POST["cveEstatus"];
        $estatusAcuerdoRadicacion = $_POST["cveTipoEstatusRadicacion"];
        $actuacionesDto = $actuacionesFacade->getPaginasAcuerdosRadicacion($actuacionesDto, $param, $estatusActuacion, $estatusAcuerdoRadicacion);
        echo $actuacionesDto;
    } else if ($accion == "getPaginasResolucionApelacion") {
//    $param["pag"] = 1;
//    $param["cantxPag"] = 4;
        $param["paginacion"] = true;
        $estatusActuacion = $_POST["cveEstatus"];
        $actuacionesDto = $actuacionesFacade->getPaginasResolucionApelacion($actuacionesDto, $param, $estatusActuacion);
        echo $actuacionesDto;
    } else if ($accion == "getPaginasComparecencias") {
        $param["paginacion"] = false;
        $cveTipoParte = $_POST['txtTiposPartes'];
        $actuacionesDto2 = array();
        //$param["cantxPag"] = "";
        //$actuacionesDto2 = json_decode($actuacionesFacade->consultarActuacion_Comparecencia($actuacionesDto, $param, $cveTipoParte));
        //var_dump($actuacionesDto2->datos);
        $actuacionesDto = $actuacionesFacade->getPaginasComparecencias($actuacionesDto, $param, $cveTipoParte);
        echo $actuacionesDto;
    } else if ($accion == "muestraEstatusActuacion") {
        $actuacionesDto = $actuacionesFacade->muestraEstatusActuacion($actuacionesDto);
        echo $actuacionesDto;
    } else if ($accion == "guardarActuacion_Certificacion") {
        $actuacionesDto = $actuacionesFacade->guardarActuacion_Certificacion($actuacionesDto);
        echo $actuacionesDto;
    } else if ($accion == "consultarCertificaciones") {
        $actuacionesDto = $actuacionesFacade->consultarCertificaciones($actuacionesDto, $param);
        echo $actuacionesDto;
    } else if ($accion == "actualizarActuacion_Certificacion") {
        $actuacionesDto = $actuacionesFacade->actualizarActuacion_Certificacion($actuacionesDto);
        echo $actuacionesDto;
    } else if ($accion == "getSalas") {
        $actuacionesDto = $actuacionesFacade->getSalas($actuacionesDto);
        echo $actuacionesDto;
    } else if ($accion == 'guardaAuto') {
        $cveEstatus = $_POST["cveEstatus"];
        $actuacionesDto = $actuacionesFacade->guardaAuto($actuacionesDto, $listaImputados, $apelaciones,$cveEstatus);
        echo $actuacionesDto;
    } else if ($accion == 'actualizaAuto') {
        $cveEstatus = $_POST["cveEstatus"];
        $actuacionesDto = $actuacionesFacade->actualizaAuto($actuacionesDto, $listaImputados, $apelaciones,$cveEstatus);
        echo $actuacionesDto;
    } else if ($accion == 'borraAuto') {
        $actuacionesDto = $actuacionesFacade->borraAuto($actuacionesDto);
        echo $actuacionesDto;
    } elseif ($accion == 'buscarAutos') {
        $param["paginacion"] = true;
        $actuacionesDto = $actuacionesFacade->buscarAutos($actuacionesDto, $param);
        echo $actuacionesDto;
    } else if ($accion == 'obtenerAuto') {
        $actuacionesDto = $actuacionesFacade->obtenerAuto($actuacionesDto);
        echo $actuacionesDto;
    } else if ($accion == 'obtenerAuto_AutoVinculacion') {
        $actuacionesDto = $actuacionesFacade->obtenerAuto_AutoVinculacion($actuacionesDto);
        echo $actuacionesDto;
    } else if ($accion == "guardarCarpeta_Judicializada") {
        //guardo promocion que genera causa carpeta judicializada
        $judicializadasDto = $actuacionesDto;
        $judicializadasDto = $actuacionesFacade->guardarCarpeta_Judicializada($judicializadasDto, $listaPromoventes, $param);
        echo $judicializadasDto;
    } else if ($accion == "consultarActuacion_CarpetaJudicializada") {
        //consulto promocion que genera causa carpeta judicializada
        if (isset($_POST["paginacion"])) {
            $param["paginacion"] = true;
        } else {
            $param = null;
        }
        $judicializadasDto = $actuacionesDto;
        $judicializadasDto = $actuacionesFacade->consultarActuacion_CarpetaJudicializada($judicializadasDto, $param);
        echo $judicializadasDto;
    } else if ($accion == "guardarActuacion_Promociontermino") {
        $actuacionesDto = $actuacionesFacade->guardarActuacion_Promociontermino($actuacionesDto, $listaPromoventes);
        echo $actuacionesDto;
    } else if ($accion == "consultarPromocion_Termino") {
        //consulto promocion que genera causa carpeta judicializada
        if (isset($_POST["paginacion"])) {
            $param["paginacion"] = true;
        } else {
            $param = null;
        }
        $promocionesTerminoDto = $actuacionesDto;
        $promocionesTerminoDto = $actuacionesFacade->consultarPromocion_Termino($promocionesTerminoDto, $param);
        echo $promocionesTerminoDto;
    } else if ($accion == "actualizarActuacion_Promociontermino") {
        //echo"actualizarActuacion_Promocion";
        $actuacionesDto = $actuacionesFacade->actualizarActuacion_Promociontermino($actuacionesDto, $listaPromoventes, $param);
        echo $actuacionesDto;
    } else if ($accion == "guardarActuacion_Promocion") {
        $actuacionesDto = $actuacionesFacade->guardarActuacion_Promocion($actuacionesDto, $listaPromoventes);
        echo $actuacionesDto;
    } else if ($accion == "actualizarActuacion_Promocion") {
        //echo"actualizarActuacion_Promocion";
        $actuacionesDto = $actuacionesFacade->actualizarActuacion_Promocion($actuacionesDto, $listaPromoventes, $param);
        echo $actuacionesDto;
    } else if ($accion == "consultarActuacion_Promocion") {
        if (isset($_POST["paginacion"])) {
            $param["paginacion"] = true;
        } else {
            $param = null;
        }
        if ($usuario != "") {
            $usuario = true;
        } else {
            $usuario = false;
        }
        //echo"actualizarActuacion_Promocion";
        $actuacionesDto = $actuacionesFacade->consultarActuacion_Promocion($actuacionesDto, $param, $usuario);
        echo $actuacionesDto;
    } else if ($accion == "eliminarActuacion_Promocion") {
        //echo"actualizarActuacion_Promocion";
        $actuacionesDto = $actuacionesFacade->eliminarActuacion_Promocion($actuacionesDto);
        echo $actuacionesDto;
    } else if ($accion == 'guardaMedidasCautelares') { // ---- medidas cautelares ---------
        $actuacionesDto = $actuacionesFacade->guardaMedidasCautelares($actuacionesDto, $listaImputados, $medidas, $apelaciones);
        echo $actuacionesDto;
    } else if ($accion == 'actualizaMedidasCautelares') {
        $actuacionesDto = $actuacionesFacade->actualizaMedidasCautelares($actuacionesDto, $listaImputados, $medidas, $apelaciones);
        echo $actuacionesDto;
    } else if ($accion == 'borraMedidaCautelar') {
        $actuacionesDto = $actuacionesFacade->borraMedidaCautelar($actuacionesDto);
        echo $actuacionesDto;
    } else if ($accion == 'buscarMedidasCautelares') {
        $param["paginacion"] = true;
        $actuacionesDto = $actuacionesFacade->buscarMedidasCautelares($actuacionesDto, $param);
        echo $actuacionesDto;
    } else if ($accion == 'mp_obtenerAuto') { // mp -> Medidas de Proteccion
        $actuacionesDto = $actuacionesFacade->mp_obtenerAuto($actuacionesDto);
        echo $actuacionesDto;
    } else if ($accion == 'mp_guardar') {
        $actuacionesDto = $actuacionesFacade->mp_guardar($actuacionesDto, $listaOfendidos, $medidas, $apelaciones);
        echo $actuacionesDto;
    } else if ($accion == 'mp_actualizar') {
        $actuacionesDto = $actuacionesFacade->mp_actualizar($actuacionesDto, $listaOfendidos, $medidas, $apelaciones);
        echo $actuacionesDto;
    } else if ($accion == 'mp_borrar') {
        $actuacionesDto = $actuacionesFacade->mp_borrar($actuacionesDto);
        echo $actuacionesDto;
    } else if ($accion == 'mp_buscar') {
        $param["paginacion"] = true;
        $actuacionesDto = $actuacionesFacade->mp_buscar($actuacionesDto, $param);
        echo $actuacionesDto;
    } else if ($accion == 'buscaActuacionPadre') {
        $idActHija = $_POST["idActuacionHija"];
        $actuacionesDto = $actuacionesFacade->buscaActuacionPadre($idActHija);
        echo $actuacionesDto;
    } else if ($accion == "consultarMedidas") {
        $cveMedidaCaut = $_POST["cveMedidaCautelar"];
        $param["paginacion"] = true;
        $actuacionesDto = $actuacionesFacade->consultarMedidas($actuacionesDto, $param, $cveMedidaCaut);
        echo $actuacionesDto;
    } else if ($accion == "consultarMedidasProteccion") {
        $cveMedidaCaut = $_POST["cveMedidaCautelar"];
        $param["paginacion"] = true;
        $actuacionesDto = $actuacionesFacade->consultarMedidasProteccion($actuacionesDto, $param, $cveMedidaCaut);
        echo $actuacionesDto;
    } else if ($accion == "guardarAudiencia") {
        $actuacionesDto = $actuacionesFacade->guardarAudiencia($actuacionesDto, $param);
        echo $actuacionesDto;
    } else if ($accion == 'guardarActuacion_Comparecencia') {
//    $lugarComparecencia = utf8_decode($lugarComparecencia);
        //echo '\nActuacionesFacade --> accion : guardarActuacion_Comparecencia';
//    $actuacionesDto->setSintesis(utf8_decode($actuacionesDto->getSintesis()));
        $actuacionesDto = $actuacionesFacade->guardarActuacion_Comparecencia($actuacionesDto, $listaComparecentes, $numEmpleadoFePublica, $lugarComparecencia, $horaComparecencia, $nombrePersonaFePublica);
        echo $actuacionesDto;
    } else if (($accion == "buscarComparecencias")) {
        //echo "\n entra en buscarComparecencias : comparecenciasFacade ";
        //var_dump($param);
        $param["paginacion"] = true;
        $cveTipoParte = $_POST['txtTiposPartes'];
        $actuacionesDto = $actuacionesFacade->consultarActuacion_Comparecencia($actuacionesDto, $param, $cveTipoParte);
        echo $actuacionesDto;
    } else if (($accion == "modificarActuacion_Comparecencia")) {
//    var_dump($listaComparecentes);
        $actuacionesDto = $actuacionesFacade->actualizarActuacion_Comparecencia($actuacionesDto, $listaComparecentes, $numEmpleadoFePublica, $lugarComparecencia, $horaComparecencia, $nombrePersonaFePublica);
        echo $actuacionesDto;
    } else if (($accion == "eliminarActuacion_Comparecencia")) {
        $idComparecencia = $_POST['idComparecencia'];
        $actuacionesDto = $actuacionesFacade->eliminarActuacion_Comparecencia($actuacionesDto, $idComparecencia, $listaComparecentes);
        echo $actuacionesDto;
    } else if (($accion == "consultarComparecenciaById")) {
        //var_dump($actuacionesDto);
        $actuacionesDto = $actuacionesFacade->consultarComparecenciaById($actuacionesDto);
        echo $actuacionesDto;
    } else if (($accion == "consultarComparecenciaById")) {
        //var_dump($actuacionesDto);
        $actuacionesDto = $actuacionesFacade->consultarComparecenciaById($actuacionesDto);
        echo $actuacionesDto;
    } else if (($accion == "guardarSentencia")) {
        $param = "";

        $actuacionesDto = $actuacionesFacade->guardarSentencia($actuacionesDto, $param);
        print_r($actuacionesDto);
    } else if (($accion == "guardaraSentencias")) {
        $param = "";
        $act = $actuacionesFacade->guardarSentencias($actuacionesDto, $param);
        echo $act;
    } else if (($accion == "guardarAcutacionFormulacionImputacion")) {
        //var_dump($actuacionesDto);
        //$actuacionesDto = $actuacionesFacade->guardarActuacion_FormulacionImputacion($actuacionesDto,$_POST['idImpOfeDelCarpeta'],$_POST['idJuzgador'],$_POST['cveTipoFormulacion'],$_POST['fechaFormulacion']);
        $actuacionesDto = $actuacionesFacade->guardarActuacion_FormulacionImputacion($actuacionesDto, $_POST['idImpOfeDelCarpeta'], $_POST['idJuzgador'], $_POST['cveTipoFormulacion'], $_POST['fechaFormulacion']);
        echo $actuacionesDto;
    } else if (($accion == "eliminacionsentencia")) {
        $param = "";
        $act = $actuacionesFacade->eliminacionsentencia($actuacionesDto, $param);
        echo $act;
    } else if ($accion == "actualizarActuacionFormulacionImputacion") {
        @$cveTipoFormulacion = $_POST['cveTipoFormulacion'];
        $actuacionesDto = $actuacionesFacade->actualizarActuacion_FormulacionImputacion($actuacionesDto, $_POST['idImpOfeDelCarpeta'], $_POST['idJuzgador'], $cveTipoFormulacion, $_POST['fechaFormulacion'], $_POST['idFormulacionImputacion']);
        echo $actuacionesDto;
    } else if (($accion == "ConsultarActuacionesImpOf")) {
        $param["paginacion"] = true;
        $param["IdCarpetaJudicial"] = $_POST['IdCarpetaJudicial'];
        $param["vcveTipoCarpeta"] = $_POST['vcveTipoCarpeta'];
        $actuacionesDto = $actuacionesFacade->ConsultarActuacionesImpOf($actuacionesDto, $param);
        echo $actuacionesDto;
    } else if ($accion == 'GuardarNotificacion') {
        $param["fechaNotificacion"] = $_POST['fechaNotificacion'];
        $param["LeerRazon"] = $_POST['LeerRazon'];
        $param["CadenaImputados"] = $_POST['CadenaImputados'];
        $param["CadenaOfendidos"] = $_POST['CadenaOfendidos'];
        $param["CadenaDefensoresOfendidos"] = $_POST['CadenaDefensoresOfendidos'];
        $param["CadenaDefensoresImputados"] = $_POST['CadenaDefensoresImputados'];
        $param["cadenaTestigos"] = $_POST['cadenaTestigos'];
        $param["idActuacionPadre"] = $_POST['idActuacionPadre'];
        $param["vcveTipoCarpeta"] = $_POST['vcveTipoCarpeta'];
        $actuacionesDto = $actuacionesFacade->GuardarNotificacion($actuacionesDto, $param);

        echo $actuacionesDto;
    } else if ($accion == 'GuardarNotificacionElectronica') {
        $param["fechaNotificacion"] = $_POST['fechaNotificacion'];
        $param["CadenaPersonas"] = $_POST['CadenaPersonas'];
        $param["CadenaEmails"] = $_POST['CadenaEmails'];
        $param["CadenaNombres"] = $_POST['CadenaNombres'];
        $param["CadenaCedulas"] = $_POST['CadenaCedulas'];
        $param["CadenaEmailscc"] = $_POST['CadenaEmailscc'];
        $param["idActuacionPadre"] = $_POST['idActuacionPadre'];
        $param["vcveTipoCarpeta"] = $_POST['vcveTipoCarpeta'];
        $actuacionesDto = $actuacionesFacade->GuardarNotificacionElectronica($actuacionesDto, $param);

        echo $actuacionesDto;
    } else if ($accion == "consultarNotificaciones") {
        $param["paginacion"] = true;
        $actuacionesDto = $actuacionesFacade->consultarNotificaciones($actuacionesDto, $param);
        echo $actuacionesDto;
    } else if ($accion == "consultarNotificacionesElectronica") {
        $param["paginacion"] = true;
        $actuacionesDto = $actuacionesFacade->consultarNotificacionesElectronica($actuacionesDto, $param);
        echo $actuacionesDto;
    } else if ($accion == "consultarDetalleElectronica") {
        $param["paginacion"] = true;
        $actuacionesDto = $actuacionesFacade->consultarDetalleElectronica($actuacionesDto, $param);
        echo $actuacionesDto;
    } else if ($accion == "ConsultarActuacionesImpOfElectronica") {
        $param["paginacion"] = true;
        $param["IdCarpetaJudicial"] = $_POST['IdCarpetaJudicial'];
        $actuacionesDto = $actuacionesFacade->ConsultarActuacionesImpOfElectronica($actuacionesDto, $param);
        echo $actuacionesDto;
    } else if ($accion == "imputadosMedidaCautelar") {
        $actuacionesDto = $actuacionesFacade->imputadosMedidaCautelar($actuacionesDto);
        echo $actuacionesDto;
    } else if ($accion == 'guardaSuspensionCondicional') { // ************** SUSPENSION CONDICIONAL
        $actuacionesDto = $actuacionesFacade->guardaSuspensionCondicional($actuacionesDto, $listaImputados, $medidas, $apelaciones);
        echo $actuacionesDto;
    } else if ($accion == 'actualizaSuspensionCondicional') {
        $actuacionesDto = $actuacionesFacade->actualizaSuspensionCondicional($actuacionesDto, $listaImputados, $medidas, $apelaciones);
        echo $actuacionesDto;
    } else if ($accion == 'borraSuspensionCondicional') {
        $actuacionesDto = $actuacionesFacade->borraSuspensionCondicional($actuacionesDto);
        echo $actuacionesDto;
    } else if ($accion == 'buscarSuspensionCondicional') {
        $param["paginacion"] = true;
        $actuacionesDto = $actuacionesFacade->buscarSuspensionCondicional($actuacionesDto, $param);
        echo $actuacionesDto;
    } else if ($accion == "imputadosSuspensionCondicional") { //REVISAME
        $actuacionesDto = $actuacionesFacade->imputadosSuspensionCondicional($actuacionesDto);
        echo $actuacionesDto;
    } else if ($accion == "buscarImputadosSuspensionCondicional") {
        $actuacionesDto = $actuacionesFacade->buscarImputadosSuspensionCondicional($actuacionesDto);
        echo $actuacionesDto;
    } else if ($accion == "generarJson") {
        @$cveTipoDocumento = $_POST['cveTipoDocumento'];
        @$cveTipo = $_POST['cveTipo'];
        $actuacionesDto = $actuacionesFacade->generarJson($actuacionesDto, $cveTipoDocumento, $cveTipo);
        echo $actuacionesDto;
    } else if ($accion == "guardarOficioResagado") {
        @$idActEliminar = $_POST["idActuacionEliminar"];
        @$cveAccion = $_POST["cveAccion"];
        $estatusActuacion = $_POST["cveEstatus"];
        $actuacionesDto = $actuacionesFacade->guardarOficioResagado($actuacionesDto, $idActEliminar, $cveAccion, $estatusActuacion);
        echo $actuacionesDto;
    } else if ($accion == "bajaAntecedeAcuerdo") {
        @$idActuacion = $_POST["idActuacion"]; // bitacora
        @$idActuacionPadre = $_POST["idActuacionPadre"]; // bitacora
        $actuacionesDto = $actuacionesFacade->deleteActuacionesAntecedes($idActuacion, $idActuacionPadre);
        echo $actuacionesDto;
    } else if ($accion == "bajaAntecedeAcuerdoRadicacion") {
        @$idActuacion = $_POST["idActuacion"]; // bitacora
        @$idActuacionPadre = $_POST["idActuacionPadre"]; // bitacora
        $actuacionesDto = $actuacionesFacade->deleteActuacionesAntecedesRadicacion($idActuacion, $idActuacionPadre);
        echo $actuacionesDto;
    } else if ($accion == 'guardaOrdenesAprehension') { // ordenes de aprehension
        $actuacionesDto = $actuacionesFacade->guardaOrdenesAprehension($actuacionesDto, $listaImputados, $ordenes, $apelaciones);
        echo $actuacionesDto;
    } else if ($accion == 'actualizaOrdeneApehension') {
        $actuacionesDto = $actuacionesFacade->actualizaOrdenesAprehension($actuacionesDto, $listaImputados, $ordenes, $apelaciones);
        echo $actuacionesDto;
    } else if ($accion == 'borraOrdenesAprehension') {
        $actuacionesDto = $actuacionesFacade->borraOrdenesAprehension($actuacionesDto);
        echo $actuacionesDto;
    } else if ($accion == 'buscarOrdenesAprehension') {
        $param["paginacion"] = true;
        $actuacionesDto = $actuacionesFacade->buscarOrdenesAprehension($actuacionesDto, $param);
        echo $actuacionesDto;
    } else if ($accion == "buscarImputadosOrdenesAprehension") {
        $actuacionesDto = $actuacionesFacade->buscarImputadosOrdenesAprehension($actuacionesDto);
        echo $actuacionesDto;
    } else if ($accion == "consultarResoluciones") {
//    $param["pag"] = 1;
//    $param["cantxPag"] = 4;
        $param["paginacion"] = true;
        $actuacionesDto = $actuacionesFacade->consultarResoluciones($actuacionesDto, $param);
        echo $actuacionesDto;
    } else if ($accion == 'guardaRemisionApelacion') {
        @$sintesis = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST["sintesis"], "utf8") : strtoupper($_POST["sintesis"])))));
        @$observaciones = str_ireplace("'", "", trim($_POST["observaciones"]));
        @$datosRemision["idReferencia"] = $_POST["idReferencia"];
        @$datosRemision["idOficio"] = $_POST["idOficio"];
        @$datosRemision["cveRegion"] = $_POST["cveRegion"];
        @$datosRemision["cveTipoCarpeta"] = $_POST["cveTipoCarpeta"];
        @$datosRemision["idResolucionCombatida"] = $_POST["idResolucionCombatida"];
        @$datosRemision["otraResolucionCombatida"] = $_POST["otraResolucionCombatida"];
        @$datosRemision["idResolucionCarpetaCombatida"] = $_POST["idResolucionCarpetaCombatida"];
        @$datosRemision["cveCatResolucionCombatida"] = $_POST["cveCatResolucionCombatida"];
        @$datosRemision["cveRecurso"] = $_POST["cveRecurso"];
        @$datosRemision["cveEfecto"] = $_POST["cveEfecto"];
        @$datosRemision["agravios"] = $_POST["agravios"];
        @$datosRemision["emplazamiento"] = $_POST["emplazamiento"];
        @$datosRemision["FecCorreTraslado"] = $_POST["FecCorreTraslado"];
        @$datosRemision["FechaIntAd"] = $_POST["FechaIntAd"];
        @$datosRemision["FecInterponeRecurso"] = $_POST["FecInterponeRecurso"];
        @$datosRemision["FecNotificaSenAut"] = $_POST["FecNotificaSenAut"];
        @$datosRemision["cveJuzgado"] = $_POST["cveJuzgado"];
        @$datosRemision["cveConsignacion"] = $_POST["cveConsignacion"];
        @$datosRemision["cveUsuario"] = $_POST["cveUsuario"];
        @$datosRemision["stringImpofedel"] = $_POST["stringImpofedel"];
        @$datosRemision["listaApelantes"] = $_POST["listaApelantes"];
        @$datosRemision["idResolucionCarpetaCombatida"] = $_POST["idResolucionCarpetaCombatida"];
        $actuacionesDto = $actuacionesFacade->guardaRemisionApelacion($actuacionesDto, $listaImpofedel, $datosRemision);
        echo $actuacionesDto;
    } else if ($accion == 'actualizarRemisionApelacion') {
        @$sintesis = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST["sintesis"], "utf8") : strtoupper($_POST["sintesis"])))));
        @$observaciones = str_ireplace("'", "", trim($_POST["observaciones"]));
        @$datosRemision["idActuacion"] = $_POST["idActuacion"];
        @$datosRemision["idRemisionApelacion"] = $_POST["idRemisionApelacion"];
        @$datosRemision["cveTipoCarpeta"] = $_POST["cveTipoCarpeta"];
        @$datosRemision["cveRegion"] = $_POST["cveRegion"];
        @$datosRemision["idReferencia"] = $_POST["idReferencia"];
        @$datosRemision["idOficio"] = $_POST["idOficio"];
        @$datosRemision["idResolucionCombatida"] = $_POST["idResolucionCombatida"];
        @$datosRemision["otraResolucionCombatida"] = $_POST["otraResolucionCombatida"];
        @$datosRemision["idResolucionCarpetaCombatida"] = $_POST["idResolucionCarpetaCombatida"];
        @$datosRemision["cveCatResolucionCombatida"] = $_POST["cveCatResolucionCombatida"];
        @$datosRemision["cveRecurso"] = $_POST["cveRecurso"];
        @$datosRemision["cveEfecto"] = $_POST["cveEfecto"];
        @$datosRemision["agravios"] = $_POST["agravios"];
        @$datosRemision["emplazamiento"] = $_POST["emplazamiento"];
        @$datosRemision["FecCorreTraslado"] = $_POST["FecCorreTraslado"];
        @$datosRemision["FechaIntAd"] = $_POST["FechaIntAd"];
        @$datosRemision["FecInterponeRecurso"] = $_POST["FecInterponeRecurso"];
        @$datosRemision["FecNotificaSenAut"] = $_POST["FecNotificaSenAut"];
        @$datosRemision["cveJuzgado"] = $_POST["cveJuzgado"];
        @$datosRemision["cveConsignacion"] = $_POST["cveConsignacion"];
        @$datosRemision["cveUsuario"] = $_POST["cveUsuario"];
        @$datosRemision["stringImpofedel"] = $_POST["stringImpofedel"];
        @$datosRemision["listaApelantes"] = $_POST["listaApelantes"];
        @$datosRemision["idResolucionCarpetaCombatida"] = $_POST["idResolucionCarpetaCombatida"];
        @$listaDefensores = json_decode($_POST["listaDefensores"]);
        $actuacionesDto = $actuacionesFacade->actualizarRemisionApelacion($actuacionesDto, $listaImpofedel, $listaDefensores, $datosRemision);
        echo $actuacionesDto;
    } else if ($accion == "consultarActuacion") {
//    $param["pag"] = 1;
//    $param["cantxPag"] = 4;
        $param["paginacion"] = true;
        $actuacionesDto = $actuacionesFacade->consultarActuaciones($actuacionesDto, $param);
        echo $actuacionesDto;
    } else if ($accion == "consultarActuacionRemision") {
//    $param["pag"] = 1;
//    $param["cantxPag"] = 4;
        $param["paginacion"] = true;
        $actuacionesDto = $actuacionesFacade->consultarActuacionesRemision($actuacionesDto, $param);
        echo $actuacionesDto;
    } else if (($accion == "guardarResolucionApelacion") && ($idActuacion == "")) { //guardar
//   var_dump("POST");
//   var_dump($_POST);
//   var_dump($actuacionesDto);
        $cveAccion = $_POST["cveAccion"]; // bitacora
        $listaMagistrados = $_POST["listaMagistrados"]; // magistados (2a instancia)
        $arrayPro = $_POST["arrayPro"]; // proyectistas secreto
        @$cveTipoSentencia = $_POST["cveTipoSentencia"]; // sentencia
        $estatusActuacion = $_POST["cveEstatus"];
        $actuacionesDto = $actuacionesFacade->guardarResolucionApelacion($actuacionesDto, $cveAccion, $estatusActuacion, $idActuacionAntecede, $cveTipoSentencia,$listaMagistrados,$arrayPro);
        echo $actuacionesDto;
    } else if (($accion == "guardarResolucionApelacion") && ($idActuacion != "")) { //Modificar
        $cveAccion = $_POST["cveAccion"]; // bitacora
        $actuacionesDto->setNumActuacion(""); // no actualizar contador
        $listaMagistrados = $_POST["listaMagistrados"]; // magistados (2a instancia)
        $arrayPro = $_POST["arrayPro"]; // proyectistas secreto
        $actuacionesDto->setFechaActualizacion(date("Y-m-d H:i:s"));
        $estatusActuacion = $_POST["cveEstatus"];
        @$cveTipoSentencia = $_POST["cveTipoSentencia"]; // sentencia
        $actuacionesDto = $actuacionesFacade->updateResolucionApelacion($actuacionesDto, $cveAccion, $estatusActuacion, $cveTipoSentencia,$listaMagistrados,$arrayPro);
        echo $actuacionesDto;
    } else if ($accion == "consultarResolucionApelacion") {
//    $param["pag"] = 1;
//    $param["cantxPag"] = 4;
        $param["paginacion"] = true;
//   var_dump($actuacionesDto);
        $estatusActuacion = $_POST["cveEstatus"];
        $actuacionesDto = $actuacionesFacade->consultarResolucionApelacion($actuacionesDto, $param, $estatusActuacion);
        echo $actuacionesDto;
    } else if (($accion == "bajaResolucionApelacion") && ($idActuacion != "")) {
        $cveAccion = 383; // bitacora
        $actuacionesDto = $actuacionesFacade->deleteActuacionesResolucionApelacion($actuacionesDto, $cveAccion);
        echo $actuacionesDto;
    } else if (($accion == "consultaPromocion")) {
        $param = array();
        @$param["fechaDesde"] = ($_POST['txtFecInicialBusqueda']);
        @$param["fechaHasta"] = $_POST['txtFecFinalBusqueda'];
        @$param["pag"] = $_POST['pag'];
        @$param["cantxPag"] = $_POST['cantxPag'];
        @$param["paginacion"] = $_POST['paginacion'];
        $param["paginacion"] = true;
        $actuacionesDto->setCveTipoCarpeta("");
        $actuacionesDto = $actuacionesFacade->consultaPromocion($actuacionesDto, $param);
        echo $actuacionesDto;
    } else if ($accion == "getPaginasPromocion") {
        $param = array();
        @$param["fechaDesde"] = ($_POST['txtFecInicialBusqueda']);
        @$param["fechaHasta"] = $_POST['txtFecFinalBusqueda'];
        @$param["pag"] = $_POST['pag'];
        @$param["cantxPag"] = $_POST['cantxPag'];
        @$param["paginacion"] = $_POST['paginacion'];
        $param["paginacion"] = true;
        $actuacionesDto->setCveTipoCarpeta("");
        $actuacionesDto = $actuacionesFacade->getPaginasPromocion($actuacionesDto, $param);
        echo $actuacionesDto;
    } else if ($accion == 'guardaRevisionExtraordinaria') {
        @$sintesis = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST["sintesis"], "utf8") : strtoupper($_POST["sintesis"])))));
        @$observaciones = str_ireplace("'", "", trim($_POST["observaciones"]));
        @$datosRevision["idReferencia"] = $_POST["idReferencia"];
        @$datosRevision["unitaria"] = $_POST["unitaria"];
        @$datosRevision["cveRegion"] = $_POST["cveRegion"];
        @$datosRevision["cveTipoCarpeta"] = $_POST["cveTipoCarpeta"];
        @$datosRevision["idResolucionCombatida"] = $_POST["idResolucionCombatida"];
        @$datosRevision["idResolucionCarpetaCombatida"] = $_POST["idResolucionCarpetaCombatida"];
        @$datosRevision["cveCatResolucionCombatida"] = $_POST["cveCatResolucionCombatida"];
        @$datosRevision["cveJuzgado"] = $_POST["cveJuzgado"];
        @$datosRevision["cveConsignacion"] = $_POST["cveConsignacion"];
        @$datosRevision["cveUsuario"] = $_POST["cveUsuario"];
        @$datosRevision["stringImpofedel"] = $_POST["stringImpofedel"];
        @$datosRevision["listaApelantes"] = $_POST["listaApelantes"];
        @$datosRevision["idResolucionCarpetaCombatida"] = $_POST["idResolucionCarpetaCombatida"];
        $actuacionesDto = $actuacionesFacade->guardaRevisionExtraordinaria($actuacionesDto, $listaImpofedel, $datosRevision);
        echo $actuacionesDto;
    } else if ($accion == 'actualizarRevisionExtraordinaria') {
        @$sintesis = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST["sintesis"], "utf8") : strtoupper($_POST["sintesis"])))));
        @$observaciones = str_ireplace("'", "", trim($_POST["observaciones"]));
        @$datosRevision["idActuacion"] = $_POST["idActuacion"];
        @$datosRevision["idRemisionApelacion"] = $_POST["idRemisionApelacion"];
        @$datosRevision["cveTipoCarpeta"] = $_POST["cveTipoCarpeta"];
        @$datosRevision["cveRegion"] = $_POST["cveRegion"];
        @$datosRevision["idReferencia"] = $_POST["idReferencia"];
        @$datosRevision["idResolucionCombatida"] = $_POST["idResolucionCombatida"];
        @$datosRevision["cveJuzgado"] = $_POST["cveJuzgado"];
        @$datosRevision["cveConsignacion"] = $_POST["cveConsignacion"];
        @$datosRevision["cveUsuario"] = $_POST["cveUsuario"];
        @$datosRevision["stringImpofedel"] = $_POST["stringImpofedel"];
        @$datosRevision["listaApelantes"] = $_POST["listaApelantes"];
        @$datosRevision["idResolucionCarpetaCombatida"] = $_POST["idResolucionCarpetaCombatida"];
        @$listaDefensores = json_decode($_POST["listaDefensores"]);
        $actuacionesDto = $actuacionesFacade->actualizarRevisionExtraordinaria($actuacionesDto, $listaImpofedel, $listaDefensores, $datosRevision);
        echo $actuacionesDto;
    } else if ($accion == "consultarRevisionExtraordinaria") {
        $params['cveJuzgado'] = $_POST['cveJuzgado'];
        $params['cveTipoCarpeta'] = $_POST['cveTipoCarpeta'];
        $params['numero'] = $_POST['numero'];
        $params['anio'] = $_POST['anio'];
        $params['fechaInicial'] = $_POST['fechaInicial'];
        $params['fechaFinal'] = $_POST['fechaFinal'];
        $params['sintesis'] = $_POST['sintesis'];
        //mandar variable de adscripcion o grupo para ver si agregar apelantes a la consulta
        $paginacion = array();
        $paginacion["pag"] = $_POST["pag"];
        $paginacion["cantxPag"] = $_POST["cantxPag"];
        $paginacion["paginacion"] = $_POST["paginacion"];
        $remisionapelacionesDto = $actuacionesFacade->consultarRevisionExtraordinaria($params, $paginacion);
        echo $remisionapelacionesDto;
    } else if ($accion == "consultarRevisionExtraordinariaTradicional") {
        $params['cveJuzgado'] = $_POST['cveJuzgado'];
        $params['cveTipoCarpeta'] = $_POST['cveTipoCarpeta'];
        $params['numero'] = $_POST['numero'];
        $params['anio'] = $_POST['anio'];
        $params['fechaInicial'] = $_POST['fechaInicial'];
        $params['fechaFinal'] = $_POST['fechaFinal'];
        $params['sintesis'] = $_POST['sintesis'];
        //mandar variable de adscripcion o grupo para ver si agregar apelantes a la consulta
        $paginacion = array();
        $paginacion["pag"] = $_POST["pag"];
        $paginacion["cantxPag"] = $_POST["cantxPag"];
        $paginacion["paginacion"] = $_POST["paginacion"];
        $remisionapelacionesDto = $actuacionesFacade->consultarRevisionExtraordinariaTradicional($params, $paginacion);
        echo $remisionapelacionesDto;
    } else if ($accion == "getPaginasRevisionExtraordinaria") {
        $params['cveJuzgado'] = $_POST['cveJuzgado'];
        $params['cveTipoCarpeta'] = $_POST['cveTipoCarpeta'];
        $params['numero'] = $_POST['numero'];
        $params['anio'] = $_POST['anio'];
        $params['fechaInicial'] = $_POST['fechaInicial'];
        $params['fechaFinal'] = $_POST['fechaFinal'];
        $params['sintesis'] = $_POST['sintesis'];
        //mandar variable de adscripcion o grupo para ver si agregar apelantes a la consulta
        $paginacion = array();
        $paginacion["pag"] = $_POST["pag"];
        $paginacion["cantxPag"] = $_POST["cantxPag"];
        $paginacion["paginacion"] = $_POST["paginacion"];
        $remisionapelacionesDto = $actuacionesFacade->getPaginasRevisionExtraordinaria($params, $paginacion);
        echo $remisionapelacionesDto;
    } else if ($accion == "getPaginasRevisionExtraordinariaTradicional") {
        $params['cveJuzgado'] = $_POST['cveJuzgado'];
        $params['cveTipoCarpeta'] = $_POST['cveTipoCarpeta'];
        $params['numero'] = $_POST['numero'];
        $params['anio'] = $_POST['anio'];
        $params['fechaInicial'] = $_POST['fechaInicial'];
        $params['fechaFinal'] = $_POST['fechaFinal'];
        $params['sintesis'] = $_POST['sintesis'];
        //mandar variable de adscripcion o grupo para ver si agregar apelantes a la consulta
        $paginacion = array();
        $paginacion["pag"] = $_POST["pag"];
        $paginacion["cantxPag"] = $_POST["cantxPag"];
        $paginacion["paginacion"] = $_POST["paginacion"];
        $remisionapelacionesDto = $actuacionesFacade->getPaginasRevisionExtraordinariaTradicional($params, $paginacion);
        echo $remisionapelacionesDto;
    } else if ($accion == "guardar_reasignatoca") {
        $params['idReferencia'] = $_POST['idReferencia'];
        $params['cveRegion'] = $_POST['cveRegion'];

        $reasignacionDto = $actuacionesFacade->guardar_reasignatoca($params);
        echo $reasignacionDto;
    } else if ($accion == "guardaReasignacionSegundaInstanciaTribunal") {
        $params['idReferencia'] = $_POST['idReferencia'];
        $params['cveRegion'] = $_POST['cveRegion'];
        $params['cveJuzgado'] = $_POST['cveTipoJuzgado'];

        $reasignacionDto = $actuacionesFacade->guardaReasignacionSegundaInstanciaTribunal($params);
        echo $reasignacionDto;
    } else if ($accion == "despublicarAct") {
        $rs = $actuacionesFacade->despublicarAct($actuacionesDto);
        echo $rs;
    } else if ($accion == "guardaActuacionGenerico" && ($idActuacion == "")) {
        $rs = $actuacionesFacade->guardaActuacionGenerico($actuacionesDto);
        echo $rs;
    } else if ($accion == "guardaActuacionGenerico" && ($idActuacion != "")) {
        @$eliminar = $_POST["eliminar"];
        $rs = $actuacionesFacade->modificaActuacionGenerico($actuacionesDto,$eliminar);
        echo $rs;
    }
    // ************** /SUSPENSION CONDICIONAL
//echo "-".$accion."-";
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>
