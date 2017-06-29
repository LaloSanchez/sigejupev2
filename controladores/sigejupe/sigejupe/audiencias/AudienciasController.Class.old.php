<?php

if (!isset($_SESSION)) {
    session_start();
}
date_default_timezone_set("America/Mexico_City");
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
 * 
 * 
 */
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/audiencias/AudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/audiencias/AudienciasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/cataudiencias/CataudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/cataudiencias/CataudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/cataudiencias/CataudienciasController.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposcarpetas/TiposcarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tiposcarpetas/TiposcarpetasController.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/salas/SalasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/salas/SalasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposaudiencias/TiposaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposaudiencias/TiposaudienciasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estatusaudiencias/EstatusaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estatusaudiencias/EstatusaudienciasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/audienciasjuzgador/AudienciasjuzgadorDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/audienciasjuzgador/AudienciasjuzgadorDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/audienciasjuzgador/AudienciasjuzgadorController.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesaudiencias/SolicitudesaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesaudiencias/SolicitudesaudienciasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadossolicitudes/ImputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadossolicitudes/ImputadossolicitudesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/domiciliosimputadossolicitudes/DomiciliosimputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/domiciliosimputadossolicitudes/DomiciliosimputadossolicitudesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofendidossolicitudes/OfendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ofendidossolicitudes/OfendidossolicitudesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/domiciliosofendidossolicitudes/DomiciliosofendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/domiciliosofendidossolicitudes/DomiciliosofendidossolicitudesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitossolicitudes/DelitossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitossolicitudes/DelitossolicitudesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitos/DelitosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitos/DelitosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesaudiencias/SolicitudesaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesaudiencias/SolicitudesaudienciasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/etapasprocesales/EtapasprocesalesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/etapasprocesales/EtapasprocesalesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/naturalezas/NaturalezasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/naturalezas/NaturalezasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estatussolicitudes/EstatussolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estatussolicitudes/EstatussolicitudesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadores/JuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadores/JuzgadoresDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../webservice/cliente/usuarios/UsuarioCliente.php");

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadoscarpetas/ImputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadoscarpetas/ImputadoscarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresimputadoscarpetas/DefensoresimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/defensoresimputadoscarpetas/DefensoresimputadoscarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposjuzgados/TiposjuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposjuzgados/TiposjuzgadosDAO.Class.php");

//include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
//include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/juzgados/JuzgadosController.Class.php");

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/estatusaudiencias/EstatusaudienciasController.Class.php");

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/naturalezas/NaturalezasController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/defensoresimputadossolicitudes/DefensoresimputadossolicitudesController.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/audienciasjuzgador/AudienciasjuzgadorDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/audienciasjuzgador/AudienciasjuzgadorDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/audienciasjuzgador/AudienciasjuzgadorController.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadores/JuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadores/JuzgadoresDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/juzgadores/JuzgadoresController.Class.php");
#Defensores Imputados Solicitudes
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/defensoresimputadossolicitudes/DefensoresimputadossolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresimputadossolicitudes/DefensoresimputadossolicitudesDTO.Class.php");
#Juzgados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");

#Distritos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/distritos/DistritosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/distritos/DistritosDAO.Class.php");

#servicio para crear carpeta desde solicitud
#controladores/sigejupe/carpetasjudiciales/CarpetasjudicialesService.Class.php
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/carpetasjudiciales/CarpetasjudicialesService.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoramovimientos/BitacoramovimientosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/controlcargas/ControlcargasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/controlcargas/ControlcargasDAO.Class.php");

