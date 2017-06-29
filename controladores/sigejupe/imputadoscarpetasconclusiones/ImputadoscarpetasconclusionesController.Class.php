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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadoscarpetasconclusiones/ImputadoscarpetasconclusionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadoscarpetasconclusiones/ImputadoscarpetasconclusionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadoscarpetas/ImputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadoscarpetas/ImputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/imputadoscarpetas/ImputadoscarpetasController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");
class ImputadoscarpetasconclusionesController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarImputadoscarpetasconclusiones($ImputadoscarpetasconclusionesDto) {
        $ImputadoscarpetasconclusionesDto->setidImputadoCarpetaConclusion(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasconclusionesDto->getidImputadoCarpetaConclusion()))));
        $ImputadoscarpetasconclusionesDto->setidImputadoCarpeta(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasconclusionesDto->getidImputadoCarpeta()))));
        $ImputadoscarpetasconclusionesDto->setcveConclusion(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasconclusionesDto->getcveConclusion()))));
        $ImputadoscarpetasconclusionesDto->setcumplimiento(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasconclusionesDto->getcumplimiento()))));
        $ImputadoscarpetasconclusionesDto->setmontoTotalAcordado(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasconclusionesDto->getmontoTotalAcordado()))));
        $ImputadoscarpetasconclusionesDto->setmontoTotalPagado(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasconclusionesDto->getmontoTotalPagado()))));
        $ImputadoscarpetasconclusionesDto->setfechaPactadaCumplimiento(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasconclusionesDto->getfechaPactadaCumplimiento()))));
        $ImputadoscarpetasconclusionesDto->setobservaciones(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasconclusionesDto->getobservaciones()))));
        $ImputadoscarpetasconclusionesDto->setactivo(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasconclusionesDto->getactivo()))));
        $ImputadoscarpetasconclusionesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasconclusionesDto->getfechaRegistro()))));
        $ImputadoscarpetasconclusionesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($ImputadoscarpetasconclusionesDto->getfechaActualizacion()))));
        return $ImputadoscarpetasconclusionesDto;
    }

    public function selectImputadoscarpetasconclusiones($ImputadoscarpetasconclusionesDto, $proveedor = null) {
        $ImputadoscarpetasconclusionesDto = $this->validarImputadoscarpetasconclusiones($ImputadoscarpetasconclusionesDto);
        $ImputadoscarpetasconclusionesDao = new ImputadoscarpetasconclusionesDAO();
        $ImputadoscarpetasconclusionesDto = $ImputadoscarpetasconclusionesDao->selectImputadoscarpetasconclusiones($ImputadoscarpetasconclusionesDto, $proveedor);
        return $ImputadoscarpetasconclusionesDto;
    }

    public function insertImputadoscarpetasconclusiones($ImputadoscarpetasconclusionesDto, $proveedor = null) {
        $ImputadoscarpetasconclusionesDto = $this->validarImputadoscarpetasconclusiones($ImputadoscarpetasconclusionesDto);
        $ImputadoscarpetasconclusionesDao = new ImputadoscarpetasconclusionesDAO();
        $ImputadoscarpetasconclusionesDto = $ImputadoscarpetasconclusionesDao->insertImputadoscarpetasconclusiones($ImputadoscarpetasconclusionesDto, $proveedor);
        return $ImputadoscarpetasconclusionesDto;
    }

    public function updateImputadoscarpetasconclusiones($ImputadoscarpetasconclusionesDto, $proveedor = null) {
        $ImputadoscarpetasconclusionesDto = $this->validarImputadoscarpetasconclusiones($ImputadoscarpetasconclusionesDto);
        $ImputadoscarpetasconclusionesDao = new ImputadoscarpetasconclusionesDAO();
//$tmpDto = new ImputadoscarpetasconclusionesDTO();
//$tmpDto = $ImputadoscarpetasconclusionesDao->selectImputadoscarpetasconclusiones($ImputadoscarpetasconclusionesDto,$proveedor);
//if($tmpDto!=""){//$ImputadoscarpetasconclusionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $ImputadoscarpetasconclusionesDto = $ImputadoscarpetasconclusionesDao->updateImputadoscarpetasconclusiones($ImputadoscarpetasconclusionesDto, $proveedor);
        return $ImputadoscarpetasconclusionesDto;
//}
//return "";
    }

    public function deleteImputadoscarpetasconclusiones($ImputadoscarpetasconclusionesDto, $proveedor = null) {
        $ImputadoscarpetasconclusionesDto = $this->validarImputadoscarpetasconclusiones($ImputadoscarpetasconclusionesDto);
        $ImputadoscarpetasconclusionesDao = new ImputadoscarpetasconclusionesDAO();
        $ImputadoscarpetasconclusionesDto = $ImputadoscarpetasconclusionesDao->deleteImputadoscarpetasconclusiones($ImputadoscarpetasconclusionesDto, $proveedor);
        return $ImputadoscarpetasconclusionesDto;
    }
    
    public function agregarImputadoscarpetasconclusiones($ImputadoscarpetasconclusionesDto, $proveedor = null) {
        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();
        $count = 1;
        $listaResultados = array();
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $fechaActual = "";
        $this->proveedor->execute("SELECT now() AS fechaActual");
        if (!$this->proveedor->error()) {
            if ($this->proveedor->rows($this->proveedor->stmt) > 0) {
                while ($row = $this->proveedor->fetch_array($this->proveedor->stmt, 0)) {
                    $fechaActual = $row["fechaActual"];
                }
            }
        } else {
            $fechaActual = date("Y-m-d H:i:s");
        }
        $imputadosCarpetasConclusionesDao = new ImputadoscarpetasconclusionesDAO();
        $ImputadoscarpetasconclusionesDto = $this->validarImputadoscarpetasconclusiones($ImputadoscarpetasconclusionesDto);
        if (!$validacion->num(0, 10, (int) $ImputadoscarpetasconclusionesDto->getIdImputadoCarpeta())) {
            if ($ImputadoscarpetasconclusionesDto->getIdImputadoCarpeta() <= 0) {
                $msg[] = array("Seleccione un imputado!");
                $error = true;
            }
        }
        if (!$validacion->num(0, 10, (int) $ImputadoscarpetasconclusionesDto->getCveConclusion())) {
            if ($ImputadoscarpetasconclusionesDto->getCveConclusion() <= 0) {
                $msg[] = array("Seleccione un tipo de conclusion!");
                $error = true;
            }
        }
        if ( !$error ) {
            
            $imputadosConclusionesDto = new ImputadoscarpetasconclusionesDTO();
            $imputadosConclusionesDto->setIdImputadoCarpeta($ImputadoscarpetasconclusionesDto->getIdImputadoCarpeta());
            $imputadosConclusionesDto->setActivo("S");
            $imputadosConclusionesDto = $imputadosCarpetasConclusionesDao->selectImputadoscarpetasconclusiones($imputadosConclusionesDto);
            if ( $imputadosConclusionesDto != "" ) {
                $error = true;
                $msg[] = array("Solo puede haber una conclusion activa por imputado, favor de verificar!");
            } else {
                $ImputadoscarpetasconclusionesDto = $imputadosCarpetasConclusionesDao->insertImputadoscarpetasconclusiones($ImputadoscarpetasconclusionesDto, null);
                if ( $ImputadoscarpetasconclusionesDto != "" ) {
                    $error = false;
                    $resultado = array(
                        "idImputadoCarpetaConclusion" => $ImputadoscarpetasconclusionesDto[0]->getIdImputadoCarpetaConclusion(),
                        "idImputadoCarpeta"           => $ImputadoscarpetasconclusionesDto[0]->getIdImputadoCarpeta(),
                        "cveConclusion"               => $ImputadoscarpetasconclusionesDto[0]->getCveConclusion(),
                        "cumplimiento"                => $ImputadoscarpetasconclusionesDto[0]->getCumplimiento(),
                        "montoTotalAcordado"          => $ImputadoscarpetasconclusionesDto[0]->getMontoTotalAcordado(),
                        "montoTotalPagado"            => $ImputadoscarpetasconclusionesDto[0]->getMontoTotalPagado(),
                        "fechaPactadaCumplimiento"    => $ImputadoscarpetasconclusionesDto[0]->getFechaPactadaCumplimiento(),
                        "observaciones"               => utf8_encode($ImputadoscarpetasconclusionesDto[0]->getObservaciones()),
                        "activo"                      => $ImputadoscarpetasconclusionesDto[0]->getActivo(),
                        "fechaRegistro"               => $ImputadoscarpetasconclusionesDto[0]->getFechaRegistro(),
                        "fechaActualizacion"          => $ImputadoscarpetasconclusionesDto[0]->getFechaActualizacion()
                    );
                    array_push($listaResultados, $resultado);
                    $msg[] = array(utf8_encode("Favor de verificar si el imputado debe tener Sobreseimiento, para ello, ir a la pesta&ntilde;a General y actualizar el campo correspondiente"));
                    /*
                     * Verificar si se le otorga sobreseimiento al imputado
                     */
//                    if ( (int)$ImputadoscarpetasconclusionesDto[0]->getCveConclusion() == 5 || (int)$ImputadoscarpetasconclusionesDto[0]->getCveConclusion() == 7 ) {
//                        $imputadosCarpetasDto = new ImputadoscarpetasDTO();
//                        $imputadosCarpetasDao = new ImputadoscarpetasDAO();
//                        $imputadosCarpetasDto->setIdImputadoCarpeta($ImputadoscarpetasconclusionesDto[0]->getIdImputadoCarpeta());
//                        $imputadosCarpetasDto->setTieneSobreseimiento("S");
//                        $imputadosCarpetasDto->setFechaSobreseimiento($fechaActual);
//                        $imputadosCarpetasDto = $imputadosCarpetasDao->updateImputadoscarpetas($imputadosCarpetasDto);
//                        if ( $imputadosCarpetasDto != "" ) {
//                            $error = false;
//                            
//                        } else {
//                            $error = true;
//                            $msg[] = array("Ocurrio un error al asignar el sobreseimiento al imputado");
//                        }
//                    }
                } else {
                    $error = true;
                    $msg[] = array("Ocurrio un error al guardar la conclusion");
                }
            }
        } else {
            $result = array("status"     => "Error", 
                            "totalCount" => 0,
                            "msj"        => $msg);
            $result = ($result);
        }
        if ( !$error ) {
            $result = array(
                "status"     => "Ok",
                "totalCount" => count($listaResultados),
                "resultados" => $listaResultados,
                "msj"        => $msg
            );
        } else {
            $result = array("status"     => "Error", 
                            "totalCount" => 0,
                            "msj"        => $msg);
            $result = ($result);
        }
        return json_encode($result);
    }
    
    public function modificarImputadoscarpetasconclusiones($ImputadoscarpetasconclusionesDto, $proveedor = null) {
        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();
        $count = 1;
        $listaResultados = array();
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $fechaActual = "";
        $this->proveedor->execute("SELECT now() AS fechaActual");
        if (!$this->proveedor->error()) {
            if ($this->proveedor->rows($this->proveedor->stmt) > 0) {
                while ($row = $this->proveedor->fetch_array($this->proveedor->stmt, 0)) {
                    $fechaActual = $row["fechaActual"];
                }
            }
        } else {
            $fechaActual = date("Y-m-d H:i:s");
        }
        $imputadosCarpetasConclusionesDao = new ImputadoscarpetasconclusionesDAO();
        $ImputadoscarpetasconclusionesDto = $this->validarImputadoscarpetasconclusiones($ImputadoscarpetasconclusionesDto);
        if (!$validacion->num(0, 10, (int) $ImputadoscarpetasconclusionesDto->getIdImputadoCarpeta())) {
            if ($ImputadoscarpetasconclusionesDto->getIdImputadoCarpeta() <= 0) {
                $msg[] = array("Seleccione un imputado!");
                $error = true;
            }
        }
        if (!$validacion->num(0, 10, (int) $ImputadoscarpetasconclusionesDto->getCveConclusion())) {
            if ($ImputadoscarpetasconclusionesDto->getCveConclusion() <= 0) {
                $msg[] = array("Seleccione un tipo de conclusion!");
                $error = true;
            }
        }
        if ( !$error ) {
            $conclusionesTmp = new ImputadoscarpetasconclusionesDTO();
            $conclusionesTmp->setIdImputadoCarpetaConclusion($ImputadoscarpetasconclusionesDto->getIdImputadoCarpetaConclusion());
            $conclusionesTmp = $imputadosCarpetasConclusionesDao->selectImputadoscarpetasconclusiones($conclusionesTmp);
            
            $ImputadoscarpetasconclusionesDto = $imputadosCarpetasConclusionesDao->updateImputadoscarpetasconclusiones($ImputadoscarpetasconclusionesDto, null);
            if ( $ImputadoscarpetasconclusionesDto != "" ) {
                $error = false;
                $resultado = array(
                    "idImputadoCarpetaConclusion" => $ImputadoscarpetasconclusionesDto[0]->getIdImputadoCarpetaConclusion(),
                    "idImputadoCarpeta"           => $ImputadoscarpetasconclusionesDto[0]->getIdImputadoCarpeta(),
                    "cveConclusion"               => $ImputadoscarpetasconclusionesDto[0]->getCveConclusion(),
                    "cumplimiento"                => $ImputadoscarpetasconclusionesDto[0]->getCumplimiento(),
                    "montoTotalAcordado"          => $ImputadoscarpetasconclusionesDto[0]->getMontoTotalAcordado(),
                    "montoTotalPagado"            => $ImputadoscarpetasconclusionesDto[0]->getMontoTotalPagado(),
                    "fechaPactadaCumplimiento"    => $ImputadoscarpetasconclusionesDto[0]->getFechaPactadaCumplimiento(),
                    "observaciones"               => utf8_encode($ImputadoscarpetasconclusionesDto[0]->getObservaciones()),
                    "activo"                      => $ImputadoscarpetasconclusionesDto[0]->getActivo(),
                    "fechaRegistro"               => $ImputadoscarpetasconclusionesDto[0]->getFechaRegistro(),
                    "fechaActualizacion"          => $ImputadoscarpetasconclusionesDto[0]->getFechaActualizacion()
                );
                array_push($listaResultados, $resultado);
                $msg[] = array(utf8_encode("Favor de verificar si el imputado debe tener Sobreseimiento, para ello, ir a la pesta&ntilde;a General y actualizar el campo correspondiente"));
                /*
                 * Verificar si se le otorga sobreseimiento al imputado
                 */
//                if ( (int)$ImputadoscarpetasconclusionesDto[0]->getCveConclusion() == 1 && $ImputadoscarpetasconclusionesDto[0]->getCumplimiento() == "S" ) {
//                    $imputadosCarpetasDto = new ImputadoscarpetasDTO();
//                    $imputadosCarpetasDao = new ImputadoscarpetasDAO();
//                    $imputadosCarpetasDto->setIdImputadoCarpeta($ImputadoscarpetasconclusionesDto[0]->getIdImputadoCarpeta());
//                    $imputadosCarpetasDto->setTieneSobreseimiento("S");
//                    $imputadosCarpetasDto->setFechaSobreseimiento($fechaActual);
//                    $imputadosCarpetasDto = $imputadosCarpetasDao->updateImputadoscarpetas($imputadosCarpetasDto);
//                    if ( $imputadosCarpetasDto != "" ) {
//                        $error = false;
//                        $msg[] = array("Se le otorga sobreseimiento al imputado");
//                        
//                        $imputadoCarpetaDto = new ImputadoscarpetasDTO();
//                        $imputadoCarpetaDto->setIdImputadoCarpeta($ImputadoscarpetasconclusionesDto[0]->getIdImputadoCarpeta());
//                        $imputadoCarpetaDto = $imputadosCarpetasDao->selectImputadoscarpetas($imputadoCarpetaDto);
//                        if ( $imputadoCarpetaDto != "" ) {
//                            $error = false;
//                            $carpetasJudicialesDto = new CarpetasjudicialesDTO();
//                            $carpetasJudicialesDto->setIdCarpetaJudicial($imputadoCarpetaDto[0]->getIdCarpetaJudicial());
//                            $imputadosCarpetasController = new ImputadoscarpetasController();
//                            $result = $imputadosCarpetasController->validaSobreseimiento($carpetasJudicialesDto);
//                            if ( $result ) {
//                                $msg[] = array("Se termina la carpeta judicial  debido a que todos los imputados tienen sobreseimiento o se encuentran en una etapa procesal posterior");
//                            }
//                        }
//                    } else {
//                        $error = true;
//                        $msg[] = array("Ocurrio un error al asignar el sobreseimiento al imputado");
//                    }
//                }
                /*
                 * Si el usuario indica que el acuerdo no se cumple y el imputado tenía sobreseimiento
                 * quitar el sobreseimiento al imputado y verificar si la carpeta judicial
                 * esta terminada para aperturarla
                 */
//                if ( $conclusionesTmp[0]->getCumplimiento() == "S" && $ImputadoscarpetasconclusionesDto[0]->getCumplimiento() == "N" ) {
//                    $imputadosCarpetasDto = new ImputadoscarpetasDTO();
//                    $imputadosCarpetasDao = new ImputadoscarpetasDAO();
//                    $imputadosCarpetasDto->setIdImputadoCarpeta($ImputadoscarpetasconclusionesDto[0]->getIdImputadoCarpeta());
//                    $imputadosCarpetasDto->setTieneSobreseimiento("N");
//                    $imputadosCarpetasDto->setFechaSobreseimiento("");
//                    $imputadosCarpetasDto = $imputadosCarpetasDao->updateImputadoscarpetas($imputadosCarpetasDto);
//                    if ( $imputadosCarpetasDto != "" ) {
//                        $error = false;
//                        $msg[] = array("Se le quita el sobreseimiento al imputado debido a que el acuerdo no fue cumplido");
//                        
//                        $imputadoCarpetaDto = new ImputadoscarpetasDTO();
//                        $imputadoCarpetaDto->setIdImputadoCarpeta($ImputadoscarpetasconclusionesDto[0]->getIdImputadoCarpeta());
//                        $imputadoCarpetaDto = $imputadosCarpetasDao->selectImputadoscarpetas($imputadoCarpetaDto);
//                        if ( $imputadoCarpetaDto != "" ) {
//                            $error = false;
//                            $carpetasJudicialesDto = new CarpetasjudicialesDTO();
//                            $carpetasJudicialesDao = new CarpetasjudicialesDAO();
//                            $carpetasJudicialesDto->setIdCarpetaJudicial($imputadoCarpetaDto[0]->getIdCarpetaJudicial());
//                            $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
//                            if ( $carpetasJudicialesDto != "" ) {
//                                $error = false;
//                                if ( (int)$carpetasJudicialesDto[0]->getCveEstatusCarpeta() == 2 ) {
//                                    
//                                    $carpetasJudicialesTmp = new CarpetasjudicialesDTO();
//                                    $carpetasJudicialesTmp->setIdCarpetaJudicial($carpetasJudicialesDto[0]->getIdCarpetaJudicial());
//                                    $carpetasJudicialesTmp->setCveEstatusCarpeta(1);
//                                    $carpetasJudicialesTmp = $carpetasJudicialesDao->aperturarCarpeta($carpetasJudicialesTmp);
//                                    if( $carpetasJudicialesTmp != "" ) {
//                                        $error = false;
//                                        $msg[] = array("Se apertura la carpeta judicial ya que se le quit&oacute; el sobreseimiento al imputado");
//
//                                    } else {
//                                        $error = true;
//                                        $msg[] = array("Ocurri&oacute; un error al aperturar la carpeta");
//                                    }
//                                }
//                            } else {
//                                $error = true;
//                                $msg[] = array("Ocurrio un error al consultar los datos de la carpeta judicial");
//                            }
//                        } else {
//                            $error = true;
//                            $msg[] = array("Ocurrio un error al consultar los datos del imputado");
//                        }
//                    } else {
//                        $error = true;
//                        $msg[] = array("Ocurrio un error al quitar el sobreseimiento al imputado");
//                    }
//                }
            } else {
                $error = true;
                $msg[] = array("Ocurrio un error al actualizar la conclusion");
            }
        } else {
            $result = array("status"     => "Error", 
                            "totalCount" => 0,
                            "msj"        => $msg);
            $result = ($result);
        }
        if ( !$error ) {
            $result = array(
                "status"     => "Ok",
                "totalCount" => count($listaResultados),
                "resultados" => $listaResultados,
                "msj"        => $msg
            );
        } else {
            $result = array("status"     => "Error", 
                            "totalCount" => 0,
                            "msj"        => $msg);
            $result = ($result);
        }
        return json_encode($result);
    }
    
    public function eliminarImputadoscarpetasconclusiones($ImputadoscarpetasconclusionesDto, $proveedor = null) {
        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();
        $count = 1;
        $listaResultados = array();
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $fechaActual = "";
        $this->proveedor->execute("SELECT now() AS fechaActual");
        if (!$this->proveedor->error()) {
            if ($this->proveedor->rows($this->proveedor->stmt) > 0) {
                while ($row = $this->proveedor->fetch_array($this->proveedor->stmt, 0)) {
                    $fechaActual = $row["fechaActual"];
                }
            }
        } else {
            $fechaActual = date("Y-m-d H:i:s");
        }
        $imputadosCarpetasConclusionesDao = new ImputadoscarpetasconclusionesDAO();
        $ImputadoscarpetasconclusionesDto = $this->validarImputadoscarpetasconclusiones($ImputadoscarpetasconclusionesDto);
        $ImputadoscarpetasconclusionesDto->setActivo("N");
        $ImputadoscarpetasconclusionesDto->setFechaActualizacion($fechaActual);
        $ImputadoscarpetasconclusionesDto = $imputadosCarpetasConclusionesDao->updateImputadoscarpetasconclusiones($ImputadoscarpetasconclusionesDto);
        if ( $ImputadoscarpetasconclusionesDto != "" ) {
            $resultado = array(
                "idImputadoCarpetaConclusion" => $ImputadoscarpetasconclusionesDto[0]->getIdImputadoCarpetaConclusion(),
                "idImputadoCarpeta"           => $ImputadoscarpetasconclusionesDto[0]->getIdImputadoCarpeta(),
                "cveConclusion"               => $ImputadoscarpetasconclusionesDto[0]->getCveConclusion(),
                "cumplimiento"                => $ImputadoscarpetasconclusionesDto[0]->getCumplimiento(),
                "montoTotalAcordado"          => $ImputadoscarpetasconclusionesDto[0]->getMontoTotalAcordado(),
                "montoTotalPagado"            => $ImputadoscarpetasconclusionesDto[0]->getMontoTotalPagado(),
                "fechaPactadaCumplimiento"    => $ImputadoscarpetasconclusionesDto[0]->getFechaPactadaCumplimiento(),
                "observaciones"               => utf8_encode($ImputadoscarpetasconclusionesDto[0]->getObservaciones()),
                "activo"                      => $ImputadoscarpetasconclusionesDto[0]->getActivo(),
                "fechaRegistro"               => $ImputadoscarpetasconclusionesDto[0]->getFechaRegistro(),
                "fechaActualizacion"          => $ImputadoscarpetasconclusionesDto[0]->getFechaActualizacion()
            );
            array_push($listaResultados, $resultado);
            $error = false;
            $msg[] = array("Datos eliminados correctamente");
            /*
             * Verificar si el imputado tenia sobreseimiento, si tenia, quitar
             * el sobreseimiento, verificar si la carpeta judicial tiene
             * estatus terminada, si lo tiene, aperturar la carpeta
             */
//            $imputadosCarpetasDto = new ImputadoscarpetasDTO();
//            $imputadosCarpetasDao = new ImputadoscarpetasDAO();
//            $imputadosCarpetasDto->setIdImputadoCarpeta($ImputadoscarpetasconclusionesDto[0]->getIdImputadoCarpeta());
//            $imputadosCarpetasDto->setTieneSobreseimiento("N");
//            $imputadosCarpetasDto->setFechaSobreseimiento("");
//            $imputadosCarpetasDto = $imputadosCarpetasDao->updateImputadoscarpetas($imputadosCarpetasDto);
//            if ( $imputadosCarpetasDto != "" ) {
//                $error = false;
//                $msg[] = array("Se le quita el sobreseimiento al imputado debido a que el acuerdo no fue cumplido");
//                
//                $imputadoCarpetaDto = new ImputadoscarpetasDTO();
//                $imputadoCarpetaDto->setIdImputadoCarpeta($ImputadoscarpetasconclusionesDto[0]->getIdImputadoCarpeta());
//                $imputadoCarpetaDto = $imputadosCarpetasDao->selectImputadoscarpetas($imputadoCarpetaDto);
//                if ( $imputadoCarpetaDto != "" ) {
//                    $error = false;
//                    $carpetasJudicialesDto = new CarpetasjudicialesDTO();
//                    $carpetasJudicialesDao = new CarpetasjudicialesDAO();
//                    $carpetasJudicialesDto->setIdCarpetaJudicial($imputadoCarpetaDto[0]->getIdCarpetaJudicial());
//                    $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
//                    if ( $carpetasJudicialesDto != "" ) {
//                        $error = false;
//                        if ( (int)$carpetasJudicialesDto[0]->getCveEstatusCarpeta() == 2 ) {
//                            
//                            $carpetasJudicialesTmp = new CarpetasjudicialesDTO();
//                            $carpetasJudicialesTmp->setIdCarpetaJudicial($carpetasJudicialesDto[0]->getIdCarpetaJudicial());
//                            $carpetasJudicialesTmp->setCveEstatusCarpeta(1);
//                            $carpetasJudicialesTmp = $carpetasJudicialesDao->aperturarCarpeta($carpetasJudicialesTmp);
//                            if( $carpetasJudicialesTmp != "" ) {
//                                $error = false;
//                                $msg[] = array("Se apertura la carpeta judicial ya que se le quit&oacute; el sobreseimiento al imputado");
//
//                            } else {
//                                $error = true;
//                                $msg[] = array("Ocurri&oacute; un error al aperturar la carpeta");
//                            }
//                        }
//                    } else {
//                        $error = true;
//                        $msg[] = array("Ocurrio un error al consultar los datos de la carpeta judicial");
//                    }
//                } else {
//                    $error = true;
//                    $msg[] = array("Ocurrio un error al consultar los datos del imputado");
//                }
//            } else {
//                $error = true;
//                $msg[] = array("Ocurrio un error al quitar el sobreseimiento al imputado");
//            }
        } else {
            $error = true;
            $msg[] = array("Ocurrio un error al eliminar los datos");
        }
        if ( !$error ) {
            $result = array(
                "status"     => "Ok",
                "totalCount" => count($listaResultados),
                "resultados" => $listaResultados,
                "msj"        => $msg
            );
        } else {
            $result = array("status"     => "Error", 
                            "totalCount" => 0,
                            "msj"        => $msg);
            $result = ($result);
        }
        return json_encode($result);
    }

}

?>