<?php

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/procesosnotificaciones/ProcesosnotificacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class ProcesosnotificacionesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function selectProcesosnotificaciones($procesosDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }

        $sql = "SELECT IdProcesoNotificacion,Tiempo,Activo,FechaActualizacion,FechaRegistro FROM tblprocesosnotificaciones ";

        if ($procesosDto->getActivo() != "" || $procesosDto->getFechaActualizacion() != "" || $procesosDto->getFechaRegistro() != "" || $procesosDto->getTiempo() != "" || $procesosDto->getIdProcesoNotificacion() != "") {
            $sql.=" WHERE ";
        }

        if ($procesosDto->getActivo() != "") {
            $sql.="Activo='" . $procesosDto->getActivo() . "'";
            if ($procesosDto->getFechaActualizacion() != "" || $procesosDto->getFechaRegistro() != "" || $procesosDto->getTiempo() != "" || $procesosDto->getIdProcesoNotificacion() != "") {
                $sql.=" AND ";
            }
        }

        if ($procesosDto->getFechaActualizacion() != "") {
            $sql.="FechaActualizacion='" . $procesosDto->getFechaActualizacion() . "'";
            if ($procesosDto->getFechaRegistro() != "" || $procesosDto->getTiempo() != "" || $procesosDto->getIdProcesoNotificacion() != "") {
                $sql.=" AND ";
            }
        }

        if ($procesosDto->getFechaRegistro() != "") {
            $sql.="FechaRegistro='" . $procesosDto->getFechaRegistro() . "'";
            if ($procesosDto->getTiempo() != "" || $procesosDto->getIdProcesoNotificacion() != "") {
                $sql.=" AND ";
            }
        }

        if ($procesosDto->getTiempo() != "") {
            $sql.="Tiempo='" . $procesosDto->getTiempo() . "'";
            if ($procesosDto->getIdProcesoNotificacion() != "") {
                $sql.=" AND ";
            }
        }

        if ($procesosDto->getIdProcesoNotificacion() != "") {
            $sql.="IdProcesoNotificacion='" . $procesosDto->getIdProcesoNotificacion() . "'";
        }

        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new ProcesosnotificacionesDTO();
                    $tmp[$contador]->setIdProcesoNotificacion($row["IdProcesoNotificacion"]);
                    $tmp[$contador]->setTiempo($row["Tiempo"]);
                    $tmp[$contador]->setActivo($row["Activo"]);
                    $tmp[$contador]->setFechaActualizacion($row["FechaActualizacion"]);
                    $tmp[$contador]->setFechaRegistro($row["FechaRegistro"]);
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
        unset($contador);
        unset($sql);
        return $tmp;
    }

    public function insertProcesosnotificaciones($procesosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }

        $sql = "INSERT INTO tblprocesosnotificaciones(";
        if ($procesosDto->getActivo() != "") {
            $sql .= "activo";
            if ($procesosDto->getTiempo() != "" || $procesosDto->getIdProcesoNotificacion() != "") {
                $sql .= ",";
            }
        }

        if ($procesosDto->getTiempo() != "") {
            $sql .= "tiempo";
           if ($procesosDto->getIdProcesoNotificacion() != "") {
                $sql .= ",";
            }
        }

        if ($procesosDto->getIdProcesoNotificacion() != "") {
            $sql .= "idProcesoNotificacion";
        }

        $sql .= ",fechaActualizacion";
        $sql .= ",fechaRegistro";
        $sql .= ")VALUES(";

        if ($procesosDto->getActivo() != "") {
            $sql .= "'" . $procesosDto->getActivo() . "'";
            if ($procesosDto->getTiempo() != "" || $procesosDto->getIdProcesoNotificacion() != "") {
                $sql .= ",";
            }
        }

        if ($procesosDto->getTiempo() != "") {
            $sql .= "'" . $procesosDto->getTiempo() . "'";
            if ($procesosDto->getIdProcesoNotificacion() != "") {
                $sql .= ",";
            }
        }

        if ($procesosDto->getIdProcesoNotificacion() != "") {
            $sql .= "'" . $procesosDto->getIdProcesoNotificacion() . "'";
        }
        
        $sql .= ",NOW()";
        $sql .= ",NOW()";
        $sql .= ")";

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ProcesosnotificacionesDTO();
            $tmp->setIdProcesoNotificacion($this->_proveedor->lastID());
            $tmp = $this->selectProcesosnotificaciones($tmp, "", $this->_proveedor);
        } else {
            $error = true;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        unset($contador);
        unset($sql);
        return $tmp;
    }

}
