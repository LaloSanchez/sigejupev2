<?php

/*
*************************************************
*FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
*Copyright 2009-2015 FACADES
* Licensed under the MIT license 
* Autor: *
* Departamento de Desarrollo de Software
* Subdireccion de Ingenieria de Software
* Direccion de Teclogias de Informacion
* Poder Judicial del Estado de Mexico
*************************************************
*/

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {

date_default_timezone_set('America/Mexico_City');
ini_set('max_execution_time', 500);
error_reporting(E_ALL);
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/programacionsalas/ProgramacionsalasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/programacionsalas/ProgramacionsalasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/programaciones/ProgramacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/programaciones/ProgramacionesController.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");
class ProgramacionsalasFacade {
    private $proveedor;
    public function __construct() {
    }
    public function validarProgramacionsalas($ProgramacionsalasDto){
        $ProgramacionsalasDto->setIdDisponibilidadSala(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ProgramacionsalasDto->getIdDisponibilidadSala(),"utf8"):strtoupper($ProgramacionsalasDto->getIdDisponibilidadSala()))))));
        if($this->esFecha($ProgramacionsalasDto->getIdDisponibilidadSala())){
            $ProgramacionsalasDto->setIdDisponibilidadSala($this->fechaMysql($ProgramacionsalasDto->getIdDisponibilidadSala()));
        }
        $ProgramacionsalasDto->setFechaInicio(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ProgramacionsalasDto->getFechaInicio(),"utf8"):strtoupper($ProgramacionsalasDto->getFechaInicio()))))));
            if($this->esFecha($ProgramacionsalasDto->getFechaInicio())){
            $ProgramacionsalasDto->setFechaInicio($this->fechaMysql($ProgramacionsalasDto->getFechaInicio()));
        }
        $ProgramacionsalasDto->setFechaTermino(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ProgramacionsalasDto->getFechaTermino(),"utf8"):strtoupper($ProgramacionsalasDto->getFechaTermino()))))));
        if($this->esFecha($ProgramacionsalasDto->getFechaTermino())){
            $ProgramacionsalasDto->setFechaTermino($this->fechaMysql($ProgramacionsalasDto->getFechaTermino()));
        }
        $ProgramacionsalasDto->setCveSala(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ProgramacionsalasDto->getCveSala(),"utf8"):strtoupper($ProgramacionsalasDto->getCveSala()))))));
        if($this->esFecha($ProgramacionsalasDto->getCveSala())){
            $ProgramacionsalasDto->setCveSala($this->fechaMysql($ProgramacionsalasDto->getCveSala()));
        }
        $ProgramacionsalasDto->setIdProgramacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ProgramacionsalasDto->getIdProgramacion(),"utf8"):strtoupper($ProgramacionsalasDto->getIdProgramacion()))))));
            if($this->esFecha($ProgramacionsalasDto->getIdProgramacion())){
        $ProgramacionsalasDto->setIdProgramacion($this->fechaMysql($ProgramacionsalasDto->getIdProgramacion()));
        }
        return $ProgramacionsalasDto;
    }
    public function selectProgramacionsalas($ProgramacionsalasDto){
        $ProgramacionsalasDto=$this->validarProgramacionsalas($ProgramacionsalasDto);
        $ProgramacionsalasController = new ProgramacionsalasController();
        $ProgramacionsalasDto = $ProgramacionsalasController->selectProgramacionsalas($ProgramacionsalasDto);
        if($ProgramacionsalasDto!=""){
            $dtoToJson = new DtoToJson($ProgramacionsalasDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
    }
    public function insertProgramacionsalas($ProgramacionsalasDto){
        $ProgramacionsalasDto=$this->validarProgramacionsalas($ProgramacionsalasDto);
        $ProgramacionsalasController = new ProgramacionsalasController();
        $ProgramacionsalasDto = $ProgramacionsalasController->insertProgramacionsalas($ProgramacionsalasDto);
        if($ProgramacionsalasDto!=""){
            $dtoToJson = new DtoToJson($ProgramacionsalasDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }
    public function updateProgramacionsalas($ProgramacionsalasDto){
        $ProgramacionsalasDto=$this->validarProgramacionsalas($ProgramacionsalasDto);
        $ProgramacionsalasController = new ProgramacionsalasController();
        $ProgramacionsalasDto = $ProgramacionsalasController->updateProgramacionsalas($ProgramacionsalasDto);
        if($ProgramacionsalasDto!=""){
            $dtoToJson = new DtoToJson($ProgramacionsalasDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }
    public function deleteProgramacionsalas($ProgramacionsalasDto){
        $ProgramacionsalasDto=$this->validarProgramacionsalas($ProgramacionsalasDto);
        $ProgramacionsalasController = new ProgramacionsalasController();
        $ProgramacionsalasDto = $ProgramacionsalasController->deleteProgramacionsalas($ProgramacionsalasDto);
        if($ProgramacionsalasDto==true){
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount"=>"0","text"=>"REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
    }
    
    public function consultarProgramacionSalas($ProgramacionesDto, $salas){
        $ProgramacionsalasController = new ProgramacionsalasController();
        $ProgramacionsalasDto = $ProgramacionsalasController->obtenerProgramacionsalas($ProgramacionesDto, $salas);
//        print_r($ProgramacionsalasDto);
        if($ProgramacionsalasDto!=""){
            $dtoToJson = new DtoToJson($ProgramacionsalasDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            //return json_encode($ProgramacionsalasDto);
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
    }
    public function reporteProgramacionSalas($programacionesDto, $programacionSalasDto){
        $ProgramacionsalasController = new ProgramacionsalasController();
        $programacionSalas = $ProgramacionsalasController->reporteProgramacionSalas($programacionesDto, $programacionSalasDto);
        if(count($programacionSalas) > 0){
            $jsonDto = "{\"totalCount\":\"" . count($programacionSalas) . "\",\"mensaje\":\"RESULTADOS DE LA CONSULTA\",\"data\":[";
            foreach ($programacionSalas as $dto) {
                $jsonDto.=json_encode($dto);
                $jsonDto.= ",";
            }
            $jsonDto = substr($jsonDto, 0, (strlen($jsonDto) - 1));
            $jsonDto.="]}";
            return $jsonDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"NO SE ENCONTRARON DATOS"));
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



@$idDisponibilidadSala=$_POST["idDisponibilidadSala"];
@$fechaInicio=$_POST["fechaInicio"];
@$fechaTermino=$_POST["fechaTermino"];
@$cveSala=$_POST["cveSala"];
@$idProgramacion=$_POST["idProgramacion"];
@$accion=$_POST["accion"];
@$anio = $_POST["anio"];
@$cveMes = $_POST["cveMes"];
@$cveJuzgado = $_POST["cveJuzgado"];

$programacionsalasFacade = new ProgramacionsalasFacade();
$programacionsalasDto = new ProgramacionsalasDTO();

$programacionsalasDto->setIdDisponibilidadSala($idDisponibilidadSala);
$programacionsalasDto->setFechaInicio($fechaInicio);
$programacionsalasDto->setFechaTermino($fechaTermino);
$programacionsalasDto->setCveSala($cveSala);
$programacionsalasDto->setIdProgramacion($idProgramacion);

if( ($accion == "guardar") ){
    if ( isset($_POST['valorInput']) ){
        
        $programacionSalasController = new ProgramacionsalasController();
        //$bandera = false;
        //$arrBandera = array();
        //$idProgramacionesInsert = array();
        //$idProgramacionesUpdate = array();
        //$tipoRegistro = "";
        //$registrosInsert = "";
        //$registrosUpdate = "";
        $datos = array();
        for ( $n = 0; $n < count($_POST['valorInput']); $n++ ) {
            $campos = explode("_", $_POST['valorInput'][$n]);
            $id = $campos[0];
            $horaInicio = $_POST['horaInicio'][$n];
            $horaTermino = $_POST['horaTermino'][$n];
            $fechaInicio = $campos[1] . " " . $horaInicio;
            $fechaTermino = $campos[2] . " " . $horaTermino;
            $idSala = $campos[3];
            $idProgramacion = $campos[4];
            $idHorario = $campos[5];
            $idCondicion = $campos[6];
            $datos[] = array(
                "id" => $id,
                "fechaInicio" => $fechaInicio,
                "fechaTermino" => $fechaTermino,
                "idSala" => $idSala,
                "idProgramacion" => $idProgramacion,
                "idHorario" => $idHorario,
                "idCondicion" => $idCondicion
            );
            /*$dto[$n] = new ProgramacionsalasDTO();
            $dto[$n]->setIdDisponibilidadSala($id);
            $dto[$n]->setFechaInicio($fechaInicio);
            $dto[$n]->setFechaTermino($fechaTermino);
            $dto[$n]->setCveSala($idSala);
            $dto[$n]->setIdProgramacion($idProgramacion);
            $dto[$n]->setCveCondicion($idCondicion);
            $dto[$n]->setCveHorario($idHorario);*/
            /*
             * Verificar si el registro ya existe en la base de datos, si no existe
             * se insertar�, si existe, se actualiza
             */
            //print_r($datos);
            /*if ( $id == 0 ) {
                $tipoRegistro = "insercion";
                $dtoInsert = $programacionsalasFacade->insertProgramacionsalas($dto[$n]);
                $programaciones = json_decode($dtoInsert);
                if ( $dtoInsert ) {
                    $bandera = true;
                    $arrBandera[] = $bandera;
                    $idProgramacionesInsert[] = $programaciones->data[0]->idDisponibilidadSala;
                } else {
                    $bandera = false;
                    $arrBandera[] = $bandera;
                }
            } else if ( $id > 0 ) {
                $tipoRegistro = "actualizacion";
                $programacionsalasDto = $programacionsalasFacade->updateProgramacionsalas($dto[$n]);
                $programaciones = json_decode($programacionsalasDto);
                if ( $programacionsalasDto ) {
                    $bandera = true;
                    $arrBandera[] = $bandera;
                    $idProgramacionesUpdate[] = $programaciones->data[0]->idDisponibilidadSala;
                } else {
                    $bandera = false;
                    $arrBandera[] = $bandera;
                }
            }*/
        }
        //$programacionSalasController = new ProgramacionsalasController();
        $resultado = $programacionSalasController->programacionSalasManual($datos);
        if($resultado){
            $jsonDto = new Encode_JSON();
            echo $jsonDto->encode(array("totalCount"=>"1","text"=>"DATOS GUARDADOS CORRECTAMENTE"));
        } else {
            $jsonDto = new Encode_JSON();
            echo $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL GUARDAR LOS DATOS"));
        }
        /*if (in_array(false, $arrBandera) ) {
            $jsonDto = new Encode_JSON();
            echo $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL GUARDAR LOS DATOS"));
        } else {
            //registrar en bitacora la insercion realizada
            $bitacoramovimientosDto = new BitacoramovimientosDTO();
            if ( $tipoRegistro == "insercion" ) {
                $registrosInsert = json_encode($idProgramacionesInsert);
                $cveAccion = 17;
                $descripcion = "INSERT tabla tblprogramacionsalas registros: " . $registrosInsert;
            } else if ( $tipoRegistro == "actualizacion" ){
                $registrosUpdate = json_encode($idProgramacionesUpdate);
                $cveAccion = 18;
                $descripcion = "UPDATE tabla tblprogramacionsalas registros: " . $registrosUpdate;
            }
            $fecha = date("Y-m-d H:i:s");
            $bitacoramovimientosDto->setCveAccion($cveAccion);
            $bitacoramovimientosDto->setFechaMovimiento($fecha);
            $bitacoramovimientosDto->setObservaciones($descripcion);
            $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
            $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
            $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
            $controllerBitacora = new BitacoramovimientosController();
            $insertarBitacora = $controllerBitacora->insertBitacoramovimientos($bitacoramovimientosDto);
            $jsonDto = new Encode_JSON();
            echo $jsonDto->encode(array("totalCount"=>"1","text"=>"DATOS GUARDADOS CORRECTAMENTE"));
        }*/
    } else {
        $jsonDto = new Encode_JSON();
        echo $jsonDto->encode(array("totalCount"=>"0","text"=>"NO SE ENVIO INFORMACION"));
    }
    
} else if(($accion=="guardar") && ($idDisponibilidadSala!="")){
    $programacionsalasDto=$programacionsalasFacade->updateProgramacionsalas($programacionsalasDto);
    echo $programacionsalasDto;
} else if($accion=="consultar"){
    $salasStr = "";
    //$salas = array();
    $programacionesDto = new ProgramacionesDTO();
    $programacionesDto->setIdProgramacion("");
    $programacionesDto->setAnio($anio);
    $programacionesDto->setCveJuzgado($cveJuzgado);
    $programacionesDto->setCveMes($cveMes);
    $salas = (isset($_POST['cveSala']) && count($_POST['cveSala']) > 0 && $_POST['cveSala'] != "") ? $_POST['cveSala'] : null;
    //var_dump($salas);
    //echo "salas: " . count($salas);
    if(count($salas) > 0 ){
        $salasStr = implode(",", $salas);
    }
    //var_dump($salas);
//    print_r($programacionesDto);
    $programacionsalasDto=$programacionsalasFacade->consultarProgramacionSalas($programacionesDto, $salasStr);
    echo $programacionsalasDto;
} else if( ($accion == "baja") ){
    $banderaSalas = false;
    $bandera = array();
    $registros = array();
    //print_r($_POST);
    if (isset($_POST['eliminar'])){
        for ($n = 0; $n < count($_POST['eliminar']); $n ++) {
            $id = $_POST['eliminar'][$n];
            $programacionessalasDto = new ProgramacionsalasDTO();
            $programacionessalasDto->setIdDisponibilidadSala($id);
            $programacionSalas = new ProgramacionsalasController();
            $existe = $programacionSalas->selectProgramacionsalas($programacionessalasDto);
            if ($existe) {
                $eliminar = $programacionSalas->deleteProgramacionsalas($programacionessalasDto);
                if ($eliminar) {
                    $bandera[] = true;
                    $registros[] = $id;
                } else {
                    $bandera[] = false;
                }
            } else {
                $bandera[] = false;
            }
        }
        if (in_array(false, $bandera)) {
            $jsonDto = new Encode_JSON();
            echo $jsonDto->encode(array("totalCount"=>"0","text"=>"ERROR AL BORRAR LOS DATOS"));
        } else {
            $jsonDto = new Encode_JSON();
            echo $jsonDto->encode(array("totalCount"=>"1","text"=>"DATOS BORRADOS CORRECTAMENTE"));
            //Guardar en bit�cora cuando se eliminen logicamente registros en cat_programacionsalas
            $registrosEliminados = json_encode($registros);
            $fecha = date("Y-m-d H:i:s");
            $cveAccion = 20;
            $descripcion = "Borrado fisico de registros en tblprogramacionessalas id: " . $registrosEliminados;
            $bitacoramovimientosDto = new BitacoramovimientosDTO();
            $bitacoramovimientosDto->setCveAccion($cveAccion);
            $bitacoramovimientosDto->setFechaMovimiento($fecha);
            $bitacoramovimientosDto->setObservaciones($descripcion);
            $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
            //$bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
            //$bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
            $controllerBitacora = new BitacoramovimientosController();
            $insertarBitacora = $controllerBitacora->insertBitacoramovimientos($bitacoramovimientosDto);
        }
    }else{
        $jsonDto = new Encode_JSON();
        echo $jsonDto->encode(array("totalCount"=>"0","text"=>"LOS DATOS YA FUERON BORRADOS"));
    }
} else if( ($accion=="seleccionar") && ($idDisponibilidadSala!="") ){
    $programacionsalasDto=$programacionsalasFacade->selectProgramacionsalas($programacionsalasDto);
    echo $programacionsalasDto;
} else if($accion == "consultarReporteProgramacionSalas"){
    $programacionesDto = new ProgramacionesDTO();
    $programacionesDto->setAnio($_POST['anio']);
    $programacionesDto->setCveJuzgado($_POST['cveJuzgado']);
    $programacionesDto->setCveMes($_POST['cveMes']);
    
    $programacionSalasDto = new ProgramacionsalasDTO();
    if( isset($_POST['idSala']) && strlen($_POST['idSala']) > 0 ){
        $programacionSalasDto->setCveSala($_POST['idSala']);
    }
    if( isset($_POST['fechaInicio']) && strlen($_POST['fechaInicio']) > 0 ){
        $fechaInicioTmp = explode("/", $_POST['fechaInicio']);
        $fechaInicio = $fechaInicioTmp[2] . "-" . $fechaInicioTmp[1] . "-" . $fechaInicioTmp[0];
        $programacionSalasDto->setFechaInicio($fechaInicio);
    }
    if( isset($_POST['fechaFin']) && strlen($_POST['fechaFin']) > 0 ){
        $fechaFinTmp = explode("/", $_POST['fechaFin']);
        $fechaFin = $fechaFinTmp[2] . "-" . $fechaFinTmp[1] . "-" . $fechaFinTmp[0];
        $programacionSalasDto->setFechaTermino($fechaFin);
    }
    //$programacionSalasController = new ProgramacionsalasController();
    $datos = $programacionsalasFacade->reporteProgramacionSalas($programacionesDto, $programacionSalasDto);
    echo $datos;
    
} else if($accion == "exportar"){
    //echo "inicia";
    $content = $_POST['contenido'];
    $nombre = "../../../solicitudespdf/reporteProgramacionSalas.pdf";
    require_once(dirname(__FILE__) . '/../../../tribunal/pdf/html2pdf.class.php');
    try
    {
        $pdf = new HTML2PDF('P', 'A4', 'fr');
        $pdf->WriteHTML($content);
        $pdf->Output($nombre, 'F');
        echo $nombre;
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
} else if($accion == "borrarTodo"){
    //print_r($_POST);
    $programacionesDto = new ProgramacionesDTO();
    $programacionesDto->setAnio($_POST['anio']);
    $programacionesDto->setCveJuzgado($_POST['cveJuzgado']);
    $programacionesDto->setCveMes($_POST['cveMes']);
    $inicio = explode("/" ,$_POST['fechaInicial']);
    $fin = explode("/",$_POST['fechaFinal']);
    $fechaInicio = $inicio[2] . "-" . $inicio[1] . "-" . $inicio[0];
    $fechaFin = $fin[2] . "-" . $fin[1] . "-" . $fin[0];
    //var_dump($programacionesDto);
    if($fechaInicio > $fechaFin){
        $jsonDto = new Encode_JSON();
        echo $jsonDto->encode(array("totalCount"=>"0","text"=>"NO SE PUEDEN ELIMINAR LOS REGISTROS ENTRE LAS FECHAS SELECCIONADAS, FAVOR DE VERIFICAR"));
    } else {
        $programacionSalasDto = new ProgramacionsalasDTO();
        $programacionSalasDto->setCveSala($_POST['cveSala']);
        $programacionSalasDto->setFechaInicio($fechaInicio);
        $programacionSalasDto->setFechaTermino($fechaFin);
        //var_dump($programacionSalasDto);
        $programacionSalasController = new ProgramacionsalasController();
        $programacionesDto = $programacionSalasController->bajaProgramacionSalasManual($programacionesDto, $programacionSalasDto);
        echo $programacionesDto;
    }
} else if($accion == "guardarTodo"){
    $programacionesDto = new ProgramacionesDTO();
    $programacionesDto->setAnio($_POST['anio']);
    $programacionesDto->setCveJuzgado($_POST['cveJuzgado']);
    $programacionesDto->setCveMes($_POST['cveMes']);
    $inicio = explode("/" ,$_POST['fechaInicial']);
    $fin = explode("/",$_POST['fechaFinal']);
    $horaInicial = @$_POST['horaInicial'];
    $horaFinal = @$_POST['horaFinal'];
    $fInicio = $inicio[2] . "-" . $inicio[1] . "-" . $inicio[0];
    $fFin = $fin[2] . "-" . $fin[1] . "-" . $fin[0];
    $fechaInicio = $inicio[2] . "-" . $inicio[1] . "-" . $inicio[0] . " " . $horaInicial;
    $fechaFin = $fin[2] . "-" . $fin[1] . "-" . $fin[0] . " " . $horaFinal;
    
    if($fInicio > $fFin){
        $jsonDto = new Encode_JSON();
        echo $jsonDto->encode(array("totalCount"=>"0","text"=>"NO SE PUEDEN REGISTRAR LOS DATOS ENTRE LAS FECHAS SELECCIONADAS, FAVOR DE VERIFICAR"));
    } else {
        $programacionSalasDto = new ProgramacionsalasDTO();
        $programacionSalasDto->setCveSala($_POST['cveSala']);
        $programacionSalasDto->setFechaInicio($fechaInicio);
        $programacionSalasDto->setFechaTermino($fechaFin);
        $programacionSalasController = new ProgramacionsalasController();
        $programacionesDto = $programacionSalasController->programacionSalasManual($programacionesDto, $programacionSalasDto);
        if($programacionesDto){
            $jsonDto = new Encode_JSON();
            echo $jsonDto->encode(array("totalCount"=>"1","text"=>"DATOS GUARDADOS CORRECTAMENTE"));
        } else {
            $jsonDto = new Encode_JSON();
            echo $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL GUARDAR LOS DATOS, FAVOR DE VERIFICAR SI LA SALA CUENTA CON UNA CONFIGURACION ASIGNADA"));
        }
    }
    
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>