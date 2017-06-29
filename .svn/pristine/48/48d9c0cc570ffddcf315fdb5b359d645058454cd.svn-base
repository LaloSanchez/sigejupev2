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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/carpetasjudiciales/CarpetasjudicialesController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
/*
 * Para consultar el detalle de carpetas judiciales
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposcarpetas/TiposcarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/etapasprocesales/EtapasprocesalesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/etapasprocesales/EtapasprocesalesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/consignaciones/ConsignacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/consignaciones/ConsignacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/consignacionesacciones/ConsignacionesaccionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/consignacionesacciones/ConsignacionesaccionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estatuscarpetas/EstatuscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estatuscarpetas/EstatuscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposincompetencias/TiposincompetenciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposincompetencias/TiposincompetenciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/conclusiones/ConclusionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/conclusiones/ConclusionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");
//juzgadores carpetas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadorescarpetas/JuzgadorescarpetasDTO.Class.php");
//para consulta de audiencias
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/audiencias/AudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/audiencias/AudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/cataudiencias/CataudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/cataudiencias/CataudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/salas/SalasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/salas/SalasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estatusaudiencias/EstatusaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estatusaudiencias/EstatusaudienciasDAO.Class.php");
//incompetencias
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/incompetencias/IncompetenciasDTO.Class.php");

class CarpetasjudicialesFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarCarpetasjudiciales($CarpetasjudicialesDto) {
        $CarpetasjudicialesDto->setidCarpetaJudicial(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CarpetasjudicialesDto->getidCarpetaJudicial(), "utf8") : strtoupper($CarpetasjudicialesDto->getidCarpetaJudicial()))))));
        if ($this->esFecha($CarpetasjudicialesDto->getidCarpetaJudicial())) {
            $CarpetasjudicialesDto->setidCarpetaJudicial($this->fechaMysql($CarpetasjudicialesDto->getidCarpetaJudicial()));
        }
        $CarpetasjudicialesDto->setcveEtapaProcesal(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CarpetasjudicialesDto->getcveEtapaProcesal(), "utf8") : strtoupper($CarpetasjudicialesDto->getcveEtapaProcesal()))))));
        if ($this->esFecha($CarpetasjudicialesDto->getcveEtapaProcesal())) {
            $CarpetasjudicialesDto->setcveEtapaProcesal($this->fechaMysql($CarpetasjudicialesDto->getcveEtapaProcesal()));
        }
        $CarpetasjudicialesDto->setcveConsignacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CarpetasjudicialesDto->getcveConsignacion(), "utf8") : strtoupper($CarpetasjudicialesDto->getcveConsignacion()))))));
        if ($this->esFecha($CarpetasjudicialesDto->getcveConsignacion())) {
            $CarpetasjudicialesDto->setcveConsignacion($this->fechaMysql($CarpetasjudicialesDto->getcveConsignacion()));
        }
        $CarpetasjudicialesDto->setcveTipoCarpeta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CarpetasjudicialesDto->getcveTipoCarpeta(), "utf8") : strtoupper($CarpetasjudicialesDto->getcveTipoCarpeta()))))));
        if ($this->esFecha($CarpetasjudicialesDto->getcveTipoCarpeta())) {
            $CarpetasjudicialesDto->setcveTipoCarpeta($this->fechaMysql($CarpetasjudicialesDto->getcveTipoCarpeta()));
        }
        $CarpetasjudicialesDto->setCveConsignacionA(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CarpetasjudicialesDto->getCveConsignacionA(), "utf8") : strtoupper($CarpetasjudicialesDto->getCveConsignacionA()))))));
        if ($this->esFecha($CarpetasjudicialesDto->getCveConsignacionA())) {
            $CarpetasjudicialesDto->setCveConsignacionA($this->fechaMysql($CarpetasjudicialesDto->getCveConsignacionA()));
        }
        $CarpetasjudicialesDto->setnumero(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CarpetasjudicialesDto->getnumero(), "utf8") : strtoupper($CarpetasjudicialesDto->getnumero()))))));
        if ($this->esFecha($CarpetasjudicialesDto->getnumero())) {
            $CarpetasjudicialesDto->setnumero($this->fechaMysql($CarpetasjudicialesDto->getnumero()));
        }
        $CarpetasjudicialesDto->setanio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CarpetasjudicialesDto->getanio(), "utf8") : strtoupper($CarpetasjudicialesDto->getanio()))))));
        if ($this->esFecha($CarpetasjudicialesDto->getanio())) {
            $CarpetasjudicialesDto->setanio($this->fechaMysql($CarpetasjudicialesDto->getanio()));
        }
        $CarpetasjudicialesDto->setfechaRadicacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CarpetasjudicialesDto->getfechaRadicacion(), "utf8") : strtoupper($CarpetasjudicialesDto->getfechaRadicacion()))))));
        if ($this->esFecha($CarpetasjudicialesDto->getfechaRadicacion())) {
            $CarpetasjudicialesDto->setfechaRadicacion($this->fechaMysql($CarpetasjudicialesDto->getfechaRadicacion()));
        }
        $CarpetasjudicialesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CarpetasjudicialesDto->getfechaRegistro(), "utf8") : strtoupper($CarpetasjudicialesDto->getfechaRegistro()))))));
        if ($this->esFecha($CarpetasjudicialesDto->getfechaRegistro())) {
            $CarpetasjudicialesDto->setfechaRegistro($this->fechaMysql($CarpetasjudicialesDto->getfechaRegistro()));
        }
        $CarpetasjudicialesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CarpetasjudicialesDto->getfechaActualizacion(), "utf8") : strtoupper($CarpetasjudicialesDto->getfechaActualizacion()))))));
        if ($this->esFecha($CarpetasjudicialesDto->getfechaActualizacion())) {
            $CarpetasjudicialesDto->setfechaActualizacion($this->fechaMysql($CarpetasjudicialesDto->getfechaActualizacion()));
        }
        $CarpetasjudicialesDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CarpetasjudicialesDto->getactivo(), "utf8") : strtoupper($CarpetasjudicialesDto->getactivo()))))));
        if ($this->esFecha($CarpetasjudicialesDto->getactivo())) {
            $CarpetasjudicialesDto->setactivo($this->fechaMysql($CarpetasjudicialesDto->getactivo()));
        }
        $CarpetasjudicialesDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CarpetasjudicialesDto->getcveJuzgado(), "utf8") : strtoupper($CarpetasjudicialesDto->getcveJuzgado()))))));
        if ($this->esFecha($CarpetasjudicialesDto->getcveJuzgado())) {
            $CarpetasjudicialesDto->setcveJuzgado($this->fechaMysql($CarpetasjudicialesDto->getcveJuzgado()));
        }
        $CarpetasjudicialesDto->setcarpetaInv(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CarpetasjudicialesDto->getcarpetaInv(), "utf8") : strtoupper($CarpetasjudicialesDto->getcarpetaInv()))))));
        if ($this->esFecha($CarpetasjudicialesDto->getcarpetaInv())) {
            $CarpetasjudicialesDto->setcarpetaInv($this->fechaMysql($CarpetasjudicialesDto->getcarpetaInv()));
        }
        $CarpetasjudicialesDto->setnuc(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CarpetasjudicialesDto->getnuc(), "utf8") : strtoupper($CarpetasjudicialesDto->getnuc()))))));
        if ($this->esFecha($CarpetasjudicialesDto->getnuc())) {
            $CarpetasjudicialesDto->setnuc($this->fechaMysql($CarpetasjudicialesDto->getnuc()));
        }
        $CarpetasjudicialesDto->setcveUsuario(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CarpetasjudicialesDto->getcveUsuario(), "utf8") : strtoupper($CarpetasjudicialesDto->getcveUsuario()))))));
        if ($this->esFecha($CarpetasjudicialesDto->getcveUsuario())) {
            $CarpetasjudicialesDto->setcveUsuario($this->fechaMysql($CarpetasjudicialesDto->getcveUsuario()));
        }
        $CarpetasjudicialesDto->setobservaciones(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CarpetasjudicialesDto->getobservaciones(), "utf8") : strtoupper($CarpetasjudicialesDto->getobservaciones()))))));
        if ($this->esFecha($CarpetasjudicialesDto->getobservaciones())) {
            $CarpetasjudicialesDto->setobservaciones($this->fechaMysql($CarpetasjudicialesDto->getobservaciones()));
        }
        $CarpetasjudicialesDto->setnumImputados(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CarpetasjudicialesDto->getnumImputados(), "utf8") : strtoupper($CarpetasjudicialesDto->getnumImputados()))))));
        if ($this->esFecha($CarpetasjudicialesDto->getnumImputados())) {
            $CarpetasjudicialesDto->setnumImputados($this->fechaMysql($CarpetasjudicialesDto->getnumImputados()));
        }
        $CarpetasjudicialesDto->setnumOfendidos(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CarpetasjudicialesDto->getnumOfendidos(), "utf8") : strtoupper($CarpetasjudicialesDto->getnumOfendidos()))))));
        if ($this->esFecha($CarpetasjudicialesDto->getnumOfendidos())) {
            $CarpetasjudicialesDto->setnumOfendidos($this->fechaMysql($CarpetasjudicialesDto->getnumOfendidos()));
        }
        $CarpetasjudicialesDto->setnumDelitos(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CarpetasjudicialesDto->getnumDelitos(), "utf8") : strtoupper($CarpetasjudicialesDto->getnumDelitos()))))));
        if ($this->esFecha($CarpetasjudicialesDto->getnumDelitos())) {
            $CarpetasjudicialesDto->setnumDelitos($this->fechaMysql($CarpetasjudicialesDto->getnumDelitos()));
        }
        $CarpetasjudicialesDto->setcveEstatusCarpeta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CarpetasjudicialesDto->getcveEstatusCarpeta(), "utf8") : strtoupper($CarpetasjudicialesDto->getcveEstatusCarpeta()))))));
        if ($this->esFecha($CarpetasjudicialesDto->getcveEstatusCarpeta())) {
            $CarpetasjudicialesDto->setcveEstatusCarpeta($this->fechaMysql($CarpetasjudicialesDto->getcveEstatusCarpeta()));
        }
        $CarpetasjudicialesDto->setincompetencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CarpetasjudicialesDto->getincompetencia(), "utf8") : strtoupper($CarpetasjudicialesDto->getincompetencia()))))));
        if ($this->esFecha($CarpetasjudicialesDto->getincompetencia())) {
            $CarpetasjudicialesDto->setincompetencia($this->fechaMysql($CarpetasjudicialesDto->getincompetencia()));
        }
        $CarpetasjudicialesDto->setcveTipoIncompetencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CarpetasjudicialesDto->getcveTipoIncompetencia(), "utf8") : strtoupper($CarpetasjudicialesDto->getcveTipoIncompetencia()))))));
        if ($this->esFecha($CarpetasjudicialesDto->getcveTipoIncompetencia())) {
            $CarpetasjudicialesDto->setcveTipoIncompetencia($this->fechaMysql($CarpetasjudicialesDto->getcveTipoIncompetencia()));
        }
        $CarpetasjudicialesDto->setacumulado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CarpetasjudicialesDto->getacumulado(), "utf8") : strtoupper($CarpetasjudicialesDto->getacumulado()))))));
        if ($this->esFecha($CarpetasjudicialesDto->getacumulado())) {
            $CarpetasjudicialesDto->setacumulado($this->fechaMysql($CarpetasjudicialesDto->getacumulado()));
        }
        $CarpetasjudicialesDto->setnumAcumulado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CarpetasjudicialesDto->getnumAcumulado(), "utf8") : strtoupper($CarpetasjudicialesDto->getnumAcumulado()))))));
        if ($this->esFecha($CarpetasjudicialesDto->getnumAcumulado())) {
            $CarpetasjudicialesDto->setnumAcumulado($this->fechaMysql($CarpetasjudicialesDto->getnumAcumulado()));
        }
        $CarpetasjudicialesDto->setfechaTermino(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CarpetasjudicialesDto->getfechaTermino(), "utf8") : strtoupper($CarpetasjudicialesDto->getfechaTermino()))))));
        if ($this->esFecha($CarpetasjudicialesDto->getfechaTermino())) {
            $CarpetasjudicialesDto->setfechaTermino($this->fechaMysql($CarpetasjudicialesDto->getfechaTermino()));
        }
        $CarpetasjudicialesDto->setcveConclucion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CarpetasjudicialesDto->getcveConclucion(), "utf8") : strtoupper($CarpetasjudicialesDto->getcveConclucion()))))));
        if ($this->esFecha($CarpetasjudicialesDto->getcveConclucion())) {
            $CarpetasjudicialesDto->setcveConclucion($this->fechaMysql($CarpetasjudicialesDto->getcveConclucion()));
        }
        $CarpetasjudicialesDto->setponderacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CarpetasjudicialesDto->getponderacion(), "utf8") : strtoupper($CarpetasjudicialesDto->getponderacion()))))));
        if ($this->esFecha($CarpetasjudicialesDto->getponderacion())) {
            $CarpetasjudicialesDto->setponderacion($this->fechaMysql($CarpetasjudicialesDto->getponderacion()));
        }
        return $CarpetasjudicialesDto;
    }

    public function selectCarpetasjudiciales($CarpetasjudicialesDto) {
        $CarpetasjudicialesDto = $this->validarCarpetasjudiciales($CarpetasjudicialesDto);
        $CarpetasjudicialesController = new CarpetasjudicialesController();
        $CarpetasjudicialesDto = $CarpetasjudicialesController->selectCarpetasjudiciales($CarpetasjudicialesDto);
        if ($CarpetasjudicialesDto != "") {
            $dtoToJson = new DtoToJson($CarpetasjudicialesDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function selectCarpetasjudicialeseliminar($CarpetasjudicialesDto) {
        $CarpetasjudicialesDto = $this->validarCarpetasjudiciales($CarpetasjudicialesDto);
        $CarpetasjudicialesController = new CarpetasjudicialesController();
        $CarpetasjudicialesDto = $CarpetasjudicialesController->selectCarpetasjudicialeseliminar($CarpetasjudicialesDto);
        if ($CarpetasjudicialesDto != "") {
            return $CarpetasjudicialesDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertCarpetasjudiciales($CarpetasjudicialesDto) {
        $CarpetasjudicialesDto = $this->validarCarpetasjudiciales($CarpetasjudicialesDto);
        $CarpetasjudicialesController = new CarpetasjudicialesController();
        $CarpetasjudicialesDto = $CarpetasjudicialesController->insertCarpetasjudiciales($CarpetasjudicialesDto);
        if ($CarpetasjudicialesDto != "") {
            $dtoToJson = new DtoToJson($CarpetasjudicialesDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateCarpetasjudiciales($CarpetasjudicialesDto) {
        $CarpetasjudicialesDto = $this->validarCarpetasjudiciales($CarpetasjudicialesDto);
        $CarpetasjudicialesController = new CarpetasjudicialesController();
        $CarpetasjudicialesDto = $CarpetasjudicialesController->updateCarpetasjudiciales($CarpetasjudicialesDto);
        if ($CarpetasjudicialesDto != "") {
            $dtoToJson = new DtoToJson($CarpetasjudicialesDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function eliminarCarpetasjudiciales($CarpetasjudicialesDto) {
        $CarpetasjudicialesDto = $this->validarCarpetasjudiciales($CarpetasjudicialesDto);
        $CarpetasjudicialesController = new CarpetasjudicialesController();
        $CarpetasjudicialesDto = $CarpetasjudicialesController->eliminarCarpetasjudiciales($CarpetasjudicialesDto);
        if ($CarpetasjudicialesDto == true) {
            return $CarpetasjudicialesDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
    }

    public function deleteCarpetasjudiciales($CarpetasjudicialesDto) {
        $CarpetasjudicialesDto = $this->validarCarpetasjudiciales($CarpetasjudicialesDto);
        $CarpetasjudicialesController = new CarpetasjudicialesController();
        $CarpetasjudicialesDto = $CarpetasjudicialesController->deleteCarpetasjudiciales($CarpetasjudicialesDto);
        if ($CarpetasjudicialesDto == true) {
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
    }

    public function seleccionarDetalleCarpetasjudicialesCateos($CarpetasjudicialesDto) {
        $jsonDto = new Encode_JSON();
        $validaDatos = false;
        $idJuzgado = $CarpetasjudicialesDto->getCveJuzgado();
        $opcion = $CarpetasjudicialesDto->getCveTipoCarpeta();
        if (($CarpetasjudicialesDto->getNumero() != "") && ($CarpetasjudicialesDto->getAnio() != "") && ($CarpetasjudicialesDto->getCveJuzgado() != "") && ($CarpetasjudicialesDto->getCarpetaInv() == "")) {
            $validaDatos = true;
        } else {
            if ($CarpetasjudicialesDto->getCarpetaInv() != "") {
                $validaDatos = true;
            }
            if ($CarpetasjudicialesDto->getNuc() != "") {
                $validaDatos = true;
            }
        }

        if ($validaDatos) {
            if ($opcion != 1) {
                $CarpetasjudicialesDto->setCveJuzgado("");
            }
            $CarpetasjudicialesDto->setCveTipoCarpeta("2");
            $CarpetasjudicialesDto->setActivo("S");
            $CarpetasjudicialesDtoParam = new CarpetasjudicialesDTO();
            $CarpetasjudicialesDtoParam->setNumero($CarpetasjudicialesDto->getNumero());
            $CarpetasjudicialesDtoParam->setAnio($CarpetasjudicialesDto->getAnio());
            $CarpetasjudicialesDtoParam->setCarpetaInv($CarpetasjudicialesDto->getCarpetaInv());
            $CarpetasjudicialesDtoParam->setCveTipoCarpeta($CarpetasjudicialesDto->getCveTipoCarpeta());
            $carpetasjudicialesController = new CarpetasjudicialesController();
            $tmp = $carpetasjudicialesController->selectDetalleCarpetasjudicialesCateos($CarpetasjudicialesDto);
            if ($tmp != "") {
                if (count($tmp["carpetasJudiciales"]) > 0 && $tmp["carpetasJudiciales"] != "") {
                    if ($tmp["carpetasJudiciales"][0]->getCveJuzgado() == $idJuzgado) {
                        $tmp = $this->informacionCateos($tmp);
                    } else {
                        $tmp = json_encode(["type" => "Error", "text" => "EL NUMERO DE CAUSA NO CORRESPONDE AL JUZGADO."]);
                    }
                } else {
                    $tmp = $jsonDto->encode(array("type" => "Error", "totalCount" => "0", "text" => "NO SE ENCONTRO INFORMACION DE LA CAUSA ESPECIFICADA"));
                }
            } else {
                #Buscamos ahora el NUC
                $CarpetasjudicialesDtoParam = new CarpetasjudicialesDTO();
                $CarpetasjudicialesDtoParam->setNumero($CarpetasjudicialesDto->getNumero());
                $CarpetasjudicialesDtoParam->setAnio($CarpetasjudicialesDto->getAnio());
                $CarpetasjudicialesDtoParam->setCveJuzgado($CarpetasjudicialesDto->getCveJuzgado());
                $CarpetasjudicialesDtoParam->setNuc($CarpetasjudicialesDto->getCarpetaInv());
                $CarpetasjudicialesDtoParam->setCveTipoCarpeta("2");
                $CarpetasjudicialesDtoParam->setActivo("S");
                $tmp = $carpetasjudicialesController->selectDetalleCarpetasjudicialesCateos($CarpetasjudicialesDtoParam);
                if ($tmp != "") {
                    if (count($tmp["carpetasJudiciales"]) > 0 && $tmp["carpetasJudiciales"] != "") {
                        if ($tmp["carpetasJudiciales"][0]->getCveJuzgado() == $idJuzgado) {
                            $tmp = $this->informacionCateos($tmp);
                        } else {
                            $tmp = json_encode(["type" => "Error", "text" => "EL NUMERO DE CAUSA NO CORRESPONDE AL JUZGADO."]);
                        }
                    } else {
                        $tmp = $jsonDto->encode(array("type" => "Error", "totalCount" => "0", "text" => "NO SE ENCONTRO INFORMACION DE LA CAUSA ESPECIFICADA"));
                    }
                } else {
                    $CarpetasjudicialesDtoParam = new CarpetasjudicialesDTO();
                    $CarpetasjudicialesDtoParam->setNumero($CarpetasjudicialesDto->getNumero());
                    $CarpetasjudicialesDtoParam->setAnio($CarpetasjudicialesDto->getAnio());
                    $CarpetasjudicialesDtoParam->setCveJuzgado($CarpetasjudicialesDto->getCveJuzgado());
                    $CarpetasjudicialesDtoParam->setCarpetaInv($CarpetasjudicialesDto->getCarpetaInv());
                    $CarpetasjudicialesDtoParam->setCveTipoCarpeta("1");
                    $CarpetasjudicialesDtoParam->setActivo("S");
                    $tmp = $carpetasjudicialesController->selectDetalleCarpetasjudicialesCateos($CarpetasjudicialesDtoParam);
                    if ($tmp != "") {
                        if (count($tmp["carpetasJudiciales"]) > 0 && $tmp["carpetasJudiciales"] != "") {
                            if ($tmp["carpetasJudiciales"][0]->getCveJuzgado() == $idJuzgado) {
                                $tmp = $this->informacionCateos($tmp);
                            } else {
                                $tmp = json_encode(["type" => "Error", "text" => "EL NUMERO DE CAUSA NO CORRESPONDE AL JUZGADO."]);
                            }
                        }
                    } else {
                        $CarpetasjudicialesDtoParam = new CarpetasjudicialesDTO();
                        $CarpetasjudicialesDtoParam->setNumero($CarpetasjudicialesDto->getNumero());
                        $CarpetasjudicialesDtoParam->setAnio($CarpetasjudicialesDto->getAnio());
                        $CarpetasjudicialesDtoParam->setCveJuzgado($CarpetasjudicialesDto->getCveJuzgado());
                        $CarpetasjudicialesDtoParam->setNuc($CarpetasjudicialesDto->getCarpetaInv());
                        $CarpetasjudicialesDtoParam->setCveTipoCarpeta("1");
                        $CarpetasjudicialesDtoParam->setActivo("S");
                        $tmp = $carpetasjudicialesController->selectDetalleCarpetasjudicialesCateos($CarpetasjudicialesDtoParam);
                        if ($tmp != "") {
                            if (count($tmp["carpetasJudiciales"]) > 0 && $tmp["carpetasJudiciales"] != "") {
                                if ($tmp["carpetasJudiciales"][0]->getCveJuzgado() == $idJuzgado) {
                                    $tmp = $this->informacionCateos($tmp);
                                } else {
                                    $tmp = json_encode(["type" => "Error", "text" => "EL NUMERO DE CAUSA NO CORRESPONDE AL JUZGADO."]);
                                }
                            }
                        } else {
                            $tmp = $jsonDto->encode(array("type" => "OKN", "totalCount" => "0", "text" => "NO SE ENCONTRO CAUSA NI NUMERO AUXILIAR"));
                        }
                    }
                }
            }
        } else {
            $tmp = $jsonDto->encode(array("type" => "Error", "totalCount" => "0", "text" => "DATOS INCORRECTOS"));
        }
        return $tmp;
    }

    public function selectCarpetaExhortoAmparoById($idEAC, $cvetipoCarpeta) {
        $CarpetasjudicialesController = new CarpetasjudicialesController();
        $carpetaJudiciales = $CarpetasjudicialesController->selectCarpetaExhortoAmparoById($idEAC, $cvetipoCarpeta);
//        var_dump($carpetaJudiciales);
        if ($carpetaJudiciales != "") {
            $dtoToJson = new DtoToJson($carpetaJudiciales);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA ID");
        } else {
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }
    }

    public function selectCarpetaExhortoAmparo($carpetasjudicialesDto) {
        $CarpetasjudicialesDto = $this->validarCarpetasjudiciales($carpetasjudicialesDto);
        $CarpetasjudicialesController = new CarpetasjudicialesController();
        $CarpetasjudicialesDto = $CarpetasjudicialesController->selectCarpetaExhortoAmparo($carpetasjudicialesDto);
        if ($CarpetasjudicialesDto != "") {
            $dtoToJson = new DtoToJson($CarpetasjudicialesDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function selectCarpetasJudicialesDetalle($CarpetasjudicialesDto) {
        $x = 1;
        $json = "";
        $CarpetasjudicialesDto = $this->validarCarpetasjudiciales($CarpetasjudicialesDto);
        $CarpetasjudicialesController = new CarpetasjudicialesController();
        $CarpetasjudicialesDto = $CarpetasjudicialesController->selectCarpetasjudiciales($CarpetasjudicialesDto);
        if ($CarpetasjudicialesDto != "") {
            $json .= "{";
            $json .= '"status":"OK",';
            $json .= '"totalCount":"' . count($CarpetasjudicialesDto) . '",';
            $json .= '"data":[';
            for ($n = 0; $n < count($CarpetasjudicialesDto); $n++) {
                $json .= "{";
                $json .= '"idCarpetaJudicial":' . json_encode(utf8_encode($CarpetasjudicialesDto[$n]->getIdCarpetaJudicial())) . ",";
                $json .= '"cveEtapaProcesal":' . json_encode(utf8_encode($CarpetasjudicialesDto[$n]->getCveEtapaProcesal())) . ",";
                $etapasProcesalesDto = new EtapasprocesalesDTO();
                $etapasProcesalesDao = new EtapasprocesalesDAO();
                $etapasProcesalesDto->setCveEtapaProcesal($CarpetasjudicialesDto[$n]->getCveEtapaProcesal());
                $etapasProcesalesDto->setActivo("S");
                $etapasProcesalesDto = $etapasProcesalesDao->selectEtapasprocesales($etapasProcesalesDto, "", $this->proveedor);
                if ($etapasProcesalesDto != "") {
                    $json .= '"desEtapaProcesal":' . json_encode(utf8_encode($etapasProcesalesDto[0]->getDesEtapaProcesal())) . ",";
                } else {
                    $json .= '"desEtapaProcesal": N/A,';
                }
                $json .= '"cveConsignacion":' . json_encode(utf8_encode($CarpetasjudicialesDto[$n]->getCveConsignacion())) . ",";
                $consignacionDto = new ConsignacionesDTO();
                $consignacionesDao = new ConsignacionesDAO();
                $consignacionDto->setCveConsignacion($CarpetasjudicialesDto[$n]->getCveConsignacion());
                $consignacionDto->setActivo("S");
                $consignacionDto = $consignacionesDao->selectConsignaciones($consignacionDto, "", $this->proveedor);
                if ($consignacionDto != "") {
                    $json .= '"desConsignacion":' . json_encode(utf8_encode($consignacionDto[0]->getDesConsignacion())) . ",";
                } else {
                    $json .= '"desConsignacion": N/A,';
                }
                $json .= '"cveTipoCarpeta":' . json_encode($CarpetasjudicialesDto[$n]->getCveTipoCarpeta()) . ",";
                $tiposcarpetasDto = new TiposcarpetasDTO();
                $tiposcarpetasDao = new TiposcarpetasDAO();
                $tiposcarpetasDto->setCveTipoCarpeta($CarpetasjudicialesDto[$n]->getCveTipoCarpeta());
                $tiposcarpetasDto = $tiposcarpetasDao->selectTiposcarpetas($tiposcarpetasDto, "", $this->proveedor);
                if ($tiposcarpetasDto != "") {
                    $json .= '"desTipoCarpeta":' . json_encode(utf8_encode($tiposcarpetasDto[0]->getDesTipoCarpeta())) . ",";
                } else {
                    $json .= '"desTipoCarpeta": N/A,';
                }
                $json .= '"cveConsignacionA":' . json_encode(utf8_encode($CarpetasjudicialesDto[$n]->getCveConsignacionA())) . ",";
                $consignacionaDto = new ConsignacionesaccionesDTO();
                $consignacionaDao = new ConsignacionesaccionesDAO();
                $consignacionaDto->setCveConsignacionA($CarpetasjudicialesDto[$n]->getCveConsignacionA());
                $consignacionaDto->setActivo("S");
                $consignacionaDto = $consignacionaDao->selectConsignacionesacciones($consignacionaDto, "", $this->proveedor);
                if ($consignacionaDto != "") {
                    $json .= '"desConsignacionA":' . json_encode(utf8_encode($consignacionaDto[0]->getDesConsignacionA())) . ",";
                } else {
                    $json .= '"desConsignacionA": N/A,';
                }
                $json .= '"numero":' . json_encode(utf8_encode($CarpetasjudicialesDto[$n]->getNumero())) . ",";
                $json .= '"anio":' . json_encode(utf8_encode($CarpetasjudicialesDto[$n]->getAnio())) . ",";
                $json .= '"fechaRadicacion":' . json_encode(utf8_encode($CarpetasjudicialesDto[$n]->getFechaRadicacion())) . ",";
                $json .= '"fechaRegistro":' . json_encode(utf8_encode($CarpetasjudicialesDto[$n]->getFechaRegistro())) . ",";
                $json .= '"fechaActualizacion":' . json_encode(utf8_encode($CarpetasjudicialesDto[$n]->getFechaActualizacion())) . ",";
                $json .= '"activo":' . json_encode(utf8_encode($CarpetasjudicialesDto[$n]->getActivo())) . ",";
                $json .= '"cveJuzgado":' . json_encode(utf8_encode($CarpetasjudicialesDto[$n]->getCveJuzgado())) . ",";
                $juzgadosDto = new JuzgadosDTO();
                $juzgadosDao = new JuzgadosDAO();
                $juzgadosDto->setCveJuzgado($CarpetasjudicialesDto[$n]->getCveJuzgado());
                $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto, "", $this->proveedor);
                if ($juzgadosDto != "") {
                    $json .= '"desJuzgado":' . json_encode(utf8_encode($juzgadosDto[0]->getDesJuzgado())) . ",";
                } else {
                    $json .= '"desJuzgado": N/A,';
                }
                $json .= '"carpetaInv":' . json_encode(utf8_encode($CarpetasjudicialesDto[$n]->getCarpetaInv())) . ",";
                $json .= '"nuc":' . json_encode(utf8_encode($CarpetasjudicialesDto[$n]->getNuc())) . ",";
                $json .= '"cveUsuario":' . json_encode(utf8_encode($CarpetasjudicialesDto[$n]->getCveUsuario())) . ",";
                $json .= '"observaciones":' . json_encode(utf8_encode($CarpetasjudicialesDto[$n]->getObservaciones())) . ",";
                $json .= '"numImputados":' . json_encode(utf8_encode($CarpetasjudicialesDto[$n]->getNumImputados())) . ",";
                $json .= '"numOfendidos":' . json_encode(utf8_encode($CarpetasjudicialesDto[$n]->getNumOfendidos())) . ",";
                $json .= '"numDelitos":' . json_encode(utf8_encode($CarpetasjudicialesDto[$n]->getNumDelitos())) . ",";
                $json .= '"cveEstatusCarpeta":' . json_encode(utf8_encode($CarpetasjudicialesDto[$n]->getCveEstatusCarpeta())) . ",";
                $estatusCarpetaDto = new EstatuscarpetasDTO();
                $estatusCarpetaDao = new EstatuscarpetasDAO();
                $estatusCarpetaDto->setCveEstatusCarpeta($CarpetasjudicialesDto[$n]->getCveEstatusCarpeta());
                $estatusCarpetaDto->setActivo("S");
                $estatusCarpetaDto = $estatusCarpetaDao->selectEstatuscarpetas($estatusCarpetaDto, "", $this->proveedor);
                if ($estatusCarpetaDto != "") {
                    $json .= '"desEstatusCarpeta":' . json_encode(utf8_encode($estatusCarpetaDto[0]->getDesEstatusCarpeta())) . ",";
                } else {
                    $json .= '"desEstatusCarpeta": N/A,';
                }
                $json .= '"incompetencia":' . json_encode(utf8_encode($CarpetasjudicialesDto[$n]->getIncompetencia())) . ",";
                $json .= '"cveTipoIncompetencia":' . json_encode(utf8_encode($CarpetasjudicialesDto[$n]->getCveTipoIncompetencia())) . ",";
                $tipoIncompetenciaDto = new TiposincompetenciasDTO();
                $tipoIncompetenciaDao = new TiposincompetenciasDAO();
                $tipoIncompetenciaDto->setCveTipoIncompetencia($CarpetasjudicialesDto[$n]->getCveTipoIncompetencia());
                $tipoIncompetenciaDto->setActivo("S");
                $tipoIncompetenciaDto = $tipoIncompetenciaDao->selectTiposincompetencias($tipoIncompetenciaDto, "", $this->proveedor);
                if ($tipoIncompetenciaDto != "") {
                    $json .= '"desTipoIncompetencia":' . json_encode(utf8_encode($tipoIncompetenciaDto[0]->getDesTipoIncompetencia())) . ",";
                } else {
                    $json .= '"desTipoIncompetencia": N/A,';
                }
                $json .= '"acumulado":' . json_encode(utf8_encode($CarpetasjudicialesDto[$n]->getAcumulado())) . ",";
                $json .= '"numAcumulado":' . json_encode(utf8_encode($CarpetasjudicialesDto[$n]->getNumAcumulado())) . ",";
                $json .= '"fechaTermino":' . json_encode(utf8_encode($CarpetasjudicialesDto[$n]->getFechaTermino())) . ",";
                $json .= '"cveConclusion":' . json_encode(utf8_encode($CarpetasjudicialesDto[$n]->getCveConclucion())) . ",";
                if ($CarpetasjudicialesDto[$n]->getCveConclucion() != "") {
                    $conclusionesDto = new ConclusionesDTO();
                    $conclusionesDao = new ConclusionesDAO();
                    $conclusionesDto->setCveConclusion($CarpetasjudicialesDto[$n]->getCveConclucion());
                    $conclusionesDto->setActivo("S");
                    $conclusionesDto = $conclusionesDao->selectConclusiones($conclusionesDto, "", $this->proveedor);
                    if ($conclusionesDto != "") {
                        $json .= '"desConclusion":' . json_encode(utf8_encode($conclusionesDto[0]->getDesConclusion())) . ",";
                    } else {
                        $json .= '"desConclusion": N/A,';
                    }
                }
                $json .= '"ponderacion":' . json_encode(utf8_encode($CarpetasjudicialesDto[$n]->getPonderacion())) . "";

                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($CarpetasjudicialesDto)) {
                    $json .= ",";
                }
            }
            $json .= "]";
            $json .= "}";
        } else {
            $json .= '{"estatus":"Fail",';
            $json .= '"mnj":"No se encontraron resultados."}';
        }
        echo $json;
    }

    /*
     * Paginacion de carpetas judiciales
     */

    public function getPaginasCarpetas($carpetasjudicialesDto, $param) {
        $carpetasjudicialesDto = $this->validarCarpetasjudiciales($carpetasjudicialesDto);
        $CarpetasjudicialesController = new CarpetasjudicialesController();
        $carpetasjudicialesDto = $CarpetasjudicialesController->getPaginasCarpetas($carpetasjudicialesDto, $param);
        return $carpetasjudicialesDto;
    }

    public function actualizarCarpetaJudicial($CarpetasjudicialesDto, $juzgadoresCarpetasDto, $param) {
        $CarpetasjudicialesDto = $this->validarCarpetasjudiciales($CarpetasjudicialesDto);
        $CarpetasjudicialesController = new CarpetasjudicialesController();
        $rs = $CarpetasjudicialesController->actualizarCarpetaJudicial($CarpetasjudicialesDto, $juzgadoresCarpetasDto, $param);
        return ($rs);
    }

    public function guardarCarpetaJudicial($CarpetasjudicialesDto) {
        $CarpetasjudicialesDto = $this->validarCarpetasjudiciales($CarpetasjudicialesDto);
        $CarpetasjudicialesController = new CarpetasjudicialesController();
        $rs = $CarpetasjudicialesController->guardarCarpetaJudicial($CarpetasjudicialesDto);
        return ($rs);
    }

    public function consultarCarpetaByEtapaProcesal($CarpetasjudicialesDto) {
        $CarpetasjudicialesDto = $this->validarCarpetasjudiciales($CarpetasjudicialesDto);
        $CarpetasjudicialesController = new CarpetasjudicialesController();
        $rs = $CarpetasjudicialesController->consultarCarpetaByEtapaProcesal($CarpetasjudicialesDto);
        return ($rs);
    }

    //******** formulacion imputacion
    public function getPaginacionFormulacionImputacion($carpetasjudicialesDto, $param) {
        $carpetasjudicialesDto = $this->validarCarpetasjudiciales($carpetasjudicialesDto);
        $CarpetasjudicialesController = new CarpetasjudicialesController();
        $Registros = $CarpetasjudicialesController->getPaginasFormulacionImputacion($carpetasjudicialesDto, $param);
        if ($Registros != "") {
            return $Registros;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function selectImputadosCarpeta($carpetasjudicialesDto, $param, $cveCereso) {
        $CarpetasjudicialesDto = $this->validarCarpetasjudiciales($carpetasjudicialesDto);
        $CarpetasjudicialesController = new CarpetasjudicialesController();
        $CarpetasjudicialesDto = $CarpetasjudicialesController->selectImputadosCarpeta($CarpetasjudicialesDto, $param, $cveCereso);
        if ($CarpetasjudicialesDto != "") {
            return $CarpetasjudicialesDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function getPaginacionImputadosCarpeta($carpetasjudicialesDto, $param, $cveCereso) {
        $CarpetasjudicialesDto = $this->validarCarpetasjudiciales($carpetasjudicialesDto);
        $CarpetasjudicialesController = new CarpetasjudicialesController();
        $CarpetasjudicialesDto = $CarpetasjudicialesController->getPaginasImputadosCarpeta($CarpetasjudicialesDto, $param, $cveCereso);
        if ($CarpetasjudicialesDto != "") {
            return $CarpetasjudicialesDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function updateImputadosCarpetas($carpetasjudicialesDto, $idImputadoCarpeta, $cveCereso) {
        $CarpetasjudicialesDto = $this->validarCarpetasjudiciales($carpetasjudicialesDto);
        $CarpetasjudicialesController = new CarpetasjudicialesController();
        $CarpetasjudicialesDto = $CarpetasjudicialesController->actualizarImputadoCarpeta($CarpetasjudicialesDto, $idImputadoCarpeta, $cveCereso);
        if ($CarpetasjudicialesDto != "") {
            return $CarpetasjudicialesDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL ACTUALIZAR"));
    }

    public function selectCarpetasJudicialImpofedel($carpetasjudicialesDto, $param) {
        $CarpetasjudicialesDto = $this->validarCarpetasjudiciales($carpetasjudicialesDto);
        $CarpetasjudicialesController = new CarpetasjudicialesController();
        $CarpetasjudicialesDto = $CarpetasjudicialesController->selectCarpetasJudicialImpofedel($CarpetasjudicialesDto, $param);
        if ($CarpetasjudicialesDto != "") {
            return $CarpetasjudicialesDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    //******************************

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

    public function selectCarpetasImputados($carpetasjudicialesDto) {
        $CarpetasjudicialesDto = $this->validarCarpetasjudiciales($carpetasjudicialesDto);
        $CarpetasjudicialesController = new CarpetasjudicialesController();
        $CarpetasjudicialesDto = $CarpetasjudicialesController->selectCarpetasImputadosActivos($carpetasjudicialesDto);

        //print_r(json_encode($CarpetasjudicialesDto));        
        return json_encode($CarpetasjudicialesDto);
    }

    public function selectBeneficios($carpetasjudicialesDto, $parambeneficios) {
        $CarpetasjudicialesDto = $this->validarCarpetasjudiciales($carpetasjudicialesDto);
        $CarpetasjudicialesController = new CarpetasjudicialesController();
        $CarpetasjudicialesDto = $CarpetasjudicialesController->selectBeneficios($carpetasjudicialesDto, $parambeneficios);

        //print_r(json_encode($CarpetasjudicialesDto));        
        return json_encode($CarpetasjudicialesDto);
    }

    public function selectCarpetasJudicialCombos($carpetasjudicialesDto) {
        $CarpetasjudicialesDto = $this->validarCarpetasjudiciales($carpetasjudicialesDto);
        $CarpetasjudicialesController = new CarpetasjudicialesController();
        $CarpetasjudicialesDto = $CarpetasjudicialesController->combosTActuacionJuzgadores($CarpetasjudicialesDto);
        if ($CarpetasjudicialesDto != "") {
            return $CarpetasjudicialesDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function consultaEliminaCausa($carpetasjudicialesDto) {
        $CarpetasjudicialesDto = $this->validarCarpetasjudiciales($carpetasjudicialesDto);
        $CarpetasjudicialesController = new CarpetasjudicialesController();
        $rs = $CarpetasjudicialesController->consultaEliminaCausa($CarpetasjudicialesDto);
        return $rs;
    }

    public function eliminaCausa($carpetasjudicialesDto) {
        $CarpetasjudicialesDto = $this->validarCarpetasjudiciales($carpetasjudicialesDto);
        $CarpetasjudicialesController = new CarpetasjudicialesController();
        $rs = $CarpetasjudicialesController->eliminaCausa($CarpetasjudicialesDto);
        return $rs;
    }

    public function radicarCarpetaJudicial($carpetasjudicialesDto, $juzgadoresCarpetasDto, $incompetenciasDto, $param) {
        $CarpetasjudicialesDto = $this->validarCarpetasjudiciales($carpetasjudicialesDto);
        $CarpetasjudicialesController = new CarpetasjudicialesController();
        $rs = $CarpetasjudicialesController->radicarCarpetaJudicial($CarpetasjudicialesDto, $juzgadoresCarpetasDto, $incompetenciasDto, $param);
        return $rs;
    }

    public function copiarDatosCarpetaJudicial($carpetasjudicialesDto, $param) {
        $carpetasjudicialesDto = $this->validarCarpetasjudiciales($carpetasjudicialesDto);
        $CarpetasjudicialesController = new CarpetasjudicialesController();
        $rs = $CarpetasjudicialesController->copiarDatosCarpetaJudicial($carpetasjudicialesDto, $param);
        return $rs;
    }

    public function buscarPersonas($carpetasjudicialesDto, $param) {
        $carpetasjudicialesDto = $this->validarCarpetasjudiciales($carpetasjudicialesDto);
        $CarpetasjudicialesController = new CarpetasjudicialesController();
        $rs = $CarpetasjudicialesController->buscarPersonas($carpetasjudicialesDto, $param);
        return $rs;
    }
    public function obtenerOrdenByAntecede($carpetasjudicialesDto) {
        $carpetasjudicialesDto = $this->validarCarpetasjudiciales($carpetasjudicialesDto);
        $CarpetasjudicialesController = new CarpetasjudicialesController();
        $rs = $CarpetasjudicialesController->obtenerOrdenByAntecede($carpetasjudicialesDto);
        return $rs;
    }
    public function obtenerCateoByAntecede($carpetasjudicialesDto) {
        $carpetasjudicialesDto = $this->validarCarpetasjudiciales($carpetasjudicialesDto);
        $CarpetasjudicialesController = new CarpetasjudicialesController();
        $rs = $CarpetasjudicialesController->obtenerCateoByAntecede($carpetasjudicialesDto);
        return $rs;
    }

    public function consultarAudiencias($audienciasDto) {
        $x = 1;
        $json = "";
        $audienciasDao = new AudienciasDAO();
        $catAudienciasDto = new CataudienciasDTO();
        $catAudienciasDao = new CataudienciasDAO();
        $salasDto = new SalasDTO();
        $salasDao = new SalasDAO();
        $estatusAudienciaDto = new EstatusaudienciasDTO();
        $estatusAudienciaDao = new EstatusaudienciasDAO();
        $tiposCarpetasDto = new TiposcarpetasDTO();
        $tiposCarpetasDao = new TiposcarpetasDAO();
        $juzgadosDto = new JuzgadosDTO();
        $juzgadosDao = new JuzgadosDAO();
        $orden = " AND cveEstatusAudiencia <>'3'";
        $audienciasDto = $audienciasDao->selectAudiencias($audienciasDto, '', null);
        if ($audienciasDto != "") {
            $json .= "{";
            $json .= '"status":"OK",';
            $json .= '"totalCount":"' . count($audienciasDto) . '",';
            $json .= '"data":[';
            foreach ($audienciasDto as $audiencia) {
                $json .= "{";
                $json .= '"idAudiencia":' . json_encode(utf8_encode($audiencia->getIdAudiencia())) . ",";
                $json .= '"idSolicitudAudiencia":' . json_encode(utf8_encode($audiencia->getIdSolicitudAudiencia())) . ",";
                $json .= '"numero":' . json_encode($audiencia->getNumero()) . ",";
                $json .= '"anio":' . json_encode($audiencia->getAnio()) . ",";
                $json .= '"cveTipoCarpeta":' . json_encode($audiencia->getCveTipoCarpeta()) . ",";
                $tiposCarpetasDto->setCveTipoCarpeta($audiencia->getCveTipoCarpeta());
                $rsTipoCarpeta = $tiposCarpetasDao->selectTiposcarpetas($tiposCarpetasDto, '', null);
                if ($rsTipoCarpeta != "") {
                    $json .= '"desTipoCarpeta":' . json_encode(utf8_encode($rsTipoCarpeta[0]->getDesTipoCarpeta())) . ",";
                } else {
                    $json .= '"desTipoCarpeta":N/A,';
                }
                $json .= '"fechaInicial":' . json_encode($audiencia->getFechaInicial()) . ",";
                $json .= '"fechaFinal":' . json_encode($audiencia->getFechaFinal()) . ",";
                $json .= '"cveCatAudiencia":' . json_encode($audiencia->getCveCatAudiencia()) . ",";
                $catAudienciasDto->setCveCatAudiencia($audiencia->getCveCatAudiencia());
                $rsCatAudiencia = $catAudienciasDao->selectCataudiencias($catAudienciasDto, '', null);
                if ($rsCatAudiencia != "") {
                    $json .= '"desCatAudiencia":' . json_encode(utf8_encode($rsCatAudiencia[0]->getDesCatAudiencia())) . ",";
                } else {
                    $json .= '"desCatAudiencia":N/A,';
                }
                $juzgadosDto->setCveJuzgado($audiencia->getCveJuzgado());
                $rsJuzgados = $juzgadosDao->selectJuzgados($juzgadosDto, '', null);
                if ($rsJuzgados != "") {
                    $json .= '"desJuzgado":' . json_encode(utf8_encode($rsJuzgados[0]->getDesJuzgado())) . ",";
                } else {
                    $json .= '"desJuzgado":N/A,';
                }
                $json .= '"cveSala":' . json_encode($audiencia->getCveSala()) . ",";
                $salasDto->setCveSala($audiencia->getCveSala());
                $rsSalas = $salasDao->selectSalas($salasDto, '', null);
                if ($rsSalas != "") {
                    $json .= '"desSala":' . json_encode(utf8_encode($rsSalas[0]->getDesSala())) . ",";
                } else {
                    $json .= '"desSala":N/A,';
                }
                $json .= '"cveEstatusAudiencia":' . json_encode($audiencia->getCveEstatusAudiencia()) . ",";
                $estatusAudienciaDto->setCveEstatusAudiencia($audiencia->getCveEstatusAudiencia());
                $rsEstatusAudiencia = $estatusAudienciaDao->selectEstatusaudiencias($estatusAudienciaDto, '', null);
                if ($rsEstatusAudiencia != "") {
                    $json .= '"desEstatusAudiencia":' . json_encode(utf8_encode($rsEstatusAudiencia[0]->getDesEstatusAudiencia())) . ",";
                } else {
                    $json .= '"desEstatusAudiencia":N/A,';
                }
                $json .= '"activo":' . json_encode(utf8_encode($audiencia->getActivo()));
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($audienciasDto)) {
                    $json .= ",";
                }
            }
            $json .= "]";
            $json .= "}";
        } else {
            $json .= '{"estatus":"Fail",';
            $json .= '"totalCount": "0",';
            $json .= '"mnj":"No se encontraron resultados."}';
        }
        echo $json;
    }

    public function informacionCateos($tmp) {
        $tmps = "";
        $tmp["carpetasJudiciales"] = $tmp["carpetasJudiciales"][0];
        $json = "";
        $json .= '{"type":"OK",';
        $json .= '"carpetasJudiciales":{';
        $json .= '"idCarpetaJudicial":' . json_encode(utf8_encode($tmp["carpetasJudiciales"]->getIdCarpetaJudicial())) . ",";
        $json .= '"cveEtapaProcesal":' . json_encode(utf8_encode($tmp["carpetasJudiciales"]->getCveEtapaProcesal())) . ",";
        $json .= '"cveConsignacion":' . json_encode(utf8_encode($tmp["carpetasJudiciales"]->getCveConsignacion())) . ",";
        $json .= '"cveTipoCarpeta":' . json_encode(utf8_encode($tmp["carpetasJudiciales"]->getCveTipoCarpeta())) . ",";
        $json .= '"numero":' . json_encode(utf8_encode($tmp["carpetasJudiciales"]->getNumero())) . ",";
        $json .= '"anio":' . json_encode(utf8_encode($tmp["carpetasJudiciales"]->getAnio())) . ",";
        $json .= '"fechaRadicacion":' . json_encode(utf8_encode($tmp["carpetasJudiciales"]->getFechaRadicacion())) . ",";
        $json .= '"fechaRegistro":' . json_encode(utf8_encode($tmp["carpetasJudiciales"]->getFechaRegistro())) . ",";
        $json .= '"fechaActualizacion":' . json_encode(utf8_encode($tmp["carpetasJudiciales"]->getFechaActualizacion())) . ",";
        $json .= '"activo":' . json_encode(utf8_encode($tmp["carpetasJudiciales"]->getActivo())) . ",";
        $json .= '"cveJuzgado":' . json_encode(utf8_encode($tmp["carpetasJudiciales"]->getCveJuzgado())) . ",";
        $json .= '"carpetaInv":' . json_encode(utf8_encode($tmp["carpetasJudiciales"]->getCarpetaInv())) . ",";
        $json .= '"nuc":' . json_encode(utf8_encode($tmp["carpetasJudiciales"]->getNuc())) . ",";
        $json .= '"cveUsuario":' . json_encode(utf8_encode($tmp["carpetasJudiciales"]->getCveUsuario())) . ",";
        $json .= '"observaciones":' . json_encode(utf8_encode($tmp["carpetasJudiciales"]->getObservaciones())) . ",";
        $json .= '"numImputados":' . json_encode(utf8_encode($tmp["carpetasJudiciales"]->getNumImputados())) . ",";
        $json .= '"numOfendidos":' . json_encode(utf8_encode($tmp["carpetasJudiciales"]->getNumOfendidos())) . ",";
        $json .= '"numDelitos":' . json_encode(utf8_encode($tmp["carpetasJudiciales"]->getNumDelitos())) . ",";
        $json .= '"cveEstatusCarpeta":' . json_encode(utf8_encode($tmp["carpetasJudiciales"]->getCveEstatusCarpeta())) . ",";
        $json .= '"incompetencia":' . json_encode(utf8_encode($tmp["carpetasJudiciales"]->getIncompetencia())) . ",";
        $json .= '"cveTipoIncompetencia":' . json_encode(utf8_encode($tmp["carpetasJudiciales"]->getCveTipoIncompetencia())) . ",";
        $json .= '"acumulado":' . json_encode(utf8_encode($tmp["carpetasJudiciales"]->getAcumulado())) . ",";
        $json .= '"numAcumulado":' . json_encode(utf8_encode($tmp["carpetasJudiciales"]->getNumAcumulado())) . ",";
        $json .= '"fechaTermino":' . json_encode(utf8_encode($tmp["carpetasJudiciales"]->getFechaTermino())) . ",";
        $json .= '"cveConclucion":' . json_encode(utf8_encode($tmp["carpetasJudiciales"]->getCveConclucion())) . ",";
        $json .= '"ponderacion":' . json_encode(utf8_encode($tmp["carpetasJudiciales"]->getPonderacion())) . "";
        $json .= '}';
        $json .= ',"imputadosCarpetas":[';
        if (count($tmp["imputadosCarpetas"]) > 0 && $tmp["imputadosCarpetas"] != "") {
            foreach ($tmp["imputadosCarpetas"][0] as $imputadoCarpeta) {
                $json .= '{';
                $json .= '"idImputadoCarpeta":' . json_encode(utf8_encode($imputadoCarpeta->getIdImputadoCarpeta())) . ",";
                $json .= '"idCarpetaJudicial":' . json_encode(utf8_encode($imputadoCarpeta->getIdCarpetaJudicial())) . ",";
                $json .= '"activo":' . json_encode(utf8_encode($imputadoCarpeta->getActivo())) . ",";
                $json .= '"fechaRegistro":' . json_encode(utf8_encode($imputadoCarpeta->getFechaRegistro())) . ",";
                $json .= '"fechaActualizacion":' . json_encode(utf8_encode($imputadoCarpeta->getFechaActualizacion())) . ",";
                $json .= '"detenido":' . json_encode(utf8_encode($imputadoCarpeta->getDetenido())) . ",";
                $json .= '"nombre":' . json_encode(utf8_encode($imputadoCarpeta->getNombre())) . ",";
                $json .= '"paterno":' . json_encode(utf8_encode($imputadoCarpeta->getPaterno())) . ",";
                $json .= '"materno":' . json_encode(utf8_encode($imputadoCarpeta->getMaterno())) . ",";
                $json .= '"rfc":' . json_encode(utf8_encode($imputadoCarpeta->getRfc())) . ",";
                $json .= '"curp":' . json_encode(utf8_encode($imputadoCarpeta->getCurp())) . ",";
                $json .= '"cveTipoDetencion":' . json_encode(utf8_encode($imputadoCarpeta->getCveTipoDetencion())) . ",";
                $json .= '"cveGenero":' . json_encode(utf8_encode($imputadoCarpeta->getCveGenero())) . ",";
                $json .= '"alias":' . json_encode(utf8_encode($imputadoCarpeta->getAlias())) . ",";
                $json .= '"fechaDeclaracion":' . json_encode(utf8_encode($imputadoCarpeta->getFechaDeclaracion())) . ",";
                $json .= '"cvePaisNacimiento":' . json_encode(utf8_encode($imputadoCarpeta->getCvePaisNacimiento())) . ",";
                $json .= '"cveEstadoNacimiento":' . json_encode(utf8_encode($imputadoCarpeta->getCveEstadoNacimiento())) . ",";
                $json .= '"cveMunicipioNacimiento":' . json_encode(utf8_encode($imputadoCarpeta->getCveMunicipioNacimiento())) . ",";
                $json .= '"fechaNacimiento":' . json_encode(utf8_encode($imputadoCarpeta->getFechaNacimiento())) . ",";
                $json .= '"edad":' . json_encode(utf8_encode($imputadoCarpeta->getEdad())) . ",";
                $json .= '"cveTipoPersona":' . json_encode(utf8_encode($imputadoCarpeta->getCveTipoPersona())) . ",";
                $json .= '"nombreMoral":' . json_encode(utf8_encode($imputadoCarpeta->getNombreMoral())) . ",";
                $json .= '"cveNivelInstruccion":' . json_encode(utf8_encode($imputadoCarpeta->getCveNivelInstruccion())) . ",";
                $json .= '"cveEstadoCivil":' . json_encode(utf8_encode($imputadoCarpeta->getCveEstadoCivil())) . ",";
                $json .= '"cveEspanol":' . json_encode(utf8_encode($imputadoCarpeta->getCveEspanol())) . ",";
                $json .= '"cveAlfabetismo":' . json_encode(utf8_encode($imputadoCarpeta->getCveAlfabetismo())) . ",";
                $json .= '"cveDialectoIndigena":' . json_encode(utf8_encode($imputadoCarpeta->getCveDialectoIndigena())) . ",";
                $json .= '"cveTipoFamiliaLinguistica":' . json_encode(utf8_encode($imputadoCarpeta->getCveTipoFamiliaLinguistica())) . ",";
                $json .= '"cveOcupacion":' . json_encode(utf8_encode($imputadoCarpeta->getCveOcupacion())) . ",";
                $json .= '"cveInterprete":' . json_encode(utf8_encode($imputadoCarpeta->getCveInterprete())) . ",";
                $json .= '"cveEstadoPsicofisico":' . json_encode(utf8_encode($imputadoCarpeta->getCveEstadoPsicofisico())) . ",";
                $json .= '"fechaImputacion":' . json_encode(utf8_encode($imputadoCarpeta->getFechaImputacion())) . ",";
                $json .= '"fechaControlDet":' . json_encode(utf8_encode($imputadoCarpeta->getFechaControlDet())) . ",";
                $json .= '"fecTerminoCons":' . json_encode(utf8_encode($imputadoCarpeta->getFecTerminoCons())) . ",";
                $json .= '"fecCierreInv":' . json_encode(utf8_encode($imputadoCarpeta->getFecCierreInv())) . ",";
                $json .= '"estadoNacimiento":' . json_encode(utf8_encode($imputadoCarpeta->getEstadoNacimiento())) . ",";
                $json .= '"municipioNacimiento":' . json_encode(utf8_encode($imputadoCarpeta->getMunicipioNacimiento())) . ",";
                $json .= '"relacionMoral":' . json_encode(utf8_encode($imputadoCarpeta->getRelacionMoral())) . ",";
                $json .= '"personaMoral":' . json_encode(utf8_encode($imputadoCarpeta->getPersonaMoral())) . ",";
                $json .= '"cveCereso":' . json_encode(utf8_encode($imputadoCarpeta->getCveCereso())) . ",";
//                            $json .= '"faseActual":' . json_encode(utf8_encode($imputadoCarpeta->getFaseActual())) . ",";
                $json .= '"cveTipoReincidencia":' . json_encode(utf8_encode($imputadoCarpeta->getCveTipoReincidencia())) . ",";
                $json .= '"ingresoMensual":' . json_encode(utf8_encode($imputadoCarpeta->getIngresoMensual())) . ",";
                $json .= '"cveGrupoEdnico":' . json_encode(utf8_encode($imputadoCarpeta->getCveGrupoEdnico())) . "";
                $json .= '},';
            }
            $json = substr($json, 0, -1);
        }
        $json .= ']';
        $json .= ',"ofendidosCarpetas":[';
        if (count($tmp["ofendidosCarpetas"]) > 0 && $tmp["ofendidosCarpetas"] != "") {
            foreach ($tmp["ofendidosCarpetas"][0] as $ofendidoCarpeta) {
                $json .= '{';
                $json .= '"idOfendidoCarpeta":' . json_encode(utf8_encode($ofendidoCarpeta->getIdOfendidoCarpeta())) . ",";
                $json .= '"idCarpetaJudicial":' . json_encode(utf8_encode($ofendidoCarpeta->getIdCarpetaJudicial())) . ",";
                $json .= '"activo":' . json_encode(utf8_encode($ofendidoCarpeta->getActivo())) . ",";
                $json .= '"fechaRegistro":' . json_encode(utf8_encode($ofendidoCarpeta->getFechaRegistro())) . ",";
                $json .= '"fechaActualizacion":' . json_encode(utf8_encode($ofendidoCarpeta->getFechaActualizacion())) . ",";
                $json .= '"nombre":' . json_encode(utf8_encode($ofendidoCarpeta->getNombre())) . ",";
                $json .= '"paterno":' . json_encode(utf8_encode($ofendidoCarpeta->getPaterno())) . ",";
                $json .= '"materno":' . json_encode(utf8_encode($ofendidoCarpeta->getMaterno())) . ",";
                $json .= '"rfc":' . json_encode(utf8_encode($ofendidoCarpeta->getRfc())) . ",";
                $json .= '"curp":' . json_encode(utf8_encode($ofendidoCarpeta->getCurp())) . ",";
                $json .= '"cveOcupacion":' . json_encode(utf8_encode($ofendidoCarpeta->getCveOcupacion())) . ",";
                $json .= '"cveTipoPersona":' . json_encode(utf8_encode($ofendidoCarpeta->getCveTipoPersona())) . ",";
                $json .= '"cveGenero":' . json_encode(utf8_encode($ofendidoCarpeta->getCveGenero())) . ",";
                $json .= '"fechaNacimiento":' . json_encode(utf8_encode($ofendidoCarpeta->getFechaNacimiento())) . ",";
                $json .= '"edad":' . json_encode(utf8_encode($ofendidoCarpeta->getEdad())) . ",";
                $json .= '"cvePaisNacimiento":' . json_encode(utf8_encode($ofendidoCarpeta->getCvePaisNacimiento())) . ",";
                $json .= '"cveEstadoNacimiento":' . json_encode(utf8_encode($ofendidoCarpeta->getCveEstadoNacimiento())) . ",";
                $json .= '"estadoNacimiento":' . json_encode(utf8_encode($ofendidoCarpeta->getEstadoNacimiento())) . ",";
                $json .= '"cveMunicipioNacimiento":' . json_encode(utf8_encode($ofendidoCarpeta->getCveMunicipioNacimiento())) . ",";
                $json .= '"municipioNacimiento":' . json_encode(utf8_encode($ofendidoCarpeta->getMunicipioNacimiento())) . ",";
                $json .= '"cveEstadoCivil":' . json_encode(utf8_encode($ofendidoCarpeta->getCveEstadoCivil())) . ",";
                $json .= '"cveAlfabetismo":' . json_encode(utf8_encode($ofendidoCarpeta->getCveAlfabetismo())) . ",";
                $json .= '"cveNivelInstruccion":' . json_encode(utf8_encode($ofendidoCarpeta->getCveNivelInstruccion())) . ",";
                $json .= '"cveEspanol":' . json_encode(utf8_encode($ofendidoCarpeta->getCveEspanol())) . ",";
                $json .= '"cveDialectoIndigena":' . json_encode(utf8_encode($ofendidoCarpeta->getCveDialectoIndigena())) . ",";
                $json .= '"cveTipoFamiliaLinguistica":' . json_encode(utf8_encode($ofendidoCarpeta->getCveTipoFamiliaLinguistica())) . ",";
                $json .= '"cveInterprete":' . json_encode(utf8_encode($ofendidoCarpeta->getCveInterprete())) . ",";
                $json .= '"cveOrdenProteccion":' . json_encode(utf8_encode($ofendidoCarpeta->getCveOrdenProteccion())) . ",";
                $json .= '"cveEstadoPsicofisico":' . json_encode(utf8_encode($ofendidoCarpeta->getCveEstadoPsicofisico())) . ",";
                $json .= '"nombreMoral":' . json_encode(utf8_encode($ofendidoCarpeta->getNombreMoral())) . ",";
                $json .= '"cveVictimaDeLaDelincuenciaOrganizada":' . json_encode(utf8_encode($ofendidoCarpeta->getCveVictimaDeLaDelincuenciaOrganizada())) . ",";
                $json .= '"cveVictimaDeViolenciaDeGenero":' . json_encode(utf8_encode($ofendidoCarpeta->getCveVictimaDeViolenciaDeGenero())) . ",";
                $json .= '"cveVictimaDeTrata":' . json_encode(utf8_encode($ofendidoCarpeta->getCveVictimaDeTrata())) . ",";
                $json .= '"desaparecido":' . json_encode(utf8_encode($ofendidoCarpeta->getDesaparecido())) . ",";
                $json .= '"numHijos":' . json_encode(utf8_encode($ofendidoCarpeta->getNumHijos())) . ",";
                $json .= '"embarazada":' . json_encode(utf8_encode($ofendidoCarpeta->getEmbarazada())) . ",";
                $json .= '"cveGrupoEdnico":' . json_encode(utf8_encode($ofendidoCarpeta->getCveGrupoEdnico())) . "";
                $json .= '},';
            }
            $json = substr($json, 0, -1);
        }
        $json .= ']';
        $json .= ',"delitosCarpetas":[';
        if (count($tmp["delitosCarpetas"]) > 0 && $tmp["delitosCarpetas"] != "") {
            foreach ($tmp["delitosCarpetas"][0] as $delitoCarpeta) {
                $json .= '{';
                $json .= '"idDelitoCarpeta":' . json_encode(utf8_encode($delitoCarpeta->getIdDelitoCarpeta())) . ",";
                $json .= '"cveDelito":' . json_encode(utf8_encode($delitoCarpeta->getCveDelito())) . ",";
                $json .= '"activo":' . json_encode(utf8_encode($delitoCarpeta->getActivo())) . ",";
                $json .= '"fechaRegistro":' . json_encode(utf8_encode($delitoCarpeta->getFechaRegistro())) . ",";
                $json .= '"fechaActualizacion":' . json_encode(utf8_encode($delitoCarpeta->getFechaActualizacion())) . ",";
                $json .= '"idCarpetaJudicial":' . json_encode(utf8_encode($delitoCarpeta->getIdCarpetaJudicial())) . "";
                $json .= '},';
            }
            $json = substr($json, 0, -1);
        }
        $json .= ']';
        $json .= '}';

        $tmps = $json;
        return $tmps;
    }

}

@$idCarpetaJudicial = $_POST["idCarpetaJudicial"];
@$cveEtapaProcesal = $_POST["cveEtapaProcesal"];
@$cveConsignacion = $_POST["cveConsignacion"];
@$cveTipoCarpeta = $_POST["cveTipoCarpeta"];
@$cveConsignacionA = $_POST["cveConsignacionA"];
@$numero = $_POST["numero"];
@$anio = $_POST["anio"];
@$fechaRadicacion = $_POST["fechaRadicacion"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$activo = $_POST["activo"];
@$cveJuzgado = $_POST["cveJuzgado"];
@$carpetaInv = $_POST["carpetaInv"];
@$nuc = $_POST["nuc"];
@$cveUsuario = $_POST["cveUsuario"];
@$observaciones = $_POST["observaciones"];
@$numImputados = $_POST["numImputados"];
@$numOfendidos = $_POST["numOfendidos"];
@$numDelitos = $_POST["numDelitos"];
@$cveEstatusCarpeta = $_POST["cveEstatusCarpeta"];
@$incompetencia = $_POST["incompetencia"];
@$cveTipoIncompetencia = $_POST["cveTipoIncompetencia"];
@$acumulado = $_POST["acumulado"];
@$numAcumulado = $_POST["numAcumulado"];
@$fechaTermino = $_POST["fechaTermino"];
@$cveConclucion = $_POST["cveConclucion"];
@$ponderacion = $_POST["ponderacion"];
@$accion = $_POST["accion"];

$param = array();
@$param["pag"] = $_POST['pag'];
@$param["cantxPag"] = $_POST['cantxPag'];
@$param["paginacion"] = $_POST['paginacion']; //true
@$param["fechaDesde"] = $_POST['txtFecInicialBusqueda'];
@$param["fechaHasta"] = $_POST['txtFecFinalBusqueda'];

$parambeneficios = array();
@$parambeneficios["idimputadosancion"] = $_POST['idimputadosancion'];

$carpetasjudicialesFacade = new CarpetasjudicialesFacade();
$carpetasjudicialesDto = new CarpetasjudicialesDTO();

$carpetasjudicialesDto->setIdCarpetaJudicial($idCarpetaJudicial);
$carpetasjudicialesDto->setCveEtapaProcesal($cveEtapaProcesal);
$carpetasjudicialesDto->setCveConsignacion($cveConsignacion);
$carpetasjudicialesDto->setCveTipoCarpeta($cveTipoCarpeta);
$carpetasjudicialesDto->setCveConsignacionA($cveConsignacionA);
$carpetasjudicialesDto->setNumero($numero);
$carpetasjudicialesDto->setAnio($anio);
$carpetasjudicialesDto->setFechaRadicacion($fechaRadicacion);
$carpetasjudicialesDto->setFechaRegistro($fechaRegistro);
$carpetasjudicialesDto->setFechaActualizacion($fechaActualizacion);
$carpetasjudicialesDto->setActivo($activo);
$carpetasjudicialesDto->setCveJuzgado($cveJuzgado);
$carpetasjudicialesDto->setCarpetaInv($carpetaInv);
$carpetasjudicialesDto->setNuc($nuc);
$carpetasjudicialesDto->setCveUsuario($cveUsuario);
$carpetasjudicialesDto->setObservaciones($observaciones);
$carpetasjudicialesDto->setNumImputados($numImputados);
$carpetasjudicialesDto->setNumOfendidos($numOfendidos);
$carpetasjudicialesDto->setNumDelitos($numDelitos);
$carpetasjudicialesDto->setCveEstatusCarpeta($cveEstatusCarpeta);
$carpetasjudicialesDto->setIncompetencia($incompetencia);
$carpetasjudicialesDto->setCveTipoIncompetencia($cveTipoIncompetencia);
$carpetasjudicialesDto->setAcumulado($acumulado);
$carpetasjudicialesDto->setNumAcumulado($numAcumulado);
$carpetasjudicialesDto->setFechaTermino($fechaTermino);
$carpetasjudicialesDto->setCveConclucion($cveConclucion);
$carpetasjudicialesDto->setPonderacion($ponderacion);

if (($accion == "guardar") && ($idCarpetaJudicial == "")) {
    $carpetasjudicialesDto = $carpetasjudicialesFacade->insertCarpetasjudiciales($carpetasjudicialesDto);
    echo $carpetasjudicialesDto;
} else if (($accion == "guardar") && ($idCarpetaJudicial != "")) {
    $carpetasjudicialesDto = $carpetasjudicialesFacade->updateCarpetasjudiciales($carpetasjudicialesDto);
    echo $carpetasjudicialesDto;
} else if ($accion == "consultar") {
    $carpetasjudicialesDto = $carpetasjudicialesFacade->selectCarpetasjudiciales($carpetasjudicialesDto);
    echo $carpetasjudicialesDto;
} else if ($accion == "consultarCarpetasEliminarCausas") {
    $carpetasjudicialesDto = $carpetasjudicialesFacade->selectCarpetasjudicialeseliminar($carpetasjudicialesDto);
    echo $carpetasjudicialesDto;
} else if ($accion == "eliminarCarpetas") {
    $carpetasjudicialesDto = $carpetasjudicialesFacade->eliminarCarpetasjudiciales($carpetasjudicialesDto);
    echo $carpetasjudicialesDto;
} else if (($accion == "baja") && ($idCarpetaJudicial != "")) {
    $carpetasjudicialesDto = $carpetasjudicialesFacade->deleteCarpetasjudiciales($carpetasjudicialesDto);
    echo $carpetasjudicialesDto;
} else if (($accion == "seleccionar") && ($idCarpetaJudicial != "")) {
    $carpetasjudicialesDto = $carpetasjudicialesFacade->selectCarpetasjudiciales($carpetasjudicialesDto);
    echo $carpetasjudicialesDto;
} else if (($accion == "seleccionarDetalleCarpetasjudicialesCateos") && ($carpetasjudicialesDto != "")) {
    $carpetasjudicialesDto = $carpetasjudicialesFacade->seleccionarDetalleCarpetasjudicialesCateos($carpetasjudicialesDto);
    echo $carpetasjudicialesDto;
} else if ($accion == "consultarCarpetaExhortoAmparo") {
    $carpetasjudicialesDto = $carpetasjudicialesFacade->selectCarpetaExhortoAmparo($carpetasjudicialesDto);
    echo $carpetasjudicialesDto;
} else if ($accion == "consultaImputadosCarpetasActivos") {
    $carpetasjudicialesDto = $carpetasjudicialesFacade->selectCarpetasImputados($carpetasjudicialesDto);
    echo $carpetasjudicialesDto;
} else if ($accion == "consultarCarpetasJudicialesDetalle") {
    $carpetasjudicialesDto = $carpetasjudicialesFacade->selectCarpetasJudicialesDetalle($carpetasjudicialesDto);
    echo $carpetasjudicialesDto;
} else if (($accion == "guarda") && ($idCarpetaJudicial != "")) {
    if ((int) $cveTipoCarpeta == 4) {
        @$param['idJuzgador'] = $_POST['idJuzgador'];
    } else {
        @$idJuzgador = $_POST['idJuzgador'];
        $juzgadoresCarpetasDto = new JuzgadorescarpetasDTO();
        $juzgadoresCarpetasDto->setIdJuzgador($idJuzgador);
    }
    $carpetasjudicialesDto = $carpetasjudicialesFacade->actualizarCarpetaJudicial($carpetasjudicialesDto, $juzgadoresCarpetasDto, $param);
    echo $carpetasjudicialesDto;
} else if (($accion == "guarda") && ($idCarpetaJudicial == "")) {
    $carpetasjudicialesDto = $carpetasjudicialesFacade->guardarCarpetaJudicial($carpetasjudicialesDto);
    echo $carpetasjudicialesDto;
} else if ($accion == "consultarCarpetaEtapaProcesal") {
    $carpetasjudicialesDto = $carpetasjudicialesFacade->consultarCarpetaByEtapaProcesal($carpetasjudicialesDto);
    echo $carpetasjudicialesDto;
} else if ($accion == "consultarImputadosCarpeta") {
    $carpetasjudicialesDto = $carpetasjudicialesFacade->selectImputadosCarpeta($carpetasjudicialesDto, $param, $_POST["cveCereso"]);
    echo $carpetasjudicialesDto;
} else if ($accion == "getPaginasImputadosCarpeta") {
    $param["paginacion"] = false;
    $carpetasjudicialesDto = $carpetasjudicialesFacade->getPaginacionImputadosCarpeta($carpetasjudicialesDto, $param, $_POST["cveCereso"]);
    echo $carpetasjudicialesDto;
} else if ($accion == "actualizarImputados") {
    $carpetasjudicialesDto = $carpetasjudicialesFacade->updateImputadosCarpetas($carpetasjudicialesDto, $_POST["idImputadoCarpeta"], $_POST["cveCereso"]);
    echo $carpetasjudicialesDto;
} else if ($accion == "consultarCarpetaJudicialYimpofedel") {
    $carpetasjudicialesDto = $carpetasjudicialesFacade->selectCarpetasJudicialImpofedel($carpetasjudicialesDto, $param);
    echo $carpetasjudicialesDto;
} else if ($accion == "getPaginasFormulacionImputacino") {
    $param["paginacion"] = false;
    $carpetasjudicialesDto = $carpetasjudicialesFacade->getPaginacionFormulacionImputacion($carpetasjudicialesDto, $param);
    echo $carpetasjudicialesDto;
} else if ($accion == "cargarCombos") {
    $carpetasjudicialesDto = $carpetasjudicialesFacade->selectCarpetasJudicialCombos($carpetasjudicialesDto);
    echo $carpetasjudicialesDto;
} else if ($accion == "consultaBeneficios") {
    $carpetasjudicialesDto = $carpetasjudicialesFacade->selectBeneficios($carpetasjudicialesDto, $parambeneficios);
    echo $carpetasjudicialesDto;
} else if ($accion == "getPaginas") {
    @$param["paginacion"] = true;
    @$param["cantidadPorPagina"] = $_POST["cantidadRegistros"];
    @$param["fechaInicio"] = $_POST["fechaInicio"];
    @$param["fechaFin"] = $_POST["fechaFin"];
    $carpetasjudicialesDto = $carpetasjudicialesFacade->getPaginasCarpetas($carpetasjudicialesDto, $param);
    echo $carpetasjudicialesDto;
} else if ($accion == "consultarCarpetaExhortoAmparoById") {
    @$idEAC = $_POST["idEAC"];
    @$cveTipoCarpetaArbol = $_POST["cveTipoCarpeta"];
    $carpetasjudicialesDto = $carpetasjudicialesFacade->selectCarpetaExhortoAmparoById($idEAC, $cveTipoCarpetaArbol);
    echo $carpetasjudicialesDto;
} else if ($accion == "consultaEliminaCausa") {
    $carpetasjudicialesDto = $carpetasjudicialesFacade->consultaEliminaCausa($carpetasjudicialesDto);
    echo $carpetasjudicialesDto;
} else if ($accion == "eliminaCausa") {
    $carpetasjudicialesDto = $carpetasjudicialesFacade->eliminaCausa($carpetasjudicialesDto);
    echo $carpetasjudicialesDto;
} else if ($accion == "radicarCarpeta") {
    $juzgadoresCarpetasDto = new JuzgadorescarpetasDTO();
    if ((int) $cveTipoCarpeta == 4) {
        @$param['idJuzgador'] = $_POST['idJuzgador'];
    } else {
        @$idJuzgador = $_POST['idJuzgador'];
        $juzgadoresCarpetasDto->setIdJuzgador($idJuzgador);
    }
    @$param['idImputadoCarpeta'] = $_POST['idImputadoCarpeta'];
    @$param['generarConsecutivo'] = $_POST['generarConsecutivo'];
    @$param['idCarpetaPadre'] = $_POST['idCarpetaPadre'];
    @$cveTipoIncompetencia = $_POST['cveTipoIncompetencia'];
    @$cveJuzgadoOrigen = $_POST['cveJuzgadoOrigen'];
    @$cveTipoCarpetaOrigen = $_POST['cveTipoCarpetaOrigen'];
    @$numeroOrigen = $_POST['numeroOrigen'];
    @$anioOrigen = $_POST['anioOrigen'];
    @$otroTipoCarpetaOrigen = $_POST['otroTipoCarpetaOrigen'];
    @$otroJuzgadoOrigen = $_POST['otroJuzgadoOrigen'];
    $incompetenciasDto = new IncompetenciasDTO();
    $incompetenciasDto->setCveTipoIncompetencia($cveTipoIncompetencia);
    $incompetenciasDto->setCveJuzgadoOrigen($cveJuzgadoOrigen);
    $incompetenciasDto->setCveTipoCarpetaOrigen($cveTipoCarpetaOrigen);
    $incompetenciasDto->setNumero($numeroOrigen);
    $incompetenciasDto->setAnio($anioOrigen);
    $incompetenciasDto->setOtroTipoCarpetaOrigen($otroTipoCarpetaOrigen);
    $incompetenciasDto->setOtroJuzgadoOrigen($otroJuzgadoOrigen);
    $incompetenciasDto->setActivo('S');
    $carpetasjudicialesDto = $carpetasjudicialesFacade->radicarCarpetaJudicial($carpetasjudicialesDto, $juzgadoresCarpetasDto, $incompetenciasDto, $param);
    echo $carpetasjudicialesDto;
} else if ($accion == "copiarDatosCarpeta") {
    @$param["idCarpetaJudicialDestino"] = $_POST["idCarpetaJudicialDestino"];
    $carpetasjudicialesDto = $carpetasjudicialesFacade->copiarDatosCarpetaJudicial($carpetasjudicialesDto, $param);
    echo $carpetasjudicialesDto;
} else if ($accion == "buscarPersonas") {
    @$param['tipoPersona'] = $_POST['tipoPersona'];
    $carpetasjudicialesDto = $carpetasjudicialesFacade->buscarPersonas($carpetasjudicialesDto, $param);
    echo $carpetasjudicialesDto;
} else if ($accion == "consultarAudiencias") {
    $audienciasDto = new AudienciasDTO();
    @$cveJuzgadoAudiencia = $_POST['cveJuzgadoAudiencia'];
    @$cveTipoCarpetaAudiencia = $_POST['cveTipoCarpetaAudiencia'];
    @$numeroAudiencia = $_POST['numeroAudiencia'];
    @$anioAudiencia = $_POST['anioAudiencia'];
    $audienciasDto->setCveJuzgado($cveJuzgadoAudiencia);
    $audienciasDto->setCveTipoCarpeta($cveTipoCarpetaAudiencia);
    $audienciasDto->setNumero($numeroAudiencia);
    $audienciasDto->setAnio($anioAudiencia);
    $result = $carpetasjudicialesFacade->consultarAudiencias($audienciasDto);
}else if ($accion == "obtenerOrdenByAntecede") {
        
    $carpetasjudicialesDto = $carpetasjudicialesFacade->obtenerOrdenByAntecede($carpetasjudicialesDto, $param);
    echo $carpetasjudicialesDto;
}else if ($accion == "obtenerCateoByAntecede") {
    $carpetasjudicialesDto = $carpetasjudicialesFacade->obtenerCateoByAntecede($carpetasjudicialesDto, $param);
    echo $carpetasjudicialesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>