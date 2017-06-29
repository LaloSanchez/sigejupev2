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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/generos/GenerosDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/generos/GenerosDAO.Class.php");

    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesaudiencias/SolicitudesaudienciasDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesaudiencias/SolicitudesaudienciasDAO.Class.php");

    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposcarpetas/TiposcarpetasDAO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");

    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadossolicitudes/ImputadossolicitudesDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/imputadossolicitudes/ImputadossolicitudesController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tipospersonas/TipospersonasDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tipospersonas/TipospersonasController.Class.php");

    class ImputadossolicitudesFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarImputadossolicitudes($ImputadossolicitudesDto) {

            $ImputadossolicitudesDto->setidImputadoSolicitud(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getidImputadoSolicitud())))));
            $ImputadossolicitudesDto->setidSolicitudAudiencia(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getidSolicitudAudiencia())))));
            $ImputadossolicitudesDto->setactivo(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getactivo())))));
            $ImputadossolicitudesDto->setfechaRegistro(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getfechaRegistro())))));
            $ImputadossolicitudesDto->setfechaActualizacion(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getfechaActualizacion())))));
            $ImputadossolicitudesDto->setdetenido(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getdetenido())))));
            $ImputadossolicitudesDto->setnombre(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getnombre())))));
            $ImputadossolicitudesDto->setpaterno(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getpaterno())))));
            $ImputadossolicitudesDto->setmaterno(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getmaterno())))));
            $ImputadossolicitudesDto->setrfc(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getrfc())))));
            $ImputadossolicitudesDto->setcurp(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getcurp())))));
            $ImputadossolicitudesDto->setcveTipoDetencion(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getcveTipoDetencion())))));
            $ImputadossolicitudesDto->setcveGenero(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getcveGenero())))));
            $ImputadossolicitudesDto->setalias(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getalias())))));
            $ImputadossolicitudesDto->setfechaDeclaracion(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getfechaDeclaracion())))));
            if ($this->esFecha($ImputadossolicitudesDto->getfechaDeclaracion())) {
                $ImputadossolicitudesDto->setfechaDeclaracion($this->fechaMysql($ImputadossolicitudesDto->getfechaDeclaracion()));
            }
            $ImputadossolicitudesDto->setcvePaisNacimiento(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getcvePaisNacimiento())))));
            $ImputadossolicitudesDto->setcveEstadoNacimiento(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getcveEstadoNacimiento())))));
            $ImputadossolicitudesDto->setcveMunicipioNacimiento(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getcveMunicipioNacimiento())))));
            $ImputadossolicitudesDto->setfechaNacimiento(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getfechaNacimiento())))));
            if ($this->esFecha($ImputadossolicitudesDto->getfechaNacimiento())) {
                $ImputadossolicitudesDto->setfechaNacimiento($this->fechaMysql($ImputadossolicitudesDto->getfechaNacimiento()));
            }
            $ImputadossolicitudesDto->setedad(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getedad())))));
            $ImputadossolicitudesDto->setcveTipoPersona(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getcveTipoPersona())))));
            $ImputadossolicitudesDto->setCveTipoReligion(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getCveTipoReligion())))));
            $ImputadossolicitudesDto->setnombreMoral(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getnombreMoral())))));
            $ImputadossolicitudesDto->setcveNivelInstruccion(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getcveNivelInstruccion())))));
            $ImputadossolicitudesDto->setcveEstadoCivil(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getcveEstadoCivil())))));
            $ImputadossolicitudesDto->setcveEspanol(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getcveEspanol())))));
            $ImputadossolicitudesDto->setcveAlfabetismo(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getcveAlfabetismo())))));
            $ImputadossolicitudesDto->setcveDialectoIndigena(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getcveDialectoIndigena())))));
            $ImputadossolicitudesDto->setcveTipoFamiliaLinguistica(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getcveTipoFamiliaLinguistica())))));
            $ImputadossolicitudesDto->setcveOcupacion(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getcveOcupacion())))));
            $ImputadossolicitudesDto->setcveInterprete(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getcveInterprete())))));
            $ImputadossolicitudesDto->setcveEstadoPsicofisico(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getcveEstadoPsicofisico())))));
            $ImputadossolicitudesDto->setfechaImputacion(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getfechaImputacion())))));
            if ($this->esFecha($ImputadossolicitudesDto->getfechaImputacion())) {
                $ImputadossolicitudesDto->setfechaImputacion($this->fechaMysql($ImputadossolicitudesDto->getfechaImputacion()));
            }
            $ImputadossolicitudesDto->setfechaControlDet(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getfechaControlDet())))));
