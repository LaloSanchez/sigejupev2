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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/avisos/AvisosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/avisos/AvisosController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");


include_once(dirname(__FILE__) . "/../../../webservice/cliente/grupos/GruposCliente.php");
class AvisosFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarAvisos($AvisosDto) {
        $AvisosDto->setidAviso(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AvisosDto->getidAviso(), "utf8") : strtoupper($AvisosDto->getidAviso()))))));
        if ($this->esFecha($AvisosDto->getidAviso())) {
            $AvisosDto->setidAviso($this->fechaMysql($AvisosDto->getidAviso()));
        }
        $AvisosDto->setcveGrupo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AvisosDto->getcveGrupo(), "utf8") : strtoupper($AvisosDto->getcveGrupo()))))));
        if ($this->esFecha($AvisosDto->getcveGrupo())) {
            $AvisosDto->setcveGrupo($this->fechaMysql($AvisosDto->getcveGrupo()));
        }
//        $AvisosDto->settituloAviso((str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AvisosDto->gettituloAviso(), "utf8") : strtoupper($AvisosDto->gettituloAviso()))))));
        if ($this->esFecha($AvisosDto->gettituloAviso())) {
            $AvisosDto->settituloAviso($this->fechaMysql($AvisosDto->gettituloAviso()));
        }
//        $AvisosDto->setsubtituloAviso((str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AvisosDto->getsubtituloAviso(), "utf8") : strtoupper($AvisosDto->getsubtituloAviso()))))));
        if ($this->esFecha($AvisosDto->getsubtituloAviso())) {
            $AvisosDto->setsubtituloAviso($this->fechaMysql($AvisosDto->getsubtituloAviso()));
        }
//        $AvisosDto->settextAviso((str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AvisosDto->gettextAviso(), "utf8") : strtoupper($AvisosDto->gettextAviso()))))));
        if ($this->esFecha($AvisosDto->gettextAviso())) {
            $AvisosDto->settextAviso($this->fechaMysql($AvisosDto->gettextAviso()));
        }
//        $AvisosDto->settituloLink((str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AvisosDto->gettituloLink(), "utf8") : strtoupper($AvisosDto->gettituloLink()))))));
        if ($this->esFecha($AvisosDto->gettituloLink())) {
            $AvisosDto->settituloLink($this->fechaMysql($AvisosDto->gettituloLink()));
        }
//        $AvisosDto->setlink((str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AvisosDto->getlink(), "utf8") : strtoupper($AvisosDto->getlink()))))));
        if ($this->esFecha($AvisosDto->getlink())) {
            $AvisosDto->setlink($this->fechaMysql($AvisosDto->getlink()));
        }
//        $AvisosDto->seturlImg((str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AvisosDto->geturlImg(), "utf8") : strtoupper($AvisosDto->geturlImg()))))));
        if ($this->esFecha($AvisosDto->geturlImg())) {
            $AvisosDto->seturlImg($this->fechaMysql($AvisosDto->geturlImg()));
        }
