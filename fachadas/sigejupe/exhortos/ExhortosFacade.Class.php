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

define('WP_DEBUG', true); // enable debugging mode
ini_set("error_log", dirname(__FILE__) . "/../../../logs/ExhortosFacade.log");
ini_set("log_errors", 1);
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL ^ E_NOTICE);

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/exhortos/ExhortosDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/exhortos/ExhortosController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class ExhortosFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarExhortos($ExhortosDto) {
            $ExhortosDto->setidExhorto(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ExhortosDto->getidExhorto(), "utf8") : strtoupper($ExhortosDto->getidExhorto()))))));
            if ($this->esFecha($ExhortosDto->getidExhorto())) {
                $ExhortosDto->setidExhorto($this->fechaMysql($ExhortosDto->getidExhorto()));
            }
            $ExhortosDto->setIdExhortoGenerado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ExhortosDto->getIdExhortoGenerado(), "utf8") : strtoupper($ExhortosDto->getIdExhortoGenerado()))))));
            if ($this->esFecha($ExhortosDto->getIdExhortoGenerado())) {
                $ExhortosDto->setIdExhortoGenerado($this->fechaMysql($ExhortosDto->getIdExhortoGenerado()));
            }
            $ExhortosDto->setnumExhorto(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ExhortosDto->getnumExhorto(), "utf8") : strtoupper($ExhortosDto->getnumExhorto()))))));
            if ($this->esFecha($ExhortosDto->getnumExhorto())) {
                $ExhortosDto->setnumExhorto($this->fechaMysql($ExhortosDto->getnumExhorto()));
            }
            $ExhortosDto->setaniExhorto(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ExhortosDto->getaniExhorto(), "utf8") : strtoupper($ExhortosDto->getaniExhorto()))))));
            if ($this->esFecha($ExhortosDto->getaniExhorto())) {
                $ExhortosDto->setaniExhorto($this->fechaMysql($ExhortosDto->getaniExhorto()));
            }
            $ExhortosDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ExhortosDto->getcveJuzgado(), "utf8") : strtoupper($ExhortosDto->getcveJuzgado()))))));
            if ($this->esFecha($ExhortosDto->getcveJuzgado())) {
                $ExhortosDto->setcveJuzgado($this->fechaMysql($ExhortosDto->getcveJuzgado()));
            }
            $ExhortosDto->setcveEstadoProcedencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ExhortosDto->getcveEstadoProcedencia(), "utf8") : strtoupper($ExhortosDto->getcveEstadoProcedencia()))))));
            if ($this->esFecha($ExhortosDto->getcveEstadoProcedencia())) {
                $ExhortosDto->setcveEstadoProcedencia($this->fechaMysql($ExhortosDto->getcveEstadoProcedencia()));
            }
            $ExhortosDto->setcveJuzgadoProcedencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ExhortosDto->getcveJuzgadoProcedencia(), "utf8") : strtoupper($ExhortosDto->getcveJuzgadoProcedencia()))))));
            if ($this->esFecha($ExhortosDto->getcveJuzgadoProcedencia())) {
                $ExhortosDto->setcveJuzgadoProcedencia($this->fechaMysql($ExhortosDto->getcveJuzgadoProcedencia()));
            }
            $ExhortosDto->setjuzgadoProcedencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ExhortosDto->getjuzgadoProcedencia(), "utf8") : strtoupper($ExhortosDto->getjuzgadoProcedencia()))))));
            if ($this->esFecha($ExhortosDto->getjuzgadoProcedencia())) {
                $ExhortosDto->setjuzgadoProcedencia($this->fechaMysql($ExhortosDto->getjuzgadoProcedencia()));
            }
            $ExhortosDto->setcarpetaInv(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ExhortosDto->getcarpetaInv(), "utf8") : strtoupper($ExhortosDto->getcarpetaInv()))))));
            if ($this->esFecha($ExhortosDto->getcarpetaInv())) {
                $ExhortosDto->setcarpetaInv($this->fechaMysql($ExhortosDto->getcarpetaInv()));
            }
            $ExhortosDto->setnuc(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ExhortosDto->getnuc(), "utf8") : strtoupper($ExhortosDto->getnuc()))))));
            if ($this->esFecha($ExhortosDto->getnuc())) {
                $ExhortosDto->setnuc($this->fechaMysql($ExhortosDto->getnuc()));
            }
            $ExhortosDto->setnumero(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ExhortosDto->getnumero(), "utf8") : strtoupper($ExhortosDto->getnumero()))))));
            if ($this->esFecha($ExhortosDto->getnumero())) {
                $ExhortosDto->setnumero($this->fechaMysql($ExhortosDto->getnumero()));
            }
            $ExhortosDto->setanio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ExhortosDto->getanio(), "utf8") : strtoupper($ExhortosDto->getanio()))))));
            if ($this->esFecha($ExhortosDto->getanio())) {
                $ExhortosDto->setanio($this->fechaMysql($ExhortosDto->getanio()));
            }
            $ExhortosDto->setcveTipoCarpeta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ExhortosDto->getcveTipoCarpeta(), "utf8") : strtoupper($ExhortosDto->getcveTipoCarpeta()))))));
            if ($this->esFecha($ExhortosDto->getcveTipoCarpeta())) {
                $ExhortosDto->setcveTipoCarpeta($this->fechaMysql($ExhortosDto->getcveTipoCarpeta()));
            }
            $ExhortosDto->setnumOficio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ExhortosDto->getnumOficio(), "utf8") : strtoupper($ExhortosDto->getnumOficio()))))));
            if ($this->esFecha($ExhortosDto->getnumOficio())) {
                $ExhortosDto->setnumOficio($this->fechaMysql($ExhortosDto->getnumOficio()));
            }
            $ExhortosDto->setsintesis(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ExhortosDto->getsintesis(), "utf8") : strtoupper($ExhortosDto->getsintesis()))))));
            if ($this->esFecha($ExhortosDto->getsintesis())) {
                $ExhortosDto->setsintesis($this->fechaMysql($ExhortosDto->getsintesis()));
            }
            $ExhortosDto->setobservaciones(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ExhortosDto->getobservaciones(), "utf8") : strtoupper($ExhortosDto->getobservaciones()))))));
            if ($this->esFecha($ExhortosDto->getobservaciones())) {
                $ExhortosDto->setobservaciones($this->fechaMysql($ExhortosDto->getobservaciones()));
            }
            $ExhortosDto->setcveConsignacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ExhortosDto->getcveConsignacion(), "utf8") : strtoupper($ExhortosDto->getcveConsignacion()))))));
            if ($this->esFecha($ExhortosDto->getcveConsignacion())) {
                $ExhortosDto->setcveConsignacion($this->fechaMysql($ExhortosDto->getcveConsignacion()));
            }
            $ExhortosDto->setcveEstatusExhorto(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ExhortosDto->getcveEstatusExhorto(), "utf8") : strtoupper($ExhortosDto->getcveEstatusExhorto()))))));
            if ($this->esFecha($ExhortosDto->getcveEstatusExhorto())) {
                $ExhortosDto->setcveEstatusExhorto($this->fechaMysql($ExhortosDto->getcveEstatusExhorto()));
            }
            $ExhortosDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ExhortosDto->getactivo(), "utf8") : strtoupper($ExhortosDto->getactivo()))))));
            if ($this->esFecha($ExhortosDto->getactivo())) {
                $ExhortosDto->setactivo($this->fechaMysql($ExhortosDto->getactivo()));
            }
            $ExhortosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ExhortosDto->getfechaRegistro(), "utf8") : strtoupper($ExhortosDto->getfechaRegistro()))))));
            if ($this->esFecha($ExhortosDto->getfechaRegistro())) {
                $ExhortosDto->setfechaRegistro($this->fechaMysql($ExhortosDto->getfechaRegistro()));
            }
            $ExhortosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ExhortosDto->getfechaActualizacion(), "utf8") : strtoupper($ExhortosDto->getfechaActualizacion()))))));
            if ($this->esFecha($ExhortosDto->getfechaActualizacion())) {
                $ExhortosDto->setfechaActualizacion($this->fechaMysql($ExhortosDto->getfechaActualizacion()));
            }
            return $ExhortosDto;
        }

        public function selectExhortos($ExhortosDto, $param) {

            $ExhortosDto = $this->validarExhortos($ExhortosDto);
            $ExhortosController = new ExhortosController();
            $ExhortosDto = $ExhortosController->selectExhortos($ExhortosDto, $param);
            error_log(print_r($ExhortosDto, true));
            if ($ExhortosDto != "") {

                return json_encode($ExhortosDto);
            }
        }

        public function selectTotalExhortos($ExhortosDto, $param) {

            $ExhortosDto = $this->validarExhortos($ExhortosDto);
            $ExhortosController = new ExhortosController();
            $ExhortosDto = $ExhortosController->selectTotalExhortos($ExhortosDto, $param);
            if ($ExhortosDto != "") {

                return json_encode($ExhortosDto);
            }
        }

        public function insertExhortos($ExhortosDto, $listaImputados, $listaOfendidos, $listaDelitos,$listaTestigosI,$listaTestigosO) {
            $ExhortosDto = $this->validarExhortos($ExhortosDto);
            $ExhortosController = new ExhortosController();
            $ExhortosDto = $ExhortosController->insertExhortos($ExhortosDto, "", $listaImputados, $listaOfendidos, $listaDelitos,$listaTestigosI,$listaTestigosO);

            $ExhortosDto = json_decode($ExhortosDto, true);

            if ($ExhortosDto['Estatus'] == "Ok") {
                $jsonDto = new Encode_JSON();
                return $jsonDto->encode(array("totalCount" => "1", "text" => $ExhortosDto['Mensaje'], "Estatus" => $ExhortosDto['Estatus'],
                            "idExhorto" => $ExhortosDto['idExhorto'],
                            "numExhorto" => $ExhortosDto['numExhorto'], "aniExhorto" => $ExhortosDto['aniExhorto']));
            }

            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => $ExhortosDto['Mensaje']));
        }

        public function updateExhortos($ExhortosDto, $listaImputados, $listaOfendidos, $listaDelitos,$listaTestigosI,$listaTestigosO) {
            $ExhortosDto = $this->validarExhortos($ExhortosDto);
            $ExhortosController = new ExhortosController();
            $ExhortosDto->setActivo ("S");
            $ExhortosDto = $ExhortosController->updateExhortos($ExhortosDto, "", $listaImputados, $listaOfendidos, $listaDelitos,$listaTestigosI,$listaTestigosO);
            if ($ExhortosDto != "") {
                $dtoToJson = new DtoToJson($ExhortosDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteExhortos($ExhortosDto) {
            $ExhortosDto = $this->validarExhortos($ExhortosDto);
            $ExhortosController = new ExhortosController();
            $ExhortosDto = $ExhortosController->deleteExhortos($ExhortosDto);
            if ($ExhortosDto == true) {
                $jsonDto = new Encode_JSON();
                return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
        }

        public function eliminar_impofedel($ExhortosDto, $param, $lista_impofedel) {

            $lista_impofedel = json_decode($lista_impofedel, true);
            $ExhortosDto = $this->validarExhortos($ExhortosDto);
            $ExhortosController = new ExhortosController();
            $ExhortosDto = $ExhortosController->eliminar_impofedel($ExhortosDto, "", $param, $lista_impofedel);
            if ($ExhortosDto != "") {

                return json_encode($ExhortosDto);
            }
        }

        public function actualizar_impofedel($ExhortosDto, $param, $lista_impofedel) {

            $lista_impofedel = json_decode($lista_impofedel, true);
            $ExhortosDto = $this->validarExhortos($ExhortosDto);
            $ExhortosController = new ExhortosController();
            $ExhortosDto = $ExhortosController->actualizar_impofedel($ExhortosDto, "", $param, $lista_impofedel);
            if ($ExhortosDto != "") {

                return json_encode($ExhortosDto);
            }
        }

        public function eliminar_exhorto($ExhortosDto) {

            $ExhortosDto = $this->validarExhortos($ExhortosDto);
            $ExhortosController = new ExhortosController();
            $ExhortosDto = $ExhortosController->eliminar_exhorto($ExhortosDto);
            if ($ExhortosDto != "") {

                return json_encode($ExhortosDto);
            }
        }

        public function buscar_relacion($ExhortosDto) {

            $ExhortosDto = $this->validarExhortos($ExhortosDto);
            $ExhortosController = new ExhortosController();
            $ExhortosDto = $ExhortosController->buscar_relacion($ExhortosDto);
            if ($ExhortosDto != "") {

                return json_encode($ExhortosDto);
            }
        }

        public function buscar_impofedel($ExhortosDto) {

            $ExhortosDto = $this->validarExhortos($ExhortosDto);
            $ExhortosController = new ExhortosController();
            $ExhortosDto = $ExhortosController->buscar_impofedel($ExhortosDto);
            if ($ExhortosDto != "") {

                return json_encode($ExhortosDto);
            }
        }

        public function insertar_exhortoGenerado($ExhortosDto, $requisitoria, $datos) {

            $ExhortosDto = $this->validarExhortos($ExhortosDto);
            $ExhortosController = new ExhortosController();
            $ExhortosDto = $ExhortosController->insertar_exhortoGenerado($ExhortosDto, "", $requisitoria, $datos);
            if ($ExhortosDto != "") {

                return json_encode($ExhortosDto);
            }
        }

        public function buscar_exhortoGenerado($ExhortosDto, $param, $idActuacion) {

            $ExhortosDto = $this->validarExhortos($ExhortosDto);
            $ExhortosController = new ExhortosController();
            $ExhortosDto = $ExhortosController->buscar_exhortoGenerado($ExhortosDto, "", $param, $idActuacion);
            if ($ExhortosDto != "") {

                return json_encode($ExhortosDto);
            }
        }

        public function buscar_TotalGenerado($ExhortosDto, $param) {

            $ExhortosDto = $this->validarExhortos($ExhortosDto);
            $ExhortosController = new ExhortosController();
            $ExhortosDto = $ExhortosController->buscar_TotalGenerado($ExhortosDto, "", $param);
            if ($ExhortosDto != "") {

                return json_encode($ExhortosDto);
            }
        }

        public function eliminar_exhortoGenerado($idActuacion) {
            $respuesta = "";
            $ExhortosController = new ExhortosController();
            $respuesta = $ExhortosController->eliminar_exhortoGenerado("", $idActuacion);

            if ($respuesta != "") {
                return json_encode($respuesta);
            }
        }

        public function actualizar_enviarexhortoGenerado($ExhortosDto, $requisitoria, $idActuacion) {

            $ExhortosDto = $this->validarExhortos($ExhortosDto);
            $ExhortosController = new ExhortosController();
            $ExhortosDto = $ExhortosController->actualizar_enviarexhortoGenerado($ExhortosDto, "", $requisitoria, $idActuacion);
            if ($ExhortosDto != "") {

                return json_encode($ExhortosDto);
            }
        }

        public function actualizar_exhortoGenerado($ExhortosDto, $requisitoria, $idActuacion) {

            $ExhortosDto = $this->validarExhortos($ExhortosDto);
            $ExhortosController = new ExhortosController();
            $ExhortosDto = $ExhortosController->actualizar_exhortoGenerado($ExhortosDto, "", $requisitoria, $idActuacion);
            if ($ExhortosDto != "") {

                return json_encode($ExhortosDto);
            }
        }
        
        public function selectExhortosEliminar($ExhortosDto, $param){
            $ExhortosDto=$this->validarExhortos($ExhortosDto);
            $ExhortosController = new ExhortosController();
            $ExhortosDto = $ExhortosController->consultarExhortosaEliminar($ExhortosDto, $param);
    //        error_log(print_r($ExhortosDto,true));
            if($ExhortosDto!=""){
            return json_encode($ExhortosDto);
            }else{
                return "";
            }
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

        /*         * ************** ACTUALIZACION DE EXHORTOS - ISRAELHS ***************** */

        public function consultarExhortosEliminados($exhortosDto) {

            $exhortosDto = $this->validarExhortos($exhortosDto);
            $ExhortosController = new ExhortosController();
            $exhortosDto = $ExhortosController->consultarExhortosEliminados($exhortosDto);
            if ($exhortosDto != "") {
                $dtoToJson = new DtoToJson($exhortosDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        /*         * ************** ACTUALIZACION DE EXHORTOS - ISRAELHS/ ***************** */
    }

    @$idExhorto = $_POST["idExhorto"];
    @$IdExhortoGenerado = $_POST["IdExhortoGenerado"];
    @$numExhorto = $_POST["numExhorto"];
    @$aniExhorto = $_POST["aniExhorto"];
    @$cveJuzgado = $_POST["cveJuzgado"];
    @$cveEstadoProcedencia = $_POST["cveEstadoProcedencia"];
    @$cveJuzgadoProcedencia = $_POST["cveJuzgadoProcedencia"];
    @$juzgadoProcedencia = $_POST["juzgadoProcedencia"];
    @$carpetaInv = $_POST["carpetaInv"];
    @$nuc = $_POST["nuc"];
    @$numero = $_POST["numero"];
    @$anio = $_POST["anio"];
    @$cveTipoCarpeta = $_POST["cveTipoCarpeta"];
    @$numOficio = $_POST["numOficio"];
    @$sintesis = $_POST["sintesis"];
    @$observaciones = $_POST["observaciones"];
    @$cveConsignacion = $_POST["cveConsignacion"];
    @$cveEstatusExhorto = $_POST["cveEstatusExhorto"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$listaTestigosI = $_POST["listaTestigosI"];
    @$listaTestigosO = $_POST["listaTestigosO"];
    @$listaImputados = $_POST["listaImputados"];
    @$listaOfendidos = $_POST["listaOfendidos"];
    @$listaDelitos = $_POST["listaDelitos"];
    @$lista_impofedel = $_POST["lista_impofedel"];
    @$fechaInicial = $_POST["fechaInicial"];
    @$fechaFinal = $_POST["fechaFinal"];
    @$accion = $_POST["accion"];
    @$requisitoria = $_POST['requisitoria'];
    @$idActuacion = $_POST['idActuacion'];
    $respuesta = "";
    $param = array();
    @$param["pagina"] = $_POST['pagina'];
    @$param["fechaInicial"] = $_POST['fechaInicial'];
    @$param["fechaFinal"] = $_POST['fechaFinal'];
    @$param["totalRegistros"] = $_POST["totalRegistros"];
    @$param['nRegistros'] = $_POST["nRegistros"];
    @$param['imprimir'] = $_POST["imprimir"];
    @$param["tipo"] = $_POST["tipo"];
    @$param["generico"] = $_POST["generico"];

    $datos = array();
    $datos["anioOficio"] = $_POST['anioOficio'];
    $datos["fechaInicioEG"] = $_POST['fechaInicioEG'];
    $datos["fechaTerminoEG"] = $_POST['fechaTerminoEG'];
    $datos["textoExhorto"] = $_POST['textoExhorto'];
    $datos["telefonoEG"] = $_POST['telefonoEG'];
    $datos["correoEG"] = $_POST['correoEG'];
    $datos["facultadoAcordar"] = $_POST['facultadoAcordar'];



    if ($accion == "guardar") {

        if ($cveEstadoProcedencia == "" || $cveEstadoProcedencia == 0) {
            echo json_encode(array('totalCount' => '0', 'estatus' => 'error', 'text' => 'Selecciona Estado'));
            exit();
        }
//	if ($carpetaInv == "") {
//		echo json_encode(array('totalCount' => '0','estatus' => 'error', 'text' =>  'Ingresa Carpeta de Investigacion'));		
//		exit();
//	}
//	if ($nuc == "") {
//		echo json_encode(array('totalCount' => '0','estatus' => 'error', 'text' =>  'Ingresa Nuc'));		
//		exit();
//	}
//	if ($cveTipoCarpeta == "" || $cveTipoCarpeta == 0) {
//		echo json_encode(array('totalCount' => '0','estatus' => 'error', 'text' =>  'Selecciona Tipo Carpeta'));		
//		exit();
//	}
//	if ($numero == "") {
//		echo json_encode(array('totalCount' => '0','estatus' => 'error', 'text' =>  'Ingresa Numero'));		
//		exit();
//	}
//	if ($anio == "") {
//		echo json_encode(array('totalCount' => '0','estatus' => 'error', 'text' =>  'Ingresa Año'));		
//		exit();
//	}
//	if ($numOficio == "" || $numOficio == "/") {
//		echo json_encode(array('totalCount' => '0','estatus' => 'error', 'text' =>  'Ingresa Numero de Oficio'));		
//		exit();
//	}
        if ($sintesis == "") {
            echo json_encode(array('totalCount' => '0', 'estatus' => 'error', 'text' => 'Ingresa Sintesis'));
            exit();
        }
        if ($cveEstatusExhorto == "" || $cveEstatusExhorto == 0) {
            echo json_encode(array('totalCount' => '0', 'estatus' => 'error', 'text' => 'Selecciona Estatus'));
            exit();
        }
//	if ($listaImputados == "" ) {
//		echo json_encode(array('totalCount' => '0','estatus' => 'error', 'text' =>  'Ingresa al menos un Imputado'));		
//		exit();
//	}
//	if ($listaOfendidos == "" ) {
//		echo json_encode(array('totalCount' => '0','estatus' => 'error', 'text' =>  'Ingresa al menos un Ofendido'));		
//		exit();
//	}
        if ($listaDelitos == "") {
            echo json_encode(array('totalCount' => '0', 'estatus' => 'error', 'text' => 'Ingresa al menos un Delito'));
            exit();
        }
    }
    if ($accion == "guardarGenerado") {

        if ($cveTipoCarpeta == "" || $cveTipoCarpeta == 0) {
            echo json_encode(array('totalCount' => '0', 'estatus' => 'error', 'mensaje' => 'Seleccione tipo de Carpeta'));
            exit();
        }
        if ($numero == "") {
            echo json_encode(array('totalCount' => '0', 'estatus' => 'error', 'mensaje' => 'Ingresa Numero'));
            exit();
        }
        if ($anio == "") {
            echo json_encode(array('totalCount' => '0', 'estatus' => 'error', 'mensaje' => 'Ingresa Año'));
            exit();
        }
        if ($sintesis == "") {
            echo json_encode(array('totalCount' => '0', 'estatus' => 'error', 'mensaje' => 'Ingresa Sintesis'));
            exit();
        }
        if ($cveEstadoProcedencia == "" || $cveEstadoProcedencia == 0) {
            echo json_encode(array('totalCount' => '0', 'estatus' => 'error', 'mensaje' => 'Selecciona Estado'));
            exit();
        }
        if ($cveEstadoProcedencia == 15) {
            if ($cveJuzgadoProcedencia == "" || $cveJuzgadoProcedencia == 0) {
                echo json_encode(array('totalCount' => '0', 'estatus' => 'error', 'mensaje' => 'Selecciona Juzgado'));
                exit();
            }
        } else {
            if ($juzgadoProcedencia == "") {
                echo json_encode(array('totalCount' => '0', 'estatus' => 'error', 'mensaje' => 'Ingresa Juzgado'));
                exit();
            }
        }
        if ($cveEstatusExhorto == "" || $cveEstatusExhorto == 0) {
            echo json_encode(array('totalCount' => '0', 'estatus' => 'error', 'mensaje' => 'Selecciona Estatus'));
            exit();
        }
    }

//exit();
    $exhortosFacade = new ExhortosFacade();
    $exhortosDto = new ExhortosDTO();
    $exhortosDto->setIdExhorto($idExhorto);
    $exhortosDto->setIdExhortoGenerado($IdExhortoGenerado);
    $exhortosDto->setNumExhorto($numExhorto);
    $exhortosDto->setAniExhorto($aniExhorto);
    $exhortosDto->setCveJuzgado($cveJuzgado);
    $exhortosDto->setCveEstadoProcedencia($cveEstadoProcedencia);

    if($cveEstadoProcedencia == 15){
        $exhortosDto->setCveJuzgadoProcedencia($cveJuzgadoProcedencia);
        if($accion == "guardar" || $accion == "guardarGenerado"){
            $exhortosDto->setJuzgadoProcedencia("-");
        }
    }else{
        if($accion == "guardar" || $accion == "guardarGenerado"){
            $exhortosDto->setCveJuzgadoProcedencia(0);
        }
        $exhortosDto->setJuzgadoProcedencia($juzgadoProcedencia);
    }
    $exhortosDto->setCarpetaInv($carpetaInv);
    $exhortosDto->setNuc($nuc);
    $exhortosDto->setNumero($numero);
    $exhortosDto->setAnio($anio);
    $exhortosDto->setCveTipoCarpeta($cveTipoCarpeta);
    $exhortosDto->setNumOficio($numOficio);
    $exhortosDto->setSintesis($sintesis);
    $exhortosDto->setObservaciones($observaciones);
    $exhortosDto->setCveConsignacion($cveConsignacion);
    $exhortosDto->setCveEstatusExhorto($cveEstatusExhorto);
    $exhortosDto->setActivo($activo);
    $exhortosDto->setFechaRegistro($fechaRegistro);
    $exhortosDto->setFechaActualizacion($fechaActualizacion);


    if (($accion == "guardar") && ($idExhorto == "")) {
        $exhortosDto = $exhortosFacade->insertExhortos($exhortosDto, $listaImputados, $listaOfendidos, $listaDelitos,$listaTestigosI,$listaTestigosO);
        echo $exhortosDto;
    } else if (($accion == "guardar") && ($idExhorto != "")) {
        $exhortosDto = $exhortosFacade->updateExhortos($exhortosDto, $listaImputados, $listaOfendidos, $listaDelitos,$listaTestigosI,$listaTestigosO);
        echo $exhortosDto;
    } else if ($accion == "consultar") {
        $exhortosDto = $exhortosFacade->selectExhortos($exhortosDto, $param);
        echo $exhortosDto;
    } else if ($accion == "consultar_total") {
        $exhortosDto = $exhortosFacade->selectTotalExhortos($exhortosDto, $param);
        echo $exhortosDto;
    } else if (($accion == "baja") && ($idExhorto != "")) {
        $exhortosDto = $exhortosFacade->deleteExhortos($exhortosDto);
        echo $exhortosDto;
    } else if (($accion == "seleccionar") && ($idExhorto != "")) {
        $exhortosDto = $exhortosFacade->selectExhortos($exhortosDto);
        echo $exhortosDto;
    } else if ($accion == "eliminar_impofedel") {
        $exhortosDto = $exhortosFacade->eliminar_impofedel($exhortosDto, $param, $lista_impofedel);
        echo $exhortosDto;
    } else if ($accion == "actualizar_impofedel") {
        $exhortosDto = $exhortosFacade->actualizar_impofedel($exhortosDto, $param, $lista_impofedel);
        echo $exhortosDto;
    } else if ($accion == "eliminar_exhorto") {
        $exhortosDto = $exhortosFacade->eliminar_exhorto($exhortosDto);
        echo $exhortosDto;
    } else if ($accion == "guardarGenerado" && $idActuacion == "") {

        $exhortosDto = $exhortosFacade->insertar_exhortoGenerado($exhortosDto, $requisitoria, $datos);
        echo $exhortosDto;
    } else if ($accion == "guardarGenerado" && $idActuacion != "") {

        $exhortosDto = $exhortosFacade->actualizar_exhortoGenerado($exhortosDto, $requisitoria, $idActuacion);
        echo $exhortosDto;
    } else if ($accion == "guardarenviarGenerado" && $idActuacion != "") {

        $exhortosDto = $exhortosFacade->actualizar_enviarexhortoGenerado($exhortosDto, $requisitoria, $idActuacion);
        echo $exhortosDto;
    } else if ($accion == "buscarGenerado") {

        $exhortosDto = $exhortosFacade->buscar_exhortoGenerado($exhortosDto, $param, $idActuacion);
        echo $exhortosDto;
    } else if ($accion == "buscarTotalGenerado") {

        $exhortosDto = $exhortosFacade->buscar_TotalGenerado($exhortosDto, $param);
        echo $exhortosDto;
    } else if ($accion == "eliminarGenerado") {

        $exhortosDto = $exhortosFacade->eliminar_exhortoGenerado($idActuacion);

        echo $exhortosDto;
    } else if ($accion == "buscarRelacion") {

        $exhortosDto = $exhortosFacade->buscar_relacion($exhortosDto);

        echo $exhortosDto;
    } else if ($accion == "buscarImpofedel") {
        $exhortosDto = $exhortosFacade->buscar_impofedel($exhortosDto);
        echo $exhortosDto;
        
    } else if ($accion == "consultarExhortosEliminados") { // Actualizar exhortos para administrador
        $exhortosDto = $exhortosFacade->consultarExhortosEliminados($exhortosDto);
        echo $exhortosDto;
        
    }else if($accion=="consultarEliminar"){ //consulta Exhorto que pueden eliminarse
	$exhortosDto=$exhortosFacade->selectExhortosEliminar($exhortosDto, $param);
	echo $exhortosDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>
