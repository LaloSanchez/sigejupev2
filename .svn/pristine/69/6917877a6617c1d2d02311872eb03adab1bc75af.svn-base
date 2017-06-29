<?php

/*
 * ************************************************
 * FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
 * Copyright 2009-2015 CONTROLLER
 * Licensed under the MIT license 
 * Autor: *
 * Departamento de Desarrollo de Software
 * Subdireccion de Ingenieria de Software
 * Direccion de Teclogias de Informacion
 * Poder Judicial del Estado de Mexico
 * ************************************************
 */

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/impofedelsolicitudes/ImpofedelsolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/impofedelsolicitudes/ImpofedelsolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");

/*
 * EFECTOS OFENDIDOS DE LA SOLICITUD 
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/efectosofendidos/EfectosofendidosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/efectosofendidos/EfectosofendidosDAO.Class.php");

/*
 * TRATA DE PERSONAS DE LA SOLICITUD
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/trataspersonas/TrataspersonasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/trataspersonas/TrataspersonasDAO.Class.php");

/*
 * VIOLENCIA DE GENERO
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciadegenero/ViolenciadegeneroDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciadegenero/ViolenciadegeneroDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciahomicidiosdolosos/ViolenciahomicidiosdolososDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciahomicidiosdolosos/ViolenciahomicidiosdolososDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciafactoressociales/ViolenciafactoressocialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciafactoressociales/ViolenciafactoressocialesDAO.Class.php");

/*
 * ACOSO Y HOSTIGAMIENTO SEXUAL
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexuales/SexualesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/sexuales/SexualesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexualesconductas/SexualesconductasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/sexualesconductas/SexualesconductasDAO.Class.php");

/*
 * EFECTOS SEXUALES DE LA SOLICITUD
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/efectossexuales/EfectossexualesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/efectossexuales/EfectossexualesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/testigossexuales/TestigossexualesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/testigossexuales/TestigossexualesDAO.Class.php");


/*
 * Catalogos
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/modalidades/ModalidadesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/modalidades/ModalidadesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/comisiones/ComisionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/comisiones/ComisionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/concursos/ConcursosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/concursos/ConcursosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/clasificacionesdelitosorden/ClasificacionesdelitosordenDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/clasificacionesdelitosorden/ClasificacionesdelitosordenDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/elementoscomisiones/ElementoscomisionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/elementoscomisiones/ElementoscomisionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/clasificacionesdelitos/ClasificacionesdelitosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/clasificacionesdelitos/ClasificacionesdelitosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/formasacciones/FormasaccionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/formasacciones/FormasaccionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/consumaciones/ConsumacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/consumaciones/ConsumacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/municipios/MunicipiosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/municipios/MunicipiosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estados/EstadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estados/EstadosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/gradoparticipaciones/GradoparticipacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/gradoparticipaciones/GradoparticipacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposrelimpofe/TiposrelimpofeDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposrelimpofe/TiposrelimpofeDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitos/DelitosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitos/DelitosDAO.Class.php");


/*
 * Partes de la solicitud
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesaudiencias/SolicitudesaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesaudiencias/SolicitudesaudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadossolicitudes/ImputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadossolicitudes/ImputadossolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofendidossolicitudes/OfendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ofendidossolicitudes/OfendidossolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitossolicitudes/DelitossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitossolicitudes/DelitossolicitudesDAO.Class.php");



include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/efectosofendidos/EfectosofendidosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/efectosofendidos/EfectosofendidosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciadegenero/ViolenciadegeneroDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciadegenero/ViolenciadegeneroDAO.Class.php");
//////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciafactoressociales/ViolenciafactoressocialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciafactoressociales/ViolenciafactoressocialesDAO.Class.php");
//////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciahomicidiosdolosos/ViolenciahomicidiosdolososDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciahomicidiosdolosos/ViolenciahomicidiosdolososDAO.Class.php");
/////////////////////////////////////////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/trataspersonas/TrataspersonasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/trataspersonas/TrataspersonasDAO.Class.php");
/////////////////////////////////////////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexuales/SexualesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/sexuales/SexualesDAO.Class.php");
//////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexualesconductas/SexualesconductasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/sexualesconductas/SexualesconductasDAO.Class.php");
//////////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/detallessexualesconductas/DetallessexualesconductasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/detallessexualesconductas/DetallessexualesconductasDAO.Class.php");
////////
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/testigossexuales/TestigossexualesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/testigossexuales/TestigossexualesDAO.Class.php");


include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");

class ImpofedelsolicitudesController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarImpofedelsolicitudes($ImpofedelsolicitudesDto) {
        $ImpofedelsolicitudesDto->setidImpOfeDelSolicitud(strtoupper(str_ireplace("'", "", trim($ImpofedelsolicitudesDto->getidImpOfeDelSolicitud()))));
        $ImpofedelsolicitudesDto->setidSolicitudAudiencia(strtoupper(str_ireplace("'", "", trim($ImpofedelsolicitudesDto->getidSolicitudAudiencia()))));
        $ImpofedelsolicitudesDto->setidImputadoSolicitud(strtoupper(str_ireplace("'", "", trim($ImpofedelsolicitudesDto->getidImputadoSolicitud()))));
        $ImpofedelsolicitudesDto->setidOfendidoSolicitud(strtoupper(str_ireplace("'", "", trim($ImpofedelsolicitudesDto->getidOfendidoSolicitud()))));
        $ImpofedelsolicitudesDto->setidDelitoSolicitud(strtoupper(str_ireplace("'", "", trim($ImpofedelsolicitudesDto->getidDelitoSolicitud()))));
        $ImpofedelsolicitudesDto->setcveModalidad(strtoupper(str_ireplace("'", "", trim($ImpofedelsolicitudesDto->getcveModalidad()))));
        $ImpofedelsolicitudesDto->setcveComision(strtoupper(str_ireplace("'", "", trim($ImpofedelsolicitudesDto->getcveComision()))));
        $ImpofedelsolicitudesDto->setcveConcurso(strtoupper(str_ireplace("'", "", trim($ImpofedelsolicitudesDto->getcveConcurso()))));
        $ImpofedelsolicitudesDto->setcveClasificacionDelitoOrden(strtoupper(str_ireplace("'", "", trim($ImpofedelsolicitudesDto->getcveClasificacionDelitoOrden()))));
        $ImpofedelsolicitudesDto->setcveElementoComision(strtoupper(str_ireplace("'", "", trim($ImpofedelsolicitudesDto->getcveElementoComision()))));
        $ImpofedelsolicitudesDto->setcveClasificacionDelito(strtoupper(str_ireplace("'", "", trim($ImpofedelsolicitudesDto->getcveClasificacionDelito()))));
        $ImpofedelsolicitudesDto->setcveFormaAccion(strtoupper(str_ireplace("'", "", trim($ImpofedelsolicitudesDto->getcveFormaAccion()))));
        $ImpofedelsolicitudesDto->setcveConsumacion(strtoupper(str_ireplace("'", "", trim($ImpofedelsolicitudesDto->getcveConsumacion()))));
        $ImpofedelsolicitudesDto->setcveMunicipio(strtoupper(str_ireplace("'", "", trim($ImpofedelsolicitudesDto->getcveMunicipio()))));
        $ImpofedelsolicitudesDto->setcveEntidad(strtoupper(str_ireplace("'", "", trim($ImpofedelsolicitudesDto->getcveEntidad()))));
        $ImpofedelsolicitudesDto->setcveGradoParticipacion(strtoupper(str_ireplace("'", "", trim($ImpofedelsolicitudesDto->getcveGradoParticipacion()))));
        $ImpofedelsolicitudesDto->setcveRelacionImpOfe(strtoupper(str_ireplace("'", "", trim($ImpofedelsolicitudesDto->getcveRelacionImpOfe()))));
        $ImpofedelsolicitudesDto->setcveTerminacion(strtoupper(str_ireplace("'", "", trim($ImpofedelsolicitudesDto->getcveTerminacion()))));
        $ImpofedelsolicitudesDto->setactivo(strtoupper(str_ireplace("'", "", trim($ImpofedelsolicitudesDto->getactivo()))));
        $ImpofedelsolicitudesDto->setfechaDelito(strtoupper(str_ireplace("'", "", trim($ImpofedelsolicitudesDto->getfechaDelito()))));
        $ImpofedelsolicitudesDto->setdireccion(strtoupper(str_ireplace("'", "", trim($ImpofedelsolicitudesDto->getdireccion()))));
        $ImpofedelsolicitudesDto->setcolonia(strtoupper(str_ireplace("'", "", trim($ImpofedelsolicitudesDto->getcolonia()))));
        $ImpofedelsolicitudesDto->setnumInterior(strtoupper(str_ireplace("'", "", trim($ImpofedelsolicitudesDto->getnumInterior()))));
        $ImpofedelsolicitudesDto->setnumExterior(strtoupper(str_ireplace("'", "", trim($ImpofedelsolicitudesDto->getnumExterior()))));
        $ImpofedelsolicitudesDto->setcp(strtoupper(str_ireplace("'", "", trim($ImpofedelsolicitudesDto->getcp()))));
        return $ImpofedelsolicitudesDto;
    }

    public function datoTipoRequerido($valor) {
        if (is_null($valor)) {
            return false;
        } elseif (is_string($valor) && trim($valor) === '') {
            return false;
        } elseif (($valor) <= '0') {
            return false;
        } elseif (is_array($valor) && count($valor) < 1) {
            return false;
        }

        return true;
    }

    public function validaCampos($ImpofedelsolicitudesDto) {
        $imputado = $this->datoTipoRequerido($ImpofedelsolicitudesDto->getidImputadoSolicitud());
        $ofendido = $this->datoTipoRequerido($ImpofedelsolicitudesDto->getidOfendidoSolicitud());
        $delito = $this->datoTipoRequerido($ImpofedelsolicitudesDto->getidDelitoSolicitud());
        $modalidad = $this->datoTipoRequerido($ImpofedelsolicitudesDto->getcveModalidad());
        $comision = $this->datoTipoRequerido($ImpofedelsolicitudesDto->getcveComision());
        $concurso = $this->datoTipoRequerido($ImpofedelsolicitudesDto->getcveConcurso());
        $cdo = $this->datoTipoRequerido($ImpofedelsolicitudesDto->getcveClasificacionDelitoOrden());
        $elementoComision = $this->datoTipoRequerido($ImpofedelsolicitudesDto->getcveElementoComision());
        $clasificacionDelito = $this->datoTipoRequerido($ImpofedelsolicitudesDto->getcveClasificacionDelito());
        $formaAccion = $this->datoTipoRequerido($ImpofedelsolicitudesDto->getcveFormaAccion());
        $consumacion = $this->datoTipoRequerido($ImpofedelsolicitudesDto->getcveConsumacion());
        $municipio = $this->datoTipoRequerido($ImpofedelsolicitudesDto->getcveMunicipio());
        $entidad = $this->datoTipoRequerido($ImpofedelsolicitudesDto->getcveEntidad());
        $gradoParticipacion = $this->datoTipoRequerido($ImpofedelsolicitudesDto->getcveGradoParticipacion());
        $relacionImpOfe = $this->datoTipoRequerido($ImpofedelsolicitudesDto->getcveRelacionImpOfe());
        $fecha = $this->datoTipoRequerido($ImpofedelsolicitudesDto->getfechaDelito());
        $direccion = $this->datoTipoRequerido($ImpofedelsolicitudesDto->getdireccion());
        $colonia = $this->datoTipoRequerido($ImpofedelsolicitudesDto->getcolonia());
        $interior = $this->datoTipoRequerido($ImpofedelsolicitudesDto->getnumInterior());
        $exterior = $this->datoTipoRequerido($ImpofedelsolicitudesDto->getnumExterior());
        $cp = $this->datoTipoRequerido($ImpofedelsolicitudesDto->getcp());

        $estatus = true;
        $mensaje = [];
        if ($imputado == false) {
            $mensaje["mensaje"] = "Debes elegir un Imputado";
            $estatus = false;
        } else if ($ofendido == false) {
            $mensaje["mensaje"] = "Debes elegir un Ofendido";
            $estatus = false;
        } else if ($delito == false) {
            $mensaje["mensaje"] = "Debes elegir un Delito";
            $estatus = false;
        } else if ($modalidad == false) {
            $mensaje["mensaje"] = "El campo Modalidad esta vacio";
            $estatus = false;
        } else if ($comision == false) {
            $mensaje["mensaje"] = "El campo Comision esta vacio";
            $estatus = false;
        } else if ($concurso == false) {
            $mensaje["mensaje"] = "El campo Concurso esta vacio";
            $estatus = false;
        } else if ($cdo == false) {
            $mensaje["mensaje"] = "El campo Clasificacion Delito Orden esta vacio";
            $estatus = false;
        } else if ($elementoComision == false) {
            $mensaje["mensaje"] = "El campo Elemento Comision esta vacio";
            $estatus = false;
        } else if ($clasificacionDelito == false) {
            $mensaje["mensaje"] = "El campo Clasificacion Delito esta vacio";
            $estatus = false;
        } else if ($formaAccion == false) {
            $mensaje["mensaje"] = "El campo Forma Accion esta vacio";
            $estatus = false;
        } else if ($consumacion == false) {
            $mensaje["mensaje"] = "El campo Consumacion esta vacio";
            $estatus = false;
        } else if ($gradoParticipacion == false) {
            $mensaje["mensaje"] = "El campo Grado Participacion esta vacio";
            $estatus = false;
        } else if ($relacionImpOfe == false) {
            $mensaje["mensaje"] = "El campo Relacion esta vacio";
            $estatus = false;
        } else if ($fecha == false) {
            $mensaje["mensaje"] = "El campo Fecha Delito esta vacio";
            $estatus = false;
//        } else if ($ImpofedelsolicitudesDto->getfechaDelito() > date("Y-m-d hh:ss:")) {
//            $mensaje["mensaje"] = "El campo Fecha Delito no debe ser mayor a la fecha actual";
//            $estatus = false;
        }

        if ($estatus == true) {
            $estatus = array("estatus" => "OK", "totalCount" => "1");
        } else {
            $estatus = array("estatus" => "Error", "totalCount" => "0");
        }
        $respuesta = array_merge($estatus, array("resultados" => array($mensaje)));

        return $respuesta;
    }

    public function selectImpofedelsolicitudes($paramImpofedelsolicitudesDto, $proveedor = null) {
        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();

        $ImpofedelsolicitudesDto = new ImpofedelsolicitudesDTO();
        $ImpofedelsolicitudesDto->setIdImpOfeDelSolicitud($paramImpofedelsolicitudesDto[0]["idImpOfeDelSolicitud"]);
        $ImpofedelsolicitudesDto->setIdSolicitudAudiencia($paramImpofedelsolicitudesDto[0]["idSolicitudAudiencia"]);
        $ImpofedelsolicitudesDto->setActivo("S");

        if ($ImpofedelsolicitudesDto->getIdImpOfeDelSolicitud() > 0 || $ImpofedelsolicitudesDto->getIdImpOfeDelSolicitud() != "") {
            if (!$validacion->num(1, 11, (int) $ImpofedelsolicitudesDto->getIdImpOfeDelSolicitud())) {
                $msg[] = array(utf8_encode("La relación, no es valida"));
                $error = true;
            }
        }

        if ($ImpofedelsolicitudesDto->getIdSolicitudAudiencia() > 0 || $ImpofedelsolicitudesDto->getIdSolicitudAudiencia() != "") {
            if (!$validacion->num(1, 11, (int) $ImpofedelsolicitudesDto->getIdSolicitudAudiencia())) {
                $msg[] = array(utf8_encode("La solicitud, no es valida"));
                $error = true;
            }
        }

        if ((!$error) && (0 <= count($msg))) {
            $impofedelsolicitudesDao = new ImpofedelsolicitudesDAO();
            $ImpofedelsolicitudesDto = $impofedelsolicitudesDao->selectImpofedelsolicitudes($ImpofedelsolicitudesDto, "");
            if ($ImpofedelsolicitudesDto != "") {
                
            } else {
                $msg[] = array("No existe la relacion seleccionada");
                $error = true;
            }

            if ((!$error)) {
                $msg[] = array("Se encontraron resultados");
                foreach ($ImpofedelsolicitudesDto as $impofedelsolicitud) {
                    $msg[] = $impofedelsolicitud->toString();
                }
                $result = array("Correcto" => $msg);
                $result = json_encode($result);
            } else {
                $result = array("Error" => $msg);
                $result = json_encode($result);
            }
        } else {
            $result = array("Error" => $msg);
            $result = json_encode($result);
        }
        return $result;
        /* $ImpofedelsolicitudesDto = $this->validarImpofedelsolicitudes($ImpofedelsolicitudesDto);
          $ImpofedelsolicitudesDao = new ImpofedelsolicitudesDAO();
          $ImpofedelsolicitudesDto = $ImpofedelsolicitudesDao->selectImpofedelsolicitudes($ImpofedelsolicitudesDto, $proveedor);
          return $ImpofedelsolicitudesDto; */
    }

    public function insertImpofedelsolicitudes($param = "", $proveedor = null) {
        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();
        $impofedelsolicitudesArray = array();
        $impofedelsolicitudesArrayReturn = array();
        $count = 1;

        if (count($param["impofedelsolicitudes"]) <= 0) {
            $msg[] = array("Debe seleccionar por lo menos una relación entre el ofendido, imputado y delito");
            $error = true;
        } else {
            foreach ($param["impofedelsolicitudes"] as $impofedelsolicitud) {
                $ImpofedelsolicitudesDto = new ImpofedelsolicitudesDTO();
                $ImpofedelsolicitudesDto->setIdImpOfeDelSolicitud($impofedelsolicitud["idImpOfeDelSolicitud"]);
                $ImpofedelsolicitudesDto->setIdSolicitudAudiencia($impofedelsolicitud["idSolicitudAudiencia"]);
                $ImpofedelsolicitudesDto->setIdImputadoSolicitud($impofedelsolicitud["idImputadoSolicitud"]);
                $ImpofedelsolicitudesDto->setIdOfendidoSolicitud($impofedelsolicitud["idOfendidoSolicitud"]);
                $ImpofedelsolicitudesDto->setIdDelitoSolicitud($impofedelsolicitud["idDelitoSolicitud"]);
                $ImpofedelsolicitudesDto->setCveModalidad($impofedelsolicitud["cveModalidad"]);
                $ImpofedelsolicitudesDto->setCveComision($impofedelsolicitud["cveComision"]);
                $ImpofedelsolicitudesDto->setCveConcurso($impofedelsolicitud["cveConcurso"]);
                $ImpofedelsolicitudesDto->setCveClasificacionDelitoOrden($impofedelsolicitud["cveClasificacionDelitoOrden"]);
                $ImpofedelsolicitudesDto->setCveElementoComision($impofedelsolicitud["cveElementoComision"]);
                $ImpofedelsolicitudesDto->setCveClasificacionDelito($impofedelsolicitud["cveClasificacionDelito"]);
                $ImpofedelsolicitudesDto->setCveFormaAccion($impofedelsolicitud["cveFormaAccion"]);
                $ImpofedelsolicitudesDto->setCveConsumacion($impofedelsolicitud["cveConsumacion"]);
                $ImpofedelsolicitudesDto->setCveMunicipio($impofedelsolicitud["cveMunicipio"]);
                $ImpofedelsolicitudesDto->setCveEntidad($impofedelsolicitud["cveEntidad"]);
                $ImpofedelsolicitudesDto->setCveGradoParticipacion($impofedelsolicitud["cveGradoParticipacion"]);
                $ImpofedelsolicitudesDto->setCveRelacionImpOfe($impofedelsolicitud["cveRelacionImpOfe"]);
                $ImpofedelsolicitudesDto->setCveTerminacion($impofedelsolicitud["CveTerminacion"]);
                $ImpofedelsolicitudesDto->setActivo($impofedelsolicitud["activo"]);
                $ImpofedelsolicitudesDto->setFechaDelito($impofedelsolicitud["fechaDelito"]);
                $ImpofedelsolicitudesDto->setDireccion($impofedelsolicitud["direccion"]);
                $ImpofedelsolicitudesDto->setColonia($impofedelsolicitud["colonia"]);
                $ImpofedelsolicitudesDto->setNumInterior($impofedelsolicitud["numInterior"]);
                $ImpofedelsolicitudesDto->setNumExterior($impofedelsolicitud["numExterior"]);
                $ImpofedelsolicitudesDto->setCp($impofedelsolicitud["cp"]);

                $ImpofedelsolicitudesDto = $this->validarImpofedelsolicitudes($ImpofedelsolicitudesDto);

                if (!$validacion->num(1, 11, (int) $ImpofedelsolicitudesDto->getIdSolicitudAudiencia())) {
                    if ($ImpofedelsolicitudesDto->getIdSolicitudAudiencia() <= 0) {
                        $msg[] = array(utf8_encode("La Solicitud de Audicencia de la relación " . $count . ", no es valida"));
                        $error = true;
                    }
                }

                if (!$validacion->num(1, 11, (int) $ImpofedelsolicitudesDto->getIdImputadoSolicitud())) {
                    if ($ImpofedelsolicitudesDto->getIdImputadoSolicitud() <= 0) {
                        $msg[] = array(utf8_encode("El Imputado de la Solicitud de la relación " . $count . ", no es valida"));
                        $error = true;
                    }
                }

                if (!$validacion->num(1, 11, (int) $ImpofedelsolicitudesDto->getIdOfendidoSolicitud())) {
                    if ($ImpofedelsolicitudesDto->getIdOfendidoSolicitud() <= 0) {
                        $msg[] = array(utf8_encode("El Ofendido de la Solicitud de la relación " . $count . ", no es valida"));
                        $error = true;
                    }
                }

                if (!$validacion->num(1, 11, (int) $ImpofedelsolicitudesDto->getIdDelitoSolicitud())) {
                    if ($ImpofedelsolicitudesDto->getIdDelitoSolicitud() <= 0) {
                        $msg[] = array(utf8_encode("El Delito de la Solicitud de la relación " . $count . ", no es valida"));
                        $error = true;
                    }
                }

                if (!$validacion->num(1, 11, (int) $ImpofedelsolicitudesDto->getCveModalidad())) {
                    if ($ImpofedelsolicitudesDto->getCveModalidad() <= 0) {
                        $msg[] = array(utf8_encode("La Modalidad de la Solicitud de la relación " . $count . ", no es valida"));
                        $error = true;
                    }
                }

                if (!$validacion->num(1, 11, (int) $ImpofedelsolicitudesDto->getCveComision())) {
                    if ($ImpofedelsolicitudesDto->getCveComision() <= 0) {
                        $msg[] = array(utf8_encode("La Comisión de la Solicitud de la relación " . $count . ", no es valida"));
                        $error = true;
                    }
                }

                if (!$validacion->num(1, 11, (int) $ImpofedelsolicitudesDto->getCveConcurso())) {
                    if ($ImpofedelsolicitudesDto->getCveConcurso() <= 0) {
                        $msg[] = array(utf8_encode("El concurso de la Solicitud de la relación " . $count . ", no es valida"));
                        $error = true;
                    }
                }

                if (!$validacion->num(1, 11, (int) $ImpofedelsolicitudesDto->getCveClasificacionDelitoOrden())) {
                    if ($ImpofedelsolicitudesDto->getCveClasificacionDelitoOrden() <= 0) {
                        $msg[] = array(utf8_encode("La Clasificación de la Solicitud de la relación " . $count . ", no es valida"));
                        $error = true;
                    }
                }

                if (!$validacion->num(1, 11, (int) $ImpofedelsolicitudesDto->getCveElementoComision())) {
                    if ($ImpofedelsolicitudesDto->getCveElementoComision() <= 0) {
                        $msg[] = array(utf8_encode("El Elemento de Comisión de la Solicitud de la relación " . $count . ", no es valida"));
                        $error = true;
                    }
                }

                if (!$validacion->num(1, 11, (int) $ImpofedelsolicitudesDto->getCveClasificacionDelito())) {
                    if ($ImpofedelsolicitudesDto->getCveClasificacionDelito() <= 0) {
                        $msg[] = array(utf8_encode("La Clasificación del Delito de Comisión de la Solicitud de la relación " . $count . ", no es valida"));
                        $error = true;
                    }
                }

                if (!$validacion->num(1, 11, (int) $ImpofedelsolicitudesDto->getCveFormaAccion())) {
                    if ($ImpofedelsolicitudesDto->getCveFormaAccion() <= 0) {
                        $msg[] = array(utf8_encode("La Forma de Acción de la Solicitud de la relación " . $count . ", no es valida"));
                        $error = true;
                    }
                }

                if (!$validacion->num(1, 11, (int) $ImpofedelsolicitudesDto->getCveConsumacion())) {
                    if ($ImpofedelsolicitudesDto->getCveConsumacion() <= 0) {
                        $msg[] = array(utf8_encode("La Consumación de la Solicitud de la relación " . $count . ", no es valida"));
                        $error = true;
                    }
                }

                if (!$validacion->num(1, 11, (int) $ImpofedelsolicitudesDto->getCveMunicipio())) {
                    if ($ImpofedelsolicitudesDto->getCveMunicipio() <= 0) {
                        $msg[] = array(utf8_encode("El Municipio de la Solicitud de la relación " . $count . ", no es valida"));
                        $error = true;
                    }
                }

                if (!$validacion->num(1, 11, (int) $ImpofedelsolicitudesDto->getCveEntidad())) {
                    if ($ImpofedelsolicitudesDto->getCveEntidad() <= 0) {
                        $msg[] = array(utf8_encode("La Entidad de la Solicitud de la relación " . $count . ", no es valida"));
                        $error = true;
                    }
                }

                if (!$validacion->num(1, 11, (int) $ImpofedelsolicitudesDto->getCveGradoParticipacion())) {
                    if ($ImpofedelsolicitudesDto->getCveGradoParticipacion() <= 0) {
                        $msg[] = array(utf8_encode("El Grado de Participación de la Solicitud de la relación " . $count . ", no es valida"));
                        $error = true;
                    }
                }

                if (!$validacion->num(1, 11, (int) $ImpofedelsolicitudesDto->getCveRelacionImpOfe())) {
                    if ($ImpofedelsolicitudesDto->getCveRelacionImpOfe() <= 0) {
                        $msg[] = array(utf8_encode("La Relación ente el Imputado y Ofendido de la Solicitud de la relación " . $count . ", no es valida"));
                        $error = true;
                    }
                }

                if (!$validacion->date((string) $ImpofedelsolicitudesDto->getFechaDelito())) {
                    if ($ImpofedelsolicitudesDto->getFechaDelito() != "") {
                        $msg[] = array(utf8_encode("La Fecha del Delito de la Solicitud de la relación " . $count . ", no es valida"));
                        $error = true;
                    }
                }

                if (!$validacion->textNum(1, 500, $ImpofedelsolicitudesDto->getDireccion())) {
                    if ($ImpofedelsolicitudesDto->getDireccion() != "") {
                        $msg[] = array(utf8_encode("La Dirección de la Solicitud de la relación " . $count . ", no es valida"));
                        $error = true;
                    }
                }

                if (!$validacion->textNum(1, 200, $ImpofedelsolicitudesDto->getColonia())) {
                    if ($ImpofedelsolicitudesDto->getColonia() != "") {
                        $msg[] = array(utf8_encode("La Colónia de la Solicitud de la relación " . $count . ", no es valida"));
                        $error = true;
                    }
                }

                if (!$validacion->textNum(1, 10, $ImpofedelsolicitudesDto->getNumInterior())) {
                    if ($ImpofedelsolicitudesDto->getNumInterior() != "") {
                        $msg[] = array(utf8_encode("La Colónia de la Solicitud de la relación " . $count . ", no es valida"));
                        $error = true;
                    }
                }

                if (!$validacion->textNum(1, 10, $ImpofedelsolicitudesDto->getNumExterior())) {
                    if ($ImpofedelsolicitudesDto->getNumExterior() != "") {
                        $msg[] = array(utf8_encode("La Colónia de la Solicitud de la relación " . $count . ", no es valida"));
                        $error = true;
                    }
                }
                $impofedelsolicitudesArray[$count - 1] = $ImpofedelsolicitudesDto;
                $count++;
            }
        }

        if ((!$error) && (0 <= count($msg))) {
            if ($proveedor == null) {
                $this->proveedor = new Proveedor('mysql', 'sigejupe');
                $this->proveedor->connect();
            } else {
                $this->proveedor = $proveedor;
            }
            $this->proveedor->execute("BEGIN");
            $impofedelsolicitudesDao = new ImpofedelsolicitudesDAO();
            $count = 0;
            foreach ($impofedelsolicitudesArray as $impofedelsolicitud) {
#valida si el IdImpOfeDelSolicitud es = a 0 lo que significa que va a insertar un nuevo registro en otro caso actualiza el existente
                if ($impofedelsolicitud->getIdImpOfeDelSolicitud() == "0" || $impofedelsolicitud->getIdImpOfeDelSolicitud() == "") {
                    $tmp = new ImpofedelsolicitudesDTO();
                    $tmp->setIdSolicitudAudiencia($impofedelsolicitud->getIdSolicitudAudiencia());
                    $tmp->setIdImputadoSolicitud($impofedelsolicitud->getIdImputadoSolicitud());
                    $tmp->setIdOfendidoSolicitud($impofedelsolicitud->getIdOfendidoSolicitud());
                    $tmp->setIdDelitoSolicitud($impofedelsolicitud->getIdDelitoSolicitud());
                    $tmp->setActivo("S");
                    $tmp = $impofedelsolicitudesDao->selectImpofedelsolicitudes($tmp, "", $this->proveedor);
                    if ($tmp == "") {
                        $impofedelsolicitud = $impofedelsolicitudesDao->insertImpofedelsolicitudes($impofedelsolicitud, $this->proveedor);
                        if ($impofedelsolicitud != "") {
                            $impofedelsolicitudesArrayReturn[$count] = $impofedelsolicitud;
                            $count++;
                        } else {
                            $msg[] = array("No se logro registrar la relacion debido a algun error en la transaccion ");
                            $error = true;
                            break;
                        }
                    } else {
                        $msg[] = array("Ya existe una relacion entre el imputado, ofendido y delito para esta solicitud");
                        $error = true;
                        break;
                    }
                } else {
                    $tmp = new ImpofedelsolicitudesDTO();
                    $tmp->setIdImpOfeDelSolicitud($impofedelsolicitud->getIdImpOfeDelSolicitud());
                    $tmp = $impofedelsolicitudesDao->selectImpofedelsolicitudes($tmp, "", $this->proveedor);
                    if ($tmp != "") {
                        $impofedelsolicitud = $impofedelsolicitudesDao->updateImpofedelsolicitudes($impofedelsolicitud, $this->proveedor);
                        if ($impofedelsolicitud != "") {
                            $impofedelsolicitudesArrayReturn[$count] = $impofedelsolicitud;
                            $count++;
                        } else {
                            $msg[] = array("No se logro modificar la relacion debido a algun error en la transaccion ");
                            $error = true;
                            break;
                        }
                    } else {
                        $msg[] = array("No existe una relacion entre el imputado, ofendido y delito para esta solicitud a modificar");
                        $error = true;
                        break;
                    }
                }
            }

            if ((!$error)) {
                $this->proveedor->execute("COMMIT");
                $msg[] = array("Imputado registrado de forma correcta");
                foreach ($impofedelsolicitudesArrayReturn as $impofedelsolicitud) {
                    $msg[] = $impofedelsolicitud[0]->toString();
                }
                $result = array("Correcto" => $msg);
                $result = json_encode($result);
            } else {
                $this->proveedor->execute("ROLLBACK");
                $result = array("Error" => $msg);
                $result = json_encode($result);
            }
        } else {
            $result = array("Error" => $msg);
            $result = json_encode($result);
        }
        echo $result;
        return $result;
    }

    public function validaExiste($ImpofedelsolicitudesDto, $proveedor = null) {
        $ImpofedelsolicitudesDto = $this->validarImpofedelsolicitudes($ImpofedelsolicitudesDto);
        $ImpofedelsolicitudesDao = new ImpofedelsolicitudesDao();
        $ImpofedelsolicitudesDto = $ImpofedelsolicitudesDao->validaExiste($ImpofedelsolicitudesDto, $proveedor);

        return $ImpofedelsolicitudesDto;
    }

    public function insertImpofedelsolicitudesrelacion($ImpofedelsolicitudesDto = "", $proveedor = null) {
        $bitacora = new BitacoramovimientosController();
        $validaCampos = $this->validaCampos($ImpofedelsolicitudesDto);
        if ($validaCampos['estatus'] != "OK") {
            exit(json_encode($validaCampos));
        }
        $ImpofedelsolicitudesDto = $this->validarImpofedelsolicitudes($ImpofedelsolicitudesDto);
        $validacionExiste = $this->validaExiste($ImpofedelsolicitudesDto);

        if ($validacionExiste != "") {
            $mensaje = array("mensaje" => "EL REGISTRO YA EXISTE.");
            $estatus = array("estatus" => "Error", "totalCount" => "0");
            $respuesta = array_merge($estatus, array("resultados" => array($mensaje)));
            $respuestaValidacion = json_encode($respuesta);
            return $respuestaValidacion;
        } else {
            $ImpofedelsolicitudesDao = new ImpofedelsolicitudesDAO();
            $ImpofedelsolicitudesDto = $ImpofedelsolicitudesDao->insertImpofedelsolicitudes($ImpofedelsolicitudesDto, $proveedor);
            $dtoToJson = new DtoToJson($ImpofedelsolicitudesDto);
            $bitacoraDomicilio = $bitacora->agregar(93, 'INSERCION tblimpofedelsolicitudes', 'txt', serialize($ImpofedelsolicitudesDto[0]), '');
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
    }

    public function updateImpofedelsolicitudesrelacion($ImpofedelsolicitudesDto = "", $proveedor = null) {
        $bitacora = new BitacoramovimientosController();
        $validaCampos = $this->validaCampos($ImpofedelsolicitudesDto);
        if ($validaCampos['estatus'] != "OK") {
            exit(json_encode($validaCampos));
        }
        $ImpofedelsolicitudesDto = $this->validarImpofedelsolicitudes($ImpofedelsolicitudesDto);
        $validacionExiste = $this->validaExiste($ImpofedelsolicitudesDto);
        $ImpofedelsolicitudesDao = new ImpofedelsolicitudesDAO();
        $ImpofedelsolicitudesDto = $ImpofedelsolicitudesDao->updateImpofedelsolicitudes($ImpofedelsolicitudesDto, $proveedor);
        $dtoToJson = new DtoToJson($ImpofedelsolicitudesDto);
        $bitacoraDomicilio = $bitacora->agregar(94, 'ACTUALIZACION tblimpofedelsolicitudes', 'txt', serialize($ImpofedelsolicitudesDto[0]), '');
        return $dtoToJson->toJson("REGISTRO ACTUALIZADO DE FORMA CORRECTA");
    }

    public function updateImpofedelsolicitudesrelacionbaja($ImpofedelsolicitudesDto = "", $proveedor = null) {
        $bitacora = new BitacoramovimientosController();
        $ImpofedelsolicitudesDao = new ImpofedelsolicitudesDAO();
        $ImpofedelsolicitudesDto = $ImpofedelsolicitudesDao->updateImpofedelsolicitudes($ImpofedelsolicitudesDto, $proveedor);
        $dtoToJson = new DtoToJson($ImpofedelsolicitudesDto);
        $bitacoraDomicilio = $bitacora->agregar(95, 'BORRADO LOGICO tblimpofedelsolicitudes', 'txt', serialize($ImpofedelsolicitudesDto[0]), '');
        return $dtoToJson->toJson("REGISTRO BORRADO DE FORMA CORRECTA");
    }

    public function validaSolicitud($ImpofedelsolicitudesDto = "", $proveedor = null) {

        $mensaje["resultados"] = array();
        $solicitudesAudienciasDAO = new SolicitudesAudienciasDAO();
        $solicitudesAudienciasDto = new SolicitudesAudienciasDTO();
        $solicitudesAudienciasDto->setIdSolicitudAudiencia($ImpofedelsolicitudesDto->getIdSolicitudAudiencia());
        $resultadoSolicitudesAudiencias = $solicitudesAudienciasDAO->selectSolicitudesAudiencias($solicitudesAudienciasDto);

        $imputadossolicitudesDto = new ImputadossolicitudesDTO();
        $imputadossolicitudesDto->setIdSolicitudAudiencia($ImpofedelsolicitudesDto->getIdSolicitudAudiencia());
        $imputadossolicitudesDto->setActivo('S');
        $imputadossolicitudesDao = new ImputadossolicitudesDAO();
        $imputadossolicitudesDto = $imputadossolicitudesDao->selectImputadossolicitudes($imputadossolicitudesDto, "", $this->proveedor);
        $countImputados = count($imputadossolicitudesDto);

        $ofendidosSolicitudesDto = new OfendidosSolicitudesDTO();
        $ofendidosSolicitudesDto->setIdSolicitudAudiencia($ImpofedelsolicitudesDto->getIdSolicitudAudiencia());
        $ofendidosSolicitudesDto->setActivo('S');
        $ofendidosSolicitudesDao = new OfendidosSolicitudesDAO();
        $ofendidosSolicitudesDto = $ofendidosSolicitudesDao->selectOfendidossolicitudes($ofendidosSolicitudesDto, "", $this->proveedor);
        $countOfendidos = count($ofendidosSolicitudesDto);

        $delitosSolicitudesDto = new DelitosSolicitudesDTO();
        $delitosSolicitudesDto->setIdSolicitudAudiencia($ImpofedelsolicitudesDto->getIdSolicitudAudiencia());
        $delitosSolicitudesDto->setActivo('S');
        $delitosSolicitudesDao = new DelitosSolicitudesDAO();
        $delitosSolicitudesDto = $delitosSolicitudesDao->selectDelitosSolicitudes($delitosSolicitudesDto, "", $this->proveedor);
        $countDelitos = count($delitosSolicitudesDto);

        $imputados = $resultadoSolicitudesAudiencias[0]->getNumImputados();
        $ofendidos = $resultadoSolicitudesAudiencias[0]->getNumOfendidos();
        $delitos = $resultadoSolicitudesAudiencias[0]->getNumDelitos();
        if ($imputados > $countImputados) {
            $mensaje["resultados"][] = array("estatus" => "error", "mensaje" => "FALTAN IMPUTADOS DEBEN SER " . $imputados . " IMPUTADOS");
        }
        if ($imputados < $countImputados) {
            $mensaje["resultados"][] = array("estatus" => "error", "mensaje" => "SOBRAN IMPUTADOS DEBEN SER " . $imputados . " IMPUTADOS");
        }
        if ($ofendidos > $countOfendidos) {
            $mensaje["resultados"][] = array("estatus" => "error", "mensaje" => "FALTAN OFENDIDOS DEBEN SER " . $ofendidos . " OFENDIDOS");
        }
        if ($ofendidos < $countOfendidos) {
            $mensaje["resultados"][] = array("estatus" => "error", "mensaje" => "SOBRAN OFENDIDOS DEBEN SER " . $ofendidos . " OFENDIDOS");
        }
        if ($delitos > $countDelitos) {
            $mensaje["resultados"][] = array("estatus" => "error", "mensaje" => "FALTAN DELITOS DEBEN SER " . $delitos . " DELITOS");
        }
        if ($delitos < $countDelitos) {
            $mensaje["resultados"][] = array("estatus" => "error", "mensaje" => "SOBRAN DELITOS DEBEN SER " . $delitos . " DELITOS");
        }
        if (($imputados == $countImputados) && ($ofendidos == $countOfendidos) && ($delitos == $countDelitos)) {
            $mensaje["resultados"][] = array("estatus" => "ok", "mensaje" => "LA RELACION ES CORRECTA EXISTEN " . $imputados . " IMPUTADOS, " . $ofendidos . " OFENDIDOS, " . $delitos . " DELITOS");
        }
        return json_encode($mensaje);
    }

    public function selectImpofedelsolicitudesrelacion($impofedelsolicitudesDto, $proveedor = null) {
        $impOfeDelSolArray = array();
        $error = false;

        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        $impofedelsolicitudesDto->setActivo("S");

        $imputadossolicitudesDto = new ImputadossolicitudesDTO();
        $imputadossolicitudesDto->setIdSolicitudAudiencia($impofedelsolicitudesDto->getIdSolicitudAudiencia());
        $imputadossolicitudesDao = new ImputadossolicitudesDAO();
        $imputadossolicitudesDto = $imputadossolicitudesDao->selectImputadossolicitudes($imputadossolicitudesDto, "", $this->proveedor);

        $ofendidosSolicitudesDto = new OfendidosSolicitudesDTO();
        $ofendidosSolicitudesDto->setIdSolicitudAudiencia($impofedelsolicitudesDto->getIdSolicitudAudiencia());
        $ofendidosSolicitudesDao = new OfendidosSolicitudesDAO();
        $ofendidosSolicitudesDto = $ofendidosSolicitudesDao->selectOfendidossolicitudes($ofendidosSolicitudesDto, "", $this->proveedor);

        $delitosSolicitudesDto = new DelitosSolicitudesDTO();
        $delitosSolicitudesDto->setIdSolicitudAudiencia($impofedelsolicitudesDto->getIdSolicitudAudiencia());

        $delitosSolicitudesDao = new DelitosSolicitudesDAO();
        $delitosSolicitudesDto = $delitosSolicitudesDao->selectDelitosSolicitudes($delitosSolicitudesDto, "", $this->proveedor);

        $modalidadesDto = new ModalidadesDTO();
        $modalidadesDao = new ModalidadesDAO();
        $modalidadesDto = $modalidadesDao->selectModalidades($modalidadesDto, "ORDER BY desModalidad ASC", $this->proveedor);

        $comisionesDto = new ComisionesDTO();
        $comisionesDao = new ComisionesDAO();
        $comisionesDto = $comisionesDao->selectComisiones($comisionesDto, "", $this->proveedor);

        $concursosDto = new ConcursosDTO();
        $concursosDao = new ConcursosDAO();
        $concursosDto = $concursosDao->selectConcursos($concursosDto, "", $this->proveedor);

        $clasificacionesDelitosOrdenDto = new ClasificacionesDelitosOrdenDTO();
        $clasificacionesDelitosOrdenDao = new ClasificacionesDelitosOrdenDAO();
        $clasificacionesDelitosOrdenDto = $clasificacionesDelitosOrdenDao->selectClasificacionesDelitosOrden($clasificacionesDelitosOrdenDto, "", $this->proveedor);

        $elementosComisionesDto = new elementosComisionesDTO();
        $elementosComisionesDao = new elementosComisionesDAO();
        $elementosComisionesDto = $elementosComisionesDao->selectelementosComisiones($elementosComisionesDto, "", $this->proveedor);

        $clasificacionesDelitosDto = new clasificacionesDelitosDTO();
        $clasificacionesDelitosDao = new clasificacionesDelitosDAO();
        $clasificacionesDelitosDto = $clasificacionesDelitosDao->selectClasificacionesDelitos($clasificacionesDelitosDto, "", $this->proveedor);

        $formasAccionesDto = new FormasAccionesDTO();
        $formasAccionesDao = new FormasAccionesDAO();
        $formasAccionesDto = $formasAccionesDao->selectFormasAcciones($formasAccionesDto, "", $this->proveedor);

        $consumacionesDto = new ConsumacionesDTO();
        $consumacionesDao = new ConsumacionesDAO();
        $consumacionesDto = $consumacionesDao->selectConsumaciones($consumacionesDto, "", $this->proveedor);

        $municipiosDto = new MunicipiosDTO();
        $municipiosDao = new MunicipiosDAO();
        $municipiosDto = $municipiosDao->selectMunicipios($municipiosDto, "", $this->proveedor);

        $estadosDto = new EstadosDTO();
        $estadosDao = new EstadosDAO();
        $estadosDto = $estadosDao->selectEstados($estadosDto, "", $this->proveedor);

        $gradoParticipacionesDto = new GradoParticipacionesDTO();
        $gradoParticipacionesDao = new GradoParticipacionesDAO();
        $gradoParticipacionesDto = $gradoParticipacionesDao->selectGradoParticipaciones($gradoParticipacionesDto, "", $this->proveedor);

        $tiposrelimpofeDto = new TiposrelimpofeDTO();
        $tiposrelimpofeDao = new TiposrelimpofeDAO();
        $tiposrelimpofeDto = $tiposrelimpofeDao->selectTiposrelimpofe($tiposrelimpofeDto, "", $this->proveedor);

        $impofedelsolicitudesDao = new ImpofedelsolicitudesDAO();
        $impofedelsolicitudesDto = $impofedelsolicitudesDao->selectImpofedelsolicitudes($impofedelsolicitudesDto, " ORDER BY idImputadoSolicitud,idOfendidoSolicitud,idDelitoSolicitud ASC", $this->proveedor);



        if ($impofedelsolicitudesDto != "") {
            foreach ($impofedelsolicitudesDto as $impofedelsolicitudDto) {
                $delitosRelacion["idImpOfeDelSolicitud"] = $impofedelsolicitudDto->getIdImpOfeDelSolicitud();
                $delitosRelacion["fechaDelito"] = $impofedelsolicitudDto->getFechaDelito();
                $delitosRelacion["direccion"] = utf8_encode($impofedelsolicitudDto->getDireccion());
                $delitosRelacion["colonia"] = utf8_encode($impofedelsolicitudDto->getColonia());
                $delitosRelacion["numInterior"] = $impofedelsolicitudDto->getNumInterior();
                $delitosRelacion["numExterior"] = $impofedelsolicitudDto->getNumExterior();
                $delitosRelacion["cp"] = $impofedelsolicitudDto->getCp();

                for ($index = 0; $index < count($imputadossolicitudesDto); $index++) {
                    if ($imputadossolicitudesDto[$index]->getIdImputadoSolicitud() == $impofedelsolicitudDto->getIdImputadoSolicitud()) {
                        $delitosRelacion["imputados"] = array("idImputadoSolicitud" => $imputadossolicitudesDto[$index]->getIdImputadoSolicitud(), "nombre" => utf8_encode($imputadossolicitudesDto[$index]->getNombre()), "paterno" => utf8_encode($imputadossolicitudesDto[$index]->getPaterno()), "materno" => utf8_encode($imputadossolicitudesDto[$index]->getMaterno()), "cveTipoPersona" => $imputadossolicitudesDto[$index]->getCveTipoPersona(), "nombreMoral" => $imputadossolicitudesDto[$index]->getNombreMoral());
                        break;
                    }
                }

                for ($index = 0; $index < count($ofendidosSolicitudesDto); $index++) {
                    if ($ofendidosSolicitudesDto[$index]->getIdOfendidoSolicitud() == $impofedelsolicitudDto->getIdOfendidoSolicitud()) {
                        $delitosRelacion["ofendidos"] = array("idOfendidoSolicitud" => $ofendidosSolicitudesDto[$index]->getIdOfendidoSolicitud(), "nombre" => utf8_encode($ofendidosSolicitudesDto[$index]->getNombre()), "paterno" => utf8_encode($ofendidosSolicitudesDto[$index]->getPaterno()), "materno" => utf8_encode($ofendidosSolicitudesDto[$index]->getMaterno()), "cveTipoPersona" => $ofendidosSolicitudesDto[$index]->getCveTipoPersona(), "nombreMoral" => $ofendidosSolicitudesDto[$index]->getNombreMoral());
                        break;
                    }
                }

                for ($index = 0; $index < count($delitosSolicitudesDto); $index++) {
                    $delitosSolicitudesDto[$index]->getIdDelitoSolicitud();
                    if ($delitosSolicitudesDto[$index]->getIdDelitoSolicitud() == $impofedelsolicitudDto->getIdDelitoSolicitud()) {
                        $delitosDto = new DelitosDTO();
                        $delitosDto->setCveDelito($delitosSolicitudesDto[$index]->getCveDelito());
                        $delitosDao = new DelitosDAO();
                        $delitosDto = $delitosDao->selectDelitos($delitosDto, "", $this->proveedor);
                        foreach ($delitosDto as $keyDelitos => $valueDelitos) {
                            $delitosRelacion["delitos"] = array("IdDelitoSolicitud" => $delitosSolicitudesDto[$index]->getIdDelitoSolicitud(), "cveDelito" => $valueDelitos->getCveDelito(), "desDelito" => utf8_encode($valueDelitos->getDesDelito()));
                        }
                        break;
                    }
                }

                for ($index = 0; $index < count($modalidadesDto); $index++) {
                    if ($modalidadesDto[$index]->getCveModalidad() == $impofedelsolicitudDto->getCveModalidad()) {
                        $delitosRelacion["modalidad"] = array("cveModalidad" => $modalidadesDto[$index]->getCveModalidad(), "desModalidad" => $modalidadesDto[$index]->getDesModalidad());
                        break;
                    }
                }

                for ($index = 0; $index < count($comisionesDto); $index++) {
                    if ($comisionesDto[$index]->getCveComision() == $impofedelsolicitudDto->getCveComision()) {
                        $delitosRelacion["comisiones"] = array("cveComision" => $comisionesDto[$index]->getCveComision(), "desComision" => $comisionesDto[$index]->getDesComision());
                        break;
                    }
                }

                for ($index = 0; $index < count($concursosDto); $index++) {
                    if ($concursosDto[$index]->getCveConcurso() == $impofedelsolicitudDto->getCveConcurso()) {
                        $delitosRelacion["concurso"] = array("cveConcurso" => $concursosDto[$index]->getCveConcurso(), "desConcurso" => $concursosDto[$index]->getDesConcurso());
                        break;
                    }
                }

                for ($index = 0; $index < count($clasificacionesDelitosOrdenDto); $index++) {
                    if ($clasificacionesDelitosOrdenDto[$index]->getCveClasificacionDelitoOrden() == $impofedelsolicitudDto->getCveClasificacionDelitoOrden()) {
                        $delitosRelacion["clasificacionDelitoOrden"] = array("cveClasificacionDelitoOrden" => $clasificacionesDelitosOrdenDto[$index]->getCveClasificacionDelitoOrden(), "desClasificacionDelitoOrden" => $clasificacionesDelitosOrdenDto[$index]->getDesClasificacionDelitoOrden());
                        break;
                    }
                }

                for ($index = 0; $index < count($elementosComisionesDto); $index++) {
                    if ($elementosComisionesDto[$index]->getCveElementoComision() == $impofedelsolicitudDto->getCveElementoComision()) {
                        $delitosRelacion["elementoComision"] = array("cveElementoComision" => $elementosComisionesDto[$index]->getCveElementoComision(), "desElementoComision" => $elementosComisionesDto[$index]->getDesElementoComision());
                        break;
                    }
                }

                for ($index = 0; $index < count($clasificacionesDelitosDto); $index++) {
                    if ($clasificacionesDelitosDto[$index]->getCveClasificacionDelito() == $impofedelsolicitudDto->getCveClasificacionDelito()) {
                        $delitosRelacion["clasificacionDelito"] = array("cveClasificacionDelito" => $clasificacionesDelitosDto[$index]->getCveClasificacionDelito(), "desClasificacionDelito" => $clasificacionesDelitosDto[$index]->getDesClasificacionDelito());
                        break;
                    }
                }

                for ($index = 0; $index < count($formasAccionesDto); $index++) {
                    if ($formasAccionesDto[$index]->getCveFormaAccion() == $impofedelsolicitudDto->getCveFormaAccion()) {
                        $delitosRelacion["formaAccion"] = array("cveFormaAccion" => $formasAccionesDto[$index]->getCveFormaAccion(), "desFormaAccion" => $formasAccionesDto[$index]->getDesFormaAccion());
                        break;
                    }
                }

                for ($index = 0; $index < count($consumacionesDto); $index++) {
                    if ($consumacionesDto[$index]->getCveConsumacion() == $impofedelsolicitudDto->getCveConsumacion()) {
                        $delitosRelacion["consumacion"] = array("cveConsumacion" => $consumacionesDto[$index]->getCveConsumacion(), "desConsumacion" => $consumacionesDto[$index]->getDesConsumacion());
                        break;
                    }
                }

                for ($index = 0; $index < count($municipiosDto); $index++) {
                    if ($municipiosDto[$index]->getCveMunicipio() == $impofedelsolicitudDto->getCveMunicipio()) {
                        $delitosRelacion["municipio"] = array("cveMunicipio" => $municipiosDto[$index]->getCveMunicipio(), "desMunicipio" => $municipiosDto[$index]->getDesMunicipio());
                        break;
                    } else {
                        $delitosRelacion["municipio"] = array("cveMunicipio" => 0, "desMunicipio" => "");
                    }
                }

                for ($index = 0; $index < count($estadosDto); $index++) {
                    if ($estadosDto[$index]->getCveEstado() == $impofedelsolicitudDto->getCveEntidad()) {
                        $delitosRelacion["Estado"] = array("cveEstado" => $estadosDto[$index]->getCveEstado(), "desEstado" => $estadosDto[$index]->getDesEstado());
                        break;
                    } else {
                        $delitosRelacion["Estado"] = array("cveEstado" => 0, "desEstado" => "");
                    }
                }

                for ($index = 0; $index < count($gradoParticipacionesDto); $index++) {
                    if ($gradoParticipacionesDto[$index]->getCveGradoParticipacion() == $impofedelsolicitudDto->getCveGradoParticipacion()) {
                        $delitosRelacion["gradoParticipacion"] = array("cveGradoParticipacion" => $gradoParticipacionesDto[$index]->getCveGradoParticipacion(), "desGradoParticipacion" => $gradoParticipacionesDto[$index]->getDesGradoParticipacion());
                        break;
                    }
                }

                for ($index = 0; $index < count($tiposrelimpofeDto); $index++) {
                    if ($tiposrelimpofeDto[$index]->getCveRelacionImpOfe() == $impofedelsolicitudDto->getCveRelacionImpOfe()) {
                        $delitosRelacion["relacionImpOfe"] = array("cveRelacionImpOfe" => $tiposrelimpofeDto[$index]->getCveRelacionImpOfe(), "desRelacionImpOfe" => $tiposrelimpofeDto[$index]->getDesRelacionImpOfe());
                        break;
                    }
                }

                $impOfeDelSolArray[] = $delitosRelacion;
            }
            $resultado = json_encode($impOfeDelSolArray);
        } else {
            $resultado = 0;
        }

        if ($proveedor == null) {
            $this->proveedor->close();
        }
        return $resultado;
    }

    public function validaImpofedelsolicitudesrelacion($impofedelsolicitudesDto, $proveedor = null) {
        $countImputados = 0;
        $countOfendidos = 0;
        $countDelitos = 0;
        $error = false;
        $bandera = true;

        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $mensaje = array();
        $solicitudesAudienciasDAO = new SolicitudesAudienciasDAO();
        $solicitudesAudienciasDto = new SolicitudesAudienciasDTO();
        $solicitudesAudienciasDto->setIdSolicitudAudiencia($impofedelsolicitudesDto->getIdSolicitudAudiencia());
        $resultadoSolicitudesAudiencias = $solicitudesAudienciasDAO->selectSolicitudesAudiencias($solicitudesAudienciasDto);

        if ($resultadoSolicitudesAudiencias != "") {
            if ($resultadoSolicitudesAudiencias[0]->getActivo() == "N") {
                $mensaje["estatus"] = "error";
                $mensaje["mensaje"][] = "Esta solicitud no esta activa";
            }

            $imputadossolicitudesDto = new ImputadossolicitudesDTO();
            $imputadossolicitudesDto->setIdSolicitudAudiencia($impofedelsolicitudesDto->getIdSolicitudAudiencia());
            $imputadossolicitudesDto->setActivo("S");
            $imputadossolicitudesDao = new ImputadossolicitudesDAO();
            $imputadossolicitudesDto = $imputadossolicitudesDao->selectImputadossolicitudes($imputadossolicitudesDto, "", $this->proveedor);

            $ofendidosSolicitudesDto = new OfendidosSolicitudesDTO();
            $ofendidosSolicitudesDto->setIdSolicitudAudiencia($impofedelsolicitudesDto->getIdSolicitudAudiencia());
            $ofendidosSolicitudesDto->setActivo("S");
            $ofendidosSolicitudesDao = new OfendidosSolicitudesDAO();
            $ofendidosSolicitudesDto = $ofendidosSolicitudesDao->selectOfendidossolicitudes($ofendidosSolicitudesDto, "", $this->proveedor);

            $delitosSolicitudesDto = new DelitosSolicitudesDTO();
            $delitosSolicitudesDto->setIdSolicitudAudiencia($impofedelsolicitudesDto->getIdSolicitudAudiencia());
            $delitosSolicitudesDto->setActivo("S");
            $delitosSolicitudesDao = new DelitosSolicitudesDAO();
            $delitosSolicitudesDto = $delitosSolicitudesDao->selectDelitosSolicitudes($delitosSolicitudesDto, "", $this->proveedor);

            if ($imputadossolicitudesDto != "") {
                foreach ($imputadossolicitudesDto as $imputadosolicitudesDto) {
                    $impofedelsolicitudesDto = new ImpofedelsolicitudesDTO();
                    $impofedelsolicitudesDto->setIdSolicitudAudiencia($impofedelsolicitudesDto->getIdSolicitudAudiencia());
                    $impofedelsolicitudesDto->setActivo("S");
                    $impofedelsolicitudesDto->setIdImputadoSolicitud($imputadosolicitudesDto->getIdImputadoSolicitud());
                    $impofedelsolicitudesDao = new ImpofedelsolicitudesDAO();
                    $impofedelsolicitudesDto = $impofedelsolicitudesDao->selectimpofedelsolicitudes($impofedelsolicitudesDto, "", $this->proveedor);
                    if ($impofedelsolicitudesDto == "") {
                        $countImputados++;
                    }
                }
            }

            if ($ofendidosSolicitudesDto != "") {
                foreach ($ofendidosSolicitudesDto as $ofendidoSolicitudesDto) {
                    $impofedelsolicitudesDto = new ImpofedelsolicitudesDTO();
                    $impofedelsolicitudesDto->setIdSolicitudAudiencia($impofedelsolicitudesDto->getIdSolicitudAudiencia());
                    $impofedelsolicitudesDto->setActivo("S");
                    $impofedelsolicitudesDto->setIdOfendidoSolicitud($ofendidoSolicitudesDto->getIdOfendidoSolicitud());
                    $impofedelsolicitudesDao = new ImpofedelsolicitudesDAO();
                    $impofedelsolicitudesDto = $impofedelsolicitudesDao->selectimpofedelsolicitudes($impofedelsolicitudesDto, "", $this->proveedor);
                    if ($impofedelsolicitudesDto == "") {
                        $countOfendidos++;
                    }
                }
            }

            if ($delitosSolicitudesDto != "") {
                foreach ($delitosSolicitudesDto as $delitoSolicitudesDto) {
                    $impofedelsolicitudesDto = new ImpofedelsolicitudesDTO();
                    $impofedelsolicitudesDto->setIdSolicitudAudiencia($impofedelsolicitudesDto->getIdSolicitudAudiencia());
                    $impofedelsolicitudesDto->setActivo("S");
                    $impofedelsolicitudesDto->setIdDelitoSolicitud($delitoSolicitudesDto->getIdDelitoSolicitud());
                    $impofedelsolicitudesDao = new ImpofedelsolicitudesDAO();
                    $impofedelsolicitudesDto = $impofedelsolicitudesDao->selectimpofedelsolicitudes($impofedelsolicitudesDto, "", $this->proveedor);
                    if ($impofedelsolicitudesDto == "") {
                        $countDelitos++;
                    }
                }
            }

            if ($countImputados > 0) {
                $mensaje["estatus"] = "error";
                $mensaje["mensaje"][] = "Falta " . $countImputados . " relaciones de Imputados";
                $bandera = false;
            }

            if ($countOfendidos > 0) {
                $mensaje["estatus"] = "error";
                $mensaje["mensaje"][] = "Falta " . $countOfendidos . " relaciones de Ofendidos";
                $bandera = false;
            }

            if ($countDelitos > 0) {
                $mensaje["estatus"] = "error";
                $mensaje["mensaje"][] = "Falta " . $countDelitos . " relaciones de Delitos";
                $bandera = false;
            }
            if ($bandera == true) {
                $mensaje["estatus"] = "ok";
                $mensaje["mensaje"][] = "Relacion correcta";
            }
        } else {
            $mensaje["mensaje"][] = "Esta solicitud no existe";
        }

        if ($proveedor == null) {
            $this->proveedor->close();
        }
        return json_encode($mensaje);
    }

    public function selectImpofedelsolicitudesrelacionPaso($impofedelsolicitudesDto, $proveedor = null) {
        $impofedelsolicitudesDao = new ImpofedelsolicitudesDAO();
        $ImpofedelsolicitudAuxDto = new ImpofedelsolicitudesDTO();
        $rsImpofedelsolicitud = $impofedelsolicitudesDao->selectImpofedelsolicitudes($impofedelsolicitudesDto, " ORDER BY idImputadoSolicitud,idOfendidoSolicitud,idDelitoSolicitud ASC");
        $json = "";
        $status = false;
        $x = 1;
        $i = 1;
        $control = 0;
        $resultado = "";
        $arrayGeneral = array();

        if ($rsImpofedelsolicitud != "" && (count($rsImpofedelsolicitud) != 0)) {
            foreach ($rsImpofedelsolicitud as $Impofedelsolicitud) {
                $ofendidosSolicitudesDto = new OfendidosSolicitudesDTO();
                $ofendidosSolicitudesDao = new OfendidosSolicitudesDAO();
                $ofendidosSolicitudesDto->setIdOfendidoSolicitud($Impofedelsolicitud->getIdOfendidoSolicitud());
                $rsOfendido = $ofendidosSolicitudesDao->selectOfendidossolicitudesPaso6($ofendidosSolicitudesDto);
                if ($rsOfendido != "" && (count($rsOfendido) != 0)) {
                    $control++;
                    $arrayGeneral[] = array(
                        'idImpOfeDelSolicitud' => $Impofedelsolicitud->getIdImpOfeDelSolicitud(),
                        'idSolicitudAudiencia' => $Impofedelsolicitud->getIdSolicitudAudiencia(),
                        'idImputadoSolicitud' => $Impofedelsolicitud->getIdImputadoSolicitud(),
                        'idOfendidoSolicitud' => $Impofedelsolicitud->getIdOfendidoSolicitud(),
                        'idDelitoSolicitud' => $Impofedelsolicitud->getIdDelitoSolicitud()
                    );
                }
            }

            if ($control != 0) {
                $json .= "{";
                $json .= '"status":"ok",';
                $json .= '"data":[';
                foreach ($arrayGeneral as $general) {
                    $ofendidosSolicitudesDto = new OfendidosSolicitudesDTO();
                    $ofendidosSolicitudesDao = new OfendidosSolicitudesDAO();
                    $ofendidosSolicitudesDto->setIdOfendidoSolicitud($general['idOfendidoSolicitud']);
                    $rsOfendido = $ofendidosSolicitudesDao->selectOfendidossolicitudesPaso6($ofendidosSolicitudesDto);

                    $imputadossolicitudesDto = new ImputadossolicitudesDTO();
                    $imputadossolicitudesDto->setIdImputadoSolicitud($general['idImputadoSolicitud']);
                    $imputadossolicitudesDao = new ImputadossolicitudesDAO();
                    $rsImputados = $imputadossolicitudesDao->selectImputadossolicitudes($imputadossolicitudesDto, "", $this->proveedor);


                    $delitosSolicitudesDto = new DelitosSolicitudesDTO();
                    $delitosSolicitudesDao = new DelitosSolicitudesDAO();
                    $delitosSolicitudesDto->setIdDelitoSolicitud($general['idDelitoSolicitud']);
                    $rsDelitos = $delitosSolicitudesDao->selectDelitosSolicitudes($delitosSolicitudesDto, "", $this->proveedor);
                    if ($rsDelitos != "") {
                        $delitosDto = new DelitosDTO();
                        $delitosDao = new DelitosDAO();
                        $delitosDto->setCveDelito($rsDelitos[0]->getCveDelito());
                        $rsDesDelitos = $delitosDao->selectDelitos($delitosDto);
                    }

                    $json .= "{";
                    $json .= '"idImpOfeDelSolicitud":' . json_encode(($general["idImpOfeDelSolicitud"])) . ",";
                    $json .= '"idSolicitudAudiencia":' . json_encode(($general["idSolicitudAudiencia"])) . ",";
                    $json .= '"idImputadoSolicitud":' . json_encode(($general["idImputadoSolicitud"])) . ",";
                    $json .= '"dataImputados":[';
                    if ($rsImputados != "" && (count($rsImputados) != 0)) {
                        $json .= "{";
                        $json .= '"cveTipoPersona":' . json_encode(($rsImputados[0]->getCveTipoPersona())) . ",";
                        $json .= '"nombreMoral":' . json_encode(utf8_encode($rsImputados[0]->getNombreMoral())) . ",";
                        $json .= '"nombreImputado":' . json_encode(utf8_encode($rsImputados[0]->getNombre()) . " " . utf8_encode($rsImputados[0]->getPaterno()) . " " . utf8_encode($rsImputados[0]->getMaterno())) . "";
                        $json .= "}" . "\n";
                        $i ++;
                        if ($i <= count($rsImputados)) {
                            $json .= ",";
                        }
                        $json .= "],";
                    } else {
                        $status = true;
                        $json .= '{"status":"Fail",';
                        $json .= '"mnj":"No se encontro al imputado."}';
                    }
                    $json .= '"idOfendidoSolicitud":' . json_encode(($general["idOfendidoSolicitud"])) . ",";
                    $json .= '"dataOfendidos":[';
                    if ($rsOfendido != "" && (count($rsOfendido) != 0)) {
                        $json .= "{";
                        $json .= '"nombreOfendido":' . json_encode(utf8_encode($rsOfendido[0]->getNombre()) . " " . utf8_encode($rsOfendido[0]->getPaterno()) . " " . utf8_encode($rsOfendido[0]->getMaterno())) . ",";
                        $json .= '"cveTipoPersona":' . json_encode(($rsOfendido[0]->getCveTipoPersona())) . ",";
                        $json .= '"nombreMoral":' . json_encode(utf8_encode($rsOfendido[0]->getNombreMoral())) . ",";
                        $json .= '"cveVictimaDeTrata":' . json_encode(($rsOfendido[0]->getCveVictimaDeTrata())) . ",";
                        $json .= '"cveVictimaDeViolenciaDeGenero":' . json_encode(($rsOfendido[0]->getCveVictimaDeViolenciaDeGenero())) . ",";
                        $json .= '"cveVictimaDeAcoso":' . json_encode(($rsOfendido[0]->getCveVictimaDeAcoso())) . ",";
                        $json .= '"cveVictimaDeLaDelincuenciaOrganizada":' . json_encode(($rsOfendido[0]->getCveVictimaDeLaDelincuenciaOrganizada())) . "";
                        $json .= "}" . "\n";
                        $i ++;
                        if ($i <= count($rsOfendido)) {
                            $json .= ",";
                        }
                        $json .= "],";
                    } else {
                        $status = true;
                        $json .= '{';
                        $json .= '"mnj":"no se encontro al ofendido."}';
                        $json .= '],';
                    }
                    $json .= '"idDelitoSolicitud":' . json_encode(($general["idDelitoSolicitud"])) . ",";
                    if ($rsDesDelitos != "" && (count($rsDesDelitos) != 0)) {
                        $json .= '"dataDelitos":[';
                        $json .= "{";
                        $json .= '"cveDelito":' . json_encode(utf8_encode($rsDelitos[0]->getCveDelito())) . ",";
                        $json .= '"delito":' . json_encode(utf8_encode($rsDesDelitos[0]->getDesDelito())) . "";
                        $json .= "}" . "\n";
                        $i ++;
                        if ($i <= count($rsDesDelitos)) {
                            $json .= ",";
                        }
                        $json .= "]";
                    } else {
                        $status = true;
                        $json .= '{"status":"Fail",';
                        $json .= '"mnj":"no se encontro del delito."}';
                    }
                    $json .= "}" . "\n";
                    $x ++;
                    if ($x <= count($arrayGeneral)) {
                        $json .= ",";
                    }
                }
                $json .= "]";
                $json .= "}";
            } else {
                $json .= '{"status":"error",';
                $json .= '"mnj":"No se encontraron ofendidos con algun delito."}';
            }
        } else {
            $json .= '{"status":"error",';
            $json .= '"mnj":"No se encontraron resultados."}';
        }
        return $json;
    }

    public function updateImpofedelsolicitudes($ImpofedelsolicitudesDto, $proveedor = null) {
        $ImpofedelsolicitudesDto = $this->validarImpofedelsolicitudes($ImpofedelsolicitudesDto);
        $ImpofedelsolicitudesDao = new ImpofedelsolicitudesDAO();
        $ImpofedelsolicitudesDto = $ImpofedelsolicitudesDao->updateImpofedelsolicitudes($ImpofedelsolicitudesDto, $proveedor);
        return $ImpofedelsolicitudesDto;
    }

    public function deleteImpofedelsolicitudes($paramImpofedelsolicitudesDto, $proveedor = null) {
//        print_r($paramImpofedelsolicitudesDto);
        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();

        if (count($paramImpofedelsolicitudesDto) <= 0) {
            $msg[] = array("Debe seleccionar por lo menos una relación entre el ofendido, imputado y delito");
            $error = true;
        } else {
            $ImpofedelsolicitudesDto = new ImpofedelsolicitudesDTO();
            $ImpofedelsolicitudesDto->setIdImpOfeDelSolicitud($paramImpofedelsolicitudesDto[0]["idImpOfeDelSolicitud"]);
            $ImpofedelsolicitudesDto->setActivo("N");

            if (!$validacion->num(1, 11, (int) $ImpofedelsolicitudesDto->getIdImpOfeDelSolicitud())) {
                if ($ImpofedelsolicitudesDto->getIdImpOfeDelSolicitud() <= 0) {
                    $msg[] = array(utf8_encode("La relación, no es valida"));
                    $error = true;
                }
            }
        }

        if ((!$error) && (0 <= count($msg))) {
            if ($proveedor == null) {
                $this->proveedor = new Proveedor('mysql', 'sigejupe');
                $this->proveedor->connect();
            } else {
                $this->proveedor = $proveedor;
            }
            $this->proveedor->execute("BEGIN");
            $impofedelsolicitudesDao = new ImpofedelsolicitudesDAO();
            if ($ImpofedelsolicitudesDto->getIdImpOfeDelSolicitud() != "0" || $ImpofedelsolicitudesDto->getIdImpOfeDelSolicitud() != "") {
                $tmp = new ImpofedelsolicitudesDTO();
                $tmp->setIdImpOfeDelSolicitud($ImpofedelsolicitudesDto->getIdImpOfeDelSolicitud());
                $tmp->setActivo("S");
                $tmp = $impofedelsolicitudesDao->selectImpofedelsolicitudes($tmp, "", $this->proveedor);
                if ($tmp != "") {
                    $ImpofedelsolicitudesDto = $impofedelsolicitudesDao->updateImpofedelsolicitudes($ImpofedelsolicitudesDto, $this->proveedor);
                    if ($ImpofedelsolicitudesDto != "") {
//                        print_r($impofedelsolicitud);
                    } else {
                        $msg[] = array("No se logro registrar la relacion debido a algun error en la transaccion ");
                        $error = true;
                    }
                } else {
                    $msg[] = array("No existe la relacion seleccionada a eliminar, o fue eliminada con anterioridad");
                    $error = true;
                }
            } else {
                $msg[] = array("La relación, no es valida");
                $error = true;
            }

            if ((!$error)) {
                $this->proveedor->execute("COMMIT");
                $msg[] = array("relacion eliminada de forma correcta");
//                $msg[] = $ImputadossolicitudesDto[0]->toString();
                $result = array("Correcto" => $msg);
                $result = json_encode($result);
            } else {
                $this->proveedor->execute("ROLLBACK");
                $result = array("Error" => $msg);
                $result = json_encode($result);
            }
        } else {
            $result = array("Error" => $msg);
            $result = json_encode($result);
        }
        return $result;
        /*
          $ImpofedelsolicitudesDto = $this->validarImpofedelsolicitudes($ImpofedelsolicitudesDto);
          $ImpofedelsolicitudesDao = new ImpofedelsolicitudesDAO();
          $ImpofedelsolicitudesDto = $ImpofedelsolicitudesDao->deleteImpofedelsolicitudes($ImpofedelsolicitudesDto, $proveedor);
          return $ImpofedelsolicitudesDto;
         */
    }

    public function guardaImpOfeDel($ImpofedelsolicitudesDto = "", $proveedor = null, $bitacora = true) {
        $validaCampos = $this->validaCampos($ImpofedelsolicitudesDto);
        //validamos los campos obligatorios
        if ($validaCampos['estatus'] != "OK") {
            exit(json_encode($validaCampos));
        } else {
            $json = "";
            $x = 1;
            $solicitudesAudienciasDto = new SolicitudesaudienciasDTO();
            $solicitudesAudienciasDao = new SolicitudesaudienciasDAO();
            $solicitudesAudienciasDto->setIdSolicitudAudiencia($ImpofedelsolicitudesDto->getIdSolicitudAudiencia());
            $rsSolicituAudiencia = $solicitudesAudienciasDao->selectSolicitudesaudiencias($solicitudesAudienciasDto);
            if ($rsSolicituAudiencia != "") {
                if ($rsSolicituAudiencia[0]->getCveEstatusSolicitud() == "1") {
                    $ImpofedelsolicitudesAuxDto = new ImpofedelsolicitudesDTO();
                    $ImpofedelsolicitudesDao = new ImpofedelsolicitudesDAO();
                    $ImpofedelsolicitudesAuxDto->setIdImputadoSolicitud($ImpofedelsolicitudesDto->getIdImputadoSolicitud());
                    $ImpofedelsolicitudesAuxDto->setIdOfendidoSolicitud($ImpofedelsolicitudesDto->getIdOfendidoSolicitud());
                    $ImpofedelsolicitudesAuxDto->setIdDelitoSolicitud($ImpofedelsolicitudesDto->getIdDelitoSolicitud());
                    $ImpofedelsolicitudesAuxDto->setActivo("S");
                    $rsExisteSolicitud = $ImpofedelsolicitudesDao->selectImpofedelsolicitudes($ImpofedelsolicitudesAuxDto);
                    if ($rsExisteSolicitud == "") {
                        $rsImpofedelSolicitudes = $ImpofedelsolicitudesDao->insertImpofedelsolicitudes($ImpofedelsolicitudesDto);
                        if ($rsImpofedelSolicitudes != "") {
                            $ofenidosSolicitudesDto = new OfendidossolicitudesDTO();
                            $ofenidosSolicitudesDao = new OfendidossolicitudesDAO();

                            $imputadosSolicitudesDto = new ImputadossolicitudesDTO();
                            $imputadosSolicitudesDao = new ImputadossolicitudesDAO();

                            $delitosSolicitudesDto = new DelitossolicitudesDTO();
                            $delitosSolicitudesDao = new DelitossolicitudesDAO();

                            $imputadosSolicitudesDto->setIdImputadoSolicitud($rsImpofedelSolicitudes[0]->getIdImputadoSolicitud());
                            $rsImputados = $imputadosSolicitudesDao->selectImputadossolicitudes($imputadosSolicitudesDto);

                            $ofenidosSolicitudesDto->setIdOfendidoSolicitud($rsImpofedelSolicitudes[0]->getIdOfendidoSolicitud());
                            $rsOfendidos = $ofenidosSolicitudesDao->selectOfendidossolicitudes($ofenidosSolicitudesDto);


                            $delitosSolicitudesDto->setIdDelitoSolicitud($rsImpofedelSolicitudes[0]->getIdDelitoSolicitud());
                            $rsDelitos = $delitosSolicitudesDao->selectDelitossolicitudes($delitosSolicitudesDto);
                            if ($rsDelitos != "") {
                                $desDelitosDto = new DelitosDTO();
                                $desDelitosDao = new DelitosDAO();
                                $desDelitosDto->setCveDelito($rsDelitos[0]->getCveDelito());
                                $rsDesDelito = $desDelitosDao->selectDelitos($desDelitosDto);
                            }



                            $json .= "{";
                            $json .= '"estatus":"ok",';
                            $json .= '"msj":"La relacion se agrego de forma correcta",';
                            $json .= '"totalCount":"' . count($rsImpofedelSolicitudes) . '",';
                            $json .= '"data":[';
                            //
                            $json .= "{";
                            $json .= '"idImpOfeDelSolicitud":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getIdImpOfeDelSolicitud())) . ",";
                            $json .= '"idSolicitudAudiencia":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getIdSolicitudAudiencia())) . ",";
                            $json .= '"idImputadoSolicitud":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getIdImputadoSolicitud())) . ",";
                            if ($rsImputados != "") {
                                if ($rsImputados[0]->getCveTipoPersona() == "1") {
                                    $json .= '"nombreImputado":' . json_encode(utf8_encode($rsImputados[0]->getNombre() . " " . $rsImputados[0]->getPaterno() . " " . $rsImputados[0]->getMaterno())) . ",";
                                } else {
                                    $json .= '"nombreImputado":' . json_encode(utf8_encode($rsImputados[0]->getNombreMoral())) . ",";
                                }
                            } else {
                                $json .= '"nombreImputado":"",';
                            }
                            $json .= '"idOfendidoSolicitud":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getIdOfendidoSolicitud())) . ",";
                            if ($rsOfendidos != "") {
                                if ($rsOfendidos[0]->getCveTipoPersona() == "1") {
                                    $json .= '"nombreOfendido":' . json_encode(json_encode(($rsOfendidos[0]->getNombre()) . " " . ($rsOfendidos[0]->getPaterno()) . " " . ($rsOfendidos[0]->getMaterno()))) . ",";
                                } else {
                                    $json .= '"nombreOfendido":' . json_encode(utf8_encode($rsOfendidos[0]->getNombreMoral())) . ",";
                                }
                            } else {
                                $json .= '"nombreOfendido":"",';
                            }
                            $json .= '"idDelitoSolicitud":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getIdDelitoSolicitud())) . ",";
                            if ($rsDelitos != "" && $rsDesDelito != "") {
                                $json .= '"nombreDelito":' . json_encode(utf8_encode($rsDesDelito[0]->getDesDelito())) . ",";
                            } else {
                                $json .= '"nombreDelito":"",';
                            }
                            $json .= '"cveModalidad":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getCveModalidad())) . ",";
                            $json .= '"cveComision":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getCveComision())) . ",";
                            $json .= '"cveConcurso":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getCveConcurso())) . ",";
                            $json .= '"cveClasificacionDelitoOrden":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getCveClasificacionDelitoOrden())) . ",";
                            $json .= '"cveElementoComision":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getCveElementoComision())) . ",";
                            $json .= '"cveClasificacionDelito":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getCveClasificacionDelito())) . ",";
                            $json .= '"cveFormaAccion":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getCveFormaAccion())) . ",";
                            $json .= '"cveConsumacion":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getCveConsumacion())) . ",";
                            $json .= '"cveMunicipio":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getCveMunicipio())) . ",";
                            $json .= '"cveEntidad":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getCveEntidad())) . ",";
                            $json .= '"cveGradoParticipacion":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getCveGradoParticipacion())) . ",";
                            $json .= '"cveRelacionImpOfe":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getCveRelacionImpOfe())) . ",";
                            $json .= '"CveTerminacion":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getCveTerminacion())) . ",";
                            $json .= '"activo":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getActivo())) . ",";
                            $json .= '"fechaDelito":' . json_encode(utf8_encode($this->fechaHoraNormal($rsImpofedelSolicitudes[0]->getFechaDelito()))) . ",";
                            $json .= '"direccion":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getDireccion())) . ",";
                            $json .= '"colonia":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getColonia())) . ",";
                            $json .= '"numInterior":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getNumInterior())) . ",";
                            $json .= '"numExterior":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getNumExterior())) . ",";
                            $json .= '"cp":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getCp())) . ",";
                            $json .= '"fechaRegistro":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getFechaRegistro())) . ",";
                            $json .= '"fechaActualizacion":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getFechaActualizacion())) . "";
                            $json .= "}";
                            //                          
                            $json .= "]";
                            $json .= "}";

                            $BitacoramovimientosDao = new BitacoramovimientosDAO();
                            $BitacoramovimientosDto = new BitacoramovimientosDTO();
                            $BitacoramovimientosDto->setCveAccion("93");
                            $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                            $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                            $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                            $BitacoramovimientosDto->setObservaciones("Se registro la relacion solicitudes: " . $json);
                            $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
                        } else {
                            $json .= '{"status":"Fail",';
                            $json .= '"msj":"Error al guardar la relacion. Verifique"}';
                        }
                    } else {
                        $json .= '{"status":"Fail",';
                        $json .= '"msj":"La relacion ya existe. Verifique"}';
                    }
                } else {
                    $json .= '{"status":"Fail",';
                    $json .= '"msj":"No se puede agregar, la solicitud se encuentra enviada."}';
                }
            } else {
                $json .= '{"status":"Fail",';
                $json .= '"msj":"No se encontro la solicitud de audiencia."}';
            }
            return $json;
        }
    }

    public function modificaImpOfeDel($ImpofedelsolicitudesDto = "", $proveedor = null, $bitacora = true) {
        $validaCampos = $this->validaCampos($ImpofedelsolicitudesDto);
        //validamos los campos obligatorios
        if ($validaCampos['estatus'] != "OK") {
            exit(json_encode($validaCampos));
        } else {
            $json = "";
            $x = 1;
            $error = false;
            $solicitudesAudienciasDto = new SolicitudesaudienciasDTO();
            $solicitudesAudienciasDao = new SolicitudesaudienciasDAO();
            $solicitudesAudienciasDto->setIdSolicitudAudiencia($ImpofedelsolicitudesDto->getIdSolicitudAudiencia());
            $rsSolicituAudiencia = $solicitudesAudienciasDao->selectSolicitudesaudiencias($solicitudesAudienciasDto);
            if ($rsSolicituAudiencia != "") {
                if ($rsSolicituAudiencia[0]->getCveEstatusSolicitud() == "1") {
                    $ImpofedelsolicitudesAuxDto = new ImpofedelsolicitudesDTO();
                    $ImpofedelsolicitudesDao = new ImpofedelsolicitudesDAO();
                    $ImpofedelsolicitudesAuxDto->setIdImputadoSolicitud($ImpofedelsolicitudesDto->getIdImputadoSolicitud());
                    $ImpofedelsolicitudesAuxDto->setIdOfendidoSolicitud($ImpofedelsolicitudesDto->getIdOfendidoSolicitud());
                    $ImpofedelsolicitudesAuxDto->setIdDelitoSolicitud($ImpofedelsolicitudesDto->getIdDelitoSolicitud());
                    $ImpofedelsolicitudesAuxDto->setActivo("S");
                    $rsExisteSolicitud = $ImpofedelsolicitudesDao->selectImpofedelsolicitudes($ImpofedelsolicitudesAuxDto);
                    if (($rsExisteSolicitud == "")) {
                        $error = false;
                    } else {
                        if ($rsExisteSolicitud[0]->getIdImpOfeDelSolicitud() == $ImpofedelsolicitudesDto->getIdImpOfeDelSolicitud()) {
                            $error = false;
                        } else {
                            $error = true;
                        }
                    }
                    if (!$error) {
                        $rsImpofedelSolicitudes = $ImpofedelsolicitudesDao->updateImpofedelsolicitudes($ImpofedelsolicitudesDto);
                        if ($rsImpofedelSolicitudes != "") {
                            $ofenidosSolicitudesDto = new OfendidossolicitudesDTO();
                            $ofenidosSolicitudesDao = new OfendidossolicitudesDAO();

                            $imputadosSolicitudesDto = new ImputadossolicitudesDTO();
                            $imputadosSolicitudesDao = new ImputadossolicitudesDAO();

                            $delitosSolicitudesDto = new DelitossolicitudesDTO();
                            $delitosSolicitudesDao = new DelitossolicitudesDAO();

                            $imputadosSolicitudesDto->setIdImputadoSolicitud($rsImpofedelSolicitudes[0]->getIdImputadoSolicitud());
                            $rsImputados = $imputadosSolicitudesDao->selectImputadossolicitudes($imputadosSolicitudesDto);

                            $ofenidosSolicitudesDto->setIdOfendidoSolicitud($rsImpofedelSolicitudes[0]->getIdOfendidoSolicitud());
                            $rsOfendidos = $ofenidosSolicitudesDao->selectOfendidossolicitudes($ofenidosSolicitudesDto);


                            $delitosSolicitudesDto->setIdDelitoSolicitud($rsImpofedelSolicitudes[0]->getIdDelitoSolicitud());
                            $rsDelitos = $delitosSolicitudesDao->selectDelitossolicitudes($delitosSolicitudesDto);
                            if ($rsDelitos != "") {
                                $desDelitosDto = new DelitosDTO();
                                $desDelitosDao = new DelitosDAO();
                                $desDelitosDto->setCveDelito($rsDelitos[0]->getCveDelito());
                                $rsDesDelito = $desDelitosDao->selectDelitos($desDelitosDto);
                            }
                            $json .= "{";
                            $json .= '"estatus":"ok",';
                            $json .= '"msj":"La relacion se modifico de forma correcta",';
                            $json .= '"totalCount":"' . count($rsImpofedelSolicitudes) . '",';
                            $json .= '"data":[';
                            //
                            $json .= "{";
                            $json .= '"idImpOfeDelSolicitud":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getIdImpOfeDelSolicitud())) . ",";
                            $json .= '"idSolicitudAudiencia":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getIdSolicitudAudiencia())) . ",";
                            $json .= '"idImputadoSolicitud":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getIdImputadoSolicitud())) . ",";
                            if ($rsImputados != "") {
                                if ($rsImputados[0]->getCveTipoPersona() == "1") {
                                    $json .= '"nombreImputado":' . json_encode(utf8_encode($rsImputados[0]->getNombre() . " " . $rsImputados[0]->getPaterno() . " " . $rsImputados[0]->getMaterno())) . ",";
                                } else {
                                    $json .= '"nombreImputado":' . json_encode(utf8_encode($rsImputados[0]->getNombreMoral())) . ",";
                                }
                            } else {
                                $json .= '"nombreImputado":"",';
                            }
                            $json .= '"idOfendidoSolicitud":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getIdOfendidoSolicitud())) . ",";
                            if ($rsOfendidos != "") {
                                if ($rsOfendidos[0]->getCveTipoPersona() == "1") {
                                    $json .= '"nombreOfendido":' . json_encode(json_encode(($rsOfendidos[0]->getNombre()) . " " . ($rsOfendidos[0]->getPaterno()) . " " . ($rsOfendidos[0]->getMaterno()))) . ",";
                                } else {
                                    $json .= '"nombreOfendido":' . json_encode(utf8_encode($rsOfendidos[0]->getNombreMoral())) . ",";
                                }
                            } else {
                                $json .= '"nombreOfendido":"",';
                            }
                            $json .= '"idDelitoSolicitud":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getIdDelitoSolicitud())) . ",";
                            if ($rsDelitos != "" && $rsDesDelito != "") {
                                $json .= '"nombreDelito":' . json_encode(utf8_encode($rsDesDelito[0]->getDesDelito())) . ",";
                            } else {
                                $json .= '"nombreDelito":"",';
                            }
                            $json .= '"cveModalidad":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getCveModalidad())) . ",";
                            $json .= '"cveComision":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getCveComision())) . ",";
                            $json .= '"cveConcurso":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getCveConcurso())) . ",";
                            $json .= '"cveClasificacionDelitoOrden":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getCveClasificacionDelitoOrden())) . ",";
                            $json .= '"cveElementoComision":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getCveElementoComision())) . ",";
                            $json .= '"cveClasificacionDelito":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getCveClasificacionDelito())) . ",";
                            $json .= '"cveFormaAccion":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getCveFormaAccion())) . ",";
                            $json .= '"cveConsumacion":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getCveConsumacion())) . ",";
                            $json .= '"cveMunicipio":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getCveMunicipio())) . ",";
                            $json .= '"cveEntidad":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getCveEntidad())) . ",";
                            $json .= '"cveGradoParticipacion":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getCveGradoParticipacion())) . ",";
                            $json .= '"cveRelacionImpOfe":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getCveRelacionImpOfe())) . ",";
                            $json .= '"CveTerminacion":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getCveTerminacion())) . ",";
                            $json .= '"activo":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getActivo())) . ",";
                            $json .= '"fechaDelito":' . json_encode(utf8_encode($this->fechaHoraNormal($rsImpofedelSolicitudes[0]->getFechaDelito()))) . ",";
                            $json .= '"direccion":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getDireccion())) . ",";
                            $json .= '"colonia":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getColonia())) . ",";
                            $json .= '"numInterior":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getNumInterior())) . ",";
                            $json .= '"numExterior":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getNumExterior())) . ",";
                            $json .= '"cp":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getCp())) . ",";
                            $json .= '"fechaRegistro":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getFechaRegistro())) . ",";
                            $json .= '"fechaActualizacion":' . json_encode(utf8_encode($rsImpofedelSolicitudes[0]->getFechaActualizacion())) . "";
                            $json .= "}";
                            //                          
                            $json .= "]";
                            $json .= "}";
                            if ($bitacora) {
                                $BitacoramovimientosDao = new BitacoramovimientosDAO();
                                $BitacoramovimientosDto = new BitacoramovimientosDTO();

                                $dtoToJson = new DtoToJson($ImpofedelsolicitudesDto);
                                $anterior = $dtoToJson->toJson("REGISTRO anterior");
                                $dtoToJson1 = new DtoToJson($rsImpofedelSolicitudes);
                                $actual = $dtoToJson1->toJson("REGISTRO actualizado");
                                $BitacoramovimientosDto->setCveAccion("94");
                                $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                                $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                                $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                                $BitacoramovimientosDto->setObservaciones("Se actualizo la relacion solicitudes: " . $anterior . " " . $actual);
                                $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
                            }
                        } else {
                            $json .= '{"estatus":"Fail",';
                            $json .= '"msj":"Error al modificar la relacion. Verifique"}';
                        }
                    } else {
                        $json .= '{"estatus":"Fail",';
                        $json .= '"msj":"La relacion ya existe. Verifique"}';
                    }
                } else {
                    $json .= '{"estatus":"Fail",';
                    $json .= '"msj":"No se puede modificar, la solicitud se encuentra enviada."}';
                }
            } else {
                $json .= '{"estatus":"Fail",';
                $json .= '"msj":"No se encontro la solicitud de audiencia."}';
            }
            return $json;
        }
    }

    public function consultaImpOfeDel($ImpofedelsolicitudesDto, $proveedor = null) {
        $ImpofedelsolicitudesDto = $this->validarImpofedelsolicitudes($ImpofedelsolicitudesDto);
        $ImpofedelsolicitudesDto->setActivo("S");

        $json = "";
        $x = 1;

        $ImpofedelsolicitudesDao = new ImpofedelsolicitudesDAO();
        $ImpofedelsolicitudesDto = $ImpofedelsolicitudesDao->selectImpofedelsolicitudes($ImpofedelsolicitudesDto, $proveedor);
        if ($ImpofedelsolicitudesDto != "") {

            $ofenidosSolicitudesDto = new OfendidossolicitudesDTO();
            $ofenidosSolicitudesDao = new OfendidossolicitudesDAO();

            $imputadosSolicitudesDto = new ImputadossolicitudesDTO();
            $imputadosSolicitudesDao = new ImputadossolicitudesDAO();

            $delitosSolicitudesDto = new DelitossolicitudesDTO();
            $delitosSolicitudesDao = new DelitossolicitudesDAO();

            $json .= "{";
            $json .= '"status":"ok",';
            $json .= '"msj":"resultados",';
            $json .= '"totalCount":"' . count($ImpofedelsolicitudesDto) . '",';
            $json .= '"data":[';
            foreach ($ImpofedelsolicitudesDto as $Impofedelsolicitudes) {
                $imputadosSolicitudesDto->setIdImputadoSolicitud($Impofedelsolicitudes->getIdImputadoSolicitud());
                $rsImputados = $imputadosSolicitudesDao->selectImputadossolicitudes($imputadosSolicitudesDto);

                $ofenidosSolicitudesDto->setIdOfendidoSolicitud($Impofedelsolicitudes->getIdOfendidoSolicitud());
                $rsOfendidos = $ofenidosSolicitudesDao->selectOfendidossolicitudes($ofenidosSolicitudesDto);
                $delitosSolicitudesDto->setIdDelitoSolicitud($Impofedelsolicitudes->getIdDelitoSolicitud());
                $rsDelitos = $delitosSolicitudesDao->selectDelitossolicitudes($delitosSolicitudesDto);
                if ($rsDelitos != "") {
                    $desDelitosDto = new DelitosDTO();
                    $desDelitosDao = new DelitosDAO();
                    $desDelitosDto->setCveDelito($rsDelitos[0]->getCveDelito());
                    $rsDesDelito = $desDelitosDao->selectDelitos($desDelitosDto);
                }

                $json .= "{";
                $json .= '"idImpOfeDelSolicitud":' . json_encode(utf8_encode($Impofedelsolicitudes->getIdImpOfeDelSolicitud())) . ",";
                $json .= '"idSolicitudAudiencia":' . json_encode(utf8_encode($Impofedelsolicitudes->getIdSolicitudAudiencia())) . ",";
                $json .= '"idImputadoSolicitud":' . json_encode(utf8_encode($Impofedelsolicitudes->getIdImputadoSolicitud())) . ",";
                if ($rsImputados != "") {
                    if ($rsImputados[0]->getCveTipoPersona() == "1") {
                        $json .= '"nombreImputado":' . json_encode(utf8_encode($rsImputados[0]->getNombre() . " " . $rsImputados[0]->getPaterno() . " " . $rsImputados[0]->getMaterno())) . ",";
                    } else {
                        $json .= '"nombreImputado":' . json_encode(utf8_encode($rsImputados[0]->getNombreMoral())) . ",";
                    }
                } else {
                    $json .= '"nombreImputado":"",';
                }
                $json .= '"idOfendidoSolicitud":' . json_encode(utf8_encode($Impofedelsolicitudes->getIdOfendidoSolicitud())) . ",";
                if ($rsOfendidos != "") {
                    if ($rsOfendidos[0]->getCveTipoPersona() == "1") {
                        $json .= '"nombreOfendido":' . json_encode(utf8_encode(($rsOfendidos[0]->getNombre()) . " " . ($rsOfendidos[0]->getPaterno()) . " " . ($rsOfendidos[0]->getMaterno()))) . ",";
                    } else {
                        $json .= '"nombreOfendido":' . json_encode(utf8_encode($rsOfendidos[0]->getNombreMoral())) . ",";
                    }
                } else {
                    $json .= '"nombreOfendido":"",';
                }
                $json .= '"idDelitoSolicitud":' . json_encode(utf8_encode($Impofedelsolicitudes->getIdDelitoSolicitud())) . ",";
                if ($rsDelitos != "" && $rsDesDelito != "") {
                    $json .= '"nombreDelito":' . json_encode(utf8_encode($rsDesDelito[0]->getDesDelito())) . ",";
                } else {
                    $json .= '"nombreDelito":"",';
                }
                $json .= '"cveModalidad":' . json_encode(utf8_encode($Impofedelsolicitudes->getCveModalidad())) . ",";
                $json .= '"cveComision":' . json_encode(utf8_encode($Impofedelsolicitudes->getCveComision())) . ",";
                $json .= '"cveConcurso":' . json_encode(utf8_encode($Impofedelsolicitudes->getCveConcurso())) . ",";
                $json .= '"cveClasificacionDelitoOrden":' . json_encode(utf8_encode($Impofedelsolicitudes->getCveClasificacionDelitoOrden())) . ",";
                $json .= '"cveElementoComision":' . json_encode(utf8_encode($Impofedelsolicitudes->getCveElementoComision())) . ",";
                $json .= '"cveClasificacionDelito":' . json_encode(utf8_encode($Impofedelsolicitudes->getCveClasificacionDelito())) . ",";
                $json .= '"cveFormaAccion":' . json_encode(utf8_encode($Impofedelsolicitudes->getCveFormaAccion())) . ",";
                $json .= '"cveConsumacion":' . json_encode(utf8_encode($Impofedelsolicitudes->getCveConsumacion())) . ",";
                $json .= '"cveMunicipio":' . json_encode(utf8_encode($Impofedelsolicitudes->getCveMunicipio())) . ",";
                $json .= '"cveEntidad":' . json_encode(utf8_encode($Impofedelsolicitudes->getCveEntidad())) . ",";
                $json .= '"cveGradoParticipacion":' . json_encode(utf8_encode($Impofedelsolicitudes->getCveGradoParticipacion())) . ",";
                $json .= '"cveRelacionImpOfe":' . json_encode(utf8_encode($Impofedelsolicitudes->getCveRelacionImpOfe())) . ",";
                $json .= '"CveTerminacion":' . json_encode(utf8_encode($Impofedelsolicitudes->getCveTerminacion())) . ",";
                $json .= '"activo":' . json_encode(utf8_encode($Impofedelsolicitudes->getActivo())) . ",";
                $json .= '"fechaDelito":' . json_encode(utf8_encode($this->fechaHoraNormal($Impofedelsolicitudes->getFechaDelito()))) . ",";
                $json .= '"direccion":' . json_encode(utf8_encode($Impofedelsolicitudes->getDireccion())) . ",";
                $json .= '"colonia":' . json_encode(utf8_encode($Impofedelsolicitudes->getColonia())) . ",";
                $json .= '"numInterior":' . json_encode(utf8_encode($Impofedelsolicitudes->getNumInterior())) . ",";
                $json .= '"numExterior":' . json_encode(utf8_encode($Impofedelsolicitudes->getNumExterior())) . ",";
                $json .= '"cp":' . json_encode(utf8_encode($Impofedelsolicitudes->getCp())) . ",";
                $json .= '"fechaRegistro":' . json_encode(utf8_encode($Impofedelsolicitudes->getFechaRegistro())) . ",";
                $json .= '"fechaActualizacion":' . json_encode(utf8_encode($Impofedelsolicitudes->getFechaActualizacion())) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($ImpofedelsolicitudesDto)) {
                    $json .= ",";
                }
            }
            $json .= "]";
            $json .= "}";
        } else {
            $json .= '{"status":"Fail",';
            $json .= '"msj":"No se encontraron resultados. Verifique"}';
        }
        return $json;
    }

    public function eliminaImpOfeDel($ImpofedelsolicitudesDto = "", $proveedor = null, $bitacora = true) {
        $error = false;
        $msg = array();


        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $this->proveedor->execute("BEGIN");


        $ImpofedelsolicitudesDao = new ImpofedelsolicitudesDAO();
        $rsImpofedelsolicitudesDto = $ImpofedelsolicitudesDao->selectImpofedelsolicitudes($ImpofedelsolicitudesDto, $proveedor);
        if ($rsImpofedelsolicitudesDto != "") {
            $solicitudesAudienciasDto = new SolicitudesaudienciasDTO();
            $solicitudesAudienciasDao = new SolicitudesaudienciasDAO();
            $solicitudesAudienciasDto->setIdSolicitudAudiencia($rsImpofedelsolicitudesDto[0]->getIdSolicitudAudiencia());
            $rsSolicituAudiencia = $solicitudesAudienciasDao->selectSolicitudesaudiencias($solicitudesAudienciasDto);
            if ($rsSolicituAudiencia != "") {
                if ($rsSolicituAudiencia[0]->getCveEstatusSolicitud() == "1") {
                    $ImpofedelsolicitudesDto->setActivo("N");
                    $relaciones = $ImpofedelsolicitudesDao->eliminaImpodelsolicitudes($ImpofedelsolicitudesDto, $this->proveedor);
                    $relaciones = $relaciones[0];
                    if ($relaciones != "") {
                        $efectosOfendidosDto = new EfectosofendidosDTO();
                        $efectosOfendidosDao = new EfectosofendidosDAO();
                        $efectosOfendidosDto->setIdImpOfeDelSolicitud($relaciones->getIdImpOfeDelSolicitud());
                        $rsEfectosOfendidos = $efectosOfendidosDao->selectEfectosofendidos($efectosOfendidosDto);
                        if ($rsEfectosOfendidos != "") {
                            $EfectosofendidosDao = new EfectosofendidosDAO();
                            $EfectosofendidosDto = new EfectosofendidosDTO();
                            foreach ($rsEfectosOfendidos as $rsEfecto) {
                                $EfectosofendidosDto->setIdEfectoOfendido($rsEfecto->getIdEfectoOfendido());
                                $EfectosofendidosDto->setActivo('N');
                                $rsEfectosOfendidos = $EfectosofendidosDao->updateEfectosofendidos($EfectosofendidosDto, $this->proveedor);
                                if ($rsEfectosOfendidos == "") {
                                    $msg[] = array("No se pudo eliminar los efectos:" . $index);
                                    $error = true;
                                }
                            }
                        }
//                            $this->proveedor
                        $violenciaDeGeneroDto = new ViolenciadegeneroDTO();
                        $violenciaDeGeneroDao = new ViolenciadegeneroDAO();
                        $violenciaDeGeneroDto->setIdImpOfeDelSolicitud($relaciones->getIdImpOfeDelSolicitud());
                        $violenciaDeGeneroDto->setActivo("S");
                        $rsViolenciaDeGenero = $violenciaDeGeneroDao->selectViolenciadegenero($violenciaDeGeneroDto);
                        if ($rsViolenciaDeGenero != "") {
                            foreach ($rsViolenciaDeGenero as $rsViolencia) {

                                //Eliminar violencia de genero
                                $violenciaDeGeneroDto->setIdViolenciaDeGenero($rsViolencia->getIdViolenciaDeGenero());
                                $violenciaDeGeneroDto->setActivo("N");
                                $rsViolenicaGenero = $violenciaDeGeneroDao->updateViolenciadegenero($violenciaDeGeneroDto, $this->proveedor);
                                if ($rsViolenicaGenero == "") {
                                    $msg[] = array("No se pudo eliminar la violencia de genero:" . $index);
                                    $error = true;
                                }


                                //Eliminar factores Sociales
                                $violenciaFacotesSocialesDto = new ViolenciafactoressocialesDTO();
                                $violenciaFacotesSocialesDao = new ViolenciafactoressocialesDAO();
                                $violenciaFacotesSocialesDto->setIdViolenciaDeGenero($rsViolencia->getIdViolenciaDeGenero());
                                $violenciaFacotesSocialesDto->setActivo("S");
                                $rsViolenciaFactorSocial = $violenciaFacotesSocialesDao->selectViolenciafactoressociales($violenciaFacotesSocialesDto);
                                if ($rsViolenciaFactorSocial != "") {
                                    foreach ($rsViolenciaFactorSocial as $rsViolenciaFactor) {
                                        $violenciaFacotesSocialesDto->setIdViolenciaFactorSocial($rsViolenciaFactor->getIdViolenciaFactorSocial());
                                        $violenciaFacotesSocialesDto->setActivo("N");
                                        $violencia = $violenciaFacotesSocialesDao->updateViolenciafactoressociales($violenciaFacotesSocialesDto, $this->proveedor);
                                        if ($violencia == "") {
                                            $msg[] = array("No se pudo eliminar los factores sociales:" . $index);
                                            $error = true;
                                        }
                                    }
                                }
                                ////eliminar homicidio doloso
                                $homicidioDolosoDto = new ViolenciahomicidiosdolososDTO();
                                $homicidioDolosoDao = new ViolenciahomicidiosdolososDAO();
                                $homicidioDolosoDto->setIdViolenciaDeGenero($rsViolencia->getIdViolenciaDeGenero());
                                $homicidioDolosoDto->setActivo("S");
                                $rsHomicidioDoloso = $homicidioDolosoDao->selectViolenciahomicidiosdolosos($homicidioDolosoDto);
                                if ($rsHomicidioDoloso != "") {
                                    foreach ($rsHomicidioDoloso as $rsHomicidio) {
                                        $homicidioDolosoDto->setIdViolenciaHomicidioDoloso($rsHomicidio->getIdViolenciaHomicidioDoloso());
                                        $homicidioDolosoDto->setActivo("N");
                                        $rsHomicidios = $homicidioDolosoDao->updateViolenciahomicidiosdolosos($homicidioDolosoDto, $this->proveedor);
                                        if ($rsHomicidios == "") {
                                            $msg[] = array("No se pudo eliminar el homicidio doloso:" . $index);
                                            $error = true;
                                        }
                                    }
                                }
                                /////
                            }
                        }
                        //Eliminar trata de personas
                        $trataDePersonasDto = new TrataspersonasDTO();
                        $trataDePersonasDao = new TrataspersonasDAO();

                        $trataDePersonasDto->setIdImpOfeDelSolicitud($relaciones->getIdImpOfeDelSolicitud());
                        $trataDePersonasDto->setActivo("S");
                        $rsTratadePersonas = $trataDePersonasDao->selectTrataspersonas($trataDePersonasDto);
                        if ($rsTratadePersonas != "") {
                            foreach ($rsTratadePersonas as $rsTrataPersona) {
                                $trataDePersonasDto->setIdTrataPersona($rsTrataPersona->getIdTrataPersona());
                                $trataDePersonasDto->setActivo("N");
                                $rsTrata = $trataDePersonasDao->updateTrataspersonas($trataDePersonasDto, $this->proveedor);
                                if ($rsTrata == "") {
                                    $msg[] = array("No se pudo eliminar trata de personas:" . $index);
                                    $error = true;
                                }
                            }
                        }

                        //Eliminar sexuales
                        $sexualesDto = new SexualesDTO();
                        $sexualesDao = new SexualesDAO();

                        $sexualesDto->setIdImpOfeDelSolicitud($relaciones->getIdImpOfeDelSolicitud());
                        $sexualesDto->setActivo("S");
                        $rsSexuales = $sexualesDao->selectSexuales($sexualesDto);
                        if ($rsSexuales != "") {
                            foreach ($rsSexuales as $rsSexual) {
                                $sexualesDto->setIdSexual($rsSexual->getIdSexual());
                                $sexualesDto->setActivo("N");
                                $sexual = $sexualesDao->updateSexuales($sexualesDto, $this->proveedor);
                                if ($sexual == "") {
                                    $msg[] = array("No se pudo eliminar sexuales:" . $index);
                                    $error = true;
                                }
                            }
                            ///Eliminar testigos sexuales
                            $testigosSexualesDto = new TestigossexualesDTO();
                            $testigosSexualesDao = new TestigossexualesDAO();
                            $testigosSexualesDto->setIdSexual($rsSexual->getIdSexual());
                            $testigosSexualesDto->setActivo("S");
                            $rsTestigosSexuales = $testigosSexualesDao->selectTestigossexuales($testigosSexualesDto);
                            if ($rsTestigosSexuales != "") {
                                foreach ($rsTestigosSexuales as $rsTestigos) {
                                    $testigosSexualesDto->setIdTestigoSexual($rsTestigos->getIdTestigoSexual());
                                    $testigosSexualesDto->setActivo("N");
                                    $rsTestigo = $testigosSexualesDao->updateTestigossexuales($testigosSexualesDto, $this->proveedor);
                                    if ($rsTestigo == "") {
                                        $msg[] = array("No se pudo eliminar el testigo:" . $index);
                                        $error = true;
                                    }
                                }
                            }
                            ///eliminar secuales conducta
                            $sexualesConductaDto = new SexualesconductasDTO();
                            $sexualesConductaDao = new SexualesconductasDAO();

                            $sexualesConductaDto->setIdSexual($rsSexual->getIdSexual());
                            $sexualesConductaDto->setActivo("S");
                            $rsSexualesConducta = $sexualesConductaDao->selectSexualesconductas($sexualesConductaDto);
                            if ($rsSexualesConducta != "") {
                                foreach ($rsSexualesConducta as $rsSexuales) {
                                    $sexualesConductaDto->setIdSexualConducta($rsSexuales->getIdSexualConducta());
                                    $sexualesConductaDto->setActivo("N");
                                    $rsSexualesC = $sexualesConductaDao->updateSexualesconductas($sexualesConductaDto, $this->proveedor);
                                    if ($rsSexualesC != "") {
                                        $detallesSexualConductaDto = new DetallessexualesconductasDTO();
                                        $detallesSexualConductaDao = new DetallessexualesconductasDAO();
                                        $detallesSexualConductaDto->setIdSexualConducta($rsSexuales->getIdSexualConducta());
                                        $detallesSexualConductaDto->setActivo("S");
                                        $rsDetalleSexual = $detallesSexualConductaDao->selectDetallessexualesconductas($detallesSexualConductaDto);
                                        if ($rsDetalleSexual != "") {
                                            foreach ($rsDetalleSexual as $rsDetalle) {
                                                $detallesSexualConductaDto->setIdDetalleSexualConducta($rsDetalle->getIdDetalleSexualConducta());
                                                $detallesSexualConductaDto->setActivo("N");
                                                $rs = $detallesSexualConductaDao->updateDetallessexualesconductas($detallesSexualConductaDto, $this->proveedor);
                                                if ($detallesSexualConductaDto == "") {
                                                    $msg[] = array("No se pudo eliminar el detalle de la conducta:" . $index);
                                                    $error = true;
                                                }
                                            }
                                        }
                                    } else {
                                        $msg[] = array("No se pudo eliminar la conducta:" . $index);
                                        $error = true;
                                    }
                                }
                            }
                        }
                    } else {
                        $msg[] = array("Error al eliminar la relacion. Verifique");
                        $error = true;
                    }
                } else {
                    $msg[] = array("No se puede eliminar, la solicitud se encuentra enviada.");
                    $error = true;
                }
            } else {
                $msg[] = array("No se encontro la solicitud audiencia.");
                $error = true;
            }
        }
        if ((!$error)) {
            $this->proveedor->execute("COMMIT");
            $result = array("status" => "ok", "msj" => "El registro se elimino de forma correcta");
            $result = json_encode($result);

            if ($bitacora) {
                $BitacoramovimientosDao = new BitacoramovimientosDAO();
                $BitacoramovimientosDto = new BitacoramovimientosDTO();
                $BitacoramovimientosDto->setCveAccion("95");
                $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                $BitacoramovimientosDto->setObservaciones("ELIMINO relacion con id: " . $ImpofedelsolicitudesDto->getIdImpOfeDelSolicitud());
                $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
            }
        } else {
            $this->proveedor->execute("ROLLBACK");
            $result = array("status" => "error", "msj" => $msg);
            $result = json_encode($result);
        }
        return $result;
    }

    private function fechaHoraNormal($fecha) {
        list ($fechaAux, $hora) = explode(" ", $fecha);
        list($year, $mes, $dia) = explode("-", $fechaAux);
        return $dia . "/" . $mes . "/" . $year . " " . $hora;
    }

}

