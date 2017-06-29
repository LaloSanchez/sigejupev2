<?php

session_start();

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuaciones/ActuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/actuaciones/ActuacionesDAO.Class.php");

//include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
//include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposcarpetas/TiposcarpetasDAO.Class.php");
//
//include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/promoventesactuaciones/PromoventesactuacionesDTO.Class.php");
//include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/promoventesactuaciones/PromoventesactuacionesDAO.Class.php");
//
//include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/antecedesactuaciones/AntecedesactuacionesDTO.Class.php");
//include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/antecedesactuaciones/AntecedesactuacionesDAO.Class.php");

include_once(dirname(__FILE__). "/../../../controladores/sigejupe/libros/librosElectronicosController.php");


class LibroPromocionesFacade {
    private $proveedor;

    public function __construct() {
        
    }
    
    public function consultarPromociones($ActuacionesDto, $param) {
        $PromocionesController = new librosController();
        $rsPromociones = $PromocionesController->libroPromociones($ActuacionesDto, $param);
        return $rsPromociones;
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

@$idActuacion = $_POST["idActuacion"];
@$numActuacion = $_POST["numActuacion"];
@$aniActuacion = $_POST["aniActuacion"];
@$cveTipoActuacion = $_POST["cveTipoActuacion"];
@$idReferencia = $_POST["idReferencia"];
@$numero = $_POST["numero"];
@$anio = $_POST["anio"];
@$noFojas = $_POST["noFojas"];
@$cveTipoCarpeta = $_POST["cveTipoCarpeta"];
@$cveJuzgado = $_POST["cveJuzgado"];
@$cveUsuario = $_POST['cveUsuario'];
@$activo = $_POST['activo'];

@$fechaInicio = $_POST["fechaInicio"];
@$fechaFin = $_POST["fechaFin"];
@$accion = $_POST["accion"];

$libroPromocionesFacade = new LibroPromocionesFacade();
//@$fechaInicio = $libroPromocionesFacade->fechaMysql($fechaInicio);
//@$fechaFin = $libroPromocionesFacade->fechaMysql($fechaFin);
$ActuacionesDto = new ActuacionesDTO();

$ActuacionesDto->setActivo($activo);
$ActuacionesDto->setCveTipoActuacion($cveTipoActuacion);
$ActuacionesDto->setCveJuzgado($cveJuzgado);

$param = array();
@$param["fechaDesde"] = $fechaInicio;
@$param["fechaHasta"] = $fechaFin;

if ($accion == "consultar") {
    $rs = $libroPromocionesFacade->consultarPromociones($ActuacionesDto, $param);
    echo $rs;
}

?>




