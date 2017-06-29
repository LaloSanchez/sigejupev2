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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiemposesperasolicitudes/TiemposesperasolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiemposesperasolicitudes/TiemposesperasolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

class TiemposesperasolicitudesController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarTiemposesperasolicitudes($TiemposesperasolicitudesDto) {
        $TiemposesperasolicitudesDto->setidTiempoEsperaSolicitud(strtoupper(str_ireplace("'", "", trim($TiemposesperasolicitudesDto->getidTiempoEsperaSolicitud()))));
        $TiemposesperasolicitudesDto->setmunitosEspera(strtoupper(str_ireplace("'", "", trim($TiemposesperasolicitudesDto->getmunitosEspera()))));
        $TiemposesperasolicitudesDto->setcveTipoSolicitud(strtoupper(str_ireplace("'", "", trim($TiemposesperasolicitudesDto->getcveTipoSolicitud()))));
        $TiemposesperasolicitudesDto->setactivo(strtoupper(str_ireplace("'", "", trim($TiemposesperasolicitudesDto->getactivo()))));
        $TiemposesperasolicitudesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($TiemposesperasolicitudesDto->getfechaRegistro()))));
        $TiemposesperasolicitudesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($TiemposesperasolicitudesDto->getfechaActualizacion()))));
        return $TiemposesperasolicitudesDto;
    }

    public function selectTiemposesperasolicitudes($TiemposesperasolicitudesDto, $proveedor = null) {
        $TiemposesperasolicitudesDto = $this->validarTiemposesperasolicitudes($TiemposesperasolicitudesDto);
        $TiemposesperasolicitudesDao = new TiemposesperasolicitudesDAO();
        $TiemposesperasolicitudesDto = $TiemposesperasolicitudesDao->selectTiemposesperasolicitudes($TiemposesperasolicitudesDto, $proveedor);
        return $TiemposesperasolicitudesDto;
    }

    public function insertTiemposesperasolicitudes($TiemposesperasolicitudesDto, $proveedor = null) {
        $TiemposesperasolicitudesDto = $this->validarTiemposesperasolicitudes($TiemposesperasolicitudesDto);
        if (($TiemposesperasolicitudesDto->getCveTipoSolicitud() != '') && ($TiemposesperasolicitudesDto->getMunitosEspera())) {
            $TiemposesperasolicitudesDao = new TiemposesperasolicitudesDAO();

            #Buscamos los Activos de Tipo de Solicitud
            $TiemposesperaSearchDto = new TiemposesperasolicitudesDTO();
            $TiemposesperaSearchDto->setActivo('S');
            $TiemposesperaSearchDto->setCveTipoSolicitud($TiemposesperasolicitudesDto->getCveTipoSolicitud());
            $TiemposesperaSearchDto = $TiemposesperasolicitudesDao->selectTiemposesperasolicitudes($TiemposesperaSearchDto);
            if ($TiemposesperaSearchDto != '') {
                foreach ($TiemposesperaSearchDto as $tiempoSearch) {
                    $updateTiempoSearchDto = new TiemposesperasolicitudesDTO();
                    $updateTiempoSearchDto->setActivo('N');
                    $updateTiempoSearchDto->setIdTiempoEsperaSolicitud($tiempoSearch->getIdTiempoEsperaSolicitud());
                    $TiemposesperasolicitudesDao->updateTiemposesperasolicitudes($updateTiempoSearchDto);
                }
            }

            $TiemposesperasolicitudesDto = $TiemposesperasolicitudesDao->insertTiemposesperasolicitudes($TiemposesperasolicitudesDto, $proveedor);
        } else {
            $TiemposesperasolicitudesDto = array();
            $TiemposesperasolicitudesDto['totalCount'] = 0;
        }
        return $TiemposesperasolicitudesDto;
    }

    public function updateTiemposesperasolicitudes($TiemposesperasolicitudesDto, $proveedor = null) {
        $TiemposesperasolicitudesDto = $this->validarTiemposesperasolicitudes($TiemposesperasolicitudesDto);
        $TiemposesperasolicitudesDao = new TiemposesperasolicitudesDAO();
        $TiemposesperasolicitudesDto = $TiemposesperasolicitudesDao->updateTiemposesperasolicitudes($TiemposesperasolicitudesDto, $proveedor);
        return $TiemposesperasolicitudesDto;
    }

    public function deleteTiemposesperasolicitudes($TiemposesperasolicitudesDto, $proveedor = null) {
        $TiemposesperasolicitudesDto = $this->validarTiemposesperasolicitudes($TiemposesperasolicitudesDto);
        $TiemposesperasolicitudesDao = new TiemposesperasolicitudesDAO();
        $TiemposesperasolicitudesDto = $TiemposesperasolicitudesDao->deleteTiemposesperasolicitudes($TiemposesperasolicitudesDto, $proveedor);
        return $TiemposesperasolicitudesDto;
    }

}

?>