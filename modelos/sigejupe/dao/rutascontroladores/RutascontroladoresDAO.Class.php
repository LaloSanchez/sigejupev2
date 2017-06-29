<?php

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/rutascontroladores/RutascontroladoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class RutascontroladoresDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function selectRutasControladores($rutasDto, $orden = "", $proveedor = null) {
        $tmp = [];
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT IdRutaControlador,RutaControlador,CveMedioNotificacion,Activo,FechaRegistro,FechaActualizacion FROM tblrutascontroladores ";

        if (($rutasDto->getActivo() != "") || ($rutasDto->getCveMedioNotificacion() != "") || ($rutasDto->getFechaActualizacion() != "") || ($rutasDto->getFechaRegistro() != "") || ($rutasDto->getIdRutaControlador() != "") || ($rutasDto->getRutaControlador() != "")) {
            $sql .= " WHERE ";
        }

        if ($rutasDto->getActivo() != "") {
            $sql .= "Activo='" . $rutasDto->getActivo() . "'";
            if (($rutasDto->getCveMedioNotificacion() != "") || ($rutasDto->getFechaActualizacion() != "") || ($rutasDto->getFechaRegistro() != "") || ($rutasDto->getIdRutaControlador() != "") || ($rutasDto->getRutaControlador() != "")) {
                $sql .= " AND ";
            }
        }

        if ($rutasDto->getCveMedioNotificacion() != "") {
            $sql .= "CveMedioNotificacion='" . $rutasDto->getCveMedioNotificacion() . "'";
            if (($rutasDto->getFechaActualizacion() != "") || ($rutasDto->getFechaRegistro() != "") || ($rutasDto->getIdRutaControlador() != "") || ($rutasDto->getRutaControlador() != "")) {
                $sql .= " AND ";
            }
        }

        if ($rutasDto->getFechaActualizacion() != "") {
            $sql .= "FechaActualizacion='" . $rutasDto->getFechaActualizacion() . "'";
            if (($rutasDto->getFechaRegistro() != "") || ($rutasDto->getIdRutaControlador() != "") || ($rutasDto->getRutaControlador() != "")) {
                $sql .= " AND ";
            }
        }

        if ($rutasDto->getFechaRegistro() != "") {
            $sql .= "FechaRegistro='" . $rutasDto->getFechaRegistro() . "'";
            if (($rutasDto->getIdRutaControlador() != "") || ($rutasDto->getRutaControlador() != "")) {
                $sql .= " AND ";
            }
        }

        if ($rutasDto->getIdRutaControlador() != "") {
            $sql .= "IdRutaControlador='" . $rutasDto->getIdRutaControlador() . "'";
            if (($rutasDto->getRutaControlador() != "")) {
                $sql .= " AND ";
            }
        }

        if ($rutasDto->getRutaControlador() != "") {
            $sql .= "RutaControlador='" . $rutasDto->getRutaControlador() . "'";
        }

        if ($orden != "") {
            $sql .= $orden;
        } else {
            $sql .= "";
        }

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new RutascontroladoresDTO();
                    $tmp[$contador]->setIdRutaControlador($row["IdRutaControlador"]);
                    $tmp[$contador]->setRutaControlador($row["RutaControlador"]);
                    $tmp[$contador]->setCveMedioNotificacion($row["CveMedioNotificacion"]);
                    $tmp[$contador]->setActivo($row["Activo"]);
                    $tmp[$contador]->setFechaRegistro($row["FechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["FechaActualizacion"]);
                    $contador ++;
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

    public function insertRutasControladores($rutasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }

        $sql = "INSERT INTO tblrutascontroladores(";
        if ($rutasDto->getActivo() != "") {
            $sql .= "activo";
            if (($rutasDto->getCveMedioNotificacion() != "") || ($rutasDto->getIdRutaControlador() != "") || ($rutasDto->getRutaControlador() != "")) {
                $sql .= ",";
            }
        }

        if ($rutasDto->getCveMedioNotificacion() != "") {
            $sql .= "cveMedioNotificacion";
            if (($rutasDto->getIdRutaControlador() != "") || ($rutasDto->getRutaControlador() != "")) {
                $sql .= ",";
            }
        }

        if ($rutasDto->getIdRutaControlador() != "") {
            $sql .= "idRutaControlador";
            if (($rutasDto->getRutaControlador() != "")) {
                $sql .= ",";
            }
        }
        
        if ($rutasDto->getRutaControlador() != "") {
            $sql .= "rutaControlador";
        }

        $sql .= ",fechaActualizacion";
        $sql .= ",fechaRegistro";
        $sql .= ")VALUES(";

        if ($rutasDto->getActivo() != "") {
            $sql .= "'" . $rutasDto->getActivo() . "'";
            if (($rutasDto->getCveMedioNotificacion() != "") || ($rutasDto->getIdRutaControlador() != "") || ($rutasDto->getRutaControlador() != "")) {
                $sql .= ",";
            }
        }

        if ($rutasDto->getCveMedioNotificacion() != "") {
            $sql .= "'" . $rutasDto->getCveMedioNotificacion() . "'";
            if (($rutasDto->getIdRutaControlador() != "") || ($rutasDto->getRutaControlador() != "")) {
                $sql .= ",";
            }
        }
        
        if ($rutasDto->getIdRutaControlador() != "") {
            $sql .= "'" . $rutasDto->getIdRutaControlador() . "'";
            if (($rutasDto->getRutaControlador() != "")) {
                $sql .= ",";
            }
        }
        
        if ($rutasDto->getRutaControlador() != "") {
            $sql .= "'" . $rutasDto->getRutaControlador() . "'";
        }
        
        $sql .= ",NOW()";
        $sql .= ",NOW()";
        $sql .= ")";

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new RutascontroladoresDTO();
            $tmp->setIdRutaControlador($this->_proveedor->lastID());
            $tmp = $this->selectRutasControladores($tmp, "", $this->_proveedor);
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
