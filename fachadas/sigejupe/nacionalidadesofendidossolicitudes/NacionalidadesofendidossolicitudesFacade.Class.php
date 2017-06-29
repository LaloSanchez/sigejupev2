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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/nacionalidadesofendidossolicitudes/NacionalidadesofendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/nacionalidadesofendidossolicitudes/NacionalidadesofendidossolicitudesController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class NacionalidadesofendidossolicitudesFacade {

    /**
     * @param $NacionalidadesofendidossolicitudesDto
     * @return mixed
     */
    public function validarNacionalidadesofendidossolicitudes($NacionalidadesofendidossolicitudesDto)
    {
        $NacionalidadesofendidossolicitudesDto->setIdNacionalidadOfendidoSolicitud(addslashes(trim(strtoupper($NacionalidadesofendidossolicitudesDto->getidNacionalidadOfendidoSolicitud()))));
        $NacionalidadesofendidossolicitudesDto->setCvePais(addslashes(trim(strtoupper($NacionalidadesofendidossolicitudesDto->getcvePais()))));
        $NacionalidadesofendidossolicitudesDto->setActivo(addslashes(trim(strtoupper($NacionalidadesofendidossolicitudesDto->getActivo()))));
        $NacionalidadesofendidossolicitudesDto->setFechaRegistro(addslashes(trim(strtoupper($NacionalidadesofendidossolicitudesDto->getFechaRegistro()))));
        $NacionalidadesofendidossolicitudesDto->setFechaActualizacion(addslashes(trim(strtoupper($NacionalidadesofendidossolicitudesDto->getFechaActualizacion()))));
        $NacionalidadesofendidossolicitudesDto->setIdOfendidoSolicitud(addslashes(trim(strtoupper($NacionalidadesofendidossolicitudesDto->getIdOfendidoSolicitud()))));

        return $NacionalidadesofendidossolicitudesDto;
    }

    /**
     * @param $NacionalidadesofendidossolicitudesDto
     * @return string
     */
    public function agregarNacionalidadOfendido($NacionalidadesofendidossolicitudesDto)
    {
        $NacionalidadesofendidossolicitudesDto = $this->validarNacionalidadesofendidossolicitudes($NacionalidadesofendidossolicitudesDto);
        $NacionalidadesofendidossolocitudesController = new NacionalidadesofendidossolicitudesController();
        $NacionalidadesofendidossolicitudesDto = $NacionalidadesofendidossolocitudesController->agregarNacionalidadOfendido($NacionalidadesofendidossolicitudesDto);

        return json_encode($NacionalidadesofendidossolicitudesDto);
    }

    /**
     * @param $NacionalidadesofendidossolicitudesDto
     * @return string
     */
    public function modificarNacionalidadOfendido($NacionalidadesofendidossolicitudesDto)
    {
        $NacionalidadesofendidossolicitudesDto = $this->validarNacionalidadesofendidossolicitudes($NacionalidadesofendidossolicitudesDto);
        $NacionalidadesofendidossolocitudesController = new NacionalidadesofendidossolicitudesController();
        $NacionalidadesofendidossolicitudesDto = $NacionalidadesofendidossolocitudesController->modificarNacionalidadOfendido($NacionalidadesofendidossolicitudesDto);

        return json_encode($NacionalidadesofendidossolicitudesDto);
    }

    /**
     * eliminado logico = cambia el estatus a N
     * @param $NacionalidadesofendidossolicitudesDto
     * @return string
     */
    public function eliminarNacionalidadOfendido($NacionalidadesofendidossolicitudesDto)
    {
        $NacionalidadesofendidossolicitudesDto = $this->validarNacionalidadesofendidossolicitudes($NacionalidadesofendidossolicitudesDto);
        $NacionalidadesofendidossolocitudesController = new NacionalidadesofendidossolicitudesController();
        $NacionalidadesofendidossolicitudesDto = $NacionalidadesofendidossolocitudesController->eliminarNacionalidadOfendido($NacionalidadesofendidossolicitudesDto);

        return json_encode($NacionalidadesofendidossolicitudesDto);
    }

    /**
     * @param $NacionalidadesofendidossolicitudesDto
     * @return array|int|null|string
     */
    public function selectNacionalidadesofendidossolicitudes($NacionalidadesofendidossolicitudesDto)
    {
        $NacionalidadesofendidossolicitudesDto = $this->validarNacionalidadesofendidossolicitudes($NacionalidadesofendidossolicitudesDto);
        $NacionalidadesofendidossolicitudesController = new NacionalidadesofendidossolicitudesController();
        $NacionalidadesofendidossolicitudesDto = $NacionalidadesofendidossolicitudesController->selectNacionalidadesofendidossolicitudes($NacionalidadesofendidossolicitudesDto);

        if (count($NacionalidadesofendidossolicitudesDto)) {
            $dtoToJson = new DtoToJson($NacionalidadesofendidossolicitudesDto);

            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    /**
     * @param $NacionalidadesofendidossolicitudesDto
     * @return array|int|null|string
     */
    public function insertNacionalidadesofendidossolicitudes($NacionalidadesofendidossolicitudesDto)
    {
        $NacionalidadesofendidossolicitudesDto = $this->validarNacionalidadesofendidossolicitudes($NacionalidadesofendidossolicitudesDto);
        $NacionalidadesofendidossolicitudesController = new NacionalidadesofendidossolicitudesController();
        $NacionalidadesofendidossolicitudesDto = $NacionalidadesofendidossolicitudesController->insertNacionalidadesofendidossolicitudes($NacionalidadesofendidossolicitudesDto);
        if ($NacionalidadesofendidossolicitudesDto != "") {
            $dtoToJson = new DtoToJson($NacionalidadesofendidossolicitudesDto);

            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    /**
     * @param $NacionalidadesofendidossolicitudesDto
     * @return array|int|null|string
     */
    public function updateNacionalidadesofendidossolicitudes($NacionalidadesofendidossolicitudesDto)
    {
        $NacionalidadesofendidossolicitudesDto = $this->validarNacionalidadesofendidossolicitudes($NacionalidadesofendidossolicitudesDto);
        $NacionalidadesofendidossolicitudesController = new NacionalidadesofendidossolicitudesController();
        $NacionalidadesofendidossolicitudesDto = $NacionalidadesofendidossolicitudesController->updateNacionalidadesofendidossolicitudes($NacionalidadesofendidossolicitudesDto);
        if ($NacionalidadesofendidossolicitudesDto != "") {
            $dtoToJson = new DtoToJson($NacionalidadesofendidossolicitudesDto);

            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    /**
     * @param $NacionalidadesofendidossolicitudesDto
     * @return array|int|null|string
     */
    public function deleteNacionalidadesofendidossolicitudes($NacionalidadesofendidossolicitudesDto)
    {
        $NacionalidadesofendidossolicitudesDto = $this->validarNacionalidadesofendidossolicitudes($NacionalidadesofendidossolicitudesDto);
        $NacionalidadesofendidossolicitudesController = new NacionalidadesofendidossolicitudesController();
        $NacionalidadesofendidossolicitudesDto = $NacionalidadesofendidossolicitudesController->deleteNacionalidadesofendidossolicitudes($NacionalidadesofendidossolicitudesDto);
        if ($NacionalidadesofendidossolicitudesDto == true) {
            $jsonDto = new Encode_JSON();

            return $jsonDto->encode(array("totalCount" => "0", "status" => "ok", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "status" => "error", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
    }

    /**
     * @param $fecha
     * @return bool
     */
    private function esFecha($fecha)
    {
        if (preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $fecha)) {
            return true;
        }

        return false;
    }

    /**
     * @param $fecha
     * @return bool
     */
    private function esFechaMysql($fecha)
    {
        if (preg_match('/^\d{4}\-\d{1,2}\-\d{1,2}$/', $fecha)) {
            return true;
        }

        return false;
    }

    /**
     * @param $fecha
     * @return string
     */
    private function fechaMysql($fecha)
    {
        list($dia, $mes, $year) = explode("/", $fecha);

        return $year . "-" . $mes . "-" . $dia;
    }

    /**
     * @param $fecha
     * @return string
     */
    private function fechaNormal($fecha)
    {
        list($dia, $mes, $year) = explode("/", $fecha);

        return $year . "-" . $mes . "-" . $dia;
    }
}

@$idNacionalidadOfendidoSolicitud = $_POST["idNacionalidadOfendidoSolicitud"];
@$cvePais = $_POST["cmbPaisNacionalidadOfendido"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$idOfendidoSolicitud = $_POST["idOfendidoSolicitud"];
@$accion = $_POST["accion"];

$nacionalidadesofendidossolicitudesFacade = new NacionalidadesofendidossolicitudesFacade();
$nacionalidadesofendidossolicitudesDto = new NacionalidadesofendidossolicitudesDTO();

$nacionalidadesofendidossolicitudesDto->setIdNacionalidadOfendidoSolicitud($idNacionalidadOfendidoSolicitud);
$nacionalidadesofendidossolicitudesDto->setCvePais($cvePais);
$nacionalidadesofendidossolicitudesDto->setActivo($activo);
$nacionalidadesofendidossolicitudesDto->setFechaRegistro($fechaRegistro);
$nacionalidadesofendidossolicitudesDto->setFechaActualizacion($fechaActualizacion);
$nacionalidadesofendidossolicitudesDto->setIdOfendidoSolicitud($idOfendidoSolicitud);

if (($accion == "guardar") && ($idNacionalidadOfendidoSolicitud == "")) {
    $nacionalidadesofendidossolicitudesDto = $nacionalidadesofendidossolicitudesFacade->insertNacionalidadesofendidossolicitudes($nacionalidadesofendidossolicitudesDto);
    echo $nacionalidadesofendidossolicitudesDto;
} else if (($accion == "guardar") && ($idNacionalidadOfendidoSolicitud != "")) {
    $nacionalidadesofendidossolicitudesDto = $nacionalidadesofendidossolicitudesFacade->updateNacionalidadesofendidossolicitudes($nacionalidadesofendidossolicitudesDto);
    echo $nacionalidadesofendidossolicitudesDto;
} else if ($accion == "consultar") {
    $nacionalidadesofendidossolicitudesDto = $nacionalidadesofendidossolicitudesFacade->selectNacionalidadesofendidossolicitudes($nacionalidadesofendidossolicitudesDto);
    echo $nacionalidadesofendidossolicitudesDto;
} else if (($accion == "baja") && ($idNacionalidadOfendidoSolicitud != "")) {
    $nacionalidadesofendidossolicitudesDto = $nacionalidadesofendidossolicitudesFacade->deleteNacionalidadesofendidossolicitudes($nacionalidadesofendidossolicitudesDto);
    echo $nacionalidadesofendidossolicitudesDto;
} else if (($accion == "seleccionar") && ($idNacionalidadOfendidoSolicitud != "")) {
    $nacionalidadesofendidossolicitudesDto = $nacionalidadesofendidossolicitudesFacade->selectNacionalidadesofendidossolicitudes($nacionalidadesofendidossolicitudesDto);
    echo $nacionalidadesofendidossolicitudesDto;
} else if ($accion == "agregar" && $idNacionalidadOfendidoSolicitud == "") {
    $nacionalidadesofendidossolicitudesDto = $nacionalidadesofendidossolicitudesFacade->agregarNacionalidadOfendido($nacionalidadesofendidossolicitudesDto);
    echo $nacionalidadesofendidossolicitudesDto;
} else if ($accion == "agregar" && $idNacionalidadOfendidoSolicitud != "") {
    $nacionalidadesofendidossolicitudesDto = $nacionalidadesofendidossolicitudesFacade->modificarNacionalidadOfendido($nacionalidadesofendidossolicitudesDto);
    echo $nacionalidadesofendidossolicitudesDto;
} else if ($accion == "eliminar" && $idNacionalidadOfendidoSolicitud != "") {
    $nacionalidadesofendidossolicitudesDto = $nacionalidadesofendidossolicitudesFacade->eliminarNacionalidadOfendido($nacionalidadesofendidossolicitudesDto);
    echo $nacionalidadesofendidossolicitudesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>
