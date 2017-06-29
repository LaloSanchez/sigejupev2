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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/mediosnotificaciones/MediosnotificacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/mediosnotificaciones/MediosnotificacionesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/rutascontroladores/RutascontroladoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/rutascontroladores/RutascontroladoresDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/procesosnotificaciones/ProcesosnotificacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/procesosnotificaciones/ProcesosnotificacionesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/procesosmediosnotificaciones/ProcesosmediosnotificacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/procesosmediosnotificaciones/ProcesosmediosnotificacionesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

class MediosnotificacionesController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarMediosnotificaciones($MediosnotificacionesDto) {
        $MediosnotificacionesDto->setcveMedioNotificacion(strtoupper(str_ireplace("'", "", trim($MediosnotificacionesDto->getcveMedioNotificacion()))));
        $MediosnotificacionesDto->setdesMedioNotificacion(strtoupper(str_ireplace("'", "", trim($MediosnotificacionesDto->getdesMedioNotificacion()))));
        $MediosnotificacionesDto->setactivo(strtoupper(str_ireplace("'", "", trim($MediosnotificacionesDto->getactivo()))));
        $MediosnotificacionesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($MediosnotificacionesDto->getfechaRegistro()))));
        $MediosnotificacionesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($MediosnotificacionesDto->getfechaActualizacion()))));
        return $MediosnotificacionesDto;
    }

    public function selectMediosnotificaciones($MediosnotificacionesDto, $proveedor = null) {
        $MediosnotificacionesDto = $this->validarMediosnotificaciones($MediosnotificacionesDto);
        $MediosnotificacionesDao = new MediosnotificacionesDAO();
        $MediosnotificacionesDto = $MediosnotificacionesDao->selectMediosnotificaciones($MediosnotificacionesDto, $proveedor);
        return $MediosnotificacionesDto;
    }

    public function insertMediosnotificaciones($MediosnotificacionesDto, $proveedor = null) {
        $MediosnotificacionesDto = $this->validarMediosnotificaciones($MediosnotificacionesDto);
        $MediosnotificacionesDao = new MediosnotificacionesDAO();
        $MediosnotificacionesDto = $MediosnotificacionesDao->insertMediosnotificaciones($MediosnotificacionesDto, $proveedor);
        return $MediosnotificacionesDto;
    }

    public function updateMediosnotificaciones($MediosnotificacionesDto, $proveedor = null) {
        $MediosnotificacionesDto = $this->validarMediosnotificaciones($MediosnotificacionesDto);
        $MediosnotificacionesDao = new MediosnotificacionesDAO();
//$tmpDto = new MediosnotificacionesDTO();
//$tmpDto = $MediosnotificacionesDao->selectMediosnotificaciones($MediosnotificacionesDto,$proveedor);
//if($tmpDto!=""){//$MediosnotificacionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $MediosnotificacionesDto = $MediosnotificacionesDao->updateMediosnotificaciones($MediosnotificacionesDto, $proveedor);
        return $MediosnotificacionesDto;
//}
//return "";
    }

    public function deleteMediosnotificaciones($MediosnotificacionesDto, $proveedor = null) {
        $MediosnotificacionesDto = $this->validarMediosnotificaciones($MediosnotificacionesDto);
        $MediosnotificacionesDao = new MediosnotificacionesDAO();
        $MediosnotificacionesDto = $MediosnotificacionesDao->deleteMediosnotificaciones($MediosnotificacionesDto, $proveedor);
        return $MediosnotificacionesDto;
    }

    public function getInfoMediosNotificacion($mediosDto, $proveedor = null) {
        $mediosDao = new MediosnotificacionesDAO();
        $result = array();
        $error = false;
        $mediosNotificacion = new MediosnotificacionesDTO();
        $mediosNotificacion = $mediosDao->selectMediosnotificaciones($mediosDto, "", $proveedor);

        if ($mediosDto != "") {
            $coun = 0;
            $medios = array();
            foreach ($mediosNotificacion as $medio) {
                $medios["medios"][$coun] = $medio->toString();

                // Obtenemos las rutas de cada Medio de Comunicacion
                $rutasNotificaciones = new RutascontroladoresDTO();
                $rutasNotificaciones->setActivo("S");
                $rutasNotificaciones->setCveMedioNotificacion($medio->getCveMedioNotificacion());

                $rutasNotificacionesDao = new RutascontroladoresDAO();
                $rutasNotificaciones = $rutasNotificacionesDao->selectRutasControladores($rutasNotificaciones);
                $rutasCount = 0;
                if (count($rutasNotificaciones) > 0) {
                    foreach ($rutasNotificaciones as $ruta) {
                        $medios["medios"][$coun]["rutas"][$rutasCount] = $ruta->toString();
                        $rutasCount++;
                    }
                } else {
                    $medios["medios"][$coun]["rutas"] = "";
                    $rutasCount++;
                }
                $coun++;
            }
            $error = false;
        } else {
            $error = true;
        }

        if (!$error) {
            // Obtenemos ProcesosNotificaciones
            $procesosDto = new ProcesosnotificacionesDTO();
            $procesosDto->setActivo("S");
            $procesosDao = new ProcesosnotificacionesDAO();
            $procesosDto = $procesosDao->selectProcesosnotificaciones($procesosDto);
            $procesosArray = array();
            if ($procesosDto != "") {
                $countProcesos = 0;
                foreach ($procesosDto as $proceso) {
                    $procesosArray[$countProcesos] = $proceso->toString();
                    $countProcesos++;
                }
            } else {
                $error = true;
            }
        }

        if (!$error) {
            $result["type"] = "OK";
            $result["data"] = $medios;
            $result["procesos"] = $procesosArray;
        } else {
            $result["type"] = "Error";
            $result["text"] = "NO HAY MEDIOS DE NOTIFICACION";
        }

        return json_encode($result);
    }

    public function saveTask($param) {
        $result = array();
        if (isset($param["proceso"]) != "") {
            $procesos = json_decode($param["proceso"], true);
            foreach ($procesos as $proceso) {
                $idProcesoNotificacion = $proceso["idProcesoNotificacion"];
                $idRutaControlador = $proceso["idRutaControlador"];
                //--> Busca si ya existen registros en la BD
                $procesosNotificacionesDto = new ProcesosmediosnotificacionesDTO();
                $procesosNotificacionesDto->setIdRutaControlador($idRutaControlador);

                $procesosNotificacionesDao = new ProcesosmediosnotificacionesDAO();
                $procesosNotificacionesDto = $procesosNotificacionesDao->selectProcesosMedios($procesosNotificacionesDto);

                if ($procesosNotificacionesDto != "") {
                    // Actulizar informacion
                    $procesoUpdate = new ProcesosmediosnotificacionesDTO();
                    $procesoUpdate->setIdProcesoNotificacion($idProcesoNotificacion);
                    $procesoUpdate->setIdRutaControlador($idRutaControlador);
                    $procesoUpdate->setIdProcesoMedioNotificacion($procesosNotificacionesDto[0]->getIdProcesoMedioNotificacion());
                    $fechaModificacion = $procesosNotificacionesDao->selectFechaHoraMySql();
                    $procesoUpdate->setFechaActualizacion($fechaModificacion);
                    $procesoUpdate = $procesosNotificacionesDao->updateProcesosMedios($procesoUpdate);
                    if ($procesoUpdate != "") {
                        $result["type"] = "OK";
                        $result["text"] = utf8_encode("SE ACTUALIZ&Oacute; CORRECTAMENTE LA INFORMACI&Oacute;N");
                    } else {
                        $result["type"] = "Error";
                        $result["text"] = utf8_encode("NO SE PUDO ACTUALIZAR LA INFORMACI&Oacute;N");
                    }
                } else {
                    // Insertar en la BD
                    $procesoInsertDto = new ProcesosmediosnotificacionesDTO();
                    $procesoInsertDto->setIdRutaControlador($idRutaControlador);
                    $procesoInsertDto->setIdProcesoNotificacion($idProcesoNotificacion);
                    $procesoInsertDto = $procesosNotificacionesDao->insertProcesosMedios($procesoInsertDto);
                    if ($procesoInsertDto != "") {
                        $result["type"] = "OK";
                        $result["text"] = utf8_encode("SE GUARDO CORRECTAMENTE LA INFORMACI&Oacute;N");
                    } else {
                        $result["type"] = "Error";
                        $result["text"] = utf8_encode("NO SE PUDO GUARDAR LA INFORMACI&Oacute;N");
                    }
                }

                $procesosAll = new ProcesosmediosnotificacionesDTO();
                $procesosAllDao = new ProcesosmediosnotificacionesDAO();
                $procesosAll = $procesosAllDao->selectProcesosMedios($procesosAll);
                $file = dirname(__FILE__) . '/../../../task/cron.apache';
                @unlink($file);
                if ($procesosAll != "") {
                    $addcron = "";
                    foreach ($procesosAll as $procesoFile) {
                        $procesoNotificacion = new ProcesosnotificacionesDTO();
                        $procesoNotificacion->setIdProcesoNotificacion($procesoFile->getIdProcesoNotificacion());
                        $procesoNotificacionDao = new ProcesosnotificacionesDAO();
                        $procesoNotificacion = $procesoNotificacionDao->selectProcesosnotificaciones($procesoNotificacion);
                        $rutaControllerDto = new RutascontroladoresDTO();
                        $rutaControllerDto->setIdRutaControlador($procesoFile->getIdRutaControlador());
                        $rutaControllerDao = new RutascontroladoresDAO();
                        $rutaControllerDto = $rutaControllerDao->selectRutasControladores($rutaControllerDto);
                        if ($procesoNotificacion != "" && $rutaControllerDto != "") {
                            $tiempo = $procesoNotificacion[0]->getTiempo();
                            $addcron .=  "*/$tiempo * * * * php " . $rutaControllerDto[0]->getRutaControlador() . PHP_EOL;
                        }
                    }
                    file_put_contents($file, $addcron, FILE_APPEND);
                    exec('crontab ' . $file);
                }
            }
        } else {
            $result["type"] = "Error";
            $result["text"] = "NO SE ENVIARON TAREAS PROGRAMADAS";
        }
        return json_encode($result);
    }

}

?>