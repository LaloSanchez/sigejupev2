 
<?php 
/*
 * ************************************************
 * FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
 * Copyright 2009-2015 FACADES
 * Licensed under the MIT license 
 * Autor: *
 * Departamento de Desarrollo de Software
 * Subdireccion de Ingenieria de Software
 * Poder Judicial del Estado de Mexicom 
 * ************************************************
 */
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuaciones/ActuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/casosrelevantes/CasosrelevantesController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/suspensioncondicional/SuspensioncondicionalController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/notificaciones/NotificacionesController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imagenes/ImagenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imagenes/ImagenesDAO.Class.php");

class CasosrelevantesFacade {

    private $proveedor; //

    public function __construct() {
        
    }

    public function validarActuaciones($ActuacionesDto) {
        $ActuacionesDto->setidActuacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getidActuacion(), "utf8") : strtoupper($ActuacionesDto->getidActuacion()))))));
        if ($this->esFecha($ActuacionesDto->getidActuacion())) {
            $ActuacionesDto->setidActuacion($this->fechaMysql($ActuacionesDto->getidActuacion()));
        }
        $ActuacionesDto->setnumActuacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getnumActuacion(), "utf8") : strtoupper($ActuacionesDto->getnumActuacion()))))));
        if ($this->esFecha($ActuacionesDto->getnumActuacion())) {
            $ActuacionesDto->setnumActuacion($this->fechaMysql($ActuacionesDto->getnumActuacion()));
        }
        $ActuacionesDto->setaniActuacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getaniActuacion(), "utf8") : strtoupper($ActuacionesDto->getaniActuacion()))))));
        if ($this->esFecha($ActuacionesDto->getaniActuacion())) {
            $ActuacionesDto->setaniActuacion($this->fechaMysql($ActuacionesDto->getaniActuacion()));
        }
        $ActuacionesDto->setcveTipoActuacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getcveTipoActuacion(), "utf8") : strtoupper($ActuacionesDto->getcveTipoActuacion()))))));
        if ($this->esFecha($ActuacionesDto->getcveTipoActuacion())) {
            $ActuacionesDto->setcveTipoActuacion($this->fechaMysql($ActuacionesDto->getcveTipoActuacion()));
        }
        $ActuacionesDto->setidReferencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getidReferencia(), "utf8") : strtoupper($ActuacionesDto->getidReferencia()))))));
        if ($this->esFecha($ActuacionesDto->getidReferencia())) {
            $ActuacionesDto->setidReferencia($this->fechaMysql($ActuacionesDto->getidReferencia()));
        }
        $ActuacionesDto->setnumero(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getnumero(), "utf8") : strtoupper($ActuacionesDto->getnumero()))))));
        if ($this->esFecha($ActuacionesDto->getnumero())) {
            $ActuacionesDto->setnumero($this->fechaMysql($ActuacionesDto->getnumero()));
        }
        $ActuacionesDto->setanio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getanio(), "utf8") : strtoupper($ActuacionesDto->getanio()))))));
        if ($this->esFecha($ActuacionesDto->getanio())) {
            $ActuacionesDto->setanio($this->fechaMysql($ActuacionesDto->getanio()));
        }
        $ActuacionesDto->setcveTipoCarpeta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getcveTipoCarpeta(), "utf8") : strtoupper($ActuacionesDto->getcveTipoCarpeta()))))));
        if ($this->esFecha($ActuacionesDto->getcveTipoCarpeta())) {
            $ActuacionesDto->setcveTipoCarpeta($this->fechaMysql($ActuacionesDto->getcveTipoCarpeta()));
        }
        $ActuacionesDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getcveJuzgado(), "utf8") : strtoupper($ActuacionesDto->getcveJuzgado()))))));
        if ($this->esFecha($ActuacionesDto->getcveJuzgado())) {
            $ActuacionesDto->setcveJuzgado($this->fechaMysql($ActuacionesDto->getcveJuzgado()));
        }
        $ActuacionesDto->setsintesis(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getsintesis(), "utf8") : strtoupper($ActuacionesDto->getsintesis()))))));
        if ($this->esFecha($ActuacionesDto->getsintesis())) {
            $ActuacionesDto->setsintesis($this->fechaMysql($ActuacionesDto->getsintesis()));
        }