/* CAMPOS PARA RELACIONES OFENDIDOS, DELITOS, IMPUTADOS
  $ImpofedelsolicitudesDto[0] = new ImpofedelsolicitudesDTO();
  $ImpofedelsolicitudesDto[0]->setIdImpOfeDelSolicitud("");
  $ImpofedelsolicitudesDto[0]->setIdSolicitudAudiencia(179);
  $ImpofedelsolicitudesDto[0]->setIdImputadoSolicitud(238);
  $ImpofedelsolicitudesDto[0]->setIdOfendidoSolicitud(66);
  $ImpofedelsolicitudesDto[0]->setIdDelitoSolicitud(10);
  $ImpofedelsolicitudesDto[0]->setCveModalidad(2);
  $ImpofedelsolicitudesDto[0]->setCveComision(2);
  $ImpofedelsolicitudesDto[0]->setCveConcurso(2);
  $ImpofedelsolicitudesDto[0]->setCveClasificacionDelitoOrden(1);
  $ImpofedelsolicitudesDto[0]->setCveElementoComision(1);
  $ImpofedelsolicitudesDto[0]->setCveClasificacionDelito(1);
  $ImpofedelsolicitudesDto[0]->setCveFormaAccion(1);
  $ImpofedelsolicitudesDto[0]->setCveConsumacion(1);
  $ImpofedelsolicitudesDto[0]->setCveMunicipio(1);
  $ImpofedelsolicitudesDto[0]->setCveEntidad(1);
  $ImpofedelsolicitudesDto[0]->setCveGradoParticipacion(1);
  $ImpofedelsolicitudesDto[0]->setCveRelacionImpOfe(1);
  $ImpofedelsolicitudesDto[0]->setActivo("S");
  $ImpofedelsolicitudesDto[0]->setFechaDelito("10/11/2015");
  $ImpofedelsolicitudesDto[0]->setDireccion("prueba");
  $ImpofedelsolicitudesDto[0]->setColonia("prueba");
  $ImpofedelsolicitudesDto[0]->setNumInterior("1");
  $ImpofedelsolicitudesDto[0]->setNumExterior("1");
  $ImpofedelsolicitudesDto[0]->setCp("12345");
  $ImpofedelsolicitudesDto[1] = new ImpofedelsolicitudesDTO();
  $ImpofedelsolicitudesDto[1]->setIdImpOfeDelSolicitud("");
  $ImpofedelsolicitudesDto[1]->setIdSolicitudAudiencia("");
  $ImpofedelsolicitudesDto[1]->setIdImputadoSolicitud(346);
  $ImpofedelsolicitudesDto[1]->setIdOfendidoSolicitud(66);
  $ImpofedelsolicitudesDto[1]->setIdDelitoSolicitud(10);
  $ImpofedelsolicitudesDto[1]->setCveModalidad(1);
  $ImpofedelsolicitudesDto[1]->setCveComision(1);
  $ImpofedelsolicitudesDto[1]->setCveConcurso(1);
  $ImpofedelsolicitudesDto[1]->setCveClasificacionDelitoOrden(1);
  $ImpofedelsolicitudesDto[1]->setCveElementoComision(1);
  $ImpofedelsolicitudesDto[1]->setCveClasificacionDelito(1);
  $ImpofedelsolicitudesDto[1]->setCveFormaAccion(1);
  $ImpofedelsolicitudesDto[1]->setCveConsumacion(1);
  $ImpofedelsolicitudesDto[1]->setCveMunicipio(1);
  $ImpofedelsolicitudesDto[1]->setCveEntidad(1);
  $ImpofedelsolicitudesDto[1]->setCveGradoParticipacion(1);
  $ImpofedelsolicitudesDto[1]->setCveRelacionImpOfe(1);
  $ImpofedelsolicitudesDto[1]->setActivo("S");
  $ImpofedelsolicitudesDto[1]->setFechaDelito("10/11/2015");
  $ImpofedelsolicitudesDto[1]->setDireccion("prueba");
  $ImpofedelsolicitudesDto[1]->setColonia("prueba");
  $ImpofedelsolicitudesDto[1]->setNumInterior("1");
  $ImpofedelsolicitudesDto[1]->setNumExterior("1");
  $ImpofedelsolicitudesDto[1]->setCp("12345");

  //$param = array("impofedelsolicitudes" => array($ImpofedelsolicitudesDto[1]->toString(), $ImpofedelsolicitudesDto[1]->toString()));
  $param = array($ImpofedelsolicitudesDto[1]->toString());
  json_encode($param);

  $impofedelsolicitudesController = new ImpofedelsolicitudesController();
  //$impofedelsolicitudesController->insertImpofedelsolicitudes($param);
  //$impofedelsolicitudesController->deleteImpofedelsolicitudes($param);
  $impofedelsolicitudesController->selectImpofedelsolicitudes($param);
 */

