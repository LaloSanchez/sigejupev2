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

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/magistradosproyectistas/MagistradosProyectistasController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class MagistradosProyectistasFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function consultarPersonal() {

        $MagistradosProyectistasController = new MagistradosProyectistasController();
        $MagistradosproyectistasDAO = $MagistradosProyectistasController->consultarPersonal();
        if ($MagistradosproyectistasDAO != "") {
            //$dtoToJson = new DtoToJson($MagistradosproyectistasDAO);
            return $MagistradosproyectistasDAO; //$dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }
    public function guardarMagistradoProyectista($params) {

        $MagistradosProyectistasController = new MagistradosProyectistasController();
        $MagistradosproyectistasDAO = $MagistradosProyectistasController->guardarMagistradoProyectista($params);
        if ($MagistradosproyectistasDAO != "") {
            // $dtoToJson = new DtoToJson($MagistradosproyectistasDAO);
            return $MagistradosproyectistasDAO;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }
    public function cargarPersonalSeleccionado() {

        $MagistradosProyectistasController = new MagistradosProyectistasController();
        $MagistradosproyectistasDAO = $MagistradosProyectistasController->cargarPersonalSeleccionado();
        if ($MagistradosproyectistasDAO != "") {
            $dtoToJson = new DtoToJson($MagistradosproyectistasDAO);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
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

// @$idRemisionApelacion = $_POST["idRemisionApelacion"];
// @$idActuacion = $_POST["idActuacion"];
// @$idOficio = $_POST["idOficio"];
// @$idResolucionCombatida = $_POST["idResolucionCombatida"];
// @$cveRecurso = $_POST["cveRecurso"];
// @$cveEfecto = $_POST["cveEfecto"];
// @$agravios = $_POST["agravios"];
// @$fecCorreTraslado = $_POST["fecCorreTraslado"];
// @$fecInterponeRecurso = $_POST["fecInterponeRecurso"];
// @$fecNotificaSenAut = $_POST["fecNotificaSenAut"];
// @$fecAdhesion = $_POST["fecAdhesion"];
// @$emplazamiento = $_POST["emplazamiento"];
// @$fecEmplazamiento = $_POST["fecEmplazamiento"];
// @$cveSentido = $_POST["cveSentido"];
// @$activo = $_POST["activo"];
// @$fechaRegistro = $_POST["fechaRegistro"];
// @$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];

$MagistradosProyectistasFacade = new MagistradosProyectistasFacade();
$MagistradosproyectistasDAO = new MagistradosproyectistasDAO();

// $MagistradosproyectistasDAO->setIdRemisionApelacion($idRemisionApelacion);
// $MagistradosproyectistasDAO->setIdActuacion($idActuacion);
// $MagistradosproyectistasDAO->setIdOficio($idOficio);
// $MagistradosproyectistasDAO->setIdResolucionCombatida($idResolucionCombatida);
// $MagistradosproyectistasDAO->setCveRecurso($cveRecurso);
// $MagistradosproyectistasDAO->setCveEfecto($cveEfecto);
// $MagistradosproyectistasDAO->setAgravios($agravios);
// $MagistradosproyectistasDAO->setFecCorreTraslado($fecCorreTraslado);
// $MagistradosproyectistasDAO->setFecInterponeRecurso($fecInterponeRecurso);
// $MagistradosproyectistasDAO->setFecNotificaSenAut($fecNotificaSenAut);
// $MagistradosproyectistasDAO->setFecAdhesion($fecAdhesion);
// $MagistradosproyectistasDAO->setEmplazamiento($emplazamiento);
// $MagistradosproyectistasDAO->setCveSentido($cveSentido);
// $MagistradosproyectistasDAO->setActivo($activo);
// $MagistradosproyectistasDAO->setFechaRegistro($fechaRegistro);
// $MagistradosproyectistasDAO->setFechaActualizacion($fechaActualizacion);

if (($accion == "guardar") && ($idRemisionApelacion == "")) {
    // $MagistradosproyectistasDAO = $MagistradosProyectistasFacade->insertRemisionapelaciones($MagistradosproyectistasDAO);
    // echo $MagistradosproyectistasDAO;
} else if ($accion == "consultarPersonal") {
    
    $MagistradosproyectistasDAO = $MagistradosProyectistasFacade->consultarPersonal();
    echo $MagistradosproyectistasDAO;
} else if ($accion == "cargarPersonalSeleccionado") {
    
    $MagistradosproyectistasDAO = $MagistradosProyectistasFacade->cargarPersonalSeleccionado();
    echo $MagistradosproyectistasDAO;
}  else if ($accion == "guardarMagistradoProyectista") {
    // $params['listaProyectistas'] = $_POST['listaProyectistas'];
    $params['seleccionado'] = @$_POST['seleccionado'];
    $params['idMagistradoProyectista'] = @$_POST['idMagistradoProyectista'];
    $params['cveUsuarioProyectista'] = @$_POST['cveUsuarioProyectista'];
    $params['cveUsuarioMagistrado'] = @$_POST['cveUsuarioMagistrado'];
    $MagistradosproyectistasDAO = $MagistradosProyectistasFacade->guardarMagistradoProyectista($params);
    echo $MagistradosproyectistasDAO;
} 
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>