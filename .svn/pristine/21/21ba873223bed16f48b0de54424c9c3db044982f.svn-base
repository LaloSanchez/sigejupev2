<?php

session_start();

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/amparos/AmparosDTO.Class.php");
//include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/amparos/AmparosDAO.Class.php");

include_once(dirname(__FILE__). "/../../../controladores/sigejupe/libros/librosElectronicosController.php");

class LibroAmparosFacade {
    private $proveedor;

    public function __construct() {
        
    }
    
    public function consultaLibroAmparos($amparosDto, $param) {
        $AmparosController = new librosController();
        $rsAmparos = $AmparosController->libroAmparos($amparosDto, $param);
        return $rsAmparos;
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
        return $year . "-" . $mes . "-" . $dia;
    }

    private function fechaNormal($fecha) {
        list($dia, $mes, $year) = explode("/", $fecha);
        return $year . "-" . $mes . "-" . $dia;
    }
}

@$cveJuzgado = $_POST["cveJuzgado"];
@$activo = $_POST['activo'];

@$fechaInicio = $_POST["fechaInicio"];
@$fechaFin = $_POST["fechaFin"];
@$accion = $_POST["accion"];
@$idAmparo = $_POST["idAmparo"];

$libroAmparosFacade = new LibroAmparosFacade();
@$fechaInicio = $libroAmparosFacade->fechaMysql($fechaInicio);
@$fechaFin = $libroAmparosFacade->fechaMysql($fechaFin);
$amparosDto = new AmparosDTO();

$amparosDto->setActivo($activo);
//$carpetasJudicialesDto->setCveTipoActuacion($cveTipoActuacion);
$amparosDto->setCveJuzgado($cveJuzgado);
$amparosDto->setIdAmparo($idAmparo);

$param = array();
@$param["fechaDesde"] = $fechaInicio;
@$param["fechaHasta"] = $fechaFin;

if ($accion == "consultar") {
//    var_dump($amparosDto);
    $rs = $libroAmparosFacade->consultaLibroAmparos($amparosDto, $param);
    
    echo $rs;
}
//if ($accion == "consultarDetalle") {
////    var_dump($amparosDto);
//    $rs = $libroAmparosFacade->consultaLibroAmparos($amparosDto, $param);
//    
//    echo $rs;
//}

?>