<?php

/**
 * Class: PeriodosGratisConsultasController - PeriodosGratisConsultasController.Class.php 
 *
 * @author Esaud Israel <@e_israel> on Feb 9, 2016 2:26:01 PM
 * @version 1.0
 */

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/periodosgratisconsultas/PeriodosGratisConsultasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/periodosgratisconsultas/PeriodosGratisConsultasDAO.Class.php");


class PeriodosGratisConsultasController {
    
    public function validarPeriodosGratisConsultas($periodosGratisConsultasDTO){
        $periodosGratisConsultasDTO = new PeriodosGratisConsultasDTO();
        $periodosGratisConsultasDTO->setIdPeriodoGratisConsulta(strtoupper(str_ireplace("'","",trim($periodosGratisConsultasDTO->getIdPeriodoGratisConsulta()))));
        $periodosGratisConsultasDTO->setDetalle(strtoupper(str_ireplace("'","",trim($periodosGratisConsultasDTO->getDetalle()))));
        $periodosGratisConsultasDTO->setInicioPeriodoGratis(strtoupper(str_ireplace("'","",trim($periodosGratisConsultasDTO->getInicioPeriodoGratis()))));
        $periodosGratisConsultasDTO->setFinPeriodoGratis(strtoupper(str_ireplace("'","",trim($periodosGratisConsultasDTO->getFinPeriodoGratis()))));
        $periodosGratisConsultasDTO->setActivo(strtoupper(str_ireplace("'","",trim($periodosGratisConsultasDTO->getActivo()))));
        $periodosGratisConsultasDTO->setFechaActualizacion(strtoupper(str_ireplace("'","",trim($periodosGratisConsultasDTO->getFechaActualizacion()))));
        $periodosGratisConsultasDTO->setFechaRegistro(strtoupper(str_ireplace("'","",trim($periodosGratisConsultasDTO->getFechaRegistro()))));
        return $periodosGratisConsultasDTO;
    }
    
    public function selectPeriodosGratisConsultas($periodosGratisConsultasDTO, $proveedor = null){
        $periodosGratisConsultasDTO = $this->validarPeriodosgratisConsultas($periodosGratisConsultasDTO);
        $periodosGratisConsultasDAO = new PeriodosGratisConsultasDAO();
        $periodosGratisConsultasDTO = $periodosGratisConsultasDAO->selectPeriodosGratisConsultas($periodosGratisConsultasDTO, $proveedor);
        return $periodosGratisConsultasDTO;
    }
    
    
    public function insertPeriodosGratisConsultas($periodosGratisConsultasDTO, $proveedor = null){
        $periodosGratisConsultasDTO = $this->validarPeriodosgratisConsultas($periodosGratisConsultasDTO);
        $periodosGratisConsultasDAO = new PeriodosGratisConsultasDAO();
        $periodosGratisConsultasDTO = $periodosGratisConsultasDAO->insertPeriodosGratisConsultas($periodosGratisConsultasDTO, $proveedor);
        return $periodosGratisConsultasDTO;
    }
    
    
    public function updatePeriodosGratisConsultas($periodosGratisConsultasDTO, $proveedor = null){
        $periodosGratisConsultasDTO = $this->validarPeriodosgratisConsultas($periodosGratisConsultasDTO);
        $periodosGratisConsultasDAO = new PeriodosGratisConsultasDAO();
        $periodosGratisConsultasDTO = $periodosGratisConsultasDAO->updatePeriodosGratisConsultas($periodosGratisConsultasDTO,$proveedor);
        return $periodosGratisConsultasDTO;
    }
    
    
    public function deletePeriodosGratisConsultas($periodosGratisConsultasDTO, $proveedor = null){
        $periodosGratisConsultasDTO = $this->validarPeriodosgratisConsultas($periodosGratisConsultasDTO);
        $periodosGratisConsultasDAO = new PeriodosGratisConsultasDAO();
        $periodosGratisConsultasDTO = $periodosGratisConsultasDAO->deletePeriodosGratisConsultas($periodosGratisConsultasDTO, $proveedor);
        return $periodosGratisConsultasDTO;
    }
    
    
}

?>