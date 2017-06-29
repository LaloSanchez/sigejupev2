<?php

/**
 * Class: PeriodoGratisConsultasDAO - PeriodoGratisConsultasDAO.php 
 *
 * @author Esaud Israel <@e_israel> on Feb 9, 2016 12:12:25 PM
 * @version 1.0
 */

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/periodogratisconsultas/PeriodoGratisconsultasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");

class PeriodosGratisConsultasDAO {
    
    protected $_proveedor;
    
    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor($gestor, $bd);
    }
    
    public function _conexion(){
        $this->_proveedor->connect();
    }

    /**
     * SELECT
     * @param PeriodosGratisConsultasDTO $periodosGratisConsultasDTO
     * @param type $orden
     * @param type $proveedor
     * @return \periodoGratisConsultasDTO
     */
    public function selectPeriodosGratisConsultas($periodosGratisConsultasDTO, $orden = '', $proveedor = null){
        
        $tmp = array();
        $contador = 0;
        
        if ($proveedor == null) 
            $this->_conexion();
        else
            $this->_proveedor = $proveedor;

        $sql = 'SELECT idPeriodoGratisConsulta, detalle, inicioPeriodoGratis, finPeriodoGratis, activo, fechaActualizacion, fechaRegistro FROM tblperiodosgratisconsultas';
        
        if(
          ($periodosGratisConsultasDTO->getIdPeriodoGratisConsulta() != '') ||
          ($periodosGratisConsultasDTO->getDetalle() != '') ||
          ($periodosGratisConsultasDTO->getInicioPeriodoGratis() != '') ||
          ($periodosGratisConsultasDTO->getFinPeriodoGratis() != '') ||
          ($periodosGratisConsultasDTO->getActivo() != '') ||
          ($periodosGratisConsultasDTO->getFechaActualizacion() != '') || 
          ($periodosGratisConsultasDTO->getFechaRegistro() != '')
        )
        {
            $sql .= ' WHERE ';
        }
        
        if($periodosGratisConsultasDTO->getIdPeriodoGratisConsulta() != '')
        {
            $sql .= ' idPeriodoGratisConsulta = "'.$periodosGratisConsultasDTO->getIdPeriodoGratisConsulta().'"';
            if(
              ( $periodosGratisConsultasDTO->getDetalle() != '') ||
              ( $periodosGratisConsultasDTO->getInicioPeriodoGratis() != '') ||
              ( $periodosGratisConsultasDTO->getFinPeriodoGratis() != '') ||
              ( $periodosGratisConsultasDTO->getActivo() != '') ||
              ( $periodosGratisConsultasDTO->getFechaActualizacion() != '') ||
              ( $periodosGratisConsultasDTO->getFechaRegistro() != '' )
            )
            {
                $sql .= ' AND ';
            }
        }
        
        if($periodosGratisConsultasDTO->getDetalle() != '')
        {
            $sql .= ' detalle = "'.$periodosGratisConsultasDTO->getDetalle().'"';
            if(
              ( $periodosGratisConsultasDTO->getInicioPeriodoGratis() != '') ||
              ( $periodosGratisConsultasDTO->getFinPeriodoGratis() != '') ||
              ( $periodosGratisConsultasDTO->getActivo() != '') ||
              ( $periodosGratisConsultasDTO->getFechaActualizacion() != '') ||
              ( $periodosGratisConsultasDTO->getFechaRegistro() != '' )
            )
            {
                $sql .= ' AND ';
            }
        }
        
        if($periodosGratisConsultasDTO->getInicioPeriodoGratis() != '')
        {
            $sql .= ' inicioPeriodoGratis = "'.$periodosGratisConsultasDTO->getInicioPeriodoGratis().'"';
            if(
              ( $periodosGratisConsultasDTO->getFinPeriodoGratis() != '') ||
              ( $periodosGratisConsultasDTO->getActivo() != '') ||
              ( $periodosGratisConsultasDTO->getFechaActualizacion() != '') ||
              ( $periodosGratisConsultasDTO->getFechaRegistro() != '' )
            )
            {
                $sql .= ' AND ';
            }
        }
        
        if($periodosGratisConsultasDTO->getFinPeriodoGratis() != '')
        {
            $sql .= ' finPeriodoGratis = "'.$periodosGratisConsultasDTO->getFinPeriodoGratis().'"';
            if(
              ( $periodosGratisConsultasDTO->getActivo() != '') ||
              ( $periodosGratisConsultasDTO->getFechaActualizacion() != '') ||
              ( $periodosGratisConsultasDTO->getFechaRegistro() != '' )
            )
            {
                $sql .= ' AND ';
            }
        }
        
        if($periodosGratisConsultasDTO->getActivo() != '')
        {
            $sql .= ' activo = "'.$periodosGratisConsultasDTO->getActivo().'"';
            if(
              ( $periodosGratisConsultasDTO->getFechaActualizacion() != '') ||
              ( $periodosGratisConsultasDTO->getFechaRegistro() != '' )
            )
            {
                $sql .= ' AND ';
            }
        }
        
        if($periodosGratisConsultasDTO->getFechaActualizacion() != '')
        {
            $sql .= ' fechaActualizacion = "'.$periodosGratisConsultasDTO->getFechaActualizacion().'"';
            if(
              ( $periodosGratisConsultasDTO->getFechaRegistro() != '' )
            )
            {
                $sql .= ' AND ';
            }
        }
        
        if($periodosGratisConsultasDTO->getFechaRegistro() != '')
        {
            $sql .= ' fechaRegistro = "'.$periodosGratisConsultasDTO->getFechaRegistro().'"';
        }
        
        /** @todo los demás campos */
        
        $sql .= ($orden != '') ? $orden : '';
        $this->_proveedor->execute($sql);
        
        if ( !$this->_proveedor->error() ){
            if ( $this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new $periodosGratisConsultasDTO();
                    $tmp[$contador]->setIdPeriodoGratisConsulta($row["idPeriodoGratisConsulta"]);
                    $tmp[$contador]->setDetalle($row["detalle"]);
                    $tmp[$contador]->setInicioPeriodoGratis($row["inicioPeriodoGratis"]);
                    $tmp[$contador]->setFinPeriodoGratis($row["finPeriodoGratis"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $contador++;
                }
            } else {
                $error = true;
            }
        } else {
            $error = true;
        }
        
        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        
        unset($contador, $sql);
        return $tmp;
    } # cierra select

    
    /**
     * INSERT
     * @param type $periodosGratisConsultasDTO
     * @param type $proveedor
     * @return type
     */
    public function insertPeriodosGratisConsultas($periodosGratisConsultasDTO, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        
        if ($proveedor == null)
            $this->_conexion(null);
        else
            $this->_proveedor = $proveedor;

        $sql = "INSERT INTO tblperiodosgratisconsultas (";
        
        if($periodosGratisConsultasDTO->getIdPeriodoGratisConsulta() != '')
        {
            $sql .= ' idPeriodoGratisConsulta ';
            if(
              ( $periodosGratisConsultasDTO->getDetalle() != '') ||
              ( $periodosGratisConsultasDTO->getInicioPeriodoGratis() != '') ||
              ( $periodosGratisConsultasDTO->getFinPeriodoGratis() != '') ||
              ( $periodosGratisConsultasDTO->getActivo() != '') ||
              ( $periodosGratisConsultasDTO->getFechaActualizacion() != '') ||
              ( $periodosGratisConsultasDTO->getFechaRegistro() != '' )
            )
            {
                $sql .= ' , ';
            }
        }
        
        if($periodosGratisConsultasDTO->getDetalle() != '')
        {
            $sql .= ' detalle ';
            if(
              ( $periodosGratisConsultasDTO->getInicioPeriodoGratis() != '') ||
              ( $periodosGratisConsultasDTO->getFinPeriodoGratis() != '') ||
              ( $periodosGratisConsultasDTO->getActivo() != '') ||
              ( $periodosGratisConsultasDTO->getFechaActualizacion() != '') ||
              ( $periodosGratisConsultasDTO->getFechaRegistro() != '' )
            )
            {
                $sql .= ' , ';
            }
        }
        
        if($periodosGratisConsultasDTO->getInicioPeriodoGratis() != '')
        {
            $sql .= ' inicioPeriodoGratis ';
            if(
              ( $periodosGratisConsultasDTO->getFinPeriodoGratis() != '') ||
              ( $periodosGratisConsultasDTO->getActivo() != '') ||
              ( $periodosGratisConsultasDTO->getFechaActualizacion() != '') ||
              ( $periodosGratisConsultasDTO->getFechaRegistro() != '' )
            )
            {
                $sql .= ' , ';
            }
        }
        
        if($periodosGratisConsultasDTO->getFinPeriodoGratis() != '')
        {
            $sql .= ' finPeriodoGratis ';
            if(
              ( $periodosGratisConsultasDTO->getActivo() != '') ||
              ( $periodosGratisConsultasDTO->getFechaActualizacion() != '') ||
              ( $periodosGratisConsultasDTO->getFechaRegistro() != '' )
            )
            {
                $sql .= ' , ';
            }
        }
        
        if($periodosGratisConsultasDTO->getActivo() != '')
        {
            $sql .= ' activo ';
            if(
              ( $periodosGratisConsultasDTO->getFechaActualizacion() != '') ||
              ( $periodosGratisConsultasDTO->getFechaRegistro() != '' )
            )
            {
                $sql .= ' , ';
            }
        }
        
        if($periodosGratisConsultasDTO->getFechaActualizacion() != '')
        {
            $sql .= ' fechaActualizacion ';
            if(
              $periodosGratisConsultasDTO->getFechaRegistro() != ''
            )
            {
                $sql .= ' , ';
            }
        }
        
        if($periodosGratisConsultasDTO->getFechaRegistro() != '')
        {
            $sql .= ' fechaActualizacion ';
        }
        
        $sql.=")";
        $this->_proveedor->execute($sql);

        if (!$this->_proveedor->error()) {
            $tmp = new PeriodoGratisConsultasDTO();
            $tmp->setIdPeriodoGratisConsulta($this->_proveedor->lastID());
            $tmp = $this->selectPeriodosGratisConsultas($tmp, '', $this->_proveedor);
        } else {
            $error = true;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        unset($contador, $sql);
        return $tmp;
    }# cierra insert
    
    
    /**
     * UPDATE
     * @param type $periodosGratisConsultasDTO
     * @param type $proveedor
     * @return type
     */
    public function updatePeriodosGratisConsultas($periodosGratisConsultasDTO, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) 
            $this->_conexion(null);
        else if ($proveedor != null)
            $this->_proveedor = $proveedor;

        $sql = "UPDATE tblperiodosgratisconsultas SET ";
        
        if($periodosGratisConsultasDTO->getIdPeriodoGratisConsulta() != '')
        {
            $sql .= ' idPeriodoGratisConsulta = "'.$periodosGratisConsultasDTO->getIdPeriodoGratisConsulta().'"';
            if(
              ( $periodosGratisConsultasDTO->getDetalle() != '') ||
              ( $periodosGratisConsultasDTO->getInicioPeriodoGratis() != '') ||
              ( $periodosGratisConsultasDTO->getFinPeriodoGratis() != '') ||
              ( $periodosGratisConsultasDTO->getActivo() != '') ||
              ( $periodosGratisConsultasDTO->getFechaActualizacion() != '') ||
              ( $periodosGratisConsultasDTO->getFechaRegistro() != '' )
            )
            {
                $sql .= ' , ';
            }
        }
        
        if($periodosGratisConsultasDTO->getDetalle() != '')
        {
            $sql .= ' detalle = "'.$periodosGratisConsultasDTO->getDetalle().'"';
            if(
              ( $periodosGratisConsultasDTO->getInicioPeriodoGratis() != '') ||
              ( $periodosGratisConsultasDTO->getFinPeriodoGratis() != '') ||
              ( $periodosGratisConsultasDTO->getActivo() != '') ||
              ( $periodosGratisConsultasDTO->getFechaActualizacion() != '') ||
              ( $periodosGratisConsultasDTO->getFechaRegistro() != '' )
            )
            {
                $sql .= ' , ';
            }
        }
        
        if($periodosGratisConsultasDTO->getInicioPeriodoGratis() != '')
        {
            $sql .= ' inicioPeriodoGratis = "'.$periodosGratisConsultasDTO->getInicioPeriodoGratis().'"';
            if(
              ( $periodosGratisConsultasDTO->getFinPeriodoGratis() != '') ||
              ( $periodosGratisConsultasDTO->getActivo() != '') ||
              ( $periodosGratisConsultasDTO->getFechaActualizacion() != '') ||
              ( $periodosGratisConsultasDTO->getFechaRegistro() != '' )
            )
            {
                $sql .= ' , ';
            }
        }
        
        if($periodosGratisConsultasDTO->getFinPeriodoGratis() != '')
        {
            $sql .= ' finPeriodoGratis = "'.$periodosGratisConsultasDTO->getFinPeriodoGratis().'"';
            if(
              ( $periodosGratisConsultasDTO->getActivo() != '') ||
              ( $periodosGratisConsultasDTO->getFechaActualizacion() != '') ||
              ( $periodosGratisConsultasDTO->getFechaRegistro() != '' )
            )
            {
                $sql .= ' , ';
            }
        }
        
        if($periodosGratisConsultasDTO->getActivo() != '')
        {
            $sql .= ' activo = "'.$periodosGratisConsultasDTO->getActivo().'"';
            if(
              ( $periodosGratisConsultasDTO->getFechaActualizacion() != '') ||
              ( $periodosGratisConsultasDTO->getFechaRegistro() != '' )
            )
            {
                $sql .= ' , ';
            }
        }
        
        if($periodosGratisConsultasDTO->getFechaActualizacion() != '')
        {
            $sql .= ' fechaActualizacion = "'.$periodosGratisConsultasDTO->getFechaActualizacion().'"';
            if(
              ( $periodosGratisConsultasDTO->getFechaRegistro() != '' )
            )
            {
                $sql .= ' , ';
            }
        }
        
        if($periodosGratisConsultasDTO->getFechaRegistro() != '')
        {
            $sql .= ' fechaRegistro = "'.$periodosGratisConsultasDTO->getFechaRegistro().'"';
        }
        
        $sql .= " WHERE idPeriodoGratisConsulta = '" . $periodosGratisConsultasDTO->getIdPeriodosGratisConsultasDTO() . "'";
        
        $this->_proveedor->execute($sql);
        
        if (!$this->_proveedor->error()) {
            $tmp = new PeriodoGratisConsultasDTO();
            $tmp->setIdPeriodoGratisConsulta($this->_proveedor->lastID());
            $tmp = $this->selectPeriodosGratisConsultas($tmp, '', $this->_proveedor);
        } else {
            $error = true;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        unset($contador, $sql);
        return $tmp;
    }
    
    
    /**
     * DELETE
     * @param type $periodosGratisConsultasDTO
     * @param type $proveedor
     * @return boolean
     */
    public function deletePeriodosGratisConsultas($periodosGratisConsultasDTO, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null)
            $this->_conexion(null);
        else
            $this->_proveedor = $proveedor;

        $sql = "DELETE FROM tblperiodosgratisconsultas  WHERE idPeriodoGratisConsulta = '" . $periodosGratisConsultasDTO->getIdPeriodoGratisConsulta() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = true;
        } else {
            $tmp = false;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        unset($contador, $sql);
        return $tmp;
    }
    
}

?>