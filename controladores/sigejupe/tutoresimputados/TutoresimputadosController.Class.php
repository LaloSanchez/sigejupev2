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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tutoresimputados/TutoresimputadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tutoresimputados/TutoresimputadosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoramovimientos/BitacoramovimientosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesaudiencias/SolicitudesaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesaudiencias/SolicitudesaudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadossolicitudes/ImputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadossolicitudes/ImputadossolicitudesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");

class TutoresimputadosController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarTutoresimputados($TutoresimputadosDto) {
        $TutoresimputadosDto->setidTutorImputado(strtoupper(str_ireplace("'", "", trim($TutoresimputadosDto->getidTutorImputado()))));
        $TutoresimputadosDto->setidImputadoSolicitud(strtoupper(str_ireplace("'", "", trim($TutoresimputadosDto->getidImputadoSolicitud()))));
        $TutoresimputadosDto->setcveTipoTutor(strtoupper(str_ireplace("'", "", trim($TutoresimputadosDto->getcveTipoTutor()))));
        $TutoresimputadosDto->setProvDef(strtoupper(str_ireplace("'", "", trim($TutoresimputadosDto->getProvDef()))));
        $TutoresimputadosDto->setnombre(strtoupper(str_ireplace("'", "", trim($TutoresimputadosDto->getnombre()))));
        $TutoresimputadosDto->setpaterno(strtoupper(str_ireplace("'", "", trim($TutoresimputadosDto->getpaterno()))));
        $TutoresimputadosDto->setmaterno(strtoupper(str_ireplace("'", "", trim($TutoresimputadosDto->getmaterno()))));
        $TutoresimputadosDto->setfechaNacimiento(strtoupper(str_ireplace("'", "", trim($TutoresimputadosDto->getfechaNacimiento()))));
        $TutoresimputadosDto->setedad(strtoupper(str_ireplace("'", "", trim($TutoresimputadosDto->getedad()))));
        $TutoresimputadosDto->setactivo(strtoupper(str_ireplace("'", "", trim($TutoresimputadosDto->getactivo()))));
        $TutoresimputadosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($TutoresimputadosDto->getfechaRegistro()))));
        $TutoresimputadosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($TutoresimputadosDto->getfechaActualizacion()))));
        $TutoresimputadosDto->setcveGenero(strtoupper(str_ireplace("'", "", trim($TutoresimputadosDto->getcveGenero()))));
        return $TutoresimputadosDto;
    }

    public function selectTutoresimputados($TutoresimputadosDto, $proveedor = null) {
        $TutoresimputadosDto = $this->validarTutoresimputados($TutoresimputadosDto);
        $TutoresimputadosDao = new TutoresimputadosDAO();
        $TutoresimputadosDto = $TutoresimputadosDao->selectTutoresimputados($TutoresimputadosDto, $proveedor);
        return $TutoresimputadosDto;
    }

    public function insertTutoresimputados($tutoresimputadosDto, $proveedor = null) {
        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();
        $count = 1;
        $indexCount = 0;


        $imputadossolicitud = new ImputadossolicitudesDTO();
        $imputadossolicitudesDao = new ImputadossolicitudesDAO();
        $imputadossolicitud->setIdImputadoSolicitud($tutoresimputadosDto->getIdImputadoSolicitud());
        $imputadossolicitud->setActivo('S');
        $rsImputados = $imputadossolicitudesDao->selectImputadossolicitudes($imputadossolicitud, "", $this->proveedor);
        if ($rsImputados != "") {
            //Se verifica que el estatus de la solitud sea 1
            $solicitudAudienciasDTO = new SolicitudesaudienciasDTO();
            $solicitudAudienciasDao = new SolicitudesaudienciasDAO();
            $solicitudAudienciasDTO->setIdSolicitudAudiencia($rsImputados[0]->getIdSolicitudAudiencia());
            $rsSolicitudAudiencia = $solicitudAudienciasDao->selectSolicitudesaudiencias($solicitudAudienciasDTO);
            if ($rsSolicitudAudiencia[0]->getCveEstatusSolicitud() == '1') {

                $arrayAuxiliar = array();
                $listaResultados = array();
                $tutoresimputadosDto = $this->validarTutoresimputados($tutoresimputadosDto);
                if (!$validacion->num(1, 2, (int) $tutoresimputadosDto->getCveGenero())) {
                    if ($tutoresimputadosDto->getCveGenero() <= 0) {
                        $msg[] = array("El genero seleccionado no es valido en la posicion:" . $count);
                        $error = true;
                    }
                }

                if (!$validacion->num(1, 2, (int) $tutoresimputadosDto->getCveTipoTutor())) {
                    if ($tutoresimputadosDto->getCveTipoTutor() <= 0) {
                        $msg[] = array("El tipo de tutor seleccionado no es valido en la posicion:" . $count);
                        $error = true;
                    }
                }
            } else {
                $msg[] = array("No se pueden agregar Tutores/Representantes, ya que la solicitud se encuentra enviada.");
                $error = true;
            }
        } else {
            $msg[] = array("No se encontro al imputado.");
            $error = true;
        }
        if ((!$error)) {
            $tutoresimputadosDao = new TutoresimputadosDAO();
            $tutoresimputadosDto->setActivo('S');
            $tutoresimputadosDto = $tutoresimputadosDao->insertTutoresimputados($tutoresimputadosDto, $proveedor);
            if ($tutoresimputadosDto != "") {
                $resultado = array(
                    "idTutorImputado" => $tutoresimputadosDto[0]->getIdTutorImputado(),
                    "idImputadoSolicitud" => $tutoresimputadosDto[0]->getIdImputadoSolicitud(),
                    "cveGenero" => $tutoresimputadosDto[0]->getCveGenero(),
                    "cveTipoTutor" => $tutoresimputadosDto[0]->getCveTipoTutor(),
                    "ProvDef" => $tutoresimputadosDto[0]->getProvDef(),
                    "nombre" => utf8_encode($tutoresimputadosDto[0]->getNombre()),
                    "paterno" => utf8_encode($tutoresimputadosDto[0]->getPaterno()),
                    "materno" => utf8_encode($tutoresimputadosDto[0]->getMaterno()),
                    "fechaNacimiento" => $tutoresimputadosDto[0]->getFechaNacimiento(),
                    "edad" => $tutoresimputadosDto[0]->getEdad()
                );
                array_push($listaResultados, $resultado);
            } else {
                $msg[] = array("No se logro registrar el tutor debido a algun error en la transaccion");
                $error = true;
            }
        }
        if ((!$error)) {
            $result = array(
                "status" => "Ok",
                "totalCount" => count($listaResultados),
                "resultados" => $listaResultados,
            );
            $BitacoramovimientosDao = new BitacoramovimientosDAO();
            $BitacoramovimientosDto = new BitacoramovimientosDTO();
            $BitacoramovimientosDto->setCveAccion("145");
            $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
            $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
            $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
            $BitacoramovimientosDto->setObservaciones("AGREGO TUTOR IMPUTADO SOLICITUD: " . json_encode($result));
            $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
        } else {
            $result = array("status" => "Error", "msj" => $msg);
            $result = ($result);
        }
        return json_encode($result);
    }

    public function updateTutoresimputados($tutoresimputadosDto, $proveedor = null) {
        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();
        $count = 1;
        $indexCount = 0;

        $imputadossolicitud = new ImputadossolicitudesDTO();
        $imputadossolicitudesDao = new ImputadossolicitudesDAO();
        $imputadossolicitud->setIdImputadoSolicitud($tutoresimputadosDto->getIdImputadoSolicitud());
        $imputadossolicitud->setActivo('S');
        $rsImputados = $imputadossolicitudesDao->selectImputadossolicitudes($imputadossolicitud, "", $this->proveedor);
        if ($rsImputados != "") {
            //Se verifica que el estatus de la solitud sea 1
            $solicitudAudienciasDTO = new SolicitudesaudienciasDTO();
            $solicitudAudienciasDao = new SolicitudesaudienciasDAO();
            $solicitudAudienciasDTO->setIdSolicitudAudiencia($rsImputados[0]->getIdSolicitudAudiencia());
            $rsSolicitudAudiencia = $solicitudAudienciasDao->selectSolicitudesaudiencias($solicitudAudienciasDTO);
            if ($rsSolicitudAudiencia[0]->getCveEstatusSolicitud() == '1') {

                $arrayAuxiliar = array();
                $listaResultados = array();
                $tutoresimputadosDto = $this->validarTutoresimputados($tutoresimputadosDto);
                if (!$validacion->num(1, 2, (int) $tutoresimputadosDto->getCveGenero())) {
                    if ($tutoresimputadosDto->getCveGenero() <= 0) {
                        $msg[] = array("El genero seleccionado no es valido en la posicion:" . $count);
                        $error = true;
                    }
                }

                if (!$validacion->num(1, 2, (int) $tutoresimputadosDto->getCveTipoTutor())) {
                    if ($tutoresimputadosDto->getCveTipoTutor() <= 0) {
                        $msg[] = array("El tipo de tutor seleccionado no es valido en la posicion:" . $count);
                        $error = true;
                    }
                }
            } else {
                $msg[] = array("No se pueden modificar Tutores/Representantes, ya que la solicitud se encuentra enviada.");
                $error = true;
            }
        } else {
            $msg[] = array("No se encontro al imputado.");
            $error = true;
        }
        if ((!$error)) {
            $tutoresimputadosDao = new TutoresimputadosDAO();
            $tutoresimputadosDto->setActivo('S');
            $tutoresimputadosDto = $tutoresimputadosDao->updateTutoresimputados($tutoresimputadosDto, $proveedor);
            if ($tutoresimputadosDto != "") {
                $resultado = array(
                    "idTutorImputado" => $tutoresimputadosDto[0]->getIdTutorImputado(),
                    "idImputadoSolicitud" => $tutoresimputadosDto[0]->getIdImputadoSolicitud(),
                    "cveGenero" => $tutoresimputadosDto[0]->getCveGenero(),
                    "cveTipoTutor" => $tutoresimputadosDto[0]->getCveTipoTutor(),
                    "ProvDef" => $tutoresimputadosDto[0]->getProvDef(),
                    "nombre" => utf8_encode($tutoresimputadosDto[0]->getNombre()),
                    "paterno" => utf8_encode($tutoresimputadosDto[0]->getPaterno()),
                    "materno" => utf8_encode($tutoresimputadosDto[0]->getMaterno()),
                    "fechaNacimiento" => $tutoresimputadosDto[0]->getFechaNacimiento(),
                    "edad" => $tutoresimputadosDto[0]->getEdad()
                );
                array_push($listaResultados, $resultado);
            } else {
                $msg[] = array("No se logro registrar el tutor debido a algun error en la transaccion");
                $error = true;
            }
        }
        if ((!$error)) {
            $result = array(
                "status" => "Ok",
                "totalCount" => count($listaResultados),
                "resultados" => $listaResultados,
            );
            $BitacoramovimientosDao = new BitacoramovimientosDAO();
            $BitacoramovimientosDto = new BitacoramovimientosDTO();
            $BitacoramovimientosDto->setCveAccion("146");
            $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
            $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
            $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
            $BitacoramovimientosDto->setObservaciones("ACTUALIZO TUTOR IMPUTADO SOLICITUD: " . json_encode($result));
            $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
        } else {
            $result = array("status" => "Error", "msj" => $msg);
            $result = ($result);
        }
        return json_encode($result);
    }

    public function deleteTutoresimputados($tutoresimputadosDto, $proveedor = null) {

        $result = "";
        $tutoresimputadosDao = new TutoresimputadosDAO();

        $tutorimputadossolicitudesAuxDto = new TutoresimputadosDTO();
        $tutorimputadossolicitudesAuxDto->setIdTutorImputado($tutoresimputadosDto->getIdTutorImputado());
        $rs = $tutoresimputadosDao->selectTutoresimputados($tutorimputadossolicitudesAuxDto);
        if ($rs != "") {
            $imputadossolicitud = new ImputadossolicitudesDTO();
            $imputadossolicitudesDao = new ImputadossolicitudesDAO();
            $imputadossolicitud->setIdImputadoSolicitud($rs[0]->getIdImputadoSolicitud());
            $imputadossolicitud->setActivo('S');
            $rsImputados = $imputadossolicitudesDao->selectImputadossolicitudes($imputadossolicitud, "", $this->proveedor);
            if ($rsImputados != "") {
                //Se verifica que el estatus de la solitud sea 1
                $solicitudAudienciasDTO = new SolicitudesaudienciasDTO();
                $solicitudAudienciasDao = new SolicitudesaudienciasDAO();
                $solicitudAudienciasDTO->setIdSolicitudAudiencia($rsImputados[0]->getIdSolicitudAudiencia());
                $rsSolicitudAudiencia = $solicitudAudienciasDao->selectSolicitudesaudiencias($solicitudAudienciasDTO);
                if ($rsSolicitudAudiencia[0]->getCveEstatusSolicitud() == '1') {

                    $tutoresimputadosDto = $this->validarTutoresimputados($tutoresimputadosDto);

                    $tutoresimputadosDto->setActivo('N');
                    $tutoresimputadosDto = $tutoresimputadosDao->eliminaTutoresimputados($tutoresimputadosDto, $this->proveedor);

                    if ($tutoresimputadosDto != "") {
                        $result = array(
                            "status" => "Ok",
                            "totalCount" => "El tutor se elimino de forma correcta"
                        );
                        $BitacoramovimientosDao = new BitacoramovimientosDAO();
                        $BitacoramovimientosDto = new BitacoramovimientosDTO();
                        $BitacoramovimientosDto->setCveAccion("147");
                        $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                        $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                        $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                        $BitacoramovimientosDto->setObservaciones("ELIMINO TUTOR IMPUTADO SOLICITUD CON ID:" . $tutoresimputadosDto[0]->getIdTutorImputado());
                        $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
                    } else {
                        $result = array("status" => "Error", "msj" => "No se pudo eliminar al tutot");
                        $result = ($result);
                    }
                } else {
                    $result = array("status" => "Error", "msj" => "No se pudo eliminar al Tutores/Representantes, ya que la solicitud se encuentra enviada");
                }
            } else {
                $result = array("status" => "Error", "msj" => "No se encontro al imputado");
            }
        } else {
            $result = array("status" => "Error", "msj" => "No se encontro al tutor");
        }
        echo json_encode($result);
    }

}

?>