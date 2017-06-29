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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitossolicitudes/DelitossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitossolicitudes/DelitossolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesaudiencias/SolicitudesaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesaudiencias/SolicitudesaudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitos/DelitosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/delitos/DelitosController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/impofedelsolicitudes/ImpofedelsolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/impofedelsolicitudes/ImpofedelsolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/ofendidossolicitudes/OfendidossolicitudesadminController.Class.php");



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

class DelitossolicitudesController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarDelitossolicitudes($DelitossolicitudesDto) {
        $DelitossolicitudesDto->setidDelitoSolicitud(strtoupper(str_ireplace("'", "", trim($DelitossolicitudesDto->getidDelitoSolicitud()))));
        $DelitossolicitudesDto->setactivo(strtoupper(str_ireplace("'", "", trim($DelitossolicitudesDto->getactivo()))));
        $DelitossolicitudesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($DelitossolicitudesDto->getfechaRegistro()))));
        $DelitossolicitudesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($DelitossolicitudesDto->getfechaActualizacion()))));
        $DelitossolicitudesDto->setidSolicitudAudiencia(strtoupper(str_ireplace("'", "", trim($DelitossolicitudesDto->getidSolicitudAudiencia()))));
        return $DelitossolicitudesDto;
    }

    public function selectDelitossolicitudes($paramDelitossolicitudesDto, $proveedor = null) {
        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();

        $delitossolicitudesDto = new DelitossolicitudesDTO();
        $delitossolicitudesDto->setIdDelitoSolicitud($paramDelitossolicitudesDto[0]["idDelitoSolicitud"]);
        $delitossolicitudesDto->setIdSolicitudAudiencia($paramDelitossolicitudesDto[0]["idSolicitudAudiencia"]);
        $delitossolicitudesDto->setCveDelito($paramDelitossolicitudesDto[0]["cveDelito"]);
        $delitossolicitudesDto->setActivo("S");

        if ($delitossolicitudesDto->getIdDelitoSolicitud() > 0 || $delitossolicitudesDto->getIdDelitoSolicitud() != "") {
            if (!$validacion->num(1, 11, (int) $delitossolicitudesDto->getIdDelitoSolicitud())) {
                $msg[] = array(utf8_encode("El delito no es valida"));
                $error = true;
            }
        }

        if ($delitossolicitudesDto->getIdSolicitudAudiencia() > 0 || $delitossolicitudesDto->getIdSolicitudAudiencia() != "") {
            if (!$validacion->num(1, 11, (int) $delitossolicitudesDto->getIdSolicitudAudiencia())) {
                $msg[] = array(utf8_encode("La solicitud no es valida"));
                $error = true;
            }
        }

        if ($delitossolicitudesDto->getCveDelito() > 0 || $delitossolicitudesDto->getCveDelito() != "") {
            if (!$validacion->num(1, 11, (int) $delitossolicitudesDto->getCveDelito())) {
                $msg[] = array(utf8_encode("El delito no es valida"));
                $error = true;
            }
        }

        if ((!$error) && (0 <= count($msg))) {
            $delitossolicitudesDao = new DelitossolicitudesDAO();
            $delitossolicitudesDto = $delitossolicitudesDao->selectDelitossolicitudes($delitossolicitudesDto, "");
            if ($delitossolicitudesDto != "") {
                
            } else {
                $msg[] = array("No existen delitos seleccionados");
                $error = true;
            }

            if ((!$error)) {
                $msg[] = array("Se encontraron resultados");
                foreach ($delitossolicitudesDto as $delitossolicitudesDto) {
                    $msg[] = $delitossolicitudesDto->toString();
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
        echo $result;
        return $result;
        /* $DelitossolicitudesDto = $this->validarDelitossolicitudes($DelitossolicitudesDto);
          $DelitossolicitudesDao = new DelitossolicitudesDAO();
          $DelitossolicitudesDto = $DelitossolicitudesDao->selectDelitossolicitudes($DelitossolicitudesDto, $proveedor);
          return $DelitossolicitudesDto; */
    }

    public function insertDelitossolicitudes($DelitossolicitudesDto, $usaBitacora = true, $proveedor = null) {
        $json = "";
        $x = 1;

        $DelitossolicitudesDto = $this->validarDelitossolicitudes($DelitossolicitudesDto);
        $DelitossolicitudesDao = new DelitossolicitudesDAO();

        //validamos que el delito no exista para esa solicitud
        $rsDelitossolicitudesDto = $DelitossolicitudesDao->selectDelitossolicitudes($DelitossolicitudesDto);
        if ($rsDelitossolicitudesDto == "") {
            $DelitossolicitudesAuxDto = new DelitossolicitudesDTO();

            //Verificamos cuantos delitos existen para esa solicitud
            $DelitossolicitudesAuxDto->setIdSolicitudAudiencia($DelitossolicitudesDto->getIdSolicitudAudiencia());
            $DelitossolicitudesAuxDto->setActivo("S");
            $rsDelitossolicitudes = $DelitossolicitudesDao->selectDelitossolicitudes($DelitossolicitudesAuxDto);
            if ($rsDelitossolicitudes != "") {
                $totalDelitos = count($rsDelitossolicitudes);
            } else {
                $totalDelitos = 0;
            }
            $solicitudAudienciasDTO = new SolicitudesaudienciasDTO();
            $solicitudAudienciasDao = new SolicitudesaudienciasDAO();
            $solicitudAudienciasDTO->setIdSolicitudAudiencia($DelitossolicitudesDto->getIdSolicitudAudiencia());
            $rsSolicitudAudiencia = $solicitudAudienciasDao->selectSolicitudesaudiencias($solicitudAudienciasDTO);
            $totalDelitosSolicitud = $rsSolicitudAudiencia[0]->getNumDelitos();

            if ($totalDelitos < $totalDelitosSolicitud) {
//                if ($rsSolicitudAudiencia[0]->getCveEstatusSolicitud() == '1') {
                $rsDelitos = $DelitossolicitudesDao->insertDelitossolicitudes($DelitossolicitudesDto);
                if ($rsDelitos != "") {
                    $json .= "{";
                    $json .= '"status":"ok",';
                    $json .= '"msj":"El delito se agrego de forma correcta",';
                    $json .= '"totalCount":"' . count($rsDelitos) . '",';
                    $json .= '"data":[';
                    foreach ($rsDelitos as $rsDelito) {
                        $json .= "{";
                        $json .= '"idDelitoSolicitud":' . json_encode(utf8_encode($rsDelito->getIdDelitoSolicitud())) . ",";
                        $json .= '"cveDelito":' . json_encode(utf8_encode($rsDelito->getCveDelito())) . ",";
                        $json .= '"idSolicitudAudiencia":' . json_encode(utf8_encode($rsDelito->getIdSolicitudAudiencia())) . "";
                        $json .= "}" . "\n";
                        $x ++;
                        if ($x <= count($rsDelitos)) {
                            $json .= ",";
                        }
                    }
                    $json .= "]";
                    $json .= "}";


                    if ($usaBitacora) {
                        $BitacoramovimientosDao = new BitacoramovimientosDAO();
                        $BitacoramovimientosDto = new BitacoramovimientosDTO();
                        $BitacoramovimientosDto->setCveAccion("78");
                        $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                        $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                        $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                        $BitacoramovimientosDto->setObservaciones("Inserto el delito: " . $json);
                        $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
                    }
                } else {
                    $json .= '{"status":"Fail",';
                    $json .= '"msj":"No se puedo registrar el delito. Verifique."}';
                }
//                } else {
//                    $json .= '{"status":"Fail",';
//                    $json .= '"msj":"No se puede agregar el delito, la solictud se encuentra enviada."}';
//                }
            } else {
                $json .= '{"status":"Fail",';
                $json .= '"msj":"Solo puedes agregar ' . $totalDelitosSolicitud . ' delito(s)."}';
            }
        } else {
            $json .= '{"status":"Fail",';
            $json .= '"msj":"El delito ya se encuentra dado de alta para esta solicitud."}';
        }
        return $json;
    }

    public function updateDelitossolicitudes($DelitossolicitudesDto, $proveedor = null) {
        $json = "";
        $x = 1;

        $DelitossolicitudesDto = $this->validarDelitossolicitudes($DelitossolicitudesDto);
        $DelitossolicitudesDao = new DelitossolicitudesDAO();

        //validamos que el delito no exista para esa solicitud
//        $rsDelitossolicitudesDto = $DelitossolicitudesDao->selectDelitossolicitudes($DelitossolicitudesDto);
//        if ($rsDelitossolicitudesDto == "") {
        $DelitossolicitudesAuxDto = new DelitossolicitudesDTO();

        //Verificamos cuantos delitos existen para esa solicitud
        $DelitossolicitudesAuxDto->setIdSolicitudAudiencia($DelitossolicitudesDto->getIdSolicitudAudiencia());
        $DelitossolicitudesAuxDto->setActivo("S");
        $rsDelitossolicitudes = $DelitossolicitudesDao->selectDelitossolicitudes($DelitossolicitudesAuxDto);
        if ($rsDelitossolicitudes != "") {
            $totalDelitos = count($rsDelitossolicitudes);
        } else {
            $totalDelitos = 0;
        }
        $solicitudAudienciasDTO = new SolicitudesaudienciasDTO();
        $solicitudAudienciasDao = new SolicitudesaudienciasDAO();
        $solicitudAudienciasDTO->setIdSolicitudAudiencia($DelitossolicitudesDto->getIdSolicitudAudiencia());
        $rsSolicitudAudiencia = $solicitudAudienciasDao->selectSolicitudesaudiencias($solicitudAudienciasDTO);
        $totalDelitosSolicitud = $rsSolicitudAudiencia[0]->getNumDelitos();

//        if ($totalDelitos < $totalDelitosSolicitud) {
//        if ($rsSolicitudAudiencia[0]->getCveEstatusSolicitud() == '1') {
        $rsDelitos = $DelitossolicitudesDao->updateDelitossolicitudes($DelitossolicitudesDto);
        if ($rsDelitos != "") {
            $json .= "{";
            $json .= '"status":"ok",';
            $json .= '"msj":"El delito se agrego de forma correcta",';
            $json .= '"totalCount":"' . count($rsDelitos) . '",';
            $json .= '"data":[';
            foreach ($rsDelitos as $rsDelito) {
                $json .= "{";
                $json .= '"idDelitoSolicitud":' . json_encode(utf8_encode($rsDelito->getIdDelitoSolicitud())) . ",";
                $json .= '"cveDelito":' . json_encode(utf8_encode($rsDelito->getCveDelito())) . ",";
                $json .= '"idSolicitudAudiencia":' . json_encode(utf8_encode($rsDelito->getIdSolicitudAudiencia())) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($rsDelitos)) {
                    $json .= ",";
                }
            }
            $json .= "]";
            $json .= "}";


            if ($usaBitacora) {
                $BitacoramovimientosDao = new BitacoramovimientosDAO();
                $BitacoramovimientosDto = new BitacoramovimientosDTO();
                $BitacoramovimientosDto->setCveAccion("79");
                $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                $BitacoramovimientosDto->setObservaciones("actualizo el delito: " . $json);
                $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
            }
        } else {
            $json .= '{"status":"Fail",';
            $json .= '"msj":"No se puedo actualizar el delito. Verifique."}';
        }
//        } else {
//            $json .= '{"status":"Fail",';
//            $json .= '"msj":"No se puede actualizar el delito, la solictud se encuentra enviada."}';
//        }
//        } else {
//            $json .= '{"status":"Fail",';
//            $json .= '"msj":"Solo puedes agregar ' . $totalDelitosSolicitud . ' delito(s)."}';
//        }
//        } else {
//            $json .= '{"status":"Fail",';
//            $json .= '"msj":"El delito ya se encuentra dado de alta para esta solicitud."}';
//        }
        return $json;
    }

    public function eliminarDelito($DelitossolicitudesDto, $usaBitacora = true, $proveedor = null) {
        $json = "";
        $error = false;
        $msg = array();


        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $this->proveedor->execute("BEGIN");

        $DelitossolicitudesDto = $this->validarDelitossolicitudes($DelitossolicitudesDto);
        $DelitossolicitudesDao = new DelitossolicitudesDAO();

        $rsDelito = $DelitossolicitudesDao->selectDelitossolicitudes($DelitossolicitudesDto);
        if ($rsDelito != "") {
            $solicitudAudienciasDTO = new SolicitudesaudienciasDTO();
            $solicitudAudienciasDao = new SolicitudesaudienciasDAO();
            $solicitudAudienciasDTO->setIdSolicitudAudiencia($rsDelito[0]->getIdSolicitudAudiencia());
            $rsSolicitudAudiencia = $solicitudAudienciasDao->selectSolicitudesaudiencias($solicitudAudienciasDTO);
//            if ($rsSolicitudAudiencia[0]->getCveEstatusSolicitud() == '1') {
            $DelitossolicitudesDto->setActivo("N");
            $rsDelitos = $DelitossolicitudesDao->updateDelitossolicitudes($DelitossolicitudesDto, $this->proveedor);
            if ($rsDelitos != "") {
                $impofedelSolicitudesDto = new ImpofedelsolicitudesDTO();
                $impofedelDto = new ImpofedelsolicitudesDTO();
                $impofedelSolicitudesDao = new ImpofedelsolicitudesDAO();
                $impofedelSolicitudesDto->setIdSolicitudAudiencia($rsDelito[0]->getIdSolicitudAudiencia());
                $impofedelSolicitudesDto->setIdDelitoSolicitud($rsDelito[0]->getIdDelitoSolicitud());
                $rsRelaciones = $impofedelSolicitudesDao->selectImpofedelsolicitudes($impofedelSolicitudesDto, "", $this->proveedor);
                if ($rsRelaciones != "") {
                    foreach ($rsRelaciones as $relaciones) {
                        $impofedelDto->setIdImpOfeDelSolicitud($relaciones->getIdImpOfeDelSolicitud());
                        $impofedelDto->setActivo('N');
                        $rsSolicitud = $impofedelSolicitudesDao->eliminaImpodelsolicitudes($impofedelDto, $this->proveedor);
                        if ($rsSolicitud == "") {
                            $msg[] = array("No se pudo eliminar la relacion:");
                            $error = true;
                        }
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
                                    $msg[] = array("No se pudo eliminar los efectos:");
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
                                    $msg[] = array("No se pudo eliminar la violencia de genero:");
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
                                            $msg[] = array("No se pudo eliminar los factores sociales:");
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
                                            $msg[] = array("No se pudo eliminar el homicidio doloso:");
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
                                    $msg[] = array("No se pudo eliminar trata de personas:");
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
                                    $msg[] = array("No se pudo eliminar sexuales:");
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
                                        $msg[] = array("No se pudo eliminar el testigo:");
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
                                                    $msg[] = array("No se pudo eliminar el detalle de la conducta:");
                                                    $error = true;
                                                }
                                            }
                                        }
                                    } else {
                                        $msg[] = array("No se pudo eliminar la conducta:");
                                        $error = true;
                                    }
                                }
                            }
                        }
                    }///termina foreach relacion
                }
            } else {
                $msg[] = array("No se puedo eliminar el delito. Verifique");
                $error = true;
            }
