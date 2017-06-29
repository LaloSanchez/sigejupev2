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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/beneficioses/BeneficiosesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/beneficioses/BeneficiosesController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/imputadossanciones/ImputadossancionesController.Class.php");

class BeneficiosesFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarBeneficioses($BeneficiosesDto) {
        $BeneficiosesDto->setidBeneficioES(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($BeneficiosesDto->getidBeneficioES(), "utf8") : strtoupper($BeneficiosesDto->getidBeneficioES()))))));
        if ($this->esFecha($BeneficiosesDto->getidBeneficioES())) {
            $BeneficiosesDto->setidBeneficioES($this->fechaMysql($BeneficiosesDto->getidBeneficioES()));
        }
        $BeneficiosesDto->setidActuacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($BeneficiosesDto->getidActuacion(), "utf8") : strtoupper($BeneficiosesDto->getidActuacion()))))));
        if ($this->esFecha($BeneficiosesDto->getidActuacion())) {
            $BeneficiosesDto->setidActuacion($this->fechaMysql($BeneficiosesDto->getidActuacion()));
        }
        $BeneficiosesDto->setidImputadoCarpeta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($BeneficiosesDto->getidImputadoCarpeta(), "utf8") : strtoupper($BeneficiosesDto->getidImputadoCarpeta()))))));
        if ($this->esFecha($BeneficiosesDto->getidImputadoCarpeta())) {
            $BeneficiosesDto->setidImputadoCarpeta($this->fechaMysql($BeneficiosesDto->getidImputadoCarpeta()));
        }
        $BeneficiosesDto->setApelada(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($BeneficiosesDto->getApelada(), "utf8") : strtoupper($BeneficiosesDto->getApelada()))))));
        if ($this->esFecha($BeneficiosesDto->getApelada())) {
            $BeneficiosesDto->setApelada($this->fechaMysql($BeneficiosesDto->getApelada()));
        }
        $BeneficiosesDto->setfechaInicio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($BeneficiosesDto->getfechaInicio(), "utf8") : strtoupper($BeneficiosesDto->getfechaInicio()))))));
        if ($this->esFecha($BeneficiosesDto->getfechaInicio())) {
            $BeneficiosesDto->setfechaInicio($this->fechaMysql($BeneficiosesDto->getfechaInicio()));
        }
        $BeneficiosesDto->setfechaTermina(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($BeneficiosesDto->getfechaTermina(), "utf8") : strtoupper($BeneficiosesDto->getfechaTermina()))))));
        if ($this->esFecha($BeneficiosesDto->getfechaTermina())) {
            $BeneficiosesDto->setfechaTermina($this->fechaMysql($BeneficiosesDto->getfechaTermina()));
        }
        $BeneficiosesDto->setcveTipoSancion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($BeneficiosesDto->getcveTipoSancion(), "utf8") : strtoupper($BeneficiosesDto->getcveTipoSancion()))))));
        if ($this->esFecha($BeneficiosesDto->getcveTipoSancion())) {
            $BeneficiosesDto->setcveTipoSancion($this->fechaMysql($BeneficiosesDto->getcveTipoSancion()));
        }
        $BeneficiosesDto->setcveTipoBeneficioES(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($BeneficiosesDto->getcveTipoBeneficioES(), "utf8") : strtoupper($BeneficiosesDto->getcveTipoBeneficioES()))))));
        if ($this->esFecha($BeneficiosesDto->getcveTipoBeneficioES())) {
            $BeneficiosesDto->setcveTipoBeneficioES($this->fechaMysql($BeneficiosesDto->getcveTipoBeneficioES()));
        }
        return $BeneficiosesDto;
    }

    public function selectBeneficioses($BeneficiosesDto) {
        $BeneficiosesDto = $this->validarBeneficioses($BeneficiosesDto);
        $BeneficiosesController = new BeneficiosesController();
        $BeneficiosesDto = $BeneficiosesController->selectBeneficioses($BeneficiosesDto);
        if ($BeneficiosesDto != "") {
            $dtoToJson = new DtoToJson($BeneficiosesDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertBeneficioses($BeneficiosesDto) {
        $BeneficiosesDto = $this->validarBeneficioses($BeneficiosesDto);
        $BeneficiosesController = new BeneficiosesController();
        $BeneficiosesDto = $BeneficiosesController->insertBeneficioses($BeneficiosesDto);
        if ($BeneficiosesDto != "") {
            $dtoToJson = new DtoToJson($BeneficiosesDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateBeneficioses($BeneficiosesDto) {
        $BeneficiosesDto = $this->validarBeneficioses($BeneficiosesDto);
        $BeneficiosesController = new BeneficiosesController();
        $BeneficiosesDto = $BeneficiosesController->updateBeneficioses($BeneficiosesDto);
        if ($BeneficiosesDto != "") {
            $dtoToJson = new DtoToJson($BeneficiosesDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteBeneficioses($BeneficiosesDto) {
        $BeneficiosesDto = $this->validarBeneficioses($BeneficiosesDto);
        $BeneficiosesController = new BeneficiosesController();
        $BeneficiosesDto = $BeneficiosesController->deleteBeneficioses($BeneficiosesDto);
        if ($BeneficiosesDto == true) {
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
    
    public function insertaBeneficiosSanciones($beneficiosesDto,$arreglo){
        //$imputadosSancionesDto=  $this->validarAudiencias($audienciasDto);
        
        $imputadosSancionesController= new ImputadossancionesController();
        $imputadosancionesDto=$imputadosSancionesController->insertaImputadosSanciones($beneficiosesDto,$arreglo);
    }

}

@$idBeneficioES = $_POST["idBeneficioES"];
@$idActuacion = $_POST["idActuacion"];
@$idImputadoCarpeta = $_POST["idImputadoCarpeta"];
@$Apelada = $_POST["Apelada"];
@$fechaInicio = $_POST["fechaInicio"];
@$fechaTermina = $_POST["fechaTermina"];
@$cveTipoSancion = $_POST["cveTipoSancion"];
@$cveTipoBeneficioES = $_POST["cveTipoBeneficioES"];
@$activo = $_POST["activo"];
@$idImputadoSancion = $_POST["idImputadoSancion"];

@$idImpuSan=$_POST["idImpuSan"];
@$idImpuSen=$_POST["idImpuSen"];
@$cveTipoSen=$_POST["cveTipoSen"];
@$multa=$_POST["multa"];
@$restitucion=$_POST["restitucion"];
@$observacion=$_POST["observacion"];
@$fInicio=$_POST["fInicio"];
@$fFin=$_POST["fFin"];
@$actuacion=$_POST["actuacion"];

@$accion = $_POST["accion"];

$arreglo=array("idImpuSan"=>$idImpuSan,"idImpuSen"=>$idImpuSen,"cveTipoSen"=>$cveTipoSen,"multa"=>$multa,"restitucion"=>$restitucion,"observacion"=>$observacion,"fInicio"=>$fInicio,"fFin"=>$fFin,"actuacion"=>$actuacion);
$beneficiosesFacade = new BeneficiosesFacade();
$beneficiosesDto = new BeneficiosesDTO();

$beneficiosesDto->setIdBeneficioES($idBeneficioES);
$beneficiosesDto->setIdActuacion($idActuacion);
$beneficiosesDto->setActivo($activo);
$beneficiosesDto->setIdImputadoSancion($idImputadoSancion);
$beneficiosesDto->setIdImputadoCarpeta($idImputadoCarpeta);
$beneficiosesDto->setApelada($Apelada);
$beneficiosesDto->setFechaInicio($fechaInicio);
$beneficiosesDto->setFechaTermina($fechaTermina);
$beneficiosesDto->setCveTipoSancion($cveTipoSancion);
$beneficiosesDto->setCveTipoBeneficioES($cveTipoBeneficioES);

if (($accion == "guardar") && ($idBeneficioES == "")) {
    $beneficiosesDto = $beneficiosesFacade->insertBeneficioses($beneficiosesDto);
    echo $beneficiosesDto;
} else if (($accion == "guardar") && ($idBeneficioES != "")) {
    $beneficiosesDto = $beneficiosesFacade->updateBeneficioses($beneficiosesDto);
    echo $beneficiosesDto;
} else if ($accion == "consultar") {
    $beneficiosesDto = $beneficiosesFacade->selectBeneficioses($beneficiosesDto);
    echo $beneficiosesDto;
} else if (($accion == "baja") && ($idBeneficioES != "")) {
    $beneficiosesDto = $beneficiosesFacade->deleteBeneficioses($beneficiosesDto);
    echo $beneficiosesDto;
} else if (($accion == "seleccionar") && ($idBeneficioES != "")) {
    $beneficiosesDto = $beneficiosesFacade->selectBeneficioses($beneficiosesDto);
    echo $beneficiosesDto;
}else if ($accion=="insertaSancionesYBeneficios") {
    $beneficiosesDto = $beneficiosesFacade->insertaBeneficiosSanciones($beneficiosesDto,$arreglo);
    echo $beneficiosesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>