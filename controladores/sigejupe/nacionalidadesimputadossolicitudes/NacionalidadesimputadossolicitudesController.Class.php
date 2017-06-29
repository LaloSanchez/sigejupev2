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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/nacionalidadesimputadossolicitudes/NacionalidadesimputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/nacionalidadesimputadossolicitudes/NacionalidadesimputadossolicitudesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoramovimientos/BitacoramovimientosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesaudiencias/SolicitudesaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesaudiencias/SolicitudesaudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadossolicitudes/ImputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadossolicitudes/ImputadossolicitudesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");

class NacionalidadesimputadossolicitudesController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarNacionalidadesimputadossolicitudes($NacionalidadesimputadossolicitudesDto) {
        $NacionalidadesimputadossolicitudesDto->setidNacionalidadImputadoSolicitud(strtoupper(str_ireplace("'", "", trim($NacionalidadesimputadossolicitudesDto->getidNacionalidadImputadoSolicitud()))));
        $NacionalidadesimputadossolicitudesDto->setcvePais(strtoupper(str_ireplace("'", "", trim($NacionalidadesimputadossolicitudesDto->getcvePais()))));
        $NacionalidadesimputadossolicitudesDto->setactivo(strtoupper(str_ireplace("'", "", trim($NacionalidadesimputadossolicitudesDto->getactivo()))));
        $NacionalidadesimputadossolicitudesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($NacionalidadesimputadossolicitudesDto->getfechaRegistro()))));
        $NacionalidadesimputadossolicitudesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($NacionalidadesimputadossolicitudesDto->getfechaActualizacion()))));
        $NacionalidadesimputadossolicitudesDto->setidImputadoSolicitud(strtoupper(str_ireplace("'", "", trim($NacionalidadesimputadossolicitudesDto->getidImputadoSolicitud()))));
        return $NacionalidadesimputadossolicitudesDto;
    }

    public function selectNacionalidadesimputadossolicitudes($NacionalidadesimputadossolicitudesDto, $proveedor = null) {
        $NacionalidadesimputadossolicitudesDto = $this->validarNacionalidadesimputadossolicitudes($NacionalidadesimputadossolicitudesDto);
        $NacionalidadesimputadossolicitudesDao = new NacionalidadesimputadossolicitudesDAO();
        $NacionalidadesimputadossolicitudesDto = $NacionalidadesimputadossolicitudesDao->selectNacionalidadesimputadossolicitudes($NacionalidadesimputadossolicitudesDto, $proveedor);
        return $NacionalidadesimputadossolicitudesDto;
    }

    public function insertNacionalidadesimputadossolicitudes($nacionalidadimputadosDto, $proveedor = null, $bitacora = true) {
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
        $imputadossolicitud->setIdImputadoSolicitud($nacionalidadimputadosDto->getIdImputadoSolicitud());
        $imputadossolicitud->setActivo('S');
        $rsImputados = $imputadossolicitudesDao->selectImputadossolicitudes($imputadossolicitud, "", $proveedor);
        if ($rsImputados != "") {
            //Se verifica que el estatus de la solitud sea 1
            $solicitudAudienciasDTO = new SolicitudesaudienciasDTO();
            $solicitudAudienciasDao = new SolicitudesaudienciasDAO();
            $solicitudAudienciasDTO->setIdSolicitudAudiencia($rsImputados[0]->getIdSolicitudAudiencia());
            $rsSolicitudAudiencia = $solicitudAudienciasDao->selectSolicitudesaudiencias($solicitudAudienciasDTO);
            if ($rsSolicitudAudiencia[0]->getCveEstatusSolicitud() == '1') {
                $nacionalidadimputadosDto = $this->validarNacionalidadesimputadossolicitudes($nacionalidadimputadosDto);
                if (!$validacion->num(1, 2, (int) $nacionalidadimputadosDto->getCvePais())) {
                    if ($nacionalidadimputadosDto->getCvePais() <= 0) {
                        $msg[] = array("El pais seleccionado no es valido en la posicion:" . $count);
                        $error = true;
                    }
                }
            } else {
                $msg[] = array("No se pueden agregar nacionalidades, ya que la solicitud se encuentra enviada.");
                $error = true;
            }
        } else {
            $msg[] = array("No se encontro al imputado - nacionalidades.");
            $error = true;
        }

        if ((!$error)) {
            $nacionalidadesimputadossolicitudesDao = new NacionalidadesimputadossolicitudesDAO();
            $nacionalidadimputadosDto->setActivo('S');
            $rs = $nacionalidadesimputadossolicitudesDao->selectNacionalidadesimputadossolicitudes($nacionalidadimputadosDto, "", $proveedor);
            if ($rs == "") {
                $nacionalidadimputadosDto = $nacionalidadesimputadossolicitudesDao->insertNacionalidadesimputadossolicitudes($nacionalidadimputadosDto, $proveedor);

                if ($nacionalidadimputadosDto != "") {
                    $resultado = array(
                        "idNacionalidadImputadoSolicitud" => $nacionalidadimputadosDto[0]->getIdNacionalidadImputadoSolicitud(),
                        "idImputadiSolicitud" => $nacionalidadimputadosDto[0]->getIdNacionalidadImputadoSolicitud(),
                        "cvePais" => $nacionalidadimputadosDto[0]->getCvePais()
                    );
                    array_push($listaResultados, $resultado);
                } else {
                    $msg[] = array("No se logro registrar la nacionalidad debido a algun error en la transaccion");
                    $error = true;
                }
            } else {
                $msg[] = array("La nacionalidad ya existe para este imputado");
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
                $BitacoramovimientosDto->setCveAccion("148");
                $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                $BitacoramovimientosDto->setObservaciones("AGREGO NACIONALIDAD IMPUTADO SOLICITUD: " . json_encode($result));
                $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
            }
        } else {
            $result = array("status" => "Error", "msj" => $msg);
            $result = ($result);
        }
        return json_encode($result);
    }

    public function updateNacionalidadesimputadossolicitudes($nacionalidadimputadosDto, $proveedor = null, $bitacora = true) {
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
        $imputadossolicitud->setIdImputadoSolicitud($nacionalidadimputadosDto->getIdImputadoSolicitud());
        $imputadossolicitud->setActivo('S');
        $rsImputados = $imputadossolicitudesDao->selectImputadossolicitudes($imputadossolicitud, "", $proveedor);
        if ($rsImputados != "") {
            //Se verifica que el estatus de la solitud sea 1
            $solicitudAudienciasDTO = new SolicitudesaudienciasDTO();
            $solicitudAudienciasDao = new SolicitudesaudienciasDAO();
            $solicitudAudienciasDTO->setIdSolicitudAudiencia($rsImputados[0]->getIdSolicitudAudiencia());
            $rsSolicitudAudiencia = $solicitudAudienciasDao->selectSolicitudesaudiencias($solicitudAudienciasDTO);
            if ($rsSolicitudAudiencia[0]->getCveEstatusSolicitud() == '1') {

                $nacionalidadimputadosDto = $this->validarNacionalidadesimputadossolicitudes($nacionalidadimputadosDto);
                if (!$validacion->num(1, 2, (int) $nacionalidadimputadosDto->getCvePais())) {
                    if ($nacionalidadimputadosDto->getCvePais() <= 0) {
                        $msg[] = array("El pais seleccionado no es valido en la posicion:" . $count);
                        $error = true;
                    }
                }
            } else {
                $msg[] = array("No se pueden modificar nacionalidades, ya que la solicitud se encuentra enviada.");
                $error = true;
            }
        } else {
            $msg[] = array("No se encontro al imputado.");
            $error = true;
        }
        if ((!$error)) {
            $nacionalidadesimputadossolicitudesDao = new NacionalidadesimputadossolicitudesDAO();
            $nacionalidadAux = new NacionalidadesimputadossolicitudesDTO();
            $nacionalidadAux->setIdImputadoSolicitud($nacionalidadimputadosDto->getIdImputadoSolicitud());
            $nacionalidadAux->setCvePais($nacionalidadimputadosDto->getCvePais());
            $nacionalidadAux->setActivo('S');
            $rs = $nacionalidadesimputadossolicitudesDao->selectNacionalidadesimputadossolicitudes($nacionalidadAux, "", $proveedor);
            if ($rs == "") {
                $nacionalidadimputadosDto->setActivo('S');
                $nacionalidadimputadosDto = $nacionalidadesimputadossolicitudesDao->updateNacionalidadesimputadossolicitudes($nacionalidadimputadosDto, $proveedor);

                if ($nacionalidadimputadosDto != "") {
                    $resultado = array(
                        "idNacionalidadImputadoSolicitud" => $nacionalidadimputadosDto[0]->getIdNacionalidadImputadoSolicitud(),
                        "idImputadiSolicitud" => $nacionalidadimputadosDto[0]->getIdNacionalidadImputadoSolicitud(),
                        "cvePais" => $nacionalidadimputadosDto[0]->getCvePais()
                    );
                    array_push($listaResultados, $resultado);
                } else {
                    $msg[] = array("No se logro registrar la nacionalidad debido a algun error en la transaccion");
                    $error = true;
                }
            } else {
                $msg[] = array("La nacionalidad ya existe para este imputado");
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
                $BitacoramovimientosDto->setCveAccion("149");
                $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                $BitacoramovimientosDto->setObservaciones("ACTUALIZO NACIONALIDAD IMPUTADO SOLICITUD: " . json_encode($result));
                $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
            }
        } else {
            $result = array("status" => "Error", "msj" => $msg);
            $result = ($result);
        }
        return json_encode($result);
    }

    public function deleteNacionalidadesimputadossolicitudes($nacionalidadimputadosDto, $proveedor = null) {
        $result = "";

        $nacionalidadesimputadossolicitudesDao = new NacionalidadesimputadossolicitudesDAO();

        $nacionalidadesimputadossolicitudesAuxDto = new NacionalidadesimputadossolicitudesDTO();
        $nacionalidadesimputadossolicitudesAuxDto->setIdNacionalidadImputadoSolicitud($nacionalidadimputadosDto->getIdNacionalidadImputadoSolicitud());
        $rs = $nacionalidadesimputadossolicitudesDao->selectNacionalidadesimputadossolicitudes($nacionalidadesimputadossolicitudesAuxDto);
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
                    $nacionalidadimputadosDto = $this->validarNacionalidadesimputadossolicitudes($nacionalidadimputadosDto);

                    $nacionalidadimputadosDto->setActivo('N');
                    $nacionalidadimputadosDto = $nacionalidadesimputadossolicitudesDao->updateNacionalidadesimputadossolicitudes($nacionalidadimputadosDto, $this->proveedor);

                    if ($nacionalidadimputadosDto != "") {
                        $result = array(
                            "status" => "Ok",
                            "totalCount" => "La nacionalidad se elimino de forma correcta"
                        );
                        $BitacoramovimientosDao = new BitacoramovimientosDAO();
                        $BitacoramovimientosDto = new BitacoramovimientosDTO();
                        $BitacoramovimientosDto->setCveAccion("150");
                        $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                        $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                        $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                        $BitacoramovimientosDto->setObservaciones("ELIMINO NACIONALIDAD IMPUTADO SOLICITUD CON ID:" . $nacionalidadimputadosDto[0]->getIdNacionalidadImputadoSolicitud());
                        $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
                    } else {
                        $result = array("status" => "Error", "msj" => "No se puedo eliminar la nacionalidad");
                        $result = ($result);
                    }
                } else {
                    $result = array("status" => "Error", "msj" => "No se pudo eliminar la nacionalidad, ya que la solicitud se encuentra enviada");
                }
            } else {
                $result = array("status" => "Error", "msj" => "No se encontro al imputado");
            }
        } else {
            $result = array("status" => "Error", "msj" => "No se encontro la nacionalidad");
        }
        echo json_encode($result);
    }

}

?>