/*
 * audiencias distritos
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/audienciasdistritos/AudienciasdistritosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/audienciasdistritos/AudienciasdistritosDAO.Class.php");

//include_once(dirname(__FILE__) . "/../../../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php");
//include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/delitos/DelitosController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/delitossolicitudes/DelitossolicitudesController.Class.php");

class AudienciasController {

    private $proveedor;

    public function __construct()
    {

    }

    public function validarAudiencias($AudienciasDto)
    {
        $AudienciasDto->setidAudiencia(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getidAudiencia()))));
        $AudienciasDto->setidSolicitudAudiencia(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getidSolicitudAudiencia()))));
        $AudienciasDto->setnumero(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getnumero()))));
        $AudienciasDto->setanio(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getanio()))));
        $AudienciasDto->setcveTipoCarpeta(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getcveTipoCarpeta()))));
        $AudienciasDto->setactivo(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getactivo()))));
        $AudienciasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getfechaRegistro()))));
        $AudienciasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getfechaActualizacion()))));
        $AudienciasDto->setfechaInicial(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getfechaInicial()))));
        $AudienciasDto->setfechaFinal(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getfechaFinal()))));
        $AudienciasDto->setcveCatAudiencia(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getcveCatAudiencia()))));
        $AudienciasDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getcveJuzgado()))));
        $AudienciasDto->setcveJuzgadoDesahoga(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getcveJuzgadoDesahoga()))));
        $AudienciasDto->setcveAdscripcionSolicita(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getcveAdscripcionSolicita()))));
        $AudienciasDto->setcveUsuario(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getcveUsuario()))));
        $AudienciasDto->setidReferencia(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getidReferencia()))));
        $AudienciasDto->setdetenido(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getdetenido()))));
        $AudienciasDto->setcveEstatusAudiencia(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getcveEstatusAudiencia()))));
        $AudienciasDto->setcveSala(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getcveSala()))));
        $AudienciasDto->setpeso(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getpeso()))));
        $AudienciasDto->setvariable(strtoupper(str_ireplace("'", "", trim($AudienciasDto->getvariable()))));

        return $AudienciasDto;
    }

    public function selectAudiencias($AudienciasDto, $proveedor = null, $orden = "")
    {
        $AudienciasDto->setFechaInicial("");
        $AudienciasDto = $this->validarAudiencias($AudienciasDto);
        $AudienciasDao = new AudienciasDAO();
        $AudienciasDto = $AudienciasDao->selectAudiencias($AudienciasDto, $orden, $proveedor);

        return $AudienciasDto;
    }

    public function consultarAudienciaJueces($AudienciasDto, $proveedor = null, $orden = "")
    {
        $AudienciasDto = $this->validarAudiencias($AudienciasDto);
        $AudienciasDao = new AudienciasDAO();
        $AudienciasDto = $AudienciasDao->selectAudiencias($AudienciasDto, $orden, $proveedor);
        if ($AudienciasDto != "") {
            $json = "";
            $x = 1;
            $i = 1;
            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($AudienciasDto) . '",';
            $json .= '"data":[';
            foreach ($AudienciasDto as $Audiencia) {
                $json .= "{";
                $json .= '"idAudiencia":' . json_encode(($Audiencia->getIdAudiencia())) . ",";
                $json .= '"idSolicitudAudiencia":' . json_encode(($Audiencia->getIdSolicitudAudiencia())) . ",";
                $json .= '"numero":' . json_encode(($Audiencia->getNumero())) . ",";
                $json .= '"anio":' . json_encode(($Audiencia->getAnio())) . ",";
                $json .= '"cveTipoCarpeta":' . json_encode(($Audiencia->getCveTipoCarpeta())) . ",";
                $json .= '"activo":' . json_encode(($Audiencia->getActivo())) . ",";
                $json .= '"fechaRegistro":' . json_encode(($Audiencia->getFechaRegistro())) . ",";
                $json .= '"fechaActualizacion":' . json_encode(($Audiencia->getFechaActualizacion())) . ",";
                $json .= '"fechaInicial":' . json_encode($this->fechaHoraNormal($Audiencia->getFechaInicial())) . ",";
                $json .= '"fechaFinal":' . json_encode($this->fechaHoraNormal($Audiencia->getFechaFinal())) . ",";
                $json .= '"cveCatAudiencia":' . json_encode(($Audiencia->getCveCatAudiencia())) . ",";
                $json .= '"cveJuzgado":' . json_encode(($Audiencia->getCveJuzgado())) . ",";
                $json .= '"cveJuzgadoDesahoga":' . json_encode(($Audiencia->getCveJuzgadoDesahoga())) . ",";
                $json .= '"cveAdscripcionSolicita":' . json_encode(($Audiencia->getCveAdscripcionSolicita())) . ",";
                $json .= '"cveUsuario":' . json_encode(($Audiencia->getCveUsuario())) . ",";
                $json .= '"idReferencia":' . json_encode(($Audiencia->getIdReferencia())) . ",";
                $json .= '"detenido":' . json_encode(($Audiencia->getDetenido())) . ",";
                $json .= '"cveEstatusAudiencia":' . json_encode(($Audiencia->getCveEstatusAudiencia())) . ",";
                $json .= '"cveSala":' . json_encode(($Audiencia->getCveSala())) . ",";
                $json .= '"peso":' . json_encode(($Audiencia->getPeso())) . ",";
                $json .= '"juzgadores":[';

                $audienciasJuzgadoresDto = new AudienciasjuzgadorDTO();
                $audienciasJuzgadoresDao = new AudienciasjuzgadorDAO();
                $audienciasJuzgadoresDto->setActivo("S");
                $audienciasJuzgadoresDto->setIdAudiencia($Audiencia->getIdAudiencia());
                $rsAudienciasJuzgadoresDto = $audienciasJuzgadoresDao->selectAudienciasjuzgador($audienciasJuzgadoresDto);
                if ($rsAudienciasJuzgadoresDto != "") {

                    foreach ($rsAudienciasJuzgadoresDto as $juzgadores) {
                        $json .= "{";
                        $json .= '"idAudienciaJuez":' . json_encode(($juzgadores->getIdAudienciaJuez())) . ",";
                        $json .= '"idJuzgador":' . json_encode(($juzgadores->getIdJuzgador())) . ",";
                        $json .= '"cveFuncion":' . json_encode(($juzgadores->getCveFuncionJuzgador())) . "";
                        $json .= "}" . "\n";
                        $i ++;
                        if ($i <= count($rsAudienciasJuzgadoresDto)) {
                            $json .= ",";
                        }
                    }
                }


                $json .= "]";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($AudienciasDto)) {
                    $json .= ",";
                }
            }
            $json .= "]";
            $json .= "}";
        } else {
            $json .= '{"estatus":"Fail",';
            $json .= '"mnj":"No se encontraro la audiencia."}';
        }

        return $json;
    }

    public function selectAudienciasRelacion($AudienciasDto, $proveedor = null)
    {
        $audienciasRelacionArray = array();
        $AudienciasDto = $this->validarAudiencias($AudienciasDto);
        $AudienciasDao = new AudienciasDAO();
        $AudienciasDto = $AudienciasDao->selectAudiencias($AudienciasDto, $proveedor);

        $cataudienciasDto = new CatAudienciasDTO();
        $cataudienciasDao = new CatAudienciasDAO();
        $cataudienciasDto = $cataudienciasDao->selectcataudiencias($cataudienciasDto, "", $proveedor);

        $tiposcarpetasDto = new TiposCarpetasDTO();
        $tiposcarpetasDao = new TiposCarpetasDAO();
        $tiposcarpetasDto = $tiposcarpetasDao->selecttiposcarpetas($tiposcarpetasDto, "", $proveedor);

        $salasDto = new SalasDTO();
        $salasDao = new SalasDAO();
        $salasDto = $salasDao->selectsalas($salasDto, "", $proveedor);

        $estatusaudienciasDto = new EstatusAudienciasDTO();
        $estatusaudienciasDao = new EstatusAudienciasDAO();
        $estatusaudienciasDto = $estatusaudienciasDao->selectestatusaudiencias($estatusaudienciasDto, "", $proveedor);

        $audienciasjuzgadorDto = new AudienciasJuzgadorDTO();
        $audienciasjuzgadorDao = new AudienciasJuzgadorDAO();
        $audienciasjuzgadorDto = $audienciasjuzgadorDao->selectaudienciasjuzgador($audienciasjuzgadorDto, "", $proveedor);

        if ($AudienciasDto != "") {

            $juzgadosAudienciasDto = new JuzgadosDTO();
            $juzgadosAudienciasDao = new JuzgadosDAO();
            $juzgadosAudienciasDto = $juzgadosAudienciasDao->selectJuzgados($juzgadosAudienciasDto);

            $solicitudAudienciaDto = new SolicitudesaudienciasDTO();
            $solicitudAudienciaDao = new SolicitudesaudienciasDAO();
            $solicitudAudienciaDto = $solicitudAudienciaDao->selectSolicitudesaudiencias($solicitudAudienciaDto);

            $etapaProcesalDto = new EtapasprocesalesDTO();
            $etapaProcesalDao = new EtapasprocesalesDAO();
            $etapaProcesalDto = $etapaProcesalDao->selectEtapasprocesales($etapaProcesalDto);
            // Obtenemos el Usuario que esta realizando la Solicitud
            $usuarioWS = new UsuarioCliente();
            if ($AudienciasDto != "") {

                foreach ($AudienciasDto as $audienciaDto) {
                    $audienciasRelacion["idAudiencia"] = $audienciaDto->getIdAudiencia();
                    $audienciasRelacion["idSolicitudAudiencia"] = $audienciaDto->getIdSolicitudAudiencia();
                    $audienciasRelacion["numero"] = $audienciaDto->getNumero();
                    $audienciasRelacion["anio"] = $audienciaDto->getAnio();
                    $audienciasRelacion["cveTipoCarpeta"] = $audienciaDto->getCveTipoCarpeta();
                    $audienciasRelacion["activo"] = $audienciaDto->getActivo();
                    $audienciasRelacion["fechaRegistro"] = $audienciaDto->getFechaRegistro();
                    $audienciasRelacion["fechaActualizacion"] = $audienciaDto->getFechaActualizacion();
                    $audienciasRelacion["fechaInicial"] = $audienciaDto->getFechaInicial();
                    $audienciasRelacion["fechaFinal"] = $audienciaDto->getFechaFinal();
                    $audienciasRelacion["cveCatAudiencia"] = $audienciaDto->getCveCatAudiencia();
                    $audienciasRelacion["cveJuzgado"] = $audienciaDto->getCveJuzgado();
                    $audienciasRelacion["cveJuzgadoDesahoga"] = $audienciaDto->getCveJuzgadoDesahoga();
                    $audienciasRelacion["cveAdscripcionSolicita"] = $audienciaDto->getCveAdscripcionSolicita();
                    $audienciasRelacion["cveUsuario"] = $audienciaDto->getCveUsuario();
                    $audienciasRelacion["idReferencia"] = $audienciaDto->getIdReferencia();
                    $audienciasRelacion["detenido"] = $audienciaDto->getDetenido();
                    $audienciasRelacion["cveEstatusAudiencia"] = $audienciaDto->getCveEstatusAudiencia();
                    $audienciasRelacion["cveSala"] = $audienciaDto->getCveSala();
                    $audienciasRelacion["peso"] = $audienciaDto->getPeso();

                    for ($index = 0; $index < count($cataudienciasDto); $index ++) {
                        if ($cataudienciasDto[$index]->getCveCatAudiencia() == $audienciaDto->getCveCatAudiencia()) {
                            $audienciasRelacion["cataudiencias"] = array("cveCatAudiencia" => $cataudienciasDto[$index]->getCveCatAudiencia(), "descripcion" => $cataudienciasDto[$index]->getDesCatAudiencia());
                            $tiposaudienciasDto = new TiposAudienciasDTO();
                            $tiposaudienciasDto->setCveTipoAudiencia($cataudienciasDto[$index]->getCveTipoAudiencia());
                            $tiposaudienciasDao = new TiposAudienciasDAO();
                            $tiposaudienciasDto = $tiposaudienciasDao->selecttiposaudiencias($tiposaudienciasDto, "", $this->proveedor);
                            foreach ($tiposaudienciasDto as $keyTipo => $valueTipo) {
                                $audienciasRelacion["tiposaudiencias"] = array("cveTipoAudiencia" => $valueTipo->getCveTipoAudiencia(), "desTipoAudiencia" => $valueTipo->getDesTipoAudiencia());
                            }
                            break;
                        }
                    }

                    for ($index = 0; $index < count($tiposcarpetasDto); $index ++) {
                        if ($tiposcarpetasDto[$index]->getCveTipoCarpeta() == $audienciaDto->getCveTipoCarpeta()) {
                            $audienciasRelacion["tiposcarpetas"] = array("cveTipoCarpeta" => $tiposcarpetasDto[$index]->getCveTipoCarpeta(), "descripcion" => $tiposcarpetasDto[$index]->getDesTipoCarpeta());
                            break;
                        }
                    }

                    for ($index = 0; $index < count($salasDto); $index ++) {
                        if ($salasDto[$index]->getCveSala() == $audienciaDto->getCveSala()) {
                            $audienciasRelacion["salas"] = array("cveSala" => $salasDto[$index]->getCveSala(), "descripcion" => $salasDto[$index]->getDesSala());
                            break;
                        }
                    }

                    for ($index = 0; $index < count($salasDto); $index ++) {
                        if ($salasDto[$index]->getCveSala() == $audienciaDto->getCveSala()) {
                            $audienciasRelacion["salas"] = array("cveSala" => $salasDto[$index]->getCveSala(), "descripcion" => $salasDto[$index]->getDesSala());
                            break;
                        }
                    }

                    for ($index = 0; $index < count($estatusaudienciasDto); $index ++) {
                        if ($estatusaudienciasDto[$index]->getCveEstatusAudiencia() == $audienciaDto->getCveEstatusAudiencia()) {
                            $audienciasRelacion["estatusAudiencia"] = array("cveEstatusAudiencia" => $estatusaudienciasDto[$index]->getCveEstatusAudiencia(), "descripcion" => $estatusaudienciasDto[$index]->getDesEstatusAudiencia());
                            break;
                        }
                    }

                    for ($index = 0; $index < count($audienciasjuzgadorDto); $index ++) {
                        if ($audienciasjuzgadorDto[$index]->getIdAudiencia() == $audienciaDto->getIdAudiencia() && $audienciasjuzgadorDto[$index]->getActivo() == "S") {
                            $audienciasRelacion["audienciaJuzgador"] = array("idAudienciaJuez" => $audienciasjuzgadorDto[$index]->getIdAudienciaJuez(), "idJuzgador" => $audienciasjuzgadorDto[$index]->getIdJuzgador());
                            break;
                        }
                    }

                    for ($index = 0; $index < count($juzgadosAudienciasDto); $index ++) {
                        if ($juzgadosAudienciasDto[$index]->getCveJuzgado() == $audienciaDto->getCveJuzgado()) {
                            $audienciasRelacion["juzgados"] = array("cveJuzgado" => $juzgadosAudienciasDto[$index]->getCveJuzgado(),
                                                                    "juzgado"    => $juzgadosAudienciasDto[$index]->getDesJuzgado()
                            );
                            break;
                        }
                    }

                    for ($index = 0; $index < count($solicitudAudienciaDto); $index ++) {
                        if ($solicitudAudienciaDto[$index]->getIdSolicitudAudiencia() == $audienciaDto->getIdSolicitudAudiencia()) {
                            $audienciasRelacion["solicitudes"] = array("idSolicitudAudiencia" => $solicitudAudienciaDto[$index]->getIdSolicitudAudiencia(),
                                                                       "nuc"                  => $solicitudAudienciaDto[$index]->getNuc(), "carpetaInv" => $solicitudAudienciaDto[$index]->getCarpetaInv(),
                                                                       "observaciones"        => $solicitudAudienciaDto[$index]->getObservaciones());
                            for ($index2 = 0; $index2 < count($etapaProcesalDto); $index2 ++) {
                                if ($etapaProcesalDto[$index2]->getCveEtapaProcesal() == $solicitudAudienciaDto[$index]->getCveEtapaProcesal()) {
                                    $audienciasRelacion["etapaProcesal"] = array(
                                        "idEtapaProcesal" => $etapaProcesalDto[$index2]->getCveEtapaProcesal(),
                                        "desc"            => $etapaProcesalDto[$index2]->getDesEtapaProcesal());
                                    break;
                                }
                            }
                            break;
                        }
                    }

                    // Obtenemos el nombre del Solicitante
                    $usuario = $usuarioWS->getUsuarios($audienciaDto->getCveUsuario());
                    $usuario = json_decode($usuario, true);

                    $audienciasRelacion["solicitante"] = $usuario["data"][0]["nombre"] .
                        " " . $usuario["data"][0]["paterno"] . " " . $usuario["data"][0]["materno"];

                    $audienciasRelacionArray[] = $audienciasRelacion;
                }
            }

            return json_encode($audienciasRelacionArray);
        }
    }

    public function selectAudienciasReporte($AudienciasDto, $proveedor = null)
    {
        $audienciasRelacionArray = array();
        $AudienciasDto = $this->validarAudiencias($AudienciasDto);
        $AudienciasDao = new AudienciasDAO();
        $AudienciasDto = $AudienciasDao->selectAudiencias($AudienciasDto, $proveedor);

        $cataudienciasDto = new CatAudienciasDTO();
        $cataudienciasDao = new CatAudienciasDAO();
        $cataudienciasDto = $cataudienciasDao->selectcataudiencias($cataudienciasDto, "", $proveedor);

        $tiposcarpetasDto = new TiposCarpetasDTO();
        $tiposcarpetasDao = new TiposCarpetasDAO();
        $tiposcarpetasDto = $tiposcarpetasDao->selecttiposcarpetas($tiposcarpetasDto, "", $proveedor);

        $salasDto = new SalasDTO();
        $salasDao = new SalasDAO();
        $salasDto = $salasDao->selectsalas($salasDto, "", $proveedor);

        $estatusaudienciasDto = new EstatusAudienciasDTO();
        $estatusaudienciasDao = new EstatusAudienciasDAO();
        $estatusaudienciasDto = $estatusaudienciasDao->selectestatusaudiencias($estatusaudienciasDto, "", $proveedor);

        $audienciasjuzgadorDto = new AudienciasJuzgadorDTO();
        $audienciasjuzgadorDao = new AudienciasJuzgadorDAO();
        $audienciasjuzgadorDto = $audienciasjuzgadorDao->selectaudienciasjuzgador($audienciasjuzgadorDto, "", $proveedor);

        if ($AudienciasDto != "") {

            $juzgadosAudienciasDto = new JuzgadosDTO();
            $juzgadosAudienciasDao = new JuzgadosDAO();
            $juzgadosAudienciasDto = $juzgadosAudienciasDao->selectJuzgados($juzgadosAudienciasDto);

            $solicitudAudienciaDto = new SolicitudesaudienciasDTO();
            $solicitudAudienciaDao = new SolicitudesaudienciasDAO();
            $solicitudAudienciaDto = $solicitudAudienciaDao->selectSolicitudesaudiencias($solicitudAudienciaDto);

            $etapaProcesalDto = new EtapasprocesalesDTO();
            $etapaProcesalDao = new EtapasprocesalesDAO();
            $etapaProcesalDto = $etapaProcesalDao->selectEtapasprocesales($etapaProcesalDto);
            // Obtenemos el Usuario que esta realizando la Solicitud
            $usuarioWS = new UsuarioCliente();
            if ($AudienciasDto != "") {

                foreach ($AudienciasDto as $audienciaDto) {
                    $audienciasRelacion["idAudiencia"] = $audienciaDto->getIdAudiencia();
                    $audienciasRelacion["idSolicitudAudiencia"] = $audienciaDto->getIdSolicitudAudiencia();
                    $audienciasRelacion["numero"] = $audienciaDto->getNumero();
                    $audienciasRelacion["anio"] = $audienciaDto->getAnio();
                    $audienciasRelacion["cveTipoCarpeta"] = $audienciaDto->getCveTipoCarpeta();
                    $audienciasRelacion["activo"] = $audienciaDto->getActivo();
                    $audienciasRelacion["fechaRegistro"] = $audienciaDto->getFechaRegistro();
                    $audienciasRelacion["fechaActualizacion"] = $audienciaDto->getFechaActualizacion();
                    $audienciasRelacion["fechaInicial"] = date("d/m/Y H:i", strtotime($audienciaDto->getFechaInicial()));
                    $audienciasRelacion["fechaFinal"] = date("d/m/Y H:i", strtotime($audienciaDto->getFechaFinal()));
                    $audienciasRelacion["cveCatAudiencia"] = $audienciaDto->getCveCatAudiencia();
                    $audienciasRelacion["cveJuzgado"] = $audienciaDto->getCveJuzgado();
                    $audienciasRelacion["cveJuzgadoDesahoga"] = $audienciaDto->getCveJuzgadoDesahoga();
                    $audienciasRelacion["cveAdscripcionSolicita"] = $audienciaDto->getCveAdscripcionSolicita();
                    $audienciasRelacion["cveUsuario"] = $audienciaDto->getCveUsuario();
                    $audienciasRelacion["idReferencia"] = $audienciaDto->getIdReferencia();
                    $audienciasRelacion["detenido"] = $audienciaDto->getDetenido();
                    $audienciasRelacion["cveEstatusAudiencia"] = $audienciaDto->getCveEstatusAudiencia();
                    $audienciasRelacion["cveSala"] = $audienciaDto->getCveSala();
                    $audienciasRelacion["peso"] = $audienciaDto->getPeso();

                    for ($index = 0; $index < count($cataudienciasDto); $index ++) {
                        if ($cataudienciasDto[$index]->getCveCatAudiencia() == $audienciaDto->getCveCatAudiencia()) {
                            $audienciasRelacion["cataudiencias"] = array("cveCatAudiencia" => $cataudienciasDto[$index]->getCveCatAudiencia(), "descripcion" => $cataudienciasDto[$index]->getDesCatAudiencia());
                            $tiposaudienciasDto = new TiposAudienciasDTO();
                            $tiposaudienciasDto->setCveTipoAudiencia($cataudienciasDto[$index]->getCveTipoAudiencia());
                            $tiposaudienciasDao = new TiposAudienciasDAO();
                            $tiposaudienciasDto = $tiposaudienciasDao->selecttiposaudiencias($tiposaudienciasDto, "", $this->proveedor);
                            foreach ($tiposaudienciasDto as $keyTipo => $valueTipo) {
                                $audienciasRelacion["tiposaudiencias"] = array("cveTipoAudiencia" => $valueTipo->getCveTipoAudiencia(), "desTipoAudiencia" => $valueTipo->getDesTipoAudiencia());
                            }
                            $naturalezasDto = new NaturalezasDTO();
                            $naturalezasDto->setCveNaturaleza($cataudienciasDto[$index]->getCveNaturaleza());
                            $naturalezasDao = new NaturalezasDAO();
                            $naturalezasDto = $naturalezasDao->selectnaturalezas($naturalezasDto, "", $this->proveedor);
                            foreach ($naturalezasDto as $keyTipo => $valueTipo) {
                                $audienciasRelacion["naturalezas"] = array("CveNaturaleza" => $valueTipo->getCveNaturaleza(), "desNaturaleza" => $valueTipo->getDesNaturaleza());
                            }
                            break;
                        }
                    }

                    for ($index = 0; $index < count($tiposcarpetasDto); $index ++) {
                        if ($tiposcarpetasDto[$index]->getCveTipoCarpeta() == $audienciaDto->getCveTipoCarpeta()) {
                            $audienciasRelacion["tiposcarpetas"] = array("cveTipoCarpeta" => $tiposcarpetasDto[$index]->getCveTipoCarpeta(), "descripcion" => $tiposcarpetasDto[$index]->getDesTipoCarpeta());
                            break;
                        }
                    }

                    for ($index = 0; $index < count($salasDto); $index ++) {
                        if ($salasDto[$index]->getCveSala() == $audienciaDto->getCveSala()) {
                            $audienciasRelacion["salas"] = array("cveSala" => $salasDto[$index]->getCveSala(), "descripcion" => $salasDto[$index]->getDesSala());
                            break;
                        }
                    }

                    for ($index = 0; $index < count($salasDto); $index ++) {
                        if ($salasDto[$index]->getCveSala() == $audienciaDto->getCveSala()) {
                            $audienciasRelacion["salas"] = array("cveSala" => $salasDto[$index]->getCveSala(), "descripcion" => $salasDto[$index]->getDesSala());
                            break;
                        }
                    }

                    for ($index = 0; $index < count($estatusaudienciasDto); $index ++) {
                        if ($estatusaudienciasDto[$index]->getCveEstatusAudiencia() == $audienciaDto->getCveEstatusAudiencia()) {
                            $audienciasRelacion["estatusAudiencia"] = array("cveEstatusAudiencia" => $estatusaudienciasDto[$index]->getCveEstatusAudiencia(), "descripcion" => $estatusaudienciasDto[$index]->getDesEstatusAudiencia());
                            break;
                        }
                    }

                    for ($index = 0; $index < count($audienciasjuzgadorDto); $index ++) {
                        if ($audienciasjuzgadorDto[$index]->getIdAudiencia() == $audienciaDto->getIdAudiencia() && $audienciasjuzgadorDto[$index]->getActivo() == "S") {
                            $audienciasRelacion["audienciaJuzgador"] = array("idAudienciaJuez" => $audienciasjuzgadorDto[$index]->getIdAudienciaJuez(), "idJuzgador" => $audienciasjuzgadorDto[$index]->getIdJuzgador());
                            break;
                        }
                    }

                    for ($index = 0; $index < count($juzgadosAudienciasDto); $index ++) {
                        if ($juzgadosAudienciasDto[$index]->getCveJuzgado() == $audienciaDto->getCveJuzgado()) {
                            $audienciasRelacion["juzgados"] = array("cveJuzgado" => $juzgadosAudienciasDto[$index]->getCveJuzgado(),
                                                                    "juzgado"    => $juzgadosAudienciasDto[$index]->getDesJuzgado()
                            );
                            break;
                        }
                    }

                    for ($index = 0; $index < count($solicitudAudienciaDto); $index ++) {
                        if ($solicitudAudienciaDto[$index]->getIdSolicitudAudiencia() == $audienciaDto->getIdSolicitudAudiencia()) {
                            $audienciasRelacion["solicitudes"] = array("idSolicitudAudiencia" => $solicitudAudienciaDto[$index]->getIdSolicitudAudiencia(),
                                                                       "nuc"                  => $solicitudAudienciaDto[$index]->getNuc(), "carpetaInv" => $solicitudAudienciaDto[$index]->getCarpetaInv(),
                                                                       "observaciones"        => $solicitudAudienciaDto[$index]->getObservaciones(),
                                                                       "fechaSolicitud"       => $solicitudAudienciaDto[$index]->getFechaRegistro());

                            $estatussolicitudesDto = new EstatussolicitudesDTO();
                            $estatussolicitudesDto->setCveEstatusSolicitud($solicitudAudienciaDto[$index]->getCveEstatusSolicitud());
                            $estatussolicitudesDao = new EstatussolicitudesDAO();
                            $estatussolicitudesDto = $estatussolicitudesDao->selectestatussolicitudes($estatussolicitudesDto, "", $this->proveedor);
                            foreach ($estatussolicitudesDto as $keyTipo => $valueTipo) {
                                $audienciasRelacion["estatussolicitudes"] = array("cveEstatusSolicitud" => $valueTipo->getcveEstatusSolicitud(), "desEstatusSolicitud" => $valueTipo->getDesEstatusSolicitud());
                            }

                            $tiposaudienciasDto = new TiposAudienciasDTO();
                            $tiposaudienciasDto->setCveTipoAudiencia($solicitudAudienciaDto[$index]->getCveTipoAudiencia());
                            $tiposaudienciasDao = new TiposAudienciasDAO();
                            $tiposaudienciasDto = $tiposaudienciasDao->selecttiposaudiencias($tiposaudienciasDto, "", $this->proveedor);
                            foreach ($tiposaudienciasDto as $keyTipo => $valueTipo) {
                                $audienciasRelacion["tiposaudienciassolicitudes"] = array("cveTipoAudiencia" => $valueTipo->getCveTipoAudiencia(), "desTipoAudiencia" => $valueTipo->getDesTipoAudiencia());
                            }
                            $sol = $solicitudAudienciaDto[$index]->getIdSolicitudAudiencia();
                            $imputadossolicitudesDto = new ImputadossolicitudesDTO();
                            $imputadossolicitudesDto->setIdSolicitudAudiencia($sol);
                            $imputadossolicitudesDao = new ImputadossolicitudesDAO();
                            $imputadossolicitudesDto = $imputadossolicitudesDao->selectimputadossolicitudes($imputadossolicitudesDto, "", $this->proveedor);
                            foreach ($imputadossolicitudesDto as $index => $valueImputado) {
                                $audienciasRelacion["imputadossolicitudes"][] = array("idImputadoSolicitud" => $valueImputado->getIdImputadoSolicitud(), "nombre" => $this->validaNull($valueImputado->getNombre()) . " " . $this->validaNull($valueImputado->getPaterno()) . " " . $this->validaNull($valueImputado->getMaterno()) . "" . $this->validaNull($valueImputado->getNombreMoral()));
                            }
                            $ofendidosSolicitudesDto = new OfendidosSolicitudesDTO();
                            $ofendidosSolicitudesDto->setIdSolicitudAudiencia($sol);
                            $ofendidosSolicitudesDao = new OfendidosSolicitudesDAO();
                            $ofendidosSolicitudesDto = $ofendidosSolicitudesDao->selectofendidosSolicitudes($ofendidosSolicitudesDto, "", $this->proveedor);
                            foreach ($ofendidosSolicitudesDto as $index => $valueOfendido) {
                                $audienciasRelacion["ofendidossolicitudes"][] = array("idOfendidoSolicitud" => $valueOfendido->getIdOfendidoSolicitud(), "nombre" => $this->validaNull($valueOfendido->getNombre()) . " " . $this->validaNull($valueOfendido->getPaterno()) . " " . $this->validaNull($valueOfendido->getMaterno()) . "" . $this->validaNull($valueOfendido->getNombreMoral()));
                            }

                            $delitosSolicitudesDto = new DelitosSolicitudesDTO();
                            $delitosSolicitudesDto->setIdSolicitudAudiencia($sol);
                            $delitosSolicitudesDao = new DelitosSolicitudesDAO();
                            $delitosSolicitudesDto = $delitosSolicitudesDao->selectdelitosSolicitudes($delitosSolicitudesDto, "", $this->proveedor);
                            foreach ($delitosSolicitudesDto as $index => $valueOfendido) {
                                $audienciasRelacion["delitossolicitudes"][] = array("cveDelito" => $valueOfendido->getCveDelito());
                            }
                            /*
                              /*agrega domicilios de cada imputado
                             */

                            foreach ($audienciasRelacion['imputadossolicitudes'] as $indexImputado => $imputado) {

                                $domiciliosimputadossolicitudesDto = new DomiciliosimputadossolicitudesDTO();
                                $domiciliosimputadossolicitudesDto->setIdImputadoSolicitud($imputado['idImputadoSolicitud']);
                                $domiciliosimputadossolicitudesDto->setActivo("S");
                                $domiciliosimputadossolicitudesDao = new DomiciliosimputadossolicitudesDAO();
                                $domiciliosimputadossolicitudesDto = $domiciliosimputadossolicitudesDao->selectdomiciliosimputadossolicitudes($domiciliosimputadossolicitudesDto, "", $this->proveedor);
                                foreach ($domiciliosimputadossolicitudesDto as $valueImputado) {
                                    $audienciasRelacion['imputadossolicitudes'][$indexImputado]['domicilios'][] = array("idDomicilio" => $this->validaNull($valueImputado->getIdDomicilioImputadoSolicitud()), "direccion" => $this->validaNull($valueImputado->getDireccion()), "colonia" => $this->validaNull($valueImputado->getColonia()), "numInterior" => $this->validaNull($valueImputado->getNumInterior()), "numExterior" => $this->validaNull($valueImputado->getNumExterior()), "cp" => $this->validaNull($valueImputado->getCp()));
                                }
                            }

                            /*
                              /*agrega domicilios de cada ofendido
                             */

                            foreach ($audienciasRelacion['ofendidossolicitudes'] as $indexOfendido => $ofendido) {

                                $domiciliosofendidossolicitudesDto = new DomiciliosofendidossolicitudesDTO();
                                $domiciliosofendidossolicitudesDto->setIdOfendidoSolicitud($ofendido['idOfendidoSolicitud']);
                                $domiciliosofendidossolicitudesDto->setActivo("S");
                                $domiciliosofendidossolicitudesDao = new DomiciliosofendidossolicitudesDAO();
                                $domiciliosofendidossolicitudesDto = $domiciliosofendidossolicitudesDao->selectdomiciliosofendidossolicitudes($domiciliosofendidossolicitudesDto, "", $this->proveedor);
                                foreach ($domiciliosofendidossolicitudesDto as $valueOfendido) {
                                    $audienciasRelacion['ofendidossolicitudes'][$indexOfendido]['domicilios'][] = array("idDomicilio" => $valueOfendido->getIdDomicilioOfendidoSolicitud(), "direccion" => $this->validaNull($valueOfendido->getDireccion()), "colonia" => $this->validaNull($valueOfendido->getColonia()), "numInterior" => $this->validaNull($valueOfendido->getNumInterior()), "numExterior" => $this->validaNull($valueOfendido->getNumExterior()), "cp" => $this->validaNull($valueOfendido->getCp()));
                                }
                            }


                            foreach ($audienciasRelacion['delitossolicitudes'] as $indexDelito => $ofendido) {

                                $delitosDto = new delitosDTO();
                                $delitosDto->setCveDelito($ofendido['cveDelito']);
                                $delitosDto->setActivo("S");
                                $delitosDao = new delitosDAO();
                                $delitosDto = $delitosDao->selectdelitos($delitosDto, "", $this->proveedor);
                                foreach ($delitosDto as $valueOfendido) {
                                    $audienciasRelacion['delitossolicitudes'][$indexDelito]['delitos'][] = array("desDelito" => utf8_encode($valueOfendido->getdesDelito()));
                                }
                            }

                            $naturalezasDto = new NaturalezasDTO();
                            $naturalezasDto->setCveNaturaleza($solicitudAudienciaDto[$index]->getCveNaturaleza());
                            $naturalezasDao = new NaturalezasDAO();
                            $naturalezasDto = $naturalezasDao->selectnaturalezas($naturalezasDto, "", $this->proveedor);
                            foreach ($naturalezasDto as $keyTipo => $valueTipo) {
                                $audienciasRelacion["naturalezassolicitudes"] = array("CveNaturaleza" => $valueTipo->getCveNaturaleza(), "desNaturaleza" => $valueTipo->getDesNaturaleza());
                            }

                            for ($index2 = 0; $index2 < count($etapaProcesalDto); $index2 ++) {
                                if ($etapaProcesalDto[$index2]->getCveEtapaProcesal() == $solicitudAudienciaDto[$index]->getCveEtapaProcesal()) {
                                    $audienciasRelacion["etapaProcesal"] = array(
                                        "idEtapaProcesal" => $etapaProcesalDto[$index2]->getCveEtapaProcesal(),
                                        "desc"            => $etapaProcesalDto[$index2]->getDesEtapaProcesal());
                                    break;
                                }
                            }
                            break;
                        }
                    }

                    // Obtenemos el nombre del Solicitante
                    $usuario = $usuarioWS->getUsuarios($audienciaDto->getCveUsuario());
                    $usuario = json_decode($usuario, true);

                    $audienciasRelacion["solicitante"] = $usuario["data"][0]["nombre"] .
                        " " . $usuario["data"][0]["paterno"] . " " . $usuario["data"][0]["materno"];

                    $audienciasRelacionArray[] = $audienciasRelacion;
                }
            }

            return json_encode($audienciasRelacionArray);
        }
    }

    public function validaNull($dato)
    {
        if ($dato == "") {
            $dato = '';
        } else {
            $dato = utf8_encode($dato);
        }

        return $dato;
    }

    public function selectAudienciasBetween($AudienciasDto, $proveedor = null)
    {
        $fechaConsulta = $AudienciasDto->getFechaInicial();
        $audienciasRelacionArray = array();
        $horas = array("00:00", "01:00", "02:00", "03:00", "04:00", "05:00", "06:00", "07:00", "08:00", "09:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00", "19:00", "20:00", "21:00", "22:00", "23:00", "23:59");
        $AudienciasDto = $this->validarAudiencias($AudienciasDto);
        $AudienciasDto->setCveJuzgadoDesahoga($_SESSION["cveAdscripcion"]);

        $AudienciasDao = new AudienciasDAO();
        $AudienciasDto = $AudienciasDao->selectAudienciasBetween($AudienciasDto, $proveedor);

        $cataudienciasDto = new CatAudienciasDTO();
        $cataudienciasDao = new CatAudienciasDAO();
        $cataudienciasDto = $cataudienciasDao->selectcataudiencias($cataudienciasDto, "", $proveedor);

        $tiposcarpetasDto = new TiposCarpetasDTO();
        $tiposcarpetasDao = new TiposCarpetasDAO();
        $tiposcarpetasDto = $tiposcarpetasDao->selecttiposcarpetas($tiposcarpetasDto, "", $proveedor);

        $salasDto = new SalasDTO();
        $salasDao = new SalasDAO();
        $salasDto = $salasDao->selectsalas($salasDto, "", $proveedor);

        $estatusaudienciasDto = new EstatusAudienciasDTO();
        $estatusaudienciasDao = new EstatusAudienciasDAO();
        $estatusaudienciasDto = $estatusaudienciasDao->selectestatusaudiencias($estatusaudienciasDto, "", $proveedor);

        if ($AudienciasDto != "") {
            foreach ($AudienciasDto as $audienciaDto) {
                $audienciasRelacion["parametro"] = "1";
                $audienciasRelacion["idAudiencia"] = $audienciaDto->getIdAudiencia();
                $audienciasRelacion["idSolicitudAudiencia"] = $audienciaDto->getIdSolicitudAudiencia();
                $audienciasRelacion["numero"] = $audienciaDto->getNumero();
                $audienciasRelacion["anio"] = $audienciaDto->getAnio();
                $audienciasRelacion["cveTipoCarpeta"] = $audienciaDto->getCveTipoCarpeta();
                $audienciasRelacion["activo"] = $audienciaDto->getActivo();
                $audienciasRelacion["fechaRegistro"] = $audienciaDto->getFechaRegistro();
                $audienciasRelacion["fechaActualizacion"] = $audienciaDto->getFechaActualizacion();
                $audienciasRelacion["fechaInicial"] = $audienciaDto->getFechaInicial();
                $audienciasRelacion["fechaFinal"] = $audienciaDto->getFechaFinal();
                $audienciasRelacion["cveCatAudiencia"] = $audienciaDto->getCveCatAudiencia();
                $audienciasRelacion["cveJuzgado"] = $audienciaDto->getCveJuzgado();
                $audienciasRelacion["cveJuzgadoDesahoga"] = $audienciaDto->getCveJuzgadoDesahoga();
                $audienciasRelacion["cveAdscripcionSolicita"] = $audienciaDto->getCveAdscripcionSolicita();
                $audienciasRelacion["cveUsuario"] = $audienciaDto->getCveUsuario();
                $audienciasRelacion["idReferencia"] = $audienciaDto->getIdReferencia();
                $audienciasRelacion["detenido"] = $audienciaDto->getDetenido();
                $audienciasRelacion["cveEstatusAudiencia"] = $audienciaDto->getCveEstatusAudiencia();
                $audienciasRelacion["cveSala"] = $audienciaDto->getCveSala();
                $audienciasRelacion["peso"] = $audienciaDto->getPeso();

                for ($index = 0; $index < count($cataudienciasDto); $index ++) {
                    if ($cataudienciasDto[$index]->getCveCatAudiencia() == $audienciaDto->getCveCatAudiencia()) {
                        $audienciasRelacion["cataudiencias"] = array("cveCatAudiencia" => $cataudienciasDto[$index]->getCveCatAudiencia(), "descripcion" => $cataudienciasDto[$index]->getDesCatAudiencia());
                        $tiposaudienciasDto = new TiposAudienciasDTO();
                        $tiposaudienciasDto->setCveTipoAudiencia($cataudienciasDto[$index]->getCveTipoAudiencia());
                        $tiposaudienciasDao = new TiposAudienciasDAO();
                        $tiposaudienciasDto = $tiposaudienciasDao->selecttiposaudiencias($tiposaudienciasDto, "", $this->proveedor);
                        foreach ($tiposaudienciasDto as $keyTipo => $valueTipo) {
                            $audienciasRelacion["tiposaudiencias"] = array("cveTipoAudiencia" => $valueTipo->getCveTipoAudiencia(), "desTipoAudiencia" => $valueTipo->getDesTipoAudiencia());
                        }
                        break;
                    }
                }

                for ($index = 0; $index < count($tiposcarpetasDto); $index ++) {
                    if ($tiposcarpetasDto[$index]->getCveTipoCarpeta() == $audienciaDto->getCveTipoCarpeta()) {
                        $audienciasRelacion["tiposcarpetas"] = array("cveTipoCarpeta" => $tiposcarpetasDto[$index]->getCveTipoCarpeta(), "descripcion" => $tiposcarpetasDto[$index]->getDesTipoCarpeta());
                        break;
                    }
                }

                for ($index = 0; $index < count($salasDto); $index ++) {
                    if ($salasDto[$index]->getCveSala() == $audienciaDto->getCveSala()) {
                        $audienciasRelacion["salas"] = array("cveSala" => $salasDto[$index]->getCveSala(), "descripcion" => $salasDto[$index]->getDesSala());
                        break;
                    }
                }

                for ($index = 0; $index < count($estatusaudienciasDto); $index ++) {
                    if ($estatusaudienciasDto[$index]->getCveEstatusAudiencia() == $audienciaDto->getCveEstatusAudiencia()) {
                        $audienciasRelacion["estatusAudiencia"] = array("cveEstatusAudiencia" => $estatusaudienciasDto[$index]->getCveEstatusAudiencia(), "descripcion" => $estatusaudienciasDto[$index]->getDesEstatusAudiencia());
                        break;
                    }
                }
                $audienciasjuzgadorDto = new AudienciasJuzgadorDTO();
                $audienciasjuzgadorDto->setIdAudiencia($audienciaDto->getIdAudiencia());
                $audienciasjuzgadorDto->setActivo("S");
                $audienciasjuzgadorDao = new AudienciasJuzgadorDAO();
                $audienciasjuzgadorDto = $audienciasjuzgadorDao->selectaudienciasjuzgador($audienciasjuzgadorDto, "", $proveedor);
                foreach ($audienciasjuzgadorDto as $audienciajuzgadorDto) {
                    $audienciasRelacion["audienciaJuzgador"][] = array("idAudienciaJuez" => $audienciajuzgadorDto->getIdAudienciaJuez(), "idJuzgador" => $audienciajuzgadorDto->getIdJuzgador());
                }
                foreach ($audienciasRelacion["audienciaJuzgador"] as $key => $value) {
                    $juzgadoresDto = new JuzgadoresDTO();
                    $juzgadoresDto->setIdJuzgador($value["idJuzgador"]);
                    $juzgadoresDao = new JuzgadoresDAO();
                    $juzgadoresDto = $juzgadoresDao->selectjuzgadores($juzgadoresDto, "", $proveedor);
                    foreach ($juzgadoresDto as $juzgadorDto) {
                        $audienciasRelacion["juzgadores"][] = array("nombre" => utf8_encode($juzgadorDto->getNombre()) . " " . utf8_encode($juzgadorDto->getPaterno()) . " " . utf8_encode($juzgadorDto->getMaterno()));
                    }
                }
                $audienciasRelacionArray[] = $audienciasRelacion;
                $audienciasRelacion["audienciaJuzgador"] = array();
                $audienciasRelacion["juzgadores"] = array();
            }
        }
        $cont = 0;
        $resultados = array();
        foreach ($horas as $key => $val) {
            if ($val != "23:59") {
                $timestamp = strtotime($val) + 60 * 60;
                $val2 = date('H:i', $timestamp);
                if ($val == "23:00") {
                    $val2 = "23:59";
                }
                $f1 = $fechaConsulta . " " . $val;
                $f2 = $fechaConsulta . " " . $val2;
                $t1 = strtotime($f1);
                $t2 = strtotime($f2);
                $resultados[$cont]["horario"] = substr($f1, - 5) . " - " . substr($f2, - 5);
                $resultados[$cont]["data"] = "";
                $cont2 = 0;
                foreach ($audienciasRelacionArray as $keyRelacion => $valueRelacion) {
                    $f3 = $valueRelacion["fechaInicial"];
                    $f4 = $valueRelacion["fechaFinal"];
                    $t3 = strtotime($f3);
                    if (($t3 >= $t1) && ($t3 < $t2)) {
                        $resultados[$cont]["horario"] = substr($f1, - 5) . " - " . substr($f2, - 5);
                        $resultados[$cont]["data"][$cont2] = $valueRelacion;
                        $cont2 ++;
                    }
                }
            }
            $cont ++;
        }
        $resultados = json_encode($resultados);

        return $resultados;
    }

    public function selectAudienciasJuzgador($AudienciasDto, $proveedor = null)
    {
        $fechaConsulta = $AudienciasDto->getFechaInicial();
        $audienciasRelacionArray = array();
        $horas = array("00:00", "01:00", "02:00", "03:00", "04:00", "05:00", "06:00", "07:00", "08:00", "09:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00", "19:00", "20:00", "21:00", "22:00", "23:00", "23:59");
        $AudienciasDto = $this->validarAudiencias($AudienciasDto);

        $audienciasjuzgadorDto = new AudienciasJuzgadorDTO();
        $audienciasjuzgadorDto->setIdJuzgador($AudienciasDto->getvariable());
        $audienciasjuzgadorDto->setActivo("S");
        $audienciasjuzgadorDao = new AudienciasJuzgadorDAO();
        $audienciasjuzgadorDto = $audienciasjuzgadorDao->selectaudienciasjuzgador($audienciasjuzgadorDto, "", $proveedor);
        $audiencias = array();
        if ($audienciasjuzgadorDto != "") {
            foreach ($audienciasjuzgadorDto as $key => $value) {
                $audiencias [] = $value->getIdAudiencia();
            }
        }
        if (count($audiencias) > 0) {
            $AudienciasDto->setvariable(implode(",", $audiencias));
        } else {
            $AudienciasDto->setvariable(0);
        }
        $AudienciasDao = new AudienciasDAO();
        $AudienciasDto = $AudienciasDao->selectAudienciasJuzgador($AudienciasDto, $proveedor);

        $cataudienciasDto = new CatAudienciasDTO();
        $cataudienciasDao = new CatAudienciasDAO();
        $cataudienciasDto = $cataudienciasDao->selectcataudiencias($cataudienciasDto, "", $proveedor);

        $tiposcarpetasDto = new TiposCarpetasDTO();
        $tiposcarpetasDao = new TiposCarpetasDAO();
        $tiposcarpetasDto = $tiposcarpetasDao->selecttiposcarpetas($tiposcarpetasDto, "", $proveedor);

        $salasDto = new SalasDTO();
        $salasDao = new SalasDAO();
        $salasDto = $salasDao->selectsalas($salasDto, "", $proveedor);

        $estatusaudienciasDto = new EstatusAudienciasDTO();
        $estatusaudienciasDao = new EstatusAudienciasDAO();
        $estatusaudienciasDto = $estatusaudienciasDao->selectestatusaudiencias($estatusaudienciasDto, "", $proveedor);

        if ($AudienciasDto != "") {
            foreach ($AudienciasDto as $audienciaDto) {
                $audienciasRelacion["parametro"] = "1";
                $audienciasRelacion["idAudiencia"] = $audienciaDto->getIdAudiencia();
                $audienciasRelacion["idSolicitudAudiencia"] = $audienciaDto->getIdSolicitudAudiencia();
                $audienciasRelacion["numero"] = $audienciaDto->getNumero();
                $audienciasRelacion["anio"] = $audienciaDto->getAnio();
                $audienciasRelacion["cveTipoCarpeta"] = $audienciaDto->getCveTipoCarpeta();
                $audienciasRelacion["activo"] = $audienciaDto->getActivo();
                $audienciasRelacion["fechaRegistro"] = $audienciaDto->getFechaRegistro();
                $audienciasRelacion["fechaActualizacion"] = $audienciaDto->getFechaActualizacion();
                $audienciasRelacion["fechaInicial"] = $audienciaDto->getFechaInicial();
                $audienciasRelacion["fechaFinal"] = $audienciaDto->getFechaFinal();
                $audienciasRelacion["cveCatAudiencia"] = $audienciaDto->getCveCatAudiencia();
                $audienciasRelacion["cveJuzgado"] = $audienciaDto->getCveJuzgado();
                $audienciasRelacion["cveJuzgadoDesahoga"] = $audienciaDto->getCveJuzgadoDesahoga();
                $audienciasRelacion["cveAdscripcionSolicita"] = $audienciaDto->getCveAdscripcionSolicita();
                $audienciasRelacion["cveUsuario"] = $audienciaDto->getCveUsuario();
                $audienciasRelacion["idReferencia"] = $audienciaDto->getIdReferencia();
                $audienciasRelacion["detenido"] = $audienciaDto->getDetenido();
                $audienciasRelacion["cveEstatusAudiencia"] = $audienciaDto->getCveEstatusAudiencia();
                $audienciasRelacion["cveSala"] = $audienciaDto->getCveSala();
                $audienciasRelacion["peso"] = $audienciaDto->getPeso();

                for ($index = 0; $index < count($cataudienciasDto); $index ++) {
                    if ($cataudienciasDto[$index]->getCveCatAudiencia() == $audienciaDto->getCveCatAudiencia()) {
                        $audienciasRelacion["cataudiencias"] = array("cveCatAudiencia" => $cataudienciasDto[$index]->getCveCatAudiencia(), "descripcion" => $cataudienciasDto[$index]->getDesCatAudiencia());
                        $tiposaudienciasDto = new TiposAudienciasDTO();
                        $tiposaudienciasDto->setCveTipoAudiencia($cataudienciasDto[$index]->getCveTipoAudiencia());
                        $tiposaudienciasDao = new TiposAudienciasDAO();
                        $tiposaudienciasDto = $tiposaudienciasDao->selecttiposaudiencias($tiposaudienciasDto, "", $this->proveedor);
                        foreach ($tiposaudienciasDto as $keyTipo => $valueTipo) {
                            $audienciasRelacion["tiposaudiencias"] = array("cveTipoAudiencia" => $valueTipo->getCveTipoAudiencia(), "desTipoAudiencia" => $valueTipo->getDesTipoAudiencia());
                        }
                        break;
                    }
                }

                for ($index = 0; $index < count($tiposcarpetasDto); $index ++) {
                    if ($tiposcarpetasDto[$index]->getCveTipoCarpeta() == $audienciaDto->getCveTipoCarpeta()) {
                        $audienciasRelacion["tiposcarpetas"] = array("cveTipoCarpeta" => $tiposcarpetasDto[$index]->getCveTipoCarpeta(), "descripcion" => $tiposcarpetasDto[$index]->getDesTipoCarpeta());
                        break;
                    }
                }

                for ($index = 0; $index < count($salasDto); $index ++) {
                    if ($salasDto[$index]->getCveSala() == $audienciaDto->getCveSala()) {
                        $audienciasRelacion["salas"] = array("cveSala" => $salasDto[$index]->getCveSala(), "descripcion" => $salasDto[$index]->getDesSala());
                        break;
                    }
                }

                for ($index = 0; $index < count($estatusaudienciasDto); $index ++) {
                    if ($estatusaudienciasDto[$index]->getCveEstatusAudiencia() == $audienciaDto->getCveEstatusAudiencia()) {
                        $audienciasRelacion["estatusAudiencia"] = array("cveEstatusAudiencia" => $estatusaudienciasDto[$index]->getCveEstatusAudiencia(), "descripcion" => $estatusaudienciasDto[$index]->getDesEstatusAudiencia());
                        break;
                    }
                }

                $audienciasjuzgadorDto = new AudienciasJuzgadorDTO();
                $audienciasjuzgadorDto->setIdAudiencia($audienciaDto->getIdAudiencia());
                $audienciasjuzgadorDto->setActivo("S");
                $audienciasjuzgadorDao = new AudienciasJuzgadorDAO();
                $audienciasjuzgadorDto = $audienciasjuzgadorDao->selectaudienciasjuzgador($audienciasjuzgadorDto, "", $proveedor);
                foreach ($audienciasjuzgadorDto as $audienciajuzgadorDto) {
                    $audienciasRelacion["audienciaJuzgador"][] = array("idAudienciaJuez" => $audienciajuzgadorDto->getIdAudienciaJuez(), "idJuzgador" => $audienciajuzgadorDto->getIdJuzgador());
                }
                foreach ($audienciasRelacion["audienciaJuzgador"] as $key => $value) {
                    $juzgadoresDto = new JuzgadoresDTO();
                    $juzgadoresDto->setIdJuzgador($value["idJuzgador"]);
                    $juzgadoresDao = new JuzgadoresDAO();
                    $juzgadoresDto = $juzgadoresDao->selectjuzgadores($juzgadoresDto, "", $proveedor);
                    foreach ($juzgadoresDto as $juzgadorDto) {
                        $audienciasRelacion["juzgadores"][] = array("nombre" => utf8_encode($juzgadorDto->getNombre()) . " " . utf8_encode($juzgadorDto->getPaterno()) . " " . utf8_encode($juzgadorDto->getMaterno()));
                    }
                }
                $audienciasRelacionArray[] = $audienciasRelacion;
                $audienciasRelacion["audienciaJuzgador"] = array();
                $audienciasRelacion["juzgadores"] = array();
            }
        }
        $cont = 0;
        $resultados = array();
        foreach ($horas as $key => $val) {
            if ($val != "23:59") {
                $timestamp = strtotime($val) + 60 * 60;
                $val2 = date('H:i', $timestamp);
                if ($val == "23:00") {
                    $val2 = "23:59";
                }
                $f1 = $fechaConsulta . " " . $val;
                $f2 = $fechaConsulta . " " . $val2;
                $t1 = strtotime($f1);
                $t2 = strtotime($f2);
                $resultados[$cont]["horario"] = substr($f1, - 5) . " - " . substr($f2, - 5);
                $resultados[$cont]["data"] = "";
                $cont2 = 0;
                foreach ($audienciasRelacionArray as $keyRelacion => $valueRelacion) {
                    $f3 = $valueRelacion["fechaInicial"];
                    $f4 = $valueRelacion["fechaFinal"];
                    $t3 = strtotime($f3);
                    if (($t3 >= $t1) && ($t3 < $t2)) {
                        $resultados[$cont]["horario"] = substr($f1, - 5) . " - " . substr($f2, - 5);
                        $resultados[$cont]["data"][$cont2] = $valueRelacion;
                        $cont2 ++;
                    }
                }
            }
            $cont ++;
        }
        $resultados = json_encode($resultados);

        return $resultados;
    }

    public function selectAudienciasSalas($AudienciasDto, $proveedor = null)
    {
        $fechaConsulta = $AudienciasDto->getFechaInicial();
        $audienciasRelacionArray = array();
        $horas = array("00:00", "01:00", "02:00", "03:00", "04:00", "05:00", "06:00", "07:00", "08:00", "09:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00", "19:00", "20:00", "21:00", "22:00", "23:00", "23:59");
        $AudienciasDto = $this->validarAudiencias($AudienciasDto);

        $AudienciasDao = new AudienciasDAO();
        $AudienciasDto = $AudienciasDao->selectAudienciasSalas($AudienciasDto, $proveedor);

        $cataudienciasDto = new CatAudienciasDTO();
        $cataudienciasDao = new CatAudienciasDAO();
        $cataudienciasDto = $cataudienciasDao->selectcataudiencias($cataudienciasDto, "", $proveedor);

        $tiposcarpetasDto = new TiposCarpetasDTO();
        $tiposcarpetasDao = new TiposCarpetasDAO();
        $tiposcarpetasDto = $tiposcarpetasDao->selecttiposcarpetas($tiposcarpetasDto, "", $proveedor);

        $salasDto = new SalasDTO();
        $salasDao = new SalasDAO();
        $salasDto = $salasDao->selectsalas($salasDto, "", $proveedor);

        $estatusaudienciasDto = new EstatusAudienciasDTO();
        $estatusaudienciasDao = new EstatusAudienciasDAO();
        $estatusaudienciasDto = $estatusaudienciasDao->selectestatusaudiencias($estatusaudienciasDto, "", $proveedor);

        if ($AudienciasDto != "") {
            foreach ($AudienciasDto as $audienciaDto) {
                $audienciasRelacion["parametro"] = "1";
                $audienciasRelacion["idAudiencia"] = $audienciaDto->getIdAudiencia();
                $audienciasRelacion["idSolicitudAudiencia"] = $audienciaDto->getIdSolicitudAudiencia();
                $audienciasRelacion["numero"] = $audienciaDto->getNumero();
                $audienciasRelacion["anio"] = $audienciaDto->getAnio();
                $audienciasRelacion["cveTipoCarpeta"] = $audienciaDto->getCveTipoCarpeta();
                $audienciasRelacion["activo"] = $audienciaDto->getActivo();
                $audienciasRelacion["fechaRegistro"] = $audienciaDto->getFechaRegistro();
                $audienciasRelacion["fechaActualizacion"] = $audienciaDto->getFechaActualizacion();
                $audienciasRelacion["fechaInicial"] = $audienciaDto->getFechaInicial();
                $audienciasRelacion["fechaFinal"] = $audienciaDto->getFechaFinal();
                $audienciasRelacion["cveCatAudiencia"] = $audienciaDto->getCveCatAudiencia();
                $audienciasRelacion["cveJuzgado"] = $audienciaDto->getCveJuzgado();
                $audienciasRelacion["cveJuzgadoDesahoga"] = $audienciaDto->getCveJuzgadoDesahoga();
                $audienciasRelacion["cveAdscripcionSolicita"] = $audienciaDto->getCveAdscripcionSolicita();
                $audienciasRelacion["cveUsuario"] = $audienciaDto->getCveUsuario();
                $audienciasRelacion["idReferencia"] = $audienciaDto->getIdReferencia();
                $audienciasRelacion["detenido"] = $audienciaDto->getDetenido();
                $audienciasRelacion["cveEstatusAudiencia"] = $audienciaDto->getCveEstatusAudiencia();
                $audienciasRelacion["cveSala"] = $audienciaDto->getCveSala();
                $audienciasRelacion["peso"] = $audienciaDto->getPeso();

                for ($index = 0; $index < count($cataudienciasDto); $index ++) {
                    if ($cataudienciasDto[$index]->getCveCatAudiencia() == $audienciaDto->getCveCatAudiencia()) {
                        $audienciasRelacion["cataudiencias"] = array("cveCatAudiencia" => $cataudienciasDto[$index]->getCveCatAudiencia(), "descripcion" => $cataudienciasDto[$index]->getDesCatAudiencia());
                        $tiposaudienciasDto = new TiposAudienciasDTO();
                        $tiposaudienciasDto->setCveTipoAudiencia($cataudienciasDto[$index]->getCveTipoAudiencia());
                        $tiposaudienciasDao = new TiposAudienciasDAO();
                        $tiposaudienciasDto = $tiposaudienciasDao->selecttiposaudiencias($tiposaudienciasDto, "", $this->proveedor);
                        foreach ($tiposaudienciasDto as $keyTipo => $valueTipo) {
                            $audienciasRelacion["tiposaudiencias"] = array("cveTipoAudiencia" => $valueTipo->getCveTipoAudiencia(), "desTipoAudiencia" => $valueTipo->getDesTipoAudiencia());
                        }
                        break;
                    }
                }

                for ($index = 0; $index < count($tiposcarpetasDto); $index ++) {
                    if ($tiposcarpetasDto[$index]->getCveTipoCarpeta() == $audienciaDto->getCveTipoCarpeta()) {
                        $audienciasRelacion["tiposcarpetas"] = array("cveTipoCarpeta" => $tiposcarpetasDto[$index]->getCveTipoCarpeta(), "descripcion" => $tiposcarpetasDto[$index]->getDesTipoCarpeta());
                        break;
                    }
                }

                for ($index = 0; $index < count($salasDto); $index ++) {
                    if ($salasDto[$index]->getCveSala() == $audienciaDto->getCveSala()) {
                        $audienciasRelacion["salas"] = array("cveSala" => $salasDto[$index]->getCveSala(), "descripcion" => $salasDto[$index]->getDesSala());
                        break;
                    }
                }

                for ($index = 0; $index < count($estatusaudienciasDto); $index ++) {
                    if ($estatusaudienciasDto[$index]->getCveEstatusAudiencia() == $audienciaDto->getCveEstatusAudiencia()) {
                        $audienciasRelacion["estatusAudiencia"] = array("cveEstatusAudiencia" => $estatusaudienciasDto[$index]->getCveEstatusAudiencia(), "descripcion" => $estatusaudienciasDto[$index]->getDesEstatusAudiencia());
                        break;
                    }
                }

                $audienciasjuzgadorDto = new AudienciasJuzgadorDTO();
                $audienciasjuzgadorDto->setIdAudiencia($audienciaDto->getIdAudiencia());
                $audienciasjuzgadorDto->setActivo("S");
                $audienciasjuzgadorDao = new AudienciasJuzgadorDAO();
                $audienciasjuzgadorDto = $audienciasjuzgadorDao->selectaudienciasjuzgador($audienciasjuzgadorDto, "", $proveedor);
                foreach ($audienciasjuzgadorDto as $audienciajuzgadorDto) {
                    $audienciasRelacion["audienciaJuzgador"][] = array("idAudienciaJuez" => $audienciajuzgadorDto->getIdAudienciaJuez(), "idJuzgador" => $audienciajuzgadorDto->getIdJuzgador());
                }
                foreach ($audienciasRelacion["audienciaJuzgador"] as $key => $value) {
                    $juzgadoresDto = new JuzgadoresDTO();
                    $juzgadoresDto->setIdJuzgador($value["idJuzgador"]);
                    $juzgadoresDao = new JuzgadoresDAO();
                    $juzgadoresDto = $juzgadoresDao->selectjuzgadores($juzgadoresDto, "", $proveedor);
                    foreach ($juzgadoresDto as $juzgadorDto) {
                        $audienciasRelacion["juzgadores"][] = array("nombre" => utf8_encode($juzgadorDto->getNombre()) . " " . utf8_encode($juzgadorDto->getPaterno()) . " " . utf8_encode($juzgadorDto->getMaterno()));
                    }
                }
                $audienciasRelacionArray[] = $audienciasRelacion;
                $audienciasRelacion["audienciaJuzgador"] = array();
                $audienciasRelacion["juzgadores"] = array();
            }
        }
        $cont = 0;
        $resultados = array();
        foreach ($horas as $key => $val) {
            if ($val != "23:59") {
                $timestamp = strtotime($val) + 60 * 60;
                $val2 = date('H:i', $timestamp);
                if ($val == "23:00") {
                    $val2 = "23:59";
                }
                $f1 = $fechaConsulta . " " . $val;
                $f2 = $fechaConsulta . " " . $val2;
                $t1 = strtotime($f1);
                $t2 = strtotime($f2);
                $resultados[$cont]["horario"] = substr($f1, - 5) . " - " . substr($f2, - 5);
                $resultados[$cont]["data"] = "";
                $cont2 = 0;
                foreach ($audienciasRelacionArray as $keyRelacion => $valueRelacion) {
                    $f3 = $valueRelacion["fechaInicial"];
                    $f4 = $valueRelacion["fechaFinal"];
                    $t3 = strtotime($f3);
                    if (($t3 >= $t1) && ($t3 < $t2)) {
                        $resultados[$cont]["horario"] = substr($f1, - 5) . " - " . substr($f2, - 5);
                        $resultados[$cont]["data"][$cont2] = $valueRelacion;
                        $cont2 ++;
                    }
                }
            }
            $cont ++;
        }
        $resultados = json_encode($resultados);

        return $resultados;
    }

    public function insertAudiencias($AudienciasDto, $proveedor = null)
    {
        $AudienciasDto = $this->validarAudiencias($AudienciasDto);
        $AudienciasDao = new AudienciasDAO();
        $AudienciasDto = $AudienciasDao->insertAudiencias($AudienciasDto, $proveedor);

        return $AudienciasDto;
    }

    public function validaCampos($AudienciasDto)
    {
        $validacion = new Validacion();
        $idAudiencia = $validacion->datoTipoRequerido($AudienciasDto->getIdAudiencia());
        $numero = $validacion->datoTipoRequerido($AudienciasDto->getNumero());
        $anio = $validacion->datoTipoRequerido($AudienciasDto->getAnio());
        $cveEstatusAudiencia = $validacion->datoTipoRequerido($AudienciasDto->getCveEstatusAudiencia());
        $cveTipoCarpeta = $validacion->datoTipoRequerido($AudienciasDto->getCveTipoCarpeta());
        $cveJuzgadoDesahoga = $validacion->datoTipoRequerido($AudienciasDto->getCveJuzgadoDesahoga());
        $cveSala = $validacion->datoTipoRequerido($AudienciasDto->getCveSala());
        $cveCatAudiencia = $validacion->datoTipoRequerido($AudienciasDto->getCveCatAudiencia());
        $variable = $validacion->datoTipoRequerido($AudienciasDto->getVariable());
        $juzgadores = preg_split("/[\s,]+/", $AudienciasDto->getVariable());
        $estatus = true;
        $mensaje = [];
        if ($idAudiencia == false) {
            $mensaje["mensaje"] = "Debes elegir un registro";
            $estatus = false;
        } else if ($numero == false) {
            $mensaje["mensaje"] = "El campo Num esta vacio";
            $estatus = false;
        } else if ($anio == false) {
            $mensaje["mensaje"] = "El campo Num esta vacio";
            $estatus = false;
        } else if ($cveEstatusAudiencia == false) {
            $mensaje["mensaje"] = "El campo Estatus esta vacio";
            $estatus = false;
        } else if ($cveTipoCarpeta == false) {
            $mensaje["mensaje"] = "El campo Tipo Carpeta esta vacio";
            $estatus = false;
        } else if ($cveJuzgadoDesahoga == false) {
            $mensaje["mensaje"] = "El campo Deshaogar en esta vacio";
            $estatus = false;
        } else if ($cveSala == false) {
            $mensaje["mensaje"] = "El campo Sala esta vacio";
            $estatus = false;
        } else if ($cveCatAudiencia == false) {
            $mensaje["mensaje"] = "El campo Audiencias esta vacio";
            $estatus = false;
        } else if ($variable == false) {
            $mensaje["mensaje"] = "El campo Juzgador(es) esta vacio";
            $estatus = false;
        } else if (count($juzgadores) == 2) {
            $mensaje["mensaje"] = "Solo debes elegir Uno o Tres Juzgadores";
            $estatus = false;
        } else if (count($juzgadores) > 3) {
            $mensaje["mensaje"] = "Solo debes elegir Uno o Tres Juzgadores";
            $estatus = false;
        }
        if ($estatus == true) {
            $estatus = array("status" => "OK", "totalCount" => "1");
        } else {
            $estatus = array("status" => "Error", "totalCount" => "0");
        }
        $respuesta = array_merge($estatus, array("resultados" => array($mensaje)));

        return $respuesta;
    }

    public function updateAudiencias($AudienciasDto, $proveedor = null)
    {
        $AudienciasDto = $this->validarAudiencias($AudienciasDto);
        $validacion = $this->validaCampos($AudienciasDto);

        $AudienciasDao = new AudienciasDAO();
//$tmpDto = new AudienciasDTO();
//$tmpDto = $AudienciasDao->selectAudiencias($AudienciasDto,$proveedor);
//if($tmpDto!=""){//$AudienciasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $AudienciasDto = $AudienciasDao->updateAudiencias($AudienciasDto, $proveedor);

        return $AudienciasDto;
//}
//return "";
    }

    public function updateAudienciasrelacion($AudienciasDto, $proveedor = null)
    {
        $AudienciasDto = $this->validarAudiencias($AudienciasDto);
        $validaCampos = $this->validaCampos($AudienciasDto);
        $mensaje = [];
        $arrayBorra = array();
        $arrayExiste = array();
        if ($validaCampos["status"] == "Error") {
            exit(json_encode($validaCampos));
        }
        $AudienciasDao = new AudienciasDAO();
        $AudienciasDtoRes = $AudienciasDao->updateAudiencias($AudienciasDto, $proveedor);
        $audienciasjuzgadorDto = new AudienciasJuzgadorDTO();
        $audienciasjuzgadorDto->setIdAudiencia($AudienciasDtoRes[0]->getIdAudiencia());
        $audienciasjuzgadorDto->setActivo("S");
        $audienciasjuzgadorDao = new AudienciasJuzgadorDAO();
        $juzgadores = preg_split("/[\s,]+/", $AudienciasDto->getVariable());
        $juzgadoresArray = array();
        $audienciasjuzgadorDto = $audienciasjuzgadorDao->selectaudienciasjuzgador($audienciasjuzgadorDto, $proveedor);
        foreach ($audienciasjuzgadorDto as $audienciajuzgadorDto) {
            $juzgadoresArray[] = $audienciajuzgadorDto->getIdJuzgador();
        }
        foreach ($juzgadoresArray as $value1) {
            if (in_array($value1, $juzgadores)) {
                $arrayExiste[] = $value1;
            } else {
                $arrayBorra[] = $value1;
            }
        }
        if (count($arrayExiste) > 0) {
            foreach ($arrayExiste as $value2) {
                $pos = array_search($value2, $juzgadores);
                unset($juzgadores[$pos]);
            }
        }
        if (count($arrayBorra) > 0) {
            foreach ($arrayBorra as $value3) {
                $audienciasjuzgadorDto = new AudienciasJuzgadorDTO();
                $audienciasjuzgadorDto->setIdAudiencia($AudienciasDtoRes[0]->getIdAudiencia());
                $audienciasjuzgadorDto->setActivo("S");
                $audienciasjuzgadorDto->setIdJuzgador($value3);
                $audienciasjuzgadorDao = new AudienciasJuzgadorDAO();
                $audienciasjuzgadorDtoRes = $audienciasjuzgadorDao->selectaudienciasjuzgador($audienciasjuzgadorDto, $proveedor);
                $audienciasjuzgadorDtoupdate = new AudienciasJuzgadorDTO();
                $audienciasjuzgadorDtoupdate->setActivo("N");
                $audienciasjuzgadorDtoupdate->setIdAudienciaJuez($audienciasjuzgadorDtoRes[0]->getIdAudienciaJuez());
                $audienciasjuzgadorDao = new AudienciasJuzgadorDAO();
                $audienciasjuzgadorDtoResUpdate = $audienciasjuzgadorDao->updateaudienciasjuzgador($audienciasjuzgadorDtoupdate, $proveedor);
            }
        }
        if (count($juzgadores) > 0) {
            foreach ($juzgadores as $key => $value) {
                $audienciasjuzgadorDto = new AudienciasJuzgadorDTO();
                $audienciasjuzgadorDto->setIdAudiencia($AudienciasDtoRes[0]->getIdAudiencia());
                $audienciasjuzgadorDto->setActivo("S");
                $audienciasjuzgadorDto->setIdJuzgador($value);
                $audienciasjuzgadorDto->setCveFuncionJuzgador(1);
                $audienciasjuzgadorDao = new AudienciasJuzgadorDAO();
                $audienciasjuzgadorDto = $audienciasjuzgadorDao->insertaudienciasjuzgador($audienciasjuzgadorDto, $proveedor);
            }
        }
        $mensaje["mensaje"] = "SE ACTUALIZO CORRECTAMENTE EL REGISTRO";
        $estatus = array("status" => "OK", "totalCount" => "1");
        $respuesta = array_merge($estatus, array("resultados" => array($mensaje)));

        return json_encode($respuesta);
    }

    public function deleteAudiencias($AudienciasDto, $proveedor = null)
    {
        $AudienciasDto = $this->validarAudiencias($AudienciasDto);
        $AudienciasDao = new AudienciasDAO();
        $AudienciasDto = $AudienciasDao->deleteAudiencias($AudienciasDto, $proveedor);

        return $AudienciasDto;
    }

    public function asignarAudienciaManual($AudienciasDto, $extra, $proveedor = null)
    {
        $idSolicitudAudiencia = $AudienciasDto->getIdSolicitudAudiencia();
        $cveSala = $AudienciasDto->getCveSala();

        $response = [];

        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        $this->proveedor->execute('BEGIN');

        try {

            //valida el request

            if ($extra->fechaAudiencia == '') {
                throw new Exception('*La fecha/hora de la audiencia es requerida');
            }

            if ($extra->cveSala == '') {
                throw new Exception('*La sala es requerida');
            }

            if ($extra->tribunal_por_ejercicio == 'no') {

                if ($extra->juezTribunal == '')
                    throw new Exception('* Tienes que seleccionar el juez');
            } else if ($extra->tribunal_por_ejercicio == 'si') {

                $count = 0;

                if ($extra->juez1 != '') {
                    $count ++;
                }
                if ($extra->juez2 != '') {
                    $count ++;
                }
                if ($extra->juez3 != '') {
                    $count ++;
                }

                if ($count == 0) {
                    throw new Exception('*Debes de seleccionar al menos 1 juez');
                }
                if ($count == 2) {
                    throw new Exception('*Sólo debe haber 1 o 3 jueces, no 2.');
                }

                if ($extra->juez1 != '') {
                    if (($extra->juez1 == $extra->juez2) || ($extra->juez1 == $extra->juez3)) {
                        throw new Exception('*verifica que el juez 1 no este repetido');
                    }
                }

                if ($extra->juez2 != '') {
                    if (($extra->juez2 == $extra->juez1) || ($extra->juez2 == $extra->juez3)) {
                        throw new Exception('*verifica que el juez 2 no este repetido');
                    }
                }

                if ($extra->juez3 != '') {
                    if (($extra->juez3 == $extra->juez1) || ($extra->juez3 == $extra->juez2)) {
                        throw new Exception('*verifica que el juez 3 no este repetido');
                    }
                }
            }


            $solicitudAudienciaDto = new SolicitudesaudienciasDTO();
            $solicitudAudienciaDao = new SolicitudesaudienciasDAO();

            $solicitudAudienciaDto->setIdSolicitudAudiencia($idSolicitudAudiencia);
            $solicitudAudienciaDto->setActivo('S');

            $selectSolicitudAudiencia = $solicitudAudienciaDao->selectSolicitudesaudiencias($solicitudAudienciaDto, '', '', $this->proveedor);

            if ($selectSolicitudAudiencia == '') {
                throw new Exception('la solicitud de audiencia con id ' . $idSolicitudAudiencia . ' no existe');
            }

            if ($selectSolicitudAudiencia[0]->getCveEstatusSolicitud() == 2) {
                throw new Exception('La solicitud ya se encuentra enviada');
            }

            if ($selectSolicitudAudiencia[0]->getCveEstatusSolicitud() == 3) {
                throw new Exception('La solicitud se encuentra cancelada');
            }


            $audienciaDto = new AudienciasDTO();
            $audienciasDao = new AudienciasDAO();

            $audienciaDto->setIdSolicitudAudiencia($idSolicitudAudiencia);
            $audienciaDto->setActivo('S');

            $getAudienciaByIdSolicitudAudiencia = $audienciasDao->selectAudiencias($audienciaDto, '', $this->proveedor);

            if ($getAudienciaByIdSolicitudAudiencia != '') {
                throw new Exception('* Esta solicitud de audiencia ya tiene una audiencia asignada.');
            }


            $solicitudAudiencia = $selectSolicitudAudiencia[0]->toString();

            //obtener la fecha final de la audiencia
            $catAudienciasDto = new CataudienciasDTO();
            $catAudienciasDao = new CataudienciasDAO();
            $catAudienciasDto->setCveCatAudiencia($solicitudAudiencia['cveCatAudiencia']);
            $getCatAudiencia = $catAudienciasDao->selectCataudiencias($catAudienciasDto);

            if ($getCatAudiencia == '') {
                throw new Exception('No se encontro la categoria de audiencia con id = ' . $solicitudAudiencia['cveCatAudiencia'] . ' para calcular la fecha de fin de la audiencia');
            }


            $cveJuzgado = $solicitudAudiencia['cveJuzgado'];

            $juzgadoAudienciaDao = new JuzgadosDAO();
            $juzgadoAudienciaDto = new JuzgadosDTO();

            $juzgadoAudienciaDto->setActivo('S');
            $juzgadoAudienciaDto->setCveJuzgado($cveJuzgado);

            $getJuzgadoAudiencia = $juzgadoAudienciaDao->selectJuzgados($juzgadoAudienciaDto, '', $this->proveedor);

            if ($getJuzgadoAudiencia == '')
                throw new Exception('No se encontró el juzgado de la solicitud de audiencia');

            $cveDistritoJuzgado = $getJuzgadoAudiencia[0]->getCveDistrito();

            /*
             * obtenemos la duracion maxima de la audiencia por el distrito y cat de la audiencia
             */

            $audienciasDistritosDao = new AudienciasdistritosDAO();
            $audienciasDistritosDto = new AudienciasdistritosDTO();

            $audienciasDistritosDto->setActivo('S');
            $audienciasDistritosDto->setCveDistrito($cveDistritoJuzgado);
            $audienciasDistritosDto->setCveCatAudiencia($solicitudAudiencia['cveCatAudiencia']);

            $getAudienciaDistrito = $audienciasDistritosDao->selectAudienciasdistritos($audienciasDistritosDto, '', $this->proveedor);

            if ($getAudienciaDistrito == '')
                throw new Exception('No se pudo obtener la audiencia del distrito para obtener la duracion maxima de la audiencia');


            $maxDuracionMinutos = $getAudienciaDistrito[0]->getMaxDuracion();

            /*
             *
             */


            //$maxDuracionMinutos = $getCatAudiencia[0]->getMaxDuracion();

            $fechaAudiencia = date($extra->fechaAudiencia);

            $date = str_replace('/', '-', $fechaAudiencia);
            $fechaAudiencia = date('Y-m-d H:i', strtotime($date));

            $fechaInicio = strtotime($fechaAudiencia);

            $fechaFin = date("Y-m-d H:i", strtotime("+$maxDuracionMinutos minutes", $fechaInicio));

            /*
             * termina calcular la fecha y hora final de la audiencia
             */

            $detenido = '';

            switch ($solicitudAudiencia['cveConsignacion']) {
                case 1:
                    $detenido = 'S';
                    break;
                case 2:
                    $detenido = 'N';
                    break;
                case 3:
                    $detenido = 'M';
                    break;
            }

            /*
             * se crea la carpeta judicial a partir de la audiencia
             */
            $carpetaJudicialService = new CarpetasjudicialesService();
            $responseCrearCarpeta = $carpetaJudicialService->generarCarpetaDesdeSolicitud($idSolicitudAudiencia, $this->proveedor, $extra->imputadosReclusos);

            if ($responseCrearCarpeta['estatus'] == "error") {
                throw new Exception('no se pudo generar la carpeta judicial para la solicitud enviada.');
            }

            $cveTipoCarpeta = $responseCrearCarpeta['data'][0]->getcveTipoCarpeta();
            $numero = $responseCrearCarpeta['data'][0]->getNumero();
            $anio = $responseCrearCarpeta['data'][0]->getAnio();
            $ponderacion = $carpetaJudicialService->getPonderacion($idSolicitudAudiencia, $this->proveedor);
            $id_referencia = $responseCrearCarpeta['data'][0]->getIdReferencia();


            /*
             * obtener el juzgado
             */
            /*
             * tipos carpetas
             *  1	NUMERO AUXILIAR	S	2015-09-11 12:14:27	2015-09-11 12:14:27
                2	CAUSA DE CONTROL	S	2015-09-11 12:14:27	2015-09-11 12:14:27
                3	CAUSA DE JUICIO	S	2015-09-11 12:14:27	2015-09-11 12:14:27
                4	CAUSA DE TRIBUNAL	S	2015-09-11 12:14:27	2015-09-11 12:14:27
                5	EXPEDIENTE	S	2015-09-11 12:14:27	2015-09-11 12:14:27
                6	TOCA	S	2015-09-11 12:14:27	2015-09-11 12:14:27
                7	EXHORTO	S	2015-10-22 10:44:02	2015-10-22 10:44:02
                8	AMPARO	S	2015-11-19 16:34:03	2015-11-19 16:34:03
                9	CATEO	S	2015-11-19 16:34:03	2015-11-19 16:34:03
                10	ORDEN DE APREHENSION	S	2015-11-19 16:34:03	2015-11-19 16:34:03
                11	TOMA DE MUESTRAS	S	2016-04-27 18:34:03	2016-04-27 18:34:03
                13	APELACION CATEO	S	2016-05-17 13:27:47	2016-05-17 13:27:47
                14	ACUERDO APELACION	S	2016-05-17 13:27:47	2016-05-17 13:27:47
                15	RESOLUCION APELACION	S	2016-05-17 13:27:47	2016-05-17 13:27:47
             */
            //tipos jusgados
            /*
             * 1	CONTROL	S	2015-09-11 11:47:02	2015-09-11 11:47:02
               2	JUICIO	S	2015-09-11 11:47:02	2015-09-11 11:47:02
               3	EJECUCION	S	2015-09-11 11:47:02	2015-09-11 11:47:02
               4	TRINUNAL	S	2015-09-11 11:47:02	2015-09-11 11:47:02
               5	SALA	S	2015-09-11 12:01:06	2015-09-11 12:01:06
             */

            if ($cveTipoCarpeta == 1 || $cveTipoCarpeta == 2) {
                $tipoJuzgado = 1;
            } else if ($cveTipoCarpeta == 3) {
                $tipoJuzgado = 2;
            } else if ($cveTipoCarpeta == 4) {
                $tipoJuzgado = 4;
            } else if ($cveTipoCarpeta == 5) {
                $tipoJuzgado = 3;
            } else if ($cveTipoCarpeta == 6) {
                $tipoJuzgado = 5;
            } else {
                $tipoJuzgado = 1;
            }


            $getJuzgado = $this->getJuzgado($solicitudAudiencia['cveJuzgado'], $tipoJuzgado, $this->proveedor);
            if ($getJuzgado['estatus'] == 'error') throw new Exception($getJuzgado['mensaje']);
            $cveJuzgado = $getJuzgado['data'];


            /*
             *
             */

            //$audienciaDto->setIdSolicitudAudiencia($solicitudAudiencia['idSolicitudAudiencia']);
            //$audienciaDto->setNumero($solicitudAudiencia['numero']);
            $audienciaDto->setNumero($numero);
            //$audienciaDto->setAnio($solicitudAudiencia['anio']);
            $audienciaDto->setAnio($anio);
            //$audienciaDto->setCveTipoCarpeta($solicitudAudiencia['cveTipoCarpeta']);
            $audienciaDto->setCveTipoCarpeta($cveTipoCarpeta);
            $audienciaDto->setActivo('S');
            $audienciaDto->setFechaInicial($fechaAudiencia);
            $audienciaDto->setFechaFinal($fechaFin);
            $audienciaDto->setCveCatAudiencia($solicitudAudiencia['cveCatAudiencia']);
            $audienciaDto->setCveJuzgado($cveJuzgado);
            $audienciaDto->setCveJuzgadoDesahoga($cveJuzgado);
            $audienciaDto->setCveAdscripcionSolicita($solicitudAudiencia['cveAdscripcionSolicita']);
            $audienciaDto->setCveUsuario($solicitudAudiencia['cveUsuario']);
            //$audienciaDto->setIdReferencia($solicitudAudiencia['idReferencia']);
            $audienciaDto->setIdReferencia($id_referencia);
            $audienciaDto->setDetenido($detenido);
            $audienciaDto->setCveEstatusAudiencia(1);
            $audienciaDto->setCveSala($cveSala);
            $audienciaDto->setPeso($ponderacion);

            $insertarAudiencia = $audienciasDao->insertAudiencias($audienciaDto, $this->proveedor);

            if ($insertarAudiencia == '') {
                throw new Exception('no se pudo guardar la asignacion de audiencia a la solicitud, intenta nuevamente.');
            }

            $idAudiencia = $insertarAudiencia[0]->getIdAudiencia();


            /*
             * insertamos el id de la audiencia en los autos de apertura a juicio
             */
            $modificarAudienciaAperturaJuicioResponse = $carpetaJudicialService->modificarAudienciaAperturasJuicio($idAudiencia, $this->proveedor);
            if ($modificarAudienciaAperturaJuicioResponse['estatus'] == 'error') {
                throw new Exception('ocurrio un error al insertar la audiencia en el auto de apertura a juicio de alguno de los imputados');
            }
            /*
             * insertar en aperturas juicio el id de la audiencia si se encontraron resultados de imputados
             */

            /*
             * insertar jueces en tabla audienciasjuzgadores
             */
            if ($extra->tribunal_por_ejercicio == 'si') {

                $cveEtapaProcesal = $solicitudAudiencia['cveEtapaProcesal'];

                for ($i = 1; $i <= 3; $i ++) {
                    $juez = 'juez' . $i;
                    if ($extra->$juez != '') {

                        $funcionJuzgador = '';

                        if ($cveEtapaProcesal == '6') {

                            switch ($i) {
                                case '1':
                                    $funcionJuzgador = '8';
                                    break;
                                case '2':
                                    $funcionJuzgador = '9';
                                    break;
                                case '3':
                                    $funcionJuzgador = '10';
                                    break;
                            }
                        } else {

                            switch ($i) {
                                case '1':
                                    $funcionJuzgador = '4';
                                    break;
                                case '2':
                                    $funcionJuzgador = '5';
                                    break;
                                case '3':
                                    $funcionJuzgador = '6';
                                    break;
                            }
                        }


                        $audienciaJuzgadorDto = new AudienciasjuzgadorDTO();
                        $audienciaJuzgadorDao = new AudienciasjuzgadorDAO();

                        $audienciaJuzgadorDto->setIdAudiencia($idAudiencia);
                        $audienciaJuzgadorDto->setIdJuzgador($extra->$juez);
                        $audienciaJuzgadorDto->setCveFuncionJuzgador($funcionJuzgador);
                        $audienciaJuzgadorDto->setActivo('S');

                        $insertAudienciaJuzgador = $audienciaJuzgadorDao->insertAudienciasjuzgador($audienciaJuzgadorDto, $this->proveedor);

                        if ($insertAudienciaJuzgador == '') {
                            throw new Exception('No se pudo insertar un juez, intenta nuevamente.');
                        }
                    }
                }
            } else if ($extra->tribunal_por_ejercicio == 'no') {

                $cveEtapaProcesal = $solicitudAudiencia['cveEtapaProcesal'];

                switch ($cveEtapaProcesal) {
                    case '3':
                        $funcionJuzgador = '2';
                        break;
                    case '4':
                        $funcionJuzgador = '3';
                        break;
                    case '6':
                        $funcionJuzgador = '7';
                        break;
                    default:
                        $funcionJuzgador = '1';
                        break;
                }

                $audienciaJuzgadorDto = new AudienciasjuzgadorDTO();
                $audienciaJuzgadorDao = new AudienciasjuzgadorDAO();

                $audienciaJuzgadorDto->setIdAudiencia($idAudiencia);
                $audienciaJuzgadorDto->setIdJuzgador($extra->juezTribunal);
                $audienciaJuzgadorDto->setCveFuncionJuzgador($funcionJuzgador);
                $audienciaJuzgadorDto->setActivo('S');

                $insertAudienciaJuzgador = $audienciaJuzgadorDao->insertAudienciasjuzgador($audienciaJuzgadorDto, $this->proveedor);

                if ($insertAudienciaJuzgador == '') {
                    throw new Exception('No se pudo insertar el juez, intenta nuevamente.');
                }
            }


            /*
             * se cambia el estatus de la audiencia
             */

            $solicitudAudienciaDto = new SolicitudesaudienciasDTO();
            $solicitudAudienciaDao = new SolicitudesaudienciasDAO();


            /*
             * obtiene la fecha-hora actual del sistema mysql
             */
            $this->proveedor->execute("SELECT NOW() AS FechaActual");
            if (!$this->proveedor->error()) {
                if ($this->proveedor->rows($this->proveedor->stmt) > 0) {
                    while ($row = $this->proveedor->fetch_array($this->proveedor->stmt, 0)) {
                        $fechaActual = $row['FechaActual'];
                    }
                } else {
                    $fechaActual = "";
                }
            }


            $solicitudAudienciaDto->setIdSolicitudAudiencia($idSolicitudAudiencia);
            $solicitudAudienciaDto->setFechaEnvio($fechaActual);
            $solicitudAudienciaDto->setCveEstatusSolicitud(2);

            $updateEstatusSolicitudAudiencia = $solicitudAudienciaDao->updateSolicitudesaudiencias($solicitudAudienciaDto, $this->proveedor);

            if ($updateEstatusSolicitudAudiencia == '') {
                throw new Exception('No se pud&oacute; actualizar el estatus de la solicitud a Enviada');
            }

            /*
             * termina de insertar los jueces
             */
            $response = [
                'estatus' => 'ok',
                'mensaje' => 'La audiencia se guardo correctamente.'
            ];

            $this->proveedor->execute('COMMIT');

        } catch (Exception $e) {
            $this->proveedor->execute('ROLLBACK');
            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;
    }

    public function getJuzgado($cveJuzgado, $cveTipoJuzgado, $proveedor)
    {
        try {

            $juzgadoDto = new JuzgadosDTO();
            $juzgadoDao = new JuzgadosDAO();

            $juzgadoDto->setCveJuzgado($cveJuzgado);
            $juzgadoDto->setActivo('S');

            $selectJuzgadoById = $juzgadoDao->selectJuzgados($juzgadoDto, '', $proveedor);

            if ($selectJuzgadoById == '') throw new Exception('no se encontró el juzgado con la clave: ' . $cveJuzgado);

            $distritoJuzgado = $selectJuzgadoById[0]->getCveDistrito();

            $juzgadoDto->setCveJuzgado('');
            $juzgadoDto->setCveTipojuzgado($cveTipoJuzgado);
            $juzgadoDto->setCveDistrito($distritoJuzgado);
            $juzgadoDto->setActivo('S');

            $selectJuzgadosByDistrito = $juzgadoDao->selectJuzgados($juzgadoDto, '', $proveedor);

            if ($selectJuzgadosByDistrito == '') throw new Exception('no se encontraron juzgados con el distrito : ' . $distritoJuzgado . ' y el tipo de juzgado:' . $cveTipoJuzgado);

            $cveJuzgado = $selectJuzgadosByDistrito[0]->getCveJuzgado();

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'el juzgado se obtuvo correctamente',
                'data'    => $cveJuzgado
            ];

        } catch (Exception $e) {
            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage() . ' linea(' . $e->getLine() . ')'
            ];
        }

        return $response;


    }

    public function consultaAudienciasSimples($audienciasDto = '')
    {
        $resultado = "";
        $respuesta = "";

        $param = array();

        $fechaIn = $audienciasDto->getFechaInicial();

        $horas = "23:59:59";
        $hoy = date("Y-m-d");


        $fechaManana = strtotime('+1 day', strtotime($hoy));
        $fechaManana = date('Y-m-d', $fechaManana);

        if ($fechaIn == $fechaManana) {
            $horas = date('H:i:s');
        }

        $fechaInicial = $fechaIn . " 00:00:00";
        $fechaFinal = $fechaIn . " " . $horas;


        //$audienciasController = new AudienciasController();
        $carpetaJudicialesController = new CarpetasjudicialesController();
        $salasCOntroller = new SalasController();
        $imputadosController = new ImputadoscarpetasController();
//        $defensoresController = new DefensoresimputadoscarpetasController();
        $catAudienciasController = new CataudienciasController();
        $juzgadosController = new JuzgadosController();
        $tiposcarpetaController = new TiposcarpetasController();
        $defensoresController = new DefensoresimputadossolicitudesController();

        $audienciasDto->setActivo("S");


        $carpetasjudicialesDto = new CarpetasjudicialesDTO();
        $salasDto = new SalasDTO();
        $imputadosDto = new ImputadoscarpetasDTO();
//        $defensoresDto = new DefensoresimputadoscarpetasDTO();
        $defensoresDto = new DefensoresimputadossolicitudesDTO();
        $catAudienciasDto = new CataudienciasDTO();
        $juzgadosDto = new JuzgadosDTO();

        $tiposcarpetasDto = new TiposcarpetasDTO();

        $cveJuzgado = $_SESSION["cveAdscripcion"];
        error_log(print_r($audienciasDto, true));
        $audienciasDto->setCveJuzgado("");
        $juzgadosDto->setCveJuzgado($cveJuzgado);

        $juzgado = $this->selectJuzgadosDistrito($juzgadosDto);
        if ($juzgado != "") {
//            $juzgado = json_decode($juzgado, true);
            $juzgados = $juzgado;
        }

        $orden = "AND fechaInicial>='" . $fechaInicial . "' AND fechaInicial<='" . $fechaFinal . "' ";
        error_log(print_r($juzgados, true));
        $cadena = "";
        foreach ($juzgados as $juzgado) {
            $cadena .= "," . $juzgado->getCveJuzgado();
        }

        $cadena = substr($cadena, 1);


        $orden .= " AND cveJuzgadoDesahoga in (" . $cadena . ")  ORDER BY fechaInicial ASC";
        $audienciasDto = $this->selectAudiencias($audienciasDto, null, $orden);


        if ($audienciasDto != "") {
            $resultado = array();


            //Obtener ubicacion de ususario
//            $juzgado = $juzgadosController->selectJuzgados($juzgadosDto);
            if ($juzgado != "") {
                $cveEdificio = $juzgados[0]->getCveEdificio();
            } else {
                echo "No se encontaron registros de Juzgados";
            }

            // Obtenemos el nombre de la sala
            $salasDto->setCveEdificio($cveEdificio);
            $salasDto->setActivo("S");
            $salas = $salasCOntroller->selectSalas($salasDto);

            //Obtenemos la tabla  descripcion de la audiencia
            $catAudienciasDto->setActivo("S");
            $catAudiencias = $catAudienciasController->selectCataudiencias($catAudienciasDto);


            foreach ($audienciasDto as $audiencia) {
                $descSala = "SIN SALA";
                if ($salas != "") {
                    foreach ($salas as $sala) {
                        if ($sala->getCveSala() == $audiencia->getCveSala()) {
                            $descSala = $sala->getDesSala();
                            break;
                        }
                    }
                } else {
                    $descSala = "No se encontraron Salas asignadas";
                }
                $cveJuzgado = $audiencia->getCveJuzgado();
                $juzgadosDto->setCveJuzgado($cveJuzgado);
                $juzgados = $juzgadosController->selectJuzgados($juzgadosDto);
                if ($juzgados != "") {
                    foreach ($juzgados as $juzgado) {
                        $cveDistrito = $juzgado->getCveDistrito();

                        $distritosDTO = new DistritosDTO();
                        $distritosDTO->setCveDistrito($cveDistrito);
                        $distritosDAO = new DistritosDAO();
                        $distritos = $distritosDAO->selectDistritos($distritosDTO);

                        if ($distritos != "") {
                            foreach ($distritos as $distrito) {
                                if ($juzgado->getCveDistrito() == $distrito->getCveDistrito()) {
                                    $desDistrito = $distrito->getdesDistrito();
                                }
                            }
                        }
                    }
                }
                // Obtenemos el numero de causa de tabla obtenida anteriormente
                $carpetasjudicialesDto->setIdCarpetaJudicial($audiencia->getIdReferencia());
                $carpetasjudicialesDto->setActivo("S");
                $carpetaJudicial = $carpetaJudicialesController->selectCarpetasjudiciales($carpetasjudicialesDto);

                //Obtenemos catalogo de tipos de carpetas
                $tiposcarpetasDto->setActivo("S");
                $tipos = $tiposcarpetaController->selectTiposcarpetas($tiposcarpetasDto);


                $numeroCausa = "";
                $anioCausa = "";
                $recuperaCarpeta = "";
                $tipo = "";
                $desCausa = "";

                foreach ($tipos as $tipo) {
                    if ($audiencia->getcveTipoCarpeta() == $tipo->getcveTipoCarpeta()) {
                        $desCausa = $tipo->getdesTipoCarpeta();
                        break;
                    }
                }
                if ($carpetaJudicial != "") {
                    //print_r("entra al if");
                    foreach ($carpetaJudicial as $recuperaCarpeta) {
                        $numeroCausa = $recuperaCarpeta->getNumero();
                        $anioCausa = $recuperaCarpeta->getAnio();
//                        foreach ($tipos as $tipo) {
//                            if ($recuperaCarpeta->getcveTipoCarpeta() == $tipo->getcveTipoCarpeta()) {
//                                $desCausa = $tipo->getdesTipoCarpeta();
//                                break;
//                            }
//                        }
                        break;
                    }
                } else {
                    $numeroCausa = "No se encontro numero de Causa";
                    $anioCausa = utf8_encode("No se encontro a&ntilde;o de Causa");
                }


                //Obtener Hora Inicial y fnal
                $fechaInicial = $audiencia->getFechaInicial();
                $horaAudiencias = explode(" ", $fechaInicial);
                //print_r($horaAudiencias);
                $fcehaFinal = $audiencia->getFechaFinal();
                $horaAudienciasFin = explode(" ", $fcehaFinal);

                $desCatAudiencia = "";
                if ($catAudiencias != "") {
                    foreach ($catAudiencias as $catAudiencia) {
                        if ($catAudiencia->getCveCatAudiencia() == $audiencia->getCveCatAudiencia()) {
                            $desCatAudiencia = utf8_encode($catAudiencia->getDesCatAudiencia());
                            break;
                        }
                    }
                }


//                //Obtenemos tabla Nombre, Paterno, Materno de Imputados
//                $imputadosDto->setIdCarpetaJudicial($carpetasjudicialesDto->getIdCarpetaJudicial());
//                $imputadosDto->setActivo("S");
//                $imputados = $imputadosController->selectImputadoscarpetas($imputadosDto);
//
//                $nombreCompletoImputadosDefensores = " SIN IMPUTADOS";
//
//                $imputado = "";
//                $nombre = "";
//                $paterno = "";
//                $materno = "";
//                if ($imputados != "") {
//                    $nombreCompletoImputadosDefensores = "";
//                    foreach ($imputados as $imputado) {
//                        if ($imputado->getNombre() == "") {
//                            $nombre = utf8_encode($imputado->getNombreMoral());
//                        } else {
//                            $nombre = utf8_encode($imputado->getNombre());
//                        }
//                        $paterno = utf8_encode($imputado->getPaterno());
//                        $materno = utf8_encode($imputado->getMaterno());
//
//                        //Obtenemos nombre de defensores
//                        $defensoresDto->setIdImputadoCarpeta($imputado->getIdImputadoCarpeta());
//                        $defensoresDto->setActivo("S");
//                        $defensores = $defensoresController->selectDefensoresimputadoscarpetas($defensoresDto);
//
//                        $defensor = "";
//                        if ($defensores != "") {
//                            foreach ($defensores as $defensoresNombre) {
//
//                                $defensor = utf8_encode($defensoresNombre->getnombre());
//
//                                $nombreCompletoImputadosDefensores .= $nombre . " " . $paterno . " " . $materno . "   ( Def:" . $defensor . ")<br>";
//
//                                //break;
//                            }
//                        }
//                        //break;
//                    }
//                }
                //obtenemos a los imputados de la audiencia
                $imputadosSoliciudesDao = new ImputadossolicitudesDAO();
                $imputadosSoliciudesDto = new ImputadossolicitudesDTO();
                $imputadosSoliciudesDto->setActivo("S");
                $imputadosSoliciudesDto->setIdSolicitudAudiencia($audiencia->getIdSolicitudAudiencia());
                $imputadosSoliciudes = $imputadosSoliciudesDao->selectImputadossolicitudes($imputadosSoliciudesDto);
                $nombreCompletoImputadosDefensores = "";
                if ($imputadosSoliciudes != "") {

                    foreach ($imputadosSoliciudes as $imputadoSolicitud) {
//                        error_log(print_r($imputadoSolicitud, true));

                        if ($imputadoSolicitud->getNombre() == "") {
                            $nombre = utf8_encode($imputadoSolicitud->getNombreMoral());
                        } else {
                            $nombre = utf8_encode($imputadoSolicitud->getNombre());
                        }
                        $paterno = utf8_encode($imputadoSolicitud->getPaterno());
                        $materno = utf8_encode($imputadoSolicitud->getMaterno());
                        $nombreCompletoImputadosDefensores .= $nombre . " " . $paterno . " " . $materno;
                        //Obtenemos nombre de defensores
//                        $defensoresDto->setIdImputadoCarpeta($imputadoSolicitud->getIdImputadoCarpeta());
                        $defensoresDto->setIdImputadoSolicitud($imputadoSolicitud->getIdImputadoSolicitud());
                        $defensoresDto->setActivo("S");
                        $defensores = $defensoresController->selectDefensoresimputadossolicitudes($defensoresDto);
                        $defensor = "";
//                        error_log(print_r($defensores,true));
                        if ($defensores != "") {

                            foreach ($defensores as $defensoresNombre) {
                                $defensor = utf8_encode($defensoresNombre->getnombre());

                                $nombreCompletoImputadosDefensores .= "   ( Def:" . $defensor . ")";

                                //break;
                            }
                        }
                        $nombreCompletoImputadosDefensores .= "<br>";
                    }
                } else {
                    $nombreCompletoImputadosDefensores = "SIN IMPUTADOS";
                }
                $horaAudiencia = explode(":", $horaAudiencias[1]);
                $horaAudienciaFin = explode(":", $horaAudienciasFin[1]);


                $registro = array("horaAudiencia"                     => $horaAudiencia[0] . ":" . $horaAudiencia[1],
                                  "horaAudienciasFin"                 => ($horaAudienciaFin[0] . ":" . $horaAudienciaFin[1]),
                                  "desCatAudiencia"                   => utf8_encode($desCatAudiencia),
                                  "nuemeroCausa"                      => $numeroCausa,
                                  "anioCausa"                         => $anioCausa,
                                  "desSala"                           => utf8_encode($descSala),
                                  "nombreCompletoImputadosDefensores" => ($nombreCompletoImputadosDefensores),
                                  "desDistrito"                       => $desDistrito,
                                  "desCausa"                          => utf8_encode($desCausa));
                array_push($resultado, $registro);
            }// fin foreach
            $respuesta = array("totalCount" => count($resultado), "datos" => $resultado, "estatus" => "ok", "mensaje" => "Registros Encontrados");
        } else {
            $respuesta = array("totalCount" => "0", "datos" => "", "estatus" => "error", "mensaje" => "No Hay Registros Correspondientes");
        }

        return $respuesta;
    }

    public function consultaAudienciasDistrito($audienciasDto = '', $cveDistrito = '')
    {

        $resultado = "";
        $respuesta = "";
        $desDistrito = "";
        $resultado = array();


        ////////////////////////MANIPULACION DE FECHAS/////////////////////////////////////////////

        $fechaIn = $audienciasDto->getFechaInicial();

        $proveedor = new Proveedor("mysql", "sigejupe");
        $proveedor->connect();

        $fechaActual = $proveedor->getfechaActual();

        $fechaDeBase = explode(" ", $fechaActual);
        $fechaActualBD = $fechaDeBase[0];
        $horas = $fechaDeBase[1];

        $diaDespuesBD = strtotime('+1 day', strtotime($fechaActualBD));
        $diaDespues = date('Y-m-d', $diaDespuesBD);

        $fechaSeleccionada = $fechaIn;

        $fechaDespues = $diaDespues;
        $fechaBD = $fechaActualBD;

        //print_r($fechaBD);
        //$audienciasController = new AudienciasController();
        $juzgadosControler = new JuzgadosController();
        $catAudienciasController = new CataudienciasController();
        $salasCOntroller = new SalasController();
        $carpetaJudicialesController = new CarpetasjudicialesController();
        $imputadosController = new ImputadoscarpetasController();
        $defensoresController = new DefensoresimputadossolicitudesController();
//        $defensoresController = new DefensoresimputadoscarpetasController();
        $naturalezaController = new NaturalezasController();
        $estatusAudienciasController = new EstatusaudienciasController();
        $tiposcarpetaController = new TiposcarpetasController();


        $catAudienciasDto = new CataudienciasDTO();
        $audienciasDto = new AudienciasDTO();
        $juzgadosDto = new JuzgadosDTO();
        $salasDto = new SalasDTO();
        $carpetasjudicialesDto = new CarpetasjudicialesDTO();
        $imputadosDto = new ImputadoscarpetasDTO();
//        $defensoresDto = new DefensoresimputadoscarpetasDTO();
        $defensoresDto = new DefensoresimputadossolicitudesDTO();
        $naturalezaDto = new NaturalezasDTO();
        $estatusAudienciasDto = new EstatusaudienciasDTO();
        $tiposcarpetasDto = new TiposcarpetasDTO();
        $audienciasDto->setActivo("S");


        //////////////////////////////////////RESTRICCION DE FECHAS////////////////////////////////////////////////////////////////////////

        $orden = "";
        if ($fechaSeleccionada <= $fechaBD) {
            //print_r("es una fecha pasada o actual");
            $orden = "  AND fechaInicial>='" . $fechaSeleccionada . " 00:00:00' AND fechaInicial<='" . $fechaSeleccionada . " 23:59:59' and cveEstatusAudiencia <> 3";
        } else {
            if ($fechaSeleccionada == $fechaDespues) {
                //print_r("es la fecha de ma�ana");
                $fechaDespuesLimite = $fechaDespues . " " . $horas;
                $orden = " AND fechaInicial>='" . $fechaDespues . " 00:00:00' AND fechaInicial<='" . $fechaDespuesLimite . "' and cveEstatusAudiencia <> 3";
            } else {
                $orden = "";
            }
        }

        /////////////////////////////MANIPULACION DE DATOS///////////////////////////////////////////////////////////////////////////////////

        if ($cveDistrito != "") {
            $juzgadosDto->setCveDistrito($cveDistrito);
            $juzgados = $juzgadosControler->selectJuzgados($juzgadosDto);

            $cadena = "";
            foreach ($juzgados as $juzgado) {
                $cadena .= "," . $juzgado->getCveJuzgado();
            }

            $cadena = substr($cadena, 1);

            $orden .= " AND cveJuzgadoDesahoga in (" . $cadena . ")  ORDER BY fechaInicial ASC";
        } else {
            //$orden = ltrim($orden, "AND ");
            $orden = $orden;
        }
//        $audienciasDto->setCveJuzgado($cadena);


        if ($orden != "") {
            $audienciasDto = $this->selectAudiencias($audienciasDto, null, $orden);

//            print_r($orden);
        } else {
            $audienciasDto = "";
        }


        if ($audienciasDto != "") {
            //print_r("entro a if");
            //Obtenemos la tabla  descripcion de la audiencia
            $catAudienciasDto->setActivo("S");
            $catAudiencias = $catAudienciasController->selectCataudiencias($catAudienciasDto);

            //Obtener tabla de Naturalezas para ver si es publica o privada
            $naturalezaDto->setActivo("S");
            $naturalezaDto = $naturalezaController->selectNaturalezas($naturalezaDto, null);

            //Obtener tabla de estatus audiencias para ver si es por celebrar o esta celebrada
            $estatusAudienciasDto->setActivo("S");
            $estatusAudienciasDto = $estatusAudienciasController->selectEstatusaudiencias($estatusAudienciasDto, null);

            $DelitosController = new DelitosController();
            $DelitosDto = new DelitosDTO();
            $DelitosDto->setActivo("S");
            $Delitos = $DelitosController->selectDelitos($DelitosDto);

//if($juzgadosDto->setCveDistrito($cveDistrito) == ""){
//    foreach ($audienciasDto as $audiencia) {            
//                                    
//    }                         
//}
            foreach ($audienciasDto as $audiencia) {
                $cveJuzgado = $audiencia->getCveJuzgado();
                $juzgadosDto->setCveJuzgado($cveJuzgado);
                $juzgados = $juzgadosControler->selectJuzgados($juzgadosDto);
                if ($juzgados != "") {
                    foreach ($juzgados as $juzgado) {
                        $cveDistrito = $juzgado->getCveDistrito();

                        $distritosDTO = new DistritosDTO();
                        $distritosDTO->setCveDistrito($cveDistrito);
                        $distritosDAO = new DistritosDAO();
                        $distritos = $distritosDAO->selectDistritos($distritosDTO);

                        if ($distritos != "") {
                            foreach ($distritos as $distrito) {
                                if ($juzgado->getCveDistrito() == $distrito->getCveDistrito()) {
                                    $desDistrito = $distrito->getdesDistrito();
                                }
                            }
                        }
                    }
                }
                //Obtener Hora Inicio de Audiencia
                $fechaInicial = $audiencia->getFechaInicial();
                $fechaFinal = $audiencia->getFechaFinal();

                $horaAudienciasInicial = explode(" ", $fechaInicial);
                $horaAudienciasFinal = explode(" ", $fechaFinal);

                //Obtenemos coincidencias del catalogo de Audiencias
                $desCatAudiencia = "";
                $desNaturaleza = "";
                if ($catAudiencias != "") {
                    foreach ($catAudiencias as $catAudiencia) {
                        if ($catAudiencia->getCveCatAudiencia() == $audiencia->getCveCatAudiencia()) {
                            $desCatAudiencia = utf8_encode($catAudiencia->getDesCatAudiencia());
                            //Obtener la descripcion de la naturaleza
                            foreach ($naturalezaDto as $naturaleza) {
                                if ($catAudiencia->getCveNaturaleza() == $naturaleza->getCveNaturaleza()) {
                                    $desNaturaleza = utf8_encode($naturaleza->getDesNaturaleza());
                                    break;
                                }
                            }
                            break;
                        }
                    }
                }

                // Obtenemos el numero de causa de tabla obtenida anteriormente
                $carpetasjudicialesDto->setIdCarpetaJudicial($audiencia->getIdReferencia());
                $carpetasjudicialesDto->setActivo("S");
                $carpetaJudicial = $carpetaJudicialesController->selectCarpetasjudiciales($carpetasjudicialesDto);

                //Obtenemos catalogo de tipos de carpetas
                $tiposcarpetasDto->setActivo("S");
                $tipos = $tiposcarpetaController->selectTiposcarpetas($tiposcarpetasDto);

                $numeroCausa = "";
                $anioCausa = "";
                $recuperaCarpeta = "";
                $tipo = "";
                $desCausa = "";

                foreach ($tipos as $tipo) {
                    if ($audiencia->getcveTipoCarpeta() == $tipo->getcveTipoCarpeta()) {
                        $desCausa = $tipo->getdesTipoCarpeta();
                        break;
                    }
                }
                if ($carpetaJudicial != "") {
                    //print_r("entra al if");
                    foreach ($carpetaJudicial as $recuperaCarpeta) {
                        $numeroCausa = $recuperaCarpeta->getNumero();
                        $anioCausa = $recuperaCarpeta->getAnio();

                        break;
                    }
                } else {
                    $numeroCausa = "No se encontro numero de Causa";
                    $anioCausa = utf8_encode("No se encontro a&ntilde;o de Causa");
                }

                // Obtenemos el nombre de la sala
                $salasDto->setCveSala($audiencia->getCveSala());
                $salasDto->setActivo("S");
                $salas = $salasCOntroller->selectSalas($salasDto);

                $descSala = "SIN SALA";

                foreach ($salas as $sala) {

                    if ($sala->getCveSala() == $audiencia->getCveSala()) {
                        $descSala = utf8_decode($sala->getDesSala());
                        //print_r($descSala);
                        break;
                    } else {
                        $descSala = "No Hay Sala Designada";
                        break;
                    }
                }


                //Verificamos si esta detenido
                $detenido = "";
                $detenido = $audiencia->getDetenido();

                //Obtencion del estatus de la audiencia
                $estatusAudiencia = "";
                if ($estatusAudienciasDto != "") {
                    foreach ($estatusAudienciasDto as $estatus) {
                        if ($estatus->getCveEstatusAudiencia() == $audiencia->getCveEstatusAudiencia()) {
                            $estatusAudiencia = $estatus->getDesEstatusAudiencia();
                            break;
                        }
                    }
                }


//                //Obtenemos tabla Nombre, Paterno, Materno de Imputados
//                $imputadosDto->setIdCarpetaJudicial($carpetasjudicialesDto->getIdCarpetaJudicial());
//                $imputadosDto->setActivo("S");
//                $imputados = $imputadosController->selectImputadoscarpetas($imputadosDto);
//
//                $nombreCompletoImputadosDefensores = " SIN IMPUTADOS";
//
//                $imputado = "";
//                $nombre = "";
//                $paterno = "";
//                $materno = "";
//                if ($imputados != "") {
//                    $nombreCompletoImputadosDefensores = "";
//                    foreach ($imputados as $imputado) {
//                        if ($imputado->getNombre() == "") {
//                            $nombre = utf8_encode($imputado->getNombreMoral());
//                        } else {
//                            $nombre = utf8_encode($imputado->getNombre());
//                        }
//                        $paterno = utf8_encode($imputado->getPaterno());
//                        $materno = utf8_encode($imputado->getMaterno());
//
//                        //Obtenemos nombre de defensores
//                        $defensoresDto->setIdImputadoCarpeta($imputado->getIdImputadoCarpeta());
//                        $defensoresDto->setActivo("S");
//                        $defensores = $defensoresController->selectDefensoresimputadoscarpetas($defensoresDto);
//                        $defensor = "";
//                        if ($defensores != "") {
//
//                            foreach ($defensores as $defensoresNombre) {
//                                $defensor = utf8_encode($defensoresNombre->getnombre());
//
//                                $nombreCompletoImputadosDefensores .= $nombre . " " . $paterno . " " . $materno . "   ( Def:" . $defensor . ")<br>";
//
//                                //break;
//                            }
//                        }
//                        //break;
//                    }
//                }
                //obtenemos a los imputados de la audiencia
                $imputadosSoliciudesDao = new ImputadossolicitudesDAO();
                $imputadosSoliciudesDto = new ImputadossolicitudesDTO();
                $imputadosSoliciudesDto->setActivo("S");
                $imputadosSoliciudesDto->setIdSolicitudAudiencia($audiencia->getIdSolicitudAudiencia());
                $imputadosSoliciudes = $imputadosSoliciudesDao->selectImputadossolicitudes($imputadosSoliciudesDto);
                $nombreCompletoImputadosDefensores = "";
                if ($imputadosSoliciudes != "") {

                    foreach ($imputadosSoliciudes as $imputadoSolicitud) {
//                        error_log(print_r($imputadoSolicitud, true));

                        if ($imputadoSolicitud->getNombre() == "") {
                            $nombre = utf8_encode($imputadoSolicitud->getNombreMoral());
                        } else {
                            $nombre = utf8_encode($imputadoSolicitud->getNombre());
                        }
                        $paterno = utf8_encode($imputadoSolicitud->getPaterno());
                        $materno = utf8_encode($imputadoSolicitud->getMaterno());
                        $nombreCompletoImputadosDefensores .= $nombre . " " . $paterno . " " . $materno;
                        //Obtenemos nombre de defensores
//                        $defensoresDto->setIdImputadoCarpeta($imputadoSolicitud->getIdImputadoCarpeta());
                        $defensoresDto->setIdImputadoSolicitud($imputadoSolicitud->getIdImputadoSolicitud());
                        $defensoresDto->setActivo("S");
                        $defensores = $defensoresController->selectDefensoresimputadossolicitudes($defensoresDto);
                        $defensor = "";
//                        error_log(print_r($defensores,true));
                        if ($defensores != "") {

                            foreach ($defensores as $defensoresNombre) {
                                $defensor = utf8_encode($defensoresNombre->getnombre());

                                $nombreCompletoImputadosDefensores .= "   ( Def:" . $defensor . ")";

                                //break;
                            }
                        }
                        $nombreCompletoImputadosDefensores .= "<br>";
                    }
                } else {
                    $nombreCompletoImputadosDefensores = "SIN IMPUTADOS";
                }

                $horaAudiencia = explode(":", $horaAudienciasInicial[1]);
                $horaAudienciaFin = explode(":", $horaAudienciasFinal[1]);
                //foreach ($distritos as $distrito){
                //lista de Delitos 

                $delitoSolicitudesDto = new DelitossolicitudesDTO();
                $delitoSolicitudesDto->setActivo("S");
                $delitoSolicitudesDto->setIdSolicitudAudiencia($audiencia->getIdSolicitudAudiencia());
                $delitoSolicitudesDao = new DelitossolicitudesDAO();
                $delitoSolicitudes = $delitoSolicitudesDao->selectDelitossolicitudes($delitoSolicitudesDto);
                $NomDelitos = "";
                if ($delitoSolicitudes != "") {
                    foreach ($delitoSolicitudes as $SolicitudDelito) {
                        foreach ($Delitos as $catDelito) {
                            if ($SolicitudDelito->getCveDelito() == $catDelito->getCveDelito()) {
                                $NomDelitos .= $catDelito->getDesDelito() . "<br>";
                                break;
                            }
                        }
                    }
                } else {
                    $Delito = "Sin Delitos";
                }

                $registro = array(
                    "idSolicitudAudiencia"              => $audiencia->getIdSolicitudAudiencia(),
                    "horaAudiencia"                     => $horaAudiencia[0] . ":" . $horaAudiencia[1],
                    "horaAudienciaFin"                  => ($horaAudienciaFin[0] . ":" . $horaAudienciaFin[1]),
                    "desCatAudiencia"                   => utf8_encode($desCatAudiencia),
                    "nuemeroCausa"                      => $numeroCausa,
                    "anioCausa"                         => $anioCausa,
                    "desSala"                           => utf8_encode($descSala),
                    "Detenido"                          => $detenido,
                    "DescripciondeNaturaleza"           => utf8_encode($desNaturaleza),
                    "EstatusdelaAudiencia"              => $estatusAudiencia,
                    "nombreCompletoImputadosDefensores" => ($nombreCompletoImputadosDefensores),
                    "desCausa"                          => utf8_encode($desCausa),
                    "desDelito"                         => utf8_encode($NomDelitos),
                    "desDistrito"                       => $desDistrito);
                array_push($resultado, $registro);
//                echo $distrito->getdesDistrito().'+++';
                //}
            }//END foreach

            $respuesta = array("totalCount" => count($resultado), "datos" => $resultado, "estatus" => "ok", "mensaje" => "Registros Encontrados");
            //print_r($respuesta);
        } else {
            $respuesta = array("totalCount" => "0", "datos" => "", "estatus" => "error", "mensaje" => "No Hay Registros Correspondientes");
        }

        $proveedor->close();

        return $respuesta;
    }

    public function consultaAudienciasParaElConsejo($audienciasDto = '', $cveDistrito = '',$idJuzgador = '')
    {

        $resultado = "";
        $respuesta = "";

        $param = array();

        $fechaIn = $audienciasDto->getFechaInicial();

        $nuevafecha = strtotime('+1 day', strtotime($fechaIn));
        $nuevafecha = date('Y-m-d', $nuevafecha);

        $fechaInicial = $fechaIn . " 00:00:00";
        $fechaFinal = $fechaIn . " 23:59:59";
        //print_r($fechaIn);
        $orden = " AND fechaInicial>='" . $fechaInicial . "' AND fechaInicial<='" . $fechaFinal . "' and cveEstatusAudiencia <> 3";


        //$audienciasController = new AudienciasController();
        $juzgadosControler = new JuzgadosController();
        $catAudienciasController = new CataudienciasController();
        $salasCOntroller = new SalasController();
        $carpetaJudicialesController = new CarpetasjudicialesController();
        $imputadosController = new ImputadoscarpetasController();
//        $defensoresController = new DefensoresimputadoscarpetasController();
        $defensoresController = new DefensoresimputadossolicitudesController();
        $naturalezaController = new NaturalezasController();
        $estatusAudienciasController = new EstatusaudienciasController();
        $audienciasJuzgadores = new AudienciasjuzgadorController();
        $juzgadoresController = new JuzgadoresController();
        $tiposcarpetaController = new TiposcarpetasController();


        $catAudienciasDto = new CataudienciasDTO();
        $audienciasDto = new AudienciasDTO();
        $juzgadosDto = new JuzgadosDTO();
        $salasDto = new SalasDTO();
        $carpetasjudicialesDto = new CarpetasjudicialesDTO();
        $imputadosDto = new ImputadoscarpetasDTO();
//        $defensoresDto = new DefensoresimputadoscarpetasDTO();
        $defensoresDto = new DefensoresimputadossolicitudesDTO();
        $naturalezaDto = new NaturalezasDTO();
        $estatusAudienciasDto = new EstatusaudienciasDTO();
        $audienciasJuzgadoresDto = new AudienciasjuzgadorDTO();
        $juzgadoresDto = new JuzgadoresDTO();
        $tiposcarpetasDto = new TiposcarpetasDTO();
        $audienciasDto->setActivo("S");


        if ($cveDistrito != "") {
            $juzgadosDto->setCveDistrito($cveDistrito);
            $juzgados = $juzgadosControler->selectJuzgados($juzgadosDto);

            $cadena = "";
            foreach ($juzgados as $juzgado) {
                $cadena .= "," . $juzgado->getCveJuzgado();
            }

            $cadena = substr($cadena, 1);

            $orden .= " AND cveJuzgadoDesahoga in (" . $cadena . ") and cveEstatusAudiencia <> 3  ORDER BY fechaInicial ASC ";
        } else {
            //$orden = ltrim($orden, "AND ");
            $orden = $orden . " and cveEstatusAudiencia <> 3 ORDER BY fechaInicial ASC";
        }


        $audienciasDto = $this->selectAudiencias($audienciasDto, null, $orden);


        if ($audienciasDto != "") {

            $resultado = array();

            //Obtenemos la tabla  descripcion de la audiencia
            $catAudienciasDto->setActivo("S");
            $catAudiencias = $catAudienciasController->selectCataudiencias($catAudienciasDto);

            //Obtener tabla de Naturalezas para ver si es publica o privada
            $naturalezaDto->setActivo("S");
            $naturalezaDto = $naturalezaController->selectNaturalezas($naturalezaDto, null);


            //Obtenemos tabla de juzgadores
            $juzgadoresDto->setActivo("S");
            $juzgadores = $juzgadoresController->selectJuzgadores($juzgadoresDto);


            foreach ($audienciasDto as $audiencia) {
                $cveJuzgado = $audiencia->getCveJuzgado();
                $juzgadosDto->setCveJuzgado($cveJuzgado);
                $juzgados = $juzgadosControler->selectJuzgados($juzgadosDto);
                if ($juzgados != "") {
                    foreach ($juzgados as $juzgado) {
                        $cveDistrito = $juzgado->getCveDistrito();

                        $distritosDTO = new DistritosDTO();
                        $distritosDTO->setCveDistrito($cveDistrito);
                        $distritosDAO = new DistritosDAO();
                        $distritos = $distritosDAO->selectDistritos($distritosDTO);

                        if ($distritos != "") {
                            foreach ($distritos as $distrito) {
                                if ($juzgado->getCveDistrito() == $distrito->getCveDistrito()) {
                                    $desDistrito = $distrito->getdesDistrito();
                                }
                            }
                        }
                    }
                }
                //Obtener Hora 
                $fechaInicial = $audiencia->getFechaInicial();
                $horaAudiencias = explode(" ", $fechaInicial);

                $fechaFinal = $audiencia->getFechaFinal();
                $horaAudienciasFin = explode(" ", $fechaFinal);


                //Obtenemos concordancia entre idAudiencia de tablas de audiencias y audicnecias juzgadores 
                $nombreJ = "";
                $paternoJ = "";
                $maternoJ = "";
                $tituloJ = "";
                $nombreCompletoJ = "";
                //Obtener tabla tblaudienciasjuzgador
                $idaudiencia = $audiencia->getIdAudiencia();
                $audienciasJuzgadoresDto->setIdAudiencia($idaudiencia);
                if ($idJuzgador != "") {
                    $audienciasJuzgadoresDto->setIdJuzgador($idJuzgador);
                }
                $audienciasJuzgadoresDto->setActivo("S");

                $audicionesJuzgador = $audienciasJuzgadores->selectAudienciasjuzgador($audienciasJuzgadoresDto);

                if ($audicionesJuzgador != "") {

                    foreach ($audicionesJuzgador as $audienciaJuzgador) {
                        if ($audiencia->getIdAudiencia() == $audienciaJuzgador->getIdAudiencia()) {

                            //Obtener nombre, paterno, materno y titulo de juzgador 
                            foreach ($juzgadores as $juzgador) {

                                if ($juzgador->getIdJuzgador() == $audienciaJuzgador->getIdJuzgador()) {

                                    $tituloJ = utf8_encode($juzgador->getTitulo());
                                    $nombreJ = utf8_encode($juzgador->getNombre());
                                    $paternoJ = utf8_encode($juzgador->getPaterno());
                                    $maternoJ = utf8_encode($juzgador->getMaterno());

                                    $nombreCompletoJ .= $tituloJ . " " . $nombreJ . " " . $paternoJ . " " . $maternoJ . "</br>";
                                    //break;
                                }
                            }
                            //break;
                        }
                    }
                } else {
                    //echo "no hay audiencias juzgadores";
                }

                $nombreCompletoJ = ($nombreCompletoJ);


                //Obtenemos coincidencias del catalogo de Audiencias
                $desCatAudiencia = "";
                $desNaturaleza = "";
                if ($catAudiencias != "") {
                    foreach ($catAudiencias as $catAudiencia) {
                        if ($catAudiencia->getCveCatAudiencia() == $audiencia->getCveCatAudiencia()) {

                            $desCatAudiencia = $catAudiencia->getDesCatAudiencia();
                            //Obtener la descripcion de la naturaleza
                            foreach ($naturalezaDto as $naturaleza) {
                                if ($catAudiencia->getCveNaturaleza() == $naturaleza->getCveNaturaleza()) {
                                    $desNaturaleza = $naturaleza->getDesNaturaleza();
                                    break;
                                }
                            }
                            break;
                        }
                    }
                }

                // Obtenemos el numero de causa de tabla obtenida anteriormente
                $carpetasjudicialesDto->setIdCarpetaJudicial($audiencia->getIdReferencia());
                $carpetasjudicialesDto->setActivo("S");
                $carpetaJudicial = $carpetaJudicialesController->selectCarpetasjudiciales($carpetasjudicialesDto);

                //Obtenemos catalogo de tipos de carpetas
                $tiposcarpetasDto->setActivo("S");
                $tipos = $tiposcarpetaController->selectTiposcarpetas($tiposcarpetasDto);

                $numeroCausa = "";
                $anioCausa = "";
                $recuperaCarpeta = "";
                $tipo = "";
                $desCausa = "";
                foreach ($tipos as $tipo) {
                    if ($audiencia->getcveTipoCarpeta() == $tipo->getcveTipoCarpeta()) {
                        $desCausa = $tipo->getdesTipoCarpeta();
                        break;
                    }
                }
                if ($carpetaJudicial != "") {
                    //print_r("entra al if");
                    foreach ($carpetaJudicial as $recuperaCarpeta) {
                        $numeroCausa = $recuperaCarpeta->getNumero();
                        $anioCausa = $recuperaCarpeta->getAnio();
//                        foreach ($tipos as $tipo) {
//                            if ($recuperaCarpeta->getcveTipoCarpeta() == $tipo->getcveTipoCarpeta()) {
//                                $desCausa = $tipo->getdesTipoCarpeta();
//                                break;
//                            }
//                        }
                        break;
                    }
                } else {
                    $numeroCausa = "No se encontro numero de Causa";
                    $anioCausa = utf8_encode("No se encontro a&ntilde;o de Causa");
                }

                // Obtenemos el nombre de la sala
                $salasDto->setCveSala($audiencia->getCveSala());
                $salasDto->setActivo("S");
                $salas = $salasCOntroller->selectSalas($salasDto);

                $descSala = "SIN SALA";
                foreach ($salas as $sala) {

                    if ($sala->getCveSala() == $audiencia->getCveSala()) {
                        $descSala = utf8_decode($sala->getDesSala());
                        break;
                    }
                }

                //Verificamos si esta detenido
                $detenido = utf8_encode($audiencia->getDetenido());

                //Obtencion del estatus de la audiencia
                //
                //$estatusAudiencia = "";
                $estatusAudienciasDto->setActivo("S");
                $estatusAudiencia = $estatusAudienciasController->selectEstatusaudiencias($estatusAudienciasDto);
                //$estatusAudiencia = "";
                if ($estatusAudiencia != "") {
                    foreach ($estatusAudiencia as $estatus) {
                        if ($estatus->getCveEstatusAudiencia() == $audiencia->getCveEstatusAudiencia()) {
                            $estatusAudiencia = utf8_encode($estatus->getDesEstatusAudiencia());
                            //print_r($estatusAudiencia);
                            break;
                        }
                    }
                } else {
                    $estatusAudiencia = "No hay registro de Estatus";
                }


//                //Obtenemos tabla Nombre, Paterno, Materno de Imputados
//                $imputadosDto->setIdCarpetaJudicial($carpetasjudicialesDto->getIdCarpetaJudicial());
//                $imputadosDto->setActivo("S");
//                $imputados = $imputadosController->selectImputadoscarpetas($imputadosDto);
//
//                $nombreCompletoImputadosDefensores = " SIN IMPUTADOS";
//
//                $imputado = "";
//                $nombre = "";
//                $paterno = "";
//                $materno = "";
//                if ($imputados != "") {
//                    error_log(print_r($imputados, true));
//                    $nombreCompletoImputadosDefensores = "";
//                    foreach ($imputados as $imputado) {
//
//                        if ($imputado->getNombre() == "") {
//                            $nombre = utf8_encode($imputado->getNombreMoral());
//                        } else {
//                            $nombre = utf8_encode($imputado->getNombre());
//                        }
//                        $paterno = utf8_encode($imputado->getPaterno());
//                        $materno = utf8_encode($imputado->getMaterno());
//
//                        //Obtenemos nombre de defensores
//                        $defensoresDto->setIdImputadoCarpeta($imputado->getIdImputadoCarpeta());
//                        $defensoresDto->setActivo("S");
//                        $defensores = $defensoresController->selectDefensoresimputadoscarpetas($defensoresDto);
//                        $defensor = "";
//                        $nombreCompletoImputadosDefensores .= $nombre . " " . $paterno . " " . $materno;
//                        if ($defensores != "") {
//                            // $nombreCompletoImputadosDefensores = "";
//                            foreach ($defensores as $defensoresNombre) {
//                                $defensor = utf8_encode($defensoresNombre->getnombre());
//
//                                $nombreCompletoImputadosDefensores.= "   ( Def:" . $defensor . ")<br>";
//
////                                break;
//                            }
//                        }
////                        break;
//                    }
//                }
                //obtenemos a los imputados de la audiencia
                $imputadosSoliciudesDao = new ImputadossolicitudesDAO();
                $imputadosSoliciudesDto = new ImputadossolicitudesDTO();
                $imputadosSoliciudesDto->setActivo("S");
                $imputadosSoliciudesDto->setIdSolicitudAudiencia($audiencia->getIdSolicitudAudiencia());
                $imputadosSoliciudes = $imputadosSoliciudesDao->selectImputadossolicitudes($imputadosSoliciudesDto);
                $nombreCompletoImputadosDefensores = "";
                if ($imputadosSoliciudes != "") {

                    foreach ($imputadosSoliciudes as $imputadoSolicitud) {
//                        error_log(print_r($imputadoSolicitud, true));

                        if ($imputadoSolicitud->getNombre() == "") {
                            $nombre = utf8_encode($imputadoSolicitud->getNombreMoral());
                        } else {
                            $nombre = utf8_encode($imputadoSolicitud->getNombre());
                        }
                        $paterno = utf8_encode($imputadoSolicitud->getPaterno());
                        $materno = utf8_encode($imputadoSolicitud->getMaterno());
                        $nombreCompletoImputadosDefensores .= $nombre . " " . $paterno . " " . $materno;
                        //Obtenemos nombre de defensores
//                        $defensoresDto->setIdImputadoCarpeta($imputadoSolicitud->getIdImputadoCarpeta());
                        $defensoresDto->setIdImputadoSolicitud($imputadoSolicitud->getIdImputadoSolicitud());
                        $defensoresDto->setActivo("S");
                        $defensores = $defensoresController->selectDefensoresimputadossolicitudes($defensoresDto);
                        $defensor = "";
//                        error_log(print_r($defensores,true));
                        if ($defensores != "") {

                            foreach ($defensores as $defensoresNombre) {
                                $defensor = utf8_encode($defensoresNombre->getnombre());

                                $nombreCompletoImputadosDefensores .= "   ( Def:" . $defensor . ")";

                                //break;
                            }
                        }
                        $nombreCompletoImputadosDefensores .= "<br>";
                    }
                } else {
                    $nombreCompletoImputadosDefensores = "SIN IMPUTADOS";
                }
                $horaAudiencia = explode(":", $horaAudiencias[1]);
                $horaAudienciaFin = explode(":", $horaAudienciasFin[1]);
                $registro = array("horaAudiencia"                     => $horaAudiencia[0] . ":" . $horaAudiencia[1], "horaAudienciaFinal" => ($horaAudienciaFin[0] . ":" . $horaAudienciaFin[1]), "desCatAudiencia" => utf8_encode($desCatAudiencia),
                                  "nuemeroCausa"                      => $numeroCausa,
                                  "anioCausa"                         => $anioCausa,
                                  "desSala"                           => utf8_decode($descSala),
                                  "Detenido"                          => $detenido,
                                  "DescripciondeNaturaleza"           => utf8_encode($desNaturaleza),
                                  "EstatusdelaAudiencia"              => utf8_encode($estatusAudiencia),
                    "nombreCompletoImputadosDefensores" => ($nombreCompletoImputadosDefensores),
                    "nombreCompletoJ" => utf8_encode($nombreCompletoJ),
                    "desCausa" => utf8_encode($desCausa),
                    "desDistrito" => $desDistrito);
                if ($idJuzgador != "" && $nombreCompletoJ != "") {
                array_push($resultado, $registro);
                } else if ($idJuzgador !== "" && $nombreCompletoJ != "") {
                     array_push($resultado, $registro);
                }
            }//END foreach
            $respuesta = array("totalCount" => count($resultado), "datos" => $resultado, "estatus" => "ok", "mensaje" => "Registros Encontrados");
        } else {
            $respuesta = array("totalCount" => "0", "datos" => "", "estatus" => "error", "mensaje" => "No Hay Registros Correspondientes");
        }

        //print_r($respuesta);
        return $respuesta;
    }

