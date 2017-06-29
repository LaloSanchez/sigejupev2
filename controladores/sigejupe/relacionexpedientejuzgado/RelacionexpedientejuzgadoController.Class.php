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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/relacionexpedientejuzgado/RelacionexpedientejuzgadoDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/relacionexpedientejuzgado/RelacionexpedientejuzgadoDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../bitacoramovimientos/BitacoramovimientosController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/antecedesnotificaciones/AntecedesnotificacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/antecedesnotificaciones/AntecedesnotificacionesDAO.Class.php");

class RelacionexpedientejuzgadoController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto) {
        $RelacionexpedientejuzgadoDto->setIdRelacionExpedienteJuzgado(strtoupper(str_ireplace("'", "", trim($RelacionexpedientejuzgadoDto->getidRelacionExpedienteJuzgado()))));
        $RelacionexpedientejuzgadoDto->setIdPersonaAutorizada(strtoupper(str_ireplace("'", "", trim($RelacionexpedientejuzgadoDto->getIdPersonaAutorizada()))));
        $RelacionexpedientejuzgadoDto->setIdCarpetajudicial(strtoupper(str_ireplace("'", "", trim($RelacionexpedientejuzgadoDto->getIdCarpetajudicial()))));
        $RelacionexpedientejuzgadoDto->setCveTipoParte(strtoupper(str_ireplace("'", "", trim($RelacionexpedientejuzgadoDto->getcveTipoParte()))));
        $RelacionexpedientejuzgadoDto->setFechaRegistro(strtoupper(str_ireplace("'", "", trim($RelacionexpedientejuzgadoDto->getfechaRegistro()))));
        $RelacionexpedientejuzgadoDto->setFechaActualizacion(strtoupper(str_ireplace("'", "", trim($RelacionexpedientejuzgadoDto->getfechaActualizacion()))));
        $RelacionexpedientejuzgadoDto->setObservaciones(strtoupper(str_ireplace("'", "", trim($RelacionexpedientejuzgadoDto->getobservaciones()))));
        $RelacionexpedientejuzgadoDto->setActivo(strtoupper(str_ireplace("'", "", trim($RelacionexpedientejuzgadoDto->getactivo()))));
        return $RelacionexpedientejuzgadoDto;
    }

    public function selectRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto, $proveedor = null) {
        $RelacionexpedientejuzgadoDto = $this->validarRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto);
        $RelacionexpedientejuzgadoDao = new RelacionexpedientejuzgadoDAO();
        $RelacionexpedientejuzgadoDto = $RelacionexpedientejuzgadoDao->selectRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto, $proveedor);
        return $RelacionexpedientejuzgadoDto;
    }

    public function insertRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto, $proveedor = null) {
        $RelacionexpedientejuzgadoDto = $this->validarRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto);
        $RelacionexpedientejuzgadoDao = new RelacionexpedientejuzgadoDAO();
        $RelacionexpedientejuzgadoDto = $RelacionexpedientejuzgadoDao->insertRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto, $proveedor);
        return $RelacionexpedientejuzgadoDto;
    }

    public function updateRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto, $proveedor = null) {
        $RelacionexpedientejuzgadoDto = $this->validarRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto);
        $RelacionexpedientejuzgadoDao = new RelacionexpedientejuzgadoDAO();
//$tmpDto = new RelacionexpedientejuzgadoDTO();
//$tmpDto = $RelacionexpedientejuzgadoDao->selectRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto,$proveedor);
//if($tmpDto!=""){//$RelacionexpedientejuzgadoDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $RelacionexpedientejuzgadoDto = $RelacionexpedientejuzgadoDao->updateRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto, $proveedor);
        return $RelacionexpedientejuzgadoDto;
