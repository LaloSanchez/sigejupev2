<?php

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/procesosmediosnotificaciones/ProcesosmediosnotificacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class ProcesosmediosnotificacionesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function selectProcesosMedios($procesosMediosDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }

        $sql = "SELECT Activo,IdRutaControlador,FechaActualizacion,FechaRegistro,IdProcesoMedioNotificacion,IdProcesoNotificacion FROM tblprocesosmediosnotificaciones ";

        if ($procesosMediosDto->getActivo() != "" || $procesosMediosDto->getIdRutaControlador() != "" || $procesosMediosDto->getFechaActualizacion() != "" || $procesosMediosDto->getFechaRegistro() != "" || $procesosMediosDto->getIdProcesoMedioNotificacion() != "" || $procesosMediosDto->getIdProcesoNotificacion() != "") {
            $sql.=" WHERE ";
        }

        if ($procesosMediosDto->getActivo() != "") {
            $sql.="Activo='" . $procesosMediosDto->getActivo() . "'";
            if ($procesosMediosDto->getIdRutaControlador() != "" || $procesosMediosDto->getFechaActualizacion() != "" || $procesosMediosDto->getFechaRegistro() != "" || $procesosMediosDto->getIdProcesoMedioNotificacion() != "" || $procesosMediosDto->getIdProcesoNotificacion() != "") {
                $sql.=" AND ";
            }
        }

        if ($procesosMediosDto->getIdRutaControlador() != "") {
            $sql.="IdRutaControlador='" . $procesosMediosDto->getIdRutaControlador() . "'";
            if ($procesosMediosDto->getFechaActualizacion() != "" || $procesosMediosDto->getFechaRegistro() != "" || $procesosMediosDto->getIdProcesoMedioNotificacion() != "" || $procesosMediosDto->getIdProcesoNotificacion() != "") {
                $sql.=" AND ";
            }
        }

        if ($procesosMediosDto->getFechaActualizacion() != "") {
            $sql.="FechaActualizacion='" . $procesosMediosDto->getFechaActualizacion() . "'";
            if ($procesosMediosDto->getFechaRegistro() != "" || $procesosMediosDto->getIdProcesoMedioNotificacion() != "" || $procesosMediosDto->getIdProcesoNotificacion() != "") {
                $sql.=" AND ";
            }
        }

        if ($procesosMediosDto->getFechaRegistro() != "") {
            $sql.="FechaRegistro='" . $procesosMediosDto->getFechaRegistro() . "'";
            if ($procesosMediosDto->getIdProcesoMedioNotificacion() != "" || $procesosMediosDto->getIdProcesoNotificacion() != "") {
                $sql.=" AND ";
            }
        }

        if ($procesosMediosDto->getIdProcesoMedioNotificacion() != "") {
            $sql.="IdProcesoMedioNotificacion='" . $procesosMediosDto->getIdProcesoMedioNotificacion() . "'";
            if ($procesosMediosDto->getIdProcesoNotificacion() != "") {
                $sql.=" AND ";
            }
        }

        if ($procesosMediosDto->getIdProcesoNotificacion() != "") {
            $sql.="IdProcesoNotificacion='" . $procesosMediosDto->getIdProcesoNotificacion() . "'";
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
                    $tmp[$contador] = new ProcesosmediosnotificacionesDTO();
                    $tmp[$contador]->setActivo($row["Activo"]);
                    $tmp[$contador]->setIdRutaControlador($row["IdRutaControlador"]);
                    $tmp[$contador]->setFechaActualizacion($row["FechaActualizacion"]);
                    $tmp[$contador]->setFechaRegistro($row["FechaRegistro"]);
                    $tmp[$contador]->setIdProcesoMedioNotificacion($row["IdProcesoMedioNotificacion"]);
                    $tmp[$contador]->setIdProcesoNotificacion($row["IdProcesoNotificacion"]);
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

    public function insertProcesosMedios($procesosMedios, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }

        $sql = "INSERT INTO tblprocesosmediosnotificaciones(";
        if ($procesosMedios->getActivo() != "") {
            $sql .= "activo";
            if ($procesosMedios->getIdProcesoMedioNotificacion() != "" || $procesosMedios->getIdProcesoNotificacion() != "" || $procesosMedios->getIdRutaControlador() != "") {
                $sql .= ",";
            }
        }

        if ($procesosMedios->getIdProcesoMedioNotificacion() != "") {
            $sql .= "idProcesoMedioNotificacion";
            if ($procesosMedios->getIdProcesoNotificacion() != "" || $procesosMedios->getIdRutaControlador() != "") {
                $sql .= ",";
            }
        }

        if ($procesosMedios->getIdProcesoNotificacion() != "") {
            $sql .= "idProcesoNotificacion";
            if ($procesosMedios->getIdRutaControlador() != "") {
                $sql .= ",";
            }
        }

        if ($procesosMedios->getIdRutaControlador() != "") {
            $sql .= "idRutaControlador";
        }

        $sql .= ",fechaActualizacion";
        $sql .= ",fechaRegistro";
        $sql .= ")VALUES(";

        if ($procesosMedios->getActivo() != "") {
            $sql .= "'" . $procesosMedios->getActivo() . "'";
            if ($procesosMedios->getIdProcesoMedioNotificacion() != "" || $procesosMedios->getIdProcesoNotificacion() != "" || $procesosMedios->getIdRutaControlador() != "") {
                $sql .= ",";
            }
        }

        if ($procesosMedios->getIdProcesoMedioNotificacion() != "") {
            $sql .= "'" . $procesosMedios->getIdProcesoMedioNotificacion() . "'";
            if ($procesosMedios->getIdProcesoNotificacion() != "" || $procesosMedios->getIdRutaControlador() != "") {
                $sql .= ",";
            }
        }

        if ($procesosMedios->getIdProcesoNotificacion() != "") {
            $sql .= "'" . $procesosMedios->getIdProcesoNotificacion() . "'";
            if ($procesosMedios->getIdRutaControlador() != "") {
                $sql .= ",";
            }
        }

        if ($procesosMedios->getIdRutaControlador() != "") {
            $sql .= "'" . $procesosMedios->getIdRutaControlador() . "'";
        }

        $sql .= ",NOW()";
        $sql .= ",NOW()";
        $sql .= ")";

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ProcesosmediosnotificacionesDTO();
            $tmp->setIdProcesoMedioNotificacion($this->_proveedor->lastID());
            $tmp = $this->selectProcesosMedios($tmp, "", $this->_proveedor);
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

    public function updateProcesosMedios($procesosMedios, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }

        $sql = "UPDATE tblprocesosmediosnotificaciones SET ";

        if ($procesosMedios->getActivo() != "") {
            $sql .= "activo='" . $procesosMedios->getActivo() . "'";
            if ($procesosMedios->getFechaActualizacion() != "" || $procesosMedios->getFechaRegistro() != "" || $procesosMedios->getIdProcesoNotificacion() != "" || $procesosMedios->getIdRutaControlador() != "") {
                $sql .= ",";
            }
        }

        if ($procesosMedios->getFechaActualizacion() != "") {
            $sql .= "fechaActualizacion='" . $procesosMedios->getFechaActualizacion() . "'";
            if ($procesosMedios->getFechaRegistro() != "" || $procesosMedios->getIdProcesoNotificacion() != "" || $procesosMedios->getIdRutaControlador() != "") {
                $sql .= ",";
            }
        }

        if ($procesosMedios->getFechaRegistro() != "") {
            $sql .= "fechaRegistro='" . $procesosMedios->getFechaRegistro() . "'";
            if ($procesosMedios->getIdProcesoNotificacion() != "" || $procesosMedios->getIdRutaControlador() != "") {
                $sql .= ",";
            }
        }

        if ($procesosMedios->getIdProcesoNotificacion() != "") {
            $sql .= "idProcesoNotificacion='" . $procesosMedios->getIdProcesoNotificacion() . "'";
            if ($procesosMedios->getIdRutaControlador() != "") {
                $sql .= ",";
            }
        }

        if ($procesosMedios->getIdRutaControlador() != "") {
            $sql .= "idRutaControlador='" . $procesosMedios->getIdRutaControlador() . "'";
        }

        $sql .= " WHERE idProcesoMedioNotificacion='" . $procesosMedios->getIdProcesoMedioNotificacion() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ProcesosmediosnotificacionesDTO();
            $tmp->setIdProcesoMedioNotificacion($procesosMedios->getIdProcesoMedioNotificacion());
            $tmp = $this->selectProcesosMedios($tmp, "", $this->_proveedor);
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

    public function selectFechaHoraMySql($proveedor = null) {
        $tmp = "";
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "Select now() as FechaHora";

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp = $row["FechaHora"];
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

        unset($sql);
        return $tmp;
    }

}
