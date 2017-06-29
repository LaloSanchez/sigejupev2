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
//print_r($_SESSION);
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresimputadossolicitudes/DefensoresimputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/defensoresimputadossolicitudes/DefensoresimputadossolicitudesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresimputadoscarpetas/DefensoresimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/defensoresimputadoscarpetas/DefensoresimputadoscarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoramovimientos/BitacoramovimientosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesaudiencias/SolicitudesaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesaudiencias/SolicitudesaudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadossolicitudes/ImputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadossolicitudes/ImputadossolicitudesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/generos/GenerosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/generos/GenerosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estadosciviles/EstadoscivilesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estadosciviles/EstadoscivilesDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/nivelesinstrucciones/NivelesinstruccionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/nivelesinstrucciones/NivelesinstruccionesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ocupaciones/OcupacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ocupaciones/OcupacionesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/domiciliosimputadossolicitudes/DomiciliosimputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/domiciliosimputadossolicitudes/DomiciliosimputadossolicitudesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/paises/PaisesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/paises/PaisesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estados/EstadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estados/EstadosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/municipios/MunicipiosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/municipios/MunicipiosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/telefonosimputadossolicitudes/TelefonosimputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/telefonosimputadossolicitudes/TelefonosimputadossolicitudesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadosdrogas/ImputadosdrogasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadosdrogas/ImputadosdrogasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/drogas/DrogasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/drogas/DrogasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/impofedelsolicitudes/ImpofedelsolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/impofedelsolicitudes/ImpofedelsolicitudesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitossolicitudes/DelitossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitossolicitudes/DelitossolicitudesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/cataudiencias/CataudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/cataudiencias/CataudienciasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/interpretes/InterpretesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/interpretes/InterpretesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoraws/BitacorawsDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoraws/BitacorawsDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/audiencias/AudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/audiencias/AudienciasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");

date_default_timezone_set('America/Mexico_City');

