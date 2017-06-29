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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresimputadossolicitudes/DefensoresimputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/defensoresimputadossolicitudes/DefensoresimputadossolicitudesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoramovimientos/BitacoramovimientosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesaudiencias/SolicitudesaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesaudiencias/SolicitudesaudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadossolicitudes/ImputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadossolicitudes/ImputadossolicitudesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");

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
//            if ($rsSolicitudAudiencia[0]->getCveEstatusSolicitud() == '1') {


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
//            } else {
//                $msg[] = array("No se pueden agregar defensores, ya que la solicitud se encuentra enviada.");
//                $error = true;
//            }
        } else {
            $msg[] = array("No se encontro al imputado - defensor.");
            $error = true;
        }
        if ((!$error)) {
            $defensoresimputadossolicitudesDao = new DefensoresimputadossolicitudesDAO();
            $defensoresimputadossolicitudesDto->setActivo('S');

            if ($defensoresimputadossolicitudesDto->getCveTipoDefensor() == 6 || $defensoresimputadossolicitudesDto->getCveTipoDefensor() == 1) {

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
                    $fecha = date("d/m/Y");
                    $hora = date("H:i:s");
                    $resultWebSerice = array(
                        "idDefensor" => $defensoresimputadossolicitudesDto[0]->getIdDefensorImputadoSolicitud(),
                        "nombreSolicita" => $_SESSION["Nombre"],
                        "procedenciaSolicita" => $_SESSION["desAdscripcion"],
                        "cargo" => $_SESSION["cveGrupo"],
                        "fechaSolicitud" => $fecha,
                        "horaSolicitud" => $hora,
                        "nombreImputado" => $rsImputados[0]->getNombre(),
                        "paternoImputado" => $rsImputados[0]->getPaterno(),
                        "distrito" => 16,
                        "nuc" => $rsSolicitudAudiencia[0]->getNuc(),
                    );
                    
                    
                } else {
                    $msg[] = array("No se logro registrar el defensor debido a algun error en la transaccion");
                    $error = true;
                }
            } else {
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
//            if ($rsSolicitudAudiencia[0]->getCveEstatusSolicitud() == '1') {
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
//            } else {
//                $msg[] = array("No se pueden modificar defensores, ya que la solicitud se encuentra enviada.");
//                $error = true;
//            }
        } else {
            $msg[] = array("No se encontro al imputado.");
            $error = true;
        }
        if ((!$error)) {
            $defensoresimputadossolicitudesDao = new DefensoresimputadossolicitudesDAO();
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
//                if ($rsSolicitudAudiencia[0]->getCveEstatusSolicitud() == '1') {


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
//                } else {
//                    $result = array("status" => "Error", "msj" => "No se pudo eliminar el defensor ya que la solicitud se encuentra enviada");
//                }
            } else {
                $result = array("status" => "Error", "msj" => "No se encontro al imputado");
            }
        } else {
            $result = array("status" => "Error", "msj" => "No se encontro al defensor");
        }
        echo json_encode($result);
    }

}

?>