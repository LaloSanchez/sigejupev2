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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadosdrogas/ImputadosdrogasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadosdrogas/ImputadosdrogasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoramovimientos/BitacoramovimientosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesaudiencias/SolicitudesaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesaudiencias/SolicitudesaudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadossolicitudes/ImputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadossolicitudes/ImputadossolicitudesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");

class ImputadosdrogasController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarImputadosdrogas($ImputadosdrogasDto) {
        $ImputadosdrogasDto->setidImputadoDroga(strtoupper(str_ireplace("'", "", trim($ImputadosdrogasDto->getidImputadoDroga()))));
        $ImputadosdrogasDto->setidImputadoSolicitud(strtoupper(str_ireplace("'", "", trim($ImputadosdrogasDto->getidImputadoSolicitud()))));
        $ImputadosdrogasDto->setcveDroga(strtoupper(str_ireplace("'", "", trim($ImputadosdrogasDto->getcveDroga()))));
        $ImputadosdrogasDto->setactivo(strtoupper(str_ireplace("'", "", trim($ImputadosdrogasDto->getactivo()))));
        $ImputadosdrogasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($ImputadosdrogasDto->getfechaRegistro()))));
        $ImputadosdrogasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($ImputadosdrogasDto->getfechaActualizacion()))));
        return $ImputadosdrogasDto;
    }

    public function selectImputadosdrogas($ImputadosdrogasDto, $proveedor = null) {
        $ImputadosdrogasDto = $this->validarImputadosdrogas($ImputadosdrogasDto);
        $ImputadosdrogasDao = new ImputadosdrogasDAO();
        $ImputadosdrogasDto = $ImputadosdrogasDao->selectImputadosdrogas($ImputadosdrogasDto, $proveedor);
        return $ImputadosdrogasDto;
    }

    public function insertImputadosdrogas($drogasImputadoDto, $proveedor = null, $bitacora = true) {
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
        $imputadossolicitud->setIdImputadoSolicitud($drogasImputadoDto->getIdImputadoSolicitud());
        $imputadossolicitud->setActivo('S');
        $rsImputados = $imputadossolicitudesDao->selectImputadossolicitudes($imputadossolicitud, "",$proveedor);
        if ($rsImputados != "") {
            //Se verifica que el estatus de la solitud sea 1
            $solicitudAudienciasDTO = new SolicitudesaudienciasDTO();
            $solicitudAudienciasDao = new SolicitudesaudienciasDAO();
            $solicitudAudienciasDTO->setIdSolicitudAudiencia($rsImputados[0]->getIdSolicitudAudiencia());
            $rsSolicitudAudiencia = $solicitudAudienciasDao->selectSolicitudesaudiencias($solicitudAudienciasDTO);
            if ($rsSolicitudAudiencia[0]->getCveEstatusSolicitud() == '1') {

                $drogasImputadoDto = $this->validarImputadosdrogas($drogasImputadoDto);
                if (!$validacion->num(1, 2, (int) $drogasImputadoDto->getCveDroga())) {
                    if ($drogasImputadoDto->getCveDroga() <= 0) {
                        $msg[] = array("La droga seleccionado no es valido en la posicion:" . $count);
                        $error = true;
                    }
                }
            } else {
                $msg[] = array("No se pueden agregar drogas, ya que la solicitud se encuentra enviada.");
                $error = true;
            }
        } else {
            $msg[] = array("No se encontro al imputado.");
            $error = true;
        }
        if ((!$error)) {
            $imputadosDrogasDao = new ImputadosdrogasDAO();
            $drogasImputadoDto->setActivo('S');
            $rs = $imputadosDrogasDao->selectImputadosdrogas($drogasImputadoDto);
            if ($rs == "") {
                $drogasImputadoDto = $imputadosDrogasDao->insertImputadosdrogas($drogasImputadoDto, $proveedor);
                if ($drogasImputadoDto != "") {
                    $resultado = array(
                        "idImputadoDroga" => $drogasImputadoDto[0]->getIdImputadoDroga(),
                        "cveDroga" => $drogasImputadoDto[0]->getCveDroga(),
                    );
                    array_push($listaResultados, $resultado);
                } else {
                    $msg[] = array("No se logro registrar la droga debido a algun error en la transaccion");
                    $error = true;
                }
            } else {
                $msg[] = array("La droga ya existe para este imputado");
                $error = true;
            }
        }
        if ((!$error)) {
            $result = array(
                "status" => "Ok",
                "totalCount" => count($listaResultados),
                "resultados" => $listaResultados,
            );
            if($bitacora){
                $BitacoramovimientosDao = new BitacoramovimientosDAO();
                $BitacoramovimientosDto = new BitacoramovimientosDTO();
                $BitacoramovimientosDto->setCveAccion("142");
                $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                $BitacoramovimientosDto->setObservaciones("AGREGO DROGAS IMPUTADO SOLICITUD: " . json_encode($result));
                $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
            }
        } else {
            $result = array("status" => "Error", "msj" => $msg);
            $result = ($result);
        }
        return json_encode($result);
    }

    public function updateImputadosdrogas($drogasImputadoDto, $proveedor = null) {
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
        $imputadossolicitud->setIdImputadoSolicitud($drogasImputadoDto->getIdImputadoSolicitud());
        $imputadossolicitud->setActivo('S');
        $rsImputados = $imputadossolicitudesDao->selectImputadossolicitudes($imputadossolicitud, "",$proveedor);
        if ($rsImputados != "") {
            //Se verifica que el estatus de la solitud sea 1
            $solicitudAudienciasDTO = new SolicitudesaudienciasDTO();
            $solicitudAudienciasDao = new SolicitudesaudienciasDAO();
            $solicitudAudienciasDTO->setIdSolicitudAudiencia($rsImputados[0]->getIdSolicitudAudiencia());
            $rsSolicitudAudiencia = $solicitudAudienciasDao->selectSolicitudesaudiencias($solicitudAudienciasDTO);
            if ($rsSolicitudAudiencia[0]->getCveEstatusSolicitud() == '1') {


                $drogasImputadoDto = $this->validarImputadosdrogas($drogasImputadoDto);
                if (!$validacion->num(1, 2, (int) $drogasImputadoDto->getCveDroga())) {
                    if ($drogasImputadoDto->getCveDroga() <= 0) {
                        $msg[] = array("La droga seleccionado no es valido en la posicion:" . $count);
                        $error = true;
                    }
                }
            } else {
                $msg[] = array("No se pueden modificar las drogas, ya que la solicitud se encuentra enviada.");
                $error = true;
            }
        } else {
            $msg[] = array("No se encontro al imputado.");
            $error = true;
        }
        if ((!$error)) {
            $imputadosDrogasDao = new ImputadosdrogasDAO();
            $drogasImputadoAux = new ImputadosdrogasDTO();
            $drogasImputadoAux->setIdImputadoSolicitud($drogasImputadoDto->getIdImputadoSolicitud());
            $drogasImputadoAux->setCveDroga($drogasImputadoDto->getCveDroga());
            $drogasImputadoAux->setActivo('S');
            $rs = $imputadosDrogasDao->selectImputadosdrogas($drogasImputadoAux);
            if ($rs == "") {
                $drogasImputadoDto->setActivo('S');
                $drogasImputadoDto = $imputadosDrogasDao->updateImputadosdrogas($drogasImputadoDto, $proveedor);
                if ($drogasImputadoDto != "") {
                    $resultado = array(
                        "idImputadoDroga" => $drogasImputadoDto[0]->getIdImputadoDroga(),
                        "cveDroga" => $drogasImputadoDto[0]->getCveDroga(),
                    );
                    array_push($listaResultados, $resultado);
                } else {
                    $msg[] = array("No se logro registrar el tutor debido a algun error en la transaccion");
                    $error = true;
                }
            } else {
                $msg[] = array("La droga ya existe para este imputado");
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
            $BitacoramovimientosDto->setCveAccion("143");
            $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
            $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
            $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
            $BitacoramovimientosDto->setObservaciones("ACTUALIZO DEFENSOR IMPUTADO SOLICITUD: " . json_encode($result));
            $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
        } else {
            $result = array("status" => "Error", "msj" => $msg);
            $result = ($result);
        }
        return json_encode($result);
    }

    public function deleteImputadosdrogas($drogasImputadoDto, $proveedor = null) {

        $result = "";

        $imputadosDrogasDao = new ImputadosdrogasDAO();
        $drogasimputadossolicitudesAuxDto = new ImputadosdrogasDTO();
        $drogasimputadossolicitudesAuxDto->setIdImputadoDroga($drogasImputadoDto->getIdImputadoDroga());
        $rs = $imputadosDrogasDao->selectImputadosdrogas($drogasimputadossolicitudesAuxDto);
        if ($rs != "") {
            $imputadossolicitud = new ImputadossolicitudesDTO();
            $imputadossolicitudesDao = new ImputadossolicitudesDAO();
            $imputadossolicitud->setIdImputadoSolicitud($rs[0]->getIdImputadoSolicitud());
            $imputadossolicitud->setActivo('S');
            $rsImputados = $imputadossolicitudesDao->selectImputadossolicitudes($imputadossolicitud, "", $proveedor);
            if ($rsImputados != "") {
                //Se verifica que el estatus de la solitud sea 1
                $solicitudAudienciasDTO = new SolicitudesaudienciasDTO();
                $solicitudAudienciasDao = new SolicitudesaudienciasDAO();
                $solicitudAudienciasDTO->setIdSolicitudAudiencia($rsImputados[0]->getIdSolicitudAudiencia());
                $rsSolicitudAudiencia = $solicitudAudienciasDao->selectSolicitudesaudiencias($solicitudAudienciasDTO);
                if ($rsSolicitudAudiencia[0]->getCveEstatusSolicitud() == '1') {


                    $validacion = new Validacion();
                    $drogasImputadoDto = $this->validarImputadosdrogas($drogasImputadoDto);

                    $drogasImputadoDto->setActivo('N');
                    $drogasImputadoDto = $imputadosDrogasDao->updateImputadosdrogas($drogasImputadoDto,$proveedor);

                    if ($drogasImputadoDto != "") {
                        $result = array(
                            "status" => "Ok",
                            "totalCount" => "La droga se elimino de forma correcta"
                        );
                        $BitacoramovimientosDao = new BitacoramovimientosDAO();
                        $BitacoramovimientosDto = new BitacoramovimientosDTO();
                        $BitacoramovimientosDto->setCveAccion("144");
                        $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                        $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                        $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                        $BitacoramovimientosDto->setObservaciones("ELIMINO DROGAS IMPUTADO SOLICITUD CON ID:" . $drogasImputadoDto[0]->getIdImputadoDroga());
                        $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
                    } else {
                        $result = array("status" => "Error", "msj" => "No se pudo eliminar la droga");
//                    $result = ($result);
                    }
                } else {
                    $result = array("status" => "Error", "msj" => "No se pudo eliminar la droga, ya que la solicitud se encuentra enviada");
                }
            } else {
                $result = array("status" => "Error", "msj" => "No se encontro al imputado");
            }
        } else {
            $result = array("status" => "Error", "msj" => "No se encontro la droga");
        }
        echo json_encode($result);
    }

}

?>