class DefensoresimputadossolicitudesController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarDefensoresimputadossolicitudes($DefensoresimputadossolicitudesDto) {
        $DefensoresimputadossolicitudesDto->setidDefensorImputadoSolicitud(strtoupper(str_ireplace("'", "", trim($DefensoresimputadossolicitudesDto->getidDefensorImputadoSolicitud()))));
        $DefensoresimputadossolicitudesDto->setidImputadoSolicitud(strtoupper(str_ireplace("'", "", trim($DefensoresimputadossolicitudesDto->getidImputadoSolicitud()))));
        $DefensoresimputadossolicitudesDto->setcveTipoDefensor(strtoupper(str_ireplace("'", "", trim($DefensoresimputadossolicitudesDto->getcveTipoDefensor()))));
        $DefensoresimputadossolicitudesDto->setnombre(strtoupper(str_ireplace("'", "", trim($DefensoresimputadossolicitudesDto->getnombre()))));
        $DefensoresimputadossolicitudesDto->settelefono(strtoupper(str_ireplace("'", "", trim($DefensoresimputadossolicitudesDto->gettelefono()))));
        $DefensoresimputadossolicitudesDto->setcelular(strtoupper(str_ireplace("'", "", trim($DefensoresimputadossolicitudesDto->getcelular()))));
        $DefensoresimputadossolicitudesDto->setemail(strtoupper(str_ireplace("'", "", trim($DefensoresimputadossolicitudesDto->getemail()))));
        $DefensoresimputadossolicitudesDto->setactivo(strtoupper(str_ireplace("'", "", trim($DefensoresimputadossolicitudesDto->getactivo()))));
        $DefensoresimputadossolicitudesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($DefensoresimputadossolicitudesDto->getfechaRegistro()))));
        $DefensoresimputadossolicitudesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($DefensoresimputadossolicitudesDto->getfechaActualizacion()))));
        return $DefensoresimputadossolicitudesDto;
    }

    public function selectDefensoresimputadossolicitudes($DefensoresimputadossolicitudesDto, $proveedor = null) {
        $DefensoresimputadossolicitudesDto = $this->validarDefensoresimputadossolicitudes($DefensoresimputadossolicitudesDto);
        $DefensoresimputadossolicitudesDao = new DefensoresimputadossolicitudesDAO();
        $DefensoresimputadossolicitudesDto = $DefensoresimputadossolicitudesDao->selectDefensoresimputadossolicitudes($DefensoresimputadossolicitudesDto, $proveedor);
        return $DefensoresimputadossolicitudesDto;
    }

    public function insertDefensoresimputadossolicitudes($defensoresimputadossolicitudesDto, $proveedor = null, $bitacora = true) {
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
        $imputadossolicitud->setIdImputadoSolicitud($defensoresimputadossolicitudesDto->getIdImputadoSolicitud());
        $imputadossolicitud->setActivo('S');
        $rsImputados = $imputadossolicitudesDao->selectImputadossolicitudes($imputadossolicitud, "", $proveedor);
        if ($rsImputados != "") {
            //Se verifica que el estatus de la solitud sea 1
            $solicitudAudienciasDTO = new SolicitudesaudienciasDTO();
            $solicitudAudienciasDao = new SolicitudesaudienciasDAO();
            $solicitudAudienciasDTO->setIdSolicitudAudiencia($rsImputados[0]->getIdSolicitudAudiencia());
            $rsSolicitudAudiencia = $solicitudAudienciasDao->selectSolicitudesaudiencias($solicitudAudienciasDTO);
            if ($rsSolicitudAudiencia[0]->getCveEstatusSolicitud() == '1') {


                $defensoresimputadossolicitudesDto = $this->validarDefensoresimputadossolicitudes($defensoresimputadossolicitudesDto);
                if (!$validacion->text(1, 2, (int) $defensoresimputadossolicitudesDto->getCveTipoDefensor())) {
                    if ($defensoresimputadossolicitudesDto->getCveTipoDefensor() <= 0) {
                        $msg[] = array("El tipo de defensor no es valido en la posicion:" . $count);
                        $error = true;
                    }
                }

                if (!$validacion->text(1, 500, (string) $defensoresimputadossolicitudesDto->getNombre())) {
                    if ($defensoresimputadossolicitudesDto->getNombre() == "") {
                        $msg[] = array("No ingreso un nombre correcto en la posicion:" . $count);
                        $error = true;
                    }
                }
                if ($defensoresimputadossolicitudesDto->getTelefono() != "") {
                    if (!$validacion->telefono((string) $defensoresimputadossolicitudesDto->getTelefono())) {
                        $msg[] = array("No ingreso un Telefono correcto correcto en la posicion:" . $count);
                        $error = true;
                    }
                }

                if ($defensoresimputadossolicitudesDto->getCelular() != "") {
                    if (!$validacion->telefono((string) $defensoresimputadossolicitudesDto->getCelular())) {
                        $msg[] = array("No ingreso un celular correcto en la posicion:" . $count);
                        $error = true;
                    }
                }

                if ($defensoresimputadossolicitudesDto->getEmail() != "") {
                    if (!$validacion->email((string) $defensoresimputadossolicitudesDto->getEmail())) {
                        $msg[] = array("No ingreso un email correcto en la posicion:" . $count);
                        $error = true;
                    }
                }
            } else {
                $msg[] = array("No se pueden agregar defensores, ya que la solicitud se encuentra enviada.");
                $error = true;
            }
        } else {
            $msg[] = array("No se encontro al imputado - defensores.");
            $error = true;
        }
        if ((!$error)) {
            $defensoresimputadossolicitudesDao = new DefensoresimputadossolicitudesDAO();
            $defensoresimputadossolicitudesAuxDto = new DefensoresimputadossolicitudesDTO();
            $defensoresimputadossolicitudesDto->setActivo('S');
            $defensoresimputadossolicitudesDto = $defensoresimputadossolicitudesDao->insertDefensoresimputadossolicitudes($defensoresimputadossolicitudesDto, $proveedor);

            if ($defensoresimputadossolicitudesDto != "") {
                $resultado = array(
                    "idDefensorImputadoSolicitud" => $defensoresimputadossolicitudesDto[0]->getIdDefensorImputadoSolicitud(),
                    "cveTipoDefensor" => $defensoresimputadossolicitudesDto[0]->getCveTipoDefensor(),
                    "nombre" => utf8_encode($defensoresimputadossolicitudesDto[0]->getNombre()),
                    "telefono" => $defensoresimputadossolicitudesDto[0]->getTelefono(),
                    "celular" => $defensoresimputadossolicitudesDto[0]->getCelular(),
                    "email" => $defensoresimputadossolicitudesDto[0]->getEmail(),
                );
                array_push($listaResultados, $resultado);
            } else {
                $msg[] = array("No se logro registrar el defensor debido a algun error en la transaccion");
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
                $BitacoramovimientosDto->setCveAccion("139");
                $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                $BitacoramovimientosDto->setObservaciones("AGREGO DEFENSOR IMPUTADO SOLICITUD: " . json_encode($result));
                $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
            }
        } else {
            $result = array("status" => "Error", "msj" => $msg);
            $result = ($result);
        }
        return json_encode($result);
    }

    public function updateDefensoresimputadossolicitudes($defensoresimputadossolicitudesDto, $proveedor = null) {
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
        $imputadossolicitud->setIdImputadoSolicitud($defensoresimputadossolicitudesDto->getIdImputadoSolicitud());
        $imputadossolicitud->setActivo('S');
        $rsImputados = $imputadossolicitudesDao->selectImputadossolicitudes($imputadossolicitud, "", $proveedor);
        if ($rsImputados != "") {
            //Se verifica que el estatus de la solitud sea 1
            $solicitudAudienciasDTO = new SolicitudesaudienciasDTO();
            $solicitudAudienciasDao = new SolicitudesaudienciasDAO();
            $solicitudAudienciasDTO->setIdSolicitudAudiencia($rsImputados[0]->getIdSolicitudAudiencia());
            $rsSolicitudAudiencia = $solicitudAudienciasDao->selectSolicitudesaudiencias($solicitudAudienciasDTO);
            if ($rsSolicitudAudiencia[0]->getCveEstatusSolicitud() == '1') {
                $defensoresimputadossolicitudesDto = $this->validarDefensoresimputadossolicitudes($defensoresimputadossolicitudesDto);
                if (!$validacion->text(1, 2, (int) $defensoresimputadossolicitudesDto->getCveTipoDefensor())) {
                    if ($defensoresimputadossolicitudesDto->getCveTipoDefensor() <= 0) {
                        $msg[] = array("El tipo de defensor no es valido en la posicion:" . $count);
                        $error = true;
                    }
                }

                if (!$validacion->text(1, 500, (string) $defensoresimputadossolicitudesDto->getNombre())) {
                    if ($defensoresimputadossolicitudesDto->getNombre() == "") {
                        $msg[] = array("No ingreso un nombre correcto en la posicion:" . $count);
                        $error = true;
                    }
                }
                if ($defensoresimputadossolicitudesDto->getTelefono() != "") {
                    if (!$validacion->telefono((string) $defensoresimputadossolicitudesDto->getTelefono())) {
                        $msg[] = array("No ingreso un Telefono correcto correcto en la posicion:" . $count);
                        $error = true;
                    }
                }

                if ($defensoresimputadossolicitudesDto->getCelular() != "") {
                    if (!$validacion->telefono((string) $defensoresimputadossolicitudesDto->getCelular())) {
                        $msg[] = array("No ingreso un celular correcto en la posicion:" . $count);
                        $error = true;
                    }
                }

                if ($defensoresimputadossolicitudesDto->getEmail() != "") {
                    if (!$validacion->email((string) $defensoresimputadossolicitudesDto->getEmail())) {
                        $msg[] = array("No ingreso un email correcto en la posicion:" . $count);
                        $error = true;
                    }
                }
            } else {
                $msg[] = array("No se pueden modificar defensores, ya que la solicitud se encuentra enviada.");
                $error = true;
            }
        } else {
            $msg[] = array("No se encontro al imputado.");
            $error = true;
        }
        if ((!$error)) {
            $defensoresimputadossolicitudesDao = new DefensoresimputadossolicitudesDAO();
            $defensoresimputadossolicitudesAuxDto = new DefensoresimputadossolicitudesDTO();
            $defensoresimputadossolicitudesDto->setActivo('S');
            $defensoresimputadossolicitudesDto = $defensoresimputadossolicitudesDao->updateDefensoresimputadossolicitudes($defensoresimputadossolicitudesDto, $proveedor);

            if ($defensoresimputadossolicitudesDto != "") {
                $resultado = array(
                    "idDefensorImputadoSolicitud" => $defensoresimputadossolicitudesDto[0]->getIdDefensorImputadoSolicitud(),
                    "cveTipoDefensor" => $defensoresimputadossolicitudesDto[0]->getCveTipoDefensor(),
                    "nombre" => utf8_encode($defensoresimputadossolicitudesDto[0]->getNombre()),
                    "telefono" => $defensoresimputadossolicitudesDto[0]->getTelefono(),
                    "celular" => $defensoresimputadossolicitudesDto[0]->getCelular(),
                    "email" => $defensoresimputadossolicitudesDto[0]->getEmail(),
                );
                array_push($listaResultados, $resultado);
            } else {
                $msg[] = array("No se logro registrar el defensor debido a algun error en la transaccion");
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
            $BitacoramovimientosDto->setCveAccion("140");
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

    public function deleteDefensoresimputadossolicitudes($defensoresimputadossolicitudesDto, $proveedor = null) {
        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();
        $count = 1;
        $indexCount = 0;
        $arrayAuxiliar = array();
        $listaResultados = array();


        $defensoresimputadossolicitudesDao = new DefensoresimputadossolicitudesDAO;

        $defensoresimputadossolicitudesAuxDto = new DefensoresimputadossolicitudesDTO();
        $defensoresimputadossolicitudesAuxDto->setIdDefensorImputadoSolicitud($defensoresimputadossolicitudesDto->getIdDefensorImputadoSolicitud());
        $rs = $defensoresimputadossolicitudesDao->selectDefensoresimputadossolicitudes($defensoresimputadossolicitudesAuxDto);
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


                    $defensoresimputadossolicitudesDto = $this->validarDefensoresimputadossolicitudes($defensoresimputadossolicitudesDto);
                    $defensoresimputadossolicitudesDto = $defensoresimputadossolicitudesDao->eliminaDefensoresimputadossolicitudes($defensoresimputadossolicitudesDto, $proveedor);
                    if ($defensoresimputadossolicitudesDto != "") {
                        $result = array(
                            "status" => "Ok",
                            "totalCount" => "El defensor de elimino de forma correcta"
                        );
                        $BitacoramovimientosDao = new BitacoramovimientosDAO();
                        $BitacoramovimientosDto = new BitacoramovimientosDTO();
                        $BitacoramovimientosDto->setCveAccion("141");
                        $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                        $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                        $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                        $BitacoramovimientosDto->setObservaciones("ELIMINO DEFENSOR IMPUTADO SOLICITUD CON ID:" . $defensoresimputadossolicitudesDto[0]->getIdDefensorImputadoSolicitud());
                        $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
                    } else {
                        $result = array("status" => "Error", "msj" => "No se puedo eliminar el defensor");
                        $result = ($result);
                    }
                } else {
                    $result = array("status" => "Error", "msj" => "No se pudo eliminar el defensor ya que la solicitud se encuentra enviada");
                }
            } else {
                $result = array("status" => "Error", "msj" => "No se encontro al imputado");
            }
        } else {
            $result = array("status" => "Error", "msj" => "No se encontro al defensor");
        }
        echo json_encode($result);
    }

    ##-----------------------------------------------------------------------------------------------------##

    public function consultaDefensorWebSerivces($service) {
        $DefensoresimputadossolicitudesDao = new DefensoresimputadossolicitudesDAO();
        $DefensoresimputadossolicitudesDto = $DefensoresimputadossolicitudesDao->consultaDefensorWebSerivces($service);
        return $DefensoresimputadossolicitudesDto;
    }

    public function AsignacionWebService($json) {

        $param = "";

        $defensoresDto = new DefensoresimputadossolicitudesDTO();
        $defensoresAuxDto = new DefensoresimputadossolicitudesDTO();
        $defensoresDao = new DefensoresimputadossolicitudesDAO();
        $data = json_decode($json, true);
        $defensoresDto->setIdDefensorImputadoSolicitud($data["idReferencia"]);
        $defensoresDto = $defensoresDao->selectDefensoresimputadossolicitudes($defensoresDto);
        if ($defensoresDto != "") {
            if ((int) $defensoresDto[0]->getCveTipoDefensor() == 5 || (int) $defensoresDto[0]->getCveTipoDefensor() == 6) {
                $defensoresAuxDto->setIdDefensorImputadoSolicitud($defensoresDto[0]->getIdDefensorImputadoSolicitud());
                $defensoresAuxDto->setNombre(utf8_decode($data["nombreDefensor"] . " " . $data["paternoDefensor"] . " " . $data["maternoDefensor"]));
                $defensoresAuxDto->setEmail($data["emailDefensor"]);
                $defensoresAuxDto->setCelular($data["celularDefensor"]);
                $defensoresAuxDto->setCveTipoDefensor(1);
                $defensoresAuxDto->setTelefono(utf8_decode($defensoresDto[0]->getTelefono() . " |DATOS RESPUESTA|" . $data["folioSolicitud"] . "|" . $data["estatus"]));
                $defensoresAuxDto->setActivo("S");

                $imputadosSolicitudesDto = new ImputadossolicitudesDTO();
                $imputadosSolicitudesDao = new ImputadossolicitudesDAO();

                $solicitudesAudienciasDto = new SolicitudesaudienciasDTO();
                $solicitudesAudienciasDao = new SolicitudesaudienciasDAO();

                $imputadosSolicitudesDto->setIdImputadoSolicitud($defensoresDto[0]->getIdImputadoSolicitud());
                $imputadosSolicitudesDto = $imputadosSolicitudesDao->selectImputadossolicitudes($imputadosSolicitudesDto);
                if ($imputadosSolicitudesDto != "") {
                    $solicitudesAudienciasDto->setIdSolicitudAudiencia($imputadosSolicitudesDto[0]->getIdSolicitudAudiencia());
                    $solicitudesAudienciasDto = $solicitudesAudienciasDao->selectSolicitudesaudiencias($solicitudesAudienciasDto);
                    if ($solicitudesAudienciasDto != "") {
                        $DefensoresimputadossolicitudesDto = $defensoresDao->updateDefensoresimputadossolicitudesRSP($defensoresAuxDto);
                        if ($DefensoresimputadossolicitudesDto != "") {

                            $audienciasDto = new AudienciasDTO();
                            $audienciasDao = new AudienciasDAO();

                            $impofedelSolicitudesDto = new ImpofedelsolicitudesDTO();
                            $impofedelSolicitudesDao = new ImpofedelsolicitudesDAO();

                            $telefonosDto = new TelefonosimputadossolicitudesDTO();
                            $telefonosDao = new TelefonosimputadossolicitudesDAO();

                            $domicilioDto = new DomiciliosimputadossolicitudesDTO;
                            $domicilioDao = new DomiciliosimputadossolicitudesDAO;

                            $delitosSolicitudesDto = new DelitossolicitudesDTO();
                            $delitosSolicitudesDao = new DelitossolicitudesDAO();

                            $catAudienciasDto = new CataudienciasDTO();
                            $catAudienciasDao = new CataudienciasDAO();

                            $generosDto = new GenerosDTO();
                            $generosDao = new GenerosDAO();

                            $estadoCivilDto = new EstadoscivilesDTO();
                            $estadoCivilDao = new EstadoscivilesDAO();

                            $nivelInstruccionDto = new NivelesinstruccionesDTO();
                            $nivelInstruccionDao = new NivelesinstruccionesDAO();

                            $ocupacionDto = new OcupacionesDTO();
                            $ocupacionDao = new OcupacionesDAO();

                            $paisesDto = new PaisesDTO();
                            $paisesDao = new PaisesDAO();

                            $estadosDto = new EstadosDTO();
                            $estadosDao = new EstadosDAO();

                            $municipiosDto = new MunicipiosDTO();
                            $municipiosDao = new MunicipiosDAO();

                            $drogasDto = new ImputadosdrogasDTO();
                            $drogasDao = new ImputadosdrogasDAO();

                            $desDrogasDto = new DrogasDTO();
                            $desDrogasDao = new DrogasDAO();

                            $interpreteDto = new InterpretesDTO();
                            $interpreteDao = new InterpretesDAO();

                            ///////Se actualiza la informacion del defensor del imputado en carpetas judiciales.
                            if ((int) $imputadosSolicitudesDto[0]->getIdImputadoCarpeta() != "" && (int) $imputadosSolicitudesDto[0]->getIdImputadoCarpeta() != 0) {
                                $defensoresimputadosCarpetasDto = new DefensoresimputadoscarpetasDTO();
                                $defensoresimputadosCarpetasAuxDto = new DefensoresimputadoscarpetasDTO();
                                $defensoresimputadosCarpetasDao = new DefensoresimputadoscarpetasDAO();
                                $defensoresimputadosCarpetasDto->setIdImputadoCarpeta($imputadosSolicitudesDto[0]->getIdImputadoCarpeta());
                                $defensoresimputadosCarpetasDto->setCveTipoDefensor(6);
                                $defensoresimputadosCarpetasDto->setActivo("S");
                                $defensoresimputadosCarpetasDto = $defensoresimputadosCarpetasDao->selectDefensoresimputadoscarpetas($defensoresimputadosCarpetasDto);
                                if ($defensoresimputadosCarpetasDto != "") {
                                    $defensoresimputadosCarpetasAuxDto->setIdDefensorImputadoCarpeta($defensoresimputadosCarpetasDto[0]->getIdDefensorImputadoCarpeta());
                                    $defensoresimputadosCarpetasAuxDto->setNombre(utf8_decode($data["nombreDefensor"] . " " . $data["paternoDefensor"] . " " . $data["maternoDefensor"]));
                                    $defensoresimputadosCarpetasAuxDto->setEmail($data["emailDefensor"]);
                                    $defensoresimputadosCarpetasAuxDto->setCelular($data["celularDefensor"]);
                                    $defensoresimputadosCarpetasAuxDto->setCveTipoDefensor(1);
                                    $defensoresimputadosCarpetasAuxDto->setTelefono("-");
                                    $defensoresimputadosCarpetasAuxDto = $defensoresimputadosCarpetasDao->updateDefensoresimputadoscarpetas($defensoresimputadosCarpetasAuxDto);
                                }
                            }
                            ////////////////////////////////////////////////////////////////////////////////////////
                            /////////////Se crea json de respuesta
                            ////Se consulta la hora de la audiencia

                            $audienciasDto->setIdSolicitudAudiencia($solicitudesAudienciasDto[0]->getIdSolicitudAudiencia());
                            $audienciasDto->setActivo("S");

                            $rsAudienciasDto = $audienciasDao->selectAudiencias($audienciasDto);
                            if ($rsAudienciasDto != "") {
                                list($fechaAu, $horaAu) = explode(" ", $rsAudienciasDto[0]->getFechaInicial());
                                $param .= "{";
                                list($fecha, $hora) = explode(" ", $DefensoresimputadossolicitudesDto[0]->getFechaActualizacion());
                                $param .= '"idReferencia":' . json_encode(utf8_encode($DefensoresimputadossolicitudesDto[0]->getIdDefensorImputadoSolicitud())) . ",";
                                $result = ($DefensoresimputadossolicitudesDto[0]->getTelefono());
                                $parte = explode("|", $result);
                                $param .= '"folioSolicitud":' . json_encode(utf8_encode($parte[1])) . ",";
                                $param .= '"fechaRecepcion":' . json_encode(utf8_encode($this->fechaNormal($fecha))) . ",";
                                $param .= '"horaRecepcion":' . json_encode(utf8_encode($hora)) . ",";
                                $param .= '"fechaAudiencia":' . json_encode(utf8_encode($this->fechaNormal($fechaAu))) . ",";
                                $param .= '"horaAudiencia":' . json_encode(utf8_encode($horaAu)) . ",";
                                $param .= '"estatus":' . json_encode(utf8_encode("Correcto")) . ",";
                                if ($solicitudesAudienciasDto[0]->getCveCatAudiencia() != "" && $solicitudesAudienciasDto[0]->getCveCatAudiencia() != 0) {
                                    $catAudienciasDto->setCveCatAudiencia($solicitudesAudienciasDto[0]->getCveCatAudiencia());
                                    $catAudienciasDto = $catAudienciasDao->selectCataudiencias($catAudienciasDto);
                                    if ($catAudienciasDto != "") {
                                        $param .= '"tipoAudiencia":' . json_encode(utf8_encode($catAudienciasDto[0]->getDesCatAudiencia())) . ",";
                                    } else {
                                        $param .= '"tipoAudiencia": "",';
                                    }
                                } else {
                                    $param .= '"tipoAudiencia": "",';
                                }

                                $param .= '"NUC":' . json_encode(utf8_encode($solicitudesAudienciasDto[0]->getNuc())) . ",";
                                $param .= '"carpetaInvestigacion":' . json_encode(utf8_encode($solicitudesAudienciasDto[0]->getCarpetaInv())) . ",";
                                $param .= '"observaciones":' . json_encode(utf8_encode($solicitudesAudienciasDto[0]->getObservaciones())) . ",";
                                $param .= '"curp":' . json_encode(utf8_encode($imputadosSolicitudesDto[0]->getCurp())) . ",";
                                $param .= '"alias":' . json_encode(utf8_encode($imputadosSolicitudesDto[0]->getAlias())) . ",";
                                $param .= '"edad":' . json_encode(utf8_encode($imputadosSolicitudesDto[0]->getEdad())) . ",";
                                if ($imputadosSolicitudesDto[0]->getCveGenero() != "" && $imputadosSolicitudesDto[0]->getCveGenero() != 0) {
                                    $generosDto->setCveGenero($imputadosSolicitudesDto[0]->getCveGenero());
                                    $generosDto = $generosDao->selectGeneros($generosDto);
                                    if ($generosDto != "") {
                                        $param .= '"sexo":' . json_encode(utf8_encode($generosDto[0]->getDesGenero())) . ",";
                                    } else {
                                        $param .= '"sexo": "",';
                                    }
                                } else {
                                    $param .= '"sexo": "",';
                                }
                                if ($imputadosSolicitudesDto[0]->getCveEstadoCivil() != "" && $imputadosSolicitudesDto[0]->getCveEstadoCivil() != 0) {
                                    $estadoCivilDto->setCveEstadoCivil($imputadosSolicitudesDto[0]->getCveEstadoCivil());
                                    $estadoCivilDto = $estadoCivilDao->selectEstadosciviles($estadoCivilDto);
                                    if ($estadoCivilDto != "") {
                                        $param .= '"edoCivil":' . json_encode(utf8_encode($estadoCivilDto[0]->getDesEstadoCivil())) . ",";
                                    } else {
                                        $param .= '"edoCivil": "",';
                                    }
                                } else {
                                    $param .= '"edoCivil": "",';
                                }
                                if ($imputadosSolicitudesDto[0]->getCveNivelInstruccion() != "" && $imputadosSolicitudesDto[0]->getCveNivelInstruccion() != 0) {
                                    $nivelInstruccionDto->setCveNivelInstruccion($imputadosSolicitudesDto[0]->getCveNivelInstruccion());
                                    $nivelInstruccionDto = $nivelInstruccionDao->selectNivelesinstrucciones($nivelInstruccionDto);
                                    if ($nivelInstruccionDto != "") {
                                        $param .= '"nivelEstudios":' . json_encode(utf8_encode($nivelInstruccionDto[0]->getDesNivelInstruccion())) . ",";
                                    } else {
                                        $param .= '"nivelEstudios": "",';
                                    }
                                } else {
                                    $param .= '"nivelEstudios": "",';
                                }
                                if ($imputadosSolicitudesDto[0]->getCveOcupacion() != "" && $imputadosSolicitudesDto[0]->getCveOcupacion() != 0) {
                                    $ocupacionDto->setCveOcupacion($imputadosSolicitudesDto[0]->getCveOcupacion());
                                    $ocupacionDto = $ocupacionDao->selectOcupaciones($ocupacionDto);
                                    if ($ocupacionDto != "") {
                                        $param .= '"ocupacion":' . json_encode(utf8_encode($ocupacionDto[0]->getDesOcupacion())) . ",";
                                    } else {
                                        $param .= '"ocupacion": "",';
                                    }
                                } else {
                                    $param .= '"ocupacion": "",';
                                }
                                if ($imputadosSolicitudesDto[0]->getCveInterprete() != "" && $imputadosSolicitudesDto[0]->getCveInterprete() != 0) {
                                    $interpreteDto->setCveInterprete($imputadosSolicitudesDto[0]->getCveInterprete());
                                    $interpreteDto = $interpreteDao->selectInterpretes($interpreteDto);
                                    if ($interpreteDto != "") {
                                        $param .= '"requiereTraductor":' . json_encode(utf8_encode($interpreteDto[0]->getDesInterprete())) . ",";
                                    } else {
                                        $param .= '"requiereTraductor": "",';
                                    }
                                } else {
                                    $param .= '"requiereTraductor": "",';
                                }
                                #############################DOMICILIOS#################################################################
                                $domicilioDto->setIdImputadoSolicitud($imputadosSolicitudesDto[0]->getIdImputadoSolicitud());
                                $domicilioDto->setActivo("S");
                                $domicilioDto = $domicilioDao->selectDomiciliosimputadossolicitudes($domicilioDto, " order by DomicilioProcesal desc, recidenciaHabitual desc ");
                                if ($domicilioDto != "") {
                                    $param .= '"calle":' . json_encode(utf8_encode($domicilioDto[0]->getDireccion())) . ",";
                                    $param .= '"numInt":' . json_encode(utf8_encode($domicilioDto[0]->getNumInterior())) . ",";
                                    $param .= '"numExt":' . json_encode(utf8_encode($domicilioDto[0]->getNumExterior())) . ",";
                                    $param .= '"colonia":' . json_encode(utf8_encode($domicilioDto[0]->getColonia())) . ",";
                                    $param .= '"cp":' . json_encode(utf8_encode($domicilioDto[0]->getCp())) . ",";
                                    if ($domicilioDto[0]->getCvePais() != "" && $domicilioDto[0]->getCvePais() != 0) {
                                        $paisesDto->setCvePais($domicilioDto[0]->getCvePais());
                                        $paisesDto = $paisesDao->selectPaises($paisesDto);
                                        if ($paisesDto != "") {
                                            $param .= '"pais":' . json_encode(utf8_encode($paisesDto[0]->getDesPais())) . ",";
                                        } else {
                                            $param .= '"pais": "",';
                                        }
                                    } else {
                                        $param .= '"pais": "",';
                                    }
                                    if ($domicilioDto[0]->getCvePais() == 119) {
                                        if ($domicilioDto[0]->getCveEstado() != "" && $domicilioDto[0]->getCveEstado() != 0) {
                                            $estadosDto->setCveEstado($domicilioDto[0]->getCveEstado());
                                            $estadosDto = $estadosDao->selectEstados($estadosDto);
                                            if ($estadosDto != "") {
                                                $param .= '"estado":' . json_encode(utf8_encode($estadosDto[0]->getDesEstado())) . ",";
                                            } else {
                                                $param .= '"estado": "",';
                                            }
                                        } else {
                                            $param .= '"estado":' . json_encode(utf8_encode($domicilioDto[0]->getEstado())) . ",";
                                        }
                                        if ($domicilioDto[0]->getCveMunicipio() != "" && $domicilioDto[0]->getCveMunicipio() != 0) {
                                            $municipiosDto->setCveMunicipio($domicilioDto[0]->getCveMunicipio());
                                            $municipiosDto = $municipiosDao->selectMunicipios($municipiosDto);
                                            if ($municipiosDto != "") {
                                                $param .= '"municipio":' . json_encode(utf8_encode($municipiosDto[0]->getDesMunicipio())) . ",";
                                            } else {
                                                $param .= '"municipio": "",';
                                            }
                                        } else {
                                            $param .= '"municipio":' . json_encode(utf8_encode($domicilioDto[0]->getMunicipio())) . ",";
                                        }
                                    } else {
                                        $param .= '"estado":' . json_encode(utf8_encode($domicilioDto[0]->getEstado())) . ",";
                                        $param .= '"municipio":' . json_encode(utf8_encode($domicilioDto[0]->getMunicipio())) . ",";
                                    }
                                } else {
                                    $param .= '"calle": "",';
                                    $param .= '"numInt": "",';
                                    $param .= '"numExt": "",';
                                    $param .= '"colonia": "",';
                                    $param .= '"cp": "",';
                                    $param .= '"pais": "",';
                                    $param .= '"ciudad": "",';
                                    $param .= '"estado": "",';
                                    $param .= '"municipio": "",';
                                }
                                #############################TELEFONO#################################################################s
                                $telefonosDto->setIdImputadoSolicitud($imputadosSolicitudesDto[0]->getIdImputadoSolicitud());
                                $telefonosDto->setActivo("S");
                                $telefonosDto = $telefonosDao->selectTelefonosimputadossolicitudes($telefonosDto);
                                if ($telefonosDto != "") {
                                    $param .= '"cel":' . json_encode(utf8_encode($telefonosDto[0]->getCelular())) . ",";
                                    $param .= '"email":' . json_encode(utf8_encode($telefonosDto[0]->getEmail())) . ",";
                                } else {
                                    $param .= '"cel": "",';
                                    $param .= '"email": "",';
                                }
                                ###############################Drogas######################################################################
                                $drogasDto->setIdImputadoSolicitud($imputadosSolicitudesDto[0]->getIdImputadoSolicitud());
                                $drogasDto->setActivo("S");
                                $drogasDto = $drogasDao->selectImputadosdrogas($drogasDto);
                                if ($drogasDto != "") {
                                    $param .= '"adicciones": "Si",';

                                    $cualesDrogas = "";
                                    foreach ($drogasDto as $droga) {
                                        $desDrogasDto->setCveDroga($droga->getCveDroga());
                                        $resDrogasDto = $desDrogasDao->selectDrogas($desDrogasDto);
                                        $cualesDrogas = $cualesDrogas . "," . $resDrogasDto[0]->getDesDroga();
                                    }
//                            $cualesDrogas = substr($cualesDrogas, 0, -1);s
                                    $substr = substr($cualesDrogas, 1);
                                    $param .= '"cualesAdicciones":' . json_encode(utf8_encode($substr)) . ",";
                                } else {
                                    $param .= '"adicciones": "No",';
                                    $param .= '"cualesAdicciones": "",';
                                }
                                ###############################Delitos######################################################################
                                $impofedelSolicitudesDto->setIdImputadoSolicitud($imputadosSolicitudesDto[0]->getIdImputadoSolicitud());
                                $impofedelSolicitudesDto->setActivo("S");
                                $impofedelSolicitudesDto = $impofedelSolicitudesDao->selectImpofedelsolicitudes($impofedelSolicitudesDto);
                                if ($impofedelSolicitudesDto != "") {
                                    $delitosId = "";
                                    foreach ($impofedelSolicitudesDto as $impofedel) {
                                        $delitosSolicitudesDto->setIdDelitoSolicitud($impofedel->getIdDelitoSolicitud());
                                        $rsDelitosSolicitudesDto = $delitosSolicitudesDao->selectDelitossolicitudes($delitosSolicitudesDto);
                                        $delitosId = $delitosId . "," . $rsDelitosSolicitudesDto[0]->getCveDelito();
                                    }


//                            $delitosId = substr($delitosId, -1, 0);
                                    $substr1 = substr($delitosId, 1);
                                    $param .= '"delitoid":' . json_encode(utf8_encode($substr1)) . "";
                                } else {
                                    $param .= '"delitoid": ""';
                                }
                                $param .= "}";
                            } else {
                                $fecha = date("d/m/Y");
                                $hora = date("H:i:s");
                                $param .= "{";
                                $param .= '"idReferencia":' . json_encode(utf8_encode($data["idReferencia"])) . ",";
                                $param .= '"fechaRecepcion":' . json_encode(utf8_encode($fecha)) . ",";
                                $param .= '"horaRecepcion":' . json_encode(utf8_encode($hora)) . ",";
                                $param .= '"estatus":' . json_encode(utf8_encode("Incorrecto")) . ",";
                                $param .= '"mensaje":' . json_encode(utf8_encode("No se encontro la audiencia.")) . ",";
                                $param .= '"NUC":' . json_encode("") . "";
                                $param .= "}";
                            }
                        } else {
                            $fecha = date("d/m/Y");
                            $hora = date("H:i:s");
                            $param .= "{";
                            $param .= '"idReferencia":' . json_encode(utf8_encode($data["idReferencia"])) . ",";
                            $param .= '"fechaRecepcion":' . json_encode(utf8_encode($fecha)) . ",";
                            $param .= '"horaRecepcion":' . json_encode(utf8_encode($hora)) . ",";
                            $param .= '"estatus":' . json_encode(utf8_encode("Incorrecto")) . ",";
                            $param .= '"mensaje":' . json_encode(utf8_encode("No se puedo conectar con el servidor.")) . ",";
                            $param .= '"NUC":' . json_encode("") . "";
                            $param .= "}";
                        }
                    } else {
                        $fecha = date("d/m/Y");
                        $hora = date("H:i:s");
                        $param .= "{";
                        $param .= '"idReferencia":' . json_encode(utf8_encode($data["idReferencia"])) . ",";
                        $param .= '"fechaRecepcion":' . json_encode(utf8_encode($fecha)) . ",";
                        $param .= '"horaRecepcion":' . json_encode(utf8_encode($hora)) . ",";
                        $param .= '"estatus":' . json_encode(utf8_encode("Incorrecto")) . ",";
                        $param .= '"mensaje":' . json_encode(utf8_encode("La solicitud no existe.")) . ",";
                        $param .= '"NUC":' . json_encode("") . "";
                        $param .= "}";
                    }
                } else {
                    $fecha = date("d/m/Y");
                    $hora = date("H:i:s");
                    $param .= "{";
                    $param .= '"idReferencia":' . json_encode(utf8_encode($data["idReferencia"])) . ",";
                    $param .= '"fechaRecepcion":' . json_encode(utf8_encode($fecha)) . ",";
                    $param .= '"horaRecepcion":' . json_encode(utf8_encode($hora)) . ",";
                    $param .= '"estatus":' . json_encode(utf8_encode("Incorrecto")) . ",";
                    $param .= '"mensaje":' . json_encode(utf8_encode("El imputado no existe.")) . ",";
                    $param .= '"NUC":' . json_encode("") . "";
                    $param .= "}";
                }
            } else {
                $fecha = date("d/m/Y");
                $hora = date("H:i:s");
                $param .= "{";
                $param .= '"idReferencia":' . json_encode(utf8_encode($data["idReferencia"])) . ",";
                $param .= '"fechaRecepcion":' . json_encode(utf8_encode($fecha)) . ",";
                $param .= '"horaRecepcion":' . json_encode(utf8_encode($hora)) . ",";
                $param .= '"estatus":' . json_encode(utf8_encode("Incorrecto")) . ",";
                $param .= '"mensaje":' . json_encode(utf8_encode("El idReferencia ya cuenta con defensor.")) . ",";
                $param .= '"NUC":' . json_encode("") . "";
                $param .= "}";
            }
        } else {
            $fecha = date("d/m/Y");
            $hora = date("H:i:s");
            $param .= "{";
            $param .= '"idReferencia":' . json_encode(utf8_encode($data["idReferencia"])) . ",";
            $param .= '"fechaRecepcion":' . json_encode(utf8_encode($fecha)) . ",";
            $param .= '"horaRecepcion":' . json_encode(utf8_encode($hora)) . ",";
            $param .= '"estatus":' . json_encode(utf8_encode("Incorrecto")) . ",";
            $param .= '"mensaje":' . json_encode(utf8_encode("El idReferencia no existe.")) . ",";
            $param .= '"NUC":' . json_encode("") . "";
            $param .= "}";
        }



        $bitacoraWsDto = new BitacorawsDTO();
        $bitacoraWsDao = new BitacorawsDAO();
        $fechaRegistro = date("Y-m-d H:i:s");
        $bitacoraWsDto->setCveAccionws(18);
        $bitacoraWsDto->setObservacionesOrigen($json);
        $bitacoraWsDto->setDescEstatusBitacoraws("respuesta valida");
        $bitacoraWsDto->setObservacionesDestino($param);
        $bitacoraWsDto->setHrefOrigen("RESPUESTA DE SOLICITUD DE DEFENSOR DE IMPUTADOS");
        $bitacoraWsDto->setFechaRegistro($fechaRegistro);
        $rsBitacoraWsDto = $bitacoraWsDao->insertBitacoraws($bitacoraWsDto);


        return $param;
    }

    private function fechaNormal($fecha) {
        list($year, $mes, $dia) = explode("-", $fecha);
        return $dia . "/" . $mes . "/" . $year;
    }

}

//
//$json = '{"idReferencia": "1063777","nombreDefensor": "Rodrigo","paternoDefensor": "García","maternoDefensor": "Palafox","emailDefensor": "r.palafox@anyplace.com","celularDefensor": "554647373","folioSolicitud": "IDP/EDOMEX/DRT/177/2016","estatus": "AUTORIZADO" }';
//$controlador = new DefensoresimputadossolicitudesController();
//$controlador = $controlador->AsignacionWebService($json);
//print_r($controlador);
?>