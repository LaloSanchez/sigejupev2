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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/gruposmuestras/GruposmuestrasDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/gruposmuestras/GruposmuestrasDAO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/gruposmuestras/GruposmuestrasController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
//juzgados
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");
//gruposjuzgados
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/gruposmuestrasjuzgados/GruposmuestrasjuzgadosDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/gruposmuestrasjuzgados/GruposmuestrasjuzgadosDAO.Class.php");

    class GruposmuestrasFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarGruposmuestras($GruposmuestrasDto) {
            $GruposmuestrasDto->setcveGrupoMuestra(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposmuestrasDto->getcveGrupoMuestra(), "utf8") : strtoupper($GruposmuestrasDto->getcveGrupoMuestra()))))));
            if ($this->esFecha($GruposmuestrasDto->getcveGrupoMuestra())) {
                $GruposmuestrasDto->setcveGrupoMuestra($this->fechaMysql($GruposmuestrasDto->getcveGrupoMuestra()));
            }
            $GruposmuestrasDto->setdesGrupoMuestra(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposmuestrasDto->getdesGrupoMuestra(), "utf8") : strtoupper($GruposmuestrasDto->getdesGrupoMuestra()))))));
            if ($this->esFecha($GruposmuestrasDto->getdesGrupoMuestra())) {
                $GruposmuestrasDto->setdesGrupoMuestra($this->fechaMysql($GruposmuestrasDto->getdesGrupoMuestra()));
            }
            $GruposmuestrasDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposmuestrasDto->getactivo(), "utf8") : strtoupper($GruposmuestrasDto->getactivo()))))));
            if ($this->esFecha($GruposmuestrasDto->getactivo())) {
                $GruposmuestrasDto->setactivo($this->fechaMysql($GruposmuestrasDto->getactivo()));
            }
            $GruposmuestrasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposmuestrasDto->getfechaRegistro(), "utf8") : strtoupper($GruposmuestrasDto->getfechaRegistro()))))));
            if ($this->esFecha($GruposmuestrasDto->getfechaRegistro())) {
                $GruposmuestrasDto->setfechaRegistro($this->fechaMysql($GruposmuestrasDto->getfechaRegistro()));
            }
            $GruposmuestrasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposmuestrasDto->getfechaActualizacion(), "utf8") : strtoupper($GruposmuestrasDto->getfechaActualizacion()))))));
            if ($this->esFecha($GruposmuestrasDto->getfechaActualizacion())) {
                $GruposmuestrasDto->setfechaActualizacion($this->fechaMysql($GruposmuestrasDto->getfechaActualizacion()));
            }
            return $GruposmuestrasDto;
        }

        public function selectGruposmuestras($GruposmuestrasDto, $param = null) {
//        $GruposmuestrasDto = $this->validarGruposmuestras($GruposmuestrasDto);
//        $GruposmuestrasController = new GruposmuestrasController();
//        $GruposmuestrasDto = $GruposmuestrasController->selectGruposmuestras($GruposmuestrasDto);
//        if ($GruposmuestrasDto != "") {
//            $dtoToJson = new DtoToJson($GruposmuestrasDto);
//            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
//        }
//        $jsonDto = new Encode_JSON();
//        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
            $GruposmuestrasDto = $this->validarGruposmuestras($GruposmuestrasDto);
            //$GruposmuestrasController = new GruposmuestrasController();
            //var_dump($param);
            $gruposMuestrasDao = new GruposmuestrasDAO();
            $order = " AND desGrupoMuestra LIKE'%" . $GruposmuestrasDto->getDesGrupoMuestra() . "%'";
            $order .= " ORDER BY desGrupoMuestra";
            if ($param != null) {
                if ($param["paginacion"] == "S") {
                    if ($param["pagina"] > 0) {
                        $inicial = ($param["pagina"] - 1) * $param["cantidadPorPagina"];
                    } else {
                        $inicial = 0;
                    }
                    $order .= " LIMIT " . $inicial . "," . $param["cantidadPorPagina"];
                }
            }
            $grupoMuestraDto = new GruposmuestrasDTO();
            $grupoMuestraDto->setCveGrupoMuestra($GruposmuestrasDto->getCveGrupoMuestra());
            $grupoMuestraDto->setActivo("S");
            $GruposmuestrasDto = $gruposMuestrasDao->selectGruposmuestras($grupoMuestraDto, $order, null);
            $json = "";
            $x = 1;
            if ($GruposmuestrasDto != "") {

                $json .= "{";
                $json .= '"status":"Ok",';
                $json .= '"text":"Resultados de la consulta",';
                $json .= '"totalCount":"' . count($GruposmuestrasDto) . '",';
                $json .= '"data":[';
                foreach ($GruposmuestrasDto as $gruposMuestras) {
                    $json .= "{";
                    $json .= '"cveGrupoMuestra":' . json_encode($gruposMuestras->getCveGrupoMuestra()) . ",";
                    $json .= '"desGrupoMuestra":' . json_encode(utf8_encode($gruposMuestras->getDesGrupoMuestra())) . ",";
                    $json .= '"activo":' . json_encode(utf8_encode($gruposMuestras->getActivo())) . ",";
                    $json .= '"fechaRegistro":' . json_encode(utf8_encode($gruposMuestras->getFechaRegistro())) . ",";
                    $json .= '"fechaActualizacion":' . json_encode(utf8_encode($gruposMuestras->getFechaActualizacion())) . "";
                    $json .= "}" . "\n";
                    $x ++;
                    if ($x <= count($GruposmuestrasDto)) {
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
         * Consultar grupos de juzgados de acuerdo a la adscripcion del usuario
         */

        public function selectGruposMuestrasDistrito($juzgadosDto) {
            $json = "";
            $x = 1;
            $gruposMuestrasJuzgadosDao = new GruposmuestrasjuzgadosDAO();
            $gruposMuestrasjuzgadosDto = new GruposmuestrasjuzgadosDTO();
            $gruposMuestrasjuzgadosDto->setCveJuzgado($juzgadosDto->getCveJuzgado());
            $gruposMuestrasjuzgadosDto->setActivo("S");
            $gruposMuestrasjuzgadosDto = $gruposMuestrasJuzgadosDao->selectGruposmuestrasjuzgados($gruposMuestrasjuzgadosDto);
            if ($gruposMuestrasjuzgadosDto != "") {
                $gruposMuestrasDto = new GruposmuestrasDTO();
                $gruposMuestrasDao = new GruposmuestrasDAO();
                $gruposMuestrasDto->setCveGrupoMuestra($gruposMuestrasjuzgadosDto[0]->getCveGrupoMuestra());
                $gruposMuestrasDto = $gruposMuestrasDao->selectGruposmuestras($gruposMuestrasDto);
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

        public function getPaginasGruposMuestras($gruposmuestrasDto, $param) {
            $gruposmuestrasDto = $this->validarGruposmuestras($gruposmuestrasDto);
            $GruposmuestrasController = new GruposmuestrasController();
            $gruposmuestrasDto = $GruposmuestrasController->getPaginasGruposMuestras($gruposmuestrasDto, $param);
            return $gruposmuestrasDto;
        }

        public function agregarGruposMuestras($GruposmuestrasDto, $gruposMuestrasJuzgadosDto) {
            $GruposmuestrasDto = $this->validarGruposmuestras($GruposmuestrasDto);
            $GruposmuestrasController = new GruposmuestrasController();
            $GruposmuestrasDto = $GruposmuestrasController->agregarGruposMuestras($GruposmuestrasDto, $gruposMuestrasJuzgadosDto);
            return $GruposmuestrasDto;
        }

        public function modificarGruposMuestras($GruposmuestrasDto, $gruposMuestrasJuzgadosDto) {
            $GruposmuestrasDto = $this->validarGruposmuestras($GruposmuestrasDto);
            $GruposmuestrasController = new GruposmuestrasController();
            $GruposmuestrasDto = $GruposmuestrasController->modificarGruposMuestras($GruposmuestrasDto, $gruposMuestrasJuzgadosDto);
            return $GruposmuestrasDto;
        }

        public function eliminarGruposMuestras($GruposmuestrasDto) {
            //$GruposmuestrasDto = $this->validarGruposmuestras($GruposmuestrasDto);
            $GruposmuestrasController = new GruposmuestrasController();
            $GruposmuestrasDto = $GruposmuestrasController->eliminarGruposMuestras($GruposmuestrasDto);
            return $GruposmuestrasDto;
        }

        public function insertGruposmuestras($GruposmuestrasDto) {
            $GruposmuestrasDto = $this->validarGruposmuestras($GruposmuestrasDto);
            $GruposmuestrasController = new GruposmuestrasController();
            $GruposmuestrasDto = $GruposmuestrasController->insertGruposmuestras($GruposmuestrasDto);
            if ($GruposmuestrasDto != "") {
                $dtoToJson = new DtoToJson($GruposmuestrasDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateGruposmuestras($GruposmuestrasDto) {
            $GruposmuestrasDto = $this->validarGruposmuestras($GruposmuestrasDto);
            $GruposmuestrasController = new GruposmuestrasController();
            $GruposmuestrasDto = $GruposmuestrasController->updateGruposmuestras($GruposmuestrasDto);
            if ($GruposmuestrasDto != "") {
                $dtoToJson = new DtoToJson($GruposmuestrasDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteGruposmuestras($GruposmuestrasDto) {
            $GruposmuestrasDto = $this->validarGruposmuestras($GruposmuestrasDto);
            $GruposmuestrasController = new GruposmuestrasController();
            $GruposmuestrasDto = $GruposmuestrasController->deleteGruposmuestras($GruposmuestrasDto);
            if ($GruposmuestrasDto == true) {
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

    @$cveGrupoMuestra = $_POST["cveGrupoMuestra"];
    @$desGrupoMuestra = $_POST["desGrupoMuestra"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];

    $gruposmuestrasFacade = new GruposmuestrasFacade();
    $gruposmuestrasDto = new GruposmuestrasDTO();

    $gruposmuestrasDto->setCveGrupoMuestra($cveGrupoMuestra);
    $gruposmuestrasDto->setDesGrupoMuestra($desGrupoMuestra);
    $gruposmuestrasDto->setActivo($activo);
    $gruposmuestrasDto->setFechaRegistro($fechaRegistro);
    $gruposmuestrasDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($cveGrupoMuestra == "")) {
        $gruposmuestrasDto = $gruposmuestrasFacade->insertGruposmuestras($gruposmuestrasDto);
        echo $gruposmuestrasDto;
    } else if (($accion == "guardar") && ($cveGrupoMuestra != "")) {
        $gruposmuestrasDto = $gruposmuestrasFacade->updateGruposmuestras($gruposmuestrasDto);
        echo $gruposmuestrasDto;
    } else if ($accion == "consultar") {
        @$param["paginacion"] = $_POST["paginacion"];
        @$param["cantidadPorPagina"] = $_POST["cantidadRegistros"];
        @$param["pagina"] = $_POST["pagina"];
        $gruposmuestrasDto = $gruposmuestrasFacade->selectGruposmuestras($gruposmuestrasDto, $param);
        echo $gruposmuestrasDto;
    } else if (($accion == "baja") && ($cveGrupoMuestra != "")) {
        $gruposmuestrasDto = $gruposmuestrasFacade->deleteGruposmuestras($gruposmuestrasDto);
        echo $gruposmuestrasDto;
    } else if (($accion == "seleccionar") && ($cveGrupoMuestra != "")) {
        @$param["paginacion"] = $_POST["paginacion"];
        @$param["cantidadPorPagina"] = $_POST["cantidadRegistros"];
        @$param["pagina"] = $_POST["pagina"];
        $gruposmuestrasDto = $gruposmuestrasFacade->selectGruposmuestras($gruposmuestrasDto, $param);
        echo $gruposmuestrasDto;
    } else if (($accion == "guarda") && ($cveGrupoMuestra == "")) {
        if (isset($_POST['cveJuzgado']) && count($_POST['cveJuzgado']) > 0) {
            for ($n = 0; $n < count($_POST['cveJuzgado']); $n++) {
                $gruposMuestrasJuzgadosDto[$n] = new GruposmuestrasjuzgadosDTO();
                $gruposMuestrasJuzgadosDto[$n]->setCveJuzgado($_POST['cveJuzgado'][$n]);
            }
            $gruposmuestrasDto = $gruposmuestrasFacade->agregarGruposMuestras($gruposmuestrasDto, $gruposMuestrasJuzgadosDto);
            echo $gruposmuestrasDto;
        } else {
            $jsonDto = new Encode_JSON();
            echo $jsonDto->encode(array("totalCount" => "0", "text" => "No se recibieron datos!"));
        }
    } else if (($accion == "guarda") && ($cveGrupoMuestra != "")) {
        if (isset($_POST['cveJuzgado']) && count($_POST['cveJuzgado']) > 0) {
            for ($n = 0; $n < count($_POST['cveJuzgado']); $n++) {
                $gruposMuestrasJuzgadosDto[$n] = new GruposmuestrasjuzgadosDTO();
                $gruposMuestrasJuzgadosDto[$n]->setCveJuzgado($_POST['cveJuzgado'][$n]);
            }
            $gruposmuestrasDto = $gruposmuestrasFacade->modificarGruposMuestras($gruposmuestrasDto, $gruposMuestrasJuzgadosDto);
            echo $gruposmuestrasDto;
        } else {
            $jsonDto = new Encode_JSON();
            echo $jsonDto->encode(array("totalCount" => "0", "text" => "No se recibieron datos!"));
        }
    } else if (($accion == "elimina") && ($cveGrupoMuestra != "")) {
        $gruposMuestrasDto[0] = new GruposmuestrasDTO();
        $gruposMuestrasDto[0]->setCveGrupoMuestra($cveGrupoMuestra);
        $gruposMuestrasDto[0]->setActivo("N");
        $gruposmuestrasDto = $gruposmuestrasFacade->eliminarGruposMuestras($gruposMuestrasDto);
        echo $gruposmuestrasDto;
    } else if ($accion == "bajaRegistros") {
        /*
         * Eliminar los grupos seleccionados por el usuario y los registros
         * relacionados (tblgruposmuestrasjuzgados)
         */
        if (isset($_POST['eliminar']) && count($_POST['eliminar']) > 0) {
            for ($n = 0; $n < count($_POST['eliminar']); $n++) {
                $gruposMuestrasDto[$n] = new GruposmuestrasDTO();
                $gruposMuestrasDto[$n]->setCveGrupoMuestra($_POST['eliminar'][$n]);
                $gruposMuestrasDto[$n]->setActivo("N");
            }
            $gruposMuestrasDto = $gruposmuestrasFacade->eliminarGruposMuestras($gruposMuestrasDto);
            echo $gruposMuestrasDto;
        } else {
            $jsonDto = new Encode_JSON();
            echo $jsonDto->encode(array("totalCount" => "0", "text" => "NO SE RECIBIERON DATOS!"));
        }
    } else if ($accion == "getPaginas") {
        @$param["paginacion"] = true;
        @$param["cantidadPorPagina"] = $_POST["registrosPorPagina"];
        $gruposmuestrasDto = $gruposmuestrasFacade->getPaginasGruposMuestras($gruposmuestrasDto, $param);
        echo $gruposmuestrasDto;
    } else if ($accion == "consultarPorDistrito") {
        if (isset($_SESSION['cveAdscripcion'])) {
            $juzgadosDto = new JuzgadosDTO();
            $juzgadosDto->setCveJuzgado($_SESSION['cveAdscripcion']);

            $gruposmuestrasDto = $gruposmuestrasFacade->selectGruposMuestrasDistrito($juzgadosDto);
            echo $gruposmuestrasDto;
        }
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>