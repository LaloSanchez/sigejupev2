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

include_once dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sentenciaspublicas/SentenciaspublicasDTO.Class.php";
include_once dirname(__FILE__) . "/../../../controladores/sigejupe/sentenciaspublicas/SentenciaspublicasController.Class.php";
include_once dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php";
include_once dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php";
include_once dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php";
include_once dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php";
class SentenciaspublicasFacade
{
    private $proveedor;
    public function __construct()
    {
    }
    public function validarSentenciaspublicas($SentenciaspublicasDto)
    {
        $SentenciaspublicasDto->setIdSentenciaP(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SentenciaspublicasDto->getIdSentenciaP(), "utf8") : strtoupper($SentenciaspublicasDto->getIdSentenciaP()))))));
        if ($this->esFecha($SentenciaspublicasDto->getIdSentenciaP())) {
            $SentenciaspublicasDto->setIdSentenciaP($this->fechaMysql($SentenciaspublicasDto->getIdSentenciaP()));
        }
        $SentenciaspublicasDto->setIdActuacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SentenciaspublicasDto->getIdActuacion(), "utf8") : strtoupper($SentenciaspublicasDto->getIdActuacion()))))));
        if ($this->esFecha($SentenciaspublicasDto->getIdActuacion())) {
            $SentenciaspublicasDto->setIdActuacion($this->fechaMysql($SentenciaspublicasDto->getIdActuacion()));
        }
        $SentenciaspublicasDto->setDefiniciones(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SentenciaspublicasDto->getDefiniciones(), "utf8") : strtoupper($SentenciaspublicasDto->getDefiniciones()))))));
        if ($this->esFecha($SentenciaspublicasDto->getDefiniciones())) {
            $SentenciaspublicasDto->setDefiniciones($this->fechaMysql($SentenciaspublicasDto->getDefiniciones()));
        }