//        if ($this->esFecha($ImputadossolicitudesDto->getfechaControlDet())) {
            $ImputadossolicitudesDto->setfechaControlDet($this->fechaHoraMysql($ImputadossolicitudesDto->getfechaControlDet()));
//        }
            $ImputadossolicitudesDto->setfecTerminoCons(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getfecTerminoCons())))));
            if ($this->esFecha($ImputadossolicitudesDto->getfecTerminoCons())) {
                $ImputadossolicitudesDto->setfecTerminoCons($this->fechaMysql($ImputadossolicitudesDto->getfecTerminoCons()));
            }
            $ImputadossolicitudesDto->setfecCierreInv(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getfecCierreInv())))));
            if ($this->esFecha($ImputadossolicitudesDto->getfecCierreInv())) {
                $ImputadossolicitudesDto->setfecCierreInv($this->fechaMysql($ImputadossolicitudesDto->getfecCierreInv()));
            }
            $ImputadossolicitudesDto->setestadoNacimiento(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getestadoNacimiento())))));
            $ImputadossolicitudesDto->setmunicipioNacimiento(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getmunicipioNacimiento())))));
            $ImputadossolicitudesDto->setrelacionMoral(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getrelacionMoral())))));
            $ImputadossolicitudesDto->setpersonaMoral(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getpersonaMoral())))));
            $ImputadossolicitudesDto->setcveCereso(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getcveCereso())))));
            $ImputadossolicitudesDto->setcveEtapaProcesal(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getcveEtapaProcesal())))));
            $ImputadossolicitudesDto->setcveTipoReincidencia(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getcveTipoReincidencia())))));
            $ImputadossolicitudesDto->setingresoMensual(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getingresoMensual())))));
            $ImputadossolicitudesDto->setcveGrupoEdnico(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getcveGrupoEdnico())))));
            $ImputadossolicitudesDto->setcveGrupoEdnico(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getcveGrupoEdnico())))));
            $ImputadossolicitudesDto->setTieneSobreseimiento(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getTieneSobreseimiento())))));
            $ImputadossolicitudesDto->setFechaSobreseimiento(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $ImputadossolicitudesDto->getFechaSobreseimiento())))));
            return $ImputadossolicitudesDto;
        }

        public function selectImputadossolicitudes($ImputadossolicitudesDto) {
            $ImputadossolicitudesDto = $this->validarImputadossolicitudes($ImputadossolicitudesDto);
            $ImputadossolicitudesController = new ImputadossolicitudesController();
            $ImputadossolicitudesDto = $ImputadossolicitudesController->consultaImputadossolicitudes($ImputadossolicitudesDto);
            $json = "";
            $x = 1;
            $tiposPersonasDto = new TipospersonasDTO ();
            $tiposPersonasDao = new TipospersonasDAO ();
            if ($ImputadossolicitudesDto != "") {
                $json .= "{";
                $json .= '"status":"Ok",';
                $json .= '"totalCount":"' . count($ImputadossolicitudesDto) . '",';
                $json .= '"data":[';
                foreach ($ImputadossolicitudesDto as $ImputadoSolicitud) {
                    $tiposPersonasDto->setCveTipoPersona($ImputadoSolicitud->getCveTipoPersona());
                    $rsPersona = $tiposPersonasDao->selectTipospersonas($tiposPersonasDto);

                    $solicitudAudienciasDto = new SolicitudesaudienciasDTO();
                    $solicitudAudienciasDao = new SolicitudesaudienciasDAO();
                    $solicitudAudienciasDto->setIdSolicitudAudiencia($ImputadoSolicitud->getIdSolicitudAudiencia());
                    $rsSolicitudAudiencias = $solicitudAudienciasDao->selectSolicitudesaudiencias($solicitudAudienciasDto);
                    $json .= "{";
                    $json .= '"idImputadoSolicitud":' . json_encode(utf8_encode($ImputadoSolicitud->getIdImputadoSolicitud())) . ",";
                    $json .= '"idSolicitudAudiencia":' . json_encode(utf8_encode($ImputadoSolicitud->getIdSolicitudAudiencia())) . ",";
                    if ($rsSolicitudAudiencias != "") {
                        $json .= '"cveTipoCarpeta":' . json_encode(utf8_encode($rsSolicitudAudiencias[0]->getCveTipoCarpeta())) . ",";
                        if ($rsSolicitudAudiencias[0]->getCveTipoCarpeta() != "" || $rsSolicitudAudiencias[0]->getCveTipoCarpeta() != null && $rsSolicitudAudiencias[0]->getCveTipoCarpeta() != 0) {
                            $tiposCarpetasDto = new TiposcarpetasDTO();
                            $tiposCarpetasDao = new TiposcarpetasDAO();
                            $tiposCarpetasDto->setCveTipoCarpeta($rsSolicitudAudiencias[0]->getCveTipoCarpeta());
                            $rsCarpetas = $tiposCarpetasDao->selectTiposcarpetas($tiposCarpetasDto);
                            $json .= '"desCarpeta":' . json_encode(utf8_encode($rsCarpetas[0]->getDesTipoCarpeta())) . ",";
                        } else {
                            $json .= '"desCarpeta": "",';
                        }
                        $json .= '"numero":' . json_encode(utf8_encode($rsSolicitudAudiencias[0]->getNumero())) . ",";
                        $json .= '"numero":' . json_encode(utf8_encode($rsSolicitudAudiencias[0]->getNumero())) . ",";
                        $json .= '"anio":' . json_encode(utf8_encode($rsSolicitudAudiencias[0]->getAnio())) . ",";
                        $json .= '"nuc":' . json_encode(utf8_encode($rsSolicitudAudiencias[0]->getNuc())) . ",";
                        $json .= '"carpetaInv":' . json_encode(utf8_encode($rsSolicitudAudiencias[0]->getCarpetaInv())) . ",";
                    } else {
                        $json .= '"cveTipoCarpeta": "",';
                        $json .= '"numero": "",';
                        $json .= '"anio": "",';
                        $json .= '"nuc": "",';
                        $json .= '"carpetaInv": "",';
                    }

                    $json .= '"detenido":' . json_encode(utf8_encode($ImputadoSolicitud->getDetenido())) . ",";
                    $json .= '"nombre":' . json_encode(utf8_encode($ImputadoSolicitud->getNombre())) . ",";
                    $json .= '"paterno":' . json_encode(utf8_encode($ImputadoSolicitud->getPaterno())) . ",";
                    $json .= '"materno":' . json_encode(utf8_encode($ImputadoSolicitud->getMaterno())) . ",";
                    $json .= '"rfc":' . json_encode(utf8_encode($ImputadoSolicitud->getRfc())) . ",";
                    $json .= '"curp":' . json_encode(utf8_encode($ImputadoSolicitud->getCurp())) . ",";
                    $json .= '"cveTipoDetencion":' . json_encode(utf8_encode($ImputadoSolicitud->getCveTipoDetencion())) . ",";
                    $json .= '"cveGenero":' . json_encode(utf8_encode($ImputadoSolicitud->getCveGenero())) . ",";
                    $generosDto = new GenerosDTO();
                    $generosDao = new GenerosDAO();
                    $generosDto->setCveGenero($ImputadoSolicitud->getCveGenero());
                    $rsGenero = $generosDao->selectGeneros($generosDto);
                    if ($rsGenero != "") {
                        $json .= '"desGenero":' . json_encode(utf8_encode($rsGenero[0]->getDesGenero())) . ",";
                    } else {
                        $json .= '"desGenero": "",';
                    }

                    $json .= '"alias":' . json_encode(utf8_encode($ImputadoSolicitud->getAlias())) . ",";
                    if ($ImputadoSolicitud->getFechaDeclaracion() != "") {
                        $json .= '"fechaDeclaracion":' . json_encode(utf8_encode($this->fechaNormal($ImputadoSolicitud->getFechaDeclaracion()))) . ",";
                    } else {
                        $json .= '"fechaDeclaracion": "",';
                    }
                    $json .= '"cvePaisNacimiento":' . json_encode(utf8_encode($ImputadoSolicitud->getCvePaisNacimiento())) . ",";
                    $json .= '"cveEstadoNacimiento":' . json_encode(utf8_encode($ImputadoSolicitud->getCveEstadoNacimiento())) . ",";
                    $json .= '"cveMunicipioNacimiento":' . json_encode(utf8_encode($ImputadoSolicitud->getCveMunicipioNacimiento())) . ",";
                    if ($ImputadoSolicitud->getFechaNacimiento() != "") {
                        $json .= '"fechaNacimiento":' . json_encode(utf8_encode($this->fechaNormal($ImputadoSolicitud->getFechaNacimiento()))) . ",";
                    } else {
                        $json .= '"fechaNacimiento": "",';
                    }
                    $json .= '"edad":' . json_encode(utf8_encode($ImputadoSolicitud->getEdad())) . ",";
                    $json .= '"cveTipoPersona":' . json_encode(utf8_encode($ImputadoSolicitud->getCveTipoPersona())) . ",";
                    if ($rsPersona != "") {
                        $json .= '"desTipoPersona":' . json_encode(utf8_encode($rsPersona[0]->getDesTipoPersona())) . ",";
                    } else {
                        $json .= '"desTipoPersona": "N/A",';
                    }
                    $json .= '"CveTipoReligion":' . json_encode(utf8_encode($ImputadoSolicitud->getCveTipoReligion())) . ",";
                    $json .= '"nombreMoral":' . json_encode(utf8_encode($ImputadoSolicitud->getNombreMoral())) . ",";
                    $json .= '"cveNivelInstruccion":' . json_encode(utf8_encode($ImputadoSolicitud->getCveNivelInstruccion())) . ",";
                    $json .= '"cveEstadoCivil":' . json_encode(utf8_encode($ImputadoSolicitud->getCveEstadoCivil())) . ",";
                    $json .= '"cveEspanol":' . json_encode(utf8_encode($ImputadoSolicitud->getCveEspanol())) . ",";
                    $json .= '"cveAlfabetismo":' . json_encode(utf8_encode($ImputadoSolicitud->getCveAlfabetismo())) . ",";
                    $json .= '"cveDialectoIndigena":' . json_encode(utf8_encode($ImputadoSolicitud->getCveDialectoIndigena())) . ",";
                    $json .= '"cveTipoFamiliaLinguistica":' . json_encode(utf8_encode($ImputadoSolicitud->getCveTipoFamiliaLinguistica())) . ",";
                    $json .= '"cveOcupacion":' . json_encode(utf8_encode($ImputadoSolicitud->getCveOcupacion())) . ",";
                    $json .= '"cveInterprete":' . json_encode(utf8_encode($ImputadoSolicitud->getCveInterprete())) . ",";
                    $json .= '"cveEstadoPsicofisico":' . json_encode(utf8_encode($ImputadoSolicitud->getCveEstadoPsicofisico())) . ",";
                    if ($ImputadoSolicitud->getFechaImputacion() != "") {
                        $json .= '"fechaImputacion":' . json_encode(utf8_encode($this->fechaNormal($ImputadoSolicitud->getFechaImputacion()))) . ",";
                    } else {
                        $json .= '"fechaImputacion": "",';
                    }
                    if ($ImputadoSolicitud->getFechaControlDet() != "") {
                        $json .= '"fechaControlDet":' . json_encode(utf8_encode($this->fechaHoraNormal($ImputadoSolicitud->getFechaControlDet()))) . ",";
                    } else {
                        $json .= '"fechaControlDet": "",';
                    }
                    if ($ImputadoSolicitud->getFecTerminoCons() != "") {
                        $json .= '"fecTerminoCons":' . json_encode(utf8_encode($this->fechaNormal($ImputadoSolicitud->getFecTerminoCons()))) . ",";
                    } else {
                        $json .= '"fecTerminoCons": "",';
                    }
                    if ($ImputadoSolicitud->getFecCierreInv() != "") {
                        $json .= '"fecCierreInv":' . json_encode(utf8_encode($this->fechaNormal($ImputadoSolicitud->getFecCierreInv()))) . ",";
                    } else {
                        $json .= '"fecCierreInv": "",';
                    }
                    $json .= '"estadoNacimiento":' . json_encode(utf8_encode($ImputadoSolicitud->getEstadoNacimiento())) . ",";
                    $json .= '"municipioNacimiento":' . json_encode(utf8_encode($ImputadoSolicitud->getMunicipioNacimiento())) . ",";
                    $json .= '"relacionMoral":' . json_encode(utf8_encode($ImputadoSolicitud->getRelacionMoral())) . ",";
                    $json .= '"personaMoral":' . json_encode(utf8_encode($ImputadoSolicitud->getPersonaMoral())) . ",";
                    $json .= '"cveCereso":' . json_encode(utf8_encode($ImputadoSolicitud->getCveCereso())) . ",";
                    $json .= '"ingresoMensual":' . json_encode(utf8_encode($ImputadoSolicitud->getIngresoMensual())) . ",";
                    $json .= '"cveTipoReincidencia":' . json_encode(utf8_encode($ImputadoSolicitud->getCveTipoReincidencia())) . ",";
                    $json .= '"cveGrupoEdnico":' . json_encode(utf8_encode($ImputadoSolicitud->getCveGrupoEdnico())) . "";
                    $json .= "}" . "\n";
                    $x ++;
                    if ($x <= count($ImputadossolicitudesDto)) {
                        $json .= ",";
                    }
                }
                $json .= "]";
                $json .= "}";
            } else {
                $json .= '{"estatus":"Fail",';
                $json .= '"mnj":"No se encontraron resultados."}';
            }
            echo $json;
        }

        public function selectImputadossolicitudesTotal($ImputadossolicitudesDto) {
            $ImputadossolicitudesDto = $this->validarImputadossolicitudes($ImputadossolicitudesDto);
            $ImputadossolicitudesController = new ImputadossolicitudesController();
            $rs = $ImputadossolicitudesController->consultaImputadossolicitudesTotal($ImputadossolicitudesDto);
            return $rs;
        }

        public function insertImputadossolicitudes($imputadoglobal) {
//        $ImputadossolicitudesDto = $this->validarImputadossolicitudes($ImputadossolicitudesDto);
            $ImputadossolicitudesController = new ImputadossolicitudesController();
            $ImputadossolicitudesDto = $ImputadossolicitudesController->insertImputadossolicitudes($imputadoglobal);
//        print_r($ImputadossolicitudesDto);
            return $ImputadossolicitudesDto;
        }

        public function updateImputadossolicitudes($ImputadossolicitudesDto) {
            $ImputadossolicitudesDto = $this->validarImputadossolicitudes($ImputadossolicitudesDto);
            $ImputadossolicitudesController = new ImputadossolicitudesController();
            $ImputadossolicitudesDto = $ImputadossolicitudesController->updateImputadossolicitudes($ImputadossolicitudesDto);
            if ($ImputadossolicitudesDto != "") {
                $dtoToJson = new DtoToJson($ImputadossolicitudesDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteImputadossolicitudes($ImputadossolicitudesDto) {
            $ImputadossolicitudesDto = $this->validarImputadossolicitudes($ImputadossolicitudesDto);
            $ImputadossolicitudesController = new ImputadossolicitudesController();
            $rs = $ImputadossolicitudesController->eliminaImputado($ImputadossolicitudesDto);
            return $rs;
        }

        public function guardarImputado($ImputadossolicitudesDto) {
            $ImputadossolicitudesDto = $this->validarImputadossolicitudes($ImputadossolicitudesDto);
            $ImputadossolicitudesController = new ImputadossolicitudesController();
            $rs = $ImputadossolicitudesController->guardarImputado($ImputadossolicitudesDto);
            return ($rs);
        }

        public function modificarImputado($ImputadossolicitudesDto) {
            $ImputadossolicitudesDto = $this->validarImputadossolicitudes($ImputadossolicitudesDto);
            $ImputadossolicitudesController = new ImputadossolicitudesController();
            $rs = $ImputadossolicitudesController->modificarImputado($ImputadossolicitudesDto);
            return ($rs);
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

        private function fechaHoraMysql($fecha) {
            if ($fecha != "") {
                list ($fechaAux, $hora) = explode(" ", $fecha);
                list($dia, $mes, $year) = explode("/", $fechaAux);
                return $year . "-" . $mes . "-" . $dia . " " . $hora;
            }
        }

        private function fechaHoraNormal($fecha) {
            list ($fechaAux, $hora) = explode(" ", $fecha);
            list($year, $mes, $dia) = explode("-", $fechaAux);
            return $dia . "/" . $mes . "/" . $year . " " . $hora;
        }

        private function fechaNormal($fecha) {
            list($year, $mes, $dia) = explode("-", $fecha);
            return $dia . "/" . $mes . "/" . $year;
        }

    }

    @$idImputadoSolicitud = $_POST["idImputadoSolicitud"];
    @$idSolicitudAudiencia = $_POST["idSolicitudAudiencia"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$detenido = $_POST["detenido"];
    @$nombre = $_POST["nombre"];
    @$paterno = $_POST["paterno"];
    @$materno = $_POST["materno"];
    @$rfc = $_POST["rfc"];
    @$curp = $_POST["curp"];
    @$cveTipoDetencion = $_POST["cveTipoDetencion"];
    @$cveGenero = $_POST["cveGenero"];
    @$alias = $_POST["alias"];
    @$fechaDeclaracion = $_POST["fechaDeclaracion"];
    @$cvePaisNacimiento = $_POST["cvePaisNacimiento"];
    @$cveEstadoNacimiento = $_POST["cveEstadoNacimiento"];
    @$cveMunicipioNacimiento = $_POST["cveMunicipioNacimiento"];
    @$fechaNacimiento = $_POST["fechaNacimiento"];
    @$edad = $_POST["edad"];
    @$cveTipoPersona = $_POST["cveTipoPersona"];
    @$CveTipoReligion = $_POST["CveTipoReligion"];
    @$nombreMoral = $_POST["nombreMoral"];
    @$cveNivelInstruccion = $_POST["cveNivelInstruccion"];
    @$cveEstadoCivil = $_POST["cveEstadoCivil"];
    @$cveEspanol = $_POST["cveEspanol"];
    @$cveAlfabetismo = $_POST["cveAlfabetismo"];
    @$cveDialectoIndigena = $_POST["cveDialectoIndigena"];
    @$cveTipoFamiliaLinguistica = $_POST["cveTipoFamiliaLinguistica"];
    @$cveOcupacion = $_POST["cveOcupacion"];
    @$cveInterprete = $_POST["cveInterprete"];
    @$cveEstadoPsicofisico = $_POST["cveEstadoPsicofisico"];
    @$fechaImputacion = $_POST["fechaImputacion"];
    @$fechaControlDet = $_POST["fechaControlDet"];
    @$fecTerminoCons = $_POST["fecTerminoCons"];
    @$fecCierreInv = $_POST["fecCierreInv"];
    @$estadoNacimiento = $_POST["estadoNacimiento"];
    @$municipioNacimiento = $_POST["municipioNacimiento"];
    @$relacionMoral = $_POST["relacionMoral"];
    @$personaMoral = $_POST["personaMoral"];
    @$cveCereso = $_POST["cveCereso"];
    @$cveEstapaProcesal = $_POST["cveEstapaProcesal"];
    @$cveTipoReincidencia = $_POST["cveTipoReincidencia"];
    @$ingresoMensual = $_POST["ingresoMensual"];
    @$cveGrupoEdnico = $_POST["cveGrupoEdnico"];
    @$TieneSobreseimiento = $_POST["TieneSobreseimiento"];
    @$FechaSobreseimiento = $_POST["FechaSobreseimiento"];
    @$global = $_POST["global"];
    @$accion = $_POST["action"];

    $imputadossolicitudesFacade = new ImputadossolicitudesFacade();
    $imputadossolicitudesDto = new ImputadossolicitudesDTO();

    $imputadossolicitudesDto->setIdImputadoSolicitud($idImputadoSolicitud);
    $imputadossolicitudesDto->setIdSolicitudAudiencia($idSolicitudAudiencia);
    $imputadossolicitudesDto->setActivo($activo);
    $imputadossolicitudesDto->setFechaRegistro($fechaRegistro);
    $imputadossolicitudesDto->setFechaActualizacion($fechaActualizacion);
    $imputadossolicitudesDto->setDetenido($detenido);
    $imputadossolicitudesDto->setNombre($nombre);
    $imputadossolicitudesDto->setPaterno($paterno);
    $imputadossolicitudesDto->setMaterno($materno);
    $imputadossolicitudesDto->setRfc($rfc);
    $imputadossolicitudesDto->setCurp($curp);
    $imputadossolicitudesDto->setCveTipoDetencion($cveTipoDetencion);
    $imputadossolicitudesDto->setCveGenero($cveGenero);
    $imputadossolicitudesDto->setAlias($alias);
    $imputadossolicitudesDto->setFechaDeclaracion($fechaDeclaracion);
    $imputadossolicitudesDto->setCvePaisNacimiento($cvePaisNacimiento);
    $imputadossolicitudesDto->setCveEstadoNacimiento($cveEstadoNacimiento);
    $imputadossolicitudesDto->setCveMunicipioNacimiento($cveMunicipioNacimiento);
    $imputadossolicitudesDto->setFechaNacimiento($fechaNacimiento);
    $imputadossolicitudesDto->setEdad($edad);
    $imputadossolicitudesDto->setCveTipoPersona($cveTipoPersona);
    $imputadossolicitudesDto->setCveTipoReligion($CveTipoReligion);
    $imputadossolicitudesDto->setNombreMoral($nombreMoral);
    $imputadossolicitudesDto->setCveNivelInstruccion($cveNivelInstruccion);
    $imputadossolicitudesDto->setCveEstadoCivil($cveEstadoCivil);
    $imputadossolicitudesDto->setCveEspanol($cveEspanol);
    $imputadossolicitudesDto->setCveAlfabetismo($cveAlfabetismo);
    $imputadossolicitudesDto->setCveDialectoIndigena($cveDialectoIndigena);
    $imputadossolicitudesDto->setCveTipoFamiliaLinguistica($cveTipoFamiliaLinguistica);
    $imputadossolicitudesDto->setCveOcupacion($cveOcupacion);
    $imputadossolicitudesDto->setCveInterprete($cveInterprete);
    $imputadossolicitudesDto->setCveEstadoPsicofisico($cveEstadoPsicofisico);
    $imputadossolicitudesDto->setFechaImputacion($fechaImputacion);
    $imputadossolicitudesDto->setFechaControlDet($fechaControlDet);
    $imputadossolicitudesDto->setFecTerminoCons($fecTerminoCons);
    $imputadossolicitudesDto->setFecCierreInv($fecCierreInv);
    $imputadossolicitudesDto->setEstadoNacimiento($estadoNacimiento);
    $imputadossolicitudesDto->setMunicipioNacimiento($municipioNacimiento);
    $imputadossolicitudesDto->setRelacionMoral($relacionMoral);
    $imputadossolicitudesDto->setPersonaMoral($personaMoral);
    $imputadossolicitudesDto->setCveCereso($cveCereso);
    $imputadossolicitudesDto->setCveEtapaProcesal($cveEstapaProcesal);
    $imputadossolicitudesDto->setCveTipoReincidencia($cveTipoReincidencia);
    $imputadossolicitudesDto->setIngresoMensual($ingresoMensual);
    $imputadossolicitudesDto->setCveGrupoEdnico($cveGrupoEdnico);
    $imputadossolicitudesDto->setTieneSobreseimiento($TieneSobreseimiento);
    $imputadossolicitudesDto->setFechaSobreseimiento($FechaSobreseimiento);

    if (($accion == "saveStepTwo")) {
        $imputadoglobal = array();
        $imputadoglobal = json_decode($global, true);
//    print_r($imputadoglobal);
        $imputadossolicitudesDto = $imputadossolicitudesFacade->insertImputadossolicitudes($imputadoglobal);
        echo $imputadossolicitudesDto;
    } else if (($accion == "guardarImputado") && ($idImputadoSolicitud != "")) {
        $imputadossolicitudesDto = $imputadossolicitudesFacade->modificarImputado($imputadossolicitudesDto);
        echo $imputadossolicitudesDto;
    } else if ($accion == "consultar") {
        $imputadossolicitudesDto = $imputadossolicitudesFacade->selectImputadossolicitudes($imputadossolicitudesDto);
        echo $imputadossolicitudesDto;
    } else if ($accion == "consultarTotal") {
        $imputadossolicitudesDto = $imputadossolicitudesFacade->selectImputadossolicitudesTotal($imputadossolicitudesDto);
        echo $imputadossolicitudesDto;
    } else if (($accion == "elimina") && ($idImputadoSolicitud != "")) {
        $imputadossolicitudesDto = $imputadossolicitudesFacade->deleteImputadossolicitudes($imputadossolicitudesDto);
        echo $imputadossolicitudesDto;
    } else if (($accion == "seleccionar") && ($idImputadoSolicitud != "")) {
        $imputadossolicitudesDto = $imputadossolicitudesFacade->selectImputadossolicitudes($imputadossolicitudesDto);
        echo $imputadossolicitudesDto;
    } else if (($accion == "guardarImputado") && ($idImputadoSolicitud == "")) {
        $imputadossolicitudesDto = $imputadossolicitudesFacade->guardarImputado($imputadossolicitudesDto);
        echo $imputadossolicitudesDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>