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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/apelantessolicitudes/ApelantessolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/apelantessolicitudes/ApelantessolicitudesController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesaudiencias/SolicitudesaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesaudiencias/SolicitudesaudienciasDAO.Class.php");

class ApelantessolicitudesFacade {

    private $proveedor;

    public function __construct()
    {
    }

    public function validarApelantessolicitudes($ApelantessolicitudesDto)
    {

        $ApelantessolicitudesDto->setidApelanteSolicitud(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ApelantessolicitudesDto->getidApelanteSolicitud())))));
        $ApelantessolicitudesDto->setidSolicitudAudiencia(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ApelantessolicitudesDto->getidSolicitudAudiencia())))));
        $ApelantessolicitudesDto->setnombre(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ApelantessolicitudesDto->getnombre())))));
        $ApelantessolicitudesDto->setpaterno(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ApelantessolicitudesDto->getpaterno())))));
        $ApelantessolicitudesDto->setmaterno(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ApelantessolicitudesDto->getmaterno())))));
        $ApelantessolicitudesDto->setcveGenero(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ApelantessolicitudesDto->getcveGenero())))));
        $ApelantessolicitudesDto->setcveTipoPersona(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ApelantessolicitudesDto->getcveTipoPersona())))));
        $ApelantessolicitudesDto->setnombreMoral(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ApelantessolicitudesDto->getnombreMoral())))));
        $ApelantessolicitudesDto->setcveTipoApelante(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ApelantessolicitudesDto->getcveTipoApelante())))));
        $ApelantessolicitudesDto->setactivo(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ApelantessolicitudesDto->getactivo())))));
        $ApelantessolicitudesDto->setfechaRegistro(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ApelantessolicitudesDto->getfechaRegistro())))));
        if ($this->esFecha($ApelantessolicitudesDto->getfechaRegistro())) {
            $ApelantessolicitudesDto->setfechaRegistro($this->fechaMysql($ApelantessolicitudesDto->getfechaRegistro()));
        }
        $ApelantessolicitudesDto->setfechaActualizacion(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ApelantessolicitudesDto->getfechaActualizacion())))));
        if ($this->esFecha($ApelantessolicitudesDto->getfechaActualizacion())) {
            $ApelantessolicitudesDto->setfechaActualizacion($this->fechaMysql($ApelantessolicitudesDto->getfechaActualizacion()));
        }

        return $ApelantessolicitudesDto;
    }

    public function selectApelantessolicitudes($ApelantessolicitudesDto)
    {
        $ApelantessolicitudesDto = $this->validarApelantessolicitudes($ApelantessolicitudesDto);
        $ApelantessolicitudesController = new ApelantessolicitudesController();
        $ApelantessolicitudesDto = $ApelantessolicitudesController->selectApelantessolicitudes($ApelantessolicitudesDto);

        return json_encode($ApelantessolicitudesDto);
    }

    public function insertApelantessolicitudes($ApelantessolicitudesDto)
    {
        $ApelantessolicitudesDto = $this->validarApelantessolicitudes($ApelantessolicitudesDto);
        $ApelantessolicitudesController = new ApelantessolicitudesController();
        $ApelantessolicitudesDto = $ApelantessolicitudesController->insertApelantessolicitudes($ApelantessolicitudesDto);

        return json_encode($ApelantessolicitudesDto);
    }

    public function updateApelantessolicitudes($ApelantessolicitudesDto)
    {
        $ApelantessolicitudesDto = $this->validarApelantessolicitudes($ApelantessolicitudesDto);
        $ApelantessolicitudesController = new ApelantessolicitudesController();
        $ApelantessolicitudesDto = $ApelantessolicitudesController->updateApelantessolicitudes($ApelantessolicitudesDto);

        return json_encode($ApelantessolicitudesDto);
    }

    public function deleteApelantessolicitudes($ApelantessolicitudesDto)
    {
        $ApelantessolicitudesDto = $this->validarApelantessolicitudes($ApelantessolicitudesDto);
        $ApelantessolicitudesController = new ApelantessolicitudesController();
        $response = $ApelantessolicitudesController->deleteApelantessolicitudes($ApelantessolicitudesDto);

        return json_encode($response);
    }

    public function consultarreferenciacarpeta($apelantessolicitudesDto)
    {
        $solicitudAudienciasDto = new SolicitudesaudienciasDTO();
        $solicitudAudienciasDao = new SolicitudesaudienciasDAO();
        $solicitudAudienciasDto->setIdSolicitudAudiencia($apelantessolicitudesDto->getIdSolicitudAudiencia());
        $rsSolicitudAudiencias = $solicitudAudienciasDao->selectSolicitudesaudiencias($solicitudAudienciasDto);

        if ($rsSolicitudAudiencias != "") {

            $data = [];

            $data['cveTipoCarpeta'] = utf8_encode($rsSolicitudAudiencias[0]->getCveTipoCarpeta());

            if ($rsSolicitudAudiencias[0]->getCveTipoCarpeta() != "" || $rsSolicitudAudiencias[0]->getCveTipoCarpeta() != null && $rsSolicitudAudiencias[0]->getCveTipoCarpeta() != 0) {
                $tiposCarpetasDto = new TiposcarpetasDTO();
                $tiposCarpetasDao = new TiposcarpetasDAO();
                $tiposCarpetasDto->setCveTipoCarpeta($rsSolicitudAudiencias[0]->getCveTipoCarpeta());
                $rsCarpetas = $tiposCarpetasDao->selectTiposcarpetas($tiposCarpetasDto);
                $data['desCarpeta'] = json_encode(utf8_encode($rsCarpetas[0]->getDesTipoCarpeta()));

            } else {
                $data['desCarpeta'] = '';
            }

            $data['numero'] = utf8_encode($rsSolicitudAudiencias[0]->getNumero());
            $data['anio'] = utf8_encode($rsSolicitudAudiencias[0]->getAnio());
            $data['nuc'] = utf8_encode($rsSolicitudAudiencias[0]->getNuc());
            $data['carpetaInv'] = utf8_encode($rsSolicitudAudiencias[0]->getCarpetaInv());


            $response = [
                'estatus' => 'ok',
                'mensaje' => 'consulta de referencia correcta',
                'data'    => $data
            ];

        } else {

            $response = [
                'estatus' => 'error',
                'mensaje' => 'no se encontro la referencia de la carpeta',
                'data'    => [
                    'cveTipoCarpeta' => '',
                    'numero'         => '',
                    'anio'           => '',
                    'nuc'            => '',
                    'carpetaInv'     => ''
                ]
            ];
        }


        return json_encode($response);
    }

    public function validaApelantes($apelantessolicitudesDto)
    {
        $apelantessolicitudesDto = $this->validarApelantessolicitudes($apelantessolicitudesDto);
        $apelantesSolicitudesController = new ApelantessolicitudesController();
        $response = $apelantesSolicitudesController->validaApelantes($apelantessolicitudesDto);

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


@$idApelanteSolicitud = $_POST["idApelanteSolicitud"];
@$idSolicitudAudiencia = $_POST["idSolicitudAudiencia"];
@$cveGenero = $_POST["cmbGeneroApelante"];
@$cveTipoPersona = $_POST["cmbTipoPersonaApelante"];
@$nombre = '';
@$paterno = '';
@$materno = '';
@$nombreMoral = '';
@$cveTipoApelante = '';
if ($cveTipoPersona == 1) {
    @$nombre = $_POST["txtNombreApelante"];
    @$paterno = $_POST["txtPaternoApelante"];
    @$materno = $_POST["txtMaternoApelante"];
    @$nombreMoral = ".";
    @$cveTipoApelante = $_POST["cmbTipoApelante"];
} else if ($cveTipoPersona == 2 || $cveTipoPersona == 3) {
    @$nombreMoral = $_POST["txtnombreMoralApelante"];
    @$nombre = ".";
    @$paterno = ".";
    @$materno = ".";
    @$cveTipoApelante = $_POST["cmbTipoApelanteMoral"];
    @$cveGenero = '3';
}
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];

