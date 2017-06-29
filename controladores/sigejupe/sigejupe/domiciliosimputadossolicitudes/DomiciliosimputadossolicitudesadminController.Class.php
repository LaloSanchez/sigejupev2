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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/domiciliosimputadossolicitudes/DomiciliosimputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/domiciliosimputadossolicitudes/DomiciliosimputadossolicitudesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoramovimientos/BitacoramovimientosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesaudiencias/SolicitudesaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesaudiencias/SolicitudesaudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadossolicitudes/ImputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadossolicitudes/ImputadossolicitudesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

class DomiciliosimputadossolicitudesController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarDomiciliosimputadossolicitudes($DomiciliosimputadossolicitudesDto) {
        $DomiciliosimputadossolicitudesDto->setidDomicilioImputadoSolicitud(strtoupper(str_ireplace("'", "", trim($DomiciliosimputadossolicitudesDto->getidDomicilioImputadoSolicitud()))));
        $DomiciliosimputadossolicitudesDto->setidImputadoSolicitud(strtoupper(str_ireplace("'", "", trim($DomiciliosimputadossolicitudesDto->getidImputadoSolicitud()))));
        $DomiciliosimputadossolicitudesDto->setDomicilioProcesal(strtoupper(str_ireplace("'", "", trim($DomiciliosimputadossolicitudesDto->getDomicilioProcesal()))));
        $DomiciliosimputadossolicitudesDto->setcvePais(strtoupper(str_ireplace("'", "", trim($DomiciliosimputadossolicitudesDto->getcvePais()))));
        $DomiciliosimputadossolicitudesDto->setcveEstado(strtoupper(str_ireplace("'", "", trim($DomiciliosimputadossolicitudesDto->getcveEstado()))));
        $DomiciliosimputadossolicitudesDto->setcveMunicipio(strtoupper(str_ireplace("'", "", trim($DomiciliosimputadossolicitudesDto->getcveMunicipio()))));
        $DomiciliosimputadossolicitudesDto->setdireccion(strtoupper(str_ireplace("'", "", trim($DomiciliosimputadossolicitudesDto->getdireccion()))));
        $DomiciliosimputadossolicitudesDto->setcolonia(strtoupper(str_ireplace("'", "", trim($DomiciliosimputadossolicitudesDto->getcolonia()))));
        $DomiciliosimputadossolicitudesDto->setnumInterior(strtoupper(str_ireplace("'", "", trim($DomiciliosimputadossolicitudesDto->getnumInterior()))));
        $DomiciliosimputadossolicitudesDto->setnumExterior(strtoupper(str_ireplace("'", "", trim($DomiciliosimputadossolicitudesDto->getnumExterior()))));
        $DomiciliosimputadossolicitudesDto->setcp(strtoupper(str_ireplace("'", "", trim($DomiciliosimputadossolicitudesDto->getcp()))));
        $DomiciliosimputadossolicitudesDto->setlatitud(strtoupper(str_ireplace("'", "", trim($DomiciliosimputadossolicitudesDto->getlatitud()))));
        $DomiciliosimputadossolicitudesDto->setlongitud(strtoupper(str_ireplace("'", "", trim($DomiciliosimputadossolicitudesDto->getlongitud()))));
        $DomiciliosimputadossolicitudesDto->setrecidenciaHabitual(strtoupper(str_ireplace("'", "", trim($DomiciliosimputadossolicitudesDto->getrecidenciaHabitual()))));
        $DomiciliosimputadossolicitudesDto->setestado(strtoupper(str_ireplace("'", "", trim($DomiciliosimputadossolicitudesDto->getestado()))));
        $DomiciliosimputadossolicitudesDto->setmunicipio(strtoupper(str_ireplace("'", "", trim($DomiciliosimputadossolicitudesDto->getmunicipio()))));
        $DomiciliosimputadossolicitudesDto->setcveConvivencia(strtoupper(str_ireplace("'", "", trim($DomiciliosimputadossolicitudesDto->getcveConvivencia()))));
        $DomiciliosimputadossolicitudesDto->setcveTipoDeVivienda(strtoupper(str_ireplace("'", "", trim($DomiciliosimputadossolicitudesDto->getcveTipoDeVivienda()))));
        return $DomiciliosimputadossolicitudesDto;
    }

    public function selectDomiciliosimputadossolicitudes($DomiciliosimputadossolicitudesDto, $proveedor = null) {
        $DomiciliosimputadossolicitudesDto = $this->validarDomiciliosimputadossolicitudes($DomiciliosimputadossolicitudesDto);
        $DomiciliosimputadossolicitudesDao = new DomiciliosimputadossolicitudesDAO();
        $DomiciliosimputadossolicitudesDto = $DomiciliosimputadossolicitudesDao->selectDomiciliosimputadossolicitudes($DomiciliosimputadossolicitudesDto, $proveedor);
        return $DomiciliosimputadossolicitudesDto;
    }

    public function insertDomiciliosimputadossolicitudes($domiciliosimputadossolicitudesDto, $proveedor = null, $botacora = true) {
        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();
        $count = 1;
        $indexCount = 0;
        $arrayAuxiliar = array();
        $listaResultados = array();

        $imputadossolicitud = new ImputadossolicitudesDTO();
        $imputadossolicitudesDao = new ImputadossolicitudesDAO();

        //Se verifica que exista el imputado
        $imputadossolicitud->setIdImputadoSolicitud($domiciliosimputadossolicitudesDto->getIdImputadoSolicitud());
        $imputadossolicitud->setActivo('S');
        $rsImputados = $imputadossolicitudesDao->selectImputadossolicitudes($imputadossolicitud, "", $proveedor);
        if ($rsImputados != "") {
            //Se verifica que el estatus de la solitud sea 1
            $solicitudAudienciasDTO = new SolicitudesaudienciasDTO();
            $solicitudAudienciasDao = new SolicitudesaudienciasDAO();
            $solicitudAudienciasDTO->setIdSolicitudAudiencia($rsImputados[0]->getIdSolicitudAudiencia());
            $rsSolicitudAudiencia = $solicitudAudienciasDao->selectSolicitudesaudiencias($solicitudAudienciasDTO);
//            if ($rsSolicitudAudiencia[0]->getCveEstatusSolicitud() == '1') {
                $domiciliosimputadossolicitudesDto = $this->validarDomiciliosimputadossolicitudes($domiciliosimputadossolicitudesDto);

                if (!$validacion->text(1, 3, (int) $domiciliosimputadossolicitudesDto->getCvePais())) {
                    if ($domiciliosimputadossolicitudesDto->getCvePais() <= 0) {
                        $msg[] = array("El pais no puede estar en blanco en la posicion:" . $count);
                        $error = true;
                    }
                }

                if ($domiciliosimputadossolicitudesDto->getCvePais() == 119) {
                    if (!$validacion->num(1, 2, (int) $domiciliosimputadossolicitudesDto->getCveEstado())) {
                        if ($domiciliosimputadossolicitudesDto->getCveEstado() <= 0) {
                            $msg[] = array("El estado requerido en la direccion en la posicion:" . $count);
                            $error = true;
                        }
                    }

                    if (!$validacion->num(1, 5, (int) $domiciliosimputadossolicitudesDto->getMunicipio())) {
                        if ($domiciliosimputadossolicitudesDto->getCveMunicipio() <= 0) {
                            $msg[] = array("El municipio es requerido en la direccion posicion:" . $count);
                            $error = true;
                        }
                    }
                } else {
                    if (!$validacion->text(1, 200, (string) $domiciliosimputadossolicitudesDto->getEstado())) {
                        if ($domiciliosimputadossolicitudesDto->getEstado() == "") {
                            $msg[] = array("El estado es requerido en la posicion:" . $count);
                            $error = true;
                        }
                    }

                    if (!$validacion->text(1, 200, (string) $domiciliosimputadossolicitudesDto->getMunicipio())) {
                        if ($domiciliosimputadossolicitudesDto->getMunicipio() == "") {
                            $msg[] = array("El municipio es requerido en la posicion:" . $count);
                            $error = true;
                        }
                    }
                }

                if (!$validacion->text(1, 500, (string) $domiciliosimputadossolicitudesDto->getDireccion())) {
                    if ($domiciliosimputadossolicitudesDto->getDireccion() == "") {
                        $msg[] = array("La direccion es requerido en la posicion:" . $count);
                        $error = true;
                    }
                }

                if (!$validacion->text(1, 200, (string) $domiciliosimputadossolicitudesDto->getColonia())) {
                    if ($domiciliosimputadossolicitudesDto->getColonia() == "") {
                        $msg[] = array("La colonia es requerido en la posicion:" . $count);
                        $error = true;
                    }
                }

                if ($domiciliosimputadossolicitudesDto->getCp() != "") {
                    if (!$validacion->textNum(1, 6, (string) $domiciliosimputadossolicitudesDto->getCp())) {
                        $msg[] = array("El Codigo postal es requerido en la posicion:" . $count);
                        $error = true;
                    }
                }

                if (!$validacion->textNum(1, 1, (string) $domiciliosimputadossolicitudesDto->getRecidenciaHabitual())) {
                    if ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() == "") {
                        $msg[] = array("Se debe residencia habitual (S o N) en la posicion:" . $count);
                        $error = true;
                    }
                }

                if (!$validacion->text(1, 3, (int) $domiciliosimputadossolicitudesDto->getCveTipoDeVivienda())) {
                    if ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() <= 0) {
                        $msg[] = array("Se debe de indicar el tipo de vivienda en la posicion:" . $count);
                        $error = true;
                    }
                }
                if (!$validacion->text(1, 3, (int) $domiciliosimputadossolicitudesDto->getCveConvivencia())) {
                    if ($domiciliosimputadossolicitudesDto->getCveConvivencia() <= 0) {
                        $msg[] = array("Se debe de indicar con quien vive en el domicilio en la posicion:" . $count);
                        $error = true;
                    }
                }