$SentenciaspublicasDto->setestado(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SentenciaspublicasDto->getestado(),"utf8"):strtoupper($SentenciaspublicasDto->getestado()))))));
if($this->esFecha($SentenciaspublicasDto->getestado())){
$SentenciaspublicasDto->setestado($this->fechaMysql($SentenciaspublicasDto->getestado()));
}
        return $SentenciaspublicasDto;
    }
    public function selectSentenciaspublicas($SentenciaspublicasDto)
    {
        $SentenciaspublicasDto        = $this->validarSentenciaspublicas($SentenciaspublicasDto);
        $SentenciaspublicasController = new SentenciaspublicasController();
        $SentenciaspublicasDto        = $SentenciaspublicasController->selectSentenciaspublicas($SentenciaspublicasDto);
        if ($SentenciaspublicasDto != "") {
            $dtoToJson = new DtoToJson($SentenciaspublicasDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }
    public function insertSentenciaspublicas($SentenciaspublicasDto)
    {
        $SentenciaspublicasDto        = $this->validarSentenciaspublicas($SentenciaspublicasDto);
        $SentenciaspublicasController = new SentenciaspublicasController();
        $SentenciaspublicasDto        = $SentenciaspublicasController->insertSentenciaspublicas($SentenciaspublicasDto);
        if ($SentenciaspublicasDto != "") {
            $dtoToJson = new DtoToJson($SentenciaspublicasDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }
    public function updateSentenciaspublicas($SentenciaspublicasDto)
    {
        $SentenciaspublicasDto        = $this->validarSentenciaspublicas($SentenciaspublicasDto);
        $SentenciaspublicasController = new SentenciaspublicasController();
        $SentenciaspublicasDto        = $SentenciaspublicasController->updateSentenciaspublicas($SentenciaspublicasDto);
        if ($SentenciaspublicasDto != "") {
            $dtoToJson = new DtoToJson($SentenciaspublicasDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }
    public function deleteSentenciaspublicas($SentenciaspublicasDto)
    {
        $SentenciaspublicasDto        = $this->validarSentenciaspublicas($SentenciaspublicasDto);
        $SentenciaspublicasController = new SentenciaspublicasController();
        $SentenciaspublicasDto        = $SentenciaspublicasController->deleteSentenciaspublicas($SentenciaspublicasDto);
        if ($SentenciaspublicasDto == true) {
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
    }
    private function esFecha($fecha)
    {
        if (preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $fecha)) {
            return true;
        }
        return false;
    }
    private function esFechaMysql($fecha)
    {
        if (preg_match('/^\d{4}\-\d{1,2}\-\d{1,2}$/', $fecha)) {
            return true;
        }
        return false;
    }
    private function fechaMysql($fecha)
    {
        list($dia, $mes, $year) = explode("/", $fecha);
        return $year . "-" . $mes . "-" . $dia;
    }
    private function fechaNormal($fecha)
    {
        list($dia, $mes, $year) = explode("/", $fecha);
        return $year . "-" . $mes . "-" . $dia;
    }

    /**
    * FunciOn para consultar expediente a travEs del controlador de Actuaciones
    **/
    public function consultarExpediente($parametros='')
    {
    	$SentenciaspublicasController = new SentenciaspublicasController();
    	$SentenciaspublicasController = $SentenciaspublicasController->consultarExpediente( $parametros );
    	return json_encode( $SentenciaspublicasController );
    }

    /**
    * FunciOn para consultar una toca a travEs de WS al Expediente ElectOnico
    **/
    public function consultarToca($parametros='')
    {
    	$SentenciaspublicasController = new SentenciaspublicasController();
    	$SentenciaspublicasController = $SentenciaspublicasController->consultarToca( $parametros );
    	return json_encode( $SentenciaspublicasController );
    }

    /**
    * FunciOn para realizar el guardado de las sentencias pUblicas
    **/
    public function guardarSentenciaPublica($SentenciaspublicasDto,$parametros='')
    {
        $SentenciaspublicasController = new SentenciaspublicasController();
        $SentenciaspublicasController = $SentenciaspublicasController->guardarSentenciaPublica( $SentenciaspublicasDto, $parametros );
        return json_encode( $SentenciaspublicasController );
    }

    /**
    * FunciOn par actualizar sentencias pUblicas
    **/
    public function actualizarSentenciaPublica($SentenciaspublicasDto,$parametros='')
    {
        $SentenciaspublicasController = new SentenciaspublicasController();
        $SentenciaspublicasController = $SentenciaspublicasController->actualizarSentenciaPublica( $SentenciaspublicasDto, $parametros );
        return json_encode( $SentenciaspublicasController );
    }

    /**
    * FunciOn par buscar sentencias pUblicas
    **/
    public function buscarSentenciaPublica($parametros='')
    {
        $SentenciaspublicasController = new SentenciaspublicasController();
        $SentenciaspublicasController = $SentenciaspublicasController->buscarSentenciaPublica( $parametros );
        return json_encode( $SentenciaspublicasController );
    }

    /**
    * FunciOn par eliminar sentencias pUblicas
    **/
    public function eliminaSentenciaPublica($SentenciaspublicasDto)
    {
        $SentenciaspublicasController = new SentenciaspublicasController();
        $SentenciaspublicasController = $SentenciaspublicasController->eliminaSentenciaPublica( $SentenciaspublicasDto );
        return json_encode( $SentenciaspublicasController );
    }

    public function estadoSentencia($SentenciaspublicasDto, $parametros=null)
    {
        $SentenciaspublicasController = new SentenciaspublicasController();
        $SentenciaspublicasController = $SentenciaspublicasController->estadoSentencia( $SentenciaspublicasDto, $parametros );
        return json_encode( $SentenciaspublicasController );
    }
}

@$IdSentenciaP = $_POST["IdSentenciaP"];
@$IdActuacion  = $_POST["IdActuacion"];
@$definiciones = $_POST["definiciones"];
@$estado=$_POST["estado"];
@$accion       = $_POST["accion"];

//nuevas variables
//para busqeuda de expediente, guardar y actualizar
@$numero    = $_POST["numero"];
@$anio      = $_POST["anio"];
@$carpeta   = $_POST["cveTipoCarpeta"];
@$juzgado   = $_POST["cveJuzgado"];
//para guardar y actualizar
@$idActuacion = $_POST["idActuacion"];
@$idReferencia = $_POST["idReferencia"]; 
@$sintesis = $_POST["sintesis"]; 
@$observaciones = $_POST["observaciones"]; 
@$tipoResolucion = $_POST["tipoResolucion"]; 
@$tipoProcedimiento = $_POST["tipoProcedimiento"];
//variables para busqueda de registros
@$txtFecInicialBusqueda = $_POST["txtFecInicialBusqueda"];
@$txtFecFinalBusqueda = $_POST["txtFecFinalBusqueda"];
@$pag = $_POST["pag"];
@$cantxPag = $_POST["cantxPag"];
@$tipoFiltro = $_POST["tipoFiltro"];
//variable de texto de correccion
@$correccion = $_POST['correccion'];
@$idCorreccion = $_POST['idCorreccion'];

$tipoRespuesta = "completa"; // { compacta | completa } - 'compacta': solo regresa el estado de la insercion o actualizacion; 'completa': regreasa los IDs y la informacion completa

$parametros = array('numero' => $numero, 'anio' => $anio, 'carpeta' => $carpeta, 'juzgado' => $juzgado, 'idActuacion' => $idActuacion, 'idReferencia' => $idReferencia, 'sintesis' => $sintesis, 'observaciones' => $observaciones, 'tipoResolucion' => $tipoResolucion, 'tipoProcedimiento' => $tipoProcedimiento, "tipoRespuesta" => $tipoRespuesta, 'finicio' => $txtFecInicialBusqueda, 'ffinal' => $txtFecFinalBusqueda, 'correccion' => $correccion, 'idCorreccion' => $idCorreccion, 'tipoFiltro' => $tipoFiltro, 'pag' => $pag, 'cantxPag' => $cantxPag);

$sentenciaspublicasFacade = new SentenciaspublicasFacade();
$sentenciaspublicasDto    = new SentenciaspublicasDTO();

$sentenciaspublicasDto->setIdSentenciaP($IdSentenciaP);
$sentenciaspublicasDto->setIdActuacion($IdActuacion);
$sentenciaspublicasDto->setDefiniciones($definiciones);
$sentenciaspublicasDto->setEstado($estado);

if (($accion == "guardar") && ($IdSentenciaP == "")) {
    $sentenciaspublicasDto = $sentenciaspublicasFacade->insertSentenciaspublicas($sentenciaspublicasDto);
    echo $sentenciaspublicasDto;
} else if (($accion == "guardar") && ($IdSentenciaP != "")) {
    $sentenciaspublicasDto = $sentenciaspublicasFacade->updateSentenciaspublicas($sentenciaspublicasDto);
    echo $sentenciaspublicasDto;
} else if ($accion == "consultar") {
    $sentenciaspublicasDto = $sentenciaspublicasFacade->selectSentenciaspublicas($sentenciaspublicasDto);
    echo $sentenciaspublicasDto;
} else if (($accion == "baja") && ($IdSentenciaP != "")) {
    $sentenciaspublicasDto = $sentenciaspublicasFacade->deleteSentenciaspublicas($sentenciaspublicasDto);
    echo $sentenciaspublicasDto;
} else if (($accion == "seleccionar") && ($IdSentenciaP != "")) {
    $sentenciaspublicasDto = $sentenciaspublicasFacade->selectSentenciaspublicas($sentenciaspublicasDto);
    echo $sentenciaspublicasDto;
} else if ($accion == "consultarExpediente") {
    $sentenciaspublicasDto = $sentenciaspublicasFacade->consultarExpediente($parametros);
    echo $sentenciaspublicasDto;
} else if ($accion == "consultarToca") {
    $sentenciaspublicasDto = $sentenciaspublicasFacade->consultarToca($parametros);
    echo $sentenciaspublicasDto;
} else if($accion == "guardarSentenciaPublica"){
    $sentenciaspublicasDto = $sentenciaspublicasFacade->guardarSentenciaPublica($sentenciaspublicasDto,$parametros);
    echo $sentenciaspublicasDto;
}else if($accion == "actualizarSentenciaPublica"){
    $sentenciaspublicasDto = $sentenciaspublicasFacade->actualizarSentenciaPublica($sentenciaspublicasDto,$parametros);
    echo $sentenciaspublicasDto;
}else if($accion == "buscarSentenciaPublica"){
    $parametros["paginacion"] = true;
    $sentenciaspublicasDto = $sentenciaspublicasFacade->buscarSentenciaPublica($parametros);
    echo $sentenciaspublicasDto;
}else if($accion == "eliminaSentenciaPublica"){
    $sentenciaspublicasDto = $sentenciaspublicasFacade->eliminaSentenciaPublica($sentenciaspublicasDto);
    echo $sentenciaspublicasDto;
}else if($accion == "apruebaSentencia"){
    $sentenciaspublicasDto->setEstado( '2' );
    $sentenciaspublicasDto = $sentenciaspublicasFacade->estadoSentencia($sentenciaspublicasDto);
    echo $sentenciaspublicasDto;
}else if($accion == "correccionSentencia"){
    $sentenciaspublicasDto->setEstado( '3' );
    $sentenciaspublicasDto = $sentenciaspublicasFacade->estadoSentencia($sentenciaspublicasDto,$parametros);
    echo $sentenciaspublicasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>