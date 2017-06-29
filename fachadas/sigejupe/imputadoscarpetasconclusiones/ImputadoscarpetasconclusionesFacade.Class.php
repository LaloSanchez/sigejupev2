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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadoscarpetasconclusiones/ImputadoscarpetasconclusionesDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/imputadoscarpetasconclusiones/ImputadoscarpetasconclusionesController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/conclusiones/ConclusionesDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/conclusiones/ConclusionesDAO.Class.php");

    class ImputadoscarpetasconclusionesFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarImputadoscarpetasconclusiones($ImputadoscarpetasconclusionesDto) {
            $ImputadoscarpetasconclusionesDto->setidImputadoCarpetaConclusion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadoscarpetasconclusionesDto->getidImputadoCarpetaConclusion(), "utf8") : strtoupper($ImputadoscarpetasconclusionesDto->getidImputadoCarpetaConclusion()))))));
            if ($this->esFecha($ImputadoscarpetasconclusionesDto->getidImputadoCarpetaConclusion())) {
                $ImputadoscarpetasconclusionesDto->setidImputadoCarpetaConclusion($this->fechaMysql($ImputadoscarpetasconclusionesDto->getidImputadoCarpetaConclusion()));
            }
            $ImputadoscarpetasconclusionesDto->setidImputadoCarpeta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadoscarpetasconclusionesDto->getidImputadoCarpeta(), "utf8") : strtoupper($ImputadoscarpetasconclusionesDto->getidImputadoCarpeta()))))));
            if ($this->esFecha($ImputadoscarpetasconclusionesDto->getidImputadoCarpeta())) {
                $ImputadoscarpetasconclusionesDto->setidImputadoCarpeta($this->fechaMysql($ImputadoscarpetasconclusionesDto->getidImputadoCarpeta()));
            }
            $ImputadoscarpetasconclusionesDto->setcveConclusion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadoscarpetasconclusionesDto->getcveConclusion(), "utf8") : strtoupper($ImputadoscarpetasconclusionesDto->getcveConclusion()))))));
            if ($this->esFecha($ImputadoscarpetasconclusionesDto->getcveConclusion())) {
                $ImputadoscarpetasconclusionesDto->setcveConclusion($this->fechaMysql($ImputadoscarpetasconclusionesDto->getcveConclusion()));
            }
            $ImputadoscarpetasconclusionesDto->setcumplimiento(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadoscarpetasconclusionesDto->getcumplimiento(), "utf8") : strtoupper($ImputadoscarpetasconclusionesDto->getcumplimiento()))))));
            if ($this->esFecha($ImputadoscarpetasconclusionesDto->getcumplimiento())) {
                $ImputadoscarpetasconclusionesDto->setcumplimiento($this->fechaMysql($ImputadoscarpetasconclusionesDto->getcumplimiento()));
            }
            $ImputadoscarpetasconclusionesDto->setmontoTotalAcordado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadoscarpetasconclusionesDto->getmontoTotalAcordado(), "utf8") : strtoupper($ImputadoscarpetasconclusionesDto->getmontoTotalAcordado()))))));
            if ($this->esFecha($ImputadoscarpetasconclusionesDto->getmontoTotalAcordado())) {
                $ImputadoscarpetasconclusionesDto->setmontoTotalAcordado($this->fechaMysql($ImputadoscarpetasconclusionesDto->getmontoTotalAcordado()));
            }
            $ImputadoscarpetasconclusionesDto->setmontoTotalPagado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadoscarpetasconclusionesDto->getmontoTotalPagado(), "utf8") : strtoupper($ImputadoscarpetasconclusionesDto->getmontoTotalPagado()))))));
            if ($this->esFecha($ImputadoscarpetasconclusionesDto->getmontoTotalPagado())) {
                $ImputadoscarpetasconclusionesDto->setmontoTotalPagado($this->fechaMysql($ImputadoscarpetasconclusionesDto->getmontoTotalPagado()));
            }
            $ImputadoscarpetasconclusionesDto->setfechaPactadaCumplimiento(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadoscarpetasconclusionesDto->getfechaPactadaCumplimiento(), "utf8") : strtoupper($ImputadoscarpetasconclusionesDto->getfechaPactadaCumplimiento()))))));
            if ($this->esFecha($ImputadoscarpetasconclusionesDto->getfechaPactadaCumplimiento())) {
                $ImputadoscarpetasconclusionesDto->setfechaPactadaCumplimiento($this->fechaMysql($ImputadoscarpetasconclusionesDto->getfechaPactadaCumplimiento()));
            }
            $ImputadoscarpetasconclusionesDto->setobservaciones(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadoscarpetasconclusionesDto->getobservaciones(), "utf8") : strtoupper($ImputadoscarpetasconclusionesDto->getobservaciones()))))));
            if ($this->esFecha($ImputadoscarpetasconclusionesDto->getobservaciones())) {
                $ImputadoscarpetasconclusionesDto->setobservaciones($this->fechaMysql($ImputadoscarpetasconclusionesDto->getobservaciones()));
            }
            $ImputadoscarpetasconclusionesDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadoscarpetasconclusionesDto->getactivo(), "utf8") : strtoupper($ImputadoscarpetasconclusionesDto->getactivo()))))));
            if ($this->esFecha($ImputadoscarpetasconclusionesDto->getactivo())) {
                $ImputadoscarpetasconclusionesDto->setactivo($this->fechaMysql($ImputadoscarpetasconclusionesDto->getactivo()));
            }
            $ImputadoscarpetasconclusionesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadoscarpetasconclusionesDto->getfechaRegistro(), "utf8") : strtoupper($ImputadoscarpetasconclusionesDto->getfechaRegistro()))))));
            if ($this->esFecha($ImputadoscarpetasconclusionesDto->getfechaRegistro())) {
                $ImputadoscarpetasconclusionesDto->setfechaRegistro($this->fechaMysql($ImputadoscarpetasconclusionesDto->getfechaRegistro()));
            }
            $ImputadoscarpetasconclusionesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadoscarpetasconclusionesDto->getfechaActualizacion(), "utf8") : strtoupper($ImputadoscarpetasconclusionesDto->getfechaActualizacion()))))));
            if ($this->esFecha($ImputadoscarpetasconclusionesDto->getfechaActualizacion())) {
                $ImputadoscarpetasconclusionesDto->setfechaActualizacion($this->fechaMysql($ImputadoscarpetasconclusionesDto->getfechaActualizacion()));
            }
            return $ImputadoscarpetasconclusionesDto;
        }

        public function selectImputadoscarpetasconclusiones($ImputadoscarpetasconclusionesDto) {
            $ImputadoscarpetasconclusionesDto = $this->validarImputadoscarpetasconclusiones($ImputadoscarpetasconclusionesDto);
            $ImputadoscarpetasconclusionesController = new ImputadoscarpetasconclusionesController();
            $ImputadoscarpetasconclusionesDto = $ImputadoscarpetasconclusionesController->selectImputadoscarpetasconclusiones($ImputadoscarpetasconclusionesDto);
            $json = "";
            $x = 1;
            $conclusionesDto = new ConclusionesDTO();
            $conclusionesDao = new ConclusionesDAO();
            if ($ImputadoscarpetasconclusionesDto != "") {
//            $dtoToJson = new DtoToJson($ImputadoscarpetasconclusionesDto);
//            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
                $json .= "{";
                $json .= '"status":"Ok",';
                $json .= '"totalCount":"' . count($ImputadoscarpetasconclusionesDto) . '",';
                $json .= '"data":[';
                foreach ($ImputadoscarpetasconclusionesDto as $ImputadoCarpetaConclusion) {
                    $conclusionesDto->setCveConclusion($ImputadoCarpetaConclusion->getCveConclusion());
                    $conclusionesDto->setActivo("S");
                    $rsConclusiones = $conclusionesDao->selectConclusiones($conclusionesDto);
                    $json .= "{";
                    $json .= '"idImputadoCarpetaConclusion":' . json_encode(utf8_encode($ImputadoCarpetaConclusion->getIdImputadoCarpetaConclusion())) . ",";
                    $json .= '"idImputadoCarpeta":' . json_encode(utf8_encode($ImputadoCarpetaConclusion->getIdImputadoCarpeta())) . ",";
                    $json .= '"cveConclusion":' . json_encode(utf8_encode($ImputadoCarpetaConclusion->getCveConclusion())) . ",";
                    if ($rsConclusiones != "") {
                        $json .= '"desConclusion":' . json_encode(utf8_encode($rsConclusiones[0]->getDesConclusion())) . ",";
                    } else {
                        $json .= '"desConclusion": "N/A",';
                    }
                    $json .= '"cumplimiento":' . json_encode(utf8_encode($ImputadoCarpetaConclusion->getCumplimiento())) . ",";
                    $json .= '"montoTotalAcordado":' . json_encode(utf8_encode($ImputadoCarpetaConclusion->getMontoTotalAcordado())) . ",";
                    $json .= '"montoTotalPagado":' . json_encode(utf8_encode($ImputadoCarpetaConclusion->getMontoTotalPagado())) . ",";
                    $json .= '"fechaPactadaCumplimiento":' . json_encode(utf8_encode($ImputadoCarpetaConclusion->getFechaPactadaCumplimiento())) . ",";
                    $json .= '"observaciones":' . json_encode(utf8_encode($ImputadoCarpetaConclusion->getObservaciones())) . ",";
                    $json .= '"activo":' . json_encode(utf8_encode($ImputadoCarpetaConclusion->getActivo())) . ",";
                    $json .= '"fechaRegistro":' . json_encode(utf8_encode($ImputadoCarpetaConclusion->getFechaRegistro())) . ",";
                    $json .= '"fechaActualizacion":' . json_encode(utf8_encode($ImputadoCarpetaConclusion->getFechaActualizacion()));
                    $json .= "}" . "\n";
                    $x ++;
                    if ($x <= count($ImputadoscarpetasconclusionesDto)) {
                        $json .= ",";
                    }
                }
                $json .= "]";
                $json .= "}";
            } else {
                $json .= '{"estatus":"Fail",';
                $json .= '"totalCount":"0",';
                $json .= '"mnj":"No se encontraron resultados."}';
            }
            return $json;
//        $jsonDto = new Encode_JSON();
//        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function agregarImputadoscarpetasconclusiones($imputadoscarpetasconclusionesDto) {
            $imputadoscarpetasconclusionesDto = $this->validarImputadoscarpetasconclusiones($imputadoscarpetasconclusionesDto);
            $ImputadoscarpetasconclusionesController = new ImputadoscarpetasconclusionesController();
            $imputadoscarpetasconclusionesDto = $ImputadoscarpetasconclusionesController->agregarImputadoscarpetasconclusiones($imputadoscarpetasconclusionesDto);
            return $imputadoscarpetasconclusionesDto;
        }

        public function modificarImputadoscarpetasconclusiones($imputadoscarpetasconclusionesDto) {
            $imputadoscarpetasconclusionesDto = $this->validarImputadoscarpetasconclusiones($imputadoscarpetasconclusionesDto);
            $ImputadoscarpetasconclusionesController = new ImputadoscarpetasconclusionesController();
            $imputadoscarpetasconclusionesDto = $ImputadoscarpetasconclusionesController->modificarImputadoscarpetasconclusiones($imputadoscarpetasconclusionesDto);
            return $imputadoscarpetasconclusionesDto;
        }

        public function eliminarImputadoscarpetasconclusiones($imputadoscarpetasconclusionesDto) {
            $imputadoscarpetasconclusionesDto = $this->validarImputadoscarpetasconclusiones($imputadoscarpetasconclusionesDto);
            $ImputadoscarpetasconclusionesController = new ImputadoscarpetasconclusionesController();
            $imputadoscarpetasconclusionesDto = $ImputadoscarpetasconclusionesController->eliminarImputadoscarpetasconclusiones($imputadoscarpetasconclusionesDto);
            return $imputadoscarpetasconclusionesDto;
        }

        public function insertImputadoscarpetasconclusiones($ImputadoscarpetasconclusionesDto) {
            $ImputadoscarpetasconclusionesDto = $this->validarImputadoscarpetasconclusiones($ImputadoscarpetasconclusionesDto);
            $ImputadoscarpetasconclusionesController = new ImputadoscarpetasconclusionesController();
            $ImputadoscarpetasconclusionesDto = $ImputadoscarpetasconclusionesController->insertImputadoscarpetasconclusiones($ImputadoscarpetasconclusionesDto);
            if ($ImputadoscarpetasconclusionesDto != "") {
                $dtoToJson = new DtoToJson($ImputadoscarpetasconclusionesDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateImputadoscarpetasconclusiones($ImputadoscarpetasconclusionesDto) {
            $ImputadoscarpetasconclusionesDto = $this->validarImputadoscarpetasconclusiones($ImputadoscarpetasconclusionesDto);
            $ImputadoscarpetasconclusionesController = new ImputadoscarpetasconclusionesController();
            $ImputadoscarpetasconclusionesDto = $ImputadoscarpetasconclusionesController->updateImputadoscarpetasconclusiones($ImputadoscarpetasconclusionesDto);
            if ($ImputadoscarpetasconclusionesDto != "") {
                $dtoToJson = new DtoToJson($ImputadoscarpetasconclusionesDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteImputadoscarpetasconclusiones($ImputadoscarpetasconclusionesDto) {
            $ImputadoscarpetasconclusionesDto = $this->validarImputadoscarpetasconclusiones($ImputadoscarpetasconclusionesDto);
            $ImputadoscarpetasconclusionesController = new ImputadoscarpetasconclusionesController();
            $ImputadoscarpetasconclusionesDto = $ImputadoscarpetasconclusionesController->deleteImputadoscarpetasconclusiones($ImputadoscarpetasconclusionesDto);
            if ($ImputadoscarpetasconclusionesDto == true) {
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

    @$idImputadoCarpetaConclusion = $_POST["idImputadoCarpetaConclusion"];
    @$idImputadoCarpeta = $_POST["idImputadoCarpeta"];
    @$cveConclusion = $_POST["cveConclusion"];
    @$cumplimiento = $_POST["cumplimiento"];
    @$montoTotalAcordado = $_POST["montoTotalAcordado"];
    @$montoTotalPagado = $_POST["montoTotalPagado"];
    @$fechaPactadaCumplimiento = $_POST["fechaPactadaCumplimiento"];
    @$observaciones = $_POST["observaciones"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];

    $imputadoscarpetasconclusionesFacade = new ImputadoscarpetasconclusionesFacade();
    $imputadoscarpetasconclusionesDto = new ImputadoscarpetasconclusionesDTO();

    $imputadoscarpetasconclusionesDto->setIdImputadoCarpetaConclusion($idImputadoCarpetaConclusion);
    $imputadoscarpetasconclusionesDto->setIdImputadoCarpeta($idImputadoCarpeta);
    $imputadoscarpetasconclusionesDto->setCveConclusion($cveConclusion);
    $imputadoscarpetasconclusionesDto->setCumplimiento($cumplimiento);
    $imputadoscarpetasconclusionesDto->setMontoTotalAcordado($montoTotalAcordado);
    $imputadoscarpetasconclusionesDto->setMontoTotalPagado($montoTotalPagado);
    $imputadoscarpetasconclusionesDto->setFechaPactadaCumplimiento($fechaPactadaCumplimiento);
    $imputadoscarpetasconclusionesDto->setObservaciones($observaciones);
    $imputadoscarpetasconclusionesDto->setActivo($activo);
    $imputadoscarpetasconclusionesDto->setFechaRegistro($fechaRegistro);
    $imputadoscarpetasconclusionesDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($idImputadoCarpetaConclusion == "")) {
        $imputadoscarpetasconclusionesDto = $imputadoscarpetasconclusionesFacade->insertImputadoscarpetasconclusiones($imputadoscarpetasconclusionesDto);
        echo $imputadoscarpetasconclusionesDto;
    } else if (($accion == "guardar") && ($idImputadoCarpetaConclusion != "")) {
        $imputadoscarpetasconclusionesDto = $imputadoscarpetasconclusionesFacade->updateImputadoscarpetasconclusiones($imputadoscarpetasconclusionesDto);
        echo $imputadoscarpetasconclusionesDto;
    } else if ($accion == "consultar") {
        $imputadoscarpetasconclusionesDto = $imputadoscarpetasconclusionesFacade->selectImputadoscarpetasconclusiones($imputadoscarpetasconclusionesDto);
        echo $imputadoscarpetasconclusionesDto;
    } else if (($accion == "baja") && ($idImputadoCarpetaConclusion != "")) {
        $imputadoscarpetasconclusionesDto = $imputadoscarpetasconclusionesFacade->deleteImputadoscarpetasconclusiones($imputadoscarpetasconclusionesDto);
        echo $imputadoscarpetasconclusionesDto;
    } else if (($accion == "seleccionar") && ($idImputadoCarpetaConclusion != "")) {
        $imputadoscarpetasconclusionesDto = $imputadoscarpetasconclusionesFacade->selectImputadoscarpetasconclusiones($imputadoscarpetasconclusionesDto);
        echo $imputadoscarpetasconclusionesDto;
    } else if (($accion == "guarda") && ($idImputadoCarpetaConclusion == "")) {
        $imputadoscarpetasconclusionesDto = $imputadoscarpetasconclusionesFacade->agregarImputadoscarpetasconclusiones($imputadoscarpetasconclusionesDto);
        echo $imputadoscarpetasconclusionesDto;
    } else if (($accion == "guarda") && ($idImputadoCarpetaConclusion != "")) {
        $imputadoscarpetasconclusionesDto = $imputadoscarpetasconclusionesFacade->modificarImputadoscarpetasconclusiones($imputadoscarpetasconclusionesDto);
        echo $imputadoscarpetasconclusionesDto;
    } else if (($accion == "eliminar") && ($idImputadoCarpetaConclusion != "")) {
        $imputadoscarpetasconclusionesDto = $imputadoscarpetasconclusionesFacade->eliminarImputadoscarpetasconclusiones($imputadoscarpetasconclusionesDto);
        echo $imputadoscarpetasconclusionesDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>