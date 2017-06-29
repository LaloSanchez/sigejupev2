<?php

/*
 * ************************************************
 * FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
 * Copyright 2009-2015 FACADES
 * Licensed under the MIT license 
 * Autor: *
 * Departamento de Desarrollo de Software
 * Subdireccion de Ingenieria de Software
 * Poder Judicial del Estado de Mexico
 * ************************************************
 */
session_start();

include_once(dirname(__FILE__) . "/../../../webservice/cliente/cedulas/CedulasCliente.php");

class CedulaprofesionalFacade {
    private $proveedor; 

    public function __construct() {
    }
    
    public function selectCedulasLibro($paramL) {
        $json = "{";
        $json .= '"idCedula":"'.$paramL["idCedula"].'",';
        $json .= '"numReg":"",';
        $json .= '"nombre":"",';
        $json .= '"domicilio":"",';
        $json .= '"cedulas":"'.$paramL["cedula"].'",';
        $json .= '"libro":"",';
        $json .= '"fechaExp":"",';
        $json .= '"autoridad":"",';
        $json .= '"curp":"",';
        $json .= '"foja":"",';
        $json .= '"estatusCedula":"",';
        $json .= '"numEmpleado":"",';
        $json .= '"idJuzgado":"'.$paramL["cveAdcripcion"].'",';
        $json .= '"fechaInicio":"'.$paramL["fechaInicio"].'",';
        $json .= '"fechaFin":"'.$paramL["fechaFin"].'"'; 
        $json .= "}";
        
        $clienteCedulas =  new CedulasCliente();
        $responseCedula=$clienteCedulas->obtenerCedulas($json);
         echo $responseCedula;   
    }  
    
    public function selectCedulas($param) {
        
        $json = "{";
        $json .= '"idCedula":"'.$param["idCedula"].'",';
        $json .= '"numReg":"'.$param["numReg"].'",';
        $json .= '"nombre":"'.$param["nombre"].'",';
        $json .= '"domicilio":"'.$param["domicilio"].'",';
        $json .= '"cedulas":"'.$param["cedula"].'",';
        $json .= '"libro":"'.$param["libro"].'",';
        $json .= '"fechaExp":"'.$param["fechaExp"].'",';
        $json .= '"autoridad":"'.$param["autoridad"].'",';
        $json .= '"curp":"'.$param["curp"].'",';
        $json .= '"foja":"'.$param["foja"].'",';
        $json .= '"estatusCedula":"'.$param["estatusCedula"].'",';
        $json .= '"numEmpleado":"'.$param["numEmp"].'",';
        $json .= '"idJuzgado":"'.$param["cveAdcripcion"].'",';
        $json .= '"fechaInicio":"",';
        $json .= '"fechaFin":""'; 
        $json .= "}";
        
        $clienteCedulas =  new CedulasCliente();
        $responseCedula=$clienteCedulas->obtenerCedulas($json);
        //$responseCedula=$clienteCedulas->consultaCedulas($json);
        echo $responseCedula;   
    }
    
    public function registroCedulas($param){
        $json ='{';
	$json .='"nombre": "'.$param["nombre"].'",';
	$json .='"domicilio": "'.$param["domicilio"].'",';
	$json .='"cedulas": "'.$param["cedulas"].'",';
	$json .='"libro": "'.$param["libro"].'",';
	$json .='"fechaExp": "'.$param["fechaExp"].'",';
	$json .='"autoridad": "'.$param["autoridad"].'",';
	$json .='"curp": "'.$param["curp"].'",';
	$json .='"foja": "'.$param["foja"].'",';
	$json .='"estatusCedula": "'.$param["estatusCedula"].'",';
	$json .='"numEmpleado": "'.$param["numEmp"].'",';
	$json .='"idJuzgado": "'.$param["cveAdscripcion"].'"';
        $json .='}';
        //var_dump($json);
        $clienteCedulas =  new CedulasCliente();
        $responseCedula=$clienteCedulas->registraCedulas($json);
        echo $responseCedula;
    }
    
