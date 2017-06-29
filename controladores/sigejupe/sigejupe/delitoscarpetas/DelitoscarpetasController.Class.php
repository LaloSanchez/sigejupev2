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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitoscarpetas/DelitoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitoscarpetas/DelitoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/impofedelcarpetas/ImpofedelcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/impofedelcarpetas/ImpofedelcarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");
//impofedel
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/impofedelcarpetas/ImpofedelcarpetasController.Class.php");

class DelitoscarpetasController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarDelitoscarpetas($DelitoscarpetasDto) {
        $DelitoscarpetasDto->setidDelitoCarpeta(strtoupper(str_ireplace("'", "", trim($DelitoscarpetasDto->getidDelitoCarpeta()))));
        $DelitoscarpetasDto->setcveDelito(strtoupper(str_ireplace("'", "", trim($DelitoscarpetasDto->getcveDelito()))));
        $DelitoscarpetasDto->setactivo(strtoupper(str_ireplace("'", "", trim($DelitoscarpetasDto->getactivo()))));
        $DelitoscarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($DelitoscarpetasDto->getfechaRegistro()))));
        $DelitoscarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($DelitoscarpetasDto->getfechaActualizacion()))));
        $DelitoscarpetasDto->setidCarpetaJudicial(strtoupper(str_ireplace("'", "", trim($DelitoscarpetasDto->getidCarpetaJudicial()))));
        return $DelitoscarpetasDto;
    }

    public function selectDelitoscarpetas($DelitoscarpetasDto, $proveedor = null) {
        $DelitoscarpetasDto = $this->validarDelitoscarpetas($DelitoscarpetasDto);
        $DelitoscarpetasDao = new DelitoscarpetasDAO();
        $DelitoscarpetasDto = $DelitoscarpetasDao->selectDelitoscarpetas($DelitoscarpetasDto, $proveedor);
        return $DelitoscarpetasDto;
    }

    public function insertDelitoscarpetas($DelitoscarpetasDto, $proveedor = null) {
        $DelitoscarpetasDto = $this->validarDelitoscarpetas($DelitoscarpetasDto);
        $DelitoscarpetasDao = new DelitoscarpetasDAO();
        $DelitoscarpetasDto = $DelitoscarpetasDao->insertDelitoscarpetas($DelitoscarpetasDto, $proveedor);
        return $DelitoscarpetasDto;
    }

    public function updateDelitoscarpetas($DelitoscarpetasDto, $proveedor = null) {
        $DelitoscarpetasDto = $this->validarDelitoscarpetas($DelitoscarpetasDto);
        $DelitoscarpetasDao = new DelitoscarpetasDAO();
        //$tmpDto = new DelitoscarpetasDTO();
        //$tmpDto = $DelitoscarpetasDao->selectDelitoscarpetas($DelitoscarpetasDto,$proveedor);
        //if($tmpDto!=""){//$DelitoscarpetasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $DelitoscarpetasDto = $DelitoscarpetasDao->updateDelitoscarpetas($DelitoscarpetasDto, $proveedor);
        return $DelitoscarpetasDto;
        //}
        //return "";
    }

    public function deleteDelitoscarpetas($DelitoscarpetasDto, $proveedor = null) {
        $DelitoscarpetasDto = $this->validarDelitoscarpetas($DelitoscarpetasDto);
        $DelitoscarpetasDao = new DelitoscarpetasDAO();
        $DelitoscarpetasDto = $DelitoscarpetasDao->deleteDelitoscarpetas($DelitoscarpetasDto, $proveedor);
        return $DelitoscarpetasDto;
    }

    /*
     * Metodos para actualizar carpetas judiciales
     */

    //Guardar un nuevo delito
    public function updateDelitos($DelitoscarpetasDto, $proveedor = null) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $this->proveedor->execute('BEGIN');
        try {
            $DelitoscarpetasDto = $this->validarDelitoscarpetas($DelitoscarpetasDto);
            $DelitoscarpetasDao = new DelitoscarpetasDAO();
            $bitacora = new BitacoramovimientosController();
            $selectDelitoscarpetasDto = $DelitoscarpetasDao->selectDelitoscarpetas($DelitoscarpetasDto, "", $this->proveedor);
            if ($selectDelitoscarpetasDto > 0) {
                $respuesta = array("status" => "error", "mensaje" => "ESTE DELITO YA SE ENCUENTRA REGISTRADO PARA ESTA CARPETA");
                return json_encode($respuesta);
            } else {
                $DelitoscarpetasDto = $DelitoscarpetasDao->insertDelitoscarpetas($DelitoscarpetasDto, $this->proveedor);
                $bitacoraDelitos = $bitacora->agregar(207, 'INSERCION tbldelitos', 'txt', serialize($DelitoscarpetasDto[0]), '', $this->proveedor);
                if (!count($bitacoraDelitos)) {
                    throw new Exception('No se pudo insertar en bitacora accion insertar delitos');
                }
                $delitosTmp = new DelitoscarpetasDTO();
                $delitosTmp->setIdCarpetaJudicial($DelitoscarpetasDto[0]->getIdCarpetaJudicial());
                $delitosTmp->setActivo("S");
                $delitosTmp = $DelitoscarpetasDao->selectDelitoscarpetas($delitosTmp, "", $this->proveedor);
                $numDelitos = count($delitosTmp);

                $carpetaJudicialDto = new CarpetasjudicialesDTO();
                $carpetaJudicialDao = new CarpetasjudicialesDAO();
                $carpetaJudicialDto->setIdCarpetaJudicial($DelitoscarpetasDto[0]->getIdCarpetaJudicial());
                $carpetaJudicialDto->setNumDelitos($numDelitos);
                $carpetaJudicialDto = $carpetaJudicialDao->updateCarpetasjudiciales($carpetaJudicialDto, $this->proveedor);

                $this->proveedor->execute('COMMIT');
                $respuesta = array("status" => "ok", "mensaje" => "SE INSERTO EL REGISTRO CORRECTAMENTE", "data" => serialize($DelitoscarpetasDto));
                return json_encode($respuesta);
            }
        } catch (Exception $e) {
            $this->proveedor->execute('ROLLBACK');
            return false;
        }
    }

    /*
     * Borrado logico de delitos
     */

    public function bajaDelitosCarpetas($DelitoscarpetasDto, $proveedor = null) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
            $this->proveedor->execute('BEGIN');
        } else {
            $this->proveedor = $proveedor;
        }

        $DelitoscarpetasDto = $this->validarDelitoscarpetas($DelitoscarpetasDto);
        $delitosCarpetas = new DelitoscarpetasDTO();
        $delitosCarpetasDao = new DelitoscarpetasDAO();
        $delitosCarpetas->setIdDelitoCarpeta($DelitoscarpetasDto->getIdDelitoCarpeta());
        $delitosCarpetas->setActivo("S");
        $delitosCarpetas = $delitosCarpetasDao->selectDelitoscarpetas($delitosCarpetas, "", $this->proveedor);

        if ($delitosCarpetas != "") {

            $delitosTmp = new DelitoscarpetasDTO();
            $delitosTmp->setIdCarpetaJudicial($delitosCarpetas[0]->getIdCarpetaJudicial());
            $delitosTmp->setActivo("S");
            $delitosTmp = $delitosCarpetasDao->selectDelitoscarpetas($delitosTmp, "", $this->proveedor);
            if ($delitosTmp != "") {
                $numDelitos = count($delitosTmp);
            } else {
                $numDelitos = 0;
            }
            if ($numDelitos > 1) {
                try {
                    $DelitoscarpetasDao = new DelitoscarpetasDAO();
                    $bitacora = new BitacoramovimientosController();
                    $DelitoscarpetasDto = $DelitoscarpetasDao->updateDelitoscarpetas($DelitoscarpetasDto, $this->proveedor);
                    $ImpofedelcarpetasDto = new ImpofedelcarpetasDTO();
                    $ImpofedelcarpetasDto->setIdCarpetaJudicial($DelitoscarpetasDto[0]->getIdCarpetaJudicial());
                    $ImpofedelcarpetasDto->setIdDelitoCarpeta($DelitoscarpetasDto[0]->getIdDelitoCarpeta());
                    $ImpofedelcarpetasDao = new ImpofedelcarpetasDAO();
                    $ImpofedelcarpetasResultado = $ImpofedelcarpetasDao->selectImpofedelcarpetas($ImpofedelcarpetasDto, "", $this->proveedor);
                    if ($ImpofedelcarpetasResultado != "") {
                        foreach ($ImpofedelcarpetasResultado as $value) {
                            //borrar logicamente los registros relacionados de violencia de genero, trata y acoso sexual
                            $impofedelCarpetasController = new ImpofedelcarpetasController();
                            $eliminarViolencia = $impofedelCarpetasController->borrarViolenciaCausas($value, $this->proveedor);

                            if ($eliminarViolencia) {
                                $ImpofedelcarpetasDto = new ImpofedelcarpetasDTO();
                                $ImpofedelcarpetasDto->setIdImpOfeDelCarpeta($value->getIdImpOfeDelCarpeta());
                                $ImpofedelcarpetasDto->setActivo('N');
                                $ImpofedelcarpetasUpdate = $ImpofedelcarpetasDao->updateImpofedelcarpetas($ImpofedelcarpetasDto, $this->proveedor);
                            }
                        }
                    }

                    $bitacoraDelitos = $bitacora->agregar(208, 'BORRADO LIGICO tbldelitoscarpetas', 'txt', serialize($DelitoscarpetasDto[0]), '', $this->proveedor);
                    if (!count($bitacoraDelitos)) {
                        throw new Exception('No se pudo insertar en bitacora accion borrado logico de delitos');
                    }
                    /*
                     * Actualiza el numero de delitos de la carpeta judicial
                     */
                    $delitosTmp = new DelitoscarpetasDTO();
                    $delitosTmp->setIdCarpetaJudicial($DelitoscarpetasDto[0]->getIdCarpetaJudicial());
                    $delitosTmp->setActivo("S");
                    $delitosTmp = $DelitoscarpetasDao->selectDelitoscarpetas($delitosTmp, "", $this->proveedor);
                    $numDelitos = count($delitosTmp);

                    $carpetaJudicialDto = new CarpetasjudicialesDTO();
                    $carpetaJudicialDao = new CarpetasjudicialesDAO();
                    $carpetaJudicialDto->setIdCarpetaJudicial($DelitoscarpetasDto[0]->getIdCarpetaJudicial());
                    $carpetaJudicialDto->setNumDelitos($numDelitos);
                    $carpetaJudicialDto = $carpetaJudicialDao->updateCarpetasjudiciales($carpetaJudicialDto, $this->proveedor);
                    if ($proveedor == null) {
                        $this->proveedor->execute('COMMIT');
                    }
                    return [
                        'status' => 'ok',
                        'totalCount' => 1,
                        'text' => 'Registro eliminado correctamente!'
                    ];
                } catch (Exception $e) {
                    if ($proveedor == null) {
                        $this->proveedor->execute('ROLLBACK');
                    }
                    return [
                        'status' => 'error',
                        'totalCount' => 0,
                        'text' => $e->getMessage()
                    ];
                }
            } else {
                return [
                    'status' => 'error',
                    'totalCount' => 0,
                    'text' => 'Debe haber al menos un delito activo para la carpeta judicial, favor de verificar'
                ];
            }
        } else {
            return [
                'status' => 'error',
                'totalCount' => 0,
                'text' => 'No hay delitos activos en la carpeta judicial'
            ];
        }
    }

    public function bajaDelitosCarpetasCausa($DelitoscarpetasDto, $proveedor = null) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
            $this->proveedor->execute('BEGIN');
        } else {
            $this->proveedor = $proveedor;
        }

        $DelitoscarpetasDto = $this->validarDelitoscarpetas($DelitoscarpetasDto);
        $delitosCarpetas = new DelitoscarpetasDTO();
        $delitosCarpetasDao = new DelitoscarpetasDAO();
        $delitosCarpetas->setIdDelitoCarpeta($DelitoscarpetasDto->getIdDelitoCarpeta());
        $delitosCarpetas->setActivo("S");
        $delitosCarpetas = $delitosCarpetasDao->selectDelitoscarpetas($delitosCarpetas, "", $this->proveedor);

        if ($delitosCarpetas != "") {
            try {
                $DelitoscarpetasDao = new DelitoscarpetasDAO();
                $bitacora = new BitacoramovimientosController();
                $DelitoscarpetasDto->setActivo("N");
                $DelitoscarpetasDto = $DelitoscarpetasDao->updateDelitoscarpetas($DelitoscarpetasDto, $this->proveedor);
                $ImpofedelcarpetasDto = new ImpofedelcarpetasDTO();
                $ImpofedelcarpetasDto->setIdCarpetaJudicial($DelitoscarpetasDto[0]->getIdCarpetaJudicial());
                $ImpofedelcarpetasDto->setIdDelitoCarpeta($DelitoscarpetasDto[0]->getIdDelitoCarpeta());
                $ImpofedelcarpetasDao = new ImpofedelcarpetasDAO();
                $ImpofedelcarpetasResultado = $ImpofedelcarpetasDao->selectImpofedelcarpetas($ImpofedelcarpetasDto, "", $this->proveedor);
                if ($ImpofedelcarpetasResultado != "") {
                    foreach ($ImpofedelcarpetasResultado as $value) {
                            $ImpofedelcarpetasDto = new ImpofedelcarpetasDTO();
                            $ImpofedelcarpetasDto->setIdImpOfeDelCarpeta($value->getIdImpOfeDelCarpeta());
                            $ImpofedelcarpetasDto->setActivo('N');
                            $ImpofedelcarpetasUpdate = $ImpofedelcarpetasDao->updateImpofedelcarpetas($ImpofedelcarpetasDto, $this->proveedor);
                        }
                    }

                $bitacoraDelitos = $bitacora->agregar(208, 'BORRADO LIGICO tbldelitoscarpetas', 'txt', serialize($DelitoscarpetasDto[0]), '', $this->proveedor);
                if (!count($bitacoraDelitos)) {
                    throw new Exception('No se pudo insertar en bitacora accion borrado logico de delitos');
                }
                /*
                 * Actualiza el numero de delitos de la carpeta judicial
                 */
                $delitosTmp = new DelitoscarpetasDTO();
                $delitosTmp->setIdCarpetaJudicial($DelitoscarpetasDto[0]->getIdCarpetaJudicial());
                $delitosTmp->setActivo("S");
                $delitosTmp = $DelitoscarpetasDao->selectDelitoscarpetas($delitosTmp, "", $this->proveedor);
                $numDelitos = count($delitosTmp);

                $carpetaJudicialDto = new CarpetasjudicialesDTO();
                $carpetaJudicialDao = new CarpetasjudicialesDAO();
                $carpetaJudicialDto->setIdCarpetaJudicial($DelitoscarpetasDto[0]->getIdCarpetaJudicial());
                $carpetaJudicialDto->setNumDelitos($numDelitos);
                $carpetaJudicialDto = $carpetaJudicialDao->updateCarpetasjudiciales($carpetaJudicialDto, $this->proveedor);

                if ($proveedor == null) {
                    $this->proveedor->execute('COMMIT');
                }
                return [
                    'status' => 'ok',
                    'totalCount' => 1,
                    'text' => 'Registro eliminado correctamente!'
                ];
            } catch (Exception $e) {
                if ($proveedor == null) {
                    $this->proveedor->execute('ROLLBACK');
                }
                return [
                    'status' => 'error',
                    'totalCount' => 0,
                    'text' => $e->getMessage()
                ];
            }
        } else {
            return [
                'status' => 'error',
                'totalCount' => 0,
                'text' => 'No hay delitos activos en la carpeta judicial'
            ];
        }
    }

    public function selectDelitoscarpetastotales($DelitoscarpetasDto, $proveedor = null) {

        $DelitoscarpetasDto = $this->validarDelitoscarpetas($DelitoscarpetasDto);
        $DelitoscarpetasDao = new DelitoscarpetasDAO();

        $carpetasjudicialesDao = new CarpetasjudicialesDAO();
        $carpetasjudicialesDto = new CarpetasjudicialesDTO();

        $rsTotalDelitos = $DelitoscarpetasDao->selectDelitoscarpetas($DelitoscarpetasDto);
        $numDelitos = count($rsTotalDelitos);
        $carpetasjudicialesDto->setIdCarpetaJudicial($DelitoscarpetasDto->getIdcarpetaJudicial());
        $rsCarpeta = $carpetasjudicialesDao->selectCarpetasjudiciales($carpetasjudicialesDto);
        $rsDelitosCarpeta = $rsCarpeta[0]->getNumDelitos();

        if ($numDelitos == $rsDelitosCarpeta) {
            $result = array(
                "status" => "ok",
                "msj" => "correcto",
                "totalDelitos" => $numDelitos,
                "delitosCarpeta" => $rsDelitosCarpeta
            );
        } else if ($numDelitos < $rsDelitosCarpeta) {
            $result = array(
                "status" => "error",
                "msj" => "Faltan por agregar delitos. Verifique",
                "totalDelitos" => $numDelitos,
                "delitosCarpeta" => $rsDelitosCarpeta
            );
        } else if ($numDelitos > $rsDelitosCarpeta) {
            $result = array(
                "status" => "error",
                "msj" => "Tiene agregado uno o mas delitos demas. Verifique",
                "totalDelitos" => $numDelitos,
                "delitosCarpeta" => $rsDelitosCarpeta
            );
        }

        return json_encode($result);

        $DelitoscarpetasDto = $this->validarDelitoscarpetas($DelitoscarpetasDto);
        $DelitoscarpetasDao = new DelitoscarpetasDAO();
        $DelitoscarpetasDto = $DelitoscarpetasDao->selectDelitoscarpetas($DelitoscarpetasDto);
        $total = count($DelitoscarpetasDto);
        if ($total > 0) {
            $totales = array("estatus" => "OK", "totalCount" => $total);
        } else {
            $totales = array("estatus" => "ERROR", "totalCount" => '0');
        }
        return json_encode($totales);
    }

}

?>