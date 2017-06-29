<?php
/*
*************************************************
*FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
*Copyright 2009-2015 CONTROLLER
* Licensed under the MIT license 
* Autor: *
* Departamento de Desarrollo de Software
* Subdireccion de Ingenieria de Software
* Direccion de Teclogias de Informacion
* Poder Judicial del Estado de Mexico
*************************************************
*/

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/gruposjuzgados/GruposjuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/gruposjuzgados/GruposjuzgadosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
//Programacion cateos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/programacioncateos/ProgramacioncateosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/programacioncateos/ProgramacioncateosDTO.Class.php");

class GruposjuzgadosController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarGruposjuzgados($GruposjuzgadosDto) {
        $GruposjuzgadosDto->setcveGrupoJuzgado(strtoupper(str_ireplace("'", "", trim($GruposjuzgadosDto->getcveGrupoJuzgado()))));
        $GruposjuzgadosDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim($GruposjuzgadosDto->getcveJuzgado()))));
        $GruposjuzgadosDto->setcveGrupoCateo(strtoupper(str_ireplace("'", "", trim($GruposjuzgadosDto->getcveGrupoCateo()))));
        $GruposjuzgadosDto->setactivo(strtoupper(str_ireplace("'", "", trim($GruposjuzgadosDto->getactivo()))));
        $GruposjuzgadosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($GruposjuzgadosDto->getfechaRegistro()))));
        $GruposjuzgadosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($GruposjuzgadosDto->getfechaActualizacion()))));
        return $GruposjuzgadosDto;
    }

    public function selectGruposjuzgados($GruposjuzgadosDto, $proveedor = null) {
        $GruposjuzgadosDto = $this->validarGruposjuzgados($GruposjuzgadosDto);
        $GruposjuzgadosDao = new GruposjuzgadosDAO();
        $GruposjuzgadosDto = $GruposjuzgadosDao->selectGruposjuzgados($GruposjuzgadosDto, $proveedor);
        return $GruposjuzgadosDto;
    }

    public function insertGruposjuzgados($GruposjuzgadosDto, $proveedor = null) {
        $GruposjuzgadosDto = $this->validarGruposjuzgados($GruposjuzgadosDto);
        $GruposjuzgadosDao = new GruposjuzgadosDAO();
        $GruposjuzgadosDto = $GruposjuzgadosDao->insertGruposjuzgados($GruposjuzgadosDto, $proveedor);
        return $GruposjuzgadosDto;
    }

    public function updateGruposjuzgados($GruposjuzgadosDto, $proveedor = null) {
        $GruposjuzgadosDto = $this->validarGruposjuzgados($GruposjuzgadosDto);
        $GruposjuzgadosDao = new GruposjuzgadosDAO();
        //$tmpDto = new GruposjuzgadosDTO();
        //$tmpDto = $GruposjuzgadosDao->selectGruposjuzgados($GruposjuzgadosDto,$proveedor);
        //if($tmpDto!=""){//$GruposjuzgadosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $GruposjuzgadosDto = $GruposjuzgadosDao->updateGruposjuzgados($GruposjuzgadosDto, $proveedor);
        return $GruposjuzgadosDto;
        //}
        //return "";
    }

    public function deleteGruposjuzgados($GruposjuzgadosDto, $proveedor = null) {
        $GruposjuzgadosDto = $this->validarGruposjuzgados($GruposjuzgadosDto);
        $GruposjuzgadosDao = new GruposjuzgadosDAO();
        $GruposjuzgadosDto = $GruposjuzgadosDao->deleteGruposjuzgados($GruposjuzgadosDto, $proveedor);
        return $GruposjuzgadosDto;
    }
    
    public function guardarGruposJuzgados($GruposjuzgadosDto, $proveedor = null){
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
        $grupoCateo = array();
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
        
        $gruposJuzgadosDao = new GruposjuzgadosDAO();
        
        $gruposJuzgadosTmp = new GruposjuzgadosDTO();
        $gruposJuzgadosTmp->setActivo("S");
        $gruposJuzgadosTmp->setCveGrupoCateo($GruposjuzgadosDto[0]->getCveGrupoCateo());
        $gruposJuzgadosTmp = $gruposJuzgadosDao->selectGruposjuzgados($gruposJuzgadosTmp, "", $this->proveedor);
        if($gruposJuzgadosTmp != "") {
            foreach($gruposJuzgadosTmp as $tmp) {
                $dto = new GruposjuzgadosDTO();
                $dto->setCveGrupoJuzgado($tmp->getCveGrupoJuzgado());
                $dto->setActivo("N");
                $dto = $gruposJuzgadosDao->updateGruposjuzgados($dto, $this->proveedor);
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
            foreach ($GruposjuzgadosDto as $gruposJuzgados) {
                /*
                 * Insertar los registro en tblgruposjuzgados
                 */
                $gruposJuzgadosDto = new GruposjuzgadosDTO();
                $gruposJuzgadosDto->setCveJuzgado($gruposJuzgados->getCveJuzgado());
                $gruposJuzgadosDto->setCveGrupoCateo($gruposJuzgados->getCveGrupoCateo());
                $gruposJuzgadosDto->setActivo("S");
                $gruposJuzgadosDto = $gruposJuzgadosDao->insertGruposjuzgados($gruposJuzgadosDto, $this->proveedor);
                if($gruposJuzgadosDto != "") {
                    $error = false;
                    $grupoCateo["cveGrupoCateo"][] = $gruposJuzgadosDto[0]->getCveGrupoCateo();
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
                        "data"       => [$grupoCateo]
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
    
    public function eliminarGruposJuzgados($GruposjuzgadosDto, $proveedor = null){
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
        $GruposjuzgadosDao = new GruposjuzgadosDAO();
        
        //var_dump($GruposjuzgadosDto);
        //echo count($GruposjuzgadosDto);
        if( count($GruposjuzgadosDto)> 1 ) {
            foreach ($GruposjuzgadosDto as $gruposJuzgados) {
                //var_dump($gruposCateos);
                /*
                 * Verificar si existen registros en programacion de cateos, si no 
                 * existen registros, borrar logicamente el registro de la tabla tblgruposcateos
                 * en caso contrario indicar al usuario que existen regsitros activos
                 * en tblprogramacioncateos
                 */
                $gruposJuzgadosDto = new GruposjuzgadosDTO();
                $gruposJuzgadosDao = new GruposjuzgadosDAO();
                $gruposJuzgadosDto->setCveGrupoCateo($gruposJuzgados->getCveGrupoCateo());
                $gruposJuzgadosDto->setActivo("S");
                $gruposJuzgadosDto = $gruposJuzgadosDao->selectGruposjuzgados($gruposJuzgadosDto, "", $this->proveedor);
                if( $gruposJuzgadosDto != "" ) {
                    $programacionCateosDto = new ProgramacioncateosDTO();
                    $programacionCateosDao = new ProgramacioncateosDAO();
                    $programacionCateosDto->setCveGrupoJuzgado($gruposJuzgadosDto[0]->getCveGrupoJuzgado());
                    $programacionCateosDto->setActivo("S");
                    $programacionCateosDto = $programacionCateosDao->selectProgramacioncateos($programacionCateosDto, "", $this->proveedor);
                    if($programacionCateosDto != "") {
                        $error = true;
                        $msg[] = array("No se puede eliminar el registro debido a que existen programaciones de cateos activas");
                    } else {
                        foreach ($gruposJuzgadosDto as $grupo) {
                            $gruposJuzgadosTmp = new GruposjuzgadosDTO();
                            $gruposJuzgadosTmp->setCveGrupoJuzgado($grupo->getCveGrupoJuzgado());
                            $gruposJuzgadosTmp->setActivo("N");
                            $gruposJuzgadosTmp->setFechaActualizacion($fechaActual);
                            $gruposJuzgadosTmp = $this->validarGruposjuzgados($gruposJuzgadosTmp);

                            $gruposJuzgadosTmp = $gruposJuzgadosDao->updateGruposjuzgados($gruposJuzgadosTmp, $this->proveedor);
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
             * Verificar si existen registros en programacion de cateos, si no 
             * existen registros, borrar logicamente el registro de la tabla tblgruposcateos
             * en caso contrario indicar al usuario que existen regsitros activos
             * en tblprogramacioncateos
             */
            $gruposJuzgadosDto = new GruposjuzgadosDTO();
            $gruposJuzgadosDao = new GruposjuzgadosDAO();
            $gruposJuzgadosDto->setCveGrupoCateo($GruposjuzgadosDto->getCveGrupoCateo());
            $gruposJuzgadosDto->setActivo("S");
            $gruposJuzgadosDto = $gruposJuzgadosDao->selectGruposjuzgados($gruposJuzgadosDto, "", $this->proveedor);
            if( $gruposJuzgadosDto != "" ) {
                $programacionCateosDto = new ProgramacioncateosDTO();
                $programacionCateosDao = new ProgramacioncateosDAO();
                $programacionCateosDto->setCveGrupoJuzgado($gruposJuzgadosDto[0]->getCveGrupoJuzgado());
                $programacionCateosDto->setActivo("S");
                $programacionCateosDto = $programacionCateosDao->selectProgramacioncateos($programacionCateosDto, "", $this->proveedor);
                if($programacionCateosDto != "") {
                    $error = true;
                    $msg[] = array("No se puede eliminar el registro debido a que existen programaciones de cateos activas");
                } else {
                    foreach ($gruposJuzgadosDto as $grupos) {
                        $gruposJuzgadosTmp = new GruposjuzgadosDTO();
                        $gruposJuzgadosTmp->setCveGrupoJuzgado($grupos->getCveGrupoJuzgado());
                        $gruposJuzgadosTmp->setActivo("N");
                        $gruposJuzgadosTmp->setFechaActualizacion($fechaActual);
                        $gruposJuzgadosTmp = $this->validarGruposjuzgados($gruposJuzgadosTmp);

                        $gruposJuzgadosTmp = $gruposJuzgadosDao->updateGruposjuzgados($gruposJuzgadosTmp, $this->proveedor);
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