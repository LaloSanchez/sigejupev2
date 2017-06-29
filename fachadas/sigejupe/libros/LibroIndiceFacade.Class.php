<?php

session_start();

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");

include_once(dirname(__FILE__). "/../../../controladores/sigejupe/libros/librosElectronicosController.php");


class LibroIndiceFacade {
    private $proveedor;

    public function __construct() {
        
    }
    
    public function consultaLibroIndice($carpetasJudicialesDto, $param) {
        $IndiceController = new librosController();
        $rsIndice = $IndiceController->libroIndice($carpetasJudicialesDto, $param);
        return $rsIndice;
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

@$cveTipoCarpeta = $_POST["cveTipoCarpeta"];
@$cveJuzgado = $_POST["cveJuzgado"];
@$activo = $_POST['activo'];
@$letraAp = $_POST["letraAp"];

@$fechaInicio = $_POST["fechaInicio"];
@$fechaFin = $_POST["fechaFin"];
@$accion = $_POST["accion"];

$libroIndiceFacade = new LibroIndiceFacade();
@$fechaInicio = $libroIndiceFacade->fechaMysql($fechaInicio);
@$fechaFin = $libroIndiceFacade->fechaMysql($fechaFin);
$carpetasJudicialesDto = new CarpetasjudicialesDTO();

$carpetasJudicialesDto->setActivo($activo);
//$carpetasJudicialesDto->setCveTipoActuacion($cveTipoActuacion);
$carpetasJudicialesDto->setCveJuzgado($cveJuzgado);

$param = array();
@$param["fechaDesde"] = $fechaInicio;
@$param["fechaHasta"] = $fechaFin;
@$param["letraAp"] = $letraAp;

if ($accion == "consultar") {
    $rs = $libroIndiceFacade->consultaLibroIndice($carpetasJudicialesDto, $param);
    echo $rs;
}

?>