    public function modificarCedulas($param){
        
        $json ='{';
        $json .='"idCedulasProf": "'.$param["idCedula"].'",';
	$json .='"nombre": "'.$param["nombre"].'",';
	$json .='"domicilio": "'.$param["domicilio"].'",';
	$json .='"cedulas": "'.$param["cedulas"].'",';
	$json .='"libro": "'.$param["libro"].'",';
	$json .='"fechaExp": "'.$param["fechaExp"].'",';
	$json .='"autoridad": "'.$param["autoridad"].'",';
	$json .='"curp": "'.$param["curp"].'",';
	$json .='"foja": "'.$param["foja"].'",';
	$json .='"estatusCedula": "'.$param["estatusCedula"].'",';
	$json .='"numEmpleado": "'.$param["numEmp"].'",';
	$json .='"idJuzgado": "'.$param["cveAdscripcion"].'"';
        $json .='}';
        //var_dump($json);
        $clienteCedulas =  new CedulasCliente();
        $responseCedula=$clienteCedulas->modificarCedulas($json);
        echo $responseCedula;
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

    public function fechaMysql($fecha) {
        list($dia, $mes, $year) = explode("/", $fecha);
        //var_dump($fecha);
        return $year . "-" . $mes . "-" . $dia;
    }

    private function fechaNormal($fecha) {
        list($dia, $mes, $year) = explode("/", $fecha);
        return $year . "-" . $mes . "-" . $dia;
    }
}

@$idCedula = $_POST["idCedula"];
@$numRegistro = $_POST["numReg"];
@$fechaRegistro = $_POST["fechaRegistro"];

@$nombre = $_POST["nombre"];
@$domicilio = $_POST["domicilio"];
@$cedulas = $_POST["cedulas"];
@$libro = $_POST["libro"];
@$fechaExp = $_POST["fechaExp"];
@$autoridad = $_POST["autoridad"];
@$curp = $_POST["curp"];
@$foja = $_POST["foja"];
@$estatusCedula = $_POST["estatusCedula"];
@$numEmpleado = $_POST["numEmpleado"];
@$cveAdscripcion = $_POST["cveAdscripcion"];

@$activo = $_POST["activo"];
@$accion = $_POST["accion"];

$cedulasFacade = new CedulaprofesionalFacade();

@$fechaInicio = $cedulasFacade->fechaMysql($_POST['fechaInicio']);
@$fechaFin = $cedulasFacade->fechaMysql($_POST['fechaFin']);;

@$fechaRegistro = $cedulasFacade->fechaMysql($fechaRegistro);
@$fechaExp = $cedulasFacade->fechaMysql($fechaExp);

//params
$param = array();
@$param["idCedula"] = $idCedula;
@$param["nombre"] = $nombre;
@$param["domicilio"] = $domicilio;
@$param["cedula"] = $cedulas;
@$param["libro"] = $libro;
//@$param["fechaExp"] = $fechaExp;
@$param["autoridad"] = $autoridad;
@$param["curp"] = $curp;
@$param["foja"] = $foja;
@$param["estatusCedula"] = $estatusCedula;
@$param["cveAdcripcion"] = $cveAdscripcion;

@$param["numReg"] = $numRegistro;
@$param["fechaRegistro"] = $fechaRegistro;
@$param["activo"] = $activo;

//Acciones
if ($accion == "consultar") {
    @$param["fechaExp"] = '';
    $rs = $cedulasFacade->selectCedulas($param);
    echo $rs;
}
if ($accion == "consultaLibro") {
     $paramL = array();
    @$paramL["activo"] = $activo;
    @$paramL["idCedula"] = $idCedula;
    @$paramL["cveAdcripcion"] = $cveAdscripcion;
if($cedulas != ""){
    @$paramL["cedula"] = $cedulas;
    @$paramL["fechaInicio"] = "";
    @$paramL["fechaFin"] = "";
}else{
    @$paramL["cedula"] = $cedulas;
    @$paramL["fechaInicio"] = $fechaInicio;
    @$paramL["fechaFin"] = $fechaFin;
}
    $rs = $cedulasFacade->selectCedulasLibro($paramL);
    echo $rs;
}
if (($accion == "guardar") && ($idCedula == "")) {
    $param = array();
    @$param["nombre"] = $nombre;
    @$param["domicilio"] = $domicilio;
    @$param["cedulas"] = $cedulas;
    @$param["libro"] = $libro;
    @$param["fechaExp"] = $fechaExp;
    @$param["autoridad"] = $autoridad;
    @$param["curp"] = $curp;
    @$param["foja"] = $foja;
    @$param["estatusCedula"] = $estatusCedula;
    @$param["numEmp"] = $numEmpleado;
    @$param["cveAdscripcion"] = $cveAdscripcion;
    
    $rs = $cedulasFacade->registroCedulas($param);
    echo $rs;
} else if (($accion == "guardar") && ($idCedula != "")) {
    //var_dump($param);
    $param = array();
    @$param["idCedula"] = $idCedula;
    @$param["nombre"] = $nombre;
    @$param["domicilio"] = $domicilio;
    @$param["cedulas"] = $cedulas;
    @$param["libro"] = $libro;
    @$param["fechaExp"] = $fechaExp;
    @$param["autoridad"] = $autoridad;
    @$param["curp"] = $curp;
    @$param["foja"] = $foja;
    @$param["estatusCedula"] = $estatusCedula;
    @$param["numEmp"] = $numEmpleado;
    @$param["cveAdscripcion"] = $cveAdscripcion;
        
    $rs = $cedulasFacade->modificarCedulas($param);
    echo $rs;
}
?>