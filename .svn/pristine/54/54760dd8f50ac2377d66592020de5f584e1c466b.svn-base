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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/gruposjuzgados/GruposjuzgadosDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/gruposjuzgados/GruposjuzgadosDAO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/gruposjuzgados/GruposjuzgadosController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
//Grupos cateos
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/gruposcateos/GruposcateosDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/gruposcateos/GruposcateosDAO.Class.php");
//Juzgados
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");

    class GruposjuzgadosFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarGruposjuzgados($GruposjuzgadosDto) {
            $GruposjuzgadosDto->setcveGrupoJuzgado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposjuzgadosDto->getcveGrupoJuzgado(), "utf8") : strtoupper($GruposjuzgadosDto->getcveGrupoJuzgado()))))));
            if ($this->esFecha($GruposjuzgadosDto->getcveGrupoJuzgado())) {
                $GruposjuzgadosDto->setcveGrupoJuzgado($this->fechaMysql($GruposjuzgadosDto->getcveGrupoJuzgado()));
            }
            $GruposjuzgadosDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposjuzgadosDto->getcveJuzgado(), "utf8") : strtoupper($GruposjuzgadosDto->getcveJuzgado()))))));
            if ($this->esFecha($GruposjuzgadosDto->getcveJuzgado())) {
                $GruposjuzgadosDto->setcveJuzgado($this->fechaMysql($GruposjuzgadosDto->getcveJuzgado()));
            }
            $GruposjuzgadosDto->setcveGrupoCateo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposjuzgadosDto->getcveGrupoCateo(), "utf8") : strtoupper($GruposjuzgadosDto->getcveGrupoCateo()))))));
            if ($this->esFecha($GruposjuzgadosDto->getcveGrupoCateo())) {
                $GruposjuzgadosDto->setcveGrupoCateo($this->fechaMysql($GruposjuzgadosDto->getcveGrupoCateo()));
            }
            $GruposjuzgadosDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposjuzgadosDto->getactivo(), "utf8") : strtoupper($GruposjuzgadosDto->getactivo()))))));
            if ($this->esFecha($GruposjuzgadosDto->getactivo())) {
                $GruposjuzgadosDto->setactivo($this->fechaMysql($GruposjuzgadosDto->getactivo()));
            }
            $GruposjuzgadosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposjuzgadosDto->getfechaRegistro(), "utf8") : strtoupper($GruposjuzgadosDto->getfechaRegistro()))))));
            if ($this->esFecha($GruposjuzgadosDto->getfechaRegistro())) {
                $GruposjuzgadosDto->setfechaRegistro($this->fechaMysql($GruposjuzgadosDto->getfechaRegistro()));
            }
            $GruposjuzgadosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposjuzgadosDto->getfechaActualizacion(), "utf8") : strtoupper($GruposjuzgadosDto->getfechaActualizacion()))))));
            if ($this->esFecha($GruposjuzgadosDto->getfechaActualizacion())) {
                $GruposjuzgadosDto->setfechaActualizacion($this->fechaMysql($GruposjuzgadosDto->getfechaActualizacion()));
            }
            return $GruposjuzgadosDto;
        }

        public function selectGruposjuzgados($GruposjuzgadosDto) {
            $GruposjuzgadosDto = $this->validarGruposjuzgados($GruposjuzgadosDto);
            $GruposjuzgadosController = new GruposjuzgadosController();
            $GruposjuzgadosDto = $GruposjuzgadosController->selectGruposjuzgados($GruposjuzgadosDto);
            if ($GruposjuzgadosDto != "") {
                $dtoToJson = new DtoToJson($GruposjuzgadosDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertGruposjuzgados($GruposjuzgadosDto) {
            $GruposjuzgadosDto = $this->validarGruposjuzgados($GruposjuzgadosDto);
            $GruposjuzgadosController = new GruposjuzgadosController();
            $GruposjuzgadosDto = $GruposjuzgadosController->insertGruposjuzgados($GruposjuzgadosDto);
            if ($GruposjuzgadosDto != "") {
                $dtoToJson = new DtoToJson($GruposjuzgadosDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateGruposjuzgados($GruposjuzgadosDto) {
            $GruposjuzgadosDto = $this->validarGruposjuzgados($GruposjuzgadosDto);
            $GruposjuzgadosController = new GruposjuzgadosController();
            $GruposjuzgadosDto = $GruposjuzgadosController->updateGruposjuzgados($GruposjuzgadosDto);
            if ($GruposjuzgadosDto != "") {
                $dtoToJson = new DtoToJson($GruposjuzgadosDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteGruposjuzgados($GruposjuzgadosDto) {
            $GruposjuzgadosDto = $this->validarGruposjuzgados($GruposjuzgadosDto);
            $GruposjuzgadosController = new GruposjuzgadosController();
            $GruposjuzgadosDto = $GruposjuzgadosController->deleteGruposjuzgados($GruposjuzgadosDto);
            if ($GruposjuzgadosDto == true) {
                $jsonDto = new Encode_JSON();
                return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
        }

        public function consultarGruposJuzgados($GruposjuzgadosDto) {
            $json = "";
            $x = 1;
            $grupos = array();
            $gruposCateos = "";
            $order = "";
            //$GruposjuzgadosDto = $this->validarGruposjuzgados($GruposjuzgadosDto);
            $GruposjuzgadosController = new GruposjuzgadosController();
            $GruposjuzgadosDto = $GruposjuzgadosController->selectGruposjuzgados($GruposjuzgadosDto);
            if ($GruposjuzgadosDto != "") {
                foreach ($GruposjuzgadosDto as $grupoJuzgado) {
                    $grupos[] = $grupoJuzgado->getCveGrupoCateo();
                }
                $gruposCateos = implode(",", $grupos);
                $gruposCateosDto = new GruposcateosDTO();
                $gruposCateosDao = new GruposcateosDAO();
                $order = " AND cveGrupoCateo IN (" . $gruposCateos . ")";
                $gruposCateosDto->setActivo("S");
                $gruposCateosDto = $gruposCateosDao->selectGruposcateos($gruposCateosDto, $order, null);
                if ($gruposCateosDto != "") {

                    $json .= "{";
                    $json .= '"status":"Ok",';
                    $json .= '"text":"Resultados de la consulta",';
                    $json .= '"totalCount":"' . count($gruposCateosDto) . '",';
                    $json .= '"data":[';
                    foreach ($gruposCateosDto as $gruposCateos) {
                        $json .= "{";
                        $json .= '"cveGrupoCateo":' . json_encode($gruposCateos->getCveGrupoCateo()) . ",";
                        $json .= '"desGrupoCateo":' . json_encode(utf8_encode($gruposCateos->getdesGrupoCateo())) . ",";
                        $json .= '"activo":' . json_encode(utf8_encode($gruposCateos->getActivo())) . ",";
                        $json .= '"fechaRegistro":' . json_encode(utf8_encode($gruposCateos->getFechaRegistro())) . ",";
                        $json .= '"fechaActualizacion":' . json_encode(utf8_encode($gruposCateos->getFechaActualizacion())) . "";
                        $json .= "}" . "\n";
                        $x ++;
                        if ($x <= count($gruposCateosDto)) {
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

        public function consultarJuzgados($gruposJuzgadosDto) {
            $json = "";
            $x = 1;
            $grupos = array();
            $gruposCateos = "";
            $order = "";
            $GruposjuzgadosController = new GruposjuzgadosController();
            $gruposJuzgadosDto = $GruposjuzgadosController->selectGruposjuzgados($gruposJuzgadosDto);
            if ($gruposJuzgadosDto != "") {

                $json .= "{";
                $json .= '"status":"Ok",';
                $json .= '"text":"Resultados de la consulta",';
                $json .= '"totalCount":"' . count($gruposJuzgadosDto) . '",';
                $json .= '"data":[';
                foreach ($gruposJuzgadosDto as $gruposCateos) {
                    $juzgadosDto = new JuzgadosDTO();
                    $juzgadosDao = new JuzgadosDAO();
                    $juzgadosDto->setCveJuzgado($gruposCateos->getCveJuzgado());
                    $orden = " ORDER BY desJuzgado";
                    $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto, $orden, null);
                    if ($juzgadosDto != "") {
                        $desJuzgado = $juzgadosDto[0]->getDesJuzgado();
                    } else {
                        $desJuzgado = "N/A";
                    }
                    $json .= "{";
                    $json .= '"cveGrupoJuzgado":' . json_encode($gruposCateos->getCveGrupoJuzgado()) . ",";
                    $json .= '"cveJuzgado":' . json_encode($gruposCateos->getCveJuzgado()) . ",";
                    $json .= '"desJuzgado":' . json_encode(utf8_encode($desJuzgado)) . ",";
                    $json .= '"cveGrupoCateo":' . json_encode($gruposCateos->getCveGrupoCateo()) . ",";
                    $json .= '"activo":' . json_encode($gruposCateos->getActivo()) . ",";
                    $json .= '"fechaRegistro":' . json_encode(utf8_encode($gruposCateos->getFechaRegistro())) . ",";
                    $json .= '"fechaActualizacion":' . json_encode(utf8_encode($gruposCateos->getFechaActualizacion())) . "";
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

            return $json;
        }

        /*
         * Consultar juzgados de acurdo al grupo cateo enviado y a la adscripcion 
         * del usuario
         */

        public function consultarJuzgadosDistrito($gruposjuzgadosDto) {
            $json = "";
            $x = 1;
            $juzgados = array();
            $cadenaJuzgados = "";
            //COnsultar la clave de distrito de la adscripcion del usuario
            $juzgadosDto = new JuzgadosDTO();
            $juzgadosDao = new JuzgadosDAO();
            $juzgadosDto->setCveJuzgado($gruposjuzgadosDto->getCveJuzgado());
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
                    $gruposJuzgadosDto = new GruposjuzgadosDTO();
                    $gruposJuzgadosDao = new GruposjuzgadosDAO();
                    $gruposJuzgadosDto->setCveGrupoCateo($gruposjuzgadosDto->getCveGrupoCateo());
                    $gruposJuzgadosDto->setActivo("S");
                    $gruposJuzgadosDto = $gruposJuzgadosDao->selectGruposjuzgados($gruposJuzgadosDto, $order);
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
                            $json .= '"cveGrupoJuzgado":' . json_encode($grupos->getCveGrupoJuzgado()) . ",";
                            $json .= '"cveJuzgado":' . json_encode($grupos->getCveJuzgado()) . ",";
                            $json .= '"desJuzgado":' . json_encode(utf8_encode($desJuzgado)) . ",";
                            $json .= '"cveGrupoCateo":' . json_encode($grupos->getCveGrupoCateo()) . ",";
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

        public function guardarGruposJuzgados($gruposJuzgadosDto) {
            //$GruposjuzgadosDto = $this->validarGruposjuzgados($GruposjuzgadosDto);
            $GruposjuzgadosController = new GruposjuzgadosController();
            $gruposJuzgadosDto = $GruposjuzgadosController->guardarGruposJuzgados($gruposJuzgadosDto);
            return $gruposJuzgadosDto;
        }

        public function eliminarGruposJuzgados($gruposjuzgadosDto) {
            $GruposjuzgadosController = new GruposjuzgadosController();
            $gruposjuzgadosDto = $GruposjuzgadosController->eliminarGruposJuzgados($gruposjuzgadosDto);
            return $gruposjuzgadosDto;
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

    @$cveGrupoJuzgado = $_POST["cveGrupoJuzgado"];
    @$cveJuzgado = $_POST["cveJuzgado"];
    @$cveGrupoCateo = $_POST["cveGrupoCateo"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];

    $gruposjuzgadosFacade = new GruposjuzgadosFacade();
    $gruposjuzgadosDto = new GruposjuzgadosDTO();

    $gruposjuzgadosDto->setCveGrupoJuzgado($cveGrupoJuzgado);
    $gruposjuzgadosDto->setCveJuzgado($cveJuzgado);
    $gruposjuzgadosDto->setCveGrupoCateo($cveGrupoCateo);
    $gruposjuzgadosDto->setActivo($activo);
    $gruposjuzgadosDto->setFechaRegistro($fechaRegistro);
    $gruposjuzgadosDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($cveGrupoJuzgado == "")) {
        $gruposjuzgadosDto = $gruposjuzgadosFacade->insertGruposjuzgados($gruposjuzgadosDto);
        echo $gruposjuzgadosDto;
    } else if (($accion == "guardar") && ($cveGrupoJuzgado != "")) {
        $gruposjuzgadosDto = $gruposjuzgadosFacade->updateGruposjuzgados($gruposjuzgadosDto);
        echo $gruposjuzgadosDto;
    } else if ($accion == "consultar") {
        $gruposjuzgadosDto = $gruposjuzgadosFacade->selectGruposjuzgados($gruposjuzgadosDto);
        echo $gruposjuzgadosDto;
    } else if (($accion == "baja") && ($cveGrupoJuzgado != "")) {
        $gruposjuzgadosDto = $gruposjuzgadosFacade->deleteGruposjuzgados($gruposjuzgadosDto);
        echo $gruposjuzgadosDto;
    } else if (($accion == "seleccionar") && ($cveGrupoJuzgado != "")) {
        $gruposjuzgadosDto = $gruposjuzgadosFacade->selectGruposjuzgados($gruposjuzgadosDto);
        echo $gruposjuzgadosDto;
    } else if ($accion == "consulta") {
        $gruposjuzgadosDto = $gruposjuzgadosFacade->consultarGruposJuzgados($gruposjuzgadosDto);
        echo $gruposjuzgadosDto;
    } else if ($accion == "consultarJuzgados") {
        $gruposjuzgadosDto = $gruposjuzgadosFacade->consultarJuzgados($gruposjuzgadosDto);
        echo $gruposjuzgadosDto;
    } else if ($accion == "guarda") {
        if (isset($_POST['cveJuzgado']) && count($_POST['cveJuzgado']) > 0) {
            for ($n = 0; $n < count($_POST['cveJuzgado']); $n++) {
                $gruposJuzgadosDto[$n] = new GruposjuzgadosDTO();
                $gruposJuzgadosDto[$n]->setActivo("S");
                $gruposJuzgadosDto[$n]->setCveJuzgado($_POST['cveJuzgado'][$n]);
                $gruposJuzgadosDto[$n]->setCveGrupoCateo($cveGrupoCateo);
            }
            $gruposjuzgadosDto = $gruposjuzgadosFacade->guardarGruposJuzgados($gruposJuzgadosDto);
            echo $gruposjuzgadosDto;
        } else {
            $jsonDto = new Encode_JSON();
            echo $jsonDto->encode(array("totalCount" => "0", "text" => "No se recibieron datos!"));
        }
    } else if ($accion == "elimina") {
        $gruposjuzgadosDto = $gruposjuzgadosFacade->eliminarGruposJuzgados($gruposjuzgadosDto);
        echo $gruposjuzgadosDto;
    } else if ($accion == "bajaRegistros") {
        /*
         * Eliminar los grupos seleccionados por el usuario y los registros
         * relacionados (tblgruposjuzgados)
         */
        if (isset($_POST['eliminar']) && count($_POST['eliminar']) > 0) {
            for ($n = 0; $n < count($_POST['eliminar']); $n++) {
                $gruposJuzgadosDto[$n] = new GruposjuzgadosDTO();
                $gruposJuzgadosDto[$n]->setCveGrupoCateo($_POST['eliminar'][$n]);
                $gruposJuzgadosDto[$n]->setActivo("N");
            }
            $gruposjuzgadosDto = $gruposjuzgadosFacade->eliminarGruposJuzgados($gruposJuzgadosDto);
            echo $gruposjuzgadosDto;
        } else {
            $jsonDto = new Encode_JSON();
            echo $jsonDto->encode(array("totalCount" => "0", "text" => "NO SE RECIBIERON DATOS!"));
        }
    } else if ($accion == "consultarJuzgadosDistrito") {
        if (isset($_SESSION['cveAdscripcion'])) {
            $gruposjuzgadosDto->setCveJuzgado($_SESSION['cveAdscripcion']);
            $gruposjuzgadosDto = $gruposjuzgadosFacade->consultarJuzgadosDistrito($gruposjuzgadosDto);
            echo $gruposjuzgadosDto;
        }
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>