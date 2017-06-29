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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/apelantescarpetas/ApelantescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/apelantescarpetas/ApelantescarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
//validacion
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");
//bitacora
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");

class ApelantescarpetasController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarApelantescarpetas($ApelantescarpetasDto) {
        $ApelantescarpetasDto->setidApelanteCarpeta(strtoupper(str_ireplace("'", "", trim($ApelantescarpetasDto->getidApelanteCarpeta()))));
        $ApelantescarpetasDto->setidCarpetaJudicial(strtoupper(str_ireplace("'", "", trim($ApelantescarpetasDto->getidCarpetaJudicial()))));
        $ApelantescarpetasDto->setnombre(strtoupper(str_ireplace("'", "", trim($ApelantescarpetasDto->getnombre()))));
        $ApelantescarpetasDto->setpaterno(strtoupper(str_ireplace("'", "", trim($ApelantescarpetasDto->getpaterno()))));
        $ApelantescarpetasDto->setmaterno(strtoupper(str_ireplace("'", "", trim($ApelantescarpetasDto->getmaterno()))));
        $ApelantescarpetasDto->setcveGenero(strtoupper(str_ireplace("'", "", trim($ApelantescarpetasDto->getcveGenero()))));
        $ApelantescarpetasDto->setcveTipoPersona(strtoupper(str_ireplace("'", "", trim($ApelantescarpetasDto->getcveTipoPersona()))));
        $ApelantescarpetasDto->setnombreMoral(strtoupper(str_ireplace("'", "", trim($ApelantescarpetasDto->getnombreMoral()))));
        $ApelantescarpetasDto->setcveTipoApelante(strtoupper(str_ireplace("'", "", trim($ApelantescarpetasDto->getcveTipoApelante()))));
        $ApelantescarpetasDto->setactivo(strtoupper(str_ireplace("'", "", trim($ApelantescarpetasDto->getactivo()))));
        $ApelantescarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($ApelantescarpetasDto->getfechaRegistro()))));
        $ApelantescarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($ApelantescarpetasDto->getfechaActualizacion()))));
        $ApelantescarpetasDto->setDomicilio(strtoupper(str_ireplace("'", "", trim($ApelantescarpetasDto->getDomicilio()))));
        $ApelantescarpetasDto->setEmail(strtoupper(str_ireplace("'", "", trim($ApelantescarpetasDto->getEmail()))));
        return $ApelantescarpetasDto;
    }

    public function selectApelantescarpetas($ApelantescarpetasDto, $proveedor = null) {
        $ApelantescarpetasDto = $this->validarApelantescarpetas($ApelantescarpetasDto);
        $ApelantescarpetasDao = new ApelantescarpetasDAO();
        $ApelantescarpetasDto = $ApelantescarpetasDao->selectApelantescarpetas($ApelantescarpetasDto, $proveedor);
        return $ApelantescarpetasDto;
    }

    public function insertApelantescarpetas($ApelantescarpetasDto, $proveedor = null) {
        $ApelantescarpetasDto = $this->validarApelantescarpetas($ApelantescarpetasDto);
        $ApelantescarpetasDao = new ApelantescarpetasDAO();
        $ApelantescarpetasDto = $ApelantescarpetasDao->insertApelantescarpetas($ApelantescarpetasDto, $proveedor);
        return $ApelantescarpetasDto;
    }

    public function updateApelantescarpetas($ApelantescarpetasDto, $proveedor = null) {
        $ApelantescarpetasDto = $this->validarApelantescarpetas($ApelantescarpetasDto);
        $ApelantescarpetasDao = new ApelantescarpetasDAO();
//$tmpDto = new ApelantescarpetasDTO();
//$tmpDto = $ApelantescarpetasDao->selectApelantescarpetas($ApelantescarpetasDto,$proveedor);
//if($tmpDto!=""){//$ApelantescarpetasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $ApelantescarpetasDto = $ApelantescarpetasDao->updateApelantescarpetas($ApelantescarpetasDto, $proveedor);
        return $ApelantescarpetasDto;
//}
//return "";
    }

    public function deleteApelantescarpetas($ApelantescarpetasDto, $proveedor = null) {
        $ApelantescarpetasDto = $this->validarApelantescarpetas($ApelantescarpetasDto);
        $ApelantescarpetasDao = new ApelantescarpetasDAO();
        $ApelantescarpetasDto = $ApelantescarpetasDao->deleteApelantescarpetas($ApelantescarpetasDto, $proveedor);
        return $ApelantescarpetasDto;
    }
    
    /*
     * Insertar datos del apelante
     */
    public function agregarApelantescarpetas($apelantescarpetasDto, $proveedor = null){
        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();
        $count = 1;
        $listaResultados = array();
        
        $apelantesCarpetasDao = new ApelantescarpetasDAO();
        $tmp = new ApelantescarpetasDTO();
        $apelantescarpetasDto = $this->validarApelantescarpetas($apelantescarpetasDto);
        
        if ($apelantescarpetasDto->getCveTipoPersona() == 1) {
            if (!$validacion->num(1, 2, (int) $apelantescarpetasDto->getCveGenero())) {
                if ($apelantescarpetasDto->getCveGenero() <= 0) {
                    $msg[] = array("El genero seleccionado no es valido");
                    $error = true;
                }
            }
            if (!$validacion->num(1, 2, (int) $apelantescarpetasDto->getCveTipoApelante())) {
                if ($apelantescarpetasDto->getCveTipoApelante() <= 0) {
                    $msg[] = array("El Tipo de Apelante seleccionado no es valido");
                    $error = true;
                }
            }
        } else {
            if (!$validacion->num(1, 2, (int) $apelantescarpetasDto->getCveTipoApelante())) {
                if ($apelantescarpetasDto->getCveTipoApelante() <= 0) {
                    $msg[] = array("El Tipo de Apelante seleccionado no es valido");
                    $error = true;
                }
            }
        }
        if (!$validacion->text(1, 500, (string) $apelantescarpetasDto->getDomicilio())) {
            if ($apelantescarpetasDto->getDomicilio() == "") {
                $msg[] = array("El domicilio es requerido!");
                $error = true;
            }
        }
        if ((!$error) && (0 <= count($msg))) {
            if ($apelantescarpetasDto->getCveTipoPersona() == 1) {
                $tmp->setNombre($apelantescarpetasDto->getNombre());
                $tmp->setPaterno($apelantescarpetasDto->getPaterno());
                $tmp->setMaterno($apelantescarpetasDto->getMaterno());
                $tmp->setIdCarpetaJudicial($apelantescarpetasDto->getIdCarpetaJudicial());
                $tmp->setActivo("S");
            } else {
                $tmp->setNombreMoral($apelantescarpetasDto->getNombreMoral());
                $tmp->setIdCarpetaJudicial($apelantescarpetasDto->getIdCarpetaJudicial());
                $tmp->setActivo("S");
            }
            $tmp->setDomicilio($apelantescarpetasDto->getDomicilio());
            $tmp->setEmail($apelantescarpetasDto->getEmail());
            $tmp = $apelantesCarpetasDao->selectApelantescarpetas($tmp, "", null);
            
            if ( $tmp == "" ) {
                if ($apelantescarpetasDto->getCveTipoPersona() > 1) {
                    $apelantescarpetasDto->setCveGenero(3);
                }
                $apelantescarpetasDto = $apelantesCarpetasDao->insertApelantescarpetas($apelantescarpetasDto, $proveedor);
                if ( $apelantescarpetasDto != "" ) {
                    $resultado = array(
                        "idApelanteCarpeta" => $apelantescarpetasDto[0]->getIdApelanteCarpeta(),
                        "idCarpetaJudicial" => $apelantescarpetasDto[0]->getIdCarpetaJudicial(),
                        "nombre"            => utf8_encode($apelantescarpetasDto[0]->getNombre()),
                        "paterno"           => utf8_encode($apelantescarpetasDto[0]->getPaterno()),
                        "materno"           => utf8_encode($apelantescarpetasDto[0]->getMaterno()),
                        "cveGenero"         => $apelantescarpetasDto[0]->getCveGenero(),
                        "cveTipoPersona"    => $apelantescarpetasDto[0]->getCveTipoPersona(),
                        "nombreMoral"       => utf8_encode($apelantescarpetasDto[0]->getNombreMoral()),
                        "domicilio"           => utf8_encode($apelantescarpetasDto[0]->getDomicilio()),
                        "correo"           => utf8_encode($apelantescarpetasDto[0]->getEmail()),
                        "cveTipoApelante"   => $apelantescarpetasDto[0]->getCveTipoApelante(),
                        "activo"            => $apelantescarpetasDto[0]->getActivo(),
                        "domicilio"         => utf8_encode($apelantescarpetasDto[0]->getDomicilio()),
                        "email"             => utf8_encode($apelantescarpetasDto[0]->getEmail())
                    );
                    array_push($listaResultados, $resultado);
                } else {
                    $msg[] = array("No se logro insertar al apelante");
                    $error = true;
                }
                
            } else {
                $msg[] = array("Ya existe un apelante con el mismo nombre dado de alta");
                $error = true;
            }
            
            if ((!$error)) {
                $result = array(
                    "status"     => "Ok",
                    "totalCount" => count($listaResultados),
                    "msj"        => $msg,
                    "resultados" => $listaResultados,
                );
                $bitacora = new BitacoramovimientosController();
                $bitacoraOfendido = $bitacora->agregar(329, 'Insercion tblapelantescarpetas', 'txt', serialize($apelantescarpetasDto[0]), '', null);

                if (!count($bitacoraOfendido))
                    throw new Exception('no se pudo guardar la accion insertar apelante en bitacora');
            } else {
                $result = array(
                    "status" => "Error", 
                    "msj"    => $msg
                );
                $result = ($result);
            }
            
        } else {
            $result = array(
                "status" => "Error", 
                "msj"    => $msg
            );
            $result = ($result);
        }
        return json_encode($result);
        //echo json_encode($result);
    }
    
    /*
     * Modificar datos generales del apelante
     */
    public function modificarApelantescarpetas($apelantescarpetasDto, $proveedor = null) {
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
        
        $apelantesCarpetasDao = new ApelantescarpetasDAO();
        $tmp = new ApelantescarpetasDTO();
        $apelantescarpetasDto = $this->validarApelantescarpetas($apelantescarpetasDto);
        
        if ($apelantescarpetasDto->getCveTipoPersona() == 1) {
            if (!$validacion->num(1, 2, (int) $apelantescarpetasDto->getCveGenero())) {
                if ($apelantescarpetasDto->getCveGenero() <= 0) {
                    $msg[] = array("El genero seleccionado no es valido");
                    $error = true;
                }
            }
            if (!$validacion->num(1, 2, (int) $apelantescarpetasDto->getCveTipoApelante())) {
                if ($apelantescarpetasDto->getCveTipoApelante() <= 0) {
                    $msg[] = array("El Tipo de Apelante seleccionado no es valido");
                    $error = true;
                }
            }
        } else {
            if (!$validacion->num(1, 2, (int) $apelantescarpetasDto->getCveTipoApelante())) {
                if ($apelantescarpetasDto->getCveTipoApelante() <= 0) {
                    $msg[] = array("El Tipo de Apelante seleccionado no es valido");
                    $error = true;
                }
            }
        }
        if (!$validacion->text(1, 500, (string) $apelantescarpetasDto->getDomicilio())) {
            if ($apelantescarpetasDto->getDomicilio() == "") {
                $msg[] = array("El domicilio es requerido!");
                $error = true;
            }
        }
        
        if ((!$error) && (0 <= count($msg))) {
            
            if ($apelantescarpetasDto->getCveTipoPersona() > 1) {
                $apelantescarpetasDto->setCveGenero(3);
            }
            $apelantescarpetasDto->setFechaActualizacion($fechaActual);
            $apelantescarpetasDto = $apelantesCarpetasDao->modificarApelanteCarpeta($apelantescarpetasDto, $this->proveedor);
            

            if ( $apelantescarpetasDto != "" ) {
                $resultado = array(
                    "idApelanteCarpeta" => $apelantescarpetasDto[0]->getIdApelanteCarpeta(),
                    "idCarpetaJudicial" => $apelantescarpetasDto[0]->getIdCarpetaJudicial(),
                    "nombre"            => utf8_encode($apelantescarpetasDto[0]->getNombre()),
                    "paterno"           => utf8_encode($apelantescarpetasDto[0]->getPaterno()),
                    "materno"           => utf8_encode($apelantescarpetasDto[0]->getMaterno()),
                    "cveGenero"         => $apelantescarpetasDto[0]->getCveGenero(),
                    "cveTipoPersona"    => $apelantescarpetasDto[0]->getCveTipoPersona(),
                    "domicilio"           => utf8_encode($apelantescarpetasDto[0]->getDomicilio()),
                    "correo"           => utf8_encode($apelantescarpetasDto[0]->getEmail()),
                    "nombreMoral"       => utf8_encode($apelantescarpetasDto[0]->getNombreMoral()),
                    "cveTipoApelante"   => $apelantescarpetasDto[0]->getCveTipoApelante(),
                    "activo"            => $apelantescarpetasDto[0]->getActivo(),
                    "domicilio"         => utf8_encode($apelantescarpetasDto[0]->getDomicilio()),
                    "email"             => utf8_encode($apelantescarpetasDto[0]->getEmail())
                );
                array_push($listaResultados, $resultado);
            } else {
                $msg[] = array("No se logro modificar al apelante");
                $error = true;
            }
            
            if ((!$error)) {
                $result = array(
                    "status"     => "Ok",
                    "totalCount" => count($listaResultados),
                    "msj"        => $msg,
                    "resultados" => $listaResultados,
                );
                $bitacora = new BitacoramovimientosController();
                $bitacoraOfendido = $bitacora->agregar(330, 'Insercion tblapelantescarpetas', 'txt', serialize($apelantescarpetasDto[0]), '', null);

                if (!count($bitacoraOfendido))
                    throw new Exception('no se pudo guardar la accion modificar apelante en bitacora');
            } else {
                $result = array(
                    "status" => "Error", 
                    "msj"    => $msg
                );
                $result = ($result);
            }
            
        } else {
            $result = array(
                "status" => "Error", 
                "msj"    => $msg
            );
            $result = ($result);
        }
        return json_encode($result);
        //echo json_encode($result);
        
    }
    
    /*
     * Borrado logico de apelantes carpetas
     */
    public function eliminarApelantescarpetas($apelantescarpetasDto, $proveedor = null ) {
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
        
        $imputadosArrayReturn = array();
        $error = false;
        $msg = array();
        
        $apelantesCarpetasDao = new ApelantescarpetasDAO();
        $apelantescarpetasDto = $this->validarApelantescarpetas($apelantescarpetasDto);
        $apelantescarpetasDto->setActivo('N');
        $apelantescarpetasDto->setFechaActualizacion($fechaActual);
        
        $apelantescarpetasDto = $apelantesCarpetasDao->updateApelantescarpetas($apelantescarpetasDto, $this->proveedor);
        
        if ( $apelantescarpetasDto != "" ) {
            $result = array(
                "status" => "Ok",
                "msj"    => "Se elimino de forma correcta",
            );
            $bitacora = new BitacoramovimientosController();
            $bitacoraOfendido = $bitacora->agregar(170, 'Borrado logico tblapelantescarpetas', 'txt', serialize($apelantescarpetasDto[0]), '', $this->proveedor);
            if (!count($bitacoraOfendido))
                throw new Exception('no se pudo guardar la accion borrado logico apelantes en bitacora');
        } else {
            $result = array(
                "status" => "Error", 
                "msj"    => $msg
            );
            $result = ($result);
        }
        return json_encode($result);
    }
    
    /*
     * Validar apelantes activos
     */
    public function validarApelantes($apelantescarpetasDto, $proveedor = null) {
        $apelantescarpetasDto = $this->validarApelantescarpetas($apelantescarpetasDto);
        $apelantesCarpetasDao = new ApelantescarpetasDAO();
        
        $apelantescarpetasDto = $apelantesCarpetasDao->selectApelantescarpetas($apelantescarpetasDto);
        if ( $apelantescarpetasDto != "" ) {
            $response = [
                'estatus'    => 'ok',
                'totalCount' => count($apelantescarpetasDto),
                'mensaje'    => 'ok'
            ];
        } else {
            $response = [
                'estatus'    => 'error',
                'totalCount' => 0,
                'mensaje'    => 'Debe haber al menos un apelante capturado'
            ];
        }
        return $response;
    }

}

?>