//$ImpofedelsolicitudesDto = new ImpofedelsolicitudesDTO();
//$ImpofedelsolicitudesDto->setIdImpOfeDelSolicitud("");
//$ImpofedelsolicitudesDto->setIdSolicitudAudiencia("");
//$ImpofedelsolicitudesDto->setIdImputadoSolicitud("");
//$ImpofedelsolicitudesDto->setIdOfendidoSolicitud("");
//$ImpofedelsolicitudesDto->setIdDelitoSolicitud("");
//$ImpofedelsolicitudesDto->setCveModalidad("");
//$ImpofedelsolicitudesDto->setCveComision("");
//$ImpofedelsolicitudesDto->setCveConcurso("");
//$ImpofedelsolicitudesDto->setCveClasificacionDelitoOrden("");
//$ImpofedelsolicitudesDto->setCveElementoComision("");
//$ImpofedelsolicitudesDto->setCveClasificacionDelito("");
//$ImpofedelsolicitudesDto->setCveFormaAccion("");
//$ImpofedelsolicitudesDto->setCveConsumacion("");
//$ImpofedelsolicitudesDto->setCveMunicipio("");
//$ImpofedelsolicitudesDto->setCveEntidad("");
//$ImpofedelsolicitudesDto->setCveGradoParticipacion("");
//$ImpofedelsolicitudesDto->setCveRelacionImpOfe("");
//$ImpofedelsolicitudesDto->setActivo("");
//$ImpofedelsolicitudesDto->setFechaDelito("");
//$ImpofedelsolicitudesDto->setDireccion("");
//$ImpofedelsolicitudesDto->setColonia("");
//$ImpofedelsolicitudesDto->setNumInterior("");
//$ImpofedelsolicitudesDto->setNumExterior("");
//$ImpofedelsolicitudesDto->setCp("");
//
//#TRATA
//$trataspersonasDto = new TrataspersonasDTO();
//$trataspersonasDto->setIdTrataPersona("");
//$trataspersonasDto->setCveEstadoDestino("");
//$trataspersonasDto->setCveMunicipioDestino("");
//$trataspersonasDto->setCvePaisDestino("");
//$trataspersonasDto->setEstadoDestino("");
//$trataspersonasDto->setMunicipioDestino("");
//$trataspersonasDto->setCveEstadoOrigen("");
//$trataspersonasDto->setCveMunicipioOrigen("");
//$trataspersonasDto->setCvePaisOrigen("");
//$trataspersonasDto->setEstadoOrigen("");
//$trataspersonasDto->setMunicipioOrigen("");
//$trataspersonasDto->setCveTipoTrata("");
//$trataspersonasDto->setCveTrasportacion("");
//$trataspersonasDto->setIdImpOfeDelSolicitud("");
//
//$efectosofendidosTrataDto = new EfectosofendidosDTO();
//$efectosofendidosTrataDto->setIdEfectoOfendido("");
//$efectosofendidosTrataDto->setCveDetalleEfecto("");
//$efectosofendidosTrataDto->setIdImpOfeDelSolicitud("");
//$efectosofendidosTrataDto->setActivo("");
//$efectosofendidosTrataDto->setFechaRegistro("");
//$efectosofendidosTrataDto->setFechaActualizacion("");
//
//#VIOLENCIA
//$violenciadegeneroDto = new ViolenciadegeneroDTO();
//$violenciadegeneroDto->setIdViolenciaDeGenero("");
//$violenciadegeneroDto->setCveEfecto("");
//$violenciadegeneroDto->setIdImpOfeDelSolicitud("");
//$violenciadegeneroDto->setFechaRegistro("");
//$violenciadegeneroDto->setFechaActualizacion("");
//
//$efectosofendidosViolenciaDto = new EfectosofendidosDTO();
//$efectosofendidosViolenciaDto->setIdEfectoOfendido("");
//$efectosofendidosViolenciaDto->setCveDetalleEfecto("");
//$efectosofendidosViolenciaDto->setIdImpOfeDelSolicitud("");
//$efectosofendidosViolenciaDto->setActivo("");
//$efectosofendidosViolenciaDto->setFechaRegistro("");
//$efectosofendidosViolenciaDto->setFechaActualizacion("");
//
//
//#SEXUALES
//$sexualesDto = new SexualesDTO();
//$sexualesDto->setIdSexual("");
//$sexualesDto->setCveModalidadAcoso("");
//$sexualesDto->setCveAmbitoAcoso("");
//$sexualesDto->setFechaRegistro("");
//$sexualesDto->setFechaActualizacion("");
//
//$efectosofendidosViolenciaDto = new EfectosofendidosDTO();
//$efectosofendidosViolenciaDto->setIdEfectoOfendido("");
//$efectosofendidosViolenciaDto->setCveDetalleEfecto("");
//$efectosofendidosViolenciaDto->setIdImpOfeDelSolicitud("");
//$efectosofendidosViolenciaDto->setActivo("");
//$efectosofendidosViolenciaDto->setFechaRegistro("");
//$efectosofendidosViolenciaDto->setFechaActualizacion("");
//
//
//
//$param = array("impofedelsolicitudes" => $ImputadossolicitudesDto->toString(),
//    "trata" => array($telefenosimputadossolicitudesDto->toString()),
//    "defensores" => array($defensoresimputadossolicitudesDto->toString()),
//    "domicilios" => array($domiciliosimputadossolicitudesDto->toString()),
//    "tutores" => array($tutoresimputadosDto->toString(), $tutoresimputadosDto->toString())
//);
//$param = array("impofedelsolicitudes" => array($ImpofedelsolicitudesDto[0]->toString(), $ImpofedelsolicitudesDto[1]->toString()));
//$param = array($ImpofedelsolicitudesDto[1]->toString());
//json_encode($param);
//$impofedelsolicitudesController = new ImpofedelsolicitudesController();
//$impofedelsolicitudesController->insertImpofedelsolicitudes($param);
//$impofedelsolicitudesController->deleteImpofedelsolicitudes($param);
//$impofedelsolicitudesController->selectImpofedelsolicitudes($param);
/* $impofedelsolicitudesDto = new ImpofedelsolicitudesDTO();
  $impofedelsolicitudesDto->setIdSolicitudAudiencia(369);

  $impofedelsolicitudesController = new ImpofedelsolicitudesController();
  $impofedelsolicitudesController->selectImpOfeDelSolicitudesRelacion($impofedelsolicitudesDto); */
?>