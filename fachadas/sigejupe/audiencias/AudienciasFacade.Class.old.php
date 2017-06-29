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

//print_r($_POST);
define('WP_DEBUG', true); // enable debugging mode
ini_set("error_log", dirname(__FILE__) . "/../../../logs/AudienciaFacade.log");
ini_set("log_errors", 1);
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL ^ E_NOTICE);


if (isset($_SESSION)) {
    session_start();
}
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/audiencias/AudienciasDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposcarpetas/TiposcarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../..//modelos/sigejupe/dao/select/SelectDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/audiencias/AudienciasController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/carpetasjudiciales/CarpetasjudicialesController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/salas/SalasController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/imputadoscarpetas/ImputadoscarpetasController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/defensoresimputadoscarpetas/DefensoresimputadoscarpetasController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/juzgados/JuzgadosController.Class.php");

class AudienciasFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarAudiencias($AudienciasDto) {
        $AudienciasDto->setidAudiencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getidAudiencia(), "utf8") : strtoupper($AudienciasDto->getidAudiencia()))))));
        if ($this->esFecha($AudienciasDto->getidAudiencia())) {
            $AudienciasDto->setidAudiencia($this->fechaMysql($AudienciasDto->getidAudiencia()));
        }
        $AudienciasDto->setidSolicitudAudiencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getidSolicitudAudiencia(), "utf8") : strtoupper($AudienciasDto->getidSolicitudAudiencia()))))));
        if ($this->esFecha($AudienciasDto->getidSolicitudAudiencia())) {
            $AudienciasDto->setidSolicitudAudiencia($this->fechaMysql($AudienciasDto->getidSolicitudAudiencia()));
        }
        $AudienciasDto->setnumero(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getnumero(), "utf8") : strtoupper($AudienciasDto->getnumero()))))));
        if ($this->esFecha($AudienciasDto->getnumero())) {
            $AudienciasDto->setnumero($this->fechaMysql($AudienciasDto->getnumero()));
        }
        $AudienciasDto->setanio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getanio(), "utf8") : strtoupper($AudienciasDto->getanio()))))));
        if ($this->esFecha($AudienciasDto->getanio())) {
            $AudienciasDto->setanio($this->fechaMysql($AudienciasDto->getanio()));
        }
        $AudienciasDto->setcveTipoCarpeta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getcveTipoCarpeta(), "utf8") : strtoupper($AudienciasDto->getcveTipoCarpeta()))))));
        if ($this->esFecha($AudienciasDto->getcveTipoCarpeta())) {
            $AudienciasDto->setcveTipoCarpeta($this->fechaMysql($AudienciasDto->getcveTipoCarpeta()));
        }
        $AudienciasDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getactivo(), "utf8") : strtoupper($AudienciasDto->getactivo()))))));
        if ($this->esFecha($AudienciasDto->getactivo())) {
            $AudienciasDto->setactivo($this->fechaMysql($AudienciasDto->getactivo()));
        }
        $AudienciasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getfechaRegistro(), "utf8") : strtoupper($AudienciasDto->getfechaRegistro()))))));
        if ($this->esFecha($AudienciasDto->getfechaRegistro())) {
            $AudienciasDto->setfechaRegistro($this->fechaMysql($AudienciasDto->getfechaRegistro()));
        }
        $AudienciasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getfechaActualizacion(), "utf8") : strtoupper($AudienciasDto->getfechaActualizacion()))))));
        if ($this->esFecha($AudienciasDto->getfechaActualizacion())) {
            $AudienciasDto->setfechaActualizacion($this->fechaMysql($AudienciasDto->getfechaActualizacion()));
        }
        $AudienciasDto->setfechaInicial(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getfechaInicial(), "utf8") : strtoupper($AudienciasDto->getfechaInicial()))))));
        if ($this->esFecha($AudienciasDto->getfechaInicial())) {
            $AudienciasDto->setfechaInicial($this->fechaMysql($AudienciasDto->getfechaInicial()));
        }
        $AudienciasDto->setfechaFinal(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getfechaFinal(), "utf8") : strtoupper($AudienciasDto->getfechaFinal()))))));
        if ($this->esFecha($AudienciasDto->getfechaFinal())) {
            $AudienciasDto->setfechaFinal($this->fechaMysql($AudienciasDto->getfechaFinal()));
        }
        $AudienciasDto->setcveCatAudiencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getcveCatAudiencia(), "utf8") : strtoupper($AudienciasDto->getcveCatAudiencia()))))));
        if ($this->esFecha($AudienciasDto->getcveCatAudiencia())) {
            $AudienciasDto->setcveCatAudiencia($this->fechaMysql($AudienciasDto->getcveCatAudiencia()));
        }
        $AudienciasDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getcveJuzgado(), "utf8") : strtoupper($AudienciasDto->getcveJuzgado()))))));
        if ($this->esFecha($AudienciasDto->getcveJuzgado())) {
            $AudienciasDto->setcveJuzgado($this->fechaMysql($AudienciasDto->getcveJuzgado()));
        }
        $AudienciasDto->setcveJuzgadoDesahoga(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getcveJuzgadoDesahoga(), "utf8") : strtoupper($AudienciasDto->getcveJuzgadoDesahoga()))))));
        if ($this->esFecha($AudienciasDto->getcveJuzgadoDesahoga())) {
            $AudienciasDto->setcveJuzgadoDesahoga($this->fechaMysql($AudienciasDto->getcveJuzgadoDesahoga()));
        }
        $AudienciasDto->setcveAdscripcionSolicita(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getcveAdscripcionSolicita(), "utf8") : strtoupper($AudienciasDto->getcveAdscripcionSolicita()))))));
        if ($this->esFecha($AudienciasDto->getcveAdscripcionSolicita())) {
            $AudienciasDto->setcveAdscripcionSolicita($this->fechaMysql($AudienciasDto->getcveAdscripcionSolicita()));
        }
        $AudienciasDto->setcveUsuario(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getcveUsuario(), "utf8") : strtoupper($AudienciasDto->getcveUsuario()))))));
        if ($this->esFecha($AudienciasDto->getcveUsuario())) {
            $AudienciasDto->setcveUsuario($this->fechaMysql($AudienciasDto->getcveUsuario()));
        }
        $AudienciasDto->setidReferencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getidReferencia(), "utf8") : strtoupper($AudienciasDto->getidReferencia()))))));
        if ($this->esFecha($AudienciasDto->getidReferencia())) {
            $AudienciasDto->setidReferencia($this->fechaMysql($AudienciasDto->getidReferencia()));
        }
        $AudienciasDto->setdetenido(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getdetenido(), "utf8") : strtoupper($AudienciasDto->getdetenido()))))));
        if ($this->esFecha($AudienciasDto->getdetenido())) {
            $AudienciasDto->setdetenido($this->fechaMysql($AudienciasDto->getdetenido()));
        }
        $AudienciasDto->setcveEstatusAudiencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getcveEstatusAudiencia(), "utf8") : strtoupper($AudienciasDto->getcveEstatusAudiencia()))))));
        if ($this->esFecha($AudienciasDto->getcveEstatusAudiencia())) {
            $AudienciasDto->setcveEstatusAudiencia($this->fechaMysql($AudienciasDto->getcveEstatusAudiencia()));
        }
        $AudienciasDto->setcveSala(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getcveSala(), "utf8") : strtoupper($AudienciasDto->getcveSala()))))));
        if ($this->esFecha($AudienciasDto->getcveSala())) {
            $AudienciasDto->setcveSala($this->fechaMysql($AudienciasDto->getcveSala()));
        }
        $AudienciasDto->setpeso(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getpeso(), "utf8") : strtoupper($AudienciasDto->getpeso()))))));
        if ($this->esFecha($AudienciasDto->getpeso())) {
            $AudienciasDto->setpeso($this->fechaMysql($AudienciasDto->getpeso()));
        }
        $AudienciasDto->setvariable(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getvariable(), "utf8") : strtoupper($AudienciasDto->getvariable()))))));
        if ($this->esFecha($AudienciasDto->getvariable())) {
            $AudienciasDto->setvariable($this->fechaMysql($AudienciasDto->getvariable()));
        }

        return $AudienciasDto;
    }

    public function selectAudiencias($AudienciasDto) {
        $AudienciasDto = $this->validarAudiencias($AudienciasDto);
        $AudienciasController = new AudienciasController();
        $AudienciasDto = $AudienciasController->selectAudiencias($AudienciasDto);

//        print_r($AudienciasDto);

        $response = array();
        if ($AudienciasDto == '') {
            $response = [
                "totalCount" => "0",
                "text" => "SIN RESULTADOS A MOSTRAR***"
            ];
        } else {

            $AudienciasArray = [];

            foreach ($AudienciasDto as $audiencia) {

                $salasDao = new SalasDAO();
                $salasDto = new SalasDTO();

                $salasDto->setCveSala($audiencia->getCveSala());
                $salasDto->setActivo('S');

                $selectSala = $salasDao->selectSalas($salasDto);

                $desSala = (count($selectSala)) ? $selectSala[0]->getDesSala() : 'POR CONFIRMAR';

                $AudienciasArray[] = [
                    'idAudiencia' => $audiencia->getIdAudiencia(),
                    'idSolicitudAudiencia' => $audiencia->getIdSolicitudAudiencia(),
                    'numero' => $audiencia->getNumero(),
                    'anio' => $audiencia->getAnio(),
                    'cveTipoCarpeta' => $audiencia->getCveTipoCarpeta(),
                    'activo' => $audiencia->getActivo(),
                    'fechaRegistro' => $audiencia->getFechaRegistro(),
                    'fechaActualizacion' => $audiencia->getFechaActualizacion(),
                    'fechaInicial' => $audiencia->getFechaInicial(),
                    'fechaFinal' => $audiencia->getFechaFinal(),
                    'cveCatAudiencia' => $audiencia->getCveCatAudiencia(),
                    'cveJuzgado' => $audiencia->getCveJuzgado(),
                    'cveJuzgadoDesahoga' => $audiencia->getCveJuzgadoDesahoga(),
                    'cveAdscripcionSolicita' => $audiencia->getCveAdscripcionSolicita(),
                    'cveUsuario' => $audiencia->getCveUsuario(),
                    'idReferencia' => $audiencia->getIdReferencia(),
                    'detenido' => $audiencia->getDetenido(),
                    'cveEstatusAudiencia' => $audiencia->getCveEstatusAudiencia(),
                    'cveSala' => $audiencia->getCveSala(),
                    'desSala' => $desSala,
                    'peso' => $audiencia->getPeso(),
                    'variable' => $audiencia->getVariable()
                ];
            }

            $response = [
                'totalCount' => count($AudienciasArray),
                'text' => 'RESULTADOS DE LA CONSULTA',
                'data' => $AudienciasArray
            ];
        }

        return json_encode($response);
    }

    public function consultarTieneAudiencia($audienciasDto) {
        $audienciasDto = $this->validarAudiencias($audienciasDto);
        $audienciaController = new AudienciasController();
        $audienciasDto = $audienciaController->selectAudiencias($audienciasDto);
        $json = "";
        $x = 1;
        if ($audienciasDto != "") {
            $tiposCarpetasDto = new TiposcarpetasDTO();
            $tiposCarpetasDao = new TiposcarpetasDAO();


            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($audienciasDto) . '",';
            $json .= '"data":[';
            foreach ($audienciasDto as $audiencia) {
                $tiposCarpetasDto->setCveTipoCarpeta($audiencia->getCveTipoCarpeta());
                $rsTiposCarpetasDto = $tiposCarpetasDao->selectTiposcarpetas($tiposCarpetasDto);

                if ($rsTiposCarpetasDto != "") {
                    $tipoCarp = $rsTiposCarpetasDto[0]->getDesTipoCarpeta();
                } else {
                    $tipoCarp = "";
                }

                $json .= "{";
                $json .= '"idAudiencia":' . json_encode(($audiencia->getIdAudiencia())) . ",";
                $json .= '"idSolicitudAudiencia":' . json_encode(($audiencia->getIdSolicitudAudiencia())) . ",";
                $json .= '"numero":' . json_encode(($audiencia->getNumero())) . ",";
                $json .= '"anio":' . json_encode(($audiencia->getAnio())) . ",";
                $json .= '"cveTipoCarpeta":' . json_encode($audiencia->getCveTipoCarpeta()) . ",";
                $json .= '"descCarpeta":' . json_encode($tipoCarp) . ",";
                $json .= '"activo":' . json_encode(($audiencia->getActivo())) . ",";
                $json .= '"fechaRegistro":' . json_encode(($audiencia->getFechaRegistro())) . ",";
                $json .= '"fechaActualizacion":' . json_encode(($audiencia->getFechaActualizacion())) . ",";
                $json .= '"fechaInicial":' . json_encode(($audiencia->getFechaInicial())) . ",";
                $json .= '"fechaFinal":' . json_encode(($audiencia->getFechaFinal())) . ",";
                $json .= '"cveCatAudiencia":' . json_encode(($audiencia->getCveCatAudiencia())) . ",";
                $json .= '"cveJuzgado":' . json_encode(($audiencia->getCveJuzgado())) . ",";
                $json .= '"cveJuzgadoDesahoga":' . json_encode(($audiencia->getCveJuzgadoDesahoga())) . ",";
                $json .= '"cveAdscripcionSolicita":' . json_encode(($audiencia->getCveAdscripcionSolicita())) . ",";
                $json .= '"cveUsuario":' . json_encode(($audiencia->getCveUsuario())) . ",";
                $json .= '"idReferencia":' . json_encode(($audiencia->getIdReferencia())) . ",";
                $json .= '"detenido":' . json_encode(($audiencia->getDetenido())) . ",";
                $json .= '"cveEstatusAudiencia":' . json_encode(($audiencia->getCveEstatusAudiencia())) . ",";
                $json .= '"cveSala":' . json_encode(($audiencia->getCveSala())) . ",";
                $json .= '"peso":' . json_encode(($audiencia->getPeso())) . "";
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
            $json .= '"mnj":"No se encontraron resultados."}';
        }
        return $json;
    }

    public function consultarAudienciaJueces($AudienciasDto) {
        $AudienciasDto = $this->validarAudiencias($AudienciasDto);
        $AudienciasController = new AudienciasController();
        $rs = $AudienciasController->consultarAudienciaJueces($AudienciasDto);

        return $rs;
    }

    public function selectAudienciasRelacion($AudienciasDto) {
        $AudienciasDto = $this->validarAudiencias($AudienciasDto);
        $AudienciasController = new AudienciasController();
        $AudienciasDto = $AudienciasController->selectAudienciasRelacion($AudienciasDto);
        if ($AudienciasDto != "") {
            return $AudienciasDto;
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function selectAudienciasReporte($AudienciasDto) {
        $AudienciasDto = $this->validarAudiencias($AudienciasDto);
        $AudienciasController = new AudienciasController();
        $AudienciasDto = $AudienciasController->selectAudienciasReporte($AudienciasDto);
        if ($AudienciasDto != "") {
            return $AudienciasDto;
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function selectAudienciasBetween($AudienciasDto) {
        $AudienciasDto = $this->validarAudiencias($AudienciasDto);
        $AudienciasController = new AudienciasController();
        $AudienciasDto = $AudienciasController->selectAudienciasBetween($AudienciasDto);
        if ($AudienciasDto != "") {
            return $AudienciasDto;
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function selectAudienciasJuzgador($AudienciasDto) {
        $AudienciasDto = $this->validarAudiencias($AudienciasDto);
        $AudienciasController = new AudienciasController();
        $AudienciasDto = $AudienciasController->selectAudienciasJuzgador($AudienciasDto);
        if ($AudienciasDto != "") {
            return $AudienciasDto;
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function selectAudienciasSalas($AudienciasDto) {
        $AudienciasDto = $this->validarAudiencias($AudienciasDto);
        $AudienciasController = new AudienciasController();
        $AudienciasDto = $AudienciasController->selectAudienciasSalas($AudienciasDto);
        if ($AudienciasDto != "") {
            return $AudienciasDto;
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertAudiencias($AudienciasDto) {
        $AudienciasDto = $this->validarAudiencias($AudienciasDto);
        $AudienciasController = new AudienciasController();
        $AudienciasDto = $AudienciasController->insertAudiencias($AudienciasDto);
        if ($AudienciasDto != "") {
            $dtoToJson = new DtoToJson($AudienciasDto);

            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateAudiencias($AudienciasDto) {
        $AudienciasDto = $this->validarAudiencias($AudienciasDto);
        $AudienciasController = new AudienciasController();
        $AudienciasDto = $AudienciasController->updateAudiencias($AudienciasDto);
        if ($AudienciasDto != "") {
            $dtoToJson = new DtoToJson($AudienciasDto);

            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function updateAudienciasrelacion($AudienciasDto) {
        $AudienciasDto = $this->validarAudiencias($AudienciasDto);
        $AudienciasController = new AudienciasController();
        $AudienciasDto = $AudienciasController->updateAudienciasrelacion($AudienciasDto);
        if ($AudienciasDto != "") {
            return $AudienciasDto;
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteAudiencias($AudienciasDto) {
        $AudienciasDto = $this->validarAudiencias($AudienciasDto);
        $AudienciasController = new AudienciasController();
        $AudienciasDto = $AudienciasController->deleteAudiencias($AudienciasDto);
        if ($AudienciasDto == true) {
            $jsonDto = new Encode_JSON();

            return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
    }

    public function cancelarAudiencia($audienciasDto) {
        $audienciasDto = $this->validarAudiencias($audienciasDto);
        $audienciaCtr = new AudienciasController();
        $resultado = $audienciaCtr->cancelarAudiencia($audienciasDto);
        if ($resultado["type"] == "OK") {
            return json_encode(array(
                "type" => "OK",
                "text" => "AUDIENCIA CANCELADA CORRECTAMENTE"
            ));
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("type" => "Error", "text" => $resultado["text"]));
    }

    public function asignarAudienciaManual($audienciasDto, $extra) {
        $audienciasDto = $this->validarAudiencias($audienciasDto);
        $audienciaController = new AudienciasController();
        $audienciasDto = $audienciaController->asignarAudienciaManual($audienciasDto, $extra);

        return json_encode($audienciasDto);
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

    public function consultaAudienciasSimples($audienciasDto) {
        $audienciasDto = $this->validarAudiencias($audienciasDto);

        $audienciasController = new AudienciasController();
        $audienciasDto = $audienciasController->consultaAudienciasSimples($audienciasDto);

        return json_encode($audienciasDto);
    }

    public function ConsultaAudienciasDistritos($audienciasDto, $cveDistrito) {
        $audienciasDto = $this->validarAudiencias($audienciasDto);
        $audienciasController = new AudienciasController();
        $audienciasDto = $audienciasController->consultaAudienciasDistrito($audienciasDto, $cveDistrito);
//        error_log(print_r($audienciasDto, true));

        return json_encode($audienciasDto);
    }

    public function consultaAudienciasParaPorConsejo($audienciasDto, $cveDistrito, $idJuzgador) {

        $audienciasDto = $this->validarAudiencias($audienciasDto);

        $audienciasController = new AudienciasController();
        $audienciasDto = $audienciasController->consultaAudienciasParaElConsejo($audienciasDto, $cveDistrito, $idJuzgador);

        return json_encode($audienciasDto);
    }

    #--------------CONSULTA DE AUDIENCIAS JUZGADO

    public function consultarAudienciasJuzgado($audienciasDto) {

        $audienciasDto = $this->validarAudiencias($audienciasDto);

        $audienciasController = new AudienciasController();
        $audienciasDto = $audienciasController->consultarAudienciasJuzgado($audienciasDto);
        if ($audienciasDto != "") {
            return $audienciasDto;
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    #------------------------------------------------
    #--------------Administracion de audiencia kary

    public function selectAudienciasHorarios($audienciasDto) {
        $audienciasDto = $this->validarAudiencias($audienciasDto);
        $audienciaController = new AudienciasController();
        $audienciasDto = $audienciaController->selectAudienciasHorarios($audienciasDto);

        return $audienciasDto;
    }

    public function selecAdmintAudienciasJuzgador($audienciasDto) {
        $audienciasDto = $this->validarAudiencias($audienciasDto);
        $audienciaController = new AudienciasController();
        $audienciasDto = $audienciaController->selecAdmintAudienciasJuzgador($audienciasDto);

        return $audienciasDto;
    }

    public function selecAdmintAudienciasSalas($audienciasDto) {
        $audienciasDto = $this->validarAudiencias($audienciasDto);
        $audienciaController = new AudienciasController();
        $audienciasDto = $audienciaController->selecAdmintAudienciasSalas($audienciasDto);

        return $audienciasDto;
    }

    public function guardarAudienciaAdmin($audienciasDto, $arrayJuzgadores, $arracveFunciones, $arraIdAudienciaJuez) {
        $audienciasDto = $this->validarAudiencias($audienciasDto);
        $audienciaController = new AudienciasController();
        $audienciasDto->setFechaInicial($this->fechaHoraMysql($audienciasDto->getFechaInicial()));
        $audienciasDto->setFechaFinal($this->fechaHoraMysql($audienciasDto->getFechaFinal()));
        $audienciasDto = $audienciaController->guardarAudienciaAdmin($audienciasDto, $arrayJuzgadores, $arracveFunciones, $arraIdAudienciaJuez);

        return $audienciasDto;
    }

    public function terminacionAudiencias($audienciasDto) {
        $audienciasDto = $this->validarAudiencias($audienciasDto);
        $audienciaController = new AudienciasController();
        $audienciasDto = $audienciaController->terminacionAudiencias($audienciasDto);

        return $audienciasDto;
    }

    public function selectAudienciasHorariosTerminacion($audienciasDto) {
        $audienciasDto = $this->validarAudiencias($audienciasDto);
        $audienciaController = new AudienciasController();
        $audienciasDto = $audienciaController->selectAudienciasHorariosTerminacion($audienciasDto);

        return $audienciasDto;
    }

    public function selecAdmintAudienciasJuzgadorTerminacion($audienciasDto) {
        $audienciasDto = $this->validarAudiencias($audienciasDto);
        $audienciaController = new AudienciasController();
        $audienciasDto = $audienciaController->selecAdmintAudienciasJuzgadorTerminacion($audienciasDto);

        return $audienciasDto;
    }

    public function selecAdmintAudienciasSalasTerminacion($audienciasDto) {
        $audienciasDto = $this->validarAudiencias($audienciasDto);
        $audienciaController = new AudienciasController();
        $audienciasDto = $audienciaController->selecAdmintAudienciasSalasTerminacion($audienciasDto);

        return $audienciasDto;
    }

    #------------------------------------------------

    public function getInformacionAudiencia($audienciasDto) {
        $audienciasDto = $this->validarAudiencias($audienciasDto);
        $audienciaController = new AudienciasController();
        $audienciasDto = $audienciaController->getInformacionAudiencia($audienciasDto);

        return $audienciasDto;
    }

    public function obtenerjuzgadoresJuzgados($cveDistrito) {
        $juzgadosControler = new JuzgadosController();
        $juzgadosDto = new JuzgadosDTO();

        $juzgadosDto->setCveDistrito($cveDistrito);
        $juzgados = $juzgadosControler->selectJuzgados($juzgadosDto);

        $cadena = "";
        foreach ($juzgados as $juzgado) {
            $cadena .= "," . $juzgado->getCveJuzgado();
        }

        $cadena = substr($cadena, 1);




        $selectDao = new SelectDAO();
        $params = array();
        $params["fields"] = "distinct (j.idJuzgador),j.nombre,j.paterno,j.materno";

        $params["tables"] = " tbljuzgadoresjuzgados jj 
                   join tbljuzgadores j on j.idJuzgador= jj.idJuzgador 
                   join tbljuzgados jdo on jdo.cvejuzgado = jj.cveJuzgado
                 where jj.cveJuzgado in(" . $cadena . ") and j.activo = 'S' and jj.activo = 'S' order by  j.nombre ASC";



        $resultado = $selectDao->selectDAO($params);


        error_log($resultado);
        return $resultado;
    }

}

@$idAudiencia = $_POST["idAudiencia"];
@$idSolicitudAudiencia = $_POST["idSolicitudAudiencia"];
@$numero = $_POST["numero"];
@$anio = $_POST["anio"];
@$cveTipoCarpeta = $_POST["cveTipoCarpeta"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$fechaInicial = $_POST["fechaInicial"];
@$fechaFinal = $_POST["fechaFinal"];
@$cveCatAudiencia = $_POST["cveCatAudiencia"];
@$cveJuzgado = $_POST["cveJuzgado"];
@$cveJuzgadoDesahoga = $_POST["cveJuzgadoDesahoga"];
@$cveAdscripcionSolicita = $_POST["cveAdscripcionSolicita"];
@$cveUsuario = $_POST["cveUsuario"];
@$idReferencia = $_POST["idReferencia"];
@$detenido = $_POST["detenido"];
@$cveEstatusAudiencia = $_POST["cveEstatusAudiencia"];
@$cveSala = $_POST["cveSala"];
@$peso = $_POST["peso"];
@$variable = $_POST["variable"];
@$cveDistrito = $_POST["cveDistrito"];
@$idJuzgador = $_POST["idJuzgador"];


$arraIdAudienciaJuez = Array();
@$arraIdAudienciaJuez[] = $_POST['idAudienciaJuez1'];
@$arraIdAudienciaJuez[] = $_POST['idAudienciaJuez2'];
@$arraIdAudienciaJuez[] = $_POST['idAudienciaJuez3'];
$arrayJuzgadores = Array();
@$arrayJuzgadores[] = $_POST['cveJuzgadores1'];
@$arrayJuzgadores[] = $_POST['cveJuzgadores2'];
@$arrayJuzgadores[] = $_POST['cveJuzgadores3'];
$arracveFunciones = Array();
@$arracveFunciones[] = $_POST['cveFunciones1'];
@$arracveFunciones[] = $_POST['cveFunciones2'];
@$arracveFunciones[] = $_POST['cveFunciones3'];


@$accion = $_POST["accion"];

$audienciasFacade = new AudienciasFacade();
$audienciasDto = new AudienciasDTO();

$audienciasDto->setIdAudiencia($idAudiencia);
$audienciasDto->setIdSolicitudAudiencia($idSolicitudAudiencia);
$audienciasDto->setNumero($numero);
$audienciasDto->setAnio($anio);
$audienciasDto->setCveTipoCarpeta($cveTipoCarpeta);
$audienciasDto->setActivo($activo);
$audienciasDto->setFechaRegistro($fechaRegistro);
$audienciasDto->setFechaActualizacion($fechaActualizacion);
$audienciasDto->setFechaInicial($fechaInicial);
$audienciasDto->setFechaFinal($fechaFinal);
$audienciasDto->setCveCatAudiencia($cveCatAudiencia);
$audienciasDto->setCveJuzgado($cveJuzgado);
$audienciasDto->setCveJuzgadoDesahoga($cveJuzgadoDesahoga);
$audienciasDto->setCveAdscripcionSolicita($cveAdscripcionSolicita);
$audienciasDto->setCveUsuario($cveUsuario);
$audienciasDto->setIdReferencia($idReferencia);
$audienciasDto->setDetenido($detenido);
$audienciasDto->setCveEstatusAudiencia($cveEstatusAudiencia);
$audienciasDto->setCveSala($cveSala);
$audienciasDto->setPeso($peso);
$audienciasDto->setVariable($variable);


if (($accion == "guardar") && ($idAudiencia == "")) {
    $audienciasDto = $audienciasFacade->insertAudiencias($audienciasDto);
    echo $audienciasDto;
} else if (($accion == "guardar") && ($idAudiencia != "")) {
    $audienciasDto = $audienciasFacade->updateAudiencias($audienciasDto);
    echo $audienciasDto;
} else if ($accion == "guardarAudiencia") {
    $audienciasDto = $audienciasFacade->updateAudienciasrelacion($audienciasDto);
    echo $audienciasDto;
} else if ($accion == "consultar") {
    $audienciasDto = $audienciasFacade->selectAudiencias($audienciasDto);
    echo $audienciasDto;
} else if ($accion == "consultarTieneAudiencia") {
    $audienciasDto = $audienciasFacade->consultarTieneAudiencia($audienciasDto);
    echo $audienciasDto;
} else if ($accion == "consultarRelacion") {
    $audienciasDto = $audienciasFacade->selectAudienciasRelacion($audienciasDto);
    echo $audienciasDto;
} else if ($accion == "consultarReporte") {
    $audienciasDto = $audienciasFacade->selectAudienciasReporte($audienciasDto);
    echo $audienciasDto;
} else if ($accion == "consultarBetween") {
    $audienciasDto = $audienciasFacade->selectAudienciasBetween($audienciasDto);
    echo $audienciasDto;
} else if ($accion == "consultarAudienciasJuzgador") {
    $audienciasDto = $audienciasFacade->selectAudienciasJuzgador($audienciasDto);
    echo $audienciasDto;
} else if ($accion == "consultarAudienciasSalas") {
    $audienciasDto = $audienciasFacade->selectAudienciasSalas($audienciasDto);
    echo $audienciasDto;
} else if (($accion == "baja") && ($idAudiencia != "")) {
    $audienciasDto = $audienciasFacade->deleteAudiencias($audienciasDto);
    echo $audienciasDto;
} else if (($accion == "seleccionar") && ($idAudiencia != "")) {
    $audienciasDto = $audienciasFacade->selectAudiencias($audienciasDto);
    echo $audienciasDto;
} else if (($accion == "cancelarAudiencia") && ($idAudiencia != "")) {
    $audienciasDto = $audienciasFacade->cancelarAudiencia($audienciasDto);
    echo $audienciasDto;
} else if (($accion == "obtenerjuzgadoresJuzgados")) {

    $audienciasDto = $audienciasFacade->obtenerjuzgadoresJuzgados(@$cveDistrito);
    echo $audienciasDto;
} else if ($accion == 'asignarAudienciaManual') {

    $extra = new stdClass();

    $extra->fechaAudiencia = @$_POST['fecha_audiencia'];
    $extra->cveSala = @$_POST['cveSala'];
    $extra->juezTribunal = @$_POST['jueztribunal'];
    $extra->juez1 = @$_POST['juez1'];
    $extra->juez2 = @$_POST['juez2'];
    $extra->juez3 = @$_POST['juez3'];
    $extra->tribunal_por_ejercicio = (isset($_POST['tribunal_por_ejercicio'])) ? 'si' : 'no';
    $extra->imputadosReclusos = @$_POST['imputadosReclusos'];


    $audienciasDto = $audienciasFacade->asignarAudienciaManual($audienciasDto, $extra);
    echo $audienciasDto;
} else if ($accion == 'consultaAudi') {
    $audienciasDto = $audienciasFacade->consultaAudienciasSimples($audienciasDto);
    echo $audienciasDto;
} else if ($accion == 'consultaAudienciasDistritos') {
    $audienciasDto = $audienciasFacade->ConsultaAudienciasDistritos($audienciasDto, $cveDistrito);
    echo $audienciasDto;
} else if ($accion == 'consultaAudienciasConsejo') {
    $audienciasDto = $audienciasFacade->consultaAudienciasParaPorConsejo($audienciasDto, $cveDistrito, $idJuzgador);
    echo $audienciasDto;
} else if ($accion == 'consultarAudienciasJuzgado') {
    $audienciasDto = $audienciasFacade->consultarAudienciasJuzgado($audienciasDto);
    echo $audienciasDto;
} else if ($accion == 'consultarAudienciaJueces') {
    $audienciasDto = $audienciasFacade->consultarAudienciaJueces($audienciasDto);
    echo $audienciasDto;
} else if ($accion == 'selectAudienciasHorarios') {
    $audienciasDto = $audienciasFacade->selectAudienciasHorarios($audienciasDto);
    echo $audienciasDto;
} else if ($accion == 'selecAdmintAudienciasJuzgador') {
    $audienciasDto = $audienciasFacade->selecAdmintAudienciasJuzgador($audienciasDto);
    echo $audienciasDto;
} else if ($accion == 'selecAdmintAudienciasSalas') {
    $audienciasDto = $audienciasFacade->selecAdmintAudienciasSalas($audienciasDto);
    echo $audienciasDto;
} else if ($accion == 'guardarAudienciaAdmin') {
    $audienciasDto = $audienciasFacade->guardarAudienciaAdmin($audienciasDto, $arrayJuzgadores, $arracveFunciones, $arraIdAudienciaJuez);
    echo $audienciasDto;
} else if ($accion == 'terminacionAudiencias') {
    $audienciasDto = $audienciasFacade->terminacionAudiencias($audienciasDto);
    echo $audienciasDto;
} else if ($accion == 'selectAudienciasHorariosTerminacion') {
    $audienciasDto = $audienciasFacade->selectAudienciasHorariosTerminacion($audienciasDto);
    echo $audienciasDto;
} else if ($accion == 'selecAdmintAudienciasJuzgadorTerminacion') {
    $audienciasDto = $audienciasFacade->selecAdmintAudienciasJuzgadorTerminacion($audienciasDto);
    echo $audienciasDto;
} else if ($accion == 'selecAdmintAudienciasSalasTerminacion') {
    $audienciasDto = $audienciasFacade->selecAdmintAudienciasSalasTerminacion($audienciasDto);
    echo $audienciasDto;
} else if ($accion == 'getInformacionAudiencia') {
    $audienciasDto = $audienciasFacade->getInformacionAudiencia($audienciasDto);
    echo $audienciasDto;
}
?>