//        $ActuacionesDto->setobservaciones(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getobservaciones(), "utf8") : strtoupper($ActuacionesDto->getobservaciones()))))));
        if ($this->esFecha($ActuacionesDto->getobservaciones())) {
            $ActuacionesDto->setobservaciones($this->fechaMysql($ActuacionesDto->getobservaciones()));
        }
        $ActuacionesDto->setcveUsuario(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getcveUsuario(), "utf8") : strtoupper($ActuacionesDto->getcveUsuario()))))));
        if ($this->esFecha($ActuacionesDto->getcveUsuario())) {
            $ActuacionesDto->setcveUsuario($this->fechaMysql($ActuacionesDto->getcveUsuario()));
        }
        $ActuacionesDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getactivo(), "utf8") : strtoupper($ActuacionesDto->getactivo()))))));
        if ($this->esFecha($ActuacionesDto->getactivo())) {
            $ActuacionesDto->setactivo($this->fechaMysql($ActuacionesDto->getactivo()));
        }
        $ActuacionesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getfechaRegistro(), "utf8") : strtoupper($ActuacionesDto->getfechaRegistro()))))));
        if ($this->esFecha($ActuacionesDto->getfechaRegistro())) {
            $ActuacionesDto->setfechaRegistro($this->fechaMysql($ActuacionesDto->getfechaRegistro()));
        }
        $ActuacionesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getfechaActualizacion(), "utf8") : strtoupper($ActuacionesDto->getfechaActualizacion()))))));
        if ($this->esFecha($ActuacionesDto->getfechaActualizacion())) {
            $ActuacionesDto->setfechaActualizacion($this->fechaMysql($ActuacionesDto->getfechaActualizacion()));
        }
        $ActuacionesDto->setcveEstado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getcveEstado(), "utf8") : strtoupper($ActuacionesDto->getcveEstado()))))));
        if ($this->esFecha($ActuacionesDto->getcveEstado())) {
            $ActuacionesDto->setcveEstado($this->fechaMysql($ActuacionesDto->getcveEstado()));
        }
        $ActuacionesDto->setcveJuzgadoDestino(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getcveJuzgadoDestino(), "utf8") : strtoupper($ActuacionesDto->getcveJuzgadoDestino()))))));
        if ($this->esFecha($ActuacionesDto->getcveJuzgadoDestino())) {
            $ActuacionesDto->setcveJuzgadoDestino($this->fechaMysql($ActuacionesDto->getcveJuzgadoDestino()));
        }
        $ActuacionesDto->setjuzgadoDestino(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getjuzgadoDestino(), "utf8") : strtoupper($ActuacionesDto->getjuzgadoDestino()))))));
        if ($this->esFecha($ActuacionesDto->getjuzgadoDestino())) {
            $ActuacionesDto->setjuzgadoDestino($this->fechaMysql($ActuacionesDto->getjuzgadoDestino()));
        }
        $ActuacionesDto->setcveTipoNotificacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getcveTipoNotificacion(), "utf8") : strtoupper($ActuacionesDto->getcveTipoNotificacion()))))));
        if ($this->esFecha($ActuacionesDto->getcveTipoNotificacion())) {
            $ActuacionesDto->setcveTipoNotificacion($this->fechaMysql($ActuacionesDto->getcveTipoNotificacion()));
        }
        $ActuacionesDto->setcveTipoSentencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getcveTipoSentencia(), "utf8") : strtoupper($ActuacionesDto->getcveTipoSentencia()))))));
        if ($this->esFecha($ActuacionesDto->getcveTipoSentencia())) {
            $ActuacionesDto->setcveTipoSentencia($this->fechaMysql($ActuacionesDto->getcveTipoSentencia()));
        }
        $ActuacionesDto->setcveTipoAuto(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getcveTipoAuto(), "utf8") : strtoupper($ActuacionesDto->getcveTipoAuto()))))));
        if ($this->esFecha($ActuacionesDto->getcveTipoAuto())) {
            $ActuacionesDto->setcveTipoAuto($this->fechaMysql($ActuacionesDto->getcveTipoAuto()));
        }
        $ActuacionesDto->setcveTipoResolucion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getcveTipoResolucion(), "utf8") : strtoupper($ActuacionesDto->getcveTipoResolucion()))))));
        if ($this->esFecha($ActuacionesDto->getcveTipoResolucion())) {
            $ActuacionesDto->setcveTipoResolucion($this->fechaMysql($ActuacionesDto->getcveTipoResolucion()));
        }
        $ActuacionesDto->setcveTipoOrden(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getcveTipoOrden(), "utf8") : strtoupper($ActuacionesDto->getcveTipoOrden()))))));
        if ($this->esFecha($ActuacionesDto->getcveTipoOrden())) {
            $ActuacionesDto->setcveTipoOrden($this->fechaMysql($ActuacionesDto->getcveTipoOrden()));
        }
        $ActuacionesDto->setcveTipoProcedimiento(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getcveTipoProcedimiento(), "utf8") : strtoupper($ActuacionesDto->getcveTipoProcedimiento()))))));
        if ($this->esFecha($ActuacionesDto->getcveTipoProcedimiento())) {
            $ActuacionesDto->setcveTipoProcedimiento($this->fechaMysql($ActuacionesDto->getcveTipoProcedimiento()));
        }
        $ActuacionesDto->setfechaSentencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getfechaSentencia(), "utf8") : strtoupper($ActuacionesDto->getfechaSentencia()))))));
        if ($this->esFecha($ActuacionesDto->getfechaSentencia())) {
            $ActuacionesDto->setfechaSentencia($this->fechaMysql($ActuacionesDto->getfechaSentencia()));
        }
        $ActuacionesDto->setfechaEjecutoria(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getfechaEjecutoria(), "utf8") : strtoupper($ActuacionesDto->getfechaEjecutoria()))))));
        if ($this->esFecha($ActuacionesDto->getfechaEjecutoria())) {
            $ActuacionesDto->setfechaEjecutoria($this->fechaMysql($ActuacionesDto->getfechaEjecutoria()));
        }
        return $ActuacionesDto;
    }

    public function muestraEstatusActuacion($ActuacionesDto) {
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesController = new ActuacionesController();
        $ActuacionesDto = $ActuacionesController->muestraEstatusActuacion($ActuacionesDto);
        if ($ActuacionesDto != "") {
//            $dtoToJson = new DtoToJson($ActuacionesDto);  
            return $ActuacionesDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

//

    public function getPaginas($ActuacionesDto, $param) {
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesController = new CasosrelevantesController();
        $ActuacionesDto = $ActuacionesController->getPaginas($ActuacionesDto, $param);
        if ($ActuacionesDto != "") {
//            $dtoToJson = new DtoToJson($ActuacionesDto);
            return $ActuacionesDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
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

    /*     * ************  INICIO FUNCIONES PARA EL AUTO DE VINCULACION ***************** */

    public function getSalas($ActuacionesDto) {
        $ActuacionesController = new ActuacionesController();
        $ActuacionesDto = $ActuacionesController->getSalas();
        return $ActuacionesDto;
        /*        if ($ActuacionesDto != "") {
          $dtoToJson = new DtoToJson($ActuacionesDto);
          return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
          }
          $jsonDto = new Encode_JSON();
          return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
         */
    }

    
    //**************** CONSULTA DE NOTIFICACIONES ******************************************************
    public function consultarDetalleElectronica($ActuacionesDto, $param) {
        //print_r($ActuacionesDto);
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $NotificacionesController = new NotificacionesController();
        $ActuacionesDto = $NotificacionesController->consultarDetalleElectronica($ActuacionesDto, $param);
        if ($ActuacionesDto != "") {
//            $dtoToJson = new DtoToJson($ActuacionesDto);
            return $ActuacionesDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    //**************** CONSULTA DE notificaciones Electrónica******************************************************
    public function ConsultarActuacionesImpOfElectronica($ActuacionesDto, $param) {
        //print_r($ActuacionesDto);
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $NotificacionesController = new NotificacionesController();
        $ActuacionesDto = $NotificacionesController->ConsultarActuacionesImpOfElectronica($ActuacionesDto, $param);
        if ($ActuacionesDto != "") {
//            $dtoToJson = new DtoToJson($ActuacionesDto);
            return $ActuacionesDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }


    //**************** CONSULTA DE ACTUACIONES, OFENDIDOS Y AUTOS************************
    public function ConsultarActuacionesImpOf($ActuacionesDto, $param) {
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $NotificacionesController = new NotificacionesController();
        $ActuacionesDto = $NotificacionesController->ConsultarActuacionesImpOf($ActuacionesDto, $param);
        if ($ActuacionesDto != "") {
//            $dtoToJson = new DtoToJson($ActuacionesDto);
            return $ActuacionesDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }
    
    /***************** generar json para el archivo PDF ****************************/
    public function generarJson($ActuacionesDto, $cveTipoDocumento, $cveTipo){
        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
        $ActuacionesController = new ActuacionesController();
        $ActuacionesDto = $ActuacionesController->generarJson($ActuacionesDto, $cveTipoDocumento, $cveTipo);
        if ($ActuacionesDto != "") {
//            $dtoToJson = new DtoToJson($ActuacionesDto);
            return $ActuacionesDto;
}
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }


    /***************** generar json para el archivo PDF ****************************/
    
    /*
     * Insertar casos relevantes
     */
    public function guardarCasosRelevantes($actuacionesDto, $param) {
        $actuacionesDto = $this->validarActuaciones($actuacionesDto);
        $ActuacionesController = new CasosrelevantesController();
        $actuacionesDto = $ActuacionesController->guardarCasosRelevantes($actuacionesDto,$param);
        return json_encode($actuacionesDto);
    }
    
    /*
     * Modificar casos relevantes
     */
    public function actualizarCasosRelevantes($actuacionesDto, $param) {
        $actuacionesDto = $this->validarActuaciones($actuacionesDto);
        $ActuacionesController = new CasosrelevantesController();
        $actuacionesDto = $ActuacionesController->actualizarCasosRelevantes($actuacionesDto,$param);
        return json_encode($actuacionesDto);
    }
    
    /*
     * Borrado logico de casos relevantes
     */
    public function eliminarCasosRelevantes($actuacionesDto) {
        $actuacionesDto = $this->validarActuaciones($actuacionesDto);
        $ActuacionesController = new CasosrelevantesController();
        $actuacionesDto = $ActuacionesController->eliminarCasosRelevantes($actuacionesDto);
        return json_encode($actuacionesDto);
    }
    
    /*
     * Consultar listado de casos relevantes
     */
    public function consultarCasosRelevantes($actuacionesDto, $param) {
        $actuacionesDto = $this->validarActuaciones($actuacionesDto);
        $ActuacionesController = new CasosrelevantesController();
        $actuacionesDto = $ActuacionesController->consultarCasosRelevantes($actuacionesDto,$param);
        return $actuacionesDto;
    }
    
    /*
     * Obtener listado de archiso adjuntos de los casos relevantes activos
     */
    public function consultarAdjuntos($actuacionesDto) {
        $actuacionesDto = $this->validarActuaciones($actuacionesDto);
        $ActuacionesController = new CasosrelevantesController();
        $actuacionesDto = $ActuacionesController->consultarAdjuntos($actuacionesDto);
        return json_encode($actuacionesDto);
    }
    
    /*
     * Eliminar adjuntos de los casos relevantes
     */
    public function eliminarAdjuntos($imagenes) {
        $ActuacionesController = new CasosrelevantesController();
        $result = $ActuacionesController->eliminarAdjuntos($imagenes);
        return json_encode($result);
    }
    
}

@$idActuacion = $_POST["idActuacion"];
@$numActuacion = $_POST["numActuacion"];
@$aniActuacion = $_POST["aniActuacion"];
@$cveTipoActuacion = $_POST["cveTipoActuacion"];
@$idReferencia = $_POST["idReferencia"];
@$numero = $_POST["numero"];
@$anio = $_POST["anio"];
@$cveTipoCarpeta = $_POST["cveTipoCarpeta"];
@$cveJuzgado = $_POST["cveJuzgado"];
@$sintesis = $_POST["sintesis"];
@$observaciones = $_POST["observaciones"];
@$cveUsuario = $_POST["cveUsuario"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$cveEstado = $_POST["cveEstado"];
@$cveJuzgadoDestino = $_POST["cveJuzgadoDestino"];
@$juzgadoDestino = $_POST["juzgadoDestino"];
@$cveTipoNotificacion = $_POST["cveTipoNotificacion"];
@$cveTipoSentencia = $_POST["cveTipoSentencia"];
@$cveTipoAuto = $_POST["cveTipoAuto"];
@$cveTipoResolucion = $_POST["cveTipoResolucion"];
@$cveTipoOrden = $_POST["cveTipoOrden"];
@$cveTipoProcedimiento = $_POST["cveTipoProcedimiento"];
@$fechaSentencia = $_POST["fechaSentencia"];
@$fechaEjecutoria = $_POST["fechaEjecutoria"];
@$accion = $_POST["accion"];
@$listaPromoventes = $_POST["listaPromoventes"];
@$listaImputados = $_POST["listaImputados"];
@$apelaciones = $_POST["apelaciones"];
@$medidas = $_POST["medidas"];
@$listaOfendidos = $_POST['listaOfendidos'];
@$noFojas = $_POST['noFojas'];
@$listaComparecentes = $_POST['listaComparecentes'];
@$numEmpleadoFePublica = $_POST['numEmpleadoFePublica'];
@$lugarComparecencia = ($_POST['lugarComparecencia']);
@$horaComparecencia = $_POST['horaComparecencia'];
@$nombrePersonaFePublica = $_POST['nombrePersonaFePublica'];
@$idJuzgadorAcuerdo = $_POST['idJuzgadorAcuerdo'];

$param = array();
@$param["pag"] = $_POST['pag'];
@$param["cantxPag"] = $_POST['cantxPag'];
@$param["paginacion"] = $_POST['paginacion'];
@$param["fechaDesde"] = $_POST['fechaInicial'];
@$param["fechaHasta"] = $_POST['fechaFinal'];
@$param["generico"] = $_POST['generico'];
@$param["asigNumero"] = $_POST['asigNumero'];
@$param["consultaDistrito"] = $_POST["consultaDistrito"];
@$param["cveRegion"] = $_POST["cveRegion"];
@$param["cveDistrito"] = $_POST["cveDistrito"];
@$param["cveMateria"] = $_POST["cveMateria"];
@$param["cveInstancia"] = $_POST["cveInstancia"];
//CAMPOR INCOMPETENCIA 
$usuario = "";
if (isset($_POST["usuario"])) {
    $usuario = $_POST["usuario"];
}

$casosRelevantesFacade = new CasosrelevantesFacade();
$actuacionesDto = new ActuacionesDTO();

$actuacionesDto->setIdActuacion($idActuacion);
$actuacionesDto->setNumActuacion($numActuacion);
$actuacionesDto->setAniActuacion($aniActuacion);
$actuacionesDto->setCveTipoActuacion($cveTipoActuacion);
$actuacionesDto->setIdReferencia($idReferencia);
$actuacionesDto->setNumero($numero);
$actuacionesDto->setAnio($anio);
$actuacionesDto->setCveTipoCarpeta($cveTipoCarpeta);
$actuacionesDto->setCveJuzgado($cveJuzgado);
$actuacionesDto->setSintesis($sintesis);
$actuacionesDto->setObservaciones(utf8_decode(($observaciones)));
$actuacionesDto->setCveUsuario($cveUsuario);
$actuacionesDto->setActivo($activo);
$actuacionesDto->setFechaRegistro($fechaRegistro);
$actuacionesDto->setFechaActualizacion($fechaActualizacion);
$actuacionesDto->setCveEstado($cveEstado);
$actuacionesDto->setCveJuzgadoDestino($cveJuzgadoDestino);
$actuacionesDto->setJuzgadoDestino($juzgadoDestino);
$actuacionesDto->setCveTipoNotificacion($cveTipoNotificacion);
$actuacionesDto->setCveTipoSentencia($cveTipoSentencia);
$actuacionesDto->setCveTipoAuto($cveTipoAuto);
$actuacionesDto->setCveTipoResolucion($cveTipoResolucion);
$actuacionesDto->setCveTipoOrden($cveTipoOrden);
$actuacionesDto->setCveTipoProcedimiento($cveTipoProcedimiento);
$actuacionesDto->setFechaSentencia($fechaSentencia);
$actuacionesDto->setFechaEjecutoria($fechaEjecutoria);
$actuacionesDto->setNoFojas($noFojas);
$actuacionesDto->setIdJuzgadorAcuerdo($idJuzgadorAcuerdo);

//print_r($observaciones);
//var_dump(htmlspecialchars($actuacionesDto->getObservaciones())); 

if (($accion == "guardar") && ($idActuacion == "")) {
    $actuacionesDto = $casosRelevantesFacade->insertActuaciones($actuacionesDto);
    echo $actuacionesDto;
} else if (($accion == "guardar") && ($idActuacion != "")) {
    $actuacionesDto = $casosRelevantesFacade->updateActuaciones($actuacionesDto);
    echo $actuacionesDto;
} else if ($accion == "consultar") {
    $actuacionesDto = $casosRelevantesFacade->selectActuaciones($actuacionesDto);
    echo $actuacionesDto;
} else if (($accion == "baja") && ($idActuacion != "")) {
    $actuacionesDto = $casosRelevantesFacade->deleteActuaciones($actuacionesDto);
    echo $actuacionesDto;
} else if (($accion == "seleccionar") && ($idActuacion != "")) {
    $actuacionesDto = $casosRelevantesFacade->selectActuaciones($actuacionesDto);
    echo $actuacionesDto;
} else if (($accion == "obtenerContadorOficio")) { // ************************** funciones para oficios Contador Oficios
    $actuacionesDto = $casosRelevantesFacade->obtenerContadorOficio($actuacionesDto);
    echo $actuacionesDto;
} else if ($accion == "consultarConRelaciones") {
    $actuacionesDto = $casosRelevantesFacade->selectActuacionesCR($actuacionesDto);
    echo $actuacionesDto;
} else if ($accion == "actualizarActuacion") {
    $actuacionesDto = $casosRelevantesFacade->updateActuacion($actuacionesDto);
    echo $actuacionesDto;
} else if ($accion == "guardarActuacion") {
    $actuacionesDto = $casosRelevantesFacade->guardarActuacion($actuacionesDto);
    echo $actuacionesDto;
} else if ($accion == "getPaginas") {
//    $param["pag"] = 1;
//    $param["cantxPag"] = 4;
    $param["paginacion"] = false;
    $actuacionesDto = $casosRelevantesFacade->getPaginas($actuacionesDto, $param);
    echo $actuacionesDto;
} else if ($accion == "getPaginasComparecencias") {
    $param["paginacion"] = false;
    $cveTipoParte = $_POST['txtTiposPartes'];
    $actuacionesDto2 = array();
    //$param["cantxPag"] = "";
    //$actuacionesDto2 = json_decode($casosRelevantesFacade->consultarActuacion_Comparecencia($actuacionesDto, $param, $cveTipoParte));
    //var_dump($actuacionesDto2->datos);
    $actuacionesDto = $casosRelevantesFacade->getPaginasComparecencias($actuacionesDto, $param, $cveTipoParte);
    echo $actuacionesDto;
} else if ($accion == "muestraEstatusActuacion") {
    $actuacionesDto = $casosRelevantesFacade->muestraEstatusActuacion($actuacionesDto);
    echo $actuacionesDto;
} else if ($accion == "getSalas") {
    $actuacionesDto = $casosRelevantesFacade->getSalas($actuacionesDto);
    echo $actuacionesDto;
} else if ($accion == 'buscaActuacionPadre') {
    $idActHija = $_POST["idActuacionHija"];
    $actuacionesDto = $casosRelevantesFacade->buscaActuacionPadre($idActHija);
    echo $actuacionesDto;
} else if ($accion == "consultarNotificaciones") {
    $param["paginacion"] = true;
    $actuacionesDto = $casosRelevantesFacade->consultarNotificaciones($actuacionesDto, $param);
    echo $actuacionesDto;
} else if ($accion == "consultarNotificacionesElectronica") {
    $param["paginacion"] = true;
    $actuacionesDto = $casosRelevantesFacade->consultarNotificacionesElectronica($actuacionesDto, $param);
    echo $actuacionesDto;
} else if ($accion == "consultarDetalleElectronica") {
    $param["paginacion"] = true;
    $actuacionesDto = $casosRelevantesFacade->consultarDetalleElectronica($actuacionesDto, $param);
    echo $actuacionesDto;
} else if ($accion == "ConsultarActuacionesImpOfElectronica") {
    $param["paginacion"] = true;
    $param["IdCarpetaJudicial"] = $_POST['IdCarpetaJudicial'];
    $actuacionesDto = $casosRelevantesFacade->ConsultarActuacionesImpOfElectronica($actuacionesDto, $param);
    echo $actuacionesDto;
} else if($accion == "generarJson"){
    @$cveTipoDocumento = $_POST['cveTipoDocumento'];
    @$cveTipo = $_POST['cveTipo'];
    $actuacionesDto = $casosRelevantesFacade->generarJson($actuacionesDto, $cveTipoDocumento, $cveTipo);
    echo $actuacionesDto;
}
     
else if ( $accion == "guardarCasosRelevantes" && $idActuacion == "" ) {
    @$param['fileActuacion'] = $_FILES['adjunto'];
    $actuacionesDto = $casosRelevantesFacade->guardarCasosRelevantes($actuacionesDto, $param);
    echo $actuacionesDto;
} else if ( $accion == "guardarCasosRelevantes" && $idActuacion != "" ) {
    @$param['fileActuacion'] = $_FILES['adjunto'];
    $actuacionesDto = $casosRelevantesFacade->actualizarCasosRelevantes($actuacionesDto, $param);
    echo $actuacionesDto;
} else if ( $accion == "eliminarCasoRelevante" && $idActuacion != "" ) {
    $actuacionesDto = $casosRelevantesFacade->eliminarCasosRelevantes($actuacionesDto);
    echo $actuacionesDto;
}
else if ( $accion == "consultarCasosRelevantes" ) {
    $param["paginacion"] = true;
    
    $actuacionesDto = $casosRelevantesFacade->consultarCasosRelevantes($actuacionesDto, $param);
    echo $actuacionesDto;
}
else if ( $accion == "consultarAdjuntos" ) {
    $actuacionesDto = $casosRelevantesFacade->consultarAdjuntos($actuacionesDto);
    echo $actuacionesDto;
} else if ( $accion == "eliminarAdjuntos" ) {
    if(isset($_POST['eliminarAdjunto']) && count($_POST['eliminarAdjunto']) > 0){
        @$imagenes = array();
        for($n = 0; $n < count($_POST['eliminarAdjunto']); $n++){
            $imagenes[] = $_POST['eliminarAdjunto'][$n];
        }
        $result = $casosRelevantesFacade->eliminarAdjuntos($imagenes);
        echo $result;
    } else {
        $result = array(
            "totalCount" => "0", 
            "text"       => "NO SE RECIBIERON DATOS!"
        );
        echo json_encode($result);
    }
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>
