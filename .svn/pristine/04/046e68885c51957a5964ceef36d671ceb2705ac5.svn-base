<?php
/*
*************************************************
*FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
*Copyright 2009-2015 FACADES
* Licensed under the MIT license 
* Autor: *
* Departamento de Desarrollo de Software
* Subdireccion de Ingenieria de Software
* Direccion de Teclogias de Informacion
* Poder Judicial del Estado de Mexico
*************************************************
*/

 if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/audienciasjuzgador/AudienciasjuzgadorDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/audienciasjuzgador/AudienciasjuzgadorController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");    // para descripcion de la relacion de la consulta de acuerdos
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class AudienciasjuzgadorFacade {

    private $proveedor;

    public function __construct()
    {
    }

    public function validarAudienciasjuzgador($AudienciasjuzgadorDto)
    {
        $AudienciasjuzgadorDto->setidAudienciaJuez(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasjuzgadorDto->getidAudienciaJuez(), "utf8") : strtoupper($AudienciasjuzgadorDto->getidAudienciaJuez()))))));
        if ($this->esFecha($AudienciasjuzgadorDto->getidAudienciaJuez())) {
            $AudienciasjuzgadorDto->setidAudienciaJuez($this->fechaMysql($AudienciasjuzgadorDto->getidAudienciaJuez()));
        }
        $AudienciasjuzgadorDto->setidAudiencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasjuzgadorDto->getidAudiencia(), "utf8") : strtoupper($AudienciasjuzgadorDto->getidAudiencia()))))));
        if ($this->esFecha($AudienciasjuzgadorDto->getidAudiencia())) {
            $AudienciasjuzgadorDto->setidAudiencia($this->fechaMysql($AudienciasjuzgadorDto->getidAudiencia()));
        }
        $AudienciasjuzgadorDto->setidJuzgador(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasjuzgadorDto->getidJuzgador(), "utf8") : strtoupper($AudienciasjuzgadorDto->getidJuzgador()))))));
        if ($this->esFecha($AudienciasjuzgadorDto->getidJuzgador())) {
            $AudienciasjuzgadorDto->setidJuzgador($this->fechaMysql($AudienciasjuzgadorDto->getidJuzgador()));
        }
        $AudienciasjuzgadorDto->setcveFuncionJuzgador(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasjuzgadorDto->getcveFuncionJuzgador(), "utf8") : strtoupper($AudienciasjuzgadorDto->getcveFuncionJuzgador()))))));
        if ($this->esFecha($AudienciasjuzgadorDto->getcveFuncionJuzgador())) {
            $AudienciasjuzgadorDto->setcveFuncionJuzgador($this->fechaMysql($AudienciasjuzgadorDto->getcveFuncionJuzgador()));
        }
        $AudienciasjuzgadorDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasjuzgadorDto->getactivo(), "utf8") : strtoupper($AudienciasjuzgadorDto->getactivo()))))));
        if ($this->esFecha($AudienciasjuzgadorDto->getactivo())) {
            $AudienciasjuzgadorDto->setactivo($this->fechaMysql($AudienciasjuzgadorDto->getactivo()));
        }
        $AudienciasjuzgadorDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasjuzgadorDto->getfechaRegistro(), "utf8") : strtoupper($AudienciasjuzgadorDto->getfechaRegistro()))))));
        if ($this->esFecha($AudienciasjuzgadorDto->getfechaRegistro())) {
            $AudienciasjuzgadorDto->setfechaRegistro($this->fechaMysql($AudienciasjuzgadorDto->getfechaRegistro()));
        }
        $AudienciasjuzgadorDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasjuzgadorDto->getfechaActualizacion(), "utf8") : strtoupper($AudienciasjuzgadorDto->getfechaActualizacion()))))));
        if ($this->esFecha($AudienciasjuzgadorDto->getfechaActualizacion())) {
            $AudienciasjuzgadorDto->setfechaActualizacion($this->fechaMysql($AudienciasjuzgadorDto->getfechaActualizacion()));
        }

        return $AudienciasjuzgadorDto;
    }

    public function selectAudienciasjuzgador($AudienciasjuzgadorDto)
    {
        $AudienciasjuzgadorDto = $this->validarAudienciasjuzgador($AudienciasjuzgadorDto);
        $AudienciasjuzgadorController = new AudienciasjuzgadorController();
        $AudienciasjuzgadorDto = $AudienciasjuzgadorController->selectAudienciasjuzgador($AudienciasjuzgadorDto);
        if ($AudienciasjuzgadorDto != "") {
            $dtoToJson = new DtoToJson($AudienciasjuzgadorDto);

            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertAudienciasjuzgador($AudienciasjuzgadorDto)
    {
        $AudienciasjuzgadorDto = $this->validarAudienciasjuzgador($AudienciasjuzgadorDto);
        $AudienciasjuzgadorController = new AudienciasjuzgadorController();
        $AudienciasjuzgadorDto = $AudienciasjuzgadorController->insertAudienciasjuzgador($AudienciasjuzgadorDto);
        if ($AudienciasjuzgadorDto != "") {
            $dtoToJson = new DtoToJson($AudienciasjuzgadorDto);

            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateAudienciasjuzgador($AudienciasjuzgadorDto)
    {
        $AudienciasjuzgadorDto = $this->validarAudienciasjuzgador($AudienciasjuzgadorDto);
        $AudienciasjuzgadorController = new AudienciasjuzgadorController();
        $AudienciasjuzgadorDto = $AudienciasjuzgadorController->updateAudienciasjuzgador($AudienciasjuzgadorDto);
        if ($AudienciasjuzgadorDto != "") {
            $dtoToJson = new DtoToJson($AudienciasjuzgadorDto);

            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteAudienciasjuzgador($AudienciasjuzgadorDto)
    {
        $AudienciasjuzgadorDto = $this->validarAudienciasjuzgador($AudienciasjuzgadorDto);
        $AudienciasjuzgadorController = new AudienciasjuzgadorController();
        $AudienciasjuzgadorDto = $AudienciasjuzgadorController->deleteAudienciasjuzgador($AudienciasjuzgadorDto);
        if ($AudienciasjuzgadorDto == true) {
            $jsonDto = new Encode_JSON();

            return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
    }


    public function selectAgendaJuzgador($AudienciasjuzgadorDto, $params)
    {
        $AudienciasjuzgadorDto = $this->validarAudienciasjuzgador($AudienciasjuzgadorDto);
        $AudienciasjuzgadorController = new AudienciasjuzgadorController();
        $AudienciasjuzgadorDto = $AudienciasjuzgadorController->selectAgendajuzgador($AudienciasjuzgadorDto, $params);
        return $AudienciasjuzgadorDto;
    }

    public function juzgadoresByCveAudiencia($AudienciasjuzgadorDto)
    {
        $AudienciasjuzgadorDto = $this->validarAudienciasjuzgador($AudienciasjuzgadorDto);
        $AudienciasjuzgadorController = new AudienciasjuzgadorController();
        $response = $AudienciasjuzgadorController->juzgadoresByCveAudiencia($AudienciasjuzgadorDto);

        return json_encode($response);
    }


    private function esFecha($fecha)
    {
        if (preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $fecha)) {
            return true;
        }

        return false;
    }

    private function esFechaMysql($fecha)
    {
        if (preg_match('/^\d{4}\-\d{1,2}\-\d{1,2}$/', $fecha)) {
            return true;
        }

        return false;
    }

    private function fechaMysql($fecha)
    {
        list($dia, $mes, $year) = explode("/", $fecha);

        return $year . "-" . $mes . "-" . $dia;
    }

    private function fechaNormal($fecha)
    {
        list($dia, $mes, $year) = explode("/", $fecha);

        return $year . "-" . $mes . "-" . $dia;
    }
}


@$idAudienciaJuez = $_POST["idAudienciaJuez"];
@$idAudiencia = $_POST["idAudiencia"];
@$idJuzgador = $_POST["idJuzgador"];
@$cveFuncionJuzgador = $_POST["cveFuncionJuzgador"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];
@$params['fechaBusqueda'] = $_POST["fecha"];
@$params['cveJuzgado'] = $_POST["cveJuzgado"];


$audienciasjuzgadorFacade = new AudienciasjuzgadorFacade();
$audienciasjuzgadorDto = new AudienciasjuzgadorDTO();


$audienciasjuzgadorDto->setIdAudienciaJuez($idAudienciaJuez);
$audienciasjuzgadorDto->setIdAudiencia($idAudiencia);
$audienciasjuzgadorDto->setIdJuzgador($idJuzgador);
$audienciasjuzgadorDto->setCveFuncionJuzgador($cveFuncionJuzgador);
$audienciasjuzgadorDto->setActivo($activo);
$audienciasjuzgadorDto->setFechaRegistro($fechaRegistro);
$audienciasjuzgadorDto->setFechaActualizacion($fechaActualizacion);

if (($accion == "guardar") && ($idAudienciaJuez == "")) {
    $audienciasjuzgadorDto = $audienciasjuzgadorFacade->insertAudienciasjuzgador($audienciasjuzgadorDto);
    echo $audienciasjuzgadorDto;
} else if (($accion == "guardar") && ($idAudienciaJuez != "")) {
    $audienciasjuzgadorDto = $audienciasjuzgadorFacade->updateAudienciasjuzgador($audienciasjuzgadorDto);
    echo $audienciasjuzgadorDto;
} else if ($accion == "consultar") {
    $audienciasjuzgadorDto = $audienciasjuzgadorFacade->selectAudienciasjuzgador($audienciasjuzgadorDto);
    echo $audienciasjuzgadorDto;
} else if (($accion == "baja") && ($idAudienciaJuez != "")) {
    $audienciasjuzgadorDto = $audienciasjuzgadorFacade->deleteAudienciasjuzgador($audienciasjuzgadorDto);
    echo $audienciasjuzgadorDto;
} else if (($accion == "seleccionar") && ($idAudienciaJuez != "")) {
    $audienciasjuzgadorDto = $audienciasjuzgadorFacade->selectAudienciasjuzgador($audienciasjuzgadorDto);
    echo $audienciasjuzgadorDto;
} else if (($accion == "seleccionaragenda") /*&& ($idJuzgador!="")*/) {
    $audienciasjuzgadorDto = $audienciasjuzgadorFacade->selectAgendaJuzgador($audienciasjuzgadorDto, $params);
    print_r($audienciasjuzgadorDto);
} else if ($accion == 'juzgadoresByCveAudiencia') {
    $audienciasjuzgadorDto = $audienciasjuzgadorFacade->juzgadoresByCveAudiencia($audienciasjuzgadorDto);
    echo $audienciasjuzgadorDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>