//-----------------CONSULTA DE AUDIENCIAS JUZGADO--------------------------------------
    public function consultarAudienciasJuzgado($AudienciasDto)
    {
        //print_r($AudienciasDto);
        $AudienciasDto = $this->validarAudiencias($AudienciasDto);
        $AudienciasDao = new AudienciasDAO();

        $juzgadosDto = new JuzgadosDTO();
        $juzgadosDao = new JuzgadosDAO();
        $juzgadosDto->setCveJuzgado($AudienciasDto->getCveJuzgadoDesahoga());
        $juzgados = $this->selectJuzgadosDistrito($juzgadosDto);

        if ($juzgados != "") {
            $cadena = "";
            $orden = "";
            foreach ($juzgados as $juzgado) {
                $cadena .= "," . $juzgado->getCveJuzgado();
            }

            $cadena = substr($cadena, 1);

            $orden .= " AND cveJuzgadoDesahoga in (" . $cadena . ")";
        } else {
            $orden = "";
        }
        $orden=" AND cveEstatusAudiencia in ('1','2') ".$orden;

        $validacion = new Validacion(); //public function selectAudienciasBetween($audienciasDto, $orden = "", $proveedor = null) {
        $AudienciasDto->setCveJuzgadoDesahoga("");
        $AudienciasDto->setActivo("S");// esto le agregamos
        $AudienciasDto = $AudienciasDao->selectAudiencias($AudienciasDto, $orden . " AND DATE(fechaInicial)=CURDATE() AND activo='S' ORDER BY TIME(fechaInicial) ASC", null);
        //$AudienciasDto = $AudienciasDao->selectAudiencias($AudienciasDto," AND date(fechaInicial)='2016-03-14' ",null);
        //      print_r($AudienciasDto);
        if ($AudienciasDto != "") {
            $json = "";
            $json .= '{"type":"OK",';
            $json .= '"totalCount":"' . count($AudienciasDto) . '",';
            $json .= '"data":[';
            $x = 1;
            //echo "Json--- ".$json;
            foreach ($AudienciasDto as $Audiencia) {
                $json .= "{";
                $fechaI = $Audiencia->getFechaInicial();
                $json .= '"idAudiencia":' . json_encode(utf8_encode($Audiencia->getIdAudiencia())) . ",";
                $json .= '"fechaInicial":' . json_encode(utf8_encode($Audiencia->getFechaInicial())) . ",";
                $json .= '"fechaFinal":' . json_encode(utf8_encode($Audiencia->getFechaFinal())) . ",";
                $json .= '"cveEstatusAudiencia":' . json_encode(utf8_encode($Audiencia->getCveEstatusAudiencia())) . ",";

                $tmpFecha = explode(' ', $Audiencia->getFechaInicial());
                $fecha = explode(':', $tmpFecha[1]);
                $fechaInicial = $fecha[0] . ':' . $fecha[1];
                $json .= '"hInicio":' . json_encode($fecha[0]) . ",";
                $json .= '"horaInicio":' . json_encode($fechaInicial) . ",";

                $tmpFecha = explode(' ', $Audiencia->getFechaFinal());
                $fecha = explode(':', $tmpFecha[1]);
                $fechaFinal = $fecha[0] . ':' . $fecha[1];

                $json .= '"hFin":' . json_encode($fecha[0]) . ",";
                $json .= '"horaFinal":' . json_encode($fechaFinal) . ",";

                //echo "Json--- ".$json;
                #---Estatus
                $EstatusaudienciasDto = new EstatusaudienciasDTO();
                $EstatusaudienciasDao = new EstatusaudienciasDAO();
                $EstatusaudienciasDto->setCveEstatusAudiencia($Audiencia->getCveEstatusAudiencia());
                $EstatusaudienciasDto->setActivo("S");
                $EstatusaudienciasDto = $EstatusaudienciasDao->selectEstatusaudiencias($EstatusaudienciasDto);
                if ($EstatusaudienciasDto != "") {
                    $json .= '"EstatusAudiencia":' . json_encode(utf8_encode($EstatusaudienciasDto[0]->getDesEstatusAudiencia())) . ",";
                } else {
                    $json .= '"EstatusAudiencia": "",';
                }
                #---Salas
                $SalasDto = new SalasDTO();
                $SalasDao = new SalasDAO();
                $SalasDto->setCveSala($Audiencia->getCveSala());
                $SalasDto->setActivo("S");
                $SalasDto = $SalasDao->selectSalas($SalasDto);
                if ($SalasDto != "" && count($SalasDto) > 0) {
                    $json .= '"desSala":' . json_encode($SalasDto[0]->getDesSala()) . ",";
                } else {
                    $json .= '"desSala": "",';
                }
                #---Juzgados
                $JuzgadosDto = new JuzgadosDTO();
                $JuzgadosDao = new JuzgadosDAO();
                $JuzgadosDto->setCveJuzgado($Audiencia->getCveJuzgado());
                $JuzgadosDto->setActivo("S");
                $JuzgadosDto = $JuzgadosDao->selectJuzgados($JuzgadosDto);
                if ($JuzgadosDto != "") {
                    $json .= '"desJuzgado":' . json_encode(utf8_encode($JuzgadosDto[0]->getDesJuzgado())) . ",";
                } else {
                    $json .= '"desJuzgado": "",';
                }
                #---CatAudiencias
                $CataudienciasDto = new CataudienciasDTO();
                $CataudienciasDao = new CataudienciasDAO();
                $CataudienciasDto->setCveCatAudiencia($Audiencia->getCveCatAudiencia());
                $CataudienciasDto->setActivo("S");
                $CataudienciasDto = $CataudienciasDao->selectCataudiencias($CataudienciasDto);
                //var_dump($CataudienciasDto);
                $json .= '"desCatAudiencia":' . json_encode($CataudienciasDto[0]->getDesCatAudiencia()) . ",";
                $NaturalezasDto = new NaturalezasDTO();
                $NaturalezasDao = new NaturalezasDAO();
                $NaturalezasDto->setCveNaturaleza($CataudienciasDto[0]->getCveNaturaleza());
                $NaturalezasDto->setActivo("S");
                $NaturalezasDto = $NaturalezasDao->selectNaturalezas($NaturalezasDto);
                if ($NaturalezasDto != "") {
                    $json .= '"cveNaturaleza":' . json_encode(utf8_encode($NaturalezasDto[0]->getCveNaturaleza())) . ","; //Tipo Naturaleza
                    $json .= '"desNaturaleza":' . json_encode(utf8_encode($NaturalezasDto[0]->getDesNaturaleza())) . ",";
                } else {
                    $json .= '"cveNaturaleza": "",';
                    $json .= '"desNaturaleza": "",';
                }

                $TiposaudienciasDto = new TiposaudienciasDTO();
                $TiposaudienciasDao = new TiposaudienciasDAO();
                $TiposaudienciasDto->setCveTipoAudiencia($CataudienciasDto[0]->getCveTipoAudiencia());
                $TiposaudienciasDto->setActivo("S");
                $TiposaudienciasDto = $TiposaudienciasDao->selectTiposaudiencias($TiposaudienciasDto);
                if ($TiposaudienciasDto != "") {
                    $json .= '"desTipoAudiencia":' . json_encode(utf8_encode($TiposaudienciasDto[0]->getDesTipoAudiencia())) . ",";
                } else {
                    $json .= '"desTipoAudiencia": "",';
                }

                $SolicitudesaudienciasDto = new SolicitudesaudienciasDTO();
                $SolicitudesaudienciasDao = new SolicitudesaudienciasDAO();
                $SolicitudesaudienciasDto->setIdSolicitudAudiencia($Audiencia->getIdSolicitudAudiencia());
                $SolicitudesaudienciasDto->setActivo("S");
                $SolicitudesaudienciasDto = $SolicitudesaudienciasDao->selectSolicitudesaudiencias($SolicitudesaudienciasDto);
                $json .= '"cveCatAudiencia":' . json_encode(utf8_encode($SolicitudesaudienciasDto[0]->getCveCatAudiencia())) . ",";

                #!!!!!!!!!!!!!!!!!!!!!solicitudes de audiencia

                $ImputadossolicitudesDto = new ImputadossolicitudesDTO();
                $ImputadossolicitudesDao = new ImputadossolicitudesDAO();
                $ImputadossolicitudesDto->setIdSolicitudAudiencia($SolicitudesaudienciasDto[0]->getIdSolicitudAudiencia());
                $ImputadossolicitudesDto->setActivo("S");
                $ImputadossolicitudesDto = $ImputadossolicitudesDao->selectImputadossolicitudes($ImputadossolicitudesDto);

                if ($ImputadossolicitudesDto != "") {
                    $json .= '"totalImputadosSolicitudes":' . json_encode(count($ImputadossolicitudesDto)) . ",";
                } else {
                    $json .= '"totalImputadosSolicitudes":' . json_encode(0) . ",";
                }
                $json .= '"DetalleImpSolicitudes": [';
                $y = 1;
                if ($ImputadossolicitudesDto != "") {
                    foreach ($ImputadossolicitudesDto as $ImputadoSol) {
                        $json .= '{';
                        if ($ImputadoSol->getCveTipoPersona() == 1) {
                            if ($ImputadoSol->getNombre() != "") {
                                $json .= '"nombre":' . json_encode(utf8_encode($ImputadoSol->getNombre())) . ",";
                            } else {
                                $json .= '"nombre": "",';
                            }
                            if ($ImputadoSol->getPaterno() != "") {
                                $json .= '"paterno":' . json_encode(utf8_encode($ImputadoSol->getPaterno())) . ",";
                            } else {
                                $json .= '"paterno": "",';
                            }
                            if ($ImputadoSol->getMaterno() != "") {
                                $json .= '"materno":' . json_encode(utf8_encode($ImputadoSol->getMaterno())) . ",";
                            } else {
                                $json .= '"materno": "",';
                            }
                        } else {
                            $json .= '"nombre":' . json_encode(utf8_encode($ImputadoSol->getNombreMoral())) . ",";
                            $json .= '"paterno": "",';
                            $json .= '"materno": "",';
                        }

                        $DefensoresimputadossolicitudesDto = new DefensoresimputadossolicitudesDTO();
                        $DefensoresimputadossolicitudesDao = new DefensoresimputadossolicitudesDAO();
                        $DefensoresimputadossolicitudesDto->setIdImputadoSolicitud($ImputadoSol->getIdImputadoSolicitud());
                        $DefensoresimputadossolicitudesDto->setActivo("S");
                        $DefensoresimputadossolicitudesDto = $DefensoresimputadossolicitudesDao->selectDefensoresimputadossolicitudes($DefensoresimputadossolicitudesDto);
                        if ($DefensoresimputadossolicitudesDto != "") {
                            $json .= '"totalDefensores":' . json_encode(count($DefensoresimputadossolicitudesDto)) . ",";
                        } else {
                            $json .= '"totalDefensores":' . json_encode(0) . ",";
                        }
                        $json .= '"DetalleDefensores": [';
                        $z = 1;
                        if ($DefensoresimputadossolicitudesDto != "") {
                            foreach ($DefensoresimputadossolicitudesDto as $Defensor) {
                                $json .= '{';
                                if ($Defensor->getNombre() != "") {
                                    $json .= '"nombre":' . json_encode(utf8_encode($Defensor->getNombre()));
                                } else {
                                    $json .= '"nombre": ""';
                                }
                                $json .= '}';
                                $z = $z + 1;
                                if ($z <= count($DefensoresimputadossolicitudesDto)) {
                                    $json .= ",";
                                }
                            }
                        }
                        $json .= ']';
                        $json .= '}';
                        $y ++;
                        if ($y <= count($ImputadossolicitudesDto)) {
                            $json .= ",";
                        }
                    }
                }
                $json .= ']';

                $json .= "}";
                $x = $x + 1;
                if ($x <= count($AudienciasDto)) {
                    $json .= ",";
                }
            }
            $json .= "],";
            $json .= '"total":' . json_encode(count($AudienciasDto)) . ",";
            $json .= '"fechaInicialOK":' . json_encode($fechaI);
            $json .= "}";

            //echo '--Json--'.$json.'--Json--';
            return $json;
        } else {
            return "";
        }
    }

