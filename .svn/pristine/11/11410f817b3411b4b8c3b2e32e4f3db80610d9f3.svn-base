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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ultimoroljuzgador/UltimoroljuzgadorDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ultimoroljuzgador/UltimoroljuzgadorDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
//Secuencias
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/secuencias/SecuenciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/secuencias/SecuenciasDAO.Class.php");
//Juzgadores
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadores/JuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadores/JuzgadoresDAO.Class.php");
//roles juzgadores
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/rolesjuzgadores/RolesjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/rolesjuzgadores/RolesjuzgadoresDAO.Class.php");
//tipos juzgadores
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposjuzgadores/TiposjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposjuzgadores/TiposjuzgadoresDAO.Class.php");
//Programaciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/programaciones/ProgramacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/programaciones/ProgramacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/programaciones/ProgramacionesController.Class.php");
//juzgadores juzgados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadoresjuzgados/JuzgadoresjuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadoresjuzgados/JuzgadoresjuzgadosDAO.Class.php");

class UltimoroljuzgadorController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarUltimoroljuzgador($UltimoroljuzgadorDto) {
        $UltimoroljuzgadorDto->setidUltimoRolJuzgador(strtoupper(str_ireplace("'", "", trim($UltimoroljuzgadorDto->getidUltimoRolJuzgador()))));
        $UltimoroljuzgadorDto->setidProgramacion(strtoupper(str_ireplace("'", "", trim($UltimoroljuzgadorDto->getidProgramacion()))));
        $UltimoroljuzgadorDto->setcveRolJuzgador(strtoupper(str_ireplace("'", "", trim($UltimoroljuzgadorDto->getcveRolJuzgador()))));
        $UltimoroljuzgadorDto->setaparicion(strtoupper(str_ireplace("'", "", trim($UltimoroljuzgadorDto->getaparicion()))));
        $UltimoroljuzgadorDto->setidJuzgador(strtoupper(str_ireplace("'", "", trim($UltimoroljuzgadorDto->getidJuzgador()))));
        $UltimoroljuzgadorDto->setnumSemana(strtoupper(str_ireplace("'", "", trim($UltimoroljuzgadorDto->getnumSemana()))));
        return $UltimoroljuzgadorDto;
    }

    public function selectUltimoroljuzgador($UltimoroljuzgadorDto, $proveedor = null) {
        $UltimoroljuzgadorDto = $this->validarUltimoroljuzgador($UltimoroljuzgadorDto);
        $UltimoroljuzgadorDao = new UltimoroljuzgadorDAO();
        $UltimoroljuzgadorDto = $UltimoroljuzgadorDao->selectUltimoroljuzgador($UltimoroljuzgadorDto, $proveedor);
        return $UltimoroljuzgadorDto;
    }

    public function selectUltimoroljuzgadorSecuencia($UltimoroljuzgadorDto, $proveedor = null) {
        $UltimoroljuzgadorDto = $this->validarUltimoroljuzgador($UltimoroljuzgadorDto);
        $UltimoroljuzgadorDao = new UltimoroljuzgadorDAO();
        $UltimoroljuzgadorDto = $UltimoroljuzgadorDao->selectUltimoroljuzgadorSecuencia($UltimoroljuzgadorDto, $proveedor);
        return $UltimoroljuzgadorDto;
    }

    public function selectSecuenciasRoles($UltimoroljuzgadorDto, $proveedor = null) {
        $UltimoroljuzgadorDto = $this->validarUltimoroljuzgador($UltimoroljuzgadorDto);
        $UltimoroljuzgadorDao = new UltimoroljuzgadorDAO();
        $UltimoroljuzgadorDto = $UltimoroljuzgadorDao->selectSecuenciasRoles($UltimoroljuzgadorDto, $proveedor);
        return $UltimoroljuzgadorDto;
    }

    public function insertUltimoroljuzgador($UltimoroljuzgadorDto, $proveedor = null) {
        $UltimoroljuzgadorDto = $this->validarUltimoroljuzgador($UltimoroljuzgadorDto);
        $UltimoroljuzgadorDao = new UltimoroljuzgadorDAO();
        $UltimoroljuzgadorDto = $UltimoroljuzgadorDao->insertUltimoroljuzgador($UltimoroljuzgadorDto, $proveedor);
        return $UltimoroljuzgadorDto;
    }

    public function updateUltimoroljuzgador($UltimoroljuzgadorDto, $proveedor = null) {
        $UltimoroljuzgadorDto = $this->validarUltimoroljuzgador($UltimoroljuzgadorDto);
        $UltimoroljuzgadorDao = new UltimoroljuzgadorDAO();
//$tmpDto = new UltimoroljuzgadorDTO();
//$tmpDto = $UltimoroljuzgadorDao->selectUltimoroljuzgador($UltimoroljuzgadorDto,$proveedor);
//if($tmpDto!=""){//$UltimoroljuzgadorDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $UltimoroljuzgadorDto = $UltimoroljuzgadorDao->updateUltimoroljuzgador($UltimoroljuzgadorDto, $proveedor);
        return $UltimoroljuzgadorDto;
//}
//return "";
    }

    public function deleteUltimoroljuzgador($UltimoroljuzgadorDto, $proveedor = null) {
        $UltimoroljuzgadorDto = $this->validarUltimoroljuzgador($UltimoroljuzgadorDto);
        $UltimoroljuzgadorDao = new UltimoroljuzgadorDAO();
        $UltimoroljuzgadorDto = $UltimoroljuzgadorDao->deleteUltimoroljuzgador($UltimoroljuzgadorDto, $proveedor);
        return $UltimoroljuzgadorDto;
    }

    public function borraUltimoRol($UltimoroljuzgadorDto, $proveedor = null) {
        $UltimoroljuzgadorDto = $this->validarUltimoroljuzgador($UltimoroljuzgadorDto);
        $UltimoroljuzgadorDao = new UltimoroljuzgadorDAO();
        $UltimoroljuzgadorDto = $UltimoroljuzgadorDao->borraUltimoRol($UltimoroljuzgadorDto, $proveedor);
        return $UltimoroljuzgadorDto;
    }

    public function guardaUltimoRol($parametros, $proveedor = null) {
        //$UltimoroljuzgadorDto=$this->validarUltimoroljuzgador($UltimoroljuzgadorDto);
        $mensaje["resultados"] = array();
        $UltimoroljuzgadorDao = new UltimoroljuzgadorDAO();
        $parametrosDecode = json_decode($parametros);
        $idProgramacion = 0;
        foreach ($parametrosDecode as $key => $value) {
            $idProgramacion = $value->idProgramacion;
            $UltimoroljuzgadorDto = new UltimoroljuzgadorDTO();
            $UltimoroljuzgadorDto->setIdProgramacion($value->idProgramacion);
            $UltimoroljuzgadorDto->setNumSemana($value->numSemana);
            $UltimoroljuzgadorDao->borraUltimoRol($UltimoroljuzgadorDto, $proveedor);
        }
        foreach ($parametrosDecode as $key => $valueInsert) {
            $UltimoroljuzgadorDto = new UltimoroljuzgadorDTO();
            $UltimoroljuzgadorDto->setIdJuzgador($valueInsert->idJuzgador);
            $UltimoroljuzgadorDto->setIdProgramacion($valueInsert->idProgramacion);
            $UltimoroljuzgadorDto->setCveRolJuzgador($valueInsert->cveRolJuzgador);
            $UltimoroljuzgadorDto->setAparicion($valueInsert->aparicion);
            $UltimoroljuzgadorDto->setNumSemana($valueInsert->numSemana);
            if ($valueInsert->idJuzgador != 0) {
                $UltimoroljuzgadorDtoSelect = new UltimoroljuzgadorDTO();
                $UltimoroljuzgadorDtoSelect->setIdJuzgador($valueInsert->idJuzgador);
                $UltimoroljuzgadorDtoSelect->setIdProgramacion($valueInsert->idProgramacion);
                $UltimoroljuzgadorDtoSelect->setNumSemana($valueInsert->numSemana);
                $validaUltimoRol = $UltimoroljuzgadorDao->selectUltimoroljuzgador($UltimoroljuzgadorDtoSelect);
                if (count($validaUltimoRol)) {
                    $mensaje["resultados"][] = array("mensaje" => "ESTE JUZGADOR SE ENCUENTRA OCUPADO");
                } else {
                    $UltimoroljuzgadorDao->insertUltimoroljuzgador($UltimoroljuzgadorDto, $proveedor);
                    $mensaje["resultados"][] = array("mensaje" => "SE REGISTRO EXITOSAMENTE");
                }
            } else {
                $mensaje["resultados"][] = array("mensaje" => "ES NECESARIO ELEGIR UN JUEZ");
            }
        }
        return json_encode($mensaje);
    }

    public function rolJuzgadorSecuencias($secuenciasDto, $proveedor = null) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $idProgramacion = 0;
        $idProgramacionA = 0;
        $fechaInicial = '';
        $fechaFinal = '';
        $result = array();
        $error = false;
        $msg = array();
        $mes = 0;
        $anio = 0;
        $numSemana = 0;
        $this->proveedor->execute("Select date_format(now(),'%Y') year,date_format(now(),'%m') mes");

        if ($this->proveedor->rows($this->proveedor->stmt) > 0) {
            while ($row = $this->proveedor->fetch_array($this->proveedor->stmt, 0)) {
                $anio = (int) $row["year"];
                $mes = (int) $row["mes"];
            }
        } else {
            $anio = (int) date("Y");
            $mes = (int) date("m");
        }

        /*
         * Obtener el registro de programacion para el juzgado recibido como parametro
         * en el mes actual y anio actual
         */
        $juzgadoresDao = new JuzgadoresDAO();
        $tiposJuzgadoresDao = new TiposjuzgadoresDAO();
        $rolesJuzgadoresDao = new RolesjuzgadoresDAO();
        $programacionesDto = new ProgramacionesDTO();
        $programacionesDao = new ProgramacionesDAO();
        $programacionesDto->setCveJuzgado($secuenciasDto->getCveJuzgado());
        $programacionesDto->setCveMes($mes);
        $programacionesDto->setAnio($anio);
        $orderProgramaciones = " OR (m.cveMes = date_format(DATE_SUB(NOW(), INTERVAL 1 MONTH), '%m')
                                     AND p.anio = date_format(DATE_SUB(NOW(), INTERVAL 1 MONTH), '%Y') 
                                     AND j.cveJuzgado='" . $secuenciasDto->getCveJuzgado() . "') 
                                     ORDER BY p.anio, p.cveMes DESC LIMIT 1";
        $programacionesDto = $programacionesDao->selectProgramaciones($programacionesDto, $orderProgramaciones, $this->proveedor);
        if ($programacionesDto != "") {
            $error = false;
            $idProgramacion = $programacionesDto[0]->getIdProgramacion();
            $fechaInicial = $programacionesDto[0]->getFechaInicial();
            $fechaFinal = $programacionesDto[0]->getFechaFinal();
        } else {
//                $error = true;
//                $msg[] = array("El juzgado no cuenta con registros de programacion");
            $this->proveedor->execute("SELECT DATE_FORMAT(DATE_SUB(NOW(), INTERVAL 1 MONTH),'%Y-%m-%d') AS fecha");
            while ($row = $this->proveedor->fetch_array($this->proveedor->stmt, 0)) {
                $fechaAux = $row['fecha'];
            }
            $fechaTmp = explode('-', $fechaAux);
            $programacionDto = new ProgramacionesDTO();
            $programacionDto->setCveJuzgado($secuenciasDto->getCveJuzgado());
            $programacionDto->setAnio($fechaTmp[0]);
            $programacionDto->setCveMes($fechaTmp[1]);
            $programacionesController = new ProgramacionesController();
            $dtoProgramacion = $programacionesController->ObtenerFechas($programacionDto, $this->proveedor);
            $programacionesDto = new ProgramacionesDTO();
            $programacionesDto->setAnio($dtoProgramacion[0]->getAnio());
            $programacionesDto->setCveJuzgado($secuenciasDto->getCveJuzgado());
            $programacionesDto->setFechaInicial($dtoProgramacion[0]->getFechaInicial());
            $programacionesDto->setFechaFinal($dtoProgramacion[0]->getFechaFinal());
            $programacionesDto->setCveMes($dtoProgramacion[0]->getCveMes());
            $programacionesDto = $programacionesDao->insertProgramaciones($programacionesDto, $this->proveedor);
            if ($programacionesDto == "") {
                $idProgramacion = $programacionesDto[0]->getIdProgramacion();
                $fechaInicial = $programacionesDto[0]->getFechaInicial();
                $fechaFinal = $programacionesDto[0]->getFechaFinal();
                $error = true;
                $msg[] = array("Ocurrio un error al obtener la programacion para el juzgado seleccionado");
            }
        }
        
        $ultimaProgramacion = new ProgramacionesDTO();
        $ultimaProgramacion->setAnio($anio);
        $ultimaProgramacion->setCveJuzgado($secuenciasDto->getCveJuzgado());
        $order = ' ORDER BY p.anio, p.cveMes DESC LIMIT 1';
        $ultimaProgramacion = $programacionesDao->selectProgramaciones($ultimaProgramacion, $order, $this->proveedor);
        if ( $ultimaProgramacion != '' ){
            if ( (int)$ultimaProgramacion[0]->getIdProgramacion() > (int)$idProgramacion ) {
                $idProgramacionA = $ultimaProgramacion[0]->getIdProgramacion();
                $fechaInicial = $ultimaProgramacion[0]->getFechaInicial();
                $fechaFinal = $ultimaProgramacion[0]->getFechaFinal();
            } else {
                $idProgramacionA = $idProgramacion;
            }
        } else {
            $idProgramacionA = $idProgramacion;
        }
        
        if (!$error) {
            /*
             * Consultar la ultima semana del rol juzgador para la programacion
             * obtenida
             */
            $ultimoRolDto = new UltimoroljuzgadorDTO();
            $ultimoRolDao = new UltimoroljuzgadorDAO();
            $ultimoRolDto->setIdProgramacion($idProgramacionA);
            $orderUltimoRol = " ORDER BY numSemana DESC LIMIT 1";
            $ultimoRolDto = $ultimoRolDao->selectUltimoroljuzgador($ultimoRolDto, $orderUltimoRol, $this->proveedor);
            if ($ultimoRolDto == "" || $ultimoRolDto == null) {
                //$error = true;
                //$msg[] = array("No se logro obtener el registro del ultimo rol juzgador para la programacion");
                //Se calcula la ultima semana de la programacion obtenida
                $f1 = $fechaInicial . " 00:00:00";
                $f2 = $fechaFinal . " 00:00:00";
                $datetime1 = new DateTime($f1);
                $datetime2 = new DateTime($f2);
                $interval = date_diff($datetime1, $datetime2);
                $dias = $interval->days;
                $numSemana = round($dias / 7);
            } else {
                $numSemana = (int) $ultimoRolDto[0]->getNumSemana();
            }
            /*
             * Obtener la secuencia del juzgado
             */
            $secuenciaDto = new SecuenciasDTO();
            $secuenciasDao = new SecuenciasDAO();
            $secuenciaDto->setCveJuzgado($secuenciasDto->getCveJuzgado());
            $secuenciaDto->setActivo('S');
            $ordenSecuencia = " ORDER BY orden ASC";
            $secuenciaDto = $secuenciasDao->selectSecuencias($secuenciaDto, $ordenSecuencia, $this->proveedor);
            if ($secuenciaDto != "") {
                foreach ($secuenciaDto as $secuencia) {
                    $array[] = array(
                        'aparicion' => $secuencia->getAparicion(),
                        'cveJuzgado' => $secuencia->getCveJuzgado(),
                        'cveRolJuzgador' => $secuencia->getCveRolJuzgador(),
                        'orden' => $secuencia->getOrden(),
                        'idSecuencia' => $secuencia->getIdSecuencia(),
                        'idProgramacion' => $idProgramacionA,
                        'numSemana' => $numSemana
                    );

                    $utimoRolJuzgadorDto = new UltimoroljuzgadorDTO();
                    $utimoRolJuzgadorDto->setIdProgramacion($idProgramacionA);
                    $utimoRolJuzgadorDto->setNumSemana($numSemana);
                    $utimoRolJuzgadorDto->setCveRolJuzgador($secuencia->getCveRolJuzgador());
                    $utimoRolJuzgadorDto->setAparicion($secuencia->getAparicion());
                    $utimoRolJuzgadorDto = $ultimoRolDao->selectUltimoroljuzgador($utimoRolJuzgadorDto, "", $this->proveedor);
                    if ($utimoRolJuzgadorDto != "" && $utimoRolJuzgadorDto != null) {
                        $arrayRolJuez[] = array('idUltimoRolJuzgador' => $utimoRolJuzgadorDto[0]->getIdUltimoRolJuzgador());

                        /*
                         * Consultamos los datos de los jueces
                         */
                        $juzgadoresDto = new JuzgadoresDTO();
                        $juzgadoresDto->setIdJuzgador($utimoRolJuzgadorDto[0]->getIdJuzgador());
                        $juzgadoresDto = $juzgadoresDao->selectJuzgadores($juzgadoresDto, "", $this->proveedor);
                        if ($juzgadoresDto != "") {
                            $idJuzgador = $juzgadoresDto[0]->getIdJuzgador();
                            $nombre = utf8_encode($juzgadoresDto[0]->getNombre()) . " " . utf8_encode($juzgadoresDto[0]->getPaterno()) . " " . utf8_encode($juzgadoresDto[0]->getMaterno());
                            $arrayDatosJuez[] = array('idJuzgador' => $idJuzgador, 'nombreJuzgador' => $nombre);
                            $tiposJuzgadoresDto = new TiposjuzgadoresDTO();
                            $tiposJuzgadoresDto->setCveTipoJuzgador($juzgadoresDto[0]->getCveTipoJuzgador());
                            $tiposJuzgadoresDto = $tiposJuzgadoresDao->selectTiposjuzgadores($tiposJuzgadoresDto, "", $this->proveedor);
                            if ($tiposJuzgadoresDto != "") {
                                $tipoDesc = utf8_encode($tiposJuzgadoresDto[0]->getDesTipoJuzgador());
                                $arrayTipoJuez[] = array('tipoDesc' => $tipoDesc);
                            } else {
                                //$error = true;
                                $arrayTipoJuez[] = array('tipoDesc' => '');
                            }
                        } else {
                            //$error = true;
                            $msg[] = array("Ocurrio un error al consultar los datos del juez");
                            $arrayDatosJuez[] = array('idJuzgador' => '0', 'nombreJuzgador' => '');
                        }
                    } else {
                        $arrayRolJuez[] = array('idUltimoRolJuzgador' => '0');
                        $arrayDatosJuez[] = array('idJuzgador' => '0', 'nombreJuzgador' => '');
                        $arrayTipoJuez[] = array('tipoDesc' => '');
                    }
                    /*
                     * Consultar la descripcion del rol definido en la secuencia
                     */
                    $rolesJuzgadoresDto = new RolesjuzgadoresDTO();
                    $rolesJuzgadoresDto->setCveRolJuzgador($secuencia->getCveRolJuzgador());
                    $rolesJuzgadoresDto = $rolesJuzgadoresDao->selectRolesjuzgadores($rolesJuzgadoresDto, "", $this->proveedor);
                    if ($rolesJuzgadoresDto != "") {
                        $rolDesc = utf8_encode($rolesJuzgadoresDto[0]->getDesRolJuzgador());
                        $arrayRol[] = array('rolDesc' => $rolDesc);
                    } else {
                        $error = true;
                        $msg[] = array("Ocurrio un error al consultar los datos del rol");
                        $arrayRol[] = array('rolDesc' => '');
                    }
                    if ($error) {
                        break;
                    }
                }
            } else {
                $error = true;
                $msg[] = array("El juzgado no cuenta con registro de secuencias");
            }
        }

        if (!$error) {
            $datos = array();
            for ($n = 0; $n < count($array); $n++) {
                $datos[$n]['aparicion'] = $array[$n]['aparicion'];
                $datos[$n]['cveJuzgado'] = $array[$n]['cveJuzgado'];
                $datos[$n]['cveRolJuzgador'] = $array[$n]['cveRolJuzgador'];
                $datos[$n]['idProgramacion'] = $array[$n]['idProgramacion'];
                $datos[$n]['idSecuencia'] = $array[$n]['idSecuencia'];
                $datos[$n]['orden'] = $array[$n]['orden'];
                $datos[$n]['numSemana'] = $array[$n]['numSemana'];
                $datos[$n]['idUltimoRolJuzgador'] = $arrayRolJuez[$n]['idUltimoRolJuzgador'];
                $datos[$n]['idJuzgador'] = $arrayDatosJuez[$n]['idJuzgador'];
                $datos[$n]['nombreJuzgador'] = $arrayDatosJuez[$n]['nombreJuzgador'];
                $datos[$n]['tipoDesc'] = $arrayTipoJuez[$n]['tipoDesc'];
                $datos[$n]['rolDesc'] = $arrayRol[$n]['rolDesc'];
            }
            $result = array(
                'totalCount' => count($datos),
                'text' => 'RESULTADOS DE LA CONSULTA',
                'data' => $datos
            );
        } else {
            $result = array(
                'totalCount' => '0',
                'text' => 'NO SE ENCONTRARON SECUENCIAS PARA EL JUZGADO',
                'data' => ''
            );
        }
        return $result;
    }

}

?>