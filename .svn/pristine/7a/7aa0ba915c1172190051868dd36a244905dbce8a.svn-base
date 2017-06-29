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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/gruposordenesjuzgados/GruposordenesjuzgadosDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/gruposordenesjuzgados/GruposordenesjuzgadosController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
//juzgados
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");

    class GruposordenesjuzgadosFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarGruposordenesjuzgados($GruposordenesjuzgadosDto) {
            $GruposordenesjuzgadosDto->setcveGrupoOrdenJuzgado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposordenesjuzgadosDto->getcveGrupoOrdenJuzgado(), "utf8") : strtoupper($GruposordenesjuzgadosDto->getcveGrupoOrdenJuzgado()))))));
            if ($this->esFecha($GruposordenesjuzgadosDto->getcveGrupoOrdenJuzgado())) {
                $GruposordenesjuzgadosDto->setcveGrupoOrdenJuzgado($this->fechaMysql($GruposordenesjuzgadosDto->getcveGrupoOrdenJuzgado()));
            }
            $GruposordenesjuzgadosDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposordenesjuzgadosDto->getcveJuzgado(), "utf8") : strtoupper($GruposordenesjuzgadosDto->getcveJuzgado()))))));
            if ($this->esFecha($GruposordenesjuzgadosDto->getcveJuzgado())) {
                $GruposordenesjuzgadosDto->setcveJuzgado($this->fechaMysql($GruposordenesjuzgadosDto->getcveJuzgado()));
            }
            $GruposordenesjuzgadosDto->setcveGrupoOrden(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposordenesjuzgadosDto->getcveGrupoOrden(), "utf8") : strtoupper($GruposordenesjuzgadosDto->getcveGrupoOrden()))))));
            if ($this->esFecha($GruposordenesjuzgadosDto->getcveGrupoOrden())) {
                $GruposordenesjuzgadosDto->setcveGrupoOrden($this->fechaMysql($GruposordenesjuzgadosDto->getcveGrupoOrden()));
            }
            $GruposordenesjuzgadosDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposordenesjuzgadosDto->getactivo(), "utf8") : strtoupper($GruposordenesjuzgadosDto->getactivo()))))));
            if ($this->esFecha($GruposordenesjuzgadosDto->getactivo())) {
                $GruposordenesjuzgadosDto->setactivo($this->fechaMysql($GruposordenesjuzgadosDto->getactivo()));
            }
            $GruposordenesjuzgadosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposordenesjuzgadosDto->getfechaRegistro(), "utf8") : strtoupper($GruposordenesjuzgadosDto->getfechaRegistro()))))));
            if ($this->esFecha($GruposordenesjuzgadosDto->getfechaRegistro())) {
                $GruposordenesjuzgadosDto->setfechaRegistro($this->fechaMysql($GruposordenesjuzgadosDto->getfechaRegistro()));
            }
            $GruposordenesjuzgadosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposordenesjuzgadosDto->getfechaActualizacion(), "utf8") : strtoupper($GruposordenesjuzgadosDto->getfechaActualizacion()))))));
            if ($this->esFecha($GruposordenesjuzgadosDto->getfechaActualizacion())) {
                $GruposordenesjuzgadosDto->setfechaActualizacion($this->fechaMysql($GruposordenesjuzgadosDto->getfechaActualizacion()));
            }
            return $GruposordenesjuzgadosDto;
        }

        public function selectGruposordenesjuzgados($GruposordenesjuzgadosDto) {
            $GruposordenesjuzgadosDto = $this->validarGruposordenesjuzgados($GruposordenesjuzgadosDto);
            $GruposordenesjuzgadosController = new GruposordenesjuzgadosController();
            $GruposordenesjuzgadosDto = $GruposordenesjuzgadosController->selectGruposordenesjuzgados($GruposordenesjuzgadosDto);
            if ($GruposordenesjuzgadosDto != "") {
                $dtoToJson = new DtoToJson($GruposordenesjuzgadosDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertGruposordenesjuzgados($GruposordenesjuzgadosDto) {
            $GruposordenesjuzgadosDto = $this->validarGruposordenesjuzgados($GruposordenesjuzgadosDto);
            $GruposordenesjuzgadosController = new GruposordenesjuzgadosController();
            $GruposordenesjuzgadosDto = $GruposordenesjuzgadosController->insertGruposordenesjuzgados($GruposordenesjuzgadosDto);
            if ($GruposordenesjuzgadosDto != "") {
                $dtoToJson = new DtoToJson($GruposordenesjuzgadosDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateGruposordenesjuzgados($GruposordenesjuzgadosDto) {
            $GruposordenesjuzgadosDto = $this->validarGruposordenesjuzgados($GruposordenesjuzgadosDto);
            $GruposordenesjuzgadosController = new GruposordenesjuzgadosController();
            $GruposordenesjuzgadosDto = $GruposordenesjuzgadosController->updateGruposordenesjuzgados($GruposordenesjuzgadosDto);
            if ($GruposordenesjuzgadosDto != "") {
                $dtoToJson = new DtoToJson($GruposordenesjuzgadosDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteGruposordenesjuzgados($GruposordenesjuzgadosDto) {
            $GruposordenesjuzgadosDto = $this->validarGruposordenesjuzgados($GruposordenesjuzgadosDto);
            $GruposordenesjuzgadosController = new GruposordenesjuzgadosController();
            $GruposordenesjuzgadosDto = $GruposordenesjuzgadosController->deleteGruposordenesjuzgados($GruposordenesjuzgadosDto);
            if ($GruposordenesjuzgadosDto == true) {
                $jsonDto = new Encode_JSON();
                return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
        }

        public function consultarJuzgados($gruposOrdenesJuzgadosDto) {
            $json = "";
            $x = 1;
            $grupos = array();
            $gruposCateos = "";
            $order = "";
            $GruposOrdenesjuzgadosController = new GruposordenesjuzgadosController();
            $gruposOrdenesJuzgadosDto = $GruposOrdenesjuzgadosController->selectGruposordenesjuzgados($gruposOrdenesJuzgadosDto);
            if ($gruposOrdenesJuzgadosDto != "") {

                $json .= "{";
                $json .= '"status":"Ok",';
                $json .= '"text":"Resultados de la consulta",';
                $json .= '"totalCount":"' . count($gruposOrdenesJuzgadosDto) . '",';
                $json .= '"data":[';
                foreach ($gruposOrdenesJuzgadosDto as $grupos) {
                    $juzgadosDto = new JuzgadosDTO();
                    $juzgadosDao = new JuzgadosDAO();
                    $juzgadosDto->setCveJuzgado($grupos->getCveJuzgado());
                    $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto);
                    if ($juzgadosDto != "") {
                        $desJuzgado = $juzgadosDto[0]->getDesJuzgado();
                    } else {
                        $desJuzgado = "N/A";
                    }
                    $json .= "{";
                    $json .= '"cveGrupoOrdenJuzgado":' . json_encode($grupos->getCveGrupoOrdenJuzgado()) . ",";
                    $json .= '"cveJuzgado":' . json_encode($grupos->getCveJuzgado()) . ",";
                    $json .= '"desJuzgado":' . json_encode(utf8_encode($desJuzgado)) . ",";
                    $json .= '"cveGrupoOrden":' . json_encode($grupos->getCveGrupoOrden()) . ",";
                    $json .= '"activo":' . json_encode($grupos->getActivo()) . ",";
                    $json .= '"fechaRegistro":' . json_encode(utf8_encode($grupos->getFechaRegistro())) . ",";
                    $json .= '"fechaActualizacion":' . json_encode(utf8_encode($grupos->getFechaActualizacion())) . "";
                    $json .= "}" . "\n";
                    $x ++;
                    if ($x <= count($gruposOrdenesJuzgadosDto)) {
                        $json .= ",";
                    }
                }
                $json .= "]";
                $json .= "}";
            } else {
                $json .= '{"estatus":"Fail",';
                $json .= '"totalCount":"0",';
                $json .= '"text":"No se encontraron resultados."}';
            }

            return $json;
        }

        public function consultarJuzgadosDistrito($gruposordenesjuzgadosDto) {
            $json = "";
            $x = 1;
            $juzgados = array();
            $cadenaJuzgados = "";
            //COnsultar la clave de distrito de la adscripcion del usuario
            $juzgadosDto = new JuzgadosDTO();
            $juzgadosDao = new JuzgadosDAO();
            $juzgadosDto->setCveJuzgado($gruposordenesjuzgadosDto->getCveJuzgado());
            $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto);
            if ($juzgadosDto != "") {
                //Consultar los juzgados activos que pertenezcan al distrito
                $juzgadosTmp = new JuzgadosDTO();
                $juzgadosTmp->setCveDistrito($juzgadosDto[0]->getCveDistrito());
                $juzgadosTmp->setActivo("S");
                $juzgadosTmp = $juzgadosDao->selectJuzgados($juzgadosTmp);
                if ($juzgadosTmp != "") {
                    foreach ($juzgadosTmp as $juzgado) {
                        $juzgados[] = $juzgado->getCveJuzgado();
                    }
                    $cadenaJuzgados = implode(",", $juzgados);
                    /*
                     * Consultar los juzgados que pertenezcan al grupo de cateo enviado
                     * como parametro y que correspondan al distrito de la adscripcion
                     */
                    $order = " AND cveJuzgado IN (" . $cadenaJuzgados . ")";
                    $gruposJuzgadosDto = new GruposordenesjuzgadosDTO();
                    $gruposJuzgadosDao = new GruposordenesjuzgadosDAO();
                    $gruposJuzgadosDto->setCveGrupoOrden($gruposordenesjuzgadosDto->getCveGrupoOrden());
                    $gruposJuzgadosDto->setActivo("S");
                    $gruposJuzgadosDto = $gruposJuzgadosDao->selectGruposordenesjuzgados($gruposJuzgadosDto, $order);
                    if ($gruposJuzgadosDto != "") {
                        $json .= "{";
                        $json .= '"status":"Ok",';
                        $json .= '"text":"Resultados de la consulta",';
                        $json .= '"totalCount":"' . count($gruposJuzgadosDto) . '",';
                        $json .= '"data":[';
                        foreach ($gruposJuzgadosDto as $grupos) {
                            $juzgadoDto = new JuzgadosDTO();
                            $juzgadoDto->setCveJuzgado($grupos->getCveJuzgado());
                            $orden = " ORDER BY desJuzgado";
                            $juzgadoDto = $juzgadosDao->selectJuzgados($juzgadoDto, $orden, null);
                            if ($juzgadoDto != "") {
                                $desJuzgado = $juzgadoDto[0]->getDesJuzgado();
                            } else {
                                $desJuzgado = "N/A";
                            }
                            $json .= "{";
                            $json .= '"cveGrupoOrdenJuzgado":' . json_encode($grupos->getCveGrupoOrdenJuzgado()) . ",";
                            $json .= '"cveJuzgado":' . json_encode($grupos->getCveJuzgado()) . ",";
                            $json .= '"desJuzgado":' . json_encode(utf8_encode($desJuzgado)) . ",";
                            $json .= '"cveGrupoOrden":' . json_encode($grupos->getCveGrupoOrden()) . ",";
                            $json .= '"activo":' . json_encode($grupos->getActivo()) . ",";
                            $json .= '"fechaRegistro":' . json_encode(utf8_encode($grupos->getFechaRegistro())) . ",";
                            $json .= '"fechaActualizacion":' . json_encode(utf8_encode($grupos->getFechaActualizacion())) . "";
                            $json .= "}" . "\n";
                            $x ++;
                            if ($x <= count($gruposJuzgadosDto)) {
                                $json .= ",";
                            }
                        }
                        $json .= "]";
                        $json .= "}";
                    } else {
                        $json .= '{"estatus":"Fail",';
                        $json .= '"totalCount":"0",';
                        $json .= '"text":"No se encontraron resultados."}';
                    }
                } else {
                    $json .= '{"estatus":"Fail",';
                    $json .= '"totalCount":"0",';
                    $json .= '"text":"No se encontraron resultados."}';
                }
            } else {
                $json .= '{"estatus":"Fail",';
                $json .= '"totalCount":"0",';
                $json .= '"text":"No se encontraron resultados."}';
            }
            return $json;
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

    @$cveGrupoOrdenJuzgado = $_POST["cveGrupoOrdenJuzgado"];
    @$cveJuzgado = $_POST["cveJuzgado"];
    @$cveGrupoOrden = $_POST["cveGrupoOrden"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];

    $gruposordenesjuzgadosFacade = new GruposordenesjuzgadosFacade();
    $gruposordenesjuzgadosDto = new GruposordenesjuzgadosDTO();

    $gruposordenesjuzgadosDto->setCveGrupoOrdenJuzgado($cveGrupoOrdenJuzgado);
    $gruposordenesjuzgadosDto->setCveJuzgado($cveJuzgado);
    $gruposordenesjuzgadosDto->setCveGrupoOrden($cveGrupoOrden);
    $gruposordenesjuzgadosDto->setActivo($activo);
    $gruposordenesjuzgadosDto->setFechaRegistro($fechaRegistro);
    $gruposordenesjuzgadosDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($cveGrupoOrdenJuzgado == "")) {
        $gruposordenesjuzgadosDto = $gruposordenesjuzgadosFacade->insertGruposordenesjuzgados($gruposordenesjuzgadosDto);
        echo $gruposordenesjuzgadosDto;
    } else if (($accion == "guardar") && ($cveGrupoOrdenJuzgado != "")) {
        $gruposordenesjuzgadosDto = $gruposordenesjuzgadosFacade->updateGruposordenesjuzgados($gruposordenesjuzgadosDto);
        echo $gruposordenesjuzgadosDto;
    } else if ($accion == "consultar") {
        $gruposordenesjuzgadosDto = $gruposordenesjuzgadosFacade->selectGruposordenesjuzgados($gruposordenesjuzgadosDto);
        echo $gruposordenesjuzgadosDto;
    } else if (($accion == "baja") && ($cveGrupoOrdenJuzgado != "")) {
        $gruposordenesjuzgadosDto = $gruposordenesjuzgadosFacade->deleteGruposordenesjuzgados($gruposordenesjuzgadosDto);
        echo $gruposordenesjuzgadosDto;
    } else if (($accion == "seleccionar") && ($cveGrupoOrdenJuzgado != "")) {
        $gruposordenesjuzgadosDto = $gruposordenesjuzgadosFacade->selectGruposordenesjuzgados($gruposordenesjuzgadosDto);
        echo $gruposordenesjuzgadosDto;
    } else if ($accion == "consultarJuzgados") {
        $gruposordenesjuzgadosDto = $gruposordenesjuzgadosFacade->consultarJuzgados($gruposordenesjuzgadosDto);
        echo $gruposordenesjuzgadosDto;
    } else if ($accion == "consultarJuzgadosDistrito") {
        if (isset($_SESSION['cveAdscripcion'])) {
            $gruposordenesjuzgadosDto->setCveJuzgado($_SESSION['cveAdscripcion']);
            $gruposordenesjuzgadosDto = $gruposordenesjuzgadosFacade->consultarJuzgadosDistrito($gruposordenesjuzgadosDto);
            echo $gruposordenesjuzgadosDto;
        }
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>