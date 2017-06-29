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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadossanciones/ImputadossancionesDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/imputadossanciones/ImputadossancionesController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class ImputadossancionesFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarImputadossanciones($ImputadossancionesDto) {
            $ImputadossancionesDto->setidImputadoSancion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadossancionesDto->getidImputadoSancion(), "utf8") : strtoupper($ImputadossancionesDto->getidImputadoSancion()))))));
            if ($this->esFecha($ImputadossancionesDto->getidImputadoSancion())) {
                $ImputadossancionesDto->setidImputadoSancion($this->fechaMysql($ImputadossancionesDto->getidImputadoSancion()));
            }
            $ImputadossancionesDto->setidImputadoSentencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadossancionesDto->getidImputadoSentencia(), "utf8") : strtoupper($ImputadossancionesDto->getidImputadoSentencia()))))));
            if ($this->esFecha($ImputadossancionesDto->getidImputadoSentencia())) {
                $ImputadossancionesDto->setidImputadoSentencia($this->fechaMysql($ImputadossancionesDto->getidImputadoSentencia()));
            }
            $ImputadossancionesDto->setcveTipoSancion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadossancionesDto->getcveTipoSancion(), "utf8") : strtoupper($ImputadossancionesDto->getcveTipoSancion()))))));
            if ($this->esFecha($ImputadossancionesDto->getcveTipoSancion())) {
                $ImputadossancionesDto->setcveTipoSancion($this->fechaMysql($ImputadossancionesDto->getcveTipoSancion()));
            }
            $ImputadossancionesDto->setanioPrision(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadossancionesDto->getanioPrision(), "utf8") : strtoupper($ImputadossancionesDto->getanioPrision()))))));
            if ($this->esFecha($ImputadossancionesDto->getanioPrision())) {
                $ImputadossancionesDto->setanioPrision($this->fechaMysql($ImputadossancionesDto->getanioPrision()));
            }
            $ImputadossancionesDto->setmesPrision(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadossancionesDto->getmesPrision(), "utf8") : strtoupper($ImputadossancionesDto->getmesPrision()))))));
            if ($this->esFecha($ImputadossancionesDto->getmesPrision())) {
                $ImputadossancionesDto->setmesPrision($this->fechaMysql($ImputadossancionesDto->getmesPrision()));
            }
            $ImputadossancionesDto->setdiasPrision(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadossancionesDto->getdiasPrision(), "utf8") : strtoupper($ImputadossancionesDto->getdiasPrision()))))));
            if ($this->esFecha($ImputadossancionesDto->getdiasPrision())) {
                $ImputadossancionesDto->setdiasPrision($this->fechaMysql($ImputadossancionesDto->getdiasPrision()));
            }
            $ImputadossancionesDto->setcantidadMulta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadossancionesDto->getcantidadMulta(), "utf8") : strtoupper($ImputadossancionesDto->getcantidadMulta()))))));
            if ($this->esFecha($ImputadossancionesDto->getcantidadMulta())) {
                $ImputadossancionesDto->setcantidadMulta($this->fechaMysql($ImputadossancionesDto->getcantidadMulta()));
            }
            $ImputadossancionesDto->setcantidadReparacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadossancionesDto->getcantidadReparacion(), "utf8") : strtoupper($ImputadossancionesDto->getcantidadReparacion()))))));
            if ($this->esFecha($ImputadossancionesDto->getcantidadReparacion())) {
                $ImputadossancionesDto->setcantidadReparacion($this->fechaMysql($ImputadossancionesDto->getcantidadReparacion()));
            }
            $ImputadossancionesDto->setamonestacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadossancionesDto->getamonestacion(), "utf8") : strtoupper($ImputadossancionesDto->getamonestacion()))))));
            if ($this->esFecha($ImputadossancionesDto->getamonestacion())) {
                $ImputadossancionesDto->setamonestacion($this->fechaMysql($ImputadossancionesDto->getamonestacion()));
            }
            $ImputadossancionesDto->setespecificacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadossancionesDto->getespecificacion(), "utf8") : strtoupper($ImputadossancionesDto->getespecificacion()))))));
            if ($this->esFecha($ImputadossancionesDto->getespecificacion())) {
                $ImputadossancionesDto->setespecificacion($this->fechaMysql($ImputadossancionesDto->getespecificacion()));
            }
            $ImputadossancionesDto->setfechaInicio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadossancionesDto->getfechaInicio(), "utf8") : strtoupper($ImputadossancionesDto->getfechaInicio()))))));
            if ($this->esFecha($ImputadossancionesDto->getfechaInicio())) {
                $ImputadossancionesDto->setfechaInicio($this->fechaMysql($ImputadossancionesDto->getfechaInicio()));
            }
            $ImputadossancionesDto->setfechaTermina(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadossancionesDto->getfechaTermina(), "utf8") : strtoupper($ImputadossancionesDto->getfechaTermina()))))));
            if ($this->esFecha($ImputadossancionesDto->getfechaTermina())) {
                $ImputadossancionesDto->setfechaTermina($this->fechaMysql($ImputadossancionesDto->getfechaTermina()));
            }
            $ImputadossancionesDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadossancionesDto->getactivo(), "utf8") : strtoupper($ImputadossancionesDto->getactivo()))))));
            if ($this->esFecha($ImputadossancionesDto->getactivo())) {
                $ImputadossancionesDto->setactivo($this->fechaMysql($ImputadossancionesDto->getactivo()));
            }
            $ImputadossancionesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadossancionesDto->getfechaRegistro(), "utf8") : strtoupper($ImputadossancionesDto->getfechaRegistro()))))));
            if ($this->esFecha($ImputadossancionesDto->getfechaRegistro())) {
                $ImputadossancionesDto->setfechaRegistro($this->fechaMysql($ImputadossancionesDto->getfechaRegistro()));
            }
            $ImputadossancionesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadossancionesDto->getfechaActualizacion(), "utf8") : strtoupper($ImputadossancionesDto->getfechaActualizacion()))))));
            if ($this->esFecha($ImputadossancionesDto->getfechaActualizacion())) {
                $ImputadossancionesDto->setfechaActualizacion($this->fechaMysql($ImputadossancionesDto->getfechaActualizacion()));
            }
            return $ImputadossancionesDto;
        }

        public function eliminacionlogica($ImputadossancionesDto) {

            $ImputadossancionesDto = $this->validarImputadossanciones($ImputadossancionesDto);
            $ImputadossancionesController = new ImputadossancionesController();
            $ImputadossancionesDto = $ImputadossancionesController->eliminacionlogica($ImputadossancionesDto);

            if ($ImputadossancionesDto != "") {

                return json_encode(array("totalCount" => "1", "text" => "Actualizo"));
            }
            return json_encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function selectSancionessentencias($ImputadossancionesDto, $dts) {
            $ImputadossancionesDto = $this->validarImputadossanciones($ImputadossancionesDto);
            $ImputadossancionesController = new ImputadossancionesController();
            $ImputadossancionesDto = $ImputadossancionesController->selectSancionessentencias($ImputadossancionesDto, $dts);
            if ($ImputadossancionesDto != "") {
                return json_encode($ImputadossancionesDto);
            }

            return json_encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function selectImputadossanciones($ImputadossancionesDto) {
            $ImputadossancionesDto = $this->validarImputadossanciones($ImputadossancionesDto);
            $ImputadossancionesController = new ImputadossancionesController();
            $ImputadossancionesDto = $ImputadossancionesController->selectImputadossanciones($ImputadossancionesDto);
            if ($ImputadossancionesDto != "") {
                $dtoToJson = new DtoToJson($ImputadossancionesDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function imputadossanciones($ImputadossancionesDto) {
            $ImputadossancionesDto = $this->validarImputadossanciones($ImputadossancionesDto);
            $ImputadossancionesController = new ImputadossancionesController();
            $ImputadossancionesDto = $ImputadossancionesController->imputadossanciones($ImputadossancionesDto);

            return json_encode($ImputadossancionesDto);
        }

        public function selectImputadossancionesestatus($ImputadossancionesDto) {
            $ImputadossancionesDto = $this->validarImputadossanciones($ImputadossancionesDto);
            $ImputadossancionesController = new ImputadossancionesController();
            $ImputadossancionesDto = $ImputadossancionesController->selectImputadossancionesestatus($ImputadossancionesDto);
            if ($ImputadossancionesDto != "") {
                $dtoToJson = new DtoToJson($ImputadossancionesDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertImputadossanciones($ImputadossancionesDto) {

            print_r($ImputadossancionesDto);

            $ImputadossancionesDto = $this->validarImputadossanciones($ImputadossancionesDto);
            $ImputadossancionesController = new ImputadossancionesController();
            $ImputadossancionesDto = $ImputadossancionesController->insertImputadossanciones($ImputadossancionesDto);



            if ($ImputadossancionesDto != "") {
                $dtoToJson = new DtoToJson($ImputadossancionesDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }



            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function guardarsanciones($ImputadossancionesDto, $arreglo) {
            $ImputadossancionesDto = $this->validarImputadossanciones($ImputadossancionesDto);
            $ImputadossancionesController = new ImputadossancionesController();
            $ImputadossancionesDto = $ImputadossancionesController->guardarsanciones($ImputadossancionesDto, $arreglo);


            if ($ImputadossancionesDto != "") {
                $dtoToJson = new DtoToJson($ImputadossancionesDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }


            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function insertaimputadossancionesybeneficios($ImputadossancionesDto, $paramSession, $parambeneficio) {
            $ImputadossancionesDto = $this->validarImputadossanciones($ImputadossancionesDto);
            $ImputadossancionesController = new ImputadossancionesController();
            $ImputadossancionesDto = $ImputadossancionesController->insertaimputadossancionesybeneficios($ImputadossancionesDto, $paramSession, $parambeneficio);

            return json_encode($ImputadossancionesDto);
        }

        public function modificaimputadossancionesybeneficios($ImputadossancionesDto, $paramSession) {
            $ImputadossancionesDto = $this->validarImputadossanciones($ImputadossancionesDto);
            $ImputadossancionesController = new ImputadossancionesController();
            $ImputadossancionesDto = $ImputadossancionesController->modificaimputadossancionesybeneficios($ImputadossancionesDto, $paramSession);


//if($ImputadossancionesDto!=""){
//$dtoToJson = new DtoToJson($ImputadossancionesDto);
//return $dtoToJson->toJson("REGISTRO MODIFICADO DE FORMA CORRECTA");
//}
//
//$jsonDto = new Encode_JSON();
//return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL MODIFICAR EL REGISTRO"));

            return json_encode($ImputadossancionesDto);
        }

        public function eliminaimputadossancionesybeneficios($imputadossancionesDto, $paramSession, $imputadobeneficionvo) {
            $ImputadossancionesDto = $this->validarImputadossanciones($imputadossancionesDto);
            $ImputadossancionesController = new ImputadossancionesController();
            $ImputadossancionesDto = $ImputadossancionesController->eliminaimputadosybeneficios($imputadossancionesDto, $paramSession, $imputadobeneficionvo);

//if($ImputadossancionesDto!=""){
//$dtoToJson = new DtoToJson($ImputadossancionesDto);
//return $dtoToJson->toJson("REGISTRO ELIMINADO");
//}
//$jsonDto = new Encode_JSON();
//return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL ELIMINAR"));

            return json_encode($ImputadossancionesDto);
        }

        public function updateImputadossanciones($ImputadossancionesDto) {
            $ImputadossancionesDto = $this->validarImputadossanciones($ImputadossancionesDto);
            $ImputadossancionesController = new ImputadossancionesController();
            $ImputadossancionesDto = $ImputadossancionesController->updateImputadossanciones($ImputadossancionesDto);

//if($ImputadossancionesDto["Estatus"]=="Ok") {
//    $dtoToJson = new DtoToJson($ImputadossancionesDto);
//    return $dtoToJson->toJson($ImputadossancionesDto["Mensaje"],$ImputadossancionesDto["totalCount"]);
//}else{                
//    $jsonDto = new Encode_JSON();
//    return $jsonDto->encode(array("totalCount" => "0", "text" => $ImputadossancionesDto["Mensaje"]));
//}
//


            if ($ImputadossancionesDto != "") {
                $dtoToJson = new DtoToJson($ImputadossancionesDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteImputadossanciones($ImputadossancionesDto) {
            $ImputadossancionesDto = $this->validarImputadossanciones($ImputadossancionesDto);
            $ImputadossancionesController = new ImputadossancionesController();
            $ImputadossancionesDto = $ImputadossancionesController->deleteImputadossanciones($ImputadossancionesDto);
            if ($ImputadossancionesDto == true) {
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

    @$idImputadoSancion = $_POST["idImputadoSancion"];
    @$idImputadoSentencia = $_POST["idImputadoSentencia"];
    @$cveTipoSancion = $_POST["cveTipoSancion"];
    @$anioPrision = $_POST["anioPrision"];
    @$mesPrision = $_POST["mesPrision"];
    @$diasPrision = $_POST["diasPrision"];
    @$cantidadMulta = $_POST["cantidadMulta"];
    @$cantidadReparacion = $_POST["cantidadReparacion"];
    @$amonestacion = $_POST["amonestacion"];
    @$especificacion = $_POST["especificacion"];
    @$fechaInicio = $_POST["fechaInicio"];
    @$fechaTermina = $_POST["fechaTermina"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];

// variables de session
    $paramSession = array();
    @$paramSession["cveUsuarioSesion"] = $_POST['cveUsuarioSesion'];
    @$paramSession["cvePerfilSesion"] = $_POST['cvePerfilSesion'];
    @$paramSession["juzgadoSesion"] = $_POST['juzgadoSesion'];

// variables que se agregaran en la tabla de beneficios
    $parambeneficio = array();
    @$parambeneficio["idactuacion"] = $_POST['idactuacion'];
    @$parambeneficio["iddelimputadocarpeta"] = $_POST['iddelimputadocarpeta'];
    @$parambeneficio["CveTipoSancion"] = $_POST['CveTipoSancion'];
    @$parambeneficio["iddelimputadosancion"] = $_POST['iddelimputadosancion'];

//variable para eliminar imputados con beneficio
    @$imputadobeneficionvo = $_POST['idImputadoSancion'];





    $imputadossancionesFacade = new ImputadossancionesFacade();
    $imputadossancionesDto = new ImputadossancionesDTO();

    $imputadossancionesDto->setIdImputadoSancion($idImputadoSancion);
    $imputadossancionesDto->setIdImputadoSentencia($idImputadoSentencia);
    $imputadossancionesDto->setCveTipoSancion($cveTipoSancion);
    $imputadossancionesDto->setAnioPrision($anioPrision);
    $imputadossancionesDto->setMesPrision($mesPrision);
    $imputadossancionesDto->setDiasPrision($diasPrision);
    $imputadossancionesDto->setCantidadMulta($cantidadMulta);
    $imputadossancionesDto->setCantidadReparacion($cantidadReparacion);
    $imputadossancionesDto->setAmonestacion($amonestacion);
    $imputadossancionesDto->setEspecificacion($especificacion);
    $imputadossancionesDto->setFechaInicio($fechaInicio);
    $imputadossancionesDto->setFechaTermina($fechaTermina);
    $imputadossancionesDto->setActivo($activo);
    $imputadossancionesDto->setFechaRegistro($fechaRegistro);
    $imputadossancionesDto->setFechaActualizacion($fechaActualizacion);




    if (($accion == "guardar") && ($idImputadoSancion == "")) {
        $imputadossancionesDto = $imputadossancionesFacade->insertImputadossanciones($imputadossancionesDto);
        echo $imputadossancionesDto;
    } else if (($accion == "guardar") && ($idImputadoSancion != "")) {
        $imputadossancionesDto = $imputadossancionesFacade->updateImputadossanciones($imputadossancionesDto);
        echo $imputadossancionesDto;
    } else if ($accion == "consultar") {
        $imputadossancionesDto = $imputadossancionesFacade->selectImputadossanciones($imputadossancionesDto);
        echo $imputadossancionesDto;
    } else if (($accion == "baja") && ($idImputadoSancion != "")) {
        $imputadossancionesDto = $imputadossancionesFacade->deleteImputadossanciones($imputadossancionesDto);
        echo $imputadossancionesDto;
    } else if (($accion == "seleccionar") && ($idImputadoSancion != "")) {
        $imputadossancionesDto = $imputadossancionesFacade->selectImputadossanciones($imputadossancionesDto);
        echo $imputadossancionesDto;
    } else if (($accion == "consultasancionsentencia")) {
        $imputadossancionesDto = $imputadossancionesFacade->selectSancionessentencias($imputadossancionesDto, $_POST);
        echo $imputadossancionesDto;
    } else if (($accion == "eliminacionlogica")) {
        $imputadoss = $imputadossancionesFacade->eliminacionlogica($imputadossancionesDto);
        echo $imputadoss;
    } else if (($accion == "insertimputadosysanciones")) {
        $imputadossancionesDto = $imputadossancionesFacade->insertaimputadossancionesybeneficios($imputadossancionesDto, $paramSession, $parambeneficio);
        echo $imputadossancionesDto;
    } else if (($accion == "eliminaimputadoybeneficio")) {
        $imputadossancionesDto = $imputadossancionesFacade->eliminaimputadossancionesybeneficios($imputadossancionesDto, $paramSession, $imputadobeneficionvo);
        echo $imputadossancionesDto;
    } else if (($accion == "modificaimputadosybeneficios")) {
        $imputadossancionesDto = $imputadossancionesFacade->modificaimputadossancionesybeneficios($imputadossancionesDto, $paramSession);
        echo $imputadossancionesDto;
    } else if ($accion == "consultarimptadossanciones") {
        $imputadossancionesDto = $imputadossancionesFacade->imputadossanciones($imputadossancionesDto);
        echo $imputadossancionesDto;
    } else if ($accion == "consultarestatus") {
        $imputadossancionesDto = $imputadossancionesFacade->selectImputadossancionesestatus($imputadossancionesDto);
        echo $imputadossancionesDto;
    } else if (($accion == "guardarsanciones")) {
        $arreglo = "";
        $arreglo = $_POST;
        $imputadossancionesDto = $imputadossancionesFacade->guardarsanciones($imputadossancionesDto, $arreglo);
        echo $imputadossancionesDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>
