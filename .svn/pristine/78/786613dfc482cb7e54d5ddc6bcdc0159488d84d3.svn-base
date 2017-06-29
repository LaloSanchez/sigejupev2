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

session_start();
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tocastradicionales/TocastradicionalesController.Class.php");

class TocastradicionalesFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function insertarTocaTradicional($datosTocaTradicional) {
        $TocastradicionalesController = new TocastradicionalesController();
        $Tocastradicionales = $TocastradicionalesController->insertarTocaTradicional($datosTocaTradicional);

        return $Tocastradicionales;
    }

    public function consultarTocaTradicional($datosTocaTradicional, $paginacion) {
        $TocastradicionalesController = new TocastradicionalesController();
        $Tocastradicionales = $TocastradicionalesController->consultarTocaTradicional($datosTocaTradicional, $paginacion);

        return $Tocastradicionales;
    }
    public function consultarTocaTradicionalReasignacion($datosTocaTradicional, $paginacion) {
        $TocastradicionalesController = new TocastradicionalesController();
        $Tocastradicionales = $TocastradicionalesController->consultarTocaTradicionalReasignacion($datosTocaTradicional, $paginacion);

        return $Tocastradicionales;
    }
    public function consultarTocaTradicionalReasignacionTribunal($datosTocaTradicional, $paginacion) {
        $TocastradicionalesController = new TocastradicionalesController();
        $Tocastradicionales = $TocastradicionalesController->consultarTocaTradicionalReasignacionTribunal($datosTocaTradicional, $paginacion);

        return $Tocastradicionales;
    }
    public function getPaginasTocasTradicionales($datosTocaTradicional, $paginacion) {
        $TocastradicionalesController = new TocastradicionalesController();
        $Tocastradicionales = $TocastradicionalesController->getPaginasTocasTradicionales($datosTocaTradicional, $paginacion);

        return $Tocastradicionales;
    }
    public function getPaginasTocasTradicionalesTribunal($datosTocaTradicional, $paginacion) {
        $TocastradicionalesController = new TocastradicionalesController();
        $Tocastradicionales = $TocastradicionalesController->getPaginasTocasTradicionalesTribunal($datosTocaTradicional, $paginacion);

        return $Tocastradicionales;
    }
    public function obtenerRevisionTocaArbol($datosTocaTradicional) {
        $TocastradicionalesController = new TocastradicionalesController();
        $Tocastradicionales = $TocastradicionalesController->obtenerRevisionTocaArbol($datosTocaTradicional, $paginacion);

        return $Tocastradicionales;
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

$TocastradicionalesFacade = new TocastradicionalesFacade();
@$datosTocaTradicional["listaImputados"] = $_POST["listaImputado"];
@$datosTocaTradicional["listaOfendidos"] = $_POST["listaOfendido"];
@$datosTocaTradicional["listaDelitos"] = $_POST["listaDelito"];
@$datosTocaTradicional["carpetaInv"] = $_POST["carpetaInv"];
@$datosTocaTradicional["anio"] = $_POST["anio"];
@$datosTocaTradicional["numero"] = $_POST["numero"];
@$datosTocaTradicional["cveTipoCarpeta"] = $_POST["cveTipoCarpeta"];
@$datosTocaTradicional["cveUsuario"] = $_POST["cveUsuario"];
@$datosTocaTradicional["cveJuzgado"] = $_POST["cveJuzgado"];
@$datosTocaTradicional["cveRegion"] = $_POST["cveRegion"];
@$datosTocaTradicional["grave"] = $_POST["grave"];
@$datosTocaTradicional["colegiada"] = $_POST["colegiada"];
@$datosTocaTradicional["cveConsignacion"] = $_POST["cveConsignacion"];
@$datosTocaTradicional["observaciones"] = (str_ireplace("'","",trim(utf8_decode($_POST["observaciones"]))));
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];

if (($accion == "guardar")) {
    $Tocastradicionales = $TocastradicionalesFacade->insertarTocaTradicional($datosTocaTradicional);
    echo $Tocastradicionales;
} else if (($accion == "consultarTocaTradicional")) {
    $paginacion = array();
    $paginacion["pag"] = $_POST["pag"];
    $paginacion["cantxPag"] = $_POST["cantxPag"];
    $paginacion["paginacion"] = true;

    @$datosTocaTradicional["fechaInicial"] = $_POST["fechaInicial"];
    @$datosTocaTradicional["fechaFinal"] = $_POST["fechaFinal"];
    $Tocastradicionales = $TocastradicionalesFacade->consultarTocaTradicional($datosTocaTradicional, $paginacion);
    echo $Tocastradicionales;
}else if (($accion == "consultarTocaTradicionalReasignacion")) {
    $paginacion = array();
    $paginacion["pag"] = $_POST["pag"];
    $paginacion["cantxPag"] = $_POST["cantxPag"];
    $paginacion["paginacion"] = true;

    @$datosTocaTradicional["fechaInicial"] = $_POST["fechaInicial"];
    @$datosTocaTradicional["fechaFinal"] = $_POST["fechaFinal"];
    $Tocastradicionales = $TocastradicionalesFacade->consultarTocaTradicionalReasignacion($datosTocaTradicional, $paginacion);
    echo $Tocastradicionales;
}elseif (($accion == "consultarTocaTradicionalReasignacionTribunal")) {
    $paginacion = array();
    $paginacion["pag"] = $_POST["pag"];
    $paginacion["cantxPag"] = $_POST["cantxPag"];
    $paginacion["paginacion"] = true;

    @$datosTocaTradicional["fechaInicial"] = $_POST["fechaInicial"];
    @$datosTocaTradicional["fechaFinal"] = $_POST["fechaFinal"];
    $Tocastradicionales = $TocastradicionalesFacade->consultarTocaTradicionalReasignacionTribunal($datosTocaTradicional, $paginacion);
    echo $Tocastradicionales;
}else if (($accion == "getPaginasTocasTradicionales")) {
    $paginacion = array();
    $paginacion["pag"] = $_POST["pag"];
    $paginacion["cantxPag"] = $_POST["cantxPag"];
    $paginacion["paginacion"] = true;
    @$datosTocaTradicional["fechaInicial"] = $_POST["fechaInicial"];
    @$datosTocaTradicional["fechaFinal"] = $_POST["fechaFinal"];
    @$datosTocaTradicional["tribunal"] = $_POST["tribunal"];
    
    $Tocastradicionales = $TocastradicionalesFacade->getPaginasTocasTradicionales($datosTocaTradicional, $paginacion);
    echo $Tocastradicionales;
}else if (($accion == "getPaginasTocasTradicionalesTribunal")) {
    $paginacion = array();
    $paginacion["pag"] = $_POST["pag"];
    $paginacion["cantxPag"] = $_POST["cantxPag"];
    $paginacion["paginacion"] = true;

    @$datosTocaTradicional["fechaInicial"] = $_POST["fechaInicial"];
    @$datosTocaTradicional["fechaFinal"] = $_POST["fechaFinal"];
    $Tocastradicionales = $TocastradicionalesFacade->getPaginasTocasTradicionalesTribunal($datosTocaTradicional, $paginacion);
    echo $Tocastradicionales;
}else if (($accion == "obtenerRevisionTocaArbol")) {
    $param = array();
    $param["idActuacion"] = $_POST["idActuacion"];
   
    $Tocastradicionales = $TocastradicionalesFacade->obtenerRevisionTocaArbol($param);
    echo $Tocastradicionales;
}
?>