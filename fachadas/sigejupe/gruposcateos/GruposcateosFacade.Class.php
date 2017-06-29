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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/gruposcateos/GruposcateosDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/gruposcateos/GruposcateosDAO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/gruposcateos/GruposcateosController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
//juzgados
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");
//gruposjuzgados
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/gruposjuzgados/GruposjuzgadosDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/gruposjuzgados/GruposjuzgadosDAO.Class.php");

    class GruposcateosFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarGruposcateos($GruposcateosDto) {
            $GruposcateosDto->setcveGrupoCateo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposcateosDto->getcveGrupoCateo(), "utf8") : strtoupper($GruposcateosDto->getcveGrupoCateo()))))));
            if ($this->esFecha($GruposcateosDto->getcveGrupoCateo())) {
                $GruposcateosDto->setcveGrupoCateo($this->fechaMysql($GruposcateosDto->getcveGrupoCateo()));
            }
            $GruposcateosDto->setdesGrupoCateo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposcateosDto->getdesGrupoCateo(), "utf8") : strtoupper($GruposcateosDto->getdesGrupoCateo()))))));
            if ($this->esFecha($GruposcateosDto->getdesGrupoCateo())) {
                $GruposcateosDto->setdesGrupoCateo($this->fechaMysql($GruposcateosDto->getdesGrupoCateo()));
            }
            $GruposcateosDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposcateosDto->getactivo(), "utf8") : strtoupper($GruposcateosDto->getactivo()))))));
            if ($this->esFecha($GruposcateosDto->getactivo())) {
                $GruposcateosDto->setactivo($this->fechaMysql($GruposcateosDto->getactivo()));
            }
            $GruposcateosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposcateosDto->getfechaRegistro(), "utf8") : strtoupper($GruposcateosDto->getfechaRegistro()))))));
            if ($this->esFecha($GruposcateosDto->getfechaRegistro())) {
                $GruposcateosDto->setfechaRegistro($this->fechaMysql($GruposcateosDto->getfechaRegistro()));
            }
            $GruposcateosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposcateosDto->getfechaActualizacion(), "utf8") : strtoupper($GruposcateosDto->getfechaActualizacion()))))));
            if ($this->esFecha($GruposcateosDto->getfechaActualizacion())) {
                $GruposcateosDto->setfechaActualizacion($this->fechaMysql($GruposcateosDto->getfechaActualizacion()));
            }
            return $GruposcateosDto;
        }

        public function selectGruposcateos($GruposcateosDto, $param = null) {
            $GruposcateosDto = $this->validarGruposcateos($GruposcateosDto);
            //$GruposcateosController = new GruposcateosController();
            //var_dump($param);
            $gruposCateosDao = new GruposcateosDAO();
            $order = " AND desGrupoCateo LIKE'%" . $GruposcateosDto->getDesGrupoCateo() . "%'";
            $order .= " ORDER BY desGrupoCateo";
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
            $grupoCateoDto = new GruposcateosDTO();
            $grupoCateoDto->setCveGrupoCateo($GruposcateosDto->getCveGrupoCateo());
            $grupoCateoDto->setActivo("S");
            $GruposcateosDto = $gruposCateosDao->selectGruposcateos($grupoCateoDto, $order, null);
            $json = "";
            $x = 1;
            if ($GruposcateosDto != "") {
//            $dtoToJson = new DtoToJson($GruposcateosDto);
//            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
                $json .= "{";
                $json .= '"status":"Ok",';
                $json .= '"text":"Resultados de la consulta",';
                $json .= '"totalCount":"' . count($GruposcateosDto) . '",';
                $json .= '"data":[';
                foreach ($GruposcateosDto as $gruposCateos) {
                    $json .= "{";
                    $json .= '"cveGrupoCateo":' . json_encode($gruposCateos->getCveGrupoCateo()) . ",";
                    $json .= '"desGrupoCateo":' . json_encode(utf8_encode($gruposCateos->getdesGrupoCateo())) . ",";
                    $json .= '"activo":' . json_encode(utf8_encode($gruposCateos->getActivo())) . ",";
                    $json .= '"fechaRegistro":' . json_encode(utf8_encode($gruposCateos->getFechaRegistro())) . ",";
                    $json .= '"fechaActualizacion":' . json_encode(utf8_encode($gruposCateos->getFechaActualizacion())) . "";
                    $json .= "}" . "\n";
                    $x ++;
                    if ($x <= count($GruposcateosDto)) {
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
//        $jsonDto = new Encode_JSON();
//        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
            return $json;
        }

        /*
         * Consultar grupos de juzgados de acuerdo a la adscripcion del usuario
         */

        public function selectGruposcateosDistrito($juzgadosDto) {
            $json = "";
            $x = 1;
            $gruposJuzgadosDao = new GruposjuzgadosDAO();
            $gruposjuzgadosDto = new GruposjuzgadosDTO();
            $gruposjuzgadosDto->setCveJuzgado($juzgadosDto->getCveJuzgado());
            $gruposjuzgadosDto->setActivo("S");
            $gruposjuzgadosDto = $gruposJuzgadosDao->selectGruposjuzgados($gruposjuzgadosDto);
            if ($gruposjuzgadosDto != "") {
                $gruposCateosDto = new GruposcateosDTO();
                $gruposCateosDao = new GruposcateosDAO();
                $gruposCateosDto->setCveGrupoCateo($gruposjuzgadosDto[0]->getCveGrupoCateo());
                $gruposCateosDto = $gruposCateosDao->selectGruposcateos($gruposCateosDto);
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

        public function getPaginasGruposCateos($gruposcateosDto, $param) {
            $gruposcateosDto = $this->validarGruposcateos($gruposcateosDto);
            $GruposcateosController = new GruposcateosController();
            $gruposcateosDto = $GruposcateosController->getPaginasGruposCateos($gruposcateosDto, $param);
            return $gruposcateosDto;
        }

        public function agregarGruposcateos($GruposcateosDto, $gruposJuzgadosDto) {
            $GruposcateosDto = $this->validarGruposcateos($GruposcateosDto);
            $GruposcateosController = new GruposcateosController();
            $GruposcateosDto = $GruposcateosController->agregarGruposcateos($GruposcateosDto, $gruposJuzgadosDto);
            return $GruposcateosDto;
        }

        public function modificarGruposcateos($GruposcateosDto, $gruposJuzgadosDto) {
            $GruposcateosDto = $this->validarGruposcateos($GruposcateosDto);
            $GruposcateosController = new GruposcateosController();
            $GruposcateosDto = $GruposcateosController->modificarGruposcateos($GruposcateosDto, $gruposJuzgadosDto);
            return $GruposcateosDto;
        }

        public function eliminarGruposcateos($GruposcateosDto) {
            //$GruposcateosDto = $this->validarGruposcateos($GruposcateosDto);
            $GruposcateosController = new GruposcateosController();
            $GruposcateosDto = $GruposcateosController->eliminarGruposcateos($GruposcateosDto);
            return $GruposcateosDto;
        }

        public function insertGruposcateos($GruposcateosDto) {
            $GruposcateosDto = $this->validarGruposcateos($GruposcateosDto);
            $GruposcateosController = new GruposcateosController();
            $GruposcateosDto = $GruposcateosController->insertGruposcateos($GruposcateosDto);
            if ($GruposcateosDto != "") {
                $dtoToJson = new DtoToJson($GruposcateosDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateGruposcateos($GruposcateosDto) {
            $GruposcateosDto = $this->validarGruposcateos($GruposcateosDto);
            $GruposcateosController = new GruposcateosController();
            $GruposcateosDto = $GruposcateosController->updateGruposcateos($GruposcateosDto);
            if ($GruposcateosDto != "") {
                $dtoToJson = new DtoToJson($GruposcateosDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteGruposcateos($GruposcateosDto) {
            $GruposcateosDto = $this->validarGruposcateos($GruposcateosDto);
            $GruposcateosController = new GruposcateosController();
            $GruposcateosDto = $GruposcateosController->deleteGruposcateos($GruposcateosDto);
            if ($GruposcateosDto == true) {
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

    @$cveGrupoCateo = $_POST["cveGrupoCateo"];
    @$desGrupoCateo = $_POST["desGrupoCateo"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];

    $gruposcateosFacade = new GruposcateosFacade();
    $gruposcateosDto = new GruposcateosDTO();

    $gruposcateosDto->setCveGrupoCateo($cveGrupoCateo);
    $gruposcateosDto->setDesGrupoCateo($desGrupoCateo);
    $gruposcateosDto->setActivo($activo);
    $gruposcateosDto->setFechaRegistro($fechaRegistro);
    $gruposcateosDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($cveGrupoCateo == "")) {
        $gruposcateosDto = $gruposcateosFacade->insertGruposcateos($gruposcateosDto);
        echo $gruposcateosDto;
    } else if (($accion == "guardar") && ($cveGrupoCateo != "")) {
        $gruposcateosDto = $gruposcateosFacade->updateGruposcateos($gruposcateosDto);
        echo $gruposcateosDto;
    } else if ($accion == "consultar") {
        @$param["paginacion"] = $_POST["paginacion"];
        @$param["cantidadPorPagina"] = $_POST["cantidadRegistros"];
        @$param["pagina"] = $_POST["pagina"];
        $gruposcateosDto = $gruposcateosFacade->selectGruposcateos($gruposcateosDto, $param);
        echo $gruposcateosDto;
    } else if (($accion == "baja") && ($cveGrupoCateo != "")) {
        $gruposcateosDto = $gruposcateosFacade->deleteGruposcateos($gruposcateosDto);
        echo $gruposcateosDto;
    } else if (($accion == "seleccionar") && ($cveGrupoCateo != "")) {
        @$param["paginacion"] = $_POST["paginacion"];
        @$param["cantidadPorPagina"] = $_POST["cantidadRegistros"];
        @$param["pagina"] = $_POST["pagina"];
        $gruposcateosDto = $gruposcateosFacade->selectGruposcateos($gruposcateosDto, $param);
        echo $gruposcateosDto;
    } else if (($accion == "guarda") && ($cveGrupoCateo == "")) {
        if (isset($_POST['cveJuzgado']) && count($_POST['cveJuzgado']) > 0) {
            for ($n = 0; $n < count($_POST['cveJuzgado']); $n++) {
                $gruposJuzgadosDto[$n] = new GruposjuzgadosDTO();
                $gruposJuzgadosDto[$n]->setCveJuzgado($_POST['cveJuzgado'][$n]);
            }
            $gruposcateosDto = $gruposcateosFacade->agregarGruposcateos($gruposcateosDto, $gruposJuzgadosDto);
            echo $gruposcateosDto;
        } else {
            $jsonDto = new Encode_JSON();
            echo $jsonDto->encode(array("totalCount" => "0", "text" => "No se recibieron datos!"));
        }
    } else if (($accion == "guarda") && ($cveGrupoCateo != "")) {
        if (isset($_POST['cveJuzgado']) && count($_POST['cveJuzgado']) > 0) {
            for ($n = 0; $n < count($_POST['cveJuzgado']); $n++) {
                $gruposJuzgadosDto[$n] = new GruposjuzgadosDTO();
                $gruposJuzgadosDto[$n]->setCveJuzgado($_POST['cveJuzgado'][$n]);
            }
            $gruposcateosDto = $gruposcateosFacade->modificarGruposcateos($gruposcateosDto, $gruposJuzgadosDto);
            echo $gruposcateosDto;
        } else {
            $jsonDto = new Encode_JSON();
            echo $jsonDto->encode(array("totalCount" => "0", "text" => "No se recibieron datos!"));
        }
    } else if (($accion == "elimina") && ($cveGrupoCateo != "")) {
        $gruposCateosDto[0] = new GruposcateosDTO();
        $gruposCateosDto[0]->setCveGrupoCateo($cveGrupoCateo);
        $gruposCateosDto[0]->setActivo("N");
        $gruposcateosDto = $gruposcateosFacade->eliminarGruposcateos($gruposCateosDto);
        echo $gruposcateosDto;
    } else if ($accion == "bajaRegistros") {
        /*
         * Eliminar los grupos seleccionados por el usuario y los registros
         * relacionados (tblgruposjuzgados)
         */
        if (isset($_POST['eliminar']) && count($_POST['eliminar']) > 0) {
            for ($n = 0; $n < count($_POST['eliminar']); $n++) {
                $gruposCateosDto[$n] = new GruposcateosDTO();
                $gruposCateosDto[$n]->setCveGrupoCateo($_POST['eliminar'][$n]);
                $gruposCateosDto[$n]->setActivo("N");
            }
            $gruposCateosDto = $gruposcateosFacade->eliminarGruposcateos($gruposCateosDto);
            echo $gruposCateosDto;
        } else {
            $jsonDto = new Encode_JSON();
            echo $jsonDto->encode(array("totalCount" => "0", "text" => "NO SE RECIBIERON DATOS!"));
        }
    } else if ($accion == "getPaginas") {
        @$param["paginacion"] = true;
        @$param["cantidadPorPagina"] = $_POST["registrosPorPagina"];
        $gruposcateosDto = $gruposcateosFacade->getPaginasGruposCateos($gruposcateosDto, $param);
        echo $gruposcateosDto;
    } else if ($accion == "consultarPorDistrito") {
        if (isset($_SESSION['cveAdscripcion'])) {
            $juzgadosDto = new JuzgadosDTO();
            $juzgadosDto->setCveJuzgado($_SESSION['cveAdscripcion']);

            $gruposcateosDto = $gruposcateosFacade->selectGruposcateosDistrito($juzgadosDto);
            echo $gruposcateosDto;
        }
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>