//        $AvisosDto->setorden((str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AvisosDto->getorden(), "utf8") : strtoupper($AvisosDto->getorden()))))));
        if ($this->esFecha($AvisosDto->getorden())) {
            $AvisosDto->setorden($this->fechaMysql($AvisosDto->getorden()));
        }
        $AvisosDto->setfecInicio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AvisosDto->getfecInicio(), "utf8") : strtoupper($AvisosDto->getfecInicio()))))));
        if ($this->esFecha($AvisosDto->getfecInicio())) {
            $AvisosDto->setfecInicio($this->fechaMysql($AvisosDto->getfecInicio()));
        }
        $AvisosDto->setfecTermino(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AvisosDto->getfecTermino(), "utf8") : strtoupper($AvisosDto->getfecTermino()))))));
        if ($this->esFecha($AvisosDto->getfecTermino())) {
            $AvisosDto->setfecTermino($this->fechaMysql($AvisosDto->getfecTermino()));
        }
        $AvisosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AvisosDto->getfechaRegistro(), "utf8") : strtoupper($AvisosDto->getfechaRegistro()))))));
        if ($this->esFecha($AvisosDto->getfechaRegistro())) {
            $AvisosDto->setfechaRegistro($this->fechaMysql($AvisosDto->getfechaRegistro()));
        }
        $AvisosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AvisosDto->getfechaActualizacion(), "utf8") : strtoupper($AvisosDto->getfechaActualizacion()))))));
        if ($this->esFecha($AvisosDto->getfechaActualizacion())) {
            $AvisosDto->setfechaActualizacion($this->fechaMysql($AvisosDto->getfechaActualizacion()));
        }
        $AvisosDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AvisosDto->getactivo(), "utf8") : strtoupper($AvisosDto->getactivo()))))));
        if ($this->esFecha($AvisosDto->getactivo())) {
            $AvisosDto->setactivo($this->fechaMysql($AvisosDto->getactivo()));
        }
        return $AvisosDto;
    }

    public function selectAvisos($AvisosDto) {
        $AvisosDto = $this->validarAvisos($AvisosDto);
        $AvisosController = new AvisosController();
        $AvisosDto = $AvisosController->selectAvisos($AvisosDto);
        if ($AvisosDto != "") {
            $dtoToJson = new DtoToJson($AvisosDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }
    public function consultarAvisos($AvisosDto) {
        $AvisosDto = $this->validarAvisos($AvisosDto);
        $AvisosController = new AvisosController();
        $AvisosDto = $AvisosController->consultarAvisos($AvisosDto);
        if ($AvisosDto != "") {
            $dtoToJson = new DtoToJson($AvisosDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertAvisos($AvisosDto) {
        $AvisosDto = $this->validarAvisos($AvisosDto);
        $AvisosController = new AvisosController();
        $AvisosDto = $AvisosController->insertAvisos($AvisosDto);
        if ($AvisosDto != "") {
            $dtoToJson = new DtoToJson($AvisosDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateAvisos($AvisosDto) {
        $AvisosDto = $this->validarAvisos($AvisosDto);
        $AvisosController = new AvisosController();
        $AvisosDto = $AvisosController->updateAvisos($AvisosDto);
        if ($AvisosDto != "") {
            $dtoToJson = new DtoToJson($AvisosDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteAvisos($AvisosDto) {
        $AvisosDto = $this->validarAvisos($AvisosDto);
        $AvisosController = new AvisosController();
        $AvisosDto = $AvisosController->deleteAvisos($AvisosDto);
        if ($AvisosDto == true) {
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

    public function guardarAviso($avisosDto, $filesImagenAviso = null, $filesArchivoEnlaceInformacion = null, $filesArchivoEnlaceImagen = null) {
        $AvisosDto = $this->validarAvisos($avisosDto);
        $AvisosController = new AvisosController();
        $AvisosDto = $AvisosController->guardarAviso($AvisosDto, $filesImagenAviso, $filesArchivoEnlaceInformacion, $filesArchivoEnlaceImagen);
        if ($AvisosDto != "") {
            $dtoToJson = new DtoToJson($AvisosDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function getGrupos() {
        $gruposCliente = new GruposCliente();
        return $gruposCliente->getGrupos();
}

}

@$idAviso = $_POST["idAviso"];
@$cveGrupo = $_POST["cveGrupo"];
@$tituloAviso = $_POST["tituloAviso"];
@$subtituloAviso = $_POST["subtituloAviso"];
@$textAviso = $_POST["textAviso"];
@$tituloLink = $_POST["tituloLink"];
@$link = $_POST["link"];
@$urlImg = $_POST["urlImg"];
@$orden = $_POST["orden"];
@$fecInicio = $_POST["fecInicio"];
@$fecTermino = $_POST["fecTermino"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$activo = $_POST["activo"];
@$accion = $_POST["accion"];

$avisosFacade = new AvisosFacade();
$avisosDto = new AvisosDTO();

$avisosDto->setIdAviso($idAviso);
$avisosDto->setCveGrupo($cveGrupo);
$avisosDto->setTituloAviso($tituloAviso);
$avisosDto->setSubtituloAviso($subtituloAviso);
$avisosDto->setTextAviso($textAviso);
$avisosDto->setTituloLink($tituloLink);
$avisosDto->setLink($link);
$avisosDto->setUrlImg($urlImg);
$avisosDto->setOrden($orden);
$avisosDto->setFecInicio($fecInicio);
$avisosDto->setFecTermino($fecTermino);
$avisosDto->setFechaRegistro($fechaRegistro);
$avisosDto->setFechaActualizacion($fechaActualizacion);
$avisosDto->setActivo($activo);

if (($accion == "guardar") && ($idAviso == "")) {
    $avisosDto = $avisosFacade->insertAvisos($avisosDto);
    echo $avisosDto;
} else if (($accion == "guardar") && ($idAviso != "")) {
    $avisosDto = $avisosFacade->updateAvisos($avisosDto);
    echo $avisosDto;
} else if ($accion == "consultar") {
    $avisosDto = $avisosFacade->selectAvisos($avisosDto);
    echo $avisosDto;
} else if (($accion == "baja") && ($idAviso != "")) {
    $avisosDto = $avisosFacade->deleteAvisos($avisosDto);
    echo $avisosDto;
} else if (($accion == "seleccionar") && ($idAviso != "")) {
    $avisosDto = $avisosFacade->selectAvisos($avisosDto);
    echo $avisosDto;
} else if (($accion == "guardarAviso")) {
    $files = array();
    @$filesImagenAviso = $_FILES['filesImagenAviso'];
    @$filesArchivoEnlaceInformacion = $_FILES['filesArchivoEnlaceInformacion'];
    @$filesArchivoEnlaceImagen = $_FILES['filesArchivoEnlaceImagen'];
    $avisosDto = $avisosFacade->guardarAviso($avisosDto, $filesImagenAviso, $filesArchivoEnlaceInformacion, $filesArchivoEnlaceImagen);
    echo $avisosDto;
} elseif ($accion == "modificarAviso") {
    $avisosDto = $avisosFacade->updateAvisos($avisosDto);
    echo $avisosDto;
} elseif ($accion == "eliminarAviso") {
    $avisosDto = $avisosFacade->updateAvisos($avisosDto);
    echo $avisosDto;
} elseif ($accion == "consultar-avisos") {
//    var_dump($_SESSION["cveGrupo"]);
    $avisosDto->setCveGrupo($_SESSION['cveGrupo']);
//    echo $_SESSION['cveGrupo'];
    $avisosDto = $avisosFacade->consultarAvisos($avisosDto);
    echo $avisosDto;
} elseif ($accion == "getGrupos") {
    $avisosDto = $avisosFacade->getGrupos();
    echo $avisosDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>