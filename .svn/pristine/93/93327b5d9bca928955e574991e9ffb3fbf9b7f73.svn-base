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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/relacionexpedientejuzgado/RelacionexpedientejuzgadoDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/relacionexpedientejuzgado/RelacionexpedientejuzgadoController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class RelacionexpedientejuzgadoFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto) {
        $RelacionexpedientejuzgadoDto->setidRelacionExpedienteJuzgado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RelacionexpedientejuzgadoDto->getidRelacionExpedienteJuzgado(), "utf8") : strtoupper($RelacionexpedientejuzgadoDto->getidRelacionExpedienteJuzgado()))))));
        if ($this->esFecha($RelacionexpedientejuzgadoDto->getidRelacionExpedienteJuzgado())) {
            $RelacionexpedientejuzgadoDto->setidRelacionExpedienteJuzgado($this->fechaMysql($RelacionexpedientejuzgadoDto->getidRelacionExpedienteJuzgado()));
        }
        $RelacionexpedientejuzgadoDto->setIdPersonaAutorizada(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RelacionexpedientejuzgadoDto->getIdPersonaAutorizada(), "utf8") : strtoupper($RelacionexpedientejuzgadoDto->getIdPersonaAutorizada()))))));
        if ($this->esFecha($RelacionexpedientejuzgadoDto->getIdPersonaAutorizada())) {
            $RelacionexpedientejuzgadoDto->setIdPersonaAutorizada($this->fechaMysql($RelacionexpedientejuzgadoDto->getIdPersonaAutorizada()));
        }
        $RelacionexpedientejuzgadoDto->setIdCarpetajudicial(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RelacionexpedientejuzgadoDto->getIdCarpetajudicial(), "utf8") : strtoupper($RelacionexpedientejuzgadoDto->getIdCarpetajudicial()))))));
        if ($this->esFecha($RelacionexpedientejuzgadoDto->getIdCarpetajudicial())) {
            $RelacionexpedientejuzgadoDto->setIdCarpetajudicial($this->fechaMysql($RelacionexpedientejuzgadoDto->getIdCarpetajudicial()));
        }
        $RelacionexpedientejuzgadoDto->setcveTipoCarpeta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RelacionexpedientejuzgadoDto->getcveTipoCarpeta(), "utf8") : strtoupper($RelacionexpedientejuzgadoDto->getcveTipoCarpeta()))))));
        if ($this->esFecha($RelacionexpedientejuzgadoDto->getcveTipoCarpeta())) {
            $RelacionexpedientejuzgadoDto->setcveTipoCarpeta($this->fechaMysql($RelacionexpedientejuzgadoDto->getcveTipoCarpeta()));
        }
        $RelacionexpedientejuzgadoDto->setcveTipoParte(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RelacionexpedientejuzgadoDto->getcveTipoParte(), "utf8") : strtoupper($RelacionexpedientejuzgadoDto->getcveTipoParte()))))));
        if ($this->esFecha($RelacionexpedientejuzgadoDto->getcveTipoParte())) {
            $RelacionexpedientejuzgadoDto->setcveTipoParte($this->fechaMysql($RelacionexpedientejuzgadoDto->getcveTipoParte()));
        }
        $RelacionexpedientejuzgadoDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RelacionexpedientejuzgadoDto->getfechaRegistro(), "utf8") : strtoupper($RelacionexpedientejuzgadoDto->getfechaRegistro()))))));
        if ($this->esFecha($RelacionexpedientejuzgadoDto->getfechaRegistro())) {
            $RelacionexpedientejuzgadoDto->setfechaRegistro($this->fechaMysql($RelacionexpedientejuzgadoDto->getfechaRegistro()));
        }
        $RelacionexpedientejuzgadoDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RelacionexpedientejuzgadoDto->getfechaActualizacion(), "utf8") : strtoupper($RelacionexpedientejuzgadoDto->getfechaActualizacion()))))));
        if ($this->esFecha($RelacionexpedientejuzgadoDto->getfechaActualizacion())) {
            $RelacionexpedientejuzgadoDto->setfechaActualizacion($this->fechaMysql($RelacionexpedientejuzgadoDto->getfechaActualizacion()));
        }
        $RelacionexpedientejuzgadoDto->setobservaciones(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RelacionexpedientejuzgadoDto->getobservaciones(), "utf8") : strtoupper($RelacionexpedientejuzgadoDto->getobservaciones()))))));
        if ($this->esFecha($RelacionexpedientejuzgadoDto->getobservaciones())) {
            $RelacionexpedientejuzgadoDto->setobservaciones($this->fechaMysql($RelacionexpedientejuzgadoDto->getobservaciones()));
        }
        $RelacionexpedientejuzgadoDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RelacionexpedientejuzgadoDto->getactivo(), "utf8") : strtoupper($RelacionexpedientejuzgadoDto->getactivo()))))));
        if ($this->esFecha($RelacionexpedientejuzgadoDto->getactivo())) {
            $RelacionexpedientejuzgadoDto->setactivo($this->fechaMysql($RelacionexpedientejuzgadoDto->getactivo()));
        }
        return $RelacionexpedientejuzgadoDto;
    }

    public function selectRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto) {
        $RelacionexpedientejuzgadoDto = $this->validarRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto);
        $RelacionexpedientejuzgadoController = new RelacionexpedientejuzgadoController();
        $RelacionexpedientejuzgadoDto = $RelacionexpedientejuzgadoController->selectRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto);
        if ($RelacionexpedientejuzgadoDto != "") {
            $dtoToJson = new DtoToJson($RelacionexpedientejuzgadoDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto) {
        $RelacionexpedientejuzgadoDto = $this->validarRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto);
        $RelacionexpedientejuzgadoController = new RelacionexpedientejuzgadoController();
        $RelacionexpedientejuzgadoDto = $RelacionexpedientejuzgadoController->insertRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto);
        if ($RelacionexpedientejuzgadoDto != "") {
            $dtoToJson = new DtoToJson($RelacionexpedientejuzgadoDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto) {
        $RelacionexpedientejuzgadoDto = $this->validarRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto);
        $RelacionexpedientejuzgadoController = new RelacionexpedientejuzgadoController();
        $RelacionexpedientejuzgadoDto = $RelacionexpedientejuzgadoController->updateRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto);
        if ($RelacionexpedientejuzgadoDto != "") {
            $dtoToJson = new DtoToJson($RelacionexpedientejuzgadoDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto) {
        $RelacionexpedientejuzgadoDto = $this->validarRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto);
        $RelacionexpedientejuzgadoController = new RelacionexpedientejuzgadoController();
        $RelacionexpedientejuzgadoDto = $RelacionexpedientejuzgadoController->deleteRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto);
        if ($RelacionexpedientejuzgadoDto == true) {
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
    
    public function permisosRelacionexpedientejuzgado($relacionexpedientejuzgadoDto,$paginacion) {
        $RelacionexpedientejuzgadoDto = $this->validarRelacionexpedientejuzgado($relacionexpedientejuzgadoDto);
        $params = array();
        $params["fields"]="rej.idRelacionExpedienteJuzgado,cj.numero,cj.anio,tc.desTipoCarpeta,rej.fechaActualizacion,tp.descTipoParte,j.desJuzgado";
        $params["tables"]="tblrelacionexpedientejuzgado rej,tblcarpetasjudiciales cj,tbltiposcarpetas tc,tbltipospartes tp,tbljuzgados j";
        $params["conditions"]="rej.activo='S' AND cj.activo='S' AND tc.activo='S' AND tp.activo='S' AND j.activo='S' AND cj.cveJuzgado=j.cveJuzgado
            AND rej.idCarpetajudicial=cj.idCarpetajudicial AND ((rej.cveTipoCarpeta!=7)AND(rej.cveTipoCarpeta!=8))
            AND tc.cveTipoCarpeta=cj.cveTipoCarpeta AND tp.cveTipoParte=rej.cveTipoParte
            AND rej.idPersonaAutorizada=".$RelacionexpedientejuzgadoDto->getIdPersonaAutorizada();
        $params["conditions"].=" UNION SELECT rej.idRelacionExpedienteJuzgado,a.numAmparo,a.aniAmparo,tc.desTipoCarpeta,rej.fechaActualizacion,tp.descTipoParte,j.desJuzgado FROM
            tblrelacionexpedientejuzgado rej,tblamparos a,tbltiposcarpetas tc,tbltipospartes tp,tbljuzgados j
            WHERE rej.activo='S' AND a.activo='S' AND rej.IdCarpetajudicial=a.idAmparo AND tp.activo='S' AND j.activo='S'
            AND  tc.cveTipoCarpeta=rej.cveTipoCarpeta AND tp.cveTipoParte=rej.cveTipoParte AND a.cveJuzgado=j.cveJuzgado
            AND  rej.cveTipoCarpeta=8 AND tc.activo='S'
            AND rej.idPersonaAutorizada=".$RelacionexpedientejuzgadoDto->getIdPersonaAutorizada();
        $params["conditions"].=" UNION SELECT rej.idRelacionExpedienteJuzgado,e.numExhorto,e.aniExhorto,tc.desTipoCarpeta,rej.fechaActualizacion,tp.descTipoParte,j.desJuzgado FROM
            tblrelacionexpedientejuzgado rej,tblexhortos e,tbltiposcarpetas tc,tbltipospartes tp,tbljuzgados j
            WHERE rej.activo='S' AND e.activo='S' AND tc.activo='S'AND rej.IdCarpetajudicial=e.idexhorto
            AND rej.cveTipoCarpeta=7
            AND tc.activo='S' AND tp.activo='S' AND tp.cveTipoParte=rej.cveTipoParte AND j.activo='S' AND e.cveJuzgado=j.cveJuzgado
            AND tc.cveTipoCarpeta=rej.cveTipoCarpeta AND rej.idPersonaAutorizada=".$RelacionexpedientejuzgadoDto->getIdPersonaAutorizada();
        $params["orders"]="fechaActualizacion DESC";
        $SelectDao=new SelectDAO();
        $json=$SelectDao->selectDAO($params,null,$paginacion);
        return $json;
    }
    public function getPaginasRelacionexpedientejuzgado($relacionexpedientejuzgadoDto,$paginacion) {
        $RelacionexpedientejuzgadoDto = $this->validarRelacionexpedientejuzgado($relacionexpedientejuzgadoDto);
        $params = array();//count(rej.idRelacionExpedienteJuzgado) as totalCount
        $params["fields"]= " sum(x.subTotal) as totalCount FROM(SELECT count(rej.idRelacionExpedienteJuzgado) as subTotal,rej.cveTipoCarpeta";
        $params["tables"]="tblrelacionexpedientejuzgado rej,tblcarpetasjudiciales cj,tbltiposcarpetas tc,tbltipospartes tp,tbljuzgados j";
        $params["conditions"]="rej.activo='S' AND cj.activo='S' AND tc.activo='S' AND tp.activo='S' AND j.activo='S' AND cj.cveJuzgado=j.cveJuzgado
            AND rej.idCarpetajudicial=cj.idCarpetajudicial AND ((rej.cveTipoCarpeta!=7)AND(rej.cveTipoCarpeta!=8))
            AND tc.cveTipoCarpeta=cj.cveTipoCarpeta AND tp.cveTipoParte=rej.cveTipoParte
            AND rej.idPersonaAutorizada=".$RelacionexpedientejuzgadoDto->getIdPersonaAutorizada();
        $params["conditions"].=" UNION SELECT count(rej.idRelacionExpedienteJuzgado) as subTotal,rej.cveTipoCarpeta FROM
            tblrelacionexpedientejuzgado rej,tblamparos a,tbltiposcarpetas tc,tbltipospartes tp,tbljuzgados j
            WHERE rej.activo='S' AND a.activo='S' AND rej.IdCarpetajudicial=a.idAmparo AND tp.activo='S' AND j.activo='S'
            AND  tc.cveTipoCarpeta=rej.cveTipoCarpeta AND tp.cveTipoParte=rej.cveTipoParte AND a.cveJuzgado=j.cveJuzgado
            AND  rej.cveTipoCarpeta=8 AND tc.activo='S'
            AND rej.idPersonaAutorizada=".$RelacionexpedientejuzgadoDto->getIdPersonaAutorizada();
        $params["conditions"].=" UNION SELECT count(rej.idRelacionExpedienteJuzgado) as subTotal,rej.cveTipoCarpeta FROM
            tblrelacionexpedientejuzgado rej,tblexhortos e,tbltiposcarpetas tc,tbltipospartes tp,tbljuzgados j
            WHERE rej.activo='S' AND e.activo='S' AND tc.activo='S'AND rej.IdCarpetajudicial=e.idexhorto
            AND rej.cveTipoCarpeta=7
            AND tc.activo='S' AND tp.activo='S' AND tp.cveTipoParte=rej.cveTipoParte AND j.activo='S' AND e.cveJuzgado=j.cveJuzgado
            AND tc.cveTipoCarpeta=rej.cveTipoCarpeta AND rej.idPersonaAutorizada=".$RelacionexpedientejuzgadoDto->getIdPersonaAutorizada().") as x";
        $SelectDao=new SelectDAO();
        $json=$SelectDao->selectDAO($params,null,$paginacion);
        return $json;
    }
    
    public function insertRelacionexpedientejuzgado_bitacora($RelacionexpedientejuzgadoDto,$datos) {
        $RelacionexpedientejuzgadoDto = $this->validarRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto);
        $RelacionexpedientejuzgadoController = new RelacionexpedientejuzgadoController();
        $RelacionexpedientejuzgadoDto = $RelacionexpedientejuzgadoController->insertRelacionexpedientejuzgado_bitacora($RelacionexpedientejuzgadoDto,$datos);
        if ($RelacionexpedientejuzgadoDto != "") {
            if($RelacionexpedientejuzgadoDto =="registro_existente"){
                return $RelacionexpedientejuzgadoDto;
            }
            $dtoToJson = new DtoToJson($RelacionexpedientejuzgadoDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateRelacionexpedientejuzgado_bitacora($RelacionexpedientejuzgadoDto) {
        $RelacionexpedientejuzgadoDto = $this->validarRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto);
        $RelacionexpedientejuzgadoController = new RelacionexpedientejuzgadoController();
        $RelacionexpedientejuzgadoDto = $RelacionexpedientejuzgadoController->updateRelacionexpedientejuzgado_bitacora($RelacionexpedientejuzgadoDto);
        if ($RelacionexpedientejuzgadoDto != "") {
            $dtoToJson = new DtoToJson($RelacionexpedientejuzgadoDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }
}

@$idRelacionExpedienteJuzgado = $_POST["idRelacionExpedienteJuzgado"];
@$IdPersonaAutorizada = $_POST["IdPersonaAutorizada"];
@$IdCarpetajudicial = $_POST["IdCarpetajudicial"];
@$cveTipoCarpeta = $_POST["cveTipoCarpeta"];
@$cveTipoParte = $_POST["cveTipoParte"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$observaciones = $_POST["observaciones"];
@$activo = $_POST["activo"];
@$accion = $_POST["accion"];

$param = array();
@$param["pag"] = $_POST['pag'];
@$param["cantxPag"] = $_POST['cantxPag'];
@$param["paginacion"] = $_POST['paginacion'];
@$param["fechaDesde"] = $_POST['txtFecInicialBusqueda'];
@$param["fechaHasta"] = $_POST['txtFecFinalBusqueda'];

$relacionexpedientejuzgadoFacade = new RelacionexpedientejuzgadoFacade();
$relacionexpedientejuzgadoDto = new RelacionexpedientejuzgadoDTO();

$relacionexpedientejuzgadoDto->setIdRelacionExpedienteJuzgado($idRelacionExpedienteJuzgado);
$relacionexpedientejuzgadoDto->setIdPersonaAutorizada($IdPersonaAutorizada);
$relacionexpedientejuzgadoDto->setIdCarpetajudicial($IdCarpetajudicial);
$relacionexpedientejuzgadoDto->setCveTipoCarpeta($cveTipoCarpeta);
$relacionexpedientejuzgadoDto->setCveTipoParte($cveTipoParte);
$relacionexpedientejuzgadoDto->setFechaRegistro($fechaRegistro);
$relacionexpedientejuzgadoDto->setFechaActualizacion($fechaActualizacion);
$relacionexpedientejuzgadoDto->setObservaciones($observaciones);
$relacionexpedientejuzgadoDto->setActivo($activo);

if (($accion == "guardar") && ($idRelacionExpedienteJuzgado == "")) {
    $relacionexpedientejuzgadoDto = $relacionexpedientejuzgadoFacade->insertRelacionexpedientejuzgado($relacionexpedientejuzgadoDto);
    echo $relacionexpedientejuzgadoDto;
} else if (($accion == "guardar") && ($idRelacionExpedienteJuzgado != "")) {
    $relacionexpedientejuzgadoDto = $relacionexpedientejuzgadoFacade->updateRelacionexpedientejuzgado($relacionexpedientejuzgadoDto);
    echo $relacionexpedientejuzgadoDto;
} else if ($accion == "consultar") {
    $relacionexpedientejuzgadoDto = $relacionexpedientejuzgadoFacade->selectRelacionexpedientejuzgado($relacionexpedientejuzgadoDto);
    echo $relacionexpedientejuzgadoDto;
} else if (($accion == "baja") && ($idRelacionExpedienteJuzgado != "")) {
    $relacionexpedientejuzgadoDto = $relacionexpedientejuzgadoFacade->deleteRelacionexpedientejuzgado($relacionexpedientejuzgadoDto);
    echo $relacionexpedientejuzgadoDto;
} else if (($accion == "seleccionar") && ($idRelacionExpedienteJuzgado != "")) {
    $relacionexpedientejuzgadoDto = $relacionexpedientejuzgadoFacade->selectRelacionexpedientejuzgado($relacionexpedientejuzgadoDto);
    echo $relacionexpedientejuzgadoDto;
} else if ($accion == "consultaPermisosPersonaAutorizada") {
    $relacionexpedientejuzgadoDto = $relacionexpedientejuzgadoFacade->permisosRelacionexpedientejuzgado($relacionexpedientejuzgadoDto,$param);
    echo $relacionexpedientejuzgadoDto;
} else if($accion=="getPaginasPermisosPersonaAutorizada"){
    $relacionexpedientejuzgadoDto = $relacionexpedientejuzgadoFacade->getPaginasRelacionexpedientejuzgado($relacionexpedientejuzgadoDto,$param);
    echo $relacionexpedientejuzgadoDto;
} else if (($accion == "guardar_bitacora") && ($idRelacionExpedienteJuzgado == "")) {
    $datos =  array();
    @$datos["hijosPersonasAutorizadas"]=$_POST["hijosPersonasAutorizadas"];
    $relacionexpedientejuzgadoDto = $relacionexpedientejuzgadoFacade->insertRelacionexpedientejuzgado_bitacora($relacionexpedientejuzgadoDto,$datos);
    echo $relacionexpedientejuzgadoDto;
} else if (($accion == "guardar_bitacora") && ($idRelacionExpedienteJuzgado != "")) {
    $relacionexpedientejuzgadoDto = $relacionexpedientejuzgadoFacade->updateRelacionexpedientejuzgado_bitacora($relacionexpedientejuzgadoDto);
    echo $relacionexpedientejuzgadoDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>