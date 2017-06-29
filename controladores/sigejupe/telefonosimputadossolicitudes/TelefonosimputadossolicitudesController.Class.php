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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/telefonosimputadossolicitudes/TelefonosimputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/telefonosimputadossolicitudes/TelefonosimputadossolicitudesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoramovimientos/BitacoramovimientosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesaudiencias/SolicitudesaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesaudiencias/SolicitudesaudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadossolicitudes/ImputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadossolicitudes/ImputadossolicitudesDAO.Class.php");

class TelefonosimputadossolicitudesController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarTelefonosimputadossolicitudes($TelefonosimputadossolicitudesDto) {
        $TelefonosimputadossolicitudesDto->setidTelefonoImputadosSolicitud(strtoupper(str_ireplace("'", "", trim($TelefonosimputadossolicitudesDto->getidTelefonoImputadosSolicitud()))));
        $TelefonosimputadossolicitudesDto->setidImputadoSolicitud(strtoupper(str_ireplace("'", "", trim($TelefonosimputadossolicitudesDto->getidImputadoSolicitud()))));
        $TelefonosimputadossolicitudesDto->settelefono(strtoupper(str_ireplace("'", "", trim($TelefonosimputadossolicitudesDto->gettelefono()))));
        $TelefonosimputadossolicitudesDto->setcelular(strtoupper(str_ireplace("'", "", trim($TelefonosimputadossolicitudesDto->getcelular()))));
        $TelefonosimputadossolicitudesDto->setemail(strtoupper(str_ireplace("'", "", trim($TelefonosimputadossolicitudesDto->getemail()))));
        $TelefonosimputadossolicitudesDto->setactivo(strtoupper(str_ireplace("'", "", trim($TelefonosimputadossolicitudesDto->getactivo()))));
        $TelefonosimputadossolicitudesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($TelefonosimputadossolicitudesDto->getfechaRegistro()))));
        $TelefonosimputadossolicitudesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($TelefonosimputadossolicitudesDto->getfechaActualizacion()))));
        return $TelefonosimputadossolicitudesDto;
    }

    public function selectTelefonosimputadossolicitudes($TelefonosimputadossolicitudesDto, $proveedor = null) {
        $TelefonosimputadossolicitudesDto = $this->validarTelefonosimputadossolicitudes($TelefonosimputadossolicitudesDto);
        $TelefonosimputadossolicitudesDao = new TelefonosimputadossolicitudesDAO();
        $TelefonosimputadossolicitudesDto = $TelefonosimputadossolicitudesDao->selectTelefonosimputadossolicitudes($TelefonosimputadossolicitudesDto, $proveedor);
        return $TelefonosimputadossolicitudesDto;
    }

    public function insertTelefonosimputadossolicitudes($telefenosimputadossolicitudesDto, $proveedor = null, $bitacora = true) {
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
        $imputadossolicitud->setIdImputadoSolicitud($telefenosimputadossolicitudesDto->getIdImputadoSolicitud());
        $imputadossolicitud->setActivo('S');
        $rsImputados = $imputadossolicitudesDao->selectImputadossolicitudes($imputadossolicitud, "", $proveedor);
        if ($rsImputados != "") {
            //Se verifica que el estatus de la solitud sea 1
            $solicitudAudienciasDTO = new SolicitudesaudienciasDTO();
            $solicitudAudienciasDao = new SolicitudesaudienciasDAO();
            $solicitudAudienciasDTO->setIdSolicitudAudiencia($rsImputados[0]->getIdSolicitudAudiencia());
            $rsSolicitudAudiencia = $solicitudAudienciasDao->selectSolicitudesaudiencias($solicitudAudienciasDTO);
            if ($rsSolicitudAudiencia[0]->getCveEstatusSolicitud() == '1') {

                $telefenosimputadossolicitudesDto = $this->validarTelefonosimputadossolicitudes($telefenosimputadossolicitudesDto);
                $TelefonosimputadossolicitudesDao = new TelefonosimputadossolicitudesDAO();

                if ($telefenosimputadossolicitudesDto->getTelefono() == "" && $telefenosimputadossolicitudesDto->getCelular() == "" && $telefenosimputadossolicitudesDto->getEmail() == "") {
                    $msg[] = array("Debe de ingresar un telefono o celular o correo electrónico:" . $count);
                    $error = true;
                }
                if ($telefenosimputadossolicitudesDto->getTelefono() != "") {
                    if (!$validacion->telefono((string) $telefenosimputadossolicitudesDto->getTelefono())) {
                        $msg[] = array("No ingreso un Telefono correcto en la posicion:" . $count);
                        $error = true;
                    }
                }

                if ($telefenosimputadossolicitudesDto->getCelular() != "") {
                    if (!$validacion->telefono((string) $telefenosimputadossolicitudesDto->getCelular())) {
                        $msg[] = array("No ingreso un celular correcto en la posicion:" . $count);
                        $error = true;
                    }
                }

//        if ($telefenosimputadossolicitudesDto->getEmail() != "") {
//            if (!$validacion->email((string) $telefenosimputadossolicitudesDto->getEmail())) {
//                $msg[] = array("No ingreso un email correcto en la posicion:" . $count);
//                $error = true;
//            }
//        }
            } else {
                $msg[] = array("No se pueden agregar telefonos, ya que la solicitud se encuentra enviada.");
                $error = true;
            }
        } else {
            $msg[] = array("No se encontro al imputado.");
            $error = true;
        }
        if ((!$error)) {
            $telefenosimputadossolicitudesDao = new TelefonosimputadossolicitudesDAO();
            $telefenosimputadossolicitudesDto->setActivo('S');
            $telefenosimputadossolicitudesDto = $telefenosimputadossolicitudesDao->insertTelefonosimputadossolicitudes($telefenosimputadossolicitudesDto, $proveedor);

            if ($telefenosimputadossolicitudesDto != "") {
                $resultado = array(
                    "idTelefonoImputadosSolicitud" => $telefenosimputadossolicitudesDto[0]->getIdTelefonoImputadosSolicitud(),
                    "idImputadoSolicitud" => $telefenosimputadossolicitudesDto[0]->getIdTelefonoImputadosSolicitud(),
                    "telefono" => $telefenosimputadossolicitudesDto[0]->getTelefono(),
                    "celular" => $telefenosimputadossolicitudesDto[0]->getCelular(),
                    "email" => $telefenosimputadossolicitudesDto[0]->getEmail(),
                );
                array_push($listaResultados, $resultado);
            } else {
                $msg[] = array("No se logro registrar el telefono debido a algun error en la transaccion");
                $error = true;
            }
        }
        if ((!$error)) {
            $result = array(
                "status" => "Ok",
                "totalCount" => count($listaResultados),
                "resultados" => $listaResultados,
            );

            if ($bitacora) {
                $BitacoramovimientosDao = new BitacoramovimientosDAO();
                $BitacoramovimientosDto = new BitacoramovimientosDTO();
                $BitacoramovimientosDto->setCveAccion("136");
                $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                $BitacoramovimientosDto->setObservaciones("AGREGO TELEFONO IMPUTADO SOLICITUD: " . json_encode($result));
                $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
            }
        } else {
            $result = array("status" => "Error", "msj" => $msg);
            $result = ($result);
        }
        return json_encode($result);
    }

    public function updateTelefonosimputadossolicitudes($telefenosimputadossolicitudesDto, $proveedor = null, $bitacora = true) {
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
        $imputadossolicitud->setIdImputadoSolicitud($telefenosimputadossolicitudesDto->getIdImputadoSolicitud());
        $imputadossolicitud->setActivo('S');
        $rsImputados = $imputadossolicitudesDao->selectImputadossolicitudes($imputadossolicitud, "", $proveedor);
        if ($rsImputados != "") {
            //Se verifica que el estatus de la solitud sea 1
            $solicitudAudienciasDTO = new SolicitudesaudienciasDTO();
            $solicitudAudienciasDao = new SolicitudesaudienciasDAO();
            $solicitudAudienciasDTO->setIdSolicitudAudiencia($rsImputados[0]->getIdSolicitudAudiencia());
            $rsSolicitudAudiencia = $solicitudAudienciasDao->selectSolicitudesaudiencias($solicitudAudienciasDTO);
            if ($rsSolicitudAudiencia[0]->getCveEstatusSolicitud() == '1') {


                $telefenosimputadossolicitudesDto = $this->validarTelefonosimputadossolicitudes($telefenosimputadossolicitudesDto);
                $TelefonosimputadossolicitudesDao = new TelefonosimputadossolicitudesDAO();
                if ($telefenosimputadossolicitudesDto->getTelefono() == "" && $telefenosimputadossolicitudesDto->getCelular() == "" && $telefenosimputadossolicitudesDto->getEmail() == "") {
                    $msg[] = array("Debe de ingresar un telefono o celular o correo electónico:" . $count);
                    $error = true;
                }
                if ($telefenosimputadossolicitudesDto->getTelefono() != "") {
                    if (!$validacion->telefono((string) $telefenosimputadossolicitudesDto->getTelefono())) {
                        $msg[] = array("No ingreso un Telefono correcto en la posicion:" . $count);
                        $error = true;
                    }
                }

                if ($telefenosimputadossolicitudesDto->getCelular() != "") {
                    if (!$validacion->telefono((string) $telefenosimputadossolicitudesDto->getCelular())) {
                        $msg[] = array("No ingreso un celular correcto en la posicion:" . $count);
                        $error = true;
                    }
                }

//        if ($telefenosimputadossolicitudesDto->getEmail() != "") {
//            if (!$validacion->email((string) $telefenosimputadossolicitudesDto->getEmail())) {
//                $msg[] = array("No ingreso un email correcto en la posicion:" . $count);
//                $error = true;
//            }
//        }
            } else {
                $msg[] = array("No se pueden modificar telefonos, ya que la solicitud se encuentra enviada.");
                $error = true;
            }
        } else {
            $msg[] = array("No se encontro al imputado.");
            $error = true;
        }
        if ((!$error)) {
            $telefenosimputadossolicitudesDao = new TelefonosimputadossolicitudesDAO();
            $telefenosimputadossolicitudesDto->setActivo('S');
            $telefenosimputadossolicitudesDto = $telefenosimputadossolicitudesDao->updateTelefonosimputadossolicitudes($telefenosimputadossolicitudesDto, $proveedor);

            if ($telefenosimputadossolicitudesDto != "") {
                $resultado = array(
                    "idTelefonoImputadosSolicitud" => $telefenosimputadossolicitudesDto[0]->getIdTelefonoImputadosSolicitud(),
                    "idImputadoSolicitud" => $telefenosimputadossolicitudesDto[0]->getIdTelefonoImputadosSolicitud(),
                    "telefono" => $telefenosimputadossolicitudesDto[0]->getTelefono(),
                    "celular" => $telefenosimputadossolicitudesDto[0]->getCelular(),
                    "email" => $telefenosimputadossolicitudesDto[0]->getEmail(),
                );
                array_push($listaResultados, $resultado);
            } else {
                $msg[] = array("No se logro registrar el telefono debido a algun error en la transaccion");
                $error = true;
            }
        }
        if ((!$error)) {
            $result = array(
                "status" => "Ok",
                "totalCount" => count($listaResultados),
                "resultados" => $listaResultados,
            );
            if ($bitacora) {
                $BitacoramovimientosDao = new BitacoramovimientosDAO();
                $BitacoramovimientosDto = new BitacoramovimientosDTO();
                $BitacoramovimientosDto->setCveAccion("137");
                $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                $BitacoramovimientosDto->setObservaciones("ACTUALIZO TELEFONO IMPUTADO SOLICITUD: " . json_encode($result));
                $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
            }
        } else {
            $result = array("status" => "Error", "msj" => $msg);
            $result = ($result);
        }
        return json_encode($result);
    }

    public function deleteTelefonosimputadossolicitudes($telefenosimputadossolicitudesDto, $proveedor = null) {
        $result = "";
        $telefenosimputadossolicitudesDao = new TelefonosimputadossolicitudesDAO();
        $telefonosimputadossolicitudesAuxDto = new TelefonosimputadossolicitudesDTO();
        $telefonosimputadossolicitudesAuxDto->setIdTelefonoImputadosSolicitud($telefenosimputadossolicitudesDto->getIdTelefonoImputadosSolicitud());
        $rs = $telefenosimputadossolicitudesDao->selectTelefonosimputadossolicitudes($telefonosimputadossolicitudesAuxDto);
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


                    $telefenosimputadossolicitudesDto = $this->validarTelefonosimputadossolicitudes($telefenosimputadossolicitudesDto);
                    $telefenosimputadossolicitudesDto = $telefenosimputadossolicitudesDao->eliminaTelefonosimputadossolicitudes($telefenosimputadossolicitudesDto, $proveedor);

                    if ($telefenosimputadossolicitudesDto != "") {
                        $result = array(
                            "status" => "Ok",
                            "totalCount" => "El registro se elimino de forma correcta",
                        );
                        $BitacoramovimientosDao = new BitacoramovimientosDAO();
                        $BitacoramovimientosDto = new BitacoramovimientosDTO();
                        $BitacoramovimientosDto->setCveAccion("138");
                        $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                        $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                        $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                        $BitacoramovimientosDto->setObservaciones("ELIMINO DOMICILIO IMPUTADO SOLICITUD CON ID:" . $telefenosimputadossolicitudesDto[0]->getIdTelefonoImputadosSolicitud());
                        $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
                    } else {
                        $result = array("status" => "Error", "msj" => "No se pudo eliminar el telefono");
                        $result = ($result);
                    }
                } else {
                    $result = array("status" => "Error", "msj" => "No se pudo eliminar el telefono ya que la solicitud se encuentra enviada");
                }
            } else {
                $result = array("status" => "Error", "msj" => "No se encontro al imputado");
            }
        } else {
            $result = array("status" => "Error", "msj" => "No se encontro el telefono");
        }
        echo json_encode($result);
    }

}

?>