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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/programacionordenes/ProgramacionordenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/programacionordenes/ProgramacionordenesController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
//Grupos ordenes
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/gruposordenes/GruposordenesDTO.Class.php");
class ProgramacionordenesFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarProgramacionordenes($ProgramacionordenesDto) {
        $ProgramacionordenesDto->setidProgramacionOrden(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionordenesDto->getidProgramacionOrden(), "utf8") : strtoupper($ProgramacionordenesDto->getidProgramacionOrden()))))));
        if ($this->esFecha($ProgramacionordenesDto->getidProgramacionOrden())) {
            $ProgramacionordenesDto->setidProgramacionOrden($this->fechaMysql($ProgramacionordenesDto->getidProgramacionOrden()));
        }
        $ProgramacionordenesDto->setidJuzgador(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionordenesDto->getidJuzgador(), "utf8") : strtoupper($ProgramacionordenesDto->getidJuzgador()))))));
        if ($this->esFecha($ProgramacionordenesDto->getidJuzgador())) {
            $ProgramacionordenesDto->setidJuzgador($this->fechaMysql($ProgramacionordenesDto->getidJuzgador()));
        }
        $ProgramacionordenesDto->setcveGrupoOrdenJuzgado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionordenesDto->getcveGrupoOrdenJuzgado(), "utf8") : strtoupper($ProgramacionordenesDto->getcveGrupoOrdenJuzgado()))))));
        if ($this->esFecha($ProgramacionordenesDto->getcveGrupoOrdenJuzgado())) {
            $ProgramacionordenesDto->setcveGrupoOrdenJuzgado($this->fechaMysql($ProgramacionordenesDto->getcveGrupoOrdenJuzgado()));
        }
        $ProgramacionordenesDto->setfechaInicio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionordenesDto->getfechaInicio(), "utf8") : strtoupper($ProgramacionordenesDto->getfechaInicio()))))));
        if ($this->esFecha($ProgramacionordenesDto->getfechaInicio())) {
            $ProgramacionordenesDto->setfechaInicio($this->fechaMysql($ProgramacionordenesDto->getfechaInicio()));
        }
        $ProgramacionordenesDto->setfechaFinal(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionordenesDto->getfechaFinal(), "utf8") : strtoupper($ProgramacionordenesDto->getfechaFinal()))))));
        if ($this->esFecha($ProgramacionordenesDto->getfechaFinal())) {
            $ProgramacionordenesDto->setfechaFinal($this->fechaMysql($ProgramacionordenesDto->getfechaFinal()));
        }
        $ProgramacionordenesDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionordenesDto->getactivo(), "utf8") : strtoupper($ProgramacionordenesDto->getactivo()))))));
        if ($this->esFecha($ProgramacionordenesDto->getactivo())) {
            $ProgramacionordenesDto->setactivo($this->fechaMysql($ProgramacionordenesDto->getactivo()));
        }
        $ProgramacionordenesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionordenesDto->getfechaRegistro(), "utf8") : strtoupper($ProgramacionordenesDto->getfechaRegistro()))))));
        if ($this->esFecha($ProgramacionordenesDto->getfechaRegistro())) {
            $ProgramacionordenesDto->setfechaRegistro($this->fechaMysql($ProgramacionordenesDto->getfechaRegistro()));
        }
        $ProgramacionordenesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionordenesDto->getfechaActualizacion(), "utf8") : strtoupper($ProgramacionordenesDto->getfechaActualizacion()))))));
        if ($this->esFecha($ProgramacionordenesDto->getfechaActualizacion())) {
            $ProgramacionordenesDto->setfechaActualizacion($this->fechaMysql($ProgramacionordenesDto->getfechaActualizacion()));
        }
        return $ProgramacionordenesDto;
    }

    public function selectProgramacionordenes($ProgramacionordenesDto) {
        $ProgramacionordenesDto = $this->validarProgramacionordenes($ProgramacionordenesDto);
        $ProgramacionordenesController = new ProgramacionordenesController();
        $ProgramacionordenesDto = $ProgramacionordenesController->selectProgramacionordenes($ProgramacionordenesDto);
        if ($ProgramacionordenesDto != "") {
            $dtoToJson = new DtoToJson($ProgramacionordenesDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }
    
    public function selectProgramacionordenesReporte($ProgramacionordenesDto, $cveUsuario, $mes, $anio, $tipo) {
        $ProgramacionordenesDto = $this->validarProgramacionordenes($ProgramacionordenesDto);
        $ProgramacionordenesController = new ProgramacionordenesController();
        $ProgramacionordenesDto = $ProgramacionordenesController->selectProgramacionordenesReporte($ProgramacionordenesDto, $cveUsuario, $mes, $anio, $tipo);
        if ($ProgramacionordenesDto != "") {
           
            $dtoToJson = new DtoToJson($ProgramacionordenesDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertProgramacionordenes($ProgramacionordenesDto) {
        $ProgramacionordenesDto = $this->validarProgramacionordenes($ProgramacionordenesDto);
        $ProgramacionordenesController = new ProgramacionordenesController();
        $ProgramacionordenesDto = $ProgramacionordenesController->insertProgramacionordenes($ProgramacionordenesDto);
        if ($ProgramacionordenesDto != "") {
            $dtoToJson = new DtoToJson($ProgramacionordenesDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateProgramacionordenes($ProgramacionordenesDto) {
        $ProgramacionordenesDto = $this->validarProgramacionordenes($ProgramacionordenesDto);
        $ProgramacionordenesController = new ProgramacionordenesController();
        $ProgramacionordenesDto = $ProgramacionordenesController->updateProgramacionordenes($ProgramacionordenesDto);
        if ($ProgramacionordenesDto != "") {
            $dtoToJson = new DtoToJson($ProgramacionordenesDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteProgramacionordenes($ProgramacionordenesDto) {
        $ProgramacionordenesDto = $this->validarProgramacionordenes($ProgramacionordenesDto);
        $ProgramacionordenesController = new ProgramacionordenesController();
        $ProgramacionordenesDto = $ProgramacionordenesController->deleteProgramacionordenes($ProgramacionordenesDto);
        if ($ProgramacionordenesDto == true) {
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
    }
    
    public function reporteProgramacionOrdenes($ProgramacionordenesDto, $gruposOrdenesJuzgadosDto, $porDistrito){
        $ProgramacionordenesController = new ProgramacionordenesController();
        $programacionOrdenes = $ProgramacionordenesController->reporteProgramacionOrdenes($ProgramacionordenesDto, $gruposOrdenesJuzgadosDto, $porDistrito);
        if(count($programacionOrdenes) > 0){
            $jsonDto = "{\"totalCount\":\"" . count($programacionOrdenes) . "\",\"mensaje\":\"RESULTADOS DE LA CONSULTA\",\"data\":[";
            foreach ($programacionOrdenes as $dto) {
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
    
    public function selectJuzgadoresOrdenes($gruposOrdenesDto, $juzgadosDto, $porDistrito){
        $ProgramacionordenesController = new ProgramacionordenesController();
        $juzgadores = $ProgramacionordenesController->selectJuzgadoresOrdenes($gruposOrdenesDto, $juzgadosDto, $porDistrito);
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
    
    public function modificarProgramacionordenes($ProgramacionordenesDto){
        $ProgramacionordenesDto = $this->validarProgramacionordenes($ProgramacionordenesDto);
        $ProgramacionordenesController = new ProgramacionordenesController();
        $ProgramacionordenesDto = $ProgramacionordenesController->modificarProgramacionOrdenes($ProgramacionordenesDto);
        return $ProgramacionordenesDto;
    }
    
    public function eliminarProgramacionordenes($programacionordenesDto){
        $programacionordenesDto = $this->validarProgramacionordenes($programacionordenesDto);
        $ProgramacionordenesController = new ProgramacionordenesController();
        $programacionordenesDto = $ProgramacionordenesController->eliminarProgramacionOrdenes($programacionordenesDto);
        return $programacionordenesDto;
    }
    
    public function simuladorOrdenes($juzgadosDto, $programacionordenesDto){
        $programacionordenesDto = $this->validarProgramacionordenes($programacionordenesDto);
        $ProgramacionordenesController = new ProgramacionordenesController();
        $programacionOrdenes = $ProgramacionordenesController->simuladorOrdenes($juzgadosDto, $programacionordenesDto);
        //var_dump($programacioncateosDto);
        if(count($programacionOrdenes) > 0){
            $jsonDto = "{\"totalCount\":\"" . count($programacionOrdenes) . "\",\"mensaje\":\"RESULTADOS DE LA CONSULTA\",\"data\":[";
            foreach ($programacionOrdenes as $dto) {
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
    
    public function eliminarSeleccionados($programacionordenesDto, $param){
        $programacionordenesDto = $this->validarProgramacionordenes($programacionordenesDto);
        $ProgramacionordenesController = new ProgramacionordenesController();
        $programacionordenesDto = $ProgramacionordenesController->eliminarSeleccionados($programacionordenesDto, $param);
        return $programacionordenesDto;
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

@$idProgramacionOrden = $_POST["idProgramacionOrden"];
@$idJuzgador = $_POST["idJuzgador"];
@$cveGrupoOrdenJuzgado = $_POST["cveGrupoOrdenJuzgado"];
@$fechaInicio = $_POST["fechaInicio"];
@$fechaFinal = $_POST["fechaFinal"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];

$programacionordenesFacade = new ProgramacionordenesFacade();
$programacionordenesDto = new ProgramacionordenesDTO();

$programacionordenesDto->setIdProgramacionOrden($idProgramacionOrden);
$programacionordenesDto->setIdJuzgador($idJuzgador);
$programacionordenesDto->setCveGrupoOrdenJuzgado($cveGrupoOrdenJuzgado);
$programacionordenesDto->setFechaInicio($fechaInicio);
$programacionordenesDto->setFechaFinal($fechaFinal);
$programacionordenesDto->setActivo($activo);
$programacionordenesDto->setFechaRegistro($fechaRegistro);
$programacionordenesDto->setFechaActualizacion($fechaActualizacion);

if (($accion == "guardar") && ($idProgramacionOrden == "")) {
    $programacionordenesDto = $programacionordenesFacade->insertProgramacionordenes($programacionordenesDto);
    echo $programacionordenesDto;
} else if (($accion == "guardar") && ($idProgramacionOrden != "")) {
    $programacionordenesDto = $programacionordenesFacade->updateProgramacionordenes($programacionordenesDto);
    echo $programacionordenesDto;
} else if ($accion == "consultar") {
    $programacionordenesDto = $programacionordenesFacade->selectProgramacionordenes($programacionordenesDto);
    echo $programacionordenesDto;
} else if (($accion == "baja") && ($idProgramacionOrden != "")) {
    $programacionordenesDto = $programacionordenesFacade->deleteProgramacionordenes($programacionordenesDto);
    echo $programacionordenesDto;
} else if (($accion == "seleccionar") && ($idProgramacionOrden != "")) {
    $programacionordenesDto = $programacionordenesFacade->selectProgramacionordenes($programacionordenesDto);
    echo $programacionordenesDto;
} else if ( ($accion == "guarda") && ($idProgramacionOrden == "") ) {
    
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
        $programacionordenesDto = new ProgramacionordenesDTO();
        $programacionordenesDto->setIdJuzgador($idJuzgador);
        $programacionordenesDto->setCveGrupoOrdenJuzgado($cveGrupoOrdenJuzgado);
        $programacionordenesDto->setFechaInicio($fechaInicio);
        $programacionordenesDto->setFechaFinal($fechaFin);
        $programacionordenesDto->setActivo($activo);
        $programacionOrdenesController = new ProgramacionordenesController();
        $programacionordenesDto = $programacionOrdenesController->programacionOrdenesManual($programacionordenesDto);
        echo $programacionordenesDto;
    }
} else if ( ($accion == "guarda") && ($idProgramacionOrden != "")) {
    $inicio = explode("/", $fechaInicio);
    $fin = explode("/", $fechaFinal);
    $fechaInicio = $inicio[2] . "-" . $inicio[1] . "-" . $inicio[0];
    $fechaFinal = $fin[2] . "-" . $fin[1] . "-" . $fin[0];
    $fechaInicio .= " " . @$_POST['horaInicial'];
    $fechaFinal .= " " . @$_POST['horaFinal'];
    $programacionordenesDto->setFechaInicio($fechaInicio);
    $programacionordenesDto->setFechaFinal($fechaFinal);
    $programacionordenesDto = $programacionordenesFacade->modificarProgramacionOrdenes($programacionordenesDto);
    echo $programacionordenesDto;
} else if ( $accion == "consultarProgramacionOrdenes" ) {
    $programacionesDto = new ProgramacionordenesDTO();
    $programacionesDto->setCveGrupoOrdenJuzgado($cveGrupoOrdenJuzgado);
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
    $gruposOrdenesJuzgadosDto = new GruposOrdenesjuzgadosDTO();
    $gruposOrdenesJuzgadosDto->setCveGrupoOrden($_POST['cveGrupoOrden']);
    $datos = $programacionordenesFacade->reporteProgramacionOrdenes($programacionesDto, $gruposOrdenesJuzgadosDto, $porDistrito);
    echo $datos;
} else if ( ($accion == "eliminar") && ($idProgramacionOrden == "") ) {
    $inicio = explode("/", $fechaInicio);
    $fin = explode("/", $fechaFinal);
    $fechaInicio = $inicio[2] . "-" . $inicio[1] . "-" . $inicio[0];
    $fechaFin = $fin[2] . "-" . $fin[1] . "-" . $fin[0];
    if($fechaInicio > $fechaFin){
        $jsonDto = new Encode_JSON();
        echo $jsonDto->encode(array("totalCount"=>"0","text"=>"NO SE PUEDEN ELIMINAR LOS REGISTROS ENTRE LAS FECHAS SELECCIONADAS, FAVOR DE VERIFICAR"));
    } else {
        $programacionOrdenesDto = new ProgramacionordenesDTO();
        $programacionOrdenesDto->setCveGrupoOrdenJuzgado($cveGrupoOrdenJuzgado);
        $programacionOrdenesDto->setIdJuzgador($idJuzgador);
        $programacionOrdenesDto->setFechaInicio($fechaInicio);
        $programacionOrdenesDto->setFechaFinal($fechaFin);

        $programacionOrdenesController = new ProgramacionordenesController();
        $programacionOrdenesDto = $programacionOrdenesController->bajaProgramacionOrdenesManual($programacionOrdenesDto);
        echo $programacionOrdenesDto;
    }
} else if ( ($accion == "eliminar") && ($idProgramacionOrden != "") ) {
    $programacionordenesDto = $programacionordenesFacade->eliminarProgramacionordenes($programacionordenesDto);
    echo $programacionordenesDto;
} else if ( $accion == "consultarSimulacionOrdenes" ) {
    $juzgadosDto = new JuzgadosDTO();
    $juzgadosDto->setCveJuzgado($_POST['cveJuzgado']);
    //var_dump($programacioncateosDto);
    $programacionordenesDto = $programacionordenesFacade->simuladorOrdenes($juzgadosDto, $programacionordenesDto);
    echo $programacionordenesDto;
} else if($accion == "exportar"){
    //echo "inicia";
    $content = $_POST['contenido'];
    //echo $content;
    $nombre = "../../../solicitudespdf/reporteProgramacionOrdenes.pdf";
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
    @$cveGrupoOrden = $_POST['cveGrupoOrden'];
    @$cveJuzgado = $_POST['cveJuzgado'];
    @$porDistrito = $_POST['porDistrito'];
    $gruposOrdenesDto = new GruposordenesDTO();
    $gruposOrdenesDto->setCveGrupoOrden($cveGrupoOrden);
    $juzgadosDto = new JuzgadosDTO();
    $juzgadosDto->setCveJuzgado($cveJuzgado);
    $datos = $programacionordenesFacade->selectJuzgadoresOrdenes($gruposOrdenesDto, $juzgadosDto, $porDistrito);
    echo $datos;
}else if($accion == "consultaOrdenesReporte"){    
    if(isset($_POST['tipo'])){
        $tipo = $_POST['tipo'];
        $cveUsuario = $_POST['cveUsuario'];
        $fini = $_POST['fini'];
        $ffin = $_POST['ffin'];
        $programacionordenesDto = $programacionordenesFacade->selectProgramacionordenesReporte($programacionordenesDto, $cveUsuario, $fini, $ffin, $tipo);
        echo $programacionordenesDto;
    }else{
        $tipo = 1;
        $cveUsuario = $_POST['cveUsuario'];
        $mes = $_POST['mes'];
        $anio = $_POST['anio'];
        $programacionordenesDto = $programacionordenesFacade->selectProgramacionordenesReporte($programacionordenesDto, $cveUsuario, $mes, $anio, $tipo);
        echo $programacionordenesDto;
    }
} else if ( $accion == "eliminarSeleccionados" ) {
    @$param['idProgramacionesOrdenes'] = $_POST['idProgramacionesOrdenes'];
    $programacionordenesDto = $programacionordenesFacade->eliminarSeleccionados($programacionordenesDto, $param);
    echo $programacionordenesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>