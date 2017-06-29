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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/gruposmuestrasjuzgados/GruposmuestrasjuzgadosDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/gruposmuestrasjuzgados/GruposmuestrasjuzgadosDAO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/gruposmuestrasjuzgados/GruposmuestrasjuzgadosController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
//Grupos muestras
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/gruposmuestras/GruposmuestrasDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/gruposmuestras/GruposmuestrasDAO.Class.php");
//Juzgados
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");

    class GruposmuestrasjuzgadosFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarGruposmuestrasjuzgados($GruposmuestrasjuzgadosDto) {
            $GruposmuestrasjuzgadosDto->setcveGrupoMuestraJuzgado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposmuestrasjuzgadosDto->getcveGrupoMuestraJuzgado(), "utf8") : strtoupper($GruposmuestrasjuzgadosDto->getcveGrupoMuestraJuzgado()))))));
            if ($this->esFecha($GruposmuestrasjuzgadosDto->getcveGrupoMuestraJuzgado())) {
                $GruposmuestrasjuzgadosDto->setcveGrupoMuestraJuzgado($this->fechaMysql($GruposmuestrasjuzgadosDto->getcveGrupoMuestraJuzgado()));
            }
            $GruposmuestrasjuzgadosDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposmuestrasjuzgadosDto->getcveJuzgado(), "utf8") : strtoupper($GruposmuestrasjuzgadosDto->getcveJuzgado()))))));
            if ($this->esFecha($GruposmuestrasjuzgadosDto->getcveJuzgado())) {
                $GruposmuestrasjuzgadosDto->setcveJuzgado($this->fechaMysql($GruposmuestrasjuzgadosDto->getcveJuzgado()));
            }
            $GruposmuestrasjuzgadosDto->setcveGrupoMuestra(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposmuestrasjuzgadosDto->getcveGrupoMuestra(), "utf8") : strtoupper($GruposmuestrasjuzgadosDto->getcveGrupoMuestra()))))));
            if ($this->esFecha($GruposmuestrasjuzgadosDto->getcveGrupoMuestra())) {
                $GruposmuestrasjuzgadosDto->setcveGrupoMuestra($this->fechaMysql($GruposmuestrasjuzgadosDto->getcveGrupoMuestra()));
            }
            $GruposmuestrasjuzgadosDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposmuestrasjuzgadosDto->getactivo(), "utf8") : strtoupper($GruposmuestrasjuzgadosDto->getactivo()))))));
            if ($this->esFecha($GruposmuestrasjuzgadosDto->getactivo())) {
                $GruposmuestrasjuzgadosDto->setactivo($this->fechaMysql($GruposmuestrasjuzgadosDto->getactivo()));
            }
            $GruposmuestrasjuzgadosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposmuestrasjuzgadosDto->getfechaRegistro(), "utf8") : strtoupper($GruposmuestrasjuzgadosDto->getfechaRegistro()))))));
            if ($this->esFecha($GruposmuestrasjuzgadosDto->getfechaRegistro())) {
                $GruposmuestrasjuzgadosDto->setfechaRegistro($this->fechaMysql($GruposmuestrasjuzgadosDto->getfechaRegistro()));
            }
            $GruposmuestrasjuzgadosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposmuestrasjuzgadosDto->getfechaActualizacion(), "utf8") : strtoupper($GruposmuestrasjuzgadosDto->getfechaActualizacion()))))));
            if ($this->esFecha($GruposmuestrasjuzgadosDto->getfechaActualizacion())) {
                $GruposmuestrasjuzgadosDto->setfechaActualizacion($this->fechaMysql($GruposmuestrasjuzgadosDto->getfechaActualizacion()));
            }
            return $GruposmuestrasjuzgadosDto;
        }

        public function selectGruposmuestrasjuzgados($GruposmuestrasjuzgadosDto) {
            $GruposmuestrasjuzgadosDto = $this->validarGruposmuestrasjuzgados($GruposmuestrasjuzgadosDto);
            $GruposmuestrasjuzgadosController = new GruposmuestrasjuzgadosController();
            $GruposmuestrasjuzgadosDto = $GruposmuestrasjuzgadosController->selectGruposmuestrasjuzgados($GruposmuestrasjuzgadosDto);
            if ($GruposmuestrasjuzgadosDto != "") {
                $dtoToJson = new DtoToJson($GruposmuestrasjuzgadosDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertGruposmuestrasjuzgados($GruposmuestrasjuzgadosDto) {
            $GruposmuestrasjuzgadosDto = $this->validarGruposmuestrasjuzgados($GruposmuestrasjuzgadosDto);
            $GruposmuestrasjuzgadosController = new GruposmuestrasjuzgadosController();
            $GruposmuestrasjuzgadosDto = $GruposmuestrasjuzgadosController->insertGruposmuestrasjuzgados($GruposmuestrasjuzgadosDto);
            if ($GruposmuestrasjuzgadosDto != "") {
                $dtoToJson = new DtoToJson($GruposmuestrasjuzgadosDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateGruposmuestrasjuzgados($GruposmuestrasjuzgadosDto) {
            $GruposmuestrasjuzgadosDto = $this->validarGruposmuestrasjuzgados($GruposmuestrasjuzgadosDto);
            $GruposmuestrasjuzgadosController = new GruposmuestrasjuzgadosController();
            $GruposmuestrasjuzgadosDto = $GruposmuestrasjuzgadosController->updateGruposmuestrasjuzgados($GruposmuestrasjuzgadosDto);
            if ($GruposmuestrasjuzgadosDto != "") {
                $dtoToJson = new DtoToJson($GruposmuestrasjuzgadosDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteGruposmuestrasjuzgados($GruposmuestrasjuzgadosDto) {
            $GruposmuestrasjuzgadosDto = $this->validarGruposmuestrasjuzgados($GruposmuestrasjuzgadosDto);
            $GruposmuestrasjuzgadosController = new GruposmuestrasjuzgadosController();
            $GruposmuestrasjuzgadosDto = $GruposmuestrasjuzgadosController->deleteGruposmuestrasjuzgados($GruposmuestrasjuzgadosDto);
            if ($GruposmuestrasjuzgadosDto == true) {
                $jsonDto = new Encode_JSON();
                return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
        }

        public function consultarGruposMuestrasJuzgados($GruposmuestrasjuzgadosDto) {
            $json = "";
            $x = 1;
            $grupos = array();
            $gruposMuestras = "";
            $order = "";
            //$GruposmuestrasjuzgadosDto = $this->validarGruposjuzgados($GruposmuestrasjuzgadosDto);
            $GruposmuestrasjuzgadosController = new GruposmuestrasjuzgadosController();
            $GruposmuestrasjuzgadosDto = $GruposmuestrasjuzgadosController->selectGruposmuestrasjuzgados($GruposmuestrasjuzgadosDto);
            if ($GruposmuestrasjuzgadosDto != "") {
                foreach ($GruposmuestrasjuzgadosDto as $grupoJuzgado) {
                    $grupos[] = $grupoJuzgado->getCveGrupoMuestra();
                }
                $gruposMuestras = implode(",", $grupos);
                $gruposMuestrasDto = new GruposmuestrasDTO();
                $gruposMuestrasDao = new GruposmuestrasDAO();
                $order = " AND cveGrupoMuestra IN (" . $gruposMuestras . ")";
                $gruposMuestrasDto->setActivo("S");
                $gruposMuestrasDto = $gruposMuestrasDao->selectGruposmuestras($gruposMuestrasDto, $order, null);
                if ($gruposMuestrasDto != "") {

                    $json .= "{";
                    $json .= '"status":"Ok",';
                    $json .= '"text":"Resultados de la consulta",';
                    $json .= '"totalCount":"' . count($gruposMuestrasDto) . '",';
                    $json .= '"data":[';
                    foreach ($gruposMuestrasDto as $gruposMuestras) {
                        $json .= "{";
                        $json .= '"cveGrupoMuestra":' . json_encode($gruposMuestras->getCveGrupoMuestra()) . ",";
                        $json .= '"desGrupoMuestra":' . json_encode(utf8_encode($gruposMuestras->getDesGrupoMuestra())) . ",";
                        $json .= '"activo":' . json_encode(utf8_encode($gruposMuestras->getActivo())) . ",";
                        $json .= '"fechaRegistro":' . json_encode(utf8_encode($gruposMuestras->getFechaRegistro())) . ",";
                        $json .= '"fechaActualizacion":' . json_encode(utf8_encode($gruposMuestras->getFechaActualizacion())) . "";
                        $json .= "}" . "\n";
                        $x ++;
                        if ($x <= count($gruposMuestrasDto)) {
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

            return $json;
        }

        public function consultarJuzgados($gruposMuestrasJuzgadosDto) {
            $json = "";
            $x = 1;
            $grupos = array();
            $gruposMuestras = "";
            $order = "";
            $GruposmuestrasjuzgadosController = new GruposmuestrasjuzgadosController();
            $gruposMuestrasJuzgadosDto = $GruposmuestrasjuzgadosController->selectGruposmuestrasjuzgados($gruposMuestrasJuzgadosDto);
            if ($gruposMuestrasJuzgadosDto != "") {

                $json .= "{";
                $json .= '"status":"Ok",';
                $json .= '"text":"Resultados de la consulta",';
                $json .= '"totalCount":"' . count($gruposMuestrasJuzgadosDto) . '",';
                $json .= '"data":[';
                foreach ($gruposMuestrasJuzgadosDto as $gruposMuestras) {
                    $juzgadosDto = new JuzgadosDTO();
                    $juzgadosDao = new JuzgadosDAO();
                    $juzgadosDto->setCveJuzgado($gruposMuestras->getCveJuzgado());
                    $orden = " ORDER BY desJuzgado";
                    $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto, $orden, null);
                    if ($juzgadosDto != "") {
                        $desJuzgado = $juzgadosDto[0]->getDesJuzgado();
                    } else {
                        $desJuzgado = "N/A";
                    }
                    $json .= "{";
                    $json .= '"cveGrupoMuestraJuzgado":' . json_encode($gruposMuestras->getCveGrupoMuestraJuzgado()) . ",";
                    $json .= '"cveJuzgado":' . json_encode($gruposMuestras->getCveJuzgado()) . ",";
                    $json .= '"desJuzgado":' . json_encode(utf8_encode($desJuzgado)) . ",";
                    $json .= '"cveGrupoMuestra":' . json_encode($gruposMuestras->getCveGrupoMuestra()) . ",";
                    $json .= '"activo":' . json_encode($gruposMuestras->getActivo()) . ",";
                    $json .= '"fechaRegistro":' . json_encode(utf8_encode($gruposMuestras->getFechaRegistro())) . ",";
                    $json .= '"fechaActualizacion":' . json_encode(utf8_encode($gruposMuestras->getFechaActualizacion())) . "";
                    $json .= "}" . "\n";
                    $x ++;
                    if ($x <= count($gruposMuestrasJuzgadosDto)) {
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

        /*
         * Consultar juzgados de acurdo al grupo muestra enviado y a la adscripcion 
         * del usuario
         */

        public function consultarJuzgadosDistrito($gruposmuestrasjuzgadosDto) {
            $json = "";
            $x = 1;
            $juzgados = array();
            $cadenaJuzgados = "";
            //COnsultar la clave de distrito de la adscripcion del usuario
            $juzgadosDto = new JuzgadosDTO();
            $juzgadosDao = new JuzgadosDAO();
            $juzgadosDto->setCveJuzgado($gruposmuestrasjuzgadosDto->getCveJuzgado());
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
                     * Consultar los juzgados que pertenezcan al grupo de muestra enviado
                     * como parametro y que correspondan al distrito de la adscripcion
                     */
                    $order = " AND cveJuzgado IN (" . $cadenaJuzgados . ")";
                    $gruposMuestrasJuzgadosDto = new GruposmuestrasjuzgadosDTO();
                    $gruposMuestrasJuzgadosDao = new GruposmuestrasjuzgadosDAO();
                    $gruposMuestrasJuzgadosDto->setCveGrupoMuestra($gruposmuestrasjuzgadosDto->getCveGrupoMuestra());
                    $gruposMuestrasJuzgadosDto->setActivo("S");
                    $gruposMuestrasJuzgadosDto = $gruposMuestrasJuzgadosDao->selectGruposmuestrasjuzgados($gruposMuestrasJuzgadosDto, $order);
                    if ($gruposMuestrasJuzgadosDto != "") {
                        $json .= "{";
                        $json .= '"status":"Ok",';
                        $json .= '"text":"Resultados de la consulta",';
                        $json .= '"totalCount":"' . count($gruposMuestrasJuzgadosDto) . '",';
                        $json .= '"data":[';
                        foreach ($gruposMuestrasJuzgadosDto as $grupos) {
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
                            $json .= '"cveGrupoMuestraJuzgado":' . json_encode($grupos->getCveGrupoMuestraJuzgado()) . ",";
                            $json .= '"cveJuzgado":' . json_encode($grupos->getCveJuzgado()) . ",";
                            $json .= '"desJuzgado":' . json_encode(utf8_encode($desJuzgado)) . ",";
                            $json .= '"cveGrupoMuestra":' . json_encode($grupos->getCveGrupoMuestra()) . ",";
                            $json .= '"activo":' . json_encode($grupos->getActivo()) . ",";
                            $json .= '"fechaRegistro":' . json_encode(utf8_encode($grupos->getFechaRegistro())) . ",";
                            $json .= '"fechaActualizacion":' . json_encode(utf8_encode($grupos->getFechaActualizacion())) . "";
                            $json .= "}" . "\n";
                            $x ++;
                            if ($x <= count($gruposMuestrasJuzgadosDto)) {
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

        public function guardarGruposMuestrasJuzgados($gruposMuestrasJuzgadosDto) {
            //$GruposmuestrasjuzgadosDto = $this->validarGruposjuzgados($GruposmuestrasjuzgadosDto);
            $GruposmuestrasjuzgadosController = new GruposmuestrasjuzgadosController();
            $gruposMuestrasJuzgadosDto = $GruposmuestrasjuzgadosController->guardarGruposMuestrasJuzgados($gruposMuestrasJuzgadosDto);
            return $gruposMuestrasJuzgadosDto;
        }

        public function eliminarGruposMuestrasJuzgados($gruposmuestrasjuzgadosDto) {
            $GruposmuestrasjuzgadosController = new GruposmuestrasjuzgadosController();
            $gruposmuestrasjuzgadosDto = $GruposmuestrasjuzgadosController->eliminarGruposMuestrasJuzgados($gruposmuestrasjuzgadosDto);
            return $gruposmuestrasjuzgadosDto;
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

    @$cveGrupoMuestraJuzgado = $_POST["cveGrupoMuestraJuzgado"];
    @$cveJuzgado = $_POST["cveJuzgado"];
    @$cveGrupoMuestra = $_POST["cveGrupoMuestra"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];

    $gruposmuestrasjuzgadosFacade = new GruposmuestrasjuzgadosFacade();
    $gruposmuestrasjuzgadosDto = new GruposmuestrasjuzgadosDTO();

    $gruposmuestrasjuzgadosDto->setCveGrupoMuestraJuzgado($cveGrupoMuestraJuzgado);
    $gruposmuestrasjuzgadosDto->setCveJuzgado($cveJuzgado);
    $gruposmuestrasjuzgadosDto->setCveGrupoMuestra($cveGrupoMuestra);
    $gruposmuestrasjuzgadosDto->setActivo($activo);
    $gruposmuestrasjuzgadosDto->setFechaRegistro($fechaRegistro);
    $gruposmuestrasjuzgadosDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($cveGrupoMuestraJuzgado == "")) {
        $gruposmuestrasjuzgadosDto = $gruposmuestrasjuzgadosFacade->insertGruposmuestrasjuzgados($gruposmuestrasjuzgadosDto);
        echo $gruposmuestrasjuzgadosDto;
    } else if (($accion == "guardar") && ($cveGrupoMuestraJuzgado != "")) {
        $gruposmuestrasjuzgadosDto = $gruposmuestrasjuzgadosFacade->updateGruposmuestrasjuzgados($gruposmuestrasjuzgadosDto);
        echo $gruposmuestrasjuzgadosDto;
    } else if ($accion == "consultar") {
        $gruposmuestrasjuzgadosDto = $gruposmuestrasjuzgadosFacade->selectGruposmuestrasjuzgados($gruposmuestrasjuzgadosDto);
        echo $gruposmuestrasjuzgadosDto;
    } else if (($accion == "baja") && ($cveGrupoMuestraJuzgado != "")) {
        $gruposmuestrasjuzgadosDto = $gruposmuestrasjuzgadosFacade->deleteGruposmuestrasjuzgados($gruposmuestrasjuzgadosDto);
        echo $gruposmuestrasjuzgadosDto;
    } else if (($accion == "seleccionar") && ($cveGrupoMuestraJuzgado != "")) {
        $gruposmuestrasjuzgadosDto = $gruposmuestrasjuzgadosFacade->selectGruposmuestrasjuzgados($gruposmuestrasjuzgadosDto);
        echo $gruposmuestrasjuzgadosDto;
    } else if ($accion == "consulta") {
        $gruposmuestrasjuzgadosDto = $gruposmuestrasjuzgadosFacade->consultarGruposMuestrasJuzgados($gruposmuestrasjuzgadosDto);
        echo $gruposmuestrasjuzgadosDto;
    } else if ($accion == "consultarJuzgados") {
        $gruposmuestrasjuzgadosDto = $gruposmuestrasjuzgadosFacade->consultarJuzgados($gruposmuestrasjuzgadosDto);
        echo $gruposmuestrasjuzgadosDto;
    } else if ($accion == "guarda") {
        if (isset($_POST['cveJuzgado']) && count($_POST['cveJuzgado']) > 0) {
            for ($n = 0; $n < count($_POST['cveJuzgado']); $n++) {
                $gruposMuestrasJuzgadosDto[$n] = new GruposmuestrasjuzgadosDTO();
                $gruposMuestrasJuzgadosDto[$n]->setActivo("S");
                $gruposMuestrasJuzgadosDto[$n]->setCveJuzgado($_POST['cveJuzgado'][$n]);
                $gruposMuestrasJuzgadosDto[$n]->setCveGrupoMuestra($cveGrupoMuestra);
            }
            $gruposmuestrasjuzgadosDto = $gruposmuestrasjuzgadosFacade->guardarGruposMuestrasJuzgados($gruposMuestrasJuzgadosDto);
            echo $gruposmuestrasjuzgadosDto;
        } else {
            $jsonDto = new Encode_JSON();
            echo $jsonDto->encode(array("totalCount" => "0", "text" => "No se recibieron datos!"));
        }
    } else if ($accion == "elimina") {
        $gruposmuestrasjuzgadosDto = $gruposmuestrasjuzgadosFacade->eliminarGruposMuestrasJuzgados($gruposmuestrasjuzgadosDto);
        echo $gruposmuestrasjuzgadosDto;
    } else if ($accion == "bajaRegistros") {
        /*
         * Eliminar los grupos seleccionados por el usuario y los registros
         * relacionados (tblgruposmuestrasjuzgados)
         */
        if (isset($_POST['eliminar']) && count($_POST['eliminar']) > 0) {
            for ($n = 0; $n < count($_POST['eliminar']); $n++) {
                $gruposMuestrasJuzgadosDto[$n] = new GruposjuzgadosDTO();
                $gruposMuestrasJuzgadosDto[$n]->setCveGrupoMuestra($_POST['eliminar'][$n]);
                $gruposMuestrasJuzgadosDto[$n]->setActivo("N");
            }
            $gruposmuestrasjuzgadosDto = $gruposmuestrasjuzgadosFacade->eliminarGruposMuestrasJuzgados($gruposMuestrasJuzgadosDto);
            echo $gruposmuestrasjuzgadosDto;
        } else {
            $jsonDto = new Encode_JSON();
            echo $jsonDto->encode(array("totalCount" => "0", "text" => "NO SE RECIBIERON DATOS!"));
        }
    } else if ($accion == "consultarJuzgadosDistrito") {
        if (isset($_SESSION['cveAdscripcion'])) {
            $gruposmuestrasjuzgadosDto->setCveJuzgado($_SESSION['cveAdscripcion']);
            $gruposmuestrasjuzgadosDto = $gruposmuestrasjuzgadosFacade->consultarJuzgadosDistrito($gruposmuestrasjuzgadosDto);
            echo $gruposmuestrasjuzgadosDto;
        }
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>