$apelantessolicitudesFacade = new ApelantessolicitudesFacade();
$apelantessolicitudesDto = new ApelantessolicitudesDTO();

$apelantessolicitudesDto->setIdApelanteSolicitud($idApelanteSolicitud);
$apelantessolicitudesDto->setIdSolicitudAudiencia($idSolicitudAudiencia);
$apelantessolicitudesDto->setNombre($nombre);
$apelantessolicitudesDto->setPaterno($paterno);
$apelantessolicitudesDto->setMaterno($materno);
$apelantessolicitudesDto->setCveGenero($cveGenero);
$apelantessolicitudesDto->setCveTipoPersona($cveTipoPersona);
$apelantessolicitudesDto->setNombreMoral($nombreMoral);
$apelantessolicitudesDto->setCveTipoApelante($cveTipoApelante);
$apelantessolicitudesDto->setActivo($activo);
$apelantessolicitudesDto->setFechaRegistro($fechaRegistro);
$apelantessolicitudesDto->setFechaActualizacion($fechaActualizacion);


if (($accion == "guardar") && ($idApelanteSolicitud == "")) {
    $apelantessolicitudesDto = $apelantessolicitudesFacade->insertApelantessolicitudes($apelantessolicitudesDto);
    echo $apelantessolicitudesDto;
} else if (($accion == "guardar") && ($idApelanteSolicitud != "")) {
    $apelantessolicitudesDto = $apelantessolicitudesFacade->updateApelantessolicitudes($apelantessolicitudesDto);
    echo $apelantessolicitudesDto;
} else if ($accion == "consultar") {
    $apelantessolicitudesDto = $apelantessolicitudesFacade->selectApelantessolicitudes($apelantessolicitudesDto);
    echo $apelantessolicitudesDto;
} else if (($accion == "baja") && ($idApelanteSolicitud != "")) {
    $apelantessolicitudesDto = $apelantessolicitudesFacade->deleteApelantessolicitudes($apelantessolicitudesDto);
    echo $apelantessolicitudesDto;
} else if (($accion == "seleccionar") && ($idApelanteSolicitud != "")) {
    $apelantessolicitudesDto = $apelantessolicitudesFacade->selectApelantessolicitudes($apelantessolicitudesDto);
    echo $apelantessolicitudesDto;
} else if ($accion == "consultarreferenciacarpeta") {
    $response = $apelantessolicitudesFacade->consultarreferenciacarpeta($apelantessolicitudesDto);
    echo $response;
} else if ($accion == 'validaApelantes') {
    //obtiene el numero de apelantes en una solicitud de audiencia,
    //valida si pasa al siguiente paso, la solicitud debe de tener al menos un apelante
    $response = $apelantessolicitudesFacade->validaApelantes($apelantessolicitudesDto);
    echo $response;
}
 }else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}