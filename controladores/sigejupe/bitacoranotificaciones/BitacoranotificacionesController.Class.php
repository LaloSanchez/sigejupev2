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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoranotificaciones/BitacoranotificacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoranotificaciones/BitacoranotificacionesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/cateos/CateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/cateos/CateosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudescateos/SolicitudescateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudescateos/SolicitudescateosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/usuarios/UsuarioCliente.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ordenes/OrdenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ordenes/OrdenesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesordenes/SolicitudesordenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesordenes/SolicitudesordenesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/respuestamuestra/RespuestamuestraDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/respuestamuestra/RespuestamuestraDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesmuestras/SolicitudesmuestrasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesmuestras/SolicitudesmuestrasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/apelacioncateos/ApelacioncateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/apelacioncateos/ApelacioncateosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

class BitacoranotificacionesController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarBitacoranotificaciones($BitacoranotificacionesDto) {
        $BitacoranotificacionesDto->setidBitacoraNotificacion(strtoupper(str_ireplace("'", "", trim($BitacoranotificacionesDto->getidBitacoraNotificacion()))));
        $BitacoranotificacionesDto->setcveMedioNotificacion(strtoupper(str_ireplace("'", "", trim($BitacoranotificacionesDto->getcveMedioNotificacion()))));
        $BitacoranotificacionesDto->setcveTipoCarpeta(strtoupper(str_ireplace("'", "", trim($BitacoranotificacionesDto->getcveTipoCarpeta()))));
        $BitacoranotificacionesDto->setcveTipoActuacion(strtoupper(str_ireplace("'", "", trim($BitacoranotificacionesDto->getcveTipoActuacion()))));
        $BitacoranotificacionesDto->setcveEstatusNotificacion(strtoupper(str_ireplace("'", "", trim($BitacoranotificacionesDto->getcveEstatusNotificacion()))));
        $BitacoranotificacionesDto->setidReferencia(strtoupper(str_ireplace("'", "", trim($BitacoranotificacionesDto->getidReferencia()))));
        $BitacoranotificacionesDto->setnumero(strtoupper(str_ireplace("'", "", trim($BitacoranotificacionesDto->getnumero()))));
        $BitacoranotificacionesDto->setanio(strtoupper(str_ireplace("'", "", trim($BitacoranotificacionesDto->getanio()))));
        $BitacoranotificacionesDto->setcvejuzgado(strtoupper(str_ireplace("'", "", trim($BitacoranotificacionesDto->getcvejuzgado()))));
        $BitacoranotificacionesDto->setcveUsuario(strtoupper(str_ireplace("'", "", trim($BitacoranotificacionesDto->getcveUsuario()))));
        $BitacoranotificacionesDto->setmedio(strtoupper(str_ireplace("'", "", trim($BitacoranotificacionesDto->getmedio()))));
        $BitacoranotificacionesDto->setmovimiento(strtoupper(str_ireplace("'", "", trim($BitacoranotificacionesDto->getmovimiento()))));
        $BitacoranotificacionesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($BitacoranotificacionesDto->getfechaRegistro()))));
        $BitacoranotificacionesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($BitacoranotificacionesDto->getfechaActualizacion()))));
        return $BitacoranotificacionesDto;
    }

    public function selectBitacoranotificaciones($BitacoranotificacionesDto, $proveedor = null) {
        $BitacoranotificacionesDto = $this->validarBitacoranotificaciones($BitacoranotificacionesDto);
        $BitacoranotificacionesDao = new BitacoranotificacionesDAO();
        $BitacoranotificacionesDto = $BitacoranotificacionesDao->selectBitacoranotificaciones($BitacoranotificacionesDto, $proveedor);
        return $BitacoranotificacionesDto;
    }

    public function insertBitacoranotificaciones($BitacoranotificacionesDto, $proveedor = null) {
        $BitacoranotificacionesDto = $this->validarBitacoranotificaciones($BitacoranotificacionesDto);
        $BitacoranotificacionesDao = new BitacoranotificacionesDAO();
        $BitacoranotificacionesDto = $BitacoranotificacionesDao->insertBitacoranotificaciones($BitacoranotificacionesDto, $proveedor);
        return $BitacoranotificacionesDto;
    }

    public function updateBitacoranotificaciones($BitacoranotificacionesDto, $proveedor = null) {
        $BitacoranotificacionesDto = $this->validarBitacoranotificaciones($BitacoranotificacionesDto);
        $BitacoranotificacionesDao = new BitacoranotificacionesDAO();
//$tmpDto = new BitacoranotificacionesDTO();
//$tmpDto = $BitacoranotificacionesDao->selectBitacoranotificaciones($BitacoranotificacionesDto,$proveedor);
//if($tmpDto!=""){//$BitacoranotificacionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $BitacoranotificacionesDto = $BitacoranotificacionesDao->updateBitacoranotificaciones($BitacoranotificacionesDto, $proveedor);
        return $BitacoranotificacionesDto;
//}
//return "";
    }

    public function deleteBitacoranotificaciones($BitacoranotificacionesDto, $proveedor = null) {
        $BitacoranotificacionesDto = $this->validarBitacoranotificaciones($BitacoranotificacionesDto);
        $BitacoranotificacionesDao = new BitacoranotificacionesDAO();
        $BitacoranotificacionesDto = $BitacoranotificacionesDao->deleteBitacoranotificaciones($BitacoranotificacionesDto, $proveedor);
        return $BitacoranotificacionesDto;
    }

    public function selectBitacoranotificacionesCateos($BitacoranotificacionesDto, $proveedor = null) {
        $BitacoranotificacionesDto = $this->validarBitacoranotificaciones($BitacoranotificacionesDto);
        $arrayLlamadasCorreos = "";
        $BitacoranotificacionesResumenCorreosDto = "";
        $BitacoranotificacionesCorreosDto = "";
        $BitacoranotificacionesResumenLlamadasDto = "";
        $BitacoranotificacionesLlamadasDto = "";

        #OBTENEMOS INFORMACION DE EL CATEO
        $cateosDao = new CateosDAO();
        $cateosDto = new CateosDTO();
        $cateosDto->setIdCateo($BitacoranotificacionesDto->getIdReferencia());
        $cateosDto = $cateosDao->selectCateos($cateosDto, $proveedor);

        #OBTENEMOS INFORMACION DE LA SOLICITUD DEL CATEO
        $solicitudescateosDao = new SolicitudescateosDAO();
        $solicitudescateosDto = new SolicitudescateosDTO();
        $solicitudescateosDto->setIdSolicitudCateo($cateosDto[0]->getIdSolicitudCateo());
        $solicitudescateosDto = $solicitudescateosDao->selectSolicitudescateos($solicitudescateosDto, "", $proveedor);

        $BitacoranotificacionesDao = new BitacoranotificacionesDAO();

        #OBTENEMOS INFORMACION DE LA BITACORA DE NOTIFICACIONES / CORREOS
        $BitacoranotificacionesDto->setCveMedioNotificacion("1");
        $BitacoranotificacionesCorreosDto = $BitacoranotificacionesDao->selectBitacoranotificaciones($BitacoranotificacionesDto, "", $proveedor);

        $BitacoranotificacionesDto->setCveMedioNotificacion("1");
        $BitacoranotificacionesResumenCorreosDto = $BitacoranotificacionesDao->selectBitacoranotificacionesCateos($BitacoranotificacionesDto, " group by cveUsuario", $proveedor);

        #OBTENEMOS INFORMACION DE LA BITACORA DE NOTIFICACIONES / LLAMADAS
        $BitacoranotificacionesDto->setCveMedioNotificacion("2");
        $BitacoranotificacionesLlamadasDto = $BitacoranotificacionesDao->selectBitacoranotificaciones($BitacoranotificacionesDto, "", $proveedor);

        $BitacoranotificacionesDto->setCveMedioNotificacion("2");
        $BitacoranotificacionesResumenLlamadasDto = $BitacoranotificacionesDao->selectBitacoranotificacionesCateos($BitacoranotificacionesDto, " group by cveUsuario", $proveedor);

        if ((count($BitacoranotificacionesCorreosDto) > 0 && $BitacoranotificacionesCorreosDto != "") || (count($BitacoranotificacionesLlamadasDto) > 0 && $BitacoranotificacionesLlamadasDto != "")) {
            $arrayIds = array();
            if ((count($BitacoranotificacionesCorreosDto) > 0 && $BitacoranotificacionesCorreosDto != "")) {
                foreach ($BitacoranotificacionesCorreosDto as $BitacoraNotificacionCorreo) {
                    if (!in_array($BitacoraNotificacionCorreo->getCveUsuario(), $arrayIds)) {
                        $arrayIds[] = $BitacoraNotificacionCorreo->getCveUsuario();
                    }
                }
            }

            if ((count($BitacoranotificacionesLlamadasDto) > 0 && $BitacoranotificacionesLlamadasDto != "")) {
                foreach ($BitacoranotificacionesLlamadasDto as $BitacoraNotificacionLlamada) {
                    if (!in_array($BitacoraNotificacionLlamada->getCveUsuario(), $arrayIds)) {
                        $arrayIds[] = $BitacoraNotificacionLlamada->getCveUsuario();
                    }
                }
            }

            $stringIds = implode(",", $arrayIds);
            $UsuarioCliente = new UsuarioCliente();
            $listaUsuarios = json_decode($UsuarioCliente->selectUsuarios_In($stringIds), true);
        } else {
            $listaUsuarios = "";
        }

        $arrayLlamadasCorreos = array("type" => "OK",
            "data" => [
                "solicitudCateo" => $solicitudescateosDto[0],
                "cateo" => $cateosDto[0],
                "correosResumen" => $BitacoranotificacionesResumenCorreosDto,
                "correosDetalle" => $BitacoranotificacionesCorreosDto,
                "llamadasResumen" => $BitacoranotificacionesResumenLlamadasDto,
                "llamadasDetalle" => $BitacoranotificacionesLlamadasDto,
                "usuarios" => $listaUsuarios
            ]
        );

        return $arrayLlamadasCorreos;
    }

    public function selectBitacoranotificacionesOrdenes($BitacoranotificacionesDto, $proveedor = null) {
        $BitacoranotificacionesDto = $this->validarBitacoranotificaciones($BitacoranotificacionesDto);
        $arrayLlamadasCorreos = "";
        $BitacoranotificacionesResumenCorreosDto = "";
        $BitacoranotificacionesCorreosDto = "";
        $BitacoranotificacionesResumenLlamadasDto = "";
        $BitacoranotificacionesLlamadasDto = "";

        #OBTENEMOS INFORMACION DE EL CATEO
        $OrdenesDAO = new OrdenesDAO();
        $OrdenesDTO = new OrdenesDTO();
        $OrdenesDTO->setIdOrden($BitacoranotificacionesDto->getIdReferencia());
        $OrdenesDTO = $OrdenesDAO->selectOrdenes($OrdenesDTO, $proveedor);

        #OBTENEMOS INFORMACION DE LA SOLICITUD DEL CATEO
        $solicitudesOrdenesDAO = new SolicitudesOrdenesDAO();
        $solicitudesOrdenesDTO = new SolicitudesOrdenesDTO();
        $solicitudesOrdenesDTO->setIdSolicitudOrden($OrdenesDTO[0]->getIdSolicitudOrden());
        $solicitudesOrdenesDTO = $solicitudesOrdenesDAO->selectSolicitudesordenes($solicitudesOrdenesDTO, "", $proveedor);

        $BitacoranotificacionesDao = new BitacoranotificacionesDAO();

        #OBTENEMOS INFORMACION DE LA BITACORA DE NOTIFICACIONES / CORREOS
        $BitacoranotificacionesDto->setCveMedioNotificacion("1");
        $BitacoranotificacionesCorreosDto = $BitacoranotificacionesDao->selectBitacoranotificaciones($BitacoranotificacionesDto, "", $proveedor);

        $BitacoranotificacionesDto->setCveMedioNotificacion("1");
        $BitacoranotificacionesResumenCorreosDto = $BitacoranotificacionesDao->selectBitacoranotificacionesOrdenes($BitacoranotificacionesDto, " group by cveUsuario", $proveedor);

        #OBTENEMOS INFORMACION DE LA BITACORA DE NOTIFICACIONES / LLAMADAS
        $BitacoranotificacionesDto->setCveMedioNotificacion("2");
        $BitacoranotificacionesLlamadasDto = $BitacoranotificacionesDao->selectBitacoranotificaciones($BitacoranotificacionesDto, "", $proveedor);

        $BitacoranotificacionesDto->setCveMedioNotificacion("2");
        $BitacoranotificacionesResumenLlamadasDto = $BitacoranotificacionesDao->selectBitacoranotificacionesOrdenes($BitacoranotificacionesDto, " group by cveUsuario", $proveedor);

        if ((count($BitacoranotificacionesCorreosDto) > 0 && $BitacoranotificacionesCorreosDto != "") || (count($BitacoranotificacionesLlamadasDto) > 0 && $BitacoranotificacionesLlamadasDto != "")) {
            $arrayIds = array();
            if ((count($BitacoranotificacionesCorreosDto) > 0 && $BitacoranotificacionesCorreosDto != "")) {
                foreach ($BitacoranotificacionesCorreosDto as $BitacoraNotificacionCorreo) {
                    if (!in_array($BitacoraNotificacionCorreo->getCveUsuario(), $arrayIds)) {
                        $arrayIds[] = $BitacoraNotificacionCorreo->getCveUsuario();
                    }
                }
            }

            if ((count($BitacoranotificacionesLlamadasDto) > 0 && $BitacoranotificacionesLlamadasDto != "")) {
                foreach ($BitacoranotificacionesLlamadasDto as $BitacoraNotificacionLlamada) {
                    if (!in_array($BitacoraNotificacionLlamada->getCveUsuario(), $arrayIds)) {
                        $arrayIds[] = $BitacoraNotificacionLlamada->getCveUsuario();
                    }
                }
            }

            $stringIds = implode(",", $arrayIds);
            $UsuarioCliente = new UsuarioCliente();
            $listaUsuarios = json_decode($UsuarioCliente->selectUsuarios_In($stringIds), true);
        } else {
            $listaUsuarios = "";
        }

        $arrayLlamadasCorreos = array("type" => "OK",
            "data" => [
                "solicitudOrden" => $solicitudesOrdenesDTO[0],
                "orden" => $OrdenesDTO[0],
                "correosResumen" => $BitacoranotificacionesResumenCorreosDto,
                "correosDetalle" => $BitacoranotificacionesCorreosDto,
                "llamadasResumen" => $BitacoranotificacionesResumenLlamadasDto,
                "llamadasDetalle" => $BitacoranotificacionesLlamadasDto,
                "usuarios" => $listaUsuarios
            ]
        );

        return $arrayLlamadasCorreos;
    }

    public function selectBitacoranotificacionesMuestras($BitacoranotificacionesDto, $proveedor = null) {
        $BitacoranotificacionesDto = $this->validarBitacoranotificaciones($BitacoranotificacionesDto);
        $arrayLlamadasCorreos = "";
        $BitacoranotificacionesResumenCorreosDto = "";
        $BitacoranotificacionesCorreosDto = "";
        $BitacoranotificacionesResumenLlamadasDto = "";
        $BitacoranotificacionesLlamadasDto = "";

        #OBTENEMOS INFORMACION DE EL CATEO
        $RespMuestraDAO = new RespuestamuestraDAO();
        $RespMuestraDTO = new RespuestamuestraDTO();
        $RespMuestraDTO->setIdMuestra($BitacoranotificacionesDto->getIdReferencia());
        $RespMuestraDTO = $RespMuestraDAO->selectRespuestamuestra($RespMuestraDTO, $proveedor);

        #OBTENEMOS INFORMACION DE LA SOLICITUD DEL CATEO
        $solicitudesMustrasDAO = new SolicitudesmuestrasDAO();
        $solicitudesMuestrasDTO = new SolicitudesmuestrasDTO();
        $solicitudesMuestrasDTO->setIdSolicitudMuestra($RespMuestraDTO[0]->getIdSolicitudMuestra());
        $solicitudesMuestrasDTO = $solicitudesMustrasDAO->selectSolicitudesmuestras($solicitudesMuestrasDTO, "", $proveedor);

        $BitacoranotificacionesDao = new BitacoranotificacionesDAO();

        #OBTENEMOS INFORMACION DE LA BITACORA DE NOTIFICACIONES / CORREOS
        $BitacoranotificacionesDto->setCveMedioNotificacion("1");
        $BitacoranotificacionesCorreosDto = $BitacoranotificacionesDao->selectBitacoranotificaciones($BitacoranotificacionesDto, "", $proveedor);

        $BitacoranotificacionesDto->setCveMedioNotificacion("1");
        $BitacoranotificacionesResumenCorreosDto = $BitacoranotificacionesDao->selectBitacoranotificacionesOrdenes($BitacoranotificacionesDto, " group by cveUsuario", $proveedor);

        #OBTENEMOS INFORMACION DE LA BITACORA DE NOTIFICACIONES / LLAMADAS
        $BitacoranotificacionesDto->setCveMedioNotificacion("2");
        $BitacoranotificacionesLlamadasDto = $BitacoranotificacionesDao->selectBitacoranotificaciones($BitacoranotificacionesDto, "", $proveedor);

        $BitacoranotificacionesDto->setCveMedioNotificacion("2");
        $BitacoranotificacionesResumenLlamadasDto = $BitacoranotificacionesDao->selectBitacoranotificacionesOrdenes($BitacoranotificacionesDto, " group by cveUsuario", $proveedor);

        if ((count($BitacoranotificacionesCorreosDto) > 0 && $BitacoranotificacionesCorreosDto != "") || (count($BitacoranotificacionesLlamadasDto) > 0 && $BitacoranotificacionesLlamadasDto != "")) {
            $arrayIds = array();
            if ((count($BitacoranotificacionesCorreosDto) > 0 && $BitacoranotificacionesCorreosDto != "")) {
                foreach ($BitacoranotificacionesCorreosDto as $BitacoraNotificacionCorreo) {
                    if (!in_array($BitacoraNotificacionCorreo->getCveUsuario(), $arrayIds)) {
                        $arrayIds[] = $BitacoraNotificacionCorreo->getCveUsuario();
                    }
                }
            }

            if ((count($BitacoranotificacionesLlamadasDto) > 0 && $BitacoranotificacionesLlamadasDto != "")) {
                foreach ($BitacoranotificacionesLlamadasDto as $BitacoraNotificacionLlamada) {
                    if (!in_array($BitacoraNotificacionLlamada->getCveUsuario(), $arrayIds)) {
                        $arrayIds[] = $BitacoraNotificacionLlamada->getCveUsuario();
                    }
                }
            }

            $stringIds = implode(",", $arrayIds);
            $UsuarioCliente = new UsuarioCliente();
            $listaUsuarios = json_decode($UsuarioCliente->selectUsuarios_In($stringIds), true);
        } else {
            $listaUsuarios = "";
        }

        $arrayLlamadasCorreos = array("type" => "OK",
            "data" => [
                "solicitudMuestra" => $solicitudesMuestrasDTO[0],
                "muestra" => $RespMuestraDTO[0],
                "correosResumen" => $BitacoranotificacionesResumenCorreosDto,
                "correosDetalle" => $BitacoranotificacionesCorreosDto,
                "llamadasResumen" => $BitacoranotificacionesResumenLlamadasDto,
                "llamadasDetalle" => $BitacoranotificacionesLlamadasDto,
                "usuarios" => $listaUsuarios
            ]
        );

        return $arrayLlamadasCorreos;
    }

    public function selectBitacoranotificacionesApelacion($BitacoranotificacionesDto, $proveedor = null) {
        $BitacoranotificacionesDto = $this->validarBitacoranotificaciones($BitacoranotificacionesDto);
        $arrayLlamadasCorreos = "";
        $BitacoranotificacionesResumenCorreosDto = "";
        $BitacoranotificacionesCorreosDto = "";
        $BitacoranotificacionesResumenLlamadasDto = "";
        $BitacoranotificacionesLlamadasDto = "";
        $orden = " AND cveTipoActuacion in(28,29,30) ";

        #Obtenemos la Informacion de La Apelacion de Cateo
        $apelacionDto = new ApelacioncateosDTO();
        $apelacionDao = new ApelacioncateosDAO();
        $apelacionDto->setIdApelacionCateo($BitacoranotificacionesDto->getIdReferencia());
        $apelacionDto = $apelacionDao->selectApelacioncateos($apelacionDto);

        #OBTENEMOS INFORMACION DE EL CATEO
        $cateosDao = new CateosDAO();
        $cateosDto = new CateosDTO();
        $cateosDto->setIdCateo($apelacionDto[0]->getIdCateo());
        $cateosDto = $cateosDao->selectCateos($cateosDto, $proveedor);

        #OBTENEMOS INFORMACION DE LA SOLICITUD DEL CATEO
        $solicitudescateosDao = new SolicitudescateosDAO();
        $solicitudescateosDto = new SolicitudescateosDTO();
        $solicitudescateosDto->setIdSolicitudCateo($cateosDto[0]->getIdSolicitudCateo());
        $solicitudescateosDto = $solicitudescateosDao->selectSolicitudescateos($solicitudescateosDto, "", $proveedor);

        $BitacoranotificacionesDao = new BitacoranotificacionesDAO();

        #OBTENEMOS INFORMACION DE LA BITACORA DE NOTIFICACIONES / CORREOS
        $BitacoranotificacionesDto->setCveMedioNotificacion("1");
        $BitacoranotificacionesCorreosDto = $BitacoranotificacionesDao->selectBitacoranotificaciones($BitacoranotificacionesDto, $orden, $proveedor);

        $BitacoranotificacionesDto->setCveMedioNotificacion("1");
        $BitacoranotificacionesResumenCorreosDto = $BitacoranotificacionesDao->selectBitacoranotificacionesCateos($BitacoranotificacionesDto, "$orden group by cveUsuario", $proveedor);

        #OBTENEMOS INFORMACION DE LA BITACORA DE NOTIFICACIONES / LLAMADAS
        $BitacoranotificacionesDto->setCveMedioNotificacion("2");
        $BitacoranotificacionesLlamadasDto = $BitacoranotificacionesDao->selectBitacoranotificaciones($BitacoranotificacionesDto, $orden, $proveedor);

        $BitacoranotificacionesDto->setCveMedioNotificacion("2");
        $BitacoranotificacionesResumenLlamadasDto = $BitacoranotificacionesDao->selectBitacoranotificacionesCateos($BitacoranotificacionesDto, "$orden group by cveUsuario", $proveedor);

        if ((count($BitacoranotificacionesCorreosDto) > 0 && $BitacoranotificacionesCorreosDto != "") || (count($BitacoranotificacionesLlamadasDto) > 0 && $BitacoranotificacionesLlamadasDto != "")) {
            $arrayIds = array();
            if ((count($BitacoranotificacionesCorreosDto) > 0 && $BitacoranotificacionesCorreosDto != "")) {
                foreach ($BitacoranotificacionesCorreosDto as $BitacoraNotificacionCorreo) {
                    if (!in_array($BitacoraNotificacionCorreo->getCveUsuario(), $arrayIds)) {
                        $arrayIds[] = $BitacoraNotificacionCorreo->getCveUsuario();
                    }
                }
            }

            if ((count($BitacoranotificacionesLlamadasDto) > 0 && $BitacoranotificacionesLlamadasDto != "")) {
                foreach ($BitacoranotificacionesLlamadasDto as $BitacoraNotificacionLlamada) {
                    if (!in_array($BitacoraNotificacionLlamada->getCveUsuario(), $arrayIds)) {
                        $arrayIds[] = $BitacoraNotificacionLlamada->getCveUsuario();
                    }
                }
            }

            $stringIds = implode(",", $arrayIds);
            $UsuarioCliente = new UsuarioCliente();
            $listaUsuarios = json_decode($UsuarioCliente->selectUsuarios_In($stringIds), true);
        } else {
            $listaUsuarios = "";
        }

        $arrayLlamadasCorreos = array("type" => "OK",
            "data" => [
                "solicitudCateo" => $solicitudescateosDto[0],
                "cateo" => $cateosDto[0],
                "correosResumen" => $BitacoranotificacionesResumenCorreosDto,
                "correosDetalle" => $BitacoranotificacionesCorreosDto,
                "llamadasResumen" => $BitacoranotificacionesResumenLlamadasDto,
                "llamadasDetalle" => $BitacoranotificacionesLlamadasDto,
                "usuarios" => $listaUsuarios
            ]
        );

        return $arrayLlamadasCorreos;
    }

}

?>