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
date_default_timezone_set('America/Mexico_City');
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/gruposordenes/GruposordenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/gruposordenes/GruposordenesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
//grupos ordenes juzgados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/gruposordenesjuzgados/GruposordenesjuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/gruposordenesjuzgados/GruposordenesjuzgadosDAO.Class.php");
//Programacion ordenes
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/programacionordenes/ProgramacionordenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/programacionordenes/ProgramacionordenesDAO.Class.php");
//Juzgados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");
//bitacora
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/bitacoramovimientos/BitacoramovimientosDAO.Class.php");

class GruposordenesController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarGruposordenes($GruposordenesDto) {
        $GruposordenesDto->setcveGrupoOrden(strtoupper(str_ireplace("'", "", trim($GruposordenesDto->getcveGrupoOrden()))));
        $GruposordenesDto->setdesGrupoOrden(strtoupper(str_ireplace("'", "", trim($GruposordenesDto->getdesGrupoOrden()))));
        $GruposordenesDto->setactivo(strtoupper(str_ireplace("'", "", trim($GruposordenesDto->getactivo()))));
        $GruposordenesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($GruposordenesDto->getfechaRegistro()))));
        $GruposordenesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($GruposordenesDto->getfechaActualizacion()))));
        return $GruposordenesDto;
    }

    public function selectGruposordenes($GruposordenesDto, $proveedor = null) {
        $GruposordenesDto = $this->validarGruposordenes($GruposordenesDto);
        $GruposordenesDao = new GruposordenesDAO();
        $GruposordenesDto = $GruposordenesDao->selectGruposordenes($GruposordenesDto, $proveedor);
        return $GruposordenesDto;
    }

    public function insertGruposordenes($GruposordenesDto, $proveedor = null) {
        $GruposordenesDto = $this->validarGruposordenes($GruposordenesDto);
        $GruposordenesDao = new GruposordenesDAO();
        $GruposordenesDto = $GruposordenesDao->insertGruposordenes($GruposordenesDto, $proveedor);
        return $GruposordenesDto;
    }

    public function updateGruposordenes($GruposordenesDto, $proveedor = null) {
        $GruposordenesDto = $this->validarGruposordenes($GruposordenesDto);
        $GruposordenesDao = new GruposordenesDAO();
        //$tmpDto = new GruposordenesDTO();
        //$tmpDto = $GruposordenesDao->selectGruposordenes($GruposordenesDto,$proveedor);
        //if($tmpDto!=""){//$GruposordenesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $GruposordenesDto = $GruposordenesDao->updateGruposordenes($GruposordenesDto, $proveedor);
        return $GruposordenesDto;
        //}
        //return "";
    }

    public function deleteGruposordenes($GruposordenesDto, $proveedor = null) {
        $GruposordenesDto = $this->validarGruposordenes($GruposordenesDto);
        $GruposordenesDao = new GruposordenesDAO();
        $GruposordenesDto = $GruposordenesDao->deleteGruposordenes($GruposordenesDto, $proveedor);
        return $GruposordenesDto;
    }
    
    public function getPaginasGruposOrdenes($gruposordenesDto,$param) {
        $totalRegistros = 0;
        $gruposordenesDto = $this->validarGruposordenes($gruposordenesDto);
        $gruposOrdenesDao = new GruposordenesDAO();
        $order = " AND desGrupoOrden LIKE'%" . $gruposordenesDto->getDesGrupoOrden() . "%'";
        $grupoOrdenDto = new GruposordenesDTO();
        $grupoOrdenDto->setCveGrupoOrden($gruposordenesDto->getCveGrupoOrden());
        $grupoOrdenDto->setActivo("S");
        $gruposordenesDto = $gruposOrdenesDao->selectGruposordenes($grupoOrdenDto, $order, null);
        if ( $gruposordenesDto != "" ) {
            $totalRegistros = count($gruposordenesDto);
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
    
    public function agregarGruposOrdenes($GruposordenesDto, $gruposOrdenesJuzgadosDto, $proveedor = null) {
        $GruposordenesDto = $this->validarGruposordenes($GruposordenesDto);
        $GruposordenesDao = new GruposordenesDAO();
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
        
        $dtoOrdenes = $GruposordenesDao->selectGruposordenes($GruposordenesDto, "", $this->proveedor);
        if ( $dtoOrdenes == "" ) {
            
            $GruposordenesDto = $GruposordenesDao->insertGruposordenes($GruposordenesDto, $this->proveedor);
            if($GruposordenesDto != "") {
                $fecha = date("Y-m-d H:i:s");
                $cveAccion = 348;
                $descripcion = "INSERT en tblgruposordenes cveGrupoOrden: " . $GruposordenesDto[0]->getCveGrupoOrden();
                $bitacoramovimientosDto = new BitacoramovimientosDTO();
                $bitacoramovimientosDto->setCveAccion($cveAccion);
                $bitacoramovimientosDto->setFechaMovimiento($fecha);
                $bitacoramovimientosDto->setObservaciones($descripcion);
                $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                $daoBitacora = new BitacoramovimientosDAO();
                $insertarBitacora = $daoBitacora->insertBitacoramovimientos($bitacoramovimientosDto, $this->proveedor);
                if ( $insertarBitacora != "" ) {
                    $error = false;
                } else {
                    $error = true;
                    $msg[] = array("Ocurrio un error al guardar en bitacora la accion realizada");
                }
                foreach ($GruposordenesDto as $gruposOrdenes) {
                    /*
                     * Agregar los registros de juzgados pertenecientes al grupo en la tabla
                     * tblgruposjuzgados
                     */
                    foreach ($gruposOrdenesJuzgadosDto as $gruposOrdenesJuzgados) {
                        /*
                         * Verificar si el juzgado se encuentra registrado en algun grupo
                         * si aún no está registrado, insertar el registro, en otro caso
                         * indicar al usuario
                         */
                        $grupoOrdenJuzgado = new GruposordenesjuzgadosDTO();
                        $gruposOrdenesJuzgadosDao = new GruposordenesjuzgadosDAO();
                        $grupoOrdenJuzgado->setCveJuzgado($gruposOrdenesJuzgados->getCveJuzgado());
                        $grupoOrdenJuzgado->setActivo("S");
                        $grupoOrdenJuzgado = $gruposOrdenesJuzgadosDao->selectGruposordenesjuzgados($grupoOrdenJuzgado, "", $this->proveedor);
                        if ( $grupoOrdenJuzgado == "" ) {
                            /*
                             * Insertar los registro en tblgruposjuzgados
                             */
                            $gruposOrdenesJuzgadosTmp = new GruposordenesjuzgadosDTO();
                            $gruposOrdenesJuzgadosTmp->setCveJuzgado($gruposOrdenesJuzgados->getCveJuzgado());
                            $gruposOrdenesJuzgadosTmp->setCveGrupoOrden($gruposOrdenes->getCveGrupoOrden());
                            $gruposOrdenesJuzgadosTmp->setActivo("S");
                            $gruposOrdenesJuzgadosTmp = $gruposOrdenesJuzgadosDao->insertGruposordenesjuzgados($gruposOrdenesJuzgadosTmp, $this->proveedor);
                            if($gruposOrdenesJuzgadosTmp != "") {
                                $error = false;
                                
                                $fecha = date("Y-m-d H:i:s");
                                $cveAccion = 335;
                                $descripcion = "INSERT en tblgruposordenesjuzgados cveGrupoOrdenJuzgado: " . $gruposOrdenesJuzgadosTmp[0]->getCveGrupoOrdenJuzgado();
                                $bitacoramovimientosDto = new BitacoramovimientosDTO();
                                $bitacoramovimientosDto->setCveAccion($cveAccion);
                                $bitacoramovimientosDto->setFechaMovimiento($fecha);
                                $bitacoramovimientosDto->setObservaciones($descripcion);
                                $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                                $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                                $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                                $daoBitacora = new BitacoramovimientosDAO();
                                $insertarBitacora = $daoBitacora->insertBitacoramovimientos($bitacoramovimientosDto, $this->proveedor);
                                if ( $insertarBitacora != "" ) {
                                    $error = false;
                                } else {
                                    $error = true;
                                    $msg[] = array("Ocurrio un error al guardar en bitacora la accion realizada");
                                }
                                
                            } else {
                                $error = true;
                                $msg[] = array(utf8_encode("Ocurrió un error al agregar el registro"));
                            }
                        } else {
                            $juzgadosDto = new JuzgadosDTO();
                            $juzgadosDao = new JuzgadosDAO();
                            $juzgadosDto->setCveJuzgado($gruposOrdenesJuzgados->getCveJuzgado());
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
                        "cveGrupoOrden"      => $gruposOrdenes->getCveGrupoOrden(),
                        "desGrupoOrden"      => utf8_encode($gruposOrdenes->getdesGrupoOrden()),
                        "activo"             => $gruposOrdenes->getActivo(),
                        "fechaRegistro"      => $gruposOrdenes->getFechaRegistro(),
                        "fechaActualizacion" => $gruposOrdenes->getFechaActualizacion()
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
                        "text"       => $msg,
                    );
            $result = ($result);
        }
        return json_encode($result);
    }
    
    public function modificarGruposOrdenes($GruposordenesDto, $gruposOrdenesJuzgadosDto, $proveedor = null){
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
        $GruposordenesDto = $this->validarGruposordenes($GruposordenesDto);
        $GruposordenesDao = new GruposordenesDAO();
        $json = "";
        $x = 1;
        $GruposordenesDto->setFechaActualizacion($fechaActual);
        $grupsTmp = new GruposordenesDTO();
        $grupsTmp->setDesGrupoOrden($GruposordenesDto->getDesGrupoOrden());
        $grupsTmp->setActivo("S");
        $order = " AND cveGrupoOrden<>" . $GruposordenesDto->getCveGrupoOrden();
        $grupos = $GruposordenesDao->selectGruposordenes($grupsTmp, $order, $this->proveedor);
        if ( $grupos == "" ) {
            $GruposordenesDto = $GruposordenesDao->updateGruposordenes($GruposordenesDto, $this->proveedor);
            if($GruposordenesDto != ""){
                
                $fecha = date("Y-m-d H:i:s");
                $cveAccion = 349;
                $descripcion = "Modificacion en tblgruposordenes cveGrupoOrden: " . $GruposordenesDto[0]->getCveGrupoOrden();
                $bitacoramovimientosDto = new BitacoramovimientosDTO();
                $bitacoramovimientosDto->setCveAccion($cveAccion);
                $bitacoramovimientosDto->setFechaMovimiento($fechaActual);
                $bitacoramovimientosDto->setObservaciones($descripcion);
                $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                $daoBitacora = new BitacoramovimientosDAO();
                $insertarBitacora = $daoBitacora->insertBitacoramovimientos($bitacoramovimientosDto, $this->proveedor);
                if ( $insertarBitacora != "" ) {
                    $error = false;
                } else {
                    $error = true;
                    $msg[] = array("Ocurrio un error al guardar en bitacora la accion realizada");
                }
                
                foreach ($GruposordenesDto as $gruposOrdenes) {

                    $gruposOrdenesJuzgadosDao = new GruposordenesjuzgadosDAO();
                    $gruposOrdenesJuzgadosTmp = new GruposordenesjuzgadosDTO();
                    $gruposOrdenesJuzgadosTmp->setActivo("S");
                    $gruposOrdenesJuzgadosTmp->setCveGrupoOrden($gruposOrdenes->getCveGrupoOrden());
                    $gruposOrdenesJuzgadosTmp = $gruposOrdenesJuzgadosDao->selectGruposordenesjuzgados($gruposOrdenesJuzgadosTmp, "", $this->proveedor);

                    if($gruposOrdenesJuzgadosTmp != "") {
                        foreach($gruposOrdenesJuzgadosTmp as $tmp) {
                            $dto = new GruposordenesjuzgadosDTO();
                            $dto->setCveGrupoOrdenJuzgado($tmp->getCveGrupoOrdenJuzgado());
                            $dto->setActivo("N");
                            $dto = $gruposOrdenesJuzgadosDao->updateGruposordenesjuzgados($dto, $this->proveedor);
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
                        foreach ($gruposOrdenesJuzgadosDto as $gruposOrdenesJuzgados) {
                            /*
                             * Verificar si el juzgado solicitado ya se encuentra
                             * registrado en un grupo
                             */
                            $grupoOrdenJuzgado = new GruposordenesjuzgadosDTO();
                            $grupoOrdenJuzgado->setCveJuzgado($gruposOrdenesJuzgados->getCveJuzgado());
                            $grupoOrdenJuzgado->setActivo("S");
                            $grupoOrdenJuzgado = $gruposOrdenesJuzgadosDao->selectGruposordenesjuzgados($grupoOrdenJuzgado, "", $this->proveedor);
                            if ( $grupoOrdenJuzgado != "" ) {
                                $juzgadosDto = new JuzgadosDTO();
                                $juzgadosDao = new JuzgadosDAO();
                                $juzgadosDto->setCveJuzgado($gruposOrdenesJuzgados->getCveJuzgado());
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
                             * Insertar los registro en tblgruposjuzgados
                             */
                            $gruposOrdenesJuzgadosDto = new GruposordenesjuzgadosDTO();
                            $gruposOrdenesJuzgadosDto->setCveJuzgado($gruposOrdenesJuzgados->getCveJuzgado());
                            $gruposOrdenesJuzgadosDto->setCveGrupoOrden($gruposOrdenes->getCveGrupoOrden());
                            //$gruposOrdenesJuzgadosDto->setActivo("S");
                            $grupo = new GruposordenesjuzgadosDTO();
                            $grupo = $gruposOrdenesJuzgadosDao->selectGruposordenesjuzgados($gruposOrdenesJuzgadosDto, "", $this->proveedor);
                            if ( $grupo == "" ) {
                                $grupoOrdenJuzgado = new GruposordenesjuzgadosDTO();
                                $grupoOrdenJuzgado->setCveJuzgado($gruposOrdenesJuzgados->getCveJuzgado());
                                $grupoOrdenJuzgado->setActivo("S");
                                $grupoOrdenJuzgado = $gruposOrdenesJuzgadosDao->selectGruposordenesjuzgados($grupoOrdenJuzgado, "", $this->proveedor);
                                if ( $grupoOrdenJuzgado == "" ) {
                                    $gruposOrdenesJuzgadosDto->setActivo("S");
                                    $gruposOrdenesJuzgadosDto = $gruposOrdenesJuzgadosDao->insertGruposordenesjuzgados($gruposOrdenesJuzgadosDto, $this->proveedor);
                                    if($gruposOrdenesJuzgadosDto != "") {
                                        $error = false;
                                    } else {
                                        $error = true;
                                        $msg[] = array(utf8_encode("Ocurrió un error al agregar el registro"));
                                    }
                                } else {
                                    $juzgadosDto = new JuzgadosDTO();
                                    $juzgadosDao = new JuzgadosDAO();
                                    $juzgadosDto->setCveJuzgado($gruposOrdenesJuzgados->getCveJuzgado());
                                    $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto, "", $this->proveedor);
                                    if ( $juzgadosDto != "" ) {
                                        $nombreJuzgado = $juzgadosDto[0]->getDesJuzgado();
                                    } else {
                                        $nombreJuzgado = "";
                                    }
                                    $error = true;
                                    $msg[] = array(utf8_encode("El juzgado: " . $nombreJuzgado . " ya está registrado en un grupo, favor de verificar"));
                                }
                            } else {
                                $grupoTmp = new GruposordenesjuzgadosDTO();
                                $grupoTmp->setCveGrupoOrdenJuzgado($grupo[0]->getCveGrupoOrdenJuzgado());
                                $grupoTmp->setActivo("S");
                                $grupoTmp = $gruposOrdenesJuzgadosDao->updateGruposordenesjuzgados($grupoTmp, $this->proveedor);
                                if ( $grupoTmp != "" ) {
                                    $error = false;
                                } else {
                                    $error = true;
                                    $msg[] = array(utf8_encode("Ocurrió un error al actualizar el registro"));
                                }
                            }

                            if($error){
                                break;
                            }
                        }
                    }
                    $resultado = array(
                        "cveGrupoOrden"      => $gruposOrdenes->getCveGrupoOrden(),
                        "desGrupoOrden"      => utf8_encode($gruposOrdenes->getDesGrupoOrden()),
                        "activo"             => $gruposOrdenes->getActivo(),
                        "fechaRegistro"      => $gruposOrdenes->getFechaRegistro(),
                        "fechaActualizacion" => $gruposOrdenes->getFechaActualizacion()
                    );

                }
                array_push($listaResultados, $resultado);
            } else {
                $error = true;
                $msg[] = array("Ocurrio un errro al actualizar el registro.");
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
    
    public function eliminarGruposordenes($GruposordenesDto, $proveedor = null){
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
        $idGrupoOrden = 0;
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
        $GruposOrdenesDao = new GruposordenesDAO();
        
        //var_dump($GruposcateosDto);
        //echo count($GruposcateosDto);
        if( count($GruposordenesDto)> 1 ) {
            foreach ($GruposordenesDto as $gruposOrdenes) {
                //var_dump($gruposOrdenes);
                /*
                 * Verificar si existen registros en programacion de ordenes, si no 
                 * existen registros, borrar logicamente el registro de la tabla tblgruposordenes
                 * en caso contrario indicar al usuario que existen regsitros activos
                 * en tblprogramacionordenes
                 */
                $gruposOrdenesJuzgadosDto = new GruposordenesjuzgadosDTO();
                $gruposOrdenesJuzgadosDao = new GruposordenesjuzgadosDAO();
                $gruposOrdenesJuzgadosDto->setCveGrupoOrden($gruposOrdenes->getCveGrupoOrden());
                $gruposOrdenesJuzgadosDto->setActivo("S");
                $gruposOrdenesJuzgadosDto = $gruposOrdenesJuzgadosDao->selectGruposordenesjuzgados($gruposOrdenesJuzgadosDto, "", $this->proveedor);
                if( $gruposOrdenesJuzgadosDto != "" ) {
                    $programacionOrdenesDto = new ProgramacionordenesDTO();
                    $programacionOrdenesDao = new ProgramacionordenesDAO();
                    $programacionOrdenesDto->setCveGrupoOrdenJuzgado($gruposOrdenesJuzgadosDto[0]->getCveGrupoOrdenJuzgado());
                    $programacionOrdenesDto->setActivo("S");
                    $programacionOrdenesDto = $programacionOrdenesDao->selectProgramacionordenes($programacionOrdenesDto, "", $this->proveedor);
                    if($programacionOrdenesDto != "") {
                        $error = true;
                        $msg[] = array("No se puede eliminar el registro debido a que existen programaciones de ordenes activas");
                    } else {
                        $error = false;
                    }
                } else {
                    $error = false;
                }

                if( !$error && count($msg) == 0 ) {

                    $gruposOrdenesTmp = new GruposordenesDTO();
                    $gruposOrdenesTmp->setCveGrupoOrden($gruposOrdenes->getCveGrupoOrden());
                    $gruposOrdenesTmp->setActivo("N");
                    $gruposOrdenesTmp->setFechaActualizacion($fechaActual);
                    $gruposOrdenesTmp = $this->validarGruposordenes($gruposOrdenesTmp);

                    $gruposOrdenesTmp = $GruposOrdenesDao->updateGruposordenes($gruposOrdenesTmp, $this->proveedor);
                    if($gruposOrdenesTmp != "") {
                        $idGrupoOrden = $gruposOrdenesTmp[0]->getCveGrupoOrden();
                        $error = false;
                        $gruposOrdenesJuzgados = new GruposordenesjuzgadosDTO();
                        $gruposOrdenesJuzgados->setCveGrupoOrden($gruposOrdenesTmp[0]->getCveGrupoOrden());
                        $gruposOrdenesJuzgados->setActivo("S");
                        $gruposOrdenesJuzgados = $gruposOrdenesJuzgadosDao->selectGruposordenesjuzgados($gruposOrdenesJuzgados,"", $this->proveedor);
                        if($gruposOrdenesJuzgados != "") {
                            foreach ($gruposOrdenesJuzgados as $grupo) {
                                $gruposOrdenesJuzgadosTmp = new GruposordenesjuzgadosDTO();
                                $gruposOrdenesJuzgadosTmp->setCveGrupoOrdenJuzgado($grupo->getCveGrupoOrdenJuzgado());
                                $gruposOrdenesJuzgadosTmp->setActivo("N");
                                $gruposOrdenesJuzgadosTmp = $gruposOrdenesJuzgadosDao->updateGruposordenesjuzgados($gruposOrdenesJuzgadosTmp, $this->proveedor);
                                if($gruposOrdenesJuzgadosTmp != "") {
                                    $error = false;
                                } else {
                                    $error = true;
                                    $msg[] = array("Ocurrio un error al eliminar la relacion ordenes juzgados");
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
             * Verificar si existen registros en programacion de ordenes, si no 
             * existen registros, borrar logicamente el registro de la tabla tblgruposordenes
             * en caso contrario indicar al usuario que existen regsitros activos
             * en tblprogramacionordenes
             */
            $gruposOrdenesJuzgadosDto = new GruposordenesjuzgadosDTO();
            $gruposOrdenesJuzgadosDao = new GruposordenesjuzgadosDAO();
            $gruposOrdenesJuzgadosDto->setCveGrupoOrden($GruposordenesDto[0]->getCveGrupoOrden());
            $gruposOrdenesJuzgadosDto->setActivo("S");
            $gruposOrdenesJuzgadosDto = $gruposOrdenesJuzgadosDao->selectGruposordenesjuzgados($gruposOrdenesJuzgadosDto, "", $this->proveedor);
            if( $gruposOrdenesJuzgadosDto != "" ) {
                $programacionOrdenesDto = new ProgramacionordenesDTO();
                $programacionOrdenesDao = new ProgramacionordenesDAO();
                $programacionOrdenesDto->setCveGrupoOrdenJuzgado($gruposOrdenesJuzgadosDto[0]->getCveGrupoOrdenJuzgado());
                $programacionOrdenesDto->setActivo("S");
                $programacionOrdenesDto = $programacionOrdenesDao->selectProgramacionordenes($programacionOrdenesDto, "", $this->proveedor);
                if($programacionOrdenesDto != "") {
                    $error = true;
                    $msg[] = array("No se puede eliminar el registro debido a que existen programaciones de ordenes activas");
                } else {
                    $error = false;
                }
            } else {
                $error = false;
            }

            if( !$error && count($msg) == 0 ) {

                $gruposOrdenesTmp = new GruposordenesDTO();
                $gruposOrdenesTmp->setCveGrupoOrden($GruposordenesDto[0]->getCveGrupoOrden());
                $gruposOrdenesTmp->setActivo("N");
                $gruposOrdenesTmp->setFechaActualizacion($fechaActual);
                $gruposOrdenesTmp = $this->validarGruposordenes($gruposOrdenesTmp);

                $gruposOrdenesTmp = $GruposOrdenesDao->updateGruposordenes($gruposOrdenesTmp, $this->proveedor);
                if($gruposOrdenesTmp != "") {
                    $idGrupoOrden = $gruposOrdenesTmp[0]->getCveGrupoOrden();
                    $error = false;
                    $gruposOrdenesJuzgados = new GruposordenesjuzgadosDTO();
                    $gruposOrdenesJuzgados->setCveGrupoOrden($gruposOrdenesTmp[0]->getCveGrupoOrden());
                    $gruposOrdenesJuzgados->setActivo("S");
                    $gruposOrdenesJuzgados = $gruposOrdenesJuzgadosDao->selectGruposordenesjuzgados($gruposOrdenesJuzgados,"", $this->proveedor);
                    if($gruposOrdenesJuzgados != "") {
                        foreach ($gruposOrdenesJuzgados as $grupo) {
                            $gruposOrdenesJuzgadosTmp = new GruposordenesjuzgadosDTO();
                            $gruposOrdenesJuzgadosTmp->setCveGrupoOrdenJuzgado($grupo->getCveGrupoOrdenJuzgado());
                            $gruposOrdenesJuzgadosTmp->setActivo("N");
                            $gruposOrdenesJuzgadosTmp = $gruposOrdenesJuzgadosDao->updateGruposordenesjuzgados($gruposOrdenesJuzgadosTmp, $this->proveedor);
                            if($gruposOrdenesJuzgadosTmp != "") {
                                $error = false;
                            } else {
                                $error = true;
                                $msg[] = array("Ocurrio un error al eliminar la relacion ordenes juzgados");
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
        
        $fecha = date("Y-m-d H:i:s");
        $cveAccion = 350;
        $descripcion = "Borrado logico en tblgruposordenes cveGrupoOrden: " . $idGrupoOrden;
        $bitacoramovimientosDto = new BitacoramovimientosDTO();
        $bitacoramovimientosDto->setCveAccion($cveAccion);
        $bitacoramovimientosDto->setFechaMovimiento($fechaActual);
        $bitacoramovimientosDto->setObservaciones($descripcion);
        $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
        $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
        $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
        $daoBitacora = new BitacoramovimientosDAO();
        $insertarBitacora = $daoBitacora->insertBitacoramovimientos($bitacoramovimientosDto, $this->proveedor);
        if ( $insertarBitacora != "" ) {
            $error = false;
        } else {
            $error = true;
            $msg[] = array("Ocurrio un error al guardar en bitacora la accion realizada");
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