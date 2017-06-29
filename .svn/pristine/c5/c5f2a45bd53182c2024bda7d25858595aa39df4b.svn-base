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
date_default_timezone_set('America/Mexico_City');
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/gruposmuestras/GruposmuestrasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/gruposmuestras/GruposmuestrasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
//Grupos muestras juzgados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/gruposmuestrasjuzgados/GruposmuestrasjuzgadosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/gruposmuestrasjuzgados/GruposmuestrasjuzgadosDTO.Class.php");
//Programacion muestras
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/programacionmuestras/ProgramacionmuestrasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/programacionmuestras/ProgramacionmuestrasDTO.Class.php");
//Juzgados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");
//bitacora
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/bitacoramovimientos/BitacoramovimientosDAO.Class.php");

class GruposmuestrasController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarGruposmuestras($GruposmuestrasDto) {
        $GruposmuestrasDto->setcveGrupoMuestra(strtoupper(str_ireplace("'", "", trim($GruposmuestrasDto->getcveGrupoMuestra()))));
        $GruposmuestrasDto->setdesGrupoMuestra(strtoupper(str_ireplace("'", "", trim($GruposmuestrasDto->getdesGrupoMuestra()))));
        $GruposmuestrasDto->setactivo(strtoupper(str_ireplace("'", "", trim($GruposmuestrasDto->getactivo()))));
        $GruposmuestrasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($GruposmuestrasDto->getfechaRegistro()))));
        $GruposmuestrasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($GruposmuestrasDto->getfechaActualizacion()))));
        return $GruposmuestrasDto;
    }

    public function selectGruposmuestras($GruposmuestrasDto, $proveedor = null) {
        $GruposmuestrasDto = $this->validarGruposmuestras($GruposmuestrasDto);
        $GruposmuestrasDao = new GruposmuestrasDAO();
        $GruposmuestrasDto = $GruposmuestrasDao->selectGruposmuestras($GruposmuestrasDto, $proveedor);
        return $GruposmuestrasDto;
    }

    public function insertGruposmuestras($GruposmuestrasDto, $proveedor = null) {
        $GruposmuestrasDto = $this->validarGruposmuestras($GruposmuestrasDto);
        $GruposmuestrasDao = new GruposmuestrasDAO();
        $GruposmuestrasDto = $GruposmuestrasDao->insertGruposmuestras($GruposmuestrasDto, $proveedor);
        return $GruposmuestrasDto;
    }

    public function updateGruposmuestras($GruposmuestrasDto, $proveedor = null) {
        $GruposmuestrasDto = $this->validarGruposmuestras($GruposmuestrasDto);
        $GruposmuestrasDao = new GruposmuestrasDAO();
        //$tmpDto = new GruposmuestrasDTO();
        //$tmpDto = $GruposmuestrasDao->selectGruposmuestras($GruposmuestrasDto,$proveedor);
        //if($tmpDto!=""){//$GruposmuestrasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $GruposmuestrasDto = $GruposmuestrasDao->updateGruposmuestras($GruposmuestrasDto, $proveedor);
        return $GruposmuestrasDto;
        //}
        //return "";
    }

    public function deleteGruposmuestras($GruposmuestrasDto, $proveedor = null) {
        $GruposmuestrasDto = $this->validarGruposmuestras($GruposmuestrasDto);
        $GruposmuestrasDao = new GruposmuestrasDAO();
        $GruposmuestrasDto = $GruposmuestrasDao->deleteGruposmuestras($GruposmuestrasDto, $proveedor);
        return $GruposmuestrasDto;
    }
    
    
    public function getPaginasGruposMuestras($gruposmuestrasDto,$param) {
        $totalRegistros = 0;
        $gruposmuestrasDto = $this->validarGruposmuestras($gruposmuestrasDto);
        $gruposMuestrasDao = new GruposmuestrasDAO();
        $order = " AND desGrupoMuestra LIKE'%" . $gruposmuestrasDto->getDesGrupoMuestra() . "%'";
        $grupoMuestraDto = new GruposmuestrasDTO();
        $grupoMuestraDto->setCveGrupoMuestra($gruposmuestrasDto->getCveGrupoMuestra());
        $grupoMuestraDto->setActivo("S");
        $gruposmuestrasDto = $gruposMuestrasDao->selectGruposmuestras($grupoMuestraDto, $order, null);
        if ( $gruposmuestrasDto != "" ) {
            $totalRegistros = count($gruposmuestrasDto);
        } else {
            $totalRegistros = 0;
        }
        $Pages = (int) $totalRegistros / $param["cantidadPorPagina"];
        $restoPages = $totalRegistros % $param["cantidadPorPagina"];
        $totPages = $Pages + (($restoPages > 0) ? 1 : 0);
        $json = "";
        $json .= '{"type":"OK",';
        $json .= '"totalCount":"' . $totalRegistros . '",';
        $json .= '"data":[';
        $x = 1;
        //var_dump($totPages);
        if ($totPages >= 1) {
            for ($index = 1; $index <= $totPages; $index++) {

                $json .= "{";
                $json .= '"pagina":' . json_encode(utf8_encode($index)) . "";
                $json .= "}";
                $x++;
                if ($x <= ($totPages )) {
                    $json .= ",";
                }
            }
            $json .= "],";
            $json .= '"pagina":{"total":""},';
            $json .= '"total":"' . ($index - 1) . '"';
            $json .= "}";
        }
        //print_r($json).'Jsonnn';
        return $json;
    }
    
    public function agregarGruposMuestras($GruposmuestrasDto, $gruposMuestrasJuzgadosDto, $proveedor = null) {
        $GruposmuestrasDto = $this->validarGruposmuestras($GruposmuestrasDto);
        $GruposmuestrasDao = new GruposmuestrasDAO();
        $json = "";
        $x = 1;
        $error = false;
        $msg = array();
        $result = array();
        $listaResultados = array();
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $this->proveedor->execute("BEGIN");
        $gruposMuestras = $GruposmuestrasDao->selectGruposmuestras($GruposmuestrasDto, "", $this->proveedor);
        if ( $gruposMuestras == "" ) {
            $GruposmuestrasDto = $GruposmuestrasDao->insertGruposmuestras($GruposmuestrasDto, $this->proveedor);
            
            if($GruposmuestrasDto != "") {
//                $fecha = date("Y-m-d H:i:s");
//                $cveAccion = 345;
//                $descripcion = "INSERT en tblgruposcateos cveGrupoCateo: " . $GruposmuestrasDto[0]->getCveGrupoCateo();
//                $bitacoramovimientosDto = new BitacoramovimientosDTO();
//                $bitacoramovimientosDto->setCveAccion($cveAccion);
//                $bitacoramovimientosDto->setFechaMovimiento($fecha);
//                $bitacoramovimientosDto->setObservaciones($descripcion);
//                $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
//                $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
//                $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
//                $daoBitacora = new BitacoramovimientosDAO();
//                $insertarBitacora = $daoBitacora->insertBitacoramovimientos($bitacoramovimientosDto, $this->proveedor);
//                if ( $insertarBitacora != "" ) {
//                    $error = false;
//                } else {
//                    $error = true;
//                    $msg[] = array("Ocurrio un error al guardar en bitacora la accion realizada");
//                }

                foreach ($GruposmuestrasDto as $gruposMuestras) {
                    /*
                     * Agregar los registros de juzgados pertenecientes al grupo en la tabla
                     * tblgruposjuzgados
                     */
                    foreach ($gruposMuestrasJuzgadosDto as $gruposJuzgados) {
                        /*
                         * Verificar si el juzgado se encuentra registrado en algun grupo
                         * si aún no está registrado, insertar el registro, en otro caso
                         * indicar al usuario
                         */
                        $grupoMuestraJuzgado = new GruposmuestrasjuzgadosDTO();
                        $gruposMuestrasJuzgadosDao = new GruposmuestrasjuzgadosDAO();
                        $grupoMuestraJuzgado->setCveJuzgado($gruposJuzgados->getCveJuzgado());
                        $grupoMuestraJuzgado->setActivo("S");
                        $grupoMuestraJuzgado = $gruposMuestrasJuzgadosDao->selectGruposmuestrasjuzgados($grupoMuestraJuzgado, "", $this->proveedor);
                        if ( $grupoMuestraJuzgado == "" ) {
                            /*
                             * Insertar los registro en tblgruposmuestrasjuzgados
                             */
                            $gruposJuzgadosTmp = new GruposmuestrasjuzgadosDTO();
                            
                            $gruposJuzgadosTmp->setCveJuzgado($gruposJuzgados->getCveJuzgado());
                            $gruposJuzgadosTmp->setCveGrupoMuestra($gruposMuestras->getCveGrupoMuestra());
                            $gruposJuzgadosTmp->setActivo("S");
                            $gruposJuzgadosTmp = $gruposMuestrasJuzgadosDao->insertGruposmuestrasjuzgados($gruposJuzgadosTmp, $this->proveedor);
                            if($gruposJuzgadosTmp != "") {
                                $error = false;
                                
//                                $fecha = date("Y-m-d H:i:s");
//                                $cveAccion = 332;
//                                $descripcion = "INSERT en tblgruposjuzagados cveGrupoJuzgado: " . $gruposJuzgadosTmp[0]->getCveGrupoJuzgado();
//                                $bitacoramovimientosDto = new BitacoramovimientosDTO();
//                                $bitacoramovimientosDto->setCveAccion($cveAccion);
//                                $bitacoramovimientosDto->setFechaMovimiento($fecha);
//                                $bitacoramovimientosDto->setObservaciones($descripcion);
//                                $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
//                                $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
//                                $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
//                                $daoBitacora = new BitacoramovimientosDAO();
//                                $insertarBitacora = $daoBitacora->insertBitacoramovimientos($bitacoramovimientosDto, $this->proveedor);
//                                if ( $insertarBitacora != "" ) {
//                                    $error = false;
//                                } else {
//                                    $error = true;
//                                    $msg[] = array("Ocurrio un error al guardar en bitacora la accion realizada");
//                                }
                                
                            } else {
                                $error = true;
                                $msg[] = array(utf8_encode("Ocurrió un error al agregar el registro"));
                            }
                        } else {
                            $juzgadosDto = new JuzgadosDTO();
                            $juzgadosDao = new JuzgadosDAO();
                            $juzgadosDto->setCveJuzgado($gruposJuzgados->getCveJuzgado());
                            $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto, "", $this->proveedor);
                            if ( $juzgadosDto != "" ) {
                                $nombreJuzgado = $juzgadosDto[0]->getDesJuzgado();
                            } else {
                                $nombreJuzgado = "";
                            }
                            $error = true;
                            $msg[] = array(utf8_encode("El juzgado: " . $nombreJuzgado . " ya está registrado en otro grupo, favor de verificar"));
                        }
                        
                        
                        if($error){
                            break;
                        }
                    }
                    $resultado = array(
                        "cveGrupoMuestra"    => $gruposMuestras->getCveGrupoMuestra(),
                        "desGrupoMuestra"    => utf8_encode($gruposMuestras->getDesGrupoMuestra()),
                        "activo"             => $gruposMuestras->getActivo(),
                        "fechaRegistro"      => $gruposMuestras->getFechaRegistro(),
                        "fechaActualizacion" => $gruposMuestras->getFechaActualizacion()
                    );

                }
                array_push($listaResultados, $resultado);
            } else {
                $error = true;
                $msg[] = array(utf8_encode("Ocurrió un error al insertar el registro"));
            }
        } else {
            $error = true;
            $msg[] = array("El grupo ya existe");
        }
        
        
        if(!$error) {
             
            $this->proveedor->execute("COMMIT");
            $result = array(
                        "status"     => "Ok",
                        "totalCount" => count($listaResultados),
                        "text"       => "Registros guardados correctamente",
                        "data"       => $listaResultados
                    );
            $result = ($result);
        } else {
            $this->proveedor->execute("ROLLBACK");
            $result = array(
                        "status"     => "Error",
                        "totalCount" => 0,
                        "text"       => $msg
                    );
            $result = ($result);
        }
        return json_encode($result);
    }
    
    public function modificarGruposMuestras($GruposmuestrasDto, $gruposMuestrasJuzgadosDto, $proveedor = null){
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $this->proveedor->execute("BEGIN");
        /*
         * Obtener la fecha actual del servidor de mysql
         */
        $fechaActual = "";
        $listaResultados = array();
        $result = array();
        $cveUsuario = $_SESSION['cveUsuarioSistema'];
        $msg = array();
        $listaResultados = array();
        $this->proveedor->execute("SELECT NOW() AS FechaActual");
        if ( !$this->proveedor->error() ) {
            if ( $this->proveedor->rows($this->proveedor->stmt) > 0 ) {
                while ( $row = $this->proveedor->fetch_array($this->proveedor->stmt, 0) ) {
                    $fechaActual = $row['FechaActual'];
                }
            } else {
                $fechaActual = date("Y-m-d H:i:s");
            }
        }
        $GruposmuestrasDto = $this->validarGruposmuestras($GruposmuestrasDto);
        $GruposmuestrasDao = new GruposmuestrasDAO();
        $json = "";
        $x = 1;
        $GruposmuestrasDto->setFechaActualizacion($fechaActual);
        $grupsTmp = new GruposmuestrasDTO();
        $grupsTmp->setDesGrupoMuestra($GruposmuestrasDto->getDesGrupoMuestra());
        $grupsTmp->setActivo("S");
        $order = " AND cveGrupoMuestra<>" . $GruposmuestrasDto->getCveGrupoMuestra();
        $grupos = $GruposmuestrasDao->selectGruposmuestras($grupsTmp, $order, $this->proveedor);
        if ( $grupos == "" ) {
            $GruposmuestrasDto = $GruposmuestrasDao->updateGruposmuestras($GruposmuestrasDto, $this->proveedor);
            if($GruposmuestrasDto != ""){
//                $fecha = date("Y-m-d H:i:s");
//                $cveAccion = 346;
//                $descripcion = "MODIFICACION en tblgruposcateos cveGrupoCateo: " . $GruposmuestrasDto[0]->getCveGrupoCateo();
//                $bitacoramovimientosDto = new BitacoramovimientosDTO();
//                $bitacoramovimientosDto->setCveAccion($cveAccion);
//                $bitacoramovimientosDto->setFechaMovimiento($fechaActual);
//                $bitacoramovimientosDto->setObservaciones($descripcion);
//                $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
//                $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
//                $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
//                $daoBitacora = new BitacoramovimientosDAO();
//                $insertarBitacora = $daoBitacora->insertBitacoramovimientos($bitacoramovimientosDto, $this->proveedor);
//                if ( $insertarBitacora != "" ) {
//                    $error = false;
//                } else {
//                    $error = true;
//                    $msg[] = array("Ocurrio un error al guardar en bitacora la accion realizada");
//                }
                foreach ($GruposmuestrasDto as $gruposMuestras) {

                    $gruposMuestrasJuzgadosDao = new GruposmuestrasjuzgadosDAO();
                    $gruposJuzgadosTmp = new GruposmuestrasjuzgadosDTO();
                    $gruposJuzgadosTmp->setActivo("S");
                    $gruposJuzgadosTmp->setCveGrupoMuestra($gruposMuestras->getCveGrupoMuestra());
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
                        foreach ($gruposMuestrasJuzgadosDto as $gruposJuzgados) {
                            /*
                             * Consultar si el juzgado se encuentra en algun grupo
                             * enviar mensaje al usuario 
                             */
                            $grupoMuestraJuzgado = new GruposmuestrasjuzgadosDTO();
                            $grupoMuestraJuzgado->setCveJuzgado($gruposJuzgados->getCveJuzgado());
                            $grupoMuestraJuzgado->setActivo("S");
                            $grupoMuestraJuzgado = $gruposMuestrasJuzgadosDao->selectGruposmuestrasjuzgados($grupoMuestraJuzgado, "", $this->proveedor);
                            if ( $grupoMuestraJuzgado != "" ) {
                                $juzgadosDto = new JuzgadosDTO();
                                $juzgadosDao = new JuzgadosDAO();
                                $juzgadosDto->setCveJuzgado($gruposJuzgados->getCveJuzgado());
                                $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto, "", $this->proveedor);
                                if ( $juzgadosDto != "" ) {
                                    $nombreJuzgado = $juzgadosDto[0]->getDesJuzgado();
                                } else {
                                    $nombreJuzgado = "";
                                }
                                $error = true;
                                $msg[] = array(utf8_encode("El juzgado: " . $nombreJuzgado . " ya está registrado en un grupo, favor de verificar"));
                            }
                            if ( $error ) {
                                break;
                            }
                            /*
                             * Si no ha ocurrio al gun error, insertar los registro en tblgruposmuestrasjuzgados
                             */
                            $gruposMuestrasJuzgadosDto = new GruposmuestrasjuzgadosDTO();
                            $gruposMuestrasJuzgadosDto->setCveJuzgado($gruposJuzgados->getCveJuzgado());
                            $gruposMuestrasJuzgadosDto->setCveGrupoMuestra($gruposMuestras->getCveGrupoMuestra());
                            //$gruposMuestrasJuzgadosDto->setActivo("S");
                            $grupos = new GruposmuestrasjuzgadosDTO();
                            $grupos = $gruposMuestrasJuzgadosDao->selectGruposmuestrasjuzgados($gruposMuestrasJuzgadosDto,"", $this->proveedor);
                            if( $grupos != "" ) {
                                $gruposTmp = new GruposmuestrasjuzgadosDTO();
                                $gruposTmp->setCveGrupoMuestraJuzgado($grupos[0]->getCveGrupoMuestraJuzgado());
                                $gruposTmp->setActivo("S");
                                $gruposTmp = $gruposMuestrasJuzgadosDao->updateGruposmuestrasjuzgados($gruposTmp, $this->proveedor);
                                if($gruposTmp != "") {
                                    $error = false;
                                } else {
                                    $error = true;
                                    $msg[] = array(utf8_encode("Ocurrió un error al modificar el registro"));
                                }
                            } else {
                                $grupoMuestraJuzgado = new GruposmuestrasjuzgadosDTO();
                                $grupoMuestraJuzgado->setCveJuzgado($gruposJuzgados->getCveJuzgado());
                                $grupoMuestraJuzgado->setActivo("S");
                                $grupoMuestraJuzgado = $gruposMuestrasJuzgadosDao->selectGruposmuestrasjuzgados($grupoMuestraJuzgado, "", $this->proveedor);
                                if ( $grupoMuestraJuzgado == "" ) {
                                    $gruposMuestrasJuzgadosDto->setActivo("S");
                                    $gruposMuestrasJuzgadosDto = $gruposMuestrasJuzgadosDao->insertGruposmuestrasjuzgados($gruposMuestrasJuzgadosDto, $this->proveedor);
                                    if($gruposMuestrasJuzgadosDto != "") {
                                        $error = false;
                                    } else {
                                        $error = true;
                                        $msg[] = array(utf8_encode("Ocurrió un error al agregar el registro"));
                                    }
                                } else {
                                    $juzgadosDto = new JuzgadosDTO();
                                    $juzgadosDao = new JuzgadosDAO();
                                    $juzgadosDto->setCveJuzgado($gruposJuzgados->getCveJuzgado());
                                    $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto, "", $this->proveedor);
                                    if ( $juzgadosDto != "" ) {
                                        $nombreJuzgado = $juzgadosDto[0]->getDesJuzgado();
                                    } else {
                                        $nombreJuzgado = "";
                                    }
                                    $error = true;
                                    $msg[] = array(utf8_encode("El juzgado: " . $nombreJuzgado . " ya está registrado en un grupo, favor de verificar"));
                                }
                                
                            }

                            if($error){
                                break;
                            }
                        }
                    }
                    $resultado = array(
                        "cveGrupoMuestra"    => $gruposMuestras->getCveGrupoMuestra(),
                        "desGrupoMuestra"    => utf8_encode($gruposMuestras->getDesGrupoMuestra()),
                        "activo"             => $gruposMuestras->getActivo(),
                        "fechaRegistro"      => $gruposMuestras->getFechaRegistro(),
                        "fechaActualizacion" => $gruposMuestras->getFechaActualizacion()
                    );

                }
                array_push($listaResultados, $resultado);
            } else {
                $error = true;
                $msg[] = array(utf8_encode("Ocurrió un errro al actualizar el registro."));
            }
        } else {
            $error = true;
            $msg[] = array("El grupo ya existe");
        }
        
        if(!$error) {
            $this->proveedor->execute("COMMIT");
            $result = array(
                        "status"     => "Ok",
                        "totalCount" => count($listaResultados),
                        "text"       => "Registros guardados correctamente",
                        "data"       => $listaResultados
                    );
            $result = ($result);
        } else {
            $this->proveedor->execute("ROLLBACK");
            $result = array(
                        "status"     => "Error",
                        "totalCount" => 0,
                        "text"       => $msg,
                    );
            $result = ($result);
        }
        return json_encode($result);
    }
    
    public function eliminarGruposMuestras($GruposmuestrasDto, $proveedor = null){
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
        $idGrupoMuestra = 0;
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
                $fechaActual = date("Y-m-d H:i:s");
            }
        }
        $GruposmuestrasDao = new GruposmuestrasDAO();
        
        //var_dump($GruposmuestrasDto);
        //echo count($GruposmuestrasDto);
        if( count($GruposmuestrasDto)> 1 ) {
            foreach ($GruposmuestrasDto as $gruposMuestras) {
                //var_dump($gruposMuestras);
                /*
                 * Verificar si existen registros en programacion de muestras, si no 
                 * existen registros, borrar logicamente el registro de la tabla tblgruposmuestras
                 * en caso contrario indicar al usuario que existen registros activos
                 * en tblprogramacionmuestras
                 */
                $gruposMuestrasJuzgadosDto = new GruposmuestrasjuzgadosDTO();
                $gruposMuestrasJuzgadosDao = new GruposmuestrasjuzgadosDAO();
                $gruposMuestrasJuzgadosDto->setCveGrupoMuestra($gruposMuestras->getCveGrupoMuestra());
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
                        $error = false;
                    }
                } else {
                    $error = false;
                }

                if( !$error && count($msg) == 0 ) {

                    $gruposMuestrasTmp = new GruposmuestrasDTO();
                    $gruposMuestrasTmp->setCveGrupoMuestra($gruposMuestras->getCveGrupoMuestra());
                    $gruposMuestrasTmp->setActivo("N");
                    $gruposMuestrasTmp->setFechaActualizacion($fechaActual);
                    $gruposMuestrasTmp = $this->validarGruposmuestras($gruposMuestrasTmp);

                    $gruposMuestrasTmp = $GruposmuestrasDao->updateGruposmuestras($gruposMuestrasTmp, $this->proveedor);
                    if($gruposMuestrasTmp != "") {
                        $idGrupoMuestra = $gruposMuestrasTmp[0]->getCveGrupoMuestra();
                        $error = false;
                        $gruposJuzgados = new GruposmuestrasjuzgadosDTO();
                        $gruposJuzgados->setCveGrupoMuestra($gruposMuestrasTmp[0]->getCveGrupoMuestra());
                        $gruposJuzgados->setActivo("S");
                        $gruposJuzgados = $gruposMuestrasJuzgadosDao->selectGruposmuestrasjuzgados($gruposJuzgados,"", $this->proveedor);
                        if($gruposJuzgados != "") {
                            foreach ($gruposJuzgados as $grupo) {
                                $gruposJuzgadosTmp = new GruposmuestrasjuzgadosDTO();
                                $gruposJuzgadosTmp->setCveGrupoMuestraJuzgado($grupo->getCveGrupoMuestraJuzgado());
                                $gruposJuzgadosTmp->setActivo("N");
                                $gruposJuzgadosTmp = $gruposMuestrasJuzgadosDao->updateGruposmuestrasjuzgados($gruposJuzgadosTmp, $this->proveedor);
                                if($gruposJuzgadosTmp != "") {
                                    $error = false;
                                } else {
                                    $error = true;
                                    $msg[] = array("Ocurrio un error al eliminar la relacion grupos muestras juzgados");
                                }
                                if($error){
                                    break;
                                }
                            }
                        }
                    } else {
                        $error = true;
                        $msg[] = array("Ocurrio un error al eliminar el registro");
                    }
                }
            }
        } else {
            /*
             * Verificar si existen registros en programacion de muestras, si no 
             * existen registros, borrar logicamente el registro de la tabla tblgruposmuestras
             * en caso contrario indicar al usuario que existen registros activos
             * en tblprogramacionmuestras
             */
            $gruposMuestrasJuzgadosDto = new GruposmuestrasjuzgadosDTO();
            $gruposMuestrasJuzgadosDao = new GruposmuestrasjuzgadosDAO();
            $gruposMuestrasJuzgadosDto->setCveGrupoMuestra($GruposmuestrasDto[0]->getCveGrupoMuestra());
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
                    $error = false;
                }
            } else {
                $error = false;
            }

            if( !$error && count($msg) == 0 ) {

                $gruposMuestrasTmp = new GruposmuestrasDTO();
                $gruposMuestrasTmp->setCveGrupoMuestra($GruposmuestrasDto[0]->getCveGrupoMuestra());
                $gruposMuestrasTmp->setActivo("N");
                $gruposMuestrasTmp->setFechaActualizacion($fechaActual);
                $gruposMuestrasTmp = $this->validarGruposmuestras($gruposMuestrasTmp);

                $gruposMuestrasTmp = $GruposmuestrasDao->updateGruposmuestras($gruposMuestrasTmp, $this->proveedor);
                if($gruposMuestrasTmp != "") {
                    $idGrupoMuestra = $gruposMuestrasTmp[0]->getCveGrupoMuestra();
                    $error = false;
                    $gruposJuzgados = new GruposmuestrasjuzgadosDTO();
                    $gruposJuzgados->setCveGrupoMuestra($gruposMuestrasTmp[0]->getCveGrupoMuestra());
                    $gruposJuzgados->setActivo("S");
                    $gruposJuzgados = $gruposMuestrasJuzgadosDao->selectGruposmuestrasjuzgados($gruposJuzgados,"", $this->proveedor);
                    if($gruposJuzgados != "") {
                        foreach ($gruposJuzgados as $grupo) {
                            $gruposJuzgadosTmp = new GruposmuestrasjuzgadosDTO();
                            $gruposJuzgadosTmp->setCveGrupoMuestraJuzgado($grupo->getCveGrupoMuestraJuzgado());
                            $gruposJuzgadosTmp->setActivo("N");
                            $gruposJuzgadosTmp = $gruposMuestrasJuzgadosDao->updateGruposmuestrasjuzgados($gruposJuzgadosTmp, $this->proveedor);
                            if($gruposJuzgadosTmp != "") {
                                $error = false;
                            } else {
                                $error = true;
                                $msg[] = array("Ocurrio un error al eliminar la relacion grupos muestras juzgados");
                            }
                            if($error){
                                break;
                            }
                        }
                    }
                } else {
                    $error = true;
                    $msg[] = array("Ocurrio un error al eliminar el registro");
                }
            }
        }
