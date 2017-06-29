<?php

/**
 * Class: PeriodosGratisConsultas - PeriodosGratisConsultas.Class.php 
 *
 * @author Esaud Israel <@e_israel> on Feb 9, 2016 5:31:21 PM
 * @version 1.0
 */

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {


include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/periodosgratisconsultas/PeriodosGratisConsultasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/periodosgratisconsultas/PeriodosGratisConsultasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");

class PeriodosGratisConsultasFacade {
    
    private $proveedor;
    
    public function __construct() {}
    
    public function validarPeriodosGratisConsultas($periodosGratisConsultas){
        
        $periodosGratisConsultas->setIdPeriodoGratisConsulta(strtoupper(str_ireplace("'", "" , 
              trim(utf8_decode(
                (phpversion() <= 5.5) 
                    ? mb_strtoupper($periodosGratisConsultas->getIdPeriodoGratisConsulta(),"utf8")
                    : strtoupper($periodosGratisConsultas->getIdPeriodoGratisConsulta())
                ))
            )));
        
        $periodosGratisConsultas->setDetalle(strtoupper(str_ireplace("'", "" , 
              trim(utf8_decode(
                (phpversion() <= 5.5) 
                    ? mb_strtoupper($periodosGratisConsultas->getDetalle(),"utf8")
                    : strtoupper($periodosGratisConsultas->getDetalle())
                ))
            )));
        
        $periodosGratisConsultas->setInicioPeriodoGratis(strtoupper(str_ireplace("'", "" , 
              trim(utf8_decode(
                (phpversion() <= 5.5) 
                    ? mb_strtoupper($periodosGratisConsultas->getInicioPeriodoGratis(),"utf8")
                    : strtoupper($periodosGratisConsultas->getInicioPeriodoGratis())
                ))
            )));
        
        if($this->esFecha($periodosGratisConsultas->getInicioPeriodoGratis())){
            $periodosGratisConsultas->setInicioPeriodoGratis($this->fechaMysql($periodosGratisConsultas->getInicioPeriodoGratis()));
        }
        
        $periodosGratisConsultas->setFinPeriodoGratis(strtoupper(str_ireplace("'", "" , 
              trim(utf8_decode(
                (phpversion() <= 5.5) 
                    ? mb_strtoupper($periodosGratisConsultas->getFinPeriodoGratis(),"utf8")
                    : strtoupper($periodosGratisConsultas->getFinPeriodoGratis())
                ))
            )));
        
        if($this->esFecha($periodosGratisConsultas->getFinPeriodoGratis())){
            $periodosGratisConsultas->setFinPeriodoGratis($this->fechaMysql($periodosGratisConsultas->getFinPeriodoGratis()));
        }
        
        $periodosGratisConsultas->setActivo(strtoupper(str_ireplace("'", "" , 
              trim(utf8_decode(
                (phpversion() <= 5.5) 
                    ? mb_strtoupper($periodosGratisConsultas->getActivo(),"utf8")
                    : strtoupper($periodosGratisConsultas->getActivo())
                ))
            )));
        
        $periodosGratisConsultas->setFechaActualizacion(strtoupper(str_ireplace("'", "" , 
              trim(utf8_decode(
                (phpversion() <= 5.5) 
                    ? mb_strtoupper($periodosGratisConsultas->getFechaActualizacion(),"utf8")
                    : strtoupper($periodosGratisConsultas->getFechaActualizacion())
                ))
            )));
        
        if($this->esFecha($periodosGratisConsultas->getFechaActualizacion())){
            $periodosGratisConsultas->setFechaActualizacion($this->fechaMysql($periodosGratisConsultas->getFechaActualizacion()));
        }
        
        $periodosGratisConsultas->setFechaRegistro(strtoupper(str_ireplace("'", "" , 
              trim(utf8_decode(
                (phpversion() <= 5.5) 
                    ? mb_strtoupper($periodosGratisConsultas->getFechaRegistro(),"utf8")
                    : strtoupper($periodosGratisConsultas->getFechaRegistro())
                ))
            )));
        
        if($this->esFecha($periodosGratisConsultas->getFechaRegistro())){
            $periodosGratisConsultas->setFechaRegistro($this->fechaMysql($periodosGratisConsultas->getFechaRegistro()));
        }
        
        return $periodosGratisConsultas;
    }
    
    public function selectPeriodosGratisConsultas($periodosGratisConsultas){
        $periodosGratisConsultas = $this->validarPeriodosGratisConsultas($periodosGratisConsultas);
        $periodosGratisConsultasController = new PeriodosGratisConsultasController();
        $periodosGratisConsultas = $periodosGratisConsultasController->selectPeriodosGratisConsultas($periodosGratisConsultas);
        if( $periodosGratisConsultas != '' )
        {
            $dtoToJson = new DtoToJson($periodosGratisConsultas);
            return $dtoToJson->toJson('RESULTADOS DE LA CONSULTA');
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array('totalCount' => 0, "text" => 'SIN RESULTADOS A MOSTRAR'));
    }
    
    public function insertPeriodosGratisConsultas($periodosGratisConsultas){
        $periodosGratisConsultas = $this->validarPeriodosGratisConsultas($periodosGratisConsultas);
        $periodosGratisConsultasController = new PeriodosGratisConsultasController();
        $periodosGratisConsultas = $periodosGratisConsultasController->insertPeriodosGratisConsultas($periodosGratisConsultas);
        if( $periodosGratisConsultas != '')
        {
            $dtoToJson = new DtoToJson($periodosGratisConsultas);
            return $dtoToJson->toJson('REGISTRO REALIZADO DE FORMA CORRECTA');
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array( 'totalCount' => '0', 'text' => 'OCURRI� UN ERROR AL REALIZAR EL REGISTRO'));
    }
    
    public function updatePeriodosGratisConsultas($periodosGratisConsultas){
        $periodosGratisConsultas = $this->validarPeriodosGratisConsultas($periodosGratisConsultas);
        $periodosGratisConsultasController = new PeriodosGratisConsultasController();
        $periodosGratisConsultas = $periodosGratisConsultasController->updatePeriodosGratisConsultas($periodosGratisConsultas);
        if( $periodosGratisConsultas != '' )
        {
            $dtoToJson = new DtoToJson($periodosGratisConsultas);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode( array('totalCount' => 0, 'text' => 'OCURRI� UN ERROR AL REALIZAR LA ACTUALIZACION'));
    }
    
    public function deletePeriodosGratisConsultas($periodosGratisConsultas){
        $periodosGratisConsultas = $this->validarPeriodosGratisConsultas($periodosGratisConsultas);
        $periodosGratisConsultasController = new PeriodosGratisConsultasController();
        $periodosGratisConsultas = $periodosGratisConsultasController->deletePeriodosGratisConsultas($periodosGratisConsultas);
        if( $periodosGratisConsultas )
        {
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode( array('totalCount' => 0,'text' => 'REGISTRO ELIMINADO DE FORMA CORRECTA'));
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode( array('totalCount' => 0, 'text' => 'OCURRI� UN ERROR AL REALIZAR LA ELIMINACI�N'));
    }
    
    private function esFecha($fecha) {
        return (preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $fecha)) ? TRUE : FALSE;
    }
    
    /*
    private function esFechaMysql($fecha) {
        return (preg_match('/^\d{4}\-\d{1,2}\-\d{1,2}$/', $fecha)) ? TRUE : FALSE;
    }
     * 
     */
    
    private function fechaMysql($fecha) {
        list($dia, $mes, $year) = explode("/", $fecha);
        return $year . "-" . $mes . "-" . $dia;
    }
    
    /*
    private function fechaNormal($fecha) {
        list($dia, $mes, $year) = explode("/", $fecha);
        return $year . "-" . $mes . "-" . $dia;
    }
     * 
     */
}

if($_POST):
    $idPeriodoGratisConsulta = $_POST['idPeriodoGratisConsulta'];
    $detalle = $_POST['detalle'];
    $inicioPeriodoGratis = $_POST['inicioPeriodoGratis'];
    $finPeriodoGratis = $_POST['finPeriodoGratis'];
    $activo = $_POST['activo'];
    $fechaActualizacion = $_POST['fechaActualizacion'];
    $fechaRegistro = $_POST['fechaRegistro'];
endif;

$periodosGratisConsultasFacade = new PeriodosGratisConsultasFacade();
$periodosGratisConsultasDTO = new PeriodosGratisConsultasDTO();

$periodosGratisConsultasDTO->setIdPeriodoGratisConsulta($idPeriodoGratisConsulta);
$periodosGratisConsultasDTO->setDetalle($detalle);
$periodosGratisConsultasDTO->setInicioPeriodoGratis($inicioPeriodoGratis);
$periodosGratisConsultasDTO->setFinPeriodoGratis($finPeriodoGratis);
$periodosGratisConsultasDTO->setActivo($activo);
$periodosGratisConsultasDTO->setFechaActualizacion($fechaActualizacion);
$periodosGratisConsultasDTO->setFechaRegistro($fecharegistro);


if( ($accion == 'guardar') /* && ($idPeriodoGratisConsulta == '') */){
    $periodosGratisConsultasDTO = $periodosGratisConsultasFacade->insertPeriodosGratisConsultas($periodosGratisConsultasDTO);
    echo $periodosGratisConsultasDTO;
} else if( ($accion == 'actualizar') && ($idPeriodoGratisConsulta != '')){
    $periodosGratisConsultasDTO = $periodosGratisConsultasFacade->updatePeriodosGratisConsultas($periodosGratisConsultasDTO);
    echo $periodosGratisConsultasDTO;
} else if( ($accion == 'baja') && ($idPeriodoGratisConsulta != '') ){
    $periodosGratisConsultasDTO = $periodosGratisConsultasFacade->deletePeriodosGratisConsultas($periodosGratisConsultasDTO);
    echo $periodosGratisConsultasDTO;
} else if( ($accion == 'seleccionar') && ($idPeriodoGratisConsulta != '') ){
    $periodosGratisConsultasDTO = $periodosGratisConsultasFacade->selectPeriodosGratisConsultas($periodosGratisConsultasDTO);
    echo $periodosGratisConsultasDTO;
} else {
    $periodosGratisConsultasDTO = $periodosGratisConsultasFacade->selectPeriodosGratisConsultas($periodosGratisConsultasDTO);
    echo $periodosGratisConsultasDTO;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>