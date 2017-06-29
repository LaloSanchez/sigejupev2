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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/programacionmuestras/ProgramacionmuestrasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/programacionmuestras/ProgramacionmuestrasController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class ProgramacionmuestrasFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarProgramacionmuestras($ProgramacionmuestrasDto) {
        $ProgramacionmuestrasDto->setidProgramacionMuestra(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionmuestrasDto->getidProgramacionMuestra(), "utf8") : strtoupper($ProgramacionmuestrasDto->getidProgramacionMuestra()))))));
        if ($this->esFecha($ProgramacionmuestrasDto->getidProgramacionMuestra())) {
            $ProgramacionmuestrasDto->setidProgramacionMuestra($this->fechaMysql($ProgramacionmuestrasDto->getidProgramacionMuestra()));
        }
        $ProgramacionmuestrasDto->setidJuzgador(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionmuestrasDto->getidJuzgador(), "utf8") : strtoupper($ProgramacionmuestrasDto->getidJuzgador()))))));
        if ($this->esFecha($ProgramacionmuestrasDto->getidJuzgador())) {
            $ProgramacionmuestrasDto->setidJuzgador($this->fechaMysql($ProgramacionmuestrasDto->getidJuzgador()));
        }
        $ProgramacionmuestrasDto->setcveGrupoMuestraJuzgado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionmuestrasDto->getcveGrupoMuestraJuzgado(), "utf8") : strtoupper($ProgramacionmuestrasDto->getcveGrupoMuestraJuzgado()))))));
        if ($this->esFecha($ProgramacionmuestrasDto->getcveGrupoMuestraJuzgado())) {
            $ProgramacionmuestrasDto->setcveGrupoMuestraJuzgado($this->fechaMysql($ProgramacionmuestrasDto->getcveGrupoMuestraJuzgado()));
        }
        $ProgramacionmuestrasDto->setfechaInicio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionmuestrasDto->getfechaInicio(), "utf8") : strtoupper($ProgramacionmuestrasDto->getfechaInicio()))))));
        if ($this->esFecha($ProgramacionmuestrasDto->getfechaInicio())) {
            $ProgramacionmuestrasDto->setfechaInicio($this->fechaMysql($ProgramacionmuestrasDto->getfechaInicio()));
        }
        $ProgramacionmuestrasDto->setfechaFinal(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionmuestrasDto->getfechaFinal(), "utf8") : strtoupper($ProgramacionmuestrasDto->getfechaFinal()))))));
        if ($this->esFecha($ProgramacionmuestrasDto->getfechaFinal())) {
            $ProgramacionmuestrasDto->setfechaFinal($this->fechaMysql($ProgramacionmuestrasDto->getfechaFinal()));
        }
        $ProgramacionmuestrasDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionmuestrasDto->getactivo(), "utf8") : strtoupper($ProgramacionmuestrasDto->getactivo()))))));
        if ($this->esFecha($ProgramacionmuestrasDto->getactivo())) {
            $ProgramacionmuestrasDto->setactivo($this->fechaMysql($ProgramacionmuestrasDto->getactivo()));
        }
        $ProgramacionmuestrasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionmuestrasDto->getfechaRegistro(), "utf8") : strtoupper($ProgramacionmuestrasDto->getfechaRegistro()))))));
        if ($this->esFecha($ProgramacionmuestrasDto->getfechaRegistro())) {
            $ProgramacionmuestrasDto->setfechaRegistro($this->fechaMysql($ProgramacionmuestrasDto->getfechaRegistro()));
        }
        $ProgramacionmuestrasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionmuestrasDto->getfechaActualizacion(), "utf8") : strtoupper($ProgramacionmuestrasDto->getfechaActualizacion()))))));
        if ($this->esFecha($ProgramacionmuestrasDto->getfechaActualizacion())) {
            $ProgramacionmuestrasDto->setfechaActualizacion($this->fechaMysql($ProgramacionmuestrasDto->getfechaActualizacion()));
        }
        return $ProgramacionmuestrasDto;
    }

    public function selectProgramacionmuestras($ProgramacionmuestrasDto) {
        $ProgramacionmuestrasDto = $this->validarProgramacionmuestras($ProgramacionmuestrasDto);
        $ProgramacionmuestrasController = new ProgramacionmuestrasController();
        $ProgramacionmuestrasDto = $ProgramacionmuestrasController->selectProgramacionmuestras($ProgramacionmuestrasDto);
        if ($ProgramacionmuestrasDto != "") {
            $dtoToJson = new DtoToJson($ProgramacionmuestrasDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }
    
    public function selectProgramacionmuestrasReporte($ProgramacionmuestrasDto, $cveUsuario, $mes, $anio, $tipo) {
        $ProgramacionmuestrasDto = $this->validarProgramacionmuestras($ProgramacionmuestrasDto);
        $ProgramacionmuestrasController = new ProgramacionmuestrasController();
        $ProgramacionmuestrasDto = $ProgramacionmuestrasController->selectProgramacionMuestrasReporte($ProgramacionmuestrasDto, $cveUsuario, $mes, $anio, $tipo);
        if ($ProgramacionmuestrasDto != "") {
            $dtoToJson = new DtoToJson($ProgramacionmuestrasDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }
    
    public function insertProgramacionmuestras($ProgramacionmuestrasDto) {
        $ProgramacionmuestrasDto = $this->validarProgramacionmuestras($ProgramacionmuestrasDto);
        $ProgramacionmuestrasController = new ProgramacionmuestrasController();
        $ProgramacionmuestrasDto = $ProgramacionmuestrasController->insertProgramacionmuestras($ProgramacionmuestrasDto);
        if ($ProgramacionmuestrasDto != "") {
            $dtoToJson = new DtoToJson($ProgramacionmuestrasDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateProgramacionmuestras($ProgramacionmuestrasDto) {
        $ProgramacionmuestrasDto = $this->validarProgramacionmuestras($ProgramacionmuestrasDto);
        $ProgramacionmuestrasController = new ProgramacionmuestrasController();
        $ProgramacionmuestrasDto = $ProgramacionmuestrasController->updateProgramacionmuestras($ProgramacionmuestrasDto);
        if ($ProgramacionmuestrasDto != "") {
            $dtoToJson = new DtoToJson($ProgramacionmuestrasDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteProgramacionmuestras($ProgramacionmuestrasDto) {
        $ProgramacionmuestrasDto = $this->validarProgramacionmuestras($ProgramacionmuestrasDto);
        $ProgramacionmuestrasController = new ProgramacionmuestrasController();
        $ProgramacionmuestrasDto = $ProgramacionmuestrasController->deleteProgramacionmuestras($ProgramacionmuestrasDto);
        if ($ProgramacionmuestrasDto == true) {
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
    }
    
    public function reporteProgramacionMuestras($ProgramacionmuestrasDto, $gruposMuestrasJuzgadosDto, $porDistrito){
        //var_dump($ProgramacionmuestrasDto);
        $ProgramacionmuestrasController = new ProgramacionmuestrasController();
        $programacionMuestras = $ProgramacionmuestrasController->reporteProgramacionMuestras($ProgramacionmuestrasDto, $gruposMuestrasJuzgadosDto, $porDistrito);
        if(count($programacionMuestras) > 0){
            $jsonDto = "{\"totalCount\":\"" . count($programacionMuestras) . "\",\"mensaje\":\"RESULTADOS DE LA CONSULTA\",\"data\":[";
            foreach ($programacionMuestras as $dto) {
                if($dto != ""){
                    $jsonDto.=json_encode($dto);
                    $jsonDto.= ",";
                }
            }
            $jsonDto = substr($jsonDto, 0, (strlen($jsonDto) - 1));
            $jsonDto.="]}";
            return $jsonDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"NO SE ENCONTRARON DATOS"));
    }
    
    public function selectJuzgadoresMuestras($gruposMuestrasDto, $juzgadosDto, $porDistrito){
        $ProgramacionmuestrasController = new ProgramacionmuestrasController();
        $juzgadores = $ProgramacionmuestrasController->selectJuzgadoresMuestras($gruposMuestrasDto, $juzgadosDto, $porDistrito);
        if(count($juzgadores) > 0){
            $jsonDto = "{\"totalCount\":\"" . count($juzgadores) . "\",\"mensaje\":\"RESULTADOS DE LA CONSULTA\",\"data\":[";
            foreach ($juzgadores as $dto) {
                if($dto != ""){
                    $jsonDto.=json_encode($dto);
                    $jsonDto.= ",";
                }
            }
            $jsonDto = substr($jsonDto, 0, (strlen($jsonDto) - 1));
            $jsonDto.="]}";
            return $jsonDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"NO SE ENCONTRARON DATOS"));
    }


    public function modificarProgramacionMuestras($programacionmuestrasDto){
        $programacionmuestrasDto = $this->validarProgramacionmuestras($programacionmuestrasDto);
        $ProgramacionmuestrasController = new ProgramacionmuestrasController();
        $programacionmuestrasDto = $ProgramacionmuestrasController->modificarProgramacionMuestras($programacionmuestrasDto);
        return $programacionmuestrasDto;
    }
    
    public function eliminarProgramacionMuestras($programacionmuestrasDto) {
        $programacionmuestrasDto = $this->validarProgramacionmuestras($programacionmuestrasDto);
        $ProgramacionmuestrasController = new ProgramacionmuestrasController();
        $programacionmuestrasDto = $ProgramacionmuestrasController->eliminarProgramacionMuestras($programacionmuestrasDto);
        return $programacionmuestrasDto;
    }
    
    public function simuladorMuestras($juzgadosDto, $programacionmuestrasDto){
        $programacionmuestrasDto = $this->validarProgramacionmuestras($programacionmuestrasDto);
        $ProgramacionmuestrasController = new ProgramacionmuestrasController();
        $programacionMuestras = $ProgramacionmuestrasController->simuladorMuestras($juzgadosDto, $programacionmuestrasDto);
        //var_dump($programacionmuestrasDto);
        if(count($programacionMuestras) > 0){
            $jsonDto = "{\"totalCount\":\"" . count($programacionMuestras) . "\",\"mensaje\":\"RESULTADOS DE LA CONSULTA\",\"data\":[";
            foreach ($programacionMuestras as $dto) {
                if($dto != ""){
                    $jsonDto.=json_encode($dto);
                    $jsonDto.= ",";
                }
            }
            $jsonDto = substr($jsonDto, 0, (strlen($jsonDto) - 1));
            $jsonDto.="]}";
            return $jsonDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"NO SE ENCONTRARON DATOS"));
    }
    
    public function eliminarSeleccionados($programacionmuestrasDto, $param) {
        $programacionmuestrasDto = $this->validarProgramacionmuestras($programacionmuestrasDto);
        $ProgramacionmuestrasController = new ProgramacionmuestrasController();
        $programacionmuestrasDto = $ProgramacionmuestrasController->eliminarSeleccionados($programacionmuestrasDto, $param);
        return $programacionmuestrasDto;
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

@$idProgramacionMuestra = $_POST["idProgramacionMuestra"];
@$idJuzgador = $_POST["idJuzgador"];
@$cveGrupoMuestraJuzgado = $_POST["cveGrupoMuestraJuzgado"];
@$fechaInicio = $_POST["fechaInicio"];
@$fechaFinal = $_POST["fechaFinal"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];

$programacionmuestrasFacade = new ProgramacionmuestrasFacade();
$programacionmuestrasDto = new ProgramacionmuestrasDTO();

$programacionmuestrasDto->setIdProgramacionMuestra($idProgramacionMuestra);
$programacionmuestrasDto->setIdJuzgador($idJuzgador);
$programacionmuestrasDto->setCveGrupoMuestraJuzgado($cveGrupoMuestraJuzgado);
$programacionmuestrasDto->setFechaInicio($fechaInicio);
$programacionmuestrasDto->setFechaFinal($fechaFinal);
$programacionmuestrasDto->setActivo($activo);
$programacionmuestrasDto->setFechaRegistro($fechaRegistro);
$programacionmuestrasDto->setFechaActualizacion($fechaActualizacion);

if (($accion == "guardar") && ($idProgramacionMuestra == "")) {
    $programacionmuestrasDto = $programacionmuestrasFacade->insertProgramacionmuestras($programacionmuestrasDto);
    echo $programacionmuestrasDto;
} else if (($accion == "guardar") && ($idProgramacionMuestra != "")) {
    $programacionmuestrasDto = $programacionmuestrasFacade->updateProgramacionmuestras($programacionmuestrasDto);
    echo $programacionmuestrasDto;
} else if ($accion == "consultar") {
    $programacionmuestrasDto = $programacionmuestrasFacade->selectProgramacionmuestras($programacionmuestrasDto);
    echo $programacionmuestrasDto;
} else if (($accion == "baja") && ($idProgramacionMuestra != "")) {
    $programacionmuestrasDto = $programacionmuestrasFacade->deleteProgramacionmuestras($programacionmuestrasDto);
    echo $programacionmuestrasDto;
} else if (($accion == "seleccionar") && ($idProgramacionMuestra != "")) {
    $programacionmuestrasDto = $programacionmuestrasFacade->selectProgramacionmuestras($programacionmuestrasDto);
    echo $programacionmuestrasDto;
} else if ( ($accion == "guarda") && ($idProgramacionMuestra == "")) {
    
    $inicio = explode("/", $fechaInicio);
    $fin = explode("/", $fechaFinal);
    $fechaInicio = $inicio[2] . "-" . $inicio[1] . "-" . $inicio[0];
    $fechaFin = $fin[2] . "-" . $fin[1] . "-" . $fin[0];
    if($fechaInicio > $fechaFin){
        $jsonDto = new Encode_JSON();
        echo $jsonDto->encode(array("totalCount"=>"0","text"=>"NO SE PUEDEN REGISTRAR LOS DATOS ENTRE LAS FECHAS SELECCIONADAS, FAVOR DE VERIFICAR"));
    } else {
        $fechaInicio .= " " . @$_POST['horaInicial'];
        $fechaFin .= " " . @$_POST['horaFinal'];
        $programacionmuestrasDto = new ProgramacionmuestrasDTO();
        $programacionmuestrasDto->setIdJuzgador($idJuzgador);
        $programacionmuestrasDto->setCveGrupoMuestraJuzgado($cveGrupoMuestraJuzgado);
        $programacionmuestrasDto->setFechaInicio($fechaInicio);
        $programacionmuestrasDto->setFechaFinal($fechaFin);
        $programacionmuestrasDto->setActivo($activo);
        $programacionMuestrasController = new ProgramacionmuestrasController();
        $programacionmuestrasDto = $programacionMuestrasController->programacionMuestrasManual($programacionmuestrasDto);
        echo $programacionmuestrasDto;
    }
} else if ( ($accion == "guarda") && ($idProgramacionMuestra != "")) {
    $inicio = explode("/", $fechaInicio);
    $fin = explode("/", $fechaFinal);
    $fechaInicio = $inicio[2] . "-" . $inicio[1] . "-" . $inicio[0];
    $fechaFinal = $fin[2] . "-" . $fin[1] . "-" . $fin[0];
    $fechaInicio .= " " . @$_POST['horaInicial'];
    $fechaFinal .= " " . @$_POST['horaFinal'];
    $programacionmuestrasDto->setFechaInicio($fechaInicio);
    $programacionmuestrasDto->setFechaFinal($fechaFinal);
    $programacionmuestrasDto = $programacionmuestrasFacade->modificarProgramacionMuestras($programacionmuestrasDto);
    echo $programacionmuestrasDto;
} else if ( $accion == "consultarProgramacionMuestras" ) {
    $programacionesDto = new ProgramacionmuestrasDTO();
    $programacionesDto->setCveGrupoMuestraJuzgado($cveGrupoMuestraJuzgado);
    @$porDistrito = $_POST['porDistrito'];
    if( isset($_POST['idJuzgador']) && strlen($_POST['idJuzgador']) > 0 ){
        $programacionesDto->setIdJuzgador($_POST['idJuzgador']);
    }
    if( isset($_POST['fechaInicio']) && strlen($_POST['fechaInicio']) > 0 ){
        $fechaInicioTmp = explode("/", $_POST['fechaInicio']);
        $fechaInicio = $fechaInicioTmp[2] . "-" . $fechaInicioTmp[1] . "-" . $fechaInicioTmp[0];
        $programacionesDto->setFechaInicio($fechaInicio);
    }
    if( isset($_POST['fechaFin']) && strlen($_POST['fechaFin']) > 0 ){
        $fechaFinTmp = explode("/", $_POST['fechaFin']);
        $fechaFin = $fechaFinTmp[2] . "-" . $fechaFinTmp[1] . "-" . $fechaFinTmp[0];
        $programacionesDto->setFechaFinal($fechaFin);
    }
    $gruposMuestrasJuzgadosDto = new GruposmuestrasjuzgadosDTO();
    $gruposMuestrasJuzgadosDto->setCveGrupoMuestra($_POST['cveGrupoMuestra']);
    $datos = $programacionmuestrasFacade->reporteProgramacionMuestras($programacionesDto, $gruposMuestrasJuzgadosDto, $porDistrito);
    echo $datos;
} else if ( ($accion == "eliminar") && ($idProgramacionMuestra == "") ) {
    $inicio = explode("/", $fechaInicio);
    $fin = explode("/", $fechaFinal);
    $fechaInicio = $inicio[2] . "-" . $inicio[1] . "-" . $inicio[0];
    $fechaFin = $fin[2] . "-" . $fin[1] . "-" . $fin[0];
    if($fechaInicio > $fechaFin){
        $jsonDto = new Encode_JSON();
        echo $jsonDto->encode(array("totalCount"=>"0","text"=>"NO SE PUEDEN ELIMINAR LOS REGISTROS ENTRE LAS FECHAS SELECCIONADAS, FAVOR DE VERIFICAR"));
    } else {
        $programacionMuestrasDto = new ProgramacionmuestrasDTO();
        $programacionMuestrasDto->setCveGrupoMuestraJuzgado($cveGrupoMuestraJuzgado);
        $programacionMuestrasDto->setIdJuzgador($idJuzgador);
        $programacionMuestrasDto->setFechaInicio($fechaInicio);
        $programacionMuestrasDto->setFechaFinal($fechaFin);

        $programacionMuestrasController = new ProgramacionmuestrasController();
        $programacionMuestrasDto = $programacionMuestrasController->bajaProgramacionMuestrasManual($programacionMuestrasDto);
        echo $programacionMuestrasDto;
    }
} else if ( ($accion == "eliminar") && ($idProgramacionMuestra != "") ) {
    $programacionmuestrasDto = $programacionmuestrasFacade->eliminarProgramacionMuestras($programacionmuestrasDto);
    echo $programacionmuestrasDto;
} else if ( $accion == "consultarSimulacionMuestras" ) {
    $juzgadosDto = new JuzgadosDTO();
    $juzgadosDto->setCveJuzgado($_POST['cveJuzgado']);
    //var_dump($programacionmuestrasDto);
    $programacionmuestrasDto = $programacionmuestrasFacade->simuladorMuestras($juzgadosDto, $programacionmuestrasDto);
    echo $programacionmuestrasDto;
} else if($accion == "exportar"){
    
    $content = $_POST['contenido'];
    //echo $content;
    $nombre = "../../../solicitudespdf/reporteProgramacionMuestras.pdf";
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
} else if( $accion == "listaJuzgadores" ) {
    @$cveGrupoMuestra = $_POST['cveGrupoMuestra'];
    @$cveJuzgado = $_POST['cveJuzgado'];
    @$porDistrito = $_POST['porDistrito'];
    $gruposMuestrasDto = new GruposmuestrasDTO();
    $gruposMuestrasDto->setCveGrupoMuestra($cveGrupoMuestra);
    $juzgadosDto = new JuzgadosDTO();
    $juzgadosDto->setCveJuzgado($cveJuzgado);
    $datos = $programacionmuestrasFacade->selectJuzgadoresMuestras($gruposMuestrasDto, $juzgadosDto, $porDistrito);
    echo $datos;
}else if($accion == "consultamuestrasReporte"){
    if(isset($_POST['tipo'])){
        $tipo = $_POST['tipo'];
        $cveUsuario = $_POST['cveUsuario'];
        $fini = $_POST['fini'];
        $ffin = $_POST['ffin'];
        $programacionmuestrasDto = $programacionmuestrasFacade->selectProgramacionmuestrasReporte($programacionmuestrasDto, $cveUsuario, $fini, $ffin, $tipo);
        echo $programacionmuestrasDto;
    }else{
        $tipo = 1;
        $cveUsuario = $_POST['cveUsuario'];
        $mes = $_POST['mes'];
        $anio = $_POST['anio'];
        $programacionmuestrasDto = $programacionmuestrasFacade->selectProgramacionmuestrasReporte($programacionmuestrasDto, $cveUsuario, $mes, $anio, $tipo);
        echo $programacionmuestrasDto;
    }
} else if ( $accion == "eliminarSeleccionados" ) {
    @$param['idProgramacionesMuestras'] = $_POST['idProgramacionesMuestras'];
    $programacionmuestrasDto = $programacionmuestrasFacade->eliminarSeleccionados($programacionmuestrasDto, $param);
    echo $programacionmuestrasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>