//            } else {
//                $msg[] = array("No se puede eliminar. La solicitud se encuentra enviada.");
//                $error = true;
//            }
        } else {
            $msg[] = array("No se encontro el delito solicitud. Verifique");
            $error = true;
        }

        if ((!$error)) {
            $this->proveedor->execute("COMMIT");
            $result = array("status" => "ok", "msj" => "El registro se elimino de forma correcta");
            $result = json_encode($result);

            if ($usaBitacora) {
                $BitacoramovimientosDao = new BitacoramovimientosDAO();
                $BitacoramovimientosDto = new BitacoramovimientosDTO();
                $BitacoramovimientosDto->setCveAccion("302");
                $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                $BitacoramovimientosDto->setObservaciones("ELIMINO el delito solicitud con id: " . $DelitossolicitudesDto->getIdDelitoSolicitud());
                $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
            }
        } else {
            $this->proveedor->execute("ROLLBACK");
            $result = array("status" => "error", "msj" => $msg);
            $result = json_encode($result);
        }
        return $result;
    }

    public function selectDelitossolicitudestotales($DelitossolicitudesDto, $proveedor = null) {

        $DelitossolicitudesDto = $this->validarDelitossolicitudes($DelitossolicitudesDto);
        $DelitossolicitudesDao = new DelitossolicitudesDAO();

        $solicitudAudienciasDao = new solicitudesAudienciasDAO();
        $solicitudAudienciasDto = new solicitudesAudienciasDTO();

        $rsTotalDelitos = $DelitossolicitudesDao->selectDelitossolicitudestotales($DelitossolicitudesDto, $proveedor);

        $solicitudAudienciasDto->setIdSolicitudAudiencia($DelitossolicitudesDto->getIdSolicitudAudiencia());
        $rsSolicitud = $solicitudAudienciasDao->selectSolicitudesaudiencias($solicitudAudienciasDto, $proveedor);
        $rsDelitosSolicitud = $rsSolicitud[0]->getNumDelitos();

        if ($rsTotalDelitos == $rsDelitosSolicitud) {
            $result = array(
                "status" => "ok",
                "msj" => "correcto",
                "totalDelitos" => $rsTotalDelitos,
                "imputadosSolicitud" => $rsDelitosSolicitud
            );
        } else if ($rsTotalDelitos < $rsDelitosSolicitud) {
            $result = array(
                "status" => "error",
                "msj" => "Faltan por agregar delitos. Verifique",
                "totalDelitos" => $rsTotalDelitos,
                "imputadosSolicitud" => $rsDelitosSolicitud
            );
        } else if ($rsTotalDelitos > $rsDelitosSolicitud) {
            $result = array(
                "status" => "error",
                "msj" => "Tiene agregado uno o mas delitos demas. Verifique",
                "totalDelitos" => $rsTotalDelitos,
                "imputadosSolicitud" => $rsDelitosSolicitud
            );
        }

        return json_encode($result);





        $DelitossolicitudesDto = $this->validarDelitossolicitudes($DelitossolicitudesDto);
        $DelitossolicitudesDao = new DelitossolicitudesDAO();
        $DelitossolicitudesDto = $DelitossolicitudesDao->selectDelitossolicitudestotales($DelitossolicitudesDto, $proveedor);
        $total = $DelitossolicitudesDto;
        if ($total > 0) {
            $totales = array("estatus" => "OK", "totalCount" => $total);
        } else {
            $totales = array("estatus" => "ERROR", "totalCount" => '0');
        }
        return json_encode($totales);
    }

    public function selectDelitosInner($DelitossolicitudesDto, $proveedor = null) {
        $DelitossolicitudesDto = $this->validarDelitossolicitudes($DelitossolicitudesDto);
        $DelitossolicitudesDao = new DelitossolicitudesDAO();
        $DelitossolicitudesDto = $DelitossolicitudesDao->selectDelitosInner($DelitossolicitudesDto, $proveedor);
        return $DelitossolicitudesDto;
//}
//return "";
    }

    public function updateDelitos($DelitossolicitudesDto, $proveedor = null) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $this->proveedor->execute('BEGIN');
        try {
            $DelitossolicitudesDto = $this->validarDelitossolicitudes($DelitossolicitudesDto);
            $DelitossolicitudesDao = new DelitossolicitudesDAO();
            $bitacora = new BitacoramovimientosController();
            $selectDelitossolicitudesDto = $DelitossolicitudesDao->selectDelitossolicitudes($DelitossolicitudesDto, $proveedor);
            if ($selectDelitossolicitudesDto > 0) {
                $respuesta = array("status" => "error", "mensaje" => "ESTE DELITO YA SE ENCUENTRA REGISTRADO PARA ESTA SOLICITUD");
                return json_encode($respuesta);
            } else {
                $DelitossolicitudesDto = $DelitossolicitudesDao->insertDelitossolicitudes($DelitossolicitudesDto, $proveedor);
                $bitacoraDomicilio = $bitacora->agregar(78, 'INSERCION tblsecuencias', 'txt', serialize($DelitossolicitudesDto[0]), '');
                $this->proveedor->execute('COMMIT');
                $respuesta = array("status" => "ok", "mensaje" => "SE INSERTO EL REGISTRO CORRECTAMENTE", "data" => serialize($DelitossolicitudesDto));
                return json_encode($respuesta);
            }
        } catch (Exception $e) {
            $this->proveedor->execute('ROLLBACK');
            return false;
        }
    }

    public function eliminaDelitos($DelitossolicitudesDto, $proveedor = null) {
        $DelitossolicitudesDto = $this->validarDelitossolicitudes($DelitossolicitudesDto);
        $DelitossolicitudesDao = new DelitossolicitudesDAO();
//$tmpDto = new DelitossolicitudesDTO();
//$tmpDto = $DelitossolicitudesDao->selectDelitossolicitudes($DelitossolicitudesDto,$proveedor);
//if($tmpDto!=""){//$DelitossolicitudesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $DelitossolicitudesDto = $DelitossolicitudesDao->eliminaDelitos($DelitossolicitudesDto, $proveedor);
        return $DelitossolicitudesDto;
//}
//return "";
    }

    public function deleteDelitossolicitudes($paramDelitossolicitudesDto, $proveedor = null) {
        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();

        if (count($paramDelitossolicitudesDto) <= 0) {
            $msg[] = array("Debe seleccionar por lo menos un Delito");
            $error = true;
        } else {
            $delitossolicitudesDto = new DelitossolicitudesDTO();
            $delitossolicitudesDto->setIdDelitoSolicitud($paramDelitossolicitudesDto[0]["idDelitoSolicitud"]);
            $delitossolicitudesDto->setActivo("N");

            if (!$validacion->num(1, 11, (int) $delitossolicitudesDto->getIdDelitoSolicitud())) {
                if ($delitossolicitudesDto->getIdDelitoSolicitud() <= 0) {
                    $msg[] = array(utf8_encode("El delito no es valida"));
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
            $delitossolicitudesDao = new DelitossolicitudesDAO();
            if ($delitossolicitudesDto->getIdDelitoSolicitud() != "0" || $delitossolicitudesDto->getIdDelitoSolicitud() != "") {
                $tmp = new DelitossolicitudesDTO();
                $tmp->setIdDelitoSolicitud($delitossolicitudesDto->getIdDelitoSolicitud());
                $tmp->setActivo("S");
                $tmp = $delitossolicitudesDao->selectDelitossolicitudes($tmp, "", $this->proveedor);
                if ($tmp != "") {
                    $delitossolicitudesDto = $delitossolicitudesDao->updateDelitossolicitudes($delitossolicitudesDto, $this->proveedor);
                    if ($delitossolicitudesDto != "") {
//                        print_r($impofedelsolicitud);
                    } else {
                        $msg[] = array("No se logro eliminar el delito debido a algun error en la transaccion ");
                        $error = true;
                    }
                } else {
                    $msg[] = array("No existe el delito a eliminar, o fue eliminado con anterioridad");
                    $error = true;
                }
            } else {
                $msg[] = array("El Delito no es valida");
                $error = true;
            }

            if ((!$error)) {
                $this->proveedor->execute("COMMIT");
                $msg[] = array("Delito eliminado de forma correcta");
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
        echo $result;
        return $result;
        /* $DelitossolicitudesDto = $this->validarDelitossolicitudes($DelitossolicitudesDto);
          $DelitossolicitudesDao = new DelitossolicitudesDAO();
          $DelitossolicitudesDto = $DelitossolicitudesDao->deleteDelitossolicitudes($DelitossolicitudesDto, $proveedor);
          return $DelitossolicitudesDto; */
    }

}

/* $delitossolicitudesDto[0] = new DelitossolicitudesDTO();
  $delitossolicitudesDto[0]->setIdDelitoSolicitud("");
  $delitossolicitudesDto[0]->setCveDelito(12);
  $delitossolicitudesDto[0]->setActivo("");
  $delitossolicitudesDto[0]->setFechaRegistro("");
  $delitossolicitudesDto[0]->setFechaActualizacion("");
  $delitossolicitudesDto[0]->setIdSolicitudAudiencia(240);

  $delitossolicitudesDto[1] = new DelitossolicitudesDTO();
  $delitossolicitudesDto[1]->setIdDelitoSolicitud("");
  $delitossolicitudesDto[1]->setCveDelito("");
  $delitossolicitudesDto[1]->setActivo("");
  $delitossolicitudesDto[1]->setFechaRegistro("");
  $delitossolicitudesDto[1]->setFechaActualizacion("");
  $delitossolicitudesDto[1]->setIdSolicitudAudiencia(179);

  //$param = array("delitossolicitudes" => array($delitossolicitudesDto[0]->toString(), $delitossolicitudesDto[1]->toString()));
  $param = array($delitossolicitudesDto[1]->toString());
  //echo json_encode($param);

  $delitossolicitudesController = new DelitossolicitudesController();
  //$delitossolicitudesController->insertDelitossolicitudes($param);
  //$delitossolicitudesController->deleteDelitossolicitudes($param);
  $delitossolicitudesController->selectDelitossolicitudes($param); */
?>