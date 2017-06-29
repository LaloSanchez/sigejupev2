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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/gruposmuestrasjuzgados/GruposmuestrasjuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/gruposmuestrasjuzgados/GruposmuestrasjuzgadosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
//Programacion muestras
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/programacionmuestras/ProgramacionmuestrasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/programacionmuestras/ProgramacionmuestrasDTO.Class.php");

class GruposmuestrasjuzgadosController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarGruposmuestrasjuzgados($GruposmuestrasjuzgadosDto) {
        $GruposmuestrasjuzgadosDto->setcveGrupoMuestraJuzgado(strtoupper(str_ireplace("'", "", trim($GruposmuestrasjuzgadosDto->getcveGrupoMuestraJuzgado()))));
        $GruposmuestrasjuzgadosDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim($GruposmuestrasjuzgadosDto->getcveJuzgado()))));
        $GruposmuestrasjuzgadosDto->setcveGrupoMuestra(strtoupper(str_ireplace("'", "", trim($GruposmuestrasjuzgadosDto->getcveGrupoMuestra()))));
        $GruposmuestrasjuzgadosDto->setactivo(strtoupper(str_ireplace("'", "", trim($GruposmuestrasjuzgadosDto->getactivo()))));
        $GruposmuestrasjuzgadosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($GruposmuestrasjuzgadosDto->getfechaRegistro()))));
        $GruposmuestrasjuzgadosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($GruposmuestrasjuzgadosDto->getfechaActualizacion()))));
        return $GruposmuestrasjuzgadosDto;
    }

    public function selectGruposmuestrasjuzgados($GruposmuestrasjuzgadosDto, $proveedor = null) {
        $GruposmuestrasjuzgadosDto = $this->validarGruposmuestrasjuzgados($GruposmuestrasjuzgadosDto);
        $GruposmuestrasjuzgadosDao = new GruposmuestrasjuzgadosDAO();
        $GruposmuestrasjuzgadosDto = $GruposmuestrasjuzgadosDao->selectGruposmuestrasjuzgados($GruposmuestrasjuzgadosDto, $proveedor);
        return $GruposmuestrasjuzgadosDto;
    }

    public function insertGruposmuestrasjuzgados($GruposmuestrasjuzgadosDto, $proveedor = null) {
        $GruposmuestrasjuzgadosDto = $this->validarGruposmuestrasjuzgados($GruposmuestrasjuzgadosDto);
        $GruposmuestrasjuzgadosDao = new GruposmuestrasjuzgadosDAO();
        $GruposmuestrasjuzgadosDto = $GruposmuestrasjuzgadosDao->insertGruposmuestrasjuzgados($GruposmuestrasjuzgadosDto, $proveedor);
        return $GruposmuestrasjuzgadosDto;
    }

    public function updateGruposmuestrasjuzgados($GruposmuestrasjuzgadosDto, $proveedor = null) {
        $GruposmuestrasjuzgadosDto = $this->validarGruposmuestrasjuzgados($GruposmuestrasjuzgadosDto);
        $GruposmuestrasjuzgadosDao = new GruposmuestrasjuzgadosDAO();
        //$tmpDto = new GruposmuestrasjuzgadosDTO();
        //$tmpDto = $GruposmuestrasjuzgadosDao->selectGruposmuestrasjuzgados($GruposmuestrasjuzgadosDto,$proveedor);
        //if($tmpDto!=""){//$GruposmuestrasjuzgadosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $GruposmuestrasjuzgadosDto = $GruposmuestrasjuzgadosDao->updateGruposmuestrasjuzgados($GruposmuestrasjuzgadosDto, $proveedor);
        return $GruposmuestrasjuzgadosDto;
        //}
        //return "";
    }

    public function deleteGruposmuestrasjuzgados($GruposmuestrasjuzgadosDto, $proveedor = null) {
        $GruposmuestrasjuzgadosDto = $this->validarGruposmuestrasjuzgados($GruposmuestrasjuzgadosDto);
        $GruposmuestrasjuzgadosDao = new GruposmuestrasjuzgadosDAO();
        $GruposmuestrasjuzgadosDto = $GruposmuestrasjuzgadosDao->deleteGruposmuestrasjuzgados($GruposmuestrasjuzgadosDto, $proveedor);
        return $GruposmuestrasjuzgadosDto;
    }
    
    public function guardarGruposMuestrasJuzgados($GruposmuestrasjuzgadosDto, $proveedor = null){
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $this->proveedor->execute("BEGIN");
        $error = false;
        $msg = array();
        $result = array();
        $grupoMuestra = array();
        /*
         * Obtener la fecha actual del servidor de mysql
         */
        $fechaActual = "";
        $cveUsuario = $_SESSION['cveUsuarioSistema'];
        
        $this->proveedor->execute("SELECT NOW() AS FechaActual");
        if ( !$this->proveedor->error() ) {
            if ( $this->proveedor->rows($this->proveedor->stmt) > 0 ) {
                while ( $row = $this->proveedor->fetch_array($this->proveedor->stmt, 0) ) {
                    $fechaActual = $row['FechaActual'];
                }
            } else {
                $fechaActual = "";
            }
        }
        
        $gruposMuestrasJuzgadosDao = new GruposmuestrasjuzgadosDAO();
        
        $gruposJuzgadosTmp = new GruposmuestrasjuzgadosDTO();
        $gruposJuzgadosTmp->setActivo("S");
        $gruposJuzgadosTmp->setCveGrupoMuestra($GruposmuestrasjuzgadosDto[0]->getCveGrupoMuestra());
        $gruposJuzgadosTmp = $gruposMuestrasJuzgadosDao->selectGruposmuestrasjuzgados($gruposJuzgadosTmp, "", $this->proveedor);
        if($gruposJuzgadosTmp != "") {
            foreach($gruposJuzgadosTmp as $tmp) {
                $dto = new GruposmuestrasjuzgadosDTO();
                $dto->setCveGrupoMuestraJuzgado($tmp->getCveGrupoMuestraJuzgado());
                $dto->setActivo("N");
                $dto = $gruposMuestrasJuzgadosDao->updateGruposmuestrasjuzgados($dto, $this->proveedor);
                if($dto != "") {
                    $error = false;
                } else {
                    $error = true;
                }
                if($error){
                    break;
                }
            }
        } else {
            $error = false;
        }
        if (!$error) {
            foreach ($GruposmuestrasjuzgadosDto as $gruposJuzgados) {
                /*
                 * Insertar los registro en tblgruposmuestrasjuzgados
                 */
                $gruposMuestrasJuzgadosDto = new GruposmuestrasjuzgadosDTO();
                $gruposMuestrasJuzgadosDto->setCveJuzgado($gruposJuzgados->getCveJuzgado());
                $gruposMuestrasJuzgadosDto->setCveGrupoMuestra($gruposJuzgados->getCveGrupoMuestra());
                $gruposMuestrasJuzgadosDto->setActivo("S");
                $gruposMuestrasJuzgadosDto = $gruposMuestrasJuzgadosDao->insertGruposmuestrasjuzgados($gruposMuestrasJuzgadosDto, $this->proveedor);
                if($gruposMuestrasJuzgadosDto != "") {
                    $error = false;
                    $grupoMuestra["cveGrupoMuestra"][] = $gruposMuestrasJuzgadosDto[0]->getCveGrupoMuestra();
                } else {
                    $error = true;
                    $msg[] = array("Ocurrio un error al agregar el registro");
                }
                if($error){
                    break;
                }
            }
        }
            
        if(!$error) {
             
            $this->proveedor->execute("COMMIT");
            $result = array(
                        "status"     => "Ok",
                        "totalCount" => 1,
                        "text"       => "Registros guardados correctamente",
                        "data"       => [$grupoMuestra]
                    );
            $result = ($result);
        } else {
            $this->proveedor->execute("ROLLBACK");
            $result = array(
                        "status"     => "Error",
                        "totalCount" => 0,
                        "text"       => "Ocurrio un error al guardar los registros",
                    );
            $result = ($result);
        }
        
        return json_encode($result);
    }
    
    public function eliminarGruposMuestrasJuzgados($GruposmuestrasjuzgadosDto, $proveedor = null){
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $this->proveedor->execute("BEGIN");
        $error = false;
        $msg = array();
        $result = array();
        /*
         * Obtener la fecha actual del servidor de mysql
         */
        $fechaActual = "";
        $cveUsuario = $_SESSION['cveUsuarioSistema'];
        
        $this->proveedor->execute("SELECT NOW() AS FechaActual");
        if ( !$this->proveedor->error() ) {
            if ( $this->proveedor->rows($this->proveedor->stmt) > 0 ) {
                while ( $row = $this->proveedor->fetch_array($this->proveedor->stmt, 0) ) {
                    $fechaActual = $row['FechaActual'];
                }
            } else {
                $fechaActual = "";
            }
        }
        $GruposmuestrasjuzgadosDao = new GruposmuestrasjuzgadosDAO();
        
        //var_dump($GruposmuestrasjuzgadosDto);
        //echo count($GruposmuestrasjuzgadosDto);
        if( count($GruposmuestrasjuzgadosDto)> 1 ) {
            foreach ($GruposmuestrasjuzgadosDto as $gruposJuzgados) {
                //var_dump($gruposCateos);
                /*
                 * Verificar si existen registros en programacion de muestras, si no 
                 * existen registros, borrar logicamente el registro de la tabla tblgruposmuestras
                 * en caso contrario indicar al usuario que existen regsitros activos
                 * en tblprogramacionmuestras
                 */
                $gruposMuestrasJuzgadosDto = new GruposmuestrasjuzgadosDTO();
                $gruposMuestrasJuzgadosDao = new GruposmuestrasjuzgadosDAO();
                $gruposMuestrasJuzgadosDto->setCveGrupoMuestra($gruposJuzgados->getCveGrupoMuestra());
                $gruposMuestrasJuzgadosDto->setActivo("S");
                $gruposMuestrasJuzgadosDto = $gruposMuestrasJuzgadosDao->selectGruposmuestrasjuzgados($gruposMuestrasJuzgadosDto, "", $this->proveedor);
                if( $gruposMuestrasJuzgadosDto != "" ) {
                    $programacionMuestrasDto = new ProgramacionmuestrasDTO();
                    $programacionMuestrasDao = new ProgramacionmuestrasDAO();
                    $programacionMuestrasDto->setCveGrupoMuestraJuzgado($gruposMuestrasJuzgadosDto[0]->getCveGrupoMuestraJuzgado());
                    $programacionMuestrasDto->setActivo("S");
                    $programacionMuestrasDto = $programacionMuestrasDao->selectProgramacionmuestras($programacionMuestrasDto, "", $this->proveedor);
                    if($programacionMuestrasDto != "") {
                        $error = true;
                        $msg[] = array("No se puede eliminar el registro debido a que existen programaciones de toma de muestras activas");
                    } else {
                        foreach ($gruposMuestrasJuzgadosDto as $grupo) {
                            $gruposJuzgadosTmp = new GruposmuestrasjuzgadosDTO();
                            $gruposJuzgadosTmp->setCveGrupoMuestraJuzgado($grupo->getCveGrupoMuestraJuzgado());
                            $gruposJuzgadosTmp->setActivo("N");
                            $gruposJuzgadosTmp->setFechaActualizacion($fechaActual);
                            $gruposJuzgadosTmp = $this->validarGruposmuestrasjuzgados($gruposJuzgadosTmp);

                            $gruposJuzgadosTmp = $gruposMuestrasJuzgadosDao->updateGruposmuestrasjuzgados($gruposJuzgadosTmp, $this->proveedor);
                            if($gruposJuzgadosTmp != "") {
                                $error = false;
                            } else {
                                $error = true;
                                $msg[] = array("Ocurrio un error al eliminar el registro");
                            }
                            if($error) {
                                break;
                            }
                        }
                    }
                } else {
                    $error = false;
                    $msg[] = array("No se encontraron registros activos");
                }
            }
        } else {
            /*
             * Verificar si existen registros en programacion de muestras, si no 
             * existen registros, borrar logicamente el registro de la tabla tblgruposmuestras
             * en caso contrario indicar al usuario que existen regsitros activos
             * en tblprogramacionmuestras
             */
            $gruposMuestrasJuzgadosDto = new GruposmuestrasjuzgadosDTO();
            $gruposMuestrasJuzgadosDao = new GruposmuestrasjuzgadosDAO();
            $gruposMuestrasJuzgadosDto->setCveGrupoMuestra($GruposmuestrasjuzgadosDto->getCveGrupoMuestra());
            $gruposMuestrasJuzgadosDto->setActivo("S");
            $gruposMuestrasJuzgadosDto = $gruposMuestrasJuzgadosDao->selectGruposmuestrasjuzgados($gruposMuestrasJuzgadosDto, "", $this->proveedor);
            if( $gruposMuestrasJuzgadosDto != "" ) {
                $programacionMuestrasDto = new ProgramacionmuestrasDTO();
                $programacionMuestrasDao = new ProgramacionmuestrasDAO();
                $programacionMuestrasDto->setCveGrupoMuestraJuzgado($gruposMuestrasJuzgadosDto[0]->getCveGrupoMuestraJuzgado());
                $programacionMuestrasDto->setActivo("S");
                $programacionMuestrasDto = $programacionMuestrasDao->selectProgramacionmuestras($programacionMuestrasDto, "", $this->proveedor);
                if($programacionMuestrasDto != "") {
                    $error = true;
                    $msg[] = array("No se puede eliminar el registro debido a que existen programaciones de toma de muestras activas");
                } else {
                    foreach ($gruposMuestrasJuzgadosDto as $grupos) {
                        $gruposJuzgadosTmp = new GruposmuestrasjuzgadosDTO();
                        $gruposJuzgadosTmp->setCveGrupoMuestraJuzgado($grupos->getCveGrupoMuestraJuzgado());
                        $gruposJuzgadosTmp->setActivo("N");
                        $gruposJuzgadosTmp->setFechaActualizacion($fechaActual);
                        $gruposJuzgadosTmp = $this->validarGruposmuestrasjuzgados($gruposJuzgadosTmp);

                        $gruposJuzgadosTmp = $gruposMuestrasJuzgadosDao->updateGruposmuestrasjuzgados($gruposJuzgadosTmp, $this->proveedor);
                        if($gruposJuzgadosTmp != "") {
                            $error = false;
                        } else {
                            $error = true;
                            $msg[] = array("Ocurrio un error al eliminar el registro");
                        }
                        if($error) {
                            break;
                        }
                    }
                }
            } else {
                $error = false;
                $msg[] = array("No se encontraron registros activos");
            }
        }
        
        //var_dump($error);
        if( !$error ) {
            $this->proveedor->execute('COMMIT');
            $result = array(
                        "status" => "Ok",
                        "totalCount" => 1,
                        "text" => "Registros eliminados correctamente",
                    );
            $result = ($result);
        } else {
            $this->proveedor->execute("ROLLBACK");
            $result = array(
                        "status" => "Error",
                        "totalCount" => 0,
                        "text" => $msg,
                    );
            $result = ($result);
        }
        
        return json_encode($result);
    }
    
}

?>