#-------------------------------------------------------------------------------------------------------------------------------
//-----------------------------------------Administracion de audiencias kary-----------------------------------
//

    public function selectAudienciasHorarios($AudienciasDto, $proveedor = null)
    {
        $fechaConsulta = $AudienciasDto->getFechaInicial();
        $valida = true;


        $audienciasRelacionArray = array();
        $horas = array("00:00", "01:00", "02:00", "03:00", "04:00", "05:00", "06:00", "07:00", "08:00", "09:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00", "19:00", "20:00", "21:00", "22:00", "23:00", "23:59");
        $AudienciasDto = $this->validarAudiencias($AudienciasDto);
        $AudienciasDto->setCveJuzgadoDesahoga($_SESSION["cveAdscripcion"]);

        $AudienciasDao = new AudienciasDAO();
        $AudienciasDto = $AudienciasDao->selectAudienciasBetweenGeneral($AudienciasDto, $proveedor);

        if ($AudienciasDto != "") {
            $cataudienciasDto = new CatAudienciasDTO();
            $cataudienciasDao = new CatAudienciasDAO();
            $cataudienciasDto = $cataudienciasDao->selectcataudiencias($cataudienciasDto, "", $proveedor);

            $tiposcarpetasDto = new TiposCarpetasDTO();
            $tiposcarpetasDao = new TiposCarpetasDAO();
            $tiposcarpetasDto = $tiposcarpetasDao->selecttiposcarpetas($tiposcarpetasDto, "", $proveedor);

            $salasDto = new SalasDTO();
            $salasDao = new SalasDAO();
            $salasDto = $salasDao->selectsalas($salasDto, "", $proveedor);

            $estatusaudienciasDto = new EstatusAudienciasDTO();
            $estatusaudienciasDao = new EstatusAudienciasDAO();
            $estatusaudienciasDto = $estatusaudienciasDao->selectestatusaudiencias($estatusaudienciasDto, "", $proveedor);

            foreach ($AudienciasDto as $audienciaDto) {

//                if ($audienciaDto->getDetenido() == "1" || $audienciaDto->getDetenido() == "3") {
//                    $detenido = "S";
//                } else {
//                    $detenido = "N";
//                }
                $audienciasRelacion["parametro"] = "1";
                $audienciasRelacion["idAudiencia"] = $audienciaDto->getIdAudiencia();
                $audienciasRelacion["idSolicitudAudiencia"] = $audienciaDto->getIdSolicitudAudiencia();
                $audienciasRelacion["numero"] = $audienciaDto->getNumero();
                $audienciasRelacion["anio"] = $audienciaDto->getAnio();
                $audienciasRelacion["cveTipoCarpeta"] = $audienciaDto->getCveTipoCarpeta();
                $audienciasRelacion["activo"] = $audienciaDto->getActivo();
                $audienciasRelacion["fechaRegistro"] = $audienciaDto->getFechaRegistro();
                $audienciasRelacion["fechaActualizacion"] = $audienciaDto->getFechaActualizacion();
                $audienciasRelacion["fechaInicial"] = $audienciaDto->getFechaInicial();
                $audienciasRelacion["fechaFinal"] = $audienciaDto->getFechaFinal();
                $audienciasRelacion["cveCatAudiencia"] = $audienciaDto->getCveCatAudiencia();
                $audienciasRelacion["cveJuzgado"] = $audienciaDto->getCveJuzgado();
                $audienciasRelacion["cveJuzgadoDesahoga"] = $audienciaDto->getCveJuzgadoDesahoga();
                $audienciasRelacion["cveAdscripcionSolicita"] = $audienciaDto->getCveAdscripcionSolicita();
                $audienciasRelacion["cveUsuario"] = $audienciaDto->getCveUsuario();
                $audienciasRelacion["idReferencia"] = $audienciaDto->getIdReferencia();
                $audienciasRelacion["detenido"] = $audienciaDto->getDetenido();
                $audienciasRelacion["cveEstatusAudiencia"] = $audienciaDto->getCveEstatusAudiencia();
                $audienciasRelacion["cveSala"] = $audienciaDto->getCveSala();
                $audienciasRelacion["peso"] = $audienciaDto->getPeso();

                for ($index = 0; $index < count($cataudienciasDto); $index ++) {
                    if ($cataudienciasDto[$index]->getCveCatAudiencia() == $audienciaDto->getCveCatAudiencia()) {
                        $audienciasRelacion["cataudiencias"] = array("cveCatAudiencia" => $cataudienciasDto[$index]->getCveCatAudiencia(), "descripcion" => $cataudienciasDto[$index]->getDesCatAudiencia());
                        $tiposaudienciasDto = new TiposAudienciasDTO();
                        $tiposaudienciasDto->setCveTipoAudiencia($cataudienciasDto[$index]->getCveTipoAudiencia());
                        $tiposaudienciasDao = new TiposAudienciasDAO();
                        $tiposaudienciasDto = $tiposaudienciasDao->selecttiposaudiencias($tiposaudienciasDto, "", $this->proveedor);
                        foreach ($tiposaudienciasDto as $keyTipo => $valueTipo) {
                            $audienciasRelacion["tiposaudiencias"] = array("cveTipoAudiencia" => $valueTipo->getCveTipoAudiencia(), "desTipoAudiencia" => $valueTipo->getDesTipoAudiencia());
                        }
                        break;
                    }
                }

                for ($index = 0; $index < count($tiposcarpetasDto); $index ++) {
                    if ($tiposcarpetasDto[$index]->getCveTipoCarpeta() == $audienciaDto->getCveTipoCarpeta()) {
                        $audienciasRelacion["tiposcarpetas"] = array("cveTipoCarpeta" => $tiposcarpetasDto[$index]->getCveTipoCarpeta(), "descripcion" => $tiposcarpetasDto[$index]->getDesTipoCarpeta());
                        break;
                    }
                }

                for ($index = 0; $index < count($salasDto); $index ++) {
                    if ($salasDto[$index]->getCveSala() == $audienciaDto->getCveSala()) {
                        $audienciasRelacion["salas"] = array("cveSala" => $salasDto[$index]->getCveSala(), "descripcion" => $salasDto[$index]->getDesSala());
                        break;
                    }
                }

                for ($index = 0; $index < count($estatusaudienciasDto); $index ++) {
                    if ($estatusaudienciasDto[$index]->getCveEstatusAudiencia() == $audienciaDto->getCveEstatusAudiencia()) {
                        $audienciasRelacion["estatusAudiencia"] = array("cveEstatusAudiencia" => $estatusaudienciasDto[$index]->getCveEstatusAudiencia(), "descripcion" => $estatusaudienciasDto[$index]->getDesEstatusAudiencia());
                        break;
                    }
                }
                $audienciasjuzgadorDto = new AudienciasJuzgadorDTO();
                $audienciasjuzgadorDto->setIdAudiencia($audienciaDto->getIdAudiencia());
                $audienciasjuzgadorDto->setActivo("S");
                $audienciasjuzgadorDao = new AudienciasJuzgadorDAO();
                $audienciasjuzgadorDto = $audienciasjuzgadorDao->selectaudienciasjuzgador($audienciasjuzgadorDto, "", $proveedor);
                $audienciasRelacion["juzgadores"] = [];
                if ($audienciasjuzgadorDto != "") {
                    foreach ($audienciasjuzgadorDto as $audienciajuzgadorDto) {
                        $audienciasRelacion["audienciaJuzgador"][] = array("idAudienciaJuez" => $audienciajuzgadorDto->getIdAudienciaJuez(), "idJuzgador" => $audienciajuzgadorDto->getIdJuzgador());
                    }
                    foreach ($audienciasRelacion["audienciaJuzgador"] as $key => $value) {
                        $juzgadoresDto = new JuzgadoresDTO();
                        $juzgadoresDto->setIdJuzgador($value["idJuzgador"]);
                        $juzgadoresDao = new JuzgadoresDAO();
                        $juzgadoresDto = $juzgadoresDao->selectjuzgadores($juzgadoresDto, "", $proveedor);
                        foreach ($juzgadoresDto as $juzgadorDto) {
                            $audienciasRelacion["juzgadores"][] = array("nombre" => utf8_encode($juzgadorDto->getNombre()) . " " . utf8_encode($juzgadorDto->getPaterno()) . " " . utf8_encode($juzgadorDto->getMaterno()));
                        }
                    }
                } else {
                    $audienciasRelacion["audienciaJuzgador"] = [];
                }
                $audienciasRelacionArray[] = $audienciasRelacion;
                $audienciasRelacion["audienciaJuzgador"] = array();
                $audienciasRelacion["juzgadores"] = array();
            }
        } else {
            $valida = false;
        }
        if ($valida) {
            $cont = 0;
            $resultados = array();
            $resultados["status"] = "ok";
            foreach ($horas as $key => $val) {
                if ($val != "23:59") {
                    $timestamp = strtotime($val) + 60 * 60;
                    $val2 = date('H:i', $timestamp);
                    if ($val == "23:00") {
                        $val2 = "23:59";
                    }
                    $f1 = $fechaConsulta . " " . $val;
                    $f2 = $fechaConsulta . " " . $val2;
                    $t1 = strtotime($f1);
                    $t2 = strtotime($f2);
                    $resultados["informacion"][$cont]["horario"] = substr($f1, - 5) . " - " . substr($f2, - 5);
                    $resultados["informacion"][$cont]["data"] = "";
                    $cont2 = 0;
                    foreach ($audienciasRelacionArray as $keyRelacion => $valueRelacion) {
                        $f3 = $valueRelacion["fechaInicial"];
                        $f4 = $valueRelacion["fechaFinal"];
                        $t3 = strtotime($f3);
                        if (($t3 >= $t1) && ($t3 < $t2)) {
                            $resultados["informacion"][$cont]["horario"] = substr($f1, - 5) . " - " . substr($f2, - 5);
                            $resultados["informacion"][$cont]["data"][$cont2] = $valueRelacion;
                            $cont2 ++;
                        }
                    }
                }
                $cont ++;
            }
        } else {
            $resultados["status"] = "error";
            $resultados["mensaje"] = "No se encontraron resultados.";
        }
        $resultados = json_encode($resultados);

        return $resultados;
    }

    public function selecAdmintAudienciasJuzgador($AudienciasDto, $proveedor = null)
    {
        $fechaConsulta = $AudienciasDto->getFechaInicial();
        $valida = true;
        $audienciasRelacionArray = array();
        $horas = array("00:00", "01:00", "02:00", "03:00", "04:00", "05:00", "06:00", "07:00", "08:00", "09:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00", "19:00", "20:00", "21:00", "22:00", "23:00", "23:59");
        $AudienciasDto = $this->validarAudiencias($AudienciasDto);

        $audienciasjuzgadorDto = new AudienciasJuzgadorDTO();
        $audienciasjuzgadorDto->setIdJuzgador($AudienciasDto->getvariable());
        $audienciasjuzgadorDto->setActivo("S");
        $audienciasjuzgadorDao = new AudienciasJuzgadorDAO();
        $audienciasjuzgadorDto = $audienciasjuzgadorDao->selectaudienciasjuzgador($audienciasjuzgadorDto, "", $proveedor);
        if ($audienciasjuzgadorDto != "") {
            $audiencias = array();
            if ($audienciasjuzgadorDto != "") {
                foreach ($audienciasjuzgadorDto as $key => $value) {
                    $audiencias [] = $value->getIdAudiencia();
                }
            }
            if (count($audiencias) > 0) {
                $AudienciasDto->setvariable(implode(",", $audiencias));
            } else {
                $AudienciasDto->setvariable(0);
            }
            $AudienciasDao = new AudienciasDAO();
            $AudienciasDto = $AudienciasDao->selectAudienciasJuzgador($AudienciasDto, $proveedor);

            $cataudienciasDto = new CatAudienciasDTO();
            $cataudienciasDao = new CatAudienciasDAO();
            $cataudienciasDto = $cataudienciasDao->selectcataudiencias($cataudienciasDto, "", $proveedor);

            $tiposcarpetasDto = new TiposCarpetasDTO();
            $tiposcarpetasDao = new TiposCarpetasDAO();
            $tiposcarpetasDto = $tiposcarpetasDao->selecttiposcarpetas($tiposcarpetasDto, "", $proveedor);

            $salasDto = new SalasDTO();
            $salasDao = new SalasDAO();
            $salasDto = $salasDao->selectsalas($salasDto, "", $proveedor);

            $estatusaudienciasDto = new EstatusAudienciasDTO();
            $estatusaudienciasDao = new EstatusAudienciasDAO();
            $estatusaudienciasDto = $estatusaudienciasDao->selectestatusaudiencias($estatusaudienciasDto, "", $proveedor);

            if ($AudienciasDto != "") {
                foreach ($AudienciasDto as $audienciaDto) {
//                    if ($audienciaDto->getDetenido() == 1 || $audienciaDto->getDetenido() == 3) {
//                        $detenido = "S";
//                    } else {
//                        $detenido = "N";
//                    }

                    $audienciasRelacion["parametro"] = "1";
                    $audienciasRelacion["idAudiencia"] = $audienciaDto->getIdAudiencia();
                    $audienciasRelacion["idSolicitudAudiencia"] = $audienciaDto->getIdSolicitudAudiencia();
                    $audienciasRelacion["numero"] = $audienciaDto->getNumero();
                    $audienciasRelacion["anio"] = $audienciaDto->getAnio();
                    $audienciasRelacion["cveTipoCarpeta"] = $audienciaDto->getCveTipoCarpeta();
                    $audienciasRelacion["activo"] = $audienciaDto->getActivo();
                    $audienciasRelacion["fechaRegistro"] = $audienciaDto->getFechaRegistro();
                    $audienciasRelacion["fechaActualizacion"] = $audienciaDto->getFechaActualizacion();
                    $audienciasRelacion["fechaInicial"] = $audienciaDto->getFechaInicial();
                    $audienciasRelacion["fechaFinal"] = $audienciaDto->getFechaFinal();
                    $audienciasRelacion["cveCatAudiencia"] = $audienciaDto->getCveCatAudiencia();
                    $audienciasRelacion["cveJuzgado"] = $audienciaDto->getCveJuzgado();
                    $audienciasRelacion["cveJuzgadoDesahoga"] = $audienciaDto->getCveJuzgadoDesahoga();
                    $audienciasRelacion["cveAdscripcionSolicita"] = $audienciaDto->getCveAdscripcionSolicita();
                    $audienciasRelacion["cveUsuario"] = $audienciaDto->getCveUsuario();
                    $audienciasRelacion["idReferencia"] = $audienciaDto->getIdReferencia();
                    $audienciasRelacion["detenido"] = $audienciaDto->getDetenido();
                    $audienciasRelacion["cveEstatusAudiencia"] = $audienciaDto->getCveEstatusAudiencia();
                    $audienciasRelacion["cveSala"] = $audienciaDto->getCveSala();
                    $audienciasRelacion["peso"] = $audienciaDto->getPeso();

                    for ($index = 0; $index < count($cataudienciasDto); $index ++) {
                        if ($cataudienciasDto[$index]->getCveCatAudiencia() == $audienciaDto->getCveCatAudiencia()) {
                            $audienciasRelacion["cataudiencias"] = array("cveCatAudiencia" => $cataudienciasDto[$index]->getCveCatAudiencia(), "descripcion" => $cataudienciasDto[$index]->getDesCatAudiencia());
                            $tiposaudienciasDto = new TiposAudienciasDTO();
                            $tiposaudienciasDto->setCveTipoAudiencia($cataudienciasDto[$index]->getCveTipoAudiencia());
                            $tiposaudienciasDao = new TiposAudienciasDAO();
                            $tiposaudienciasDto = $tiposaudienciasDao->selecttiposaudiencias($tiposaudienciasDto, "", $this->proveedor);
                            foreach ($tiposaudienciasDto as $keyTipo => $valueTipo) {
                                $audienciasRelacion["tiposaudiencias"] = array("cveTipoAudiencia" => $valueTipo->getCveTipoAudiencia(), "desTipoAudiencia" => $valueTipo->getDesTipoAudiencia());
                            }
                            break;
                        }
                    }

                    for ($index = 0; $index < count($tiposcarpetasDto); $index ++) {
                        if ($tiposcarpetasDto[$index]->getCveTipoCarpeta() == $audienciaDto->getCveTipoCarpeta()) {
                            $audienciasRelacion["tiposcarpetas"] = array("cveTipoCarpeta" => $tiposcarpetasDto[$index]->getCveTipoCarpeta(), "descripcion" => $tiposcarpetasDto[$index]->getDesTipoCarpeta());
                            break;
                        }
                    }

                    for ($index = 0; $index < count($salasDto); $index ++) {
                        if ($salasDto[$index]->getCveSala() == $audienciaDto->getCveSala()) {
                            $audienciasRelacion["salas"] = array("cveSala" => $salasDto[$index]->getCveSala(), "descripcion" => $salasDto[$index]->getDesSala());
                            break;
                        }
                    }

                    for ($index = 0; $index < count($estatusaudienciasDto); $index ++) {
                        if ($estatusaudienciasDto[$index]->getCveEstatusAudiencia() == $audienciaDto->getCveEstatusAudiencia()) {
                            $audienciasRelacion["estatusAudiencia"] = array("cveEstatusAudiencia" => $estatusaudienciasDto[$index]->getCveEstatusAudiencia(), "descripcion" => $estatusaudienciasDto[$index]->getDesEstatusAudiencia());
                            break;
                        }
                    }

                    $audienciasjuzgadorDto = new AudienciasJuzgadorDTO();
                    $audienciasjuzgadorDto->setIdAudiencia($audienciaDto->getIdAudiencia());
                    $audienciasjuzgadorDto->setActivo("S");
                    $audienciasjuzgadorDao = new AudienciasJuzgadorDAO();
                    $audienciasjuzgadorDto = $audienciasjuzgadorDao->selectaudienciasjuzgador($audienciasjuzgadorDto, "", $proveedor);
                    $audienciasRelacion["juzgadores"] = [];
                    if ($audienciasjuzgadorDto != "") {
                        foreach ($audienciasjuzgadorDto as $audienciajuzgadorDto) {
                            $audienciasRelacion["audienciaJuzgador"][] = array("idAudienciaJuez" => $audienciajuzgadorDto->getIdAudienciaJuez(), "idJuzgador" => $audienciajuzgadorDto->getIdJuzgador());
                        }
                        foreach ($audienciasRelacion["audienciaJuzgador"] as $key => $value) {
                            $juzgadoresDto = new JuzgadoresDTO();
                            $juzgadoresDto->setIdJuzgador($value["idJuzgador"]);
                            $juzgadoresDao = new JuzgadoresDAO();
                            $juzgadoresDto = $juzgadoresDao->selectjuzgadores($juzgadoresDto, "", $proveedor);
                            foreach ($juzgadoresDto as $juzgadorDto) {
                                $audienciasRelacion["juzgadores"][] = array("nombre" => utf8_encode($juzgadorDto->getNombre()) . " " . utf8_encode($juzgadorDto->getPaterno()) . " " . utf8_encode($juzgadorDto->getMaterno()));
                            }
                        }
                    } else {
                        $audienciasRelacion["audienciaJuzgador"] = [];
                    }
                    $audienciasRelacionArray[] = $audienciasRelacion;
                    $audienciasRelacion["audienciaJuzgador"] = array();
                    $audienciasRelacion["juzgadores"] = array();
                }
            }
        } else {
            $valida = false;
        }
        if ($valida) {
            $cont = 0;
            $resultados = array();
            $resultados["status"] = "ok";
            foreach ($horas as $key => $val) {
                if ($val != "23:59") {
                    $timestamp = strtotime($val) + 60 * 60;
                    $val2 = date('H:i', $timestamp);
                    if ($val == "23:00") {
                        $val2 = "23:59";
                    }
                    $f1 = $fechaConsulta . " " . $val;
                    $f2 = $fechaConsulta . " " . $val2;
                    $t1 = strtotime($f1);
                    $t2 = strtotime($f2);
                    $resultados["informacion"][$cont]["horario"] = substr($f1, - 5) . " - " . substr($f2, - 5);
                    $resultados["informacion"][$cont]["data"] = "";
                    $cont2 = 0;
                    foreach ($audienciasRelacionArray as $keyRelacion => $valueRelacion) {
                        $f3 = $valueRelacion["fechaInicial"];
                        $f4 = $valueRelacion["fechaFinal"];
                        $t3 = strtotime($f3);
                        if (($t3 >= $t1) && ($t3 < $t2)) {
                            $resultados["informacion"][$cont]["horario"] = substr($f1, - 5) . " - " . substr($f2, - 5);
                            $resultados["informacion"][$cont]["data"][$cont2] = $valueRelacion;
                            $cont2 ++;
                        }
                    }
                }
                $cont ++;
            }
        } else {
            $resultados["status"] = "error";
            $resultados["mensaje"] = "No se encontraron resultados.";
        }
        $resultados = json_encode($resultados);

        return $resultados;
    }

    public function selecAdmintAudienciasSalas($AudienciasDto, $proveedor = null)
    {
        $fechaConsulta = $AudienciasDto->getFechaInicial();
        $valida = true;


        $audienciasRelacionArray = array();
        $horas = array("00:00", "01:00", "02:00", "03:00", "04:00", "05:00", "06:00", "07:00", "08:00", "09:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00", "19:00", "20:00", "21:00", "22:00", "23:00", "23:59");
        $AudienciasDto = $this->validarAudiencias($AudienciasDto);

        $AudienciasDao = new AudienciasDAO();
        $AudienciasDto = $AudienciasDao->selectAudienciasSalas($AudienciasDto, $proveedor);

        $cataudienciasDto = new CatAudienciasDTO();
        $cataudienciasDao = new CatAudienciasDAO();
        $cataudienciasDto = $cataudienciasDao->selectcataudiencias($cataudienciasDto, "", $proveedor);

        $tiposcarpetasDto = new TiposCarpetasDTO();
        $tiposcarpetasDao = new TiposCarpetasDAO();
        $tiposcarpetasDto = $tiposcarpetasDao->selecttiposcarpetas($tiposcarpetasDto, "", $proveedor);

        $salasDto = new SalasDTO();
        $salasDao = new SalasDAO();
        $salasDto = $salasDao->selectsalas($salasDto, "", $proveedor);

        $estatusaudienciasDto = new EstatusAudienciasDTO();
        $estatusaudienciasDao = new EstatusAudienciasDAO();
        $estatusaudienciasDto = $estatusaudienciasDao->selectestatusaudiencias($estatusaudienciasDto, "", $proveedor);

        if ($AudienciasDto != "") {
            foreach ($AudienciasDto as $audienciaDto) {
//                if ($audienciaDto->getDetenido() == 1 || $audienciaDto->getDetenido() == 3) {
//                    $detenido = "S";
//                } else {
//                    $detenido = "N";
//                }
                $audienciasRelacion["parametro"] = "1";
                $audienciasRelacion["idAudiencia"] = $audienciaDto->getIdAudiencia();
                $audienciasRelacion["idSolicitudAudiencia"] = $audienciaDto->getIdSolicitudAudiencia();
                $audienciasRelacion["numero"] = $audienciaDto->getNumero();
                $audienciasRelacion["anio"] = $audienciaDto->getAnio();
                $audienciasRelacion["cveTipoCarpeta"] = $audienciaDto->getCveTipoCarpeta();
                $audienciasRelacion["activo"] = $audienciaDto->getActivo();
                $audienciasRelacion["fechaRegistro"] = $audienciaDto->getFechaRegistro();
                $audienciasRelacion["fechaActualizacion"] = $audienciaDto->getFechaActualizacion();
                $audienciasRelacion["fechaInicial"] = $audienciaDto->getFechaInicial();
                $audienciasRelacion["fechaFinal"] = $audienciaDto->getFechaFinal();
                $audienciasRelacion["cveCatAudiencia"] = $audienciaDto->getCveCatAudiencia();
                $audienciasRelacion["cveJuzgado"] = $audienciaDto->getCveJuzgado();
                $audienciasRelacion["cveJuzgadoDesahoga"] = $audienciaDto->getCveJuzgadoDesahoga();
                $audienciasRelacion["cveAdscripcionSolicita"] = $audienciaDto->getCveAdscripcionSolicita();
                $audienciasRelacion["cveUsuario"] = $audienciaDto->getCveUsuario();
                $audienciasRelacion["idReferencia"] = $audienciaDto->getIdReferencia();
                $audienciasRelacion["detenido"] = $audienciaDto->getDetenido();
                $audienciasRelacion["cveEstatusAudiencia"] = $audienciaDto->getCveEstatusAudiencia();
                $audienciasRelacion["cveSala"] = $audienciaDto->getCveSala();
                $audienciasRelacion["peso"] = $audienciaDto->getPeso();

                for ($index = 0; $index < count($cataudienciasDto); $index ++) {
                    if ($cataudienciasDto[$index]->getCveCatAudiencia() == $audienciaDto->getCveCatAudiencia()) {
                        $audienciasRelacion["cataudiencias"] = array("cveCatAudiencia" => $cataudienciasDto[$index]->getCveCatAudiencia(), "descripcion" => $cataudienciasDto[$index]->getDesCatAudiencia());
                        $tiposaudienciasDto = new TiposAudienciasDTO();
                        $tiposaudienciasDto->setCveTipoAudiencia($cataudienciasDto[$index]->getCveTipoAudiencia());
                        $tiposaudienciasDao = new TiposAudienciasDAO();
                        $tiposaudienciasDto = $tiposaudienciasDao->selecttiposaudiencias($tiposaudienciasDto, "", $this->proveedor);
                        foreach ($tiposaudienciasDto as $keyTipo => $valueTipo) {
                            $audienciasRelacion["tiposaudiencias"] = array("cveTipoAudiencia" => $valueTipo->getCveTipoAudiencia(), "desTipoAudiencia" => $valueTipo->getDesTipoAudiencia());
                        }
                        break;
                    }
                }

                for ($index = 0; $index < count($tiposcarpetasDto); $index ++) {
                    if ($tiposcarpetasDto[$index]->getCveTipoCarpeta() == $audienciaDto->getCveTipoCarpeta()) {
                        $audienciasRelacion["tiposcarpetas"] = array("cveTipoCarpeta" => $tiposcarpetasDto[$index]->getCveTipoCarpeta(), "descripcion" => $tiposcarpetasDto[$index]->getDesTipoCarpeta());
                        break;
                    }
                }

                for ($index = 0; $index < count($salasDto); $index ++) {
                    if ($salasDto[$index]->getCveSala() == $audienciaDto->getCveSala()) {
                        $audienciasRelacion["salas"] = array("cveSala" => $salasDto[$index]->getCveSala(), "descripcion" => $salasDto[$index]->getDesSala());
                        break;
                    }
                }

                for ($index = 0; $index < count($estatusaudienciasDto); $index ++) {
                    if ($estatusaudienciasDto[$index]->getCveEstatusAudiencia() == $audienciaDto->getCveEstatusAudiencia()) {
                        $audienciasRelacion["estatusAudiencia"] = array("cveEstatusAudiencia" => $estatusaudienciasDto[$index]->getCveEstatusAudiencia(), "descripcion" => $estatusaudienciasDto[$index]->getDesEstatusAudiencia());
                        break;
                    }
                }

                $audienciasjuzgadorDto = new AudienciasJuzgadorDTO();
                $audienciasjuzgadorDto->setIdAudiencia($audienciaDto->getIdAudiencia());
                $audienciasjuzgadorDto->setActivo("S");
                $audienciasjuzgadorDao = new AudienciasJuzgadorDAO();
                $audienciasjuzgadorDto = $audienciasjuzgadorDao->selectaudienciasjuzgador($audienciasjuzgadorDto, "", $proveedor);
                $audienciasRelacion["juzgadores"] = [];
                if ($audienciasjuzgadorDto != "") {
                    foreach ($audienciasjuzgadorDto as $audienciajuzgadorDto) {
                        $audienciasRelacion["audienciaJuzgador"][] = array("idAudienciaJuez" => $audienciajuzgadorDto->getIdAudienciaJuez(), "idJuzgador" => $audienciajuzgadorDto->getIdJuzgador());
                    }
                    foreach ($audienciasRelacion["audienciaJuzgador"] as $key => $value) {
                        $juzgadoresDto = new JuzgadoresDTO();
                        $juzgadoresDto->setIdJuzgador($value["idJuzgador"]);
                        $juzgadoresDao = new JuzgadoresDAO();
                        $juzgadoresDto = $juzgadoresDao->selectjuzgadores($juzgadoresDto, "", $proveedor);
                        foreach ($juzgadoresDto as $juzgadorDto) {
                            $audienciasRelacion["juzgadores"][] = array("nombre" => utf8_encode($juzgadorDto->getNombre()) . " " . utf8_encode($juzgadorDto->getPaterno()) . " " . utf8_encode($juzgadorDto->getMaterno()));
                        }
                    }
                } else {
                    $audienciasRelacion["audienciaJuzgador"] = [];
                }
                $audienciasRelacionArray[] = $audienciasRelacion;
                $audienciasRelacion["audienciaJuzgador"] = array();
                $audienciasRelacion["juzgadores"] = array();
            }
        } else {
            $valida = false;
        }

        if ($valida) {
            $cont = 0;
            $resultados = array();
            $resultados["status"] = "ok";
            foreach ($horas as $key => $val) {
                if ($val != "23:59") {
                    $timestamp = strtotime($val) + 60 * 60;
                    $val2 = date('H:i', $timestamp);
                    if ($val == "23:00") {
                        $val2 = "23:59";
                    }
                    $f1 = $fechaConsulta . " " . $val;
                    $f2 = $fechaConsulta . " " . $val2;
                    $t1 = strtotime($f1);
                    $t2 = strtotime($f2);
                    $resultados["informacion"][$cont]["horario"] = substr($f1, - 5) . " - " . substr($f2, - 5);
                    $resultados["informacion"][$cont]["data"] = "";
                    $cont2 = 0;
                    foreach ($audienciasRelacionArray as $keyRelacion => $valueRelacion) {
                        $f3 = $valueRelacion["fechaInicial"];
                        $f4 = $valueRelacion["fechaFinal"];
                        $t3 = strtotime($f3);
                        if (($t3 >= $t1) && ($t3 < $t2)) {
                            $resultados["informacion"][$cont]["horario"] = substr($f1, - 5) . " - " . substr($f2, - 5);
                            $resultados["informacion"][$cont]["data"][$cont2] = $valueRelacion;
                            $cont2 ++;
                        }
                    }
                }
                $cont ++;
            }
        } else {
            $resultados["status"] = "error";
            $resultados["mensaje"] = "No se encontraron resultados.";
        }
        $resultados = json_encode($resultados);

        return $resultados;
    }

    public function guardarAudienciaAdmin($AudienciasDto, $arrayJuzgadores, $arracveFunciones, $arraIdAudienciaJuez, $proveedor = null)
    {
        if (isset($_SESSION["cveAdscripcion"]) && $_SESSION["cveAdscripcion"] !== "") {
            $juzgadoSesion = $_SESSION["cveAdscripcion"];
            if ($proveedor == null) {
                $this->proveedor = new Proveedor('mysql', 'sigejupe');
                $this->proveedor->connect();
            } else {
                $this->proveedor = $proveedor;
            }

            $this->proveedor->execute("BEGIN");

            $AudienciasDto = $this->validarAudiencias($AudienciasDto);
            $audienciasAuxDto = new AudienciasDTO();
            $audienciasDao = new AudienciasDAO();


            $movimiento = "";

            $audienciasAuxDto->setIdAudiencia($AudienciasDto->getIdAudiencia());
            $rsAudiencias = $audienciasDao->selectAudiencias($audienciasAuxDto);
            if ($rsAudiencias != "") {
//                if ($rsAudiencias[0]->getCveJuzgadoDesahoga() == $juzgadoSesion) {
                $movimiento .= "DATOS ANTERIORES DE LA AUDIENCIA; juzgado desahoga:" . $rsAudiencias[0]->getCveJuzgadoDesahoga() . " sala:" . $rsAudiencias[0]->getCveSala() . " estatus:" . $rsAudiencias[0]->getCveEstatusAudiencia() . " fecha inicial:" . $rsAudiencias[0]->getFechaInicial() . " fecha final:" . $rsAudiencias[0]->getFechaFinal() . " cveCatAudiencia:" . $rsAudiencias[0]->getCveCatAudiencia();
                $imputadosArrayReturn = array();
                $error = false;
                $msg = array();
                $index = 1;
                $count = 0;


                /////comienza a actulizarse la informacion en tblaudiencias
                $rsAudienciaDto = $audienciasDao->updateAudiencias($AudienciasDto, $this->proveedor);
                if ($rsAudienciaDto != "") {
                    $movimiento .= " DATOS ACTUALIZADOS DE LA AUDIENCIA: juzgado desahoga:" . $rsAudienciaDto[0]->getCveJuzgadoDesahoga() . " sala:" . $rsAudienciaDto[0]->getCveSala() . " estatus:" . $rsAudienciaDto[0]->getCveEstatusAudiencia() . " fecha inicial:" . $rsAudienciaDto[0]->getFechaInicial() . " fecha final:" . $rsAudienciaDto[0]->getFechaFinal() . " cveCatAudiencia:" . $rsAudienciaDto[0]->getCveCatAudiencia();
                    $audienciasJuzgadorDto = new AudienciasjuzgadorDTO();
                    $audienciasJuzgadorDao = new AudienciasjuzgadorDAO();
                    $audienciasJuzgadorDto->setIdAudiencia($AudienciasDto->getIdAudiencia());
                    $audienciasJuzgadorDto->setActivo("S");

                    $rsJuzgadoresDto = $audienciasJuzgadorDao->selectAudienciasjuzgador($audienciasJuzgadorDto, "", $this->proveedor);

                    if ($rsJuzgadoresDto != "") {

                        for ($contador = 0; $contador < count($rsJuzgadoresDto); $contador ++) {
                            $accion = false;
                            //Se verifica si los ids son iguales, de lo contrario se hara un update

                            if ($rsJuzgadoresDto[$contador]->getIdJuzgador() == $arrayJuzgadores[$contador] && $rsJuzgadoresDto[$contador]->getCveFuncionJuzgador() == $arracveFunciones[$contador]) {
                                $accion = true;
                            }
                            if (!$accion) {
                                foreach ($rsJuzgadoresDto as $rsJuzgadores) {
                                    $movimiento .= " JUZGADOR ANTERIOR: idAudienciaJuez:" . $rsJuzgadores->getIdAudienciaJuez() . " idJuzgador:" . $rsJuzgadores->getIdJuzgador() . "funcion: " . $rsJuzgadores->getCveFuncionJuzgador();
                                }
                                $juzgadorAuxDto = new AudienciasjuzgadorDTO();
//                                for ($i = 0; $i < count($arraIdAudienciaJuez); $i++) {
//                                    print_r($arraIdAudienciaJuez);
//                                    echo "ok";

                                if ($arracveFunciones[$contador] != "0") {
                                    $juzgadorAuxDto->setIdAudienciaJuez($arraIdAudienciaJuez[$contador]);
                                    $juzgadorAuxDto->setIdAudiencia($AudienciasDto->getIdAudiencia());
                                    $juzgadorAuxDto->setIdJuzgador($arrayJuzgadores[$contador]);
                                    $juzgadorAuxDto->setActivo("S");
                                    if ($rsAudiencias[0]->getCveTipoCarpeta() == 2) { //causa de control
                                        $juzgadorAuxDto->setCveFuncionJuzgador(1); //cveFunsion
                                    } else if ($rsAudiencias[0]->getCveTipoCarpeta() == 3) { //causa de juicio
                                        $juzgadorAuxDto->setCveFuncionJuzgador(3); //cveFunsion
                                    } else if ($rsAudiencias[0]->getCveTipoCarpeta() == 4) { //cauda de tribunal
                                        $juzgadorAuxDto->setCveFuncionJuzgador($arracveFunciones[$contador]);
                                    }
                                    $movimiento .= " JUZGADOR ACTUALIZADO: idAudienciaJuez:" . $rsJuzgadores->getIdAudienciaJuez() . "idJuzgador:" . $juzgadorAuxDto->getIdJuzgador() . "funcion: " . $juzgadorAuxDto->getCveFuncionJuzgador();

                                    $rsJuzgadorAuxDto = $audienciasJuzgadorDao->updateAudienciasjuzgador($juzgadorAuxDto, $this->proveedor);
                                    if ($rsJuzgadorAuxDto != "") {
                                        ////Se obtiene el mes de cuando se asigno la audiencia
                                        $mesAudiencia = explode(" ", $rsAudiencias[0]->getFechaRegistro());
                                        $mesAudiencia = explode("-", $mesAudiencia[0]);
                                        $mesAudiencia = intval($mesAudiencia[1]);

                                        $controlCargasDto = new ControlcargasDTO();
                                        $controlCargasInicioDto = new ControlcargasDTO();
                                        $controlCargasDao = new ControlcargasDAO();

                                        $controlCargasInicioDto->setAnioCarga(date("Y"));
                                        $controlCargasInicioDto->setCveMes($mesAudiencia);
                                        $controlCargasInicioDto->setCveJuzgado($rsAudiencias[0]->getCveJuzgado());
                                        $controlCargasInicioDto->setIdJuzgador($rsJuzgadoresDto[$contador]->getIdJuzgador());
                                        $controlCargasInicioDto->setCveFuncionJuzgador($rsJuzgadoresDto[$contador]->getCveFuncionJuzgador());
                                        $controlCargasInicio = $controlCargasDao->selectControlcargas($controlCargasInicioDto, "", $this->proveedor);

                                        if ($controlCargasInicio != "") {
//                                            echo $controlCargasInicio[0]->getTotalAsignado() - 1;
                                            $controlCargasInicioDto->setIdControlCarga($controlCargasInicio[0]->getIdControlCarga());
                                            $controlCargasInicioDto->setTotalAsignado($controlCargasInicio[0]->getTotalAsignado() - 1);
                                            $controlCargasInicioDto->setTotalPuntaje($controlCargasInicio[0]->getTotalPuntaje() - 1);
//                                            print_R($controlCargasInicioDto);
                                            $rsControl = $controlCargasDao->updateControlcargas($controlCargasInicioDto, $this->proveedor);
                                            if ($rsControl == "") {
                                                $msg[] = array("No se pudo actualizar al control cargas");
                                                $error = true;
                                            }
                                        }

                                        $controlCargasDto->setAnioCarga(date("Y"));
                                        $controlCargasDto->setCveMes($mesAudiencia);
                                        $controlCargasDto->setCveJuzgado($rsAudiencias[0]->getCveJuzgado());
                                        $controlCargasDto->setIdJuzgador($rsJuzgadorAuxDto[0]->getIdJuzgador());
                                        $controlCargasDto->setCveFuncionJuzgador($rsJuzgadorAuxDto[0]->getCveFuncionJuzgador());
                                        ///se verifica que exista el registro
                                        $rsControlCargasDto = $controlCargasDao->selectControlcargas($controlCargasDto, "", $this->proveedor);
                                        if ($rsControlCargasDto != "") {
                                            ///Si existe el registro, se actualiza en totalasignados y el totalpuntaje
                                            $controlCargasDto->setIdControlCarga($rsControlCargasDto[0]->getIdControlCarga());
                                            $controlCargasDto->setTotalAsignado($rsControlCargasDto[0]->getTotalAsignado() + 1);
                                            $controlCargasDto->setTotalPuntaje($rsControlCargasDto[0]->getTotalPuntaje() + 1);

                                            $rsControl = $controlCargasDao->updateControlcargas($controlCargasDto, $this->proveedor);
                                            if ($rsControl == "") {
                                                $msg[] = array("No se pudo actualizar al control cargas");
                                                $error = true;
                                            }
                                        } else {
                                            //En caso de no existir, se inserta un nuevo registro y se inicializa en 1 el totalasignados y el totalpuntaje
                                            $controlCargasDto->setTotalPuntaje(1);
                                            $controlCargasDto->setTotalAsignado(1);
                                            $rsControl = $controlCargasDao->insertControlcargas($controlCargasDto, $this->proveedor);
                                            if ($rsControl == "") {
                                                $msg[] = array("No se pudo insertar al control cargas");
                                                $error = true;
                                            }
                                        }
                                    } else {
                                        $msg[] = array("No se pudo insertar al juzgador");
                                        $error = true;
                                    }
                                }
//                                }
                            }
                        }
                    } else {
                        ///en caso de no existir juzgadores
                        $juzgadorAuxDto = new AudienciasjuzgadorDTO();
                        for ($i = 0; $i < count($arrayJuzgadores); $i ++) {
                            if ($arrayJuzgadores[$i] != "0") {
                                $juzgadorAuxDto->setIdAudiencia($AudienciasDto->getIdAudiencia());
                                $juzgadorAuxDto->setIdJuzgador($arrayJuzgadores[$i]);
                                $juzgadorAuxDto->setActivo("S");
                                if ($rsAudiencias[0]->getCveTipoCarpeta() == 1 || $rsAudiencias[0]->getCveTipoCarpeta() == 2) { //causa de control
                                    $juzgadorAuxDto->setCveFuncionJuzgador(1); //cveFunsion
                                } else if ($rsAudiencias[0]->getCveTipoCarpeta() == 3) { //causa de juicio
                                    $juzgadorAuxDto->setCveFuncionJuzgador(3); //cveFunsion
                                } else if ($rsAudiencias[0]->getCveTipoCarpeta() == 4) { //cauda de tribunal
                                    $juzgadorAuxDto->setCveFuncionJuzgador($arracveFunciones[$i]);
                                }
                                $movimiento .= " JUZGADOR INSERTADO idJuzgador:" . $juzgadorAuxDto->getIdJuzgador() . "funcion: " . $juzgadorAuxDto->getCveFuncionJuzgador();
                                $rsJuzgadorAuxDto = $audienciasJuzgadorDao->insertAudienciasjuzgador($juzgadorAuxDto, $this->proveedor);
                                if ($rsJuzgadorAuxDto != "") {
                                    ////Se obtiene el mes de cuando se asigno la audiencia
                                    $mesAudiencia = explode(" ", $rsAudiencias[0]->getFechaRegistro());
                                    $mesAudiencia = explode("-", $mesAudiencia[0]);
                                    $mesAudiencia = intval($mesAudiencia[1]);

                                    $controlCargasDto = new ControlcargasDTO();
                                    $controlCargasDao = new ControlcargasDAO();

                                    $controlCargasDto->setAnioCarga(date("Y"));
                                    $controlCargasDto->setCveMes($mesAudiencia);
                                    $controlCargasDto->setCveJuzgado($rsAudiencias[0]->getCveJuzgado());
                                    $controlCargasDto->setIdJuzgador($rsJuzgadorAuxDto[0]->getIdJuzgador());
                                    $controlCargasDto->setCveFuncionJuzgador($rsJuzgadorAuxDto[0]->getCveFuncionJuzgador());
                                    ///se verifica que exista el registro
                                    $rsControlCargasDto = $controlCargasDao->selectControlcargas($controlCargasDto, "", $this->proveedor);
                                    if ($rsControlCargasDto != "") {
                                        ///Si existe el registro, se actualiza en totalasignados y el totalpuntaje
                                        $controlCargasDto->setIdControlCarga($rsControlCargasDto[0]->getIdControlCarga());
                                        $controlCargasDto->setTotalAsignado($rsControlCargasDto[0]->getTotalAsignado() + 1);
                                        $controlCargasDto->setTotalPuntaje($rsControlCargasDto[0]->getTotalPuntaje() + 1);
                                        $rsControl = $controlCargasDao->updateControlcargas($controlCargasDto, $this->proveedor);
                                        if ($rsControl == "") {
                                            $msg[] = array("No se pudo actualizar al control cargas");
                                            $error = true;
                                        }
                                    } else {
                                        //En caso de no existir, se inserta un nuevo registro y se inicializa en 1 el totalasignados y el totalpuntaje
                                        $controlCargasDto->setTotalPuntaje(1);
                                        $controlCargasDto->setTotalAsignado(1);
                                        $rsControl = $controlCargasDao->insertControlcargas($controlCargasDto, $this->proveedor);
                                        if ($rsControl == "") {
                                            $msg[] = array("No se pudo insertar al control cargas");
                                            $error = true;
                                        }
                                    }
                                } else {
                                    $msg[] = array("No se pudo insertar al juzgador");
                                    $error = true;
                                }
                            }
                        }
                    }
                } else {
                    $msg[] = array("No se puedo actualizar la audiencia. Verifique");
                    $error = true;
                }
//                } else {
//                    $msg[] = array("Solo puede actualizar audiencias que se desahogen en su juzgado.");
//                    $error = true;
//                }
            } else {
                $msg[] = array("No se encontro la audiencia. Verifique");
                $error = true;
            }

            if ((!$error)) {
//                $this->proveedor->execute("ROLLBACK");
                $this->proveedor->execute("COMMIT");
                $BitacoramovimientosDao = new BitacoramovimientosDAO();
                $BitacoramovimientosDto = new BitacoramovimientosDTO();
                $BitacoramovimientosDto->setCveAccion("309");
                $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                $BitacoramovimientosDto->setObservaciones($movimiento);
                $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
                $result = array(
                    "status" => "Ok",
                    "msj"    => "Se actualizo de forma correcta",
                );
            } else {
                $this->proveedor->execute("ROLLBACK");
                $result = array("status" => "Error", "msj" => $msg);
                $result = ($result);
            }
        } else {
            $result = array("status" => "Error", "msj" => "La sesion caduco. Inicie sesion de nuevo");
            $result = ($result);
        }

        return json_encode($result);
    }

    public function selectAudienciasHorariosTerminacion($AudienciasDto, $proveedor = null)
    {
        $fechaConsulta = $AudienciasDto->getFechaInicial();
        $valida = true;
        $audienciasRelacionArray = array();
        $horas = array("00:00", "01:00", "02:00", "03:00", "04:00", "05:00", "06:00", "07:00", "08:00", "09:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00", "19:00", "20:00", "21:00", "22:00", "23:00", "23:59");
        $AudienciasDto = $this->validarAudiencias($AudienciasDto);
        $AudienciasDto->setCveJuzgadoDesahoga($_SESSION["cveAdscripcion"]);

        $AudienciasDao = new AudienciasDAO();


        $AudienciasDto->setCveEstatusAudiencia(1); ///solo audiencias POR celebrar
        $AudienciasDto = $AudienciasDao->selectAudienciasBetweenGeneral($AudienciasDto, $proveedor);

        if ($AudienciasDto != "") {
            $cataudienciasDto = new CatAudienciasDTO();
            $cataudienciasDao = new CatAudienciasDAO();
            $cataudienciasDto = $cataudienciasDao->selectcataudiencias($cataudienciasDto, "", $proveedor);

            $tiposcarpetasDto = new TiposCarpetasDTO();
            $tiposcarpetasDao = new TiposCarpetasDAO();
            $tiposcarpetasDto = $tiposcarpetasDao->selecttiposcarpetas($tiposcarpetasDto, "", $proveedor);

            $salasDto = new SalasDTO();
            $salasDao = new SalasDAO();
            $salasDto = $salasDao->selectsalas($salasDto, "", $proveedor);

            $estatusaudienciasDto = new EstatusAudienciasDTO();
            $estatusaudienciasDao = new EstatusAudienciasDAO();
            $estatusaudienciasDto = $estatusaudienciasDao->selectestatusaudiencias($estatusaudienciasDto, "", $proveedor);

            foreach ($AudienciasDto as $audienciaDto) {
//                if ($audienciaDto->getDetenido() == 1 || $audienciaDto->getDetenido() == 3) {
//                    $detenido = "S";
//                } else {
//                    $detenido = "N";
//                }

                $audienciasRelacion["parametro"] = "1";
                $audienciasRelacion["idAudiencia"] = $audienciaDto->getIdAudiencia();
                $audienciasRelacion["idSolicitudAudiencia"] = $audienciaDto->getIdSolicitudAudiencia();
                $audienciasRelacion["numero"] = $audienciaDto->getNumero();
                $audienciasRelacion["anio"] = $audienciaDto->getAnio();
                $audienciasRelacion["cveTipoCarpeta"] = $audienciaDto->getCveTipoCarpeta();
                $audienciasRelacion["activo"] = $audienciaDto->getActivo();
                $audienciasRelacion["fechaRegistro"] = $audienciaDto->getFechaRegistro();
                $audienciasRelacion["fechaActualizacion"] = $audienciaDto->getFechaActualizacion();
                $audienciasRelacion["fechaInicial"] = $audienciaDto->getFechaInicial();
                $audienciasRelacion["fechaFinal"] = $audienciaDto->getFechaFinal();
                $audienciasRelacion["cveCatAudiencia"] = $audienciaDto->getCveCatAudiencia();
                $audienciasRelacion["cveJuzgado"] = $audienciaDto->getCveJuzgado();
                $audienciasRelacion["cveJuzgadoDesahoga"] = $audienciaDto->getCveJuzgadoDesahoga();
                $audienciasRelacion["cveAdscripcionSolicita"] = $audienciaDto->getCveAdscripcionSolicita();
                $audienciasRelacion["cveUsuario"] = $audienciaDto->getCveUsuario();
                $audienciasRelacion["idReferencia"] = $audienciaDto->getIdReferencia();
                $audienciasRelacion["detenido"] = $audienciaDto->getDetenido();
                $audienciasRelacion["cveEstatusAudiencia"] = $audienciaDto->getCveEstatusAudiencia();
                $audienciasRelacion["cveSala"] = $audienciaDto->getCveSala();
                $audienciasRelacion["peso"] = $audienciaDto->getPeso();

                for ($index = 0; $index < count($cataudienciasDto); $index ++) {
                    if ($cataudienciasDto[$index]->getCveCatAudiencia() == $audienciaDto->getCveCatAudiencia()) {
                        $audienciasRelacion["cataudiencias"] = array("cveCatAudiencia" => $cataudienciasDto[$index]->getCveCatAudiencia(), "descripcion" => $cataudienciasDto[$index]->getDesCatAudiencia());
                        $tiposaudienciasDto = new TiposAudienciasDTO();
                        $tiposaudienciasDto->setCveTipoAudiencia($cataudienciasDto[$index]->getCveTipoAudiencia());
                        $tiposaudienciasDao = new TiposAudienciasDAO();
                        $tiposaudienciasDto = $tiposaudienciasDao->selecttiposaudiencias($tiposaudienciasDto, "", $this->proveedor);
                        foreach ($tiposaudienciasDto as $keyTipo => $valueTipo) {
                            $audienciasRelacion["tiposaudiencias"] = array("cveTipoAudiencia" => $valueTipo->getCveTipoAudiencia(), "desTipoAudiencia" => $valueTipo->getDesTipoAudiencia());
                        }
                        break;
                    }
                }

                for ($index = 0; $index < count($tiposcarpetasDto); $index ++) {
                    if ($tiposcarpetasDto[$index]->getCveTipoCarpeta() == $audienciaDto->getCveTipoCarpeta()) {
                        $audienciasRelacion["tiposcarpetas"] = array("cveTipoCarpeta" => $tiposcarpetasDto[$index]->getCveTipoCarpeta(), "descripcion" => $tiposcarpetasDto[$index]->getDesTipoCarpeta());
                        break;
                    }
                }

                for ($index = 0; $index < count($salasDto); $index ++) {
                    if ($salasDto[$index]->getCveSala() == $audienciaDto->getCveSala()) {
                        $audienciasRelacion["salas"] = array("cveSala" => $salasDto[$index]->getCveSala(), "descripcion" => $salasDto[$index]->getDesSala());
                        break;
                    }
                }

                for ($index = 0; $index < count($estatusaudienciasDto); $index ++) {
                    if ($estatusaudienciasDto[$index]->getCveEstatusAudiencia() == $audienciaDto->getCveEstatusAudiencia()) {
                        $audienciasRelacion["estatusAudiencia"] = array("cveEstatusAudiencia" => $estatusaudienciasDto[$index]->getCveEstatusAudiencia(), "descripcion" => $estatusaudienciasDto[$index]->getDesEstatusAudiencia());
                        break;
                    }
                }
                $audienciasjuzgadorDto = new AudienciasJuzgadorDTO();
                $audienciasjuzgadorDto->setIdAudiencia($audienciaDto->getIdAudiencia());
                $audienciasjuzgadorDto->setActivo("S");
                $audienciasjuzgadorDao = new AudienciasJuzgadorDAO();
                $audienciasjuzgadorDto = $audienciasjuzgadorDao->selectaudienciasjuzgador($audienciasjuzgadorDto, "", $proveedor);
                $audienciasRelacion["juzgadores"] = [];
                if ($audienciasjuzgadorDto != "") {
                    foreach ($audienciasjuzgadorDto as $audienciajuzgadorDto) {
                        $audienciasRelacion["audienciaJuzgador"][] = array("idAudienciaJuez" => $audienciajuzgadorDto->getIdAudienciaJuez(), "idJuzgador" => $audienciajuzgadorDto->getIdJuzgador());
                    }
                    foreach ($audienciasRelacion["audienciaJuzgador"] as $key => $value) {
                        $juzgadoresDto = new JuzgadoresDTO();
                        $juzgadoresDto->setIdJuzgador($value["idJuzgador"]);
                        $juzgadoresDao = new JuzgadoresDAO();
                        $juzgadoresDto = $juzgadoresDao->selectjuzgadores($juzgadoresDto, "", $proveedor);
                        foreach ($juzgadoresDto as $juzgadorDto) {
                            $audienciasRelacion["juzgadores"][] = array("nombre" => utf8_encode($juzgadorDto->getNombre()) . " " . utf8_encode($juzgadorDto->getPaterno()) . " " . utf8_encode($juzgadorDto->getMaterno()));
                        }
                    }
                } else {
                    $audienciasRelacion["audienciaJuzgador"] = [];
                }
                $audienciasRelacionArray[] = $audienciasRelacion;
                $audienciasRelacion["audienciaJuzgador"] = array();
                $audienciasRelacion["juzgadores"] = array();
            }
        } else {
            $valida = false;
        }
        if ($valida) {
            $cont = 0;
            $resultados = array();
            $resultados["status"] = "ok";
            foreach ($horas as $key => $val) {
                if ($val != "23:59") {
                    $timestamp = strtotime($val) + 60 * 60;
                    $val2 = date('H:i', $timestamp);
                    if ($val == "23:00") {
                        $val2 = "23:59";
                    }
                    $f1 = $fechaConsulta . " " . $val;
                    $f2 = $fechaConsulta . " " . $val2;
                    $t1 = strtotime($f1);
                    $t2 = strtotime($f2);
                    $resultados["informacion"][$cont]["horario"] = substr($f1, - 5) . " - " . substr($f2, - 5);
                    $resultados["informacion"][$cont]["data"] = "";
                    $cont2 = 0;
                    foreach ($audienciasRelacionArray as $keyRelacion => $valueRelacion) {
                        $f3 = $valueRelacion["fechaInicial"];
                        $f4 = $valueRelacion["fechaFinal"];
                        $t3 = strtotime($f3);
                        if (($t3 >= $t1) && ($t3 < $t2)) {
                            $resultados["informacion"][$cont]["horario"] = substr($f1, - 5) . " - " . substr($f2, - 5);
                            $resultados["informacion"][$cont]["data"][$cont2] = $valueRelacion;
                            $cont2 ++;
                        }
                    }
                }
                $cont ++;
            }
        } else {
            $resultados["status"] = "error";
            $resultados["mensaje"] = "No se encontraron resultados.";
        }
        $resultados = json_encode($resultados);

        return $resultados;
    }

    public function selecAdmintAudienciasJuzgadorTerminacion($AudienciasDto, $proveedor = null)
    {
        $fechaConsulta = $AudienciasDto->getFechaInicial();
        $valida = true;
        $audienciasRelacionArray = array();
        $horas = array("00:00", "01:00", "02:00", "03:00", "04:00", "05:00", "06:00", "07:00", "08:00", "09:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00", "19:00", "20:00", "21:00", "22:00", "23:00", "23:59");
        $AudienciasDto = $this->validarAudiencias($AudienciasDto);

        $audienciasjuzgadorDto = new AudienciasJuzgadorDTO();
        $audienciasjuzgadorDto->setIdJuzgador($AudienciasDto->getvariable());
        $audienciasjuzgadorDto->setActivo("S");
        $audienciasjuzgadorDao = new AudienciasJuzgadorDAO();

        $audienciasjuzgadorDto = $audienciasjuzgadorDao->selectaudienciasjuzgador($audienciasjuzgadorDto, "", $proveedor);
        if ($audienciasjuzgadorDto != "") {
            $audiencias = array();
            if ($audienciasjuzgadorDto != "") {
                foreach ($audienciasjuzgadorDto as $key => $value) {
                    $audiencias [] = $value->getIdAudiencia();
                }
            }
            if (count($audiencias) > 0) {
                $AudienciasDto->setvariable(implode(",", $audiencias));
            } else {
                $AudienciasDto->setvariable(0);
            }
            $AudienciasDao = new AudienciasDAO();
            $AudienciasDto->setCveEstatusAudiencia(1); ///solo audiencias POR celebrar
            $AudienciasDto = $AudienciasDao->selectAudienciasJuzgador($AudienciasDto, $proveedor);

            $cataudienciasDto = new CatAudienciasDTO();
            $cataudienciasDao = new CatAudienciasDAO();
            $cataudienciasDto = $cataudienciasDao->selectcataudiencias($cataudienciasDto, "", $proveedor);

            $tiposcarpetasDto = new TiposCarpetasDTO();
            $tiposcarpetasDao = new TiposCarpetasDAO();
            $tiposcarpetasDto = $tiposcarpetasDao->selecttiposcarpetas($tiposcarpetasDto, "", $proveedor);

            $salasDto = new SalasDTO();
            $salasDao = new SalasDAO();
            $salasDto = $salasDao->selectsalas($salasDto, "", $proveedor);

            $estatusaudienciasDto = new EstatusAudienciasDTO();
            $estatusaudienciasDao = new EstatusAudienciasDAO();
            $estatusaudienciasDto = $estatusaudienciasDao->selectestatusaudiencias($estatusaudienciasDto, "", $proveedor);

            if ($AudienciasDto != "") {
                foreach ($AudienciasDto as $audienciaDto) {
//                    if ($audienciaDto->getDetenido() == 1 || $audienciaDto->getDetenido() == 3) {
//                        $detenido = "S";
//                    } else {
//                        $detenido = "N";
//                    }
                    $audienciasRelacion["parametro"] = "1";
                    $audienciasRelacion["idAudiencia"] = $audienciaDto->getIdAudiencia();
                    $audienciasRelacion["idSolicitudAudiencia"] = $audienciaDto->getIdSolicitudAudiencia();
                    $audienciasRelacion["numero"] = $audienciaDto->getNumero();
                    $audienciasRelacion["anio"] = $audienciaDto->getAnio();
                    $audienciasRelacion["cveTipoCarpeta"] = $audienciaDto->getCveTipoCarpeta();
                    $audienciasRelacion["activo"] = $audienciaDto->getActivo();
                    $audienciasRelacion["fechaRegistro"] = $audienciaDto->getFechaRegistro();
                    $audienciasRelacion["fechaActualizacion"] = $audienciaDto->getFechaActualizacion();
                    $audienciasRelacion["fechaInicial"] = $audienciaDto->getFechaInicial();
                    $audienciasRelacion["fechaFinal"] = $audienciaDto->getFechaFinal();
                    $audienciasRelacion["cveCatAudiencia"] = $audienciaDto->getCveCatAudiencia();
                    $audienciasRelacion["cveJuzgado"] = $audienciaDto->getCveJuzgado();
                    $audienciasRelacion["cveJuzgadoDesahoga"] = $audienciaDto->getCveJuzgadoDesahoga();
                    $audienciasRelacion["cveAdscripcionSolicita"] = $audienciaDto->getCveAdscripcionSolicita();
                    $audienciasRelacion["cveUsuario"] = $audienciaDto->getCveUsuario();
                    $audienciasRelacion["idReferencia"] = $audienciaDto->getIdReferencia();
                    $audienciasRelacion["detenido"] = $audienciaDto->getDetenido();
                    $audienciasRelacion["cveEstatusAudiencia"] = $audienciaDto->getCveEstatusAudiencia();
                    $audienciasRelacion["cveSala"] = $audienciaDto->getCveSala();
                    $audienciasRelacion["peso"] = $audienciaDto->getPeso();

                    for ($index = 0; $index < count($cataudienciasDto); $index ++) {
                        if ($cataudienciasDto[$index]->getCveCatAudiencia() == $audienciaDto->getCveCatAudiencia()) {
                            $audienciasRelacion["cataudiencias"] = array("cveCatAudiencia" => $cataudienciasDto[$index]->getCveCatAudiencia(), "descripcion" => $cataudienciasDto[$index]->getDesCatAudiencia());
                            $tiposaudienciasDto = new TiposAudienciasDTO();
                            $tiposaudienciasDto->setCveTipoAudiencia($cataudienciasDto[$index]->getCveTipoAudiencia());
                            $tiposaudienciasDao = new TiposAudienciasDAO();
                            $tiposaudienciasDto = $tiposaudienciasDao->selecttiposaudiencias($tiposaudienciasDto, "", $this->proveedor);
                            foreach ($tiposaudienciasDto as $keyTipo => $valueTipo) {
                                $audienciasRelacion["tiposaudiencias"] = array("cveTipoAudiencia" => $valueTipo->getCveTipoAudiencia(), "desTipoAudiencia" => $valueTipo->getDesTipoAudiencia());
                            }
                            break;
                        }
                    }

                    for ($index = 0; $index < count($tiposcarpetasDto); $index ++) {
                        if ($tiposcarpetasDto[$index]->getCveTipoCarpeta() == $audienciaDto->getCveTipoCarpeta()) {
                            $audienciasRelacion["tiposcarpetas"] = array("cveTipoCarpeta" => $tiposcarpetasDto[$index]->getCveTipoCarpeta(), "descripcion" => $tiposcarpetasDto[$index]->getDesTipoCarpeta());
                            break;
                        }
                    }

                    for ($index = 0; $index < count($salasDto); $index ++) {
                        if ($salasDto[$index]->getCveSala() == $audienciaDto->getCveSala()) {
                            $audienciasRelacion["salas"] = array("cveSala" => $salasDto[$index]->getCveSala(), "descripcion" => $salasDto[$index]->getDesSala());
                            break;
                        }
                    }

                    for ($index = 0; $index < count($estatusaudienciasDto); $index ++) {
                        if ($estatusaudienciasDto[$index]->getCveEstatusAudiencia() == $audienciaDto->getCveEstatusAudiencia()) {
                            $audienciasRelacion["estatusAudiencia"] = array("cveEstatusAudiencia" => $estatusaudienciasDto[$index]->getCveEstatusAudiencia(), "descripcion" => $estatusaudienciasDto[$index]->getDesEstatusAudiencia());
                            break;
                        }
                    }

                    $audienciasjuzgadorDto = new AudienciasJuzgadorDTO();
                    $audienciasjuzgadorDto->setIdAudiencia($audienciaDto->getIdAudiencia());
                    $audienciasjuzgadorDto->setActivo("S");
                    $audienciasjuzgadorDao = new AudienciasJuzgadorDAO();
                    $audienciasjuzgadorDto = $audienciasjuzgadorDao->selectaudienciasjuzgador($audienciasjuzgadorDto, "", $proveedor);
                    $audienciasRelacion["juzgadores"] = [];
                    if ($audienciasjuzgadorDto != "") {
                        foreach ($audienciasjuzgadorDto as $audienciajuzgadorDto) {
                            $audienciasRelacion["audienciaJuzgador"][] = array("idAudienciaJuez" => $audienciajuzgadorDto->getIdAudienciaJuez(), "idJuzgador" => $audienciajuzgadorDto->getIdJuzgador());
                        }
                        foreach ($audienciasRelacion["audienciaJuzgador"] as $key => $value) {
                            $juzgadoresDto = new JuzgadoresDTO();
                            $juzgadoresDto->setIdJuzgador($value["idJuzgador"]);
                            $juzgadoresDao = new JuzgadoresDAO();
                            $juzgadoresDto = $juzgadoresDao->selectjuzgadores($juzgadoresDto, "", $proveedor);
                            foreach ($juzgadoresDto as $juzgadorDto) {
                                $audienciasRelacion["juzgadores"][] = array("nombre" => utf8_encode($juzgadorDto->getNombre()) . " " . utf8_encode($juzgadorDto->getPaterno()) . " " . utf8_encode($juzgadorDto->getMaterno()));
                            }
                        }
                    } else {
                        $audienciasRelacion["audienciaJuzgador"] = [];
                    }
                    $audienciasRelacionArray[] = $audienciasRelacion;
                    $audienciasRelacion["audienciaJuzgador"] = array();
                    $audienciasRelacion["juzgadores"] = array();
                }
            }
        } else {
            $valida = false;
        }
        if ($valida) {
            $cont = 0;
            $resultados = array();
            $resultados["status"] = "ok";
            foreach ($horas as $key => $val) {
                if ($val != "23:59") {
                    $timestamp = strtotime($val) + 60 * 60;
                    $val2 = date('H:i', $timestamp);
                    if ($val == "23:00") {
                        $val2 = "23:59";
                    }
                    $f1 = $fechaConsulta . " " . $val;
                    $f2 = $fechaConsulta . " " . $val2;
                    $t1 = strtotime($f1);
                    $t2 = strtotime($f2);
                    $resultados["informacion"][$cont]["horario"] = substr($f1, - 5) . " - " . substr($f2, - 5);
                    $resultados["informacion"][$cont]["data"] = "";
                    $cont2 = 0;
                    foreach ($audienciasRelacionArray as $keyRelacion => $valueRelacion) {
                        $f3 = $valueRelacion["fechaInicial"];
                        $f4 = $valueRelacion["fechaFinal"];
                        $t3 = strtotime($f3);
                        if (($t3 >= $t1) && ($t3 < $t2)) {
                            $resultados["informacion"][$cont]["horario"] = substr($f1, - 5) . " - " . substr($f2, - 5);
                            $resultados["informacion"][$cont]["data"][$cont2] = $valueRelacion;
                            $cont2 ++;
                        }
                    }
                }
                $cont ++;
            }
        } else {
            $resultados["status"] = "error";
            $resultados["mensaje"] = "No se encontraron resultados.";
        }
        $resultados = json_encode($resultados);

        return $resultados;
    }

    public function selecAdmintAudienciasSalasTerminacion($AudienciasDto, $proveedor = null)
    {
        $fechaConsulta = $AudienciasDto->getFechaInicial();
        $valida = true;


        $audienciasRelacionArray = array();
        $horas = array("00:00", "01:00", "02:00", "03:00", "04:00", "05:00", "06:00", "07:00", "08:00", "09:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00", "19:00", "20:00", "21:00", "22:00", "23:00", "23:59");
        $AudienciasDto = $this->validarAudiencias($AudienciasDto);

        $AudienciasDao = new AudienciasDAO();

        $AudienciasDto->setCveEstatusAudiencia(1); ///solo audiencias POR celebrar
        $AudienciasDto = $AudienciasDao->selectAudienciasSalas($AudienciasDto, $proveedor);

        $cataudienciasDto = new CatAudienciasDTO();
        $cataudienciasDao = new CatAudienciasDAO();
        $cataudienciasDto = $cataudienciasDao->selectcataudiencias($cataudienciasDto, "", $proveedor);

        $tiposcarpetasDto = new TiposCarpetasDTO();
        $tiposcarpetasDao = new TiposCarpetasDAO();
        $tiposcarpetasDto = $tiposcarpetasDao->selecttiposcarpetas($tiposcarpetasDto, "", $proveedor);

        $salasDto = new SalasDTO();
        $salasDao = new SalasDAO();
        $salasDto = $salasDao->selectsalas($salasDto, "", $proveedor);

        $estatusaudienciasDto = new EstatusAudienciasDTO();
        $estatusaudienciasDao = new EstatusAudienciasDAO();
        $estatusaudienciasDto = $estatusaudienciasDao->selectestatusaudiencias($estatusaudienciasDto, "", $proveedor);

        if ($AudienciasDto != "") {
            foreach ($AudienciasDto as $audienciaDto) {
//                if ($audienciaDto->getDetenido() == 1 || $audienciaDto->getDetenido() == 3) {
//                    $detenido = "S";
//                } else {
//                    $detenido = "N";
//                }
                $audienciasRelacion["parametro"] = "1";
                $audienciasRelacion["idAudiencia"] = $audienciaDto->getIdAudiencia();
                $audienciasRelacion["idSolicitudAudiencia"] = $audienciaDto->getIdSolicitudAudiencia();
                $audienciasRelacion["numero"] = $audienciaDto->getNumero();
                $audienciasRelacion["anio"] = $audienciaDto->getAnio();
                $audienciasRelacion["cveTipoCarpeta"] = $audienciaDto->getCveTipoCarpeta();
                $audienciasRelacion["activo"] = $audienciaDto->getActivo();
                $audienciasRelacion["fechaRegistro"] = $audienciaDto->getFechaRegistro();
                $audienciasRelacion["fechaActualizacion"] = $audienciaDto->getFechaActualizacion();
                $audienciasRelacion["fechaInicial"] = $audienciaDto->getFechaInicial();
                $audienciasRelacion["fechaFinal"] = $audienciaDto->getFechaFinal();
                $audienciasRelacion["cveCatAudiencia"] = $audienciaDto->getCveCatAudiencia();
                $audienciasRelacion["cveJuzgado"] = $audienciaDto->getCveJuzgado();
                $audienciasRelacion["cveJuzgadoDesahoga"] = $audienciaDto->getCveJuzgadoDesahoga();
                $audienciasRelacion["cveAdscripcionSolicita"] = $audienciaDto->getCveAdscripcionSolicita();
                $audienciasRelacion["cveUsuario"] = $audienciaDto->getCveUsuario();
                $audienciasRelacion["idReferencia"] = $audienciaDto->getIdReferencia();
                $audienciasRelacion["detenido"] = $audienciaDto->getDetenido();
                $audienciasRelacion["cveEstatusAudiencia"] = $audienciaDto->getCveEstatusAudiencia();
                $audienciasRelacion["cveSala"] = $audienciaDto->getCveSala();
                $audienciasRelacion["peso"] = $audienciaDto->getPeso();

                for ($index = 0; $index < count($cataudienciasDto); $index ++) {
                    if ($cataudienciasDto[$index]->getCveCatAudiencia() == $audienciaDto->getCveCatAudiencia()) {
                        $audienciasRelacion["cataudiencias"] = array("cveCatAudiencia" => $cataudienciasDto[$index]->getCveCatAudiencia(), "descripcion" => $cataudienciasDto[$index]->getDesCatAudiencia());
                        $tiposaudienciasDto = new TiposAudienciasDTO();
                        $tiposaudienciasDto->setCveTipoAudiencia($cataudienciasDto[$index]->getCveTipoAudiencia());
                        $tiposaudienciasDao = new TiposAudienciasDAO();
                        $tiposaudienciasDto = $tiposaudienciasDao->selecttiposaudiencias($tiposaudienciasDto, "", $this->proveedor);
                        foreach ($tiposaudienciasDto as $keyTipo => $valueTipo) {
                            $audienciasRelacion["tiposaudiencias"] = array("cveTipoAudiencia" => $valueTipo->getCveTipoAudiencia(), "desTipoAudiencia" => $valueTipo->getDesTipoAudiencia());
                        }
                        break;
                    }
                }

                for ($index = 0; $index < count($tiposcarpetasDto); $index ++) {
                    if ($tiposcarpetasDto[$index]->getCveTipoCarpeta() == $audienciaDto->getCveTipoCarpeta()) {
                        $audienciasRelacion["tiposcarpetas"] = array("cveTipoCarpeta" => $tiposcarpetasDto[$index]->getCveTipoCarpeta(), "descripcion" => $tiposcarpetasDto[$index]->getDesTipoCarpeta());
                        break;
                    }
                }

                for ($index = 0; $index < count($salasDto); $index ++) {
                    if ($salasDto[$index]->getCveSala() == $audienciaDto->getCveSala()) {
                        $audienciasRelacion["salas"] = array("cveSala" => $salasDto[$index]->getCveSala(), "descripcion" => $salasDto[$index]->getDesSala());
                        break;
                    }
                }

                for ($index = 0; $index < count($estatusaudienciasDto); $index ++) {
                    if ($estatusaudienciasDto[$index]->getCveEstatusAudiencia() == $audienciaDto->getCveEstatusAudiencia()) {
                        $audienciasRelacion["estatusAudiencia"] = array("cveEstatusAudiencia" => $estatusaudienciasDto[$index]->getCveEstatusAudiencia(), "descripcion" => $estatusaudienciasDto[$index]->getDesEstatusAudiencia());
                        break;
                    }
                }

                $audienciasjuzgadorDto = new AudienciasJuzgadorDTO();
                $audienciasjuzgadorDto->setIdAudiencia($audienciaDto->getIdAudiencia());
                $audienciasjuzgadorDto->setActivo("S");
                $audienciasjuzgadorDao = new AudienciasJuzgadorDAO();
                $audienciasjuzgadorDto = $audienciasjuzgadorDao->selectaudienciasjuzgador($audienciasjuzgadorDto, "", $proveedor);
                $audienciasRelacion["juzgadores"] = [];
                if ($audienciasjuzgadorDto != "") {
                    foreach ($audienciasjuzgadorDto as $audienciajuzgadorDto) {
                        $audienciasRelacion["audienciaJuzgador"][] = array("idAudienciaJuez" => $audienciajuzgadorDto->getIdAudienciaJuez(), "idJuzgador" => $audienciajuzgadorDto->getIdJuzgador());
                    }
                    foreach ($audienciasRelacion["audienciaJuzgador"] as $key => $value) {
                        $juzgadoresDto = new JuzgadoresDTO();
                        $juzgadoresDto->setIdJuzgador($value["idJuzgador"]);
                        $juzgadoresDao = new JuzgadoresDAO();
                        $juzgadoresDto = $juzgadoresDao->selectjuzgadores($juzgadoresDto, "", $proveedor);
                        foreach ($juzgadoresDto as $juzgadorDto) {
                            $audienciasRelacion["juzgadores"][] = array("nombre" => utf8_encode($juzgadorDto->getNombre()) . " " . utf8_encode($juzgadorDto->getPaterno()) . " " . utf8_encode($juzgadorDto->getMaterno()));
                        }
                    }
                } else {
                    $audienciasRelacion["audienciaJuzgador"] = [];
                }
                $audienciasRelacionArray[] = $audienciasRelacion;
                $audienciasRelacion["audienciaJuzgador"] = array();
                $audienciasRelacion["juzgadores"] = array();
            }
        } else {
            $valida = false;
        }

        if ($valida) {
            $cont = 0;
            $resultados = array();
            $resultados["status"] = "ok";
            foreach ($horas as $key => $val) {
                if ($val != "23:59") {
                    $timestamp = strtotime($val) + 60 * 60;
                    $val2 = date('H:i', $timestamp);
                    if ($val == "23:00") {
                        $val2 = "23:59";
                    }
                    $f1 = $fechaConsulta . " " . $val;
                    $f2 = $fechaConsulta . " " . $val2;
                    $t1 = strtotime($f1);
                    $t2 = strtotime($f2);
                    $resultados["informacion"][$cont]["horario"] = substr($f1, - 5) . " - " . substr($f2, - 5);
                    $resultados["informacion"][$cont]["data"] = "";
                    $cont2 = 0;
                    foreach ($audienciasRelacionArray as $keyRelacion => $valueRelacion) {
                        $f3 = $valueRelacion["fechaInicial"];
                        $f4 = $valueRelacion["fechaFinal"];
                        $t3 = strtotime($f3);
                        if (($t3 >= $t1) && ($t3 < $t2)) {
                            $resultados["informacion"][$cont]["horario"] = substr($f1, - 5) . " - " . substr($f2, - 5);
                            $resultados["informacion"][$cont]["data"][$cont2] = $valueRelacion;
                            $cont2 ++;
                        }
                    }
                }
                $cont ++;
            }
        } else {
            $resultados["status"] = "error";
            $resultados["mensaje"] = "No se encontraron resultados.";
        }
        $resultados = json_encode($resultados);

        return $resultados;
    }

    public function terminacionAudiencias($AudienciasDto, $proveedor = null)
    {
        $fechaHoraActual = date("Y-m-d H:i:s");
        if (isset($_SESSION["cveAdscripcion"]) && $_SESSION["cveAdscripcion"] !== "") {
            $juzgadoSesion = $_SESSION["cveAdscripcion"];
            if ($proveedor == null) {
                $this->proveedor = new Proveedor('mysql', 'sigejupe');
                $this->proveedor->connect();
            } else {
                $this->proveedor = $proveedor;
            }

            $AudienciasDto = $this->validarAudiencias($AudienciasDto);
            $audienciasAuxDto = new AudienciasDTO();
            $audienciasDao = new AudienciasDAO();
            $movimiento = "";
            $audienciasAuxDto->setIdAudiencia($AudienciasDto->getIdAudiencia());
            $rsAudiencias = $audienciasDao->selectAudiencias($audienciasAuxDto);
            if ($rsAudiencias != "") {
                $movimiento .= "DATOS ANTERIORES DE LA AUDIENCIA: idAudiencia: " . $rsAudiencias[0]->getIdAudiencia() . " fechaFinal:" . $rsAudiencias[0]->getFechaFinal() . " estatus:" . $rsAudiencias[0]->getCveEstatusAudiencia();
//                if ($rsAudiencias[0]->getCveJuzgadoDesahoga() == $juzgadoSesion) {
                if ($rsAudiencias[0]->getFechaInicial() <= $fechaHoraActual) {
                    if ($rsAudiencias[0]->getFechaFinal() >= $fechaHoraActual) {
                        $AudienciasDto->setFechaFinal($fechaHoraActual);
                    }
                    $imputadosArrayReturn = array();
                    $error = false;
                    $msg = array();
                    $index = 1;
                    $count = 0;
                    /////comienza a actulizarse la informacion en tblaudiencias
                    $rsAudienciaDto = $audienciasDao->updateAudiencias($AudienciasDto, $this->proveedor);
                    if ($rsAudienciaDto != "") {
                        $movimiento .= " DATOS ANTERIORES DE LA AUDIENCIA: idAudiencia: " . $rsAudienciaDto[0]->getIdAudiencia() . " fechaFinal:" . $rsAudienciaDto[0]->getFechaFinal() . " estatus:" . $rsAudienciaDto[0]->getCveEstatusAudiencia();
                        $audienciasJuzgadorDto = new AudienciasjuzgadorDTO();
                        $audienciasJuzgadorDao = new AudienciasjuzgadorDAO();
                        $audienciasJuzgadorDto->setIdAudiencia($AudienciasDto->getIdAudiencia());
                        $audienciasJuzgadorDto->setActivo("S");
                    } else {
                        $msg[] = array("No se puedo actualizar la audiencia. Verifique");
                        $error = true;
                    }
                } else {
                    $msg[] = array("No se puede modificar la audiencia, ya que la audiencia comienza el " . $this->fechaHoraNormal($rsAudiencias[0]->getFechaInicial()));
                    $error = true;
                }
//                } else {
//                    $msg[] = array("Solo puede actualizar audiencias que se desahogen en su juzgado.");
//                    $error = true;
//                }
            } else {
                $msg[] = array("No se encontro la audiencia. Verifique");
                $error = true;
            }

            if ((!$error)) {
                $BitacoramovimientosDao = new BitacoramovimientosDAO();
                $BitacoramovimientosDto = new BitacoramovimientosDTO();
                $BitacoramovimientosDto->setCveAccion("310");
                $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                $BitacoramovimientosDto->setObservaciones($movimiento);
                $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
                $result = array(
                    "status" => "Ok",
                    "msj"    => "Se actualizo de forma correcta",
                );
            } else {
                $result = array("status" => "Error", "msj" => $msg);
                $result = ($result);
            }
        } else {
            $result = array("status" => "Error", "msj" => "La sesion caduco. Inicie sesion de nuevo");
            $result = ($result);
        }

        return json_encode($result);
    }

    public function fechaHoraNormal($fecha)
    {
        list ($fechaAux, $hora) = explode(" ", $fecha);
        list($year, $mes, $dia) = explode("-", $fechaAux);

        return $dia . "/" . $mes . "/" . $year . " " . $hora;
    }

    public function selectJuzgadosDistrito($JuzgadosDto)
    {

//        $JuzgadosDto = $this->validarJuzgados($JuzgadosDto);
        $JuzgadosController = new JuzgadosController();
        $JuzgadosDto = $JuzgadosController->selectJuzgados($JuzgadosDto);
        if ($JuzgadosDto != "") {
            $cveDistrito = $JuzgadosDto[0]->getCveDistrito();
            $JuzgadosDto = new JuzgadosDTO();
            $JuzgadosDto->setCveDistrito($cveDistrito);
            $JuzgadosDto->setActivo("S");
            $JuzgadosDto = $JuzgadosController->selectJuzgados($JuzgadosDto, null, " AND cveTipoJuzgado in (1,2,3,4) ORDER BY desJuzgado ASC ");
            if ($JuzgadosDto != "") {
//                $dtoToJson = new DtoToJson($JuzgadosDto);
//
//                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
                return $JuzgadosDto;
            }

            return "";
        }


        return "";
    }

