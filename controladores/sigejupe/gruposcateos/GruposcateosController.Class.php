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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/gruposcateos/GruposcateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/gruposcateos/GruposcateosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
//Grupos juzgados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/gruposjuzgados/GruposjuzgadosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/gruposjuzgados/GruposjuzgadosDTO.Class.php");
//Programacion cateos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/programacioncateos/ProgramacioncateosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/programacioncateos/ProgramacioncateosDTO.Class.php");
//Juzgados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");
//bitacora
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/bitacoramovimientos/BitacoramovimientosDAO.Class.php");

class GruposcateosController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarGruposcateos($GruposcateosDto) {
        $GruposcateosDto->setcveGrupoCateo(strtoupper(str_ireplace("'", "", trim($GruposcateosDto->getcveGrupoCateo()))));
        $GruposcateosDto->setdesGrupoCateo(strtoupper(str_ireplace("'", "", trim($GruposcateosDto->getdesGrupoCateo()))));
        $GruposcateosDto->setactivo(strtoupper(str_ireplace("'", "", trim($GruposcateosDto->getactivo()))));
        $GruposcateosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($GruposcateosDto->getfechaRegistro()))));
        $GruposcateosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($GruposcateosDto->getfechaActualizacion()))));
        return $GruposcateosDto;
    }

    public function selectGruposcateos($GruposcateosDto, $proveedor = null) {
        $GruposcateosDto = $this->validarGruposcateos($GruposcateosDto);
        $GruposcateosDao = new GruposcateosDAO();
        $GruposcateosDto = $GruposcateosDao->selectGruposcateos($GruposcateosDto, $proveedor);
        return $GruposcateosDto;
    }

    public function insertGruposcateos($GruposcateosDto, $proveedor = null) {
        $GruposcateosDto = $this->validarGruposcateos($GruposcateosDto);
        $GruposcateosDao = new GruposcateosDAO();
        $GruposcateosDto = $GruposcateosDao->insertGruposcateos($GruposcateosDto, $proveedor);
        return $GruposcateosDto;
    }

    public function updateGruposcateos($GruposcateosDto, $proveedor = null) {
        $GruposcateosDto = $this->validarGruposcateos($GruposcateosDto);
        $GruposcateosDao = new GruposcateosDAO();
        //$tmpDto = new GruposcateosDTO();
        //$tmpDto = $GruposcateosDao->selectGruposcateos($GruposcateosDto,$proveedor);
        //if($tmpDto!=""){//$GruposcateosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $GruposcateosDto = $GruposcateosDao->updateGruposcateos($GruposcateosDto, $proveedor);
        return $GruposcateosDto;
        //}
        //return "";
    }

    public function deleteGruposcateos($GruposcateosDto, $proveedor = null) {
        $GruposcateosDto = $this->validarGruposcateos($GruposcateosDto);
        $GruposcateosDao = new GruposcateosDAO();
        $GruposcateosDto = $GruposcateosDao->deleteGruposcateos($GruposcateosDto, $proveedor);
        return $GruposcateosDto;
    }
    
    public function getPaginasGruposCateos($gruposcateosDto,$param) {
        $totalRegistros = 0;
        $gruposcateosDto = $this->validarGruposcateos($gruposcateosDto);
        $gruposCateosDao = new GruposcateosDAO();
        $order = " AND desGrupoCateo LIKE'%" . $gruposcateosDto->getDesGrupoCateo() . "%'";
        $grupoCateoDto = new GruposcateosDTO();
        $grupoCateoDto->setCveGrupoCateo($gruposcateosDto->getCveGrupoCateo());
        $grupoCateoDto->setActivo("S");
        $gruposcateosDto = $gruposCateosDao->selectGruposcateos($grupoCateoDto, $order, null);
        if ( $gruposcateosDto != "" ) {
            $totalRegistros = count($gruposcateosDto);
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
    
    public function agregarGruposcateos($GruposcateosDto, $gruposJuzgadosDto, $proveedor = null) {
        $GruposcateosDto = $this->validarGruposcateos($GruposcateosDto);
        $GruposcateosDao = new GruposcateosDAO();
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
        $gruposCateos = $GruposcateosDao->selectGruposcateos($GruposcateosDto, "", $this->proveedor);
        if ( $gruposCateos == "" ) {
            $GruposcateosDto = $GruposcateosDao->insertGruposcateos($GruposcateosDto, $this->proveedor);
            
            if($GruposcateosDto != "") {
                $fecha = date("Y-m-d H:i:s");
                $cveAccion = 345;
                $descripcion = "INSERT en tblgruposcateos cveGrupoCateo: " . $GruposcateosDto[0]->getCveGrupoCateo();
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

                foreach ($GruposcateosDto as $gruposCateos) {
                    /*
                     * Agregar los registros de juzgados pertenecientes al grupo en la tabla
                     * tblgruposjuzgados
                     */
                    foreach ($gruposJuzgadosDto as $gruposJuzgados) {
                        /*
                         * Verificar si el juzgado se encuentra registrado en algun grupo
                         * si aún no está registrado, insertar el registro, en otro caso
                         * indicar al usuario
                         */
                        $grupoJuzgado = new GruposjuzgadosDTO();
                        $gruposJuzgadosDao = new GruposjuzgadosDAO();
                        $grupoJuzgado->setCveJuzgado($gruposJuzgados->getCveJuzgado());
                        $grupoJuzgado->setActivo("S");
                        $grupoJuzgado = $gruposJuzgadosDao->selectGruposjuzgados($grupoJuzgado, "", $this->proveedor);
                        if ( $grupoJuzgado == "" ) {
                            /*
                             * Insertar los registro en tblgruposjuzgados
                             */
                            $gruposJuzgadosTmp = new GruposjuzgadosDTO();
                            
                            $gruposJuzgadosTmp->setCveJuzgado($gruposJuzgados->getCveJuzgado());
                            $gruposJuzgadosTmp->setCveGrupoCateo($gruposCateos->getCveGrupoCateo());
                            $gruposJuzgadosTmp->setActivo("S");
                            $gruposJuzgadosTmp = $gruposJuzgadosDao->insertGruposjuzgados($gruposJuzgadosTmp, $this->proveedor);
                            if($gruposJuzgadosTmp != "") {
                                $error = false;
                                
                                $fecha = date("Y-m-d H:i:s");
                                $cveAccion = 332;
                                $descripcion = "INSERT en tblgruposjuzagados cveGrupoJuzgado: " . $gruposJuzgadosTmp[0]->getCveGrupoJuzgado();
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
                        "cveGrupoCateo"      => $gruposCateos->getCveGrupoCateo(),
                        "desGrupoCateo"      => utf8_encode($gruposCateos->getdesGrupoCateo()),
                        "activo"             => $gruposCateos->getActivo(),
                        "fechaRegistro"      => $gruposCateos->getFechaRegistro(),
                        "fechaActualizacion" => $gruposCateos->getFechaActualizacion()
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
    
    public function modificarGruposcateos($GruposcateosDto, $gruposJuzgadosDto, $proveedor = null){
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
        $GruposcateosDto = $this->validarGruposcateos($GruposcateosDto);
        $GruposcateosDao = new GruposcateosDAO();
        $json = "";
        $x = 1;
        $GruposcateosDto->setFechaActualizacion($fechaActual);
        $grupsTmp = new GruposcateosDTO();
        $grupsTmp->setDesGrupoCateo($GruposcateosDto->getDesGrupoCateo());
        $grupsTmp->setActivo("S");
        $order = " AND cveGrupoCateo<>" . $GruposcateosDto->getCveGrupoCateo();
        $grupos = $GruposcateosDao->selectGruposcateos($grupsTmp, $order, $this->proveedor);
        if ( $grupos == "" ) {
            $GruposcateosDto = $GruposcateosDao->updateGruposcateos($GruposcateosDto, $this->proveedor);
            if($GruposcateosDto != ""){
                $fecha = date("Y-m-d H:i:s");
                $cveAccion = 346;
                $descripcion = "MODIFICACION en tblgruposcateos cveGrupoCateo: " . $GruposcateosDto[0]->getCveGrupoCateo();
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
                foreach ($GruposcateosDto as $gruposCateos) {

                    $gruposJuzgadosDao = new GruposjuzgadosDAO();
                    $gruposJuzgadosTmp = new GruposjuzgadosDTO();
                    $gruposJuzgadosTmp->setActivo("S");
                    $gruposJuzgadosTmp->setCveGrupoCateo($gruposCateos->getCveGrupoCateo());
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
                        foreach ($gruposJuzgadosDto as $gruposJuzgados) {
                            /*
                             * Consultar si el juzgado se encuentra en algun grupo
                             * enviar mensaje al usuario 
                             */
                            $grupoJuzgado = new GruposjuzgadosDTO();
                            $grupoJuzgado->setCveJuzgado($gruposJuzgados->getCveJuzgado());
                            $grupoJuzgado->setActivo("S");
                            $grupoJuzgado = $gruposJuzgadosDao->selectGruposjuzgados($grupoJuzgado, "", $this->proveedor);
                            if ( $grupoJuzgado != "" ) {
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
                             * Si no ha ocurrio al gun error, insertar los registro en tblgruposjuzgados
                             */
                            $gruposJuzgadosDto = new GruposjuzgadosDTO();
                            $gruposJuzgadosDto->setCveJuzgado($gruposJuzgados->getCveJuzgado());
                            $gruposJuzgadosDto->setCveGrupoCateo($gruposCateos->getCveGrupoCateo());
                            //$gruposJuzgadosDto->setActivo("S");
                            $grupos = new GruposjuzgadosDTO();
                            $grupos = $gruposJuzgadosDao->selectGruposjuzgados($gruposJuzgadosDto,"", $this->proveedor);
                            if( $grupos != "" ) {
                                $gruposTmp = new GruposjuzgadosDTO();
                                $gruposTmp->setCveGrupoJuzgado($grupos[0]->getCveGrupoJuzgado());
                                $gruposTmp->setActivo("S");
                                $gruposTmp = $gruposJuzgadosDao->updateGruposjuzgados($gruposTmp, $this->proveedor);
                                if($gruposTmp != "") {
                                    $error = false;
                                } else {
                                    $error = true;
                                    $msg[] = array(utf8_encode("Ocurrió un error al modificar el registro"));
                                }
                            } else {
                                $grupoJuzgado = new GruposjuzgadosDTO();
                                $grupoJuzgado->setCveJuzgado($gruposJuzgados->getCveJuzgado());
                                $grupoJuzgado->setActivo("S");
                                $grupoJuzgado = $gruposJuzgadosDao->selectGruposjuzgados($grupoJuzgado, "", $this->proveedor);
                                if ( $grupoJuzgado == "" ) {
                                    $gruposJuzgadosDto->setActivo("S");
                                    $gruposJuzgadosDto = $gruposJuzgadosDao->insertGruposjuzgados($gruposJuzgadosDto, $this->proveedor);
                                    if($gruposJuzgadosDto != "") {
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
                        "cveGrupoCateo"      => $gruposCateos->getCveGrupoCateo(),
                        "desGrupoCateo"      => utf8_encode($gruposCateos->getdesGrupoCateo()),
                        "activo"             => $gruposCateos->getActivo(),
                        "fechaRegistro"      => $gruposCateos->getFechaRegistro(),
                        "fechaActualizacion" => $gruposCateos->getFechaActualizacion()
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
    
    public function eliminarGruposcateos($GruposcateosDto, $proveedor = null){
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
        $idGrupoCateo = 0;
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
        $GruposcateosDao = new GruposcateosDAO();
        
        //var_dump($GruposcateosDto);
        //echo count($GruposcateosDto);
        if( count($GruposcateosDto)> 1 ) {
            foreach ($GruposcateosDto as $gruposCateos) {
                //var_dump($gruposCateos);
                /*
                 * Verificar si existen registros en programacion de cateos, si no 
                 * existen registros, borrar logicamente el registro de la tabla tblgruposcateos
                 * en caso contrario indicar al usuario que existen regsitros activos
                 * en tblprogramacioncateos
                 */
                $gruposJuzgadosDto = new GruposjuzgadosDTO();
                $gruposJuzgadosDao = new GruposjuzgadosDAO();
                $gruposJuzgadosDto->setCveGrupoCateo($gruposCateos->getCveGrupoCateo());
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
                        $error = false;
                    }
                } else {
                    $error = false;
                }

                if( !$error && count($msg) == 0 ) {

                    $gruposCateosTmp = new GruposcateosDTO();
                    $gruposCateosTmp->setCveGrupoCateo($gruposCateos->getCveGrupoCateo());
                    $gruposCateosTmp->setActivo("N");
                    $gruposCateosTmp->setFechaActualizacion($fechaActual);
                    $gruposCateosTmp = $this->validarGruposcateos($gruposCateosTmp);

                    $gruposCateosTmp = $GruposcateosDao->updateGruposcateos($gruposCateosTmp, $this->proveedor);
                    if($gruposCateosTmp != "") {
                        $idGrupoCateo = $gruposCateosTmp[0]->getCveGrupoCateo();
                        $error = false;
                        $gruposJuzgados = new GruposjuzgadosDTO();
                        $gruposJuzgados->setCveGrupoCateo($gruposCateosTmp[0]->getCveGrupoCateo());
                        $gruposJuzgados->setActivo("S");
                        $gruposJuzgados = $gruposJuzgadosDao->selectGruposjuzgados($gruposJuzgados,"", $this->proveedor);
                        if($gruposJuzgados != "") {
                            foreach ($gruposJuzgados as $grupo) {
                                $gruposJuzgadosTmp = new GruposjuzgadosDTO();
                                $gruposJuzgadosTmp->setCveGrupoJuzgado($grupo->getCveGrupoJuzgado());
                                $gruposJuzgadosTmp->setActivo("N");
                                $gruposJuzgadosTmp = $gruposJuzgadosDao->updateGruposjuzgados($gruposJuzgadosTmp, $this->proveedor);
                                if($gruposJuzgadosTmp != "") {
                                    $error = false;
                                } else {
                                    $error = true;
                                    $msg[] = array("Ocurrio un error al eliminar la relacion grupos juzgados");
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
             * Verificar si existen registros en programacion de cateos, si no 
             * existen registros, borrar logicamente el registro de la tabla tblgruposcateos
             * en caso contrario indicar al usuario que existen regsitros activos
             * en tblprogramacioncateos
             */
            $gruposJuzgadosDto = new GruposjuzgadosDTO();
            $gruposJuzgadosDao = new GruposjuzgadosDAO();
            $gruposJuzgadosDto->setCveGrupoCateo($GruposcateosDto[0]->getCveGrupoCateo());
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
                    $error = false;
                }
            } else {
                $error = false;
            }

            if( !$error && count($msg) == 0 ) {

                $gruposCateosTmp = new GruposcateosDTO();
                $gruposCateosTmp->setCveGrupoCateo($GruposcateosDto[0]->getCveGrupoCateo());
                $gruposCateosTmp->setActivo("N");
                $gruposCateosTmp->setFechaActualizacion($fechaActual);
                $gruposCateosTmp = $this->validarGruposcateos($gruposCateosTmp);

                $gruposCateosTmp = $GruposcateosDao->updateGruposcateos($gruposCateosTmp, $this->proveedor);
                if($gruposCateosTmp != "") {
                    $idGrupoCateo = $gruposCateosTmp[0]->getCveGrupoCateo();
                    $error = false;
                    $gruposJuzgados = new GruposjuzgadosDTO();
                    $gruposJuzgados->setCveGrupoCateo($gruposCateosTmp[0]->getCveGrupoCateo());
                    $gruposJuzgados->setActivo("S");
                    $gruposJuzgados = $gruposJuzgadosDao->selectGruposjuzgados($gruposJuzgados,"", $this->proveedor);
                    if($gruposJuzgados != "") {
                        foreach ($gruposJuzgados as $grupo) {
                            $gruposJuzgadosTmp = new GruposjuzgadosDTO();
                            $gruposJuzgadosTmp->setCveGrupoJuzgado($grupo->getCveGrupoJuzgado());
                            $gruposJuzgadosTmp->setActivo("N");
                            $gruposJuzgadosTmp = $gruposJuzgadosDao->updateGruposjuzgados($gruposJuzgadosTmp, $this->proveedor);
                            if($gruposJuzgadosTmp != "") {
                                $error = false;
                            } else {
                                $error = true;
                                $msg[] = array("Ocurrio un error al eliminar la relacion grupos juzgados");
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
        $cveAccion = 347;
        $descripcion = "Borrado logico en tblgruposcateos cveGrupoCateo: " . $idGrupoCateo;
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