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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/apelantescarpetas/ApelantescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/apelantescarpetas/ApelantescarpetasController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
//Generos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/generos/GenerosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/generos/GenerosDAO.Class.php");
//tipo persona
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tipospersonas/TipospersonasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tipospersonas/TipospersonasDAO.Class.php");
//tipo apelante
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposapelantes/TiposapelantesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposapelantes/TiposapelantesDAO.Class.php");
//Carpetas judiciales
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");
//tipos carpetas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposcarpetas/TiposcarpetasDAO.Class.php");

class ApelantescarpetasFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarApelantescarpetas($ApelantescarpetasDto) {
        $ApelantescarpetasDto->setidApelanteCarpeta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ApelantescarpetasDto->getidApelanteCarpeta(), "utf8") : strtoupper($ApelantescarpetasDto->getidApelanteCarpeta()))))));
        if ($this->esFecha($ApelantescarpetasDto->getidApelanteCarpeta())) {
            $ApelantescarpetasDto->setidApelanteCarpeta($this->fechaMysql($ApelantescarpetasDto->getidApelanteCarpeta()));
        }
        $ApelantescarpetasDto->setidCarpetaJudicial(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ApelantescarpetasDto->getidCarpetaJudicial(), "utf8") : strtoupper($ApelantescarpetasDto->getidCarpetaJudicial()))))));
        if ($this->esFecha($ApelantescarpetasDto->getidCarpetaJudicial())) {
            $ApelantescarpetasDto->setidCarpetaJudicial($this->fechaMysql($ApelantescarpetasDto->getidCarpetaJudicial()));
        }
        $ApelantescarpetasDto->setnombre(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ApelantescarpetasDto->getnombre(), "utf8") : strtoupper($ApelantescarpetasDto->getnombre()))))));
        if ($this->esFecha($ApelantescarpetasDto->getnombre())) {
            $ApelantescarpetasDto->setnombre($this->fechaMysql($ApelantescarpetasDto->getnombre()));
        }
        $ApelantescarpetasDto->setpaterno(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ApelantescarpetasDto->getpaterno(), "utf8") : strtoupper($ApelantescarpetasDto->getpaterno()))))));
        if ($this->esFecha($ApelantescarpetasDto->getpaterno())) {
            $ApelantescarpetasDto->setpaterno($this->fechaMysql($ApelantescarpetasDto->getpaterno()));
        }
        $ApelantescarpetasDto->setmaterno(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ApelantescarpetasDto->getmaterno(), "utf8") : strtoupper($ApelantescarpetasDto->getmaterno()))))));
        if ($this->esFecha($ApelantescarpetasDto->getmaterno())) {
            $ApelantescarpetasDto->setmaterno($this->fechaMysql($ApelantescarpetasDto->getmaterno()));
        }
        $ApelantescarpetasDto->setcveGenero(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ApelantescarpetasDto->getcveGenero(), "utf8") : strtoupper($ApelantescarpetasDto->getcveGenero()))))));
        if ($this->esFecha($ApelantescarpetasDto->getcveGenero())) {
            $ApelantescarpetasDto->setcveGenero($this->fechaMysql($ApelantescarpetasDto->getcveGenero()));
        }
        $ApelantescarpetasDto->setcveTipoPersona(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ApelantescarpetasDto->getcveTipoPersona(), "utf8") : strtoupper($ApelantescarpetasDto->getcveTipoPersona()))))));
        if ($this->esFecha($ApelantescarpetasDto->getcveTipoPersona())) {
            $ApelantescarpetasDto->setcveTipoPersona($this->fechaMysql($ApelantescarpetasDto->getcveTipoPersona()));
        }
        $ApelantescarpetasDto->setnombreMoral(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ApelantescarpetasDto->getnombreMoral(), "utf8") : strtoupper($ApelantescarpetasDto->getnombreMoral()))))));
        if ($this->esFecha($ApelantescarpetasDto->getnombreMoral())) {
            $ApelantescarpetasDto->setnombreMoral($this->fechaMysql($ApelantescarpetasDto->getnombreMoral()));
        }
        $ApelantescarpetasDto->setcveTipoApelante(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ApelantescarpetasDto->getcveTipoApelante(), "utf8") : strtoupper($ApelantescarpetasDto->getcveTipoApelante()))))));
        if ($this->esFecha($ApelantescarpetasDto->getcveTipoApelante())) {
            $ApelantescarpetasDto->setcveTipoApelante($this->fechaMysql($ApelantescarpetasDto->getcveTipoApelante()));
        }
        $ApelantescarpetasDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ApelantescarpetasDto->getactivo(), "utf8") : strtoupper($ApelantescarpetasDto->getactivo()))))));
        if ($this->esFecha($ApelantescarpetasDto->getactivo())) {
            $ApelantescarpetasDto->setactivo($this->fechaMysql($ApelantescarpetasDto->getactivo()));
        }
        $ApelantescarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ApelantescarpetasDto->getfechaRegistro(), "utf8") : strtoupper($ApelantescarpetasDto->getfechaRegistro()))))));
        if ($this->esFecha($ApelantescarpetasDto->getfechaRegistro())) {
            $ApelantescarpetasDto->setfechaRegistro($this->fechaMysql($ApelantescarpetasDto->getfechaRegistro()));
        }
        $ApelantescarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ApelantescarpetasDto->getfechaActualizacion(), "utf8") : strtoupper($ApelantescarpetasDto->getfechaActualizacion()))))));
        if ($this->esFecha($ApelantescarpetasDto->getfechaActualizacion())) {
            $ApelantescarpetasDto->setfechaActualizacion($this->fechaMysql($ApelantescarpetasDto->getfechaActualizacion()));
        }
        $ApelantescarpetasDto->setDomicilio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ApelantescarpetasDto->getDomicilio(), "utf8") : strtoupper($ApelantescarpetasDto->getDomicilio()))))));
        if ($this->esFecha($ApelantescarpetasDto->getDomicilio())) {
            $ApelantescarpetasDto->setDomicilio($this->fechaMysql($ApelantescarpetasDto->getDomicilio()));
        }
        $ApelantescarpetasDto->setEmail(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ApelantescarpetasDto->getEmail(), "utf8") : strtoupper($ApelantescarpetasDto->getEmail()))))));
        if ($this->esFecha($ApelantescarpetasDto->getEmail())) {
            $ApelantescarpetasDto->setEmail($this->fechaMysql($ApelantescarpetasDto->getEmail()));
        }
        return $ApelantescarpetasDto;
    }

    public function selectApelantescarpetas($ApelantescarpetasDto) {
//        $ApelantescarpetasDto = $this->validarApelantescarpetas($ApelantescarpetasDto);
//        $ApelantescarpetasController = new ApelantescarpetasController();
//        $ApelantescarpetasDto = $ApelantescarpetasController->selectApelantescarpetas($ApelantescarpetasDto);
//        if ($ApelantescarpetasDto != "") {
//            $dtoToJson = new DtoToJson($ApelantescarpetasDto);
//            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
//        }
//        $jsonDto = new Encode_JSON();
//        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        $ApelantescarpetasDto = $this->validarApelantescarpetas($ApelantescarpetasDto);
        $ApelantescarpetasController = new ApelantescarpetasController();
        $ApelantescarpetasDto = $ApelantescarpetasController->selectApelantescarpetas($ApelantescarpetasDto);
        $json = "";
        $x = 1;
        $tiposPersonasDto = new TipospersonasDTO ();
        $tiposPersonasDao = new TipospersonasDAO ();
        $generosDto = new GenerosDTO();
        $generosDao = new GenerosDAO();
        $tiposApelantesDto = new TiposapelantesDTO();
        $tiposApelantesDao = new TiposapelantesDAO();
        $carpetasJudicialesDto = new CarpetasjudicialesDTO();
        $carpetasJudicialesDao = new CarpetasjudicialesDAO();
        if ( $ApelantescarpetasDto != "" ) {
            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($ApelantescarpetasDto) . '",';
            $json .= '"data":[';
            foreach ( $ApelantescarpetasDto as $apelante ) {
                $tiposPersonasDto->setCveTipoPersona($apelante->getCveTipoPersona());
                $rsPersona = $tiposPersonasDao->selectTipospersonas($tiposPersonasDto);
                
                $generosDto->setCveGenero($apelante->getCveGenero());
                $generosDto->setActivo("S");
                $rsGenero = $generosDao->selectGeneros($generosDto);
                
                $tiposApelantesDto->setCveTipoApelante($apelante->getCveTipoApelante());
                $tiposApelantesDto->setActivo("S");
                $rsTipoApelantes = $tiposApelantesDao->selectTiposapelantes($tiposApelantesDto);
                
                $carpetasJudicialesDto->setIdCarpetaJudicial($apelante->getIdCarpetaJudicial());
                $rsCarpetasJudiciales = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
                
                $json .= "{";
                $json .= '"idApelanteCarpeta":' . json_encode(utf8_encode($apelante->getIdApelanteCarpeta())) . ",";
                $json .= '"idCarpetaJudicial":' . json_encode(utf8_encode($apelante->getIdCarpetaJudicial())) . ",";
                if ($rsCarpetasJudiciales != "") {
                    $json .= '"cveTipoCarpeta":' . json_encode(utf8_encode($rsCarpetasJudiciales[0]->getCveTipoCarpeta())) . ",";
                    if ($rsCarpetasJudiciales[0]->getCveTipoCarpeta() != "" || $rsCarpetasJudiciales[0]->getCveTipoCarpeta() != null && $rsCarpetasJudiciales[0]->getCveTipoCarpeta() != 0) {
                        $tiposCarpetasDto = new TiposcarpetasDTO();
                        $tiposCarpetasDao = new TiposcarpetasDAO();
                        $tiposCarpetasDto->setCveTipoCarpeta($rsCarpetasJudiciales[0]->getCveTipoCarpeta());
                        $rsCarpetas = $tiposCarpetasDao->selectTiposcarpetas($tiposCarpetasDto);
                        $json .= '"desCarpeta":' . json_encode(utf8_encode($rsCarpetas[0]->getDesTipoCarpeta())) . ",";
                    } else {
                        $json .= '"desCarpeta": "",';
                    }
                    $json .= '"numero":' . json_encode(utf8_encode($rsCarpetasJudiciales[0]->getNumero())) . ",";
                    $json .= '"anio":' . json_encode(utf8_encode($rsCarpetasJudiciales[0]->getAnio())) . ",";
                    $json .= '"nuc":' . json_encode(utf8_encode($rsCarpetasJudiciales[0]->getNuc())) . ",";
                    $json .= '"carpetaInv":' . json_encode(utf8_encode($rsCarpetasJudiciales[0]->getCarpetaInv())) . ",";
                } else {
                    $json .= '"cveTipoCarpeta": "",';
                    $json .= '"numero": "",';
                    $json .= '"anio": "",';
                    $json .= '"nuc": "",';
                    $json .= '"carpetaInv": "",';
                }
                $json .= '"nombre":' . json_encode(utf8_encode($apelante->getNombre())) . ",";
                $json .= '"paterno":' . json_encode(utf8_encode($apelante->getPaterno())) . ",";
                $json .= '"materno":' . json_encode(utf8_encode($apelante->getMaterno())) . ",";
                $json .= '"cveGenero":' . json_encode($apelante->getCveGenero()) . ",";
                if ( $rsGenero != "" ) {
                    $json .= '"desGenero":' . json_encode(utf8_encode($rsGenero[0]->getDesGenero())) . ",";
                } else {
                    $json .= '"desGenero": "N/A",';
                }
                $json .= '"cveTipoPersona":' . json_encode($apelante->getCveTipoPersona()) . ",";
                if ($rsPersona != "") {
                    $json .= '"desTipoPersona":' . json_encode(utf8_encode($rsPersona[0]->getDesTipoPersona())) . ",";
                } else {
                    $json .= '"desTipoPersona": "N/A",';
                }
                $json .= '"nombreMoral":' . json_encode(utf8_encode($apelante->getNombreMoral())) . ",";
                $json .= '"cveTipoApelante":' . json_encode($apelante->getCveTipoApelante()) . ",";
                if ($rsTipoApelantes != "") {
                    $json .= '"desTipoApelante":' . json_encode(utf8_encode($rsTipoApelantes[0]->getDesTipoApelante())) . ",";
                } else {
                    $json .= '"desTipoApelante": "N/A",';
                }
                $json .= '"domicilio":' . json_encode(utf8_encode($apelante->getDomicilio())) . ",";
                $json .= '"email":' . json_encode(utf8_encode($apelante->getEmail())) . ",";
                $json .= '"activo":' . json_encode($apelante->getActivo());
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($ApelantescarpetasDto)) {
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

    public function insertApelantescarpetas($ApelantescarpetasDto) {
        $ApelantescarpetasDto = $this->validarApelantescarpetas($ApelantescarpetasDto);
        $ApelantescarpetasController = new ApelantescarpetasController();
        $ApelantescarpetasDto = $ApelantescarpetasController->insertApelantescarpetas($ApelantescarpetasDto);
        if ($ApelantescarpetasDto != "") {
            $dtoToJson = new DtoToJson($ApelantescarpetasDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateApelantescarpetas($ApelantescarpetasDto) {
        $ApelantescarpetasDto = $this->validarApelantescarpetas($ApelantescarpetasDto);
        $ApelantescarpetasController = new ApelantescarpetasController();
        $ApelantescarpetasDto = $ApelantescarpetasController->updateApelantescarpetas($ApelantescarpetasDto);
        if ($ApelantescarpetasDto != "") {
            $dtoToJson = new DtoToJson($ApelantescarpetasDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteApelantescarpetas($ApelantescarpetasDto) {
        $ApelantescarpetasDto = $this->validarApelantescarpetas($ApelantescarpetasDto);
        $ApelantescarpetasController = new ApelantescarpetasController();
        $ApelantescarpetasDto = $ApelantescarpetasController->deleteApelantescarpetas($ApelantescarpetasDto);
        if ($ApelantescarpetasDto == true) {
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
    }
    
    /*
     * Agregar datos de apelantes
     */
    public function agregarApelantescarpetas($apelantescarpetasDto) {
        $apelantescarpetasDto = $this->validarApelantescarpetas($apelantescarpetasDto);
        $ApelantescarpetasController = new ApelantescarpetasController();
        $apelantescarpetasDto = $ApelantescarpetasController->agregarApelantescarpetas($apelantescarpetasDto);
        return $apelantescarpetasDto;
    }
    
    /*
     * Editar datos del apelante
     */
    public function modificarApelantescarpetas($apelantescarpetasDto) {
        $apelantescarpetasDto = $this->validarApelantescarpetas($apelantescarpetasDto);
        $ApelantescarpetasController = new ApelantescarpetasController();
        $apelantescarpetasDto = $ApelantescarpetasController->modificarApelantescarpetas($apelantescarpetasDto);
        return $apelantescarpetasDto;
    }
    
    /*
     * Borrado logico de apelantes carpetas
     */
    public function eliminarApelantescarpetas($apelantescarpetasDto) {
        $apelantescarpetasDto = $this->validarApelantescarpetas($apelantescarpetasDto);
        $ApelantescarpetasController = new ApelantescarpetasController();
        $apelantescarpetasDto = $ApelantescarpetasController->eliminarApelantescarpetas($apelantescarpetasDto);
        return $apelantescarpetasDto;
    }
    
    /*
     * Validar apelantes activos
     */
    public function validarApelantes($apelantescarpetasDto) {
        $apelantescarpetasDto = $this->validarApelantescarpetas($apelantescarpetasDto);
        $ApelantescarpetasController = new ApelantescarpetasController();
        $apelantescarpetasDto = $ApelantescarpetasController->validarApelantes($apelantescarpetasDto);
        return json_encode($apelantescarpetasDto);
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

@$idApelanteCarpeta = $_POST["idApelanteCarpeta"];
@$idCarpetaJudicial = $_POST["idCarpetaJudicial"];
@$nombre = $_POST["nombre"];
@$paterno = $_POST["paterno"];
@$materno = $_POST["materno"];
@$cveGenero = $_POST["cveGenero"];
@$cveTipoPersona = $_POST["cveTipoPersona"];
@$nombreMoral = $_POST["nombreMoral"];
@$cveTipoApelante = $_POST["cveTipoApelante"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];
@$domicilio = $_POST["domicilio"];
@$email = $_POST["email"];

$apelantescarpetasFacade = new ApelantescarpetasFacade();
$apelantescarpetasDto = new ApelantescarpetasDTO();

$apelantescarpetasDto->setIdApelanteCarpeta($idApelanteCarpeta);
$apelantescarpetasDto->setIdCarpetaJudicial($idCarpetaJudicial);
$apelantescarpetasDto->setNombre($nombre);
$apelantescarpetasDto->setPaterno($paterno);
$apelantescarpetasDto->setMaterno($materno);
$apelantescarpetasDto->setCveGenero($cveGenero);
$apelantescarpetasDto->setCveTipoPersona($cveTipoPersona);
$apelantescarpetasDto->setNombreMoral($nombreMoral);
$apelantescarpetasDto->setCveTipoApelante($cveTipoApelante);
$apelantescarpetasDto->setActivo($activo);
$apelantescarpetasDto->setFechaRegistro($fechaRegistro);
$apelantescarpetasDto->setFechaActualizacion($fechaActualizacion);
$apelantescarpetasDto->setDomicilio($domicilio);
$apelantescarpetasDto->setEmail($email);

if (($accion == "guardar") && ($idApelanteCarpeta == "")) {
    $apelantescarpetasDto = $apelantescarpetasFacade->insertApelantescarpetas($apelantescarpetasDto);
    echo $apelantescarpetasDto;
} else if (($accion == "guardar") && ($idApelanteCarpeta != "")) {
    $apelantescarpetasDto = $apelantescarpetasFacade->updateApelantescarpetas($apelantescarpetasDto);
    echo $apelantescarpetasDto;
} else if ($accion == "consultar") {
    $apelantescarpetasDto = $apelantescarpetasFacade->selectApelantescarpetas($apelantescarpetasDto);
    echo $apelantescarpetasDto;
} else if (($accion == "baja") && ($idApelanteCarpeta != "")) {
    $apelantescarpetasDto = $apelantescarpetasFacade->deleteApelantescarpetas($apelantescarpetasDto);
    echo $apelantescarpetasDto;
} else if (($accion == "seleccionar") && ($idApelanteCarpeta != "")) {
    $apelantescarpetasDto = $apelantescarpetasFacade->selectApelantescarpetas($apelantescarpetasDto);
    echo $apelantescarpetasDto;
} else if ( $accion == "guardarApelante" &&  $idApelanteCarpeta == "") {
    $apelantescarpetasDto = $apelantescarpetasFacade->agregarApelantescarpetas($apelantescarpetasDto);
    echo $apelantescarpetasDto;
} else if ( $accion == "guardarApelante" &&  $idApelanteCarpeta != "") {
    $apelantescarpetasDto = $apelantescarpetasFacade->modificarApelantescarpetas($apelantescarpetasDto);
    echo $apelantescarpetasDto;
} else if ( $accion == "eliminar" &&  $idApelanteCarpeta != "" ) {
    $apelantescarpetasDto = $apelantescarpetasFacade->eliminarApelantescarpetas($apelantescarpetasDto);
    echo $apelantescarpetasDto;
} else if ( $accion == "validarApelantes" ) {
    $apelantescarpetasDto = $apelantescarpetasFacade->validarApelantes($apelantescarpetasDto);
    echo $apelantescarpetasDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>