//        $fecha = date("Y-m-d H:i:s");
//        $cveAccion = 347;
//        $descripcion = "Borrado logico en tblgruposcateos cveGrupoCateo: " . $idGrupoMuestra;
//        $bitacoramovimientosDto = new BitacoramovimientosDTO();
//        $bitacoramovimientosDto->setCveAccion($cveAccion);
//        $bitacoramovimientosDto->setFechaMovimiento($fechaActual);
//        $bitacoramovimientosDto->setObservaciones($descripcion);
//        $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
//        $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
//        $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
//        $daoBitacora = new BitacoramovimientosDAO();
//        $insertarBitacora = $daoBitacora->insertBitacoramovimientos($bitacoramovimientosDto, $this->proveedor);
//        if ( $insertarBitacora != "" ) {
//            $error = false;
//        } else {
//            $error = true;
//            $msg[] = array("Ocurrio un error al guardar en bitacora la accion realizada");
//        }
        //var_dump($error);
        if( !$error ) {
            $this->proveedor->execute('COMMIT');
            $result = array(
                        "status"     => "Ok",
                        "totalCount" => 1,
                        "text"       => "Registros eliminados correctamente",
                    );
            $result = ($result);
        } else {
            $this->proveedor->execute("ROLLBACK");
            $result = array(
                        "status"     => "Error",
                        "totalCount" => 0,
                        "text"       => $msg,
                    );
            $result = ($result);
        }
        
        return json_encode($result);
    }
    
}

?>