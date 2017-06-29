<?php

/*
*************************************************
*FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
*Copyright 2009-2015 FACADES
* Licensed under the MIT license 
* Autor: *
* Departamento de Desarrollo de Software
* Subdireccion de Ingenieria de Software
* Direccion de Teclogias de Informacion
* Poder Judicial del Estado de Mexico
*************************************************
*/

 if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/antecedescarpetas/AntecedescarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/antecedescarpetas/AntecedescarpetasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class AntecedescarpetasFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarAntecedescarpetas($AntecedescarpetasDto) {
        $AntecedescarpetasDto->setidAntecedeCarpeta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AntecedescarpetasDto->getidAntecedeCarpeta(), "utf8") : strtoupper($AntecedescarpetasDto->getidAntecedeCarpeta()))))));
        if ($this->esFecha($AntecedescarpetasDto->getidAntecedeCarpeta())) {
            $AntecedescarpetasDto->setidAntecedeCarpeta($this->fechaMysql($AntecedescarpetasDto->getidAntecedeCarpeta()));
        }
        $AntecedescarpetasDto->setidCarpetaPadre(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AntecedescarpetasDto->getidCarpetaPadre(), "utf8") : strtoupper($AntecedescarpetasDto->getidCarpetaPadre()))))));
        if ($this->esFecha($AntecedescarpetasDto->getidCarpetaPadre())) {
            $AntecedescarpetasDto->setidCarpetaPadre($this->fechaMysql($AntecedescarpetasDto->getidCarpetaPadre()));
        }
        $AntecedescarpetasDto->setidCarpetaHija(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AntecedescarpetasDto->getidCarpetaHija(), "utf8") : strtoupper($AntecedescarpetasDto->getidCarpetaHija()))))));
        if ($this->esFecha($AntecedescarpetasDto->getidCarpetaHija())) {
            $AntecedescarpetasDto->setidCarpetaHija($this->fechaMysql($AntecedescarpetasDto->getidCarpetaHija()));
        }
        $AntecedescarpetasDto->setCveTipoCarpeta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AntecedescarpetasDto->getCveTipoCarpeta(), "utf8") : strtoupper($AntecedescarpetasDto->getCveTipoCarpeta()))))));
        if ($this->esFecha($AntecedescarpetasDto->getCveTipoCarpeta())) {
            $AntecedescarpetasDto->setCveTipoCarpeta($this->fechaMysql($AntecedescarpetasDto->getCveTipoCarpeta()));
        }
        $AntecedescarpetasDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AntecedescarpetasDto->getactivo(), "utf8") : strtoupper($AntecedescarpetasDto->getactivo()))))));
        if ($this->esFecha($AntecedescarpetasDto->getactivo())) {
            $AntecedescarpetasDto->setactivo($this->fechaMysql($AntecedescarpetasDto->getactivo()));
        }
        $AntecedescarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AntecedescarpetasDto->getfechaRegistro(), "utf8") : strtoupper($AntecedescarpetasDto->getfechaRegistro()))))));
        if ($this->esFecha($AntecedescarpetasDto->getfechaRegistro())) {
            $AntecedescarpetasDto->setfechaRegistro($this->fechaMysql($AntecedescarpetasDto->getfechaRegistro()));
        }
        $AntecedescarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AntecedescarpetasDto->getfechaActualizacion(), "utf8") : strtoupper($AntecedescarpetasDto->getfechaActualizacion()))))));
        if ($this->esFecha($AntecedescarpetasDto->getfechaActualizacion())) {
            $AntecedescarpetasDto->setfechaActualizacion($this->fechaMysql($AntecedescarpetasDto->getfechaActualizacion()));
        }
        return $AntecedescarpetasDto;
    }

    public function selectAntecedescarpetas($AntecedescarpetasDto) {
        $AntecedescarpetasDto = $this->validarAntecedescarpetas($AntecedescarpetasDto);
        $AntecedescarpetasController = new AntecedescarpetasController();
        $AntecedescarpetasDto = $AntecedescarpetasController->selectAntecedescarpetas($AntecedescarpetasDto);
        if ($AntecedescarpetasDto != "") {
            $dtoToJson = new DtoToJson($AntecedescarpetasDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertAntecedescarpetas($AntecedescarpetasDto) {
        $AntecedescarpetasDto = $this->validarAntecedescarpetas($AntecedescarpetasDto);
        $AntecedescarpetasController = new AntecedescarpetasController();
        $AntecedescarpetasDto = $AntecedescarpetasController->insertAntecedescarpetas($AntecedescarpetasDto);
        if ($AntecedescarpetasDto != "") {
            $dtoToJson = new DtoToJson($AntecedescarpetasDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateAntecedescarpetas($AntecedescarpetasDto) {
        $AntecedescarpetasDto = $this->validarAntecedescarpetas($AntecedescarpetasDto);
        $AntecedescarpetasController = new AntecedescarpetasController();
        $AntecedescarpetasDto = $AntecedescarpetasController->updateAntecedescarpetas($AntecedescarpetasDto);
        if ($AntecedescarpetasDto != "") {
            $dtoToJson = new DtoToJson($AntecedescarpetasDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteAntecedescarpetas($AntecedescarpetasDto) {
        $AntecedescarpetasDto = $this->validarAntecedescarpetas($AntecedescarpetasDto);
        $AntecedescarpetasController = new AntecedescarpetasController();
        $AntecedescarpetasDto = $AntecedescarpetasController->deleteAntecedescarpetas($AntecedescarpetasDto);
        if ($AntecedescarpetasDto == true) {
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

@$idAntecedeCarpeta = $_POST["idAntecedeCarpeta"];
@$idCarpetaPadre = $_POST["idCarpetaPadre"];
@$idCarpetaHija = $_POST["idCarpetaHija"];
@$activo = $_POST["activo"];
@$cveTipoCarpeta = $_POST["cveTipoCarpeta"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];

$antecedescarpetasFacade = new AntecedescarpetasFacade();
$antecedescarpetasDto = new AntecedescarpetasDTO();

$antecedescarpetasDto->setIdAntecedeCarpeta($idAntecedeCarpeta);
$antecedescarpetasDto->setIdCarpetaPadre($idCarpetaPadre);
$antecedescarpetasDto->setIdCarpetaHija($idCarpetaHija);
$antecedescarpetasDto->setCveTipoCarpeta($cveTipoCarpeta);
$antecedescarpetasDto->setActivo($activo);
$antecedescarpetasDto->setFechaRegistro($fechaRegistro);
$antecedescarpetasDto->setFechaActualizacion($fechaActualizacion);

if (($accion == "guardar") && ($idAntecedeCarpeta == "")) {
    $antecedescarpetasDto = $antecedescarpetasFacade->insertAntecedescarpetas($antecedescarpetasDto);
    echo $antecedescarpetasDto;
} else if (($accion == "guardar") && ($idAntecedeCarpeta != "")) {
    $antecedescarpetasDto = $antecedescarpetasFacade->updateAntecedescarpetas($antecedescarpetasDto);
    echo $antecedescarpetasDto;
} else if ($accion == "consultar") {
    $antecedescarpetasDto = $antecedescarpetasFacade->selectAntecedescarpetas($antecedescarpetasDto);
    echo $antecedescarpetasDto;
} else if (($accion == "baja") && ($idAntecedeCarpeta != "")) {
    $antecedescarpetasDto = $antecedescarpetasFacade->deleteAntecedescarpetas($antecedescarpetasDto);
    echo $antecedescarpetasDto;
} else if (($accion == "seleccionar") && ($idAntecedeCarpeta != "")) {
    $antecedescarpetasDto = $antecedescarpetasFacade->selectAntecedescarpetas($antecedescarpetasDto);
    echo $antecedescarpetasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>