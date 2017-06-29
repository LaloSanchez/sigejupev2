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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadosdrogas/ImputadosdrogasDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/imputadosdrogas/ImputadosdrogasController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/drogas/DrogasDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/drogas/DrogasController.Class.php");

    class ImputadosdrogasFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarImputadosdrogas($ImputadosdrogasDto) {
            $ImputadosdrogasDto->setidImputadoDroga(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosdrogasDto->getidImputadoDroga(), "utf8") : strtoupper($ImputadosdrogasDto->getidImputadoDroga()))))));
            if ($this->esFecha($ImputadosdrogasDto->getidImputadoDroga())) {
                $ImputadosdrogasDto->setidImputadoDroga($this->fechaMysql($ImputadosdrogasDto->getidImputadoDroga()));
            }
            $ImputadosdrogasDto->setidImputadoSolicitud(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosdrogasDto->getidImputadoSolicitud(), "utf8") : strtoupper($ImputadosdrogasDto->getidImputadoSolicitud()))))));
            if ($this->esFecha($ImputadosdrogasDto->getidImputadoSolicitud())) {
                $ImputadosdrogasDto->setidImputadoSolicitud($this->fechaMysql($ImputadosdrogasDto->getidImputadoSolicitud()));
            }
            $ImputadosdrogasDto->setcveDroga(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosdrogasDto->getcveDroga(), "utf8") : strtoupper($ImputadosdrogasDto->getcveDroga()))))));
            if ($this->esFecha($ImputadosdrogasDto->getcveDroga())) {
                $ImputadosdrogasDto->setcveDroga($this->fechaMysql($ImputadosdrogasDto->getcveDroga()));
            }
            $ImputadosdrogasDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosdrogasDto->getactivo(), "utf8") : strtoupper($ImputadosdrogasDto->getactivo()))))));
            if ($this->esFecha($ImputadosdrogasDto->getactivo())) {
                $ImputadosdrogasDto->setactivo($this->fechaMysql($ImputadosdrogasDto->getactivo()));
            }
            $ImputadosdrogasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosdrogasDto->getfechaRegistro(), "utf8") : strtoupper($ImputadosdrogasDto->getfechaRegistro()))))));
            if ($this->esFecha($ImputadosdrogasDto->getfechaRegistro())) {
                $ImputadosdrogasDto->setfechaRegistro($this->fechaMysql($ImputadosdrogasDto->getfechaRegistro()));
            }
            $ImputadosdrogasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosdrogasDto->getfechaActualizacion(), "utf8") : strtoupper($ImputadosdrogasDto->getfechaActualizacion()))))));
            if ($this->esFecha($ImputadosdrogasDto->getfechaActualizacion())) {
                $ImputadosdrogasDto->setfechaActualizacion($this->fechaMysql($ImputadosdrogasDto->getfechaActualizacion()));
            }
            return $ImputadosdrogasDto;
        }

        public function selectImputadosdrogas($ImputadosdrogasDto) {
            $ImputadosdrogasDto = $this->validarImputadosdrogas($ImputadosdrogasDto);
            $ImputadosdrogasController = new ImputadosdrogasController();
            $ImputadosdrogasDto = $ImputadosdrogasController->selectImputadosdrogas($ImputadosdrogasDto);
            $json = "";
            $x = 1;
            $drogasDto = new DrogasDTO();
            $drogasDao = new DrogasDAO();
            if ($ImputadosdrogasDto != "") {
                $json .= "{";
                $json .= '"status":"Ok",';
                $json .= '"totalCount":"' . count($ImputadosdrogasDto) . '",';
                $json .= '"data":[';
                foreach ($ImputadosdrogasDto as $Imputadodroga) {
                    $drogasDto->setCveDroga($Imputadodroga->getCveDroga());
                    $rsResultado = $drogasDao->selectDrogas($drogasDto);
                    $json .= "{";
                    $json .= '"idImputadoDroga":' . json_encode(utf8_encode($Imputadodroga->getIdImputadoDroga())) . ",";
                    $json .= '"idImputadoSolicitud":' . json_encode(utf8_encode($Imputadodroga->getIdImputadoSolicitud())) . ",";
                    $json .= '"cveDroga":' . json_encode(utf8_encode($Imputadodroga->getCveDroga())) . ",";
                    if ($rsResultado != "") {
                        $json .= '"desDroga":' . json_encode(utf8_encode($rsResultado[0]->getDesDroga())) . ",";
                    } else {
                        $json .= '"desDroga": "",';
                    }
                    $json .= '"activo":' . json_encode(utf8_encode($Imputadodroga->getActivo())) . "";
                    $json .= "}" . "\n";
                    $x ++;
                    if ($x <= count($ImputadosdrogasDto)) {
                        $json .= ",";
                    }
                }
                $json .= "]";
                $json .= "}";
            } else {
                $json .= '{"estatus":"Fail",';
                $json .= '"mnj":"No se encontraron resultados."}';
            }
            echo $json;
        }

        public function insertImputadosdrogas($ImputadosdrogasDto) {
            $ImputadosdrogasDto = $this->validarImputadosdrogas($ImputadosdrogasDto);
            $ImputadosdrogasController = new ImputadosdrogasController();
            $rs = $ImputadosdrogasController->insertImputadosdrogas($ImputadosdrogasDto);
            return $rs;
        }

        public function updateImputadosdrogas($ImputadosdrogasDto) {
            $ImputadosdrogasDto = $this->validarImputadosdrogas($ImputadosdrogasDto);
            $ImputadosdrogasController = new ImputadosdrogasController();
            $rs = $ImputadosdrogasController->updateImputadosdrogas($ImputadosdrogasDto);
            return $rs;
        }

        public function deleteImputadosdrogas($ImputadosdrogasDto) {
            $ImputadosdrogasDto = $this->validarImputadosdrogas($ImputadosdrogasDto);
            $ImputadosdrogasController = new ImputadosdrogasController();
            $rs = $ImputadosdrogasController->deleteImputadosdrogas($ImputadosdrogasDto);
            return $rs;
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

    @$idImputadoDroga = $_POST["idImputadoDroga"];
    @$idImputadoSolicitud = $_POST["idImputadoSolicitud"];
    @$cveDroga = $_POST["cveDroga"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];

    $imputadosdrogasFacade = new ImputadosdrogasFacade();
    $imputadosdrogasDto = new ImputadosdrogasDTO();

    $imputadosdrogasDto->setIdImputadoDroga($idImputadoDroga);
    $imputadosdrogasDto->setIdImputadoSolicitud($idImputadoSolicitud);
    $imputadosdrogasDto->setCveDroga($cveDroga);
    $imputadosdrogasDto->setActivo($activo);
    $imputadosdrogasDto->setFechaRegistro($fechaRegistro);
    $imputadosdrogasDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($idImputadoDroga == "")) {
        $imputadosdrogasDto = $imputadosdrogasFacade->insertImputadosdrogas($imputadosdrogasDto);
        echo $imputadosdrogasDto;
    } else if (($accion == "guardar") && ($idImputadoDroga != "")) {
        $imputadosdrogasDto = $imputadosdrogasFacade->updateImputadosdrogas($imputadosdrogasDto);
        echo $imputadosdrogasDto;
    } else if ($accion == "consultar") {
        $imputadosdrogasDto = $imputadosdrogasFacade->selectImputadosdrogas($imputadosdrogasDto);
        echo $imputadosdrogasDto;
    } else if (($accion == "eliminar") && ($idImputadoDroga != "")) {
        $imputadosdrogasDto = $imputadosdrogasFacade->deleteImputadosdrogas($imputadosdrogasDto);
        echo $imputadosdrogasDto;
    } else if (($accion == "seleccionar") && ($idImputadoDroga != "")) {
        $imputadosdrogasDto = $imputadosdrogasFacade->selectImputadosdrogas($imputadosdrogasDto);
        echo $imputadosdrogasDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>