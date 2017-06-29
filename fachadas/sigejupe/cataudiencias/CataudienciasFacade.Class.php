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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/cataudiencias/CataudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/cataudiencias/CataudienciasController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class CataudienciasFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarCataudiencias($CataudienciasDto) {
        $CataudienciasDto->setcveCatAudiencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CataudienciasDto->getcveCatAudiencia(), "utf8") : strtoupper($CataudienciasDto->getcveCatAudiencia()))))));
        if ($this->esFecha($CataudienciasDto->getcveCatAudiencia())) {
            $CataudienciasDto->setcveCatAudiencia($this->fechaMysql($CataudienciasDto->getcveCatAudiencia()));
        }
        $CataudienciasDto->setdesCatAudiencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CataudienciasDto->getdesCatAudiencia(), "utf8") : strtoupper($CataudienciasDto->getdesCatAudiencia()))))));
        if ($this->esFecha($CataudienciasDto->getdesCatAudiencia())) {
            $CataudienciasDto->setdesCatAudiencia($this->fechaMysql($CataudienciasDto->getdesCatAudiencia()));
        }
        $CataudienciasDto->setfechaInicia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CataudienciasDto->getfechaInicia(), "utf8") : strtoupper($CataudienciasDto->getfechaInicia()))))));
        if ($this->esFecha($CataudienciasDto->getfechaInicia())) {
            $CataudienciasDto->setfechaInicia($this->fechaMysql($CataudienciasDto->getfechaInicia()));
        }
        $CataudienciasDto->setfechaVigencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CataudienciasDto->getfechaVigencia(), "utf8") : strtoupper($CataudienciasDto->getfechaVigencia()))))));
        if ($this->esFecha($CataudienciasDto->getfechaVigencia())) {
            $CataudienciasDto->setfechaVigencia($this->fechaMysql($CataudienciasDto->getfechaVigencia()));
        }
        $CataudienciasDto->setcausa(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CataudienciasDto->getcausa(), "utf8") : strtoupper($CataudienciasDto->getcausa()))))));
        if ($this->esFecha($CataudienciasDto->getcausa())) {
            $CataudienciasDto->setcausa($this->fechaMysql($CataudienciasDto->getcausa()));
        }
        $CataudienciasDto->setcveEtapaProcesal(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CataudienciasDto->getcveEtapaProcesal(), "utf8") : strtoupper($CataudienciasDto->getcveEtapaProcesal()))))));
        if ($this->esFecha($CataudienciasDto->getcveEtapaProcesal())) {
            $CataudienciasDto->setcveEtapaProcesal($this->fechaMysql($CataudienciasDto->getcveEtapaProcesal()));
        }
        $CataudienciasDto->setcveNaturaleza(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CataudienciasDto->getcveNaturaleza(), "utf8") : strtoupper($CataudienciasDto->getcveNaturaleza()))))));
        if ($this->esFecha($CataudienciasDto->getcveNaturaleza())) {
            $CataudienciasDto->setcveNaturaleza($this->fechaMysql($CataudienciasDto->getcveNaturaleza()));
        }
        $CataudienciasDto->setcveTipoAudiencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CataudienciasDto->getcveTipoAudiencia(), "utf8") : strtoupper($CataudienciasDto->getcveTipoAudiencia()))))));
        if ($this->esFecha($CataudienciasDto->getcveTipoAudiencia())) {
            $CataudienciasDto->setcveTipoAudiencia($this->fechaMysql($CataudienciasDto->getcveTipoAudiencia()));
        }
        $CataudienciasDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CataudienciasDto->getactivo(), "utf8") : strtoupper($CataudienciasDto->getactivo()))))));
        if ($this->esFecha($CataudienciasDto->getactivo())) {
            $CataudienciasDto->setactivo($this->fechaMysql($CataudienciasDto->getactivo()));
        }
        $CataudienciasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CataudienciasDto->getfechaRegistro(), "utf8") : strtoupper($CataudienciasDto->getfechaRegistro()))))));
        if ($this->esFecha($CataudienciasDto->getfechaRegistro())) {
            $CataudienciasDto->setfechaRegistro($this->fechaMysql($CataudienciasDto->getfechaRegistro()));
        }
        $CataudienciasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CataudienciasDto->getfechaActualizacion(), "utf8") : strtoupper($CataudienciasDto->getfechaActualizacion()))))));
        if ($this->esFecha($CataudienciasDto->getfechaActualizacion())) {
            $CataudienciasDto->setfechaActualizacion($this->fechaMysql($CataudienciasDto->getfechaActualizacion()));
        }
        $CataudienciasDto->setcveCodigo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CataudienciasDto->getcveCodigo(), "utf8") : strtoupper($CataudienciasDto->getcveCodigo()))))));
        if ($this->esFecha($CataudienciasDto->getcveCodigo())) {
            $CataudienciasDto->setcveCodigo($this->fechaMysql($CataudienciasDto->getcveCodigo()));
        }
        $CataudienciasDto->setaudienciaInicial(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CataudienciasDto->getaudienciaInicial(), "utf8") : strtoupper($CataudienciasDto->getaudienciaInicial()))))));
        if ($this->esFecha($CataudienciasDto->getaudienciaInicial())) {
            $CataudienciasDto->setaudienciaInicial($this->fechaMysql($CataudienciasDto->getaudienciaInicial()));
        }
        return $CataudienciasDto;
    }

    public function selectCataudiencias($CataudienciasDto) {
        $CataudienciasDto = $this->validarCataudiencias($CataudienciasDto);
        $CataudienciasController = new CataudienciasController();
        $CataudienciasDto = $CataudienciasController->selectCataudiencias($CataudienciasDto);
        if ($CataudienciasDto != "") {
            $dtoToJson = new DtoToJson($CataudienciasDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function selectCataudienciasCat($CataudienciasDto) {
        $CataudienciasDto = $this->validarCataudiencias($CataudienciasDto);
        $CataudienciasController = new CataudienciasController();
        $CataudienciasDto = $CataudienciasController->selectCataudiencias($CataudienciasDto);
        $totalaudiencias = count($CataudienciasDto);
        $json = "";
        $x = 1;
        if ($CataudienciasDto != "") {
            if ($totalaudiencias > 0) {
                $json .= "{";
                $json .= '"status":"Ok",';
                $json .= '"totalCount":"' . count($CataudienciasDto) . '",';
                $json .= '"data":[';
                foreach ($CataudienciasDto as $Cataudiencia) {
                    $json .= "{";
                    $json .= '"cveCatAudiencia":' . json_encode(($Cataudiencia->getCveCatAudiencia())) . ",";
                    $json .= '"desCatAudiencia":' . json_encode(utf8_encode($Cataudiencia->getDesCatAudiencia())) . ",";
                    $json .= '"fechaInicia":' . json_encode(($Cataudiencia->getFechaInicia())) . ",";
                    $json .= '"fechaVigencia":' . json_encode(($Cataudiencia->getFechaVigencia())) . ",";
                    $json .= '"causa":' . json_encode($Cataudiencia->getCausa()) . ",";
                    $json .= '"cveEtapaProcesal":' . json_encode($Cataudiencia->getCveEtapaProcesal()) . ",";
                    $json .= '"cveNaturaleza":' . json_encode($Cataudiencia->getCveNaturaleza()) . ",";
                    $json .= '"cveTipoAudiencia":' . json_encode($Cataudiencia->getCveTipoAudiencia()) . ",";
                    $json .= '"activo":' . json_encode($Cataudiencia->getActivo()) . ",";
                    $json .= '"cveCodigo":' . json_encode(($Cataudiencia->getCveCodigo())) . ",";
                    $json .= '"audienciaInicial":' . json_encode(($Cataudiencia->getAudienciaInicial())) . "";
                    $json .= "}" . "\n";
                    $x ++;
                    if ($x <= count($CataudienciasDto)) {
                        $json .= ",";
                    }
                }
                $json .= "]";
                $json .= "}";
            }
        } else {
            $json .= '{"estatus":"Fail",';
            $json .= '"mnj":"No se encontraron resultados."}';
        }
        return $json;
    }
    

    public function consultaraudienciasdistritos($CataudienciasDto) {
        $CataudienciasDto = $this->validarCataudiencias($CataudienciasDto);
        $CataudienciasController = new CataudienciasController();
        $CataudienciasDto = $CataudienciasController->consultaraudienciasdistritos($CataudienciasDto);

        //print_r(json_encode($CarpetasjudicialesDto));

        return json_encode($CataudienciasDto);
    }

    public function consultarDescripciones2($CataudienciasDto, $param) {
        $CataudienciasDto = $this->validarCataudiencias($CataudienciasDto);
        $CataudienciasController = new CataudienciasController();
        $CataudienciasDto = $CataudienciasController->consultarDescripciones2($CataudienciasDto, $param);
        
        return json_encode($CataudienciasDto);
//        if ($CataudienciasDto != "") {
//            //$dtoToJson = new DtoToJson($CeresosadscripcionesDto);
//            //return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
//            return $CataudienciasDto;
//        }
//        $jsonDto = new Encode_JSON();
//        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }
    
    public function consultarDescripciones($CataudienciasDto, $param) {
        $CataudienciasDto = $this->validarCataudiencias($CataudienciasDto);
        $CataudienciasController = new CataudienciasController();
        $CataudienciasDto = $CataudienciasController->consultarDescripciones($CataudienciasDto, $param);
        if ($CataudienciasDto != "") {
            //$dtoToJson = new DtoToJson($CeresosadscripcionesDto);
            //return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            return $CataudienciasDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function getPaginas($CataudienciasDto, $param) {
        //$ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $CataudienciasController = new CataudienciasController();
        $CataudienciasDto = $CataudienciasController->getPaginas($CataudienciasDto, $param);
        if ($CataudienciasDto != "") {
//            $dtoToJson = new DtoToJson($ActuacionesDto);
            return $CataudienciasDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertCataudiencias($CataudienciasDto) {
        $CataudienciasDto = $this->validarCataudiencias($CataudienciasDto);
        $CataudienciasController = new CataudienciasController();
        $CataudienciasDto = $CataudienciasController->insertCataudiencias($CataudienciasDto);
        if ($CataudienciasDto != "") {
            $dtoToJson = new DtoToJson($CataudienciasDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function insertcataudienciasdistritos($cataudienciasDto, $paramSession, $paramdistrito) {
        $cataudienciasDto = $this->validarCataudiencias($cataudienciasDto);
        $CataudienciasController = new CataudienciasController();
        $cataudienciasDto = $CataudienciasController->insertcataudienciasdistritos($cataudienciasDto, $paramSession, $paramdistrito);

        return json_encode($cataudienciasDto);
    }

    public function updatecataudienciasdistritos($cataudienciasDto, $paramSession, $paramdistrito) {
        $cataudienciasDto = $this->validarCataudiencias($cataudienciasDto);
        $CataudienciasController = new CataudienciasController();
        $cataudienciasDto = $CataudienciasController->updatecataudienciasdistritos($cataudienciasDto, $paramSession, $paramdistrito);

        return json_encode($cataudienciasDto);
    }

    public function eliminaraudienciasdistritos($cataudienciasDto, $paramSession) {
        $cataudienciasDto = $this->validarCataudiencias($cataudienciasDto);
        $CataudienciasController = new CataudienciasController();
        $cataudienciasDto = $CataudienciasController->eliminaraudienciasdistritos($cataudienciasDto, $paramSession);
        return json_encode($cataudienciasDto);
    }

    public function updateCataudiencias($CataudienciasDto) {
        $CataudienciasDto = $this->validarCataudiencias($CataudienciasDto);
        $CataudienciasController = new CataudienciasController();
        $CataudienciasDto = $CataudienciasController->updateCataudiencias($CataudienciasDto);
        if ($CataudienciasDto != "") {
            $dtoToJson = new DtoToJson($CataudienciasDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteCataudiencias($CataudienciasDto) {
        $CataudienciasDto = $this->validarCataudiencias($CataudienciasDto);
        $CataudienciasController = new CataudienciasController();
        $CataudienciasDto = $CataudienciasController->deleteCataudiencias($CataudienciasDto);
        if ($CataudienciasDto == true) {
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

@$cveCatAudiencia = $_POST["cveCatAudiencia"];
@$desCatAudiencia = $_POST["desCatAudiencia"];
@$fechaInicia = $_POST["fechaInicia"];
@$fechaVigencia = $_POST["fechaVigencia"];
@$causa = $_POST["causa"];
@$cveEtapaProcesal = $_POST["cveEtapaProcesal"];
@$cveNaturaleza = $_POST["cveNaturaleza"];
@$cveTipoAudiencia = $_POST["cveTipoAudiencia"];
@$minDuracion = $_POST["minDuracion"];
@$maxDuracion = $_POST["maxDuracion"];
@$holgura = $_POST["holgura"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$cveCodigo = $_POST["cveCodigo"];
@$audienciaInicial = $_POST["audienciaInicial"];
@$accion = $_POST["accion"];

$param = array();
@$param["pag"] = $_POST['pag'];
@$param["cantxPag"] = $_POST['cantxPag'];
@$param["paginacion"] = $_POST['paginacion'];
@$param["fechI"] = $_POST['fechI'];
@$param["fechV"] = $_POST['fechV'];
@$param["distr"] = $_POST['distr'];
@$param["desAudiencia"] = $_POST['desAudiencia']; 


// variables de session
$paramSession = array();
@$paramSession["cveUsuarioSesion"] = $_POST['cveUsuarioSesion'];
@$paramSession["cvePerfilSesion"] = $_POST['cvePerfilSesion'];
@$paramSession["juzgadoSesion"] = $_POST['juzgadoSesion'];

// variables que se agregaran en la tabla de audienciasdistritos
$paramdistrito = array();
@$paramdistrito["cveDistrito"] = $_POST['cveDistrito'];
@$paramdistrito["holgura"] = $_POST['holgura'];
@$paramdistrito["minDuracion"] = $_POST['minDuracion'];
@$paramdistrito["maxDuracion"] = $_POST['maxDuracion'];
@$paramdistrito["cadena"] = $_POST['cadena'];
@$paramdistrito["cadenadistritos"] = $_POST['cveDistrito'];
@$paramdistrito["minHorasDesahogar"] = $_POST["minHorasDesahogar"];
@$paramdistrito["maxHorasDesahogar"] = $_POST["maxHorasDesahogar"];
@$paramdistrito["finSemana"] = $_POST["finSemana"];
@$paramdistrito["activo"] = $_POST["activo"];
$cataudienciasFacade = new CataudienciasFacade();
$cataudienciasDto = new CataudienciasDTO();


$cataudienciasDto->setCveCatAudiencia($cveCatAudiencia);
$cataudienciasDto->setDesCatAudiencia($desCatAudiencia);
$cataudienciasDto->setFechaInicia($fechaInicia);
$cataudienciasDto->setFechaVigencia($fechaVigencia);
$cataudienciasDto->setCausa($causa);
$cataudienciasDto->setCveEtapaProcesal($cveEtapaProcesal);
$cataudienciasDto->setCveNaturaleza($cveNaturaleza);
$cataudienciasDto->setCveTipoAudiencia($cveTipoAudiencia);
$cataudienciasDto->setActivo($activo);
$cataudienciasDto->setFechaRegistro($fechaRegistro);
$cataudienciasDto->setFechaActualizacion($fechaActualizacion);
$cataudienciasDto->setCveCodigo($cveCodigo);
$cataudienciasDto->setAudienciaInicial($audienciaInicial);

if (($accion == "guardar") && ($cveCatAudiencia == "")) {
    $cataudienciasDto = $cataudienciasFacade->insertCataudiencias($cataudienciasDto);
    echo $cataudienciasDto;
} else if (($accion == "guardar") && ($cveCatAudiencia != "")) {
    $cataudienciasDto = $cataudienciasFacade->updateCataudiencias($cataudienciasDto);
    echo $cataudienciasDto;
} else if ($accion == "consultar") {
    $cataudienciasDto = $cataudienciasFacade->selectCataudiencias($cataudienciasDto);
    echo $cataudienciasDto;
} else if (($accion == "baja") && ($cveCatAudiencia != "")) {
    $cataudienciasDto = $cataudienciasFacade->deleteCataudiencias($cataudienciasDto);
    echo $cataudienciasDto;
} else if (($accion == "seleccionar") && ($cveCatAudiencia != "")) {
    $cataudienciasDto = $cataudienciasFacade->selectCataudiencias($cataudienciasDto);
    echo $cataudienciasDto;
} else if ($accion == "consultarDescripciones") {
    $param["paginacion"] = true;
    $cataudienciasDto = $cataudienciasFacade->consultarDescripciones($cataudienciasDto, $param);
    echo $cataudienciasDto;
}else if ($accion == "consultarDescripciones2") {
    $param["paginacion"] = true;
    $cataudienciasDto = $cataudienciasFacade->consultarDescripciones2($cataudienciasDto, $param);
    echo $cataudienciasDto;
}else if ($accion == "getPaginas") {
    $param["paginacion"] = true;
    $cataudienciasDto = $cataudienciasFacade->getPaginas($cataudienciasDto, $param);
    echo $cataudienciasDto;
} else if (($accion == "insertcataudienciasdistritos")) {
    $cataudienciasDto = $cataudienciasFacade->insertcataudienciasdistritos($cataudienciasDto, $paramSession, $paramdistrito);
    echo $cataudienciasDto;
} else if ($accion == "consultaraudienciasdistritos") {
    $cataudienciasDto = $cataudienciasFacade->consultaraudienciasdistritos($cataudienciasDto);
    echo $cataudienciasDto;
} else if (($accion == "eliminaraudienciasdistritos")) {
    $cataudienciasDto = $cataudienciasFacade->eliminaraudienciasdistritos($cataudienciasDto, $paramSession);
    echo $cataudienciasDto;
} else if (($accion == "updatecataudienciasdistritos")) {
    $cataudienciasDto = $cataudienciasFacade->updatecataudienciasdistritos($cataudienciasDto, $paramSession, $paramdistrito);
    echo $cataudienciasDto;
} else if (($accion == "selectCataudienciasCat")) {
    $cataudienciasDto = $cataudienciasFacade->selectCataudienciasCat($cataudienciasDto);
    echo $cataudienciasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
//consultaraudienciasdistritos
?>