//            } else {
//                $msg[] = array("No se pueden agregar domicilios, ya que la solictud se encuentra enviada.");
//                $error = true;
//            }
        } else {
            $msg[] = array("No se encontro al imputado.");
            $error = true;
        }

        if (!$error) {
            $DomiciliosimputadossolicitudesDao = new DomiciliosimputadossolicitudesDAO();

            $domiciliosimputadossolicitudesDto = $DomiciliosimputadossolicitudesDao->insertDomiciliosimputadossolicitudes($domiciliosimputadossolicitudesDto, $proveedor);
            if ($domiciliosimputadossolicitudesDto != "") {
                $resultado = array(
                    "idDomicilioImputadoSolicitud" => $domiciliosimputadossolicitudesDto[0]->getIdDomicilioImputadoSolicitud(),
                    "idImputadoSolicitud" => $domiciliosimputadossolicitudesDto[0]->getIdImputadoSolicitud(),
                    "DomicilioProcesal" => $domiciliosimputadossolicitudesDto[0]->getDomicilioProcesal(),
                    "cvePais" => $domiciliosimputadossolicitudesDto[0]->getCvePais(),
                    "cveEstado" => $domiciliosimputadossolicitudesDto[0]->getCveEstado(),
                    "cveMunicipio" => $domiciliosimputadossolicitudesDto[0]->getCveMunicipio(),
                    "direccion" => utf8_encode($domiciliosimputadossolicitudesDto[0]->getDireccion()),
                    "colonia" => utf8_encode($domiciliosimputadossolicitudesDto[0]->getColonia()),
                    "numInterior" => utf8_encode($domiciliosimputadossolicitudesDto[0]->getNumInterior()),
                    "numExterior" => utf8_encode($domiciliosimputadossolicitudesDto[0]->getNumExterior()),
                    "cp" => $domiciliosimputadossolicitudesDto[0]->getCp(),
                    "latitud" => $domiciliosimputadossolicitudesDto[0]->getLatitud(),
                    "longitud" => $domiciliosimputadossolicitudesDto[0]->getLongitud(),
                    "recidenciaHabitual" => $domiciliosimputadossolicitudesDto[0]->getRecidenciaHabitual(),
                    "estado" => utf8_encode($domiciliosimputadossolicitudesDto[0]->getEstado()),
                    "municipio" => utf8_encode($domiciliosimputadossolicitudesDto[0]->getMunicipio()),
                    "cveConvivencia" => $domiciliosimputadossolicitudesDto[0]->getCveConvivencia(),
                    "cveTipoVivienda" => $domiciliosimputadossolicitudesDto[0]->getCveTipoDeVivienda(),
                );
                array_push($listaResultados, $resultado);
            } else {
                $msg[] = array("No se logro registrar el domicilio debido a algun error en la transaccion");
                $error = true;
            }
        }
        if ((!$error)) {
            $result = array(
                "status" => "Ok",
                "totalCount" => count($listaResultados),
                "resultados" => $listaResultados,
            );
            if ($botacora) {
                $BitacoramovimientosDao = new BitacoramovimientosDAO();
                $BitacoramovimientosDto = new BitacoramovimientosDTO();
                $BitacoramovimientosDto->setCveAccion("133");
                $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                $BitacoramovimientosDto->setObservaciones("AGREGO DOMICILIO IMPUTADO SOLICITUD: " . json_encode($result));
                $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
            }
        } else {
            $result = array("status" => "Error", "msj" => $msg);
            $result = ($result);
        }
        return json_encode($result);
    }

    public function updateDomiciliosimputadossolicitudes($domiciliosimputadossolicitudesDto, $proveedor = null, $botacora = true) {
        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();
        $count = 1;
        $indexCount = 0;
        $arrayAuxiliar = array();
        $listaResultados = array();

        $imputadossolicitud = new ImputadossolicitudesDTO();
        $imputadossolicitudesDao = new ImputadossolicitudesDAO();

        //Se verifica que exista el imputado
        $imputadossolicitud->setIdImputadoSolicitud($domiciliosimputadossolicitudesDto->getIdImputadoSolicitud());
        $imputadossolicitud->setActivo('S');
        $rsImputados = $imputadossolicitudesDao->selectImputadossolicitudes($imputadossolicitud, "", $this->proveedor);
        if ($rsImputados != "") {
            //Se verifica que el estatus de la solitud sea 1
            $solicitudAudienciasDTO = new SolicitudesaudienciasDTO();
            $solicitudAudienciasDao = new SolicitudesaudienciasDAO();
            $solicitudAudienciasDTO->setIdSolicitudAudiencia($rsImputados[0]->getIdSolicitudAudiencia());
            $rsSolicitudAudiencia = $solicitudAudienciasDao->selectSolicitudesaudiencias($solicitudAudienciasDTO);
//            if ($rsSolicitudAudiencia[0]->getCveEstatusSolicitud() == '1') {


                $domiciliosimputadossolicitudesDto = $this->validarDomiciliosimputadossolicitudes($domiciliosimputadossolicitudesDto);

                if (!$validacion->text(1, 3, (int) $domiciliosimputadossolicitudesDto->getCvePais())) {
                    if ($domiciliosimputadossolicitudesDto->getCvePais() <= 0) {
                        $msg[] = array("El pais no puede estar en blanco en la posicion:" . $count);
                        $error = true;
                    }
                }

                if ($domiciliosimputadossolicitudesDto->getCvePais() == 119) {
                    if (!$validacion->num(1, 2, (int) $domiciliosimputadossolicitudesDto->getCveEstado())) {
                        if ($domiciliosimputadossolicitudesDto->getCveEstado() <= 0) {
                            $msg[] = array("El estado requerido en la direccion en la posicion:" . $count);
                            $error = true;
                        }
                    }

                    if (!$validacion->num(1, 5, (int) $domiciliosimputadossolicitudesDto->getMunicipio())) {
                        if ($domiciliosimputadossolicitudesDto->getCveMunicipio() <= 0) {
                            $msg[] = array("El municipio es requerido en la direccion posicion:" . $count);
                            $error = true;
                        }
                    }
                } else {
                    if (!$validacion->text(1, 200, (string) $domiciliosimputadossolicitudesDto->getEstado())) {
                        if ($domiciliosimputadossolicitudesDto->getEstado() == "") {
                            $msg[] = array("El estado es requerido en la posicion:" . $count);
                            $error = true;
                        }
                    }

                    if (!$validacion->text(1, 200, (string) $domiciliosimputadossolicitudesDto->getMunicipio())) {
                        if ($domiciliosimputadossolicitudesDto->getMunicipio() == "") {
                            $msg[] = array("El municipio es requerido en la posicion:" . $count);
                            $error = true;
                        }
                    }
                }

                if (!$validacion->text(1, 500, (string) $domiciliosimputadossolicitudesDto->getDireccion())) {
                    if ($domiciliosimputadossolicitudesDto->getDireccion() == "") {
                        $msg[] = array("La direccion es requerido en la posicion:" . $count);
                        $error = true;
                    }
                }

                if (!$validacion->text(1, 200, (string) $domiciliosimputadossolicitudesDto->getColonia())) {
                    if ($domiciliosimputadossolicitudesDto->getColonia() == "") {
                        $msg[] = array("La colonia es requerido en la posicion:" . $count);
                        $error = true;
                    }
                }

//        if ($domiciliosimputadossolicitudesDto->getNumInterior() != "") {
//            if (!$validacion->textNum(1, 10, (string) $domiciliosimputadossolicitudesDto->getNumInterior())) {
//                $msg[] = array("El num interior es requerido en la posicion:" . $count);
//                $error = true;
//            }
//        }
//
//        if ($domiciliosimputadossolicitudesDto->getNumExterior() != "") {
//            if (!$validacion->textNum(1, 10, (string) $domiciliosimputadossolicitudesDto->getNumExterior())) {
//                $msg[] = array("El num exterior es requerido en la posicion:" . $count);
//                $error = true;
//            }
//        }

                if ($domiciliosimputadossolicitudesDto->getCp() != "") {
                    if (!$validacion->textNum(1, 6, (string) $domiciliosimputadossolicitudesDto->getCp())) {
                        $msg[] = array("El Codigo postal es requerido en la posicion:" . $count);
                        $error = true;
                    }
                }

                if (!$validacion->textNum(1, 1, (string) $domiciliosimputadossolicitudesDto->getRecidenciaHabitual())) {
                    if ($domiciliosimputadossolicitudesDto->getRecidenciaHabitual() == "") {
                        $msg[] = array("Se debe residencia habitual (S o N) en la posicion:" . $count);
                        $error = true;
                    }
                }

                if (!$validacion->text(1, 3, (int) $domiciliosimputadossolicitudesDto->getCveTipoDeVivienda())) {
                    if ($domiciliosimputadossolicitudesDto->getCveTipoDeVivienda() <= 0) {
                        $msg[] = array("Se debe de indicar el tipo de vivienda en la posicion:" . $count);
                        $error = true;
                    }
                }
                if (!$validacion->text(1, 3, (int) $domiciliosimputadossolicitudesDto->getCveConvivencia())) {
                    if ($domiciliosimputadossolicitudesDto->getCveConvivencia() <= 0) {
                        $msg[] = array("Se debe de indicar con quien vive en el domicilio en la posicion:" . $count);
                        $error = true;
                    }
                }
//            } else {
//                $msg[] = array("No se pueden Modificar los domicilios, ya que la solictud se encuentra enviada.");
//                $error = true;
//            }
        } else {
            $msg[] = array("No se encontro al imputado.");
            $error = true;
        }
        if (!$error) {
            $DomiciliosimputadossolicitudesDao = new DomiciliosimputadossolicitudesDAO();
            $domiciliosimputadossolicitudesDto = $DomiciliosimputadossolicitudesDao->updateDomiciliosimputadossolicitudes($domiciliosimputadossolicitudesDto, $proveedor);
            if ($domiciliosimputadossolicitudesDto != "") {
                $resultado = array(
                    "idDomicilioImputadoSolicitud" => $domiciliosimputadossolicitudesDto[0]->getIdDomicilioImputadoSolicitud(),
                    "idImputadoSolicitud" => $domiciliosimputadossolicitudesDto[0]->getIdImputadoSolicitud(),
                    "DomicilioProcesal" => $domiciliosimputadossolicitudesDto[0]->getDomicilioProcesal(),
                    "cvePais" => $domiciliosimputadossolicitudesDto[0]->getCvePais(),
                    "cveEstado" => $domiciliosimputadossolicitudesDto[0]->getCveEstado(),
                    "cveMunicipio" => $domiciliosimputadossolicitudesDto[0]->getCveMunicipio(),
                    "direccion" => utf8_encode($domiciliosimputadossolicitudesDto[0]->getDireccion()),
                    "colonia" => utf8_encode($domiciliosimputadossolicitudesDto[0]->getColonia()),
                    "numInterior" => utf8_encode($domiciliosimputadossolicitudesDto[0]->getNumInterior()),
                    "numExterior" => utf8_encode($domiciliosimputadossolicitudesDto[0]->getNumExterior()),
                    "cp" => $domiciliosimputadossolicitudesDto[0]->getCp(),
                    "latitud" => $domiciliosimputadossolicitudesDto[0]->getLatitud(),
                    "longitud" => $domiciliosimputadossolicitudesDto[0]->getLongitud(),
                    "recidenciaHabitual" => $domiciliosimputadossolicitudesDto[0]->getRecidenciaHabitual(),
                    "estado" => utf8_encode($domiciliosimputadossolicitudesDto[0]->getEstado()),
                    "municipio" => utf8_encode($domiciliosimputadossolicitudesDto[0]->getMunicipio()),
                    "cveConvivencia" => $domiciliosimputadossolicitudesDto[0]->getCveConvivencia(),
                    "cveTipoVivienda" => $domiciliosimputadossolicitudesDto[0]->getCveTipoDeVivienda(),
                );
                array_push($listaResultados, $resultado);
            } else {
                $msg[] = array("No se logro registrar el domicilio debido a algun error en la transaccion");
                $error = true;
            }
        }
        if ((!$error)) {
            $result = array(
                "status" => "Ok",
                "totalCount" => count($listaResultados),
                "resultados" => $listaResultados,
            );
            if ($botacora) {
                $BitacoramovimientosDao = new BitacoramovimientosDAO();
                $BitacoramovimientosDto = new BitacoramovimientosDTO();
                $BitacoramovimientosDto->setCveAccion("134");
                $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                $BitacoramovimientosDto->setObservaciones("MODIFICO DOMICILIO IMPUTADO SOLICITUD: " . json_encode($result));
                $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
            }
        } else {
            $result = array("status" => "Error", "msj" => $msg);
            $result = ($result);
        }
        return json_encode($result);
//}
//return "";
    }

    public function deleteDomiciliosimputadossolicitudes($domiciliosimputadossolicitudesDto, $proveedor = null) {
        $result = "";
        $imputadossolicitud = new ImputadossolicitudesDTO();
        $imputadossolicitudesDao = new ImputadossolicitudesDAO();
        $DomiciliosimputadossolicitudesDao = new DomiciliosimputadossolicitudesDAO();


        $domiciliosimputadossolicitudesAuxDto = new DomiciliosimputadossolicitudesDTO();
        $domiciliosimputadossolicitudesAuxDto->setIdDomicilioImputadoSolicitud($domiciliosimputadossolicitudesDto->getIdDomicilioImputadoSolicitud());
        $rsDomicilios = $DomiciliosimputadossolicitudesDao->selectDomiciliosimputadossolicitudes($domiciliosimputadossolicitudesAuxDto);

        if ($rsDomicilios != "") {
            //Se verifica que exista el imputado
            $imputadossolicitud->setIdImputadoSolicitud($rsDomicilios[0]->getIdImputadoSolicitud());
            $imputadossolicitud->setActivo('S');
            $rsImputados = $imputadossolicitudesDao->selectImputadossolicitudes($imputadossolicitud, "", $this->proveedor);
            if ($rsImputados != "") {
                //Se verifica que el estatus de la solicitud sea 1
                $solicitudAudienciasDTO = new SolicitudesaudienciasDTO();
                $solicitudAudienciasDao = new SolicitudesaudienciasDAO();
                $solicitudAudienciasDTO->setIdSolicitudAudiencia($rsImputados[0]->getIdSolicitudAudiencia());
                $rsSolicitudAudiencia = $solicitudAudienciasDao->selectSolicitudesaudiencias($solicitudAudienciasDTO);
//                if ($rsSolicitudAudiencia[0]->getCveEstatusSolicitud() == '1') {
                    $domiciliosimputadossolicitudesDto = $this->validarDomiciliosimputadossolicitudes($domiciliosimputadossolicitudesDto);
                    $rs = $DomiciliosimputadossolicitudesDao->eliminaDomiciliosimputadossolicitudes($domiciliosimputadossolicitudesDto, $proveedor);
                    if ($rs != "") {
                        $result = array(
                            "status" => "Ok",
                            "totalCount" => "El domicilio se elimino de forma correcta"
                        );
                        $BitacoramovimientosDao = new BitacoramovimientosDAO();
                        $BitacoramovimientosDto = new BitacoramovimientosDTO();
                        $BitacoramovimientosDto->setCveAccion("135");
                        $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                        $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                        $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                        $BitacoramovimientosDto->setObservaciones("ELIMINO DOMICILIO IMPUTADO SOLICITUD CON ID:" . $rs[0]->getIdDomicilioImputadoSolicitud());
                        $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
                    } else {
                        $result = array("status" => "Error", "msj" => "No se pudo eliminar el registro");
                    }
//                } else {
//                    $result = array("status" => "Error", "msj" => "No se pudo eliminar el domicilio ya que la solicitud se encuentra enviada");
//                }
            } else {
                $result = array("status" => "Error", "msj" => "No se encontro al imputado");
            }
        } else {
            $result = array("status" => "Error", "msj" => "No se encontro el domicilio");
        }
//        $result = ($result);
        echo json_encode($result);
    }

}

?>