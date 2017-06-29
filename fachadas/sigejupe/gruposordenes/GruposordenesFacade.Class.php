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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/gruposordenes/GruposordenesDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/gruposordenes/GruposordenesDAO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/gruposordenes/GruposordenesController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
//Grupos ordenes juzgados
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/gruposordenesjuzgados/GruposordenesjuzgadosDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/gruposordenesjuzgados/GruposordenesjuzgadosDAO.Class.php");
//juzgados
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");

    class GruposordenesFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarGruposordenes($GruposordenesDto) {
            $GruposordenesDto->setcveGrupoOrden(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposordenesDto->getcveGrupoOrden(), "utf8") : strtoupper($GruposordenesDto->getcveGrupoOrden()))))));
            if ($this->esFecha($GruposordenesDto->getcveGrupoOrden())) {
                $GruposordenesDto->setcveGrupoOrden($this->fechaMysql($GruposordenesDto->getcveGrupoOrden()));
            }
            $GruposordenesDto->setdesGrupoOrden(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposordenesDto->getdesGrupoOrden(), "utf8") : strtoupper($GruposordenesDto->getdesGrupoOrden()))))));
            if ($this->esFecha($GruposordenesDto->getdesGrupoOrden())) {
                $GruposordenesDto->setdesGrupoOrden($this->fechaMysql($GruposordenesDto->getdesGrupoOrden()));
            }
            $GruposordenesDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposordenesDto->getactivo(), "utf8") : strtoupper($GruposordenesDto->getactivo()))))));
            if ($this->esFecha($GruposordenesDto->getactivo())) {
                $GruposordenesDto->setactivo($this->fechaMysql($GruposordenesDto->getactivo()));
            }
            $GruposordenesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposordenesDto->getfechaRegistro(), "utf8") : strtoupper($GruposordenesDto->getfechaRegistro()))))));
            if ($this->esFecha($GruposordenesDto->getfechaRegistro())) {
                $GruposordenesDto->setfechaRegistro($this->fechaMysql($GruposordenesDto->getfechaRegistro()));
            }
            $GruposordenesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposordenesDto->getfechaActualizacion(), "utf8") : strtoupper($GruposordenesDto->getfechaActualizacion()))))));
            if ($this->esFecha($GruposordenesDto->getfechaActualizacion())) {
                $GruposordenesDto->setfechaActualizacion($this->fechaMysql($GruposordenesDto->getfechaActualizacion()));
            }
            return $GruposordenesDto;
        }

        public function selectGruposOrdenes($GruposordenesDto, $param) {
            $GruposordenesDto = $this->validarGruposordenes($GruposordenesDto);
            $gruposOrdenesDao = new GruposordenesDAO();
            $order = " AND desGrupoOrden LIKE'%" . $GruposordenesDto->getDesGrupoOrden() . "%'";
            $order .= " ORDER BY desGrupoOrden";
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
            $grupoOrdenDto = new GruposordenesDTO();
            $grupoOrdenDto->setCveGrupoOrden($GruposordenesDto->getCveGrupoOrden());
            $grupoOrdenDto->setActivo("S");
            $GruposordenesDto = $gruposOrdenesDao->selectGruposordenes($grupoOrdenDto, $order, null);
            $json = "";
            $x = 1;
            if ($GruposordenesDto != "") {
//            $dtoToJson = new DtoToJson($GruposcateosDto);
//            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
                $json .= "{";
                $json .= '"status":"Ok",';
                $json .= '"text":"Resultados de la consulta",';
                $json .= '"totalCount":"' . count($GruposordenesDto) . '",';
                $json .= '"data":[';
                foreach ($GruposordenesDto as $gruposOrdenes) {
                    $json .= "{";
                    $json .= '"cveGrupoOrden":' . json_encode($gruposOrdenes->getCveGrupoOrden()) . ",";
                    $json .= '"desGrupoOrden":' . json_encode(utf8_encode($gruposOrdenes->getdesGrupoOrden())) . ",";
                    $json .= '"activo":' . json_encode(utf8_encode($gruposOrdenes->getActivo())) . ",";
                    $json .= '"fechaRegistro":' . json_encode(utf8_encode($gruposOrdenes->getFechaRegistro())) . ",";
                    $json .= '"fechaActualizacion":' . json_encode(utf8_encode($gruposOrdenes->getFechaActualizacion())) . "";
                    $json .= "}" . "\n";
                    $x ++;
                    if ($x <= count($GruposordenesDto)) {
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
         * CVonsultar grupos de juzgados de acurdo a la adscripcion del usuario
         */

        public function selectGruposordenesDistrito($juzgadosDto) {
            $json = "";
            $x = 1;
            $gruposOrdenesJuzgadosDao = new GruposordenesjuzgadosDAO();
            $gruposOrdenesjuzgadosDto = new GruposordenesjuzgadosDTO();
            $gruposOrdenesjuzgadosDto->setCveJuzgado($juzgadosDto->getCveJuzgado());
            $gruposOrdenesjuzgadosDto->setActivo("S");
            $gruposOrdenesjuzgadosDto = $gruposOrdenesJuzgadosDao->selectGruposordenesjuzgados($gruposOrdenesjuzgadosDto);
            if ($gruposOrdenesjuzgadosDto != "") {
                $gruposOrdenesDto = new GruposordenesDTO();
                $gruposOrdenesDao = new GruposordenesDAO();
                $gruposOrdenesDto->setCveGrupoOrden($gruposOrdenesjuzgadosDto[0]->getCveGrupoOrden());
                $gruposOrdenesDto = $gruposOrdenesDao->selectGruposordenes($gruposOrdenesDto);
                if ($gruposOrdenesDto != "") {
                    $json .= "{";
                    $json .= '"status":"Ok",';
                    $json .= '"text":"Resultados de la consulta",';
                    $json .= '"totalCount":"' . count($gruposOrdenesDto) . '",';
                    $json .= '"data":[';
                    foreach ($gruposOrdenesDto as $gruposOrdenes) {
                        $json .= "{";
                        $json .= '"cveGrupoOrden":' . json_encode($gruposOrdenes->getCveGrupoOrden()) . ",";
                        $json .= '"desGrupoOrden":' . json_encode(utf8_encode($gruposOrdenes->getDesGrupoOrden())) . ",";
                        $json .= '"activo":' . json_encode(utf8_encode($gruposOrdenes->getActivo())) . ",";
                        $json .= '"fechaRegistro":' . json_encode(utf8_encode($gruposOrdenes->getFechaRegistro())) . ",";
                        $json .= '"fechaActualizacion":' . json_encode(utf8_encode($gruposOrdenes->getFechaActualizacion())) . "";
                        $json .= "}" . "\n";
                        $x ++;
                        if ($x <= count($gruposOrdenesDto)) {
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

        public function getPaginasGruposOrdenes($gruposordenesDto, $param) {
            $gruposordenesDto = $this->validarGruposordenes($gruposordenesDto);
            $GruposordenesController = new GruposordenesController();
            $gruposordenesDto = $GruposordenesController->getPaginasGruposOrdenes($gruposordenesDto, $param);
            return $gruposordenesDto;
        }

        public function agregarGruposOrdenes($GruposordenesDto, $gruposOrdenesJuzgadosDto) {
            $GruposordenesDto = $this->validarGruposordenes($GruposordenesDto);
            $GruposordenesController = new GruposordenesController();
            $GruposordenesDto = $GruposordenesController->agregarGruposOrdenes($GruposordenesDto, $gruposOrdenesJuzgadosDto);
            return $GruposordenesDto;
        }

        public function modificarGruposOrdenes($GruposordenesDto, $gruposOrdenesJuzgadosDto) {
            $GruposordenesDto = $this->validarGruposordenes($GruposordenesDto);
            $GruposordenesController = new GruposordenesController();
            $GruposordenesDto = $GruposordenesController->modificarGruposOrdenes($GruposordenesDto, $gruposOrdenesJuzgadosDto);
            return $GruposordenesDto;
        }

        public function eliminarGruposOrdenes($GruposordenesDto) {
            $GruposordenesController = new GruposordenesController();
            $GruposordenesDto = $GruposordenesController->eliminarGruposOrdenes($GruposordenesDto);
            return $GruposordenesDto;
        }

        public function insertGruposordenes($GruposordenesDto) {
            $GruposordenesDto = $this->validarGruposordenes($GruposordenesDto);
            $GruposordenesController = new GruposordenesController();
            $GruposordenesDto = $GruposordenesController->insertGruposordenes($GruposordenesDto);
            if ($GruposordenesDto != "") {
                $dtoToJson = new DtoToJson($GruposordenesDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateGruposordenes($GruposordenesDto) {
            $GruposordenesDto = $this->validarGruposordenes($GruposordenesDto);
            $GruposordenesController = new GruposordenesController();
            $GruposordenesDto = $GruposordenesController->updateGruposordenes($GruposordenesDto);
            if ($GruposordenesDto != "") {
                $dtoToJson = new DtoToJson($GruposordenesDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteGruposordenes($GruposordenesDto) {
            $GruposordenesDto = $this->validarGruposordenes($GruposordenesDto);
            $GruposordenesController = new GruposordenesController();
            $GruposordenesDto = $GruposordenesController->deleteGruposordenes($GruposordenesDto);
            if ($GruposordenesDto == true) {
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

    @$cveGrupoOrden = $_POST["cveGrupoOrden"];
    @$desGrupoOrden = $_POST["desGrupoOrden"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];

    $gruposordenesFacade = new GruposordenesFacade();
    $gruposordenesDto = new GruposordenesDTO();

    $gruposordenesDto->setCveGrupoOrden($cveGrupoOrden);
    $gruposordenesDto->setDesGrupoOrden($desGrupoOrden);
    $gruposordenesDto->setActivo($activo);
    $gruposordenesDto->setFechaRegistro($fechaRegistro);
    $gruposordenesDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($cveGrupoOrden == "")) {
        $gruposordenesDto = $gruposordenesFacade->insertGruposordenes($gruposordenesDto);
        echo $gruposordenesDto;
    } else if (($accion == "guardar") && ($cveGrupoOrden != "")) {
        $gruposordenesDto = $gruposordenesFacade->updateGruposordenes($gruposordenesDto);
        echo $gruposordenesDto;
    } else if ($accion == "consultar") {
        @$param["paginacion"] = $_POST["paginacion"];
        @$param["cantidadPorPagina"] = $_POST["cantidadRegistros"];
        @$param["pagina"] = $_POST["pagina"];
        $gruposordenesDto = $gruposordenesFacade->selectGruposordenes($gruposordenesDto, $param);
        echo $gruposordenesDto;
    } else if (($accion == "baja") && ($cveGrupoOrden != "")) {
        $gruposordenesDto = $gruposordenesFacade->deleteGruposordenes($gruposordenesDto);
        echo $gruposordenesDto;
    } else if (($accion == "seleccionar") && ($cveGrupoOrden != "")) {
        @$param["paginacion"] = $_POST["paginacion"];
        @$param["cantidadPorPagina"] = $_POST["cantidadRegistros"];
        @$param["pagina"] = $_POST["pagina"];
        $gruposordenesDto = $gruposordenesFacade->selectGruposordenes($gruposordenesDto, $param);
        echo $gruposordenesDto;
    } else if (($accion == "guarda") && ($cveGrupoOrden == "")) {
        if (isset($_POST['cveJuzgado']) && count($_POST['cveJuzgado']) > 0) {
            for ($n = 0; $n < count($_POST['cveJuzgado']); $n++) {
                $gruposOrdenesJuzgadosDto[$n] = new GruposordenesjuzgadosDTO();
                $gruposOrdenesJuzgadosDto[$n]->setCveJuzgado($_POST['cveJuzgado'][$n]);
            }
            $gruposordenesDto = $gruposordenesFacade->agregarGruposOrdenes($gruposordenesDto, $gruposOrdenesJuzgadosDto);
            echo $gruposordenesDto;
        } else {
            $jsonDto = new Encode_JSON();
            echo $jsonDto->encode(array("totalCount" => "0", "text" => "No se recibieron datos!"));
        }
    } else if (($accion == "guarda") && ($cveGrupoOrden != "")) {
        if (isset($_POST['cveJuzgado']) && count($_POST['cveJuzgado']) > 0) {
            for ($n = 0; $n < count($_POST['cveJuzgado']); $n++) {
                $gruposOrdenesJuzgadosDto[$n] = new GruposordenesjuzgadosDTO();
                $gruposOrdenesJuzgadosDto[$n]->setCveJuzgado($_POST['cveJuzgado'][$n]);
            }
            $gruposordenesDto = $gruposordenesFacade->modificarGruposOrdenes($gruposordenesDto, $gruposOrdenesJuzgadosDto);
            echo $gruposordenesDto;
        } else {
            $jsonDto = new Encode_JSON();
            echo $jsonDto->encode(array("totalCount" => "0", "text" => "No se recibieron datos!"));
        }
    } else if (($accion == "elimina") && ($cveGrupoOrden != "")) {
        $gruposordenes[0] = new GruposordenesDTO();
        $gruposordenes[0]->setCveGrupoOrden($cveGrupoOrden);
        $gruposordenes[0]->setActivo("N");
        $gruposordenesDto = $gruposordenesFacade->eliminarGruposOrdenes($gruposordenes);
        echo $gruposordenesDto;
    } else if ($accion == "bajaRegistros") {
        /*
         * Eliminar los grupos seleccionados por el usuario y los registros
         * relacionados (tblgruposjuzgados)
         */
        if (isset($_POST['eliminar']) && count($_POST['eliminar']) > 0) {
            for ($n = 0; $n < count($_POST['eliminar']); $n++) {
                $gruposordenes[$n] = new GruposordenesDTO();
                $gruposordenes[$n]->setCveGrupoOrden($_POST['eliminar'][$n]);
                $gruposordenes[$n]->setActivo("N");
            }
            $gruposordenesDto = $gruposordenesFacade->eliminarGruposOrdenes($gruposordenes);
            echo $gruposordenesDto;
        } else {
            $jsonDto = new Encode_JSON();
            echo $jsonDto->encode(array("totalCount" => "0", "text" => "NO SE RECIBIERON DATOS!"));
        }
    } else if ($accion == "getPaginas") {
        @$param["paginacion"] = true;
        @$param["cantidadPorPagina"] = $_POST["registrosPorPagina"];
        $gruposordenesDto = $gruposordenesFacade->getPaginasGruposOrdenes($gruposordenesDto, $param);
        echo $gruposordenesDto;
    } else if ($accion == "consultarPorDistrito") {
        if (isset($_SESSION['cveAdscripcion'])) {
            $juzgadosDto = new JuzgadosDTO();
            $juzgadosDto->setCveJuzgado($_SESSION['cveAdscripcion']);

            $gruposordenesDto = $gruposordenesFacade->selectGruposordenesDistrito($juzgadosDto);
            echo $gruposordenesDto;
        }
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>