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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadosdrogascarpetas/ImputadosdrogascarpetasDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/imputadosdrogascarpetas/ImputadosdrogascarpetasController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/drogas/DrogasDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/drogas/DrogasController.Class.php");

    class ImputadosdrogascarpetasFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarImputadosdrogascarpetas($ImputadosdrogascarpetasDto) {
            $ImputadosdrogascarpetasDto->setidImputadoDrogaCarpeta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosdrogascarpetasDto->getidImputadoDrogaCarpeta(), "utf8") : strtoupper($ImputadosdrogascarpetasDto->getidImputadoDrogaCarpeta()))))));
            if ($this->esFecha($ImputadosdrogascarpetasDto->getidImputadoDrogaCarpeta())) {
                $ImputadosdrogascarpetasDto->setidImputadoDrogaCarpeta($this->fechaMysql($ImputadosdrogascarpetasDto->getidImputadoDrogaCarpeta()));
            }
            $ImputadosdrogascarpetasDto->setidImputadoCarpeta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosdrogascarpetasDto->getidImputadoCarpeta(), "utf8") : strtoupper($ImputadosdrogascarpetasDto->getidImputadoCarpeta()))))));
            if ($this->esFecha($ImputadosdrogascarpetasDto->getidImputadoCarpeta())) {
                $ImputadosdrogascarpetasDto->setidImputadoCarpeta($this->fechaMysql($ImputadosdrogascarpetasDto->getidImputadoCarpeta()));
            }
            $ImputadosdrogascarpetasDto->setcveDroga(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosdrogascarpetasDto->getcveDroga(), "utf8") : strtoupper($ImputadosdrogascarpetasDto->getcveDroga()))))));
            if ($this->esFecha($ImputadosdrogascarpetasDto->getcveDroga())) {
                $ImputadosdrogascarpetasDto->setcveDroga($this->fechaMysql($ImputadosdrogascarpetasDto->getcveDroga()));
            }
            $ImputadosdrogascarpetasDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosdrogascarpetasDto->getactivo(), "utf8") : strtoupper($ImputadosdrogascarpetasDto->getactivo()))))));
            if ($this->esFecha($ImputadosdrogascarpetasDto->getactivo())) {
                $ImputadosdrogascarpetasDto->setactivo($this->fechaMysql($ImputadosdrogascarpetasDto->getactivo()));
            }
            $ImputadosdrogascarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosdrogascarpetasDto->getfechaRegistro(), "utf8") : strtoupper($ImputadosdrogascarpetasDto->getfechaRegistro()))))));
            if ($this->esFecha($ImputadosdrogascarpetasDto->getfechaRegistro())) {
                $ImputadosdrogascarpetasDto->setfechaRegistro($this->fechaMysql($ImputadosdrogascarpetasDto->getfechaRegistro()));
            }
            $ImputadosdrogascarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadosdrogascarpetasDto->getfechaActualizacion(), "utf8") : strtoupper($ImputadosdrogascarpetasDto->getfechaActualizacion()))))));
            if ($this->esFecha($ImputadosdrogascarpetasDto->getfechaActualizacion())) {
                $ImputadosdrogascarpetasDto->setfechaActualizacion($this->fechaMysql($ImputadosdrogascarpetasDto->getfechaActualizacion()));
            }
            return $ImputadosdrogascarpetasDto;
        }

        public function selectImputadosdrogascarpetas($ImputadosdrogascarpetasDto) {
            $ImputadosdrogascarpetasDto = $this->validarImputadosdrogascarpetas($ImputadosdrogascarpetasDto);
            $ImputadosdrogascarpetasController = new ImputadosdrogascarpetasController();
            $ImputadosdrogascarpetasDto = $ImputadosdrogascarpetasController->selectImputadosdrogascarpetas($ImputadosdrogascarpetasDto);
            $json = "";
            $x = 1;
            $drogasDto = new DrogasDTO();
            $drogasDao = new DrogasDAO();
            if ($ImputadosdrogascarpetasDto != "") {
                $json .= "{";
                $json .= '"status":"Ok",';
                $json .= '"totalCount":"' . count($ImputadosdrogascarpetasDto) . '",';
                $json .= '"data":[';
                foreach ($ImputadosdrogascarpetasDto as $Imputadodroga) {
                    $drogasDto->setCveDroga($Imputadodroga->getCveDroga());
                    $rsResultado = $drogasDao->selectDrogas($drogasDto);
                    $json .= "{";
                    $json .= '"idImputadoDrogaCarpeta":' . json_encode(utf8_encode($Imputadodroga->getIdImputadoDrogaCarpeta())) . ",";
                    $json .= '"idImputadoCarpeta":' . json_encode(utf8_encode($Imputadodroga->getIdImputadoCarpeta())) . ",";
                    $json .= '"cveDroga":' . json_encode(utf8_encode($Imputadodroga->getCveDroga())) . ",";
                    if ($rsResultado != "") {
                        $json .= '"desDroga":' . json_encode(utf8_encode($rsResultado[0]->getDesDroga())) . ",";
                    } else {
                        $json .= '"desDroga": "",';
                    }
                    $json .= '"activo":' . json_encode(utf8_encode($Imputadodroga->getActivo())) . "";
                    $json .= "}" . "\n";
                    $x ++;
                    if ($x <= count($ImputadosdrogascarpetasDto)) {
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

        public function insertImputadosdrogascarpetas($ImputadosdrogascarpetasDto) {
            /* $ImputadosdrogascarpetasDto=$this->validarImputadosdrogascarpetas($ImputadosdrogascarpetasDto);
              $ImputadosdrogascarpetasController = new ImputadosdrogascarpetasController();
              $ImputadosdrogascarpetasDto = $ImputadosdrogascarpetasController->insertImputadosdrogascarpetas($ImputadosdrogascarpetasDto);
              if($ImputadosdrogascarpetasDto!=""){
              $dtoToJson = new DtoToJson($ImputadosdrogascarpetasDto);
              return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
              }
              $jsonDto = new Encode_JSON();
              return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO")); */
            $ImputadosdrogascarpetasDto = $this->validarImputadosdrogascarpetas($ImputadosdrogascarpetasDto);
            $ImputadosdrogascarpetasController = new ImputadosdrogascarpetasController();
            $rs = $ImputadosdrogascarpetasController->insertImputadosdrogascarpetas($ImputadosdrogascarpetasDto);
            return $rs;
        }

        public function updateImputadosdrogascarpetas($ImputadosdrogascarpetasDto) {
            /* $ImputadosdrogascarpetasDto=$this->validarImputadosdrogascarpetas($ImputadosdrogascarpetasDto);
              $ImputadosdrogascarpetasController = new ImputadosdrogascarpetasController();
              $ImputadosdrogascarpetasDto = $ImputadosdrogascarpetasController->updateImputadosdrogascarpetas($ImputadosdrogascarpetasDto);
              if($ImputadosdrogascarpetasDto!=""){
              $dtoToJson = new DtoToJson($ImputadosdrogascarpetasDto);
              return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
              }
              $jsonDto = new Encode_JSON();
              return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION")); */
            $ImputadosdrogascarpetasDto = $this->validarImputadosdrogascarpetas($ImputadosdrogascarpetasDto);
            $ImputadosdrogascarpetasController = new ImputadosdrogascarpetasController();
            $rs = $ImputadosdrogascarpetasController->updateImputadosdrogascarpetas($ImputadosdrogascarpetasDto);
            return $rs;
        }

        public function deleteImputadosdrogascarpetas($ImputadosdrogascarpetasDto) {
            /* $ImputadosdrogascarpetasDto=$this->validarImputadosdrogascarpetas($ImputadosdrogascarpetasDto);
              $ImputadosdrogascarpetasController = new ImputadosdrogascarpetasController();
              $ImputadosdrogascarpetasDto = $ImputadosdrogascarpetasController->deleteImputadosdrogascarpetas($ImputadosdrogascarpetasDto);
              if($ImputadosdrogascarpetasDto==true){
              $jsonDto = new Encode_JSON();
              return $jsonDto->encode(array("totalCount"=>"0","text"=>"REGISTRO ELIMINADO DE FORMA CORRECTA"));
              }
              $jsonDto = new Encode_JSON();
              return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL LA BAJA")); */
            $ImputadosdrogascarpetasDto = $this->validarImputadosdrogascarpetas($ImputadosdrogascarpetasDto);
            $ImputadosdrogascarpetasController = new ImputadosdrogascarpetasController();
            $rs = $ImputadosdrogascarpetasController->deleteImputadosdrogascarpetas($ImputadosdrogascarpetasDto);
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

    @$idImputadoDrogaCarpeta = $_POST["idImputadoDrogaCarpeta"];
    @$idImputadoCarpeta = $_POST["idImputadoCarpeta"];
    @$cveDroga = $_POST["cveDroga"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];

    $imputadosdrogascarpetasFacade = new ImputadosdrogascarpetasFacade();
    $imputadosdrogascarpetasDto = new ImputadosdrogascarpetasDTO();

    $imputadosdrogascarpetasDto->setIdImputadoDrogaCarpeta($idImputadoDrogaCarpeta);
    $imputadosdrogascarpetasDto->setIdImputadoCarpeta($idImputadoCarpeta);
    $imputadosdrogascarpetasDto->setCveDroga($cveDroga);
    $imputadosdrogascarpetasDto->setActivo($activo);
    $imputadosdrogascarpetasDto->setFechaRegistro($fechaRegistro);
    $imputadosdrogascarpetasDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($idImputadoDrogaCarpeta == "")) {
        $imputadosdrogascarpetasDto = $imputadosdrogascarpetasFacade->insertImputadosdrogascarpetas($imputadosdrogascarpetasDto);
        echo $imputadosdrogascarpetasDto;
    } else if (($accion == "guardar") && ($idImputadoDrogaCarpeta != "")) {
        $imputadosdrogascarpetasDto = $imputadosdrogascarpetasFacade->updateImputadosdrogascarpetas($imputadosdrogascarpetasDto);
        echo $imputadosdrogascarpetasDto;
    } else if ($accion == "consultar") {
        $imputadosdrogascarpetasDto = $imputadosdrogascarpetasFacade->selectImputadosdrogascarpetas($imputadosdrogascarpetasDto);
        echo $imputadosdrogascarpetasDto;
    } else if (($accion == "baja") && ($idImputadoDrogaCarpeta != "")) {
        $imputadosdrogascarpetasDto = $imputadosdrogascarpetasFacade->deleteImputadosdrogascarpetas($imputadosdrogascarpetasDto);
        echo $imputadosdrogascarpetasDto;
    } else if (($accion == "seleccionar") && ($idImputadoDrogaCarpeta != "")) {
        $imputadosdrogascarpetasDto = $imputadosdrogascarpetasFacade->selectImputadosdrogascarpetas($imputadosdrogascarpetasDto);
        echo $imputadosdrogascarpetasDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>