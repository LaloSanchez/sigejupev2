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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/programacioncateos/ProgramacioncateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/programacioncateos/ProgramacioncateosController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class ProgramacioncateosFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarProgramacioncateos($ProgramacioncateosDto) {
        $ProgramacioncateosDto->setidProgramacionCateo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacioncateosDto->getidProgramacionCateo(), "utf8") : strtoupper($ProgramacioncateosDto->getidProgramacionCateo()))))));
        if ($this->esFecha($ProgramacioncateosDto->getidProgramacionCateo())) {
            $ProgramacioncateosDto->setidProgramacionCateo($this->fechaMysql($ProgramacioncateosDto->getidProgramacionCateo()));
        }
        $ProgramacioncateosDto->setidJuzgador(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacioncateosDto->getidJuzgador(), "utf8") : strtoupper($ProgramacioncateosDto->getidJuzgador()))))));
        if ($this->esFecha($ProgramacioncateosDto->getidJuzgador())) {
            $ProgramacioncateosDto->setidJuzgador($this->fechaMysql($ProgramacioncateosDto->getidJuzgador()));
        }
        $ProgramacioncateosDto->setcveGrupoJuzgado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacioncateosDto->getcveGrupoJuzgado(), "utf8") : strtoupper($ProgramacioncateosDto->getcveGrupoJuzgado()))))));
        if ($this->esFecha($ProgramacioncateosDto->getcveGrupoJuzgado())) {
            $ProgramacioncateosDto->setcveGrupoJuzgado($this->fechaMysql($ProgramacioncateosDto->getcveGrupoJuzgado()));
        }
        $ProgramacioncateosDto->setfechaInicio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacioncateosDto->getfechaInicio(), "utf8") : strtoupper($ProgramacioncateosDto->getfechaInicio()))))));
        if ($this->esFecha($ProgramacioncateosDto->getfechaInicio())) {
            $ProgramacioncateosDto->setfechaInicio($this->fechaMysql($ProgramacioncateosDto->getfechaInicio()));
        }
        $ProgramacioncateosDto->setfechaFinal(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacioncateosDto->getfechaFinal(), "utf8") : strtoupper($ProgramacioncateosDto->getfechaFinal()))))));
        if ($this->esFecha($ProgramacioncateosDto->getfechaFinal())) {
            $ProgramacioncateosDto->setfechaFinal($this->fechaMysql($ProgramacioncateosDto->getfechaFinal()));
        }
        $ProgramacioncateosDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacioncateosDto->getactivo(), "utf8") : strtoupper($ProgramacioncateosDto->getactivo()))))));
        if ($this->esFecha($ProgramacioncateosDto->getactivo())) {
            $ProgramacioncateosDto->setactivo($this->fechaMysql($ProgramacioncateosDto->getactivo()));
        }
        $ProgramacioncateosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacioncateosDto->getfechaRegistro(), "utf8") : strtoupper($ProgramacioncateosDto->getfechaRegistro()))))));
        if ($this->esFecha($ProgramacioncateosDto->getfechaRegistro())) {
            $ProgramacioncateosDto->setfechaRegistro($this->fechaMysql($ProgramacioncateosDto->getfechaRegistro()));
        }
        $ProgramacioncateosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacioncateosDto->getfechaActualizacion(), "utf8") : strtoupper($ProgramacioncateosDto->getfechaActualizacion()))))));
        if ($this->esFecha($ProgramacioncateosDto->getfechaActualizacion())) {
            $ProgramacioncateosDto->setfechaActualizacion($this->fechaMysql($ProgramacioncateosDto->getfechaActualizacion()));
        }
        return $ProgramacioncateosDto;
    }

    public function selectProgramacioncateos($ProgramacioncateosDto) {
        $ProgramacioncateosDto = $this->validarProgramacioncateos($ProgramacioncateosDto);
        $ProgramacioncateosController = new ProgramacioncateosController();
        $ProgramacioncateosDto = $ProgramacioncateosController->selectProgramacioncateos($ProgramacioncateosDto);
        if ($ProgramacioncateosDto != "") {
            $dtoToJson = new DtoToJson($ProgramacioncateosDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }
    public function selectProgramacioncateosReporte($ProgramacioncateosDto, $cveUsuario, $mes, $anio, $tipo) {
        $ProgramacioncateosDto = $this->validarProgramacioncateos($ProgramacioncateosDto);
        $ProgramacioncateosController = new ProgramacioncateosController();
        $ProgramacioncateosDto = $ProgramacioncateosController->selectProgramacioncateosReporte($ProgramacioncateosDto, $cveUsuario, $mes, $anio, $tipo);
        if ($ProgramacioncateosDto != "") {
            $dtoToJson = new DtoToJson($ProgramacioncateosDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertProgramacioncateos($ProgramacioncateosDto) {
        $ProgramacioncateosDto = $this->validarProgramacioncateos($ProgramacioncateosDto);
        $ProgramacioncateosController = new ProgramacioncateosController();
        $ProgramacioncateosDto = $ProgramacioncateosController->insertProgramacioncateos($ProgramacioncateosDto);
        if ($ProgramacioncateosDto != "") {
            $dtoToJson = new DtoToJson($ProgramacioncateosDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateProgramacioncateos($ProgramacioncateosDto) {
        $ProgramacioncateosDto = $this->validarProgramacioncateos($ProgramacioncateosDto);
        $ProgramacioncateosController = new ProgramacioncateosController();
        $ProgramacioncateosDto = $ProgramacioncateosController->updateProgramacioncateos($ProgramacioncateosDto);
        if ($ProgramacioncateosDto != "") {
            $dtoToJson = new DtoToJson($ProgramacioncateosDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteProgramacioncateos($ProgramacioncateosDto) {
        $ProgramacioncateosDto = $this->validarProgramacioncateos($ProgramacioncateosDto);
        $ProgramacioncateosController = new ProgramacioncateosController();
        $ProgramacioncateosDto = $ProgramacioncateosController->deleteProgramacioncateos($ProgramacioncateosDto);
        if ($ProgramacioncateosDto == true) {
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
    }

    public function reporteProgramacionCateos($ProgramacioncateosDto, $gruposJuzgadosDto, $porDistrito){
        //var_dump($ProgramacioncateosDto);
        $ProgramacioncateosController = new ProgramacioncateosController();
        $programacionCateos = $ProgramacioncateosController->reporteProgramacionCateos($ProgramacioncateosDto, $gruposJuzgadosDto, $porDistrito);
        if(count($programacionCateos) > 0){
            $jsonDto = "{\"totalCount\":\"" . count($programacionCateos) . "\",\"mensaje\":\"RESULTADOS DE LA CONSULTA\",\"data\":[";
            foreach ($programacionCateos as $dto) {
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
    
    public function selectJuzgadoresCateos($gruposCateosDto, $juzgadosDto, $porDistrito){
        $ProgramacioncateosController = new ProgramacioncateosController();
        $juzgadores = $ProgramacioncateosController->selectJuzgadoresCateos($gruposCateosDto, $juzgadosDto, $porDistrito);
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


    public function modificarProgramacioncateos($programacioncateosDto){
        $programacioncateosDto = $this->validarProgramacioncateos($programacioncateosDto);
        $ProgramacioncateosController = new ProgramacioncateosController();
        $programacioncateosDto = $ProgramacioncateosController->modificarProgramacioncateos($programacioncateosDto);
        return $programacioncateosDto;
    }
    
    public function eliminarProgramacioncateos($programacioncateosDto) {
        $programacioncateosDto = $this->validarProgramacioncateos($programacioncateosDto);
        $ProgramacioncateosController = new ProgramacioncateosController();
        $programacioncateosDto = $ProgramacioncateosController->eliminarProgramacioncateos($programacioncateosDto);
        return $programacioncateosDto;
    }
    
    public function simuladorCateos($juzgadosDto, $programacioncateosDto){
        $programacioncateosDto = $this->validarProgramacioncateos($programacioncateosDto);
        $ProgramacioncateosController = new ProgramacioncateosController();
        $programacionCateos = $ProgramacioncateosController->simuladorCateos($juzgadosDto, $programacioncateosDto);
        //var_dump($programacioncateosDto);
        if(count($programacionCateos) > 0){
            $jsonDto = "{\"totalCount\":\"" . count($programacionCateos) . "\",\"mensaje\":\"RESULTADOS DE LA CONSULTA\",\"data\":[";
            foreach ($programacionCateos as $dto) {
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
    
    public function eliminarSeleccionados($programacioncateosDto, $param) {
        $programacioncateosDto = $this->validarProgramacioncateos($programacioncateosDto);
        $ProgramacioncateosController = new ProgramacioncateosController();
        $programacioncateosDto = $ProgramacioncateosController->eliminarSeleccionados($programacioncateosDto, $param);
        return $programacioncateosDto;
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

@$idProgramacionCateo = $_POST["idProgramacionCateo"];
@$idJuzgador = $_POST["idJuzgador"];
@$cveGrupoJuzgado = $_POST["cveGrupoJuzgado"];
@$fechaInicio = $_POST["fechaInicio"];
@$fechaFinal = $_POST["fechaFinal"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];

$programacioncateosFacade = new ProgramacioncateosFacade();
$programacioncateosDto = new ProgramacioncateosDTO();

$programacioncateosDto->setIdProgramacionCateo($idProgramacionCateo);
$programacioncateosDto->setIdJuzgador($idJuzgador);
$programacioncateosDto->setCveGrupoJuzgado($cveGrupoJuzgado);
$programacioncateosDto->setFechaInicio($fechaInicio);
$programacioncateosDto->setFechaFinal($fechaFinal);
$programacioncateosDto->setActivo($activo);
$programacioncateosDto->setFechaRegistro($fechaRegistro);
$programacioncateosDto->setFechaActualizacion($fechaActualizacion);

if (($accion == "guardar") && ($idProgramacionCateo == "")) {
    $programacioncateosDto = $programacioncateosFacade->insertProgramacioncateos($programacioncateosDto);
    echo $programacioncateosDto;
} else if (($accion == "guardar") && ($idProgramacionCateo != "")) {
    $programacioncateosDto = $programacioncateosFacade->updateProgramacioncateos($programacioncateosDto);
    echo $programacioncateosDto;
} else if ($accion == "consultar") {
    $programacioncateosDto = $programacioncateosFacade->selectProgramacioncateos($programacioncateosDto);
    echo $programacioncateosDto;
} else if (($accion == "baja") && ($idProgramacionCateo != "")) {
    $programacioncateosDto = $programacioncateosFacade->deleteProgramacioncateos($programacioncateosDto);
    echo $programacioncateosDto;
} else if (($accion == "seleccionar") && ($idProgramacionCateo != "")) {
    $programacioncateosDto = $programacioncateosFacade->selectProgramacioncateos($programacioncateosDto);
    echo $programacioncateosDto;
} else if ( ($accion == "guarda") && ($idProgramacionCateo == "")) {
    
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
        $programacioncateosDto = new ProgramacioncateosDTO();
        $programacioncateosDto->setIdJuzgador($idJuzgador);
        $programacioncateosDto->setCveGrupoJuzgado($cveGrupoJuzgado);
        $programacioncateosDto->setFechaInicio($fechaInicio);
        $programacioncateosDto->setFechaFinal($fechaFin);
        $programacioncateosDto->setActivo($activo);
        $programacionCateosController = new ProgramacioncateosController();
        $programacioncateosDto = $programacionCateosController->programacionCateosManual($programacioncateosDto);
        echo $programacioncateosDto;
    }
} else if ( ($accion == "guarda") && ($idProgramacionCateo != "")) {
    $inicio = explode("/", $fechaInicio);
    $fin = explode("/", $fechaFinal);
    $fechaInicio = $inicio[2] . "-" . $inicio[1] . "-" . $inicio[0];
    $fechaFinal = $fin[2] . "-" . $fin[1] . "-" . $fin[0];
    $fechaInicio .= " " . @$_POST['horaInicial'];
    $fechaFinal .= " " . @$_POST['horaFinal'];
    $programacioncateosDto->setFechaInicio($fechaInicio);
    $programacioncateosDto->setFechaFinal($fechaFinal);
    $programacioncateosDto = $programacioncateosFacade->modificarProgramacioncateos($programacioncateosDto);
    echo $programacioncateosDto;
} else if ( $accion == "consultarProgramacionCateos" ) {
    $programacionesDto = new ProgramacioncateosDTO();
    $programacionesDto->setCveGrupoJuzgado($cveGrupoJuzgado);
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
    $gruposJuzgadosDto = new GruposjuzgadosDTO();
    $gruposJuzgadosDto->setCveGrupoCateo($_POST['cveGrupoCateo']);
    $datos = $programacioncateosFacade->reporteProgramacionCateos($programacionesDto, $gruposJuzgadosDto, $porDistrito);
    echo $datos;
} else if ( ($accion == "eliminar") && ($idProgramacionCateo == "") ) {
    $inicio = explode("/", $fechaInicio);
    $fin = explode("/", $fechaFinal);
    $fechaInicio = $inicio[2] . "-" . $inicio[1] . "-" . $inicio[0];
    $fechaFin = $fin[2] . "-" . $fin[1] . "-" . $fin[0];
    if($fechaInicio > $fechaFin){
        $jsonDto = new Encode_JSON();
        echo $jsonDto->encode(array("totalCount"=>"0","text"=>"NO SE PUEDEN ELIMINAR LOS REGISTROS ENTRE LAS FECHAS SELECCIONADAS, FAVOR DE VERIFICAR"));
    } else {
        $programacionCateosDto = new ProgramacioncateosDTO();
        $programacionCateosDto->setCveGrupoJuzgado($cveGrupoJuzgado);
        $programacionCateosDto->setIdJuzgador($idJuzgador);
        $programacionCateosDto->setFechaInicio($fechaInicio);
        $programacionCateosDto->setFechaFinal($fechaFin);

        $programacionCateosController = new ProgramacioncateosController();
        $programacionCateosDto = $programacionCateosController->bajaProgramacionCateosManual($programacionCateosDto);
        echo $programacionCateosDto;
    }
} else if ( ($accion == "eliminar") && ($idProgramacionCateo != "") ) {
    $programacioncateosDto = $programacioncateosFacade->eliminarProgramacioncateos($programacioncateosDto);
    echo $programacioncateosDto;
} else if ( $accion == "consultarSimulacionCateos" ) {
    $juzgadosDto = new JuzgadosDTO();
    $juzgadosDto->setCveJuzgado($_POST['cveJuzgado']);
    //var_dump($programacioncateosDto);
    $programacioncateosDto = $programacioncateosFacade->simuladorCateos($juzgadosDto, $programacioncateosDto);
    echo $programacioncateosDto;
} else if($accion == "exportar"){
    
    $content = $_POST['contenido'];
    //echo $content;
    $nombre = "../../../solicitudespdf/reporteProgramacionCateos.pdf";
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
    @$cveGrupoCateo = $_POST['cveGrupoCateo'];
    @$cveJuzgado = $_POST['cveJuzgado'];
    @$porDistrito = $_POST['porDistrito'];
    $gruposCateosDto = new GruposcateosDTO();
    $gruposCateosDto->setCveGrupoCateo($cveGrupoCateo);
    $juzgadosDto = new JuzgadosDTO();
    $juzgadosDto->setCveJuzgado($cveJuzgado);
    $datos = $programacioncateosFacade->selectJuzgadoresCateos($gruposCateosDto, $juzgadosDto, $porDistrito);
    echo $datos;
}else if($accion == "consultacateosReporte"){
    if(isset($_POST['tipo'])){
        $tipo = $_POST['tipo'];
        $cveUsuario = $_POST['cveUsuario'];
        $fini = $_POST['fini'];
        $ffin = $_POST['ffin'];
        $programacioncateosDto = $programacioncateosFacade->selectProgramacioncateosReporte($programacioncateosDto, $cveUsuario, $fini, $ffin, $tipo);
        echo $programacioncateosDto;
    }else{
        $tipo = 1;
        $cveUsuario = $_POST['cveUsuario'];
        $mes = $_POST['mes'];
        $anio = $_POST['anio'];
        $programacioncateosDto = $programacioncateosFacade->selectProgramacioncateosReporte($programacioncateosDto, $cveUsuario, $mes, $anio, $tipo);
        echo $programacioncateosDto;
    }
} else if ( $accion == "eliminarSeleccionados" ) {
    @$param['idProgramacionesCateos'] = $_POST['idProgramacionesCateos'];
    $programacioncateosDto = $programacioncateosFacade->eliminarSeleccionados($programacioncateosDto, $param);
        echo $programacioncateosDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>