//
#-------------------------------------------------------------------------------------------------------------------------------

    /**
     * Obtiene la Informacion de una Audiencia en especifico
     * @param type $audienciaDto
     * @return type json
     */
    public function getInformacionAudiencia($audienciaDto)
    {
        if ($audienciaDto->getIdAudiencia() != "" || $audienciaDto->getIdAudiencia() != 0) {
            $result = array();
            $audienciaDao = new AudienciasDAO();
            $audienciaDto = $audienciaDao->selectAudiencias($audienciaDto);
            if ($audienciaDto != "") {
                $audienciaDto = $audienciaDto[0];
                $audienciasRelacion = array();
                $audienciasRelacion["audiencia"] = $audienciaDto->toString();

                #Obtenemos la sala
                $salasDto = new SalasDTO();
                $salasDao = new SalasDAO();
                $salasDto->setActivo("S");
                $salasDto->setCveSala($audienciaDto->getCveSala());
                $salasDto = $salasDao->selectSalas($salasDto);
                if ($salasDto != "") {
                    $salasDto = $salasDto[0];
                    $audienciasRelacion["salas"] = $salasDto->toString();
                }

                #Obtenemos los estatus
                $estatusDto = new EstatusaudienciasDTO();
                $estatusDAo = new EstatusaudienciasDAO();
                $estatusDto->setActivo("S");
                $estatusDto->setCveEstatusAudiencia($audienciaDto->getCveEstatusAudiencia());
                $estatusDto = $estatusDAo->selectEstatusaudiencias($estatusDto);
                if ($estatusDto != "") {
                    $estatusDto = $estatusDto[0];
                    $audienciasRelacion["estatusAudiencia"] = $estatusDto->toString();
                }

                #Obtenemos relacion Audiencia - Juzgador
                $audienciaJuzgadorDto = new AudienciasjuzgadorDTO();
                $audienciaJuzgadorDao = new AudienciasjuzgadorDAO();
                $audienciaJuzgadorDto->setActivo("S");
                $audienciaJuzgadorDto->setIdAudiencia($audienciaDto->getIdAudiencia());
                $audienciaJuzgadorDto = $audienciaJuzgadorDao->selectAudienciasjuzgador($audienciaJuzgadorDto);
                if ($audienciaJuzgadorDto != "") {
                    $audienciaJuzgadorDto = $audienciaJuzgadorDto[0];
                    #Obtenemos Juzgador
                    $juzgadorDto = new JuzgadoresDTO();
                    $juzgadorDao = new JuzgadoresDAO();
                    $juzgadorDto->setActivo("S");
                    $juzgadorDto->setIdJuzgador($audienciaJuzgadorDto->getIdJuzgador());
                    $juzgadorDto = $juzgadorDao->selectJuzgadores($juzgadorDto);
                    if ($juzgadorDto != "") {
                        $juzgadorDto = $juzgadorDto[0];
                        $audienciasRelacion["audienciaJuzgador"] = $juzgadorDto->toString();
                    }
                }

                #Obtenemos el Juzgado
                $juzgadoDto = new JuzgadosDTO();
                $juzgadoDao = new JuzgadosDAO();
                $juzgadoDto->setActivo("S");
                $juzgadoDto->setCveJuzgado($audienciaDto->getCveJuzgadoDesahoga());
                $juzgadoDto = $juzgadoDao->selectJuzgados($juzgadoDto);
                if ($juzgadoDto != "") {
                    $juzgadoDto = $juzgadoDto[0];
                    $audienciasRelacion["juzgados"] = $juzgadoDto->toString();
                }

                #Obtenemos la Informacion de la Solicitud de Audiencia
                $solicitudAudienciaDto = new SolicitudesaudienciasDTO();
                $solicitudAudienciaDao = new SolicitudesaudienciasDAO();
                $solicitudAudienciaDto->setActivo("S");
                $solicitudAudienciaDto->setIdSolicitudAudiencia($audienciaDto->getIdSolicitudAudiencia());
                $solicitudAudienciaDto = $solicitudAudienciaDao->selectSolicitudesaudiencias($solicitudAudienciaDto);
                if ($solicitudAudienciaDto != "") {
                    $solicitudAudienciaDto = $solicitudAudienciaDto[0];
                    $audienciasRelacion["solicitudes"] = $solicitudAudienciaDto->toString();
                    #Obtenemos la Etapa Procesal
                    $etapaProcesalDto = new EtapasprocesalesDTO();
                    $etapaProcesalDao = new EtapasprocesalesDAO();
                    $etapaProcesalDto->setActivo("S");
                    $etapaProcesalDto->setCveEtapaProcesal($solicitudAudienciaDto->getCveEtapaProcesal());
                    $etapaProcesalDto = $etapaProcesalDao->selectEtapasprocesales($etapaProcesalDto);
                    if ($etapaProcesalDto != "") {
                        $etapaProcesalDto = $etapaProcesalDto[0];
                        $audienciasRelacion["etapaProcesal"] = $etapaProcesalDto->toString();
                    }
                }

                #Obtenemos el tipo de Carpeta
                $tipocarpetasDto = new TiposcarpetasDTO();
                $tipocarpetasDao = new TiposcarpetasDAO();
                $tipocarpetasDto->setActivo("S");
                $tipocarpetasDto->setCveTipoCarpeta($audienciaDto->getCveTipoCarpeta());
                $tipocarpetasDto = $tipocarpetasDao->selectTiposcarpetas($tipocarpetasDto);
                if ($tipocarpetasDto != "") {
                    $tipocarpetasDto = $tipocarpetasDto[0];
                    $audienciasRelacion["tiposcarpetas"] = $tipocarpetasDto->toString();
                }

                #Obtenemos el catalogo de las audiencias
                $catalogoAudienciaDto = new CataudienciasDTO();
                $catalogoAudienciaDao = new CataudienciasDAO();
                $catalogoAudienciaDto->setActivo("S");
                $catalogoAudienciaDto->setCveCatAudiencia($audienciaDto->getCveCatAudiencia());
                $catalogoAudienciaDto = $catalogoAudienciaDao->selectCataudiencias($catalogoAudienciaDto);
                if ($catalogoAudienciaDto != "") {
                    $catalogoAudienciaDto = $catalogoAudienciaDto[0];
                    $audienciasRelacion["cataudiencias"] = $catalogoAudienciaDto->toString();

                    #Obtenemos los tipos de Audiencias
                    $tiposaudienciasDto = new TiposAudienciasDTO();
                    $tiposaudienciasDao = new TiposAudienciasDAO();
                    $tiposaudienciasDto->setActivo("S");
                    $tiposaudienciasDto->setCveTipoAudiencia($catalogoAudienciaDto->getCveTipoAudiencia());
                    $tiposaudienciasDto = $tiposaudienciasDao->selectTiposaudiencias($tiposaudienciasDto);
                    if ($tiposaudienciasDto != "") {
                        $tiposaudienciasDto = $tiposaudienciasDto[0];
                        $audienciasRelacion["tiposaudiencias"] = $tiposaudienciasDto->toString();
                    }
                }

                // Obtenemos el nombre del Solicitante
                $usuarioWS = new UsuarioCliente();
                $usuario = $usuarioWS->getUsuarios($audienciaDto->getCveUsuario());
                $usuario = json_decode($usuario, true);

                $audienciasRelacion["solicitante"] = utf8_encode($usuario["data"][0]["nombre"] .
                    " " . $usuario["data"][0]["paterno"] . " " . $usuario["data"][0]["materno"]);

                $result["type"] = "OK";
                $result["data"][0] = $audienciasRelacion;
            } else {
                $result = ["type" => "Error", "text" => "NO SE ENCONTRO LA AUDIENCIA"];
            }
        } else {
            $result = ["type" => "Error", "text" => "ID DE AUDIENCIA INCORRECTA"];
        }

        return json_encode($result);
    }

}

?>
