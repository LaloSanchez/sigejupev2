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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/comparecencias/ComparecenciasDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/comparecencias/ComparecenciasController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
    include_once(dirname(__FILE__) . "/../../../webservice/cliente/personal/PersonalCliente.php");

    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");

    class ComparecenciasFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarComparecencias($ComparecenciasDto) {
            $ComparecenciasDto->setidComparecencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ComparecenciasDto->getidComparecencia(), "utf8") : strtoupper($ComparecenciasDto->getidComparecencia()))))));
            if ($this->esFecha($ComparecenciasDto->getidComparecencia())) {
                $ComparecenciasDto->setidComparecencia($this->fechaMysql($ComparecenciasDto->getidComparecencia()));
            }
            $ComparecenciasDto->setidActuacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ComparecenciasDto->getidActuacion(), "utf8") : strtoupper($ComparecenciasDto->getidActuacion()))))));
            if ($this->esFecha($ComparecenciasDto->getidActuacion())) {
                $ComparecenciasDto->setidActuacion($this->fechaMysql($ComparecenciasDto->getidActuacion()));
            }
            $ComparecenciasDto->setnumEmpleadoFePublica(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ComparecenciasDto->getnumEmpleadoFePublica(), "utf8") : strtoupper($ComparecenciasDto->getnumEmpleadoFePublica()))))));
            if ($this->esFecha($ComparecenciasDto->getnumEmpleadoFePublica())) {
                $ComparecenciasDto->setnumEmpleadoFePublica($this->fechaMysql($ComparecenciasDto->getnumEmpleadoFePublica()));
            }
            $ComparecenciasDto->setNombre(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ComparecenciasDto->getNombre(), "utf8") : strtoupper($ComparecenciasDto->getNombre()))))));
            if ($this->esFecha($ComparecenciasDto->getNombre())) {
                $ComparecenciasDto->setNombre($this->fechaMysql($ComparecenciasDto->getNombre()));
            }
            $ComparecenciasDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ComparecenciasDto->getactivo(), "utf8") : strtoupper($ComparecenciasDto->getactivo()))))));
            if ($this->esFecha($ComparecenciasDto->getactivo())) {
                $ComparecenciasDto->setactivo($this->fechaMysql($ComparecenciasDto->getactivo()));
            }
            $ComparecenciasDto->setlugarComparecencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ComparecenciasDto->getlugarComparecencia(), "utf8") : strtoupper($ComparecenciasDto->getlugarComparecencia()))))));
            if ($this->esFecha($ComparecenciasDto->getlugarComparecencia())) {
                $ComparecenciasDto->setlugarComparecencia($this->fechaMysql($ComparecenciasDto->getlugarComparecencia()));
            }
            $ComparecenciasDto->sethoraComparecencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ComparecenciasDto->gethoraComparecencia(), "utf8") : strtoupper($ComparecenciasDto->gethoraComparecencia()))))));
            if ($this->esFecha($ComparecenciasDto->gethoraComparecencia())) {
                $ComparecenciasDto->sethoraComparecencia($this->fechaMysql($ComparecenciasDto->gethoraComparecencia()));
            }
            return $ComparecenciasDto;
        }

        public function selectComparecencias($ComparecenciasDto) {
            $ComparecenciasDto = $this->validarComparecencias($ComparecenciasDto);
            $ComparecenciasController = new ComparecenciasController();
            $ComparecenciasDto = $ComparecenciasController->selectComparecencias($ComparecenciasDto);
            if ($ComparecenciasDto != "") {
                $dtoToJson = new DtoToJson($ComparecenciasDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertComparecencias($ComparecenciasDto) {
            $ComparecenciasDto = $this->validarComparecencias($ComparecenciasDto);
            $ComparecenciasController = new ComparecenciasController();
            $ComparecenciasDto = $ComparecenciasController->insertComparecencias($ComparecenciasDto);
            if ($ComparecenciasDto != "") {
                $dtoToJson = new DtoToJson($ComparecenciasDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateComparecencias($ComparecenciasDto) {
            $ComparecenciasDto = $this->validarComparecencias($ComparecenciasDto);
            $ComparecenciasController = new ComparecenciasController();
            $ComparecenciasDto = $ComparecenciasController->updateComparecencias($ComparecenciasDto);
            if ($ComparecenciasDto != "") {
                $dtoToJson = new DtoToJson($ComparecenciasDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteComparecencias($ComparecenciasDto) {
            $ComparecenciasDto = $this->validarComparecencias($ComparecenciasDto);
            $ComparecenciasController = new ComparecenciasController();
            $ComparecenciasDto = $ComparecenciasController->deleteComparecencias($ComparecenciasDto);
            if ($ComparecenciasDto == true) {
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

        public function bucarPersonaFePublica($nombre, $juzgado, $juzgadoControl,$instancia = 1) {
            $personaCliente = new PersonalCliente();
//            var_dump($juzgadoControl);
            if($instancia == 1){
                $totalCount = $personaCliente->getNumeroAdministradores($juzgadoControl, 97, 38);
                $totalAdmin = json_decode($totalCount);
                if ($totalAdmin[0]->totalCount == 1) {
                    return $personaCliente->getPersonalNombre("", $nombre, $juzgadoControl);
                } elseif ($totalAdmin[0]->totalCount > 1) {
                    return $personaCliente->getPersonalNombre("", $nombre, $juzgado);
                }
            }else{
                return $personaCliente->getPersonalNombre("", $nombre, $juzgado);
            }
//        return $personaCliente->getPersonalNombre("", $nombre, $juzgado);
        }

        public function getFecha() {
            $SelectDAO = new SelectDAO();
            $params["fields"] = "NOW() as fecha";

            $rs = $SelectDAO->selectDAO($params);
            return $rs;
        }

    }

    @$idComparecencia = $_POST["idComparecencia"];
    @$idActuacion = $_POST["idActuacion"];
    @$numEmpleadoFePublica = $_POST["numEmpleadoFePublica"];
    @$Nombre = $_POST["Nombre"];
    @$activo = $_POST["activo"];
    @$lugarComparecencia = $_POST["lugarComparecencia"];
    @$horaComparecencia = $_POST["horaComparecencia"];
    @$accion = $_POST["accion"];
    @$nombrePersonaPublica = $_POST["personaFePublica"];
    @$juzgadoControl = $_POST["cveControl"];

    $comparecenciasFacade = new ComparecenciasFacade();
    $comparecenciasDto = new ComparecenciasDTO();
    $personaJson = "";
    $comparecenciasDto->setIdComparecencia($idComparecencia);
    $comparecenciasDto->setIdActuacion($idActuacion);
    $comparecenciasDto->setNumEmpleadoFePublica($numEmpleadoFePublica);
    $comparecenciasDto->setNombre($Nombre);
    $comparecenciasDto->setActivo($activo);
    $comparecenciasDto->setLugarComparecencia($lugarComparecencia);
    $comparecenciasDto->setHoraComparecencia($horaComparecencia);

    if (($accion == "guardar") && ($idComparecencia == "")) {
        $comparecenciasDto = $comparecenciasFacade->insertComparecencias($comparecenciasDto);
        echo $comparecenciasDto;
    } else if (($accion == "guardar") && ($idComparecencia != "")) {
        $comparecenciasDto = $comparecenciasFacade->updateComparecencias($comparecenciasDto);
        echo $comparecenciasDto;
    } else if ($accion == "consultar") {
        $comparecenciasDto = $comparecenciasFacade->selectComparecencias($comparecenciasDto);
        echo $comparecenciasDto;
    } else if (($accion == "baja") && ($idComparecencia != "")) {
        $comparecenciasDto = $comparecenciasFacade->deleteComparecencias($comparecenciasDto);
        echo $comparecenciasDto;
    } else if (($accion == "seleccionar") && ($idComparecencia != "")) {
        $comparecenciasDto = $comparecenciasFacade->selectComparecencias($comparecenciasDto);
        echo $comparecenciasDto;
    } else if (($accion == "buscarPersonaFePublica")) {
        $juzgado = @$_POST['cveJuzgado'];
        $instancia = @$_POST['instancia'];
//    var_dump($juzgado);
        $personaJson = $comparecenciasFacade->bucarPersonaFePublica($nombrePersonaPublica, $juzgado, $juzgadoControl,$instancia);
        echo $personaJson;
    } else if (($accion == "getFecha")) {
        $fecha = $comparecenciasFacade->getFecha();
        echo $fecha;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>