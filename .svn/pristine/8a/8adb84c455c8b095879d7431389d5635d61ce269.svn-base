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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofendidossolicitudes/OfendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/ofendidossolicitudes/OfendidossolicitudesadminController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesaudiencias/SolicitudesaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesaudiencias/SolicitudesaudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposcarpetas/TiposcarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class OfendidossolicitudesFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarOfendidossolicitudes($OfendidossolicitudesDto) {
        $OfendidossolicitudesDto->setidOfendidoSolicitud(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getidOfendidoSolicitud())))));
        if ($this->esFecha($OfendidossolicitudesDto->getidOfendidoSolicitud())) {
            $OfendidossolicitudesDto->setidOfendidoSolicitud($this->fechaMysql($OfendidossolicitudesDto->getidOfendidoSolicitud()));
        }
        $OfendidossolicitudesDto->setidSolicitudAudiencia(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getidSolicitudAudiencia())))));
        $OfendidossolicitudesDto->setactivo(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getactivo())))));
        $OfendidossolicitudesDto->setfechaRegistro(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getfechaRegistro())))));
        if ($this->esFecha($OfendidossolicitudesDto->getfechaRegistro())) {
            $OfendidossolicitudesDto->setfechaRegistro($this->fechaMysql($OfendidossolicitudesDto->getfechaRegistro()));
        }
        $OfendidossolicitudesDto->setfechaActualizacion(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getfechaActualizacion())))));
        if ($this->esFecha($OfendidossolicitudesDto->getfechaActualizacion())) {
            $OfendidossolicitudesDto->setfechaActualizacion($this->fechaMysql($OfendidossolicitudesDto->getfechaActualizacion()));
        }
        $OfendidossolicitudesDto->setnombre(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getnombre())))));
        $OfendidossolicitudesDto->setpaterno(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getpaterno())))));
        $OfendidossolicitudesDto->setmaterno(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getmaterno())))));
        $OfendidossolicitudesDto->setrfc(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getrfc())))));
        $OfendidossolicitudesDto->setcurp(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcurp())))));
        $OfendidossolicitudesDto->setfechaNacimiento(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getfechaNacimiento())))));
        if ($this->esFecha($OfendidossolicitudesDto->getfechaNacimiento())) {
            $OfendidossolicitudesDto->setfechaNacimiento($this->fechaMysql($OfendidossolicitudesDto->getfechaNacimiento()));
        }
        $OfendidossolicitudesDto->setcveOcupacion(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveOcupacion())))));
        $OfendidossolicitudesDto->setcveTipoPersona(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveTipoPersona())))));
        $OfendidossolicitudesDto->setcveGenero(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveGenero())))));
        $OfendidossolicitudesDto->setCveTipoParte(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getCveTipoParte())))));
        $OfendidossolicitudesDto->setCveTipoReligion(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getCveTipoReligion())))));
        $OfendidossolicitudesDto->setedad(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getedad())))));
        $OfendidossolicitudesDto->setcvePaisNacimiento(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcvePaisNacimiento())))));
        $OfendidossolicitudesDto->setcveEstadoNacimiento(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveEstadoNacimiento())))));
        $OfendidossolicitudesDto->setestadoNacimiento(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getestadoNacimiento())))));
        $OfendidossolicitudesDto->setcveMunicipioNacimiento(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveMunicipioNacimiento())))));
        $OfendidossolicitudesDto->setmunicipioNacimiento(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getmunicipioNacimiento())))));
        $OfendidossolicitudesDto->setcveEstadoCivil(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveEstadoCivil())))));
        $OfendidossolicitudesDto->setcveAlfabetismo(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveAlfabetismo())))));
        $OfendidossolicitudesDto->setcveNivelInstruccion(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveNivelInstruccion())))));
        $OfendidossolicitudesDto->setcveEspanol(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveEspanol())))));
        $OfendidossolicitudesDto->setcveDialectoIndigena(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveDialectoIndigena())))));
        $OfendidossolicitudesDto->setcveTipoFamiliaLinguistica(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveTipoFamiliaLinguistica())))));
        $OfendidossolicitudesDto->setcveInterprete(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveInterprete())))));
        $OfendidossolicitudesDto->setcveOrdenProteccion(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveOrdenProteccion())))));
        $OfendidossolicitudesDto->setcveEstadoPsicofisico(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveEstadoPsicofisico())))));
        $OfendidossolicitudesDto->setcveNacionalidad(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveNacionalidad())))));
        $OfendidossolicitudesDto->setnombreMoral(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getnombreMoral())))));
        $OfendidossolicitudesDto->setcveVictimaDeLaDelincuenciaOrganizada(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveVictimaDeLaDelincuenciaOrganizada())))));
        $OfendidossolicitudesDto->setcveVictimaDeViolenciaDeGenero(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveVictimaDeViolenciaDeGenero())))));
        $OfendidossolicitudesDto->setcveVictimaDeTrata(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveVictimaDeTrata())))));
        $OfendidossolicitudesDto->setcveVictimaDeAcoso(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveVictimaDeAcoso())))));
        $OfendidossolicitudesDto->setdesaparecido(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getdesaparecido())))));
        $OfendidossolicitudesDto->setnumHijos(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getnumHijos())))));
        $OfendidossolicitudesDto->setembarazada(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getembarazada())))));
        $OfendidossolicitudesDto->setcveGrupoEdnico(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $OfendidossolicitudesDto->getcveGrupoEdnico())))));


        return $OfendidossolicitudesDto;
    }

    public function agregarOfendido($OfendidossolicitudesDto) {
        $OfendidossolicitudesDto = $this->validarOfendidossolicitudes($OfendidossolicitudesDto);
        $OfendidossolicitudesController = new OfendidossolicitudesController();
        $OfendidossolicitudesDto = $OfendidossolicitudesController->agregarOfendido($OfendidossolicitudesDto);

        return json_encode($OfendidossolicitudesDto);
    }

    public function modificarOfendido($OfendidossolicitudesDto) {
        $OfendidossolicitudesDto = $this->validarOfendidossolicitudes($OfendidossolicitudesDto);
        $OfendidossolicitudesController = new OfendidossolicitudesController();
        $OfendidossolicitudesDto = $OfendidossolicitudesController->modificarOfendido($OfendidossolicitudesDto);

        return json_encode($OfendidossolicitudesDto);
    }

    public function eliminarOfendido($OfendidossolicitudesDto) {
        $OfendidossolicitudesDto = $this->validarOfendidossolicitudes($OfendidossolicitudesDto);
        $OfendidossolicitudesController = new OfendidossolicitudesController();
        $OfendidossolicitudesDto = $OfendidossolicitudesController->eliminarOfendido($OfendidossolicitudesDto);

        return json_encode($OfendidossolicitudesDto);
    }

    public function consultaOfendidossolicitudes($OfendidossolicitudesDto) {
        $OfendidossolicitudesDto = $this->validarOfendidossolicitudes($OfendidossolicitudesDto);
        $OfendidossolicitudesController = new OfendidossolicitudesController();
        $OfendidossolicitudesDto = $OfendidossolicitudesController->consultaOfendidossolicitudes($OfendidossolicitudesDto);
        if (count($OfendidossolicitudesDto)) {
            $dtoToJson = new DtoToJson($OfendidossolicitudesDto);

            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function selectOfendidossolicitudes($OfendidossolicitudesDto) {
        $OfendidossolicitudesDto = $this->validarOfendidossolicitudes($OfendidossolicitudesDto);
        $OfendidossolicitudesController = new OfendidossolicitudesController();
        $OfendidossolicitudesDto = $OfendidossolicitudesController->selectOfendidossolicitudes($OfendidossolicitudesDto);
        if ($OfendidossolicitudesDto != "") {
            $dtoToJson = new DtoToJson($OfendidossolicitudesDto);

            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertOfendidossolicitudes($OfendidossolicitudesDto) {
        $OfendidossolicitudesDto = $this->validarOfendidossolicitudes($OfendidossolicitudesDto);
        $OfendidossolicitudesController = new OfendidossolicitudesController();
        $OfendidossolicitudesDto = $OfendidossolicitudesController->insertOfendidossolicitudes($OfendidossolicitudesDto);
        if ($OfendidossolicitudesDto != "") {
            $dtoToJson = new DtoToJson($OfendidossolicitudesDto);

            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateOfendidossolicitudes($OfendidossolicitudesDto) {
        $OfendidossolicitudesDto = $this->validarOfendidossolicitudes($OfendidossolicitudesDto);
        $OfendidossolicitudesController = new OfendidossolicitudesController();
        $OfendidossolicitudesDto = $OfendidossolicitudesController->updateOfendidossolicitudes($OfendidossolicitudesDto);
        if ($OfendidossolicitudesDto != "") {
            $dtoToJson = new DtoToJson($OfendidossolicitudesDto);

            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteOfendidossolicitudes($OfendidossolicitudesDto) {
        $OfendidossolicitudesDto = $this->validarOfendidossolicitudes($OfendidossolicitudesDto);
        $OfendidossolicitudesController = new OfendidossolicitudesController();
        $OfendidossolicitudesDto = $OfendidossolicitudesController->deleteOfendidossolicitudes($OfendidossolicitudesDto);
        if ($OfendidossolicitudesDto == true) {
            $jsonDto = new Encode_JSON();

            return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
    }

    public function consultarTotal($OfendidossolicitudesDto) {
        $OfendidossolicitudesDto = $this->validarOfendidossolicitudes($OfendidossolicitudesDto);
        $OfendidossolicitudesController = new OfendidossolicitudesController();
        $ofendidosResponse = $OfendidossolicitudesController->counsultarTotal($OfendidossolicitudesDto);

        return json_encode($ofendidosResponse);
    }

    public function consultarreferenciacarpeta($OfendidossolicitudesDto) {
        $solicitudAudienciasDto = new SolicitudesaudienciasDTO();
        $solicitudAudienciasDao = new SolicitudesaudienciasDAO();
        $solicitudAudienciasDto->setIdSolicitudAudiencia($OfendidossolicitudesDto->getIdSolicitudAudiencia());
        $rsSolicitudAudiencias = $solicitudAudienciasDao->selectSolicitudesaudiencias($solicitudAudienciasDto);

        $resposne = [];

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
                'data' => $data
            ];
        } else {

            $response = [
                'estatus' => 'error',
                'mensaje' => 'no se encontro la referencia de la carpeta',
                'data' => [
                    'cveTipoCarpeta' => '',
                    'numero' => '',
                    'anio' => '',
                    'nuc' => '',
                    'carpetaInv' => ''
                ]
            ];
        }


        return json_encode($response);
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

@$idOfendidoSolicitud = $_POST["idOfendidoSolicitud"];
@$idSolicitudAudiencia = $_POST["idSolicitudAudiencia"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$nombre = $_POST["txtNombreOfendido"];
@$paterno = $_POST["txtPaternoOfendido"];
@$materno = $_POST["txtMaternoOfendido"];
@$rfc = ($_POST['cmbTipoPersonaOfendido'] == 1) ? $_POST["txtRfcOfendido"] : $_POST['txtRfcMoralOfendido'];
@$curp = $_POST["txtCurpOfendido"];
@$fechaNacimiento = $_POST["txtFechaNacimientoOfendido"];
@$cveOcupacion = $_POST["cmbOcupacionOfendido"];
@$cveTipoPersona = $_POST["cmbTipoPersonaOfendido"];
@$cveTipoParte = ($_POST['cmbTipoPersonaOfendido'] == 1) ? $_POST['cmbTipoParte'] : $_POST['cmbTipoParteMoral'];
@$cveTipoReligion = ($_POST['cmbTipoPersonaOfendido'] == 1) ? $_POST['cmbReligion'] : "";
@$cveGenero = $_POST["cmbGeneroOfendido"];
@$edad = $_POST["txtEdadOfendido"];
@$cvePaisNacimiento = ($_POST['cmbTipoPersonaOfendido'] == 1) ? $_POST["cmbPaisNacimientoOfendido"] : $_POST['cmbPaisNacimientoMoralOfendido'];
@$cveEstadoNacimiento = ($_POST['cmbTipoPersonaOfendido'] == 1) ? $_POST["cmbEstadoNacimientoOfendido"] : $_POST['cmbEstadoNacimientoMoralOfendido'];
@$estadoNacimiento = ($_POST['cmbTipoPersonaOfendido'] == 1) ? $_POST['txtestadoNacimientoOfendido'] : $_POST['txtestadoNacimientoMoralOfendido'];
@$cveMunicipioNacimiento = ($_POST['cmbTipoPersonaOfendido'] == 1) ? $_POST["cmbMunicipioNacimientoOfendido"] : $_POST['cmbMunicipioNacimientoMoralOfendido'];
@$municipioNacimiento = ($_POST['cmbTipoPersonaOfendido'] == 1) ? $_POST['txtmunicipioNacimientoOfendido'] : $_POST['txtmunicipioNacimientoMoralOfendido'];
@$cveEstadoCivil = $_POST["cmbEstadoCivilOfendido"];
@$cveAlfabetismo = $_POST["cmbAlfabetismoOfendido"];
@$cveNivelInstruccion = $_POST["cmbEstudioOfendido"];
@$cveEspanol = $_POST["cmbEspanolOfendido"];
@$cveDialectoIndigena = $_POST["cmbDielectoIndigenaOfendido"];
@$cveTipoFamiliaLinguistica = $_POST["cmbFamiliaLinguisticaOfendido"];
@$cveInterprete = $_POST["cmbInterpreteOfendido"];
@$cveOrdenProteccion = $_POST["cmbOrdenProteccion"];
@$cveEstadoPsicofisico = $_POST["cmbPsicofisicoOfendido"];
@$cveNacionalidad = $_POST["cveNacionalidad"];
@$nombreMoral = $_POST["txtnombreMoralOfendido"];
@$cveVictimaDeLaDelincuenciaOrganizada = $_POST["cmbVictimaDelincuenciaOrganizada"];
@$cveVictimaDeViolenciaDeGenero = $_POST["cmbVictimaViolenciaDeGenero"];
@$cveVictimaDeTrata = $_POST["cmbVictimaTrata"];
@$cveVictimaDeAcoso = $_POST["cmbVictimaAcosoSexual"];
@$desaparecido = isset($_POST["desaparecido"]) ? 'S' : '';
@$numHijos = $_POST["numHijos"];
@$embarazada = isset($_POST["embarazada"]) ? 'S' : '';
@$cveGrupoEdnico = $_POST["cmbGrupoEdnico"];
@$accion = $_POST["accion"];


$ofendidossolicitudesFacade = new OfendidossolicitudesFacade();
$ofendidossolicitudesDto = new OfendidossolicitudesDTO();

$ofendidossolicitudesDto->setIdOfendidoSolicitud($idOfendidoSolicitud);
$ofendidossolicitudesDto->setIdSolicitudAudiencia($idSolicitudAudiencia);
$ofendidossolicitudesDto->setActivo($activo);
$ofendidossolicitudesDto->setFechaRegistro($fechaRegistro);
$ofendidossolicitudesDto->setFechaActualizacion($fechaActualizacion);
$ofendidossolicitudesDto->setNombre($nombre);
$ofendidossolicitudesDto->setPaterno($paterno);
$ofendidossolicitudesDto->setMaterno($materno);
$ofendidossolicitudesDto->setRfc($rfc);
$ofendidossolicitudesDto->setCurp($curp);
$ofendidossolicitudesDto->setFechaNacimiento($fechaNacimiento);
$ofendidossolicitudesDto->setCveOcupacion($cveOcupacion);
$ofendidossolicitudesDto->setCveTipoPersona($cveTipoPersona);
$ofendidossolicitudesDto->setCveGenero($cveGenero);
$ofendidossolicitudesDto->setCveTipoParte($cveTipoParte);
$ofendidossolicitudesDto->setCveTipoReligion($cveTipoReligion);
$ofendidossolicitudesDto->setEdad($edad);
$ofendidossolicitudesDto->setCvePaisNacimiento($cvePaisNacimiento);
$ofendidossolicitudesDto->setCveEstadoNacimiento($cveEstadoNacimiento);
$ofendidossolicitudesDto->setEstadoNacimiento($estadoNacimiento);
$ofendidossolicitudesDto->setCveMunicipioNacimiento($cveMunicipioNacimiento);
$ofendidossolicitudesDto->setMunicipioNacimiento($municipioNacimiento);
$ofendidossolicitudesDto->setCveEstadoCivil($cveEstadoCivil);
$ofendidossolicitudesDto->setCveAlfabetismo($cveAlfabetismo);
$ofendidossolicitudesDto->setCveNivelInstruccion($cveNivelInstruccion);
$ofendidossolicitudesDto->setCveEspanol($cveEspanol);
$ofendidossolicitudesDto->setCveDialectoIndigena($cveDialectoIndigena);
$ofendidossolicitudesDto->setCveTipoFamiliaLinguistica($cveTipoFamiliaLinguistica);
$ofendidossolicitudesDto->setCveInterprete($cveInterprete);
$ofendidossolicitudesDto->setCveOrdenProteccion($cveOrdenProteccion);
$ofendidossolicitudesDto->setCveEstadoPsicofisico($cveEstadoPsicofisico);
$ofendidossolicitudesDto->setCveNacionalidad($cveNacionalidad);
$ofendidossolicitudesDto->setNombreMoral($nombreMoral);
$ofendidossolicitudesDto->setCveVictimaDeLaDelincuenciaOrganizada($cveVictimaDeLaDelincuenciaOrganizada);
$ofendidossolicitudesDto->setCveVictimaDeViolenciaDeGenero($cveVictimaDeViolenciaDeGenero);
$ofendidossolicitudesDto->setCveVictimaDeTrata($cveVictimaDeTrata);
$ofendidossolicitudesDto->setCveVictimaDeAcoso($cveVictimaDeAcoso);
$ofendidossolicitudesDto->setDesaparecido($desaparecido);
$ofendidossolicitudesDto->setNumHijos($numHijos);
$ofendidossolicitudesDto->setEmbarazada($embarazada);
$ofendidossolicitudesDto->setCveGrupoEdnico($cveGrupoEdnico);

if (($accion == "guardar") && ($idOfendidoSolicitud == "")) {
    $ofendidossolicitudesDto = $ofendidossolicitudesFacade->insertOfendidossolicitudes($ofendidossolicitudesDto);
    echo $ofendidossolicitudesDto;
} else if (($accion == "guardar") && ($idOfendidoSolicitud != "")) {
    $ofendidossolicitudesDto = $ofendidossolicitudesFacade->updateOfendidossolicitudes($ofendidossolicitudesDto);
    echo $ofendidossolicitudesDto;
} else if ($accion == "consultar") {
    $ofendidossolicitudesDto = $ofendidossolicitudesFacade->selectOfendidossolicitudes($ofendidossolicitudesDto);
    echo $ofendidossolicitudesDto;
} else if (($accion == "baja") && ($idOfendidoSolicitud != "")) {
    $ofendidossolicitudesDto = $ofendidossolicitudesFacade->deleteOfendidossolicitudes($ofendidossolicitudesDto);
    echo $ofendidossolicitudesDto;
} else if (($accion == "seleccionar") && ($idOfendidoSolicitud != "")) {
    $ofendidossolicitudesDto = $ofendidossolicitudesFacade->selectOfendidossolicitudes($ofendidossolicitudesDto);
    echo $ofendidossolicitudesDto;
} else if ($accion == "agregar" && $idOfendidoSolicitud == "") {
    $ofendidossolicitudesDto = $ofendidossolicitudesFacade->agregarOfendido($ofendidossolicitudesDto);
    echo $ofendidossolicitudesDto;
} else if ($accion == "agregar" && $idOfendidoSolicitud != "") {
    $ofendidossolicitudesDto = $ofendidossolicitudesFacade->modificarOfendido($ofendidossolicitudesDto);
    echo $ofendidossolicitudesDto;
} else if ($accion == "consulta") {
    $ofendidossolicitudesDto = $ofendidossolicitudesFacade->consultaOfendidossolicitudes($ofendidossolicitudesDto);
    echo $ofendidossolicitudesDto;
} else if ($accion == "consultarTotal") {
    $ofendidossolicitudesDto = $ofendidossolicitudesFacade->consultarTotal($ofendidossolicitudesDto);
    echo $ofendidossolicitudesDto;
} else if ($accion == "eliminar" && $idOfendidoSolicitud != "") {
    $ofendidossolicitudesDto = $ofendidossolicitudesFacade->eliminarOfendido($ofendidossolicitudesDto);
    echo $ofendidossolicitudesDto;
} else if ($accion == "consultarreferenciacarpeta") {
    $response = $ofendidossolicitudesFacade->consultarreferenciacarpeta($ofendidossolicitudesDto);
    echo $response;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>
