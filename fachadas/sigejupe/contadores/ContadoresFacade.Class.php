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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/contadores/ContadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/contadores/ContadoresController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");


include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposcarpetas/TiposcarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposactuaciones/TiposactuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposactuaciones/TiposactuacionesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");

class ContadoresFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarContadores($ContadoresDto) {
        $ContadoresDto->setidContador(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ContadoresDto->getidContador(), "utf8") : strtoupper($ContadoresDto->getidContador()))))));
        if ($this->esFecha($ContadoresDto->getidContador())) {
            $ContadoresDto->setidContador($this->fechaMysql($ContadoresDto->getidContador()));
        }
        $ContadoresDto->setnumero(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ContadoresDto->getnumero(), "utf8") : strtoupper($ContadoresDto->getnumero()))))));
        if ($this->esFecha($ContadoresDto->getnumero())) {
            $ContadoresDto->setnumero($this->fechaMysql($ContadoresDto->getnumero()));
        }
        $ContadoresDto->setanio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ContadoresDto->getanio(), "utf8") : strtoupper($ContadoresDto->getanio()))))));
        if ($this->esFecha($ContadoresDto->getanio())) {
            $ContadoresDto->setanio($this->fechaMysql($ContadoresDto->getanio()));
        }
        $ContadoresDto->setcveTipoCarpeta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ContadoresDto->getcveTipoCarpeta(), "utf8") : strtoupper($ContadoresDto->getcveTipoCarpeta()))))));
        if ($this->esFecha($ContadoresDto->getcveTipoCarpeta())) {
            $ContadoresDto->setcveTipoCarpeta($this->fechaMysql($ContadoresDto->getcveTipoCarpeta()));
        }
        $ContadoresDto->setcveTipoActuacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ContadoresDto->getcveTipoActuacion(), "utf8") : strtoupper($ContadoresDto->getcveTipoActuacion()))))));
        if ($this->esFecha($ContadoresDto->getcveTipoActuacion())) {
            $ContadoresDto->setcveTipoActuacion($this->fechaMysql($ContadoresDto->getcveTipoActuacion()));
        }
        $ContadoresDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ContadoresDto->getcveJuzgado(), "utf8") : strtoupper($ContadoresDto->getcveJuzgado()))))));
        if ($this->esFecha($ContadoresDto->getcveJuzgado())) {
            $ContadoresDto->setcveJuzgado($this->fechaMysql($ContadoresDto->getcveJuzgado()));
        }
        $ContadoresDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ContadoresDto->getactivo(), "utf8") : strtoupper($ContadoresDto->getactivo()))))));
        if ($this->esFecha($ContadoresDto->getactivo())) {
            $ContadoresDto->setactivo($this->fechaMysql($ContadoresDto->getactivo()));
        }
        $ContadoresDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ContadoresDto->getfechaRegistro(), "utf8") : strtoupper($ContadoresDto->getfechaRegistro()))))));
        if ($this->esFecha($ContadoresDto->getfechaRegistro())) {
            $ContadoresDto->setfechaRegistro($this->fechaMysql($ContadoresDto->getfechaRegistro()));
        }
        $ContadoresDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ContadoresDto->getfechaActualizacion(), "utf8") : strtoupper($ContadoresDto->getfechaActualizacion()))))));
        if ($this->esFecha($ContadoresDto->getfechaActualizacion())) {
            $ContadoresDto->setfechaActualizacion($this->fechaMysql($ContadoresDto->getfechaActualizacion()));
        }
        return $ContadoresDto;
    }

    public function selectContadores($ContadoresDto) {
        $ContadoresDto = $this->validarContadores($ContadoresDto);
        $ContadoresController = new ContadoresController();
        $ContadoresDto = $ContadoresController->selectContadores($ContadoresDto);
        if ($ContadoresDto != "") {
            $json = '{';
            $json .='"totalCount": "' . count($ContadoresDto) . '",';
            $json .='"text": "RESULTADOS DE LA CONSULTA",';
            $json .='"data": [';


            $tiposcarpetasDao = new TiposcarpetasDAO();
            $tiposcarpetasDto = new TiposcarpetasDTO();
            $tiposcarpetasDto = $tiposcarpetasDao->selectTiposcarpetas($tiposcarpetasDto);

            $tiposactuacionesDao = new TiposactuacionesDAO();
            $tiposactuacionesDto = new TiposactuacionesDTO();
            $tiposactuacionesDto = $tiposactuacionesDao->selectTiposactuaciones($tiposactuacionesDto);

            $juzgadosDao = new JuzgadosDAO();
            $juzgadosDto = new JuzgadosDTO();
            $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto);


            foreach ($ContadoresDto as $contadorDto) {
                $json .='{';
                $json .='"idContador": "' . $contadorDto->getIdContador() . '",';
                $json .='"numero": "' . $contadorDto->getNumero() . '",';
                $json .='"anio": "' . $contadorDto->getAnio() . '",';
                $json .='"cveTipoCarpeta": "' . $contadorDto->getCveTipoCarpeta() . '",';
                $json .='"cveTipoActuacion": "' . $contadorDto->getCveTipoActuacion() . '",';
                $json .='"cveJuzgado": "' . $contadorDto->getCveJuzgado() . '",';
                $json .='"activo": "' . $contadorDto->getActivo() . '",';
                $json .='"fechaRegistro": "' . $contadorDto->getFechaRegistro() . '",';
                $json .='"fechaActualizacion": "' . $contadorDto->getFechaActualizacion() . '",';

                #agregamos descripcion del tipo de carpeta
                $desTipoCarpeta = "";
                foreach ($tiposcarpetasDto as $tipocarpetaDto) {
                    if ($contadorDto->getCveTipoCarpeta() == $tipocarpetaDto->getCveTipoCarpeta()) {
                        $desTipoCarpeta = $tipocarpetaDto->getDesTipoCarpeta();
                        break;
                    }
                }
                $json .='"desTipoCarpeta": "' . $desTipoCarpeta . '",';

                #agregamos descripcion del tipo de actuacion
                $desTipoActuacion = "";
                foreach ($tiposactuacionesDto as $tipoactuacioneDto) {
                    if ($contadorDto->getCveTipoActuacion() == $tipoactuacioneDto->getCveTipoActuacion()) {
                        $desTipoActuacion = $tipoactuacioneDto->getDesTipoActuacion();
                        break;
                    }
                }
                $json .='"desTipoActuacion": "' . $desTipoActuacion . '",';

                #agregamos descripcion del juzgado
                $desJuzgado = "";
                foreach ($juzgadosDto as $juzgadoDto) {
                    if ($contadorDto->getCveJuzgado() == $juzgadoDto->getCveJuzgado()) {
                        $desJuzgado = $juzgadoDto->getDesJuzgado();
                        break;
                    }
                }
                $json .='"desJuzgado": "' . $desJuzgado . '"';
                $json .='},';
            }
            $json = substr($json, 0, -1);
            $json .=']';
            return $json .='}';
        } else {
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }
    }

    public function insertContadores($ContadoresDto) {
        $ContadoresDto = $this->validarContadores($ContadoresDto);
        $ContadoresController = new ContadoresController();
        $contadoresConsultaDto = new ContadoresDTO();
        $contadoresConsultaDto->setCveJuzgado($ContadoresDto->getCveJuzgado());
        $contadoresConsultaDto->setCveTipoActuacion($ContadoresDto->getCveTipoActuacion());
        $contadoresConsultaDto->setCveTipoCarpeta($ContadoresDto->getCveTipoCarpeta());
        $contadoresConsultaDto->setAnio($ContadoresDto->getAnio());
        $contadoresConsultaDto->setActivo($ContadoresDto->getActivo());
        $contadoresConsultaDto = $ContadoresController->selectContadores($contadoresConsultaDto);
        if ($contadoresConsultaDto == "" || count($contadoresConsultaDto) <= 0) {
            $ContadoresDto = $ContadoresController->insertContadores($ContadoresDto);
            if ($ContadoresDto != "") {
                $dtoToJson = new DtoToJson($ContadoresDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        } else {
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "ERROR: EXISTE UN REGISTRO CON LAS MISMAS CARACTERISTICAS"));
        }
    }

    public function updateContadores($ContadoresDto) {
        $ContadoresDto = $this->validarContadores($ContadoresDto);
        $ContadoresController = new ContadoresController();
        $ContadoresDto = $ContadoresController->updateContadores($ContadoresDto);
        if ($ContadoresDto != "") {
            $dtoToJson = new DtoToJson($ContadoresDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteContadores($ContadoresDto) {
        $ContadoresDto = $this->validarContadores($ContadoresDto);
        $ContadoresController = new ContadoresController();
        $ContadoresDto = $ContadoresController->deleteContadores($ContadoresDto);
        if ($ContadoresDto == true) {
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
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

@$idContador = $_POST["idContador"];
@$numero = $_POST["numero"];
@$anio = $_POST["anio"];
@$cveTipoCarpeta = $_POST["cveTipoCarpeta"];
@$cveTipoActuacion = $_POST["cveTipoActuacion"];
@$cveJuzgado = $_POST["cveJuzgado"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];

$contadoresFacade = new ContadoresFacade();
$contadoresDto = new ContadoresDTO();

$contadoresDto->setIdContador($idContador);
$contadoresDto->setNumero($numero);
$contadoresDto->setAnio($anio);
$contadoresDto->setCveTipoCarpeta($cveTipoCarpeta);
$contadoresDto->setCveTipoActuacion($cveTipoActuacion);
$contadoresDto->setCveJuzgado($cveJuzgado);
$contadoresDto->setActivo($activo);
$contadoresDto->setFechaRegistro($fechaRegistro);
$contadoresDto->setFechaActualizacion($fechaActualizacion);

if (($accion == "guardar") && ($idContador == "")) {
    $contadoresDto = $contadoresFacade->insertContadores($contadoresDto);
    echo $contadoresDto;
} else if (($accion == "guardar") && ($idContador != "")) {
    $contadoresDto = $contadoresFacade->updateContadores($contadoresDto);
    echo $contadoresDto;
} else if ($accion == "consultar") {
    $contadoresDto = $contadoresFacade->selectContadores($contadoresDto);
    echo $contadoresDto;
} else if (($accion == "baja") && ($idContador != "")) {
    $contadoresDto = $contadoresFacade->deleteContadores($contadoresDto);
    echo $contadoresDto;
} else if (($accion == "seleccionar") && ($idContador != "")) {
    $contadoresDto = $contadoresFacade->selectContadores($contadoresDto);
    echo $contadoresDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>