//}
//return "";
    }

    public function deleteRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto, $proveedor = null) {
        $RelacionexpedientejuzgadoDto = $this->validarRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto);
        $RelacionexpedientejuzgadoDao = new RelacionexpedientejuzgadoDAO();
        $RelacionexpedientejuzgadoDto = $RelacionexpedientejuzgadoDao->deleteRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto, $proveedor);
        return $RelacionexpedientejuzgadoDto;
    }

    private function borrarAntecedesNotificaciones($padre, $proveedor) {
        $antecedesnotifiacionesDto = new AntecedesnotificacionesDTO();
        $antecedesnotifiacionesDto->setIdPersonaAutorizadaPadre($padre);
        $antecedesnotifiacionesDto->setActivo("S");
        $AntecedesnofitiacionesDao = new AntecedesnotificacionesDAO();
        $Respuesta = $AntecedesnofitiacionesDao->selectAntecedesnotificaciones($antecedesnotifiacionesDto);
        if (($Respuesta != "") && ($Respuesta != null)) {
            $bitacoraController = new BitacoramovimientosController();
            foreach ($Respuesta as $registroDto) {
                $registroDto->setActivo("N");
                $Uan = $AntecedesnofitiacionesDao->updateAntecedesnotificaciones($registroDto, $proveedor);
                if (($Uan != "") && ($Uan != null)) {
                    $bitac = $bitacoraController->agregar(307, 'tblantecedesnotificaciones', 'dto', $Uan, null, $proveedor);
                    if (($bitac == "") || ($bitac == null)) {
                        return -1; //ocurrio un error
                    }
                }
            }
            return 1; //transaccion exitorsa
        }
        return 0; //no hay idPersonaAutorizadaPadre
    }

    public function insertRelacionexpedientejuzgado_bitacora($RelacionexpedientejuzgadoDto, $datos) {
        $RelacionexpedientejuzgadoDto = $this->validarRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto);
        $RelacionexpedientejuzgadoDao = new RelacionexpedientejuzgadoDAO();
        $fechaAc=$RelacionexpedientejuzgadoDto->getFechaActualizacion();
        $RelacionexpedientejuzgadoDto->setFechaActualizacion("");
        $consulta = $RelacionexpedientejuzgadoDao->selectRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto);
        if($consulta!=""){
            return "registro_existente";
        }
        $RelacionexpedientejuzgadoDto->setFechaActualizacion($fechaAc);
        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");
        $RelacionexpedientejuzgadoDto = $RelacionexpedientejuzgadoDao->insertRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto, $proveedor);
        if ($RelacionexpedientejuzgadoDto != "") {
            $bitacoraController = new BitacoramovimientosController();
            $bitac = $bitacoraController->agregar(302, 'tblrelacionexpedientejuzgado', 'dto', $RelacionexpedientejuzgadoDto, null, $proveedor);
            if (($bitac == "") || ($bitac == null)) {
                $proveedor->execute("ROLLBACK");
                $proveedor->close();
                return "";
            }
            if (($datos["hijosPersonasAutorizadas"] != "") && ($datos["hijosPersonasAutorizadas"] != null)) {
                $IdPersonaAutorizadaPadre = $RelacionexpedientejuzgadoDto[0]->getIdPersonaAutorizada();
                $IdsPersonaAutorizadaHijos = explode(",", $datos["hijosPersonasAutorizadas"]);
                $total = count($IdsPersonaAutorizadaHijos);
                $antecedesnotifiacionesDto = new AntecedesnotificacionesDTO();
                $antecedesnotifiacionesDto->setActivo("S");
                $AntecedesnofitiacionesDao = new AntecedesnotificacionesDAO();
                for ($i = 0; $i < $total-1; $i++) {
                    $antecedesnotifiacionesDto->setIdPersonaAutorizadaPadre($IdPersonaAutorizadaPadre);
                    $antecedesnotifiacionesDto->setIdPersonaAutorizadaHijo($IdsPersonaAutorizadaHijos[$i]);
                    $respuesta = $AntecedesnofitiacionesDao->insertAntecedesnotificaciones($antecedesnotifiacionesDto);
                    if (($respuesta != "") && ($respuesta != null)) {
                        $bitac = $bitacoraController->agregar(305, 'tblantecedesnotificaciones', 'dto', $respuesta, null, $proveedor);
                        if (($bitac == "") || ($bitac == null)) {
                            $proveedor->execute("ROLLBACK");
                            $proveedor->close();
                            return "";
                        }
                    } else {
                        $proveedor->execute("ROLLBACK");
                        $proveedor->close();
                        return "";
                    }
                }
            }
        } else {
            $proveedor->execute("ROLLBACK");
            $proveedor->close();
            return "";
        }
        $proveedor->execute('COMMIT');
        $proveedor->close();
        return $RelacionexpedientejuzgadoDto;
    }

    public function updateRelacionexpedientejuzgado_bitacora($RelacionexpedientejuzgadoDto) {
        $RelacionexpedientejuzgadoDto = $this->validarRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto);
        $RelacionexpedientejuzgadoDao = new RelacionexpedientejuzgadoDAO();
        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");
        $RelacionexpedientejuzgadoDto = $RelacionexpedientejuzgadoDao->updateRelacionexpedientejuzgado($RelacionexpedientejuzgadoDto, $proveedor);
        if ($RelacionexpedientejuzgadoDto != "") {
            $bitacoraController = new BitacoramovimientosController();
            $accion = 303; //actualizacion
            if ($RelacionexpedientejuzgadoDto[0]->getActivo() == "N") {
                $accion = 304; //borrado logico
            }
            $bitac = $bitacoraController->agregar($accion, 'tblrelacionexpedientejuzgado', 'dto', $RelacionexpedientejuzgadoDto, null, $proveedor);
            if (($bitac == "") || ($bitac == null)) {
                $proveedor->execute("ROLLBACK");
                $proveedor->close();
                return "";
            }
            if ($accion == 304) {
                $IdPersonaAutorizadaPadre = $RelacionexpedientejuzgadoDto[0]->getIdPersonaAutorizada();
                $estado = $this->borrarAntecedesNotificaciones($IdPersonaAutorizadaPadre, $proveedor);
                if ($estado < 0) {
                    $proveedor->execute("ROLLBACK");
                    $proveedor->close();
                    return "";
                }
            }
        } else {
            $proveedor->execute("ROLLBACK");
            $proveedor->close();
            return "";
        }
        $proveedor->execute('COMMIT');
        $proveedor->close();
        return $RelacionexpedientejuzgadoDto;
    }

}

?>