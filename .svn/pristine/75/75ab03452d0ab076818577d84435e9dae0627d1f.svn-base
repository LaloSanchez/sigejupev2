<?php
 if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuaciones/ActuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/autoradicacionejecucion/AutoRadicacionEjecucionController.Class.php");

class AutoRadicacionEjecucionFacade {

    public function validarActuaciones($ActuacionesDto)
    {
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
        $ActuacionesDto->setobservaciones(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesDto->getobservaciones(), "utf8") : strtoupper($ActuacionesDto->getobservaciones()))))));
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

    private function esFecha($fecha)
    {
        if (preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $fecha)) {
            return true;
        }

        return false;
    }

    private function fechaMysql($fecha)
    {
        list($dia, $mes, $year) = explode("/", $fecha);

        return $year . "-" . $mes . "-" . $dia;
    }

    public function consultaSentencias($actuacionesDto)
    {
        $actuacionesDto = $this->validarActuaciones($actuacionesDto);
        $autoRadicacionEjecucionController = new AutoRadicacionEjecucionController();
        $response = $autoRadicacionEjecucionController->consultaSentencias($actuacionesDto);

        return json_encode($response);
    }

    public function mostrarImputadosActuacion($actuacionesDto)
    {
        $actuacionesDto = $this->validarActuaciones($actuacionesDto);
        $autoRadicacionEjecucionController = new AutoRadicacionEjecucionController();

        $response = $autoRadicacionEjecucionController->mostrarImputadosActuacion($actuacionesDto);

        return json_encode($response);
    }

    public function generaEjecucionSentencia($data, $idActuacion)
    {
        $autoRadicacionEjecucionController = new AutoRadicacionEjecucionController();
        $response = $autoRadicacionEjecucionController->generaEjecucionSentencia($data, $idActuacion);

        return json_encode($response);
    }

    public function consultarAutosRadicacion($data)
    {
        $autoRadicacionEjecucionController = new AutoRadicacionEjecucionController();
        $response = $autoRadicacionEjecucionController->consultarAutosRadicacion($data);

        return json_encode($response);
    }

}

@$idActuacion = $_POST['idActuacion'];
@$cveTipoActuacion = $_POST['cveTipoActuacion'];
@$cveTipoCarpeta = $_POST['cveTipoCarpeta'];
@$numero = $_POST['numero'];
@$anio = $_POST['anio'];
@$accion = $_POST['accion'];

$autoRadicacionEjecucionFacade = new AutoRadicacionEjecucionFacade();
$actuacionesDto = new ActuacionesDTO();

$actuacionesDto->setIdActuacion($idActuacion);
$actuacionesDto->setCveTipoActuacion($cveTipoActuacion);
$actuacionesDto->setCveTipoCarpeta($cveTipoCarpeta);
$actuacionesDto->setNumero($numero);
$actuacionesDto->setAnio($anio);
$actuacionesDto->setActivo('S');

if (isset($accion)) {

    if ($accion == 'consultaSentencias') {

        $sentenciasDto = $autoRadicacionEjecucionFacade->consultaSentencias($actuacionesDto);
        echo $sentenciasDto;

    } elseif ($accion == 'mostrarImputadosActuacion') {

        $imputadosSentenciasDto = $autoRadicacionEjecucionFacade->mostrarImputadosActuacion($actuacionesDto);
        echo $imputadosSentenciasDto;

    } elseif ($accion == 'generaEjecucionSentencia') {

        @$data = $_POST['imputadosCarpetas'];
        @$idActuacion = $_POST['idActuacionImputados'];
        $generacionSentenciasExpedientes = $autoRadicacionEjecucionFacade->generaEjecucionSentencia($data, $idActuacion);
        echo $generacionSentenciasExpedientes;

    } elseif ($accion == 'consultarAutosRadicacion') {

        $data = new stdClass();
        $data->idActuacion = @$_POST['idActuacionConsulta'];
        $data->cveJuzgado = @$_POST['cveJuzgado'];
        $data->nombreImputado = @$_POST['nombreImputado'];
        $data->numerocausa = @$_POST['numerocausa'];
        $data->aniocausa = @$_POST['aniocausa'];
        $data->numeroExpediente = @$_POST['numeroExpediente'];
        $data->anioExpediente = @$_POST['anioExpediente'];
        $data->fechaInicio = @$_POST['fechaInicio'];
        $data->fechaFin = @$_POST['fechaFin'];
        $data->offset = @$_POST['offset'];
        $data->pagina = @$_POST['pagina'];
        $data->porPagina = @$_POST['porPagina'];

        $consultaAutosRadicacion = $autoRadicacionEjecucionFacade->consultarAutosRadicacion($data);
        echo $consultaAutosRadicacion;

    }

}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}